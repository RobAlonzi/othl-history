<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Stats</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.0.0 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (min-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(2){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(2){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(2){display:none;}}
@media screen and (max-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(1){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(1){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(1){display:none;}}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSTeamStat_Table2 thead th:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(2){display:none;}
}
@media screen and (max-width: 960px) {
.STHSTeamStat_Table2 thead th:nth-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(8){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(9){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(9){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(9){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(10){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(10){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(10){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(11){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(11){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(3){display:none;}
}
}</style>
<link href="OTHL.css" rel="stylesheet" type="text/css" />
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
<tr><td>Eagles</td><td>82</td><td>11</td><td>64</td><td>2</td><td>3</td><td>1</td><td>1</td><td>211</td><td>552</td><td>41</td><td>7</td><td>31</td><td>1</td><td>2</td><td>0</td><td>0</td><td>111</td><td>275</td><td>41</td><td>4</td><td>33</td><td>1</td><td>1</td><td>1</td><td>1</td><td>100</td><td>277</td><td>211</td><td>413</td><td>624</td></tr>
<tr><td>IceHogs</td><td>82</td><td>70</td><td>9</td><td>1</td><td>1</td><td>0</td><td>1</td><td>513</td><td>161</td><td>41</td><td>35</td><td>5</td><td>0</td><td>1</td><td>0</td><td>0</td><td>291</td><td>79</td><td>41</td><td>35</td><td>4</td><td>1</td><td>0</td><td>0</td><td>1</td><td>222</td><td>82</td><td>513</td><td>897</td><td>1410</td></tr>
<tr><td>Monsters</td><td>82</td><td>62</td><td>13</td><td>1</td><td>0</td><td>1</td><td>5</td><td>458</td><td>175</td><td>41</td><td>32</td><td>5</td><td>0</td><td>0</td><td>1</td><td>3</td><td>237</td><td>78</td><td>41</td><td>30</td><td>8</td><td>1</td><td>0</td><td>0</td><td>2</td><td>221</td><td>97</td><td>458</td><td>799</td><td>1257</td></tr>
<tr><td>Rampage </td><td>82</td><td>13</td><td>62</td><td>2</td><td>2</td><td>2</td><td>1</td><td>232</td><td>529</td><td>41</td><td>11</td><td>26</td><td>1</td><td>2</td><td>1</td><td>0</td><td>129</td><td>236</td><td>41</td><td>2</td><td>36</td><td>1</td><td>0</td><td>1</td><td>1</td><td>103</td><td>293</td><td>232</td><td>426</td><td>658</td></tr>
<tr><td>Bruins</td><td>82</td><td>40</td><td>32</td><td>1</td><td>0</td><td>5</td><td>4</td><td>309</td><td>250</td><td>41</td><td>20</td><td>15</td><td>1</td><td>0</td><td>4</td><td>1</td><td>150</td><td>122</td><td>41</td><td>20</td><td>17</td><td>0</td><td>0</td><td>1</td><td>3</td><td>159</td><td>128</td><td>309</td><td>519</td><td>828</td></tr>
<tr><td>Rocket</td><td>82</td><td>66</td><td>9</td><td>0</td><td>2</td><td>4</td><td>1</td><td>468</td><td>133</td><td>41</td><td>33</td><td>5</td><td>0</td><td>2</td><td>1</td><td>0</td><td>238</td><td>69</td><td>41</td><td>33</td><td>4</td><td>0</td><td>0</td><td>3</td><td>1</td><td>230</td><td>64</td><td>468</td><td>827</td><td>1295</td></tr>
<tr><td>Comets</td><td>82</td><td>59</td><td>14</td><td>3</td><td>2</td><td>3</td><td>1</td><td>436</td><td>147</td><td>41</td><td>31</td><td>6</td><td>1</td><td>2</td><td>1</td><td>0</td><td>247</td><td>65</td><td>41</td><td>28</td><td>8</td><td>2</td><td>0</td><td>2</td><td>1</td><td>189</td><td>82</td><td>436</td><td>776</td><td>1212</td></tr>
<tr><td>Bears</td><td>82</td><td>38</td><td>33</td><td>4</td><td>1</td><td>5</td><td>1</td><td>311</td><td>299</td><td>41</td><td>24</td><td>15</td><td>0</td><td>0</td><td>1</td><td>1</td><td>162</td><td>129</td><td>41</td><td>14</td><td>18</td><td>4</td><td>1</td><td>4</td><td>0</td><td>149</td><td>170</td><td>311</td><td>544</td><td>855</td></tr>
<tr><td>Roadrunners</td><td>82</td><td>17</td><td>55</td><td>1</td><td>2</td><td>2</td><td>5</td><td>251</td><td>486</td><td>41</td><td>11</td><td>23</td><td>0</td><td>2</td><td>1</td><td>4</td><td>132</td><td>224</td><td>41</td><td>6</td><td>32</td><td>1</td><td>0</td><td>1</td><td>1</td><td>119</td><td>262</td><td>251</td><td>470</td><td>721</td></tr>
<tr><td>Devils</td><td>82</td><td>10</td><td>69</td><td>1</td><td>0</td><td>2</td><td>0</td><td>195</td><td>545</td><td>41</td><td>8</td><td>33</td><td>0</td><td>0</td><td>0</td><td>0</td><td>107</td><td>266</td><td>41</td><td>2</td><td>36</td><td>1</td><td>0</td><td>2</td><td>0</td><td>88</td><td>279</td><td>195</td><td>381</td><td>576</td></tr>
<tr><td>Gulls</td><td>82</td><td>56</td><td>18</td><td>4</td><td>2</td><td>1</td><td>1</td><td>455</td><td>215</td><td>41</td><td>29</td><td>9</td><td>1</td><td>2</td><td>0</td><td>0</td><td>235</td><td>106</td><td>41</td><td>27</td><td>9</td><td>3</td><td>0</td><td>1</td><td>1</td><td>220</td><td>109</td><td>455</td><td>762</td><td>1217</td></tr>
<tr><td>Heat</td><td>82</td><td>70</td><td>8</td><td>1</td><td>0</td><td>1</td><td>2</td><td>590</td><td>132</td><td>41</td><td>33</td><td>6</td><td>0</td><td>0</td><td>1</td><td>1</td><td>290</td><td>77</td><td>41</td><td>37</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>300</td><td>55</td><td>590</td><td>1032</td><td>1622</td></tr>
<tr><td>Phantoms</td><td>82</td><td>40</td><td>33</td><td>2</td><td>0</td><td>4</td><td>3</td><td>368</td><td>343</td><td>41</td><td>21</td><td>15</td><td>1</td><td>0</td><td>2</td><td>2</td><td>193</td><td>159</td><td>41</td><td>19</td><td>18</td><td>1</td><td>0</td><td>2</td><td>1</td><td>175</td><td>184</td><td>368</td><td>619</td><td>987</td></tr>
<tr><td>Wolves</td><td>82</td><td>47</td><td>28</td><td>0</td><td>2</td><td>2</td><td>3</td><td>337</td><td>222</td><td>41</td><td>25</td><td>13</td><td>0</td><td>2</td><td>0</td><td>1</td><td>173</td><td>99</td><td>41</td><td>22</td><td>15</td><td>0</td><td>0</td><td>2</td><td>2</td><td>164</td><td>123</td><td>337</td><td>576</td><td>913</td></tr>
<tr><td>Checkers</td><td>82</td><td>66</td><td>11</td><td>0</td><td>1</td><td>2</td><td>2</td><td>474</td><td>168</td><td>41</td><td>34</td><td>6</td><td>0</td><td>0</td><td>1</td><td>0</td><td>251</td><td>85</td><td>41</td><td>32</td><td>5</td><td>0</td><td>1</td><td>1</td><td>2</td><td>223</td><td>83</td><td>474</td><td>825</td><td>1299</td></tr>
<tr><td>Sound Tigers</td><td>82</td><td>11</td><td>64</td><td>3</td><td>1</td><td>0</td><td>3</td><td>195</td><td>532</td><td>41</td><td>8</td><td>29</td><td>2</td><td>1</td><td>0</td><td>1</td><td>107</td><td>249</td><td>41</td><td>3</td><td>35</td><td>1</td><td>0</td><td>0</td><td>2</td><td>88</td><td>283</td><td>195</td><td>376</td><td>571</td></tr>
<tr><td>Moose</td><td>82</td><td>40</td><td>35</td><td>1</td><td>2</td><td>4</td><td>0</td><td>250</td><td>216</td><td>41</td><td>21</td><td>16</td><td>0</td><td>1</td><td>3</td><td>0</td><td>126</td><td>98</td><td>41</td><td>19</td><td>19</td><td>1</td><td>1</td><td>1</td><td>0</td><td>124</td><td>118</td><td>250</td><td>416</td><td>666</td></tr>
<tr><td>Reign</td><td>82</td><td>9</td><td>64</td><td>2</td><td>2</td><td>2</td><td>3</td><td>201</td><td>562</td><td>41</td><td>5</td><td>30</td><td>2</td><td>0</td><td>2</td><td>2</td><td>123</td><td>289</td><td>41</td><td>4</td><td>34</td><td>0</td><td>2</td><td>0</td><td>1</td><td>78</td><td>273</td><td>201</td><td>388</td><td>589</td></tr>
<tr><td>Crunch</td><td>82</td><td>41</td><td>34</td><td>2</td><td>0</td><td>2</td><td>3</td><td>284</td><td>228</td><td>41</td><td>26</td><td>13</td><td>0</td><td>0</td><td>1</td><td>1</td><td>154</td><td>94</td><td>41</td><td>15</td><td>21</td><td>2</td><td>0</td><td>1</td><td>2</td><td>130</td><td>134</td><td>284</td><td>501</td><td>785</td></tr>
<tr><td>Marlies</td><td>82</td><td>33</td><td>46</td><td>1</td><td>1</td><td>0</td><td>1</td><td>334</td><td>391</td><td>41</td><td>17</td><td>22</td><td>1</td><td>1</td><td>0</td><td>0</td><td>181</td><td>181</td><td>41</td><td>16</td><td>24</td><td>0</td><td>0</td><td>0</td><td>1</td><td>153</td><td>210</td><td>334</td><td>544</td><td>878</td></tr>
<tr><td>Condors</td><td>82</td><td>64</td><td>12</td><td>2</td><td>0</td><td>4</td><td>0</td><td>438</td><td>123</td><td>41</td><td>32</td><td>5</td><td>1</td><td>0</td><td>3</td><td>0</td><td>245</td><td>57</td><td>41</td><td>32</td><td>7</td><td>1</td><td>0</td><td>1</td><td>0</td><td>193</td><td>66</td><td>438</td><td>783</td><td>1221</td></tr>
<tr><td>Thunderbirds</td><td>82</td><td>42</td><td>32</td><td>2</td><td>3</td><td>1</td><td>2</td><td>392</td><td>315</td><td>41</td><td>20</td><td>17</td><td>0</td><td>3</td><td>0</td><td>1</td><td>204</td><td>154</td><td>41</td><td>22</td><td>15</td><td>2</td><td>0</td><td>1</td><td>1</td><td>188</td><td>161</td><td>392</td><td>691</td><td>1083</td></tr>
<tr><td>Penguins</td><td>82</td><td>42</td><td>39</td><td>0</td><td>0</td><td>0</td><td>1</td><td>318</td><td>306</td><td>41</td><td>19</td><td>21</td><td>0</td><td>0</td><td>0</td><td>1</td><td>160</td><td>145</td><td>41</td><td>23</td><td>18</td><td>0</td><td>0</td><td>0</td><td>0</td><td>158</td><td>161</td><td>318</td><td>552</td><td>870</td></tr>
<tr><td>Admirals</td><td>82</td><td>16</td><td>59</td><td>3</td><td>1</td><td>1</td><td>2</td><td>237</td><td>495</td><td>41</td><td>8</td><td>30</td><td>1</td><td>0</td><td>1</td><td>1</td><td>129</td><td>243</td><td>41</td><td>8</td><td>29</td><td>2</td><td>1</td><td>0</td><td>1</td><td>108</td><td>252</td><td>237</td><td>445</td><td>682</td></tr>
<tr><td>Wolf Pack</td><td>82</td><td>8</td><td>69</td><td>0</td><td>2</td><td>1</td><td>2</td><td>198</td><td>551</td><td>41</td><td>4</td><td>34</td><td>0</td><td>0</td><td>1</td><td>2</td><td>106</td><td>273</td><td>41</td><td>4</td><td>35</td><td>0</td><td>2</td><td>0</td><td>0</td><td>92</td><td>278</td><td>198</td><td>389</td><td>587</td></tr>
<tr><td>Griffins</td><td>82</td><td>37</td><td>31</td><td>3</td><td>2</td><td>4</td><td>5</td><td>321</td><td>269</td><td>41</td><td>17</td><td>15</td><td>1</td><td>2</td><td>2</td><td>4</td><td>163</td><td>129</td><td>41</td><td>20</td><td>16</td><td>2</td><td>0</td><td>2</td><td>1</td><td>158</td><td>140</td><td>321</td><td>529</td><td>850</td></tr>
<tr><td> Americans</td><td>82</td><td>61</td><td>9</td><td>0</td><td>5</td><td>3</td><td>4</td><td>403</td><td>157</td><td>41</td><td>28</td><td>6</td><td>0</td><td>3</td><td>2</td><td>2</td><td>192</td><td>76</td><td>41</td><td>33</td><td>3</td><td>0</td><td>2</td><td>1</td><td>2</td><td>211</td><td>81</td><td>403</td><td>695</td><td>1098</td></tr>
<tr><td>Senators</td><td>82</td><td>11</td><td>66</td><td>0</td><td>2</td><td>2</td><td>1</td><td>187</td><td>479</td><td>41</td><td>6</td><td>32</td><td>0</td><td>1</td><td>1</td><td>1</td><td>96</td><td>209</td><td>41</td><td>5</td><td>34</td><td>0</td><td>1</td><td>1</td><td>0</td><td>91</td><td>270</td><td>187</td><td>340</td><td>527</td></tr>
<tr><td>Barracudas</td><td>82</td><td>39</td><td>38</td><td>0</td><td>2</td><td>1</td><td>2</td><td>266</td><td>286</td><td>41</td><td>18</td><td>21</td><td>0</td><td>0</td><td>1</td><td>1</td><td>129</td><td>127</td><td>41</td><td>21</td><td>17</td><td>0</td><td>2</td><td>0</td><td>1</td><td>137</td><td>159</td><td>266</td><td>468</td><td>734</td></tr>
<tr><td>Stars</td><td>82</td><td>35</td><td>45</td><td>0</td><td>1</td><td>1</td><td>0</td><td>261</td><td>315</td><td>41</td><td>17</td><td>23</td><td>0</td><td>1</td><td>0</td><td>0</td><td>132</td><td>159</td><td>41</td><td>18</td><td>22</td><td>0</td><td>0</td><td>1</td><td>0</td><td>129</td><td>156</td><td>261</td><td>485</td><td>746</td></tr>
<tr><td>Wild</td><td>82</td><td>13</td><td>66</td><td>0</td><td>0</td><td>1</td><td>2</td><td>199</td><td>510</td><td>41</td><td>9</td><td>31</td><td>0</td><td>0</td><td>1</td><td>0</td><td>107</td><td>240</td><td>41</td><td>4</td><td>35</td><td>0</td><td>0</td><td>0</td><td>2</td><td>92</td><td>270</td><td>199</td><td>387</td><td>586</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Eagles</td><td>COL</td><td>82</td><td>76</td><td>50</td><td>4</td><td>2327</td><td>719</td><td>808</td><td>772</td><td>35</td><td>4159</td><td>1151</td><td>305</td><td>1402</td><td>152</td><td>19</td><td>12.50%</td><td>131</td><td>35</td><td>73.28%</td><td>3</td><td>38.14%</td><td>42.18%</td><td>36.89%</td><td>2808</td><td>1249</td><td>884</td><td>562</td><td>858</td><td>361</td><td>0</td><td>2</td></tr>
<tr><td>IceHogs</td><td>RCK</td><td>235</td><td>161</td><td>116</td><td>1</td><td>3422</td><td>1151</td><td>1135</td><td>1135</td><td>4</td><td>1419</td><td>410</td><td>692</td><td>1490</td><td>252</td><td>51</td><td>20.24%</td><td>260</td><td>32</td><td>87.69%</td><td>2</td><td>64.05%</td><td>70.72%</td><td>71.76%</td><td>1285</td><td>2795</td><td>850</td><td>399</td><td>2251</td><td>502</td><td>15</td><td>0</td></tr>
<tr><td>Monsters</td><td>CLE</td><td>179</td><td>153</td><td>124</td><td>5</td><td>2886</td><td>884</td><td>1008</td><td>985</td><td>27</td><td>1457</td><td>406</td><td>862</td><td>1775</td><td>272</td><td>67</td><td>24.63%</td><td>379</td><td>46</td><td>87.86%</td><td>4</td><td>53.88%</td><td>64.44%</td><td>59.89%</td><td>1384</td><td>2677</td><td>890</td><td>425</td><td>2093</td><td>519</td><td>15</td><td>0</td></tr>
<tr><td>Rampage </td><td>SAR</td><td>92</td><td>68</td><td>68</td><td>6</td><td>2520</td><td>840</td><td>793</td><td>865</td><td>40</td><td>3976</td><td>1107</td><td>482</td><td>1695</td><td>159</td><td>15</td><td>9.43%</td><td>197</td><td>62</td><td>68.53%</td><td>2</td><td>36.49%</td><td>40.67%</td><td>36.31%</td><td>2627</td><td>1413</td><td>902</td><td>541</td><td>981</td><td>384</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>PRO</td><td>114</td><td>106</td><td>83</td><td>8</td><td>2098</td><td>710</td><td>717</td><td>661</td><td>40</td><td>1956</td><td>521</td><td>772</td><td>1756</td><td>258</td><td>53</td><td>20.54%</td><td>342</td><td>66</td><td>80.70%</td><td>8</td><td>44.07%</td><td>49.73%</td><td>48.27%</td><td>1660</td><td>2395</td><td>910</td><td>466</td><td>1822</td><td>499</td><td>8</td><td>3</td></tr>
<tr><td>Rocket</td><td>LAV</td><td>228</td><td>138</td><td>98</td><td>8</td><td>3137</td><td>1069</td><td>1051</td><td>1007</td><td>32</td><td>1240</td><td>329</td><td>842</td><td>1656</td><td>294</td><td>57</td><td>19.39%</td><td>364</td><td>36</td><td>90.11%</td><td>10</td><td>63.93%</td><td>71.99%</td><td>72.72%</td><td>1292</td><td>2771</td><td>889</td><td>430</td><td>2177</td><td>527</td><td>17</td><td>0</td></tr>
<tr><td>Comets</td><td>UTI</td><td>179</td><td>132</td><td>119</td><td>9</td><td>2751</td><td>895</td><td>909</td><td>933</td><td>27</td><td>1280</td><td>365</td><td>828</td><td>1630</td><td>281</td><td>59</td><td>21.00%</td><td>343</td><td>41</td><td>88.05%</td><td>7</td><td>58.27%</td><td>64.69%</td><td>65.83%</td><td>1284</td><td>2777</td><td>890</td><td>423</td><td>2184</td><td>528</td><td>17</td><td>1</td></tr>
<tr><td>Bears</td><td>HER</td><td>112</td><td>90</td><td>100</td><td>12</td><td>2656</td><td>859</td><td>876</td><td>900</td><td>41</td><td>2586</td><td>738</td><td>526</td><td>1537</td><td>234</td><td>46</td><td>19.66%</td><td>218</td><td>24</td><td>88.99%</td><td>4</td><td>47.97%</td><td>57.96%</td><td>49.88%</td><td>2086</td><td>1989</td><td>886</td><td>503</td><td>1509</td><td>429</td><td>5</td><td>2</td></tr>
<tr><td>Roadrunners</td><td>TUC</td><td>96</td><td>80</td><td>72</td><td>5</td><td>2397</td><td>773</td><td>791</td><td>811</td><td>41</td><td>3346</td><td>950</td><td>423</td><td>1479</td><td>214</td><td>25</td><td>11.68%</td><td>179</td><td>56</td><td>68.72%</td><td>3</td><td>42.53%</td><td>53.11%</td><td>42.74%</td><td>2329</td><td>1740</td><td>891</td><td>522</td><td>1286</td><td>405</td><td>4</td><td>0</td></tr>
<tr><td>Devils</td><td>BNG</td><td>66</td><td>63</td><td>63</td><td>5</td><td>2165</td><td>698</td><td>717</td><td>736</td><td>28</td><td>4082</td><td>1155</td><td>279</td><td>1367</td><td>153</td><td>19</td><td>12.42%</td><td>121</td><td>34</td><td>71.90%</td><td>2</td><td>34.93%</td><td>38.08%</td><td>35.40%</td><td>2837</td><td>1213</td><td>883</td><td>564</td><td>830</td><td>350</td><td>1</td><td>1</td></tr>
<tr><td>Gulls</td><td>SDG</td><td>212</td><td>137</td><td>101</td><td>5</td><td>3386</td><td>1124</td><td>1116</td><td>1130</td><td>27</td><td>2139</td><td>591</td><td>458</td><td>1496</td><td>254</td><td>42</td><td>16.54%</td><td>204</td><td>39</td><td>80.88%</td><td>4</td><td>46.87%</td><td>56.25%</td><td>54.74%</td><td>1799</td><td>2294</td><td>855</td><td>469</td><td>1811</td><td>442</td><td>8</td><td>1</td></tr>
<tr><td>Heat</td><td>STK</td><td>266</td><td>187</td><td>135</td><td>4</td><td>3784</td><td>1216</td><td>1264</td><td>1299</td><td>18</td><td>1331</td><td>373</td><td>569</td><td>1404</td><td>315</td><td>57</td><td>18.10%</td><td>241</td><td>29</td><td>87.97%</td><td>6</td><td>65.47%</td><td>70.64%</td><td>68.75%</td><td>1280</td><td>2796</td><td>860</td><td>412</td><td>2247</td><td>505</td><td>17</td><td>0</td></tr>
<tr><td>Phantoms</td><td>LVP</td><td>143</td><td>129</td><td>90</td><td>10</td><td>2886</td><td>914</td><td>1005</td><td>952</td><td>33</td><td>2618</td><td>763</td><td>476</td><td>1311</td><td>242</td><td>41</td><td>16.94%</td><td>200</td><td>29</td><td>85.50%</td><td>6</td><td>57.55%</td><td>63.50%</td><td>60.90%</td><td>2098</td><td>1983</td><td>877</td><td>506</td><td>1507</td><td>423</td><td>5</td><td>0</td></tr>
<tr><td>Wolves</td><td>CHI</td><td>128</td><td>106</td><td>101</td><td>4</td><td>2518</td><td>795</td><td>886</td><td>824</td><td>30</td><td>2057</td><td>632</td><td>578</td><td>1373</td><td>272</td><td>57</td><td>20.96%</td><td>221</td><td>23</td><td>89.59%</td><td>2</td><td>49.58%</td><td>59.29%</td><td>55.53%</td><td>1765</td><td>2315</td><td>872</td><td>472</td><td>1802</td><td>457</td><td>9</td><td>1</td></tr>
<tr><td>Checkers</td><td>CHR</td><td>205</td><td>150</td><td>117</td><td>6</td><td>3009</td><td>979</td><td>989</td><td>1030</td><td>28</td><td>1500</td><td>422</td><td>698</td><td>1507</td><td>270</td><td>56</td><td>20.74%</td><td>273</td><td>44</td><td>83.88%</td><td>10</td><td>56.60%</td><td>64.80%</td><td>62.32%</td><td>1355</td><td>2737</td><td>851</td><td>413</td><td>2189</td><td>493</td><td>11</td><td>1</td></tr>
<tr><td>Sound Tigers</td><td>BPT</td><td>81</td><td>63</td><td>48</td><td>7</td><td>2277</td><td>767</td><td>728</td><td>754</td><td>50</td><td>4106</td><td>1196</td><td>331</td><td>1457</td><td>184</td><td>15</td><td>8.15%</td><td>131</td><td>36</td><td>72.52%</td><td>0</td><td>37.33%</td><td>40.18%</td><td>36.74%</td><td>2785</td><td>1283</td><td>874</td><td>550</td><td>880</td><td>363</td><td>0</td><td>0</td></tr>
<tr><td>Moose</td><td>MAN</td><td>90</td><td>83</td><td>72</td><td>6</td><td>2321</td><td>766</td><td>788</td><td>760</td><td>18</td><td>2431</td><td>660</td><td>666</td><td>1589</td><td>221</td><td>56</td><td>25.34%</td><td>256</td><td>33</td><td>87.11%</td><td>3</td><td>44.05%</td><td>49.45%</td><td>50.09%</td><td>1946</td><td>2093</td><td>908</td><td>506</td><td>1565</td><td>463</td><td>9</td><td>0</td></tr>
<tr><td>Reign</td><td>ONT</td><td>72</td><td>63</td><td>62</td><td>5</td><td>2289</td><td>717</td><td>722</td><td>822</td><td>45</td><td>4290</td><td>1179</td><td>285</td><td>1443</td><td>177</td><td>20</td><td>11.30%</td><td>123</td><td>35</td><td>71.54%</td><td>1</td><td>33.85%</td><td>42.05%</td><td>34.15%</td><td>2828</td><td>1240</td><td>886</td><td>555</td><td>850</td><td>356</td><td>0</td><td>0</td></tr>
<tr><td>Crunch</td><td>SYR</td><td>109</td><td>89</td><td>82</td><td>6</td><td>2319</td><td>771</td><td>770</td><td>772</td><td>20</td><td>2376</td><td>638</td><td>593</td><td>1629</td><td>253</td><td>44</td><td>17.39%</td><td>262</td><td>29</td><td>88.93%</td><td>5</td><td>49.50%</td><td>52.63%</td><td>49.01%</td><td>2036</td><td>2016</td><td>897</td><td>514</td><td>1511</td><td>444</td><td>4</td><td>0</td></tr>
<tr><td>Marlies</td><td>TOR</td><td>148</td><td>98</td><td>87</td><td>1</td><td>2862</td><td>959</td><td>944</td><td>955</td><td>6</td><td>2366</td><td>712</td><td>593</td><td>1749</td><td>244</td><td>37</td><td>15.16%</td><td>258</td><td>88</td><td>65.89%</td><td>1</td><td>46.57%</td><td>50.44%</td><td>52.43%</td><td>1950</td><td>2103</td><td>876</td><td>492</td><td>1615</td><td>437</td><td>1</td><td>2</td></tr>
<tr><td>Condors</td><td>BKR</td><td>174</td><td>135</td><td>123</td><td>11</td><td>2781</td><td>951</td><td>887</td><td>936</td><td>28</td><td>1211</td><td>361</td><td>868</td><td>1603</td><td>296</td><td>59</td><td>19.93%</td><td>348</td><td>35</td><td>89.94%</td><td>10</td><td>68.52%</td><td>73.34%</td><td>70.62%</td><td>1182</td><td>2886</td><td>878</td><td>408</td><td>2286</td><td>529</td><td>22</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>SPR</td><td>158</td><td>110</td><td>121</td><td>8</td><td>2602</td><td>873</td><td>856</td><td>858</td><td>27</td><td>1776</td><td>486</td><td>796</td><td>1552</td><td>275</td><td>60</td><td>21.82%</td><td>328</td><td>69</td><td>78.96%</td><td>6</td><td>61.61%</td><td>69.02%</td><td>66.93%</td><td>1495</td><td>2559</td><td>888</td><td>440</td><td>1994</td><td>502</td><td>2</td><td>0</td></tr>
<tr><td>Penguins</td><td>WBS</td><td>122</td><td>113</td><td>83</td><td>0</td><td>2542</td><td>830</td><td>836</td><td>875</td><td>4</td><td>2612</td><td>758</td><td>668</td><td>1848</td><td>198</td><td>33</td><td>16.67%</td><td>291</td><td>58</td><td>80.07%</td><td>6</td><td>38.69%</td><td>42.64%</td><td>39.85%</td><td>2047</td><td>1979</td><td>899</td><td>508</td><td>1469</td><td>442</td><td>2</td><td>2</td></tr>
<tr><td>Admirals</td><td>MIL</td><td>110</td><td>62</td><td>61</td><td>4</td><td>2319</td><td>782</td><td>728</td><td>789</td><td>30</td><td>3747</td><td>1107</td><td>363</td><td>1513</td><td>177</td><td>17</td><td>9.60%</td><td>153</td><td>34</td><td>77.78%</td><td>0</td><td>39.26%</td><td>42.70%</td><td>39.18%</td><td>2620</td><td>1425</td><td>899</td><td>544</td><td>997</td><td>386</td><td>0</td><td>2</td></tr>
<tr><td>Wolf Pack</td><td>HFD</td><td>79</td><td>65</td><td>53</td><td>3</td><td>2285</td><td>752</td><td>712</td><td>814</td><td>20</td><td>4009</td><td>1137</td><td>294</td><td>1362</td><td>157</td><td>18</td><td>11.46%</td><td>125</td><td>34</td><td>72.80%</td><td>0</td><td>36.48%</td><td>39.70%</td><td>38.21%</td><td>2839</td><td>1233</td><td>865</td><td>551</td><td>850</td><td>347</td><td>0</td><td>1</td></tr>
<tr><td>Griffins</td><td>GRP</td><td>139</td><td>97</td><td>78</td><td>15</td><td>2736</td><td>843</td><td>899</td><td>949</td><td>84</td><td>2626</td><td>709</td><td>548</td><td>1836</td><td>251</td><td>51</td><td>20.32%</td><td>216</td><td>31</td><td>85.65%</td><td>5</td><td>37.91%</td><td>40.51%</td><td>38.17%</td><td>2159</td><td>1939</td><td>875</td><td>511</td><td>1460</td><td>416</td><td>5</td><td>0</td></tr>
<tr><td> Americans</td><td>ROC</td><td>165</td><td>140</td><td>95</td><td>8</td><td>2639</td><td>896</td><td>846</td><td>884</td><td>42</td><td>1473</td><td>430</td><td>846</td><td>1689</td><td>283</td><td>56</td><td>19.79%</td><td>331</td><td>36</td><td>89.12%</td><td>12</td><td>54.76%</td><td>63.34%</td><td>60.35%</td><td>1412</td><td>2635</td><td>917</td><td>442</td><td>2038</td><td>535</td><td>11</td><td>0</td></tr>
<tr><td>Senators</td><td>BEL</td><td>80</td><td>56</td><td>49</td><td>3</td><td>2074</td><td>678</td><td>707</td><td>681</td><td>20</td><td>3449</td><td>947</td><td>363</td><td>1459</td><td>212</td><td>28</td><td>13.21%</td><td>160</td><td>42</td><td>73.75%</td><td>0</td><td>37.25%</td><td>41.06%</td><td>38.03%</td><td>2515</td><td>1525</td><td>900</td><td>540</td><td>1075</td><td>401</td><td>0</td><td>1</td></tr>
<tr><td>Barracudas</td><td>SJB</td><td>100</td><td>82</td><td>83</td><td>2</td><td>2353</td><td>761</td><td>761</td><td>819</td><td>21</td><td>2593</td><td>730</td><td>559</td><td>1587</td><td>235</td><td>48</td><td>20.43%</td><td>222</td><td>43</td><td>80.63%</td><td>2</td><td>40.00%</td><td>49.05%</td><td>46.89%</td><td>2055</td><td>2001</td><td>888</td><td>501</td><td>1508</td><td>439</td><td>5</td><td>1</td></tr>
<tr><td>Stars</td><td>TEX</td><td>106</td><td>83</td><td>71</td><td>1</td><td>2694</td><td>875</td><td>892</td><td>920</td><td>12</td><td>3266</td><td>967</td><td>323</td><td>1464</td><td>193</td><td>30</td><td>15.54%</td><td>136</td><td>20</td><td>85.29%</td><td>1</td><td>38.50%</td><td>44.09%</td><td>39.67%</td><td>2492</td><td>1539</td><td>895</td><td>544</td><td>1095</td><td>398</td><td>1</td><td>1</td></tr>
<tr><td>Wild</td><td>IOA</td><td>86</td><td>54</td><td>58</td><td>1</td><td>2406</td><td>777</td><td>792</td><td>819</td><td>29</td><td>3964</td><td>1129</td><td>318</td><td>1479</td><td>166</td><td>14</td><td>8.43%</td><td>131</td><td>31</td><td>76.34%</td><td>0</td><td>37.39%</td><td>39.53%</td><td>37.85%</td><td>2691</td><td>1342</td><td>903</td><td>565</td><td>927</td><td>373</td><td>0</td><td>3</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.97</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Heat</td><td>7.20</td></tr>
<tr><td>2</td><td>IceHogs</td><td>6.26</td></tr>
<tr><td>3</td><td>Checkers</td><td>5.78</td></tr>
<tr><td>4</td><td>Rocket</td><td>5.71</td></tr>
<tr><td>5</td><td>Monsters</td><td>5.59</td></tr>
<tr><td>6</td><td>Gulls</td><td>5.55</td></tr>
<tr><td>7</td><td>Condors</td><td>5.34</td></tr>
<tr><td>8</td><td>Comets</td><td>5.32</td></tr>
<tr><td>9</td><td> Americans</td><td>4.91</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>4.78</td></tr>
<tr><td>11</td><td>Phantoms</td><td>4.49</td></tr>
<tr><td>12</td><td>Wolves</td><td>4.11</td></tr>
<tr><td>13</td><td>Marlies</td><td>4.07</td></tr>
<tr><td>14</td><td>Griffins</td><td>3.91</td></tr>
<tr><td>15</td><td>Penguins</td><td>3.88</td></tr>
<tr><td>16</td><td>Bears</td><td>3.79</td></tr>
<tr><td>17</td><td>Bruins</td><td>3.77</td></tr>
<tr><td>18</td><td>Crunch</td><td>3.46</td></tr>
<tr><td>19</td><td>Barracudas</td><td>3.24</td></tr>
<tr><td>20</td><td>Stars</td><td>3.18</td></tr>
<tr><td>21</td><td>Roadrunners</td><td>3.06</td></tr>
<tr><td>22</td><td>Moose</td><td>3.05</td></tr>
<tr><td>23</td><td>Admirals</td><td>2.89</td></tr>
<tr><td>24</td><td>Rampage </td><td>2.83</td></tr>
<tr><td>25</td><td>Eagles</td><td>2.57</td></tr>
<tr><td>26</td><td>Reign</td><td>2.45</td></tr>
<tr><td>27</td><td>Wild</td><td>2.43</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>2.41</td></tr>
<tr><td>29</td><td>Sound Tigers</td><td>2.38</td></tr>
<tr><td>30</td><td>Devils</td><td>2.38</td></tr>
<tr><td>31</td><td>Senators</td><td>2.28</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.97</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Condors</td><td>1.50</td></tr>
<tr><td>2</td><td>Heat</td><td>1.61</td></tr>
<tr><td>3</td><td>Rocket</td><td>1.62</td></tr>
<tr><td>4</td><td>Comets</td><td>1.79</td></tr>
<tr><td>5</td><td> Americans</td><td>1.91</td></tr>
<tr><td>6</td><td>IceHogs</td><td>1.96</td></tr>
<tr><td>7</td><td>Checkers</td><td>2.05</td></tr>
<tr><td>8</td><td>Monsters</td><td>2.13</td></tr>
<tr><td>9</td><td>Gulls</td><td>2.62</td></tr>
<tr><td>10</td><td>Moose</td><td>2.63</td></tr>
<tr><td>11</td><td>Wolves</td><td>2.71</td></tr>
<tr><td>12</td><td>Crunch</td><td>2.78</td></tr>
<tr><td>13</td><td>Bruins</td><td>3.05</td></tr>
<tr><td>14</td><td>Griffins</td><td>3.28</td></tr>
<tr><td>15</td><td>Barracudas</td><td>3.49</td></tr>
<tr><td>16</td><td>Bears</td><td>3.65</td></tr>
<tr><td>17</td><td>Penguins</td><td>3.73</td></tr>
<tr><td>18</td><td>Thunderbirds</td><td>3.84</td></tr>
<tr><td>19</td><td>Stars</td><td>3.84</td></tr>
<tr><td>20</td><td>Phantoms</td><td>4.18</td></tr>
<tr><td>21</td><td>Marlies</td><td>4.77</td></tr>
<tr><td>22</td><td>Senators</td><td>5.84</td></tr>
<tr><td>23</td><td>Roadrunners</td><td>5.93</td></tr>
<tr><td>24</td><td>Admirals</td><td>6.04</td></tr>
<tr><td>25</td><td>Wild</td><td>6.22</td></tr>
<tr><td>26</td><td>Rampage </td><td>6.45</td></tr>
<tr><td>27</td><td>Sound Tigers</td><td>6.49</td></tr>
<tr><td>28</td><td>Devils</td><td>6.65</td></tr>
<tr><td>29</td><td>Wolf Pack</td><td>6.72</td></tr>
<tr><td>30</td><td>Eagles</td><td>6.73</td></tr>
<tr><td>31</td><td>Reign</td><td>6.85</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Heat</td><td>446.97%</td></tr>
<tr><td>2</td><td>Condors</td><td>356.10%</td></tr>
<tr><td>3</td><td>Rocket</td><td>351.88%</td></tr>
<tr><td>4</td><td>IceHogs</td><td>318.63%</td></tr>
<tr><td>5</td><td>Comets</td><td>296.60%</td></tr>
<tr><td>6</td><td>Checkers</td><td>282.14%</td></tr>
<tr><td>7</td><td>Monsters</td><td>261.71%</td></tr>
<tr><td>8</td><td> Americans</td><td>256.69%</td></tr>
<tr><td>9</td><td>Gulls</td><td>211.63%</td></tr>
<tr><td>10</td><td>Wolves</td><td>151.80%</td></tr>
<tr><td>11</td><td>Crunch</td><td>124.56%</td></tr>
<tr><td>12</td><td>Thunderbirds</td><td>124.44%</td></tr>
<tr><td>13</td><td>Bruins</td><td>123.60%</td></tr>
<tr><td>14</td><td>Griffins</td><td>119.33%</td></tr>
<tr><td>15</td><td>Moose</td><td>115.74%</td></tr>
<tr><td>16</td><td>Phantoms</td><td>107.29%</td></tr>
<tr><td>17</td><td>Bears</td><td>104.01%</td></tr>
<tr><td>18</td><td>Penguins</td><td>103.92%</td></tr>
<tr><td>19</td><td>Barracudas</td><td>93.01%</td></tr>
<tr><td>20</td><td>Marlies</td><td>85.42%</td></tr>
<tr><td>21</td><td>Stars</td><td>82.86%</td></tr>
<tr><td>22</td><td>Roadrunners</td><td>51.65%</td></tr>
<tr><td>23</td><td>Admirals</td><td>47.88%</td></tr>
<tr><td>24</td><td>Rampage </td><td>43.86%</td></tr>
<tr><td>25</td><td>Senators</td><td>39.04%</td></tr>
<tr><td>26</td><td>Wild</td><td>39.02%</td></tr>
<tr><td>27</td><td>Eagles</td><td>38.22%</td></tr>
<tr><td>28</td><td>Sound Tigers</td><td>36.65%</td></tr>
<tr><td>29</td><td>Wolf Pack</td><td>35.93%</td></tr>
<tr><td>30</td><td>Devils</td><td>35.78%</td></tr>
<tr><td>31</td><td>Reign</td><td>35.77%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 17.50%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Moose</td><td>25.34%</td></tr>
<tr><td>2</td><td>Monsters</td><td>24.63%</td></tr>
<tr><td>3</td><td>Thunderbirds</td><td>21.82%</td></tr>
<tr><td>4</td><td>Comets</td><td>21.00%</td></tr>
<tr><td>5</td><td>Wolves</td><td>20.96%</td></tr>
<tr><td>6</td><td>Checkers</td><td>20.74%</td></tr>
<tr><td>7</td><td>Bruins</td><td>20.54%</td></tr>
<tr><td>8</td><td>Barracudas</td><td>20.43%</td></tr>
<tr><td>9</td><td>Griffins</td><td>20.32%</td></tr>
<tr><td>10</td><td>IceHogs</td><td>20.24%</td></tr>
<tr><td>11</td><td>Condors</td><td>19.93%</td></tr>
<tr><td>12</td><td> Americans</td><td>19.79%</td></tr>
<tr><td>13</td><td>Bears</td><td>19.66%</td></tr>
<tr><td>14</td><td>Rocket</td><td>19.39%</td></tr>
<tr><td>15</td><td>Heat</td><td>18.10%</td></tr>
<tr><td>16</td><td>Crunch</td><td>17.39%</td></tr>
<tr><td>17</td><td>Phantoms</td><td>16.94%</td></tr>
<tr><td>18</td><td>Penguins</td><td>16.67%</td></tr>
<tr><td>19</td><td>Gulls</td><td>16.54%</td></tr>
<tr><td>20</td><td>Stars</td><td>15.54%</td></tr>
<tr><td>21</td><td>Marlies</td><td>15.16%</td></tr>
<tr><td>22</td><td>Senators</td><td>13.21%</td></tr>
<tr><td>23</td><td>Eagles</td><td>12.50%</td></tr>
<tr><td>24</td><td>Devils</td><td>12.42%</td></tr>
<tr><td>25</td><td>Roadrunners</td><td>11.68%</td></tr>
<tr><td>26</td><td>Wolf Pack</td><td>11.46%</td></tr>
<tr><td>27</td><td>Reign</td><td>11.30%</td></tr>
<tr><td>28</td><td>Admirals</td><td>9.60%</td></tr>
<tr><td>29</td><td>Rampage </td><td>9.43%</td></tr>
<tr><td>30</td><td>Wild</td><td>8.43%</td></tr>
<tr><td>31</td><td>Sound Tigers</td><td>8.15%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 82.50%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rocket</td><td>90.11%</td></tr>
<tr><td>2</td><td>Condors</td><td>89.94%</td></tr>
<tr><td>3</td><td>Wolves</td><td>89.59%</td></tr>
<tr><td>4</td><td> Americans</td><td>89.12%</td></tr>
<tr><td>5</td><td>Bears</td><td>88.99%</td></tr>
<tr><td>6</td><td>Crunch</td><td>88.93%</td></tr>
<tr><td>7</td><td>Comets</td><td>88.05%</td></tr>
<tr><td>8</td><td>Heat</td><td>87.97%</td></tr>
<tr><td>9</td><td>Monsters</td><td>87.86%</td></tr>
<tr><td>10</td><td>IceHogs</td><td>87.69%</td></tr>
<tr><td>11</td><td>Moose</td><td>87.11%</td></tr>
<tr><td>12</td><td>Griffins</td><td>85.65%</td></tr>
<tr><td>13</td><td>Phantoms</td><td>85.50%</td></tr>
<tr><td>14</td><td>Stars</td><td>85.29%</td></tr>
<tr><td>15</td><td>Checkers</td><td>83.88%</td></tr>
<tr><td>16</td><td>Gulls</td><td>80.88%</td></tr>
<tr><td>17</td><td>Bruins</td><td>80.70%</td></tr>
<tr><td>18</td><td>Barracudas</td><td>80.63%</td></tr>
<tr><td>19</td><td>Penguins</td><td>80.07%</td></tr>
<tr><td>20</td><td>Thunderbirds</td><td>78.96%</td></tr>
<tr><td>21</td><td>Admirals</td><td>77.78%</td></tr>
<tr><td>22</td><td>Wild</td><td>76.34%</td></tr>
<tr><td>23</td><td>Senators</td><td>73.75%</td></tr>
<tr><td>24</td><td>Eagles</td><td>73.28%</td></tr>
<tr><td>25</td><td>Wolf Pack</td><td>72.80%</td></tr>
<tr><td>26</td><td>Sound Tigers</td><td>72.52%</td></tr>
<tr><td>27</td><td>Devils</td><td>71.90%</td></tr>
<tr><td>28</td><td>Reign</td><td>71.54%</td></tr>
<tr><td>29</td><td>Roadrunners</td><td>68.72%</td></tr>
<tr><td>30</td><td>Rampage </td><td>68.53%</td></tr>
<tr><td>31</td><td>Marlies</td><td>65.89%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Monsters</td><td>112.50%</td></tr>
<tr><td>2</td><td>Moose</td><td>112.45%</td></tr>
<tr><td>3</td><td>Wolves</td><td>110.55%</td></tr>
<tr><td>4</td><td>Condors</td><td>109.88%</td></tr>
<tr><td>5</td><td>Rocket</td><td>109.50%</td></tr>
<tr><td>6</td><td>Comets</td><td>109.04%</td></tr>
<tr><td>7</td><td> Americans</td><td>108.91%</td></tr>
<tr><td>8</td><td>Bears</td><td>108.65%</td></tr>
<tr><td>9</td><td>IceHogs</td><td>107.93%</td></tr>
<tr><td>10</td><td>Crunch</td><td>106.32%</td></tr>
<tr><td>11</td><td>Heat</td><td>106.06%</td></tr>
<tr><td>12</td><td>Griffins</td><td>105.97%</td></tr>
<tr><td>13</td><td>Checkers</td><td>104.62%</td></tr>
<tr><td>14</td><td>Phantoms</td><td>102.44%</td></tr>
<tr><td>15</td><td>Bruins</td><td>101.24%</td></tr>
<tr><td>16</td><td>Barracudas</td><td>101.06%</td></tr>
<tr><td>17</td><td>Stars</td><td>100.84%</td></tr>
<tr><td>18</td><td>Thunderbirds</td><td>100.78%</td></tr>
<tr><td>19</td><td>Gulls</td><td>97.42%</td></tr>
<tr><td>20</td><td>Penguins</td><td>96.74%</td></tr>
<tr><td>21</td><td>Admirals</td><td>87.38%</td></tr>
<tr><td>22</td><td>Senators</td><td>86.96%</td></tr>
<tr><td>23</td><td>Eagles</td><td>85.78%</td></tr>
<tr><td>24</td><td>Wild</td><td>84.77%</td></tr>
<tr><td>25</td><td>Devils</td><td>84.32%</td></tr>
<tr><td>26</td><td>Wolf Pack</td><td>84.26%</td></tr>
<tr><td>27</td><td>Reign</td><td>82.84%</td></tr>
<tr><td>28</td><td>Marlies</td><td>81.06%</td></tr>
<tr><td>29</td><td>Sound Tigers</td><td>80.67%</td></tr>
<tr><td>30</td><td>Roadrunners</td><td>80.40%</td></tr>
<tr><td>31</td><td>Rampage </td><td>77.96%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32.04</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Heat</td><td>46.15</td></tr>
<tr><td>2</td><td>IceHogs</td><td>41.73</td></tr>
<tr><td>3</td><td>Gulls</td><td>41.29</td></tr>
<tr><td>4</td><td>Rocket</td><td>38.26</td></tr>
<tr><td>5</td><td>Checkers</td><td>36.70</td></tr>
<tr><td>6</td><td>Phantoms</td><td>35.20</td></tr>
<tr><td>7</td><td>Monsters</td><td>35.20</td></tr>
<tr><td>8</td><td>Marlies</td><td>34.90</td></tr>
<tr><td>9</td><td>Condors</td><td>33.91</td></tr>
<tr><td>10</td><td>Comets</td><td>33.55</td></tr>
<tr><td>11</td><td>Griffins</td><td>33.37</td></tr>
<tr><td>12</td><td>Stars</td><td>32.85</td></tr>
<tr><td>13</td><td>Bears</td><td>32.39</td></tr>
<tr><td>14</td><td> Americans</td><td>32.18</td></tr>
<tr><td>15</td><td>Thunderbirds</td><td>31.73</td></tr>
<tr><td>16</td><td>Penguins</td><td>31.00</td></tr>
<tr><td>17</td><td>Rampage </td><td>30.73</td></tr>
<tr><td>18</td><td>Wolves</td><td>30.71</td></tr>
<tr><td>19</td><td>Wild</td><td>29.34</td></tr>
<tr><td>20</td><td>Roadrunners</td><td>29.23</td></tr>
<tr><td>21</td><td>Barracudas</td><td>28.70</td></tr>
<tr><td>22</td><td>Eagles</td><td>28.38</td></tr>
<tr><td>23</td><td>Moose</td><td>28.30</td></tr>
<tr><td>24</td><td>Admirals</td><td>28.28</td></tr>
<tr><td>25</td><td>Crunch</td><td>28.28</td></tr>
<tr><td>26</td><td>Reign</td><td>27.91</td></tr>
<tr><td>27</td><td>Wolf Pack</td><td>27.87</td></tr>
<tr><td>28</td><td>Sound Tigers</td><td>27.77</td></tr>
<tr><td>29</td><td>Devils</td><td>26.40</td></tr>
<tr><td>30</td><td>Bruins</td><td>25.59</td></tr>
<tr><td>31</td><td>Senators</td><td>25.29</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32.04</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Condors</td><td>14.77</td></tr>
<tr><td>2</td><td>Rocket</td><td>15.12</td></tr>
<tr><td>3</td><td>Comets</td><td>15.61</td></tr>
<tr><td>4</td><td>Heat</td><td>16.23</td></tr>
<tr><td>5</td><td>IceHogs</td><td>17.30</td></tr>
<tr><td>6</td><td>Monsters</td><td>17.77</td></tr>
<tr><td>7</td><td> Americans</td><td>17.96</td></tr>
<tr><td>8</td><td>Checkers</td><td>18.29</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>21.66</td></tr>
<tr><td>10</td><td>Bruins</td><td>23.85</td></tr>
<tr><td>11</td><td>Wolves</td><td>25.09</td></tr>
<tr><td>12</td><td>Gulls</td><td>26.09</td></tr>
<tr><td>13</td><td>Marlies</td><td>28.85</td></tr>
<tr><td>14</td><td>Crunch</td><td>28.98</td></tr>
<tr><td>15</td><td>Moose</td><td>29.65</td></tr>
<tr><td>16</td><td>Bears</td><td>31.54</td></tr>
<tr><td>17</td><td>Barracudas</td><td>31.62</td></tr>
<tr><td>18</td><td>Penguins</td><td>31.85</td></tr>
<tr><td>19</td><td>Phantoms</td><td>31.93</td></tr>
<tr><td>20</td><td>Griffins</td><td>32.02</td></tr>
<tr><td>21</td><td>Stars</td><td>39.83</td></tr>
<tr><td>22</td><td>Roadrunners</td><td>40.80</td></tr>
<tr><td>23</td><td>Senators</td><td>42.06</td></tr>
<tr><td>24</td><td>Admirals</td><td>45.70</td></tr>
<tr><td>25</td><td>Wild</td><td>48.34</td></tr>
<tr><td>26</td><td>Rampage </td><td>48.49</td></tr>
<tr><td>27</td><td>Wolf Pack</td><td>48.89</td></tr>
<tr><td>28</td><td>Devils</td><td>49.78</td></tr>
<tr><td>29</td><td>Sound Tigers</td><td>50.07</td></tr>
<tr><td>30</td><td>Eagles</td><td>50.72</td></tr>
<tr><td>31</td><td>Reign</td><td>52.32</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Heat</td><td>284.30%</td></tr>
<tr><td>2</td><td>Rocket</td><td>252.98%</td></tr>
<tr><td>3</td><td>IceHogs</td><td>241.16%</td></tr>
<tr><td>4</td><td>Condors</td><td>229.64%</td></tr>
<tr><td>5</td><td>Comets</td><td>214.92%</td></tr>
<tr><td>6</td><td>Checkers</td><td>200.60%</td></tr>
<tr><td>7</td><td>Monsters</td><td>198.08%</td></tr>
<tr><td>8</td><td> Americans</td><td>179.16%</td></tr>
<tr><td>9</td><td>Gulls</td><td>158.30%</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>146.51%</td></tr>
<tr><td>11</td><td>Wolves</td><td>122.41%</td></tr>
<tr><td>12</td><td>Marlies</td><td>120.96%</td></tr>
<tr><td>13</td><td>Phantoms</td><td>110.24%</td></tr>
<tr><td>14</td><td>Bruins</td><td>107.26%</td></tr>
<tr><td>15</td><td>Griffins</td><td>104.19%</td></tr>
<tr><td>16</td><td>Bears</td><td>102.71%</td></tr>
<tr><td>17</td><td>Crunch</td><td>97.60%</td></tr>
<tr><td>18</td><td>Penguins</td><td>97.32%</td></tr>
<tr><td>19</td><td>Moose</td><td>95.48%</td></tr>
<tr><td>20</td><td>Barracudas</td><td>90.74%</td></tr>
<tr><td>21</td><td>Stars</td><td>82.49%</td></tr>
<tr><td>22</td><td>Roadrunners</td><td>71.64%</td></tr>
<tr><td>23</td><td>Rampage </td><td>63.38%</td></tr>
<tr><td>24</td><td>Admirals</td><td>61.89%</td></tr>
<tr><td>25</td><td>Wild</td><td>60.70%</td></tr>
<tr><td>26</td><td>Senators</td><td>60.13%</td></tr>
<tr><td>27</td><td>Wolf Pack</td><td>57.00%</td></tr>
<tr><td>28</td><td>Eagles</td><td>55.95%</td></tr>
<tr><td>29</td><td>Sound Tigers</td><td>55.46%</td></tr>
<tr><td>30</td><td>Reign</td><td>53.36%</td></tr>
<tr><td>31</td><td>Devils</td><td>53.04%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 6.77</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Devils</td><td>3.40</td></tr>
<tr><td>2</td><td>Reign</td><td>3.48</td></tr>
<tr><td>3</td><td>Wolf Pack</td><td>3.59</td></tr>
<tr><td>4</td><td>Eagles</td><td>3.72</td></tr>
<tr><td>5</td><td>Wild</td><td>3.88</td></tr>
<tr><td>6</td><td>Stars</td><td>3.94</td></tr>
<tr><td>7</td><td>Sound Tigers</td><td>4.04</td></tr>
<tr><td>8</td><td>Admirals</td><td>4.43</td></tr>
<tr><td>9</td><td>Senators</td><td>4.43</td></tr>
<tr><td>10</td><td>Roadrunners</td><td>5.16</td></tr>
<tr><td>11</td><td>Gulls</td><td>5.59</td></tr>
<tr><td>12</td><td>Phantoms</td><td>5.80</td></tr>
<tr><td>13</td><td>Rampage </td><td>5.88</td></tr>
<tr><td>14</td><td>Bears</td><td>6.41</td></tr>
<tr><td>15</td><td>Griffins</td><td>6.68</td></tr>
<tr><td>16</td><td>Barracudas</td><td>6.82</td></tr>
<tr><td>17</td><td>Heat</td><td>6.94</td></tr>
<tr><td>18</td><td>Wolves</td><td>7.05</td></tr>
<tr><td>19</td><td>Crunch</td><td>7.23</td></tr>
<tr><td>20</td><td>Marlies</td><td>7.23</td></tr>
<tr><td>21</td><td>Moose</td><td>8.12</td></tr>
<tr><td>22</td><td>Penguins</td><td>8.15</td></tr>
<tr><td>23</td><td>IceHogs</td><td>8.44</td></tr>
<tr><td>24</td><td>Checkers</td><td>8.51</td></tr>
<tr><td>25</td><td>Bruins</td><td>9.41</td></tr>
<tr><td>26</td><td>Thunderbirds</td><td>9.71</td></tr>
<tr><td>27</td><td>Comets</td><td>10.10</td></tr>
<tr><td>28</td><td>Rocket</td><td>10.27</td></tr>
<tr><td>29</td><td> Americans</td><td>10.32</td></tr>
<tr><td>30</td><td>Monsters</td><td>10.51</td></tr>
<tr><td>31</td><td>Condors</td><td>10.59</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18.94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Penguins</td><td>22.54</td></tr>
<tr><td>2</td><td>Griffins</td><td>22.39</td></tr>
<tr><td>3</td><td>Monsters</td><td>21.65</td></tr>
<tr><td>4</td><td>Bruins</td><td>21.41</td></tr>
<tr><td>5</td><td>Marlies</td><td>21.33</td></tr>
<tr><td>6</td><td>Rampage </td><td>20.67</td></tr>
<tr><td>7</td><td> Americans</td><td>20.60</td></tr>
<tr><td>8</td><td>Rocket</td><td>20.20</td></tr>
<tr><td>9</td><td>Comets</td><td>19.88</td></tr>
<tr><td>10</td><td>Crunch</td><td>19.87</td></tr>
<tr><td>11</td><td>Condors</td><td>19.55</td></tr>
<tr><td>12</td><td>Moose</td><td>19.38</td></tr>
<tr><td>13</td><td>Barracudas</td><td>19.35</td></tr>
<tr><td>14</td><td>Thunderbirds</td><td>18.93</td></tr>
<tr><td>15</td><td>Bears</td><td>18.74</td></tr>
<tr><td>16</td><td>Admirals</td><td>18.45</td></tr>
<tr><td>17</td><td>Checkers</td><td>18.38</td></tr>
<tr><td>18</td><td>Gulls</td><td>18.24</td></tr>
<tr><td>19</td><td>IceHogs</td><td>18.17</td></tr>
<tr><td>20</td><td>Wild</td><td>18.04</td></tr>
<tr><td>21</td><td>Roadrunners</td><td>18.04</td></tr>
<tr><td>22</td><td>Stars</td><td>17.85</td></tr>
<tr><td>23</td><td>Senators</td><td>17.79</td></tr>
<tr><td>24</td><td>Sound Tigers</td><td>17.77</td></tr>
<tr><td>25</td><td>Reign</td><td>17.60</td></tr>
<tr><td>26</td><td>Heat</td><td>17.12</td></tr>
<tr><td>27</td><td>Eagles</td><td>17.10</td></tr>
<tr><td>28</td><td>Wolves</td><td>16.74</td></tr>
<tr><td>29</td><td>Devils</td><td>16.67</td></tr>
<tr><td>30</td><td>Wolf Pack</td><td>16.61</td></tr>
<tr><td>31</td><td>Phantoms</td><td>15.99</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Condors</td><td>71.26%</td></tr>
<tr><td>2</td><td>Rocket</td><td>69.68%</td></tr>
<tr><td>3</td><td>IceHogs</td><td>69.11%</td></tr>
<tr><td>4</td><td>Heat</td><td>68.69%</td></tr>
<tr><td>5</td><td>Thunderbirds</td><td>66.30%</td></tr>
<tr><td>6</td><td>Comets</td><td>63.00%</td></tr>
<tr><td>7</td><td>Checkers</td><td>61.54%</td></tr>
<tr><td>8</td><td>Phantoms</td><td>60.73%</td></tr>
<tr><td>9</td><td>Monsters</td><td>59.87%</td></tr>
<tr><td>10</td><td> Americans</td><td>59.81%</td></tr>
<tr><td>11</td><td>Wolves</td><td>54.67%</td></tr>
<tr><td>12</td><td>Gulls</td><td>52.42%</td></tr>
<tr><td>13</td><td>Bears</td><td>52.26%</td></tr>
<tr><td>14</td><td>Crunch</td><td>50.52%</td></tr>
<tr><td>15</td><td>Marlies</td><td>49.69%</td></tr>
<tr><td>16</td><td>Bruins</td><td>47.31%</td></tr>
<tr><td>17</td><td>Moose</td><td>47.28%</td></tr>
<tr><td>18</td><td>Roadrunners</td><td>46.40%</td></tr>
<tr><td>19</td><td>Barracudas</td><td>44.75%</td></tr>
<tr><td>20</td><td>Stars</td><td>40.62%</td></tr>
<tr><td>21</td><td>Admirals</td><td>40.38%</td></tr>
<tr><td>22</td><td>Penguins</td><td>40.35%</td></tr>
<tr><td>23</td><td>Eagles</td><td>39.05%</td></tr>
<tr><td>24</td><td>Griffins</td><td>38.94%</td></tr>
<tr><td>25</td><td>Senators</td><td>38.71%</td></tr>
<tr><td>26</td><td>Wild</td><td>38.21%</td></tr>
<tr><td>27</td><td>Sound Tigers</td><td>38.10%</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>37.93%</td></tr>
<tr><td>29</td><td>Rampage </td><td>37.83%</td></tr>
<tr><td>30</td><td>Reign</td><td>36.48%</td></tr>
<tr><td>31</td><td>Devils</td><td>36.00%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
