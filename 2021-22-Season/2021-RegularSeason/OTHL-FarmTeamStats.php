<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Stats</title>
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
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Eagles</td><td>82</td><td>8</td><td>71</td><td>2</td><td>1</td><td>0</td><td>0</td><td>188</td><td>546</td><td>41</td><td>5</td><td>35</td><td>1</td><td>0</td><td>0</td><td>0</td><td>90</td><td>268</td><td>41</td><td>3</td><td>36</td><td>1</td><td>1</td><td>0</td><td>0</td><td>98</td><td>278</td><td>188</td><td>367</td><td>555</td></tr>
<tr><td>IceHogs</td><td>82</td><td>61</td><td>14</td><td>4</td><td>1</td><td>0</td><td>2</td><td>428</td><td>169</td><td>41</td><td>32</td><td>5</td><td>2</td><td>1</td><td>0</td><td>1</td><td>218</td><td>83</td><td>41</td><td>29</td><td>9</td><td>2</td><td>0</td><td>0</td><td>1</td><td>210</td><td>86</td><td>428</td><td>751</td><td>1179</td></tr>
<tr><td>Monsters</td><td>82</td><td>50</td><td>21</td><td>3</td><td>3</td><td>2</td><td>3</td><td>420</td><td>219</td><td>41</td><td>26</td><td>9</td><td>1</td><td>2</td><td>0</td><td>3</td><td>208</td><td>95</td><td>41</td><td>24</td><td>12</td><td>2</td><td>1</td><td>2</td><td>0</td><td>212</td><td>124</td><td>420</td><td>694</td><td>1114</td></tr>
<tr><td>Rampage </td><td>82</td><td>8</td><td>71</td><td>0</td><td>2</td><td>1</td><td>0</td><td>181</td><td>568</td><td>41</td><td>5</td><td>34</td><td>0</td><td>1</td><td>1</td><td>0</td><td>92</td><td>271</td><td>41</td><td>3</td><td>37</td><td>0</td><td>1</td><td>0</td><td>0</td><td>89</td><td>297</td><td>181</td><td>354</td><td>535</td></tr>
<tr><td>Bruins</td><td>82</td><td>49</td><td>27</td><td>1</td><td>2</td><td>1</td><td>2</td><td>384</td><td>206</td><td>41</td><td>25</td><td>14</td><td>1</td><td>0</td><td>1</td><td>0</td><td>188</td><td>106</td><td>41</td><td>24</td><td>13</td><td>0</td><td>2</td><td>0</td><td>2</td><td>196</td><td>100</td><td>384</td><td>624</td><td>1008</td></tr>
<tr><td>Rocket</td><td>82</td><td>45</td><td>29</td><td>5</td><td>2</td><td>0</td><td>1</td><td>275</td><td>165</td><td>41</td><td>21</td><td>14</td><td>5</td><td>0</td><td>0</td><td>1</td><td>136</td><td>76</td><td>41</td><td>24</td><td>15</td><td>0</td><td>2</td><td>0</td><td>0</td><td>139</td><td>89</td><td>275</td><td>472</td><td>747</td></tr>
<tr><td>Canucks</td><td>82</td><td>63</td><td>10</td><td>1</td><td>1</td><td>3</td><td>4</td><td>399</td><td>129</td><td>41</td><td>31</td><td>5</td><td>1</td><td>1</td><td>1</td><td>2</td><td>207</td><td>68</td><td>41</td><td>32</td><td>5</td><td>0</td><td>0</td><td>2</td><td>2</td><td>192</td><td>61</td><td>399</td><td>714</td><td>1113</td></tr>
<tr><td>Bears</td><td>82</td><td>9</td><td>68</td><td>2</td><td>3</td><td>0</td><td>0</td><td>182</td><td>542</td><td>41</td><td>5</td><td>34</td><td>1</td><td>1</td><td>0</td><td>0</td><td>87</td><td>251</td><td>41</td><td>4</td><td>34</td><td>1</td><td>2</td><td>0</td><td>0</td><td>95</td><td>291</td><td>182</td><td>349</td><td>531</td></tr>
<tr><td>Roadrunners</td><td>82</td><td>14</td><td>63</td><td>3</td><td>1</td><td>0</td><td>1</td><td>188</td><td>559</td><td>41</td><td>9</td><td>29</td><td>2</td><td>0</td><td>0</td><td>1</td><td>92</td><td>267</td><td>41</td><td>5</td><td>34</td><td>1</td><td>1</td><td>0</td><td>0</td><td>96</td><td>292</td><td>188</td><td>362</td><td>550</td></tr>
<tr><td>Comets</td><td>82</td><td>32</td><td>42</td><td>1</td><td>5</td><td>0</td><td>2</td><td>272</td><td>369</td><td>41</td><td>19</td><td>19</td><td>1</td><td>2</td><td>0</td><td>0</td><td>147</td><td>177</td><td>41</td><td>13</td><td>23</td><td>0</td><td>3</td><td>0</td><td>2</td><td>125</td><td>192</td><td>272</td><td>495</td><td>767</td></tr>
<tr><td>Gulls</td><td>82</td><td>58</td><td>18</td><td>2</td><td>2</td><td>1</td><td>1</td><td>430</td><td>198</td><td>41</td><td>32</td><td>7</td><td>2</td><td>0</td><td>0</td><td>0</td><td>227</td><td>89</td><td>41</td><td>26</td><td>11</td><td>0</td><td>2</td><td>1</td><td>1</td><td>203</td><td>109</td><td>430</td><td>743</td><td>1173</td></tr>
<tr><td>Heat</td><td>82</td><td>56</td><td>19</td><td>3</td><td>2</td><td>1</td><td>1</td><td>465</td><td>195</td><td>41</td><td>28</td><td>9</td><td>2</td><td>0</td><td>1</td><td>1</td><td>229</td><td>92</td><td>41</td><td>28</td><td>10</td><td>1</td><td>2</td><td>0</td><td>0</td><td>236</td><td>103</td><td>465</td><td>824</td><td>1289</td></tr>
<tr><td>Phantoms</td><td>82</td><td>26</td><td>54</td><td>1</td><td>0</td><td>0</td><td>1</td><td>284</td><td>442</td><td>41</td><td>15</td><td>26</td><td>0</td><td>0</td><td>0</td><td>0</td><td>147</td><td>214</td><td>41</td><td>11</td><td>28</td><td>1</td><td>0</td><td>0</td><td>1</td><td>137</td><td>228</td><td>284</td><td>464</td><td>748</td></tr>
<tr><td>Wolves</td><td>82</td><td>42</td><td>35</td><td>2</td><td>1</td><td>2</td><td>0</td><td>330</td><td>236</td><td>41</td><td>23</td><td>15</td><td>2</td><td>0</td><td>1</td><td>0</td><td>169</td><td>120</td><td>41</td><td>19</td><td>20</td><td>0</td><td>1</td><td>1</td><td>0</td><td>161</td><td>116</td><td>330</td><td>557</td><td>887</td></tr>
<tr><td>Checkers</td><td>82</td><td>41</td><td>35</td><td>2</td><td>4</td><td>0</td><td>0</td><td>376</td><td>312</td><td>41</td><td>21</td><td>16</td><td>2</td><td>2</td><td>0</td><td>0</td><td>215</td><td>151</td><td>41</td><td>20</td><td>19</td><td>0</td><td>2</td><td>0</td><td>0</td><td>161</td><td>161</td><td>376</td><td>661</td><td>1037</td></tr>
<tr><td>Sound Tigers</td><td>82</td><td>7</td><td>69</td><td>2</td><td>3</td><td>0</td><td>1</td><td>183</td><td>584</td><td>41</td><td>3</td><td>35</td><td>1</td><td>2</td><td>0</td><td>0</td><td>100</td><td>279</td><td>41</td><td>4</td><td>34</td><td>1</td><td>1</td><td>0</td><td>1</td><td>83</td><td>305</td><td>183</td><td>357</td><td>540</td></tr>
<tr><td>Moose</td><td>82</td><td>57</td><td>18</td><td>1</td><td>3</td><td>2</td><td>1</td><td>446</td><td>191</td><td>41</td><td>30</td><td>8</td><td>1</td><td>1</td><td>0</td><td>1</td><td>226</td><td>92</td><td>41</td><td>27</td><td>10</td><td>0</td><td>2</td><td>2</td><td>0</td><td>220</td><td>99</td><td>446</td><td>727</td><td>1173</td></tr>
<tr><td>Reign</td><td>82</td><td>41</td><td>27</td><td>4</td><td>4</td><td>3</td><td>3</td><td>268</td><td>167</td><td>41</td><td>23</td><td>12</td><td>2</td><td>0</td><td>1</td><td>3</td><td>129</td><td>77</td><td>41</td><td>18</td><td>15</td><td>2</td><td>4</td><td>2</td><td>0</td><td>139</td><td>90</td><td>268</td><td>472</td><td>740</td></tr>
<tr><td>Mariners</td><td>82</td><td>52</td><td>27</td><td>1</td><td>2</td><td>0</td><td>0</td><td>425</td><td>223</td><td>41</td><td>28</td><td>11</td><td>1</td><td>1</td><td>0</td><td>0</td><td>214</td><td>102</td><td>41</td><td>24</td><td>16</td><td>0</td><td>1</td><td>0</td><td>0</td><td>211</td><td>121</td><td>425</td><td>702</td><td>1127</td></tr>
<tr><td>Crunch</td><td>82</td><td>15</td><td>58</td><td>4</td><td>4</td><td>0</td><td>1</td><td>211</td><td>524</td><td>41</td><td>10</td><td>28</td><td>3</td><td>0</td><td>0</td><td>0</td><td>116</td><td>264</td><td>41</td><td>5</td><td>30</td><td>1</td><td>4</td><td>0</td><td>1</td><td>95</td><td>260</td><td>211</td><td>400</td><td>611</td></tr>
<tr><td>Marlies</td><td>82</td><td>56</td><td>17</td><td>2</td><td>2</td><td>3</td><td>2</td><td>430</td><td>190</td><td>41</td><td>25</td><td>9</td><td>1</td><td>2</td><td>3</td><td>1</td><td>206</td><td>95</td><td>41</td><td>31</td><td>8</td><td>1</td><td>0</td><td>0</td><td>1</td><td>224</td><td>95</td><td>430</td><td>749</td><td>1179</td></tr>
<tr><td>Condors</td><td>82</td><td>64</td><td>12</td><td>2</td><td>2</td><td>1</td><td>1</td><td>483</td><td>156</td><td>41</td><td>33</td><td>6</td><td>1</td><td>1</td><td>0</td><td>0</td><td>248</td><td>73</td><td>41</td><td>31</td><td>6</td><td>1</td><td>1</td><td>1</td><td>1</td><td>235</td><td>83</td><td>483</td><td>827</td><td>1310</td></tr>
<tr><td>Thunderbirds</td><td>82</td><td>56</td><td>19</td><td>4</td><td>0</td><td>3</td><td>0</td><td>401</td><td>174</td><td>41</td><td>25</td><td>12</td><td>1</td><td>0</td><td>3</td><td>0</td><td>205</td><td>97</td><td>41</td><td>31</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>196</td><td>77</td><td>401</td><td>705</td><td>1106</td></tr>
<tr><td>Penguins</td><td>82</td><td>46</td><td>27</td><td>3</td><td>1</td><td>2</td><td>3</td><td>412</td><td>279</td><td>41</td><td>25</td><td>12</td><td>1</td><td>1</td><td>1</td><td>1</td><td>220</td><td>135</td><td>41</td><td>21</td><td>15</td><td>2</td><td>0</td><td>1</td><td>2</td><td>192</td><td>144</td><td>412</td><td>682</td><td>1094</td></tr>
<tr><td>Admirals</td><td>82</td><td>44</td><td>28</td><td>2</td><td>4</td><td>3</td><td>1</td><td>314</td><td>209</td><td>41</td><td>23</td><td>13</td><td>2</td><td>1</td><td>2</td><td>0</td><td>169</td><td>106</td><td>41</td><td>21</td><td>15</td><td>0</td><td>3</td><td>1</td><td>1</td><td>145</td><td>103</td><td>314</td><td>561</td><td>875</td></tr>
<tr><td>Wolf Pack</td><td>82</td><td>7</td><td>66</td><td>6</td><td>2</td><td>1</td><td>0</td><td>187</td><td>585</td><td>41</td><td>3</td><td>32</td><td>4</td><td>2</td><td>0</td><td>0</td><td>104</td><td>283</td><td>41</td><td>4</td><td>34</td><td>2</td><td>0</td><td>1</td><td>0</td><td>83</td><td>302</td><td>187</td><td>363</td><td>550</td></tr>
<tr><td>Griffins</td><td>82</td><td>60</td><td>18</td><td>3</td><td>0</td><td>1</td><td>0</td><td>439</td><td>181</td><td>41</td><td>33</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>232</td><td>89</td><td>41</td><td>27</td><td>12</td><td>2</td><td>0</td><td>0</td><td>0</td><td>207</td><td>92</td><td>439</td><td>778</td><td>1217</td></tr>
<tr><td> Americans</td><td>82</td><td>62</td><td>16</td><td>0</td><td>1</td><td>2</td><td>1</td><td>370</td><td>153</td><td>41</td><td>34</td><td>6</td><td>0</td><td>0</td><td>1</td><td>0</td><td>199</td><td>72</td><td>41</td><td>28</td><td>10</td><td>0</td><td>1</td><td>1</td><td>1</td><td>171</td><td>81</td><td>370</td><td>638</td><td>1008</td></tr>
<tr><td>Senators</td><td>82</td><td>27</td><td>49</td><td>1</td><td>4</td><td>0</td><td>1</td><td>254</td><td>402</td><td>41</td><td>18</td><td>22</td><td>0</td><td>1</td><td>0</td><td>0</td><td>144</td><td>199</td><td>41</td><td>9</td><td>27</td><td>1</td><td>3</td><td>0</td><td>1</td><td>110</td><td>203</td><td>254</td><td>438</td><td>692</td></tr>
<tr><td>Barracudas</td><td>82</td><td>5</td><td>71</td><td>1</td><td>4</td><td>0</td><td>1</td><td>162</td><td>554</td><td>41</td><td>2</td><td>34</td><td>1</td><td>3</td><td>0</td><td>1</td><td>86</td><td>273</td><td>41</td><td>3</td><td>37</td><td>0</td><td>1</td><td>0</td><td>0</td><td>76</td><td>281</td><td>162</td><td>315</td><td>477</td></tr>
<tr><td>Stars</td><td>82</td><td>22</td><td>56</td><td>2</td><td>1</td><td>1</td><td>0</td><td>281</td><td>495</td><td>41</td><td>12</td><td>28</td><td>0</td><td>0</td><td>1</td><td>0</td><td>134</td><td>243</td><td>41</td><td>10</td><td>28</td><td>2</td><td>1</td><td>0</td><td>0</td><td>147</td><td>252</td><td>281</td><td>497</td><td>778</td></tr>
<tr><td>Wild</td><td>82</td><td>24</td><td>52</td><td>1</td><td>4</td><td>1</td><td>0</td><td>262</td><td>408</td><td>41</td><td>12</td><td>26</td><td>1</td><td>2</td><td>0</td><td>0</td><td>130</td><td>209</td><td>41</td><td>12</td><td>26</td><td>0</td><td>2</td><td>1</td><td>0</td><td>132</td><td>199</td><td>262</td><td>466</td><td>728</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Eagles</td><td>COL</td><td>88</td><td>57</td><td>41</td><td>2</td><td>2097</td><td>707</td><td>731</td><td>651</td><td>8</td><td>4171</td><td>1215</td><td>330</td><td>1334</td><td>192</td><td>13</td><td>6.77%</td><td>132</td><td>41</td><td>68.94%</td><td>1</td><td>32.81%</td><td>38.28%</td><td>32.95%</td><td>2898</td><td>1158</td><td>871</td><td>570</td><td>788</td><td>336</td><td>0</td><td>1</td></tr>
<tr><td>IceHogs</td><td>RCK</td><td>194</td><td>129</td><td>101</td><td>7</td><td>2774</td><td>906</td><td>896</td><td>961</td><td>21</td><td>1421</td><td>409</td><td>828</td><td>1560</td><td>286</td><td>70</td><td>24.48%</td><td>329</td><td>48</td><td>85.41%</td><td>7</td><td>62.87%</td><td>68.17%</td><td>66.64%</td><td>1424</td><td>2604</td><td>912</td><td>454</td><td>2014</td><td>522</td><td>11</td><td>1</td></tr>
<tr><td>Monsters</td><td>CLE</td><td>179</td><td>139</td><td>97</td><td>7</td><td>2747</td><td>964</td><td>844</td><td>911</td><td>46</td><td>1726</td><td>525</td><td>980</td><td>1609</td><td>289</td><td>48</td><td>16.61%</td><td>391</td><td>57</td><td>85.42%</td><td>5</td><td>64.12%</td><td>70.51%</td><td>69.42%</td><td>1589</td><td>2458</td><td>910</td><td>480</td><td>1891</td><td>492</td><td>11</td><td>0</td></tr>
<tr><td>Rampage </td><td>SAR</td><td>79</td><td>64</td><td>37</td><td>2</td><td>2054</td><td>721</td><td>658</td><td>667</td><td>12</td><td>4175</td><td>1246</td><td>281</td><td>1228</td><td>180</td><td>19</td><td>10.56%</td><td>117</td><td>34</td><td>70.94%</td><td>1</td><td>31.49%</td><td>36.58%</td><td>30.08%</td><td>2993</td><td>1089</td><td>845</td><td>558</td><td>732</td><td>321</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>PRO</td><td>146</td><td>124</td><td>112</td><td>4</td><td>2803</td><td>929</td><td>928</td><td>930</td><td>26</td><td>1981</td><td>604</td><td>690</td><td>1700</td><td>272</td><td>54</td><td>19.85%</td><td>294</td><td>48</td><td>83.67%</td><td>8</td><td>45.22%</td><td>53.01%</td><td>54.86%</td><td>1804</td><td>2256</td><td>885</td><td>488</td><td>1724</td><td>470</td><td>8</td><td>2</td></tr>
<tr><td>Rocket</td><td>LAV</td><td>107</td><td>85</td><td>78</td><td>6</td><td>1760</td><td>595</td><td>528</td><td>627</td><td>13</td><td>1609</td><td>451</td><td>756</td><td>1499</td><td>298</td><td>56</td><td>18.79%</td><td>312</td><td>47</td><td>84.94%</td><td>11</td><td>52.03%</td><td>58.36%</td><td>58.86%</td><td>1531</td><td>2466</td><td>938</td><td>480</td><td>1862</td><td>525</td><td>13</td><td>2</td></tr>
<tr><td>Canucks</td><td>ABB</td><td>158</td><td>117</td><td>120</td><td>8</td><td>2559</td><td>809</td><td>829</td><td>915</td><td>31</td><td>1417</td><td>380</td><td>971</td><td>1709</td><td>291</td><td>53</td><td>18.21%</td><td>398</td><td>39</td><td>90.20%</td><td>13</td><td>58.40%</td><td>69.12%</td><td>67.45%</td><td>1438</td><td>2598</td><td>926</td><td>469</td><td>1982</td><td>531</td><td>18</td><td>2</td></tr>
<tr><td>Bears</td><td>HER</td><td>84</td><td>53</td><td>43</td><td>2</td><td>1969</td><td>671</td><td>661</td><td>635</td><td>2</td><td>4068</td><td>1175</td><td>339</td><td>1364</td><td>170</td><td>21</td><td>12.35%</td><td>128</td><td>43</td><td>66.41%</td><td>0</td><td>33.40%</td><td>36.47%</td><td>35.33%</td><td>2878</td><td>1176</td><td>871</td><td>555</td><td>802</td><td>346</td><td>0</td><td>0</td></tr>
<tr><td>Roadrunners</td><td>TUC</td><td>65</td><td>70</td><td>50</td><td>3</td><td>2089</td><td>638</td><td>743</td><td>697</td><td>14</td><td>3772</td><td>1030</td><td>333</td><td>1367</td><td>182</td><td>16</td><td>8.79%</td><td>141</td><td>29</td><td>79.43%</td><td>1</td><td>32.71%</td><td>38.30%</td><td>33.88%</td><td>2739</td><td>1292</td><td>900</td><td>558</td><td>886</td><td>368</td><td>0</td><td>0</td></tr>
<tr><td>Comets</td><td>UTI</td><td>108</td><td>94</td><td>69</td><td>2</td><td>2262</td><td>750</td><td>762</td><td>732</td><td>27</td><td>2546</td><td>714</td><td>665</td><td>1571</td><td>240</td><td>39</td><td>16.25%</td><td>292</td><td>64</td><td>78.08%</td><td>5</td><td>42.16%</td><td>57.19%</td><td>48.96%</td><td>2027</td><td>1999</td><td>919</td><td>507</td><td>1474</td><td>458</td><td>4</td><td>1</td></tr>
<tr><td>Gulls</td><td>SDG</td><td>178</td><td>132</td><td>117</td><td>4</td><td>2680</td><td>899</td><td>919</td><td>855</td><td>13</td><td>1485</td><td>430</td><td>924</td><td>1626</td><td>335</td><td>67</td><td>20.00%</td><td>377</td><td>52</td><td>86.21%</td><td>9</td><td>63.60%</td><td>70.47%</td><td>69.75%</td><td>1491</td><td>2524</td><td>923</td><td>466</td><td>1931</td><td>523</td><td>12</td><td>1</td></tr>
<tr><td>Heat</td><td>STK</td><td>200</td><td>157</td><td>104</td><td>5</td><td>2801</td><td>973</td><td>943</td><td>875</td><td>18</td><td>1488</td><td>451</td><td>1030</td><td>1742</td><td>264</td><td>57</td><td>21.59%</td><td>423</td><td>60</td><td>85.82%</td><td>11</td><td>55.14%</td><td>60.03%</td><td>60.67%</td><td>1516</td><td>2517</td><td>907</td><td>474</td><td>1935</td><td>504</td><td>9</td><td>0</td></tr>
<tr><td>Phantoms</td><td>LVP</td><td>130</td><td>92</td><td>61</td><td>1</td><td>2624</td><td>878</td><td>862</td><td>874</td><td>15</td><td>3023</td><td>904</td><td>493</td><td>1614</td><td>242</td><td>32</td><td>13.22%</td><td>210</td><td>61</td><td>70.95%</td><td>1</td><td>39.57%</td><td>44.46%</td><td>39.80%</td><td>2310</td><td>1732</td><td>886</td><td>518</td><td>1280</td><td>409</td><td>0</td><td>4</td></tr>
<tr><td>Wolves</td><td>CHI</td><td>146</td><td>94</td><td>86</td><td>4</td><td>2365</td><td>775</td><td>776</td><td>795</td><td>26</td><td>2163</td><td>622</td><td>480</td><td>1485</td><td>262</td><td>59</td><td>22.52%</td><td>211</td><td>38</td><td>81.99%</td><td>1</td><td>41.45%</td><td>50.62%</td><td>46.53%</td><td>1885</td><td>2157</td><td>898</td><td>497</td><td>1646</td><td>455</td><td>6</td><td>1</td></tr>
<tr><td>Checkers</td><td>CHR</td><td>171</td><td>117</td><td>86</td><td>2</td><td>2795</td><td>952</td><td>917</td><td>921</td><td>5</td><td>1896</td><td>580</td><td>618</td><td>1493</td><td>294</td><td>42</td><td>14.29%</td><td>250</td><td>61</td><td>75.60%</td><td>4</td><td>48.19%</td><td>60.18%</td><td>56.16%</td><td>1639</td><td>2431</td><td>865</td><td>453</td><td>1920</td><td>467</td><td>5</td><td>0</td></tr>
<tr><td>Sound Tigers</td><td>BPT</td><td>81</td><td>52</td><td>48</td><td>2</td><td>1982</td><td>668</td><td>652</td><td>655</td><td>10</td><td>4132</td><td>1231</td><td>392</td><td>1327</td><td>186</td><td>18</td><td>9.68%</td><td>147</td><td>48</td><td>67.35%</td><td>0</td><td>32.37%</td><td>39.34%</td><td>34.27%</td><td>2898</td><td>1156</td><td>876</td><td>573</td><td>776</td><td>336</td><td>0</td><td>1</td></tr>
<tr><td>Moose</td><td>MAN</td><td>176</td><td>145</td><td>122</td><td>5</td><td>3101</td><td>975</td><td>1038</td><td>1075</td><td>26</td><td>1573</td><td>463</td><td>710</td><td>1399</td><td>275</td><td>55</td><td>20.00%</td><td>296</td><td>39</td><td>86.82%</td><td>9</td><td>68.64%</td><td>73.50%</td><td>71.22%</td><td>1552</td><td>2500</td><td>890</td><td>453</td><td>1958</td><td>491</td><td>11</td><td>0</td></tr>
<tr><td>Reign</td><td>ONT</td><td>101</td><td>83</td><td>77</td><td>10</td><td>1819</td><td>610</td><td>592</td><td>600</td><td>40</td><td>1511</td><td>454</td><td>618</td><td>1445</td><td>288</td><td>73</td><td>25.35%</td><td>244</td><td>33</td><td>86.48%</td><td>8</td><td>49.89%</td><td>57.41%</td><td>54.35%</td><td>1515</td><td>2522</td><td>929</td><td>467</td><td>1927</td><td>524</td><td>10</td><td>1</td></tr>
<tr><td>Mariners</td><td>PSM</td><td>165</td><td>144</td><td>115</td><td>1</td><td>2856</td><td>917</td><td>974</td><td>961</td><td>4</td><td>2014</td><td>604</td><td>683</td><td>1547</td><td>284</td><td>66</td><td>23.24%</td><td>282</td><td>43</td><td>84.75%</td><td>8</td><td>54.91%</td><td>61.20%</td><td>57.15%</td><td>1771</td><td>2254</td><td>901</td><td>483</td><td>1736</td><td>466</td><td>10</td><td>0</td></tr>
<tr><td>Crunch</td><td>SYR</td><td>88</td><td>58</td><td>61</td><td>5</td><td>2212</td><td>693</td><td>680</td><td>822</td><td>21</td><td>3720</td><td>1019</td><td>405</td><td>1410</td><td>225</td><td>37</td><td>16.44%</td><td>162</td><td>41</td><td>74.69%</td><td>2</td><td>31.59%</td><td>36.09%</td><td>33.26%</td><td>2676</td><td>1355</td><td>905</td><td>563</td><td>932</td><td>379</td><td>0</td><td>0</td></tr>
<tr><td>Marlies</td><td>TOR</td><td>191</td><td>123</td><td>111</td><td>5</td><td>2751</td><td>905</td><td>901</td><td>933</td><td>28</td><td>1466</td><td>393</td><td>923</td><td>1674</td><td>302</td><td>67</td><td>22.19%</td><td>380</td><td>56</td><td>85.26%</td><td>6</td><td>59.99%</td><td>65.49%</td><td>64.49%</td><td>1450</td><td>2573</td><td>930</td><td>463</td><td>1972</td><td>530</td><td>13</td><td>1</td></tr>
<tr><td>Condors</td><td>BKR</td><td>194</td><td>172</td><td>114</td><td>5</td><td>3101</td><td>991</td><td>1075</td><td>1018</td><td>23</td><td>1605</td><td>455</td><td>772</td><td>1664</td><td>303</td><td>76</td><td>25.08%</td><td>307</td><td>42</td><td>86.32%</td><td>6</td><td>49.34%</td><td>57.41%</td><td>59.22%</td><td>1526</td><td>2538</td><td>876</td><td>454</td><td>1988</td><td>487</td><td>13</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>SPR</td><td>153</td><td>136</td><td>105</td><td>8</td><td>2634</td><td>851</td><td>903</td><td>863</td><td>31</td><td>1731</td><td>465</td><td>881</td><td>1572</td><td>250</td><td>53</td><td>21.20%</td><td>351</td><td>36</td><td>89.74%</td><td>16</td><td>60.53%</td><td>68.90%</td><td>67.40%</td><td>1554</td><td>2490</td><td>903</td><td>462</td><td>1923</td><td>498</td><td>19</td><td>0</td></tr>
<tr><td>Penguins</td><td>WBS</td><td>183</td><td>124</td><td>100</td><td>8</td><td>3015</td><td>1008</td><td>920</td><td>1072</td><td>35</td><td>2481</td><td>655</td><td>541</td><td>1633</td><td>272</td><td>58</td><td>21.32%</td><td>227</td><td>37</td><td>83.70%</td><td>4</td><td>38.91%</td><td>43.44%</td><td>38.48%</td><td>2106</td><td>1955</td><td>892</td><td>521</td><td>1474</td><td>429</td><td>7</td><td>0</td></tr>
<tr><td>Admirals</td><td>MIL</td><td>137</td><td>82</td><td>90</td><td>6</td><td>2440</td><td>823</td><td>773</td><td>828</td><td>32</td><td>1845</td><td>579</td><td>713</td><td>1647</td><td>289</td><td>48</td><td>16.61%</td><td>312</td><td>58</td><td>81.41%</td><td>3</td><td>43.40%</td><td>53.20%</td><td>56.64%</td><td>1759</td><td>2284</td><td>912</td><td>505</td><td>1728</td><td>484</td><td>11</td><td>0</td></tr>
<tr><td>Wolf Pack</td><td>HFD</td><td>85</td><td>55</td><td>40</td><td>7</td><td>2207</td><td>730</td><td>690</td><td>771</td><td>19</td><td>4076</td><td>1187</td><td>281</td><td>1320</td><td>181</td><td>18</td><td>9.94%</td><td>117</td><td>39</td><td>66.67%</td><td>0</td><td>32.86%</td><td>39.26%</td><td>32.90%</td><td>2917</td><td>1152</td><td>869</td><td>559</td><td>782</td><td>335</td><td>0</td><td>0</td></tr>
<tr><td>Griffins</td><td>GRP</td><td>170</td><td>158</td><td>107</td><td>4</td><td>2771</td><td>913</td><td>916</td><td>932</td><td>13</td><td>1449</td><td>396</td><td>851</td><td>1600</td><td>302</td><td>58</td><td>19.21%</td><td>354</td><td>52</td><td>85.31%</td><td>11</td><td>58.29%</td><td>64.62%</td><td>64.57%</td><td>1406</td><td>2593</td><td>934</td><td>459</td><td>1986</td><td>539</td><td>14</td><td>0</td></tr>
<tr><td> Americans</td><td>ROC</td><td>158</td><td>127</td><td>83</td><td>2</td><td>2486</td><td>858</td><td>813</td><td>805</td><td>22</td><td>1415</td><td>399</td><td>846</td><td>1448</td><td>343</td><td>90</td><td>26.24%</td><td>334</td><td>57</td><td>82.93%</td><td>2</td><td>55.17%</td><td>67.62%</td><td>65.80%</td><td>1458</td><td>2576</td><td>902</td><td>455</td><td>2000</td><td>515</td><td>18</td><td>1</td></tr>
<tr><td>Senators</td><td>BEL</td><td>111</td><td>76</td><td>66</td><td>1</td><td>2237</td><td>756</td><td>755</td><td>721</td><td>9</td><td>2573</td><td>700</td><td>526</td><td>1451</td><td>292</td><td>39</td><td>13.36%</td><td>219</td><td>62</td><td>71.69%</td><td>0</td><td>36.51%</td><td>39.83%</td><td>37.94%</td><td>2158</td><td>1850</td><td>924</td><td>533</td><td>1358</td><td>436</td><td>3</td><td>0</td></tr>
<tr><td>Barracudas</td><td>SJB</td><td>71</td><td>52</td><td>38</td><td>1</td><td>1933</td><td>689</td><td>587</td><td>636</td><td>24</td><td>3705</td><td>1048</td><td>323</td><td>1295</td><td>207</td><td>22</td><td>10.63%</td><td>142</td><td>40</td><td>71.83%</td><td>2</td><td>31.08%</td><td>36.25%</td><td>29.96%</td><td>2762</td><td>1287</td><td>889</td><td>560</td><td>884</td><td>363</td><td>0</td><td>0</td></tr>
<tr><td>Stars</td><td>TEX</td><td>113</td><td>86</td><td>79</td><td>3</td><td>2565</td><td>869</td><td>873</td><td>816</td><td>9</td><td>3399</td><td>1023</td><td>370</td><td>1352</td><td>232</td><td>34</td><td>14.66%</td><td>155</td><td>43</td><td>72.26%</td><td>3</td><td>42.04%</td><td>49.75%</td><td>48.31%</td><td>2533</td><td>1500</td><td>894</td><td>550</td><td>1066</td><td>383</td><td>0</td><td>0</td></tr>
<tr><td>Wild</td><td>IOA</td><td>106</td><td>81</td><td>73</td><td>2</td><td>2292</td><td>765</td><td>758</td><td>764</td><td>8</td><td>3145</td><td>909</td><td>488</td><td>1399</td><td>220</td><td>30</td><td>13.64%</td><td>214</td><td>40</td><td>81.31%</td><td>6</td><td>40.18%</td><td>49.57%</td><td>38.85%</td><td>2450</td><td>1608</td><td>879</td><td>537</td><td>1166</td><td>392</td><td>4</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Condors</td><td>5.89</td></tr>
<tr><td>2</td><td>Heat</td><td>5.67</td></tr>
<tr><td>3</td><td>Moose</td><td>5.44</td></tr>
<tr><td>4</td><td>Griffins</td><td>5.35</td></tr>
<tr><td>5</td><td>Gulls</td><td>5.24</td></tr>
<tr><td>6</td><td>Marlies</td><td>5.24</td></tr>
<tr><td>7</td><td>IceHogs</td><td>5.22</td></tr>
<tr><td>8</td><td>Mariners</td><td>5.18</td></tr>
<tr><td>9</td><td>Monsters</td><td>5.12</td></tr>
<tr><td>10</td><td>Penguins</td><td>5.02</td></tr>
<tr><td>11</td><td>Thunderbirds</td><td>4.89</td></tr>
<tr><td>12</td><td>Canucks</td><td>4.87</td></tr>
<tr><td>13</td><td>Bruins</td><td>4.68</td></tr>
<tr><td>14</td><td>Checkers</td><td>4.59</td></tr>
<tr><td>15</td><td> Americans</td><td>4.51</td></tr>
<tr><td>16</td><td>Wolves</td><td>4.02</td></tr>
<tr><td>17</td><td>Admirals</td><td>3.83</td></tr>
<tr><td>18</td><td>Phantoms</td><td>3.46</td></tr>
<tr><td>19</td><td>Stars</td><td>3.43</td></tr>
<tr><td>20</td><td>Rocket</td><td>3.35</td></tr>
<tr><td>21</td><td>Comets</td><td>3.32</td></tr>
<tr><td>22</td><td>Reign</td><td>3.27</td></tr>
<tr><td>23</td><td>Wild</td><td>3.20</td></tr>
<tr><td>24</td><td>Senators</td><td>3.10</td></tr>
<tr><td>25</td><td>Crunch</td><td>2.57</td></tr>
<tr><td>26</td><td>Eagles</td><td>2.29</td></tr>
<tr><td>27</td><td>Roadrunners</td><td>2.29</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>2.28</td></tr>
<tr><td>29</td><td>Sound Tigers</td><td>2.23</td></tr>
<tr><td>30</td><td>Bears</td><td>2.22</td></tr>
<tr><td>31</td><td>Rampage </td><td>2.21</td></tr>
<tr><td>32</td><td>Barracudas</td><td>1.98</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>1.57</td></tr>
<tr><td>2</td><td> Americans</td><td>1.87</td></tr>
<tr><td>3</td><td>Condors</td><td>1.90</td></tr>
<tr><td>4</td><td>Rocket</td><td>2.01</td></tr>
<tr><td>5</td><td>Reign</td><td>2.04</td></tr>
<tr><td>6</td><td>IceHogs</td><td>2.06</td></tr>
<tr><td>7</td><td>Thunderbirds</td><td>2.12</td></tr>
<tr><td>8</td><td>Griffins</td><td>2.21</td></tr>
<tr><td>9</td><td>Marlies</td><td>2.32</td></tr>
<tr><td>10</td><td>Moose</td><td>2.33</td></tr>
<tr><td>11</td><td>Heat</td><td>2.38</td></tr>
<tr><td>12</td><td>Gulls</td><td>2.41</td></tr>
<tr><td>13</td><td>Bruins</td><td>2.51</td></tr>
<tr><td>14</td><td>Admirals</td><td>2.55</td></tr>
<tr><td>15</td><td>Monsters</td><td>2.67</td></tr>
<tr><td>16</td><td>Mariners</td><td>2.72</td></tr>
<tr><td>17</td><td>Wolves</td><td>2.88</td></tr>
<tr><td>18</td><td>Penguins</td><td>3.40</td></tr>
<tr><td>19</td><td>Checkers</td><td>3.80</td></tr>
<tr><td>20</td><td>Comets</td><td>4.50</td></tr>
<tr><td>21</td><td>Senators</td><td>4.90</td></tr>
<tr><td>22</td><td>Wild</td><td>4.98</td></tr>
<tr><td>23</td><td>Phantoms</td><td>5.39</td></tr>
<tr><td>24</td><td>Stars</td><td>6.04</td></tr>
<tr><td>25</td><td>Crunch</td><td>6.39</td></tr>
<tr><td>26</td><td>Bears</td><td>6.61</td></tr>
<tr><td>27</td><td>Eagles</td><td>6.66</td></tr>
<tr><td>28</td><td>Barracudas</td><td>6.76</td></tr>
<tr><td>29</td><td>Roadrunners</td><td>6.82</td></tr>
<tr><td>30</td><td>Rampage </td><td>6.93</td></tr>
<tr><td>31</td><td>Sound Tigers</td><td>7.12</td></tr>
<tr><td>32</td><td>Wolf Pack</td><td>7.13</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Condors</td><td>309.62%</td></tr>
<tr><td>2</td><td>Canucks</td><td>309.30%</td></tr>
<tr><td>3</td><td>IceHogs</td><td>253.25%</td></tr>
<tr><td>4</td><td>Griffins</td><td>242.54%</td></tr>
<tr><td>5</td><td> Americans</td><td>241.83%</td></tr>
<tr><td>6</td><td>Heat</td><td>238.46%</td></tr>
<tr><td>7</td><td>Moose</td><td>233.51%</td></tr>
<tr><td>8</td><td>Thunderbirds</td><td>230.46%</td></tr>
<tr><td>9</td><td>Marlies</td><td>226.32%</td></tr>
<tr><td>10</td><td>Gulls</td><td>217.17%</td></tr>
<tr><td>11</td><td>Monsters</td><td>191.78%</td></tr>
<tr><td>12</td><td>Mariners</td><td>190.58%</td></tr>
<tr><td>13</td><td>Bruins</td><td>186.41%</td></tr>
<tr><td>14</td><td>Rocket</td><td>166.67%</td></tr>
<tr><td>15</td><td>Reign</td><td>160.48%</td></tr>
<tr><td>16</td><td>Admirals</td><td>150.24%</td></tr>
<tr><td>17</td><td>Penguins</td><td>147.67%</td></tr>
<tr><td>18</td><td>Wolves</td><td>139.83%</td></tr>
<tr><td>19</td><td>Checkers</td><td>120.51%</td></tr>
<tr><td>20</td><td>Comets</td><td>73.71%</td></tr>
<tr><td>21</td><td>Phantoms</td><td>64.25%</td></tr>
<tr><td>22</td><td>Wild</td><td>64.22%</td></tr>
<tr><td>23</td><td>Senators</td><td>63.18%</td></tr>
<tr><td>24</td><td>Stars</td><td>56.77%</td></tr>
<tr><td>25</td><td>Crunch</td><td>40.27%</td></tr>
<tr><td>26</td><td>Eagles</td><td>34.43%</td></tr>
<tr><td>27</td><td>Roadrunners</td><td>33.63%</td></tr>
<tr><td>28</td><td>Bears</td><td>33.58%</td></tr>
<tr><td>29</td><td>Wolf Pack</td><td>31.97%</td></tr>
<tr><td>30</td><td>Rampage </td><td>31.87%</td></tr>
<tr><td>31</td><td>Sound Tigers</td><td>31.34%</td></tr>
<tr><td>32</td><td>Barracudas</td><td>29.24%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18.04%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td> Americans</td><td>26.24%</td></tr>
<tr><td>2</td><td>Reign</td><td>25.35%</td></tr>
<tr><td>3</td><td>Condors</td><td>25.08%</td></tr>
<tr><td>4</td><td>IceHogs</td><td>24.48%</td></tr>
<tr><td>5</td><td>Mariners</td><td>23.24%</td></tr>
<tr><td>6</td><td>Wolves</td><td>22.52%</td></tr>
<tr><td>7</td><td>Marlies</td><td>22.19%</td></tr>
<tr><td>8</td><td>Heat</td><td>21.59%</td></tr>
<tr><td>9</td><td>Penguins</td><td>21.32%</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>21.20%</td></tr>
<tr><td>11</td><td>Gulls</td><td>20.00%</td></tr>
<tr><td>12</td><td>Moose</td><td>20.00%</td></tr>
<tr><td>13</td><td>Bruins</td><td>19.85%</td></tr>
<tr><td>14</td><td>Griffins</td><td>19.21%</td></tr>
<tr><td>15</td><td>Rocket</td><td>18.79%</td></tr>
<tr><td>16</td><td>Canucks</td><td>18.21%</td></tr>
<tr><td>17</td><td>Monsters</td><td>16.61%</td></tr>
<tr><td>18</td><td>Admirals</td><td>16.61%</td></tr>
<tr><td>19</td><td>Crunch</td><td>16.44%</td></tr>
<tr><td>20</td><td>Comets</td><td>16.25%</td></tr>
<tr><td>21</td><td>Stars</td><td>14.66%</td></tr>
<tr><td>22</td><td>Checkers</td><td>14.29%</td></tr>
<tr><td>23</td><td>Wild</td><td>13.64%</td></tr>
<tr><td>24</td><td>Senators</td><td>13.36%</td></tr>
<tr><td>25</td><td>Phantoms</td><td>13.22%</td></tr>
<tr><td>26</td><td>Bears</td><td>12.35%</td></tr>
<tr><td>27</td><td>Barracudas</td><td>10.63%</td></tr>
<tr><td>28</td><td>Rampage </td><td>10.56%</td></tr>
<tr><td>29</td><td>Wolf Pack</td><td>9.94%</td></tr>
<tr><td>30</td><td>Sound Tigers</td><td>9.68%</td></tr>
<tr><td>31</td><td>Roadrunners</td><td>8.79%</td></tr>
<tr><td>32</td><td>Eagles</td><td>6.77%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 81.96%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>90.20%</td></tr>
<tr><td>2</td><td>Thunderbirds</td><td>89.74%</td></tr>
<tr><td>3</td><td>Moose</td><td>86.82%</td></tr>
<tr><td>4</td><td>Reign</td><td>86.48%</td></tr>
<tr><td>5</td><td>Condors</td><td>86.32%</td></tr>
<tr><td>6</td><td>Gulls</td><td>86.21%</td></tr>
<tr><td>7</td><td>Heat</td><td>85.82%</td></tr>
<tr><td>8</td><td>Monsters</td><td>85.42%</td></tr>
<tr><td>9</td><td>IceHogs</td><td>85.41%</td></tr>
<tr><td>10</td><td>Griffins</td><td>85.31%</td></tr>
<tr><td>11</td><td>Marlies</td><td>85.26%</td></tr>
<tr><td>12</td><td>Rocket</td><td>84.94%</td></tr>
<tr><td>13</td><td>Mariners</td><td>84.75%</td></tr>
<tr><td>14</td><td>Penguins</td><td>83.70%</td></tr>
<tr><td>15</td><td>Bruins</td><td>83.67%</td></tr>
<tr><td>16</td><td> Americans</td><td>82.93%</td></tr>
<tr><td>17</td><td>Wolves</td><td>81.99%</td></tr>
<tr><td>18</td><td>Admirals</td><td>81.41%</td></tr>
<tr><td>19</td><td>Wild</td><td>81.31%</td></tr>
<tr><td>20</td><td>Roadrunners</td><td>79.43%</td></tr>
<tr><td>21</td><td>Comets</td><td>78.08%</td></tr>
<tr><td>22</td><td>Checkers</td><td>75.60%</td></tr>
<tr><td>23</td><td>Crunch</td><td>74.69%</td></tr>
<tr><td>24</td><td>Stars</td><td>72.26%</td></tr>
<tr><td>25</td><td>Barracudas</td><td>71.83%</td></tr>
<tr><td>26</td><td>Senators</td><td>71.69%</td></tr>
<tr><td>27</td><td>Phantoms</td><td>70.95%</td></tr>
<tr><td>28</td><td>Rampage </td><td>70.94%</td></tr>
<tr><td>29</td><td>Eagles</td><td>68.94%</td></tr>
<tr><td>30</td><td>Sound Tigers</td><td>67.35%</td></tr>
<tr><td>31</td><td>Wolf Pack</td><td>66.67%</td></tr>
<tr><td>32</td><td>Bears</td><td>66.41%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Reign</td><td>111.82%</td></tr>
<tr><td>2</td><td>Condors</td><td>111.40%</td></tr>
<tr><td>3</td><td>Thunderbirds</td><td>110.94%</td></tr>
<tr><td>4</td><td>IceHogs</td><td>109.89%</td></tr>
<tr><td>5</td><td> Americans</td><td>109.17%</td></tr>
<tr><td>6</td><td>Canucks</td><td>108.41%</td></tr>
<tr><td>7</td><td>Mariners</td><td>107.99%</td></tr>
<tr><td>8</td><td>Marlies</td><td>107.45%</td></tr>
<tr><td>9</td><td>Heat</td><td>107.41%</td></tr>
<tr><td>10</td><td>Moose</td><td>106.82%</td></tr>
<tr><td>11</td><td>Gulls</td><td>106.21%</td></tr>
<tr><td>12</td><td>Penguins</td><td>105.02%</td></tr>
<tr><td>13</td><td>Griffins</td><td>104.52%</td></tr>
<tr><td>14</td><td>Wolves</td><td>104.51%</td></tr>
<tr><td>15</td><td>Rocket</td><td>103.73%</td></tr>
<tr><td>16</td><td>Bruins</td><td>103.53%</td></tr>
<tr><td>17</td><td>Monsters</td><td>102.03%</td></tr>
<tr><td>18</td><td>Admirals</td><td>98.02%</td></tr>
<tr><td>19</td><td>Wild</td><td>94.94%</td></tr>
<tr><td>20</td><td>Comets</td><td>94.33%</td></tr>
<tr><td>21</td><td>Crunch</td><td>91.14%</td></tr>
<tr><td>22</td><td>Checkers</td><td>89.89%</td></tr>
<tr><td>23</td><td>Roadrunners</td><td>88.22%</td></tr>
<tr><td>24</td><td>Stars</td><td>86.91%</td></tr>
<tr><td>25</td><td>Senators</td><td>85.05%</td></tr>
<tr><td>26</td><td>Phantoms</td><td>84.18%</td></tr>
<tr><td>27</td><td>Barracudas</td><td>82.46%</td></tr>
<tr><td>28</td><td>Rampage </td><td>81.50%</td></tr>
<tr><td>29</td><td>Bears</td><td>78.76%</td></tr>
<tr><td>30</td><td>Sound Tigers</td><td>77.02%</td></tr>
<tr><td>31</td><td>Wolf Pack</td><td>76.61%</td></tr>
<tr><td>32</td><td>Eagles</td><td>75.71%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30.02</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Moose</td><td>37.82</td></tr>
<tr><td>2</td><td>Condors</td><td>37.82</td></tr>
<tr><td>3</td><td>Penguins</td><td>36.77</td></tr>
<tr><td>4</td><td>Mariners</td><td>34.83</td></tr>
<tr><td>5</td><td>Bruins</td><td>34.18</td></tr>
<tr><td>6</td><td>Heat</td><td>34.16</td></tr>
<tr><td>7</td><td>Checkers</td><td>34.09</td></tr>
<tr><td>8</td><td>IceHogs</td><td>33.83</td></tr>
<tr><td>9</td><td>Griffins</td><td>33.79</td></tr>
<tr><td>10</td><td>Marlies</td><td>33.55</td></tr>
<tr><td>11</td><td>Monsters</td><td>33.50</td></tr>
<tr><td>12</td><td>Gulls</td><td>32.68</td></tr>
<tr><td>13</td><td>Thunderbirds</td><td>32.12</td></tr>
<tr><td>14</td><td>Phantoms</td><td>32.00</td></tr>
<tr><td>15</td><td>Stars</td><td>31.28</td></tr>
<tr><td>16</td><td>Canucks</td><td>31.21</td></tr>
<tr><td>17</td><td> Americans</td><td>30.32</td></tr>
<tr><td>18</td><td>Admirals</td><td>29.76</td></tr>
<tr><td>19</td><td>Wolves</td><td>28.84</td></tr>
<tr><td>20</td><td>Wild</td><td>27.95</td></tr>
<tr><td>21</td><td>Comets</td><td>27.59</td></tr>
<tr><td>22</td><td>Senators</td><td>27.28</td></tr>
<tr><td>23</td><td>Crunch</td><td>26.98</td></tr>
<tr><td>24</td><td>Wolf Pack</td><td>26.91</td></tr>
<tr><td>25</td><td>Eagles</td><td>25.57</td></tr>
<tr><td>26</td><td>Roadrunners</td><td>25.48</td></tr>
<tr><td>27</td><td>Rampage </td><td>25.05</td></tr>
<tr><td>28</td><td>Sound Tigers</td><td>24.17</td></tr>
<tr><td>29</td><td>Bears</td><td>24.01</td></tr>
<tr><td>30</td><td>Barracudas</td><td>23.57</td></tr>
<tr><td>31</td><td>Reign</td><td>22.18</td></tr>
<tr><td>32</td><td>Rocket</td><td>21.46</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 30.02</b></td></tr></tfoot>
<tbody><tr><td>1</td><td> Americans</td><td>17.26</td></tr>
<tr><td>2</td><td>Canucks</td><td>17.28</td></tr>
<tr><td>3</td><td>IceHogs</td><td>17.33</td></tr>
<tr><td>4</td><td>Griffins</td><td>17.67</td></tr>
<tr><td>5</td><td>Marlies</td><td>17.88</td></tr>
<tr><td>6</td><td>Gulls</td><td>18.11</td></tr>
<tr><td>7</td><td>Heat</td><td>18.15</td></tr>
<tr><td>8</td><td>Reign</td><td>18.43</td></tr>
<tr><td>9</td><td>Moose</td><td>19.18</td></tr>
<tr><td>10</td><td>Condors</td><td>19.57</td></tr>
<tr><td>11</td><td>Rocket</td><td>19.62</td></tr>
<tr><td>12</td><td>Monsters</td><td>21.05</td></tr>
<tr><td>13</td><td>Thunderbirds</td><td>21.11</td></tr>
<tr><td>14</td><td>Admirals</td><td>22.50</td></tr>
<tr><td>15</td><td>Checkers</td><td>23.12</td></tr>
<tr><td>16</td><td>Bruins</td><td>24.16</td></tr>
<tr><td>17</td><td>Mariners</td><td>24.56</td></tr>
<tr><td>18</td><td>Wolves</td><td>26.38</td></tr>
<tr><td>19</td><td>Penguins</td><td>30.26</td></tr>
<tr><td>20</td><td>Comets</td><td>31.05</td></tr>
<tr><td>21</td><td>Senators</td><td>31.38</td></tr>
<tr><td>22</td><td>Phantoms</td><td>36.87</td></tr>
<tr><td>23</td><td>Wild</td><td>38.35</td></tr>
<tr><td>24</td><td>Stars</td><td>41.45</td></tr>
<tr><td>25</td><td>Barracudas</td><td>45.18</td></tr>
<tr><td>26</td><td>Crunch</td><td>45.37</td></tr>
<tr><td>27</td><td>Roadrunners</td><td>46.00</td></tr>
<tr><td>28</td><td>Bears</td><td>49.61</td></tr>
<tr><td>29</td><td>Wolf Pack</td><td>49.71</td></tr>
<tr><td>30</td><td>Sound Tigers</td><td>50.39</td></tr>
<tr><td>31</td><td>Eagles</td><td>50.87</td></tr>
<tr><td>32</td><td>Rampage </td><td>50.91</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Moose</td><td>197.14%</td></tr>
<tr><td>2</td><td>IceHogs</td><td>195.21%</td></tr>
<tr><td>3</td><td>Condors</td><td>193.21%</td></tr>
<tr><td>4</td><td>Griffins</td><td>191.24%</td></tr>
<tr><td>5</td><td>Heat</td><td>188.24%</td></tr>
<tr><td>6</td><td>Marlies</td><td>187.65%</td></tr>
<tr><td>7</td><td>Canucks</td><td>180.59%</td></tr>
<tr><td>8</td><td>Gulls</td><td>180.47%</td></tr>
<tr><td>9</td><td> Americans</td><td>175.69%</td></tr>
<tr><td>10</td><td>Monsters</td><td>159.15%</td></tr>
<tr><td>11</td><td>Thunderbirds</td><td>152.17%</td></tr>
<tr><td>12</td><td>Checkers</td><td>147.42%</td></tr>
<tr><td>13</td><td>Mariners</td><td>141.81%</td></tr>
<tr><td>14</td><td>Bruins</td><td>141.49%</td></tr>
<tr><td>15</td><td>Admirals</td><td>132.25%</td></tr>
<tr><td>16</td><td>Penguins</td><td>121.52%</td></tr>
<tr><td>17</td><td>Reign</td><td>120.38%</td></tr>
<tr><td>18</td><td>Rocket</td><td>109.38%</td></tr>
<tr><td>19</td><td>Wolves</td><td>109.34%</td></tr>
<tr><td>20</td><td>Comets</td><td>88.85%</td></tr>
<tr><td>21</td><td>Senators</td><td>86.94%</td></tr>
<tr><td>22</td><td>Phantoms</td><td>86.80%</td></tr>
<tr><td>23</td><td>Stars</td><td>75.46%</td></tr>
<tr><td>24</td><td>Wild</td><td>72.88%</td></tr>
<tr><td>25</td><td>Crunch</td><td>59.46%</td></tr>
<tr><td>26</td><td>Roadrunners</td><td>55.38%</td></tr>
<tr><td>27</td><td>Wolf Pack</td><td>54.15%</td></tr>
<tr><td>28</td><td>Barracudas</td><td>52.17%</td></tr>
<tr><td>29</td><td>Eagles</td><td>50.28%</td></tr>
<tr><td>30</td><td>Rampage </td><td>49.20%</td></tr>
<tr><td>31</td><td>Bears</td><td>48.40%</td></tr>
<tr><td>32</td><td>Sound Tigers</td><td>47.97%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7.64</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wolf Pack</td><td>3.43</td></tr>
<tr><td>2</td><td>Rampage </td><td>3.43</td></tr>
<tr><td>3</td><td>Barracudas</td><td>3.94</td></tr>
<tr><td>4</td><td>Eagles</td><td>4.02</td></tr>
<tr><td>5</td><td>Roadrunners</td><td>4.06</td></tr>
<tr><td>6</td><td>Bears</td><td>4.13</td></tr>
<tr><td>7</td><td>Stars</td><td>4.51</td></tr>
<tr><td>8</td><td>Sound Tigers</td><td>4.78</td></tr>
<tr><td>9</td><td>Crunch</td><td>4.94</td></tr>
<tr><td>10</td><td>Wolves</td><td>5.85</td></tr>
<tr><td>11</td><td>Wild</td><td>5.95</td></tr>
<tr><td>12</td><td>Phantoms</td><td>6.01</td></tr>
<tr><td>13</td><td>Senators</td><td>6.41</td></tr>
<tr><td>14</td><td>Penguins</td><td>6.60</td></tr>
<tr><td>15</td><td>Reign</td><td>7.54</td></tr>
<tr><td>16</td><td>Checkers</td><td>7.54</td></tr>
<tr><td>17</td><td>Comets</td><td>8.11</td></tr>
<tr><td>18</td><td>Mariners</td><td>8.33</td></tr>
<tr><td>19</td><td>Bruins</td><td>8.41</td></tr>
<tr><td>20</td><td>Moose</td><td>8.66</td></tr>
<tr><td>21</td><td>Admirals</td><td>8.70</td></tr>
<tr><td>22</td><td>Rocket</td><td>9.22</td></tr>
<tr><td>23</td><td>Condors</td><td>9.41</td></tr>
<tr><td>24</td><td>IceHogs</td><td>10.10</td></tr>
<tr><td>25</td><td> Americans</td><td>10.32</td></tr>
<tr><td>26</td><td>Griffins</td><td>10.38</td></tr>
<tr><td>27</td><td>Thunderbirds</td><td>10.74</td></tr>
<tr><td>28</td><td>Marlies</td><td>11.26</td></tr>
<tr><td>29</td><td>Gulls</td><td>11.27</td></tr>
<tr><td>30</td><td>Canucks</td><td>11.84</td></tr>
<tr><td>31</td><td>Monsters</td><td>11.95</td></tr>
<tr><td>32</td><td>Heat</td><td>12.56</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18.32</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Heat</td><td>21.24</td></tr>
<tr><td>2</td><td>Canucks</td><td>20.84</td></tr>
<tr><td>3</td><td>Bruins</td><td>20.73</td></tr>
<tr><td>4</td><td>Marlies</td><td>20.41</td></tr>
<tr><td>5</td><td>Condors</td><td>20.29</td></tr>
<tr><td>6</td><td>Admirals</td><td>20.09</td></tr>
<tr><td>7</td><td>Penguins</td><td>19.91</td></tr>
<tr><td>8</td><td>Gulls</td><td>19.83</td></tr>
<tr><td>9</td><td>Phantoms</td><td>19.68</td></tr>
<tr><td>10</td><td>Monsters</td><td>19.62</td></tr>
<tr><td>11</td><td>Griffins</td><td>19.51</td></tr>
<tr><td>12</td><td>Thunderbirds</td><td>19.17</td></tr>
<tr><td>13</td><td>Comets</td><td>19.16</td></tr>
<tr><td>14</td><td>IceHogs</td><td>19.02</td></tr>
<tr><td>15</td><td>Mariners</td><td>18.87</td></tr>
<tr><td>16</td><td>Rocket</td><td>18.28</td></tr>
<tr><td>17</td><td>Checkers</td><td>18.21</td></tr>
<tr><td>18</td><td>Wolves</td><td>18.11</td></tr>
<tr><td>19</td><td>Senators</td><td>17.70</td></tr>
<tr><td>20</td><td> Americans</td><td>17.66</td></tr>
<tr><td>21</td><td>Reign</td><td>17.62</td></tr>
<tr><td>22</td><td>Crunch</td><td>17.20</td></tr>
<tr><td>23</td><td>Moose</td><td>17.06</td></tr>
<tr><td>24</td><td>Wild</td><td>17.06</td></tr>
<tr><td>25</td><td>Roadrunners</td><td>16.67</td></tr>
<tr><td>26</td><td>Bears</td><td>16.63</td></tr>
<tr><td>27</td><td>Stars</td><td>16.49</td></tr>
<tr><td>28</td><td>Eagles</td><td>16.27</td></tr>
<tr><td>29</td><td>Sound Tigers</td><td>16.18</td></tr>
<tr><td>30</td><td>Wolf Pack</td><td>16.10</td></tr>
<tr><td>31</td><td>Barracudas</td><td>15.79</td></tr>
<tr><td>32</td><td>Rampage </td><td>14.98</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Moose</td><td>71.36%</td></tr>
<tr><td>2</td><td>Monsters</td><td>68.14%</td></tr>
<tr><td>3</td><td>Gulls</td><td>68.13%</td></tr>
<tr><td>4</td><td>IceHogs</td><td>66.06%</td></tr>
<tr><td>5</td><td>Thunderbirds</td><td>65.53%</td></tr>
<tr><td>6</td><td>Canucks</td><td>65.07%</td></tr>
<tr><td>7</td><td>Marlies</td><td>63.46%</td></tr>
<tr><td>8</td><td> Americans</td><td>63.06%</td></tr>
<tr><td>9</td><td>Griffins</td><td>62.66%</td></tr>
<tr><td>10</td><td>Heat</td><td>58.60%</td></tr>
<tr><td>11</td><td>Mariners</td><td>57.91%</td></tr>
<tr><td>12</td><td>Rocket</td><td>56.07%</td></tr>
<tr><td>13</td><td>Checkers</td><td>55.36%</td></tr>
<tr><td>14</td><td>Condors</td><td>55.10%</td></tr>
<tr><td>15</td><td>Reign</td><td>53.96%</td></tr>
<tr><td>16</td><td>Bruins</td><td>50.53%</td></tr>
<tr><td>17</td><td>Admirals</td><td>50.19%</td></tr>
<tr><td>18</td><td>Comets</td><td>49.60%</td></tr>
<tr><td>19</td><td>Stars</td><td>46.42%</td></tr>
<tr><td>20</td><td>Wolves</td><td>46.02%</td></tr>
<tr><td>21</td><td>Wild</td><td>43.06%</td></tr>
<tr><td>22</td><td>Phantoms</td><td>41.44%</td></tr>
<tr><td>23</td><td>Penguins</td><td>40.50%</td></tr>
<tr><td>24</td><td>Senators</td><td>38.11%</td></tr>
<tr><td>25</td><td>Sound Tigers</td><td>34.95%</td></tr>
<tr><td>26</td><td>Bears</td><td>34.79%</td></tr>
<tr><td>27</td><td>Wolf Pack</td><td>34.77%</td></tr>
<tr><td>28</td><td>Roadrunners</td><td>34.74%</td></tr>
<tr><td>29</td><td>Eagles</td><td>34.44%</td></tr>
<tr><td>30</td><td>Crunch</td><td>33.45%</td></tr>
<tr><td>31</td><td>Rampage </td><td>32.53%</td></tr>
<tr><td>32</td><td>Barracudas</td><td>32.36%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
