<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Stats</title>
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
<tr><td>IceHogs</td><td>11</td><td>6</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>32</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>16</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>16</td><td>39</td><td>72</td><td>111</td></tr>
<tr><td>Monsters</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>26</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>8</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>18</td><td>14</td><td>23</td><td>37</td></tr>
<tr><td>Bruins</td><td>10</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>33</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>19</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>14</td><td>32</td><td>58</td><td>90</td></tr>
<tr><td>Rocket</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>15</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>7</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>8</td><td>3</td><td>6</td><td>9</td></tr>
<tr><td>Canucks</td><td>20</td><td>16</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>82</td><td>43</td><td>10</td><td>9</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>17</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>26</td><td>82</td><td>143</td><td>225</td></tr>
<tr><td>Gulls</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>20</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>12</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>8</td><td>12</td><td>21</td><td>33</td></tr>
<tr><td>Heat</td><td>21</td><td>11</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>69</td><td>79</td><td>9</td><td>7</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>38</td><td>27</td><td>12</td><td>4</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>31</td><td>52</td><td>69</td><td>125</td><td>194</td></tr>
<tr><td>Moose</td><td>24</td><td>14</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>81</td><td>75</td><td>12</td><td>9</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>47</td><td>32</td><td>12</td><td>5</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>34</td><td>43</td><td>81</td><td>112</td><td>193</td></tr>
<tr><td>Mariners</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>20</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>13</td><td>11</td><td>20</td><td>31</td></tr>
<tr><td>Marlies</td><td>15</td><td>10</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>58</td><td>45</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>34</td><td>18</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>27</td><td>58</td><td>98</td><td>156</td></tr>
<tr><td>Condors</td><td>11</td><td>7</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>44</td><td>30</td><td>6</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>12</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>18</td><td>44</td><td>73</td><td>117</td></tr>
<tr><td>Thunderbirds</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>18</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>6</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>12</td><td>18</td><td>32</td><td>50</td></tr>
<tr><td>Penguins</td><td>10</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>40</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>20</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>20</td><td>29</td><td>49</td><td>78</td></tr>
<tr><td>Admirals</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>20</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>12</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>8</td><td>7</td><td>13</td><td>20</td></tr>
<tr><td>Griffins</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>22</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>12</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>10</td><td>17</td><td>28</td><td>45</td></tr>
<tr><td> Americans</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>26</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>11</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>15</td><td>28</td><td>50</td><td>78</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>IceHogs</td><td>RCK</td><td>12</td><td>11</td><td>14</td><td>2</td><td>384</td><td>109</td><td>95</td><td>121</td><td>59</td><td>303</td><td>76</td><td>125</td><td>259</td><td>40</td><td>8</td><td>20.00%</td><td>58</td><td>7</td><td>87.93%</td><td>1</td><td>39.50%</td><td>57.11%</td><td>44.62%</td><td>253</td><td>376</td><td>137</td><td>71</td><td>289</td><td>75</td><td>1</td><td>0</td></tr>
<tr><td>Monsters</td><td>CLE</td><td>5</td><td>5</td><td>3</td><td>1</td><td>88</td><td>29</td><td>28</td><td>29</td><td>2</td><td>173</td><td>43</td><td>52</td><td>95</td><td>20</td><td>5</td><td>25.00%</td><td>25</td><td>10</td><td>60.00%</td><td>0</td><td>36.11%</td><td>34.88%</td><td>40.26%</td><td>156</td><td>94</td><td>57</td><td>35</td><td>66</td><td>25</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>PRO</td><td>14</td><td>3</td><td>15</td><td>0</td><td>237</td><td>84</td><td>67</td><td>83</td><td>3</td><td>215</td><td>59</td><td>130</td><td>181</td><td>63</td><td>6</td><td>9.52%</td><td>58</td><td>14</td><td>75.86%</td><td>0</td><td>47.81%</td><td>51.13%</td><td>38.99%</td><td>232</td><td>255</td><td>124</td><td>74</td><td>179</td><td>63</td><td>0</td><td>0</td></tr>
<tr><td>Rocket</td><td>LAV</td><td>1</td><td>1</td><td>1</td><td>0</td><td>48</td><td>20</td><td>18</td><td>10</td><td>0</td><td>99</td><td>25</td><td>49</td><td>82</td><td>24</td><td>0</td><td>0.00%</td><td>20</td><td>5</td><td>75.00%</td><td>0</td><td>29.75%</td><td>40.82%</td><td>43.10%</td><td>103</td><td>86</td><td>51</td><td>32</td><td>57</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Canucks</td><td>ABB</td><td>31</td><td>24</td><td>26</td><td>1</td><td>535</td><td>178</td><td>183</td><td>170</td><td>4</td><td>366</td><td>132</td><td>271</td><td>404</td><td>85</td><td>20</td><td>23.53%</td><td>121</td><td>11</td><td>90.91%</td><td>2</td><td>54.29%</td><td>61.10%</td><td>57.10%</td><td>423</td><td>543</td><td>238</td><td>129</td><td>392</td><td>128</td><td>2</td><td>0</td></tr>
<tr><td>Gulls</td><td>SDG</td><td>6</td><td>3</td><td>2</td><td>1</td><td>146</td><td>43</td><td>54</td><td>48</td><td>1</td><td>145</td><td>34</td><td>55</td><td>105</td><td>26</td><td>3</td><td>11.54%</td><td>24</td><td>3</td><td>87.50%</td><td>1</td><td>48.46%</td><td>51.92%</td><td>47.06%</td><td>117</td><td>129</td><td>59</td><td>32</td><td>92</td><td>31</td><td>0</td><td>0</td></tr>
<tr><td>Heat</td><td>STK</td><td>21</td><td>20</td><td>25</td><td>3</td><td>514</td><td>158</td><td>151</td><td>181</td><td>24</td><td>494</td><td>127</td><td>326</td><td>472</td><td>103</td><td>21</td><td>20.39%</td><td>147</td><td>24</td><td>83.67%</td><td>1</td><td>52.15%</td><td>61.17%</td><td>52.17%</td><td>506</td><td>547</td><td>255</td><td>147</td><td>392</td><td>130</td><td>0</td><td>0</td></tr>
<tr><td>Moose</td><td>MAN</td><td>37</td><td>23</td><td>19</td><td>2</td><td>641</td><td>203</td><td>200</td><td>203</td><td>35</td><td>634</td><td>184</td><td>243</td><td>359</td><td>148</td><td>19</td><td>12.84%</td><td>101</td><td>21</td><td>79.21%</td><td>0</td><td>53.23%</td><td>60.57%</td><td>59.55%</td><td>634</td><td>599</td><td>286</td><td>176</td><td>441</td><td>137</td><td>1</td><td>0</td></tr>
<tr><td>Mariners</td><td>PSM</td><td>4</td><td>3</td><td>4</td><td>0</td><td>109</td><td>25</td><td>29</td><td>44</td><td>11</td><td>228</td><td>51</td><td>30</td><td>90</td><td>23</td><td>4</td><td>17.39%</td><td>14</td><td>4</td><td>71.43%</td><td>0</td><td>27.23%</td><td>43.55%</td><td>32.91%</td><td>206</td><td>82</td><td>60</td><td>41</td><td>54</td><td>24</td><td>0</td><td>0</td></tr>
<tr><td>Marlies</td><td>TOR</td><td>24</td><td>18</td><td>14</td><td>2</td><td>415</td><td>145</td><td>140</td><td>125</td><td>5</td><td>310</td><td>90</td><td>177</td><td>308</td><td>91</td><td>20</td><td>21.98%</td><td>76</td><td>10</td><td>86.84%</td><td>1</td><td>56.03%</td><td>59.01%</td><td>58.59%</td><td>334</td><td>404</td><td>180</td><td>104</td><td>297</td><td>91</td><td>0</td><td>1</td></tr>
<tr><td>Condors</td><td>BKR</td><td>23</td><td>10</td><td>11</td><td>0</td><td>268</td><td>95</td><td>79</td><td>92</td><td>2</td><td>317</td><td>83</td><td>144</td><td>212</td><td>62</td><td>8</td><td>12.90%</td><td>71</td><td>12</td><td>83.10%</td><td>1</td><td>28.27%</td><td>34.07%</td><td>28.40%</td><td>314</td><td>238</td><td>130</td><td>83</td><td>164</td><td>60</td><td>0</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>SPR</td><td>5</td><td>8</td><td>5</td><td>0</td><td>227</td><td>64</td><td>81</td><td>82</td><td>0</td><td>120</td><td>42</td><td>57</td><td>115</td><td>22</td><td>1</td><td>4.55%</td><td>23</td><td>4</td><td>82.61%</td><td>0</td><td>83.78%</td><td>79.61%</td><td>81.82%</td><td>98</td><td>196</td><td>65</td><td>34</td><td>153</td><td>36</td><td>1</td><td>0</td></tr>
<tr><td>Penguins</td><td>WBS</td><td>13</td><td>7</td><td>9</td><td>0</td><td>192</td><td>66</td><td>56</td><td>70</td><td>0</td><td>372</td><td>98</td><td>71</td><td>167</td><td>44</td><td>9</td><td>20.45%</td><td>32</td><td>4</td><td>87.50%</td><td>0</td><td>18.39%</td><td>17.34%</td><td>16.27%</td><td>331</td><td>160</td><td>110</td><td>74</td><td>104</td><td>48</td><td>0</td><td>0</td></tr>
<tr><td>Admirals</td><td>MIL</td><td>0</td><td>3</td><td>4</td><td>0</td><td>129</td><td>42</td><td>46</td><td>41</td><td>0</td><td>127</td><td>33</td><td>30</td><td>65</td><td>26</td><td>3</td><td>11.54%</td><td>15</td><td>3</td><td>80.00%</td><td>0</td><td>51.28%</td><td>56.83%</td><td>68.42%</td><td>91</td><td>105</td><td>44</td><td>26</td><td>77</td><td>23</td><td>0</td><td>0</td></tr>
<tr><td>Griffins</td><td>GRP</td><td>8</td><td>6</td><td>3</td><td>0</td><td>109</td><td>38</td><td>36</td><td>35</td><td>0</td><td>139</td><td>39</td><td>94</td><td>107</td><td>33</td><td>7</td><td>21.21%</td><td>38</td><td>5</td><td>86.84%</td><td>0</td><td>48.08%</td><td>48.73%</td><td>61.17%</td><td>153</td><td>131</td><td>75</td><td>46</td><td>86</td><td>36</td><td>0</td><td>0</td></tr>
<tr><td> Americans</td><td>ROC</td><td>9</td><td>7</td><td>11</td><td>1</td><td>161</td><td>47</td><td>50</td><td>55</td><td>9</td><td>161</td><td>47</td><td>75</td><td>109</td><td>46</td><td>9</td><td>19.57%</td><td>33</td><td>6</td><td>81.82%</td><td>0</td><td>50.00%</td><td>52.49%</td><td>57.03%</td><td>171</td><td>174</td><td>86</td><td>52</td><td>123</td><td>43</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.32</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>4.10</td></tr>
<tr><td>2</td><td>Condors</td><td>4.00</td></tr>
<tr><td>3</td><td> Americans</td><td>4.00</td></tr>
<tr><td>4</td><td>Marlies</td><td>3.87</td></tr>
<tr><td>5</td><td>IceHogs</td><td>3.55</td></tr>
<tr><td>6</td><td>Moose</td><td>3.38</td></tr>
<tr><td>7</td><td>Heat</td><td>3.29</td></tr>
<tr><td>8</td><td>Bruins</td><td>3.20</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>3.00</td></tr>
<tr><td>10</td><td>Penguins</td><td>2.90</td></tr>
<tr><td>11</td><td>Griffins</td><td>2.83</td></tr>
<tr><td>12</td><td>Monsters</td><td>2.80</td></tr>
<tr><td>13</td><td>Gulls</td><td>2.40</td></tr>
<tr><td>14</td><td>Mariners</td><td>2.20</td></tr>
<tr><td>15</td><td>Admirals</td><td>1.75</td></tr>
<tr><td>16</td><td>Rocket</td><td>0.75</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.32</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>2.15</td></tr>
<tr><td>2</td><td>Condors</td><td>2.73</td></tr>
<tr><td>3</td><td>IceHogs</td><td>2.91</td></tr>
<tr><td>4</td><td>Thunderbirds</td><td>3.00</td></tr>
<tr><td>5</td><td>Marlies</td><td>3.00</td></tr>
<tr><td>6</td><td>Moose</td><td>3.13</td></tr>
<tr><td>7</td><td>Bruins</td><td>3.30</td></tr>
<tr><td>8</td><td>Griffins</td><td>3.67</td></tr>
<tr><td>9</td><td> Americans</td><td>3.71</td></tr>
<tr><td>10</td><td>Rocket</td><td>3.75</td></tr>
<tr><td>11</td><td>Heat</td><td>3.76</td></tr>
<tr><td>12</td><td>Gulls</td><td>4.00</td></tr>
<tr><td>13</td><td>Mariners</td><td>4.00</td></tr>
<tr><td>14</td><td>Penguins</td><td>4.00</td></tr>
<tr><td>15</td><td>Admirals</td><td>5.00</td></tr>
<tr><td>16</td><td>Monsters</td><td>5.20</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Canucks</td><td>190.70%</td></tr>
<tr><td>2</td><td>Condors</td><td>146.67%</td></tr>
<tr><td>3</td><td>Marlies</td><td>128.89%</td></tr>
<tr><td>4</td><td>IceHogs</td><td>121.88%</td></tr>
<tr><td>5</td><td>Moose</td><td>108.00%</td></tr>
<tr><td>6</td><td> Americans</td><td>107.69%</td></tr>
<tr><td>7</td><td>Thunderbirds</td><td>100.00%</td></tr>
<tr><td>8</td><td>Bruins</td><td>96.97%</td></tr>
<tr><td>9</td><td>Heat</td><td>87.34%</td></tr>
<tr><td>10</td><td>Griffins</td><td>77.27%</td></tr>
<tr><td>11</td><td>Penguins</td><td>72.50%</td></tr>
<tr><td>12</td><td>Gulls</td><td>60.00%</td></tr>
<tr><td>13</td><td>Mariners</td><td>55.00%</td></tr>
<tr><td>14</td><td>Monsters</td><td>53.85%</td></tr>
<tr><td>15</td><td>Admirals</td><td>35.00%</td></tr>
<tr><td>16</td><td>Rocket</td><td>20.00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 16.71%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Monsters</td><td>25.00%</td></tr>
<tr><td>2</td><td>Canucks</td><td>23.53%</td></tr>
<tr><td>3</td><td>Marlies</td><td>21.98%</td></tr>
<tr><td>4</td><td>Griffins</td><td>21.21%</td></tr>
<tr><td>5</td><td>Penguins</td><td>20.45%</td></tr>
<tr><td>6</td><td>Heat</td><td>20.39%</td></tr>
<tr><td>7</td><td>IceHogs</td><td>20.00%</td></tr>
<tr><td>8</td><td> Americans</td><td>19.57%</td></tr>
<tr><td>9</td><td>Mariners</td><td>17.39%</td></tr>
<tr><td>10</td><td>Condors</td><td>12.90%</td></tr>
<tr><td>11</td><td>Moose</td><td>12.84%</td></tr>
<tr><td>12</td><td>Gulls</td><td>11.54%</td></tr>
<tr><td>13</td><td>Admirals</td><td>11.54%</td></tr>
<tr><td>14</td><td>Bruins</td><td>9.52%</td></tr>
<tr><td>15</td><td>Thunderbirds</td><td>4.55%</td></tr>
<tr><td>16</td><td>Rocket</td><td>0.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 83.29%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>90.91%</td></tr>
<tr><td>2</td><td>IceHogs</td><td>87.93%</td></tr>
<tr><td>3</td><td>Penguins</td><td>87.50%</td></tr>
<tr><td>4</td><td>Gulls</td><td>87.50%</td></tr>
<tr><td>5</td><td>Marlies</td><td>86.84%</td></tr>
<tr><td>6</td><td>Griffins</td><td>86.84%</td></tr>
<tr><td>7</td><td>Heat</td><td>83.67%</td></tr>
<tr><td>8</td><td>Condors</td><td>83.10%</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>82.61%</td></tr>
<tr><td>10</td><td> Americans</td><td>81.82%</td></tr>
<tr><td>11</td><td>Admirals</td><td>80.00%</td></tr>
<tr><td>12</td><td>Moose</td><td>79.21%</td></tr>
<tr><td>13</td><td>Bruins</td><td>75.86%</td></tr>
<tr><td>14</td><td>Rocket</td><td>75.00%</td></tr>
<tr><td>15</td><td>Mariners</td><td>71.43%</td></tr>
<tr><td>16</td><td>Monsters</td><td>60.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Canucks</td><td>114.44%</td></tr>
<tr><td>2</td><td>Marlies</td><td>108.82%</td></tr>
<tr><td>3</td><td>Griffins</td><td>108.05%</td></tr>
<tr><td>4</td><td>Penguins</td><td>107.95%</td></tr>
<tr><td>5</td><td>IceHogs</td><td>107.93%</td></tr>
<tr><td>6</td><td>Heat</td><td>104.06%</td></tr>
<tr><td>7</td><td> Americans</td><td>101.38%</td></tr>
<tr><td>8</td><td>Gulls</td><td>99.04%</td></tr>
<tr><td>9</td><td>Condors</td><td>96.00%</td></tr>
<tr><td>10</td><td>Moose</td><td>92.05%</td></tr>
<tr><td>11</td><td>Admirals</td><td>91.54%</td></tr>
<tr><td>12</td><td>Mariners</td><td>88.82%</td></tr>
<tr><td>13</td><td>Thunderbirds</td><td>87.15%</td></tr>
<tr><td>14</td><td>Bruins</td><td>85.39%</td></tr>
<tr><td>15</td><td>Monsters</td><td>85.00%</td></tr>
<tr><td>16</td><td>Rocket</td><td>75.00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 25.63</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Thunderbirds</td><td>37.83</td></tr>
<tr><td>2</td><td>IceHogs</td><td>34.91</td></tr>
<tr><td>3</td><td>Admirals</td><td>32.25</td></tr>
<tr><td>4</td><td>Gulls</td><td>29.20</td></tr>
<tr><td>5</td><td>Marlies</td><td>27.67</td></tr>
<tr><td>6</td><td>Canucks</td><td>26.75</td></tr>
<tr><td>7</td><td>Moose</td><td>26.71</td></tr>
<tr><td>8</td><td>Heat</td><td>24.48</td></tr>
<tr><td>9</td><td>Condors</td><td>24.36</td></tr>
<tr><td>10</td><td>Bruins</td><td>23.70</td></tr>
<tr><td>11</td><td> Americans</td><td>23.00</td></tr>
<tr><td>12</td><td>Mariners</td><td>21.80</td></tr>
<tr><td>13</td><td>Penguins</td><td>19.20</td></tr>
<tr><td>14</td><td>Griffins</td><td>18.17</td></tr>
<tr><td>15</td><td>Monsters</td><td>17.60</td></tr>
<tr><td>16</td><td>Rocket</td><td>12.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 25.63</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>18.30</td></tr>
<tr><td>2</td><td>Thunderbirds</td><td>20.00</td></tr>
<tr><td>3</td><td>Marlies</td><td>20.67</td></tr>
<tr><td>4</td><td>Bruins</td><td>21.50</td></tr>
<tr><td>5</td><td> Americans</td><td>23.00</td></tr>
<tr><td>6</td><td>Griffins</td><td>23.17</td></tr>
<tr><td>7</td><td>Heat</td><td>23.52</td></tr>
<tr><td>8</td><td>Rocket</td><td>24.75</td></tr>
<tr><td>9</td><td>Moose</td><td>26.42</td></tr>
<tr><td>10</td><td>IceHogs</td><td>27.55</td></tr>
<tr><td>11</td><td>Condors</td><td>28.82</td></tr>
<tr><td>12</td><td>Gulls</td><td>29.00</td></tr>
<tr><td>13</td><td>Admirals</td><td>31.75</td></tr>
<tr><td>14</td><td>Monsters</td><td>34.60</td></tr>
<tr><td>15</td><td>Penguins</td><td>37.20</td></tr>
<tr><td>16</td><td>Mariners</td><td>45.60</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Thunderbirds</td><td>189.17%</td></tr>
<tr><td>2</td><td>Canucks</td><td>146.17%</td></tr>
<tr><td>3</td><td>Marlies</td><td>133.87%</td></tr>
<tr><td>4</td><td>IceHogs</td><td>126.73%</td></tr>
<tr><td>5</td><td>Bruins</td><td>110.23%</td></tr>
<tr><td>6</td><td>Heat</td><td>104.05%</td></tr>
<tr><td>7</td><td>Admirals</td><td>101.57%</td></tr>
<tr><td>8</td><td>Moose</td><td>101.10%</td></tr>
<tr><td>9</td><td>Gulls</td><td>100.69%</td></tr>
<tr><td>10</td><td> Americans</td><td>100.00%</td></tr>
<tr><td>11</td><td>Condors</td><td>84.54%</td></tr>
<tr><td>12</td><td>Griffins</td><td>78.42%</td></tr>
<tr><td>13</td><td>Penguins</td><td>51.61%</td></tr>
<tr><td>14</td><td>Monsters</td><td>50.87%</td></tr>
<tr><td>15</td><td>Rocket</td><td>48.48%</td></tr>
<tr><td>16</td><td>Mariners</td><td>47.81%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 11.76</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Mariners</td><td>6.00</td></tr>
<tr><td>2</td><td>Penguins</td><td>7.10</td></tr>
<tr><td>3</td><td>Admirals</td><td>7.50</td></tr>
<tr><td>4</td><td>Thunderbirds</td><td>9.50</td></tr>
<tr><td>5</td><td>Moose</td><td>10.13</td></tr>
<tr><td>6</td><td>Monsters</td><td>10.40</td></tr>
<tr><td>7</td><td> Americans</td><td>10.71</td></tr>
<tr><td>8</td><td>Gulls</td><td>11.00</td></tr>
<tr><td>9</td><td>IceHogs</td><td>11.36</td></tr>
<tr><td>10</td><td>Marlies</td><td>11.80</td></tr>
<tr><td>11</td><td>Rocket</td><td>12.25</td></tr>
<tr><td>12</td><td>Bruins</td><td>13.00</td></tr>
<tr><td>13</td><td>Condors</td><td>13.09</td></tr>
<tr><td>14</td><td>Canucks</td><td>13.55</td></tr>
<tr><td>15</td><td>Heat</td><td>15.52</td></tr>
<tr><td>16</td><td>Griffins</td><td>15.67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19.09</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>IceHogs</td><td>23.55</td></tr>
<tr><td>2</td><td>Heat</td><td>22.48</td></tr>
<tr><td>3</td><td>Gulls</td><td>21.00</td></tr>
<tr><td>4</td><td>Marlies</td><td>20.53</td></tr>
<tr><td>5</td><td>Rocket</td><td>20.50</td></tr>
<tr><td>6</td><td>Canucks</td><td>20.20</td></tr>
<tr><td>7</td><td>Condors</td><td>19.27</td></tr>
<tr><td>8</td><td>Thunderbirds</td><td>19.17</td></tr>
<tr><td>9</td><td>Monsters</td><td>19.00</td></tr>
<tr><td>10</td><td>Bruins</td><td>18.10</td></tr>
<tr><td>11</td><td>Mariners</td><td>18.00</td></tr>
<tr><td>12</td><td>Griffins</td><td>17.83</td></tr>
<tr><td>13</td><td>Penguins</td><td>16.70</td></tr>
<tr><td>14</td><td>Admirals</td><td>16.25</td></tr>
<tr><td>15</td><td> Americans</td><td>15.57</td></tr>
<tr><td>16</td><td>Moose</td><td>14.96</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Thunderbirds</td><td>81.45%</td></tr>
<tr><td>2</td><td>Marlies</td><td>57.90%</td></tr>
<tr><td>3</td><td>Canucks</td><td>57.71%</td></tr>
<tr><td>4</td><td>Moose</td><td>57.49%</td></tr>
<tr><td>5</td><td>Admirals</td><td>56.87%</td></tr>
<tr><td>6</td><td>Heat</td><td>55.76%</td></tr>
<tr><td>7</td><td> Americans</td><td>52.72%</td></tr>
<tr><td>8</td><td>Griffins</td><td>51.56%</td></tr>
<tr><td>9</td><td>Gulls</td><td>49.60%</td></tr>
<tr><td>10</td><td>IceHogs</td><td>48.34%</td></tr>
<tr><td>11</td><td>Bruins</td><td>47.07%</td></tr>
<tr><td>12</td><td>Monsters</td><td>36.81%</td></tr>
<tr><td>13</td><td>Rocket</td><td>36.46%</td></tr>
<tr><td>14</td><td>Mariners</td><td>33.17%</td></tr>
<tr><td>15</td><td>Condors</td><td>30.22%</td></tr>
<tr><td>16</td><td>Penguins</td><td>17.59%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
