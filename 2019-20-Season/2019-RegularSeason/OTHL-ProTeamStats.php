<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Stats</title>
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
<tr><td>Avalanche</td><td>82</td><td>25</td><td>34</td><td>5</td><td>9</td><td>2</td><td>7</td><td>206</td><td>235</td><td>41</td><td>15</td><td>17</td><td>1</td><td>3</td><td>1</td><td>4</td><td>105</td><td>117</td><td>41</td><td>10</td><td>17</td><td>4</td><td>6</td><td>1</td><td>3</td><td>101</td><td>118</td><td>206</td><td>372</td><td>578</td></tr>
<tr><td>Blackhawks</td><td>82</td><td>42</td><td>29</td><td>0</td><td>2</td><td>4</td><td>5</td><td>241</td><td>212</td><td>41</td><td>20</td><td>14</td><td>0</td><td>1</td><td>3</td><td>3</td><td>128</td><td>106</td><td>41</td><td>22</td><td>15</td><td>0</td><td>1</td><td>1</td><td>2</td><td>113</td><td>106</td><td>241</td><td>426</td><td>667</td></tr>
<tr><td>Blue Jackets</td><td>82</td><td>32</td><td>35</td><td>4</td><td>2</td><td>5</td><td>4</td><td>229</td><td>246</td><td>41</td><td>18</td><td>16</td><td>3</td><td>0</td><td>3</td><td>1</td><td>127</td><td>115</td><td>41</td><td>14</td><td>19</td><td>1</td><td>2</td><td>2</td><td>3</td><td>102</td><td>131</td><td>229</td><td>400</td><td>629</td></tr>
<tr><td>Blues</td><td>82</td><td>21</td><td>47</td><td>1</td><td>4</td><td>2</td><td>7</td><td>206</td><td>284</td><td>41</td><td>9</td><td>24</td><td>0</td><td>4</td><td>1</td><td>3</td><td>97</td><td>148</td><td>41</td><td>12</td><td>23</td><td>1</td><td>0</td><td>1</td><td>4</td><td>109</td><td>136</td><td>206</td><td>375</td><td>581</td></tr>
<tr><td>Bruins</td><td>82</td><td>40</td><td>25</td><td>4</td><td>1</td><td>6</td><td>6</td><td>259</td><td>223</td><td>41</td><td>22</td><td>15</td><td>1</td><td>0</td><td>2</td><td>1</td><td>126</td><td>106</td><td>41</td><td>18</td><td>10</td><td>3</td><td>1</td><td>4</td><td>5</td><td>133</td><td>117</td><td>259</td><td>447</td><td>706</td></tr>
<tr><td>Canadiens</td><td>82</td><td>33</td><td>25</td><td>7</td><td>2</td><td>10</td><td>5</td><td>250</td><td>196</td><td>41</td><td>12</td><td>10</td><td>5</td><td>2</td><td>9</td><td>3</td><td>123</td><td>100</td><td>41</td><td>21</td><td>15</td><td>2</td><td>0</td><td>1</td><td>2</td><td>127</td><td>96</td><td>250</td><td>438</td><td>688</td></tr>
<tr><td>Canucks</td><td>82</td><td>37</td><td>32</td><td>3</td><td>3</td><td>6</td><td>1</td><td>269</td><td>229</td><td>41</td><td>19</td><td>13</td><td>3</td><td>1</td><td>5</td><td>0</td><td>136</td><td>99</td><td>41</td><td>18</td><td>19</td><td>0</td><td>2</td><td>1</td><td>1</td><td>133</td><td>130</td><td>269</td><td>475</td><td>744</td></tr>
<tr><td>Capitals</td><td>82</td><td>38</td><td>24</td><td>2</td><td>4</td><td>9</td><td>5</td><td>237</td><td>202</td><td>41</td><td>22</td><td>10</td><td>1</td><td>1</td><td>4</td><td>3</td><td>122</td><td>93</td><td>41</td><td>16</td><td>14</td><td>1</td><td>3</td><td>5</td><td>2</td><td>115</td><td>109</td><td>237</td><td>415</td><td>652</td></tr>
<tr><td>Coyotes</td><td>82</td><td>42</td><td>27</td><td>4</td><td>4</td><td>3</td><td>2</td><td>264</td><td>237</td><td>41</td><td>22</td><td>14</td><td>2</td><td>2</td><td>0</td><td>1</td><td>126</td><td>118</td><td>41</td><td>20</td><td>13</td><td>2</td><td>2</td><td>3</td><td>1</td><td>138</td><td>119</td><td>264</td><td>468</td><td>732</td></tr>
<tr><td>Devils</td><td>82</td><td>31</td><td>33</td><td>2</td><td>4</td><td>4</td><td>8</td><td>224</td><td>236</td><td>41</td><td>14</td><td>18</td><td>1</td><td>2</td><td>3</td><td>3</td><td>113</td><td>117</td><td>41</td><td>17</td><td>15</td><td>1</td><td>2</td><td>1</td><td>5</td><td>111</td><td>119</td><td>224</td><td>391</td><td>615</td></tr>
<tr><td>Ducks</td><td>82</td><td>34</td><td>30</td><td>4</td><td>2</td><td>2</td><td>10</td><td>215</td><td>230</td><td>41</td><td>19</td><td>15</td><td>1</td><td>1</td><td>1</td><td>4</td><td>110</td><td>112</td><td>41</td><td>15</td><td>15</td><td>3</td><td>1</td><td>1</td><td>6</td><td>105</td><td>118</td><td>215</td><td>381</td><td>596</td></tr>
<tr><td>Flames</td><td>82</td><td>44</td><td>23</td><td>2</td><td>3</td><td>5</td><td>5</td><td>245</td><td>203</td><td>41</td><td>23</td><td>11</td><td>2</td><td>2</td><td>1</td><td>2</td><td>128</td><td>100</td><td>41</td><td>21</td><td>12</td><td>0</td><td>1</td><td>4</td><td>3</td><td>117</td><td>103</td><td>245</td><td>442</td><td>687</td></tr>
<tr><td>Flyers</td><td>82</td><td>32</td><td>35</td><td>5</td><td>3</td><td>4</td><td>3</td><td>226</td><td>224</td><td>41</td><td>17</td><td>19</td><td>3</td><td>1</td><td>0</td><td>1</td><td>117</td><td>113</td><td>41</td><td>15</td><td>16</td><td>2</td><td>2</td><td>4</td><td>2</td><td>109</td><td>111</td><td>226</td><td>390</td><td>616</td></tr>
<tr><td>Golden Knights</td><td>82</td><td>26</td><td>38</td><td>4</td><td>3</td><td>3</td><td>8</td><td>200</td><td>235</td><td>41</td><td>13</td><td>21</td><td>1</td><td>1</td><td>1</td><td>4</td><td>90</td><td>111</td><td>41</td><td>13</td><td>17</td><td>3</td><td>2</td><td>2</td><td>4</td><td>110</td><td>124</td><td>200</td><td>352</td><td>552</td></tr>
<tr><td>Hurricanes</td><td>82</td><td>20</td><td>49</td><td>2</td><td>3</td><td>2</td><td>6</td><td>224</td><td>309</td><td>41</td><td>11</td><td>22</td><td>2</td><td>1</td><td>2</td><td>3</td><td>125</td><td>147</td><td>41</td><td>9</td><td>27</td><td>0</td><td>2</td><td>0</td><td>3</td><td>99</td><td>162</td><td>224</td><td>396</td><td>620</td></tr>
<tr><td>Islanders</td><td>82</td><td>43</td><td>26</td><td>3</td><td>2</td><td>6</td><td>2</td><td>254</td><td>213</td><td>41</td><td>24</td><td>12</td><td>2</td><td>0</td><td>3</td><td>0</td><td>130</td><td>98</td><td>41</td><td>19</td><td>14</td><td>1</td><td>2</td><td>3</td><td>2</td><td>124</td><td>115</td><td>254</td><td>432</td><td>686</td></tr>
<tr><td>Jets</td><td>82</td><td>29</td><td>39</td><td>6</td><td>3</td><td>3</td><td>2</td><td>222</td><td>241</td><td>41</td><td>13</td><td>21</td><td>2</td><td>1</td><td>2</td><td>2</td><td>109</td><td>129</td><td>41</td><td>16</td><td>18</td><td>4</td><td>2</td><td>1</td><td>0</td><td>113</td><td>112</td><td>222</td><td>385</td><td>607</td></tr>
<tr><td>Kings</td><td>82</td><td>37</td><td>31</td><td>3</td><td>1</td><td>5</td><td>5</td><td>241</td><td>231</td><td>41</td><td>20</td><td>12</td><td>3</td><td>0</td><td>2</td><td>4</td><td>137</td><td>122</td><td>41</td><td>17</td><td>19</td><td>0</td><td>1</td><td>3</td><td>1</td><td>104</td><td>109</td><td>241</td><td>406</td><td>647</td></tr>
<tr><td>Lightning</td><td>82</td><td>34</td><td>31</td><td>2</td><td>0</td><td>9</td><td>6</td><td>259</td><td>232</td><td>41</td><td>20</td><td>15</td><td>0</td><td>0</td><td>2</td><td>4</td><td>124</td><td>108</td><td>41</td><td>14</td><td>16</td><td>2</td><td>0</td><td>7</td><td>2</td><td>135</td><td>124</td><td>259</td><td>436</td><td>695</td></tr>
<tr><td>Maple Leafs</td><td>82</td><td>25</td><td>43</td><td>2</td><td>3</td><td>6</td><td>3</td><td>186</td><td>229</td><td>41</td><td>12</td><td>23</td><td>1</td><td>2</td><td>1</td><td>2</td><td>99</td><td>124</td><td>41</td><td>13</td><td>20</td><td>1</td><td>1</td><td>5</td><td>1</td><td>87</td><td>105</td><td>186</td><td>321</td><td>507</td></tr>
<tr><td>Oilers</td><td>82</td><td>40</td><td>27</td><td>2</td><td>3</td><td>3</td><td>7</td><td>260</td><td>221</td><td>41</td><td>24</td><td>10</td><td>1</td><td>0</td><td>2</td><td>4</td><td>137</td><td>98</td><td>41</td><td>16</td><td>17</td><td>1</td><td>3</td><td>1</td><td>3</td><td>123</td><td>123</td><td>260</td><td>459</td><td>719</td></tr>
<tr><td>Panthers</td><td>82</td><td>37</td><td>23</td><td>4</td><td>6</td><td>6</td><td>6</td><td>235</td><td>210</td><td>41</td><td>20</td><td>6</td><td>2</td><td>5</td><td>5</td><td>3</td><td>119</td><td>93</td><td>41</td><td>17</td><td>17</td><td>2</td><td>1</td><td>1</td><td>3</td><td>116</td><td>117</td><td>235</td><td>421</td><td>656</td></tr>
<tr><td>Penguins</td><td>82</td><td>20</td><td>54</td><td>3</td><td>0</td><td>4</td><td>1</td><td>213</td><td>283</td><td>41</td><td>11</td><td>26</td><td>1</td><td>0</td><td>3</td><td>0</td><td>99</td><td>136</td><td>41</td><td>9</td><td>28</td><td>2</td><td>0</td><td>1</td><td>1</td><td>114</td><td>147</td><td>213</td><td>380</td><td>593</td></tr>
<tr><td>Predators</td><td>82</td><td>37</td><td>25</td><td>4</td><td>3</td><td>8</td><td>5</td><td>248</td><td>218</td><td>41</td><td>23</td><td>10</td><td>1</td><td>1</td><td>5</td><td>1</td><td>134</td><td>98</td><td>41</td><td>14</td><td>15</td><td>3</td><td>2</td><td>3</td><td>4</td><td>114</td><td>120</td><td>248</td><td>422</td><td>670</td></tr>
<tr><td>Rangers</td><td>82</td><td>33</td><td>32</td><td>2</td><td>3</td><td>7</td><td>5</td><td>227</td><td>225</td><td>41</td><td>16</td><td>16</td><td>0</td><td>1</td><td>4</td><td>4</td><td>109</td><td>107</td><td>41</td><td>17</td><td>16</td><td>2</td><td>2</td><td>3</td><td>1</td><td>118</td><td>118</td><td>227</td><td>397</td><td>624</td></tr>
<tr><td>Red Wings</td><td>82</td><td>29</td><td>30</td><td>2</td><td>5</td><td>9</td><td>7</td><td>218</td><td>220</td><td>41</td><td>13</td><td>15</td><td>2</td><td>3</td><td>7</td><td>1</td><td>114</td><td>108</td><td>41</td><td>16</td><td>15</td><td>0</td><td>2</td><td>2</td><td>6</td><td>104</td><td>112</td><td>218</td><td>379</td><td>597</td></tr>
<tr><td>Sabres</td><td>82</td><td>43</td><td>22</td><td>2</td><td>3</td><td>3</td><td>9</td><td>242</td><td>192</td><td>41</td><td>20</td><td>11</td><td>1</td><td>3</td><td>2</td><td>4</td><td>131</td><td>113</td><td>41</td><td>23</td><td>11</td><td>1</td><td>0</td><td>1</td><td>5</td><td>111</td><td>79</td><td>242</td><td>421</td><td>663</td></tr>
<tr><td>Senators</td><td>82</td><td>27</td><td>38</td><td>2</td><td>3</td><td>8</td><td>4</td><td>202</td><td>244</td><td>41</td><td>18</td><td>14</td><td>0</td><td>2</td><td>5</td><td>2</td><td>104</td><td>108</td><td>41</td><td>9</td><td>24</td><td>2</td><td>1</td><td>3</td><td>2</td><td>98</td><td>136</td><td>202</td><td>352</td><td>554</td></tr>
<tr><td>Sharks</td><td>82</td><td>33</td><td>28</td><td>4</td><td>1</td><td>8</td><td>8</td><td>244</td><td>221</td><td>41</td><td>17</td><td>10</td><td>4</td><td>1</td><td>5</td><td>4</td><td>128</td><td>109</td><td>41</td><td>16</td><td>18</td><td>0</td><td>0</td><td>3</td><td>4</td><td>116</td><td>112</td><td>244</td><td>417</td><td>661</td></tr>
<tr><td>Stars</td><td>82</td><td>27</td><td>43</td><td>2</td><td>3</td><td>4</td><td>3</td><td>251</td><td>285</td><td>41</td><td>16</td><td>21</td><td>0</td><td>2</td><td>1</td><td>1</td><td>126</td><td>144</td><td>41</td><td>11</td><td>22</td><td>2</td><td>1</td><td>3</td><td>2</td><td>125</td><td>141</td><td>251</td><td>442</td><td>693</td></tr>
<tr><td>Wild</td><td>82</td><td>25</td><td>38</td><td>1</td><td>5</td><td>6</td><td>7</td><td>215</td><td>246</td><td>41</td><td>13</td><td>19</td><td>1</td><td>3</td><td>3</td><td>2</td><td>115</td><td>127</td><td>41</td><td>12</td><td>19</td><td>0</td><td>2</td><td>3</td><td>5</td><td>100</td><td>119</td><td>215</td><td>375</td><td>590</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Avalanche</td><td>COL</td><td>63</td><td>57</td><td>79</td><td>13</td><td>2369</td><td>752</td><td>766</td><td>814</td><td>70</td><td>2649</td><td>714</td><td>623</td><td>1612</td><td>251</td><td>38</td><td>15.14%</td><td>264</td><td>65</td><td>75.38%</td><td>4</td><td>49.64%</td><td>48.06%</td><td>49.46%</td><td>1982</td><td>1937</td><td>1073</td><td>621</td><td>1330</td><td>530</td><td>6</td><td>3</td></tr>
<tr><td>Blackhawks</td><td>CHI</td><td>77</td><td>79</td><td>81</td><td>13</td><td>2642</td><td>850</td><td>850</td><td>930</td><td>49</td><td>2373</td><td>683</td><td>658</td><td>1659</td><td>281</td><td>59</td><td>21.00%</td><td>250</td><td>43</td><td>82.80%</td><td>5</td><td>51.00%</td><td>48.96%</td><td>48.78%</td><td>1915</td><td>1991</td><td>1062</td><td>602</td><td>1371</td><td>539</td><td>5</td><td>2</td></tr>
<tr><td>Blue Jackets</td><td>CLB</td><td>82</td><td>68</td><td>70</td><td>20</td><td>2516</td><td>889</td><td>788</td><td>809</td><td>65</td><td>2759</td><td>760</td><td>658</td><td>1741</td><td>268</td><td>48</td><td>17.91%</td><td>297</td><td>58</td><td>80.47%</td><td>2</td><td>46.51%</td><td>46.12%</td><td>46.55%</td><td>2041</td><td>1881</td><td>1059</td><td>618</td><td>1286</td><td>518</td><td>4</td><td>1</td></tr>
<tr><td>Blues</td><td>STL</td><td>80</td><td>64</td><td>59</td><td>6</td><td>2293</td><td>756</td><td>783</td><td>722</td><td>63</td><td>2820</td><td>888</td><td>691</td><td>1819</td><td>270</td><td>41</td><td>15.19%</td><td>290</td><td>61</td><td>78.97%</td><td>1</td><td>38.75%</td><td>38.94%</td><td>38.57%</td><td>2104</td><td>1807</td><td>1061</td><td>621</td><td>1216</td><td>508</td><td>1</td><td>4</td></tr>
<tr><td>Bruins</td><td>BOS</td><td>105</td><td>74</td><td>70</td><td>17</td><td>2867</td><td>908</td><td>943</td><td>968</td><td>95</td><td>2558</td><td>733</td><td>766</td><td>1868</td><td>302</td><td>48</td><td>15.89%</td><td>313</td><td>52</td><td>83.39%</td><td>3</td><td>52.38%</td><td>53.48%</td><td>51.39%</td><td>1950</td><td>1976</td><td>1064</td><td>618</td><td>1362</td><td>528</td><td>2</td><td>4</td></tr>
<tr><td>Canadiens</td><td>MTL</td><td>84</td><td>74</td><td>75</td><td>26</td><td>2868</td><td>866</td><td>995</td><td>951</td><td>109</td><td>2635</td><td>770</td><td>781</td><td>1739</td><td>312</td><td>64</td><td>20.51%</td><td>298</td><td>31</td><td>89.60%</td><td>3</td><td>52.65%</td><td>51.67%</td><td>50.75%</td><td>1956</td><td>1996</td><td>1061</td><td>617</td><td>1377</td><td>530</td><td>7</td><td>2</td></tr>
<tr><td>Canucks</td><td>VAN</td><td>108</td><td>85</td><td>67</td><td>13</td><td>2848</td><td>915</td><td>982</td><td>929</td><td>45</td><td>2578</td><td>700</td><td>675</td><td>1682</td><td>272</td><td>58</td><td>21.32%</td><td>287</td><td>59</td><td>79.44%</td><td>2</td><td>52.95%</td><td>52.36%</td><td>52.70%</td><td>1932</td><td>1981</td><td>1055</td><td>606</td><td>1382</td><td>531</td><td>3</td><td>6</td></tr>
<tr><td>Capitals</td><td>WSH</td><td>85</td><td>68</td><td>73</td><td>16</td><td>2642</td><td>910</td><td>876</td><td>817</td><td>82</td><td>2441</td><td>718</td><td>588</td><td>1718</td><td>301</td><td>53</td><td>17.61%</td><td>238</td><td>36</td><td>84.87%</td><td>2</td><td>51.12%</td><td>51.56%</td><td>52.09%</td><td>1900</td><td>2049</td><td>1050</td><td>597</td><td>1438</td><td>537</td><td>6</td><td>1</td></tr>
<tr><td>Coyotes</td><td>ARI</td><td>100</td><td>87</td><td>70</td><td>13</td><td>2873</td><td>889</td><td>953</td><td>1000</td><td>55</td><td>2606</td><td>768</td><td>573</td><td>1625</td><td>304</td><td>80</td><td>26.32%</td><td>246</td><td>40</td><td>83.74%</td><td>3</td><td>53.77%</td><td>53.75%</td><td>52.90%</td><td>1921</td><td>2000</td><td>1039</td><td>594</td><td>1402</td><td>522</td><td>2</td><td>2</td></tr>
<tr><td>Devils</td><td>NJD</td><td>88</td><td>75</td><td>55</td><td>16</td><td>2667</td><td>836</td><td>906</td><td>895</td><td>87</td><td>2546</td><td>742</td><td>783</td><td>1837</td><td>283</td><td>47</td><td>16.61%</td><td>318</td><td>56</td><td>82.39%</td><td>1</td><td>51.44%</td><td>52.84%</td><td>52.45%</td><td>1955</td><td>1964</td><td>1073</td><td>624</td><td>1334</td><td>538</td><td>4</td><td>3</td></tr>
<tr><td>Ducks</td><td>ANH</td><td>86</td><td>58</td><td>65</td><td>13</td><td>2572</td><td>847</td><td>846</td><td>845</td><td>74</td><td>2593</td><td>723</td><td>636</td><td>1644</td><td>272</td><td>46</td><td>16.91%</td><td>243</td><td>44</td><td>81.89%</td><td>4</td><td>51.90%</td><td>52.04%</td><td>53.98%</td><td>1886</td><td>2058</td><td>1045</td><td>592</td><td>1446</td><td>528</td><td>4</td><td>1</td></tr>
<tr><td>Flames</td><td>CGY</td><td>95</td><td>72</td><td>71</td><td>12</td><td>2780</td><td>906</td><td>898</td><td>936</td><td>76</td><td>2474</td><td>750</td><td>868</td><td>1748</td><td>333</td><td>66</td><td>19.82%</td><td>334</td><td>53</td><td>84.13%</td><td>2</td><td>53.50%</td><td>52.22%</td><td>53.97%</td><td>1885</td><td>2053</td><td>1048</td><td>604</td><td>1429</td><td>532</td><td>6</td><td>1</td></tr>
<tr><td>Flyers</td><td>PHL</td><td>75</td><td>79</td><td>63</td><td>15</td><td>2527</td><td>848</td><td>819</td><td>831</td><td>56</td><td>2735</td><td>780</td><td>711</td><td>1705</td><td>269</td><td>51</td><td>18.96%</td><td>293</td><td>47</td><td>83.96%</td><td>2</td><td>49.13%</td><td>49.72%</td><td>49.96%</td><td>1975</td><td>1944</td><td>1046</td><td>598</td><td>1340</td><td>526</td><td>3</td><td>0</td></tr>
<tr><td>Golden Knights</td><td>VGK</td><td>77</td><td>61</td><td>55</td><td>15</td><td>2364</td><td>815</td><td>755</td><td>754</td><td>84</td><td>2624</td><td>779</td><td>715</td><td>1715</td><td>280</td><td>52</td><td>18.57%</td><td>268</td><td>49</td><td>81.72%</td><td>2</td><td>52.41%</td><td>50.39%</td><td>51.15%</td><td>1968</td><td>1963</td><td>1060</td><td>614</td><td>1343</td><td>526</td><td>5</td><td>2</td></tr>
<tr><td>Hurricanes</td><td>CAR</td><td>82</td><td>80</td><td>58</td><td>6</td><td>2460</td><td>788</td><td>864</td><td>789</td><td>43</td><td>3087</td><td>878</td><td>710</td><td>1818</td><td>250</td><td>30</td><td>12.00%</td><td>300</td><td>83</td><td>72.33%</td><td>2</td><td>45.42%</td><td>46.46%</td><td>44.82%</td><td>2186</td><td>1738</td><td>1042</td><td>620</td><td>1167</td><td>491</td><td>1</td><td>3</td></tr>
<tr><td>Islanders</td><td>NYI</td><td>95</td><td>79</td><td>71</td><td>19</td><td>2782</td><td>937</td><td>952</td><td>872</td><td>55</td><td>2347</td><td>710</td><td>648</td><td>1655</td><td>291</td><td>49</td><td>16.84%</td><td>248</td><td>44</td><td>82.26%</td><td>4</td><td>54.54%</td><td>52.96%</td><td>51.76%</td><td>1883</td><td>2040</td><td>1051</td><td>598</td><td>1428</td><td>536</td><td>8</td><td>2</td></tr>
<tr><td>Jets</td><td>WPG</td><td>75</td><td>72</td><td>66</td><td>10</td><td>2383</td><td>830</td><td>755</td><td>775</td><td>35</td><td>2674</td><td>802</td><td>653</td><td>1692</td><td>271</td><td>51</td><td>18.82%</td><td>282</td><td>57</td><td>79.79%</td><td>1</td><td>50.96%</td><td>49.32%</td><td>49.72%</td><td>1983</td><td>1922</td><td>1049</td><td>607</td><td>1314</td><td>521</td><td>4</td><td>4</td></tr>
<tr><td>Kings</td><td>LAK</td><td>86</td><td>69</td><td>78</td><td>14</td><td>2833</td><td>882</td><td>974</td><td>946</td><td>63</td><td>2543</td><td>786</td><td>718</td><td>1769</td><td>255</td><td>50</td><td>19.61%</td><td>275</td><td>55</td><td>80.00%</td><td>1</td><td>45.60%</td><td>48.23%</td><td>47.65%</td><td>1912</td><td>2027</td><td>1035</td><td>586</td><td>1419</td><td>518</td><td>3</td><td>1</td></tr>
<tr><td>Lightning</td><td>TBL</td><td>86</td><td>78</td><td>84</td><td>18</td><td>2921</td><td>934</td><td>975</td><td>966</td><td>102</td><td>2622</td><td>746</td><td>713</td><td>1604</td><td>288</td><td>65</td><td>22.57%</td><td>308</td><td>46</td><td>85.06%</td><td>2</td><td>52.53%</td><td>53.08%</td><td>53.06%</td><td>2023</td><td>1905</td><td>1072</td><td>635</td><td>1295</td><td>521</td><td>3</td><td>1</td></tr>
<tr><td>Maple Leafs</td><td>TOR</td><td>69</td><td>61</td><td>48</td><td>14</td><td>2473</td><td>837</td><td>790</td><td>823</td><td>59</td><td>2534</td><td>678</td><td>804</td><td>1768</td><td>263</td><td>43</td><td>16.35%</td><td>327</td><td>59</td><td>81.96%</td><td>2</td><td>50.69%</td><td>51.47%</td><td>53.28%</td><td>1935</td><td>1979</td><td>1058</td><td>615</td><td>1354</td><td>528</td><td>3</td><td>2</td></tr>
<tr><td>Oilers</td><td>EDM</td><td>96</td><td>71</td><td>88</td><td>6</td><td>2721</td><td>902</td><td>913</td><td>878</td><td>55</td><td>2291</td><td>663</td><td>688</td><td>1705</td><td>319</td><td>62</td><td>19.44%</td><td>276</td><td>45</td><td>83.70%</td><td>0</td><td>52.93%</td><td>50.73%</td><td>49.70%</td><td>1812</td><td>2108</td><td>1063</td><td>601</td><td>1479</td><td>544</td><td>4</td><td>2</td></tr>
<tr><td>Panthers</td><td>FLA</td><td>85</td><td>79</td><td>61</td><td>18</td><td>2464</td><td>818</td><td>787</td><td>823</td><td>79</td><td>2545</td><td>761</td><td>707</td><td>1750</td><td>307</td><td>40</td><td>13.03%</td><td>286</td><td>50</td><td>82.52%</td><td>2</td><td>51.01%</td><td>50.55%</td><td>50.55%</td><td>1950</td><td>1999</td><td>1048</td><td>615</td><td>1384</td><td>526</td><td>4</td><td>0</td></tr>
<tr><td>Penguins</td><td>PIT</td><td>82</td><td>56</td><td>68</td><td>8</td><td>2352</td><td>765</td><td>779</td><td>786</td><td>39</td><td>2936</td><td>871</td><td>794</td><td>1760</td><td>258</td><td>39</td><td>15.12%</td><td>311</td><td>59</td><td>81.03%</td><td>3</td><td>43.31%</td><td>42.58%</td><td>42.37%</td><td>2099</td><td>1809</td><td>1044</td><td>614</td><td>1222</td><td>506</td><td>2</td><td>3</td></tr>
<tr><td>Predators</td><td>NSH</td><td>74</td><td>88</td><td>74</td><td>18</td><td>2942</td><td>940</td><td>1002</td><td>959</td><td>81</td><td>2716</td><td>760</td><td>713</td><td>1776</td><td>258</td><td>42</td><td>16.28%</td><td>287</td><td>41</td><td>85.71%</td><td>3</td><td>48.74%</td><td>50.03%</td><td>49.01%</td><td>2037</td><td>1907</td><td>1065</td><td>622</td><td>1299</td><td>520</td><td>8</td><td>1</td></tr>
<tr><td>Rangers</td><td>NYR</td><td>75</td><td>77</td><td>66</td><td>12</td><td>2567</td><td>864</td><td>798</td><td>886</td><td>61</td><td>2397</td><td>681</td><td>548</td><td>1573</td><td>307</td><td>45</td><td>14.66%</td><td>209</td><td>38</td><td>81.82%</td><td>1</td><td>51.52%</td><td>52.57%</td><td>51.31%</td><td>1850</td><td>2100</td><td>1033</td><td>586</td><td>1496</td><td>525</td><td>5</td><td>4</td></tr>
<tr><td>Red Wings</td><td>DET</td><td>71</td><td>63</td><td>73</td><td>23</td><td>2557</td><td>835</td><td>812</td><td>879</td><td>92</td><td>2662</td><td>803</td><td>672</td><td>1746</td><td>271</td><td>37</td><td>13.65%</td><td>250</td><td>45</td><td>82.00%</td><td>2</td><td>46.71%</td><td>47.62%</td><td>48.61%</td><td>2004</td><td>1959</td><td>1056</td><td>612</td><td>1350</td><td>523</td><td>6</td><td>0</td></tr>
<tr><td>Sabres</td><td>BUF</td><td>88</td><td>75</td><td>74</td><td>11</td><td>2692</td><td>886</td><td>918</td><td>843</td><td>83</td><td>2420</td><td>730</td><td>755</td><td>1674</td><td>247</td><td>41</td><td>16.60%</td><td>286</td><td>39</td><td>86.36%</td><td>3</td><td>54.94%</td><td>53.45%</td><td>55.82%</td><td>1892</td><td>2035</td><td>1063</td><td>607</td><td>1406</td><td>538</td><td>7</td><td>1</td></tr>
<tr><td>Senators</td><td>OTT</td><td>67</td><td>59</td><td>66</td><td>13</td><td>2197</td><td>671</td><td>768</td><td>724</td><td>76</td><td>2812</td><td>744</td><td>858</td><td>1794</td><td>272</td><td>47</td><td>17.28%</td><td>309</td><td>52</td><td>83.17%</td><td>1</td><td>42.18%</td><td>44.23%</td><td>44.93%</td><td>2030</td><td>1897</td><td>1064</td><td>623</td><td>1286</td><td>521</td><td>4</td><td>1</td></tr>
<tr><td>Sharks</td><td>SJS</td><td>92</td><td>69</td><td>71</td><td>23</td><td>2744</td><td>924</td><td>873</td><td>900</td><td>107</td><td>2523</td><td>736</td><td>557</td><td>1594</td><td>305</td><td>60</td><td>19.67%</td><td>226</td><td>46</td><td>79.65%</td><td>2</td><td>49.71%</td><td>51.26%</td><td>51.72%</td><td>1911</td><td>2050</td><td>1055</td><td>593</td><td>1446</td><td>534</td><td>6</td><td>2</td></tr>
<tr><td>Stars</td><td>DAL</td><td>81</td><td>76</td><td>88</td><td>17</td><td>2740</td><td>873</td><td>856</td><td>992</td><td>51</td><td>2724</td><td>800</td><td>764</td><td>1683</td><td>274</td><td>57</td><td>20.80%</td><td>297</td><td>70</td><td>76.43%</td><td>2</td><td>53.31%</td><td>52.95%</td><td>55.18%</td><td>1996</td><td>1908</td><td>1057</td><td>613</td><td>1304</td><td>515</td><td>1</td><td>5</td></tr>
<tr><td>Wild</td><td>MIN</td><td>78</td><td>64</td><td>66</td><td>10</td><td>2428</td><td>755</td><td>805</td><td>837</td><td>73</td><td>2860</td><td>814</td><td>700</td><td>1693</td><td>257</td><td>53</td><td>20.62%</td><td>275</td><td>39</td><td>85.82%</td><td>2</td><td>47.11%</td><td>50.22%</td><td>46.15%</td><td>2017</td><td>1910</td><td>1064</td><td>606</td><td>1303</td><td>525</td><td>2</td><td>3</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.84</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>3.28</td></tr>
<tr><td>2</td><td>Coyotes</td><td>3.22</td></tr>
<tr><td>3</td><td>Oilers</td><td>3.17</td></tr>
<tr><td>4</td><td>Lightning</td><td>3.16</td></tr>
<tr><td>5</td><td>Bruins</td><td>3.16</td></tr>
<tr><td>6</td><td>Islanders</td><td>3.10</td></tr>
<tr><td>7</td><td>Stars</td><td>3.06</td></tr>
<tr><td>8</td><td>Canadiens</td><td>3.05</td></tr>
<tr><td>9</td><td>Predators</td><td>3.02</td></tr>
<tr><td>10</td><td>Flames</td><td>2.99</td></tr>
<tr><td>11</td><td>Sharks</td><td>2.98</td></tr>
<tr><td>12</td><td>Sabres</td><td>2.95</td></tr>
<tr><td>13</td><td>Kings</td><td>2.94</td></tr>
<tr><td>14</td><td>Blackhawks</td><td>2.94</td></tr>
<tr><td>15</td><td>Capitals</td><td>2.89</td></tr>
<tr><td>16</td><td>Panthers</td><td>2.87</td></tr>
<tr><td>17</td><td>Blue Jackets</td><td>2.79</td></tr>
<tr><td>18</td><td>Rangers</td><td>2.77</td></tr>
<tr><td>19</td><td>Flyers</td><td>2.76</td></tr>
<tr><td>20</td><td>Hurricanes</td><td>2.73</td></tr>
<tr><td>21</td><td>Devils</td><td>2.73</td></tr>
<tr><td>22</td><td>Jets</td><td>2.71</td></tr>
<tr><td>23</td><td>Red Wings</td><td>2.66</td></tr>
<tr><td>24</td><td>Wild</td><td>2.62</td></tr>
<tr><td>25</td><td>Ducks</td><td>2.62</td></tr>
<tr><td>26</td><td>Penguins</td><td>2.60</td></tr>
<tr><td>27</td><td>Blues</td><td>2.51</td></tr>
<tr><td>28</td><td>Avalanche</td><td>2.51</td></tr>
<tr><td>29</td><td>Senators</td><td>2.46</td></tr>
<tr><td>30</td><td>Golden Knights</td><td>2.44</td></tr>
<tr><td>31</td><td>Maple Leafs</td><td>2.27</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.84</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Sabres</td><td>2.34</td></tr>
<tr><td>2</td><td>Canadiens</td><td>2.39</td></tr>
<tr><td>3</td><td>Capitals</td><td>2.46</td></tr>
<tr><td>4</td><td>Flames</td><td>2.48</td></tr>
<tr><td>5</td><td>Panthers</td><td>2.56</td></tr>
<tr><td>6</td><td>Blackhawks</td><td>2.59</td></tr>
<tr><td>7</td><td>Islanders</td><td>2.60</td></tr>
<tr><td>8</td><td>Predators</td><td>2.66</td></tr>
<tr><td>9</td><td>Red Wings</td><td>2.68</td></tr>
<tr><td>10</td><td>Oilers</td><td>2.70</td></tr>
<tr><td>11</td><td>Sharks</td><td>2.70</td></tr>
<tr><td>12</td><td>Bruins</td><td>2.72</td></tr>
<tr><td>13</td><td>Flyers</td><td>2.73</td></tr>
<tr><td>14</td><td>Rangers</td><td>2.74</td></tr>
<tr><td>15</td><td>Maple Leafs</td><td>2.79</td></tr>
<tr><td>16</td><td>Canucks</td><td>2.79</td></tr>
<tr><td>17</td><td>Ducks</td><td>2.80</td></tr>
<tr><td>18</td><td>Kings</td><td>2.82</td></tr>
<tr><td>19</td><td>Lightning</td><td>2.83</td></tr>
<tr><td>20</td><td>Avalanche</td><td>2.87</td></tr>
<tr><td>21</td><td>Golden Knights</td><td>2.87</td></tr>
<tr><td>22</td><td>Devils</td><td>2.88</td></tr>
<tr><td>23</td><td>Coyotes</td><td>2.89</td></tr>
<tr><td>24</td><td>Jets</td><td>2.94</td></tr>
<tr><td>25</td><td>Senators</td><td>2.98</td></tr>
<tr><td>26</td><td>Blue Jackets</td><td>3.00</td></tr>
<tr><td>27</td><td>Wild</td><td>3.00</td></tr>
<tr><td>28</td><td>Penguins</td><td>3.45</td></tr>
<tr><td>29</td><td>Blues</td><td>3.46</td></tr>
<tr><td>30</td><td>Stars</td><td>3.48</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>3.77</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Canadiens</td><td>127.55%</td></tr>
<tr><td>2</td><td>Sabres</td><td>126.04%</td></tr>
<tr><td>3</td><td>Flames</td><td>120.69%</td></tr>
<tr><td>4</td><td>Islanders</td><td>119.25%</td></tr>
<tr><td>5</td><td>Oilers</td><td>117.65%</td></tr>
<tr><td>6</td><td>Canucks</td><td>117.47%</td></tr>
<tr><td>7</td><td>Capitals</td><td>117.33%</td></tr>
<tr><td>8</td><td>Bruins</td><td>116.14%</td></tr>
<tr><td>9</td><td>Predators</td><td>113.76%</td></tr>
<tr><td>10</td><td>Blackhawks</td><td>113.68%</td></tr>
<tr><td>11</td><td>Panthers</td><td>111.90%</td></tr>
<tr><td>12</td><td>Lightning</td><td>111.64%</td></tr>
<tr><td>13</td><td>Coyotes</td><td>111.39%</td></tr>
<tr><td>14</td><td>Sharks</td><td>110.41%</td></tr>
<tr><td>15</td><td>Kings</td><td>104.33%</td></tr>
<tr><td>16</td><td>Flyers</td><td>100.89%</td></tr>
<tr><td>17</td><td>Rangers</td><td>100.89%</td></tr>
<tr><td>18</td><td>Red Wings</td><td>99.09%</td></tr>
<tr><td>19</td><td>Devils</td><td>94.92%</td></tr>
<tr><td>20</td><td>Ducks</td><td>93.48%</td></tr>
<tr><td>21</td><td>Blue Jackets</td><td>93.09%</td></tr>
<tr><td>22</td><td>Jets</td><td>92.12%</td></tr>
<tr><td>23</td><td>Stars</td><td>88.07%</td></tr>
<tr><td>24</td><td>Avalanche</td><td>87.66%</td></tr>
<tr><td>25</td><td>Wild</td><td>87.40%</td></tr>
<tr><td>26</td><td>Golden Knights</td><td>85.11%</td></tr>
<tr><td>27</td><td>Senators</td><td>82.79%</td></tr>
<tr><td>28</td><td>Maple Leafs</td><td>81.22%</td></tr>
<tr><td>29</td><td>Penguins</td><td>75.27%</td></tr>
<tr><td>30</td><td>Blues</td><td>72.54%</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>72.49%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 17.97%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Coyotes</td><td>26.32%</td></tr>
<tr><td>2</td><td>Lightning</td><td>22.57%</td></tr>
<tr><td>3</td><td>Canucks</td><td>21.32%</td></tr>
<tr><td>4</td><td>Blackhawks</td><td>21.00%</td></tr>
<tr><td>5</td><td>Stars</td><td>20.80%</td></tr>
<tr><td>6</td><td>Wild</td><td>20.62%</td></tr>
<tr><td>7</td><td>Canadiens</td><td>20.51%</td></tr>
<tr><td>8</td><td>Flames</td><td>19.82%</td></tr>
<tr><td>9</td><td>Sharks</td><td>19.67%</td></tr>
<tr><td>10</td><td>Kings</td><td>19.61%</td></tr>
<tr><td>11</td><td>Oilers</td><td>19.44%</td></tr>
<tr><td>12</td><td>Flyers</td><td>18.96%</td></tr>
<tr><td>13</td><td>Jets</td><td>18.82%</td></tr>
<tr><td>14</td><td>Golden Knights</td><td>18.57%</td></tr>
<tr><td>15</td><td>Blue Jackets</td><td>17.91%</td></tr>
<tr><td>16</td><td>Capitals</td><td>17.61%</td></tr>
<tr><td>17</td><td>Senators</td><td>17.28%</td></tr>
<tr><td>18</td><td>Ducks</td><td>16.91%</td></tr>
<tr><td>19</td><td>Islanders</td><td>16.84%</td></tr>
<tr><td>20</td><td>Devils</td><td>16.61%</td></tr>
<tr><td>21</td><td>Sabres</td><td>16.60%</td></tr>
<tr><td>22</td><td>Maple Leafs</td><td>16.35%</td></tr>
<tr><td>23</td><td>Predators</td><td>16.28%</td></tr>
<tr><td>24</td><td>Bruins</td><td>15.89%</td></tr>
<tr><td>25</td><td>Blues</td><td>15.19%</td></tr>
<tr><td>26</td><td>Avalanche</td><td>15.14%</td></tr>
<tr><td>27</td><td>Penguins</td><td>15.12%</td></tr>
<tr><td>28</td><td>Rangers</td><td>14.66%</td></tr>
<tr><td>29</td><td>Red Wings</td><td>13.65%</td></tr>
<tr><td>30</td><td>Panthers</td><td>13.03%</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>12.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 82.03%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canadiens</td><td>89.60%</td></tr>
<tr><td>2</td><td>Sabres</td><td>86.36%</td></tr>
<tr><td>3</td><td>Wild</td><td>85.82%</td></tr>
<tr><td>4</td><td>Predators</td><td>85.71%</td></tr>
<tr><td>5</td><td>Lightning</td><td>85.06%</td></tr>
<tr><td>6</td><td>Capitals</td><td>84.87%</td></tr>
<tr><td>7</td><td>Flames</td><td>84.13%</td></tr>
<tr><td>8</td><td>Flyers</td><td>83.96%</td></tr>
<tr><td>9</td><td>Coyotes</td><td>83.74%</td></tr>
<tr><td>10</td><td>Oilers</td><td>83.70%</td></tr>
<tr><td>11</td><td>Bruins</td><td>83.39%</td></tr>
<tr><td>12</td><td>Senators</td><td>83.17%</td></tr>
<tr><td>13</td><td>Blackhawks</td><td>82.80%</td></tr>
<tr><td>14</td><td>Panthers</td><td>82.52%</td></tr>
<tr><td>15</td><td>Devils</td><td>82.39%</td></tr>
<tr><td>16</td><td>Islanders</td><td>82.26%</td></tr>
<tr><td>17</td><td>Red Wings</td><td>82.00%</td></tr>
<tr><td>18</td><td>Maple Leafs</td><td>81.96%</td></tr>
<tr><td>19</td><td>Ducks</td><td>81.89%</td></tr>
<tr><td>20</td><td>Rangers</td><td>81.82%</td></tr>
<tr><td>21</td><td>Golden Knights</td><td>81.72%</td></tr>
<tr><td>22</td><td>Penguins</td><td>81.03%</td></tr>
<tr><td>23</td><td>Blue Jackets</td><td>80.47%</td></tr>
<tr><td>24</td><td>Kings</td><td>80.00%</td></tr>
<tr><td>25</td><td>Jets</td><td>79.79%</td></tr>
<tr><td>26</td><td>Sharks</td><td>79.65%</td></tr>
<tr><td>27</td><td>Canucks</td><td>79.44%</td></tr>
<tr><td>28</td><td>Blues</td><td>78.97%</td></tr>
<tr><td>29</td><td>Stars</td><td>76.43%</td></tr>
<tr><td>30</td><td>Avalanche</td><td>75.38%</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>72.33%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Canadiens</td><td>110.11%</td></tr>
<tr><td>2</td><td>Coyotes</td><td>110.06%</td></tr>
<tr><td>3</td><td>Lightning</td><td>107.63%</td></tr>
<tr><td>4</td><td>Wild</td><td>106.44%</td></tr>
<tr><td>5</td><td>Flames</td><td>103.95%</td></tr>
<tr><td>6</td><td>Blackhawks</td><td>103.80%</td></tr>
<tr><td>7</td><td>Oilers</td><td>103.13%</td></tr>
<tr><td>8</td><td>Sabres</td><td>102.96%</td></tr>
<tr><td>9</td><td>Flyers</td><td>102.92%</td></tr>
<tr><td>10</td><td>Capitals</td><td>102.48%</td></tr>
<tr><td>11</td><td>Predators</td><td>101.99%</td></tr>
<tr><td>12</td><td>Canucks</td><td>100.77%</td></tr>
<tr><td>13</td><td>Senators</td><td>100.45%</td></tr>
<tr><td>14</td><td>Golden Knights</td><td>100.29%</td></tr>
<tr><td>15</td><td>Kings</td><td>99.61%</td></tr>
<tr><td>16</td><td>Sharks</td><td>99.32%</td></tr>
<tr><td>17</td><td>Bruins</td><td>99.28%</td></tr>
<tr><td>18</td><td>Islanders</td><td>99.10%</td></tr>
<tr><td>19</td><td>Devils</td><td>99.00%</td></tr>
<tr><td>20</td><td>Ducks</td><td>98.80%</td></tr>
<tr><td>21</td><td>Jets</td><td>98.61%</td></tr>
<tr><td>22</td><td>Blue Jackets</td><td>98.38%</td></tr>
<tr><td>23</td><td>Maple Leafs</td><td>98.31%</td></tr>
<tr><td>24</td><td>Stars</td><td>97.23%</td></tr>
<tr><td>25</td><td>Rangers</td><td>96.48%</td></tr>
<tr><td>26</td><td>Penguins</td><td>96.15%</td></tr>
<tr><td>27</td><td>Red Wings</td><td>95.65%</td></tr>
<tr><td>28</td><td>Panthers</td><td>95.55%</td></tr>
<tr><td>29</td><td>Blues</td><td>94.15%</td></tr>
<tr><td>30</td><td>Avalanche</td><td>90.52%</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>84.33%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31.90</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Predators</td><td>35.88</td></tr>
<tr><td>2</td><td>Lightning</td><td>35.62</td></tr>
<tr><td>3</td><td>Coyotes</td><td>35.04</td></tr>
<tr><td>4</td><td>Canadiens</td><td>34.98</td></tr>
<tr><td>5</td><td>Bruins</td><td>34.96</td></tr>
<tr><td>6</td><td>Canucks</td><td>34.73</td></tr>
<tr><td>7</td><td>Kings</td><td>34.55</td></tr>
<tr><td>8</td><td>Islanders</td><td>33.93</td></tr>
<tr><td>9</td><td>Flames</td><td>33.90</td></tr>
<tr><td>10</td><td>Sharks</td><td>33.46</td></tr>
<tr><td>11</td><td>Stars</td><td>33.41</td></tr>
<tr><td>12</td><td>Oilers</td><td>33.18</td></tr>
<tr><td>13</td><td>Sabres</td><td>32.83</td></tr>
<tr><td>14</td><td>Devils</td><td>32.52</td></tr>
<tr><td>15</td><td>Blackhawks</td><td>32.22</td></tr>
<tr><td>16</td><td>Capitals</td><td>32.22</td></tr>
<tr><td>17</td><td>Ducks</td><td>31.37</td></tr>
<tr><td>18</td><td>Rangers</td><td>31.30</td></tr>
<tr><td>19</td><td>Red Wings</td><td>31.18</td></tr>
<tr><td>20</td><td>Flyers</td><td>30.82</td></tr>
<tr><td>21</td><td>Blue Jackets</td><td>30.68</td></tr>
<tr><td>22</td><td>Maple Leafs</td><td>30.16</td></tr>
<tr><td>23</td><td>Panthers</td><td>30.05</td></tr>
<tr><td>24</td><td>Hurricanes</td><td>30.00</td></tr>
<tr><td>25</td><td>Wild</td><td>29.61</td></tr>
<tr><td>26</td><td>Jets</td><td>29.06</td></tr>
<tr><td>27</td><td>Avalanche</td><td>28.89</td></tr>
<tr><td>28</td><td>Golden Knights</td><td>28.83</td></tr>
<tr><td>29</td><td>Penguins</td><td>28.68</td></tr>
<tr><td>30</td><td>Blues</td><td>27.96</td></tr>
<tr><td>31</td><td>Senators</td><td>26.79</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 31.90</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Oilers</td><td>27.94</td></tr>
<tr><td>2</td><td>Islanders</td><td>28.62</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>28.94</td></tr>
<tr><td>4</td><td>Rangers</td><td>29.23</td></tr>
<tr><td>5</td><td>Sabres</td><td>29.51</td></tr>
<tr><td>6</td><td>Capitals</td><td>29.77</td></tr>
<tr><td>7</td><td>Flames</td><td>30.17</td></tr>
<tr><td>8</td><td>Sharks</td><td>30.77</td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>30.90</td></tr>
<tr><td>10</td><td>Kings</td><td>31.01</td></tr>
<tr><td>11</td><td>Panthers</td><td>31.04</td></tr>
<tr><td>12</td><td>Devils</td><td>31.05</td></tr>
<tr><td>13</td><td>Bruins</td><td>31.20</td></tr>
<tr><td>14</td><td>Canucks</td><td>31.44</td></tr>
<tr><td>15</td><td>Ducks</td><td>31.62</td></tr>
<tr><td>16</td><td>Coyotes</td><td>31.78</td></tr>
<tr><td>17</td><td>Lightning</td><td>31.98</td></tr>
<tr><td>18</td><td>Golden Knights</td><td>32.00</td></tr>
<tr><td>19</td><td>Canadiens</td><td>32.13</td></tr>
<tr><td>20</td><td>Avalanche</td><td>32.30</td></tr>
<tr><td>21</td><td>Red Wings</td><td>32.46</td></tr>
<tr><td>22</td><td>Jets</td><td>32.61</td></tr>
<tr><td>23</td><td>Predators</td><td>33.12</td></tr>
<tr><td>24</td><td>Stars</td><td>33.22</td></tr>
<tr><td>25</td><td>Flyers</td><td>33.35</td></tr>
<tr><td>26</td><td>Blue Jackets</td><td>33.65</td></tr>
<tr><td>27</td><td>Senators</td><td>34.29</td></tr>
<tr><td>28</td><td>Blues</td><td>34.39</td></tr>
<tr><td>29</td><td>Wild</td><td>34.88</td></tr>
<tr><td>30</td><td>Penguins</td><td>35.80</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>37.65</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Oilers</td><td>118.77%</td></tr>
<tr><td>2</td><td>Islanders</td><td>118.53%</td></tr>
<tr><td>3</td><td>Flames</td><td>112.37%</td></tr>
<tr><td>4</td><td>Bruins</td><td>112.08%</td></tr>
<tr><td>5</td><td>Kings</td><td>111.40%</td></tr>
<tr><td>6</td><td>Lightning</td><td>111.40%</td></tr>
<tr><td>7</td><td>Blackhawks</td><td>111.34%</td></tr>
<tr><td>8</td><td>Sabres</td><td>111.24%</td></tr>
<tr><td>9</td><td>Canucks</td><td>110.47%</td></tr>
<tr><td>10</td><td>Coyotes</td><td>110.25%</td></tr>
<tr><td>11</td><td>Canadiens</td><td>108.84%</td></tr>
<tr><td>12</td><td>Sharks</td><td>108.76%</td></tr>
<tr><td>13</td><td>Predators</td><td>108.32%</td></tr>
<tr><td>14</td><td>Capitals</td><td>108.23%</td></tr>
<tr><td>15</td><td>Rangers</td><td>107.09%</td></tr>
<tr><td>16</td><td>Devils</td><td>104.75%</td></tr>
<tr><td>17</td><td>Stars</td><td>100.59%</td></tr>
<tr><td>18</td><td>Ducks</td><td>99.19%</td></tr>
<tr><td>19</td><td>Maple Leafs</td><td>97.59%</td></tr>
<tr><td>20</td><td>Panthers</td><td>96.82%</td></tr>
<tr><td>21</td><td>Red Wings</td><td>96.06%</td></tr>
<tr><td>22</td><td>Flyers</td><td>92.39%</td></tr>
<tr><td>23</td><td>Blue Jackets</td><td>91.19%</td></tr>
<tr><td>24</td><td>Golden Knights</td><td>90.09%</td></tr>
<tr><td>25</td><td>Avalanche</td><td>89.43%</td></tr>
<tr><td>26</td><td>Jets</td><td>89.12%</td></tr>
<tr><td>27</td><td>Wild</td><td>84.90%</td></tr>
<tr><td>28</td><td>Blues</td><td>81.31%</td></tr>
<tr><td>29</td><td>Penguins</td><td>80.11%</td></tr>
<tr><td>30</td><td>Hurricanes</td><td>79.69%</td></tr>
<tr><td>31</td><td>Senators</td><td>78.13%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8.55</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rangers</td><td>6.68</td></tr>
<tr><td>2</td><td>Sharks</td><td>6.79</td></tr>
<tr><td>3</td><td>Coyotes</td><td>6.99</td></tr>
<tr><td>4</td><td>Capitals</td><td>7.17</td></tr>
<tr><td>5</td><td>Avalanche</td><td>7.60</td></tr>
<tr><td>6</td><td>Ducks</td><td>7.76</td></tr>
<tr><td>7</td><td>Islanders</td><td>7.90</td></tr>
<tr><td>8</td><td>Jets</td><td>7.96</td></tr>
<tr><td>9</td><td>Blackhawks</td><td>8.02</td></tr>
<tr><td>10</td><td>Blue Jackets</td><td>8.02</td></tr>
<tr><td>11</td><td>Red Wings</td><td>8.20</td></tr>
<tr><td>12</td><td>Canucks</td><td>8.23</td></tr>
<tr><td>13</td><td>Oilers</td><td>8.39</td></tr>
<tr><td>14</td><td>Blues</td><td>8.43</td></tr>
<tr><td>15</td><td>Wild</td><td>8.54</td></tr>
<tr><td>16</td><td>Panthers</td><td>8.62</td></tr>
<tr><td>17</td><td>Hurricanes</td><td>8.66</td></tr>
<tr><td>18</td><td>Flyers</td><td>8.67</td></tr>
<tr><td>19</td><td>Lightning</td><td>8.70</td></tr>
<tr><td>20</td><td>Predators</td><td>8.70</td></tr>
<tr><td>21</td><td>Golden Knights</td><td>8.72</td></tr>
<tr><td>22</td><td>Kings</td><td>8.76</td></tr>
<tr><td>23</td><td>Sabres</td><td>9.21</td></tr>
<tr><td>24</td><td>Stars</td><td>9.32</td></tr>
<tr><td>25</td><td>Bruins</td><td>9.34</td></tr>
<tr><td>26</td><td>Canadiens</td><td>9.52</td></tr>
<tr><td>27</td><td>Devils</td><td>9.55</td></tr>
<tr><td>28</td><td>Penguins</td><td>9.68</td></tr>
<tr><td>29</td><td>Maple Leafs</td><td>9.80</td></tr>
<tr><td>30</td><td>Senators</td><td>10.46</td></tr>
<tr><td>31</td><td>Flames</td><td>10.59</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20.92</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bruins</td><td>22.78</td></tr>
<tr><td>2</td><td>Devils</td><td>22.40</td></tr>
<tr><td>3</td><td>Blues</td><td>22.18</td></tr>
<tr><td>4</td><td>Hurricanes</td><td>22.17</td></tr>
<tr><td>5</td><td>Senators</td><td>21.88</td></tr>
<tr><td>6</td><td>Predators</td><td>21.66</td></tr>
<tr><td>7</td><td>Kings</td><td>21.57</td></tr>
<tr><td>8</td><td>Maple Leafs</td><td>21.56</td></tr>
<tr><td>9</td><td>Penguins</td><td>21.46</td></tr>
<tr><td>10</td><td>Panthers</td><td>21.34</td></tr>
<tr><td>11</td><td>Flames</td><td>21.32</td></tr>
<tr><td>12</td><td>Red Wings</td><td>21.29</td></tr>
<tr><td>13</td><td>Blue Jackets</td><td>21.23</td></tr>
<tr><td>14</td><td>Canadiens</td><td>21.21</td></tr>
<tr><td>15</td><td>Capitals</td><td>20.95</td></tr>
<tr><td>16</td><td>Golden Knights</td><td>20.91</td></tr>
<tr><td>17</td><td>Oilers</td><td>20.79</td></tr>
<tr><td>18</td><td>Flyers</td><td>20.79</td></tr>
<tr><td>19</td><td>Wild</td><td>20.65</td></tr>
<tr><td>20</td><td>Jets</td><td>20.63</td></tr>
<tr><td>21</td><td>Stars</td><td>20.52</td></tr>
<tr><td>22</td><td>Canucks</td><td>20.51</td></tr>
<tr><td>23</td><td>Sabres</td><td>20.41</td></tr>
<tr><td>24</td><td>Blackhawks</td><td>20.23</td></tr>
<tr><td>25</td><td>Islanders</td><td>20.18</td></tr>
<tr><td>26</td><td>Ducks</td><td>20.05</td></tr>
<tr><td>27</td><td>Coyotes</td><td>19.82</td></tr>
<tr><td>28</td><td>Avalanche</td><td>19.66</td></tr>
<tr><td>29</td><td>Lightning</td><td>19.56</td></tr>
<tr><td>30</td><td>Sharks</td><td>19.44</td></tr>
<tr><td>31</td><td>Rangers</td><td>19.18</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Sabres</td><td>54.46%</td></tr>
<tr><td>2</td><td>Coyotes</td><td>53.60%</td></tr>
<tr><td>3</td><td>Stars</td><td>53.51%</td></tr>
<tr><td>4</td><td>Islanders</td><td>53.36%</td></tr>
<tr><td>5</td><td>Flames</td><td>53.04%</td></tr>
<tr><td>6</td><td>Lightning</td><td>52.85%</td></tr>
<tr><td>7</td><td>Bruins</td><td>52.67%</td></tr>
<tr><td>8</td><td>Canucks</td><td>52.66%</td></tr>
<tr><td>9</td><td>Ducks</td><td>52.32%</td></tr>
<tr><td>10</td><td>Devils</td><td>52.20%</td></tr>
<tr><td>11</td><td>Rangers</td><td>51.92%</td></tr>
<tr><td>12</td><td>Canadiens</td><td>51.92%</td></tr>
<tr><td>13</td><td>Capitals</td><td>51.48%</td></tr>
<tr><td>14</td><td>Maple Leafs</td><td>51.45%</td></tr>
<tr><td>15</td><td>Oilers</td><td>51.39%</td></tr>
<tr><td>16</td><td>Golden Knights</td><td>51.37%</td></tr>
<tr><td>17</td><td>Panthers</td><td>50.74%</td></tr>
<tr><td>18</td><td>Sharks</td><td>50.73%</td></tr>
<tr><td>19</td><td>Jets</td><td>50.09%</td></tr>
<tr><td>20</td><td>Blackhawks</td><td>49.72%</td></tr>
<tr><td>21</td><td>Flyers</td><td>49.51%</td></tr>
<tr><td>22</td><td>Predators</td><td>49.33%</td></tr>
<tr><td>23</td><td>Avalanche</td><td>48.99%</td></tr>
<tr><td>24</td><td>Wild</td><td>48.15%</td></tr>
<tr><td>25</td><td>Red Wings</td><td>47.42%</td></tr>
<tr><td>26</td><td>Kings</td><td>47.09%</td></tr>
<tr><td>27</td><td>Blue Jackets</td><td>46.36%</td></tr>
<tr><td>28</td><td>Hurricanes</td><td>45.70%</td></tr>
<tr><td>29</td><td>Senators</td><td>43.45%</td></tr>
<tr><td>30</td><td>Penguins</td><td>42.86%</td></tr>
<tr><td>31</td><td>Blues</td><td>38.79%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
