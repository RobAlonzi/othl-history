<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Stats</title>
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
<tr><td>Avalanche</td><td>82</td><td>19</td><td>47</td><td>2</td><td>5</td><td>5</td><td>4</td><td>184</td><td>278</td><td>41</td><td>13</td><td>23</td><td>1</td><td>2</td><td>1</td><td>1</td><td>97</td><td>132</td><td>41</td><td>6</td><td>24</td><td>1</td><td>3</td><td>4</td><td>3</td><td>87</td><td>146</td><td>184</td><td>314</td><td>498</td></tr>
<tr><td>Blackhawks</td><td>82</td><td>44</td><td>19</td><td>7</td><td>6</td><td>4</td><td>2</td><td>245</td><td>185</td><td>41</td><td>24</td><td>10</td><td>1</td><td>4</td><td>2</td><td>0</td><td>122</td><td>88</td><td>41</td><td>20</td><td>9</td><td>6</td><td>2</td><td>2</td><td>2</td><td>123</td><td>97</td><td>245</td><td>441</td><td>686</td></tr>
<tr><td>Blue Jackets</td><td>82</td><td>45</td><td>23</td><td>6</td><td>6</td><td>1</td><td>1</td><td>268</td><td>217</td><td>41</td><td>26</td><td>10</td><td>2</td><td>1</td><td>1</td><td>1</td><td>146</td><td>104</td><td>41</td><td>19</td><td>13</td><td>4</td><td>5</td><td>0</td><td>0</td><td>122</td><td>113</td><td>268</td><td>483</td><td>751</td></tr>
<tr><td>Blues</td><td>82</td><td>22</td><td>37</td><td>7</td><td>8</td><td>4</td><td>4</td><td>223</td><td>287</td><td>41</td><td>9</td><td>20</td><td>2</td><td>6</td><td>3</td><td>1</td><td>104</td><td>149</td><td>41</td><td>13</td><td>17</td><td>5</td><td>2</td><td>1</td><td>3</td><td>119</td><td>138</td><td>223</td><td>388</td><td>611</td></tr>
<tr><td>Bruins</td><td>82</td><td>42</td><td>30</td><td>3</td><td>4</td><td>1</td><td>2</td><td>257</td><td>222</td><td>41</td><td>20</td><td>16</td><td>2</td><td>2</td><td>0</td><td>1</td><td>140</td><td>120</td><td>41</td><td>22</td><td>14</td><td>1</td><td>2</td><td>1</td><td>1</td><td>117</td><td>102</td><td>257</td><td>456</td><td>713</td></tr>
<tr><td>Canadiens</td><td>82</td><td>41</td><td>25</td><td>7</td><td>4</td><td>2</td><td>3</td><td>256</td><td>209</td><td>41</td><td>19</td><td>13</td><td>6</td><td>1</td><td>1</td><td>1</td><td>126</td><td>107</td><td>41</td><td>22</td><td>12</td><td>1</td><td>3</td><td>1</td><td>2</td><td>130</td><td>102</td><td>256</td><td>454</td><td>710</td></tr>
<tr><td>Canucks</td><td>82</td><td>42</td><td>27</td><td>3</td><td>5</td><td>3</td><td>2</td><td>285</td><td>229</td><td>41</td><td>23</td><td>12</td><td>2</td><td>2</td><td>0</td><td>2</td><td>147</td><td>105</td><td>41</td><td>19</td><td>15</td><td>1</td><td>3</td><td>3</td><td>0</td><td>138</td><td>124</td><td>285</td><td>499</td><td>784</td></tr>
<tr><td>Capitals</td><td>82</td><td>32</td><td>37</td><td>3</td><td>2</td><td>4</td><td>4</td><td>220</td><td>225</td><td>41</td><td>15</td><td>17</td><td>1</td><td>2</td><td>3</td><td>3</td><td>112</td><td>106</td><td>41</td><td>17</td><td>20</td><td>2</td><td>0</td><td>1</td><td>1</td><td>108</td><td>119</td><td>220</td><td>385</td><td>605</td></tr>
<tr><td>Coyotes</td><td>82</td><td>31</td><td>31</td><td>7</td><td>10</td><td>2</td><td>1</td><td>220</td><td>228</td><td>41</td><td>19</td><td>14</td><td>2</td><td>5</td><td>1</td><td>0</td><td>121</td><td>109</td><td>41</td><td>12</td><td>17</td><td>5</td><td>5</td><td>1</td><td>1</td><td>99</td><td>119</td><td>220</td><td>388</td><td>608</td></tr>
<tr><td>Devils</td><td>82</td><td>32</td><td>31</td><td>6</td><td>4</td><td>5</td><td>4</td><td>238</td><td>226</td><td>41</td><td>16</td><td>19</td><td>2</td><td>2</td><td>0</td><td>2</td><td>112</td><td>108</td><td>41</td><td>16</td><td>12</td><td>4</td><td>2</td><td>5</td><td>2</td><td>126</td><td>118</td><td>238</td><td>410</td><td>648</td></tr>
<tr><td>Ducks</td><td>82</td><td>31</td><td>36</td><td>3</td><td>8</td><td>2</td><td>2</td><td>228</td><td>252</td><td>41</td><td>20</td><td>18</td><td>0</td><td>2</td><td>0</td><td>1</td><td>118</td><td>117</td><td>41</td><td>11</td><td>18</td><td>3</td><td>6</td><td>2</td><td>1</td><td>110</td><td>135</td><td>228</td><td>409</td><td>637</td></tr>
<tr><td>Flames</td><td>82</td><td>50</td><td>22</td><td>5</td><td>2</td><td>3</td><td>0</td><td>284</td><td>210</td><td>41</td><td>28</td><td>8</td><td>2</td><td>0</td><td>3</td><td>0</td><td>158</td><td>104</td><td>41</td><td>22</td><td>14</td><td>3</td><td>2</td><td>0</td><td>0</td><td>126</td><td>106</td><td>284</td><td>504</td><td>788</td></tr>
<tr><td>Flyers</td><td>82</td><td>23</td><td>42</td><td>5</td><td>7</td><td>1</td><td>4</td><td>213</td><td>282</td><td>41</td><td>13</td><td>18</td><td>3</td><td>3</td><td>0</td><td>4</td><td>117</td><td>136</td><td>41</td><td>10</td><td>24</td><td>2</td><td>4</td><td>1</td><td>0</td><td>96</td><td>146</td><td>213</td><td>383</td><td>596</td></tr>
<tr><td>Golden Knights</td><td>82</td><td>32</td><td>39</td><td>5</td><td>3</td><td>1</td><td>2</td><td>225</td><td>244</td><td>41</td><td>18</td><td>17</td><td>3</td><td>2</td><td>0</td><td>1</td><td>130</td><td>126</td><td>41</td><td>14</td><td>22</td><td>2</td><td>1</td><td>1</td><td>1</td><td>95</td><td>118</td><td>225</td><td>396</td><td>621</td></tr>
<tr><td>Hurricanes</td><td>82</td><td>20</td><td>48</td><td>4</td><td>4</td><td>1</td><td>5</td><td>184</td><td>281</td><td>41</td><td>12</td><td>21</td><td>3</td><td>2</td><td>0</td><td>3</td><td>93</td><td>132</td><td>41</td><td>8</td><td>27</td><td>1</td><td>2</td><td>1</td><td>2</td><td>91</td><td>149</td><td>184</td><td>334</td><td>518</td></tr>
<tr><td>Islanders</td><td>82</td><td>54</td><td>20</td><td>1</td><td>2</td><td>2</td><td>3</td><td>296</td><td>205</td><td>41</td><td>24</td><td>12</td><td>1</td><td>1</td><td>0</td><td>3</td><td>138</td><td>101</td><td>41</td><td>30</td><td>8</td><td>0</td><td>1</td><td>2</td><td>0</td><td>158</td><td>104</td><td>296</td><td>529</td><td>825</td></tr>
<tr><td>Jets</td><td>82</td><td>28</td><td>35</td><td>7</td><td>3</td><td>2</td><td>7</td><td>243</td><td>246</td><td>41</td><td>14</td><td>17</td><td>4</td><td>3</td><td>1</td><td>2</td><td>110</td><td>106</td><td>41</td><td>14</td><td>18</td><td>3</td><td>0</td><td>1</td><td>5</td><td>133</td><td>140</td><td>243</td><td>428</td><td>671</td></tr>
<tr><td>Kings</td><td>82</td><td>41</td><td>27</td><td>9</td><td>2</td><td>2</td><td>1</td><td>281</td><td>222</td><td>41</td><td>24</td><td>12</td><td>2</td><td>1</td><td>1</td><td>1</td><td>155</td><td>111</td><td>41</td><td>17</td><td>15</td><td>7</td><td>1</td><td>1</td><td>0</td><td>126</td><td>111</td><td>281</td><td>498</td><td>779</td></tr>
<tr><td>Kraken</td><td>82</td><td>35</td><td>28</td><td>8</td><td>5</td><td>3</td><td>3</td><td>263</td><td>251</td><td>41</td><td>16</td><td>13</td><td>5</td><td>3</td><td>2</td><td>2</td><td>137</td><td>129</td><td>41</td><td>19</td><td>15</td><td>3</td><td>2</td><td>1</td><td>1</td><td>126</td><td>122</td><td>263</td><td>454</td><td>717</td></tr>
<tr><td>Lightning</td><td>82</td><td>20</td><td>44</td><td>6</td><td>7</td><td>3</td><td>2</td><td>202</td><td>265</td><td>41</td><td>10</td><td>20</td><td>5</td><td>3</td><td>1</td><td>2</td><td>101</td><td>123</td><td>41</td><td>10</td><td>24</td><td>1</td><td>4</td><td>2</td><td>0</td><td>101</td><td>142</td><td>202</td><td>369</td><td>571</td></tr>
<tr><td>Maple Leafs</td><td>82</td><td>39</td><td>28</td><td>5</td><td>5</td><td>4</td><td>1</td><td>262</td><td>234</td><td>41</td><td>20</td><td>14</td><td>1</td><td>3</td><td>2</td><td>1</td><td>123</td><td>110</td><td>41</td><td>19</td><td>14</td><td>4</td><td>2</td><td>2</td><td>0</td><td>139</td><td>124</td><td>262</td><td>465</td><td>727</td></tr>
<tr><td>Oilers</td><td>82</td><td>51</td><td>20</td><td>4</td><td>3</td><td>3</td><td>1</td><td>287</td><td>199</td><td>41</td><td>23</td><td>12</td><td>2</td><td>2</td><td>1</td><td>1</td><td>147</td><td>102</td><td>41</td><td>28</td><td>8</td><td>2</td><td>1</td><td>2</td><td>0</td><td>140</td><td>97</td><td>287</td><td>510</td><td>797</td></tr>
<tr><td>Panthers</td><td>82</td><td>29</td><td>34</td><td>8</td><td>7</td><td>2</td><td>2</td><td>213</td><td>229</td><td>41</td><td>15</td><td>18</td><td>4</td><td>3</td><td>1</td><td>0</td><td>111</td><td>109</td><td>41</td><td>14</td><td>16</td><td>4</td><td>4</td><td>1</td><td>2</td><td>102</td><td>120</td><td>213</td><td>376</td><td>589</td></tr>
<tr><td>Penguins</td><td>82</td><td>24</td><td>37</td><td>5</td><td>9</td><td>4</td><td>3</td><td>215</td><td>233</td><td>41</td><td>11</td><td>18</td><td>2</td><td>5</td><td>3</td><td>2</td><td>104</td><td>108</td><td>41</td><td>13</td><td>19</td><td>3</td><td>4</td><td>1</td><td>1</td><td>111</td><td>125</td><td>215</td><td>382</td><td>597</td></tr>
<tr><td>Predators</td><td>82</td><td>41</td><td>30</td><td>8</td><td>2</td><td>0</td><td>1</td><td>277</td><td>226</td><td>41</td><td>19</td><td>16</td><td>5</td><td>1</td><td>0</td><td>0</td><td>144</td><td>115</td><td>41</td><td>22</td><td>14</td><td>3</td><td>1</td><td>0</td><td>1</td><td>133</td><td>111</td><td>277</td><td>496</td><td>773</td></tr>
<tr><td>Rangers</td><td>82</td><td>21</td><td>46</td><td>2</td><td>5</td><td>5</td><td>3</td><td>221</td><td>303</td><td>41</td><td>13</td><td>19</td><td>1</td><td>4</td><td>2</td><td>2</td><td>109</td><td>141</td><td>41</td><td>8</td><td>27</td><td>1</td><td>1</td><td>3</td><td>1</td><td>112</td><td>162</td><td>221</td><td>396</td><td>617</td></tr>
<tr><td>Red Wings</td><td>82</td><td>30</td><td>36</td><td>4</td><td>5</td><td>4</td><td>3</td><td>233</td><td>262</td><td>41</td><td>17</td><td>16</td><td>2</td><td>2</td><td>2</td><td>2</td><td>131</td><td>134</td><td>41</td><td>13</td><td>20</td><td>2</td><td>3</td><td>2</td><td>1</td><td>102</td><td>128</td><td>233</td><td>411</td><td>644</td></tr>
<tr><td>Sabres</td><td>82</td><td>37</td><td>27</td><td>4</td><td>7</td><td>4</td><td>3</td><td>255</td><td>217</td><td>41</td><td>20</td><td>13</td><td>2</td><td>3</td><td>3</td><td>0</td><td>136</td><td>102</td><td>41</td><td>17</td><td>14</td><td>2</td><td>4</td><td>1</td><td>3</td><td>119</td><td>115</td><td>255</td><td>457</td><td>712</td></tr>
<tr><td>Senators</td><td>82</td><td>23</td><td>36</td><td>9</td><td>8</td><td>3</td><td>3</td><td>242</td><td>272</td><td>41</td><td>15</td><td>11</td><td>7</td><td>5</td><td>2</td><td>1</td><td>122</td><td>115</td><td>41</td><td>8</td><td>25</td><td>2</td><td>3</td><td>1</td><td>2</td><td>120</td><td>157</td><td>242</td><td>429</td><td>671</td></tr>
<tr><td>Sharks</td><td>82</td><td>18</td><td>45</td><td>7</td><td>6</td><td>2</td><td>4</td><td>211</td><td>272</td><td>41</td><td>9</td><td>21</td><td>4</td><td>1</td><td>2</td><td>4</td><td>110</td><td>131</td><td>41</td><td>9</td><td>24</td><td>3</td><td>5</td><td>0</td><td>0</td><td>101</td><td>141</td><td>211</td><td>379</td><td>590</td></tr>
<tr><td>Stars</td><td>82</td><td>38</td><td>26</td><td>4</td><td>10</td><td>1</td><td>3</td><td>269</td><td>226</td><td>41</td><td>19</td><td>14</td><td>2</td><td>5</td><td>0</td><td>1</td><td>133</td><td>113</td><td>41</td><td>19</td><td>12</td><td>2</td><td>5</td><td>1</td><td>2</td><td>136</td><td>113</td><td>269</td><td>480</td><td>749</td></tr>
<tr><td>Wild</td><td>82</td><td>25</td><td>47</td><td>4</td><td>4</td><td>1</td><td>1</td><td>217</td><td>280</td><td>41</td><td>13</td><td>21</td><td>3</td><td>3</td><td>1</td><td>0</td><td>122</td><td>148</td><td>41</td><td>12</td><td>26</td><td>1</td><td>1</td><td>0</td><td>1</td><td>95</td><td>132</td><td>217</td><td>399</td><td>616</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Avalanche</td><td>COL</td><td>67</td><td>56</td><td>54</td><td>15</td><td>2150</td><td>728</td><td>716</td><td>670</td><td>66</td><td>2796</td><td>809</td><td>606</td><td>1681</td><td>232</td><td>33</td><td>14.22%</td><td>249</td><td>45</td><td>81.93%</td><td>5</td><td>45.76%</td><td>45.31%</td><td>49.04%</td><td>2033</td><td>1876</td><td>1070</td><td>615</td><td>1270</td><td>520</td><td>2</td><td>1</td></tr>
<tr><td>Blackhawks</td><td>CHI</td><td>89</td><td>74</td><td>71</td><td>14</td><td>2760</td><td>866</td><td>915</td><td>936</td><td>70</td><td>2493</td><td>670</td><td>588</td><td>1600</td><td>241</td><td>50</td><td>20.75%</td><td>221</td><td>30</td><td>86.43%</td><td>1</td><td>54.63%</td><td>53.42%</td><td>54.42%</td><td>1859</td><td>2055</td><td>1063</td><td>589</td><td>1434</td><td>545</td><td>9</td><td>2</td></tr>
<tr><td>Blue Jackets</td><td>CLB</td><td>100</td><td>82</td><td>79</td><td>7</td><td>2922</td><td>935</td><td>973</td><td>984</td><td>39</td><td>2602</td><td>734</td><td>558</td><td>1596</td><td>249</td><td>53</td><td>21.29%</td><td>220</td><td>48</td><td>78.18%</td><td>4</td><td>48.09%</td><td>46.91%</td><td>45.69%</td><td>1978</td><td>1923</td><td>1053</td><td>600</td><td>1332</td><td>524</td><td>5</td><td>0</td></tr>
<tr><td>Blues</td><td>STL</td><td>67</td><td>77</td><td>68</td><td>15</td><td>2369</td><td>770</td><td>801</td><td>752</td><td>74</td><td>3203</td><td>858</td><td>629</td><td>1618</td><td>217</td><td>27</td><td>12.44%</td><td>224</td><td>37</td><td>83.48%</td><td>3</td><td>47.81%</td><td>48.59%</td><td>48.42%</td><td>2098</td><td>1867</td><td>1038</td><td>595</td><td>1290</td><td>501</td><td>2</td><td>6</td></tr>
<tr><td>Bruins</td><td>BOS</td><td>81</td><td>89</td><td>83</td><td>5</td><td>2717</td><td>903</td><td>888</td><td>905</td><td>28</td><td>2477</td><td>731</td><td>745</td><td>1678</td><td>234</td><td>53</td><td>22.65%</td><td>268</td><td>47</td><td>82.46%</td><td>5</td><td>52.62%</td><td>52.70%</td><td>52.44%</td><td>1894</td><td>1980</td><td>1077</td><td>602</td><td>1364</td><td>543</td><td>2</td><td>5</td></tr>
<tr><td>Canadiens</td><td>MTL</td><td>89</td><td>88</td><td>70</td><td>11</td><td>2644</td><td>870</td><td>907</td><td>827</td><td>56</td><td>2547</td><td>701</td><td>645</td><td>1665</td><td>224</td><td>34</td><td>15.18%</td><td>267</td><td>47</td><td>82.40%</td><td>2</td><td>51.54%</td><td>52.83%</td><td>54.56%</td><td>1910</td><td>1997</td><td>1062</td><td>598</td><td>1393</td><td>531</td><td>2</td><td>1</td></tr>
<tr><td>Canucks</td><td>VAN</td><td>131</td><td>87</td><td>61</td><td>8</td><td>3068</td><td>1035</td><td>1007</td><td>992</td><td>48</td><td>2505</td><td>716</td><td>550</td><td>1642</td><td>259</td><td>49</td><td>18.92%</td><td>219</td><td>44</td><td>79.91%</td><td>3</td><td>52.76%</td><td>52.18%</td><td>54.16%</td><td>1854</td><td>2050</td><td>1066</td><td>593</td><td>1451</td><td>538</td><td>4</td><td>2</td></tr>
<tr><td>Capitals</td><td>WSH</td><td>78</td><td>68</td><td>67</td><td>13</td><td>2589</td><td>875</td><td>850</td><td>824</td><td>68</td><td>2565</td><td>755</td><td>640</td><td>1609</td><td>253</td><td>46</td><td>18.18%</td><td>257</td><td>55</td><td>78.60%</td><td>1</td><td>53.88%</td><td>53.49%</td><td>51.28%</td><td>1893</td><td>2034</td><td>1047</td><td>593</td><td>1438</td><td>524</td><td>4</td><td>1</td></tr>
<tr><td>Coyotes</td><td>ARI</td><td>78</td><td>69</td><td>64</td><td>13</td><td>2540</td><td>788</td><td>835</td><td>888</td><td>42</td><td>2562</td><td>760</td><td>584</td><td>1593</td><td>217</td><td>39</td><td>17.97%</td><td>237</td><td>39</td><td>83.54%</td><td>2</td><td>50.34%</td><td>50.48%</td><td>50.32%</td><td>1926</td><td>1989</td><td>1048</td><td>590</td><td>1384</td><td>526</td><td>5</td><td>2</td></tr>
<tr><td>Devils</td><td>NJD</td><td>86</td><td>72</td><td>69</td><td>17</td><td>2533</td><td>863</td><td>843</td><td>788</td><td>80</td><td>2530</td><td>765</td><td>670</td><td>1603</td><td>230</td><td>47</td><td>20.43%</td><td>275</td><td>47</td><td>82.91%</td><td>0</td><td>55.61%</td><td>55.26%</td><td>56.14%</td><td>1953</td><td>1973</td><td>1065</td><td>606</td><td>1363</td><td>528</td><td>5</td><td>1</td></tr>
<tr><td>Ducks</td><td>ANH</td><td>81</td><td>74</td><td>68</td><td>6</td><td>2628</td><td>855</td><td>898</td><td>846</td><td>41</td><td>2603</td><td>800</td><td>503</td><td>1630</td><td>244</td><td>49</td><td>20.08%</td><td>211</td><td>37</td><td>82.46%</td><td>1</td><td>46.44%</td><td>47.45%</td><td>46.24%</td><td>1928</td><td>1977</td><td>1056</td><td>596</td><td>1384</td><td>529</td><td>2</td><td>3</td></tr>
<tr><td>Flames</td><td>CGY</td><td>96</td><td>95</td><td>85</td><td>9</td><td>2974</td><td>945</td><td>1003</td><td>1000</td><td>37</td><td>2549</td><td>751</td><td>642</td><td>1677</td><td>262</td><td>62</td><td>23.66%</td><td>258</td><td>47</td><td>81.78%</td><td>1</td><td>56.05%</td><td>55.84%</td><td>54.38%</td><td>1894</td><td>1999</td><td>1055</td><td>594</td><td>1400</td><td>530</td><td>5</td><td>1</td></tr>
<tr><td>Flyers</td><td>PHL</td><td>77</td><td>63</td><td>67</td><td>7</td><td>2596</td><td>837</td><td>873</td><td>857</td><td>43</td><td>2886</td><td>801</td><td>630</td><td>1780</td><td>238</td><td>36</td><td>15.13%</td><td>256</td><td>59</td><td>76.95%</td><td>2</td><td>42.33%</td><td>42.55%</td><td>41.88%</td><td>2027</td><td>1892</td><td>1045</td><td>602</td><td>1299</td><td>514</td><td>3</td><td>4</td></tr>
<tr><td>Golden Knights</td><td>VGK</td><td>92</td><td>68</td><td>59</td><td>7</td><td>2533</td><td>833</td><td>834</td><td>849</td><td>25</td><td>2601</td><td>755</td><td>623</td><td>1671</td><td>251</td><td>58</td><td>23.11%</td><td>258</td><td>44</td><td>82.95%</td><td>1</td><td>53.84%</td><td>53.11%</td><td>52.42%</td><td>1926</td><td>1965</td><td>1055</td><td>599</td><td>1353</td><td>530</td><td>5</td><td>2</td></tr>
<tr><td>Hurricanes</td><td>CAR</td><td>75</td><td>53</td><td>51</td><td>6</td><td>2284</td><td>795</td><td>727</td><td>743</td><td>41</td><td>2723</td><td>760</td><td>561</td><td>1653</td><td>283</td><td>44</td><td>15.55%</td><td>235</td><td>54</td><td>77.02%</td><td>2</td><td>48.76%</td><td>47.52%</td><td>48.68%</td><td>1966</td><td>1935</td><td>1060</td><td>608</td><td>1333</td><td>529</td><td>1</td><td>2</td></tr>
<tr><td>Islanders</td><td>NYI</td><td>96</td><td>98</td><td>99</td><td>5</td><td>3131</td><td>979</td><td>1102</td><td>1032</td><td>37</td><td>2509</td><td>702</td><td>533</td><td>1644</td><td>267</td><td>58</td><td>21.72%</td><td>236</td><td>44</td><td>81.36%</td><td>3</td><td>51.66%</td><td>50.43%</td><td>54.31%</td><td>1866</td><td>2031</td><td>1052</td><td>594</td><td>1420</td><td>537</td><td>4</td><td>4</td></tr>
<tr><td>Jets</td><td>WPG</td><td>86</td><td>80</td><td>68</td><td>15</td><td>2604</td><td>834</td><td>886</td><td>844</td><td>74</td><td>2697</td><td>790</td><td>595</td><td>1639</td><td>248</td><td>54</td><td>21.77%</td><td>263</td><td>45</td><td>82.89%</td><td>1</td><td>49.73%</td><td>53.21%</td><td>51.34%</td><td>1978</td><td>1960</td><td>1050</td><td>602</td><td>1365</td><td>518</td><td>2</td><td>4</td></tr>
<tr><td>Kings</td><td>LAK</td><td>96</td><td>93</td><td>81</td><td>12</td><td>2810</td><td>904</td><td>914</td><td>955</td><td>45</td><td>2592</td><td>762</td><td>627</td><td>1635</td><td>236</td><td>54</td><td>22.88%</td><td>262</td><td>46</td><td>82.44%</td><td>1</td><td>51.74%</td><td>52.60%</td><td>49.66%</td><td>1955</td><td>1973</td><td>1033</td><td>595</td><td>1383</td><td>515</td><td>2</td><td>1</td></tr>
<tr><td>Kraken</td><td>SEA</td><td>86</td><td>92</td><td>74</td><td>11</td><td>2824</td><td>902</td><td>936</td><td>948</td><td>57</td><td>2714</td><td>782</td><td>555</td><td>1648</td><td>257</td><td>55</td><td>21.40%</td><td>230</td><td>47</td><td>79.57%</td><td>1</td><td>51.52%</td><td>50.47%</td><td>53.42%</td><td>2003</td><td>1926</td><td>1051</td><td>601</td><td>1336</td><td>522</td><td>6</td><td>1</td></tr>
<tr><td>Lightning</td><td>TBL</td><td>68</td><td>61</td><td>64</td><td>13</td><td>2363</td><td>746</td><td>810</td><td>768</td><td>60</td><td>2846</td><td>828</td><td>648</td><td>1760</td><td>240</td><td>52</td><td>21.67%</td><td>261</td><td>54</td><td>79.31%</td><td>3</td><td>49.58%</td><td>47.46%</td><td>46.54%</td><td>2024</td><td>1875</td><td>1064</td><td>606</td><td>1273</td><td>520</td><td>2</td><td>4</td></tr>
<tr><td>Maple Leafs</td><td>TOR</td><td>97</td><td>79</td><td>77</td><td>11</td><td>2832</td><td>953</td><td>963</td><td>877</td><td>59</td><td>2476</td><td>717</td><td>625</td><td>1583</td><td>259</td><td>48</td><td>18.53%</td><td>256</td><td>50</td><td>80.47%</td><td>1</td><td>55.88%</td><td>57.21%</td><td>57.42%</td><td>1874</td><td>2037</td><td>1053</td><td>585</td><td>1426</td><td>539</td><td>5</td><td>2</td></tr>
<tr><td>Oilers</td><td>EDM</td><td>101</td><td>91</td><td>88</td><td>9</td><td>2976</td><td>894</td><td>1041</td><td>1023</td><td>31</td><td>2384</td><td>689</td><td>634</td><td>1748</td><td>295</td><td>58</td><td>19.66%</td><td>255</td><td>38</td><td>85.10%</td><td>0</td><td>55.50%</td><td>53.29%</td><td>53.81%</td><td>1851</td><td>2049</td><td>1053</td><td>600</td><td>1440</td><td>534</td><td>6</td><td>0</td></tr>
<tr><td>Panthers</td><td>FLA</td><td>82</td><td>65</td><td>56</td><td>14</td><td>2404</td><td>792</td><td>847</td><td>738</td><td>44</td><td>2579</td><td>699</td><td>526</td><td>1554</td><td>252</td><td>39</td><td>15.48%</td><td>219</td><td>37</td><td>83.11%</td><td>1</td><td>52.84%</td><td>52.43%</td><td>53.13%</td><td>1885</td><td>2014</td><td>1062</td><td>595</td><td>1398</td><td>535</td><td>7</td><td>1</td></tr>
<tr><td>Penguins</td><td>PIT</td><td>86</td><td>62</td><td>58</td><td>12</td><td>2534</td><td>854</td><td>819</td><td>828</td><td>56</td><td>2872</td><td>849</td><td>814</td><td>1811</td><td>249</td><td>42</td><td>16.87%</td><td>293</td><td>59</td><td>79.86%</td><td>1</td><td>44.92%</td><td>45.09%</td><td>46.73%</td><td>2064</td><td>1871</td><td>1050</td><td>615</td><td>1277</td><td>512</td><td>2</td><td>3</td></tr>
<tr><td>Predators</td><td>NSH</td><td>108</td><td>86</td><td>75</td><td>8</td><td>3052</td><td>996</td><td>1016</td><td>1012</td><td>30</td><td>2623</td><td>822</td><td>506</td><td>1568</td><td>254</td><td>44</td><td>17.32%</td><td>217</td><td>45</td><td>79.26%</td><td>2</td><td>46.66%</td><td>46.22%</td><td>48.79%</td><td>1941</td><td>1948</td><td>1061</td><td>598</td><td>1350</td><td>534</td><td>6</td><td>0</td></tr>
<tr><td>Rangers</td><td>NYR</td><td>74</td><td>72</td><td>68</td><td>12</td><td>2391</td><td>787</td><td>738</td><td>835</td><td>61</td><td>2803</td><td>853</td><td>569</td><td>1562</td><td>238</td><td>40</td><td>16.81%</td><td>231</td><td>58</td><td>74.89%</td><td>2</td><td>49.71%</td><td>49.20%</td><td>48.89%</td><td>1997</td><td>1916</td><td>1062</td><td>603</td><td>1329</td><td>525</td><td>2</td><td>1</td></tr>
<tr><td>Red Wings</td><td>DET</td><td>88</td><td>69</td><td>68</td><td>11</td><td>2746</td><td>908</td><td>919</td><td>893</td><td>48</td><td>2659</td><td>739</td><td>654</td><td>1633</td><td>243</td><td>48</td><td>19.75%</td><td>273</td><td>65</td><td>76.19%</td><td>0</td><td>47.55%</td><td>47.62%</td><td>47.90%</td><td>1988</td><td>1922</td><td>1061</td><td>606</td><td>1321</td><td>524</td><td>5</td><td>4</td></tr>
<tr><td>Sabres</td><td>BUF</td><td>95</td><td>79</td><td>73</td><td>11</td><td>2963</td><td>944</td><td>999</td><td>989</td><td>57</td><td>2559</td><td>728</td><td>631</td><td>1665</td><td>243</td><td>45</td><td>18.52%</td><td>266</td><td>44</td><td>83.46%</td><td>1</td><td>55.64%</td><td>53.01%</td><td>56.35%</td><td>1906</td><td>1998</td><td>1064</td><td>602</td><td>1391</td><td>533</td><td>3</td><td>3</td></tr>
<tr><td>Senators</td><td>OTT</td><td>90</td><td>76</td><td>64</td><td>12</td><td>2672</td><td>856</td><td>917</td><td>853</td><td>64</td><td>2995</td><td>860</td><td>556</td><td>1637</td><td>259</td><td>48</td><td>18.53%</td><td>246</td><td>56</td><td>77.24%</td><td>0</td><td>48.48%</td><td>48.82%</td><td>49.39%</td><td>2091</td><td>1835</td><td>1060</td><td>624</td><td>1252</td><td>512</td><td>0</td><td>0</td></tr>
<tr><td>Sharks</td><td>SJS</td><td>84</td><td>58</td><td>60</td><td>14</td><td>2444</td><td>754</td><td>808</td><td>835</td><td>68</td><td>2870</td><td>802</td><td>675</td><td>1725</td><td>250</td><td>45</td><td>18.00%</td><td>262</td><td>56</td><td>78.63%</td><td>6</td><td>46.45%</td><td>47.00%</td><td>47.33%</td><td>2015</td><td>1918</td><td>1048</td><td>596</td><td>1327</td><td>515</td><td>3</td><td>4</td></tr>
<tr><td>Stars</td><td>DAL</td><td>89</td><td>84</td><td>91</td><td>8</td><td>2979</td><td>937</td><td>974</td><td>1026</td><td>55</td><td>2748</td><td>746</td><td>565</td><td>1710</td><td>226</td><td>57</td><td>25.22%</td><td>224</td><td>34</td><td>84.82%</td><td>1</td><td>51.17%</td><td>53.40%</td><td>51.13%</td><td>1995</td><td>1900</td><td>1073</td><td>607</td><td>1305</td><td>527</td><td>1</td><td>4</td></tr>
<tr><td>Wild</td><td>MIN</td><td>73</td><td>76</td><td>63</td><td>5</td><td>2311</td><td>770</td><td>751</td><td>772</td><td>25</td><td>2775</td><td>742</td><td>466</td><td>1693</td><td>203</td><td>42</td><td>20.69%</td><td>204</td><td>51</td><td>75.00%</td><td>2</td><td>46.81%</td><td>45.34%</td><td>46.81%</td><td>2001</td><td>1891</td><td>1055</td><td>590</td><td>1300</td><td>523</td><td>6</td><td>4</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Islanders</td><td>3.61</td></tr>
<tr><td>2</td><td>Oilers</td><td>3.50</td></tr>
<tr><td>3</td><td>Canucks</td><td>3.48</td></tr>
<tr><td>4</td><td>Flames</td><td>3.46</td></tr>
<tr><td>5</td><td>Kings</td><td>3.43</td></tr>
<tr><td>6</td><td>Predators</td><td>3.38</td></tr>
<tr><td>7</td><td>Stars</td><td>3.28</td></tr>
<tr><td>8</td><td>Blue Jackets</td><td>3.27</td></tr>
<tr><td>9</td><td>Kraken</td><td>3.21</td></tr>
<tr><td>10</td><td>Maple Leafs</td><td>3.20</td></tr>
<tr><td>11</td><td>Bruins</td><td>3.13</td></tr>
<tr><td>12</td><td>Canadiens</td><td>3.12</td></tr>
<tr><td>13</td><td>Sabres</td><td>3.11</td></tr>
<tr><td>14</td><td>Blackhawks</td><td>2.99</td></tr>
<tr><td>15</td><td>Jets</td><td>2.96</td></tr>
<tr><td>16</td><td>Senators</td><td>2.95</td></tr>
<tr><td>17</td><td>Devils</td><td>2.90</td></tr>
<tr><td>18</td><td>Red Wings</td><td>2.84</td></tr>
<tr><td>19</td><td>Ducks</td><td>2.78</td></tr>
<tr><td>20</td><td>Golden Knights</td><td>2.74</td></tr>
<tr><td>21</td><td>Blues</td><td>2.72</td></tr>
<tr><td>22</td><td>Rangers</td><td>2.70</td></tr>
<tr><td>23</td><td>Capitals</td><td>2.68</td></tr>
<tr><td>24</td><td>Coyotes</td><td>2.68</td></tr>
<tr><td>25</td><td>Wild</td><td>2.65</td></tr>
<tr><td>26</td><td>Penguins</td><td>2.62</td></tr>
<tr><td>27</td><td>Flyers</td><td>2.60</td></tr>
<tr><td>28</td><td>Panthers</td><td>2.60</td></tr>
<tr><td>29</td><td>Sharks</td><td>2.57</td></tr>
<tr><td>30</td><td>Lightning</td><td>2.46</td></tr>
<tr><td>31</td><td>Avalanche</td><td>2.24</td></tr>
<tr><td>32</td><td>Hurricanes</td><td>2.24</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.94</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>2.26</td></tr>
<tr><td>2</td><td>Oilers</td><td>2.43</td></tr>
<tr><td>3</td><td>Islanders</td><td>2.50</td></tr>
<tr><td>4</td><td>Canadiens</td><td>2.55</td></tr>
<tr><td>5</td><td>Flames</td><td>2.56</td></tr>
<tr><td>6</td><td>Sabres</td><td>2.65</td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>2.65</td></tr>
<tr><td>8</td><td>Kings</td><td>2.71</td></tr>
<tr><td>9</td><td>Bruins</td><td>2.71</td></tr>
<tr><td>10</td><td>Capitals</td><td>2.74</td></tr>
<tr><td>11</td><td>Stars</td><td>2.76</td></tr>
<tr><td>12</td><td>Predators</td><td>2.76</td></tr>
<tr><td>13</td><td>Devils</td><td>2.76</td></tr>
<tr><td>14</td><td>Coyotes</td><td>2.78</td></tr>
<tr><td>15</td><td>Panthers</td><td>2.79</td></tr>
<tr><td>16</td><td>Canucks</td><td>2.79</td></tr>
<tr><td>17</td><td>Penguins</td><td>2.84</td></tr>
<tr><td>18</td><td>Maple Leafs</td><td>2.85</td></tr>
<tr><td>19</td><td>Golden Knights</td><td>2.98</td></tr>
<tr><td>20</td><td>Jets</td><td>3.00</td></tr>
<tr><td>21</td><td>Kraken</td><td>3.06</td></tr>
<tr><td>22</td><td>Ducks</td><td>3.07</td></tr>
<tr><td>23</td><td>Red Wings</td><td>3.20</td></tr>
<tr><td>24</td><td>Lightning</td><td>3.23</td></tr>
<tr><td>25</td><td>Sharks</td><td>3.32</td></tr>
<tr><td>26</td><td>Senators</td><td>3.32</td></tr>
<tr><td>27</td><td>Avalanche</td><td>3.39</td></tr>
<tr><td>28</td><td>Wild</td><td>3.41</td></tr>
<tr><td>29</td><td>Hurricanes</td><td>3.43</td></tr>
<tr><td>30</td><td>Flyers</td><td>3.44</td></tr>
<tr><td>31</td><td>Blues</td><td>3.50</td></tr>
<tr><td>32</td><td>Rangers</td><td>3.70</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Islanders</td><td>144.39%</td></tr>
<tr><td>2</td><td>Oilers</td><td>144.22%</td></tr>
<tr><td>3</td><td>Flames</td><td>135.24%</td></tr>
<tr><td>4</td><td>Blackhawks</td><td>132.43%</td></tr>
<tr><td>5</td><td>Kings</td><td>126.58%</td></tr>
<tr><td>6</td><td>Canucks</td><td>124.45%</td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>123.50%</td></tr>
<tr><td>8</td><td>Predators</td><td>122.57%</td></tr>
<tr><td>9</td><td>Canadiens</td><td>122.49%</td></tr>
<tr><td>10</td><td>Stars</td><td>119.03%</td></tr>
<tr><td>11</td><td>Sabres</td><td>117.51%</td></tr>
<tr><td>12</td><td>Bruins</td><td>115.77%</td></tr>
<tr><td>13</td><td>Maple Leafs</td><td>111.97%</td></tr>
<tr><td>14</td><td>Devils</td><td>105.31%</td></tr>
<tr><td>15</td><td>Kraken</td><td>104.78%</td></tr>
<tr><td>16</td><td>Jets</td><td>98.78%</td></tr>
<tr><td>17</td><td>Capitals</td><td>97.78%</td></tr>
<tr><td>18</td><td>Coyotes</td><td>96.49%</td></tr>
<tr><td>19</td><td>Panthers</td><td>93.01%</td></tr>
<tr><td>20</td><td>Penguins</td><td>92.27%</td></tr>
<tr><td>21</td><td>Golden Knights</td><td>92.21%</td></tr>
<tr><td>22</td><td>Ducks</td><td>90.48%</td></tr>
<tr><td>23</td><td>Senators</td><td>88.97%</td></tr>
<tr><td>24</td><td>Red Wings</td><td>88.93%</td></tr>
<tr><td>25</td><td>Blues</td><td>77.70%</td></tr>
<tr><td>26</td><td>Sharks</td><td>77.57%</td></tr>
<tr><td>27</td><td>Wild</td><td>77.50%</td></tr>
<tr><td>28</td><td>Lightning</td><td>76.23%</td></tr>
<tr><td>29</td><td>Flyers</td><td>75.53%</td></tr>
<tr><td>30</td><td>Rangers</td><td>72.94%</td></tr>
<tr><td>31</td><td>Avalanche</td><td>66.19%</td></tr>
<tr><td>32</td><td>Hurricanes</td><td>65.48%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19.22%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Stars</td><td>25.22%</td></tr>
<tr><td>2</td><td>Flames</td><td>23.66%</td></tr>
<tr><td>3</td><td>Golden Knights</td><td>23.11%</td></tr>
<tr><td>4</td><td>Kings</td><td>22.88%</td></tr>
<tr><td>5</td><td>Bruins</td><td>22.65%</td></tr>
<tr><td>6</td><td>Jets</td><td>21.77%</td></tr>
<tr><td>7</td><td>Islanders</td><td>21.72%</td></tr>
<tr><td>8</td><td>Lightning</td><td>21.67%</td></tr>
<tr><td>9</td><td>Kraken</td><td>21.40%</td></tr>
<tr><td>10</td><td>Blue Jackets</td><td>21.29%</td></tr>
<tr><td>11</td><td>Blackhawks</td><td>20.75%</td></tr>
<tr><td>12</td><td>Wild</td><td>20.69%</td></tr>
<tr><td>13</td><td>Devils</td><td>20.43%</td></tr>
<tr><td>14</td><td>Ducks</td><td>20.08%</td></tr>
<tr><td>15</td><td>Red Wings</td><td>19.75%</td></tr>
<tr><td>16</td><td>Oilers</td><td>19.66%</td></tr>
<tr><td>17</td><td>Canucks</td><td>18.92%</td></tr>
<tr><td>18</td><td>Maple Leafs</td><td>18.53%</td></tr>
<tr><td>19</td><td>Senators</td><td>18.53%</td></tr>
<tr><td>20</td><td>Sabres</td><td>18.52%</td></tr>
<tr><td>21</td><td>Capitals</td><td>18.18%</td></tr>
<tr><td>22</td><td>Sharks</td><td>18.00%</td></tr>
<tr><td>23</td><td>Coyotes</td><td>17.97%</td></tr>
<tr><td>24</td><td>Predators</td><td>17.32%</td></tr>
<tr><td>25</td><td>Penguins</td><td>16.87%</td></tr>
<tr><td>26</td><td>Rangers</td><td>16.81%</td></tr>
<tr><td>27</td><td>Hurricanes</td><td>15.55%</td></tr>
<tr><td>28</td><td>Panthers</td><td>15.48%</td></tr>
<tr><td>29</td><td>Canadiens</td><td>15.18%</td></tr>
<tr><td>30</td><td>Flyers</td><td>15.13%</td></tr>
<tr><td>31</td><td>Avalanche</td><td>14.22%</td></tr>
<tr><td>32</td><td>Blues</td><td>12.44%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80.78%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>86.43%</td></tr>
<tr><td>2</td><td>Oilers</td><td>85.10%</td></tr>
<tr><td>3</td><td>Stars</td><td>84.82%</td></tr>
<tr><td>4</td><td>Coyotes</td><td>83.54%</td></tr>
<tr><td>5</td><td>Blues</td><td>83.48%</td></tr>
<tr><td>6</td><td>Sabres</td><td>83.46%</td></tr>
<tr><td>7</td><td>Panthers</td><td>83.11%</td></tr>
<tr><td>8</td><td>Golden Knights</td><td>82.95%</td></tr>
<tr><td>9</td><td>Devils</td><td>82.91%</td></tr>
<tr><td>10</td><td>Jets</td><td>82.89%</td></tr>
<tr><td>11</td><td>Ducks</td><td>82.46%</td></tr>
<tr><td>12</td><td>Bruins</td><td>82.46%</td></tr>
<tr><td>13</td><td>Kings</td><td>82.44%</td></tr>
<tr><td>14</td><td>Canadiens</td><td>82.40%</td></tr>
<tr><td>15</td><td>Avalanche</td><td>81.93%</td></tr>
<tr><td>16</td><td>Flames</td><td>81.78%</td></tr>
<tr><td>17</td><td>Islanders</td><td>81.36%</td></tr>
<tr><td>18</td><td>Maple Leafs</td><td>80.47%</td></tr>
<tr><td>19</td><td>Canucks</td><td>79.91%</td></tr>
<tr><td>20</td><td>Penguins</td><td>79.86%</td></tr>
<tr><td>21</td><td>Kraken</td><td>79.57%</td></tr>
<tr><td>22</td><td>Lightning</td><td>79.31%</td></tr>
<tr><td>23</td><td>Predators</td><td>79.26%</td></tr>
<tr><td>24</td><td>Sharks</td><td>78.63%</td></tr>
<tr><td>25</td><td>Capitals</td><td>78.60%</td></tr>
<tr><td>26</td><td>Blue Jackets</td><td>78.18%</td></tr>
<tr><td>27</td><td>Senators</td><td>77.24%</td></tr>
<tr><td>28</td><td>Hurricanes</td><td>77.02%</td></tr>
<tr><td>29</td><td>Flyers</td><td>76.95%</td></tr>
<tr><td>30</td><td>Red Wings</td><td>76.19%</td></tr>
<tr><td>31</td><td>Wild</td><td>75.00%</td></tr>
<tr><td>32</td><td>Rangers</td><td>74.89%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Stars</td><td>110.04%</td></tr>
<tr><td>2</td><td>Blackhawks</td><td>107.17%</td></tr>
<tr><td>3</td><td>Golden Knights</td><td>106.05%</td></tr>
<tr><td>4</td><td>Flames</td><td>105.45%</td></tr>
<tr><td>5</td><td>Kings</td><td>105.32%</td></tr>
<tr><td>6</td><td>Bruins</td><td>105.11%</td></tr>
<tr><td>7</td><td>Oilers</td><td>104.76%</td></tr>
<tr><td>8</td><td>Jets</td><td>104.66%</td></tr>
<tr><td>9</td><td>Devils</td><td>103.34%</td></tr>
<tr><td>10</td><td>Islanders</td><td>103.08%</td></tr>
<tr><td>11</td><td>Ducks</td><td>102.55%</td></tr>
<tr><td>12</td><td>Sabres</td><td>101.98%</td></tr>
<tr><td>13</td><td>Coyotes</td><td>101.52%</td></tr>
<tr><td>14</td><td>Lightning</td><td>100.98%</td></tr>
<tr><td>15</td><td>Kraken</td><td>100.97%</td></tr>
<tr><td>16</td><td>Blue Jackets</td><td>99.47%</td></tr>
<tr><td>17</td><td>Maple Leafs</td><td>99.00%</td></tr>
<tr><td>18</td><td>Canucks</td><td>98.83%</td></tr>
<tr><td>19</td><td>Panthers</td><td>98.58%</td></tr>
<tr><td>20</td><td>Canadiens</td><td>97.58%</td></tr>
<tr><td>21</td><td>Capitals</td><td>96.78%</td></tr>
<tr><td>22</td><td>Penguins</td><td>96.73%</td></tr>
<tr><td>23</td><td>Sharks</td><td>96.63%</td></tr>
<tr><td>24</td><td>Predators</td><td>96.59%</td></tr>
<tr><td>25</td><td>Avalanche</td><td>96.15%</td></tr>
<tr><td>26</td><td>Red Wings</td><td>95.94%</td></tr>
<tr><td>27</td><td>Blues</td><td>95.92%</td></tr>
<tr><td>28</td><td>Senators</td><td>95.77%</td></tr>
<tr><td>29</td><td>Wild</td><td>95.69%</td></tr>
<tr><td>30</td><td>Hurricanes</td><td>92.57%</td></tr>
<tr><td>31</td><td>Flyers</td><td>92.08%</td></tr>
<tr><td>32</td><td>Rangers</td><td>91.70%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32.52</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Islanders</td><td>38.18</td></tr>
<tr><td>2</td><td>Canucks</td><td>37.41</td></tr>
<tr><td>3</td><td>Predators</td><td>37.22</td></tr>
<tr><td>4</td><td>Stars</td><td>36.33</td></tr>
<tr><td>5</td><td>Oilers</td><td>36.29</td></tr>
<tr><td>6</td><td>Flames</td><td>36.27</td></tr>
<tr><td>7</td><td>Sabres</td><td>36.13</td></tr>
<tr><td>8</td><td>Blue Jackets</td><td>35.63</td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>34.54</td></tr>
<tr><td>10</td><td>Kraken</td><td>34.44</td></tr>
<tr><td>11</td><td>Kings</td><td>34.27</td></tr>
<tr><td>12</td><td>Blackhawks</td><td>33.66</td></tr>
<tr><td>13</td><td>Red Wings</td><td>33.49</td></tr>
<tr><td>14</td><td>Bruins</td><td>33.13</td></tr>
<tr><td>15</td><td>Senators</td><td>32.59</td></tr>
<tr><td>16</td><td>Canadiens</td><td>32.24</td></tr>
<tr><td>17</td><td>Ducks</td><td>32.05</td></tr>
<tr><td>18</td><td>Jets</td><td>31.76</td></tr>
<tr><td>19</td><td>Flyers</td><td>31.66</td></tr>
<tr><td>20</td><td>Capitals</td><td>31.57</td></tr>
<tr><td>21</td><td>Coyotes</td><td>30.98</td></tr>
<tr><td>22</td><td>Penguins</td><td>30.90</td></tr>
<tr><td>23</td><td>Devils</td><td>30.89</td></tr>
<tr><td>24</td><td>Golden Knights</td><td>30.89</td></tr>
<tr><td>25</td><td>Sharks</td><td>29.80</td></tr>
<tr><td>26</td><td>Panthers</td><td>29.32</td></tr>
<tr><td>27</td><td>Rangers</td><td>29.16</td></tr>
<tr><td>28</td><td>Blues</td><td>28.89</td></tr>
<tr><td>29</td><td>Lightning</td><td>28.82</td></tr>
<tr><td>30</td><td>Wild</td><td>28.18</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>27.85</td></tr>
<tr><td>32</td><td>Avalanche</td><td>26.22</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32.52</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oilers</td><td>29.07</td></tr>
<tr><td>2</td><td>Maple Leafs</td><td>30.20</td></tr>
<tr><td>3</td><td>Bruins</td><td>30.21</td></tr>
<tr><td>4</td><td>Blackhawks</td><td>30.40</td></tr>
<tr><td>5</td><td>Canucks</td><td>30.55</td></tr>
<tr><td>6</td><td>Islanders</td><td>30.60</td></tr>
<tr><td>7</td><td>Devils</td><td>30.85</td></tr>
<tr><td>8</td><td>Canadiens</td><td>31.06</td></tr>
<tr><td>9</td><td>Flames</td><td>31.09</td></tr>
<tr><td>10</td><td>Sabres</td><td>31.21</td></tr>
<tr><td>11</td><td>Coyotes</td><td>31.24</td></tr>
<tr><td>12</td><td>Capitals</td><td>31.28</td></tr>
<tr><td>13</td><td>Panthers</td><td>31.45</td></tr>
<tr><td>14</td><td>Kings</td><td>31.61</td></tr>
<tr><td>15</td><td>Golden Knights</td><td>31.72</td></tr>
<tr><td>16</td><td>Blue Jackets</td><td>31.73</td></tr>
<tr><td>17</td><td>Ducks</td><td>31.74</td></tr>
<tr><td>18</td><td>Predators</td><td>31.99</td></tr>
<tr><td>19</td><td>Red Wings</td><td>32.43</td></tr>
<tr><td>20</td><td>Jets</td><td>32.89</td></tr>
<tr><td>21</td><td>Kraken</td><td>33.10</td></tr>
<tr><td>22</td><td>Hurricanes</td><td>33.21</td></tr>
<tr><td>23</td><td>Stars</td><td>33.51</td></tr>
<tr><td>24</td><td>Wild</td><td>33.84</td></tr>
<tr><td>25</td><td>Avalanche</td><td>34.10</td></tr>
<tr><td>26</td><td>Rangers</td><td>34.18</td></tr>
<tr><td>27</td><td>Lightning</td><td>34.71</td></tr>
<tr><td>28</td><td>Sharks</td><td>35.00</td></tr>
<tr><td>29</td><td>Penguins</td><td>35.02</td></tr>
<tr><td>30</td><td>Flyers</td><td>35.20</td></tr>
<tr><td>31</td><td>Senators</td><td>36.52</td></tr>
<tr><td>32</td><td>Blues</td><td>39.06</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Oilers</td><td>124.83%</td></tr>
<tr><td>2</td><td>Islanders</td><td>124.79%</td></tr>
<tr><td>3</td><td>Canucks</td><td>122.48%</td></tr>
<tr><td>4</td><td>Flames</td><td>116.67%</td></tr>
<tr><td>5</td><td>Predators</td><td>116.36%</td></tr>
<tr><td>6</td><td>Sabres</td><td>115.79%</td></tr>
<tr><td>7</td><td>Maple Leafs</td><td>114.38%</td></tr>
<tr><td>8</td><td>Blue Jackets</td><td>112.30%</td></tr>
<tr><td>9</td><td>Blackhawks</td><td>110.71%</td></tr>
<tr><td>10</td><td>Bruins</td><td>109.69%</td></tr>
<tr><td>11</td><td>Kings</td><td>108.41%</td></tr>
<tr><td>12</td><td>Stars</td><td>108.41%</td></tr>
<tr><td>13</td><td>Kraken</td><td>104.05%</td></tr>
<tr><td>14</td><td>Canadiens</td><td>103.81%</td></tr>
<tr><td>15</td><td>Red Wings</td><td>103.27%</td></tr>
<tr><td>16</td><td>Ducks</td><td>100.96%</td></tr>
<tr><td>17</td><td>Capitals</td><td>100.94%</td></tr>
<tr><td>18</td><td>Devils</td><td>100.12%</td></tr>
<tr><td>19</td><td>Coyotes</td><td>99.14%</td></tr>
<tr><td>20</td><td>Golden Knights</td><td>97.39%</td></tr>
<tr><td>21</td><td>Jets</td><td>96.55%</td></tr>
<tr><td>22</td><td>Panthers</td><td>93.21%</td></tr>
<tr><td>23</td><td>Flyers</td><td>89.95%</td></tr>
<tr><td>24</td><td>Senators</td><td>89.22%</td></tr>
<tr><td>25</td><td>Penguins</td><td>88.23%</td></tr>
<tr><td>26</td><td>Rangers</td><td>85.30%</td></tr>
<tr><td>27</td><td>Sharks</td><td>85.16%</td></tr>
<tr><td>28</td><td>Hurricanes</td><td>83.88%</td></tr>
<tr><td>29</td><td>Wild</td><td>83.28%</td></tr>
<tr><td>30</td><td>Lightning</td><td>83.03%</td></tr>
<tr><td>31</td><td>Avalanche</td><td>76.90%</td></tr>
<tr><td>32</td><td>Blues</td><td>73.96%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7.38</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wild</td><td>5.68</td></tr>
<tr><td>2</td><td>Ducks</td><td>6.13</td></tr>
<tr><td>3</td><td>Predators</td><td>6.17</td></tr>
<tr><td>4</td><td>Panthers</td><td>6.41</td></tr>
<tr><td>5</td><td>Islanders</td><td>6.50</td></tr>
<tr><td>6</td><td>Canucks</td><td>6.71</td></tr>
<tr><td>7</td><td>Kraken</td><td>6.77</td></tr>
<tr><td>8</td><td>Senators</td><td>6.78</td></tr>
<tr><td>9</td><td>Blue Jackets</td><td>6.80</td></tr>
<tr><td>10</td><td>Hurricanes</td><td>6.84</td></tr>
<tr><td>11</td><td>Stars</td><td>6.89</td></tr>
<tr><td>12</td><td>Rangers</td><td>6.94</td></tr>
<tr><td>13</td><td>Coyotes</td><td>7.12</td></tr>
<tr><td>14</td><td>Blackhawks</td><td>7.17</td></tr>
<tr><td>15</td><td>Jets</td><td>7.26</td></tr>
<tr><td>16</td><td>Avalanche</td><td>7.39</td></tr>
<tr><td>17</td><td>Golden Knights</td><td>7.60</td></tr>
<tr><td>18</td><td>Maple Leafs</td><td>7.62</td></tr>
<tr><td>19</td><td>Kings</td><td>7.65</td></tr>
<tr><td>20</td><td>Blues</td><td>7.67</td></tr>
<tr><td>21</td><td>Flyers</td><td>7.68</td></tr>
<tr><td>22</td><td>Sabres</td><td>7.70</td></tr>
<tr><td>23</td><td>Oilers</td><td>7.73</td></tr>
<tr><td>24</td><td>Capitals</td><td>7.80</td></tr>
<tr><td>25</td><td>Flames</td><td>7.83</td></tr>
<tr><td>26</td><td>Canadiens</td><td>7.87</td></tr>
<tr><td>27</td><td>Lightning</td><td>7.90</td></tr>
<tr><td>28</td><td>Red Wings</td><td>7.98</td></tr>
<tr><td>29</td><td>Devils</td><td>8.17</td></tr>
<tr><td>30</td><td>Sharks</td><td>8.23</td></tr>
<tr><td>31</td><td>Bruins</td><td>9.09</td></tr>
<tr><td>32</td><td>Penguins</td><td>9.93</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20.16</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Penguins</td><td>22.09</td></tr>
<tr><td>2</td><td>Flyers</td><td>21.71</td></tr>
<tr><td>3</td><td>Lightning</td><td>21.46</td></tr>
<tr><td>4</td><td>Oilers</td><td>21.32</td></tr>
<tr><td>5</td><td>Sharks</td><td>21.04</td></tr>
<tr><td>6</td><td>Stars</td><td>20.85</td></tr>
<tr><td>7</td><td>Wild</td><td>20.65</td></tr>
<tr><td>8</td><td>Avalanche</td><td>20.50</td></tr>
<tr><td>9</td><td>Bruins</td><td>20.46</td></tr>
<tr><td>10</td><td>Flames</td><td>20.45</td></tr>
<tr><td>11</td><td>Golden Knights</td><td>20.38</td></tr>
<tr><td>12</td><td>Canadiens</td><td>20.30</td></tr>
<tr><td>13</td><td>Sabres</td><td>20.30</td></tr>
<tr><td>14</td><td>Hurricanes</td><td>20.16</td></tr>
<tr><td>15</td><td>Kraken</td><td>20.10</td></tr>
<tr><td>16</td><td>Islanders</td><td>20.05</td></tr>
<tr><td>17</td><td>Canucks</td><td>20.02</td></tr>
<tr><td>18</td><td>Jets</td><td>19.99</td></tr>
<tr><td>19</td><td>Senators</td><td>19.96</td></tr>
<tr><td>20</td><td>Kings</td><td>19.94</td></tr>
<tr><td>21</td><td>Red Wings</td><td>19.91</td></tr>
<tr><td>22</td><td>Ducks</td><td>19.88</td></tr>
<tr><td>23</td><td>Blues</td><td>19.73</td></tr>
<tr><td>24</td><td>Capitals</td><td>19.62</td></tr>
<tr><td>25</td><td>Devils</td><td>19.55</td></tr>
<tr><td>26</td><td>Blackhawks</td><td>19.51</td></tr>
<tr><td>27</td><td>Blue Jackets</td><td>19.46</td></tr>
<tr><td>28</td><td>Coyotes</td><td>19.43</td></tr>
<tr><td>29</td><td>Maple Leafs</td><td>19.30</td></tr>
<tr><td>30</td><td>Predators</td><td>19.12</td></tr>
<tr><td>31</td><td>Rangers</td><td>19.05</td></tr>
<tr><td>32</td><td>Panthers</td><td>18.95</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Maple Leafs</td><td>56.73%</td></tr>
<tr><td>2</td><td>Flames</td><td>55.66%</td></tr>
<tr><td>3</td><td>Devils</td><td>55.56%</td></tr>
<tr><td>4</td><td>Sabres</td><td>54.64%</td></tr>
<tr><td>5</td><td>Oilers</td><td>54.24%</td></tr>
<tr><td>6</td><td>Blackhawks</td><td>54.07%</td></tr>
<tr><td>7</td><td>Golden Knights</td><td>53.28%</td></tr>
<tr><td>8</td><td>Capitals</td><td>53.26%</td></tr>
<tr><td>9</td><td>Canucks</td><td>52.76%</td></tr>
<tr><td>10</td><td>Panthers</td><td>52.73%</td></tr>
<tr><td>11</td><td>Bruins</td><td>52.62%</td></tr>
<tr><td>12</td><td>Canadiens</td><td>52.61%</td></tr>
<tr><td>13</td><td>Stars</td><td>52.09%</td></tr>
<tr><td>14</td><td>Kings</td><td>51.71%</td></tr>
<tr><td>15</td><td>Islanders</td><td>51.60%</td></tr>
<tr><td>16</td><td>Kraken</td><td>51.45%</td></tr>
<tr><td>17</td><td>Jets</td><td>51.43%</td></tr>
<tr><td>18</td><td>Coyotes</td><td>50.40%</td></tr>
<tr><td>19</td><td>Rangers</td><td>49.35%</td></tr>
<tr><td>20</td><td>Senators</td><td>48.77%</td></tr>
<tr><td>21</td><td>Hurricanes</td><td>48.26%</td></tr>
<tr><td>22</td><td>Blues</td><td>48.21%</td></tr>
<tr><td>23</td><td>Lightning</td><td>48.17%</td></tr>
<tr><td>24</td><td>Red Wings</td><td>47.64%</td></tr>
<tr><td>25</td><td>Blue Jackets</td><td>47.17%</td></tr>
<tr><td>26</td><td>Predators</td><td>46.86%</td></tr>
<tr><td>27</td><td>Sharks</td><td>46.82%</td></tr>
<tr><td>28</td><td>Ducks</td><td>46.81%</td></tr>
<tr><td>29</td><td>Wild</td><td>46.25%</td></tr>
<tr><td>30</td><td>Avalanche</td><td>46.21%</td></tr>
<tr><td>31</td><td>Penguins</td><td>45.30%</td></tr>
<tr><td>32</td><td>Flyers</td><td>42.34%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
