﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Standing</title>
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
<tr><td>1 - Z</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a> (VAN)</td><td>82</td><td>67</td><td>10</td><td>5</td><td><b>139</b></td><td>64</td><td>399</td><td>129</td><td>270</td><td>0.848</td><td>33-5-3</td><td>34-5-2</td><td>10-0-0</td><td>9-1-0</td><td>10-0-0</td><td>W9</td><td></td></tr>
<tr><td>2 - Y</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Thunderbirds</a> (FLA)</td><td>82</td><td>63</td><td>19</td><td>0</td><td><b>126</b></td><td>60</td><td>401</td><td>174</td><td>227</td><td>0.768</td><td>29-12-0</td><td>34-7-0</td><td>6-4-0</td><td>6-4-0</td><td>8-2-0</td><td>W2</td><td></td></tr>
<tr><td>3 - X</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Griffins</a> (DET)</td><td>82</td><td>64</td><td>18</td><td>0</td><td><b>128</b></td><td>63</td><td>439</td><td>181</td><td>258</td><td>0.780</td><td>35-6-0</td><td>29-12-0</td><td>8-2-0</td><td>8-2-0</td><td>7-3-0</td><td>L1</td><td></td></tr>
<tr><td>4 - X</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Marlies</a> (TOR)</td><td>82</td><td>61</td><td>17</td><td>4</td><td><b>126</b></td><td>58</td><td>430</td><td>190</td><td>240</td><td>0.768</td><td>29-9-3</td><td>32-8-1</td><td>7-3-0</td><td>7-3-0</td><td>8-2-0</td><td>W4</td><td></td></tr>
<tr><td>5 - X</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Monsters</a> (CLB)</td><td>82</td><td>55</td><td>21</td><td>6</td><td><b>116</b></td><td>53</td><td>420</td><td>219</td><td>201</td><td>0.707</td><td>27-9-5</td><td>28-12-1</td><td>5-4-1</td><td>7-1-2</td><td>4-6-0</td><td>L1</td><td></td></tr>
<tr><td>6 - X</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a> (BOS)</td><td>82</td><td>51</td><td>27</td><td>4</td><td><b>106</b></td><td>50</td><td>384</td><td>206</td><td>178</td><td>0.646</td><td>27-14-0</td><td>24-13-4</td><td>8-2-0</td><td>7-3-0</td><td>6-3-1</td><td>W2</td><td></td></tr>
<tr><td>7 - X</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a> (PIT)</td><td>82</td><td>51</td><td>27</td><td>4</td><td><b>106</b></td><td>49</td><td>412</td><td>279</td><td>133</td><td>0.646</td><td>27-12-2</td><td>24-15-2</td><td>8-2-0</td><td>7-2-1</td><td>6-4-0</td><td>W3</td><td></td></tr>
<tr><td>8 - X</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Rocket</a> (MTL)</td><td>82</td><td>50</td><td>29</td><td>3</td><td><b>103</b></td><td>50</td><td>275</td><td>165</td><td>110</td><td>0.628</td><td>26-14-1</td><td>24-15-2</td><td>5-5-0</td><td>6-4-0</td><td>5-5-0</td><td>L3</td><td></td></tr>
<tr class="static"><td colspan="19"><hr /></td></tr>
<tr><td>9 - E</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Checkers</a> (CAR)</td><td>82</td><td>43</td><td>35</td><td>4</td><td><b>90</b></td><td>43</td><td>376</td><td>312</td><td>64</td><td>0.549</td><td>23-16-2</td><td>20-19-2</td><td>6-3-1</td><td>6-3-1</td><td>7-3-0</td><td>W3</td><td>13</td></tr>
<tr><td>10 - E</td><td><a href="OTHL-ProTeamRoster.php#Devils">Comets</a> (NJD)</td><td>82</td><td>33</td><td>42</td><td>7</td><td><b>73</b></td><td>33</td><td>272</td><td>369</td><td>-97</td><td>0.445</td><td>20-19-2</td><td>13-23-5</td><td>5-3-2</td><td>5-5-0</td><td>5-2-3</td><td>L2</td><td>30</td></tr>
<tr><td>11 - E</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a> (OTT)</td><td>82</td><td>28</td><td>49</td><td>5</td><td><b>61</b></td><td>28</td><td>254</td><td>402</td><td>-148</td><td>0.372</td><td>18-22-1</td><td>10-27-4</td><td>2-8-0</td><td>3-7-0</td><td>1-9-0</td><td>L1</td><td>42</td></tr>
<tr><td>12 - E</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Phantoms</a> (PHL)</td><td>82</td><td>27</td><td>54</td><td>1</td><td><b>55</b></td><td>27</td><td>284</td><td>442</td><td>-158</td><td>0.335</td><td>15-26-0</td><td>12-28-1</td><td>3-7-0</td><td>5-5-0</td><td>1-9-0</td><td>L1</td><td>48</td></tr>
<tr><td>13 - E</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Crunch</a> (TBL)</td><td>82</td><td>19</td><td>58</td><td>5</td><td><b>43</b></td><td>19</td><td>211</td><td>524</td><td>-313</td><td>0.262</td><td>13-28-0</td><td>6-30-5</td><td>2-6-2</td><td>3-7-0</td><td>1-7-2</td><td>W1</td><td>60</td></tr>
<tr><td>14 - E</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Wolf Pack</a> (NYR)</td><td>82</td><td>14</td><td>66</td><td>2</td><td><b>30</b></td><td>13</td><td>187</td><td>585</td><td>-398</td><td>0.183</td><td>7-32-2</td><td>7-34-0</td><td>2-8-0</td><td>3-7-0</td><td>2-8-0</td><td>L1</td><td>73</td></tr>
<tr><td>15 - E</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Bears</a> (WSH)</td><td>82</td><td>11</td><td>68</td><td>3</td><td><b>25</b></td><td>11</td><td>182</td><td>542</td><td>-360</td><td>0.152</td><td>6-34-1</td><td>5-34-2</td><td>0-10-0</td><td>0-10-0</td><td>0-10-0</td><td>L19</td><td>78</td></tr>
<tr><td>16 - E</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Sound Tigers</a> (NYI)</td><td>82</td><td>9</td><td>69</td><td>4</td><td><b>22</b></td><td>9</td><td>183</td><td>584</td><td>-401</td><td>0.134</td><td>4-35-2</td><td>5-34-2</td><td>1-9-0</td><td>1-9-0</td><td>1-8-1</td><td>L7</td><td>81</td></tr>
</tbody></table><br />
<h2 class="STHSStanding_H2Header">Western Conference</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 - Z</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Condors</a> (EDM)</td><td>82</td><td>67</td><td>12</td><td>3</td><td><b>137</b></td><td>66</td><td>483</td><td>156</td><td>327</td><td>0.835</td><td>34-6-1</td><td>33-6-2</td><td>10-0-0</td><td>9-1-0</td><td>10-0-0</td><td>W10</td><td></td></tr>
<tr><td>2 - Y</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">IceHogs</a> (CHI)</td><td>82</td><td>65</td><td>14</td><td>3</td><td><b>133</b></td><td>65</td><td>428</td><td>169</td><td>259</td><td>0.811</td><td>34-5-2</td><td>31-9-1</td><td>9-1-0</td><td>7-2-1</td><td>9-1-0</td><td>W6</td><td></td></tr>
<tr><td>3 - X</td><td><a href="OTHL-ProTeamRoster.php#Sabres"> Americans</a> (BUF)</td><td>82</td><td>64</td><td>16</td><td>2</td><td><b>130</b></td><td>62</td><td>370</td><td>153</td><td>217</td><td>0.793</td><td>35-6-0</td><td>29-10-2</td><td>5-5-0</td><td>7-3-0</td><td>6-4-0</td><td>W1</td><td></td></tr>
<tr><td>4 - X</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Gulls</a> (ANH)</td><td>82</td><td>61</td><td>18</td><td>3</td><td><b>125</b></td><td>60</td><td>430</td><td>198</td><td>232</td><td>0.762</td><td>34-7-0</td><td>27-11-3</td><td>8-1-1</td><td>9-1-0</td><td>5-4-1</td><td>W5</td><td></td></tr>
<tr><td>5 - X</td><td><a href="OTHL-ProTeamRoster.php#Jets">Moose</a> (WPG)</td><td>82</td><td>60</td><td>18</td><td>4</td><td><b>124</b></td><td>58</td><td>446</td><td>191</td><td>255</td><td>0.756</td><td>31-8-2</td><td>29-10-2</td><td>7-3-0</td><td>8-2-0</td><td>8-2-0</td><td>W4</td><td></td></tr>
<tr><td>6 - X</td><td><a href="OTHL-ProTeamRoster.php#Flames">Heat</a> (CGY)</td><td>82</td><td>60</td><td>19</td><td>3</td><td><b>123</b></td><td>59</td><td>465</td><td>195</td><td>270</td><td>0.750</td><td>31-9-1</td><td>29-10-2</td><td>5-4-1</td><td>5-4-1</td><td>6-2-2</td><td>L2</td><td></td></tr>
<tr><td>7 - X</td><td><a href="OTHL-ProTeamRoster.php#Kraken">Mariners</a> (SEA)</td><td>82</td><td>53</td><td>27</td><td>2</td><td><b>108</b></td><td>53</td><td>425</td><td>223</td><td>202</td><td>0.659</td><td>29-11-1</td><td>24-16-1</td><td>6-4-0</td><td>5-4-1</td><td>4-6-0</td><td>W1</td><td></td></tr>
<tr><td>8 - X</td><td><a href="OTHL-ProTeamRoster.php#Predators">Admirals</a> (NSH)</td><td>82</td><td>49</td><td>28</td><td>5</td><td><b>103</b></td><td>46</td><td>314</td><td>209</td><td>105</td><td>0.628</td><td>27-13-1</td><td>22-15-4</td><td>6-4-0</td><td>7-3-0</td><td>5-4-1</td><td>W2</td><td></td></tr>
<tr class="static"><td colspan="19"><hr /></td></tr>
<tr><td>9 - E</td><td><a href="OTHL-ProTeamRoster.php#Kings">Reign</a> (LAK)</td><td>82</td><td>48</td><td>27</td><td>7</td><td><b>103</b></td><td>45</td><td>268</td><td>167</td><td>101</td><td>0.628</td><td>26-12-3</td><td>22-15-4</td><td>6-3-1</td><td>6-4-0</td><td>8-0-2</td><td>W2</td><td></td></tr>
<tr><td>10 - E</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Wolves</a> (VGK)</td><td>82</td><td>46</td><td>35</td><td>1</td><td><b>93</b></td><td>44</td><td>330</td><td>236</td><td>94</td><td>0.567</td><td>26-15-0</td><td>20-20-1</td><td>4-6-0</td><td>7-3-0</td><td>4-6-0</td><td>L2</td><td>10</td></tr>
<tr><td>11 - E</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a> (MIN)</td><td>82</td><td>26</td><td>52</td><td>4</td><td><b>56</b></td><td>25</td><td>262</td><td>408</td><td>-146</td><td>0.341</td><td>13-26-2</td><td>13-26-2</td><td>6-3-1</td><td>8-1-1</td><td>5-4-1</td><td>L1</td><td>47</td></tr>
<tr><td>12 - E</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a> (DAL)</td><td>82</td><td>25</td><td>56</td><td>1</td><td><b>51</b></td><td>24</td><td>281</td><td>495</td><td>-214</td><td>0.311</td><td>13-28-0</td><td>12-28-1</td><td>2-8-0</td><td>2-8-0</td><td>5-4-1</td><td>L4</td><td>52</td></tr>
<tr><td>13 - E</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Roadrunners</a> (ARI)</td><td>82</td><td>17</td><td>63</td><td>2</td><td><b>36</b></td><td>17</td><td>188</td><td>559</td><td>-371</td><td>0.220</td><td>11-29-1</td><td>6-34-1</td><td>3-7-0</td><td>3-7-0</td><td>3-6-1</td><td>L3</td><td>67</td></tr>
<tr><td>14 - E</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Eagles</a> (COL)</td><td>82</td><td>10</td><td>71</td><td>1</td><td><b>21</b></td><td>10</td><td>188</td><td>546</td><td>-358</td><td>0.128</td><td>6-35-0</td><td>4-36-1</td><td>1-8-1</td><td>1-9-0</td><td>0-9-1</td><td>L3</td><td>82</td></tr>
<tr><td>15 - E</td><td><a href="OTHL-ProTeamRoster.php#Blues">Rampage </a> (STL)</td><td>82</td><td>9</td><td>71</td><td>2</td><td><b>20</b></td><td>8</td><td>181</td><td>568</td><td>-387</td><td>0.122</td><td>6-34-1</td><td>3-37-1</td><td>3-7-0</td><td>2-7-1</td><td>1-9-0</td><td>L3</td><td>83</td></tr>
<tr><td>16 - E</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Barracudas</a> (SJS)</td><td>82</td><td>6</td><td>71</td><td>5</td><td><b>17</b></td><td>6</td><td>162</td><td>554</td><td>-392</td><td>0.104</td><td>3-34-4</td><td>3-37-1</td><td>1-8-1</td><td>1-7-2</td><td>1-9-0</td><td>L1</td><td>86</td></tr>
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
<tr><td>1 Z</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a> (VAN)</td><td>82</td><td>67</td><td>10</td><td>5</td><td><b>139</b></td><td>64</td><td>399</td><td>129</td><td>270</td><td>0.848</td><td>33-5-3</td><td>34-5-2</td><td>10-0-0</td><td>9-1-0</td><td>10-0-0</td><td>W9</td><td></td></tr>
<tr><td>2 X</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Griffins</a> (DET)</td><td>82</td><td>64</td><td>18</td><td>0</td><td><b>128</b></td><td>63</td><td>439</td><td>181</td><td>258</td><td>0.780</td><td>35-6-0</td><td>29-12-0</td><td>8-2-0</td><td>8-2-0</td><td>7-3-0</td><td>L1</td><td></td></tr>
<tr><td>3 X</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Marlies</a> (TOR)</td><td>82</td><td>61</td><td>17</td><td>4</td><td><b>126</b></td><td>58</td><td>430</td><td>190</td><td>240</td><td>0.768</td><td>29-9-3</td><td>32-8-1</td><td>7-3-0</td><td>7-3-0</td><td>8-2-0</td><td>W4</td><td></td></tr>
<tr><td>4 X</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Monsters</a> (CLB)</td><td>82</td><td>55</td><td>21</td><td>6</td><td><b>116</b></td><td>53</td><td>420</td><td>219</td><td>201</td><td>0.707</td><td>27-9-5</td><td>28-12-1</td><td>5-4-1</td><td>7-1-2</td><td>4-6-0</td><td>L1</td><td></td></tr>
<tr><td>5 X</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Rocket</a> (MTL)</td><td>82</td><td>50</td><td>29</td><td>3</td><td><b>103</b></td><td>50</td><td>275</td><td>165</td><td>110</td><td>0.628</td><td>26-14-1</td><td>24-15-2</td><td>5-5-0</td><td>6-4-0</td><td>5-5-0</td><td>L3</td><td></td></tr>
<tr><td>6 E</td><td><a href="OTHL-ProTeamRoster.php#Devils">Comets</a> (NJD)</td><td>82</td><td>33</td><td>42</td><td>7</td><td><b>73</b></td><td>33</td><td>272</td><td>369</td><td>-97</td><td>0.445</td><td>20-19-2</td><td>13-23-5</td><td>5-3-2</td><td>5-5-0</td><td>5-2-3</td><td>L2</td><td>30</td></tr>
<tr><td>7 E</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a> (OTT)</td><td>82</td><td>28</td><td>49</td><td>5</td><td><b>61</b></td><td>28</td><td>254</td><td>402</td><td>-148</td><td>0.372</td><td>18-22-1</td><td>10-27-4</td><td>2-8-0</td><td>3-7-0</td><td>1-9-0</td><td>L1</td><td>42</td></tr>
<tr><td>8 E</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Crunch</a> (TBL)</td><td>82</td><td>19</td><td>58</td><td>5</td><td><b>43</b></td><td>19</td><td>211</td><td>524</td><td>-313</td><td>0.262</td><td>13-28-0</td><td>6-30-5</td><td>2-6-2</td><td>3-7-0</td><td>1-7-2</td><td>W1</td><td>60</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Atlantic</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 Y</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Thunderbirds</a> (FLA)</td><td>82</td><td>63</td><td>19</td><td>0</td><td><b>126</b></td><td>60</td><td>401</td><td>174</td><td>227</td><td>0.768</td><td>29-12-0</td><td>34-7-0</td><td>6-4-0</td><td>6-4-0</td><td>8-2-0</td><td>W2</td><td></td></tr>
<tr><td>2 X</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a> (BOS)</td><td>82</td><td>51</td><td>27</td><td>4</td><td><b>106</b></td><td>50</td><td>384</td><td>206</td><td>178</td><td>0.646</td><td>27-14-0</td><td>24-13-4</td><td>8-2-0</td><td>7-3-0</td><td>6-3-1</td><td>W2</td><td></td></tr>
<tr><td>3 X</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a> (PIT)</td><td>82</td><td>51</td><td>27</td><td>4</td><td><b>106</b></td><td>49</td><td>412</td><td>279</td><td>133</td><td>0.646</td><td>27-12-2</td><td>24-15-2</td><td>8-2-0</td><td>7-2-1</td><td>6-4-0</td><td>W3</td><td></td></tr>
<tr><td>4 E</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Checkers</a> (CAR)</td><td>82</td><td>43</td><td>35</td><td>4</td><td><b>90</b></td><td>43</td><td>376</td><td>312</td><td>64</td><td>0.549</td><td>23-16-2</td><td>20-19-2</td><td>6-3-1</td><td>6-3-1</td><td>7-3-0</td><td>W3</td><td>13</td></tr>
<tr><td>5 E</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Phantoms</a> (PHL)</td><td>82</td><td>27</td><td>54</td><td>1</td><td><b>55</b></td><td>27</td><td>284</td><td>442</td><td>-158</td><td>0.335</td><td>15-26-0</td><td>12-28-1</td><td>3-7-0</td><td>5-5-0</td><td>1-9-0</td><td>L1</td><td>48</td></tr>
<tr><td>6 E</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Wolf Pack</a> (NYR)</td><td>82</td><td>14</td><td>66</td><td>2</td><td><b>30</b></td><td>13</td><td>187</td><td>585</td><td>-398</td><td>0.183</td><td>7-32-2</td><td>7-34-0</td><td>2-8-0</td><td>3-7-0</td><td>2-8-0</td><td>L1</td><td>73</td></tr>
<tr><td>7 E</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Bears</a> (WSH)</td><td>82</td><td>11</td><td>68</td><td>3</td><td><b>25</b></td><td>11</td><td>182</td><td>542</td><td>-360</td><td>0.152</td><td>6-34-1</td><td>5-34-2</td><td>0-10-0</td><td>0-10-0</td><td>0-10-0</td><td>L19</td><td>78</td></tr>
<tr><td>8 E</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Sound Tigers</a> (NYI)</td><td>82</td><td>9</td><td>69</td><td>4</td><td><b>22</b></td><td>9</td><td>183</td><td>584</td><td>-401</td><td>0.134</td><td>4-35-2</td><td>5-34-2</td><td>1-9-0</td><td>1-9-0</td><td>1-8-1</td><td>L7</td><td>81</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Central Division</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 Y</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">IceHogs</a> (CHI)</td><td>82</td><td>65</td><td>14</td><td>3</td><td><b>133</b></td><td>65</td><td>428</td><td>169</td><td>259</td><td>0.811</td><td>34-5-2</td><td>31-9-1</td><td>9-1-0</td><td>7-2-1</td><td>9-1-0</td><td>W6</td><td></td></tr>
<tr><td>2 X</td><td><a href="OTHL-ProTeamRoster.php#Sabres"> Americans</a> (BUF)</td><td>82</td><td>64</td><td>16</td><td>2</td><td><b>130</b></td><td>62</td><td>370</td><td>153</td><td>217</td><td>0.793</td><td>35-6-0</td><td>29-10-2</td><td>5-5-0</td><td>7-3-0</td><td>6-4-0</td><td>W1</td><td></td></tr>
<tr><td>3 X</td><td><a href="OTHL-ProTeamRoster.php#Jets">Moose</a> (WPG)</td><td>82</td><td>60</td><td>18</td><td>4</td><td><b>124</b></td><td>58</td><td>446</td><td>191</td><td>255</td><td>0.756</td><td>31-8-2</td><td>29-10-2</td><td>7-3-0</td><td>8-2-0</td><td>8-2-0</td><td>W4</td><td></td></tr>
<tr><td>4 X</td><td><a href="OTHL-ProTeamRoster.php#Kraken">Mariners</a> (SEA)</td><td>82</td><td>53</td><td>27</td><td>2</td><td><b>108</b></td><td>53</td><td>425</td><td>223</td><td>202</td><td>0.659</td><td>29-11-1</td><td>24-16-1</td><td>6-4-0</td><td>5-4-1</td><td>4-6-0</td><td>W1</td><td></td></tr>
<tr><td>5 X</td><td><a href="OTHL-ProTeamRoster.php#Predators">Admirals</a> (NSH)</td><td>82</td><td>49</td><td>28</td><td>5</td><td><b>103</b></td><td>46</td><td>314</td><td>209</td><td>105</td><td>0.628</td><td>27-13-1</td><td>22-15-4</td><td>6-4-0</td><td>7-3-0</td><td>5-4-1</td><td>W2</td><td></td></tr>
<tr><td>6 E</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Wolves</a> (VGK)</td><td>82</td><td>46</td><td>35</td><td>1</td><td><b>93</b></td><td>44</td><td>330</td><td>236</td><td>94</td><td>0.567</td><td>26-15-0</td><td>20-20-1</td><td>4-6-0</td><td>7-3-0</td><td>4-6-0</td><td>L2</td><td>10</td></tr>
<tr><td>7 E</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a> (MIN)</td><td>82</td><td>26</td><td>52</td><td>4</td><td><b>56</b></td><td>25</td><td>262</td><td>408</td><td>-146</td><td>0.341</td><td>13-26-2</td><td>13-26-2</td><td>6-3-1</td><td>8-1-1</td><td>5-4-1</td><td>L1</td><td>47</td></tr>
<tr><td>8 E</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a> (DAL)</td><td>82</td><td>25</td><td>56</td><td>1</td><td><b>51</b></td><td>24</td><td>281</td><td>495</td><td>-214</td><td>0.311</td><td>13-28-0</td><td>12-28-1</td><td>2-8-0</td><td>2-8-0</td><td>5-4-1</td><td>L4</td><td>52</td></tr>
<tr><td>9 E</td><td><a href="OTHL-ProTeamRoster.php#Blues">Rampage </a> (STL)</td><td>82</td><td>9</td><td>71</td><td>2</td><td><b>20</b></td><td>8</td><td>181</td><td>568</td><td>-387</td><td>0.122</td><td>6-34-1</td><td>3-37-1</td><td>3-7-0</td><td>2-7-1</td><td>1-9-0</td><td>L3</td><td>83</td></tr>
</tbody></table>
<h2 class="STHSStanding_H2Header">Pacific Division</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 Z</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Condors</a> (EDM)</td><td>82</td><td>67</td><td>12</td><td>3</td><td><b>137</b></td><td>66</td><td>483</td><td>156</td><td>327</td><td>0.835</td><td>34-6-1</td><td>33-6-2</td><td>10-0-0</td><td>9-1-0</td><td>10-0-0</td><td>W10</td><td></td></tr>
<tr><td>2 X</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Gulls</a> (ANH)</td><td>82</td><td>61</td><td>18</td><td>3</td><td><b>125</b></td><td>60</td><td>430</td><td>198</td><td>232</td><td>0.762</td><td>34-7-0</td><td>27-11-3</td><td>8-1-1</td><td>9-1-0</td><td>5-4-1</td><td>W5</td><td></td></tr>
<tr><td>3 X</td><td><a href="OTHL-ProTeamRoster.php#Flames">Heat</a> (CGY)</td><td>82</td><td>60</td><td>19</td><td>3</td><td><b>123</b></td><td>59</td><td>465</td><td>195</td><td>270</td><td>0.750</td><td>31-9-1</td><td>29-10-2</td><td>5-4-1</td><td>5-4-1</td><td>6-2-2</td><td>L2</td><td></td></tr>
<tr><td>4 E</td><td><a href="OTHL-ProTeamRoster.php#Kings">Reign</a> (LAK)</td><td>82</td><td>48</td><td>27</td><td>7</td><td><b>103</b></td><td>45</td><td>268</td><td>167</td><td>101</td><td>0.628</td><td>26-12-3</td><td>22-15-4</td><td>6-3-1</td><td>6-4-0</td><td>8-0-2</td><td>W2</td><td></td></tr>
<tr><td>5 E</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Roadrunners</a> (ARI)</td><td>82</td><td>17</td><td>63</td><td>2</td><td><b>36</b></td><td>17</td><td>188</td><td>559</td><td>-371</td><td>0.220</td><td>11-29-1</td><td>6-34-1</td><td>3-7-0</td><td>3-7-0</td><td>3-6-1</td><td>L3</td><td>67</td></tr>
<tr><td>6 E</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Eagles</a> (COL)</td><td>82</td><td>10</td><td>71</td><td>1</td><td><b>21</b></td><td>10</td><td>188</td><td>546</td><td>-358</td><td>0.128</td><td>6-35-0</td><td>4-36-1</td><td>1-8-1</td><td>1-9-0</td><td>0-9-1</td><td>L3</td><td>82</td></tr>
<tr><td>7 E</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Barracudas</a> (SJS)</td><td>82</td><td>6</td><td>71</td><td>5</td><td><b>17</b></td><td>6</td><td>162</td><td>554</td><td>-392</td><td>0.104</td><td>3-34-4</td><td>3-37-1</td><td>1-8-1</td><td>1-7-2</td><td>1-9-0</td><td>L1</td><td>86</td></tr>
</tbody></table>
</div><div class="tabmain" id="tabmain4">
<h2 class="STHSStanding_H2Header">Overall</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">ROW</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th><th class="STHSW30">PR</th></tr></thead>
<tbody>
<tr><td>1 Z</td><td><a href="OTHL-ProTeamRoster.php#Canucks">Canucks</a> (VAN)</td><td>82</td><td>67</td><td>10</td><td>5</td><td><b>139</b></td><td>64</td><td>399</td><td>129</td><td>270</td><td>0.848</td><td>33-5-3</td><td>34-5-2</td><td>10-0-0</td><td>9-1-0</td><td>10-0-0</td><td>W9</td><td></td></tr>
<tr><td>2 Z</td><td><a href="OTHL-ProTeamRoster.php#Oilers">Condors</a> (EDM)</td><td>82</td><td>67</td><td>12</td><td>3</td><td><b>137</b></td><td>66</td><td>483</td><td>156</td><td>327</td><td>0.835</td><td>34-6-1</td><td>33-6-2</td><td>10-0-0</td><td>9-1-0</td><td>10-0-0</td><td>W10</td><td></td></tr>
<tr><td>3 Y</td><td><a href="OTHL-ProTeamRoster.php#Blackhawks">IceHogs</a> (CHI)</td><td>82</td><td>65</td><td>14</td><td>3</td><td><b>133</b></td><td>65</td><td>428</td><td>169</td><td>259</td><td>0.811</td><td>34-5-2</td><td>31-9-1</td><td>9-1-0</td><td>7-2-1</td><td>9-1-0</td><td>W6</td><td></td></tr>
<tr><td>4 X</td><td><a href="OTHL-ProTeamRoster.php#Sabres"> Americans</a> (BUF)</td><td>82</td><td>64</td><td>16</td><td>2</td><td><b>130</b></td><td>62</td><td>370</td><td>153</td><td>217</td><td>0.793</td><td>35-6-0</td><td>29-10-2</td><td>5-5-0</td><td>7-3-0</td><td>6-4-0</td><td>W1</td><td></td></tr>
<tr><td>5 X</td><td><a href="OTHL-ProTeamRoster.php#RedWings">Griffins</a> (DET)</td><td>82</td><td>64</td><td>18</td><td>0</td><td><b>128</b></td><td>63</td><td>439</td><td>181</td><td>258</td><td>0.780</td><td>35-6-0</td><td>29-12-0</td><td>8-2-0</td><td>8-2-0</td><td>7-3-0</td><td>L1</td><td></td></tr>
<tr><td>6 Y</td><td><a href="OTHL-ProTeamRoster.php#Panthers">Thunderbirds</a> (FLA)</td><td>82</td><td>63</td><td>19</td><td>0</td><td><b>126</b></td><td>60</td><td>401</td><td>174</td><td>227</td><td>0.768</td><td>29-12-0</td><td>34-7-0</td><td>6-4-0</td><td>6-4-0</td><td>8-2-0</td><td>W2</td><td></td></tr>
<tr><td>7 X</td><td><a href="OTHL-ProTeamRoster.php#MapleLeafs">Marlies</a> (TOR)</td><td>82</td><td>61</td><td>17</td><td>4</td><td><b>126</b></td><td>58</td><td>430</td><td>190</td><td>240</td><td>0.768</td><td>29-9-3</td><td>32-8-1</td><td>7-3-0</td><td>7-3-0</td><td>8-2-0</td><td>W4</td><td></td></tr>
<tr><td>8 X</td><td><a href="OTHL-ProTeamRoster.php#Ducks">Gulls</a> (ANH)</td><td>82</td><td>61</td><td>18</td><td>3</td><td><b>125</b></td><td>60</td><td>430</td><td>198</td><td>232</td><td>0.762</td><td>34-7-0</td><td>27-11-3</td><td>8-1-1</td><td>9-1-0</td><td>5-4-1</td><td>W5</td><td></td></tr>
<tr><td>9 X</td><td><a href="OTHL-ProTeamRoster.php#Jets">Moose</a> (WPG)</td><td>82</td><td>60</td><td>18</td><td>4</td><td><b>124</b></td><td>58</td><td>446</td><td>191</td><td>255</td><td>0.756</td><td>31-8-2</td><td>29-10-2</td><td>7-3-0</td><td>8-2-0</td><td>8-2-0</td><td>W4</td><td></td></tr>
<tr><td>10 X</td><td><a href="OTHL-ProTeamRoster.php#Flames">Heat</a> (CGY)</td><td>82</td><td>60</td><td>19</td><td>3</td><td><b>123</b></td><td>59</td><td>465</td><td>195</td><td>270</td><td>0.750</td><td>31-9-1</td><td>29-10-2</td><td>5-4-1</td><td>5-4-1</td><td>6-2-2</td><td>L2</td><td></td></tr>
<tr><td>11 X</td><td><a href="OTHL-ProTeamRoster.php#BlueJackets">Monsters</a> (CLB)</td><td>82</td><td>55</td><td>21</td><td>6</td><td><b>116</b></td><td>53</td><td>420</td><td>219</td><td>201</td><td>0.707</td><td>27-9-5</td><td>28-12-1</td><td>5-4-1</td><td>7-1-2</td><td>4-6-0</td><td>L1</td><td></td></tr>
<tr><td>12 X</td><td><a href="OTHL-ProTeamRoster.php#Kraken">Mariners</a> (SEA)</td><td>82</td><td>53</td><td>27</td><td>2</td><td><b>108</b></td><td>53</td><td>425</td><td>223</td><td>202</td><td>0.659</td><td>29-11-1</td><td>24-16-1</td><td>6-4-0</td><td>5-4-1</td><td>4-6-0</td><td>W1</td><td></td></tr>
<tr><td>13 X</td><td><a href="OTHL-ProTeamRoster.php#Bruins">Bruins</a> (BOS)</td><td>82</td><td>51</td><td>27</td><td>4</td><td><b>106</b></td><td>50</td><td>384</td><td>206</td><td>178</td><td>0.646</td><td>27-14-0</td><td>24-13-4</td><td>8-2-0</td><td>7-3-0</td><td>6-3-1</td><td>W2</td><td></td></tr>
<tr><td>14 X</td><td><a href="OTHL-ProTeamRoster.php#Penguins">Penguins</a> (PIT)</td><td>82</td><td>51</td><td>27</td><td>4</td><td><b>106</b></td><td>49</td><td>412</td><td>279</td><td>133</td><td>0.646</td><td>27-12-2</td><td>24-15-2</td><td>8-2-0</td><td>7-2-1</td><td>6-4-0</td><td>W3</td><td></td></tr>
<tr><td>15 X</td><td><a href="OTHL-ProTeamRoster.php#Canadiens">Rocket</a> (MTL)</td><td>82</td><td>50</td><td>29</td><td>3</td><td><b>103</b></td><td>50</td><td>275</td><td>165</td><td>110</td><td>0.628</td><td>26-14-1</td><td>24-15-2</td><td>5-5-0</td><td>6-4-0</td><td>5-5-0</td><td>L3</td><td></td></tr>
<tr><td>16 X</td><td><a href="OTHL-ProTeamRoster.php#Predators">Admirals</a> (NSH)</td><td>82</td><td>49</td><td>28</td><td>5</td><td><b>103</b></td><td>46</td><td>314</td><td>209</td><td>105</td><td>0.628</td><td>27-13-1</td><td>22-15-4</td><td>6-4-0</td><td>7-3-0</td><td>5-4-1</td><td>W2</td><td></td></tr>
<tr><td>17 E</td><td><a href="OTHL-ProTeamRoster.php#Kings">Reign</a> (LAK)</td><td>82</td><td>48</td><td>27</td><td>7</td><td><b>103</b></td><td>45</td><td>268</td><td>167</td><td>101</td><td>0.628</td><td>26-12-3</td><td>22-15-4</td><td>6-3-1</td><td>6-4-0</td><td>8-0-2</td><td>W2</td><td></td></tr>
<tr><td>18 E</td><td><a href="OTHL-ProTeamRoster.php#GoldenKnights">Wolves</a> (VGK)</td><td>82</td><td>46</td><td>35</td><td>1</td><td><b>93</b></td><td>44</td><td>330</td><td>236</td><td>94</td><td>0.567</td><td>26-15-0</td><td>20-20-1</td><td>4-6-0</td><td>7-3-0</td><td>4-6-0</td><td>L2</td><td>10</td></tr>
<tr><td>19 E</td><td><a href="OTHL-ProTeamRoster.php#Hurricanes">Checkers</a> (CAR)</td><td>82</td><td>43</td><td>35</td><td>4</td><td><b>90</b></td><td>43</td><td>376</td><td>312</td><td>64</td><td>0.549</td><td>23-16-2</td><td>20-19-2</td><td>6-3-1</td><td>6-3-1</td><td>7-3-0</td><td>W3</td><td>13</td></tr>
<tr><td>20 E</td><td><a href="OTHL-ProTeamRoster.php#Devils">Comets</a> (NJD)</td><td>82</td><td>33</td><td>42</td><td>7</td><td><b>73</b></td><td>33</td><td>272</td><td>369</td><td>-97</td><td>0.445</td><td>20-19-2</td><td>13-23-5</td><td>5-3-2</td><td>5-5-0</td><td>5-2-3</td><td>L2</td><td>30</td></tr>
<tr><td>21 E</td><td><a href="OTHL-ProTeamRoster.php#Senators">Senators</a> (OTT)</td><td>82</td><td>28</td><td>49</td><td>5</td><td><b>61</b></td><td>28</td><td>254</td><td>402</td><td>-148</td><td>0.372</td><td>18-22-1</td><td>10-27-4</td><td>2-8-0</td><td>3-7-0</td><td>1-9-0</td><td>L1</td><td>42</td></tr>
<tr><td>22 E</td><td><a href="OTHL-ProTeamRoster.php#Wild">Wild</a> (MIN)</td><td>82</td><td>26</td><td>52</td><td>4</td><td><b>56</b></td><td>25</td><td>262</td><td>408</td><td>-146</td><td>0.341</td><td>13-26-2</td><td>13-26-2</td><td>6-3-1</td><td>8-1-1</td><td>5-4-1</td><td>L1</td><td>47</td></tr>
<tr><td>23 E</td><td><a href="OTHL-ProTeamRoster.php#Flyers">Phantoms</a> (PHL)</td><td>82</td><td>27</td><td>54</td><td>1</td><td><b>55</b></td><td>27</td><td>284</td><td>442</td><td>-158</td><td>0.335</td><td>15-26-0</td><td>12-28-1</td><td>3-7-0</td><td>5-5-0</td><td>1-9-0</td><td>L1</td><td>48</td></tr>
<tr><td>24 E</td><td><a href="OTHL-ProTeamRoster.php#Stars">Stars</a> (DAL)</td><td>82</td><td>25</td><td>56</td><td>1</td><td><b>51</b></td><td>24</td><td>281</td><td>495</td><td>-214</td><td>0.311</td><td>13-28-0</td><td>12-28-1</td><td>2-8-0</td><td>2-8-0</td><td>5-4-1</td><td>L4</td><td>52</td></tr>
<tr><td>25 E</td><td><a href="OTHL-ProTeamRoster.php#Lightning">Crunch</a> (TBL)</td><td>82</td><td>19</td><td>58</td><td>5</td><td><b>43</b></td><td>19</td><td>211</td><td>524</td><td>-313</td><td>0.262</td><td>13-28-0</td><td>6-30-5</td><td>2-6-2</td><td>3-7-0</td><td>1-7-2</td><td>W1</td><td>60</td></tr>
<tr><td>26 E</td><td><a href="OTHL-ProTeamRoster.php#Coyotes">Roadrunners</a> (ARI)</td><td>82</td><td>17</td><td>63</td><td>2</td><td><b>36</b></td><td>17</td><td>188</td><td>559</td><td>-371</td><td>0.220</td><td>11-29-1</td><td>6-34-1</td><td>3-7-0</td><td>3-7-0</td><td>3-6-1</td><td>L3</td><td>67</td></tr>
<tr><td>27 E</td><td><a href="OTHL-ProTeamRoster.php#Rangers">Wolf Pack</a> (NYR)</td><td>82</td><td>14</td><td>66</td><td>2</td><td><b>30</b></td><td>13</td><td>187</td><td>585</td><td>-398</td><td>0.183</td><td>7-32-2</td><td>7-34-0</td><td>2-8-0</td><td>3-7-0</td><td>2-8-0</td><td>L1</td><td>73</td></tr>
<tr><td>28 E</td><td><a href="OTHL-ProTeamRoster.php#Capitals">Bears</a> (WSH)</td><td>82</td><td>11</td><td>68</td><td>3</td><td><b>25</b></td><td>11</td><td>182</td><td>542</td><td>-360</td><td>0.152</td><td>6-34-1</td><td>5-34-2</td><td>0-10-0</td><td>0-10-0</td><td>0-10-0</td><td>L19</td><td>78</td></tr>
<tr><td>29 E</td><td><a href="OTHL-ProTeamRoster.php#Islanders">Sound Tigers</a> (NYI)</td><td>82</td><td>9</td><td>69</td><td>4</td><td><b>22</b></td><td>9</td><td>183</td><td>584</td><td>-401</td><td>0.134</td><td>4-35-2</td><td>5-34-2</td><td>1-9-0</td><td>1-9-0</td><td>1-8-1</td><td>L7</td><td>81</td></tr>
<tr><td>30 E</td><td><a href="OTHL-ProTeamRoster.php#Avalanche">Eagles</a> (COL)</td><td>82</td><td>10</td><td>71</td><td>1</td><td><b>21</b></td><td>10</td><td>188</td><td>546</td><td>-358</td><td>0.128</td><td>6-35-0</td><td>4-36-1</td><td>1-8-1</td><td>1-9-0</td><td>0-9-1</td><td>L3</td><td>82</td></tr>
<tr><td>31 E</td><td><a href="OTHL-ProTeamRoster.php#Blues">Rampage </a> (STL)</td><td>82</td><td>9</td><td>71</td><td>2</td><td><b>20</b></td><td>8</td><td>181</td><td>568</td><td>-387</td><td>0.122</td><td>6-34-1</td><td>3-37-1</td><td>3-7-0</td><td>2-7-1</td><td>1-9-0</td><td>L3</td><td>83</td></tr>
<tr><td>32 E</td><td><a href="OTHL-ProTeamRoster.php#Sharks">Barracudas</a> (SJS)</td><td>82</td><td>6</td><td>71</td><td>5</td><td><b>17</b></td><td>6</td><td>162</td><td>554</td><td>-392</td><td>0.104</td><td>3-34-4</td><td>3-37-1</td><td>1-8-1</td><td>1-7-2</td><td>1-9-0</td><td>L1</td><td>86</td></tr>
</tbody></table></div></div></div>
<h2 class="STHSStanding_PointSystem">Point System</h2>
<b>Win :</b> 2 -- <b>Loss :</b> 0 -- <b>OT Win :</b> 2 -- <b>OT Loss :</b> 1 -- <b>SO Win :</b> 2 -- <b>SO Loss :</b> 1<br /><br />P.S. The simulator only uses points to give the title. If two team have the same amount of point, none of them will be award the title until your simulate the last game/day of your season.
<?php include "Footer.php";?>