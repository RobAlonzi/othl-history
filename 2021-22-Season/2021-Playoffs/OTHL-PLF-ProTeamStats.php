<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Stats</title>
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
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Blackhawks</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>13</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>7</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>6</td><td>5</td><td>9</td><td>14</td></tr>
<tr><td>Blue Jackets</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>22</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>14</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>8</td><td>19</td><td>32</td><td>51</td></tr>
<tr><td>Bruins</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>16</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>6</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>10</td><td>17</td><td>32</td><td>49</td></tr>
<tr><td>Canadiens</td><td>27</td><td>15</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>78</td><td>78</td><td>14</td><td>6</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>44</td><td>13</td><td>9</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>38</td><td>34</td><td>78</td><td>140</td><td>218</td></tr>
<tr><td>Canucks</td><td>18</td><td>11</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>60</td><td>52</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>20</td><td>10</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>32</td><td>60</td><td>110</td><td>170</td></tr>
<tr><td>Devils</td><td>12</td><td>5</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>40</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>16</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>24</td><td>37</td><td>70</td><td>107</td></tr>
<tr><td>Flames</td><td>23</td><td>16</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>74</td><td>57</td><td>13</td><td>9</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>38</td><td>29</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>36</td><td>28</td><td>74</td><td>127</td><td>201</td></tr>
<tr><td>Islanders</td><td>15</td><td>10</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>55</td><td>46</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>30</td><td>24</td><td>7</td><td>5</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>22</td><td>55</td><td>102</td><td>157</td></tr>
<tr><td>Kings</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>14</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>8</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>6</td><td>12</td><td>23</td><td>35</td></tr>
<tr><td>Kraken</td><td>8</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>24</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>14</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>15</td><td>28</td><td>43</td></tr>
<tr><td>Maple Leafs</td><td>14</td><td>7</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>47</td><td>45</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>17</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>28</td><td>47</td><td>85</td><td>132</td></tr>
<tr><td>Oilers</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>9</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>5</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>4</td><td>4</td><td>8</td><td>12</td></tr>
<tr><td>Panthers</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>15</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>7</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>8</td><td>9</td><td>15</td><td>24</td></tr>
<tr><td>Predators</td><td>13</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>43</td><td>7</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>27</td><td>6</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>16</td><td>45</td><td>79</td><td>124</td></tr>
<tr><td>Sabres</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>23</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>10</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>13</td><td>22</td><td>37</td><td>59</td></tr>
<tr><td>Stars</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>20</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>10</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>18</td><td>31</td><td>49</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Blackhawks</td><td>CHI</td><td>1</td><td>4</td><td>0</td><td>0</td><td>117</td><td>33</td><td>43</td><td>41</td><td>0</td><td>150</td><td>30</td><td>32</td><td>89</td><td>8</td><td>1</td><td>12.50%</td><td>16</td><td>3</td><td>81.25%</td><td>0</td><td>47.95%</td><td>54.33%</td><td>57.41%</td><td>90</td><td>96</td><td>54</td><td>30</td><td>66</td><td>27</td><td>0</td><td>0</td></tr>
<tr><td>Blue Jackets</td><td>CLB</td><td>8</td><td>7</td><td>3</td><td>1</td><td>231</td><td>70</td><td>82</td><td>78</td><td>1</td><td>259</td><td>63</td><td>54</td><td>141</td><td>22</td><td>3</td><td>13.64%</td><td>22</td><td>5</td><td>77.27%</td><td>0</td><td>44.40%</td><td>37.15%</td><td>36.04%</td><td>174</td><td>160</td><td>91</td><td>53</td><td>109</td><td>45</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>BOS</td><td>4</td><td>8</td><td>5</td><td>0</td><td>229</td><td>68</td><td>72</td><td>75</td><td>14</td><td>238</td><td>58</td><td>50</td><td>144</td><td>22</td><td>4</td><td>18.18%</td><td>25</td><td>3</td><td>88.00%</td><td>0</td><td>47.72%</td><td>50.18%</td><td>58.00%</td><td>171</td><td>177</td><td>98</td><td>57</td><td>121</td><td>49</td><td>0</td><td>0</td></tr>
<tr><td>Canadiens</td><td>MTL</td><td>33</td><td>21</td><td>20</td><td>4</td><td>927</td><td>294</td><td>282</td><td>308</td><td>43</td><td>997</td><td>265</td><td>213</td><td>592</td><td>78</td><td>12</td><td>15.38%</td><td>96</td><td>19</td><td>80.21%</td><td>1</td><td>50.32%</td><td>49.53%</td><td>47.86%</td><td>675</td><td>649</td><td>360</td><td>207</td><td>442</td><td>178</td><td>1</td><td>0</td></tr>
<tr><td>Canucks</td><td>VAN</td><td>21</td><td>16</td><td>22</td><td>1</td><td>627</td><td>215</td><td>188</td><td>209</td><td>15</td><td>649</td><td>174</td><td>129</td><td>388</td><td>58</td><td>12</td><td>20.69%</td><td>51</td><td>13</td><td>74.51%</td><td>1</td><td>50.07%</td><td>53.17%</td><td>52.60%</td><td>436</td><td>439</td><td>239</td><td>131</td><td>303</td><td>121</td><td>0</td><td>0</td></tr>
<tr><td>Devils</td><td>NJD</td><td>10</td><td>18</td><td>8</td><td>1</td><td>411</td><td>144</td><td>141</td><td>121</td><td>5</td><td>420</td><td>114</td><td>82</td><td>225</td><td>36</td><td>9</td><td>25.00%</td><td>36</td><td>8</td><td>77.78%</td><td>0</td><td>58.49%</td><td>57.01%</td><td>58.67%</td><td>287</td><td>296</td><td>158</td><td>87</td><td>207</td><td>79</td><td>1</td><td>1</td></tr>
<tr><td>Flames</td><td>CGY</td><td>24</td><td>30</td><td>16</td><td>4</td><td>896</td><td>289</td><td>276</td><td>307</td><td>24</td><td>762</td><td>181</td><td>188</td><td>494</td><td>75</td><td>12</td><td>16.00%</td><td>60</td><td>9</td><td>85.00%</td><td>2</td><td>53.27%</td><td>54.05%</td><td>46.07%</td><td>546</td><td>566</td><td>297</td><td>175</td><td>400</td><td>144</td><td>2</td><td>0</td></tr>
<tr><td>Islanders</td><td>NYI</td><td>18</td><td>17</td><td>18</td><td>2</td><td>562</td><td>169</td><td>167</td><td>195</td><td>31</td><td>480</td><td>134</td><td>94</td><td>318</td><td>52</td><td>15</td><td>28.85%</td><td>46</td><td>6</td><td>86.96%</td><td>0</td><td>45.57%</td><td>46.96%</td><td>44.76%</td><td>360</td><td>382</td><td>201</td><td>111</td><td>266</td><td>102</td><td>0</td><td>0</td></tr>
<tr><td>Kings</td><td>LAK</td><td>3</td><td>3</td><td>6</td><td>0</td><td>179</td><td>58</td><td>52</td><td>59</td><td>10</td><td>193</td><td>51</td><td>54</td><td>90</td><td>9</td><td>1</td><td>11.11%</td><td>20</td><td>0</td><td>100.00%</td><td>0</td><td>44.50%</td><td>42.93%</td><td>47.95%</td><td>128</td><td>121</td><td>62</td><td>37</td><td>84</td><td>32</td><td>1</td><td>1</td></tr>
<tr><td>Kraken</td><td>SEA</td><td>6</td><td>3</td><td>5</td><td>1</td><td>255</td><td>92</td><td>78</td><td>79</td><td>6</td><td>308</td><td>90</td><td>46</td><td>161</td><td>22</td><td>2</td><td>9.09%</td><td>23</td><td>2</td><td>91.30%</td><td>1</td><td>46.95%</td><td>50.17%</td><td>55.93%</td><td>199</td><td>191</td><td>104</td><td>59</td><td>128</td><td>54</td><td>1</td><td>0</td></tr>
<tr><td>Maple Leafs</td><td>TOR</td><td>14</td><td>21</td><td>11</td><td>1</td><td>499</td><td>173</td><td>181</td><td>134</td><td>11</td><td>550</td><td>146</td><td>105</td><td>302</td><td>43</td><td>9</td><td>20.93%</td><td>43</td><td>12</td><td>72.09%</td><td>2</td><td>48.80%</td><td>51.13%</td><td>54.63%</td><td>344</td><td>340</td><td>181</td><td>103</td><td>236</td><td>92</td><td>1</td><td>2</td></tr>
<tr><td>Oilers</td><td>EDM</td><td>1</td><td>1</td><td>2</td><td>0</td><td>146</td><td>43</td><td>46</td><td>48</td><td>9</td><td>142</td><td>43</td><td>26</td><td>86</td><td>14</td><td>0</td><td>0.00%</td><td>13</td><td>2</td><td>84.62%</td><td>0</td><td>47.13%</td><td>54.09%</td><td>54.00%</td><td>97</td><td>104</td><td>51</td><td>31</td><td>73</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Panthers</td><td>FLA</td><td>3</td><td>3</td><td>3</td><td>0</td><td>123</td><td>38</td><td>36</td><td>41</td><td>8</td><td>161</td><td>43</td><td>32</td><td>78</td><td>15</td><td>1</td><td>6.67%</td><td>16</td><td>4</td><td>75.00%</td><td>0</td><td>46.01%</td><td>52.71%</td><td>61.29%</td><td>107</td><td>94</td><td>55</td><td>33</td><td>64</td><td>26</td><td>0</td><td>0</td></tr>
<tr><td>Predators</td><td>NSH</td><td>13</td><td>15</td><td>15</td><td>2</td><td>483</td><td>144</td><td>155</td><td>168</td><td>16</td><td>458</td><td>134</td><td>98</td><td>264</td><td>44</td><td>9</td><td>20.45%</td><td>32</td><td>7</td><td>78.13%</td><td>0</td><td>43.72%</td><td>44.49%</td><td>40.35%</td><td>318</td><td>317</td><td>174</td><td>99</td><td>220</td><td>85</td><td>1</td><td>0</td></tr>
<tr><td>Sabres</td><td>BUF</td><td>8</td><td>7</td><td>7</td><td>0</td><td>293</td><td>101</td><td>101</td><td>91</td><td>0</td><td>228</td><td>75</td><td>40</td><td>134</td><td>25</td><td>6</td><td>24.00%</td><td>16</td><td>4</td><td>75.00%</td><td>0</td><td>47.79%</td><td>53.33%</td><td>48.15%</td><td>160</td><td>170</td><td>90</td><td>49</td><td>119</td><td>43</td><td>0</td><td>1</td></tr>
<tr><td>Stars</td><td>DAL</td><td>7</td><td>8</td><td>2</td><td>1</td><td>224</td><td>84</td><td>65</td><td>66</td><td>9</td><td>207</td><td>75</td><td>68</td><td>129</td><td>14</td><td>4</td><td>28.57%</td><td>22</td><td>3</td><td>86.36%</td><td>0</td><td>55.81%</td><td>54.39%</td><td>62.96%</td><td>149</td><td>141</td><td>82</td><td>47</td><td>94</td><td>41</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.97</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Islanders</td><td>3.67</td></tr>
<tr><td>2</td><td>Predators</td><td>3.46</td></tr>
<tr><td>3</td><td>Maple Leafs</td><td>3.36</td></tr>
<tr><td>4</td><td>Canucks</td><td>3.33</td></tr>
<tr><td>5</td><td>Flames</td><td>3.22</td></tr>
<tr><td>6</td><td>Sabres</td><td>3.14</td></tr>
<tr><td>7</td><td>Devils</td><td>3.08</td></tr>
<tr><td>8</td><td>Stars</td><td>3.00</td></tr>
<tr><td>9</td><td>Canadiens</td><td>2.89</td></tr>
<tr><td>10</td><td>Blue Jackets</td><td>2.71</td></tr>
<tr><td>11</td><td>Bruins</td><td>2.43</td></tr>
<tr><td>12</td><td>Kings</td><td>2.40</td></tr>
<tr><td>13</td><td>Panthers</td><td>2.25</td></tr>
<tr><td>14</td><td>Kraken</td><td>1.88</td></tr>
<tr><td>15</td><td>Blackhawks</td><td>1.25</td></tr>
<tr><td>16</td><td>Oilers</td><td>1.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.97</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oilers</td><td>2.25</td></tr>
<tr><td>2</td><td>Bruins</td><td>2.29</td></tr>
<tr><td>3</td><td>Flames</td><td>2.48</td></tr>
<tr><td>4</td><td>Kings</td><td>2.80</td></tr>
<tr><td>5</td><td>Canucks</td><td>2.89</td></tr>
<tr><td>6</td><td>Canadiens</td><td>2.89</td></tr>
<tr><td>7</td><td>Kraken</td><td>3.00</td></tr>
<tr><td>8</td><td>Islanders</td><td>3.07</td></tr>
<tr><td>9</td><td>Blue Jackets</td><td>3.14</td></tr>
<tr><td>10</td><td>Maple Leafs</td><td>3.21</td></tr>
<tr><td>11</td><td>Blackhawks</td><td>3.25</td></tr>
<tr><td>12</td><td>Sabres</td><td>3.29</td></tr>
<tr><td>13</td><td>Predators</td><td>3.31</td></tr>
<tr><td>14</td><td>Stars</td><td>3.33</td></tr>
<tr><td>15</td><td>Devils</td><td>3.33</td></tr>
<tr><td>16</td><td>Panthers</td><td>3.75</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Flames</td><td>129.82%</td></tr>
<tr><td>2</td><td>Islanders</td><td>119.57%</td></tr>
<tr><td>3</td><td>Canucks</td><td>115.38%</td></tr>
<tr><td>4</td><td>Bruins</td><td>106.25%</td></tr>
<tr><td>5</td><td>Predators</td><td>104.65%</td></tr>
<tr><td>6</td><td>Maple Leafs</td><td>104.44%</td></tr>
<tr><td>7</td><td>Canadiens</td><td>100.00%</td></tr>
<tr><td>8</td><td>Sabres</td><td>95.65%</td></tr>
<tr><td>9</td><td>Devils</td><td>92.50%</td></tr>
<tr><td>10</td><td>Stars</td><td>90.00%</td></tr>
<tr><td>11</td><td>Blue Jackets</td><td>86.36%</td></tr>
<tr><td>12</td><td>Kings</td><td>85.71%</td></tr>
<tr><td>13</td><td>Kraken</td><td>62.50%</td></tr>
<tr><td>14</td><td>Panthers</td><td>60.00%</td></tr>
<tr><td>15</td><td>Oilers</td><td>44.44%</td></tr>
<tr><td>16</td><td>Blackhawks</td><td>38.46%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18.62%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Islanders</td><td>28.85%</td></tr>
<tr><td>2</td><td>Stars</td><td>28.57%</td></tr>
<tr><td>3</td><td>Devils</td><td>25.00%</td></tr>
<tr><td>4</td><td>Sabres</td><td>24.00%</td></tr>
<tr><td>5</td><td>Maple Leafs</td><td>20.93%</td></tr>
<tr><td>6</td><td>Canucks</td><td>20.69%</td></tr>
<tr><td>7</td><td>Predators</td><td>20.45%</td></tr>
<tr><td>8</td><td>Bruins</td><td>18.18%</td></tr>
<tr><td>9</td><td>Flames</td><td>16.00%</td></tr>
<tr><td>10</td><td>Canadiens</td><td>15.38%</td></tr>
<tr><td>11</td><td>Blue Jackets</td><td>13.64%</td></tr>
<tr><td>12</td><td>Blackhawks</td><td>12.50%</td></tr>
<tr><td>13</td><td>Kings</td><td>11.11%</td></tr>
<tr><td>14</td><td>Kraken</td><td>9.09%</td></tr>
<tr><td>15</td><td>Panthers</td><td>6.67%</td></tr>
<tr><td>16</td><td>Oilers</td><td>0.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 81.38%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Kings</td><td>100.00%</td></tr>
<tr><td>2</td><td>Kraken</td><td>91.30%</td></tr>
<tr><td>3</td><td>Bruins</td><td>88.00%</td></tr>
<tr><td>4</td><td>Islanders</td><td>86.96%</td></tr>
<tr><td>5</td><td>Stars</td><td>86.36%</td></tr>
<tr><td>6</td><td>Flames</td><td>85.00%</td></tr>
<tr><td>7</td><td>Oilers</td><td>84.62%</td></tr>
<tr><td>8</td><td>Blackhawks</td><td>81.25%</td></tr>
<tr><td>9</td><td>Canadiens</td><td>80.21%</td></tr>
<tr><td>10</td><td>Predators</td><td>78.13%</td></tr>
<tr><td>11</td><td>Devils</td><td>77.78%</td></tr>
<tr><td>12</td><td>Blue Jackets</td><td>77.27%</td></tr>
<tr><td>13</td><td>Sabres</td><td>75.00%</td></tr>
<tr><td>14</td><td>Panthers</td><td>75.00%</td></tr>
<tr><td>15</td><td>Canucks</td><td>74.51%</td></tr>
<tr><td>16</td><td>Maple Leafs</td><td>72.09%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Islanders</td><td>115.80%</td></tr>
<tr><td>2</td><td>Stars</td><td>114.94%</td></tr>
<tr><td>3</td><td>Kings</td><td>111.11%</td></tr>
<tr><td>4</td><td>Bruins</td><td>106.18%</td></tr>
<tr><td>5</td><td>Devils</td><td>102.78%</td></tr>
<tr><td>6</td><td>Flames</td><td>101.00%</td></tr>
<tr><td>7</td><td>Kraken</td><td>100.40%</td></tr>
<tr><td>8</td><td>Sabres</td><td>99.00%</td></tr>
<tr><td>9</td><td>Predators</td><td>98.58%</td></tr>
<tr><td>10</td><td>Canadiens</td><td>95.59%</td></tr>
<tr><td>11</td><td>Canucks</td><td>95.20%</td></tr>
<tr><td>12</td><td>Blackhawks</td><td>93.75%</td></tr>
<tr><td>13</td><td>Maple Leafs</td><td>93.02%</td></tr>
<tr><td>14</td><td>Blue Jackets</td><td>90.91%</td></tr>
<tr><td>15</td><td>Oilers</td><td>84.62%</td></tr>
<tr><td>16</td><td>Panthers</td><td>81.67%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 35.64</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Sabres</td><td>41.86</td></tr>
<tr><td>2</td><td>Flames</td><td>38.96</td></tr>
<tr><td>3</td><td>Islanders</td><td>37.47</td></tr>
<tr><td>4</td><td>Stars</td><td>37.33</td></tr>
<tr><td>5</td><td>Predators</td><td>37.15</td></tr>
<tr><td>6</td><td>Oilers</td><td>36.50</td></tr>
<tr><td>7</td><td>Kings</td><td>35.80</td></tr>
<tr><td>8</td><td>Maple Leafs</td><td>35.64</td></tr>
<tr><td>9</td><td>Canucks</td><td>34.83</td></tr>
<tr><td>10</td><td>Canadiens</td><td>34.33</td></tr>
<tr><td>11</td><td>Devils</td><td>34.25</td></tr>
<tr><td>12</td><td>Blue Jackets</td><td>33.00</td></tr>
<tr><td>13</td><td>Bruins</td><td>32.71</td></tr>
<tr><td>14</td><td>Kraken</td><td>31.88</td></tr>
<tr><td>15</td><td>Panthers</td><td>30.75</td></tr>
<tr><td>16</td><td>Blackhawks</td><td>29.25</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 35.64</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Islanders</td><td>32.00</td></tr>
<tr><td>2</td><td>Sabres</td><td>32.57</td></tr>
<tr><td>3</td><td>Flames</td><td>33.13</td></tr>
<tr><td>4</td><td>Bruins</td><td>34.00</td></tr>
<tr><td>5</td><td>Stars</td><td>34.50</td></tr>
<tr><td>6</td><td>Devils</td><td>35.00</td></tr>
<tr><td>7</td><td>Predators</td><td>35.23</td></tr>
<tr><td>8</td><td>Oilers</td><td>35.50</td></tr>
<tr><td>9</td><td>Canucks</td><td>36.06</td></tr>
<tr><td>10</td><td>Canadiens</td><td>36.93</td></tr>
<tr><td>11</td><td>Blue Jackets</td><td>37.00</td></tr>
<tr><td>12</td><td>Blackhawks</td><td>37.50</td></tr>
<tr><td>13</td><td>Kraken</td><td>38.50</td></tr>
<tr><td>14</td><td>Kings</td><td>38.60</td></tr>
<tr><td>15</td><td>Maple Leafs</td><td>39.29</td></tr>
<tr><td>16</td><td>Panthers</td><td>40.25</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Sabres</td><td>128.51%</td></tr>
<tr><td>2</td><td>Flames</td><td>117.59%</td></tr>
<tr><td>3</td><td>Islanders</td><td>117.08%</td></tr>
<tr><td>4</td><td>Stars</td><td>108.21%</td></tr>
<tr><td>5</td><td>Predators</td><td>105.46%</td></tr>
<tr><td>6</td><td>Oilers</td><td>102.82%</td></tr>
<tr><td>7</td><td>Devils</td><td>97.86%</td></tr>
<tr><td>8</td><td>Canucks</td><td>96.61%</td></tr>
<tr><td>9</td><td>Bruins</td><td>96.22%</td></tr>
<tr><td>10</td><td>Canadiens</td><td>92.98%</td></tr>
<tr><td>11</td><td>Kings</td><td>92.75%</td></tr>
<tr><td>12</td><td>Maple Leafs</td><td>90.73%</td></tr>
<tr><td>13</td><td>Blue Jackets</td><td>89.19%</td></tr>
<tr><td>14</td><td>Kraken</td><td>82.79%</td></tr>
<tr><td>15</td><td>Blackhawks</td><td>78.00%</td></tr>
<tr><td>16</td><td>Panthers</td><td>76.40%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7.53</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Sabres</td><td>5.71</td></tr>
<tr><td>2</td><td>Kraken</td><td>5.75</td></tr>
<tr><td>3</td><td>Islanders</td><td>6.27</td></tr>
<tr><td>4</td><td>Oilers</td><td>6.50</td></tr>
<tr><td>5</td><td>Devils</td><td>6.83</td></tr>
<tr><td>6</td><td>Bruins</td><td>7.14</td></tr>
<tr><td>7</td><td>Canucks</td><td>7.17</td></tr>
<tr><td>8</td><td>Maple Leafs</td><td>7.50</td></tr>
<tr><td>9</td><td>Predators</td><td>7.54</td></tr>
<tr><td>10</td><td>Blue Jackets</td><td>7.71</td></tr>
<tr><td>11</td><td>Canadiens</td><td>7.89</td></tr>
<tr><td>12</td><td>Blackhawks</td><td>8.00</td></tr>
<tr><td>13</td><td>Panthers</td><td>8.00</td></tr>
<tr><td>14</td><td>Flames</td><td>8.17</td></tr>
<tr><td>15</td><td>Kings</td><td>10.80</td></tr>
<tr><td>16</td><td>Stars</td><td>11.33</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20.89</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>22.25</td></tr>
<tr><td>2</td><td>Canadiens</td><td>21.93</td></tr>
<tr><td>3</td><td>Maple Leafs</td><td>21.57</td></tr>
<tr><td>4</td><td>Canucks</td><td>21.56</td></tr>
<tr><td>5</td><td>Stars</td><td>21.50</td></tr>
<tr><td>6</td><td>Oilers</td><td>21.50</td></tr>
<tr><td>7</td><td>Flames</td><td>21.48</td></tr>
<tr><td>8</td><td>Islanders</td><td>21.20</td></tr>
<tr><td>9</td><td>Bruins</td><td>20.57</td></tr>
<tr><td>10</td><td>Predators</td><td>20.31</td></tr>
<tr><td>11</td><td>Blue Jackets</td><td>20.14</td></tr>
<tr><td>12</td><td>Kraken</td><td>20.13</td></tr>
<tr><td>13</td><td>Panthers</td><td>19.50</td></tr>
<tr><td>14</td><td>Sabres</td><td>19.14</td></tr>
<tr><td>15</td><td>Devils</td><td>18.75</td></tr>
<tr><td>16</td><td>Kings</td><td>18.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Devils</td><td>57.92%</td></tr>
<tr><td>2</td><td>Stars</td><td>56.58%</td></tr>
<tr><td>3</td><td>Flames</td><td>52.42%</td></tr>
<tr><td>4</td><td>Canucks</td><td>51.83%</td></tr>
<tr><td>5</td><td>Blackhawks</td><td>51.70%</td></tr>
<tr><td>6</td><td>Panthers</td><td>51.13%</td></tr>
<tr><td>7</td><td>Oilers</td><td>51.09%</td></tr>
<tr><td>8</td><td>Maple Leafs</td><td>50.77%</td></tr>
<tr><td>9</td><td>Bruins</td><td>50.49%</td></tr>
<tr><td>10</td><td>Sabres</td><td>50.40%</td></tr>
<tr><td>11</td><td>Kraken</td><td>49.72%</td></tr>
<tr><td>12</td><td>Canadiens</td><td>49.60%</td></tr>
<tr><td>13</td><td>Islanders</td><td>46.02%</td></tr>
<tr><td>14</td><td>Kings</td><td>44.38%</td></tr>
<tr><td>15</td><td>Predators</td><td>43.40%</td></tr>
<tr><td>16</td><td>Blue Jackets</td><td>40.03%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
