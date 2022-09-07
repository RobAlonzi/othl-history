<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Stats</title>
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
<tr><td>Avalanche</td><td>82</td><td>25</td><td>40</td><td>3</td><td>5</td><td>3</td><td>6</td><td>219</td><td>256</td><td>41</td><td>14</td><td>22</td><td>1</td><td>1</td><td>1</td><td>2</td><td>113</td><td>127</td><td>41</td><td>11</td><td>18</td><td>2</td><td>4</td><td>2</td><td>4</td><td>106</td><td>129</td><td>219</td><td>379</td><td>598</td></tr>
<tr><td>Blackhawks</td><td>82</td><td>41</td><td>29</td><td>5</td><td>3</td><td>3</td><td>1</td><td>264</td><td>223</td><td>41</td><td>21</td><td>14</td><td>4</td><td>1</td><td>1</td><td>0</td><td>145</td><td>112</td><td>41</td><td>20</td><td>15</td><td>1</td><td>2</td><td>2</td><td>1</td><td>119</td><td>111</td><td>264</td><td>467</td><td>731</td></tr>
<tr><td>Blue Jackets</td><td>82</td><td>38</td><td>37</td><td>4</td><td>1</td><td>1</td><td>1</td><td>223</td><td>236</td><td>41</td><td>21</td><td>16</td><td>1</td><td>1</td><td>1</td><td>1</td><td>122</td><td>120</td><td>41</td><td>17</td><td>21</td><td>3</td><td>0</td><td>0</td><td>0</td><td>101</td><td>116</td><td>223</td><td>399</td><td>622</td></tr>
<tr><td>Blues</td><td>82</td><td>22</td><td>43</td><td>1</td><td>4</td><td>8</td><td>4</td><td>209</td><td>278</td><td>41</td><td>12</td><td>22</td><td>1</td><td>1</td><td>5</td><td>0</td><td>105</td><td>143</td><td>41</td><td>10</td><td>21</td><td>0</td><td>3</td><td>3</td><td>4</td><td>104</td><td>135</td><td>209</td><td>358</td><td>567</td></tr>
<tr><td>Bruins</td><td>82</td><td>45</td><td>25</td><td>6</td><td>1</td><td>4</td><td>1</td><td>276</td><td>196</td><td>41</td><td>26</td><td>12</td><td>2</td><td>0</td><td>0</td><td>1</td><td>143</td><td>88</td><td>41</td><td>19</td><td>13</td><td>4</td><td>1</td><td>4</td><td>0</td><td>133</td><td>108</td><td>276</td><td>480</td><td>756</td></tr>
<tr><td>Canadiens</td><td>82</td><td>33</td><td>37</td><td>0</td><td>4</td><td>3</td><td>5</td><td>220</td><td>239</td><td>41</td><td>18</td><td>19</td><td>0</td><td>1</td><td>1</td><td>2</td><td>121</td><td>121</td><td>41</td><td>15</td><td>18</td><td>0</td><td>3</td><td>2</td><td>3</td><td>99</td><td>118</td><td>220</td><td>397</td><td>617</td></tr>
<tr><td>Canucks</td><td>82</td><td>44</td><td>22</td><td>7</td><td>2</td><td>3</td><td>4</td><td>296</td><td>215</td><td>41</td><td>23</td><td>10</td><td>3</td><td>2</td><td>1</td><td>2</td><td>151</td><td>104</td><td>41</td><td>21</td><td>12</td><td>4</td><td>0</td><td>2</td><td>2</td><td>145</td><td>111</td><td>296</td><td>526</td><td>822</td></tr>
<tr><td>Capitals</td><td>82</td><td>28</td><td>45</td><td>2</td><td>5</td><td>2</td><td>0</td><td>208</td><td>243</td><td>41</td><td>14</td><td>21</td><td>1</td><td>3</td><td>2</td><td>0</td><td>115</td><td>128</td><td>41</td><td>14</td><td>24</td><td>1</td><td>2</td><td>0</td><td>0</td><td>93</td><td>115</td><td>208</td><td>375</td><td>583</td></tr>
<tr><td>Coyotes</td><td>82</td><td>46</td><td>19</td><td>2</td><td>4</td><td>4</td><td>7</td><td>241</td><td>184</td><td>41</td><td>27</td><td>7</td><td>0</td><td>2</td><td>2</td><td>3</td><td>128</td><td>86</td><td>41</td><td>19</td><td>12</td><td>2</td><td>2</td><td>2</td><td>4</td><td>113</td><td>98</td><td>241</td><td>426</td><td>667</td></tr>
<tr><td>Devils</td><td>82</td><td>28</td><td>39</td><td>8</td><td>4</td><td>0</td><td>3</td><td>223</td><td>239</td><td>41</td><td>17</td><td>17</td><td>3</td><td>2</td><td>0</td><td>2</td><td>115</td><td>115</td><td>41</td><td>11</td><td>22</td><td>5</td><td>2</td><td>0</td><td>1</td><td>108</td><td>124</td><td>223</td><td>401</td><td>624</td></tr>
<tr><td>Ducks</td><td>82</td><td>40</td><td>29</td><td>3</td><td>4</td><td>4</td><td>2</td><td>246</td><td>230</td><td>41</td><td>24</td><td>12</td><td>3</td><td>0</td><td>2</td><td>0</td><td>131</td><td>103</td><td>41</td><td>16</td><td>17</td><td>0</td><td>4</td><td>2</td><td>2</td><td>115</td><td>127</td><td>246</td><td>436</td><td>682</td></tr>
<tr><td>Flames</td><td>82</td><td>48</td><td>19</td><td>6</td><td>2</td><td>5</td><td>2</td><td>268</td><td>191</td><td>41</td><td>23</td><td>12</td><td>4</td><td>0</td><td>1</td><td>1</td><td>131</td><td>95</td><td>41</td><td>25</td><td>7</td><td>2</td><td>2</td><td>4</td><td>1</td><td>137</td><td>96</td><td>268</td><td>470</td><td>738</td></tr>
<tr><td>Flyers</td><td>82</td><td>43</td><td>24</td><td>4</td><td>3</td><td>5</td><td>3</td><td>258</td><td>193</td><td>41</td><td>24</td><td>8</td><td>3</td><td>2</td><td>2</td><td>2</td><td>136</td><td>87</td><td>41</td><td>19</td><td>16</td><td>1</td><td>1</td><td>3</td><td>1</td><td>122</td><td>106</td><td>258</td><td>475</td><td>733</td></tr>
<tr><td>Golden Knights</td><td>82</td><td>26</td><td>41</td><td>5</td><td>5</td><td>4</td><td>1</td><td>211</td><td>230</td><td>41</td><td>13</td><td>18</td><td>4</td><td>3</td><td>2</td><td>1</td><td>113</td><td>105</td><td>41</td><td>13</td><td>23</td><td>1</td><td>2</td><td>2</td><td>0</td><td>98</td><td>125</td><td>211</td><td>375</td><td>586</td></tr>
<tr><td>Hurricanes</td><td>82</td><td>17</td><td>52</td><td>3</td><td>5</td><td>2</td><td>3</td><td>162</td><td>286</td><td>41</td><td>8</td><td>26</td><td>1</td><td>3</td><td>1</td><td>2</td><td>85</td><td>149</td><td>41</td><td>9</td><td>26</td><td>2</td><td>2</td><td>1</td><td>1</td><td>77</td><td>137</td><td>162</td><td>292</td><td>454</td></tr>
<tr><td>Islanders</td><td>82</td><td>27</td><td>36</td><td>6</td><td>3</td><td>6</td><td>4</td><td>226</td><td>229</td><td>41</td><td>14</td><td>20</td><td>2</td><td>1</td><td>3</td><td>1</td><td>108</td><td>117</td><td>41</td><td>13</td><td>16</td><td>4</td><td>2</td><td>3</td><td>3</td><td>118</td><td>112</td><td>226</td><td>389</td><td>615</td></tr>
<tr><td>Jets</td><td>82</td><td>28</td><td>35</td><td>4</td><td>3</td><td>9</td><td>3</td><td>231</td><td>242</td><td>41</td><td>15</td><td>15</td><td>4</td><td>0</td><td>5</td><td>2</td><td>124</td><td>119</td><td>41</td><td>13</td><td>20</td><td>0</td><td>3</td><td>4</td><td>1</td><td>107</td><td>123</td><td>231</td><td>391</td><td>622</td></tr>
<tr><td>Kings</td><td>82</td><td>43</td><td>30</td><td>2</td><td>3</td><td>1</td><td>3</td><td>250</td><td>220</td><td>41</td><td>21</td><td>15</td><td>1</td><td>1</td><td>0</td><td>3</td><td>128</td><td>110</td><td>41</td><td>22</td><td>15</td><td>1</td><td>2</td><td>1</td><td>0</td><td>122</td><td>110</td><td>250</td><td>451</td><td>701</td></tr>
<tr><td>Lightning</td><td>82</td><td>41</td><td>27</td><td>4</td><td>4</td><td>2</td><td>4</td><td>254</td><td>212</td><td>41</td><td>18</td><td>15</td><td>3</td><td>3</td><td>1</td><td>1</td><td>123</td><td>104</td><td>41</td><td>23</td><td>12</td><td>1</td><td>1</td><td>1</td><td>3</td><td>131</td><td>108</td><td>254</td><td>463</td><td>717</td></tr>
<tr><td>Maple Leafs</td><td>82</td><td>42</td><td>30</td><td>3</td><td>2</td><td>1</td><td>4</td><td>253</td><td>229</td><td>41</td><td>23</td><td>12</td><td>2</td><td>2</td><td>0</td><td>2</td><td>137</td><td>111</td><td>41</td><td>19</td><td>18</td><td>1</td><td>0</td><td>1</td><td>2</td><td>116</td><td>118</td><td>253</td><td>454</td><td>707</td></tr>
<tr><td>Oilers</td><td>82</td><td>42</td><td>27</td><td>2</td><td>2</td><td>2</td><td>7</td><td>251</td><td>213</td><td>41</td><td>25</td><td>10</td><td>0</td><td>0</td><td>2</td><td>4</td><td>140</td><td>99</td><td>41</td><td>17</td><td>17</td><td>2</td><td>2</td><td>0</td><td>3</td><td>111</td><td>114</td><td>251</td><td>450</td><td>701</td></tr>
<tr><td>Panthers</td><td>82</td><td>35</td><td>33</td><td>2</td><td>2</td><td>5</td><td>5</td><td>221</td><td>228</td><td>41</td><td>19</td><td>17</td><td>1</td><td>2</td><td>2</td><td>0</td><td>106</td><td>107</td><td>41</td><td>16</td><td>16</td><td>1</td><td>0</td><td>3</td><td>5</td><td>115</td><td>121</td><td>221</td><td>379</td><td>600</td></tr>
<tr><td>Penguins</td><td>82</td><td>21</td><td>46</td><td>0</td><td>6</td><td>4</td><td>5</td><td>218</td><td>280</td><td>41</td><td>11</td><td>19</td><td>0</td><td>3</td><td>4</td><td>4</td><td>107</td><td>128</td><td>41</td><td>10</td><td>27</td><td>0</td><td>3</td><td>0</td><td>1</td><td>111</td><td>152</td><td>218</td><td>389</td><td>607</td></tr>
<tr><td>Predators</td><td>82</td><td>36</td><td>33</td><td>3</td><td>2</td><td>5</td><td>3</td><td>265</td><td>248</td><td>41</td><td>21</td><td>13</td><td>2</td><td>0</td><td>4</td><td>1</td><td>142</td><td>111</td><td>41</td><td>15</td><td>20</td><td>1</td><td>2</td><td>1</td><td>2</td><td>123</td><td>137</td><td>265</td><td>472</td><td>737</td></tr>
<tr><td>Rangers</td><td>82</td><td>27</td><td>45</td><td>3</td><td>4</td><td>2</td><td>1</td><td>219</td><td>269</td><td>41</td><td>13</td><td>23</td><td>2</td><td>1</td><td>1</td><td>1</td><td>106</td><td>131</td><td>41</td><td>14</td><td>22</td><td>1</td><td>3</td><td>1</td><td>0</td><td>113</td><td>138</td><td>219</td><td>394</td><td>613</td></tr>
<tr><td>Red Wings</td><td>82</td><td>30</td><td>39</td><td>2</td><td>6</td><td>3</td><td>2</td><td>236</td><td>275</td><td>41</td><td>19</td><td>14</td><td>0</td><td>4</td><td>2</td><td>2</td><td>124</td><td>120</td><td>41</td><td>11</td><td>25</td><td>2</td><td>2</td><td>1</td><td>0</td><td>112</td><td>155</td><td>236</td><td>400</td><td>636</td></tr>
<tr><td>Sabres</td><td>82</td><td>42</td><td>23</td><td>4</td><td>4</td><td>4</td><td>5</td><td>242</td><td>202</td><td>41</td><td>22</td><td>8</td><td>1</td><td>3</td><td>3</td><td>4</td><td>113</td><td>96</td><td>41</td><td>20</td><td>15</td><td>3</td><td>1</td><td>1</td><td>1</td><td>129</td><td>106</td><td>242</td><td>432</td><td>674</td></tr>
<tr><td>Senators</td><td>82</td><td>25</td><td>41</td><td>4</td><td>5</td><td>4</td><td>3</td><td>203</td><td>232</td><td>41</td><td>16</td><td>16</td><td>3</td><td>3</td><td>3</td><td>0</td><td>113</td><td>112</td><td>41</td><td>9</td><td>25</td><td>1</td><td>2</td><td>1</td><td>3</td><td>90</td><td>120</td><td>203</td><td>352</td><td>555</td></tr>
<tr><td>Sharks</td><td>82</td><td>29</td><td>36</td><td>2</td><td>5</td><td>5</td><td>5</td><td>214</td><td>245</td><td>41</td><td>14</td><td>19</td><td>1</td><td>2</td><td>1</td><td>4</td><td>97</td><td>118</td><td>41</td><td>15</td><td>17</td><td>1</td><td>3</td><td>4</td><td>1</td><td>117</td><td>127</td><td>214</td><td>383</td><td>597</td></tr>
<tr><td>Stars</td><td>82</td><td>36</td><td>27</td><td>7</td><td>3</td><td>2</td><td>7</td><td>264</td><td>243</td><td>41</td><td>21</td><td>9</td><td>5</td><td>3</td><td>2</td><td>1</td><td>137</td><td>105</td><td>41</td><td>15</td><td>18</td><td>2</td><td>0</td><td>0</td><td>6</td><td>127</td><td>138</td><td>264</td><td>459</td><td>723</td></tr>
<tr><td>Wild</td><td>82</td><td>23</td><td>42</td><td>2</td><td>3</td><td>5</td><td>7</td><td>209</td><td>274</td><td>41</td><td>11</td><td>22</td><td>0</td><td>1</td><td>4</td><td>3</td><td>110</td><td>140</td><td>41</td><td>12</td><td>20</td><td>2</td><td>2</td><td>1</td><td>4</td><td>99</td><td>134</td><td>209</td><td>365</td><td>574</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Avalanche</td><td>COL</td><td>81</td><td>74</td><td>58</td><td>8</td><td>2450</td><td>811</td><td>760</td><td>848</td><td>66</td><td>2711</td><td>798</td><td>618</td><td>1664</td><td>266</td><td>52</td><td>19.55%</td><td>276</td><td>56</td><td>79.71%</td><td>2</td><td>50.39%</td><td>53.33%</td><td>52.60%</td><td>2011</td><td>1915</td><td>1052</td><td>609</td><td>1313</td><td>522</td><td>3</td><td>3</td></tr>
<tr><td>Blackhawks</td><td>CHI</td><td>94</td><td>88</td><td>74</td><td>10</td><td>2922</td><td>937</td><td>1011</td><td>945</td><td>43</td><td>2508</td><td>676</td><td>563</td><td>1660</td><td>302</td><td>58</td><td>19.21%</td><td>244</td><td>39</td><td>84.02%</td><td>2</td><td>52.71%</td><td>51.40%</td><td>52.06%</td><td>1920</td><td>1985</td><td>1053</td><td>603</td><td>1375</td><td>533</td><td>4</td><td>6</td></tr>
<tr><td>Blue Jackets</td><td>CLB</td><td>87</td><td>75</td><td>56</td><td>5</td><td>2495</td><td>826</td><td>856</td><td>796</td><td>22</td><td>2700</td><td>808</td><td>549</td><td>1654</td><td>261</td><td>47</td><td>18.01%</td><td>225</td><td>49</td><td>78.22%</td><td>1</td><td>43.48%</td><td>45.83%</td><td>46.82%</td><td>1987</td><td>1915</td><td>1040</td><td>594</td><td>1333</td><td>514</td><td>4</td><td>4</td></tr>
<tr><td>Blues</td><td>STL</td><td>82</td><td>59</td><td>59</td><td>12</td><td>2482</td><td>868</td><td>817</td><td>752</td><td>79</td><td>2908</td><td>860</td><td>698</td><td>1754</td><td>250</td><td>38</td><td>15.20%</td><td>292</td><td>57</td><td>80.48%</td><td>4</td><td>48.54%</td><td>48.28%</td><td>47.73%</td><td>2084</td><td>1844</td><td>1059</td><td>621</td><td>1253</td><td>510</td><td>1</td><td>2</td></tr>
<tr><td>Bruins</td><td>BOS</td><td>103</td><td>84</td><td>79</td><td>14</td><td>3101</td><td>1023</td><td>1043</td><td>1016</td><td>32</td><td>2440</td><td>699</td><td>632</td><td>1769</td><td>293</td><td>65</td><td>22.18%</td><td>280</td><td>53</td><td>81.07%</td><td>1</td><td>54.36%</td><td>53.28%</td><td>54.74%</td><td>1910</td><td>1983</td><td>1067</td><td>612</td><td>1373</td><td>530</td><td>5</td><td>3</td></tr>
<tr><td>Canadiens</td><td>MTL</td><td>82</td><td>65</td><td>70</td><td>10</td><td>2342</td><td>768</td><td>781</td><td>764</td><td>66</td><td>2626</td><td>780</td><td>619</td><td>1631</td><td>233</td><td>35</td><td>15.02%</td><td>239</td><td>46</td><td>80.75%</td><td>4</td><td>49.76%</td><td>49.55%</td><td>46.24%</td><td>1988</td><td>1917</td><td>1065</td><td>608</td><td>1318</td><td>523</td><td>7</td><td>3</td></tr>
<tr><td>Canucks</td><td>VAN</td><td>115</td><td>91</td><td>80</td><td>16</td><td>3127</td><td>1035</td><td>1068</td><td>994</td><td>54</td><td>2449</td><td>700</td><td>631</td><td>1705</td><td>269</td><td>62</td><td>23.05%</td><td>268</td><td>43</td><td>83.96%</td><td>3</td><td>53.80%</td><td>53.66%</td><td>56.25%</td><td>1891</td><td>2008</td><td>1066</td><td>605</td><td>1400</td><td>533</td><td>5</td><td>2</td></tr>
<tr><td>Capitals</td><td>WSH</td><td>68</td><td>72</td><td>64</td><td>5</td><td>2538</td><td>849</td><td>812</td><td>863</td><td>20</td><td>2481</td><td>687</td><td>609</td><td>1678</td><td>270</td><td>38</td><td>14.07%</td><td>257</td><td>49</td><td>80.93%</td><td>2</td><td>52.04%</td><td>53.61%</td><td>54.63%</td><td>1902</td><td>2000</td><td>1040</td><td>595</td><td>1397</td><td>521</td><td>5</td><td>3</td></tr>
<tr><td>Coyotes</td><td>ARI</td><td>95</td><td>76</td><td>64</td><td>12</td><td>2899</td><td>1014</td><td>918</td><td>919</td><td>90</td><td>2627</td><td>773</td><td>573</td><td>1622</td><td>270</td><td>60</td><td>22.22%</td><td>234</td><td>26</td><td>88.89%</td><td>4</td><td>51.43%</td><td>53.54%</td><td>55.65%</td><td>1961</td><td>1992</td><td>1040</td><td>601</td><td>1395</td><td>524</td><td>10</td><td>4</td></tr>
<tr><td>Devils</td><td>NJD</td><td>78</td><td>51</td><td>86</td><td>10</td><td>2584</td><td>864</td><td>841</td><td>846</td><td>42</td><td>2634</td><td>792</td><td>684</td><td>1703</td><td>245</td><td>43</td><td>17.55%</td><td>287</td><td>45</td><td>84.32%</td><td>4</td><td>53.42%</td><td>53.58%</td><td>55.04%</td><td>1992</td><td>1910</td><td>1054</td><td>606</td><td>1311</td><td>519</td><td>2</td><td>3</td></tr>
<tr><td>Ducks</td><td>ANH</td><td>72</td><td>86</td><td>81</td><td>12</td><td>2723</td><td>862</td><td>951</td><td>884</td><td>50</td><td>2621</td><td>740</td><td>552</td><td>1686</td><td>256</td><td>48</td><td>18.75%</td><td>252</td><td>45</td><td>82.14%</td><td>0</td><td>50.96%</td><td>52.62%</td><td>49.80%</td><td>1907</td><td>2012</td><td>1050</td><td>592</td><td>1413</td><td>528</td><td>5</td><td>3</td></tr>
<tr><td>Flames</td><td>CGY</td><td>99</td><td>76</td><td>82</td><td>17</td><td>2667</td><td>921</td><td>871</td><td>842</td><td>64</td><td>2422</td><td>712</td><td>639</td><td>1533</td><td>280</td><td>54</td><td>19.29%</td><td>265</td><td>37</td><td>86.04%</td><td>3</td><td>55.30%</td><td>52.99%</td><td>54.18%</td><td>1864</td><td>2071</td><td>1038</td><td>598</td><td>1465</td><td>528</td><td>9</td><td>3</td></tr>
<tr><td>Flyers</td><td>PHL</td><td>90</td><td>79</td><td>80</td><td>13</td><td>2755</td><td>936</td><td>879</td><td>907</td><td>59</td><td>2345</td><td>698</td><td>494</td><td>1487</td><td>283</td><td>63</td><td>22.26%</td><td>205</td><td>37</td><td>81.95%</td><td>2</td><td>53.25%</td><td>53.26%</td><td>53.31%</td><td>1894</td><td>2027</td><td>1054</td><td>595</td><td>1422</td><td>532</td><td>6</td><td>5</td></tr>
<tr><td>Golden Knights</td><td>VGK</td><td>70</td><td>61</td><td>71</td><td>14</td><td>2477</td><td>815</td><td>834</td><td>798</td><td>51</td><td>2631</td><td>774</td><td>620</td><td>1532</td><td>256</td><td>31</td><td>12.11%</td><td>263</td><td>50</td><td>80.99%</td><td>3</td><td>53.23%</td><td>52.86%</td><td>54.92%</td><td>1958</td><td>1964</td><td>1041</td><td>600</td><td>1365</td><td>513</td><td>2</td><td>1</td></tr>
<tr><td>Hurricanes</td><td>CAR</td><td>48</td><td>59</td><td>50</td><td>8</td><td>2164</td><td>641</td><td>753</td><td>744</td><td>41</td><td>2622</td><td>811</td><td>601</td><td>1651</td><td>238</td><td>50</td><td>21.01%</td><td>251</td><td>58</td><td>76.89%</td><td>0</td><td>47.84%</td><td>49.68%</td><td>48.06%</td><td>1992</td><td>1911</td><td>1054</td><td>602</td><td>1301</td><td>524</td><td>3</td><td>1</td></tr>
<tr><td>Islanders</td><td>NYI</td><td>88</td><td>62</td><td>64</td><td>16</td><td>2496</td><td>811</td><td>778</td><td>851</td><td>87</td><td>2603</td><td>774</td><td>616</td><td>1575</td><td>256</td><td>38</td><td>14.84%</td><td>245</td><td>44</td><td>82.04%</td><td>4</td><td>50.84%</td><td>49.39%</td><td>50.04%</td><td>1927</td><td>2017</td><td>1051</td><td>599</td><td>1408</td><td>529</td><td>6</td><td>6</td></tr>
<tr><td>Jets</td><td>WPG</td><td>81</td><td>69</td><td>68</td><td>18</td><td>2469</td><td>851</td><td>756</td><td>818</td><td>89</td><td>2530</td><td>787</td><td>691</td><td>1757</td><td>271</td><td>42</td><td>15.50%</td><td>295</td><td>48</td><td>83.73%</td><td>1</td><td>52.44%</td><td>52.45%</td><td>51.91%</td><td>1945</td><td>1991</td><td>1060</td><td>609</td><td>1367</td><td>532</td><td>2</td><td>1</td></tr>
<tr><td>Kings</td><td>LAK</td><td>107</td><td>63</td><td>77</td><td>5</td><td>2588</td><td>878</td><td>842</td><td>845</td><td>36</td><td>2502</td><td>718</td><td>586</td><td>1617</td><td>266</td><td>44</td><td>16.54%</td><td>240</td><td>43</td><td>82.08%</td><td>1</td><td>50.54%</td><td>48.63%</td><td>47.46%</td><td>1895</td><td>2010</td><td>1047</td><td>589</td><td>1405</td><td>528</td><td>4</td><td>1</td></tr>
<tr><td>Lightning</td><td>TBL</td><td>101</td><td>82</td><td>65</td><td>11</td><td>2749</td><td>895</td><td>916</td><td>911</td><td>45</td><td>2460</td><td>712</td><td>686</td><td>1660</td><td>258</td><td>45</td><td>17.44%</td><td>293</td><td>46</td><td>84.30%</td><td>5</td><td>50.66%</td><td>50.25%</td><td>53.04%</td><td>1934</td><td>1963</td><td>1065</td><td>612</td><td>1350</td><td>529</td><td>6</td><td>1</td></tr>
<tr><td>Maple Leafs</td><td>TOR</td><td>84</td><td>78</td><td>87</td><td>5</td><td>2584</td><td>793</td><td>850</td><td>915</td><td>39</td><td>2469</td><td>756</td><td>595</td><td>1587</td><td>259</td><td>52</td><td>20.08%</td><td>257</td><td>46</td><td>82.10%</td><td>3</td><td>53.75%</td><td>56.99%</td><td>51.35%</td><td>1904</td><td>2009</td><td>1047</td><td>589</td><td>1401</td><td>532</td><td>4</td><td>2</td></tr>
<tr><td>Oilers</td><td>EDM</td><td>95</td><td>71</td><td>81</td><td>6</td><td>2936</td><td>1011</td><td>969</td><td>926</td><td>58</td><td>2366</td><td>676</td><td>652</td><td>1731</td><td>264</td><td>46</td><td>17.42%</td><td>272</td><td>51</td><td>81.25%</td><td>4</td><td>53.37%</td><td>52.82%</td><td>54.04%</td><td>1866</td><td>2049</td><td>1058</td><td>591</td><td>1428</td><td>537</td><td>4</td><td>1</td></tr>
<tr><td>Panthers</td><td>FLA</td><td>85</td><td>62</td><td>67</td><td>12</td><td>2557</td><td>866</td><td>823</td><td>838</td><td>66</td><td>2741</td><td>781</td><td>603</td><td>1676</td><td>238</td><td>41</td><td>17.23%</td><td>257</td><td>45</td><td>82.49%</td><td>4</td><td>52.20%</td><td>52.20%</td><td>51.01%</td><td>2003</td><td>1934</td><td>1042</td><td>605</td><td>1340</td><td>516</td><td>4</td><td>1</td></tr>
<tr><td>Penguins</td><td>PIT</td><td>82</td><td>70</td><td>62</td><td>8</td><td>2403</td><td>825</td><td>738</td><td>817</td><td>54</td><td>2872</td><td>844</td><td>764</td><td>1771</td><td>266</td><td>50</td><td>18.80%</td><td>298</td><td>57</td><td>80.87%</td><td>1</td><td>43.29%</td><td>43.22%</td><td>44.12%</td><td>2088</td><td>1829</td><td>1053</td><td>616</td><td>1239</td><td>510</td><td>2</td><td>2</td></tr>
<tr><td>Predators</td><td>NSH</td><td>93</td><td>83</td><td>81</td><td>17</td><td>2981</td><td>971</td><td>967</td><td>1006</td><td>75</td><td>2685</td><td>806</td><td>662</td><td>1748</td><td>268</td><td>66</td><td>24.63%</td><td>269</td><td>47</td><td>82.53%</td><td>1</td><td>50.02%</td><td>49.51%</td><td>49.32%</td><td>2003</td><td>1920</td><td>1046</td><td>604</td><td>1328</td><td>511</td><td>5</td><td>1</td></tr>
<tr><td>Rangers</td><td>NYR</td><td>93</td><td>61</td><td>60</td><td>7</td><td>2423</td><td>852</td><td>778</td><td>777</td><td>25</td><td>2665</td><td>778</td><td>669</td><td>1751</td><td>239</td><td>41</td><td>17.15%</td><td>271</td><td>62</td><td>77.12%</td><td>3</td><td>45.01%</td><td>45.43%</td><td>45.43%</td><td>1962</td><td>1942</td><td>1045</td><td>585</td><td>1346</td><td>525</td><td>4</td><td>3</td></tr>
<tr><td>Red Wings</td><td>DET</td><td>77</td><td>69</td><td>85</td><td>8</td><td>2601</td><td>882</td><td>868</td><td>839</td><td>26</td><td>2813</td><td>808</td><td>585</td><td>1663</td><td>265</td><td>44</td><td>16.60%</td><td>228</td><td>57</td><td>75.00%</td><td>0</td><td>49.35%</td><td>48.23%</td><td>47.32%</td><td>2049</td><td>1873</td><td>1037</td><td>599</td><td>1299</td><td>509</td><td>4</td><td>5</td></tr>
<tr><td>Sabres</td><td>BUF</td><td>99</td><td>74</td><td>61</td><td>12</td><td>2690</td><td>893</td><td>879</td><td>883</td><td>67</td><td>2486</td><td>684</td><td>583</td><td>1614</td><td>271</td><td>48</td><td>17.71%</td><td>239</td><td>42</td><td>82.43%</td><td>1</td><td>50.83%</td><td>50.80%</td><td>51.75%</td><td>1877</td><td>2057</td><td>1045</td><td>589</td><td>1459</td><td>529</td><td>4</td><td>4</td></tr>
<tr><td>Senators</td><td>OTT</td><td>83</td><td>66</td><td>46</td><td>12</td><td>2236</td><td>747</td><td>755</td><td>705</td><td>53</td><td>2644</td><td>766</td><td>628</td><td>1703</td><td>241</td><td>36</td><td>14.94%</td><td>253</td><td>48</td><td>81.03%</td><td>0</td><td>46.07%</td><td>47.89%</td><td>50.76%</td><td>1975</td><td>1946</td><td>1062</td><td>607</td><td>1346</td><td>524</td><td>4</td><td>2</td></tr>
<tr><td>Sharks</td><td>SJS</td><td>83</td><td>54</td><td>70</td><td>13</td><td>2405</td><td>825</td><td>776</td><td>777</td><td>61</td><td>2721</td><td>834</td><td>607</td><td>1659</td><td>260</td><td>56</td><td>21.54%</td><td>256</td><td>54</td><td>78.91%</td><td>3</td><td>46.93%</td><td>45.48%</td><td>47.19%</td><td>1966</td><td>1952</td><td>1060</td><td>594</td><td>1348</td><td>530</td><td>5</td><td>4</td></tr>
<tr><td>Stars</td><td>DAL</td><td>104</td><td>82</td><td>69</td><td>14</td><td>2780</td><td>940</td><td>941</td><td>850</td><td>83</td><td>2658</td><td>800</td><td>785</td><td>1648</td><td>242</td><td>43</td><td>17.77%</td><td>300</td><td>46</td><td>84.67%</td><td>2</td><td>53.48%</td><td>54.24%</td><td>54.40%</td><td>1968</td><td>1946</td><td>1065</td><td>610</td><td>1335</td><td>531</td><td>5</td><td>2</td></tr>
<tr><td>Wild</td><td>MIN</td><td>63</td><td>77</td><td>62</td><td>12</td><td>2328</td><td>772</td><td>772</td><td>755</td><td>77</td><td>3012</td><td>846</td><td>636</td><td>1809</td><td>237</td><td>49</td><td>20.68%</td><td>262</td><td>59</td><td>77.48%</td><td>2</td><td>35.63%</td><td>37.77%</td><td>34.45%</td><td>2106</td><td>1837</td><td>1050</td><td>605</td><td>1250</td><td>512</td><td>0</td><td>4</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.86</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>3.61</td></tr>
<tr><td>2</td><td>Bruins</td><td>3.37</td></tr>
<tr><td>3</td><td>Flames</td><td>3.27</td></tr>
<tr><td>4</td><td>Predators</td><td>3.23</td></tr>
<tr><td>5</td><td>Blackhawks</td><td>3.22</td></tr>
<tr><td>6</td><td>Stars</td><td>3.22</td></tr>
<tr><td>7</td><td>Flyers</td><td>3.15</td></tr>
<tr><td>8</td><td>Lightning</td><td>3.10</td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>3.09</td></tr>
<tr><td>10</td><td>Oilers</td><td>3.06</td></tr>
<tr><td>11</td><td>Kings</td><td>3.05</td></tr>
<tr><td>12</td><td>Ducks</td><td>3.00</td></tr>
<tr><td>13</td><td>Sabres</td><td>2.95</td></tr>
<tr><td>14</td><td>Coyotes</td><td>2.94</td></tr>
<tr><td>15</td><td>Red Wings</td><td>2.88</td></tr>
<tr><td>16</td><td>Jets</td><td>2.82</td></tr>
<tr><td>17</td><td>Islanders</td><td>2.76</td></tr>
<tr><td>18</td><td>Blue Jackets</td><td>2.72</td></tr>
<tr><td>19</td><td>Devils</td><td>2.72</td></tr>
<tr><td>20</td><td>Panthers</td><td>2.70</td></tr>
<tr><td>21</td><td>Canadiens</td><td>2.68</td></tr>
<tr><td>22</td><td>Avalanche</td><td>2.67</td></tr>
<tr><td>23</td><td>Rangers</td><td>2.67</td></tr>
<tr><td>24</td><td>Penguins</td><td>2.66</td></tr>
<tr><td>25</td><td>Sharks</td><td>2.61</td></tr>
<tr><td>26</td><td>Golden Knights</td><td>2.57</td></tr>
<tr><td>27</td><td>Blues</td><td>2.55</td></tr>
<tr><td>28</td><td>Wild</td><td>2.55</td></tr>
<tr><td>29</td><td>Capitals</td><td>2.54</td></tr>
<tr><td>30</td><td>Senators</td><td>2.48</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>1.98</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.86</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Coyotes</td><td>2.24</td></tr>
<tr><td>2</td><td>Flames</td><td>2.33</td></tr>
<tr><td>3</td><td>Flyers</td><td>2.35</td></tr>
<tr><td>4</td><td>Bruins</td><td>2.39</td></tr>
<tr><td>5</td><td>Sabres</td><td>2.46</td></tr>
<tr><td>6</td><td>Lightning</td><td>2.59</td></tr>
<tr><td>7</td><td>Oilers</td><td>2.60</td></tr>
<tr><td>8</td><td>Canucks</td><td>2.62</td></tr>
<tr><td>9</td><td>Kings</td><td>2.68</td></tr>
<tr><td>10</td><td>Blackhawks</td><td>2.72</td></tr>
<tr><td>11</td><td>Panthers</td><td>2.78</td></tr>
<tr><td>12</td><td>Maple Leafs</td><td>2.79</td></tr>
<tr><td>13</td><td>Islanders</td><td>2.79</td></tr>
<tr><td>14</td><td>Golden Knights</td><td>2.80</td></tr>
<tr><td>15</td><td>Ducks</td><td>2.80</td></tr>
<tr><td>16</td><td>Senators</td><td>2.83</td></tr>
<tr><td>17</td><td>Blue Jackets</td><td>2.88</td></tr>
<tr><td>18</td><td>Devils</td><td>2.91</td></tr>
<tr><td>19</td><td>Canadiens</td><td>2.91</td></tr>
<tr><td>20</td><td>Jets</td><td>2.95</td></tr>
<tr><td>21</td><td>Stars</td><td>2.96</td></tr>
<tr><td>22</td><td>Capitals</td><td>2.96</td></tr>
<tr><td>23</td><td>Sharks</td><td>2.99</td></tr>
<tr><td>24</td><td>Predators</td><td>3.02</td></tr>
<tr><td>25</td><td>Avalanche</td><td>3.12</td></tr>
<tr><td>26</td><td>Rangers</td><td>3.28</td></tr>
<tr><td>27</td><td>Wild</td><td>3.34</td></tr>
<tr><td>28</td><td>Red Wings</td><td>3.35</td></tr>
<tr><td>29</td><td>Blues</td><td>3.39</td></tr>
<tr><td>30</td><td>Penguins</td><td>3.41</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>3.49</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Bruins</td><td>140.82%</td></tr>
<tr><td>2</td><td>Flames</td><td>140.31%</td></tr>
<tr><td>3</td><td>Canucks</td><td>137.67%</td></tr>
<tr><td>4</td><td>Flyers</td><td>133.68%</td></tr>
<tr><td>5</td><td>Coyotes</td><td>130.98%</td></tr>
<tr><td>6</td><td>Lightning</td><td>119.81%</td></tr>
<tr><td>7</td><td>Sabres</td><td>119.80%</td></tr>
<tr><td>8</td><td>Blackhawks</td><td>118.39%</td></tr>
<tr><td>9</td><td>Oilers</td><td>117.84%</td></tr>
<tr><td>10</td><td>Kings</td><td>113.64%</td></tr>
<tr><td>11</td><td>Maple Leafs</td><td>110.48%</td></tr>
<tr><td>12</td><td>Stars</td><td>108.64%</td></tr>
<tr><td>13</td><td>Ducks</td><td>106.96%</td></tr>
<tr><td>14</td><td>Predators</td><td>106.85%</td></tr>
<tr><td>15</td><td>Islanders</td><td>98.69%</td></tr>
<tr><td>16</td><td>Panthers</td><td>96.93%</td></tr>
<tr><td>17</td><td>Jets</td><td>95.45%</td></tr>
<tr><td>18</td><td>Blue Jackets</td><td>94.49%</td></tr>
<tr><td>19</td><td>Devils</td><td>93.31%</td></tr>
<tr><td>20</td><td>Canadiens</td><td>92.05%</td></tr>
<tr><td>21</td><td>Golden Knights</td><td>91.74%</td></tr>
<tr><td>22</td><td>Senators</td><td>87.50%</td></tr>
<tr><td>23</td><td>Sharks</td><td>87.35%</td></tr>
<tr><td>24</td><td>Red Wings</td><td>85.82%</td></tr>
<tr><td>25</td><td>Capitals</td><td>85.60%</td></tr>
<tr><td>26</td><td>Avalanche</td><td>85.55%</td></tr>
<tr><td>27</td><td>Rangers</td><td>81.41%</td></tr>
<tr><td>28</td><td>Penguins</td><td>77.86%</td></tr>
<tr><td>29</td><td>Wild</td><td>76.28%</td></tr>
<tr><td>30</td><td>Blues</td><td>75.18%</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>56.64%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18.39%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Predators</td><td>24.63%</td></tr>
<tr><td>2</td><td>Canucks</td><td>23.05%</td></tr>
<tr><td>3</td><td>Flyers</td><td>22.26%</td></tr>
<tr><td>4</td><td>Coyotes</td><td>22.22%</td></tr>
<tr><td>5</td><td>Bruins</td><td>22.18%</td></tr>
<tr><td>6</td><td>Sharks</td><td>21.54%</td></tr>
<tr><td>7</td><td>Hurricanes</td><td>21.01%</td></tr>
<tr><td>8</td><td>Wild</td><td>20.68%</td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>20.08%</td></tr>
<tr><td>10</td><td>Avalanche</td><td>19.55%</td></tr>
<tr><td>11</td><td>Flames</td><td>19.29%</td></tr>
<tr><td>12</td><td>Blackhawks</td><td>19.21%</td></tr>
<tr><td>13</td><td>Penguins</td><td>18.80%</td></tr>
<tr><td>14</td><td>Ducks</td><td>18.75%</td></tr>
<tr><td>15</td><td>Blue Jackets</td><td>18.01%</td></tr>
<tr><td>16</td><td>Stars</td><td>17.77%</td></tr>
<tr><td>17</td><td>Sabres</td><td>17.71%</td></tr>
<tr><td>18</td><td>Devils</td><td>17.55%</td></tr>
<tr><td>19</td><td>Lightning</td><td>17.44%</td></tr>
<tr><td>20</td><td>Oilers</td><td>17.42%</td></tr>
<tr><td>21</td><td>Panthers</td><td>17.23%</td></tr>
<tr><td>22</td><td>Rangers</td><td>17.15%</td></tr>
<tr><td>23</td><td>Red Wings</td><td>16.60%</td></tr>
<tr><td>24</td><td>Kings</td><td>16.54%</td></tr>
<tr><td>25</td><td>Jets</td><td>15.50%</td></tr>
<tr><td>26</td><td>Blues</td><td>15.20%</td></tr>
<tr><td>27</td><td>Canadiens</td><td>15.02%</td></tr>
<tr><td>28</td><td>Senators</td><td>14.94%</td></tr>
<tr><td>29</td><td>Islanders</td><td>14.84%</td></tr>
<tr><td>30</td><td>Capitals</td><td>14.07%</td></tr>
<tr><td>31</td><td>Golden Knights</td><td>12.11%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 81.61%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Coyotes</td><td>88.89%</td></tr>
<tr><td>2</td><td>Flames</td><td>86.04%</td></tr>
<tr><td>3</td><td>Stars</td><td>84.67%</td></tr>
<tr><td>4</td><td>Devils</td><td>84.32%</td></tr>
<tr><td>5</td><td>Lightning</td><td>84.30%</td></tr>
<tr><td>6</td><td>Blackhawks</td><td>84.02%</td></tr>
<tr><td>7</td><td>Canucks</td><td>83.96%</td></tr>
<tr><td>8</td><td>Jets</td><td>83.73%</td></tr>
<tr><td>9</td><td>Predators</td><td>82.53%</td></tr>
<tr><td>10</td><td>Panthers</td><td>82.49%</td></tr>
<tr><td>11</td><td>Sabres</td><td>82.43%</td></tr>
<tr><td>12</td><td>Ducks</td><td>82.14%</td></tr>
<tr><td>13</td><td>Maple Leafs</td><td>82.10%</td></tr>
<tr><td>14</td><td>Kings</td><td>82.08%</td></tr>
<tr><td>15</td><td>Islanders</td><td>82.04%</td></tr>
<tr><td>16</td><td>Flyers</td><td>81.95%</td></tr>
<tr><td>17</td><td>Oilers</td><td>81.25%</td></tr>
<tr><td>18</td><td>Bruins</td><td>81.07%</td></tr>
<tr><td>19</td><td>Senators</td><td>81.03%</td></tr>
<tr><td>20</td><td>Golden Knights</td><td>80.99%</td></tr>
<tr><td>21</td><td>Capitals</td><td>80.93%</td></tr>
<tr><td>22</td><td>Penguins</td><td>80.87%</td></tr>
<tr><td>23</td><td>Canadiens</td><td>80.75%</td></tr>
<tr><td>24</td><td>Blues</td><td>80.48%</td></tr>
<tr><td>25</td><td>Avalanche</td><td>79.71%</td></tr>
<tr><td>26</td><td>Sharks</td><td>78.91%</td></tr>
<tr><td>27</td><td>Blue Jackets</td><td>78.22%</td></tr>
<tr><td>28</td><td>Wild</td><td>77.48%</td></tr>
<tr><td>29</td><td>Rangers</td><td>77.12%</td></tr>
<tr><td>30</td><td>Hurricanes</td><td>76.89%</td></tr>
<tr><td>31</td><td>Red Wings</td><td>75.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Coyotes</td><td>111.11%</td></tr>
<tr><td>2</td><td>Predators</td><td>107.15%</td></tr>
<tr><td>3</td><td>Canucks</td><td>107.00%</td></tr>
<tr><td>4</td><td>Flames</td><td>105.32%</td></tr>
<tr><td>5</td><td>Flyers</td><td>104.21%</td></tr>
<tr><td>6</td><td>Bruins</td><td>103.26%</td></tr>
<tr><td>7</td><td>Blackhawks</td><td>103.22%</td></tr>
<tr><td>8</td><td>Stars</td><td>102.44%</td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>102.18%</td></tr>
<tr><td>10</td><td>Devils</td><td>101.87%</td></tr>
<tr><td>11</td><td>Lightning</td><td>101.74%</td></tr>
<tr><td>12</td><td>Ducks</td><td>100.89%</td></tr>
<tr><td>13</td><td>Sharks</td><td>100.44%</td></tr>
<tr><td>14</td><td>Sabres</td><td>100.14%</td></tr>
<tr><td>15</td><td>Panthers</td><td>99.72%</td></tr>
<tr><td>16</td><td>Penguins</td><td>99.67%</td></tr>
<tr><td>17</td><td>Avalanche</td><td>99.26%</td></tr>
<tr><td>18</td><td>Jets</td><td>99.23%</td></tr>
<tr><td>19</td><td>Oilers</td><td>98.67%</td></tr>
<tr><td>20</td><td>Kings</td><td>98.62%</td></tr>
<tr><td>21</td><td>Wild</td><td>98.16%</td></tr>
<tr><td>22</td><td>Hurricanes</td><td>97.90%</td></tr>
<tr><td>23</td><td>Islanders</td><td>96.88%</td></tr>
<tr><td>24</td><td>Blue Jackets</td><td>96.23%</td></tr>
<tr><td>25</td><td>Senators</td><td>95.97%</td></tr>
<tr><td>26</td><td>Canadiens</td><td>95.77%</td></tr>
<tr><td>27</td><td>Blues</td><td>95.68%</td></tr>
<tr><td>28</td><td>Capitals</td><td>95.01%</td></tr>
<tr><td>29</td><td>Rangers</td><td>94.28%</td></tr>
<tr><td>30</td><td>Golden Knights</td><td>93.10%</td></tr>
<tr><td>31</td><td>Red Wings</td><td>91.60%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31.85</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>38.13</td></tr>
<tr><td>2</td><td>Bruins</td><td>37.82</td></tr>
<tr><td>3</td><td>Predators</td><td>36.35</td></tr>
<tr><td>4</td><td>Oilers</td><td>35.80</td></tr>
<tr><td>5</td><td>Blackhawks</td><td>35.63</td></tr>
<tr><td>6</td><td>Coyotes</td><td>35.35</td></tr>
<tr><td>7</td><td>Stars</td><td>33.90</td></tr>
<tr><td>8</td><td>Flyers</td><td>33.60</td></tr>
<tr><td>9</td><td>Lightning</td><td>33.52</td></tr>
<tr><td>10</td><td>Ducks</td><td>33.21</td></tr>
<tr><td>11</td><td>Sabres</td><td>32.80</td></tr>
<tr><td>12</td><td>Flames</td><td>32.52</td></tr>
<tr><td>13</td><td>Red Wings</td><td>31.72</td></tr>
<tr><td>14</td><td>Kings</td><td>31.56</td></tr>
<tr><td>15</td><td>Devils</td><td>31.51</td></tr>
<tr><td>16</td><td>Maple Leafs</td><td>31.51</td></tr>
<tr><td>17</td><td>Panthers</td><td>31.18</td></tr>
<tr><td>18</td><td>Capitals</td><td>30.95</td></tr>
<tr><td>19</td><td>Islanders</td><td>30.44</td></tr>
<tr><td>20</td><td>Blue Jackets</td><td>30.43</td></tr>
<tr><td>21</td><td>Blues</td><td>30.27</td></tr>
<tr><td>22</td><td>Golden Knights</td><td>30.21</td></tr>
<tr><td>23</td><td>Jets</td><td>30.11</td></tr>
<tr><td>24</td><td>Avalanche</td><td>29.88</td></tr>
<tr><td>25</td><td>Rangers</td><td>29.55</td></tr>
<tr><td>26</td><td>Sharks</td><td>29.33</td></tr>
<tr><td>27</td><td>Penguins</td><td>29.30</td></tr>
<tr><td>28</td><td>Canadiens</td><td>28.56</td></tr>
<tr><td>29</td><td>Wild</td><td>28.39</td></tr>
<tr><td>30</td><td>Senators</td><td>27.27</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>26.39</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31.85</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Flyers</td><td>28.60</td></tr>
<tr><td>2</td><td>Oilers</td><td>28.85</td></tr>
<tr><td>3</td><td>Flames</td><td>29.54</td></tr>
<tr><td>4</td><td>Bruins</td><td>29.76</td></tr>
<tr><td>5</td><td>Canucks</td><td>29.87</td></tr>
<tr><td>6</td><td>Lightning</td><td>30.00</td></tr>
<tr><td>7</td><td>Maple Leafs</td><td>30.11</td></tr>
<tr><td>8</td><td>Capitals</td><td>30.26</td></tr>
<tr><td>9</td><td>Sabres</td><td>30.32</td></tr>
<tr><td>10</td><td>Kings</td><td>30.51</td></tr>
<tr><td>11</td><td>Blackhawks</td><td>30.59</td></tr>
<tr><td>12</td><td>Jets</td><td>30.85</td></tr>
<tr><td>13</td><td>Islanders</td><td>31.74</td></tr>
<tr><td>14</td><td>Ducks</td><td>31.96</td></tr>
<tr><td>15</td><td>Hurricanes</td><td>31.98</td></tr>
<tr><td>16</td><td>Canadiens</td><td>32.02</td></tr>
<tr><td>17</td><td>Coyotes</td><td>32.04</td></tr>
<tr><td>18</td><td>Golden Knights</td><td>32.09</td></tr>
<tr><td>19</td><td>Devils</td><td>32.12</td></tr>
<tr><td>20</td><td>Senators</td><td>32.24</td></tr>
<tr><td>21</td><td>Stars</td><td>32.41</td></tr>
<tr><td>22</td><td>Rangers</td><td>32.50</td></tr>
<tr><td>23</td><td>Predators</td><td>32.74</td></tr>
<tr><td>24</td><td>Blue Jackets</td><td>32.93</td></tr>
<tr><td>25</td><td>Avalanche</td><td>33.06</td></tr>
<tr><td>26</td><td>Sharks</td><td>33.18</td></tr>
<tr><td>27</td><td>Panthers</td><td>33.43</td></tr>
<tr><td>28</td><td>Red Wings</td><td>34.30</td></tr>
<tr><td>29</td><td>Penguins</td><td>35.02</td></tr>
<tr><td>30</td><td>Blues</td><td>35.46</td></tr>
<tr><td>31</td><td>Wild</td><td>36.73</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Canucks</td><td>127.68%</td></tr>
<tr><td>2</td><td>Bruins</td><td>127.09%</td></tr>
<tr><td>3</td><td>Oilers</td><td>124.09%</td></tr>
<tr><td>4</td><td>Flyers</td><td>117.48%</td></tr>
<tr><td>5</td><td>Blackhawks</td><td>116.51%</td></tr>
<tr><td>6</td><td>Lightning</td><td>111.75%</td></tr>
<tr><td>7</td><td>Predators</td><td>111.02%</td></tr>
<tr><td>8</td><td>Coyotes</td><td>110.35%</td></tr>
<tr><td>9</td><td>Flames</td><td>110.12%</td></tr>
<tr><td>10</td><td>Sabres</td><td>108.21%</td></tr>
<tr><td>11</td><td>Maple Leafs</td><td>104.66%</td></tr>
<tr><td>12</td><td>Stars</td><td>104.59%</td></tr>
<tr><td>13</td><td>Ducks</td><td>103.89%</td></tr>
<tr><td>14</td><td>Kings</td><td>103.44%</td></tr>
<tr><td>15</td><td>Capitals</td><td>102.30%</td></tr>
<tr><td>16</td><td>Devils</td><td>98.10%</td></tr>
<tr><td>17</td><td>Jets</td><td>97.59%</td></tr>
<tr><td>18</td><td>Islanders</td><td>95.89%</td></tr>
<tr><td>19</td><td>Golden Knights</td><td>94.15%</td></tr>
<tr><td>20</td><td>Panthers</td><td>93.29%</td></tr>
<tr><td>21</td><td>Red Wings</td><td>92.46%</td></tr>
<tr><td>22</td><td>Blue Jackets</td><td>92.41%</td></tr>
<tr><td>23</td><td>Rangers</td><td>90.92%</td></tr>
<tr><td>24</td><td>Avalanche</td><td>90.37%</td></tr>
<tr><td>25</td><td>Canadiens</td><td>89.19%</td></tr>
<tr><td>26</td><td>Sharks</td><td>88.39%</td></tr>
<tr><td>27</td><td>Blues</td><td>85.35%</td></tr>
<tr><td>28</td><td>Senators</td><td>84.57%</td></tr>
<tr><td>29</td><td>Penguins</td><td>83.67%</td></tr>
<tr><td>30</td><td>Hurricanes</td><td>82.53%</td></tr>
<tr><td>31</td><td>Wild</td><td>77.29%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7.64</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Flyers</td><td>6.02</td></tr>
<tr><td>2</td><td>Blue Jackets</td><td>6.70</td></tr>
<tr><td>3</td><td>Ducks</td><td>6.73</td></tr>
<tr><td>4</td><td>Blackhawks</td><td>6.87</td></tr>
<tr><td>5</td><td>Coyotes</td><td>6.99</td></tr>
<tr><td>6</td><td>Sabres</td><td>7.11</td></tr>
<tr><td>7</td><td>Red Wings</td><td>7.13</td></tr>
<tr><td>8</td><td>Kings</td><td>7.15</td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>7.26</td></tr>
<tr><td>10</td><td>Hurricanes</td><td>7.33</td></tr>
<tr><td>11</td><td>Panthers</td><td>7.35</td></tr>
<tr><td>12</td><td>Sharks</td><td>7.40</td></tr>
<tr><td>13</td><td>Capitals</td><td>7.43</td></tr>
<tr><td>14</td><td>Islanders</td><td>7.51</td></tr>
<tr><td>15</td><td>Avalanche</td><td>7.54</td></tr>
<tr><td>16</td><td>Canadiens</td><td>7.55</td></tr>
<tr><td>17</td><td>Golden Knights</td><td>7.56</td></tr>
<tr><td>18</td><td>Senators</td><td>7.66</td></tr>
<tr><td>19</td><td>Canucks</td><td>7.70</td></tr>
<tr><td>20</td><td>Bruins</td><td>7.71</td></tr>
<tr><td>21</td><td>Wild</td><td>7.76</td></tr>
<tr><td>22</td><td>Flames</td><td>7.79</td></tr>
<tr><td>23</td><td>Oilers</td><td>7.95</td></tr>
<tr><td>24</td><td>Predators</td><td>8.07</td></tr>
<tr><td>25</td><td>Rangers</td><td>8.16</td></tr>
<tr><td>26</td><td>Devils</td><td>8.34</td></tr>
<tr><td>27</td><td>Lightning</td><td>8.37</td></tr>
<tr><td>28</td><td>Jets</td><td>8.43</td></tr>
<tr><td>29</td><td>Blues</td><td>8.51</td></tr>
<tr><td>30</td><td>Penguins</td><td>9.32</td></tr>
<tr><td>31</td><td>Stars</td><td>9.57</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20.34</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wild</td><td>22.06</td></tr>
<tr><td>2</td><td>Penguins</td><td>21.60</td></tr>
<tr><td>3</td><td>Bruins</td><td>21.57</td></tr>
<tr><td>4</td><td>Jets</td><td>21.43</td></tr>
<tr><td>5</td><td>Blues</td><td>21.39</td></tr>
<tr><td>6</td><td>Rangers</td><td>21.35</td></tr>
<tr><td>7</td><td>Predators</td><td>21.32</td></tr>
<tr><td>8</td><td>Oilers</td><td>21.11</td></tr>
<tr><td>9</td><td>Canucks</td><td>20.79</td></tr>
<tr><td>10</td><td>Devils</td><td>20.77</td></tr>
<tr><td>11</td><td>Senators</td><td>20.77</td></tr>
<tr><td>12</td><td>Ducks</td><td>20.56</td></tr>
<tr><td>13</td><td>Capitals</td><td>20.46</td></tr>
<tr><td>14</td><td>Panthers</td><td>20.44</td></tr>
<tr><td>15</td><td>Avalanche</td><td>20.29</td></tr>
<tr><td>16</td><td>Red Wings</td><td>20.28</td></tr>
<tr><td>17</td><td>Blackhawks</td><td>20.24</td></tr>
<tr><td>18</td><td>Lightning</td><td>20.24</td></tr>
<tr><td>19</td><td>Sharks</td><td>20.23</td></tr>
<tr><td>20</td><td>Blue Jackets</td><td>20.17</td></tr>
<tr><td>21</td><td>Hurricanes</td><td>20.13</td></tr>
<tr><td>22</td><td>Stars</td><td>20.10</td></tr>
<tr><td>23</td><td>Canadiens</td><td>19.89</td></tr>
<tr><td>24</td><td>Coyotes</td><td>19.78</td></tr>
<tr><td>25</td><td>Kings</td><td>19.72</td></tr>
<tr><td>26</td><td>Sabres</td><td>19.68</td></tr>
<tr><td>27</td><td>Maple Leafs</td><td>19.35</td></tr>
<tr><td>28</td><td>Islanders</td><td>19.21</td></tr>
<tr><td>29</td><td>Flames</td><td>18.70</td></tr>
<tr><td>30</td><td>Golden Knights</td><td>18.68</td></tr>
<tr><td>31</td><td>Flyers</td><td>18.13</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Maple Leafs</td><td>54.64%</td></tr>
<tr><td>2</td><td>Canucks</td><td>54.18%</td></tr>
<tr><td>3</td><td>Flames</td><td>54.14%</td></tr>
<tr><td>4</td><td>Stars</td><td>53.96%</td></tr>
<tr><td>5</td><td>Bruins</td><td>53.96%</td></tr>
<tr><td>6</td><td>Devils</td><td>53.78%</td></tr>
<tr><td>7</td><td>Golden Knights</td><td>53.37%</td></tr>
<tr><td>8</td><td>Flyers</td><td>53.27%</td></tr>
<tr><td>9</td><td>Oilers</td><td>53.25%</td></tr>
<tr><td>10</td><td>Capitals</td><td>53.15%</td></tr>
<tr><td>11</td><td>Coyotes</td><td>53.01%</td></tr>
<tr><td>12</td><td>Jets</td><td>52.35%</td></tr>
<tr><td>13</td><td>Blackhawks</td><td>52.03%</td></tr>
<tr><td>14</td><td>Panthers</td><td>51.99%</td></tr>
<tr><td>15</td><td>Avalanche</td><td>51.96%</td></tr>
<tr><td>16</td><td>Ducks</td><td>51.44%</td></tr>
<tr><td>17</td><td>Sabres</td><td>50.98%</td></tr>
<tr><td>18</td><td>Lightning</td><td>50.92%</td></tr>
<tr><td>19</td><td>Islanders</td><td>50.10%</td></tr>
<tr><td>20</td><td>Predators</td><td>49.68%</td></tr>
<tr><td>21</td><td>Kings</td><td>49.19%</td></tr>
<tr><td>22</td><td>Canadiens</td><td>49.04%</td></tr>
<tr><td>23</td><td>Hurricanes</td><td>48.62%</td></tr>
<tr><td>24</td><td>Red Wings</td><td>48.51%</td></tr>
<tr><td>25</td><td>Blues</td><td>48.29%</td></tr>
<tr><td>26</td><td>Senators</td><td>47.64%</td></tr>
<tr><td>27</td><td>Sharks</td><td>46.40%</td></tr>
<tr><td>28</td><td>Rangers</td><td>45.26%</td></tr>
<tr><td>29</td><td>Blue Jackets</td><td>45.01%</td></tr>
<tr><td>30</td><td>Penguins</td><td>43.42%</td></tr>
<tr><td>31</td><td>Wild</td><td>36.22%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
