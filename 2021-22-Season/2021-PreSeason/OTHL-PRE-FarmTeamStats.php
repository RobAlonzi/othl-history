<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Stats</title>
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
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Eagles</td><td>16</td><td>1</td><td>15</td><td>0</td><td>0</td><td>0</td><td>0</td><td>36</td><td>100</td><td>8</td><td>1</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>49</td><td>8</td><td>0</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>51</td><td>36</td><td>72</td><td>108</td></tr>
<tr><td>IceHogs</td><td>16</td><td>11</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>63</td><td>32</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>16</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>16</td><td>63</td><td>110</td><td>173</td></tr>
<tr><td>Monsters</td><td>16</td><td>10</td><td>4</td><td>0</td><td>1</td><td>1</td><td>0</td><td>74</td><td>40</td><td>8</td><td>4</td><td>3</td><td>0</td><td>0</td><td>1</td><td>0</td><td>35</td><td>17</td><td>8</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>39</td><td>23</td><td>74</td><td>129</td><td>203</td></tr>
<tr><td>Rampage </td><td>16</td><td>1</td><td>15</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>105</td><td>8</td><td>1</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>49</td><td>8</td><td>0</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>56</td><td>28</td><td>55</td><td>83</td></tr>
<tr><td>Bruins</td><td>16</td><td>13</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>103</td><td>34</td><td>8</td><td>7</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>13</td><td>8</td><td>6</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>58</td><td>21</td><td>103</td><td>167</td><td>270</td></tr>
<tr><td>Rocket</td><td>16</td><td>12</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>62</td><td>26</td><td>8</td><td>5</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>27</td><td>15</td><td>8</td><td>7</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>11</td><td>62</td><td>109</td><td>171</td></tr>
<tr><td>Canucks</td><td>16</td><td>12</td><td>3</td><td>0</td><td>0</td><td>1</td><td>0</td><td>74</td><td>32</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>36</td><td>20</td><td>8</td><td>6</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>38</td><td>12</td><td>74</td><td>126</td><td>200</td></tr>
<tr><td>Bears</td><td>16</td><td>3</td><td>12</td><td>0</td><td>1</td><td>0</td><td>0</td><td>53</td><td>103</td><td>8</td><td>1</td><td>6</td><td>0</td><td>1</td><td>0</td><td>0</td><td>26</td><td>57</td><td>8</td><td>2</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>46</td><td>53</td><td>97</td><td>150</td></tr>
<tr><td>Roadrunners</td><td>16</td><td>5</td><td>11</td><td>0</td><td>0</td><td>0</td><td>0</td><td>53</td><td>85</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>35</td><td>8</td><td>1</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>50</td><td>53</td><td>101</td><td>154</td></tr>
<tr><td>Comets</td><td>16</td><td>4</td><td>10</td><td>0</td><td>1</td><td>0</td><td>1</td><td>52</td><td>95</td><td>8</td><td>1</td><td>5</td><td>0</td><td>1</td><td>0</td><td>1</td><td>27</td><td>45</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>50</td><td>52</td><td>85</td><td>137</td></tr>
<tr><td>Gulls</td><td>16</td><td>7</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>71</td><td>68</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>32</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>36</td><td>71</td><td>119</td><td>190</td></tr>
<tr><td>Heat</td><td>16</td><td>13</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>97</td><td>32</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>44</td><td>20</td><td>8</td><td>7</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>53</td><td>12</td><td>97</td><td>173</td><td>270</td></tr>
<tr><td>Phantoms</td><td>16</td><td>12</td><td>2</td><td>0</td><td>1</td><td>1</td><td>0</td><td>90</td><td>31</td><td>8</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>46</td><td>18</td><td>8</td><td>6</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>44</td><td>13</td><td>90</td><td>131</td><td>221</td></tr>
<tr><td>Wolves</td><td>16</td><td>8</td><td>7</td><td>0</td><td>0</td><td>1</td><td>0</td><td>46</td><td>32</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>14</td><td>8</td><td>4</td><td>3</td><td>0</td><td>0</td><td>1</td><td>0</td><td>25</td><td>18</td><td>46</td><td>83</td><td>129</td></tr>
<tr><td>Checkers</td><td>16</td><td>10</td><td>4</td><td>1</td><td>1</td><td>0</td><td>0</td><td>93</td><td>74</td><td>8</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>51</td><td>34</td><td>8</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>42</td><td>40</td><td>93</td><td>167</td><td>260</td></tr>
<tr><td>Sound Tigers</td><td>16</td><td>2</td><td>13</td><td>1</td><td>0</td><td>0</td><td>0</td><td>44</td><td>99</td><td>8</td><td>1</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>51</td><td>8</td><td>1</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>24</td><td>48</td><td>44</td><td>87</td><td>131</td></tr>
<tr><td>Moose</td><td>16</td><td>11</td><td>4</td><td>0</td><td>0</td><td>0</td><td>1</td><td>89</td><td>33</td><td>8</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>47</td><td>12</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>42</td><td>21</td><td>89</td><td>144</td><td>233</td></tr>
<tr><td>Reign</td><td>16</td><td>10</td><td>4</td><td>1</td><td>0</td><td>0</td><td>1</td><td>63</td><td>41</td><td>8</td><td>5</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>33</td><td>15</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>26</td><td>63</td><td>107</td><td>170</td></tr>
<tr><td>Mariners</td><td>16</td><td>8</td><td>7</td><td>0</td><td>0</td><td>0</td><td>1</td><td>77</td><td>68</td><td>8</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>41</td><td>35</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>36</td><td>33</td><td>77</td><td>132</td><td>209</td></tr>
<tr><td>Crunch</td><td>16</td><td>2</td><td>14</td><td>0</td><td>0</td><td>0</td><td>0</td><td>38</td><td>95</td><td>8</td><td>1</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>52</td><td>8</td><td>1</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>43</td><td>38</td><td>70</td><td>108</td></tr>
<tr><td>Marlies</td><td>16</td><td>13</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>100</td><td>19</td><td>8</td><td>7</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>55</td><td>9</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>10</td><td>100</td><td>171</td><td>271</td></tr>
<tr><td>Condors</td><td>16</td><td>11</td><td>3</td><td>0</td><td>1</td><td>1</td><td>0</td><td>79</td><td>33</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>41</td><td>23</td><td>8</td><td>6</td><td>0</td><td>0</td><td>1</td><td>1</td><td>0</td><td>38</td><td>10</td><td>79</td><td>129</td><td>208</td></tr>
<tr><td>Thunderbirds</td><td>16</td><td>11</td><td>4</td><td>0</td><td>0</td><td>0</td><td>1</td><td>80</td><td>42</td><td>8</td><td>5</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>35</td><td>19</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>23</td><td>80</td><td>130</td><td>210</td></tr>
<tr><td>Penguins</td><td>16</td><td>6</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>61</td><td>106</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>61</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>45</td><td>61</td><td>106</td><td>167</td></tr>
<tr><td>Admirals</td><td>16</td><td>10</td><td>2</td><td>1</td><td>0</td><td>2</td><td>1</td><td>72</td><td>39</td><td>8</td><td>5</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>38</td><td>18</td><td>8</td><td>5</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>34</td><td>21</td><td>72</td><td>117</td><td>189</td></tr>
<tr><td>Wolf Pack</td><td>16</td><td>2</td><td>14</td><td>0</td><td>0</td><td>0</td><td>0</td><td>52</td><td>108</td><td>8</td><td>1</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>52</td><td>8</td><td>1</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>56</td><td>52</td><td>102</td><td>154</td></tr>
<tr><td>Griffins</td><td>16</td><td>4</td><td>10</td><td>0</td><td>1</td><td>0</td><td>1</td><td>48</td><td>74</td><td>8</td><td>2</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>39</td><td>8</td><td>2</td><td>4</td><td>0</td><td>1</td><td>0</td><td>1</td><td>27</td><td>35</td><td>48</td><td>74</td><td>122</td></tr>
<tr><td> Americans</td><td>16</td><td>12</td><td>1</td><td>0</td><td>1</td><td>1</td><td>1</td><td>76</td><td>25</td><td>8</td><td>7</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>42</td><td>10</td><td>8</td><td>5</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>34</td><td>15</td><td>76</td><td>127</td><td>203</td></tr>
<tr><td>Senators</td><td>16</td><td>4</td><td>11</td><td>1</td><td>0</td><td>0</td><td>0</td><td>55</td><td>102</td><td>8</td><td>2</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>46</td><td>8</td><td>2</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>29</td><td>56</td><td>55</td><td>99</td><td>154</td></tr>
<tr><td>Barracudas</td><td>16</td><td>6</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>49</td><td>88</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>45</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>43</td><td>49</td><td>89</td><td>138</td></tr>
<tr><td>Stars</td><td>16</td><td>4</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>50</td><td>112</td><td>8</td><td>2</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>57</td><td>8</td><td>2</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>55</td><td>50</td><td>97</td><td>147</td></tr>
<tr><td>Wild</td><td>16</td><td>2</td><td>14</td><td>0</td><td>0</td><td>0</td><td>0</td><td>38</td><td>93</td><td>8</td><td>2</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>46</td><td>8</td><td>0</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>47</td><td>38</td><td>73</td><td>111</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Eagles</td><td>COL</td><td>13</td><td>15</td><td>8</td><td>0</td><td>393</td><td>123</td><td>127</td><td>143</td><td>0</td><td>752</td><td>225</td><td>53</td><td>236</td><td>38</td><td>4</td><td>10.53%</td><td>20</td><td>4</td><td>80.00%</td><td>0</td><td>41.05%</td><td>36.56%</td><td>39.32%</td><td>549</td><td>228</td><td>183</td><td>120</td><td>150</td><td>72</td><td>0</td><td>0</td></tr>
<tr><td>IceHogs</td><td>RCK</td><td>23</td><td>22</td><td>18</td><td>0</td><td>449</td><td>144</td><td>138</td><td>167</td><td>0</td><td>318</td><td>95</td><td>127</td><td>295</td><td>61</td><td>14</td><td>22.95%</td><td>58</td><td>6</td><td>89.66%</td><td>3</td><td>56.47%</td><td>63.36%</td><td>57.89%</td><td>299</td><td>480</td><td>181</td><td>91</td><td>361</td><td>103</td><td>3</td><td>1</td></tr>
<tr><td>Monsters</td><td>CLE</td><td>39</td><td>16</td><td>18</td><td>3</td><td>539</td><td>195</td><td>175</td><td>164</td><td>8</td><td>335</td><td>75</td><td>158</td><td>309</td><td>60</td><td>9</td><td>15.00%</td><td>73</td><td>9</td><td>87.67%</td><td>3</td><td>58.52%</td><td>69.89%</td><td>66.40%</td><td>301</td><td>482</td><td>184</td><td>96</td><td>364</td><td>100</td><td>1</td><td>0</td></tr>
<tr><td>Rampage </td><td>SAR</td><td>12</td><td>12</td><td>4</td><td>0</td><td>346</td><td>141</td><td>112</td><td>93</td><td>0</td><td>696</td><td>212</td><td>68</td><td>210</td><td>36</td><td>5</td><td>13.89%</td><td>34</td><td>5</td><td>85.29%</td><td>1</td><td>32.13%</td><td>36.58%</td><td>32.20%</td><td>576</td><td>216</td><td>169</td><td>110</td><td>143</td><td>64</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>PRO</td><td>44</td><td>32</td><td>26</td><td>1</td><td>616</td><td>198</td><td>217</td><td>200</td><td>1</td><td>410</td><td>117</td><td>117</td><td>358</td><td>38</td><td>15</td><td>39.47%</td><td>49</td><td>9</td><td>81.63%</td><td>0</td><td>59.90%</td><td>55.08%</td><td>59.85%</td><td>297</td><td>497</td><td>166</td><td>87</td><td>393</td><td>91</td><td>3</td><td>0</td></tr>
<tr><td>Rocket</td><td>LAV</td><td>30</td><td>14</td><td>16</td><td>2</td><td>312</td><td>111</td><td>99</td><td>100</td><td>2</td><td>309</td><td>98</td><td>140</td><td>305</td><td>53</td><td>14</td><td>26.42%</td><td>56</td><td>4</td><td>92.86%</td><td>0</td><td>49.35%</td><td>52.45%</td><td>54.24%</td><td>314</td><td>457</td><td>191</td><td>95</td><td>340</td><td>106</td><td>3</td><td>0</td></tr>
<tr><td>Canucks</td><td>ABB</td><td>38</td><td>16</td><td>19</td><td>1</td><td>459</td><td>154</td><td>161</td><td>144</td><td>5</td><td>348</td><td>105</td><td>131</td><td>317</td><td>59</td><td>13</td><td>22.03%</td><td>59</td><td>8</td><td>86.44%</td><td>0</td><td>57.44%</td><td>56.08%</td><td>55.65%</td><td>317</td><td>465</td><td>183</td><td>97</td><td>351</td><td>102</td><td>3</td><td>0</td></tr>
<tr><td>Bears</td><td>HER</td><td>19</td><td>18</td><td>16</td><td>0</td><td>567</td><td>182</td><td>173</td><td>212</td><td>0</td><td>781</td><td>239</td><td>46</td><td>330</td><td>27</td><td>4</td><td>14.81%</td><td>22</td><td>4</td><td>81.82%</td><td>1</td><td>36.98%</td><td>43.22%</td><td>38.71%</td><td>490</td><td>298</td><td>173</td><td>102</td><td>211</td><td>78</td><td>0</td><td>0</td></tr>
<tr><td>Roadrunners</td><td>TUC</td><td>17</td><td>22</td><td>14</td><td>0</td><td>441</td><td>129</td><td>147</td><td>165</td><td>0</td><td>628</td><td>186</td><td>68</td><td>298</td><td>39</td><td>6</td><td>15.38%</td><td>28</td><td>6</td><td>78.57%</td><td>1</td><td>41.99%</td><td>37.54%</td><td>44.01%</td><td>500</td><td>277</td><td>183</td><td>113</td><td>194</td><td>78</td><td>0</td><td>0</td></tr>
<tr><td>Comets</td><td>UTI</td><td>22</td><td>12</td><td>18</td><td>0</td><td>449</td><td>127</td><td>137</td><td>182</td><td>8</td><td>580</td><td>183</td><td>73</td><td>272</td><td>42</td><td>6</td><td>14.29%</td><td>33</td><td>12</td><td>63.64%</td><td>1</td><td>41.18%</td><td>47.01%</td><td>47.81%</td><td>482</td><td>308</td><td>176</td><td>106</td><td>225</td><td>77</td><td>0</td><td>0</td></tr>
<tr><td>Gulls</td><td>SDG</td><td>32</td><td>19</td><td>20</td><td>0</td><td>618</td><td>203</td><td>198</td><td>217</td><td>0</td><td>502</td><td>149</td><td>76</td><td>327</td><td>34</td><td>1</td><td>2.94%</td><td>31</td><td>6</td><td>80.65%</td><td>0</td><td>52.08%</td><td>53.66%</td><td>53.00%</td><td>370</td><td>409</td><td>182</td><td>97</td><td>310</td><td>92</td><td>1</td><td>0</td></tr>
<tr><td>Heat</td><td>STK</td><td>38</td><td>34</td><td>25</td><td>0</td><td>539</td><td>176</td><td>189</td><td>174</td><td>0</td><td>235</td><td>69</td><td>179</td><td>388</td><td>42</td><td>9</td><td>21.43%</td><td>73</td><td>11</td><td>84.93%</td><td>3</td><td>57.30%</td><td>67.40%</td><td>69.06%</td><td>226</td><td>560</td><td>174</td><td>77</td><td>440</td><td>107</td><td>2</td><td>0</td></tr>
<tr><td>Phantoms</td><td>LVP</td><td>34</td><td>29</td><td>26</td><td>1</td><td>616</td><td>209</td><td>204</td><td>200</td><td>6</td><td>373</td><td>127</td><td>96</td><td>328</td><td>29</td><td>7</td><td>24.14%</td><td>41</td><td>5</td><td>87.80%</td><td>0</td><td>62.65%</td><td>65.63%</td><td>64.43%</td><td>305</td><td>497</td><td>164</td><td>84</td><td>395</td><td>90</td><td>2</td><td>0</td></tr>
<tr><td>Wolves</td><td>CHI</td><td>16</td><td>12</td><td>17</td><td>2</td><td>381</td><td>126</td><td>124</td><td>128</td><td>6</td><td>304</td><td>89</td><td>102</td><td>273</td><td>63</td><td>12</td><td>19.05%</td><td>46</td><td>6</td><td>86.96%</td><td>0</td><td>47.89%</td><td>60.78%</td><td>51.69%</td><td>319</td><td>474</td><td>172</td><td>93</td><td>365</td><td>94</td><td>4</td><td>0</td></tr>
<tr><td>Checkers</td><td>CHR</td><td>29</td><td>32</td><td>31</td><td>1</td><td>743</td><td>213</td><td>259</td><td>270</td><td>1</td><td>517</td><td>151</td><td>58</td><td>326</td><td>38</td><td>6</td><td>15.79%</td><td>24</td><td>7</td><td>70.83%</td><td>0</td><td>55.88%</td><td>54.84%</td><td>54.76%</td><td>358</td><td>436</td><td>168</td><td>91</td><td>342</td><td>86</td><td>0</td><td>0</td></tr>
<tr><td>Sound Tigers</td><td>BPT</td><td>13</td><td>15</td><td>15</td><td>1</td><td>501</td><td>171</td><td>154</td><td>173</td><td>3</td><td>790</td><td>230</td><td>48</td><td>304</td><td>29</td><td>2</td><td>6.90%</td><td>22</td><td>9</td><td>59.09%</td><td>0</td><td>44.63%</td><td>40.62%</td><td>40.61%</td><td>529</td><td>258</td><td>174</td><td>110</td><td>179</td><td>72</td><td>0</td><td>0</td></tr>
<tr><td>Moose</td><td>MAN</td><td>42</td><td>27</td><td>20</td><td>1</td><td>599</td><td>216</td><td>184</td><td>198</td><td>8</td><td>308</td><td>99</td><td>122</td><td>264</td><td>54</td><td>8</td><td>14.81%</td><td>53</td><td>17</td><td>67.92%</td><td>0</td><td>68.90%</td><td>71.14%</td><td>66.95%</td><td>305</td><td>493</td><td>167</td><td>92</td><td>389</td><td>88</td><td>2</td><td>0</td></tr>
<tr><td>Reign</td><td>ONT</td><td>21</td><td>29</td><td>12</td><td>2</td><td>402</td><td>109</td><td>155</td><td>134</td><td>10</td><td>390</td><td>103</td><td>105</td><td>322</td><td>55</td><td>11</td><td>20.00%</td><td>45</td><td>5</td><td>88.89%</td><td>1</td><td>46.78%</td><td>60.61%</td><td>56.47%</td><td>355</td><td>435</td><td>177</td><td>95</td><td>328</td><td>95</td><td>1</td><td>0</td></tr>
<tr><td>Mariners</td><td>PSM</td><td>32</td><td>23</td><td>22</td><td>0</td><td>590</td><td>196</td><td>185</td><td>206</td><td>6</td><td>359</td><td>93</td><td>148</td><td>323</td><td>56</td><td>11</td><td>19.64%</td><td>61</td><td>16</td><td>73.77%</td><td>1</td><td>60.07%</td><td>62.21%</td><td>63.22%</td><td>315</td><td>474</td><td>176</td><td>89</td><td>368</td><td>93</td><td>0</td><td>1</td></tr>
<tr><td>Crunch</td><td>SYR</td><td>15</td><td>15</td><td>8</td><td>0</td><td>360</td><td>107</td><td>126</td><td>127</td><td>0</td><td>557</td><td>195</td><td>86</td><td>302</td><td>46</td><td>6</td><td>13.04%</td><td>35</td><td>10</td><td>71.43%</td><td>0</td><td>32.99%</td><td>32.61%</td><td>28.83%</td><td>523</td><td>258</td><td>179</td><td>115</td><td>177</td><td>72</td><td>0</td><td>0</td></tr>
<tr><td>Marlies</td><td>TOR</td><td>41</td><td>33</td><td>26</td><td>0</td><td>617</td><td>196</td><td>206</td><td>215</td><td>0</td><td>265</td><td>85</td><td>177</td><td>324</td><td>57</td><td>10</td><td>17.54%</td><td>81</td><td>9</td><td>88.89%</td><td>3</td><td>77.68%</td><td>74.29%</td><td>75.88%</td><td>271</td><td>508</td><td>181</td><td>92</td><td>390</td><td>103</td><td>4</td><td>0</td></tr>
<tr><td>Condors</td><td>BKR</td><td>27</td><td>30</td><td>21</td><td>2</td><td>516</td><td>165</td><td>165</td><td>183</td><td>9</td><td>398</td><td>126</td><td>135</td><td>336</td><td>41</td><td>8</td><td>19.51%</td><td>58</td><td>7</td><td>87.93%</td><td>1</td><td>49.31%</td><td>58.39%</td><td>53.85%</td><td>329</td><td>460</td><td>178</td><td>92</td><td>353</td><td>95</td><td>5</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>SPR</td><td>37</td><td>26</td><td>17</td><td>0</td><td>584</td><td>195</td><td>183</td><td>202</td><td>7</td><td>381</td><td>119</td><td>97</td><td>336</td><td>41</td><td>12</td><td>29.27%</td><td>44</td><td>7</td><td>84.09%</td><td>3</td><td>57.89%</td><td>54.85%</td><td>60.80%</td><td>294</td><td>495</td><td>177</td><td>88</td><td>385</td><td>98</td><td>2</td><td>0</td></tr>
<tr><td>Penguins</td><td>WBS</td><td>34</td><td>16</td><td>11</td><td>0</td><td>601</td><td>195</td><td>206</td><td>200</td><td>0</td><td>609</td><td>164</td><td>83</td><td>365</td><td>39</td><td>4</td><td>10.26%</td><td>36</td><td>9</td><td>75.00%</td><td>0</td><td>38.93%</td><td>42.89%</td><td>41.78%</td><td>387</td><td>396</td><td>176</td><td>93</td><td>294</td><td>91</td><td>0</td><td>1</td></tr>
<tr><td>Admirals</td><td>MIL</td><td>28</td><td>30</td><td>11</td><td>7</td><td>510</td><td>142</td><td>189</td><td>161</td><td>35</td><td>355</td><td>103</td><td>201</td><td>320</td><td>48</td><td>11</td><td>22.92%</td><td>75</td><td>11</td><td>85.33%</td><td>2</td><td>45.55%</td><td>54.25%</td><td>56.12%</td><td>315</td><td>487</td><td>177</td><td>94</td><td>378</td><td>96</td><td>0</td><td>0</td></tr>
<tr><td>Wolf Pack</td><td>HFD</td><td>26</td><td>13</td><td>13</td><td>0</td><td>477</td><td>172</td><td>161</td><td>144</td><td>0</td><td>912</td><td>261</td><td>55</td><td>266</td><td>29</td><td>3</td><td>10.34%</td><td>21</td><td>5</td><td>76.19%</td><td>0</td><td>42.36%</td><td>39.34%</td><td>40.21%</td><td>529</td><td>257</td><td>174</td><td>109</td><td>175</td><td>72</td><td>0</td><td>0</td></tr>
<tr><td>Griffins</td><td>GRP</td><td>20</td><td>16</td><td>12</td><td>2</td><td>419</td><td>139</td><td>131</td><td>148</td><td>4</td><td>390</td><td>108</td><td>142</td><td>327</td><td>45</td><td>13</td><td>28.89%</td><td>52</td><td>9</td><td>82.69%</td><td>0</td><td>40.79%</td><td>48.87%</td><td>48.50%</td><td>370</td><td>410</td><td>186</td><td>100</td><td>303</td><td>95</td><td>0</td><td>0</td></tr>
<tr><td> Americans</td><td>ROC</td><td>32</td><td>20</td><td>23</td><td>3</td><td>427</td><td>142</td><td>131</td><td>147</td><td>17</td><td>355</td><td>95</td><td>176</td><td>312</td><td>54</td><td>10</td><td>18.52%</td><td>67</td><td>4</td><td>94.03%</td><td>2</td><td>51.86%</td><td>52.17%</td><td>59.65%</td><td>347</td><td>447</td><td>180</td><td>98</td><td>335</td><td>96</td><td>5</td><td>0</td></tr>
<tr><td>Senators</td><td>BEL</td><td>32</td><td>8</td><td>14</td><td>1</td><td>444</td><td>142</td><td>138</td><td>159</td><td>5</td><td>687</td><td>178</td><td>88</td><td>304</td><td>54</td><td>6</td><td>11.11%</td><td>34</td><td>13</td><td>61.76%</td><td>0</td><td>30.73%</td><td>35.11%</td><td>34.24%</td><td>489</td><td>292</td><td>181</td><td>110</td><td>204</td><td>78</td><td>0</td><td>0</td></tr>
<tr><td>Barracudas</td><td>SJB</td><td>17</td><td>17</td><td>15</td><td>0</td><td>464</td><td>152</td><td>167</td><td>145</td><td>0</td><td>528</td><td>157</td><td>95</td><td>327</td><td>36</td><td>7</td><td>19.44%</td><td>34</td><td>8</td><td>76.47%</td><td>1</td><td>40.22%</td><td>47.14%</td><td>36.27%</td><td>437</td><td>338</td><td>185</td><td>104</td><td>242</td><td>88</td><td>0</td><td>0</td></tr>
<tr><td>Stars</td><td>TEX</td><td>23</td><td>19</td><td>8</td><td>0</td><td>447</td><td>136</td><td>159</td><td>152</td><td>0</td><td>672</td><td>166</td><td>81</td><td>266</td><td>47</td><td>7</td><td>14.89%</td><td>37</td><td>11</td><td>70.27%</td><td>1</td><td>37.36%</td><td>43.88%</td><td>41.20%</td><td>502</td><td>286</td><td>172</td><td>108</td><td>200</td><td>77</td><td>0</td><td>0</td></tr>
<tr><td>Wild</td><td>IOA</td><td>10</td><td>13</td><td>15</td><td>0</td><td>350</td><td>120</td><td>109</td><td>121</td><td>0</td><td>732</td><td>199</td><td>66</td><td>234</td><td>39</td><td>3</td><td>7.69%</td><td>27</td><td>5</td><td>81.48%</td><td>0</td><td>28.15%</td><td>33.33%</td><td>28.85%</td><td>589</td><td>208</td><td>163</td><td>112</td><td>139</td><td>62</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 4.04</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bruins</td><td>6.44</td></tr>
<tr><td>2</td><td>Marlies</td><td>6.25</td></tr>
<tr><td>3</td><td>Heat</td><td>6.06</td></tr>
<tr><td>4</td><td>Checkers</td><td>5.81</td></tr>
<tr><td>5</td><td>Phantoms</td><td>5.63</td></tr>
<tr><td>6</td><td>Moose</td><td>5.56</td></tr>
<tr><td>7</td><td>Thunderbirds</td><td>5.00</td></tr>
<tr><td>8</td><td>Condors</td><td>4.94</td></tr>
<tr><td>9</td><td>Mariners</td><td>4.81</td></tr>
<tr><td>10</td><td> Americans</td><td>4.75</td></tr>
<tr><td>11</td><td>Monsters</td><td>4.63</td></tr>
<tr><td>12</td><td>Canucks</td><td>4.63</td></tr>
<tr><td>13</td><td>Admirals</td><td>4.50</td></tr>
<tr><td>14</td><td>Gulls</td><td>4.44</td></tr>
<tr><td>15</td><td>IceHogs</td><td>3.94</td></tr>
<tr><td>16</td><td>Reign</td><td>3.94</td></tr>
<tr><td>17</td><td>Rocket</td><td>3.88</td></tr>
<tr><td>18</td><td>Penguins</td><td>3.81</td></tr>
<tr><td>19</td><td>Senators</td><td>3.44</td></tr>
<tr><td>20</td><td>Bears</td><td>3.31</td></tr>
<tr><td>21</td><td>Roadrunners</td><td>3.31</td></tr>
<tr><td>22</td><td>Comets</td><td>3.25</td></tr>
<tr><td>23</td><td>Wolf Pack</td><td>3.25</td></tr>
<tr><td>24</td><td>Stars</td><td>3.13</td></tr>
<tr><td>25</td><td>Barracudas</td><td>3.06</td></tr>
<tr><td>26</td><td>Griffins</td><td>3.00</td></tr>
<tr><td>27</td><td>Wolves</td><td>2.88</td></tr>
<tr><td>28</td><td>Sound Tigers</td><td>2.75</td></tr>
<tr><td>29</td><td>Crunch</td><td>2.38</td></tr>
<tr><td>30</td><td>Wild</td><td>2.38</td></tr>
<tr><td>31</td><td>Eagles</td><td>2.25</td></tr>
<tr><td>32</td><td>Rampage </td><td>1.75</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 4.04</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Marlies</td><td>1.19</td></tr>
<tr><td>2</td><td> Americans</td><td>1.56</td></tr>
<tr><td>3</td><td>Rocket</td><td>1.63</td></tr>
<tr><td>4</td><td>Phantoms</td><td>1.94</td></tr>
<tr><td>5</td><td>Wolves</td><td>2.00</td></tr>
<tr><td>6</td><td>Heat</td><td>2.00</td></tr>
<tr><td>7</td><td>Canucks</td><td>2.00</td></tr>
<tr><td>8</td><td>IceHogs</td><td>2.00</td></tr>
<tr><td>9</td><td>Condors</td><td>2.06</td></tr>
<tr><td>10</td><td>Moose</td><td>2.06</td></tr>
<tr><td>11</td><td>Bruins</td><td>2.13</td></tr>
<tr><td>12</td><td>Admirals</td><td>2.44</td></tr>
<tr><td>13</td><td>Monsters</td><td>2.50</td></tr>
<tr><td>14</td><td>Reign</td><td>2.56</td></tr>
<tr><td>15</td><td>Thunderbirds</td><td>2.63</td></tr>
<tr><td>16</td><td>Mariners</td><td>4.25</td></tr>
<tr><td>17</td><td>Gulls</td><td>4.25</td></tr>
<tr><td>18</td><td>Checkers</td><td>4.63</td></tr>
<tr><td>19</td><td>Griffins</td><td>4.63</td></tr>
<tr><td>20</td><td>Roadrunners</td><td>5.31</td></tr>
<tr><td>21</td><td>Barracudas</td><td>5.50</td></tr>
<tr><td>22</td><td>Wild</td><td>5.81</td></tr>
<tr><td>23</td><td>Crunch</td><td>5.94</td></tr>
<tr><td>24</td><td>Comets</td><td>5.94</td></tr>
<tr><td>25</td><td>Sound Tigers</td><td>6.19</td></tr>
<tr><td>26</td><td>Eagles</td><td>6.25</td></tr>
<tr><td>27</td><td>Senators</td><td>6.38</td></tr>
<tr><td>28</td><td>Bears</td><td>6.44</td></tr>
<tr><td>29</td><td>Rampage </td><td>6.56</td></tr>
<tr><td>30</td><td>Penguins</td><td>6.63</td></tr>
<tr><td>31</td><td>Wolf Pack</td><td>6.75</td></tr>
<tr><td>32</td><td>Stars</td><td>7.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Marlies</td><td>526.32%</td></tr>
<tr><td>2</td><td> Americans</td><td>304.00%</td></tr>
<tr><td>3</td><td>Heat</td><td>303.13%</td></tr>
<tr><td>4</td><td>Bruins</td><td>302.94%</td></tr>
<tr><td>5</td><td>Phantoms</td><td>290.32%</td></tr>
<tr><td>6</td><td>Moose</td><td>269.70%</td></tr>
<tr><td>7</td><td>Condors</td><td>239.39%</td></tr>
<tr><td>8</td><td>Rocket</td><td>238.46%</td></tr>
<tr><td>9</td><td>Canucks</td><td>231.25%</td></tr>
<tr><td>10</td><td>IceHogs</td><td>196.88%</td></tr>
<tr><td>11</td><td>Thunderbirds</td><td>190.48%</td></tr>
<tr><td>12</td><td>Monsters</td><td>185.00%</td></tr>
<tr><td>13</td><td>Admirals</td><td>184.62%</td></tr>
<tr><td>14</td><td>Reign</td><td>153.66%</td></tr>
<tr><td>15</td><td>Wolves</td><td>143.75%</td></tr>
<tr><td>16</td><td>Checkers</td><td>125.68%</td></tr>
<tr><td>17</td><td>Mariners</td><td>113.24%</td></tr>
<tr><td>18</td><td>Gulls</td><td>104.41%</td></tr>
<tr><td>19</td><td>Griffins</td><td>64.86%</td></tr>
<tr><td>20</td><td>Roadrunners</td><td>62.35%</td></tr>
<tr><td>21</td><td>Penguins</td><td>57.55%</td></tr>
<tr><td>22</td><td>Barracudas</td><td>55.68%</td></tr>
<tr><td>23</td><td>Comets</td><td>54.74%</td></tr>
<tr><td>24</td><td>Senators</td><td>53.92%</td></tr>
<tr><td>25</td><td>Bears</td><td>51.46%</td></tr>
<tr><td>26</td><td>Wolf Pack</td><td>48.15%</td></tr>
<tr><td>27</td><td>Stars</td><td>44.64%</td></tr>
<tr><td>28</td><td>Sound Tigers</td><td>44.44%</td></tr>
<tr><td>29</td><td>Wild</td><td>40.86%</td></tr>
<tr><td>30</td><td>Crunch</td><td>40.00%</td></tr>
<tr><td>31</td><td>Eagles</td><td>36.00%</td></tr>
<tr><td>32</td><td>Rampage </td><td>26.67%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 17.98%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bruins</td><td>39.47%</td></tr>
<tr><td>2</td><td>Thunderbirds</td><td>29.27%</td></tr>
<tr><td>3</td><td>Griffins</td><td>28.89%</td></tr>
<tr><td>4</td><td>Rocket</td><td>26.42%</td></tr>
<tr><td>5</td><td>Phantoms</td><td>24.14%</td></tr>
<tr><td>6</td><td>IceHogs</td><td>22.95%</td></tr>
<tr><td>7</td><td>Admirals</td><td>22.92%</td></tr>
<tr><td>8</td><td>Canucks</td><td>22.03%</td></tr>
<tr><td>9</td><td>Heat</td><td>21.43%</td></tr>
<tr><td>10</td><td>Reign</td><td>20.00%</td></tr>
<tr><td>11</td><td>Mariners</td><td>19.64%</td></tr>
<tr><td>12</td><td>Condors</td><td>19.51%</td></tr>
<tr><td>13</td><td>Barracudas</td><td>19.44%</td></tr>
<tr><td>14</td><td>Wolves</td><td>19.05%</td></tr>
<tr><td>15</td><td> Americans</td><td>18.52%</td></tr>
<tr><td>16</td><td>Marlies</td><td>17.54%</td></tr>
<tr><td>17</td><td>Checkers</td><td>15.79%</td></tr>
<tr><td>18</td><td>Roadrunners</td><td>15.38%</td></tr>
<tr><td>19</td><td>Monsters</td><td>15.00%</td></tr>
<tr><td>20</td><td>Stars</td><td>14.89%</td></tr>
<tr><td>21</td><td>Bears</td><td>14.81%</td></tr>
<tr><td>22</td><td>Moose</td><td>14.81%</td></tr>
<tr><td>23</td><td>Comets</td><td>14.29%</td></tr>
<tr><td>24</td><td>Rampage </td><td>13.89%</td></tr>
<tr><td>25</td><td>Crunch</td><td>13.04%</td></tr>
<tr><td>26</td><td>Senators</td><td>11.11%</td></tr>
<tr><td>27</td><td>Eagles</td><td>10.53%</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>10.34%</td></tr>
<tr><td>29</td><td>Penguins</td><td>10.26%</td></tr>
<tr><td>30</td><td>Wild</td><td>7.69%</td></tr>
<tr><td>31</td><td>Sound Tigers</td><td>6.90%</td></tr>
<tr><td>32</td><td>Gulls</td><td>2.94%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 82.02%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td> Americans</td><td>94.03%</td></tr>
<tr><td>2</td><td>Rocket</td><td>92.86%</td></tr>
<tr><td>3</td><td>IceHogs</td><td>89.66%</td></tr>
<tr><td>4</td><td>Reign</td><td>88.89%</td></tr>
<tr><td>5</td><td>Marlies</td><td>88.89%</td></tr>
<tr><td>6</td><td>Condors</td><td>87.93%</td></tr>
<tr><td>7</td><td>Phantoms</td><td>87.80%</td></tr>
<tr><td>8</td><td>Monsters</td><td>87.67%</td></tr>
<tr><td>9</td><td>Wolves</td><td>86.96%</td></tr>
<tr><td>10</td><td>Canucks</td><td>86.44%</td></tr>
<tr><td>11</td><td>Admirals</td><td>85.33%</td></tr>
<tr><td>12</td><td>Rampage </td><td>85.29%</td></tr>
<tr><td>13</td><td>Heat</td><td>84.93%</td></tr>
<tr><td>14</td><td>Thunderbirds</td><td>84.09%</td></tr>
<tr><td>15</td><td>Griffins</td><td>82.69%</td></tr>
<tr><td>16</td><td>Bears</td><td>81.82%</td></tr>
<tr><td>17</td><td>Bruins</td><td>81.63%</td></tr>
<tr><td>18</td><td>Wild</td><td>81.48%</td></tr>
<tr><td>19</td><td>Gulls</td><td>80.65%</td></tr>
<tr><td>20</td><td>Eagles</td><td>80.00%</td></tr>
<tr><td>21</td><td>Roadrunners</td><td>78.57%</td></tr>
<tr><td>22</td><td>Barracudas</td><td>76.47%</td></tr>
<tr><td>23</td><td>Wolf Pack</td><td>76.19%</td></tr>
<tr><td>24</td><td>Penguins</td><td>75.00%</td></tr>
<tr><td>25</td><td>Mariners</td><td>73.77%</td></tr>
<tr><td>26</td><td>Crunch</td><td>71.43%</td></tr>
<tr><td>27</td><td>Checkers</td><td>70.83%</td></tr>
<tr><td>28</td><td>Stars</td><td>70.27%</td></tr>
<tr><td>29</td><td>Moose</td><td>67.92%</td></tr>
<tr><td>30</td><td>Comets</td><td>63.64%</td></tr>
<tr><td>31</td><td>Senators</td><td>61.76%</td></tr>
<tr><td>32</td><td>Sound Tigers</td><td>59.09%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Bruins</td><td>121.11%</td></tr>
<tr><td>2</td><td>Rocket</td><td>119.27%</td></tr>
<tr><td>3</td><td>Thunderbirds</td><td>113.36%</td></tr>
<tr><td>4</td><td>IceHogs</td><td>112.61%</td></tr>
<tr><td>5</td><td> Americans</td><td>112.55%</td></tr>
<tr><td>6</td><td>Phantoms</td><td>111.94%</td></tr>
<tr><td>7</td><td>Griffins</td><td>111.58%</td></tr>
<tr><td>8</td><td>Reign</td><td>108.89%</td></tr>
<tr><td>9</td><td>Canucks</td><td>108.47%</td></tr>
<tr><td>10</td><td>Admirals</td><td>108.25%</td></tr>
<tr><td>11</td><td>Condors</td><td>107.44%</td></tr>
<tr><td>12</td><td>Marlies</td><td>106.43%</td></tr>
<tr><td>13</td><td>Heat</td><td>106.36%</td></tr>
<tr><td>14</td><td>Wolves</td><td>106.00%</td></tr>
<tr><td>15</td><td>Monsters</td><td>102.67%</td></tr>
<tr><td>16</td><td>Rampage </td><td>99.18%</td></tr>
<tr><td>17</td><td>Bears</td><td>96.63%</td></tr>
<tr><td>18</td><td>Barracudas</td><td>95.92%</td></tr>
<tr><td>19</td><td>Roadrunners</td><td>93.96%</td></tr>
<tr><td>20</td><td>Mariners</td><td>93.41%</td></tr>
<tr><td>21</td><td>Eagles</td><td>90.53%</td></tr>
<tr><td>22</td><td>Wild</td><td>89.17%</td></tr>
<tr><td>23</td><td>Checkers</td><td>86.62%</td></tr>
<tr><td>24</td><td>Wolf Pack</td><td>86.54%</td></tr>
<tr><td>25</td><td>Penguins</td><td>85.26%</td></tr>
<tr><td>26</td><td>Stars</td><td>85.16%</td></tr>
<tr><td>27</td><td>Crunch</td><td>84.47%</td></tr>
<tr><td>28</td><td>Gulls</td><td>83.59%</td></tr>
<tr><td>29</td><td>Moose</td><td>82.74%</td></tr>
<tr><td>30</td><td>Comets</td><td>77.92%</td></tr>
<tr><td>31</td><td>Senators</td><td>72.88%</td></tr>
<tr><td>32</td><td>Sound Tigers</td><td>65.99%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30.81</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Checkers</td><td>46.44</td></tr>
<tr><td>2</td><td>Gulls</td><td>38.63</td></tr>
<tr><td>3</td><td>Marlies</td><td>38.56</td></tr>
<tr><td>4</td><td>Bruins</td><td>38.50</td></tr>
<tr><td>5</td><td>Phantoms</td><td>38.50</td></tr>
<tr><td>6</td><td>Penguins</td><td>37.56</td></tr>
<tr><td>7</td><td>Moose</td><td>37.44</td></tr>
<tr><td>8</td><td>Mariners</td><td>36.88</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>36.50</td></tr>
<tr><td>10</td><td>Bears</td><td>35.44</td></tr>
<tr><td>11</td><td>Monsters</td><td>33.69</td></tr>
<tr><td>12</td><td>Heat</td><td>33.69</td></tr>
<tr><td>13</td><td>Condors</td><td>32.25</td></tr>
<tr><td>14</td><td>Admirals</td><td>31.88</td></tr>
<tr><td>15</td><td>Sound Tigers</td><td>31.31</td></tr>
<tr><td>16</td><td>Wolf Pack</td><td>29.81</td></tr>
<tr><td>17</td><td>Barracudas</td><td>29.00</td></tr>
<tr><td>18</td><td>Canucks</td><td>28.69</td></tr>
<tr><td>19</td><td>IceHogs</td><td>28.06</td></tr>
<tr><td>20</td><td>Comets</td><td>28.06</td></tr>
<tr><td>21</td><td>Stars</td><td>27.94</td></tr>
<tr><td>22</td><td>Senators</td><td>27.75</td></tr>
<tr><td>23</td><td>Roadrunners</td><td>27.56</td></tr>
<tr><td>24</td><td> Americans</td><td>26.69</td></tr>
<tr><td>25</td><td>Griffins</td><td>26.19</td></tr>
<tr><td>26</td><td>Reign</td><td>25.13</td></tr>
<tr><td>27</td><td>Eagles</td><td>24.56</td></tr>
<tr><td>28</td><td>Wolves</td><td>23.81</td></tr>
<tr><td>29</td><td>Crunch</td><td>22.50</td></tr>
<tr><td>30</td><td>Wild</td><td>21.88</td></tr>
<tr><td>31</td><td>Rampage </td><td>21.63</td></tr>
<tr><td>32</td><td>Rocket</td><td>19.50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30.81</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Heat</td><td>14.69</td></tr>
<tr><td>2</td><td>Marlies</td><td>16.56</td></tr>
<tr><td>3</td><td>Wolves</td><td>19.00</td></tr>
<tr><td>4</td><td>Moose</td><td>19.25</td></tr>
<tr><td>5</td><td>Rocket</td><td>19.31</td></tr>
<tr><td>6</td><td>IceHogs</td><td>19.88</td></tr>
<tr><td>7</td><td>Monsters</td><td>20.94</td></tr>
<tr><td>8</td><td>Canucks</td><td>21.75</td></tr>
<tr><td>9</td><td> Americans</td><td>22.19</td></tr>
<tr><td>10</td><td>Admirals</td><td>22.19</td></tr>
<tr><td>11</td><td>Mariners</td><td>22.44</td></tr>
<tr><td>12</td><td>Phantoms</td><td>23.31</td></tr>
<tr><td>13</td><td>Thunderbirds</td><td>23.81</td></tr>
<tr><td>14</td><td>Griffins</td><td>24.38</td></tr>
<tr><td>15</td><td>Reign</td><td>24.38</td></tr>
<tr><td>16</td><td>Condors</td><td>24.88</td></tr>
<tr><td>17</td><td>Bruins</td><td>25.63</td></tr>
<tr><td>18</td><td>Gulls</td><td>31.38</td></tr>
<tr><td>19</td><td>Checkers</td><td>32.31</td></tr>
<tr><td>20</td><td>Barracudas</td><td>33.00</td></tr>
<tr><td>21</td><td>Crunch</td><td>34.81</td></tr>
<tr><td>22</td><td>Comets</td><td>36.25</td></tr>
<tr><td>23</td><td>Penguins</td><td>38.06</td></tr>
<tr><td>24</td><td>Roadrunners</td><td>39.25</td></tr>
<tr><td>25</td><td>Stars</td><td>42.00</td></tr>
<tr><td>26</td><td>Senators</td><td>42.94</td></tr>
<tr><td>27</td><td>Rampage </td><td>43.50</td></tr>
<tr><td>28</td><td>Wild</td><td>45.75</td></tr>
<tr><td>29</td><td>Eagles</td><td>47.00</td></tr>
<tr><td>30</td><td>Bears</td><td>48.81</td></tr>
<tr><td>31</td><td>Sound Tigers</td><td>49.38</td></tr>
<tr><td>32</td><td>Wolf Pack</td><td>57.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Marlies</td><td>232.83%</td></tr>
<tr><td>2</td><td>Heat</td><td>229.36%</td></tr>
<tr><td>3</td><td>Moose</td><td>194.48%</td></tr>
<tr><td>4</td><td>Phantoms</td><td>165.15%</td></tr>
<tr><td>5</td><td>Mariners</td><td>164.35%</td></tr>
<tr><td>6</td><td>Monsters</td><td>160.90%</td></tr>
<tr><td>7</td><td>Thunderbirds</td><td>153.28%</td></tr>
<tr><td>8</td><td>Bruins</td><td>150.24%</td></tr>
<tr><td>9</td><td>Checkers</td><td>143.71%</td></tr>
<tr><td>10</td><td>Admirals</td><td>143.66%</td></tr>
<tr><td>11</td><td>IceHogs</td><td>141.20%</td></tr>
<tr><td>12</td><td>Canucks</td><td>131.90%</td></tr>
<tr><td>13</td><td>Condors</td><td>129.65%</td></tr>
<tr><td>14</td><td>Wolves</td><td>125.33%</td></tr>
<tr><td>15</td><td>Gulls</td><td>123.11%</td></tr>
<tr><td>16</td><td> Americans</td><td>120.28%</td></tr>
<tr><td>17</td><td>Griffins</td><td>107.44%</td></tr>
<tr><td>18</td><td>Reign</td><td>103.08%</td></tr>
<tr><td>19</td><td>Rocket</td><td>100.97%</td></tr>
<tr><td>20</td><td>Penguins</td><td>98.69%</td></tr>
<tr><td>21</td><td>Barracudas</td><td>87.88%</td></tr>
<tr><td>22</td><td>Comets</td><td>77.41%</td></tr>
<tr><td>23</td><td>Bears</td><td>72.60%</td></tr>
<tr><td>24</td><td>Roadrunners</td><td>70.22%</td></tr>
<tr><td>25</td><td>Stars</td><td>66.52%</td></tr>
<tr><td>26</td><td>Crunch</td><td>64.63%</td></tr>
<tr><td>27</td><td>Senators</td><td>64.63%</td></tr>
<tr><td>28</td><td>Sound Tigers</td><td>63.42%</td></tr>
<tr><td>29</td><td>Wolf Pack</td><td>52.30%</td></tr>
<tr><td>30</td><td>Eagles</td><td>52.26%</td></tr>
<tr><td>31</td><td>Rampage </td><td>49.71%</td></tr>
<tr><td>32</td><td>Wild</td><td>47.81%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 6.63</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bears</td><td>2.88</td></tr>
<tr><td>2</td><td>Sound Tigers</td><td>3.00</td></tr>
<tr><td>3</td><td>Eagles</td><td>3.31</td></tr>
<tr><td>4</td><td>Wolf Pack</td><td>3.44</td></tr>
<tr><td>5</td><td>Checkers</td><td>3.63</td></tr>
<tr><td>6</td><td>Wild</td><td>4.13</td></tr>
<tr><td>7</td><td>Roadrunners</td><td>4.25</td></tr>
<tr><td>8</td><td>Rampage </td><td>4.25</td></tr>
<tr><td>9</td><td>Comets</td><td>4.56</td></tr>
<tr><td>10</td><td>Gulls</td><td>4.75</td></tr>
<tr><td>11</td><td>Stars</td><td>5.06</td></tr>
<tr><td>12</td><td>Penguins</td><td>5.19</td></tr>
<tr><td>13</td><td>Crunch</td><td>5.38</td></tr>
<tr><td>14</td><td>Senators</td><td>5.50</td></tr>
<tr><td>15</td><td>Barracudas</td><td>5.94</td></tr>
<tr><td>16</td><td>Phantoms</td><td>6.00</td></tr>
<tr><td>17</td><td>Thunderbirds</td><td>6.06</td></tr>
<tr><td>18</td><td>Wolves</td><td>6.38</td></tr>
<tr><td>19</td><td>Reign</td><td>6.56</td></tr>
<tr><td>20</td><td>Bruins</td><td>7.31</td></tr>
<tr><td>21</td><td>Moose</td><td>7.63</td></tr>
<tr><td>22</td><td>IceHogs</td><td>7.94</td></tr>
<tr><td>23</td><td>Canucks</td><td>8.19</td></tr>
<tr><td>24</td><td>Condors</td><td>8.44</td></tr>
<tr><td>25</td><td>Rocket</td><td>8.75</td></tr>
<tr><td>26</td><td>Griffins</td><td>8.88</td></tr>
<tr><td>27</td><td>Mariners</td><td>9.25</td></tr>
<tr><td>28</td><td>Monsters</td><td>9.88</td></tr>
<tr><td>29</td><td> Americans</td><td>11.00</td></tr>
<tr><td>30</td><td>Marlies</td><td>11.06</td></tr>
<tr><td>31</td><td>Heat</td><td>11.19</td></tr>
<tr><td>32</td><td>Admirals</td><td>12.56</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19.15</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Heat</td><td>24.25</td></tr>
<tr><td>2</td><td>Penguins</td><td>22.81</td></tr>
<tr><td>3</td><td>Bruins</td><td>22.38</td></tr>
<tr><td>4</td><td>Condors</td><td>21.00</td></tr>
<tr><td>5</td><td>Thunderbirds</td><td>21.00</td></tr>
<tr><td>6</td><td>Bears</td><td>20.63</td></tr>
<tr><td>7</td><td>Phantoms</td><td>20.50</td></tr>
<tr><td>8</td><td>Gulls</td><td>20.44</td></tr>
<tr><td>9</td><td>Griffins</td><td>20.44</td></tr>
<tr><td>10</td><td>Barracudas</td><td>20.44</td></tr>
<tr><td>11</td><td>Checkers</td><td>20.38</td></tr>
<tr><td>12</td><td>Marlies</td><td>20.25</td></tr>
<tr><td>13</td><td>Mariners</td><td>20.19</td></tr>
<tr><td>14</td><td>Reign</td><td>20.13</td></tr>
<tr><td>15</td><td>Admirals</td><td>20.00</td></tr>
<tr><td>16</td><td>Canucks</td><td>19.81</td></tr>
<tr><td>17</td><td> Americans</td><td>19.50</td></tr>
<tr><td>18</td><td>Monsters</td><td>19.31</td></tr>
<tr><td>19</td><td>Rocket</td><td>19.06</td></tr>
<tr><td>20</td><td>Sound Tigers</td><td>19.00</td></tr>
<tr><td>21</td><td>Senators</td><td>19.00</td></tr>
<tr><td>22</td><td>Crunch</td><td>18.88</td></tr>
<tr><td>23</td><td>Roadrunners</td><td>18.63</td></tr>
<tr><td>24</td><td>IceHogs</td><td>18.44</td></tr>
<tr><td>25</td><td>Wolves</td><td>17.06</td></tr>
<tr><td>26</td><td>Comets</td><td>17.00</td></tr>
<tr><td>27</td><td>Wolf Pack</td><td>16.63</td></tr>
<tr><td>28</td><td>Stars</td><td>16.63</td></tr>
<tr><td>29</td><td>Moose</td><td>16.50</td></tr>
<tr><td>30</td><td>Eagles</td><td>14.75</td></tr>
<tr><td>31</td><td>Wild</td><td>14.63</td></tr>
<tr><td>32</td><td>Rampage </td><td>13.13</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Marlies</td><td>75.72%</td></tr>
<tr><td>2</td><td>Moose</td><td>69.43%</td></tr>
<tr><td>3</td><td>Monsters</td><td>65.23%</td></tr>
<tr><td>4</td><td>Heat</td><td>65.11%</td></tr>
<tr><td>5</td><td>Phantoms</td><td>64.19%</td></tr>
<tr><td>6</td><td>Mariners</td><td>61.90%</td></tr>
<tr><td>7</td><td>IceHogs</td><td>59.78%</td></tr>
<tr><td>8</td><td>Bruins</td><td>57.99%</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>57.30%</td></tr>
<tr><td>10</td><td>Canucks</td><td>56.49%</td></tr>
<tr><td>11</td><td>Checkers</td><td>55.13%</td></tr>
<tr><td>12</td><td>Reign</td><td>54.31%</td></tr>
<tr><td>13</td><td>Wolves</td><td>53.96%</td></tr>
<tr><td>14</td><td>Condors</td><td>53.80%</td></tr>
<tr><td>15</td><td> Americans</td><td>53.75%</td></tr>
<tr><td>16</td><td>Gulls</td><td>52.94%</td></tr>
<tr><td>17</td><td>Rocket</td><td>51.64%</td></tr>
<tr><td>18</td><td>Admirals</td><td>51.42%</td></tr>
<tr><td>19</td><td>Griffins</td><td>46.08%</td></tr>
<tr><td>20</td><td>Comets</td><td>44.88%</td></tr>
<tr><td>21</td><td>Sound Tigers</td><td>42.43%</td></tr>
<tr><td>22</td><td>Barracudas</td><td>41.55%</td></tr>
<tr><td>23</td><td>Penguins</td><td>41.26%</td></tr>
<tr><td>24</td><td>Roadrunners</td><td>41.16%</td></tr>
<tr><td>25</td><td>Wolf Pack</td><td>40.85%</td></tr>
<tr><td>26</td><td>Stars</td><td>40.56%</td></tr>
<tr><td>27</td><td>Bears</td><td>39.69%</td></tr>
<tr><td>28</td><td>Eagles</td><td>39.27%</td></tr>
<tr><td>29</td><td>Rampage </td><td>33.47%</td></tr>
<tr><td>30</td><td>Senators</td><td>33.09%</td></tr>
<tr><td>31</td><td>Crunch</td><td>31.72%</td></tr>
<tr><td>32</td><td>Wild</td><td>29.74%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
