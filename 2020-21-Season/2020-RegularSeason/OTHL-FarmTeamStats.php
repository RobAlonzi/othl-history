<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Stats</title>
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
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Eagles</td><td>82</td><td>4</td><td>73</td><td>4</td><td>1</td><td>0</td><td>0</td><td>149</td><td>598</td><td>41</td><td>2</td><td>35</td><td>3</td><td>1</td><td>0</td><td>0</td><td>82</td><td>285</td><td>41</td><td>2</td><td>38</td><td>1</td><td>0</td><td>0</td><td>0</td><td>67</td><td>313</td><td>149</td><td>288</td><td>437</td></tr>
<tr><td>IceHogs</td><td>82</td><td>59</td><td>16</td><td>2</td><td>2</td><td>1</td><td>2</td><td>371</td><td>128</td><td>41</td><td>31</td><td>8</td><td>0</td><td>1</td><td>1</td><td>0</td><td>200</td><td>59</td><td>41</td><td>28</td><td>8</td><td>2</td><td>1</td><td>0</td><td>2</td><td>171</td><td>69</td><td>371</td><td>659</td><td>1030</td></tr>
<tr><td>Monsters</td><td>82</td><td>51</td><td>18</td><td>1</td><td>2</td><td>3</td><td>7</td><td>343</td><td>176</td><td>41</td><td>27</td><td>10</td><td>1</td><td>0</td><td>2</td><td>1</td><td>174</td><td>86</td><td>41</td><td>24</td><td>8</td><td>0</td><td>2</td><td>1</td><td>6</td><td>169</td><td>90</td><td>343</td><td>608</td><td>951</td></tr>
<tr><td>Rampage </td><td>82</td><td>9</td><td>70</td><td>1</td><td>2</td><td>0</td><td>0</td><td>153</td><td>601</td><td>41</td><td>6</td><td>33</td><td>1</td><td>1</td><td>0</td><td>0</td><td>96</td><td>283</td><td>41</td><td>3</td><td>37</td><td>0</td><td>1</td><td>0</td><td>0</td><td>57</td><td>318</td><td>153</td><td>298</td><td>451</td></tr>
<tr><td>Bruins</td><td>82</td><td>42</td><td>29</td><td>2</td><td>4</td><td>3</td><td>2</td><td>265</td><td>170</td><td>41</td><td>22</td><td>13</td><td>2</td><td>2</td><td>0</td><td>2</td><td>137</td><td>78</td><td>41</td><td>20</td><td>16</td><td>0</td><td>2</td><td>3</td><td>0</td><td>128</td><td>92</td><td>265</td><td>482</td><td>747</td></tr>
<tr><td>Rocket</td><td>82</td><td>32</td><td>34</td><td>5</td><td>3</td><td>6</td><td>2</td><td>257</td><td>211</td><td>41</td><td>14</td><td>16</td><td>4</td><td>3</td><td>4</td><td>0</td><td>127</td><td>94</td><td>41</td><td>18</td><td>18</td><td>1</td><td>0</td><td>2</td><td>2</td><td>130</td><td>117</td><td>257</td><td>436</td><td>693</td></tr>
<tr><td>Comets</td><td>82</td><td>59</td><td>15</td><td>1</td><td>1</td><td>3</td><td>3</td><td>347</td><td>120</td><td>41</td><td>30</td><td>6</td><td>1</td><td>0</td><td>3</td><td>1</td><td>188</td><td>63</td><td>41</td><td>29</td><td>9</td><td>0</td><td>1</td><td>0</td><td>2</td><td>159</td><td>57</td><td>347</td><td>627</td><td>974</td></tr>
<tr><td>Bears</td><td>82</td><td>12</td><td>69</td><td>0</td><td>1</td><td>0</td><td>0</td><td>184</td><td>549</td><td>41</td><td>8</td><td>33</td><td>0</td><td>0</td><td>0</td><td>0</td><td>94</td><td>258</td><td>41</td><td>4</td><td>36</td><td>0</td><td>1</td><td>0</td><td>0</td><td>90</td><td>291</td><td>184</td><td>340</td><td>524</td></tr>
<tr><td>Roadrunners</td><td>82</td><td>13</td><td>66</td><td>0</td><td>2</td><td>0</td><td>1</td><td>216</td><td>523</td><td>41</td><td>6</td><td>33</td><td>0</td><td>1</td><td>0</td><td>1</td><td>116</td><td>264</td><td>41</td><td>7</td><td>33</td><td>0</td><td>1</td><td>0</td><td>0</td><td>100</td><td>259</td><td>216</td><td>358</td><td>574</td></tr>
<tr><td>Devils</td><td>82</td><td>31</td><td>39</td><td>1</td><td>7</td><td>2</td><td>2</td><td>341</td><td>332</td><td>41</td><td>14</td><td>20</td><td>1</td><td>4</td><td>2</td><td>0</td><td>166</td><td>160</td><td>41</td><td>17</td><td>19</td><td>0</td><td>3</td><td>0</td><td>2</td><td>175</td><td>172</td><td>341</td><td>549</td><td>890</td></tr>
<tr><td>Gulls</td><td>82</td><td>34</td><td>33</td><td>5</td><td>2</td><td>3</td><td>5</td><td>316</td><td>278</td><td>41</td><td>18</td><td>14</td><td>3</td><td>2</td><td>1</td><td>3</td><td>167</td><td>133</td><td>41</td><td>16</td><td>19</td><td>2</td><td>0</td><td>2</td><td>2</td><td>149</td><td>145</td><td>316</td><td>526</td><td>842</td></tr>
<tr><td>Heat</td><td>82</td><td>49</td><td>22</td><td>4</td><td>1</td><td>2</td><td>4</td><td>331</td><td>197</td><td>41</td><td>26</td><td>9</td><td>2</td><td>0</td><td>1</td><td>3</td><td>172</td><td>92</td><td>41</td><td>23</td><td>13</td><td>2</td><td>1</td><td>1</td><td>1</td><td>159</td><td>105</td><td>331</td><td>601</td><td>932</td></tr>
<tr><td>Phantoms</td><td>82</td><td>40</td><td>32</td><td>5</td><td>2</td><td>3</td><td>0</td><td>321</td><td>234</td><td>41</td><td>21</td><td>15</td><td>1</td><td>2</td><td>2</td><td>0</td><td>160</td><td>123</td><td>41</td><td>19</td><td>17</td><td>4</td><td>0</td><td>1</td><td>0</td><td>161</td><td>111</td><td>321</td><td>563</td><td>884</td></tr>
<tr><td>Wolves</td><td>82</td><td>52</td><td>22</td><td>0</td><td>2</td><td>3</td><td>3</td><td>303</td><td>155</td><td>41</td><td>28</td><td>7</td><td>0</td><td>2</td><td>2</td><td>2</td><td>160</td><td>62</td><td>41</td><td>24</td><td>15</td><td>0</td><td>0</td><td>1</td><td>1</td><td>143</td><td>93</td><td>303</td><td>534</td><td>837</td></tr>
<tr><td>Checkers</td><td>82</td><td>46</td><td>29</td><td>4</td><td>2</td><td>1</td><td>0</td><td>342</td><td>260</td><td>41</td><td>28</td><td>11</td><td>2</td><td>0</td><td>0</td><td>0</td><td>186</td><td>110</td><td>41</td><td>18</td><td>18</td><td>2</td><td>2</td><td>1</td><td>0</td><td>156</td><td>150</td><td>342</td><td>601</td><td>943</td></tr>
<tr><td>Sound Tigers</td><td>82</td><td>8</td><td>74</td><td>0</td><td>0</td><td>0</td><td>0</td><td>142</td><td>578</td><td>41</td><td>5</td><td>36</td><td>0</td><td>0</td><td>0</td><td>0</td><td>76</td><td>283</td><td>41</td><td>3</td><td>38</td><td>0</td><td>0</td><td>0</td><td>0</td><td>66</td><td>295</td><td>142</td><td>282</td><td>424</td></tr>
<tr><td>Moose</td><td>82</td><td>54</td><td>18</td><td>2</td><td>0</td><td>5</td><td>3</td><td>358</td><td>150</td><td>41</td><td>28</td><td>6</td><td>1</td><td>0</td><td>4</td><td>2</td><td>188</td><td>66</td><td>41</td><td>26</td><td>12</td><td>1</td><td>0</td><td>1</td><td>1</td><td>170</td><td>84</td><td>358</td><td>642</td><td>1000</td></tr>
<tr><td>Reign</td><td>82</td><td>25</td><td>52</td><td>1</td><td>2</td><td>0</td><td>2</td><td>259</td><td>345</td><td>41</td><td>12</td><td>28</td><td>0</td><td>0</td><td>0</td><td>1</td><td>135</td><td>174</td><td>41</td><td>13</td><td>24</td><td>1</td><td>2</td><td>0</td><td>1</td><td>124</td><td>171</td><td>259</td><td>429</td><td>688</td></tr>
<tr><td>Crunch</td><td>82</td><td>37</td><td>33</td><td>5</td><td>4</td><td>2</td><td>1</td><td>324</td><td>262</td><td>41</td><td>20</td><td>16</td><td>2</td><td>2</td><td>1</td><td>0</td><td>166</td><td>134</td><td>41</td><td>17</td><td>17</td><td>3</td><td>2</td><td>1</td><td>1</td><td>158</td><td>128</td><td>324</td><td>522</td><td>846</td></tr>
<tr><td>Marlies</td><td>82</td><td>54</td><td>22</td><td>1</td><td>2</td><td>1</td><td>2</td><td>298</td><td>165</td><td>41</td><td>25</td><td>12</td><td>1</td><td>1</td><td>0</td><td>2</td><td>154</td><td>87</td><td>41</td><td>29</td><td>10</td><td>0</td><td>1</td><td>1</td><td>0</td><td>144</td><td>78</td><td>298</td><td>530</td><td>828</td></tr>
<tr><td>Condors</td><td>82</td><td>56</td><td>15</td><td>2</td><td>5</td><td>3</td><td>1</td><td>374</td><td>167</td><td>41</td><td>31</td><td>7</td><td>1</td><td>1</td><td>1</td><td>0</td><td>210</td><td>94</td><td>41</td><td>25</td><td>8</td><td>1</td><td>4</td><td>2</td><td>1</td><td>164</td><td>73</td><td>374</td><td>666</td><td>1040</td></tr>
<tr><td>Thunderbirds</td><td>82</td><td>52</td><td>20</td><td>2</td><td>2</td><td>4</td><td>2</td><td>351</td><td>160</td><td>41</td><td>30</td><td>7</td><td>1</td><td>1</td><td>1</td><td>1</td><td>187</td><td>72</td><td>41</td><td>22</td><td>13</td><td>1</td><td>1</td><td>3</td><td>1</td><td>164</td><td>88</td><td>351</td><td>624</td><td>975</td></tr>
<tr><td>Penguins</td><td>82</td><td>47</td><td>28</td><td>2</td><td>1</td><td>0</td><td>4</td><td>373</td><td>235</td><td>41</td><td>24</td><td>14</td><td>0</td><td>1</td><td>0</td><td>2</td><td>181</td><td>112</td><td>41</td><td>23</td><td>14</td><td>2</td><td>0</td><td>0</td><td>2</td><td>192</td><td>123</td><td>373</td><td>586</td><td>959</td></tr>
<tr><td>Admirals</td><td>82</td><td>61</td><td>12</td><td>1</td><td>3</td><td>2</td><td>3</td><td>459</td><td>172</td><td>41</td><td>32</td><td>4</td><td>1</td><td>0</td><td>2</td><td>2</td><td>242</td><td>79</td><td>41</td><td>29</td><td>8</td><td>0</td><td>3</td><td>0</td><td>1</td><td>217</td><td>93</td><td>459</td><td>803</td><td>1262</td></tr>
<tr><td>Wolf Pack</td><td>82</td><td>1</td><td>80</td><td>0</td><td>1</td><td>0</td><td>0</td><td>143</td><td>589</td><td>41</td><td>1</td><td>40</td><td>0</td><td>0</td><td>0</td><td>0</td><td>78</td><td>292</td><td>41</td><td>0</td><td>40</td><td>0</td><td>1</td><td>0</td><td>0</td><td>65</td><td>297</td><td>143</td><td>279</td><td>422</td></tr>
<tr><td>Griffins</td><td>82</td><td>33</td><td>41</td><td>1</td><td>0</td><td>2</td><td>5</td><td>277</td><td>275</td><td>41</td><td>15</td><td>23</td><td>1</td><td>0</td><td>0</td><td>2</td><td>134</td><td>143</td><td>41</td><td>18</td><td>18</td><td>0</td><td>0</td><td>2</td><td>3</td><td>143</td><td>132</td><td>277</td><td>463</td><td>740</td></tr>
<tr><td> Americans</td><td>82</td><td>52</td><td>17</td><td>5</td><td>2</td><td>4</td><td>2</td><td>362</td><td>174</td><td>41</td><td>25</td><td>11</td><td>2</td><td>1</td><td>2</td><td>0</td><td>183</td><td>86</td><td>41</td><td>27</td><td>6</td><td>3</td><td>1</td><td>2</td><td>2</td><td>179</td><td>88</td><td>362</td><td>635</td><td>997</td></tr>
<tr><td>Senators</td><td>82</td><td>35</td><td>40</td><td>2</td><td>2</td><td>0</td><td>3</td><td>269</td><td>259</td><td>41</td><td>17</td><td>20</td><td>2</td><td>1</td><td>0</td><td>1</td><td>135</td><td>122</td><td>41</td><td>18</td><td>20</td><td>0</td><td>1</td><td>0</td><td>2</td><td>134</td><td>137</td><td>269</td><td>474</td><td>743</td></tr>
<tr><td>Barracudas</td><td>82</td><td>53</td><td>19</td><td>1</td><td>3</td><td>5</td><td>1</td><td>438</td><td>212</td><td>41</td><td>25</td><td>10</td><td>1</td><td>1</td><td>4</td><td>0</td><td>212</td><td>103</td><td>41</td><td>28</td><td>9</td><td>0</td><td>2</td><td>1</td><td>1</td><td>226</td><td>109</td><td>438</td><td>694</td><td>1132</td></tr>
<tr><td>Stars</td><td>82</td><td>37</td><td>36</td><td>2</td><td>3</td><td>3</td><td>1</td><td>330</td><td>271</td><td>41</td><td>17</td><td>20</td><td>1</td><td>1</td><td>1</td><td>1</td><td>143</td><td>137</td><td>41</td><td>20</td><td>16</td><td>1</td><td>2</td><td>2</td><td>0</td><td>187</td><td>134</td><td>330</td><td>471</td><td>801</td></tr>
<tr><td>Wild</td><td>82</td><td>6</td><td>70</td><td>4</td><td>2</td><td>0</td><td>0</td><td>162</td><td>612</td><td>41</td><td>3</td><td>36</td><td>1</td><td>1</td><td>0</td><td>0</td><td>73</td><td>302</td><td>41</td><td>3</td><td>34</td><td>3</td><td>1</td><td>0</td><td>0</td><td>89</td><td>310</td><td>162</td><td>316</td><td>478</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Eagles</td><td>COL</td><td>67</td><td>42</td><td>36</td><td>4</td><td>1793</td><td>592</td><td>632</td><td>560</td><td>9</td><td>4279</td><td>1268</td><td>276</td><td>1233</td><td>167</td><td>16</td><td>9.58%</td><td>123</td><td>30</td><td>75.61%</td><td>0</td><td>30.62%</td><td>35.41%</td><td>28.27%</td><td>3096</td><td>1000</td><td>832</td><td>556</td><td>663</td><td>303</td><td>0</td><td>2</td></tr>
<tr><td>IceHogs</td><td>RCK</td><td>155</td><td>126</td><td>87</td><td>5</td><td>2614</td><td>853</td><td>898</td><td>850</td><td>24</td><td>1385</td><td>394</td><td>742</td><td>1534</td><td>344</td><td>58</td><td>16.86%</td><td>330</td><td>28</td><td>91.52%</td><td>4</td><td>55.45%</td><td>63.64%</td><td>65.56%</td><td>1481</td><td>2548</td><td>913</td><td>473</td><td>1963</td><td>518</td><td>24</td><td>0</td></tr>
<tr><td>Monsters</td><td>CLE</td><td>144</td><td>108</td><td>87</td><td>8</td><td>2472</td><td>792</td><td>813</td><td>840</td><td>70</td><td>1487</td><td>404</td><td>863</td><td>1650</td><td>353</td><td>60</td><td>17.00%</td><td>366</td><td>44</td><td>87.98%</td><td>3</td><td>51.14%</td><td>58.65%</td><td>58.99%</td><td>1572</td><td>2479</td><td>926</td><td>491</td><td>1890</td><td>508</td><td>10</td><td>0</td></tr>
<tr><td>Rampage </td><td>SAR</td><td>64</td><td>42</td><td>46</td><td>1</td><td>1828</td><td>627</td><td>566</td><td>634</td><td>1</td><td>3986</td><td>1113</td><td>275</td><td>1244</td><td>206</td><td>16</td><td>7.77%</td><td>120</td><td>33</td><td>72.50%</td><td>1</td><td>28.66%</td><td>33.52%</td><td>28.80%</td><td>3021</td><td>1049</td><td>851</td><td>569</td><td>698</td><td>310</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>PRO</td><td>108</td><td>82</td><td>70</td><td>9</td><td>2019</td><td>673</td><td>678</td><td>656</td><td>29</td><td>1451</td><td>423</td><td>1217</td><td>1796</td><td>315</td><td>54</td><td>17.14%</td><td>515</td><td>69</td><td>86.60%</td><td>13</td><td>55.99%</td><td>60.75%</td><td>60.84%</td><td>1642</td><td>2330</td><td>987</td><td>528</td><td>1683</td><td>542</td><td>15</td><td>0</td></tr>
<tr><td>Rocket</td><td>LAV</td><td>73</td><td>93</td><td>80</td><td>18</td><td>1633</td><td>490</td><td>557</td><td>565</td><td>51</td><td>1752</td><td>476</td><td>966</td><td>1641</td><td>331</td><td>59</td><td>17.82%</td><td>384</td><td>44</td><td>88.54%</td><td>5</td><td>50.36%</td><td>56.38%</td><td>52.17%</td><td>1718</td><td>2314</td><td>946</td><td>512</td><td>1715</td><td>508</td><td>7</td><td>0</td></tr>
<tr><td>Comets</td><td>UTI</td><td>143</td><td>97</td><td>103</td><td>9</td><td>2315</td><td>806</td><td>686</td><td>803</td><td>49</td><td>1237</td><td>354</td><td>888</td><td>1525</td><td>349</td><td>57</td><td>16.33%</td><td>373</td><td>33</td><td>91.15%</td><td>7</td><td>58.26%</td><td>63.21%</td><td>62.48%</td><td>1438</td><td>2597</td><td>921</td><td>477</td><td>1982</td><td>526</td><td>23</td><td>1</td></tr>
<tr><td>Bears</td><td>HER</td><td>65</td><td>62</td><td>57</td><td>0</td><td>1946</td><td>642</td><td>612</td><td>692</td><td>0</td><td>3726</td><td>1106</td><td>381</td><td>1342</td><td>232</td><td>17</td><td>7.33%</td><td>171</td><td>50</td><td>70.76%</td><td>0</td><td>29.03%</td><td>31.51%</td><td>28.96%</td><td>2895</td><td>1167</td><td>858</td><td>561</td><td>792</td><td>331</td><td>0</td><td>0</td></tr>
<tr><td>Roadrunners</td><td>TUC</td><td>85</td><td>74</td><td>57</td><td>0</td><td>2200</td><td>706</td><td>786</td><td>703</td><td>8</td><td>3151</td><td>892</td><td>453</td><td>1311</td><td>274</td><td>30</td><td>10.95%</td><td>199</td><td>59</td><td>70.35%</td><td>0</td><td>38.76%</td><td>42.65%</td><td>42.86%</td><td>2575</td><td>1472</td><td>882</td><td>552</td><td>1049</td><td>372</td><td>1</td><td>0</td></tr>
<tr><td>Devils</td><td>BNG</td><td>138</td><td>116</td><td>84</td><td>5</td><td>2569</td><td>801</td><td>864</td><td>895</td><td>22</td><td>1894</td><td>554</td><td>660</td><td>1490</td><td>355</td><td>47</td><td>13.24%</td><td>266</td><td>66</td><td>75.19%</td><td>1</td><td>41.43%</td><td>51.01%</td><td>48.98%</td><td>1764</td><td>2315</td><td>878</td><td>486</td><td>1795</td><td>457</td><td>3</td><td>1</td></tr>
<tr><td>Gulls</td><td>SDG</td><td>122</td><td>98</td><td>88</td><td>14</td><td>2465</td><td>770</td><td>850</td><td>824</td><td>59</td><td>2217</td><td>630</td><td>548</td><td>1374</td><td>323</td><td>55</td><td>17.03%</td><td>245</td><td>36</td><td>85.31%</td><td>4</td><td>51.08%</td><td>56.32%</td><td>53.00%</td><td>2054</td><td>2001</td><td>919</td><td>528</td><td>1486</td><td>455</td><td>4</td><td>1</td></tr>
<tr><td>Heat</td><td>STK</td><td>153</td><td>82</td><td>90</td><td>7</td><td>2226</td><td>715</td><td>739</td><td>753</td><td>36</td><td>1490</td><td>450</td><td>937</td><td>1714</td><td>327</td><td>57</td><td>17.43%</td><td>387</td><td>65</td><td>83.20%</td><td>7</td><td>46.42%</td><td>56.38%</td><td>54.38%</td><td>1603</td><td>2425</td><td>932</td><td>499</td><td>1827</td><td>506</td><td>13</td><td>0</td></tr>
<tr><td>Phantoms</td><td>LVP</td><td>134</td><td>86</td><td>93</td><td>10</td><td>2248</td><td>782</td><td>685</td><td>758</td><td>30</td><td>1485</td><td>452</td><td>1036</td><td>1613</td><td>354</td><td>59</td><td>16.67%</td><td>438</td><td>68</td><td>84.47%</td><td>11</td><td>63.11%</td><td>69.54%</td><td>67.39%</td><td>1566</td><td>2431</td><td>956</td><td>507</td><td>1812</td><td>531</td><td>8</td><td>0</td></tr>
<tr><td>Wolves</td><td>CHI</td><td>121</td><td>86</td><td>93</td><td>6</td><td>1990</td><td>667</td><td>622</td><td>693</td><td>32</td><td>1576</td><td>455</td><td>822</td><td>1611</td><td>333</td><td>72</td><td>21.62%</td><td>346</td><td>32</td><td>90.75%</td><td>8</td><td>54.87%</td><td>59.96%</td><td>61.04%</td><td>1682</td><td>2319</td><td>951</td><td>508</td><td>1717</td><td>519</td><td>17</td><td>0</td></tr>
<tr><td>Checkers</td><td>CHR</td><td>135</td><td>120</td><td>82</td><td>5</td><td>2300</td><td>754</td><td>764</td><td>768</td><td>17</td><td>1705</td><td>516</td><td>681</td><td>1479</td><td>369</td><td>48</td><td>13.01%</td><td>267</td><td>63</td><td>76.40%</td><td>3</td><td>48.33%</td><td>57.20%</td><td>55.91%</td><td>1629</td><td>2427</td><td>882</td><td>475</td><td>1888</td><td>476</td><td>11</td><td>0</td></tr>
<tr><td>Sound Tigers</td><td>BPT</td><td>74</td><td>47</td><td>21</td><td>0</td><td>1811</td><td>612</td><td>624</td><td>575</td><td>0</td><td>4103</td><td>1150</td><td>282</td><td>1139</td><td>205</td><td>20</td><td>9.76%</td><td>117</td><td>24</td><td>79.49%</td><td>0</td><td>30.21%</td><td>34.24%</td><td>29.54%</td><td>3096</td><td>997</td><td>826</td><td>561</td><td>666</td><td>301</td><td>0</td><td>0</td></tr>
<tr><td>Moose</td><td>MAN</td><td>156</td><td>104</td><td>91</td><td>10</td><td>2336</td><td>792</td><td>757</td><td>774</td><td>45</td><td>1345</td><td>362</td><td>1039</td><td>1704</td><td>332</td><td>69</td><td>20.78%</td><td>428</td><td>53</td><td>87.62%</td><td>13</td><td>65.78%</td><td>69.76%</td><td>68.58%</td><td>1431</td><td>2592</td><td>942</td><td>482</td><td>1960</td><td>539</td><td>16</td><td>1</td></tr>
<tr><td>Reign</td><td>ONT</td><td>105</td><td>94</td><td>59</td><td>1</td><td>1961</td><td>600</td><td>695</td><td>653</td><td>19</td><td>2534</td><td>652</td><td>655</td><td>1538</td><td>287</td><td>49</td><td>17.07%</td><td>264</td><td>49</td><td>81.44%</td><td>5</td><td>43.49%</td><td>47.97%</td><td>44.14%</td><td>2220</td><td>1819</td><td>899</td><td>529</td><td>1327</td><td>425</td><td>2</td><td>1</td></tr>
<tr><td>Crunch</td><td>SYR</td><td>129</td><td>107</td><td>81</td><td>8</td><td>2561</td><td>827</td><td>866</td><td>849</td><td>32</td><td>2151</td><td>626</td><td>662</td><td>1598</td><td>312</td><td>48</td><td>15.38%</td><td>268</td><td>40</td><td>85.07%</td><td>6</td><td>35.73%</td><td>39.49%</td><td>38.54%</td><td>2081</td><td>1963</td><td>916</td><td>535</td><td>1448</td><td>445</td><td>9</td><td>0</td></tr>
<tr><td>Marlies</td><td>TOR</td><td>115</td><td>82</td><td>99</td><td>3</td><td>2134</td><td>721</td><td>688</td><td>714</td><td>19</td><td>1498</td><td>453</td><td>1303</td><td>1799</td><td>308</td><td>46</td><td>14.94%</td><td>575</td><td>69</td><td>88.00%</td><td>5</td><td>61.31%</td><td>68.54%</td><td>67.43%</td><td>1613</td><td>2391</td><td>941</td><td>512</td><td>1772</td><td>511</td><td>13</td><td>0</td></tr>
<tr><td>Condors</td><td>BKR</td><td>140</td><td>141</td><td>88</td><td>8</td><td>2452</td><td>725</td><td>913</td><td>797</td><td>34</td><td>1301</td><td>397</td><td>1175</td><td>1713</td><td>346</td><td>42</td><td>12.14%</td><td>470</td><td>62</td><td>86.81%</td><td>11</td><td>60.01%</td><td>67.16%</td><td>67.99%</td><td>1484</td><td>2554</td><td>915</td><td>478</td><td>1955</td><td>518</td><td>12</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>SPR</td><td>143</td><td>112</td><td>90</td><td>9</td><td>2227</td><td>732</td><td>746</td><td>736</td><td>29</td><td>1437</td><td>396</td><td>909</td><td>1526</td><td>349</td><td>58</td><td>16.62%</td><td>376</td><td>46</td><td>87.77%</td><td>7</td><td>61.10%</td><td>65.32%</td><td>62.73%</td><td>1526</td><td>2511</td><td>922</td><td>477</td><td>1908</td><td>516</td><td>16</td><td>0</td></tr>
<tr><td>Penguins</td><td>WBS</td><td>164</td><td>108</td><td>99</td><td>4</td><td>2578</td><td>860</td><td>811</td><td>897</td><td>24</td><td>2056</td><td>560</td><td>648</td><td>1482</td><td>350</td><td>56</td><td>16.00%</td><td>262</td><td>45</td><td>82.82%</td><td>3</td><td>47.14%</td><td>54.22%</td><td>55.44%</td><td>1912</td><td>2167</td><td>867</td><td>499</td><td>1674</td><td>437</td><td>3</td><td>0</td></tr>
<tr><td>Admirals</td><td>MIL</td><td>183</td><td>145</td><td>128</td><td>5</td><td>3120</td><td>1037</td><td>1056</td><td>1008</td><td>32</td><td>1520</td><td>416</td><td>809</td><td>1458</td><td>326</td><td>56</td><td>17.18%</td><td>314</td><td>46</td><td>85.35%</td><td>7</td><td>60.73%</td><td>66.20%</td><td>64.66%</td><td>1551</td><td>2526</td><td>879</td><td>470</td><td>1984</td><td>481</td><td>12</td><td>1</td></tr>
<tr><td>Wolf Pack</td><td>HFD</td><td>66</td><td>46</td><td>31</td><td>0</td><td>1664</td><td>534</td><td>584</td><td>546</td><td>0</td><td>4212</td><td>1174</td><td>314</td><td>1173</td><td>209</td><td>19</td><td>9.09%</td><td>133</td><td>38</td><td>71.43%</td><td>1</td><td>29.32%</td><td>32.72%</td><td>27.11%</td><td>3112</td><td>987</td><td>822</td><td>563</td><td>654</td><td>296</td><td>0</td><td>0</td></tr>
<tr><td>Griffins</td><td>GRP</td><td>118</td><td>84</td><td>72</td><td>5</td><td>2423</td><td>754</td><td>812</td><td>839</td><td>48</td><td>2570</td><td>714</td><td>487</td><td>1272</td><td>316</td><td>57</td><td>18.04%</td><td>195</td><td>38</td><td>80.51%</td><td>0</td><td>43.71%</td><td>50.24%</td><td>49.49%</td><td>2330</td><td>1731</td><td>898</td><td>551</td><td>1273</td><td>409</td><td>4</td><td>1</td></tr>
<tr><td> Americans</td><td>ROC</td><td>138</td><td>120</td><td>95</td><td>13</td><td>2510</td><td>775</td><td>865</td><td>831</td><td>61</td><td>1372</td><td>379</td><td>1109</td><td>1619</td><td>358</td><td>47</td><td>13.13%</td><td>458</td><td>56</td><td>87.77%</td><td>6</td><td>61.11%</td><td>64.81%</td><td>67.52%</td><td>1540</td><td>2491</td><td>940</td><td>505</td><td>1868</td><td>521</td><td>16</td><td>1</td></tr>
<tr><td>Senators</td><td>BEL</td><td>102</td><td>90</td><td>75</td><td>3</td><td>2259</td><td>715</td><td>772</td><td>761</td><td>19</td><td>2247</td><td>683</td><td>748</td><td>1715</td><td>297</td><td>48</td><td>16.16%</td><td>326</td><td>36</td><td>88.96%</td><td>5</td><td>39.77%</td><td>44.58%</td><td>44.22%</td><td>2075</td><td>1960</td><td>904</td><td>524</td><td>1441</td><td>443</td><td>4</td><td>0</td></tr>
<tr><td>Barracudas</td><td>SJB</td><td>188</td><td>142</td><td>102</td><td>9</td><td>2912</td><td>945</td><td>956</td><td>1000</td><td>35</td><td>1987</td><td>593</td><td>783</td><td>1621</td><td>331</td><td>68</td><td>20.54%</td><td>312</td><td>59</td><td>81.09%</td><td>1</td><td>35.41%</td><td>43.87%</td><td>39.97%</td><td>1921</td><td>2146</td><td>892</td><td>506</td><td>1634</td><td>456</td><td>8</td><td>1</td></tr>
<tr><td>Stars</td><td>TEX</td><td>150</td><td>96</td><td>79</td><td>6</td><td>2593</td><td>896</td><td>853</td><td>833</td><td>27</td><td>2295</td><td>683</td><td>592</td><td>1411</td><td>276</td><td>52</td><td>18.84%</td><td>224</td><td>28</td><td>87.50%</td><td>5</td><td>49.38%</td><td>56.50%</td><td>53.66%</td><td>2052</td><td>2029</td><td>871</td><td>503</td><td>1565</td><td>421</td><td>3</td><td>2</td></tr>
<tr><td>Wild</td><td>IOA</td><td>55</td><td>51</td><td>52</td><td>4</td><td>1743</td><td>542</td><td>534</td><td>652</td><td>15</td><td>4453</td><td>1268</td><td>331</td><td>1097</td><td>161</td><td>11</td><td>6.83%</td><td>143</td><td>42</td><td>70.63%</td><td>0</td><td>30.14%</td><td>33.52%</td><td>28.09%</td><td>3074</td><td>1015</td><td>842</td><td>572</td><td>673</td><td>311</td><td>0</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.60</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Admirals</td><td>5.60</td></tr>
<tr><td>2</td><td>Barracudas</td><td>5.34</td></tr>
<tr><td>3</td><td>Condors</td><td>4.56</td></tr>
<tr><td>4</td><td>Penguins</td><td>4.55</td></tr>
<tr><td>5</td><td>IceHogs</td><td>4.52</td></tr>
<tr><td>6</td><td> Americans</td><td>4.41</td></tr>
<tr><td>7</td><td>Moose</td><td>4.37</td></tr>
<tr><td>8</td><td>Thunderbirds</td><td>4.28</td></tr>
<tr><td>9</td><td>Comets</td><td>4.23</td></tr>
<tr><td>10</td><td>Monsters</td><td>4.18</td></tr>
<tr><td>11</td><td>Checkers</td><td>4.17</td></tr>
<tr><td>12</td><td>Devils</td><td>4.16</td></tr>
<tr><td>13</td><td>Heat</td><td>4.04</td></tr>
<tr><td>14</td><td>Stars</td><td>4.02</td></tr>
<tr><td>15</td><td>Crunch</td><td>3.95</td></tr>
<tr><td>16</td><td>Phantoms</td><td>3.91</td></tr>
<tr><td>17</td><td>Gulls</td><td>3.85</td></tr>
<tr><td>18</td><td>Wolves</td><td>3.70</td></tr>
<tr><td>19</td><td>Marlies</td><td>3.63</td></tr>
<tr><td>20</td><td>Griffins</td><td>3.38</td></tr>
<tr><td>21</td><td>Senators</td><td>3.28</td></tr>
<tr><td>22</td><td>Bruins</td><td>3.23</td></tr>
<tr><td>23</td><td>Reign</td><td>3.16</td></tr>
<tr><td>24</td><td>Rocket</td><td>3.13</td></tr>
<tr><td>25</td><td>Roadrunners</td><td>2.63</td></tr>
<tr><td>26</td><td>Bears</td><td>2.24</td></tr>
<tr><td>27</td><td>Wild</td><td>1.98</td></tr>
<tr><td>28</td><td>Rampage </td><td>1.87</td></tr>
<tr><td>29</td><td>Eagles</td><td>1.82</td></tr>
<tr><td>30</td><td>Wolf Pack</td><td>1.74</td></tr>
<tr><td>31</td><td>Sound Tigers</td><td>1.73</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.60</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Comets</td><td>1.46</td></tr>
<tr><td>2</td><td>IceHogs</td><td>1.56</td></tr>
<tr><td>3</td><td>Moose</td><td>1.83</td></tr>
<tr><td>4</td><td>Wolves</td><td>1.89</td></tr>
<tr><td>5</td><td>Thunderbirds</td><td>1.95</td></tr>
<tr><td>6</td><td>Marlies</td><td>2.01</td></tr>
<tr><td>7</td><td>Condors</td><td>2.04</td></tr>
<tr><td>8</td><td>Bruins</td><td>2.07</td></tr>
<tr><td>9</td><td>Admirals</td><td>2.10</td></tr>
<tr><td>10</td><td> Americans</td><td>2.12</td></tr>
<tr><td>11</td><td>Monsters</td><td>2.15</td></tr>
<tr><td>12</td><td>Heat</td><td>2.40</td></tr>
<tr><td>13</td><td>Rocket</td><td>2.57</td></tr>
<tr><td>14</td><td>Barracudas</td><td>2.59</td></tr>
<tr><td>15</td><td>Phantoms</td><td>2.85</td></tr>
<tr><td>16</td><td>Penguins</td><td>2.87</td></tr>
<tr><td>17</td><td>Senators</td><td>3.16</td></tr>
<tr><td>18</td><td>Checkers</td><td>3.17</td></tr>
<tr><td>19</td><td>Crunch</td><td>3.20</td></tr>
<tr><td>20</td><td>Stars</td><td>3.30</td></tr>
<tr><td>21</td><td>Griffins</td><td>3.35</td></tr>
<tr><td>22</td><td>Gulls</td><td>3.39</td></tr>
<tr><td>23</td><td>Devils</td><td>4.05</td></tr>
<tr><td>24</td><td>Reign</td><td>4.21</td></tr>
<tr><td>25</td><td>Roadrunners</td><td>6.38</td></tr>
<tr><td>26</td><td>Bears</td><td>6.70</td></tr>
<tr><td>27</td><td>Sound Tigers</td><td>7.05</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>7.18</td></tr>
<tr><td>29</td><td>Eagles</td><td>7.29</td></tr>
<tr><td>30</td><td>Rampage </td><td>7.33</td></tr>
<tr><td>31</td><td>Wild</td><td>7.46</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>IceHogs</td><td>289.84%</td></tr>
<tr><td>2</td><td>Comets</td><td>289.17%</td></tr>
<tr><td>3</td><td>Admirals</td><td>266.86%</td></tr>
<tr><td>4</td><td>Moose</td><td>238.67%</td></tr>
<tr><td>5</td><td>Condors</td><td>223.95%</td></tr>
<tr><td>6</td><td>Thunderbirds</td><td>219.38%</td></tr>
<tr><td>7</td><td> Americans</td><td>208.05%</td></tr>
<tr><td>8</td><td>Barracudas</td><td>206.60%</td></tr>
<tr><td>9</td><td>Wolves</td><td>195.48%</td></tr>
<tr><td>10</td><td>Monsters</td><td>194.89%</td></tr>
<tr><td>11</td><td>Marlies</td><td>180.61%</td></tr>
<tr><td>12</td><td>Heat</td><td>168.02%</td></tr>
<tr><td>13</td><td>Penguins</td><td>158.72%</td></tr>
<tr><td>14</td><td>Bruins</td><td>155.88%</td></tr>
<tr><td>15</td><td>Phantoms</td><td>137.18%</td></tr>
<tr><td>16</td><td>Checkers</td><td>131.54%</td></tr>
<tr><td>17</td><td>Crunch</td><td>123.66%</td></tr>
<tr><td>18</td><td>Rocket</td><td>121.80%</td></tr>
<tr><td>19</td><td>Stars</td><td>121.77%</td></tr>
<tr><td>20</td><td>Gulls</td><td>113.67%</td></tr>
<tr><td>21</td><td>Senators</td><td>103.86%</td></tr>
<tr><td>22</td><td>Devils</td><td>102.71%</td></tr>
<tr><td>23</td><td>Griffins</td><td>100.73%</td></tr>
<tr><td>24</td><td>Reign</td><td>75.07%</td></tr>
<tr><td>25</td><td>Roadrunners</td><td>41.30%</td></tr>
<tr><td>26</td><td>Bears</td><td>33.52%</td></tr>
<tr><td>27</td><td>Wild</td><td>26.47%</td></tr>
<tr><td>28</td><td>Rampage </td><td>25.46%</td></tr>
<tr><td>29</td><td>Eagles</td><td>24.92%</td></tr>
<tr><td>30</td><td>Sound Tigers</td><td>24.57%</td></tr>
<tr><td>31</td><td>Wolf Pack</td><td>24.28%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 15.44%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wolves</td><td>21.62%</td></tr>
<tr><td>2</td><td>Moose</td><td>20.78%</td></tr>
<tr><td>3</td><td>Barracudas</td><td>20.54%</td></tr>
<tr><td>4</td><td>Stars</td><td>18.84%</td></tr>
<tr><td>5</td><td>Griffins</td><td>18.04%</td></tr>
<tr><td>6</td><td>Rocket</td><td>17.82%</td></tr>
<tr><td>7</td><td>Heat</td><td>17.43%</td></tr>
<tr><td>8</td><td>Admirals</td><td>17.18%</td></tr>
<tr><td>9</td><td>Bruins</td><td>17.14%</td></tr>
<tr><td>10</td><td>Reign</td><td>17.07%</td></tr>
<tr><td>11</td><td>Gulls</td><td>17.03%</td></tr>
<tr><td>12</td><td>Monsters</td><td>17.00%</td></tr>
<tr><td>13</td><td>IceHogs</td><td>16.86%</td></tr>
<tr><td>14</td><td>Phantoms</td><td>16.67%</td></tr>
<tr><td>15</td><td>Thunderbirds</td><td>16.62%</td></tr>
<tr><td>16</td><td>Comets</td><td>16.33%</td></tr>
<tr><td>17</td><td>Senators</td><td>16.16%</td></tr>
<tr><td>18</td><td>Penguins</td><td>16.00%</td></tr>
<tr><td>19</td><td>Crunch</td><td>15.38%</td></tr>
<tr><td>20</td><td>Marlies</td><td>14.94%</td></tr>
<tr><td>21</td><td>Devils</td><td>13.24%</td></tr>
<tr><td>22</td><td> Americans</td><td>13.13%</td></tr>
<tr><td>23</td><td>Checkers</td><td>13.01%</td></tr>
<tr><td>24</td><td>Condors</td><td>12.14%</td></tr>
<tr><td>25</td><td>Roadrunners</td><td>10.95%</td></tr>
<tr><td>26</td><td>Sound Tigers</td><td>9.76%</td></tr>
<tr><td>27</td><td>Eagles</td><td>9.58%</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>9.09%</td></tr>
<tr><td>29</td><td>Rampage </td><td>7.77%</td></tr>
<tr><td>30</td><td>Bears</td><td>7.33%</td></tr>
<tr><td>31</td><td>Wild</td><td>6.83%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 84.56%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>IceHogs</td><td>91.52%</td></tr>
<tr><td>2</td><td>Comets</td><td>91.15%</td></tr>
<tr><td>3</td><td>Wolves</td><td>90.75%</td></tr>
<tr><td>4</td><td>Senators</td><td>88.96%</td></tr>
<tr><td>5</td><td>Rocket</td><td>88.54%</td></tr>
<tr><td>6</td><td>Marlies</td><td>88.00%</td></tr>
<tr><td>7</td><td>Monsters</td><td>87.98%</td></tr>
<tr><td>8</td><td> Americans</td><td>87.77%</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>87.77%</td></tr>
<tr><td>10</td><td>Moose</td><td>87.62%</td></tr>
<tr><td>11</td><td>Stars</td><td>87.50%</td></tr>
<tr><td>12</td><td>Condors</td><td>86.81%</td></tr>
<tr><td>13</td><td>Bruins</td><td>86.60%</td></tr>
<tr><td>14</td><td>Admirals</td><td>85.35%</td></tr>
<tr><td>15</td><td>Gulls</td><td>85.31%</td></tr>
<tr><td>16</td><td>Crunch</td><td>85.07%</td></tr>
<tr><td>17</td><td>Phantoms</td><td>84.47%</td></tr>
<tr><td>18</td><td>Heat</td><td>83.20%</td></tr>
<tr><td>19</td><td>Penguins</td><td>82.82%</td></tr>
<tr><td>20</td><td>Reign</td><td>81.44%</td></tr>
<tr><td>21</td><td>Barracudas</td><td>81.09%</td></tr>
<tr><td>22</td><td>Griffins</td><td>80.51%</td></tr>
<tr><td>23</td><td>Sound Tigers</td><td>79.49%</td></tr>
<tr><td>24</td><td>Checkers</td><td>76.40%</td></tr>
<tr><td>25</td><td>Eagles</td><td>75.61%</td></tr>
<tr><td>26</td><td>Devils</td><td>75.19%</td></tr>
<tr><td>27</td><td>Rampage </td><td>72.50%</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>71.43%</td></tr>
<tr><td>29</td><td>Bears</td><td>70.76%</td></tr>
<tr><td>30</td><td>Wild</td><td>70.63%</td></tr>
<tr><td>31</td><td>Roadrunners</td><td>70.35%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wolves</td><td>112.37%</td></tr>
<tr><td>2</td><td>Moose</td><td>108.40%</td></tr>
<tr><td>3</td><td>IceHogs</td><td>108.38%</td></tr>
<tr><td>4</td><td>Comets</td><td>107.49%</td></tr>
<tr><td>5</td><td>Rocket</td><td>106.37%</td></tr>
<tr><td>6</td><td>Stars</td><td>106.34%</td></tr>
<tr><td>7</td><td>Senators</td><td>105.12%</td></tr>
<tr><td>8</td><td>Monsters</td><td>104.98%</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>104.38%</td></tr>
<tr><td>10</td><td>Bruins</td><td>103.74%</td></tr>
<tr><td>11</td><td>Marlies</td><td>102.94%</td></tr>
<tr><td>12</td><td>Admirals</td><td>102.53%</td></tr>
<tr><td>13</td><td>Gulls</td><td>102.33%</td></tr>
<tr><td>14</td><td>Barracudas</td><td>101.63%</td></tr>
<tr><td>15</td><td>Phantoms</td><td>101.14%</td></tr>
<tr><td>16</td><td> Americans</td><td>100.90%</td></tr>
<tr><td>17</td><td>Heat</td><td>100.64%</td></tr>
<tr><td>18</td><td>Crunch</td><td>100.46%</td></tr>
<tr><td>19</td><td>Condors</td><td>98.95%</td></tr>
<tr><td>20</td><td>Penguins</td><td>98.82%</td></tr>
<tr><td>21</td><td>Griffins</td><td>98.55%</td></tr>
<tr><td>22</td><td>Reign</td><td>98.51%</td></tr>
<tr><td>23</td><td>Checkers</td><td>89.41%</td></tr>
<tr><td>24</td><td>Sound Tigers</td><td>89.24%</td></tr>
<tr><td>25</td><td>Devils</td><td>88.43%</td></tr>
<tr><td>26</td><td>Eagles</td><td>85.19%</td></tr>
<tr><td>27</td><td>Roadrunners</td><td>81.30%</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>80.52%</td></tr>
<tr><td>29</td><td>Rampage </td><td>80.27%</td></tr>
<tr><td>30</td><td>Bears</td><td>78.09%</td></tr>
<tr><td>31</td><td>Wild</td><td>77.46%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 27.50</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Admirals</td><td>38.05</td></tr>
<tr><td>2</td><td>Barracudas</td><td>35.51</td></tr>
<tr><td>3</td><td>IceHogs</td><td>31.88</td></tr>
<tr><td>4</td><td>Stars</td><td>31.62</td></tr>
<tr><td>5</td><td>Penguins</td><td>31.44</td></tr>
<tr><td>6</td><td>Devils</td><td>31.33</td></tr>
<tr><td>7</td><td>Crunch</td><td>31.23</td></tr>
<tr><td>8</td><td> Americans</td><td>30.61</td></tr>
<tr><td>9</td><td>Monsters</td><td>30.15</td></tr>
<tr><td>10</td><td>Gulls</td><td>30.06</td></tr>
<tr><td>11</td><td>Condors</td><td>29.90</td></tr>
<tr><td>12</td><td>Griffins</td><td>29.55</td></tr>
<tr><td>13</td><td>Moose</td><td>28.49</td></tr>
<tr><td>14</td><td>Comets</td><td>28.23</td></tr>
<tr><td>15</td><td>Checkers</td><td>28.05</td></tr>
<tr><td>16</td><td>Senators</td><td>27.55</td></tr>
<tr><td>17</td><td>Phantoms</td><td>27.41</td></tr>
<tr><td>18</td><td>Thunderbirds</td><td>27.16</td></tr>
<tr><td>19</td><td>Heat</td><td>27.15</td></tr>
<tr><td>20</td><td>Roadrunners</td><td>26.83</td></tr>
<tr><td>21</td><td>Marlies</td><td>26.02</td></tr>
<tr><td>22</td><td>Bruins</td><td>24.62</td></tr>
<tr><td>23</td><td>Wolves</td><td>24.27</td></tr>
<tr><td>24</td><td>Reign</td><td>23.91</td></tr>
<tr><td>25</td><td>Bears</td><td>23.73</td></tr>
<tr><td>26</td><td>Rampage </td><td>22.29</td></tr>
<tr><td>27</td><td>Sound Tigers</td><td>22.09</td></tr>
<tr><td>28</td><td>Eagles</td><td>21.87</td></tr>
<tr><td>29</td><td>Wild</td><td>21.26</td></tr>
<tr><td>30</td><td>Wolf Pack</td><td>20.29</td></tr>
<tr><td>31</td><td>Rocket</td><td>19.91</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 27.50</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Comets</td><td>15.09</td></tr>
<tr><td>2</td><td>Condors</td><td>15.87</td></tr>
<tr><td>3</td><td>Moose</td><td>16.40</td></tr>
<tr><td>4</td><td> Americans</td><td>16.73</td></tr>
<tr><td>5</td><td>IceHogs</td><td>16.89</td></tr>
<tr><td>6</td><td>Thunderbirds</td><td>17.52</td></tr>
<tr><td>7</td><td>Bruins</td><td>17.70</td></tr>
<tr><td>8</td><td>Phantoms</td><td>18.11</td></tr>
<tr><td>9</td><td>Monsters</td><td>18.13</td></tr>
<tr><td>10</td><td>Heat</td><td>18.17</td></tr>
<tr><td>11</td><td>Marlies</td><td>18.27</td></tr>
<tr><td>12</td><td>Admirals</td><td>18.54</td></tr>
<tr><td>13</td><td>Wolves</td><td>19.22</td></tr>
<tr><td>14</td><td>Checkers</td><td>20.79</td></tr>
<tr><td>15</td><td>Rocket</td><td>21.37</td></tr>
<tr><td>16</td><td>Devils</td><td>23.10</td></tr>
<tr><td>17</td><td>Barracudas</td><td>24.23</td></tr>
<tr><td>18</td><td>Penguins</td><td>25.07</td></tr>
<tr><td>19</td><td>Crunch</td><td>26.23</td></tr>
<tr><td>20</td><td>Gulls</td><td>27.04</td></tr>
<tr><td>21</td><td>Senators</td><td>27.40</td></tr>
<tr><td>22</td><td>Stars</td><td>27.99</td></tr>
<tr><td>23</td><td>Reign</td><td>30.90</td></tr>
<tr><td>24</td><td>Griffins</td><td>31.34</td></tr>
<tr><td>25</td><td>Roadrunners</td><td>38.43</td></tr>
<tr><td>26</td><td>Bears</td><td>45.44</td></tr>
<tr><td>27</td><td>Rampage </td><td>48.61</td></tr>
<tr><td>28</td><td>Sound Tigers</td><td>50.04</td></tr>
<tr><td>29</td><td>Wolf Pack</td><td>51.37</td></tr>
<tr><td>30</td><td>Eagles</td><td>52.18</td></tr>
<tr><td>31</td><td>Wild</td><td>54.30</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Admirals</td><td>205.26%</td></tr>
<tr><td>2</td><td>IceHogs</td><td>188.74%</td></tr>
<tr><td>3</td><td>Condors</td><td>188.47%</td></tr>
<tr><td>4</td><td>Comets</td><td>187.15%</td></tr>
<tr><td>5</td><td> Americans</td><td>182.94%</td></tr>
<tr><td>6</td><td>Moose</td><td>173.68%</td></tr>
<tr><td>7</td><td>Monsters</td><td>166.24%</td></tr>
<tr><td>8</td><td>Thunderbirds</td><td>154.98%</td></tr>
<tr><td>9</td><td>Phantoms</td><td>151.38%</td></tr>
<tr><td>10</td><td>Heat</td><td>149.40%</td></tr>
<tr><td>11</td><td>Barracudas</td><td>146.55%</td></tr>
<tr><td>12</td><td>Marlies</td><td>142.46%</td></tr>
<tr><td>13</td><td>Bruins</td><td>139.15%</td></tr>
<tr><td>14</td><td>Devils</td><td>135.64%</td></tr>
<tr><td>15</td><td>Checkers</td><td>134.90%</td></tr>
<tr><td>16</td><td>Wolves</td><td>126.27%</td></tr>
<tr><td>17</td><td>Penguins</td><td>125.39%</td></tr>
<tr><td>18</td><td>Crunch</td><td>119.06%</td></tr>
<tr><td>19</td><td>Stars</td><td>112.98%</td></tr>
<tr><td>20</td><td>Gulls</td><td>111.19%</td></tr>
<tr><td>21</td><td>Senators</td><td>100.53%</td></tr>
<tr><td>22</td><td>Griffins</td><td>94.28%</td></tr>
<tr><td>23</td><td>Rocket</td><td>93.21%</td></tr>
<tr><td>24</td><td>Reign</td><td>77.39%</td></tr>
<tr><td>25</td><td>Roadrunners</td><td>69.82%</td></tr>
<tr><td>26</td><td>Bears</td><td>52.23%</td></tr>
<tr><td>27</td><td>Rampage </td><td>45.86%</td></tr>
<tr><td>28</td><td>Sound Tigers</td><td>44.14%</td></tr>
<tr><td>29</td><td>Eagles</td><td>41.90%</td></tr>
<tr><td>30</td><td>Wolf Pack</td><td>39.51%</td></tr>
<tr><td>31</td><td>Wild</td><td>39.14%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8.89</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rampage </td><td>3.35</td></tr>
<tr><td>2</td><td>Eagles</td><td>3.37</td></tr>
<tr><td>3</td><td>Sound Tigers</td><td>3.44</td></tr>
<tr><td>4</td><td>Wolf Pack</td><td>3.83</td></tr>
<tr><td>5</td><td>Wild</td><td>4.04</td></tr>
<tr><td>6</td><td>Bears</td><td>4.65</td></tr>
<tr><td>7</td><td>Roadrunners</td><td>5.52</td></tr>
<tr><td>8</td><td>Griffins</td><td>5.94</td></tr>
<tr><td>9</td><td>Gulls</td><td>6.68</td></tr>
<tr><td>10</td><td>Stars</td><td>7.22</td></tr>
<tr><td>11</td><td>Penguins</td><td>7.90</td></tr>
<tr><td>12</td><td>Reign</td><td>7.99</td></tr>
<tr><td>13</td><td>Devils</td><td>8.05</td></tr>
<tr><td>14</td><td>Crunch</td><td>8.07</td></tr>
<tr><td>15</td><td>Checkers</td><td>8.30</td></tr>
<tr><td>16</td><td>IceHogs</td><td>9.05</td></tr>
<tr><td>17</td><td>Senators</td><td>9.12</td></tr>
<tr><td>18</td><td>Barracudas</td><td>9.55</td></tr>
<tr><td>19</td><td>Admirals</td><td>9.87</td></tr>
<tr><td>20</td><td>Wolves</td><td>10.02</td></tr>
<tr><td>21</td><td>Monsters</td><td>10.52</td></tr>
<tr><td>22</td><td>Comets</td><td>10.83</td></tr>
<tr><td>23</td><td>Thunderbirds</td><td>11.09</td></tr>
<tr><td>24</td><td>Heat</td><td>11.43</td></tr>
<tr><td>25</td><td>Rocket</td><td>11.78</td></tr>
<tr><td>26</td><td>Phantoms</td><td>12.63</td></tr>
<tr><td>27</td><td>Moose</td><td>12.67</td></tr>
<tr><td>28</td><td> Americans</td><td>13.52</td></tr>
<tr><td>29</td><td>Condors</td><td>14.33</td></tr>
<tr><td>30</td><td>Bruins</td><td>14.84</td></tr>
<tr><td>31</td><td>Marlies</td><td>15.89</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18.26</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Marlies</td><td>21.94</td></tr>
<tr><td>2</td><td>Bruins</td><td>21.90</td></tr>
<tr><td>3</td><td>Senators</td><td>20.91</td></tr>
<tr><td>4</td><td>Heat</td><td>20.90</td></tr>
<tr><td>5</td><td>Condors</td><td>20.89</td></tr>
<tr><td>6</td><td>Moose</td><td>20.78</td></tr>
<tr><td>7</td><td>Monsters</td><td>20.12</td></tr>
<tr><td>8</td><td>Rocket</td><td>20.01</td></tr>
<tr><td>9</td><td>Barracudas</td><td>19.77</td></tr>
<tr><td>10</td><td> Americans</td><td>19.74</td></tr>
<tr><td>11</td><td>Phantoms</td><td>19.67</td></tr>
<tr><td>12</td><td>Wolves</td><td>19.65</td></tr>
<tr><td>13</td><td>Crunch</td><td>19.49</td></tr>
<tr><td>14</td><td>Reign</td><td>18.76</td></tr>
<tr><td>15</td><td>IceHogs</td><td>18.71</td></tr>
<tr><td>16</td><td>Thunderbirds</td><td>18.61</td></tr>
<tr><td>17</td><td>Comets</td><td>18.60</td></tr>
<tr><td>18</td><td>Devils</td><td>18.17</td></tr>
<tr><td>19</td><td>Penguins</td><td>18.07</td></tr>
<tr><td>20</td><td>Checkers</td><td>18.04</td></tr>
<tr><td>21</td><td>Admirals</td><td>17.78</td></tr>
<tr><td>22</td><td>Stars</td><td>17.21</td></tr>
<tr><td>23</td><td>Gulls</td><td>16.76</td></tr>
<tr><td>24</td><td>Bears</td><td>16.37</td></tr>
<tr><td>25</td><td>Roadrunners</td><td>15.99</td></tr>
<tr><td>26</td><td>Griffins</td><td>15.51</td></tr>
<tr><td>27</td><td>Rampage </td><td>15.17</td></tr>
<tr><td>28</td><td>Eagles</td><td>15.04</td></tr>
<tr><td>29</td><td>Wolf Pack</td><td>14.30</td></tr>
<tr><td>30</td><td>Sound Tigers</td><td>13.89</td></tr>
<tr><td>31</td><td>Wild</td><td>13.38</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Moose</td><td>68.13%</td></tr>
<tr><td>2</td><td>Phantoms</td><td>66.93%</td></tr>
<tr><td>3</td><td>Marlies</td><td>65.61%</td></tr>
<tr><td>4</td><td>Condors</td><td>64.96%</td></tr>
<tr><td>5</td><td> Americans</td><td>64.16%</td></tr>
<tr><td>6</td><td>Admirals</td><td>64.09%</td></tr>
<tr><td>7</td><td>Thunderbirds</td><td>63.28%</td></tr>
<tr><td>8</td><td>Comets</td><td>61.34%</td></tr>
<tr><td>9</td><td>IceHogs</td><td>61.28%</td></tr>
<tr><td>10</td><td>Bruins</td><td>59.00%</td></tr>
<tr><td>11</td><td>Wolves</td><td>58.34%</td></tr>
<tr><td>12</td><td>Monsters</td><td>56.10%</td></tr>
<tr><td>13</td><td>Checkers</td><td>53.91%</td></tr>
<tr><td>14</td><td>Gulls</td><td>53.55%</td></tr>
<tr><td>15</td><td>Rocket</td><td>53.06%</td></tr>
<tr><td>16</td><td>Stars</td><td>53.01%</td></tr>
<tr><td>17</td><td>Heat</td><td>52.39%</td></tr>
<tr><td>18</td><td>Penguins</td><td>51.79%</td></tr>
<tr><td>19</td><td>Devils</td><td>47.58%</td></tr>
<tr><td>20</td><td>Griffins</td><td>47.23%</td></tr>
<tr><td>21</td><td>Reign</td><td>45.22%</td></tr>
<tr><td>22</td><td>Senators</td><td>42.59%</td></tr>
<tr><td>23</td><td>Roadrunners</td><td>41.21%</td></tr>
<tr><td>24</td><td>Barracudas</td><td>39.81%</td></tr>
<tr><td>25</td><td>Crunch</td><td>37.82%</td></tr>
<tr><td>26</td><td>Eagles</td><td>31.28%</td></tr>
<tr><td>27</td><td>Sound Tigers</td><td>31.16%</td></tr>
<tr><td>28</td><td>Wild</td><td>30.48%</td></tr>
<tr><td>29</td><td>Rampage </td><td>30.12%</td></tr>
<tr><td>30</td><td>Bears</td><td>29.78%</td></tr>
<tr><td>31</td><td>Wolf Pack</td><td>29.65%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
