<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Stats</title>
<script src="OTHL-PLF.js"></script>
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
<link href="OTHL-PLF.css" rel="stylesheet" type="text/css" />
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
<tr><td>IceHogs</td><td>22</td><td>16</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>84</td><td>69</td><td>12</td><td>10</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>51</td><td>32</td><td>10</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>37</td><td>84</td><td>143</td><td>227</td></tr>
<tr><td>Monsters</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>14</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>8</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>6</td><td>7</td><td>12</td><td>19</td></tr>
<tr><td>Bruins</td><td>9</td><td>4</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>21</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>10</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>11</td><td>18</td><td>31</td><td>49</td></tr>
<tr><td>Rocket</td><td>14</td><td>10</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>58</td><td>30</td><td>7</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>12</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>18</td><td>58</td><td>97</td><td>155</td></tr>
<tr><td>Comets</td><td>10</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>30</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>14</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>16</td><td>45</td><td>83</td><td>128</td></tr>
<tr><td>Bears</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>24</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>11</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>13</td><td>9</td><td>17</td><td>26</td></tr>
<tr><td>Gulls</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>22</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>4</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>18</td><td>12</td><td>19</td><td>31</td></tr>
<tr><td>Heat</td><td>14</td><td>9</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>72</td><td>38</td><td>8</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>19</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>19</td><td>72</td><td>118</td><td>190</td></tr>
<tr><td>Phantoms</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>17</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>11</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>6</td><td>4</td><td>6</td><td>10</td></tr>
<tr><td>Wolves</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>21</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>11</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>10</td><td>14</td><td>21</td><td>35</td></tr>
<tr><td>Checkers</td><td>22</td><td>13</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>80</td><td>80</td><td>11</td><td>7</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>44</td><td>34</td><td>11</td><td>6</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>36</td><td>46</td><td>80</td><td>131</td><td>211</td></tr>
<tr><td>Moose</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>23</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>7</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>16</td><td>12</td><td>23</td><td>35</td></tr>
<tr><td>Condors</td><td>13</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>43</td><td>35</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>15</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>20</td><td>43</td><td>78</td><td>121</td></tr>
<tr><td>Thunderbirds</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>20</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>7</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>13</td><td>13</td><td>24</td><td>37</td></tr>
<tr><td> Americans</td><td>10</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>34</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>17</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>17</td><td>32</td><td>62</td><td>94</td></tr>
<tr><td>Barracudas</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>32</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>14</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>18</td><td>7</td><td>11</td><td>18</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>IceHogs</td><td>RCK</td><td>25</td><td>29</td><td>27</td><td>3</td><td>591</td><td>189</td><td>198</td><td>191</td><td>13</td><td>476</td><td>137</td><td>205</td><td>344</td><td>109</td><td>13</td><td>11.93%</td><td>93</td><td>14</td><td>84.95%</td><td>1</td><td>55.53%</td><td>65.32%</td><td>66.38%</td><td>495</td><td>605</td><td>265</td><td>144</td><td>445</td><td>139</td><td>1</td><td>0</td></tr>
<tr><td>Monsters</td><td>CLE</td><td>2</td><td>3</td><td>2</td><td>0</td><td>98</td><td>36</td><td>31</td><td>31</td><td>0</td><td>106</td><td>22</td><td>64</td><td>95</td><td>25</td><td>4</td><td>16.00%</td><td>31</td><td>7</td><td>77.42%</td><td>0</td><td>41.67%</td><td>56.72%</td><td>56.25%</td><td>116</td><td>127</td><td>57</td><td>34</td><td>91</td><td>29</td><td>1</td><td>0</td></tr>
<tr><td>Bruins</td><td>PRO</td><td>11</td><td>3</td><td>4</td><td>0</td><td>148</td><td>44</td><td>30</td><td>74</td><td>0</td><td>207</td><td>62</td><td>114</td><td>182</td><td>49</td><td>10</td><td>20.41%</td><td>49</td><td>9</td><td>81.63%</td><td>0</td><td>33.70%</td><td>44.40%</td><td>42.86%</td><td>232</td><td>206</td><td>104</td><td>64</td><td>142</td><td>52</td><td>1</td><td>0</td></tr>
<tr><td>Rocket</td><td>LAV</td><td>19</td><td>18</td><td>19</td><td>2</td><td>413</td><td>124</td><td>129</td><td>132</td><td>28</td><td>243</td><td>81</td><td>183</td><td>266</td><td>66</td><td>16</td><td>24.24%</td><td>80</td><td>8</td><td>90.00%</td><td>0</td><td>65.06%</td><td>66.97%</td><td>61.99%</td><td>313</td><td>403</td><td>163</td><td>93</td><td>300</td><td>85</td><td>3</td><td>0</td></tr>
<tr><td>Comets</td><td>UTI</td><td>18</td><td>16</td><td>10</td><td>1</td><td>282</td><td>87</td><td>97</td><td>91</td><td>7</td><td>200</td><td>47</td><td>109</td><td>188</td><td>37</td><td>5</td><td>13.51%</td><td>49</td><td>13</td><td>73.47%</td><td>0</td><td>60.73%</td><td>60.96%</td><td>61.59%</td><td>205</td><td>295</td><td>113</td><td>58</td><td>223</td><td>63</td><td>0</td><td>1</td></tr>
<tr><td>Bears</td><td>HER</td><td>3</td><td>3</td><td>3</td><td>0</td><td>73</td><td>21</td><td>17</td><td>31</td><td>4</td><td>129</td><td>39</td><td>33</td><td>66</td><td>20</td><td>5</td><td>25.00%</td><td>9</td><td>2</td><td>77.78%</td><td>0</td><td>34.31%</td><td>45.36%</td><td>27.42%</td><td>136</td><td>71</td><td>46</td><td>32</td><td>49</td><td>18</td><td>0</td><td>0</td></tr>
<tr><td>Gulls</td><td>SDG</td><td>7</td><td>2</td><td>2</td><td>1</td><td>131</td><td>54</td><td>36</td><td>31</td><td>10</td><td>130</td><td>26</td><td>52</td><td>76</td><td>33</td><td>4</td><td>12.12%</td><td>23</td><td>7</td><td>69.57%</td><td>0</td><td>45.73%</td><td>48.39%</td><td>42.70%</td><td>143</td><td>116</td><td>62</td><td>40</td><td>82</td><td>29</td><td>0</td><td>0</td></tr>
<tr><td>Heat</td><td>STK</td><td>28</td><td>27</td><td>17</td><td>0</td><td>391</td><td>129</td><td>149</td><td>113</td><td>0</td><td>278</td><td>87</td><td>116</td><td>236</td><td>71</td><td>15</td><td>21.13%</td><td>53</td><td>9</td><td>83.02%</td><td>0</td><td>46.76%</td><td>50.29%</td><td>49.19%</td><td>323</td><td>349</td><td>168</td><td>95</td><td>255</td><td>84</td><td>2</td><td>1</td></tr>
<tr><td>Phantoms</td><td>LVP</td><td>1</td><td>1</td><td>2</td><td>0</td><td>70</td><td>32</td><td>18</td><td>15</td><td>5</td><td>123</td><td>30</td><td>46</td><td>75</td><td>22</td><td>1</td><td>4.55%</td><td>19</td><td>4</td><td>78.95%</td><td>0</td><td>43.65%</td><td>50.48%</td><td>49.25%</td><td>133</td><td>84</td><td>51</td><td>33</td><td>58</td><td>23</td><td>0</td><td>0</td></tr>
<tr><td>Wolves</td><td>CHI</td><td>3</td><td>5</td><td>5</td><td>1</td><td>106</td><td>34</td><td>31</td><td>38</td><td>3</td><td>183</td><td>42</td><td>54</td><td>76</td><td>41</td><td>9</td><td>21.95%</td><td>21</td><td>4</td><td>80.95%</td><td>0</td><td>26.98%</td><td>27.48%</td><td>33.70%</td><td>185</td><td>110</td><td>67</td><td>45</td><td>75</td><td>29</td><td>0</td><td>0</td></tr>
<tr><td>Checkers</td><td>CHR</td><td>29</td><td>29</td><td>20</td><td>2</td><td>518</td><td>173</td><td>172</td><td>168</td><td>5</td><td>585</td><td>191</td><td>215</td><td>387</td><td>118</td><td>20</td><td>16.95%</td><td>92</td><td>22</td><td>76.09%</td><td>1</td><td>36.26%</td><td>38.37%</td><td>36.49%</td><td>586</td><td>513</td><td>241</td><td>148</td><td>378</td><td>115</td><td>0</td><td>0</td></tr>
<tr><td>Moose</td><td>MAN</td><td>3</td><td>4</td><td>5</td><td>0</td><td>73</td><td>14</td><td>26</td><td>33</td><td>0</td><td>190</td><td>42</td><td>57</td><td>87</td><td>16</td><td>4</td><td>25.00%</td><td>26</td><td>2</td><td>92.31%</td><td>0</td><td>28.13%</td><td>42.05%</td><td>29.85%</td><td>163</td><td>82</td><td>55</td><td>36</td><td>53</td><td>23</td><td>0</td><td>0</td></tr>
<tr><td>Condors</td><td>BKR</td><td>14</td><td>11</td><td>17</td><td>1</td><td>347</td><td>110</td><td>112</td><td>110</td><td>15</td><td>244</td><td>71</td><td>168</td><td>206</td><td>54</td><td>8</td><td>14.81%</td><td>78</td><td>12</td><td>84.62%</td><td>2</td><td>59.16%</td><td>65.51%</td><td>52.45%</td><td>283</td><td>381</td><td>161</td><td>88</td><td>281</td><td>85</td><td>0</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>SPR</td><td>4</td><td>5</td><td>3</td><td>1</td><td>108</td><td>34</td><td>38</td><td>32</td><td>4</td><td>132</td><td>42</td><td>54</td><td>114</td><td>22</td><td>9</td><td>40.91%</td><td>27</td><td>6</td><td>77.78%</td><td>0</td><td>50.93%</td><td>56.69%</td><td>53.25%</td><td>128</td><td>126</td><td>56</td><td>32</td><td>93</td><td>28</td><td>0</td><td>1</td></tr>
<tr><td> Americans</td><td>ROC</td><td>9</td><td>11</td><td>11</td><td>1</td><td>217</td><td>50</td><td>78</td><td>84</td><td>5</td><td>266</td><td>79</td><td>146</td><td>218</td><td>37</td><td>8</td><td>21.62%</td><td>66</td><td>10</td><td>84.85%</td><td>0</td><td>52.96%</td><td>55.74%</td><td>58.48%</td><td>234</td><td>264</td><td>122</td><td>68</td><td>188</td><td>62</td><td>1</td><td>0</td></tr>
<tr><td>Barracudas</td><td>SJB</td><td>2</td><td>1</td><td>4</td><td>0</td><td>71</td><td>17</td><td>21</td><td>33</td><td>0</td><td>145</td><td>39</td><td>32</td><td>63</td><td>12</td><td>3</td><td>25.00%</td><td>16</td><td>5</td><td>68.75%</td><td>0</td><td>25.24%</td><td>19.05%</td><td>25.32%</td><td>125</td><td>68</td><td>47</td><td>28</td><td>47</td><td>20</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.36</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Heat</td><td>5.14</td></tr>
<tr><td>2</td><td>Comets</td><td>4.50</td></tr>
<tr><td>3</td><td>Rocket</td><td>4.14</td></tr>
<tr><td>4</td><td>IceHogs</td><td>3.82</td></tr>
<tr><td>5</td><td>Checkers</td><td>3.64</td></tr>
<tr><td>6</td><td>Condors</td><td>3.31</td></tr>
<tr><td>7</td><td> Americans</td><td>3.20</td></tr>
<tr><td>8</td><td>Thunderbirds</td><td>2.60</td></tr>
<tr><td>9</td><td>Moose</td><td>2.40</td></tr>
<tr><td>10</td><td>Gulls</td><td>2.40</td></tr>
<tr><td>11</td><td>Wolves</td><td>2.33</td></tr>
<tr><td>12</td><td>Bears</td><td>2.25</td></tr>
<tr><td>13</td><td>Bruins</td><td>2.00</td></tr>
<tr><td>14</td><td>Barracudas</td><td>1.75</td></tr>
<tr><td>15</td><td>Monsters</td><td>1.40</td></tr>
<tr><td>16</td><td>Phantoms</td><td>1.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.36</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rocket</td><td>2.14</td></tr>
<tr><td>2</td><td>Bruins</td><td>2.33</td></tr>
<tr><td>3</td><td>Condors</td><td>2.69</td></tr>
<tr><td>4</td><td>Heat</td><td>2.71</td></tr>
<tr><td>5</td><td>Monsters</td><td>2.80</td></tr>
<tr><td>6</td><td>Comets</td><td>3.00</td></tr>
<tr><td>7</td><td>IceHogs</td><td>3.14</td></tr>
<tr><td>8</td><td> Americans</td><td>3.40</td></tr>
<tr><td>9</td><td>Wolves</td><td>3.50</td></tr>
<tr><td>10</td><td>Checkers</td><td>3.64</td></tr>
<tr><td>11</td><td>Thunderbirds</td><td>4.00</td></tr>
<tr><td>12</td><td>Phantoms</td><td>4.25</td></tr>
<tr><td>13</td><td>Gulls</td><td>4.40</td></tr>
<tr><td>14</td><td>Moose</td><td>4.60</td></tr>
<tr><td>15</td><td>Bears</td><td>6.00</td></tr>
<tr><td>16</td><td>Barracudas</td><td>8.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Rocket</td><td>193.33%</td></tr>
<tr><td>2</td><td>Heat</td><td>189.47%</td></tr>
<tr><td>3</td><td>Comets</td><td>150.00%</td></tr>
<tr><td>4</td><td>Condors</td><td>122.86%</td></tr>
<tr><td>5</td><td>IceHogs</td><td>121.74%</td></tr>
<tr><td>6</td><td>Checkers</td><td>100.00%</td></tr>
<tr><td>7</td><td> Americans</td><td>94.12%</td></tr>
<tr><td>8</td><td>Bruins</td><td>85.71%</td></tr>
<tr><td>9</td><td>Wolves</td><td>66.67%</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>65.00%</td></tr>
<tr><td>11</td><td>Gulls</td><td>54.55%</td></tr>
<tr><td>12</td><td>Moose</td><td>52.17%</td></tr>
<tr><td>13</td><td>Monsters</td><td>50.00%</td></tr>
<tr><td>14</td><td>Bears</td><td>37.50%</td></tr>
<tr><td>15</td><td>Phantoms</td><td>23.53%</td></tr>
<tr><td>16</td><td>Barracudas</td><td>21.88%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18.31%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Thunderbirds</td><td>40.91%</td></tr>
<tr><td>2</td><td>Moose</td><td>25.00%</td></tr>
<tr><td>3</td><td>Barracudas</td><td>25.00%</td></tr>
<tr><td>4</td><td>Bears</td><td>25.00%</td></tr>
<tr><td>5</td><td>Rocket</td><td>24.24%</td></tr>
<tr><td>6</td><td>Wolves</td><td>21.95%</td></tr>
<tr><td>7</td><td> Americans</td><td>21.62%</td></tr>
<tr><td>8</td><td>Heat</td><td>21.13%</td></tr>
<tr><td>9</td><td>Bruins</td><td>20.41%</td></tr>
<tr><td>10</td><td>Checkers</td><td>16.95%</td></tr>
<tr><td>11</td><td>Monsters</td><td>16.00%</td></tr>
<tr><td>12</td><td>Condors</td><td>14.81%</td></tr>
<tr><td>13</td><td>Comets</td><td>13.51%</td></tr>
<tr><td>14</td><td>Gulls</td><td>12.12%</td></tr>
<tr><td>15</td><td>IceHogs</td><td>11.93%</td></tr>
<tr><td>16</td><td>Phantoms</td><td>4.55%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 81.69%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Moose</td><td>92.31%</td></tr>
<tr><td>2</td><td>Rocket</td><td>90.00%</td></tr>
<tr><td>3</td><td>IceHogs</td><td>84.95%</td></tr>
<tr><td>4</td><td> Americans</td><td>84.85%</td></tr>
<tr><td>5</td><td>Condors</td><td>84.62%</td></tr>
<tr><td>6</td><td>Heat</td><td>83.02%</td></tr>
<tr><td>7</td><td>Bruins</td><td>81.63%</td></tr>
<tr><td>8</td><td>Wolves</td><td>80.95%</td></tr>
<tr><td>9</td><td>Phantoms</td><td>78.95%</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>77.78%</td></tr>
<tr><td>11</td><td>Bears</td><td>77.78%</td></tr>
<tr><td>12</td><td>Monsters</td><td>77.42%</td></tr>
<tr><td>13</td><td>Checkers</td><td>76.09%</td></tr>
<tr><td>14</td><td>Comets</td><td>73.47%</td></tr>
<tr><td>15</td><td>Gulls</td><td>69.57%</td></tr>
<tr><td>16</td><td>Barracudas</td><td>68.75%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Thunderbirds</td><td>118.69%</td></tr>
<tr><td>2</td><td>Moose</td><td>117.31%</td></tr>
<tr><td>3</td><td>Rocket</td><td>114.24%</td></tr>
<tr><td>4</td><td> Americans</td><td>106.47%</td></tr>
<tr><td>5</td><td>Heat</td><td>104.15%</td></tr>
<tr><td>6</td><td>Wolves</td><td>102.90%</td></tr>
<tr><td>7</td><td>Bears</td><td>102.78%</td></tr>
<tr><td>8</td><td>Bruins</td><td>102.04%</td></tr>
<tr><td>9</td><td>Condors</td><td>99.43%</td></tr>
<tr><td>10</td><td>IceHogs</td><td>96.87%</td></tr>
<tr><td>11</td><td>Barracudas</td><td>93.75%</td></tr>
<tr><td>12</td><td>Monsters</td><td>93.42%</td></tr>
<tr><td>13</td><td>Checkers</td><td>93.04%</td></tr>
<tr><td>14</td><td>Comets</td><td>86.98%</td></tr>
<tr><td>15</td><td>Phantoms</td><td>83.49%</td></tr>
<tr><td>16</td><td>Gulls</td><td>81.69%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 23.93</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rocket</td><td>29.50</td></tr>
<tr><td>2</td><td>Comets</td><td>28.20</td></tr>
<tr><td>3</td><td>Heat</td><td>27.93</td></tr>
<tr><td>4</td><td>IceHogs</td><td>26.86</td></tr>
<tr><td>5</td><td>Condors</td><td>26.69</td></tr>
<tr><td>6</td><td>Gulls</td><td>26.20</td></tr>
<tr><td>7</td><td>Checkers</td><td>23.55</td></tr>
<tr><td>8</td><td> Americans</td><td>21.70</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>21.60</td></tr>
<tr><td>10</td><td>Monsters</td><td>19.60</td></tr>
<tr><td>11</td><td>Bears</td><td>18.25</td></tr>
<tr><td>12</td><td>Barracudas</td><td>17.75</td></tr>
<tr><td>13</td><td>Wolves</td><td>17.67</td></tr>
<tr><td>14</td><td>Phantoms</td><td>17.50</td></tr>
<tr><td>15</td><td>Bruins</td><td>16.44</td></tr>
<tr><td>16</td><td>Moose</td><td>14.60</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 23.93</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rocket</td><td>17.36</td></tr>
<tr><td>2</td><td>Condors</td><td>18.77</td></tr>
<tr><td>3</td><td>Heat</td><td>19.86</td></tr>
<tr><td>4</td><td>Comets</td><td>20.00</td></tr>
<tr><td>5</td><td>Monsters</td><td>21.20</td></tr>
<tr><td>6</td><td>IceHogs</td><td>21.64</td></tr>
<tr><td>7</td><td>Bruins</td><td>23.00</td></tr>
<tr><td>8</td><td>Gulls</td><td>26.00</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>26.40</td></tr>
<tr><td>10</td><td>Checkers</td><td>26.59</td></tr>
<tr><td>11</td><td> Americans</td><td>26.60</td></tr>
<tr><td>12</td><td>Wolves</td><td>30.50</td></tr>
<tr><td>13</td><td>Phantoms</td><td>30.75</td></tr>
<tr><td>14</td><td>Bears</td><td>32.25</td></tr>
<tr><td>15</td><td>Barracudas</td><td>36.25</td></tr>
<tr><td>16</td><td>Moose</td><td>38.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Rocket</td><td>169.96%</td></tr>
<tr><td>2</td><td>Condors</td><td>142.21%</td></tr>
<tr><td>3</td><td>Comets</td><td>141.00%</td></tr>
<tr><td>4</td><td>Heat</td><td>140.65%</td></tr>
<tr><td>5</td><td>IceHogs</td><td>124.16%</td></tr>
<tr><td>6</td><td>Gulls</td><td>100.77%</td></tr>
<tr><td>7</td><td>Monsters</td><td>92.45%</td></tr>
<tr><td>8</td><td>Checkers</td><td>88.55%</td></tr>
<tr><td>9</td><td>Thunderbirds</td><td>81.82%</td></tr>
<tr><td>10</td><td> Americans</td><td>81.58%</td></tr>
<tr><td>11</td><td>Bruins</td><td>71.50%</td></tr>
<tr><td>12</td><td>Wolves</td><td>57.92%</td></tr>
<tr><td>13</td><td>Phantoms</td><td>56.91%</td></tr>
<tr><td>14</td><td>Bears</td><td>56.59%</td></tr>
<tr><td>15</td><td>Barracudas</td><td>48.97%</td></tr>
<tr><td>16</td><td>Moose</td><td>38.42%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 10.84</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Barracudas</td><td>8.00</td></tr>
<tr><td>2</td><td>Bears</td><td>8.25</td></tr>
<tr><td>3</td><td>Heat</td><td>8.29</td></tr>
<tr><td>4</td><td>Wolves</td><td>9.00</td></tr>
<tr><td>5</td><td>IceHogs</td><td>9.32</td></tr>
<tr><td>6</td><td>Checkers</td><td>9.77</td></tr>
<tr><td>7</td><td>Gulls</td><td>10.40</td></tr>
<tr><td>8</td><td>Thunderbirds</td><td>10.80</td></tr>
<tr><td>9</td><td>Comets</td><td>10.90</td></tr>
<tr><td>10</td><td>Moose</td><td>11.40</td></tr>
<tr><td>11</td><td>Phantoms</td><td>11.50</td></tr>
<tr><td>12</td><td>Bruins</td><td>12.67</td></tr>
<tr><td>13</td><td>Monsters</td><td>12.80</td></tr>
<tr><td>14</td><td>Condors</td><td>12.92</td></tr>
<tr><td>15</td><td>Rocket</td><td>13.07</td></tr>
<tr><td>16</td><td> Americans</td><td>14.60</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 17.63</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Thunderbirds</td><td>22.80</td></tr>
<tr><td>2</td><td> Americans</td><td>21.80</td></tr>
<tr><td>3</td><td>Bruins</td><td>20.22</td></tr>
<tr><td>4</td><td>Rocket</td><td>19.00</td></tr>
<tr><td>5</td><td>Monsters</td><td>19.00</td></tr>
<tr><td>6</td><td>Comets</td><td>18.80</td></tr>
<tr><td>7</td><td>Phantoms</td><td>18.75</td></tr>
<tr><td>8</td><td>Checkers</td><td>17.59</td></tr>
<tr><td>9</td><td>Moose</td><td>17.40</td></tr>
<tr><td>10</td><td>Heat</td><td>16.86</td></tr>
<tr><td>11</td><td>Bears</td><td>16.50</td></tr>
<tr><td>12</td><td>Condors</td><td>15.85</td></tr>
<tr><td>13</td><td>Barracudas</td><td>15.75</td></tr>
<tr><td>14</td><td>IceHogs</td><td>15.64</td></tr>
<tr><td>15</td><td>Gulls</td><td>15.20</td></tr>
<tr><td>16</td><td>Wolves</td><td>12.67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Rocket</td><td>65.22%</td></tr>
<tr><td>2</td><td>IceHogs</td><td>62.29%</td></tr>
<tr><td>3</td><td>Comets</td><td>61.02%</td></tr>
<tr><td>4</td><td>Condors</td><td>60.29%</td></tr>
<tr><td>5</td><td> Americans</td><td>55.31%</td></tr>
<tr><td>6</td><td>Thunderbirds</td><td>53.42%</td></tr>
<tr><td>7</td><td>Monsters</td><td>50.29%</td></tr>
<tr><td>8</td><td>Heat</td><td>48.67%</td></tr>
<tr><td>9</td><td>Phantoms</td><td>47.32%</td></tr>
<tr><td>10</td><td>Gulls</td><td>46.08%</td></tr>
<tr><td>11</td><td>Bruins</td><td>39.45%</td></tr>
<tr><td>12</td><td>Checkers</td><td>37.10%</td></tr>
<tr><td>13</td><td>Bears</td><td>36.49%</td></tr>
<tr><td>14</td><td>Moose</td><td>32.38%</td></tr>
<tr><td>15</td><td>Wolves</td><td>28.64%</td></tr>
<tr><td>16</td><td>Barracudas</td><td>23.31%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
