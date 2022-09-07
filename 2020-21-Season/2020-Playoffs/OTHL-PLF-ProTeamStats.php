<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Stats</title>
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
<tr><td>Blackhawks</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>17</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>8</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>9</td><td>11</td><td>18</td><td>29</td></tr>
<tr><td>Blue Jackets</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>15</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>9</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>6</td><td>14</td><td>27</td><td>41</td></tr>
<tr><td>Bruins</td><td>22</td><td>16</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>66</td><td>49</td><td>12</td><td>8</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>30</td><td>10</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>34</td><td>19</td><td>66</td><td>122</td><td>188</td></tr>
<tr><td>Canucks</td><td>17</td><td>12</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>58</td><td>44</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>18</td><td>9</td><td>6</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>26</td><td>58</td><td>104</td><td>162</td></tr>
<tr><td>Coyotes</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>17</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>9</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>8</td><td>12</td><td>21</td><td>33</td></tr>
<tr><td>Ducks</td><td>11</td><td>4</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>31</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>16</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>15</td><td>28</td><td>52</td><td>80</td></tr>
<tr><td>Flames</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>22</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>9</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>13</td><td>17</td><td>28</td><td>45</td></tr>
<tr><td>Flyers</td><td>16</td><td>11</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>55</td><td>40</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>23</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>17</td><td>55</td><td>100</td><td>155</td></tr>
<tr><td>Islanders</td><td>11</td><td>5</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>35</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>15</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>20</td><td>28</td><td>49</td><td>77</td></tr>
<tr><td>Lightning</td><td>14</td><td>7</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>33</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>11</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>22</td><td>27</td><td>48</td><td>75</td></tr>
<tr><td>Maple Leafs</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>13</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>9</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>4</td><td>6</td><td>9</td><td>15</td></tr>
<tr><td>Oilers</td><td>11</td><td>7</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>32</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>15</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>17</td><td>35</td><td>65</td><td>100</td></tr>
<tr><td>Panthers</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>15</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>9</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>6</td><td>8</td><td>14</td><td>22</td></tr>
<tr><td>Predators</td><td>18</td><td>8</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>55</td><td>55</td><td>9</td><td>5</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>24</td><td>9</td><td>3</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>26</td><td>31</td><td>55</td><td>101</td><td>156</td></tr>
<tr><td>Sabres</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>15</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>9</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>6</td><td>16</td><td>30</td><td>46</td></tr>
<tr><td>Stars</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>21</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>11</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>18</td><td>33</td><td>51</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Blackhawks</td><td>CHI</td><td>5</td><td>2</td><td>4</td><td>0</td><td>155</td><td>60</td><td>56</td><td>39</td><td>0</td><td>155</td><td>50</td><td>20</td><td>83</td><td>10</td><td>2</td><td>20.00%</td><td>9</td><td>0</td><td>100.00%</td><td>0</td><td>49.38%</td><td>48.48%</td><td>53.57%</td><td>102</td><td>88</td><td>50</td><td>30</td><td>60</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Blue Jackets</td><td>CLB</td><td>5</td><td>6</td><td>3</td><td>0</td><td>205</td><td>68</td><td>58</td><td>69</td><td>10</td><td>178</td><td>47</td><td>43</td><td>109</td><td>22</td><td>4</td><td>18.18%</td><td>18</td><td>3</td><td>83.33%</td><td>0</td><td>44.39%</td><td>37.04%</td><td>50.00%</td><td>143</td><td>154</td><td>77</td><td>45</td><td>105</td><td>38</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>BOS</td><td>20</td><td>21</td><td>24</td><td>1</td><td>841</td><td>276</td><td>265</td><td>292</td><td>8</td><td>705</td><td>210</td><td>215</td><td>531</td><td>65</td><td>10</td><td>15.38%</td><td>87</td><td>15</td><td>82.76%</td><td>0</td><td>51.72%</td><td>53.41%</td><td>55.81%</td><td>505</td><td>538</td><td>285</td><td>164</td><td>369</td><td>145</td><td>2</td><td>2</td></tr>
<tr><td>Canucks</td><td>VAN</td><td>16</td><td>12</td><td>27</td><td>3</td><td>731</td><td>224</td><td>232</td><td>240</td><td>35</td><td>614</td><td>153</td><td>112</td><td>338</td><td>65</td><td>19</td><td>29.23%</td><td>53</td><td>12</td><td>77.36%</td><td>0</td><td>49.78%</td><td>50.70%</td><td>55.60%</td><td>417</td><td>434</td><td>235</td><td>132</td><td>298</td><td>117</td><td>0</td><td>0</td></tr>
<tr><td>Coyotes</td><td>ARI</td><td>5</td><td>2</td><td>5</td><td>0</td><td>189</td><td>68</td><td>49</td><td>72</td><td>0</td><td>177</td><td>56</td><td>34</td><td>86</td><td>13</td><td>2</td><td>15.38%</td><td>16</td><td>6</td><td>62.50%</td><td>0</td><td>54.10%</td><td>45.83%</td><td>40.85%</td><td>115</td><td>120</td><td>64</td><td>36</td><td>85</td><td>32</td><td>0</td><td>1</td></tr>
<tr><td>Ducks</td><td>ANH</td><td>6</td><td>9</td><td>13</td><td>0</td><td>350</td><td>108</td><td>119</td><td>109</td><td>14</td><td>409</td><td>128</td><td>87</td><td>226</td><td>40</td><td>4</td><td>10.00%</td><td>37</td><td>10</td><td>72.97%</td><td>0</td><td>44.42%</td><td>50.26%</td><td>51.74%</td><td>269</td><td>266</td><td>140</td><td>80</td><td>185</td><td>70</td><td>0</td><td>0</td></tr>
<tr><td>Flames</td><td>CGY</td><td>8</td><td>4</td><td>5</td><td>0</td><td>231</td><td>75</td><td>70</td><td>86</td><td>0</td><td>232</td><td>67</td><td>83</td><td>139</td><td>20</td><td>6</td><td>30.00%</td><td>30</td><td>3</td><td>90.00%</td><td>1</td><td>51.79%</td><td>57.72%</td><td>48.21%</td><td>169</td><td>166</td><td>85</td><td>50</td><td>117</td><td>41</td><td>0</td><td>1</td></tr>
<tr><td>Flyers</td><td>PHL</td><td>21</td><td>20</td><td>11</td><td>3</td><td>572</td><td>206</td><td>187</td><td>155</td><td>24</td><td>545</td><td>171</td><td>130</td><td>325</td><td>62</td><td>15</td><td>24.19%</td><td>51</td><td>9</td><td>82.35%</td><td>0</td><td>52.34%</td><td>49.92%</td><td>44.19%</td><td>401</td><td>387</td><td>209</td><td>122</td><td>268</td><td>102</td><td>2</td><td>1</td></tr>
<tr><td>Islanders</td><td>NYI</td><td>11</td><td>5</td><td>11</td><td>1</td><td>330</td><td>104</td><td>92</td><td>124</td><td>10</td><td>420</td><td>129</td><td>93</td><td>188</td><td>36</td><td>6</td><td>16.67%</td><td>42</td><td>10</td><td>76.19%</td><td>0</td><td>55.85%</td><td>50.00%</td><td>53.93%</td><td>283</td><td>272</td><td>144</td><td>87</td><td>187</td><td>71</td><td>0</td><td>0</td></tr>
<tr><td>Lightning</td><td>TBL</td><td>10</td><td>3</td><td>14</td><td>0</td><td>433</td><td>161</td><td>147</td><td>125</td><td>0</td><td>514</td><td>134</td><td>87</td><td>315</td><td>49</td><td>5</td><td>10.20%</td><td>38</td><td>6</td><td>84.21%</td><td>0</td><td>44.98%</td><td>49.02%</td><td>43.00%</td><td>340</td><td>318</td><td>182</td><td>105</td><td>214</td><td>90</td><td>2</td><td>0</td></tr>
<tr><td>Maple Leafs</td><td>TOR</td><td>3</td><td>2</td><td>1</td><td>0</td><td>124</td><td>31</td><td>43</td><td>48</td><td>2</td><td>126</td><td>40</td><td>37</td><td>66</td><td>9</td><td>1</td><td>11.11%</td><td>12</td><td>2</td><td>83.33%</td><td>0</td><td>52.14%</td><td>46.81%</td><td>51.67%</td><td>97</td><td>100</td><td>53</td><td>30</td><td>70</td><td>27</td><td>0</td><td>0</td></tr>
<tr><td>Oilers</td><td>EDM</td><td>15</td><td>6</td><td>14</td><td>0</td><td>403</td><td>151</td><td>114</td><td>138</td><td>0</td><td>406</td><td>112</td><td>86</td><td>233</td><td>29</td><td>7</td><td>24.14%</td><td>35</td><td>7</td><td>80.00%</td><td>0</td><td>54.21%</td><td>53.76%</td><td>51.16%</td><td>244</td><td>274</td><td>141</td><td>78</td><td>191</td><td>73</td><td>1</td><td>0</td></tr>
<tr><td>Panthers</td><td>FLA</td><td>6</td><td>2</td><td>0</td><td>0</td><td>113</td><td>33</td><td>39</td><td>36</td><td>5</td><td>161</td><td>50</td><td>26</td><td>74</td><td>13</td><td>2</td><td>15.38%</td><td>12</td><td>1</td><td>91.67%</td><td>0</td><td>48.80%</td><td>43.07%</td><td>45.45%</td><td>102</td><td>91</td><td>55</td><td>33</td><td>60</td><td>26</td><td>0</td><td>0</td></tr>
<tr><td>Predators</td><td>NSH</td><td>22</td><td>19</td><td>12</td><td>2</td><td>643</td><td>202</td><td>216</td><td>196</td><td>29</td><td>748</td><td>209</td><td>168</td><td>403</td><td>59</td><td>15</td><td>25.42%</td><td>64</td><td>18</td><td>71.88%</td><td>0</td><td>46.03%</td><td>44.48%</td><td>44.30%</td><td>472</td><td>421</td><td>245</td><td>145</td><td>284</td><td>119</td><td>1</td><td>1</td></tr>
<tr><td>Sabres</td><td>BUF</td><td>5</td><td>6</td><td>5</td><td>0</td><td>251</td><td>85</td><td>91</td><td>75</td><td>0</td><td>228</td><td>81</td><td>44</td><td>153</td><td>22</td><td>5</td><td>22.73%</td><td>21</td><td>2</td><td>90.48%</td><td>0</td><td>49.60%</td><td>55.44%</td><td>52.43%</td><td>158</td><td>171</td><td>91</td><td>51</td><td>118</td><td>46</td><td>1</td><td>0</td></tr>
<tr><td>Stars</td><td>DAL</td><td>4</td><td>7</td><td>6</td><td>1</td><td>280</td><td>101</td><td>78</td><td>97</td><td>4</td><td>233</td><td>73</td><td>53</td><td>162</td><td>28</td><td>5</td><td>17.86%</td><td>17</td><td>4</td><td>76.47%</td><td>0</td><td>54.55%</td><td>54.10%</td><td>54.37%</td><td>159</td><td>179</td><td>88</td><td>50</td><td>126</td><td>45</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.77</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Flyers</td><td>3.44</td></tr>
<tr><td>2</td><td>Canucks</td><td>3.41</td></tr>
<tr><td>3</td><td>Oilers</td><td>3.18</td></tr>
<tr><td>4</td><td>Predators</td><td>3.06</td></tr>
<tr><td>5</td><td>Bruins</td><td>3.00</td></tr>
<tr><td>6</td><td>Blackhawks</td><td>2.75</td></tr>
<tr><td>7</td><td>Stars</td><td>2.57</td></tr>
<tr><td>8</td><td>Islanders</td><td>2.55</td></tr>
<tr><td>9</td><td>Ducks</td><td>2.55</td></tr>
<tr><td>10</td><td>Flames</td><td>2.43</td></tr>
<tr><td>11</td><td>Coyotes</td><td>2.40</td></tr>
<tr><td>12</td><td>Blue Jackets</td><td>2.33</td></tr>
<tr><td>13</td><td>Sabres</td><td>2.29</td></tr>
<tr><td>14</td><td>Panthers</td><td>2.00</td></tr>
<tr><td>15</td><td>Lightning</td><td>1.93</td></tr>
<tr><td>16</td><td>Maple Leafs</td><td>1.50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.77</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Sabres</td><td>2.14</td></tr>
<tr><td>2</td><td>Bruins</td><td>2.23</td></tr>
<tr><td>3</td><td>Lightning</td><td>2.36</td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>2.50</td></tr>
<tr><td>5</td><td>Flyers</td><td>2.50</td></tr>
<tr><td>6</td><td>Canucks</td><td>2.59</td></tr>
<tr><td>7</td><td>Ducks</td><td>2.82</td></tr>
<tr><td>8</td><td>Oilers</td><td>2.91</td></tr>
<tr><td>9</td><td>Stars</td><td>3.00</td></tr>
<tr><td>10</td><td>Predators</td><td>3.06</td></tr>
<tr><td>11</td><td>Flames</td><td>3.14</td></tr>
<tr><td>12</td><td>Islanders</td><td>3.18</td></tr>
<tr><td>13</td><td>Maple Leafs</td><td>3.25</td></tr>
<tr><td>14</td><td>Coyotes</td><td>3.40</td></tr>
<tr><td>15</td><td>Panthers</td><td>3.75</td></tr>
<tr><td>16</td><td>Blackhawks</td><td>4.25</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Flyers</td><td>137.50%</td></tr>
<tr><td>2</td><td>Bruins</td><td>134.69%</td></tr>
<tr><td>3</td><td>Canucks</td><td>131.82%</td></tr>
<tr><td>4</td><td>Oilers</td><td>109.38%</td></tr>
<tr><td>5</td><td>Sabres</td><td>106.67%</td></tr>
<tr><td>6</td><td>Predators</td><td>100.00%</td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>93.33%</td></tr>
<tr><td>8</td><td>Ducks</td><td>90.32%</td></tr>
<tr><td>9</td><td>Stars</td><td>85.71%</td></tr>
<tr><td>10</td><td>Lightning</td><td>81.82%</td></tr>
<tr><td>11</td><td>Islanders</td><td>80.00%</td></tr>
<tr><td>12</td><td>Flames</td><td>77.27%</td></tr>
<tr><td>13</td><td>Coyotes</td><td>70.59%</td></tr>
<tr><td>14</td><td>Blackhawks</td><td>64.71%</td></tr>
<tr><td>15</td><td>Panthers</td><td>53.33%</td></tr>
<tr><td>16</td><td>Maple Leafs</td><td>46.15%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19.93%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Flames</td><td>30.00%</td></tr>
<tr><td>2</td><td>Canucks</td><td>29.23%</td></tr>
<tr><td>3</td><td>Predators</td><td>25.42%</td></tr>
<tr><td>4</td><td>Flyers</td><td>24.19%</td></tr>
<tr><td>5</td><td>Oilers</td><td>24.14%</td></tr>
<tr><td>6</td><td>Sabres</td><td>22.73%</td></tr>
<tr><td>7</td><td>Blackhawks</td><td>20.00%</td></tr>
<tr><td>8</td><td>Blue Jackets</td><td>18.18%</td></tr>
<tr><td>9</td><td>Stars</td><td>17.86%</td></tr>
<tr><td>10</td><td>Islanders</td><td>16.67%</td></tr>
<tr><td>11</td><td>Bruins</td><td>15.38%</td></tr>
<tr><td>12</td><td>Coyotes</td><td>15.38%</td></tr>
<tr><td>13</td><td>Panthers</td><td>15.38%</td></tr>
<tr><td>14</td><td>Maple Leafs</td><td>11.11%</td></tr>
<tr><td>15</td><td>Lightning</td><td>10.20%</td></tr>
<tr><td>16</td><td>Ducks</td><td>10.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80.07%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>100.00%</td></tr>
<tr><td>2</td><td>Panthers</td><td>91.67%</td></tr>
<tr><td>3</td><td>Sabres</td><td>90.48%</td></tr>
<tr><td>4</td><td>Flames</td><td>90.00%</td></tr>
<tr><td>5</td><td>Lightning</td><td>84.21%</td></tr>
<tr><td>6</td><td>Blue Jackets</td><td>83.33%</td></tr>
<tr><td>7</td><td>Maple Leafs</td><td>83.33%</td></tr>
<tr><td>8</td><td>Bruins</td><td>82.76%</td></tr>
<tr><td>9</td><td>Flyers</td><td>82.35%</td></tr>
<tr><td>10</td><td>Oilers</td><td>80.00%</td></tr>
<tr><td>11</td><td>Canucks</td><td>77.36%</td></tr>
<tr><td>12</td><td>Stars</td><td>76.47%</td></tr>
<tr><td>13</td><td>Islanders</td><td>76.19%</td></tr>
<tr><td>14</td><td>Ducks</td><td>72.97%</td></tr>
<tr><td>15</td><td>Predators</td><td>71.88%</td></tr>
<tr><td>16</td><td>Coyotes</td><td>62.50%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Flames</td><td>120.00%</td></tr>
<tr><td>2</td><td>Blackhawks</td><td>120.00%</td></tr>
<tr><td>3</td><td>Sabres</td><td>113.20%</td></tr>
<tr><td>4</td><td>Panthers</td><td>107.05%</td></tr>
<tr><td>5</td><td>Canucks</td><td>106.59%</td></tr>
<tr><td>6</td><td>Flyers</td><td>106.55%</td></tr>
<tr><td>7</td><td>Oilers</td><td>104.14%</td></tr>
<tr><td>8</td><td>Blue Jackets</td><td>101.52%</td></tr>
<tr><td>9</td><td>Bruins</td><td>98.14%</td></tr>
<tr><td>10</td><td>Predators</td><td>97.30%</td></tr>
<tr><td>11</td><td>Maple Leafs</td><td>94.44%</td></tr>
<tr><td>12</td><td>Lightning</td><td>94.41%</td></tr>
<tr><td>13</td><td>Stars</td><td>94.33%</td></tr>
<tr><td>14</td><td>Islanders</td><td>92.86%</td></tr>
<tr><td>15</td><td>Ducks</td><td>82.97%</td></tr>
<tr><td>16</td><td>Coyotes</td><td>77.88%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 35.68</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>43.00</td></tr>
<tr><td>2</td><td>Stars</td><td>40.00</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>38.75</td></tr>
<tr><td>4</td><td>Bruins</td><td>38.23</td></tr>
<tr><td>5</td><td>Coyotes</td><td>37.80</td></tr>
<tr><td>6</td><td>Oilers</td><td>36.64</td></tr>
<tr><td>7</td><td>Sabres</td><td>35.86</td></tr>
<tr><td>8</td><td>Flyers</td><td>35.75</td></tr>
<tr><td>9</td><td>Predators</td><td>35.72</td></tr>
<tr><td>10</td><td>Blue Jackets</td><td>34.17</td></tr>
<tr><td>11</td><td>Flames</td><td>33.00</td></tr>
<tr><td>12</td><td>Ducks</td><td>31.82</td></tr>
<tr><td>13</td><td>Maple Leafs</td><td>31.00</td></tr>
<tr><td>14</td><td>Lightning</td><td>30.93</td></tr>
<tr><td>15</td><td>Islanders</td><td>30.00</td></tr>
<tr><td>16</td><td>Panthers</td><td>28.25</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 35.68</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blue Jackets</td><td>29.67</td></tr>
<tr><td>2</td><td>Maple Leafs</td><td>31.50</td></tr>
<tr><td>3</td><td>Bruins</td><td>32.05</td></tr>
<tr><td>4</td><td>Sabres</td><td>32.57</td></tr>
<tr><td>5</td><td>Flames</td><td>33.14</td></tr>
<tr><td>6</td><td>Stars</td><td>33.29</td></tr>
<tr><td>7</td><td>Flyers</td><td>34.06</td></tr>
<tr><td>8</td><td>Coyotes</td><td>35.40</td></tr>
<tr><td>9</td><td>Canucks</td><td>36.12</td></tr>
<tr><td>10</td><td>Lightning</td><td>36.71</td></tr>
<tr><td>11</td><td>Oilers</td><td>36.91</td></tr>
<tr><td>12</td><td>Ducks</td><td>37.18</td></tr>
<tr><td>13</td><td>Islanders</td><td>38.18</td></tr>
<tr><td>14</td><td>Blackhawks</td><td>38.75</td></tr>
<tr><td>15</td><td>Panthers</td><td>40.25</td></tr>
<tr><td>16</td><td>Predators</td><td>41.56</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Stars</td><td>120.17%</td></tr>
<tr><td>2</td><td>Bruins</td><td>119.29%</td></tr>
<tr><td>3</td><td>Canucks</td><td>119.06%</td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>115.17%</td></tr>
<tr><td>5</td><td>Sabres</td><td>110.09%</td></tr>
<tr><td>6</td><td>Coyotes</td><td>106.78%</td></tr>
<tr><td>7</td><td>Flyers</td><td>104.95%</td></tr>
<tr><td>8</td><td>Blackhawks</td><td>100.00%</td></tr>
<tr><td>9</td><td>Flames</td><td>99.57%</td></tr>
<tr><td>10</td><td>Oilers</td><td>99.26%</td></tr>
<tr><td>11</td><td>Maple Leafs</td><td>98.41%</td></tr>
<tr><td>12</td><td>Predators</td><td>85.96%</td></tr>
<tr><td>13</td><td>Ducks</td><td>85.57%</td></tr>
<tr><td>14</td><td>Lightning</td><td>84.24%</td></tr>
<tr><td>15</td><td>Islanders</td><td>78.57%</td></tr>
<tr><td>16</td><td>Panthers</td><td>70.19%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8.04</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>5.00</td></tr>
<tr><td>2</td><td>Lightning</td><td>6.21</td></tr>
<tr><td>3</td><td>Sabres</td><td>6.29</td></tr>
<tr><td>4</td><td>Panthers</td><td>6.50</td></tr>
<tr><td>5</td><td>Canucks</td><td>6.59</td></tr>
<tr><td>6</td><td>Coyotes</td><td>6.80</td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>7.17</td></tr>
<tr><td>8</td><td>Stars</td><td>7.57</td></tr>
<tr><td>9</td><td>Oilers</td><td>7.82</td></tr>
<tr><td>10</td><td>Ducks</td><td>7.91</td></tr>
<tr><td>11</td><td>Flyers</td><td>8.13</td></tr>
<tr><td>12</td><td>Islanders</td><td>8.45</td></tr>
<tr><td>13</td><td>Maple Leafs</td><td>9.25</td></tr>
<tr><td>14</td><td>Predators</td><td>9.33</td></tr>
<tr><td>15</td><td>Bruins</td><td>9.77</td></tr>
<tr><td>16</td><td>Flames</td><td>11.86</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20.92</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bruins</td><td>24.14</td></tr>
<tr><td>2</td><td>Stars</td><td>23.14</td></tr>
<tr><td>3</td><td>Lightning</td><td>22.50</td></tr>
<tr><td>4</td><td>Predators</td><td>22.39</td></tr>
<tr><td>5</td><td>Sabres</td><td>21.86</td></tr>
<tr><td>6</td><td>Oilers</td><td>21.18</td></tr>
<tr><td>7</td><td>Blackhawks</td><td>20.75</td></tr>
<tr><td>8</td><td>Ducks</td><td>20.55</td></tr>
<tr><td>9</td><td>Flyers</td><td>20.31</td></tr>
<tr><td>10</td><td>Canucks</td><td>19.88</td></tr>
<tr><td>11</td><td>Flames</td><td>19.86</td></tr>
<tr><td>12</td><td>Panthers</td><td>18.50</td></tr>
<tr><td>13</td><td>Blue Jackets</td><td>18.17</td></tr>
<tr><td>14</td><td>Coyotes</td><td>17.20</td></tr>
<tr><td>15</td><td>Islanders</td><td>17.09</td></tr>
<tr><td>16</td><td>Maple Leafs</td><td>16.50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Stars</td><td>54.31%</td></tr>
<tr><td>2</td><td>Flames</td><td>53.53%</td></tr>
<tr><td>3</td><td>Oilers</td><td>53.51%</td></tr>
<tr><td>4</td><td>Islanders</td><td>53.35%</td></tr>
<tr><td>5</td><td>Bruins</td><td>53.14%</td></tr>
<tr><td>6</td><td>Sabres</td><td>52.70%</td></tr>
<tr><td>7</td><td>Canucks</td><td>51.12%</td></tr>
<tr><td>8</td><td>Flyers</td><td>49.93%</td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>49.85%</td></tr>
<tr><td>10</td><td>Blackhawks</td><td>49.61%</td></tr>
<tr><td>11</td><td>Coyotes</td><td>48.43%</td></tr>
<tr><td>12</td><td>Ducks</td><td>47.98%</td></tr>
<tr><td>13</td><td>Lightning</td><td>46.25%</td></tr>
<tr><td>14</td><td>Panthers</td><td>46.07%</td></tr>
<tr><td>15</td><td>Predators</td><td>45.15%</td></tr>
<tr><td>16</td><td>Blue Jackets</td><td>42.02%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
