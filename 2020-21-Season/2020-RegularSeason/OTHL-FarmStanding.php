﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Standing</title>
<script src="OTHL.js"></script>
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
<script>$(function(){$("table").basictablesorter({ widgets: ['staticRow'] })});</script>
<div class="tabsmain standard"><ul class="tabmain-links">
<li class="activemain"><a href="#tabmain2">Conference</a></li>
<li><a href="#tabmain3">Division</a></li>
<li><a href="#tabmain4">Overall</a></li>
</ul><div class="tabmain-content">
<div class="tabmain active" id="tabmain2">
<h2 class="STHSStanding_H2Header">Eastern Conference</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Comets</a> (VAN)</td><td>82</td><td>63</td><td>15</td><td>4</td><td><b>130</b></td><td>60</td><td>347</td><td>120</td><td>227</td><td>0.793</td><td>34-6-1</td><td>29-9-3</td><td>7-3-0</td><td>8-2-0</td><td>8-2-0</td><td>W4</td><td></td></tr>
<tr><td>2 - Y</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Thunderbirds</a> (FLA)</td><td>82</td><td>58</td><td>20</td><td>4</td><td><b>120</b></td><td>54</td><td>351</td><td>160</td><td>191</td><td>0.732</td><td>32-7-2</td><td>26-13-2</td><td>6-4-0</td><td>7-3-0</td><td>5-5-0</td><td>W3</td><td></td></tr>
<tr><td>3 - X</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Monsters</a> (CLB)</td><td>82</td><td>55</td><td>18</td><td>9</td><td><b>119</b></td><td>52</td><td>343</td><td>176</td><td>167</td><td>0.726</td><td>30-10-1</td><td>25-8-8</td><td>7-2-1</td><td>8-2-0</td><td>6-2-2</td><td>L2</td><td></td></tr>
<tr><td>4 - X</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Marlies</a> (TOR)</td><td>82</td><td>56</td><td>22</td><td>4</td><td><b>116</b></td><td>55</td><td>298</td><td>165</td><td>133</td><td>0.707</td><td>26-12-3</td><td>30-10-1</td><td>8-1-1</td><td>7-2-1</td><td>8-1-1</td><td>W1</td><td></td></tr>
<tr><td>5 - X</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Checkers</a> (CAR)</td><td>82</td><td>51</td><td>29</td><td>2</td><td><b>104</b></td><td>50</td><td>342</td><td>260</td><td>82</td><td>0.634</td><td>30-11-0</td><td>21-18-2</td><td>8-2-0</td><td>9-1-0</td><td>7-3-0</td><td>L1</td><td></td></tr>
<tr><td>6 - X</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a> (PIT)</td><td>82</td><td>49</td><td>28</td><td>5</td><td><b>103</b></td><td>49</td><td>373</td><td>235</td><td>138</td><td>0.628</td><td>24-14-3</td><td>25-14-2</td><td>8-2-0</td><td>8-2-0</td><td>6-3-1</td><td>W3</td><td></td></tr>
<tr><td>7 - X</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a> (BOS)</td><td>82</td><td>47</td><td>29</td><td>6</td><td><b>100</b></td><td>44</td><td>265</td><td>170</td><td>95</td><td>0.610</td><td>24-13-4</td><td>23-16-2</td><td>7-3-0</td><td>8-1-1</td><td>8-2-0</td><td>W2</td><td></td></tr>
<tr><td>8 - X</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Phantoms</a> (PHL)</td><td>82</td><td>48</td><td>32</td><td>2</td><td><b>98</b></td><td>45</td><td>321</td><td>234</td><td>87</td><td>0.598</td><td>24-15-2</td><td>24-17-0</td><td>7-2-1</td><td>5-3-2</td><td>7-3-0</td><td>W3</td><td></td></tr>
<tr class="static"><td colspan="19"><hr /></td></tr>
<tr><td>9 - E</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Crunch</a> (TBL)</td><td>82</td><td>44</td><td>33</td><td>5</td><td><b>93</b></td><td>42</td><td>324</td><td>262</td><td>62</td><td>0.567</td><td>23-16-2</td><td>21-17-3</td><td>3-7-0</td><td>3-5-2</td><td>4-6-0</td><td>L1</td><td>5</td></tr>
<tr><td>10 - E</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Rocket</a> (MTL)</td><td>82</td><td>43</td><td>34</td><td>5</td><td><b>91</b></td><td>37</td><td>257</td><td>211</td><td>46</td><td>0.555</td><td>22-16-3</td><td>21-18-2</td><td>3-6-1</td><td>7-3-0</td><td>4-5-1</td><td>L3</td><td>7</td></tr>
<tr><td>11 - E</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a> (OTT)</td><td>82</td><td>37</td><td>40</td><td>5</td><td><b>79</b></td><td>37</td><td>269</td><td>259</td><td>10</td><td>0.482</td><td>19-20-2</td><td>18-20-3</td><td>4-6-0</td><td>2-7-1</td><td>5-5-0</td><td>L2</td><td>19</td></tr>
<tr><td>12 - E</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Griffins</a> (DET)</td><td>82</td><td>36</td><td>41</td><td>5</td><td><b>77</b></td><td>34</td><td>277</td><td>275</td><td>2</td><td>0.470</td><td>16-23-2</td><td>20-18-3</td><td>5-5-0</td><td>6-4-0</td><td>6-4-0</td><td>W1</td><td>21</td></tr>
<tr><td>13 - E</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a> (NJD)</td><td>82</td><td>34</td><td>39</td><td>9</td><td><b>77</b></td><td>32</td><td>341</td><td>332</td><td>9</td><td>0.470</td><td>17-20-4</td><td>17-19-5</td><td>3-6-1</td><td>3-6-1</td><td>4-6-0</td><td>W1</td><td>21</td></tr>
<tr><td>14 - E</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Bears</a> (WSH)</td><td>82</td><td>12</td><td>69</td><td>1</td><td><b>25</b></td><td>12</td><td>184</td><td>549</td><td>-365</td><td>0.152</td><td>8-33-0</td><td>4-36-1</td><td>3-7-0</td><td>3-7-0</td><td>2-8-0</td><td>L1</td><td>73</td></tr>
<tr><td>15 - E</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Sound Tigers</a> (NYI)</td><td>82</td><td>8</td><td>74</td><td>0</td><td><b>16</b></td><td>8</td><td>142</td><td>578</td><td>-436</td><td>0.098</td><td>5-36-0</td><td>3-38-0</td><td>0-10-0</td><td>1-9-0</td><td>0-10-0</td><td>L20</td><td>82</td></tr>
<tr><td>16 - E</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Wolf Pack</a> (NYR)</td><td>82</td><td>1</td><td>80</td><td>1</td><td><b>3</b></td><td>1</td><td>143</td><td>589</td><td>-446</td><td>0.018</td><td>1-40-0</td><td>0-40-1</td><td>0-10-0</td><td>1-9-0</td><td>0-10-0</td><td>L16</td><td>95</td></tr>
</tbody></table><br />
<h2 class="STHSStanding_H2Header">Western Conference</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="OTHL-ProTeamRoster.php#Predators">Admirals</a> (NSH)</td><td>82</td><td>64</td><td>12</td><td>6</td><td><b>134</b></td><td>62</td><td>459</td><td>172</td><td>287</td><td>0.817</td><td>35-4-2</td><td>29-8-4</td><td>7-3-0</td><td>9-1-0</td><td>5-3-2</td><td>W1</td><td></td></tr>
<tr><td>2 - Y</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Condors</a> (EDM)</td><td>82</td><td>61</td><td>15</td><td>6</td><td><b>128</b></td><td>58</td><td>374</td><td>167</td><td>207</td><td>0.780</td><td>33-7-1</td><td>28-8-5</td><td>9-0-1</td><td>9-1-0</td><td>8-0-2</td><td>OTL1</td><td></td></tr>
<tr><td>3 - X</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">IceHogs</a> (CHI)</td><td>82</td><td>62</td><td>16</td><td>4</td><td><b>128</b></td><td>61</td><td>371</td><td>128</td><td>243</td><td>0.780</td><td>32-8-1</td><td>30-8-3</td><td>8-2-0</td><td>6-3-1</td><td>9-1-0</td><td>W3</td><td></td></tr>
<tr><td>4 - X</td><td><a href="OTHL-ProTeamRoster.php#Sabres"> Americans</a> (BUF)</td><td>82</td><td>61</td><td>17</td><td>4</td><td><b>126</b></td><td>57</td><td>362</td><td>174</td><td>188</td><td>0.768</td><td>29-11-1</td><td>32-6-3</td><td>6-3-1</td><td>7-3-0</td><td>7-1-2</td><td>L1</td><td></td></tr>
<tr><td>5 - X</td><td><a href="OTHL-ProTeamRoster.php#Jets">Moose</a> (WPG)</td><td>82</td><td>61</td><td>18</td><td>3</td><td><b>125</b></td><td>56</td><td>358</td><td>150</td><td>208</td><td>0.762</td><td>33-6-2</td><td>28-12-1</td><td>8-2-0</td><td>8-2-0</td><td>6-3-1</td><td>W2</td><td></td></tr>
<tr><td>6 - X</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Barracudas</a> (SJS)</td><td>82</td><td>59</td><td>19</td><td>4</td><td><b>122</b></td><td>54</td><td>438</td><td>212</td><td>226</td><td>0.744</td><td>30-10-1</td><td>29-9-3</td><td>6-3-1</td><td>7-3-0</td><td>8-1-1</td><td>L1</td><td></td></tr>
<tr><td>7 - X</td><td><a href="OTHL-ProTeamRoster.php#Flames">Heat</a> (CGY)</td><td>82</td><td>55</td><td>22</td><td>5</td><td><b>115</b></td><td>53</td><td>331</td><td>197</td><td>134</td><td>0.701</td><td>29-9-3</td><td>26-13-2</td><td>10-0-0</td><td>10-0-0</td><td>8-1-1</td><td>OTW1</td><td></td></tr>
<tr><td>8 - X</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Wolves</a> (VGK)</td><td>82</td><td>55</td><td>22</td><td>5</td><td><b>115</b></td><td>52</td><td>303</td><td>155</td><td>148</td><td>0.701</td><td>30-7-4</td><td>25-15-1</td><td>5-4-1</td><td>5-4-1</td><td>3-6-1</td><td>L3</td><td></td></tr>
<tr class="static"><td colspan="19"><hr /></td></tr>
<tr><td>9 - E</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Gulls</a> (ANH)</td><td>82</td><td>42</td><td>33</td><td>7</td><td><b>91</b></td><td>39</td><td>316</td><td>278</td><td>38</td><td>0.555</td><td>22-14-5</td><td>20-19-2</td><td>6-4-0</td><td>8-1-1</td><td>3-6-1</td><td>W2</td><td>24</td></tr>
<tr><td>10 - E</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a> (DAL)</td><td>82</td><td>42</td><td>36</td><td>4</td><td><b>88</b></td><td>39</td><td>330</td><td>271</td><td>59</td><td>0.537</td><td>19-20-2</td><td>23-16-2</td><td>2-7-1</td><td>2-8-0</td><td>3-6-1</td><td>W1</td><td>27</td></tr>
<tr><td>11 - E</td><td><a href="OTHL-ProTeamRoster.php#Kings">Reign</a> (LAK)</td><td>82</td><td>26</td><td>52</td><td>4</td><td><b>56</b></td><td>26</td><td>259</td><td>345</td><td>-86</td><td>0.341</td><td>12-28-1</td><td>14-24-3</td><td>4-6-0</td><td>3-7-0</td><td>7-3-0</td><td>L3</td><td>59</td></tr>
<tr><td>12 - E</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Roadrunners</a> (ARI)</td><td>82</td><td>13</td><td>66</td><td>3</td><td><b>29</b></td><td>13</td><td>216</td><td>523</td><td>-307</td><td>0.177</td><td>6-33-2</td><td>7-33-1</td><td>1-9-0</td><td>1-9-0</td><td>1-8-1</td><td>L2</td><td>86</td></tr>
<tr><td>13 - E</td><td><a href="OTHL-ProTeamRoster.php#Blues">Rampage </a> (STL)</td><td>82</td><td>10</td><td>70</td><td>2</td><td><b>22</b></td><td>10</td><td>153</td><td>601</td><td>-448</td><td>0.134</td><td>7-33-1</td><td>3-37-1</td><td>1-8-1</td><td>1-8-1</td><td>2-8-0</td><td>W1</td><td>93</td></tr>
<tr><td>14 - E</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a> (MIN)</td><td>82</td><td>10</td><td>70</td><td>2</td><td><b>22</b></td><td>10</td><td>162</td><td>612</td><td>-450</td><td>0.134</td><td>4-36-1</td><td>6-34-1</td><td>3-7-0</td><td>1-9-0</td><td>2-8-0</td><td>L2</td><td>93</td></tr>
<tr><td>15 - E</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Eagles</a> (COL)</td><td>82</td><td>8</td><td>73</td><td>1</td><td><b>17</b></td><td>8</td><td>149</td><td>598</td><td>-449</td><td>0.104</td><td>5-35-1</td><td>3-38-0</td><td>0-10-0</td><td>1-9-0</td><td>0-10-0</td><td>L12</td><td>98</td></tr>
</tbody></table><br />
x - Clinched Playoff Berth<br />
y - Clinched Division Title<br />
z - Clinched Conference Title<br />
e - Eliminated<br />
*Seeding 1 division leaders<br />
</div><div class="tabmain" id="tabmain3">
<h2 class="STHSStanding_H2Header">North</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 Z</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Comets</a> (VAN)</td><td>82</td><td>63</td><td>15</td><td>4</td><td><b>130</b></td><td>60</td><td>347</td><td>120</td><td>227</td><td>0.793</td><td>34-6-1</td><td>29-9-3</td><td>7-3-0</td><td>8-2-0</td><td>8-2-0</td><td>W4</td><td></td></tr>
<tr><td>2 X</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Monsters</a> (CLB)</td><td>82</td><td>55</td><td>18</td><td>9</td><td><b>119</b></td><td>52</td><td>343</td><td>176</td><td>167</td><td>0.726</td><td>30-10-1</td><td>25-8-8</td><td>7-2-1</td><td>8-2-0</td><td>6-2-2</td><td>L2</td><td></td></tr>
<tr><td>3 X</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Marlies</a> (TOR)</td><td>82</td><td>56</td><td>22</td><td>4</td><td><b>116</b></td><td>55</td><td>298</td><td>165</td><td>133</td><td>0.707</td><td>26-12-3</td><td>30-10-1</td><td>8-1-1</td><td>7-2-1</td><td>8-1-1</td><td>W1</td><td></td></tr>
<tr><td>4 E</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Crunch</a> (TBL)</td><td>82</td><td>44</td><td>33</td><td>5</td><td><b>93</b></td><td>42</td><td>324</td><td>262</td><td>62</td><td>0.567</td><td>23-16-2</td><td>21-17-3</td><td>3-7-0</td><td>3-5-2</td><td>4-6-0</td><td>L1</td><td>5</td></tr>
<tr><td>5 E</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Rocket</a> (MTL)</td><td>82</td><td>43</td><td>34</td><td>5</td><td><b>91</b></td><td>37</td><td>257</td><td>211</td><td>46</td><td>0.555</td><td>22-16-3</td><td>21-18-2</td><td>3-6-1</td><td>7-3-0</td><td>4-5-1</td><td>L3</td><td>7</td></tr>
<tr><td>6 E</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a> (OTT)</td><td>82</td><td>37</td><td>40</td><td>5</td><td><b>79</b></td><td>37</td><td>269</td><td>259</td><td>10</td><td>0.482</td><td>19-20-2</td><td>18-20-3</td><td>4-6-0</td><td>2-7-1</td><td>5-5-0</td><td>L2</td><td>19</td></tr>
<tr><td>7 E</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Griffins</a> (DET)</td><td>82</td><td>36</td><td>41</td><td>5</td><td><b>77</b></td><td>34</td><td>277</td><td>275</td><td>2</td><td>0.470</td><td>16-23-2</td><td>20-18-3</td><td>5-5-0</td><td>6-4-0</td><td>6-4-0</td><td>W1</td><td>21</td></tr>
<tr><td>8 E</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a> (NJD)</td><td>82</td><td>34</td><td>39</td><td>9</td><td><b>77</b></td><td>32</td><td>341</td><td>332</td><td>9</td><td>0.470</td><td>17-20-4</td><td>17-19-5</td><td>3-6-1</td><td>3-6-1</td><td>4-6-0</td><td>W1</td><td>21</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Atlantic</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 Y</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Thunderbirds</a> (FLA)</td><td>82</td><td>58</td><td>20</td><td>4</td><td><b>120</b></td><td>54</td><td>351</td><td>160</td><td>191</td><td>0.732</td><td>32-7-2</td><td>26-13-2</td><td>6-4-0</td><td>7-3-0</td><td>5-5-0</td><td>W3</td><td></td></tr>
<tr><td>2 X</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Checkers</a> (CAR)</td><td>82</td><td>51</td><td>29</td><td>2</td><td><b>104</b></td><td>50</td><td>342</td><td>260</td><td>82</td><td>0.634</td><td>30-11-0</td><td>21-18-2</td><td>8-2-0</td><td>9-1-0</td><td>7-3-0</td><td>L1</td><td></td></tr>
<tr><td>3 X</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a> (PIT)</td><td>82</td><td>49</td><td>28</td><td>5</td><td><b>103</b></td><td>49</td><td>373</td><td>235</td><td>138</td><td>0.628</td><td>24-14-3</td><td>25-14-2</td><td>8-2-0</td><td>8-2-0</td><td>6-3-1</td><td>W3</td><td></td></tr>
<tr><td>4 X</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a> (BOS)</td><td>82</td><td>47</td><td>29</td><td>6</td><td><b>100</b></td><td>44</td><td>265</td><td>170</td><td>95</td><td>0.610</td><td>24-13-4</td><td>23-16-2</td><td>7-3-0</td><td>8-1-1</td><td>8-2-0</td><td>W2</td><td></td></tr>
<tr><td>5 X</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Phantoms</a> (PHL)</td><td>82</td><td>48</td><td>32</td><td>2</td><td><b>98</b></td><td>45</td><td>321</td><td>234</td><td>87</td><td>0.598</td><td>24-15-2</td><td>24-17-0</td><td>7-2-1</td><td>5-3-2</td><td>7-3-0</td><td>W3</td><td></td></tr>
<tr><td>6 E</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Bears</a> (WSH)</td><td>82</td><td>12</td><td>69</td><td>1</td><td><b>25</b></td><td>12</td><td>184</td><td>549</td><td>-365</td><td>0.152</td><td>8-33-0</td><td>4-36-1</td><td>3-7-0</td><td>3-7-0</td><td>2-8-0</td><td>L1</td><td>73</td></tr>
<tr><td>7 E</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Sound Tigers</a> (NYI)</td><td>82</td><td>8</td><td>74</td><td>0</td><td><b>16</b></td><td>8</td><td>142</td><td>578</td><td>-436</td><td>0.098</td><td>5-36-0</td><td>3-38-0</td><td>0-10-0</td><td>1-9-0</td><td>0-10-0</td><td>L20</td><td>82</td></tr>
<tr><td>8 E</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Wolf Pack</a> (NYR)</td><td>82</td><td>1</td><td>80</td><td>1</td><td><b>3</b></td><td>1</td><td>143</td><td>589</td><td>-446</td><td>0.018</td><td>1-40-0</td><td>0-40-1</td><td>0-10-0</td><td>1-9-0</td><td>0-10-0</td><td>L16</td><td>95</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Central Division</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 Z</td><td><a href="OTHL-ProTeamRoster.php#Predators">Admirals</a> (NSH)</td><td>82</td><td>64</td><td>12</td><td>6</td><td><b>134</b></td><td>62</td><td>459</td><td>172</td><td>287</td><td>0.817</td><td>35-4-2</td><td>29-8-4</td><td>7-3-0</td><td>9-1-0</td><td>5-3-2</td><td>W1</td><td></td></tr>
<tr><td>2 X</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">IceHogs</a> (CHI)</td><td>82</td><td>62</td><td>16</td><td>4</td><td><b>128</b></td><td>61</td><td>371</td><td>128</td><td>243</td><td>0.780</td><td>32-8-1</td><td>30-8-3</td><td>8-2-0</td><td>6-3-1</td><td>9-1-0</td><td>W3</td><td></td></tr>
<tr><td>3 X</td><td><a href="OTHL-ProTeamRoster.php#Sabres"> Americans</a> (BUF)</td><td>82</td><td>61</td><td>17</td><td>4</td><td><b>126</b></td><td>57</td><td>362</td><td>174</td><td>188</td><td>0.768</td><td>29-11-1</td><td>32-6-3</td><td>6-3-1</td><td>7-3-0</td><td>7-1-2</td><td>L1</td><td></td></tr>
<tr><td>4 X</td><td><a href="OTHL-ProTeamRoster.php#Jets">Moose</a> (WPG)</td><td>82</td><td>61</td><td>18</td><td>3</td><td><b>125</b></td><td>56</td><td>358</td><td>150</td><td>208</td><td>0.762</td><td>33-6-2</td><td>28-12-1</td><td>8-2-0</td><td>8-2-0</td><td>6-3-1</td><td>W2</td><td></td></tr>
<tr><td>5 X</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Wolves</a> (VGK)</td><td>82</td><td>55</td><td>22</td><td>5</td><td><b>115</b></td><td>52</td><td>303</td><td>155</td><td>148</td><td>0.701</td><td>30-7-4</td><td>25-15-1</td><td>5-4-1</td><td>5-4-1</td><td>3-6-1</td><td>L3</td><td></td></tr>
<tr><td>6 E</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a> (DAL)</td><td>82</td><td>42</td><td>36</td><td>4</td><td><b>88</b></td><td>39</td><td>330</td><td>271</td><td>59</td><td>0.537</td><td>19-20-2</td><td>23-16-2</td><td>2-7-1</td><td>2-8-0</td><td>3-6-1</td><td>W1</td><td>27</td></tr>
<tr><td>7 E</td><td><a href="OTHL-ProTeamRoster.php#Blues">Rampage </a> (STL)</td><td>82</td><td>10</td><td>70</td><td>2</td><td><b>22</b></td><td>10</td><td>153</td><td>601</td><td>-448</td><td>0.134</td><td>7-33-1</td><td>3-37-1</td><td>1-8-1</td><td>1-8-1</td><td>2-8-0</td><td>W1</td><td>93</td></tr>
<tr><td>8 E</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a> (MIN)</td><td>82</td><td>10</td><td>70</td><td>2</td><td><b>22</b></td><td>10</td><td>162</td><td>612</td><td>-450</td><td>0.134</td><td>4-36-1</td><td>6-34-1</td><td>3-7-0</td><td>1-9-0</td><td>2-8-0</td><td>L2</td><td>93</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Pacific Division</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 Y</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Condors</a> (EDM)</td><td>82</td><td>61</td><td>15</td><td>6</td><td><b>128</b></td><td>58</td><td>374</td><td>167</td><td>207</td><td>0.780</td><td>33-7-1</td><td>28-8-5</td><td>9-0-1</td><td>9-1-0</td><td>8-0-2</td><td>OTL1</td><td></td></tr>
<tr><td>2 X</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Barracudas</a> (SJS)</td><td>82</td><td>59</td><td>19</td><td>4</td><td><b>122</b></td><td>54</td><td>438</td><td>212</td><td>226</td><td>0.744</td><td>30-10-1</td><td>29-9-3</td><td>6-3-1</td><td>7-3-0</td><td>8-1-1</td><td>L1</td><td></td></tr>
<tr><td>3 X</td><td><a href="OTHL-ProTeamRoster.php#Flames">Heat</a> (CGY)</td><td>82</td><td>55</td><td>22</td><td>5</td><td><b>115</b></td><td>53</td><td>331</td><td>197</td><td>134</td><td>0.701</td><td>29-9-3</td><td>26-13-2</td><td>10-0-0</td><td>10-0-0</td><td>8-1-1</td><td>OTW1</td><td></td></tr>
<tr><td>4 E</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Gulls</a> (ANH)</td><td>82</td><td>42</td><td>33</td><td>7</td><td><b>91</b></td><td>39</td><td>316</td><td>278</td><td>38</td><td>0.555</td><td>22-14-5</td><td>20-19-2</td><td>6-4-0</td><td>8-1-1</td><td>3-6-1</td><td>W2</td><td>24</td></tr>
<tr><td>5 E</td><td><a href="OTHL-ProTeamRoster.php#Kings">Reign</a> (LAK)</td><td>82</td><td>26</td><td>52</td><td>4</td><td><b>56</b></td><td>26</td><td>259</td><td>345</td><td>-86</td><td>0.341</td><td>12-28-1</td><td>14-24-3</td><td>4-6-0</td><td>3-7-0</td><td>7-3-0</td><td>L3</td><td>59</td></tr>
<tr><td>6 E</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Roadrunners</a> (ARI)</td><td>82</td><td>13</td><td>66</td><td>3</td><td><b>29</b></td><td>13</td><td>216</td><td>523</td><td>-307</td><td>0.177</td><td>6-33-2</td><td>7-33-1</td><td>1-9-0</td><td>1-9-0</td><td>1-8-1</td><td>L2</td><td>86</td></tr>
<tr><td>7 E</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Eagles</a> (COL)</td><td>82</td><td>8</td><td>73</td><td>1</td><td><b>17</b></td><td>8</td><td>149</td><td>598</td><td>-449</td><td>0.104</td><td>5-35-1</td><td>3-38-0</td><td>0-10-0</td><td>1-9-0</td><td>0-10-0</td><td>L12</td><td>98</td></tr>
</tbody></table>
</div><div class="tabmain" id="tabmain4">
<h2 class="STHSStanding_H2Header">Overall</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 Z</td><td><a href="OTHL-ProTeamRoster.php#Predators">Admirals</a> (NSH)</td><td>82</td><td>64</td><td>12</td><td>6</td><td><b>134</b></td><td>62</td><td>459</td><td>172</td><td>287</td><td>0.817</td><td>35-4-2</td><td>29-8-4</td><td>7-3-0</td><td>9-1-0</td><td>5-3-2</td><td>W1</td><td></td></tr>
<tr><td>2 Z</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Comets</a> (VAN)</td><td>82</td><td>63</td><td>15</td><td>4</td><td><b>130</b></td><td>60</td><td>347</td><td>120</td><td>227</td><td>0.793</td><td>34-6-1</td><td>29-9-3</td><td>7-3-0</td><td>8-2-0</td><td>8-2-0</td><td>W4</td><td></td></tr>
<tr><td>3 X</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">IceHogs</a> (CHI)</td><td>82</td><td>62</td><td>16</td><td>4</td><td><b>128</b></td><td>61</td><td>371</td><td>128</td><td>243</td><td>0.780</td><td>32-8-1</td><td>30-8-3</td><td>8-2-0</td><td>6-3-1</td><td>9-1-0</td><td>W3</td><td></td></tr>
<tr><td>4 Y</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Condors</a> (EDM)</td><td>82</td><td>61</td><td>15</td><td>6</td><td><b>128</b></td><td>58</td><td>374</td><td>167</td><td>207</td><td>0.780</td><td>33-7-1</td><td>28-8-5</td><td>9-0-1</td><td>9-1-0</td><td>8-0-2</td><td>OTL1</td><td></td></tr>
<tr><td>5 X</td><td><a href="OTHL-ProTeamRoster.php#Sabres"> Americans</a> (BUF)</td><td>82</td><td>61</td><td>17</td><td>4</td><td><b>126</b></td><td>57</td><td>362</td><td>174</td><td>188</td><td>0.768</td><td>29-11-1</td><td>32-6-3</td><td>6-3-1</td><td>7-3-0</td><td>7-1-2</td><td>L1</td><td></td></tr>
<tr><td>6 X</td><td><a href="OTHL-ProTeamRoster.php#Jets">Moose</a> (WPG)</td><td>82</td><td>61</td><td>18</td><td>3</td><td><b>125</b></td><td>56</td><td>358</td><td>150</td><td>208</td><td>0.762</td><td>33-6-2</td><td>28-12-1</td><td>8-2-0</td><td>8-2-0</td><td>6-3-1</td><td>W2</td><td></td></tr>
<tr><td>7 X</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Barracudas</a> (SJS)</td><td>82</td><td>59</td><td>19</td><td>4</td><td><b>122</b></td><td>54</td><td>438</td><td>212</td><td>226</td><td>0.744</td><td>30-10-1</td><td>29-9-3</td><td>6-3-1</td><td>7-3-0</td><td>8-1-1</td><td>L1</td><td></td></tr>
<tr><td>8 Y</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Thunderbirds</a> (FLA)</td><td>82</td><td>58</td><td>20</td><td>4</td><td><b>120</b></td><td>54</td><td>351</td><td>160</td><td>191</td><td>0.732</td><td>32-7-2</td><td>26-13-2</td><td>6-4-0</td><td>7-3-0</td><td>5-5-0</td><td>W3</td><td></td></tr>
<tr><td>9 X</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Monsters</a> (CLB)</td><td>82</td><td>55</td><td>18</td><td>9</td><td><b>119</b></td><td>52</td><td>343</td><td>176</td><td>167</td><td>0.726</td><td>30-10-1</td><td>25-8-8</td><td>7-2-1</td><td>8-2-0</td><td>6-2-2</td><td>L2</td><td></td></tr>
<tr><td>10 X</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Marlies</a> (TOR)</td><td>82</td><td>56</td><td>22</td><td>4</td><td><b>116</b></td><td>55</td><td>298</td><td>165</td><td>133</td><td>0.707</td><td>26-12-3</td><td>30-10-1</td><td>8-1-1</td><td>7-2-1</td><td>8-1-1</td><td>W1</td><td></td></tr>
<tr><td>11 X</td><td><a href="OTHL-ProTeamRoster.php#Flames">Heat</a> (CGY)</td><td>82</td><td>55</td><td>22</td><td>5</td><td><b>115</b></td><td>53</td><td>331</td><td>197</td><td>134</td><td>0.701</td><td>29-9-3</td><td>26-13-2</td><td>10-0-0</td><td>10-0-0</td><td>8-1-1</td><td>OTW1</td><td></td></tr>
<tr><td>12 X</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Wolves</a> (VGK)</td><td>82</td><td>55</td><td>22</td><td>5</td><td><b>115</b></td><td>52</td><td>303</td><td>155</td><td>148</td><td>0.701</td><td>30-7-4</td><td>25-15-1</td><td>5-4-1</td><td>5-4-1</td><td>3-6-1</td><td>L3</td><td></td></tr>
<tr><td>13 X</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Checkers</a> (CAR)</td><td>82</td><td>51</td><td>29</td><td>2</td><td><b>104</b></td><td>50</td><td>342</td><td>260</td><td>82</td><td>0.634</td><td>30-11-0</td><td>21-18-2</td><td>8-2-0</td><td>9-1-0</td><td>7-3-0</td><td>L1</td><td></td></tr>
<tr><td>14 X</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a> (PIT)</td><td>82</td><td>49</td><td>28</td><td>5</td><td><b>103</b></td><td>49</td><td>373</td><td>235</td><td>138</td><td>0.628</td><td>24-14-3</td><td>25-14-2</td><td>8-2-0</td><td>8-2-0</td><td>6-3-1</td><td>W3</td><td></td></tr>
<tr><td>15 X</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a> (BOS)</td><td>82</td><td>47</td><td>29</td><td>6</td><td><b>100</b></td><td>44</td><td>265</td><td>170</td><td>95</td><td>0.610</td><td>24-13-4</td><td>23-16-2</td><td>7-3-0</td><td>8-1-1</td><td>8-2-0</td><td>W2</td><td></td></tr>
<tr><td>16 X</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Phantoms</a> (PHL)</td><td>82</td><td>48</td><td>32</td><td>2</td><td><b>98</b></td><td>45</td><td>321</td><td>234</td><td>87</td><td>0.598</td><td>24-15-2</td><td>24-17-0</td><td>7-2-1</td><td>5-3-2</td><td>7-3-0</td><td>W3</td><td></td></tr>
<tr><td>17 E</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Crunch</a> (TBL)</td><td>82</td><td>44</td><td>33</td><td>5</td><td><b>93</b></td><td>42</td><td>324</td><td>262</td><td>62</td><td>0.567</td><td>23-16-2</td><td>21-17-3</td><td>3-7-0</td><td>3-5-2</td><td>4-6-0</td><td>L1</td><td>5</td></tr>
<tr><td>18 E</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Gulls</a> (ANH)</td><td>82</td><td>42</td><td>33</td><td>7</td><td><b>91</b></td><td>39</td><td>316</td><td>278</td><td>38</td><td>0.555</td><td>22-14-5</td><td>20-19-2</td><td>6-4-0</td><td>8-1-1</td><td>3-6-1</td><td>W2</td><td>24</td></tr>
<tr><td>19 E</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Rocket</a> (MTL)</td><td>82</td><td>43</td><td>34</td><td>5</td><td><b>91</b></td><td>37</td><td>257</td><td>211</td><td>46</td><td>0.555</td><td>22-16-3</td><td>21-18-2</td><td>3-6-1</td><td>7-3-0</td><td>4-5-1</td><td>L3</td><td>7</td></tr>
<tr><td>20 E</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a> (DAL)</td><td>82</td><td>42</td><td>36</td><td>4</td><td><b>88</b></td><td>39</td><td>330</td><td>271</td><td>59</td><td>0.537</td><td>19-20-2</td><td>23-16-2</td><td>2-7-1</td><td>2-8-0</td><td>3-6-1</td><td>W1</td><td>27</td></tr>
<tr><td>21 E</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a> (OTT)</td><td>82</td><td>37</td><td>40</td><td>5</td><td><b>79</b></td><td>37</td><td>269</td><td>259</td><td>10</td><td>0.482</td><td>19-20-2</td><td>18-20-3</td><td>4-6-0</td><td>2-7-1</td><td>5-5-0</td><td>L2</td><td>19</td></tr>
<tr><td>22 E</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Griffins</a> (DET)</td><td>82</td><td>36</td><td>41</td><td>5</td><td><b>77</b></td><td>34</td><td>277</td><td>275</td><td>2</td><td>0.470</td><td>16-23-2</td><td>20-18-3</td><td>5-5-0</td><td>6-4-0</td><td>6-4-0</td><td>W1</td><td>21</td></tr>
<tr><td>23 E</td><td><a href="OTHL-ProTeamRoster.php#Devils">Devils</a> (NJD)</td><td>82</td><td>34</td><td>39</td><td>9</td><td><b>77</b></td><td>32</td><td>341</td><td>332</td><td>9</td><td>0.470</td><td>17-20-4</td><td>17-19-5</td><td>3-6-1</td><td>3-6-1</td><td>4-6-0</td><td>W1</td><td>21</td></tr>
<tr><td>24 E</td><td><a href="OTHL-ProTeamRoster.php#Kings">Reign</a> (LAK)</td><td>82</td><td>26</td><td>52</td><td>4</td><td><b>56</b></td><td>26</td><td>259</td><td>345</td><td>-86</td><td>0.341</td><td>12-28-1</td><td>14-24-3</td><td>4-6-0</td><td>3-7-0</td><td>7-3-0</td><td>L3</td><td>59</td></tr>
<tr><td>25 E</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Roadrunners</a> (ARI)</td><td>82</td><td>13</td><td>66</td><td>3</td><td><b>29</b></td><td>13</td><td>216</td><td>523</td><td>-307</td><td>0.177</td><td>6-33-2</td><td>7-33-1</td><td>1-9-0</td><td>1-9-0</td><td>1-8-1</td><td>L2</td><td>86</td></tr>
<tr><td>26 E</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Bears</a> (WSH)</td><td>82</td><td>12</td><td>69</td><td>1</td><td><b>25</b></td><td>12</td><td>184</td><td>549</td><td>-365</td><td>0.152</td><td>8-33-0</td><td>4-36-1</td><td>3-7-0</td><td>3-7-0</td><td>2-8-0</td><td>L1</td><td>73</td></tr>
<tr><td>27 E</td><td><a href="OTHL-ProTeamRoster.php#Blues">Rampage </a> (STL)</td><td>82</td><td>10</td><td>70</td><td>2</td><td><b>22</b></td><td>10</td><td>153</td><td>601</td><td>-448</td><td>0.134</td><td>7-33-1</td><td>3-37-1</td><td>1-8-1</td><td>1-8-1</td><td>2-8-0</td><td>W1</td><td>93</td></tr>
<tr><td>28 E</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a> (MIN)</td><td>82</td><td>10</td><td>70</td><td>2</td><td><b>22</b></td><td>10</td><td>162</td><td>612</td><td>-450</td><td>0.134</td><td>4-36-1</td><td>6-34-1</td><td>3-7-0</td><td>1-9-0</td><td>2-8-0</td><td>L2</td><td>93</td></tr>
<tr><td>29 E</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Eagles</a> (COL)</td><td>82</td><td>8</td><td>73</td><td>1</td><td><b>17</b></td><td>8</td><td>149</td><td>598</td><td>-449</td><td>0.104</td><td>5-35-1</td><td>3-38-0</td><td>0-10-0</td><td>1-9-0</td><td>0-10-0</td><td>L12</td><td>98</td></tr>
<tr><td>30 E</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Sound Tigers</a> (NYI)</td><td>82</td><td>8</td><td>74</td><td>0</td><td><b>16</b></td><td>8</td><td>142</td><td>578</td><td>-436</td><td>0.098</td><td>5-36-0</td><td>3-38-0</td><td>0-10-0</td><td>1-9-0</td><td>0-10-0</td><td>L20</td><td>82</td></tr>
<tr><td>31 E</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Wolf Pack</a> (NYR)</td><td>82</td><td>1</td><td>80</td><td>1</td><td><b>3</b></td><td>1</td><td>143</td><td>589</td><td>-446</td><td>0.018</td><td>1-40-0</td><td>0-40-1</td><td>0-10-0</td><td>1-9-0</td><td>0-10-0</td><td>L16</td><td>95</td></tr>
</tbody></table></div></div></div>
<h2 class="STHSStanding_PointSystem">Point System</h2>
<b>Win :</b> 2 -- <b>Loss :</b> 0 -- <b>OT Win :</b> 2 -- <b>OT Loss :</b> 1 -- <b>SO Win :</b> 2 -- <b>SO Loss :</b> 1<br /><br />P.S. The simulator only uses points to give the title. If two team have the same amount of point, none of them will be award the title until your simulate the last game/day of your season.
<?php include "Footer.php";?>
