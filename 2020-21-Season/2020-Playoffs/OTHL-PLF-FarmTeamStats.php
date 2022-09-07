<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Stats</title>
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
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>IceHogs</td><td>11</td><td>4</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>52</td><td>48</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>24</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>24</td><td>52</td><td>91</td><td>143</td></tr>
<tr><td>Monsters</td><td>13</td><td>6</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>34</td><td>7</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>19</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>15</td><td>29</td><td>54</td><td>83</td></tr>
<tr><td>Bruins</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>14</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>4</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>10</td><td>12</td><td>20</td><td>32</td></tr>
<tr><td>Comets</td><td>21</td><td>16</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>55</td><td>38</td><td>11</td><td>9</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>16</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>22</td><td>55</td><td>99</td><td>154</td></tr>
<tr><td>Heat</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>15</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>5</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>10</td><td>6</td><td>10</td><td>16</td></tr>
<tr><td>Phantoms</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>16</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>6</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>10</td><td>16</td><td>26</td><td>42</td></tr>
<tr><td>Wolves</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>16</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>8</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>8</td><td>4</td><td>5</td><td>9</td></tr>
<tr><td>Checkers</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>18</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>5</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>13</td><td>17</td><td>29</td><td>46</td></tr>
<tr><td>Moose</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>13</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>8</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>5</td><td>7</td><td>13</td><td>20</td></tr>
<tr><td>Marlies</td><td>11</td><td>4</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>28</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>15</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>13</td><td>22</td><td>37</td><td>59</td></tr>
<tr><td>Condors</td><td>17</td><td>12</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>58</td><td>47</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>27</td><td>9</td><td>6</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>20</td><td>58</td><td>106</td><td>164</td></tr>
<tr><td>Thunderbirds</td><td>19</td><td>10</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>32</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>14</td><td>9</td><td>3</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>18</td><td>39</td><td>72</td><td>111</td></tr>
<tr><td>Penguins</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>21</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>12</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>9</td><td>19</td><td>31</td><td>50</td></tr>
<tr><td>Admirals</td><td>16</td><td>9</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>52</td><td>40</td><td>9</td><td>6</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>21</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>19</td><td>52</td><td>90</td><td>142</td></tr>
<tr><td> Americans</td><td>11</td><td>7</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>26</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>9</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>17</td><td>29</td><td>50</td><td>79</td></tr>
<tr><td>Barracudas</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>44</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>16</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>28</td><td>33</td><td>53</td><td>86</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>IceHogs</td><td>RCK</td><td>21</td><td>16</td><td>15</td><td>0</td><td>298</td><td>115</td><td>88</td><td>95</td><td>0</td><td>216</td><td>75</td><td>106</td><td>218</td><td>55</td><td>9</td><td>16.36%</td><td>48</td><td>11</td><td>77.08%</td><td>1</td><td>64.89%</td><td>68.79%</td><td>64.10%</td><td>226</td><td>317</td><td>123</td><td>67</td><td>240</td><td>66</td><td>0</td><td>0</td></tr>
<tr><td>Monsters</td><td>CLE</td><td>10</td><td>6</td><td>11</td><td>2</td><td>306</td><td>93</td><td>84</td><td>121</td><td>8</td><td>300</td><td>78</td><td>129</td><td>243</td><td>62</td><td>7</td><td>11.29%</td><td>49</td><td>5</td><td>89.80%</td><td>1</td><td>42.93%</td><td>44.22%</td><td>42.54%</td><td>327</td><td>310</td><td>154</td><td>90</td><td>223</td><td>75</td><td>1</td><td>0</td></tr>
<tr><td>Bruins</td><td>PRO</td><td>4</td><td>3</td><td>3</td><td>2</td><td>147</td><td>55</td><td>37</td><td>41</td><td>14</td><td>145</td><td>49</td><td>128</td><td>180</td><td>32</td><td>1</td><td>3.13%</td><td>55</td><td>8</td><td>85.45%</td><td>1</td><td>42.79%</td><td>52.88%</td><td>40.20%</td><td>198</td><td>173</td><td>95</td><td>56</td><td>118</td><td>46</td><td>1</td><td>0</td></tr>
<tr><td>Comets</td><td>UTI</td><td>13</td><td>24</td><td>13</td><td>5</td><td>384</td><td>109</td><td>146</td><td>98</td><td>31</td><td>386</td><td>98</td><td>285</td><td>390</td><td>132</td><td>23</td><td>17.42%</td><td>132</td><td>18</td><td>86.36%</td><td>0</td><td>43.91%</td><td>49.32%</td><td>49.18%</td><td>535</td><td>546</td><td>279</td><td>170</td><td>373</td><td>142</td><td>5</td><td>0</td></tr>
<tr><td>Heat</td><td>STK</td><td>1</td><td>2</td><td>3</td><td>0</td><td>92</td><td>29</td><td>34</td><td>29</td><td>0</td><td>85</td><td>24</td><td>42</td><td>62</td><td>32</td><td>5</td><td>15.63%</td><td>20</td><td>4</td><td>80.00%</td><td>0</td><td>45.45%</td><td>50.43%</td><td>45.61%</td><td>94</td><td>100</td><td>46</td><td>30</td><td>72</td><td>23</td><td>0</td><td>0</td></tr>
<tr><td>Phantoms</td><td>LVP</td><td>7</td><td>5</td><td>3</td><td>1</td><td>146</td><td>54</td><td>37</td><td>36</td><td>19</td><td>150</td><td>56</td><td>124</td><td>164</td><td>45</td><td>7</td><td>15.56%</td><td>59</td><td>9</td><td>84.75%</td><td>0</td><td>51.13%</td><td>60.50%</td><td>41.35%</td><td>202</td><td>198</td><td>103</td><td>62</td><td>135</td><td>50</td><td>1</td><td>0</td></tr>
<tr><td>Wolves</td><td>CHI</td><td>1</td><td>2</td><td>1</td><td>0</td><td>70</td><td>25</td><td>23</td><td>22</td><td>0</td><td>119</td><td>36</td><td>34</td><td>56</td><td>19</td><td>3</td><td>15.79%</td><td>16</td><td>6</td><td>62.50%</td><td>0</td><td>28.00%</td><td>34.12%</td><td>26.53%</td><td>127</td><td>67</td><td>46</td><td>31</td><td>44</td><td>20</td><td>0</td><td>0</td></tr>
<tr><td>Checkers</td><td>CHR</td><td>5</td><td>5</td><td>5</td><td>2</td><td>156</td><td>41</td><td>32</td><td>57</td><td>26</td><td>184</td><td>60</td><td>108</td><td>162</td><td>46</td><td>7</td><td>15.22%</td><td>40</td><td>3</td><td>92.50%</td><td>0</td><td>31.30%</td><td>32.70%</td><td>36.29%</td><td>224</td><td>190</td><td>103</td><td>62</td><td>131</td><td>51</td><td>0</td><td>0</td></tr>
<tr><td>Moose</td><td>MAN</td><td>4</td><td>2</td><td>1</td><td>0</td><td>85</td><td>27</td><td>24</td><td>25</td><td>9</td><td>97</td><td>31</td><td>70</td><td>72</td><td>24</td><td>3</td><td>12.50%</td><td>32</td><td>3</td><td>90.63%</td><td>0</td><td>57.38%</td><td>54.62%</td><td>63.79%</td><td>109</td><td>96</td><td>52</td><td>34</td><td>65</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Marlies</td><td>TOR</td><td>10</td><td>7</td><td>4</td><td>1</td><td>231</td><td>83</td><td>56</td><td>62</td><td>30</td><td>222</td><td>68</td><td>158</td><td>263</td><td>61</td><td>4</td><td>6.56%</td><td>67</td><td>11</td><td>83.58%</td><td>3</td><td>58.68%</td><td>60.25%</td><td>58.38%</td><td>302</td><td>311</td><td>153</td><td>91</td><td>219</td><td>75</td><td>1</td><td>0</td></tr>
<tr><td>Condors</td><td>BKR</td><td>24</td><td>12</td><td>19</td><td>3</td><td>324</td><td>92</td><td>105</td><td>123</td><td>4</td><td>344</td><td>102</td><td>253</td><td>367</td><td>100</td><td>18</td><td>18.00%</td><td>119</td><td>22</td><td>81.51%</td><td>1</td><td>46.44%</td><td>53.12%</td><td>54.65%</td><td>410</td><td>410</td><td>207</td><td>127</td><td>280</td><td>106</td><td>0</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>SPR</td><td>18</td><td>11</td><td>9</td><td>1</td><td>419</td><td>152</td><td>111</td><td>131</td><td>25</td><td>367</td><td>113</td><td>182</td><td>349</td><td>125</td><td>17</td><td>13.60%</td><td>83</td><td>5</td><td>93.98%</td><td>0</td><td>54.53%</td><td>60.53%</td><td>61.90%</td><td>438</td><td>514</td><td>244</td><td>142</td><td>368</td><td>125</td><td>3</td><td>1</td></tr>
<tr><td>Penguins</td><td>WBS</td><td>8</td><td>5</td><td>5</td><td>1</td><td>164</td><td>56</td><td>51</td><td>53</td><td>4</td><td>181</td><td>59</td><td>86</td><td>99</td><td>23</td><td>2</td><td>8.70%</td><td>36</td><td>5</td><td>86.11%</td><td>1</td><td>52.66%</td><td>50.70%</td><td>54.08%</td><td>180</td><td>167</td><td>81</td><td>47</td><td>122</td><td>40</td><td>0</td><td>0</td></tr>
<tr><td>Admirals</td><td>MIL</td><td>16</td><td>23</td><td>13</td><td>0</td><td>383</td><td>122</td><td>124</td><td>136</td><td>1</td><td>337</td><td>93</td><td>223</td><td>286</td><td>98</td><td>20</td><td>20.41%</td><td>102</td><td>15</td><td>85.29%</td><td>0</td><td>53.44%</td><td>60.17%</td><td>54.36%</td><td>345</td><td>429</td><td>198</td><td>117</td><td>306</td><td>99</td><td>1</td><td>0</td></tr>
<tr><td> Americans</td><td>ROC</td><td>11</td><td>8</td><td>8</td><td>2</td><td>237</td><td>82</td><td>71</td><td>75</td><td>9</td><td>252</td><td>70</td><td>181</td><td>229</td><td>74</td><td>9</td><td>12.16%</td><td>75</td><td>10</td><td>86.67%</td><td>1</td><td>42.17%</td><td>43.51%</td><td>41.10%</td><td>282</td><td>260</td><td>140</td><td>87</td><td>172</td><td>71</td><td>1</td><td>0</td></tr>
<tr><td>Barracudas</td><td>SJB</td><td>18</td><td>8</td><td>6</td><td>1</td><td>159</td><td>59</td><td>54</td><td>43</td><td>3</td><td>216</td><td>70</td><td>60</td><td>89</td><td>31</td><td>7</td><td>22.58%</td><td>26</td><td>7</td><td>73.08%</td><td>0</td><td>24.68%</td><td>30.00%</td><td>28.36%</td><td>219</td><td>132</td><td>74</td><td>47</td><td>95</td><td>31</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.71</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>IceHogs</td><td>4.73</td></tr>
<tr><td>2</td><td>Barracudas</td><td>4.71</td></tr>
<tr><td>3</td><td>Condors</td><td>3.41</td></tr>
<tr><td>4</td><td>Admirals</td><td>3.25</td></tr>
<tr><td>5</td><td>Penguins</td><td>2.71</td></tr>
<tr><td>6</td><td> Americans</td><td>2.64</td></tr>
<tr><td>7</td><td>Comets</td><td>2.62</td></tr>
<tr><td>8</td><td>Checkers</td><td>2.43</td></tr>
<tr><td>9</td><td>Phantoms</td><td>2.29</td></tr>
<tr><td>10</td><td>Monsters</td><td>2.23</td></tr>
<tr><td>11</td><td>Thunderbirds</td><td>2.05</td></tr>
<tr><td>12</td><td>Marlies</td><td>2.00</td></tr>
<tr><td>13</td><td>Moose</td><td>1.75</td></tr>
<tr><td>14</td><td>Bruins</td><td>1.71</td></tr>
<tr><td>15</td><td>Heat</td><td>1.50</td></tr>
<tr><td>16</td><td>Wolves</td><td>1.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.71</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Thunderbirds</td><td>1.68</td></tr>
<tr><td>2</td><td>Comets</td><td>1.81</td></tr>
<tr><td>3</td><td>Bruins</td><td>2.00</td></tr>
<tr><td>4</td><td>Phantoms</td><td>2.29</td></tr>
<tr><td>5</td><td> Americans</td><td>2.36</td></tr>
<tr><td>6</td><td>Admirals</td><td>2.50</td></tr>
<tr><td>7</td><td>Marlies</td><td>2.55</td></tr>
<tr><td>8</td><td>Checkers</td><td>2.57</td></tr>
<tr><td>9</td><td>Monsters</td><td>2.62</td></tr>
<tr><td>10</td><td>Condors</td><td>2.76</td></tr>
<tr><td>11</td><td>Penguins</td><td>3.00</td></tr>
<tr><td>12</td><td>Moose</td><td>3.25</td></tr>
<tr><td>13</td><td>Heat</td><td>3.75</td></tr>
<tr><td>14</td><td>Wolves</td><td>4.00</td></tr>
<tr><td>15</td><td>IceHogs</td><td>4.36</td></tr>
<tr><td>16</td><td>Barracudas</td><td>6.29</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Comets</td><td>144.74%</td></tr>
<tr><td>2</td><td>Admirals</td><td>130.00%</td></tr>
<tr><td>3</td><td>Condors</td><td>123.40%</td></tr>
<tr><td>4</td><td>Thunderbirds</td><td>121.88%</td></tr>
<tr><td>5</td><td> Americans</td><td>111.54%</td></tr>
<tr><td>6</td><td>IceHogs</td><td>108.33%</td></tr>
<tr><td>7</td><td>Phantoms</td><td>100.00%</td></tr>
<tr><td>8</td><td>Checkers</td><td>94.44%</td></tr>
<tr><td>9</td><td>Penguins</td><td>90.48%</td></tr>
<tr><td>10</td><td>Bruins</td><td>85.71%</td></tr>
<tr><td>11</td><td>Monsters</td><td>85.29%</td></tr>
<tr><td>12</td><td>Marlies</td><td>78.57%</td></tr>
<tr><td>13</td><td>Barracudas</td><td>75.00%</td></tr>
<tr><td>14</td><td>Moose</td><td>53.85%</td></tr>
<tr><td>15</td><td>Heat</td><td>40.00%</td></tr>
<tr><td>16</td><td>Wolves</td><td>25.00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 14.81%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Barracudas</td><td>22.58%</td></tr>
<tr><td>2</td><td>Admirals</td><td>20.41%</td></tr>
<tr><td>3</td><td>Condors</td><td>18.00%</td></tr>
<tr><td>4</td><td>Comets</td><td>17.42%</td></tr>
<tr><td>5</td><td>IceHogs</td><td>16.36%</td></tr>
<tr><td>6</td><td>Wolves</td><td>15.79%</td></tr>
<tr><td>7</td><td>Heat</td><td>15.63%</td></tr>
<tr><td>8</td><td>Phantoms</td><td>15.56%</td></tr>
<tr><td>9</td><td>Checkers</td><td>15.22%</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>13.60%</td></tr>
<tr><td>11</td><td>Moose</td><td>12.50%</td></tr>
<tr><td>12</td><td> Americans</td><td>12.16%</td></tr>
<tr><td>13</td><td>Monsters</td><td>11.29%</td></tr>
<tr><td>14</td><td>Penguins</td><td>8.70%</td></tr>
<tr><td>15</td><td>Marlies</td><td>6.56%</td></tr>
<tr><td>16</td><td>Bruins</td><td>3.13%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 85.19%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Thunderbirds</td><td>93.98%</td></tr>
<tr><td>2</td><td>Checkers</td><td>92.50%</td></tr>
<tr><td>3</td><td>Moose</td><td>90.63%</td></tr>
<tr><td>4</td><td>Monsters</td><td>89.80%</td></tr>
<tr><td>5</td><td> Americans</td><td>86.67%</td></tr>
<tr><td>6</td><td>Comets</td><td>86.36%</td></tr>
<tr><td>7</td><td>Penguins</td><td>86.11%</td></tr>
<tr><td>8</td><td>Bruins</td><td>85.45%</td></tr>
<tr><td>9</td><td>Admirals</td><td>85.29%</td></tr>
<tr><td>10</td><td>Phantoms</td><td>84.75%</td></tr>
<tr><td>11</td><td>Marlies</td><td>83.58%</td></tr>
<tr><td>12</td><td>Condors</td><td>81.51%</td></tr>
<tr><td>13</td><td>Heat</td><td>80.00%</td></tr>
<tr><td>14</td><td>IceHogs</td><td>77.08%</td></tr>
<tr><td>15</td><td>Barracudas</td><td>73.08%</td></tr>
<tr><td>16</td><td>Wolves</td><td>62.50%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Checkers</td><td>107.72%</td></tr>
<tr><td>2</td><td>Thunderbirds</td><td>107.58%</td></tr>
<tr><td>3</td><td>Admirals</td><td>105.70%</td></tr>
<tr><td>4</td><td>Comets</td><td>103.79%</td></tr>
<tr><td>5</td><td>Moose</td><td>103.13%</td></tr>
<tr><td>6</td><td>Monsters</td><td>101.09%</td></tr>
<tr><td>7</td><td>Phantoms</td><td>100.30%</td></tr>
<tr><td>8</td><td>Condors</td><td>99.51%</td></tr>
<tr><td>9</td><td> Americans</td><td>98.83%</td></tr>
<tr><td>10</td><td>Barracudas</td><td>95.66%</td></tr>
<tr><td>11</td><td>Heat</td><td>95.63%</td></tr>
<tr><td>12</td><td>Penguins</td><td>94.81%</td></tr>
<tr><td>13</td><td>IceHogs</td><td>93.45%</td></tr>
<tr><td>14</td><td>Marlies</td><td>90.14%</td></tr>
<tr><td>15</td><td>Bruins</td><td>88.58%</td></tr>
<tr><td>16</td><td>Wolves</td><td>78.29%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 21.69</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>IceHogs</td><td>27.09</td></tr>
<tr><td>2</td><td>Admirals</td><td>23.94</td></tr>
<tr><td>3</td><td>Monsters</td><td>23.54</td></tr>
<tr><td>4</td><td>Penguins</td><td>23.43</td></tr>
<tr><td>5</td><td>Heat</td><td>23.00</td></tr>
<tr><td>6</td><td>Barracudas</td><td>22.71</td></tr>
<tr><td>7</td><td>Checkers</td><td>22.29</td></tr>
<tr><td>8</td><td>Thunderbirds</td><td>22.05</td></tr>
<tr><td>9</td><td> Americans</td><td>21.55</td></tr>
<tr><td>10</td><td>Moose</td><td>21.25</td></tr>
<tr><td>11</td><td>Marlies</td><td>21.00</td></tr>
<tr><td>12</td><td>Bruins</td><td>21.00</td></tr>
<tr><td>13</td><td>Phantoms</td><td>20.86</td></tr>
<tr><td>14</td><td>Condors</td><td>19.06</td></tr>
<tr><td>15</td><td>Comets</td><td>18.29</td></tr>
<tr><td>16</td><td>Wolves</td><td>17.50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 21.69</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Comets</td><td>18.38</td></tr>
<tr><td>2</td><td>Thunderbirds</td><td>19.32</td></tr>
<tr><td>3</td><td>IceHogs</td><td>19.64</td></tr>
<tr><td>4</td><td>Marlies</td><td>20.18</td></tr>
<tr><td>5</td><td>Condors</td><td>20.24</td></tr>
<tr><td>6</td><td>Bruins</td><td>20.71</td></tr>
<tr><td>7</td><td>Admirals</td><td>21.06</td></tr>
<tr><td>8</td><td>Heat</td><td>21.25</td></tr>
<tr><td>9</td><td>Phantoms</td><td>21.43</td></tr>
<tr><td>10</td><td> Americans</td><td>22.91</td></tr>
<tr><td>11</td><td>Monsters</td><td>23.08</td></tr>
<tr><td>12</td><td>Moose</td><td>24.25</td></tr>
<tr><td>13</td><td>Penguins</td><td>25.86</td></tr>
<tr><td>14</td><td>Checkers</td><td>26.29</td></tr>
<tr><td>15</td><td>Wolves</td><td>29.75</td></tr>
<tr><td>16</td><td>Barracudas</td><td>30.86</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>IceHogs</td><td>137.96%</td></tr>
<tr><td>2</td><td>Thunderbirds</td><td>114.17%</td></tr>
<tr><td>3</td><td>Admirals</td><td>113.65%</td></tr>
<tr><td>4</td><td>Heat</td><td>108.24%</td></tr>
<tr><td>5</td><td>Marlies</td><td>104.05%</td></tr>
<tr><td>6</td><td>Monsters</td><td>102.00%</td></tr>
<tr><td>7</td><td>Bruins</td><td>101.38%</td></tr>
<tr><td>8</td><td>Comets</td><td>99.48%</td></tr>
<tr><td>9</td><td>Phantoms</td><td>97.33%</td></tr>
<tr><td>10</td><td>Condors</td><td>94.19%</td></tr>
<tr><td>11</td><td> Americans</td><td>94.05%</td></tr>
<tr><td>12</td><td>Penguins</td><td>90.61%</td></tr>
<tr><td>13</td><td>Moose</td><td>87.63%</td></tr>
<tr><td>14</td><td>Checkers</td><td>84.78%</td></tr>
<tr><td>15</td><td>Barracudas</td><td>73.61%</td></tr>
<tr><td>16</td><td>Wolves</td><td>58.82%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 13.07</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wolves</td><td>8.50</td></tr>
<tr><td>2</td><td>Barracudas</td><td>8.57</td></tr>
<tr><td>3</td><td>Thunderbirds</td><td>9.58</td></tr>
<tr><td>4</td><td>IceHogs</td><td>9.64</td></tr>
<tr><td>5</td><td>Monsters</td><td>9.92</td></tr>
<tr><td>6</td><td>Heat</td><td>10.50</td></tr>
<tr><td>7</td><td>Penguins</td><td>12.29</td></tr>
<tr><td>8</td><td>Comets</td><td>13.57</td></tr>
<tr><td>9</td><td>Admirals</td><td>13.94</td></tr>
<tr><td>10</td><td>Marlies</td><td>14.36</td></tr>
<tr><td>11</td><td>Condors</td><td>14.88</td></tr>
<tr><td>12</td><td>Checkers</td><td>15.43</td></tr>
<tr><td>13</td><td> Americans</td><td>16.45</td></tr>
<tr><td>14</td><td>Moose</td><td>17.50</td></tr>
<tr><td>15</td><td>Phantoms</td><td>17.71</td></tr>
<tr><td>16</td><td>Bruins</td><td>18.29</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19.45</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bruins</td><td>25.71</td></tr>
<tr><td>2</td><td>Marlies</td><td>23.91</td></tr>
<tr><td>3</td><td>Phantoms</td><td>23.43</td></tr>
<tr><td>4</td><td>Checkers</td><td>23.14</td></tr>
<tr><td>5</td><td>Condors</td><td>21.59</td></tr>
<tr><td>6</td><td> Americans</td><td>20.82</td></tr>
<tr><td>7</td><td>IceHogs</td><td>19.82</td></tr>
<tr><td>8</td><td>Monsters</td><td>18.69</td></tr>
<tr><td>9</td><td>Comets</td><td>18.57</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>18.37</td></tr>
<tr><td>11</td><td>Moose</td><td>18.00</td></tr>
<tr><td>12</td><td>Admirals</td><td>17.88</td></tr>
<tr><td>13</td><td>Heat</td><td>15.50</td></tr>
<tr><td>14</td><td>Penguins</td><td>14.14</td></tr>
<tr><td>15</td><td>Wolves</td><td>14.00</td></tr>
<tr><td>16</td><td>Barracudas</td><td>12.71</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>IceHogs</td><td>66.32%</td></tr>
<tr><td>2</td><td>Marlies</td><td>59.24%</td></tr>
<tr><td>3</td><td>Thunderbirds</td><td>58.58%</td></tr>
<tr><td>4</td><td>Moose</td><td>57.53%</td></tr>
<tr><td>5</td><td>Admirals</td><td>56.41%</td></tr>
<tr><td>6</td><td>Phantoms</td><td>53.29%</td></tr>
<tr><td>7</td><td>Penguins</td><td>52.10%</td></tr>
<tr><td>8</td><td>Condors</td><td>50.71%</td></tr>
<tr><td>9</td><td>Heat</td><td>47.60%</td></tr>
<tr><td>10</td><td>Comets</td><td>47.06%</td></tr>
<tr><td>11</td><td>Bruins</td><td>46.06%</td></tr>
<tr><td>12</td><td>Monsters</td><td>43.35%</td></tr>
<tr><td>13</td><td> Americans</td><td>42.47%</td></tr>
<tr><td>14</td><td>Checkers</td><td>32.92%</td></tr>
<tr><td>15</td><td>Wolves</td><td>29.73%</td></tr>
<tr><td>16</td><td>Barracudas</td><td>27.45%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
