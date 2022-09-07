<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Schedule</title>
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
<script>$(function(){$("table").basictablesorter()});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamSchedulePro_COL"><a id="Avalanche">Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Avalanche">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Avalanche">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Avalanche">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Avalanche">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Avalanche">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Avalanche">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Avalanche">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Avalanche">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Avalanche">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Avalanche">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Avalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Avalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Avalanche" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>7</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-7.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>22</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-22.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>49</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-49.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>64</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-64.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>84</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-84.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>95</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-95.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>110</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-110.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>122</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>20</td><td>131</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>160</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>163</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>190</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>198</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>204</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>227</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>241</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>254</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>280</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>288</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>46</td><td>313</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>320</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>341</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>350</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>380</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>59</td><td>396</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>405</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>64</td><td>437</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>443</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>452</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>69</td><td>468</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>71</td><td>484</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>73</td><td>499</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>76</td><td>523</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>78</td><td>535</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>542</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>556</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>580</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>585</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>594</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>618</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>631</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>648</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>97</td><td>661</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>670</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>101</td><td>690</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>717</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>729</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>744</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>111</td><td>759</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>802</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>814</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>835</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>844</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>131</td><td>857</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>868</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>882</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>898</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>917</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>929</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>941</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>949</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>148</td><td>981</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>995</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1004</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>153</td><td>1017</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>155</td><td>1030</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1047</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1064</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>160</td><td>1068</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>162</td><td>1080</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1095</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1111</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1124</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1143</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1156</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1172</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1187</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>178</td><td>1204</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1217</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1231</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1245</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1261</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Blackhawks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Blackhawks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Blackhawks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Blackhawks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Blackhawks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Blackhawks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Blackhawks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Blackhawks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Blackhawks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Blackhawks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Blackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blackhawks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>16</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-16.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>48</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-48.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>63</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-63.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>80</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-80.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>108</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-108.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>125</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>136</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>147</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>162</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>170</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>184</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>211</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>33</td><td>218</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>231</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>240</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>258</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>265</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>43</td><td>285</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>307</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>47</td><td>314</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>321</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>337</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>351</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>56</td><td>374</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>396</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>405</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>421</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>438</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>449</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>463</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>482</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>488</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>513</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>75</td><td>515</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>78</td><td>535</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>547</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>556</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>570</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>584</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>605</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>617</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>636</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>655</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>98</td><td>665</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>681</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>695</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>720</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>106</td><td>725</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>753</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>110</td><td>756</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>763</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>792</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>817</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>127</td><td>825</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>131</td><td>859</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>870</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>134</td><td>879</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>897</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>914</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>928</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>944</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>961</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>978</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>992</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1001</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1019</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1034</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1045</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>159</td><td>1061</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>162</td><td>1079</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1094</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1108</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1126</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1139</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1153</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1165</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1186</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1199</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1216</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1230</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1248</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1267</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#BlueJackets">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#BlueJackets">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#BlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#BlueJackets">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#BlueJackets">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#BlueJackets">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#BlueJackets">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#BlueJackets">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#BlueJackets">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#BlueJackets">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#BlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BlueJackets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>13</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-13.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>27</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-27.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>34</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>7</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-34.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>60</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-60.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>62</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-62.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>93</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-93.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>108</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-108.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>114</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>20</td><td>132</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>145</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>167</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>189</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>202</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>208</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>225</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>237</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>254</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>275</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>45</td><td>294</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>319</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>336</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>53</td><td>360</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>366</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>379</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>395</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>412</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>425</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>440</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>457</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>69</td><td>471</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>494</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>510</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>76</td><td>519</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>526</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>79</td><td>540</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>555</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>574</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>592</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>605</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>616</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>628</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>644</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>97</td><td>659</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>663</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>685</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>701</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>716</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>728</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>743</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>110</td><td>757</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>113</td><td>766</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>793</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>124</td><td>807</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>815</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>129</td><td>839</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>130</td><td>844</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>132</td><td>860</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>881</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>136</td><td>892</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>908</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>923</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>933</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>951</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>146</td><td>967</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>973</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>996</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1012</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>155</td><td>1029</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1051</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1065</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1084</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1101</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>167</td><td>1119</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1138</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1162</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1173</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1180</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1202</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1208</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>181</td><td>1225</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1243</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>185</td><td>1256</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_STL"><a id="Blues">Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Blues">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Blues">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Blues">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Blues">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Blues">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Blues">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Blues">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Blues">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Blues">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Blues">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Blues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blues" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-2.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>28</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-28.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>35</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-35.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>54</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-54.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>69</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-69.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>82</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-82.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>104</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-104.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>121</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>20</td><td>131</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>154</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>161</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>171</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>193</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>202</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>212</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>233</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>36</td><td>235</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>253</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>278</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>45</td><td>294</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>311</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>329</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>344</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>357</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>369</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>388</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>397</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>413</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>421</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>64</td><td>436</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>460</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>473</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>496</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>513</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>76</td><td>523</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>78</td><td>537</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>561</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>571</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>591</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>610</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>613</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>631</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>652</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>671</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>686</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>700</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>104</td><td>712</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>106</td><td>726</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>744</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>773</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>119</td><td>775</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>787</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>805</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>821</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>837</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>849</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>866</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>890</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>903</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>909</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>925</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>937</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>945</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>964</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>978</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>991</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1008</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1023</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1046</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1061</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1076</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1097</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1115</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1128</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1137</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1157</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1184</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1201</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1222</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1236</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1252</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1261</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_BOS"><a id="Bruins">Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Bruins">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Bruins">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Bruins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Bruins">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Bruins">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Bruins">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Bruins">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Bruins">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Bruins">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Bruins">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Bruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>8</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>5</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-8.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>19</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-19.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>42</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-42.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>49</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-49.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>61</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-61.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>78</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>5</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-78.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>99</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-99.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>123</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>133</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>161</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>174</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>180</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>205</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>34</td><td>220</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>228</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>38</td><td>249</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>264</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>273</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>45</td><td>297</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>300</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>325</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>334</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>348</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>56</td><td>375</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>57</td><td>385</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>392</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>61</td><td>416</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>63</td><td>424</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>438</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>452</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>69</td><td>469</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>71</td><td>486</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>497</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>505</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>77</td><td>524</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>539</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>552</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>569</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>583</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>604</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>623</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>628</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>642</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>669</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>679</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>696</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>104</td><td>711</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>716</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>727</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>110</td><td>758</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>761</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>791</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>797</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>813</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>127</td><td>825</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>843</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>131</td><td>856</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>134</td><td>877</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>137</td><td>896</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>910</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>931</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>943</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>957</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>970</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>984</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1005</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1026</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1035</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>158</td><td>1049</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1075</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1093</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1099</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>167</td><td>1119</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1132</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1141</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1161</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1176</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1191</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1206</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>182</td><td>1228</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1252</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1258</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_MTL"><a id="Canadiens">Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Canadiens">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Canadiens">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Canadiens">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Canadiens">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Canadiens">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Canadiens">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Canadiens">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Canadiens">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Canadiens">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Canadiens">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Canadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canadiens" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>6</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-6.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>29</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td>R3<td><a href="OTHL-29.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>44</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-44.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>51</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-51.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>69</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-69.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>87</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-87.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>102</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-102.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>121</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>19</td><td>126</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>150</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>166</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>29</td><td>188</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>30</td><td>195</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>209</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>228</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>37</td><td>245</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>255</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>275</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>45</td><td>298</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>306</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>319</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>50</td><td>331</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>53</td><td>353</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>56</td><td>375</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>58</td><td>390</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>410</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>61</td><td>416</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>63</td><td>427</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>443</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>450</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>480</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>71</td><td>485</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>74</td><td>507</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>532</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>541</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>557</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>581</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>598</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>607</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>615</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>632</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>647</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>97</td><td>660</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>666</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>683</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>697</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>104</td><td>709</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>106</td><td>725</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>736</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>748</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>769</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>121</td><td>783</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>798</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>124</td><td>807</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>818</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>833</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>847</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>132</td><td>861</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>134</td><td>877</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>136</td><td>893</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>901</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>920</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>940</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>953</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>147</td><td>974</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>987</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1003</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1022</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1042</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1052</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1073</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1088</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1109</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1125</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1144</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1156</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1178</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1195</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1211</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1230</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>183</td><td>1240</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1270</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_VAN"><a id="Canucks">Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Canucks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Canucks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Canucks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Canucks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Canucks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Canucks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Canucks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Canucks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Canucks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Canucks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Canucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-1.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>21</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>2</td><td>W</td><td></td><td></td><td>R3<td><a href="OTHL-21.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>46</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-46.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>73</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-73.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>89</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-89.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>104</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-104.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>116</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>19</td><td>127</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>137</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>159</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>27</td><td>178</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>191</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>196</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>216</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>233</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>240</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>38</td><td>251</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>268</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>279</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>293</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>313</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>322</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>342</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>361</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>371</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>386</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>407</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>61</td><td>418</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>432</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>462</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>481</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>498</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>512</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>75</td><td>517</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>532</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>546</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>563</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>579</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>600</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>606</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>93</td><td>636</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>651</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>672</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>682</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>692</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>706</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>724</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>738</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>754</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>773</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>780</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>801</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>124</td><td>806</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>813</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>832</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>851</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>132</td><td>864</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>134</td><td>879</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>913</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>932</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>957</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>974</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>989</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1010</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1012</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>155</td><td>1031</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1047</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1065</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1078</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1083</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1095</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1117</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1136</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1146</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1158</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1175</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1189</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1203</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>179</td><td>1215</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>181</td><td>1226</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1242</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1271</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_WSH"><a id="Capitals">Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Capitals">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Capitals">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Capitals">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Capitals">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Capitals">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Capitals">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Capitals">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Capitals">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Capitals">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Capitals">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Capitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Capitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Capitals" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-2.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>15</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-15.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>30</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-30.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>43</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-43.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>53</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-53.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>65</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-65.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>84</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-84.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>97</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-97.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>112</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-112.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>125</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>135</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>149</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>159</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>187</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>203</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>33</td><td>219</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>242</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>262</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>41</td><td>271</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>43</td><td>284</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>45</td><td>298</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>300</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>48</td><td>317</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>50</td><td>332</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>361</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>389</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>402</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>406</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>431</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>64</td><td>435</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>447</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>69</td><td>471</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>71</td><td>486</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>514</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>76</td><td>519</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>80</td><td>550</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>564</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>569</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>592</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>593</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>625</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>94</td><td>639</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>658</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>674</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>99</td><td>676</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>702</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>104</td><td>713</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>739</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>750</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>769</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>781</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>789</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>124</td><td>808</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>824</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>854</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>132</td><td>865</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>882</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>895</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>919</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>940</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>950</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>966</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>980</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>993</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1014</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>155</td><td>1032</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1038</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1057</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>160</td><td>1066</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1092</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1108</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>167</td><td>1122</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1138</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1152</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1169</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1184</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1198</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1209</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>181</td><td>1224</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1238</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1254</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1263</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_ARI"><a id="Coyotes">Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Coyotes">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Coyotes">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Coyotes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Coyotes">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Coyotes">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Coyotes">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Coyotes">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Coyotes">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Coyotes">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Coyotes">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Coyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Coyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Coyotes" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-5.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>19</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-19.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>47</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-47.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>64</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-64.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>91</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-91.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>98</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-98.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>113</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>141</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>152</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>156</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>27</td><td>177</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>188</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>204</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>34</td><td>222</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>226</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>237</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>252</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>41</td><td>271</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>278</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>291</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>299</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>48</td><td>316</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>333</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>352</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>54</td><td>362</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>377</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>401</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>403</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>425</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>445</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>451</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>463</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>472</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>488</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>502</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>529</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>538</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>82</td><td>566</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>573</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>601</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>603</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>613</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>627</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>641</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>667</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>687</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>101</td><td>689</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>703</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>714</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>738</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>746</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>776</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>121</td><td>782</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>792</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>812</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>827</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>843</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>132</td><td>861</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>875</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>887</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>895</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>915</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>930</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>937</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>948</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>969</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>999</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>155</td><td>1031</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1044</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>160</td><td>1069</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1083</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1098</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>167</td><td>1118</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1133</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1147</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1167</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1190</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1205</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1221</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1231</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1242</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1257</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NJD"><a id="Devils">Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Devils">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Devils">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Devils">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Devils">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Devils">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Devils">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Devils">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Devils">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Devils">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Devils">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Devils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Devils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Devils" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>14</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-14.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>20</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-20.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>45</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-45.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>52</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-52.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>61</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-61.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>81</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-81.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>103</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-103.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>116</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>156</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>192</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>199</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>207</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>234</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>239</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>38</td><td>250</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>268</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>43</td><td>282</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>45</td><td>295</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>306</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>325</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>52</td><td>347</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>354</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>56</td><td>376</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>58</td><td>390</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>411</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>420</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>428</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>449</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>458</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>474</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>73</td><td>499</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>502</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>78</td><td>536</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>80</td><td>550</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>555</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>570</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>587</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>609</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>623</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>633</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>648</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>668</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>684</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>702</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>707</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>723</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>739</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>743</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>771</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>121</td><td>784</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>799</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>818</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>836</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>848</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>872</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>885</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>136</td><td>891</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>908</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>925</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>935</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>950</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>972</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>990</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1002</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1011</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1027</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1046</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1055</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1074</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1089</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1104</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1116</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1129</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1142</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1159</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1173</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1194</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1212</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1219</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1235</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1247</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1266</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_ANH"><a id="Ducks">Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Ducks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Ducks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Ducks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Ducks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Ducks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Ducks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Ducks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Ducks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Ducks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Ducks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Ducks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Ducks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Ducks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-5.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>18</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td>W</td><td></td><td></td><td>R3<td><a href="OTHL-18.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>37</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>6</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-37.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>55</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-55.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>60</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-60.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>78</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>5</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-78.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>92</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-92.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>107</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-107.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>124</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>140</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>148</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>163</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>176</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>179</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>196</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>33</td><td>218</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>224</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>263</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>272</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>286</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>46</td><td>311</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>48</td><td>317</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>339</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>358</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>365</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>377</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>391</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>419</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>447</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>467</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>478</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>487</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>501</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>528</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>78</td><td>536</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>559</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>82</td><td>567</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>582</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>602</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>624</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>627</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>653</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>663</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>678</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>695</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>104</td><td>712</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>733</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>108</td><td>740</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>772</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>120</td><td>776</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>785</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>796</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>820</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>833</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>129</td><td>842</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>131</td><td>855</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>866</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>880</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>913</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>916</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>927</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>941</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>959</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>968</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>994</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1011</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1019</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>155</td><td>1030</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1043</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1059</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1070</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1105</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1109</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1132</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1146</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1171</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1185</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1215</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1218</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>183</td><td>1239</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>185</td><td>1255</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1269</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CGY"><a id="Flames">Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Flames">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Flames">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Flames">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Flames">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Flames">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Flames">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Flames">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Flames">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Flames">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Flames">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Flames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flames" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>7</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-7.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>21</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>2</td><td>L</td><td></td><td></td><td>R3<td><a href="OTHL-21.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>36</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-36.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>50</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-50.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>74</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-74.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>76</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-76.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>85</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-85.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>100</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-100.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>115</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>19</td><td>124</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>135</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>146</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>169</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>28</td><td>181</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>30</td><td>194</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>208</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>33</td><td>219</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>226</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>239</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>253</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>43</td><td>281</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>299</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>47</td><td>315</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>320</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>344</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>355</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>372</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>378</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>404</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>441</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>454</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>69</td><td>468</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>472</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>490</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>503</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>525</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>541</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>82</td><td>565</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>572</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>87</td><td>586</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>89</td><td>606</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>91</td><td>617</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>630</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>656</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>98</td><td>665</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>680</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>102</td><td>694</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>104</td><td>709</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>737</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>751</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>119</td><td>775</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>778</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>123</td><td>794</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>126</td><td>816</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>829</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>851</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>132</td><td>863</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>134</td><td>878</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>880</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>897</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>916</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>943</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>962</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>970</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>988</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1009</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1013</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>155</td><td>1029</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1044</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1060</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1085</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1102</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>167</td><td>1121</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1127</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1142</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1155</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1170</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1185</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1203</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>182</td><td>1229</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>184</td><td>1244</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1260</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_PHL"><a id="Flyers">Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Flyers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Flyers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Flyers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Flyers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Flyers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Flyers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Flyers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Flyers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Flyers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Flyers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Flyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flyers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>16</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-16.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>45</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-45.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>73</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-73.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>85</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-85.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>94</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-94.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>118</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>20</td><td>130</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>147</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>167</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>173</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>186</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>199</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>214</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>230</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>245</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>261</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>264</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>43</td><td>284</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>45</td><td>296</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>308</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>324</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>335</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>355</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>371</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>379</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>399</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>410</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>430</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>445</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>459</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>71</td><td>484</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>506</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>75</td><td>518</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>528</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>544</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>560</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>576</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>597</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>602</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>621</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>637</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>641</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>664</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>99</td><td>676</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>698</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>104</td><td>711</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>106</td><td>726</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>736</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>752</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>765</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>790</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>802</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>125</td><td>809</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>836</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>854</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>132</td><td>862</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>873</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>883</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>904</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>923</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>933</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>954</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>977</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>997</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1015</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>155</td><td>1032</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1040</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1056</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1075</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1090</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1106</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1113</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1128</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1148</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1160</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1182</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1193</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1212</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1220</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>183</td><td>1241</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1249</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1259</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#GoldenKnights">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#GoldenKnights">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#GoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#GoldenKnights">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#GoldenKnights">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#GoldenKnights">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#GoldenKnights">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#GoldenKnights">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#GoldenKnights">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#GoldenKnights">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#GoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GoldenKnights" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-4.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>17</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-17.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>42</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-42.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>47</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-47.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>74</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-74.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>75</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-75.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>90</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-90.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>105</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-105.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>119</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>20</td><td>130</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>136</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>160</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>176</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>30</td><td>195</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>217</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>225</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>247</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>262</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>266</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>43</td><td>285</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>304</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>47</td><td>315</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>330</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>345</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>359</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>367</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>383</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>401</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>423</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>428</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>444</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>466</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>482</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>496</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>73</td><td>500</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>75</td><td>517</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>533</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>546</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>82</td><td>568</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>580</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>582</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>601</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>624</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>637</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>652</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>673</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>688</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>701</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>715</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>735</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>748</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>761</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>786</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>800</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>822</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>831</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>852</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>871</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>890</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>905</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>919</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>939</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>958</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>959</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>148</td><td>983</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>998</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1016</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1027</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1048</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1060</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>160</td><td>1067</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1087</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1111</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1130</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1133</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1163</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1175</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1190</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1223</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1232</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1244</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1271</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Hurricanes">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Hurricanes">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Hurricanes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Hurricanes">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Hurricanes">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Hurricanes">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Hurricanes">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Hurricanes">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Hurricanes">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Hurricanes">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Hurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Hurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Hurricanes" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>6</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-6.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>30</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-30.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>31</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-31.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>38</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-38.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>59</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-59.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>62</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-62.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>86</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-86.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>96</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-96.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>107</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-107.html">Game Direct Link</a></td></tr>
<tr><td>23</td><td>145</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>162</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>181</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>197</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>207</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>230</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>238</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>257</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>41</td><td>270</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>287</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>305</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>321</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>335</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>349</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>54</td><td>363</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>384</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>394</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>414</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>424</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>439</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>453</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>475</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>498</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>503</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>534</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>542</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>554</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>578</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>589</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>593</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>615</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>94</td><td>639</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>654</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>664</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>101</td><td>689</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>693</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>104</td><td>713</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>728</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>108</td><td>740</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>110</td><td>755</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>762</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>786</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>124</td><td>806</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>821</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>827</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>852</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>869</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>136</td><td>891</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>907</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>921</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>942</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>956</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>971</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>995</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1003</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1040</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1054</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1063</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1072</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1089</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1100</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1110</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1123</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1137</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1154</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1168</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1183</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1192</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1207</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1219</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1228</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>185</td><td>1256</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1258</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NYI"><a id="Islanders">Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Islanders">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Islanders">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Islanders">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Islanders">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Islanders">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Islanders">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Islanders">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Islanders">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Islanders">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Islanders">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Islanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Islanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Islanders" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>3</td><td>15</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-15.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>33</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-33.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>40</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-40.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>59</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-59.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>70</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>W</td><td></td><td>*</td><td>R3<td><a href="OTHL-70.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>82</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-82.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>106</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-106.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>114</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>152</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>157</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>173</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>200</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>206</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>229</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>243</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>256</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>43</td><td>283</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>308</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>327</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>343</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>356</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>365</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>382</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>412</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>422</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>427</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>444</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>455</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>69</td><td>470</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>492</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>74</td><td>509</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>527</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>539</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>559</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>574</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>584</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>608</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>625</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>633</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>650</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>97</td><td>661</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>668</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>696</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>104</td><td>710</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>105</td><td>719</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>734</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>109</td><td>750</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>110</td><td>755</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>764</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>123</td><td>801</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>819</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>834</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>850</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>132</td><td>865</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>873</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>886</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>905</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>915</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>929</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>947</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>965</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>976</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>149</td><td>991</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1005</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1022</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1039</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1054</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1078</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1085</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1096</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1114</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1127</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1145</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1159</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1168</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1182</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1197</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1211</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>181</td><td>1225</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1234</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1248</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1266</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_WPG"><a id="Jets">Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Jets">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Jets">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Jets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Jets">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Jets">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Jets">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Jets">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Jets">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Jets">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Jets">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Jets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Jets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Jets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>10</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-10.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>14</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-14.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>33</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-33.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>41</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-41.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>57</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-57.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>63</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-63.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>77</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-77.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>91</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-91.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>106</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-106.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>128</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>142</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>169</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>28</td><td>179</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>201</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>217</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>234</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>38</td><td>251</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>269</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>280</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>289</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>46</td><td>312</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>326</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>338</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>360</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>387</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>391</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>409</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>433</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>442</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>467</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>483</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>491</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>75</td><td>518</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>534</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>547</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>558</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>581</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>591</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>610</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>618</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>638</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>646</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>97</td><td>660</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>99</td><td>677</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>679</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>708</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>724</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>108</td><td>742</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>110</td><td>756</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>762</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>113</td><td>766</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>791</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>805</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>823</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>837</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>853</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>131</td><td>859</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>876</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>136</td><td>894</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>914</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>926</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>936</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>954</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>960</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>980</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>993</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1000</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1028</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1048</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>160</td><td>1069</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>162</td><td>1081</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1102</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>166</td><td>1117</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1131</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>171</td><td>1151</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1166</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1179</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1204</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1223</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1229</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>184</td><td>1245</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1257</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_LAK"><a id="Kings">Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Kings">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Kings">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Kings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Kings">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Kings">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Kings">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Kings">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Kings">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Kings">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Kings">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Kings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kings" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>4</td><td>23</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-23.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>36</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-36.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>46</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-46.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>67</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-67.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>75</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-75.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>86</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-86.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>101</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-101.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>115</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>142</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>154</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>165</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>26</td><td>170</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>191</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>211</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>232</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>244</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>255</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>274</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>44</td><td>290</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>304</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>48</td><td>316</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>340</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>352</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>368</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>57</td><td>382</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>400</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>60</td><td>409</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>419</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>64</td><td>435</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>448</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>454</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>477</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>487</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>511</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>75</td><td>516</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>524</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>540</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>553</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>571</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>590</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>88</td><td>600</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>621</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>645</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>97</td><td>659</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>99</td><td>675</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>688</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>693</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>722</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>731</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>752</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>779</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>121</td><td>782</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>796</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>824</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>834</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>848</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>131</td><td>858</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>134</td><td>878</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>898</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>926</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>934</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>949</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>963</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>148</td><td>982</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1002</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1016</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1036</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1053</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>160</td><td>1068</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>162</td><td>1082</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1105</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1125</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1141</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1158</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1167</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1177</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1196</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1201</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1216</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1233</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>185</td><td>1255</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1264</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_TBL"><a id="Lightning">Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Lightning">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Lightning">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Lightning">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Lightning">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Lightning">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Lightning">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Lightning">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Lightning">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Lightning">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Lightning">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Lightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Lightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Lightning" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>12</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>6</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-12.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>24</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-24.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>31</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-31.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>56</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-56.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>72</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-72.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>87</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-87.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>99</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-99.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>122</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>22</td><td>144</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>168</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>185</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>192</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>200</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>38</td><td>248</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>260</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>292</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>312</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>329</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>337</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>358</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>373</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>388</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>402</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>414</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>429</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>446</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>461</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>69</td><td>470</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>476</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>497</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>514</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>530</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>545</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>564</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>577</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>598</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>611</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>614</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>632</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>649</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>654</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>672</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>687</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>698</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>707</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>722</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>732</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>108</td><td>742</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>768</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>779</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>785</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>803</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>822</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>838</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>850</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>132</td><td>860</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>874</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>888</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>904</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>917</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>939</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>948</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>979</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>992</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1009</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1026</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1042</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1049</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1062</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1077</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1090</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1107</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1116</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1136</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1149</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1155</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1188</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1202</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1214</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1237</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1243</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1262</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#MapleLeafs">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#MapleLeafs">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#MapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#MapleLeafs">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#MapleLeafs">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#MapleLeafs">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#MapleLeafs">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#MapleLeafs">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#MapleLeafs">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#MapleLeafs">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#MapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MapleLeafs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td>R3<td><a href="OTHL-3.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>13</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-13.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>29</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td>R3<td><a href="OTHL-29.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>35</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-35.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>56</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-56.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>66</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-66.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>88</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>6</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-88.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>97</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-97.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>123</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>20</td><td>132</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>133</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>158</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>166</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>28</td><td>187</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>214</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>232</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>247</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>261</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>265</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>43</td><td>283</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>45</td><td>297</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>309</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>330</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>333</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>350</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>381</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>393</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>415</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>430</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>64</td><td>437</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>460</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>481</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>490</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>504</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>531</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>80</td><td>551</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>562</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>578</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>587</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>599</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>622</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>638</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>650</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>97</td><td>662</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>99</td><td>677</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>705</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>723</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>737</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>753</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>770</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>777</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>804</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>125</td><td>811</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>127</td><td>826</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>129</td><td>842</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>847</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>133</td><td>875</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>889</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>902</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>138</td><td>906</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>924</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>938</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>956</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>979</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>986</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1010</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1025</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1036</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1043</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1077</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1091</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1099</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1129</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1145</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1162</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1174</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1188</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1192</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1213</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>182</td><td>1238</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1253</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1270</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_EDM"><a id="Oilers">Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Oilers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Oilers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Oilers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Oilers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Oilers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Oilers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Oilers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Oilers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Oilers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Oilers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Oilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Oilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Oilers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-1.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>23</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-23.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>40</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-40.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>52</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-52.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>71</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-71.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>80</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-80.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>94</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-94.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>109</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-109.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>128</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>139</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>149</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>172</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>183</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>189</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>215</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>34</td><td>222</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>36</td><td>235</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>38</td><td>250</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>263</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>277</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>288</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>46</td><td>302</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>328</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>340</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>359</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>54</td><td>362</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>380</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>60</td><td>407</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>61</td><td>418</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>64</td><td>434</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>448</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>464</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>475</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>493</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>504</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>76</td><td>520</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>78</td><td>537</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>80</td><td>548</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>557</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>579</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>586</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>91</td><td>620</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>629</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>642</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>97</td><td>662</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>683</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>694</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>105</td><td>718</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>746</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>778</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>122</td><td>787</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>794</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>126</td><td>812</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>830</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>845</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>870</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>888</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>899</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>907</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>931</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>946</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>963</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>968</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>148</td><td>983</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1000</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>153</td><td>1018</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1020</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1034</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1051</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>160</td><td>1067</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>162</td><td>1081</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1096</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1113</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>167</td><td>1122</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1135</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1149</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1171</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1187</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>178</td><td>1200</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1218</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1232</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1260</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_FLA"><a id="Panthers">Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Panthers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Panthers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Panthers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Panthers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Panthers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Panthers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Panthers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Panthers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Panthers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Panthers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Panthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Panthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Panthers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>12</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>6</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-12.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>24</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-24.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>38</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-38.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>58</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-58.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>70</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>L</td><td></td><td>*</td><td>R3<td><a href="OTHL-70.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>81</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-81.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>110</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-110.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>117</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>138</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>146</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>172</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>27</td><td>178</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>190</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>210</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>242</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>256</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>40</td><td>267</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>273</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>44</td><td>289</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>46</td><td>303</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>324</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>339</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>349</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>54</td><td>364</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>389</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>408</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>426</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>457</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>465</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>476</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>492</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>74</td><td>505</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>76</td><td>521</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>80</td><td>549</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>554</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>577</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>595</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>607</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>616</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>634</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>643</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>657</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>667</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>682</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>705</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>731</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>745</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>111</td><td>760</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>763</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>798</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>125</td><td>811</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>815</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>831</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>846</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>132</td><td>862</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>872</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>883</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>899</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>918</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>927</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>934</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>958</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>969</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>986</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1001</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1013</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1035</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>158</td><td>1052</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1076</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1086</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1104</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>167</td><td>1120</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1131</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>170</td><td>1140</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1157</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1174</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1181</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1195</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1206</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>181</td><td>1227</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1246</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1263</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_PIT"><a id="Penguins">Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Penguins">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Penguins">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Penguins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Penguins">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Penguins">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Penguins">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Penguins">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Penguins">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Penguins">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Penguins">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Penguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>11</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-11.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>27</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-27.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>41</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-41.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>55</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-55.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>68</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-68.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>77</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-77.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>95</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-95.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>111</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-111.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>119</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>138</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>22</td><td>144</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>164</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>186</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>215</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>34</td><td>220</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>243</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>258</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>276</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>45</td><td>295</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>309</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>327</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>343</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>52</td><td>347</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>372</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>386</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>395</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>413</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>64</td><td>436</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>451</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>456</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>480</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>494</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>511</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>525</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>80</td><td>548</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>563</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>588</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>596</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>90</td><td>612</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>635</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>647</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>657</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>673</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>101</td><td>690</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>703</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>721</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>727</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>108</td><td>741</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>110</td><td>758</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>765</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>790</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>124</td><td>808</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>838</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>846</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>874</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>136</td><td>893</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>912</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>924</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>938</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>955</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>966</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>148</td><td>982</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>994</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1007</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1024</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1033</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1057</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1063</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1074</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1084</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1100</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1114</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1134</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1150</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1169</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1183</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1186</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1207</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1220</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1235</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1250</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1268</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NSH"><a id="Predators">Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Predators">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Predators">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Predators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Predators">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Predators">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Predators">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Predators">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Predators">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Predators">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Predators">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Predators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Predators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Predators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>9</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-9.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>25</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-25.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>39</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-39.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>53</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-53.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>67</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-67.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>90</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-90.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>98</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-98.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>117</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>140</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>151</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>168</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>184</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>30</td><td>194</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>213</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>34</td><td>221</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>241</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>259</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>279</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>307</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>326</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>342</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>357</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>369</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>383</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>394</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>408</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>429</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>458</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>479</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>489</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>508</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>76</td><td>522</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>527</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>543</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>552</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>573</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>588</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>596</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>92</td><td>626</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>645</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>653</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>669</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>681</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>708</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>718</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>733</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>749</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>770</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>781</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>121</td><td>784</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>800</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>823</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>829</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>845</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>132</td><td>864</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>886</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>903</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>909</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>921</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>944</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>951</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>975</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>988</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1004</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>153</td><td>1018</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1021</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1037</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1050</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1073</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1091</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1101</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1112</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1143</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1160</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1165</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1179</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1196</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1205</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1217</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>183</td><td>1240</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1249</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1265</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NYR"><a id="Rangers">Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Rangers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Rangers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Rangers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Rangers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Rangers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Rangers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Rangers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Rangers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Rangers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Rangers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Rangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rangers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>10</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-10.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>26</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-26.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>71</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-71.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>103</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-103.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>112</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-112.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>127</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>141</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>153</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>174</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>185</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>213</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>34</td><td>223</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>36</td><td>236</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>238</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>267</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>276</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>292</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>303</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>50</td><td>332</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>52</td><td>346</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>353</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>370</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>384</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>392</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>411</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>423</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>440</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>66</td><td>450</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>466</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>477</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>495</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>501</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>76</td><td>522</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>80</td><td>551</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>82</td><td>567</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>576</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>589</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>599</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>620</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>630</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>651</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>670</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>684</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>700</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>104</td><td>710</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>107</td><td>734</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>110</td><td>757</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>112</td><td>764</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>122</td><td>788</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>795</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>125</td><td>810</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>127</td><td>826</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>129</td><td>841</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>131</td><td>858</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>876</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>884</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>136</td><td>892</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>910</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>928</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>942</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>952</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>976</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>149</td><td>987</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>997</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1015</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1023</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1038</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1055</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1071</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>162</td><td>1080</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1098</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>167</td><td>1121</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1134</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1150</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1164</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1180</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1198</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1214</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>181</td><td>1227</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>183</td><td>1241</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1250</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1267</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_DET"><a id="RedWings">Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#RedWings">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#RedWings">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#RedWings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#RedWings">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#RedWings">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#RedWings">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#RedWings">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#RedWings">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#RedWings">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#RedWings">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#RedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RedWings" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>4</td><td>25</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-25.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>32</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-32.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>37</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>5</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>6</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-37.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>51</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-51.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>66</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-66.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>89</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-89.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>100</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-100.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>109</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-109.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>137</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>22</td><td>143</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>155</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>171</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>183</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>197</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>210</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>34</td><td>221</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>36</td><td>236</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>38</td><td>249</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>266</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>272</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>290</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>310</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>323</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>336</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>53</td><td>354</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>54</td><td>363</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>381</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>399</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>406</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>422</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>456</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>483</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>491</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>507</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>75</td><td>516</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>526</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>81</td><td>562</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>82</td><td>566</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>595</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>611</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>619</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>94</td><td>640</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>655</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>98</td><td>666</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>101</td><td>691</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>704</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>719</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>108</td><td>741</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>745</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>111</td><td>759</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>113</td><td>767</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>788</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>795</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>125</td><td>809</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>828</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>129</td><td>839</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>131</td><td>856</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>867</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>885</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>896</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>912</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>920</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>947</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>962</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>972</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>985</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1006</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>153</td><td>1017</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>157</td><td>1045</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>159</td><td>1062</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1072</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1092</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1107</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>167</td><td>1120</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1147</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1163</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1176</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1193</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1209</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1236</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1253</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1262</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_BUF"><a id="Sabres">Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Sabres">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Sabres">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Sabres">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Sabres">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Sabres">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Sabres">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Sabres">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Sabres">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Sabres">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Sabres">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Sabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sabres" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>11</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-11.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>20</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-20.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>34</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>7</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-34.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>44</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-44.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>58</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-58.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>79</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-79.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>92</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-92.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>101</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-101.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>120</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>134</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>153</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>155</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>27</td><td>177</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>203</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>206</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>38</td><td>248</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>260</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>287</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>301</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>47</td><td>314</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>318</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>334</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>54</td><td>364</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>373</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>378</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>393</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>415</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>62</td><td>420</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>441</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>462</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>464</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>473</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>489</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>509</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>531</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>544</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>553</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>575</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>583</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>604</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>614</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>629</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>643</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>686</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>692</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>103</td><td>704</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>715</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>730</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>749</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>119</td><td>774</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>121</td><td>783</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>793</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>814</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>828</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>129</td><td>841</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>131</td><td>855</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>867</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>881</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>906</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>922</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>955</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>960</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>148</td><td>981</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>998</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>999</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1028</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1033</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1056</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>160</td><td>1066</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1088</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1093</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1110</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1123</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1140</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1153</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1164</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1178</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1197</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1210</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>181</td><td>1224</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1247</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1259</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_OTT"><a id="Senators">Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Senators">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Senators">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Senators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Senators">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Senators">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Senators">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Senators">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Senators">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Senators">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Senators">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Senators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td>R3<td><a href="OTHL-3.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>26</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-26.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>54</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-54.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>72</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-72.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>83</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-83.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>105</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-105.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>113</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>20</td><td>129</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>22</td><td>143</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>157</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>175</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>205</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>34</td><td>223</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>229</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>244</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>257</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>41</td><td>270</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>43</td><td>282</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>45</td><td>296</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>301</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>323</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>50</td><td>331</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>52</td><td>346</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>366</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>57</td><td>385</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>398</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>60</td><td>404</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>432</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>64</td><td>434</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>459</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>69</td><td>469</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>71</td><td>485</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>74</td><td>510</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>76</td><td>521</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>530</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>543</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>560</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>575</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>609</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>90</td><td>612</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>634</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>649</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>674</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>101</td><td>691</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>697</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>105</td><td>720</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>735</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>751</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>771</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>119</td><td>774</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>122</td><td>789</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>804</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>126</td><td>820</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>835</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>853</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>868</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>887</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>902</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>138</td><td>911</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>140</td><td>922</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>936</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>953</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>146</td><td>967</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>975</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>989</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1006</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1024</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1039</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1058</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1070</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>162</td><td>1082</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1094</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1115</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>169</td><td>1135</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1152</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1154</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1181</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1191</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1213</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>182</td><td>1237</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1246</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1268</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_SJS"><a id="Sharks">Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Sharks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Sharks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Sharks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Sharks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Sharks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Sharks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Sharks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Sharks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Sharks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Sharks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Sharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sharks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-4.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>17</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-17.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>18</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td>L</td><td></td><td></td><td>R3<td><a href="OTHL-18.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>39</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-39.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>48</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-48.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>76</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-76.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>96</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-96.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>120</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>134</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>150</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>24</td><td>158</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>26</td><td>175</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>180</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>201</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>216</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>231</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>246</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>259</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>277</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>286</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>46</td><td>310</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>328</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>345</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>356</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>368</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>57</td><td>387</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>400</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>60</td><td>403</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>431</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>439</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>461</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>68</td><td>465</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>479</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>495</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>512</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>529</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>561</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>82</td><td>568</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>87</td><td>590</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>88</td><td>597</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>619</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>93</td><td>635</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>644</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>658</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>98</td><td>671</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>685</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>699</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>714</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>729</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>754</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>772</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>120</td><td>780</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>803</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>816</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>830</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>132</td><td>863</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>136</td><td>894</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>900</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>139</td><td>918</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>142</td><td>935</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>144</td><td>952</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>965</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>977</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>990</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1007</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1025</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1041</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1058</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>159</td><td>1064</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>162</td><td>1079</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>164</td><td>1097</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1103</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1124</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1144</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>172</td><td>1161</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1170</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>176</td><td>1189</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1200</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1221</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1233</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>184</td><td>1251</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1269</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_DAL"><a id="Stars">Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Stars">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Stars">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Stars">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Stars">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Stars">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Stars">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Stars">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Stars">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Stars">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Stars">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Stars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>8</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>5</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-8.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>28</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-28.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>32</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-32.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>43</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-43.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>50</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-50.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>65</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-65.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>79</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-79.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>93</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-93.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>111</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-111.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>118</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>20</td><td>129</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>148</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>164</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>28</td><td>182</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>31</td><td>198</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>209</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>227</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>40</td><td>269</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>43</td><td>281</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>44</td><td>293</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>302</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>322</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>338</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>351</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>367</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>56</td><td>374</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>397</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>61</td><td>417</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>433</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>442</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>455</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>474</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>73</td><td>500</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>508</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>76</td><td>520</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>545</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>80</td><td>549</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>82</td><td>565</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>88</td><td>594</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>603</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>92</td><td>626</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>94</td><td>640</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>99</td><td>675</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>100</td><td>678</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>102</td><td>699</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>717</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>730</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>747</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>118</td><td>768</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>120</td><td>777</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>799</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>125</td><td>810</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>819</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>129</td><td>840</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>130</td><td>849</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>869</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>889</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>901</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>138</td><td>911</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>930</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>945</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>961</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>971</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>984</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>151</td><td>1008</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1020</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1037</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1050</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>161</td><td>1071</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1086</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1103</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>167</td><td>1118</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1130</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1148</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>173</td><td>1166</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>175</td><td>1177</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>178</td><td>1199</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1208</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>181</td><td>1226</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>183</td><td>1239</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1251</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1264</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<h1 class="TeamSchedulePro_MIN"><a id="Wild">Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Wild">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Wild">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Wild">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Wild">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Wild">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Wild">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Wild">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Wild">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Wild">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Wild">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Wild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>9</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-9.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>22</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-22.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>57</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-57.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>68</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-68.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>83</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-83.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>88</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>6</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-88.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>102</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-102.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>126</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Canadiens</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>21</td><td>139</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>23</td><td>151</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>25</td><td>165</td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>28</td><td>182</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>29</td><td>193</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>32</td><td>212</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>35</td><td>224</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>37</td><td>246</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>39</td><td>252</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>42</td><td>274</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>44</td><td>291</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>46</td><td>305</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>49</td><td>318</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>51</td><td>341</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>53</td><td>348</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>55</td><td>370</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>56</td><td>376</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>59</td><td>398</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>61</td><td>417</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>63</td><td>426</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>65</td><td>446</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>67</td><td>453</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>70</td><td>478</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>72</td><td>493</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>74</td><td>506</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>75</td><td>515</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>77</td><td>533</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>79</td><td>538</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Coyotes</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>81</td><td>558</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>83</td><td>572</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>87</td><td>585</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>89</td><td>608</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>91</td><td>622</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>95</td><td>646</td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>96</td><td>656</td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>100</td><td>680</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flames">Flames</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>103</td><td>706</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>105</td><td>721</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>107</td><td>732</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Lightning</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>109</td><td>747</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>111</td><td>760</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Panthers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>113</td><td>767</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>123</td><td>797</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>126</td><td>817</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>128</td><td>832</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>129</td><td>840</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>131</td><td>857</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>133</td><td>871</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>135</td><td>884</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Rangers</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>137</td><td>900</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>141</td><td>932</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>143</td><td>946</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Oilers">Oilers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>145</td><td>964</td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>147</td><td>973</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>149</td><td>985</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#RedWings">Red Wings</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>150</td><td>996</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>152</td><td>1014</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>154</td><td>1021</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>156</td><td>1041</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Sharks">Sharks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>158</td><td>1053</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Kings">Kings</a></td><td></td><td></td><td></td><td></td><td>R3<td></td></tr>
<tr><td>159</td><td>1059</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Ducks">Ducks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>163</td><td>1087</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>165</td><td>1106</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Flyers">Flyers</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>166</td><td>1112</td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>168</td><td>1126</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>170</td><td>1139</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>171</td><td>1151</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Jets">Jets</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>174</td><td>1172</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Avalanche</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>177</td><td>1194</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>179</td><td>1210</td><td><a href="OTHL-ProTeamRoster.php#Sabres">Sabres</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>180</td><td>1222</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Blues">Blues</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>182</td><td>1234</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Islanders">Islanders</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>184</td><td>1254</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Capitals">Capitals</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td>186</td><td>1265</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a></td><td></td><td><a href="OTHL-ProTeamRoster.php#Predators">Predators</a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
</table></div>
<?php include "Footer.php";?>
