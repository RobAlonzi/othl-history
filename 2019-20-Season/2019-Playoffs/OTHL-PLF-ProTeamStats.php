<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Stats</title>
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
<tr><td>Blackhawks</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>17</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>8</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>9</td><td>19</td><td>36</td><td>55</td></tr>
<tr><td>Bruins</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>18</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>8</td><td>16</td><td>27</td><td>43</td></tr>
<tr><td>Canadiens</td><td>12</td><td>5</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>32</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>13</td><td>7</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>19</td><td>28</td><td>46</td><td>74</td></tr>
<tr><td>Canucks</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>26</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>9</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>17</td><td>18</td><td>33</td><td>51</td></tr>
<tr><td>Capitals</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>25</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>10</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>15</td><td>15</td><td>28</td><td>43</td></tr>
<tr><td>Coyotes</td><td>20</td><td>11</td><td>9</td><td>0</td><td>0</td><td>0</td><td>0</td><td>55</td><td>54</td><td>10</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>22</td><td>10</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>32</td><td>55</td><td>104</td><td>159</td></tr>
<tr><td>Flames</td><td>13</td><td>6</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>34</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>19</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>15</td><td>40</td><td>73</td><td>113</td></tr>
<tr><td>Islanders</td><td>18</td><td>11</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>48</td><td>48</td><td>10</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>24</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>24</td><td>48</td><td>88</td><td>136</td></tr>
<tr><td>Jets</td><td>13</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>44</td><td>6</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>22</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>22</td><td>37</td><td>66</td><td>103</td></tr>
<tr><td>Lightning</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>17</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>8</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>9</td><td>14</td><td>25</td><td>39</td></tr>
<tr><td>Oilers</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>21</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>8</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>13</td><td>20</td><td>34</td><td>54</td></tr>
<tr><td>Panthers</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>14</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>7</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>7</td><td>6</td><td>10</td><td>16</td></tr>
<tr><td>Predators</td><td>27</td><td>16</td><td>11</td><td>0</td><td>0</td><td>0</td><td>0</td><td>87</td><td>73</td><td>14</td><td>8</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>46</td><td>40</td><td>13</td><td>8</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>41</td><td>33</td><td>87</td><td>162</td><td>249</td></tr>
<tr><td>Rangers</td><td>11</td><td>5</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>34</td><td>30</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>10</td><td>6</td><td>1</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>20</td><td>34</td><td>62</td><td>96</td></tr>
<tr><td>Sabres</td><td>23</td><td>15</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>75</td><td>52</td><td>12</td><td>9</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>40</td><td>23</td><td>11</td><td>6</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>29</td><td>75</td><td>136</td><td>211</td></tr>
<tr><td>Sharks</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>22</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>10</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>12</td><td>15</td><td>24</td><td>39</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Blackhawks</td><td>CHI</td><td>6</td><td>7</td><td>6</td><td>0</td><td>192</td><td>48</td><td>74</td><td>69</td><td>1</td><td>180</td><td>50</td><td>43</td><td>128</td><td>23</td><td>7</td><td>30.43%</td><td>19</td><td>4</td><td>78.95%</td><td>0</td><td>52.38%</td><td>46.15%</td><td>54.37%</td><td>143</td><td>150</td><td>78</td><td>45</td><td>105</td><td>40</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>BOS</td><td>6</td><td>4</td><td>5</td><td>1</td><td>243</td><td>68</td><td>64</td><td>93</td><td>18</td><td>230</td><td>64</td><td>101</td><td>208</td><td>41</td><td>7</td><td>17.07%</td><td>46</td><td>7</td><td>84.78%</td><td>0</td><td>61.46%</td><td>58.54%</td><td>46.09%</td><td>180</td><td>183</td><td>95</td><td>60</td><td>126</td><td>47</td><td>0</td><td>0</td></tr>
<tr><td>Canadiens</td><td>MTL</td><td>9</td><td>12</td><td>5</td><td>2</td><td>381</td><td>140</td><td>128</td><td>81</td><td>32</td><td>424</td><td>119</td><td>133</td><td>338</td><td>62</td><td>11</td><td>17.74%</td><td>61</td><td>12</td><td>80.33%</td><td>0</td><td>43.30%</td><td>41.45%</td><td>54.12%</td><td>311</td><td>303</td><td>160</td><td>96</td><td>204</td><td>80</td><td>0</td><td>0</td></tr>
<tr><td>Canucks</td><td>VAN</td><td>8</td><td>5</td><td>4</td><td>1</td><td>233</td><td>68</td><td>89</td><td>67</td><td>9</td><td>239</td><td>68</td><td>109</td><td>207</td><td>37</td><td>8</td><td>21.62%</td><td>38</td><td>13</td><td>65.79%</td><td>0</td><td>44.16%</td><td>53.92%</td><td>58.18%</td><td>166</td><td>169</td><td>89</td><td>53</td><td>116</td><td>43</td><td>0</td><td>0</td></tr>
<tr><td>Capitals</td><td>WSH</td><td>8</td><td>4</td><td>3</td><td>0</td><td>189</td><td>51</td><td>50</td><td>65</td><td>23</td><td>208</td><td>60</td><td>55</td><td>138</td><td>22</td><td>4</td><td>18.18%</td><td>21</td><td>8</td><td>61.90%</td><td>0</td><td>47.35%</td><td>49.34%</td><td>49.53%</td><td>162</td><td>150</td><td>85</td><td>49</td><td>101</td><td>41</td><td>0</td><td>1</td></tr>
<tr><td>Coyotes</td><td>ARI</td><td>22</td><td>12</td><td>17</td><td>4</td><td>730</td><td>248</td><td>206</td><td>238</td><td>38</td><td>673</td><td>185</td><td>141</td><td>440</td><td>77</td><td>13</td><td>16.88%</td><td>65</td><td>14</td><td>78.46%</td><td>0</td><td>52.75%</td><td>49.05%</td><td>50.96%</td><td>505</td><td>527</td><td>278</td><td>161</td><td>366</td><td>139</td><td>1</td><td>1</td></tr>
<tr><td>Flames</td><td>CGY</td><td>12</td><td>17</td><td>10</td><td>1</td><td>435</td><td>162</td><td>131</td><td>110</td><td>32</td><td>445</td><td>153</td><td>164</td><td>365</td><td>57</td><td>16</td><td>28.07%</td><td>66</td><td>12</td><td>81.82%</td><td>0</td><td>48.08%</td><td>53.28%</td><td>45.50%</td><td>333</td><td>324</td><td>174</td><td>102</td><td>220</td><td>88</td><td>0</td><td>0</td></tr>
<tr><td>Islanders</td><td>NYI</td><td>21</td><td>11</td><td>11</td><td>5</td><td>597</td><td>196</td><td>181</td><td>165</td><td>55</td><td>637</td><td>179</td><td>124</td><td>387</td><td>76</td><td>8</td><td>10.53%</td><td>55</td><td>5</td><td>90.91%</td><td>1</td><td>50.27%</td><td>51.77%</td><td>51.08%</td><td>449</td><td>474</td><td>249</td><td>144</td><td>328</td><td>127</td><td>1</td><td>1</td></tr>
<tr><td>Jets</td><td>WPG</td><td>19</td><td>7</td><td>9</td><td>2</td><td>373</td><td>143</td><td>92</td><td>134</td><td>4</td><td>469</td><td>134</td><td>116</td><td>254</td><td>46</td><td>9</td><td>19.57%</td><td>48</td><td>12</td><td>75.00%</td><td>0</td><td>47.99%</td><td>50.98%</td><td>45.59%</td><td>318</td><td>305</td><td>168</td><td>95</td><td>207</td><td>83</td><td>0</td><td>0</td></tr>
<tr><td>Lightning</td><td>TBL</td><td>6</td><td>5</td><td>3</td><td>0</td><td>177</td><td>52</td><td>58</td><td>57</td><td>10</td><td>201</td><td>67</td><td>66</td><td>129</td><td>8</td><td>1</td><td>12.50%</td><td>24</td><td>2</td><td>91.67%</td><td>0</td><td>53.71%</td><td>51.64%</td><td>54.22%</td><td>159</td><td>132</td><td>83</td><td>48</td><td>86</td><td>39</td><td>1</td><td>0</td></tr>
<tr><td>Oilers</td><td>EDM</td><td>10</td><td>6</td><td>3</td><td>1</td><td>246</td><td>71</td><td>60</td><td>87</td><td>28</td><td>258</td><td>71</td><td>46</td><td>171</td><td>25</td><td>7</td><td>28.00%</td><td>23</td><td>6</td><td>73.91%</td><td>0</td><td>48.49%</td><td>43.96%</td><td>50.41%</td><td>177</td><td>185</td><td>98</td><td>56</td><td>129</td><td>50</td><td>0</td><td>0</td></tr>
<tr><td>Panthers</td><td>FLA</td><td>4</td><td>0</td><td>2</td><td>0</td><td>96</td><td>36</td><td>32</td><td>28</td><td>0</td><td>141</td><td>46</td><td>36</td><td>80</td><td>9</td><td>2</td><td>22.22%</td><td>18</td><td>4</td><td>77.78%</td><td>0</td><td>49.64%</td><td>39.37%</td><td>51.56%</td><td>97</td><td>90</td><td>53</td><td>28</td><td>60</td><td>27</td><td>0</td><td>0</td></tr>
<tr><td>Predators</td><td>NSH</td><td>28</td><td>32</td><td>26</td><td>1</td><td>934</td><td>303</td><td>306</td><td>310</td><td>15</td><td>894</td><td>260</td><td>189</td><td>587</td><td>97</td><td>19</td><td>19.59%</td><td>89</td><td>17</td><td>80.90%</td><td>0</td><td>50.10%</td><td>52.12%</td><td>48.37%</td><td>665</td><td>631</td><td>351</td><td>206</td><td>430</td><td>173</td><td>1</td><td>0</td></tr>
<tr><td>Rangers</td><td>NYR</td><td>8</td><td>14</td><td>9</td><td>3</td><td>365</td><td>94</td><td>124</td><td>108</td><td>39</td><td>345</td><td>97</td><td>94</td><td>242</td><td>42</td><td>9</td><td>21.43%</td><td>46</td><td>7</td><td>84.78%</td><td>1</td><td>46.32%</td><td>51.94%</td><td>45.99%</td><td>281</td><td>287</td><td>152</td><td>90</td><td>198</td><td>77</td><td>1</td><td>1</td></tr>
<tr><td>Sabres</td><td>BUF</td><td>21</td><td>25</td><td>26</td><td>3</td><td>884</td><td>245</td><td>325</td><td>257</td><td>57</td><td>732</td><td>239</td><td>192</td><td>473</td><td>85</td><td>16</td><td>18.82%</td><td>88</td><td>17</td><td>80.68%</td><td>0</td><td>51.28%</td><td>51.16%</td><td>51.08%</td><td>560</td><td>587</td><td>308</td><td>179</td><td>411</td><td>154</td><td>2</td><td>0</td></tr>
<tr><td>Sharks</td><td>SJS</td><td>9</td><td>4</td><td>2</td><td>0</td><td>182</td><td>51</td><td>76</td><td>55</td><td>0</td><td>181</td><td>48</td><td>32</td><td>112</td><td>16</td><td>5</td><td>31.25%</td><td>16</td><td>2</td><td>87.50%</td><td>0</td><td>48.44%</td><td>45.95%</td><td>50.62%</td><td>137</td><td>148</td><td>75</td><td>43</td><td>103</td><td>37</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.83</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Sabres</td><td>3.26</td></tr>
<tr><td>2</td><td>Predators</td><td>3.22</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>3.17</td></tr>
<tr><td>4</td><td>Rangers</td><td>3.09</td></tr>
<tr><td>5</td><td>Flames</td><td>3.08</td></tr>
<tr><td>6</td><td>Oilers</td><td>2.86</td></tr>
<tr><td>7</td><td>Jets</td><td>2.85</td></tr>
<tr><td>8</td><td>Coyotes</td><td>2.75</td></tr>
<tr><td>9</td><td>Islanders</td><td>2.67</td></tr>
<tr><td>10</td><td>Canucks</td><td>2.57</td></tr>
<tr><td>11</td><td>Sharks</td><td>2.50</td></tr>
<tr><td>12</td><td>Capitals</td><td>2.50</td></tr>
<tr><td>13</td><td>Canadiens</td><td>2.33</td></tr>
<tr><td>14</td><td>Lightning</td><td>2.33</td></tr>
<tr><td>15</td><td>Bruins</td><td>2.29</td></tr>
<tr><td>16</td><td>Panthers</td><td>1.50</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.83</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Sabres</td><td>2.26</td></tr>
<tr><td>2</td><td>Bruins</td><td>2.57</td></tr>
<tr><td>3</td><td>Flames</td><td>2.62</td></tr>
<tr><td>4</td><td>Canadiens</td><td>2.67</td></tr>
<tr><td>5</td><td>Islanders</td><td>2.67</td></tr>
<tr><td>6</td><td>Coyotes</td><td>2.70</td></tr>
<tr><td>7</td><td>Predators</td><td>2.70</td></tr>
<tr><td>8</td><td>Rangers</td><td>2.73</td></tr>
<tr><td>9</td><td>Blackhawks</td><td>2.83</td></tr>
<tr><td>10</td><td>Lightning</td><td>2.83</td></tr>
<tr><td>11</td><td>Oilers</td><td>3.00</td></tr>
<tr><td>12</td><td>Jets</td><td>3.38</td></tr>
<tr><td>13</td><td>Panthers</td><td>3.50</td></tr>
<tr><td>14</td><td>Sharks</td><td>3.67</td></tr>
<tr><td>15</td><td>Canucks</td><td>3.71</td></tr>
<tr><td>16</td><td>Capitals</td><td>4.17</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Sabres</td><td>144.23%</td></tr>
<tr><td>2</td><td>Predators</td><td>119.18%</td></tr>
<tr><td>3</td><td>Flames</td><td>117.65%</td></tr>
<tr><td>4</td><td>Rangers</td><td>113.33%</td></tr>
<tr><td>5</td><td>Blackhawks</td><td>111.76%</td></tr>
<tr><td>6</td><td>Coyotes</td><td>101.85%</td></tr>
<tr><td>7</td><td>Islanders</td><td>100.00%</td></tr>
<tr><td>8</td><td>Oilers</td><td>95.24%</td></tr>
<tr><td>9</td><td>Bruins</td><td>88.89%</td></tr>
<tr><td>10</td><td>Canadiens</td><td>87.50%</td></tr>
<tr><td>11</td><td>Jets</td><td>84.09%</td></tr>
<tr><td>12</td><td>Lightning</td><td>82.35%</td></tr>
<tr><td>13</td><td>Canucks</td><td>69.23%</td></tr>
<tr><td>14</td><td>Sharks</td><td>68.18%</td></tr>
<tr><td>15</td><td>Capitals</td><td>60.00%</td></tr>
<tr><td>16</td><td>Panthers</td><td>42.86%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19.64%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Sharks</td><td>31.25%</td></tr>
<tr><td>2</td><td>Blackhawks</td><td>30.43%</td></tr>
<tr><td>3</td><td>Flames</td><td>28.07%</td></tr>
<tr><td>4</td><td>Oilers</td><td>28.00%</td></tr>
<tr><td>5</td><td>Panthers</td><td>22.22%</td></tr>
<tr><td>6</td><td>Canucks</td><td>21.62%</td></tr>
<tr><td>7</td><td>Rangers</td><td>21.43%</td></tr>
<tr><td>8</td><td>Predators</td><td>19.59%</td></tr>
<tr><td>9</td><td>Jets</td><td>19.57%</td></tr>
<tr><td>10</td><td>Sabres</td><td>18.82%</td></tr>
<tr><td>11</td><td>Capitals</td><td>18.18%</td></tr>
<tr><td>12</td><td>Canadiens</td><td>17.74%</td></tr>
<tr><td>13</td><td>Bruins</td><td>17.07%</td></tr>
<tr><td>14</td><td>Coyotes</td><td>16.88%</td></tr>
<tr><td>15</td><td>Lightning</td><td>12.50%</td></tr>
<tr><td>16</td><td>Islanders</td><td>10.53%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80.36%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Lightning</td><td>91.67%</td></tr>
<tr><td>2</td><td>Islanders</td><td>90.91%</td></tr>
<tr><td>3</td><td>Sharks</td><td>87.50%</td></tr>
<tr><td>4</td><td>Rangers</td><td>84.78%</td></tr>
<tr><td>5</td><td>Bruins</td><td>84.78%</td></tr>
<tr><td>6</td><td>Flames</td><td>81.82%</td></tr>
<tr><td>7</td><td>Predators</td><td>80.90%</td></tr>
<tr><td>8</td><td>Sabres</td><td>80.68%</td></tr>
<tr><td>9</td><td>Canadiens</td><td>80.33%</td></tr>
<tr><td>10</td><td>Blackhawks</td><td>78.95%</td></tr>
<tr><td>11</td><td>Coyotes</td><td>78.46%</td></tr>
<tr><td>12</td><td>Panthers</td><td>77.78%</td></tr>
<tr><td>13</td><td>Jets</td><td>75.00%</td></tr>
<tr><td>14</td><td>Oilers</td><td>73.91%</td></tr>
<tr><td>15</td><td>Canucks</td><td>65.79%</td></tr>
<tr><td>16</td><td>Capitals</td><td>61.90%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Sharks</td><td>118.75%</td></tr>
<tr><td>2</td><td>Flames</td><td>109.89%</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>109.38%</td></tr>
<tr><td>4</td><td>Rangers</td><td>106.21%</td></tr>
<tr><td>5</td><td>Lightning</td><td>104.17%</td></tr>
<tr><td>6</td><td>Oilers</td><td>101.91%</td></tr>
<tr><td>7</td><td>Bruins</td><td>101.86%</td></tr>
<tr><td>8</td><td>Islanders</td><td>101.44%</td></tr>
<tr><td>9</td><td>Predators</td><td>100.49%</td></tr>
<tr><td>10</td><td>Panthers</td><td>100.00%</td></tr>
<tr><td>11</td><td>Sabres</td><td>99.51%</td></tr>
<tr><td>12</td><td>Canadiens</td><td>98.07%</td></tr>
<tr><td>13</td><td>Coyotes</td><td>95.34%</td></tr>
<tr><td>14</td><td>Jets</td><td>94.57%</td></tr>
<tr><td>15</td><td>Canucks</td><td>87.41%</td></tr>
<tr><td>16</td><td>Capitals</td><td>80.09%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 33.64</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Sabres</td><td>38.43</td></tr>
<tr><td>2</td><td>Coyotes</td><td>36.50</td></tr>
<tr><td>3</td><td>Oilers</td><td>35.14</td></tr>
<tr><td>4</td><td>Bruins</td><td>34.71</td></tr>
<tr><td>5</td><td>Predators</td><td>34.59</td></tr>
<tr><td>6</td><td>Flames</td><td>33.46</td></tr>
<tr><td>7</td><td>Canucks</td><td>33.29</td></tr>
<tr><td>8</td><td>Rangers</td><td>33.18</td></tr>
<tr><td>9</td><td>Islanders</td><td>33.17</td></tr>
<tr><td>10</td><td>Blackhawks</td><td>32.00</td></tr>
<tr><td>11</td><td>Canadiens</td><td>31.75</td></tr>
<tr><td>12</td><td>Capitals</td><td>31.50</td></tr>
<tr><td>13</td><td>Sharks</td><td>30.33</td></tr>
<tr><td>14</td><td>Lightning</td><td>29.50</td></tr>
<tr><td>15</td><td>Jets</td><td>28.69</td></tr>
<tr><td>16</td><td>Panthers</td><td>24.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 33.64</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>30.00</td></tr>
<tr><td>2</td><td>Sharks</td><td>30.17</td></tr>
<tr><td>3</td><td>Rangers</td><td>31.36</td></tr>
<tr><td>4</td><td>Sabres</td><td>31.83</td></tr>
<tr><td>5</td><td>Bruins</td><td>32.86</td></tr>
<tr><td>6</td><td>Predators</td><td>33.11</td></tr>
<tr><td>7</td><td>Lightning</td><td>33.50</td></tr>
<tr><td>8</td><td>Coyotes</td><td>33.65</td></tr>
<tr><td>9</td><td>Canucks</td><td>34.14</td></tr>
<tr><td>10</td><td>Flames</td><td>34.23</td></tr>
<tr><td>11</td><td>Capitals</td><td>34.67</td></tr>
<tr><td>12</td><td>Panthers</td><td>35.25</td></tr>
<tr><td>13</td><td>Canadiens</td><td>35.33</td></tr>
<tr><td>14</td><td>Islanders</td><td>35.39</td></tr>
<tr><td>15</td><td>Jets</td><td>36.08</td></tr>
<tr><td>16</td><td>Oilers</td><td>36.86</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Sabres</td><td>120.77%</td></tr>
<tr><td>2</td><td>Coyotes</td><td>108.47%</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>106.67%</td></tr>
<tr><td>4</td><td>Rangers</td><td>105.80%</td></tr>
<tr><td>5</td><td>Bruins</td><td>105.65%</td></tr>
<tr><td>6</td><td>Predators</td><td>104.47%</td></tr>
<tr><td>7</td><td>Sharks</td><td>100.55%</td></tr>
<tr><td>8</td><td>Flames</td><td>97.75%</td></tr>
<tr><td>9</td><td>Canucks</td><td>97.49%</td></tr>
<tr><td>10</td><td>Oilers</td><td>95.35%</td></tr>
<tr><td>11</td><td>Islanders</td><td>93.72%</td></tr>
<tr><td>12</td><td>Capitals</td><td>90.87%</td></tr>
<tr><td>13</td><td>Canadiens</td><td>89.86%</td></tr>
<tr><td>14</td><td>Lightning</td><td>88.06%</td></tr>
<tr><td>15</td><td>Jets</td><td>79.53%</td></tr>
<tr><td>16</td><td>Panthers</td><td>68.09%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 8.82</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Sharks</td><td>5.33</td></tr>
<tr><td>2</td><td>Oilers</td><td>6.57</td></tr>
<tr><td>3</td><td>Islanders</td><td>6.89</td></tr>
<tr><td>4</td><td>Predators</td><td>7.00</td></tr>
<tr><td>5</td><td>Coyotes</td><td>7.05</td></tr>
<tr><td>6</td><td>Blackhawks</td><td>7.17</td></tr>
<tr><td>7</td><td>Sabres</td><td>8.35</td></tr>
<tr><td>8</td><td>Rangers</td><td>8.55</td></tr>
<tr><td>9</td><td>Jets</td><td>8.92</td></tr>
<tr><td>10</td><td>Panthers</td><td>9.00</td></tr>
<tr><td>11</td><td>Capitals</td><td>9.17</td></tr>
<tr><td>12</td><td>Lightning</td><td>11.00</td></tr>
<tr><td>13</td><td>Canadiens</td><td>11.08</td></tr>
<tr><td>14</td><td>Flames</td><td>12.62</td></tr>
<tr><td>15</td><td>Bruins</td><td>14.43</td></tr>
<tr><td>16</td><td>Canucks</td><td>15.57</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 22.90</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Bruins</td><td>29.71</td></tr>
<tr><td>2</td><td>Canucks</td><td>29.57</td></tr>
<tr><td>3</td><td>Canadiens</td><td>28.17</td></tr>
<tr><td>4</td><td>Flames</td><td>28.08</td></tr>
<tr><td>5</td><td>Oilers</td><td>24.43</td></tr>
<tr><td>6</td><td>Capitals</td><td>23.00</td></tr>
<tr><td>7</td><td>Coyotes</td><td>22.00</td></tr>
<tr><td>8</td><td>Rangers</td><td>22.00</td></tr>
<tr><td>9</td><td>Predators</td><td>21.74</td></tr>
<tr><td>10</td><td>Islanders</td><td>21.50</td></tr>
<tr><td>11</td><td>Lightning</td><td>21.50</td></tr>
<tr><td>12</td><td>Blackhawks</td><td>21.33</td></tr>
<tr><td>13</td><td>Sabres</td><td>20.57</td></tr>
<tr><td>14</td><td>Panthers</td><td>20.00</td></tr>
<tr><td>15</td><td>Jets</td><td>19.54</td></tr>
<tr><td>16</td><td>Sharks</td><td>18.67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Bruins</td><td>57.75%</td></tr>
<tr><td>2</td><td>Lightning</td><td>52.95%</td></tr>
<tr><td>3</td><td>Sabres</td><td>51.20%</td></tr>
<tr><td>4</td><td>Islanders</td><td>51.02%</td></tr>
<tr><td>5</td><td>Coyotes</td><td>50.83%</td></tr>
<tr><td>6</td><td>Canucks</td><td>50.66%</td></tr>
<tr><td>7</td><td>Predators</td><td>50.64%</td></tr>
<tr><td>8</td><td>Blackhawks</td><td>50.29%</td></tr>
<tr><td>9</td><td>Flames</td><td>49.80%</td></tr>
<tr><td>10</td><td>Jets</td><td>48.77%</td></tr>
<tr><td>11</td><td>Capitals</td><td>48.57%</td></tr>
<tr><td>12</td><td>Rangers</td><td>48.53%</td></tr>
<tr><td>13</td><td>Sharks</td><td>47.68%</td></tr>
<tr><td>14</td><td>Oilers</td><td>47.04%</td></tr>
<tr><td>15</td><td>Panthers</td><td>46.04%</td></tr>
<tr><td>16</td><td>Canadiens</td><td>44.30%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
