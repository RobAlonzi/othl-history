<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Stats</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.1.6.6" />
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
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
<tr><td>Eagles</td><td>7</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>50</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>29</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>21</td><td>19</td><td>37</td><td>56</td></tr>
<tr><td>IceHogs</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>35</td><td>10</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>28</td><td>9</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>1</td><td>35</td><td>62</td><td>97</td></tr>
<tr><td>Monsters</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>23</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>13</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>10</td><td>27</td><td>50</td><td>77</td></tr>
<tr><td>Rampage </td><td>7</td><td>1</td><td>4</td><td>1</td><td>0</td><td>1</td><td>0</td><td>27</td><td>44</td><td>3</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>11</td><td>15</td><td>4</td><td>0</td><td>3</td><td>0</td><td>0</td><td>1</td><td>0</td><td>16</td><td>29</td><td>27</td><td>45</td><td>72</td></tr>
<tr><td>Bruins</td><td>7</td><td>4</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>30</td><td>8</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>14</td><td>2</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>6</td><td>30</td><td>55</td><td>85</td></tr>
<tr><td>Rocket</td><td>7</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>40</td><td>12</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>34</td><td>6</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>6</td><td>6</td><td>40</td><td>72</td><td>112</td></tr>
<tr><td>Comets</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>39</td><td>15</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>27</td><td>4</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>11</td><td>39</td><td>71</td><td>110</td></tr>
<tr><td>Bears</td><td>9</td><td>2</td><td>6</td><td>0</td><td>1</td><td>0</td><td>0</td><td>29</td><td>43</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>22</td><td>4</td><td>0</td><td>3</td><td>0</td><td>1</td><td>0</td><td>0</td><td>11</td><td>21</td><td>29</td><td>58</td><td>87</td></tr>
<tr><td>Roadrunners</td><td>6</td><td>0</td><td>5</td><td>0</td><td>1</td><td>0</td><td>0</td><td>12</td><td>34</td><td>3</td><td>0</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>6</td><td>16</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>18</td><td>12</td><td>23</td><td>35</td></tr>
<tr><td>Devils</td><td>7</td><td>0</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>49</td><td>4</td><td>0</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>28</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>21</td><td>12</td><td>23</td><td>35</td></tr>
<tr><td>Gulls</td><td>8</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>29</td><td>24</td><td>4</td><td>1</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>17</td><td>14</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>10</td><td>29</td><td>52</td><td>81</td></tr>
<tr><td>Heat</td><td>8</td><td>8</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>70</td><td>10</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>33</td><td>4</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>6</td><td>70</td><td>117</td><td>187</td></tr>
<tr><td>Phantoms</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>38</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>11</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>27</td><td>14</td><td>24</td><td>38</td></tr>
<tr><td>Wolves</td><td>8</td><td>7</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>46</td><td>12</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>29</td><td>8</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>4</td><td>46</td><td>82</td><td>128</td></tr>
<tr><td>Checkers</td><td>9</td><td>8</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>47</td><td>14</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>5</td><td>5</td><td>4</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>22</td><td>9</td><td>47</td><td>85</td><td>132</td></tr>
<tr><td>Sound Tigers</td><td>7</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>42</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>26</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>16</td><td>20</td><td>35</td><td>55</td></tr>
<tr><td>Moose</td><td>9</td><td>8</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>53</td><td>23</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>22</td><td>5</td><td>5</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>31</td><td>18</td><td>53</td><td>89</td><td>142</td></tr>
<tr><td>Reign</td><td>7</td><td>0</td><td>5</td><td>1</td><td>0</td><td>0</td><td>1</td><td>12</td><td>49</td><td>4</td><td>0</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>11</td><td>23</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>26</td><td>12</td><td>24</td><td>36</td></tr>
<tr><td>Crunch</td><td>7</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>24</td><td>29</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>6</td><td>6</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>17</td><td>23</td><td>24</td><td>42</td><td>66</td></tr>
<tr><td>Marlies</td><td>8</td><td>5</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>45</td><td>26</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>31</td><td>15</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>11</td><td>45</td><td>78</td><td>123</td></tr>
<tr><td>Condors</td><td>8</td><td>6</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>40</td><td>17</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>19</td><td>7</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>10</td><td>40</td><td>73</td><td>113</td></tr>
<tr><td>Thunderbirds</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>37</td><td>28</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>11</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>25</td><td>17</td><td>37</td><td>63</td><td>100</td></tr>
<tr><td>Penguins</td><td>8</td><td>3</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>36</td><td>6</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>26</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>10</td><td>18</td><td>36</td><td>54</td></tr>
<tr><td>Admirals</td><td>7</td><td>2</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>31</td><td>38</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>19</td><td>3</td><td>0</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>10</td><td>19</td><td>31</td><td>62</td><td>93</td></tr>
<tr><td>Wolf Pack</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>29</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>16</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td><td>13</td><td>18</td><td>36</td><td>54</td></tr>
<tr><td>Griffins</td><td>8</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>1</td><td>24</td><td>41</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>13</td><td>5</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>12</td><td>28</td><td>24</td><td>41</td><td>65</td></tr>
<tr><td> Americans</td><td>8</td><td>7</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>41</td><td>9</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>20</td><td>5</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>4</td><td>41</td><td>67</td><td>108</td></tr>
<tr><td>Senators</td><td>6</td><td>0</td><td>4</td><td>0</td><td>0</td><td>1</td><td>1</td><td>18</td><td>34</td><td>4</td><td>0</td><td>2</td><td>0</td><td>0</td><td>1</td><td>1</td><td>16</td><td>18</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>16</td><td>18</td><td>30</td><td>48</td></tr>
<tr><td>Barracudas</td><td>7</td><td>1</td><td>5</td><td>0</td><td>1</td><td>0</td><td>0</td><td>14</td><td>40</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>17</td><td>4</td><td>1</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>10</td><td>23</td><td>14</td><td>26</td><td>40</td></tr>
<tr><td>Stars</td><td>9</td><td>3</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>40</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>12</td><td>6</td><td>1</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>28</td><td>24</td><td>46</td><td>70</td></tr>
<tr><td>Wild</td><td>7</td><td>0</td><td>6</td><td>0</td><td>0</td><td>0</td><td>1</td><td>19</td><td>47</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>4</td><td>6</td><td>0</td><td>5</td><td>0</td><td>0</td><td>0</td><td>1</td><td>17</td><td>43</td><td>19</td><td>38</td><td>57</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Eagles</td><td>COL</td><td>9</td><td>6</td><td>4</td><td>0</td><td>224</td><td>65</td><td>83</td><td>76</td><td>0</td><td>332</td><td>97</td><td>21</td><td>118</td><td>14</td><td>2</td><td>14.29%</td><td>8</td><td>2</td><td>75.00%</td><td>0</td><td>35.90%</td><td>43.67%</td><td>31.97%</td><td>229</td><td>115</td><td>76</td><td>52</td><td>80</td><td>31</td><td>0</td><td>0</td></tr>
<tr><td>IceHogs</td><td>RCK</td><td>13</td><td>11</td><td>11</td><td>0</td><td>191</td><td>61</td><td>71</td><td>59</td><td>0</td><td>88</td><td>31</td><td>45</td><td>92</td><td>14</td><td>4</td><td>28.57%</td><td>19</td><td>4</td><td>78.95%</td><td>0</td><td>52.94%</td><td>58.14%</td><td>55.68%</td><td>87</td><td>161</td><td>52</td><td>24</td><td>129</td><td>30</td><td>0</td><td>0</td></tr>
<tr><td>Monsters</td><td>CLE</td><td>9</td><td>10</td><td>8</td><td>0</td><td>180</td><td>55</td><td>68</td><td>57</td><td>0</td><td>161</td><td>47</td><td>88</td><td>163</td><td>16</td><td>5</td><td>31.25%</td><td>34</td><td>4</td><td>88.24%</td><td>0</td><td>46.51%</td><td>47.74%</td><td>47.52%</td><td>149</td><td>195</td><td>76</td><td>40</td><td>146</td><td>42</td><td>1</td><td>0</td></tr>
<tr><td>Rampage </td><td>SAR</td><td>11</td><td>3</td><td>11</td><td>2</td><td>255</td><td>77</td><td>89</td><td>83</td><td>14</td><td>320</td><td>86</td><td>44</td><td>173</td><td>16</td><td>1</td><td>6.25%</td><td>16</td><td>4</td><td>75.00%</td><td>0</td><td>37.76%</td><td>38.41%</td><td>32.59%</td><td>210</td><td>138</td><td>80</td><td>46</td><td>97</td><td>36</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>PRO</td><td>11</td><td>12</td><td>6</td><td>1</td><td>188</td><td>52</td><td>76</td><td>58</td><td>5</td><td>108</td><td>24</td><td>76</td><td>141</td><td>20</td><td>6</td><td>30.00%</td><td>34</td><td>4</td><td>88.24%</td><td>0</td><td>63.83%</td><td>64.32%</td><td>63.83%</td><td>86</td><td>265</td><td>74</td><td>31</td><td>208</td><td>49</td><td>2</td><td>0</td></tr>
<tr><td>Rocket</td><td>LAV</td><td>20</td><td>13</td><td>7</td><td>2</td><td>291</td><td>93</td><td>98</td><td>94</td><td>15</td><td>100</td><td>19</td><td>69</td><td>150</td><td>24</td><td>6</td><td>25.00%</td><td>28</td><td>2</td><td>92.86%</td><td>0</td><td>64.80%</td><td>75.12%</td><td>71.30%</td><td>106</td><td>242</td><td>77</td><td>35</td><td>191</td><td>46</td><td>1</td><td>0</td></tr>
<tr><td>Comets</td><td>UTI</td><td>24</td><td>11</td><td>4</td><td>0</td><td>234</td><td>87</td><td>81</td><td>66</td><td>0</td><td>95</td><td>24</td><td>59</td><td>95</td><td>20</td><td>3</td><td>15.00%</td><td>26</td><td>4</td><td>84.62%</td><td>1</td><td>53.47%</td><td>66.08%</td><td>66.98%</td><td>82</td><td>219</td><td>59</td><td>26</td><td>179</td><td>36</td><td>1</td><td>0</td></tr>
<tr><td>Bears</td><td>HER</td><td>8</td><td>8</td><td>13</td><td>0</td><td>319</td><td>98</td><td>102</td><td>119</td><td>0</td><td>475</td><td>129</td><td>24</td><td>213</td><td>14</td><td>2</td><td>14.29%</td><td>9</td><td>3</td><td>66.67%</td><td>0</td><td>40.15%</td><td>45.85%</td><td>36.08%</td><td>269</td><td>171</td><td>103</td><td>60</td><td>122</td><td>45</td><td>0</td><td>1</td></tr>
<tr><td>Roadrunners</td><td>TUC</td><td>6</td><td>3</td><td>3</td><td>0</td><td>176</td><td>56</td><td>51</td><td>66</td><td>3</td><td>222</td><td>62</td><td>27</td><td>105</td><td>12</td><td>1</td><td>8.33%</td><td>9</td><td>5</td><td>44.44%</td><td>0</td><td>48.05%</td><td>43.04%</td><td>33.33%</td><td>180</td><td>113</td><td>70</td><td>43</td><td>76</td><td>30</td><td>0</td><td>0</td></tr>
<tr><td>Devils</td><td>BNG</td><td>7</td><td>2</td><td>3</td><td>0</td><td>146</td><td>48</td><td>45</td><td>53</td><td>0</td><td>307</td><td>98</td><td>18</td><td>104</td><td>16</td><td>0</td><td>0.00%</td><td>8</td><td>3</td><td>62.50%</td><td>1</td><td>29.72%</td><td>35.46%</td><td>27.42%</td><td>262</td><td>84</td><td>74</td><td>50</td><td>55</td><td>26</td><td>0</td><td>1</td></tr>
<tr><td>Gulls</td><td>SDG</td><td>18</td><td>4</td><td>6</td><td>1</td><td>289</td><td>101</td><td>84</td><td>103</td><td>1</td><td>240</td><td>72</td><td>29</td><td>139</td><td>21</td><td>3</td><td>14.29%</td><td>12</td><td>4</td><td>66.67%</td><td>0</td><td>41.52%</td><td>44.72%</td><td>43.20%</td><td>235</td><td>161</td><td>88</td><td>55</td><td>120</td><td>39</td><td>0</td><td>1</td></tr>
<tr><td>Heat</td><td>STK</td><td>33</td><td>22</td><td>15</td><td>0</td><td>459</td><td>141</td><td>168</td><td>150</td><td>0</td><td>123</td><td>34</td><td>38</td><td>132</td><td>28</td><td>6</td><td>21.43%</td><td>18</td><td>2</td><td>88.89%</td><td>1</td><td>70.00%</td><td>74.32%</td><td>76.64%</td><td>119</td><td>283</td><td>78</td><td>36</td><td>234</td><td>48</td><td>2</td><td>0</td></tr>
<tr><td>Phantoms</td><td>LVP</td><td>5</td><td>5</td><td>4</td><td>0</td><td>92</td><td>30</td><td>28</td><td>34</td><td>0</td><td>232</td><td>68</td><td>18</td><td>75</td><td>13</td><td>0</td><td>0.00%</td><td>9</td><td>3</td><td>66.67%</td><td>0</td><td>39.01%</td><td>44.83%</td><td>46.23%</td><td>179</td><td>70</td><td>51</td><td>33</td><td>49</td><td>19</td><td>0</td><td>0</td></tr>
<tr><td>Wolves</td><td>CHI</td><td>17</td><td>12</td><td>17</td><td>0</td><td>307</td><td>92</td><td>109</td><td>106</td><td>0</td><td>151</td><td>40</td><td>35</td><td>128</td><td>22</td><td>7</td><td>31.82%</td><td>15</td><td>2</td><td>86.67%</td><td>0</td><td>56.63%</td><td>66.16%</td><td>65.79%</td><td>123</td><td>278</td><td>79</td><td>37</td><td>227</td><td>46</td><td>2</td><td>0</td></tr>
<tr><td>Checkers</td><td>CHR</td><td>20</td><td>17</td><td>9</td><td>1</td><td>329</td><td>110</td><td>111</td><td>103</td><td>8</td><td>161</td><td>44</td><td>81</td><td>155</td><td>35</td><td>7</td><td>20.00%</td><td>31</td><td>5</td><td>83.87%</td><td>2</td><td>62.78%</td><td>67.68%</td><td>67.57%</td><td>128</td><td>319</td><td>98</td><td>44</td><td>255</td><td>58</td><td>3</td><td>0</td></tr>
<tr><td>Sound Tigers</td><td>BPT</td><td>5</td><td>9</td><td>6</td><td>0</td><td>213</td><td>81</td><td>66</td><td>66</td><td>0</td><td>296</td><td>93</td><td>32</td><td>119</td><td>18</td><td>0</td><td>0.00%</td><td>10</td><td>3</td><td>70.00%</td><td>0</td><td>39.18%</td><td>40.00%</td><td>37.40%</td><td>234</td><td>112</td><td>74</td><td>47</td><td>78</td><td>31</td><td>0</td><td>0</td></tr>
<tr><td>Moose</td><td>MAN</td><td>21</td><td>16</td><td>16</td><td>0</td><td>365</td><td>117</td><td>126</td><td>122</td><td>0</td><td>232</td><td>77</td><td>62</td><td>194</td><td>16</td><td>7</td><td>43.75%</td><td>20</td><td>0</td><td>100.00%</td><td>1</td><td>61.50%</td><td>62.29%</td><td>60.39%</td><td>147</td><td>292</td><td>100</td><td>48</td><td>231</td><td>57</td><td>0</td><td>0</td></tr>
<tr><td>Reign</td><td>ONT</td><td>5</td><td>4</td><td>2</td><td>1</td><td>127</td><td>42</td><td>41</td><td>38</td><td>9</td><td>390</td><td>111</td><td>29</td><td>109</td><td>13</td><td>1</td><td>7.69%</td><td>12</td><td>2</td><td>83.33%</td><td>0</td><td>25.33%</td><td>34.75%</td><td>29.31%</td><td>269</td><td>87</td><td>73</td><td>49</td><td>56</td><td>27</td><td>0</td><td>0</td></tr>
<tr><td>Crunch</td><td>SYR</td><td>7</td><td>10</td><td>7</td><td>0</td><td>151</td><td>40</td><td>58</td><td>52</td><td>4</td><td>235</td><td>70</td><td>56</td><td>121</td><td>30</td><td>10</td><td>33.33%</td><td>27</td><td>4</td><td>85.19%</td><td>0</td><td>36.82%</td><td>47.80%</td><td>38.79%</td><td>213</td><td>137</td><td>75</td><td>47</td><td>98</td><td>33</td><td>0</td><td>0</td></tr>
<tr><td>Marlies</td><td>TOR</td><td>20</td><td>14</td><td>11</td><td>0</td><td>333</td><td>113</td><td>111</td><td>109</td><td>0</td><td>156</td><td>57</td><td>53</td><td>177</td><td>17</td><td>2</td><td>11.76%</td><td>22</td><td>10</td><td>54.55%</td><td>0</td><td>52.07%</td><td>56.44%</td><td>63.09%</td><td>138</td><td>257</td><td>85</td><td>41</td><td>206</td><td>48</td><td>1</td><td>0</td></tr>
<tr><td>Condors</td><td>BKR</td><td>17</td><td>11</td><td>11</td><td>1</td><td>288</td><td>111</td><td>101</td><td>76</td><td>5</td><td>126</td><td>38</td><td>69</td><td>160</td><td>23</td><td>5</td><td>21.74%</td><td>30</td><td>3</td><td>90.00%</td><td>0</td><td>70.09%</td><td>79.84%</td><td>70.87%</td><td>92</td><td>312</td><td>81</td><td>31</td><td>254</td><td>53</td><td>3</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>SPR</td><td>15</td><td>11</td><td>11</td><td>0</td><td>220</td><td>82</td><td>68</td><td>70</td><td>0</td><td>164</td><td>48</td><td>51</td><td>126</td><td>21</td><td>6</td><td>28.57%</td><td>23</td><td>5</td><td>78.26%</td><td>0</td><td>56.92%</td><td>64.85%</td><td>69.11%</td><td>127</td><td>218</td><td>75</td><td>36</td><td>173</td><td>43</td><td>0</td><td>0</td></tr>
<tr><td>Penguins</td><td>WBS</td><td>7</td><td>7</td><td>4</td><td>0</td><td>252</td><td>82</td><td>92</td><td>78</td><td>0</td><td>327</td><td>100</td><td>38</td><td>151</td><td>17</td><td>0</td><td>0.00%</td><td>13</td><td>2</td><td>84.62%</td><td>1</td><td>43.17%</td><td>44.28%</td><td>39.39%</td><td>243</td><td>149</td><td>88</td><td>54</td><td>104</td><td>39</td><td>0</td><td>0</td></tr>
<tr><td>Admirals</td><td>MIL</td><td>16</td><td>7</td><td>7</td><td>1</td><td>273</td><td>100</td><td>82</td><td>84</td><td>7</td><td>371</td><td>109</td><td>18</td><td>164</td><td>9</td><td>1</td><td>11.11%</td><td>8</td><td>1</td><td>87.50%</td><td>0</td><td>48.72%</td><td>41.81%</td><td>49.63%</td><td>206</td><td>140</td><td>81</td><td>46</td><td>99</td><td>37</td><td>0</td><td>1</td></tr>
<tr><td>Wolf Pack</td><td>HFD</td><td>8</td><td>4</td><td>6</td><td>0</td><td>190</td><td>79</td><td>47</td><td>64</td><td>0</td><td>240</td><td>64</td><td>24</td><td>95</td><td>6</td><td>0</td><td>0.00%</td><td>11</td><td>4</td><td>63.64%</td><td>0</td><td>35.76%</td><td>43.24%</td><td>40.45%</td><td>161</td><td>86</td><td>53</td><td>33</td><td>62</td><td>23</td><td>0</td><td>0</td></tr>
<tr><td>Griffins</td><td>GRP</td><td>9</td><td>11</td><td>4</td><td>0</td><td>231</td><td>65</td><td>86</td><td>76</td><td>9</td><td>304</td><td>88</td><td>36</td><td>152</td><td>19</td><td>3</td><td>15.79%</td><td>16</td><td>3</td><td>81.25%</td><td>1</td><td>37.63%</td><td>52.79%</td><td>37.12%</td><td>230</td><td>174</td><td>81</td><td>46</td><td>134</td><td>37</td><td>0</td><td>0</td></tr>
<tr><td> Americans</td><td>ROC</td><td>10</td><td>15</td><td>15</td><td>3</td><td>258</td><td>83</td><td>77</td><td>98</td><td>9</td><td>166</td><td>57</td><td>79</td><td>151</td><td>18</td><td>3</td><td>16.67%</td><td>31</td><td>3</td><td>90.32%</td><td>2</td><td>49.45%</td><td>64.36%</td><td>65.57%</td><td>144</td><td>255</td><td>86</td><td>42</td><td>198</td><td>49</td><td>2</td><td>0</td></tr>
<tr><td>Senators</td><td>BEL</td><td>9</td><td>4</td><td>4</td><td>1</td><td>194</td><td>61</td><td>72</td><td>56</td><td>15</td><td>265</td><td>65</td><td>12</td><td>98</td><td>7</td><td>2</td><td>28.57%</td><td>7</td><td>2</td><td>71.43%</td><td>0</td><td>46.55%</td><td>50.36%</td><td>45.45%</td><td>174</td><td>126</td><td>70</td><td>39</td><td>90</td><td>34</td><td>0</td><td>0</td></tr>
<tr><td>Barracudas</td><td>SJB</td><td>5</td><td>6</td><td>3</td><td>0</td><td>190</td><td>65</td><td>70</td><td>52</td><td>3</td><td>317</td><td>95</td><td>47</td><td>110</td><td>15</td><td>2</td><td>13.33%</td><td>21</td><td>5</td><td>76.19%</td><td>0</td><td>39.71%</td><td>42.14%</td><td>41.74%</td><td>240</td><td>110</td><td>75</td><td>49</td><td>75</td><td>31</td><td>0</td><td>0</td></tr>
<tr><td>Stars</td><td>TEX</td><td>9</td><td>10</td><td>5</td><td>0</td><td>252</td><td>78</td><td>92</td><td>82</td><td>0</td><td>403</td><td>126</td><td>35</td><td>162</td><td>21</td><td>4</td><td>19.05%</td><td>13</td><td>2</td><td>84.62%</td><td>0</td><td>41.64%</td><td>50.00%</td><td>42.96%</td><td>288</td><td>157</td><td>95</td><td>61</td><td>113</td><td>39</td><td>0</td><td>0</td></tr>
<tr><td>Wild</td><td>IOA</td><td>4</td><td>9</td><td>6</td><td>0</td><td>220</td><td>52</td><td>81</td><td>86</td><td>4</td><td>330</td><td>120</td><td>14</td><td>128</td><td>10</td><td>1</td><td>10.00%</td><td>5</td><td>0</td><td>100.00%</td><td>0</td><td>36.31%</td><td>40.00%</td><td>48.06%</td><td>212</td><td>132</td><td>82</td><td>48</td><td>92</td><td>36</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 4.08</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Heat</td><td>8.75</td></tr>
<tr><td>2</td><td>IceHogs</td><td>7.00</td></tr>
<tr><td>3</td><td>Comets</td><td>6.50</td></tr>
<tr><td>4</td><td>Moose</td><td>5.89</td></tr>
<tr><td>5</td><td>Wolves</td><td>5.75</td></tr>
<tr><td>6</td><td>Rocket</td><td>5.71</td></tr>
<tr><td>7</td><td>Marlies</td><td>5.63</td></tr>
<tr><td>8</td><td>Thunderbirds</td><td>5.29</td></tr>
<tr><td>9</td><td>Checkers</td><td>5.22</td></tr>
<tr><td>10</td><td> Americans</td><td>5.13</td></tr>
<tr><td>11</td><td>Condors</td><td>5.00</td></tr>
<tr><td>12</td><td>Admirals</td><td>4.43</td></tr>
<tr><td>13</td><td>Bruins</td><td>4.29</td></tr>
<tr><td>14</td><td>Rampage </td><td>3.86</td></tr>
<tr><td>15</td><td>Monsters</td><td>3.86</td></tr>
<tr><td>16</td><td>Gulls</td><td>3.63</td></tr>
<tr><td>17</td><td>Wolf Pack</td><td>3.60</td></tr>
<tr><td>18</td><td>Crunch</td><td>3.43</td></tr>
<tr><td>19</td><td>Bears</td><td>3.22</td></tr>
<tr><td>20</td><td>Griffins</td><td>3.00</td></tr>
<tr><td>21</td><td>Senators</td><td>3.00</td></tr>
<tr><td>22</td><td>Sound Tigers</td><td>2.86</td></tr>
<tr><td>23</td><td>Phantoms</td><td>2.80</td></tr>
<tr><td>24</td><td>Wild</td><td>2.71</td></tr>
<tr><td>25</td><td>Eagles</td><td>2.71</td></tr>
<tr><td>26</td><td>Stars</td><td>2.67</td></tr>
<tr><td>27</td><td>Penguins</td><td>2.25</td></tr>
<tr><td>28</td><td>Barracudas</td><td>2.00</td></tr>
<tr><td>29</td><td>Roadrunners</td><td>2.00</td></tr>
<tr><td>30</td><td>Reign</td><td>1.71</td></tr>
<tr><td>31</td><td>Devils</td><td>1.71</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 4.08</b></td></tr></tfoot>
<tbody><tr><td>1</td><td> Americans</td><td>1.13</td></tr>
<tr><td>2</td><td>Bruins</td><td>1.14</td></tr>
<tr><td>3</td><td>Heat</td><td>1.25</td></tr>
<tr><td>4</td><td>Wolves</td><td>1.50</td></tr>
<tr><td>5</td><td>Checkers</td><td>1.56</td></tr>
<tr><td>6</td><td>Rocket</td><td>1.71</td></tr>
<tr><td>7</td><td>IceHogs</td><td>2.00</td></tr>
<tr><td>8</td><td>Condors</td><td>2.13</td></tr>
<tr><td>9</td><td>Comets</td><td>2.50</td></tr>
<tr><td>10</td><td>Moose</td><td>2.56</td></tr>
<tr><td>11</td><td>Gulls</td><td>3.00</td></tr>
<tr><td>12</td><td>Marlies</td><td>3.25</td></tr>
<tr><td>13</td><td>Monsters</td><td>3.29</td></tr>
<tr><td>14</td><td>Thunderbirds</td><td>4.00</td></tr>
<tr><td>15</td><td>Crunch</td><td>4.14</td></tr>
<tr><td>16</td><td>Stars</td><td>4.44</td></tr>
<tr><td>17</td><td>Penguins</td><td>4.50</td></tr>
<tr><td>18</td><td>Bears</td><td>4.78</td></tr>
<tr><td>19</td><td>Griffins</td><td>5.13</td></tr>
<tr><td>20</td><td>Admirals</td><td>5.43</td></tr>
<tr><td>21</td><td>Roadrunners</td><td>5.67</td></tr>
<tr><td>22</td><td>Senators</td><td>5.67</td></tr>
<tr><td>23</td><td>Barracudas</td><td>5.71</td></tr>
<tr><td>24</td><td>Wolf Pack</td><td>5.80</td></tr>
<tr><td>25</td><td>Sound Tigers</td><td>6.00</td></tr>
<tr><td>26</td><td>Rampage </td><td>6.29</td></tr>
<tr><td>27</td><td>Wild</td><td>6.71</td></tr>
<tr><td>28</td><td>Devils</td><td>7.00</td></tr>
<tr><td>29</td><td>Reign</td><td>7.00</td></tr>
<tr><td>30</td><td>Eagles</td><td>7.14</td></tr>
<tr><td>31</td><td>Phantoms</td><td>7.60</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Heat</td><td>700.00%</td></tr>
<tr><td>2</td><td> Americans</td><td>455.56%</td></tr>
<tr><td>3</td><td>Wolves</td><td>383.33%</td></tr>
<tr><td>4</td><td>Bruins</td><td>375.00%</td></tr>
<tr><td>5</td><td>IceHogs</td><td>350.00%</td></tr>
<tr><td>6</td><td>Checkers</td><td>335.71%</td></tr>
<tr><td>7</td><td>Rocket</td><td>333.33%</td></tr>
<tr><td>8</td><td>Comets</td><td>260.00%</td></tr>
<tr><td>9</td><td>Condors</td><td>235.29%</td></tr>
<tr><td>10</td><td>Moose</td><td>230.43%</td></tr>
<tr><td>11</td><td>Marlies</td><td>173.08%</td></tr>
<tr><td>12</td><td>Thunderbirds</td><td>132.14%</td></tr>
<tr><td>13</td><td>Gulls</td><td>120.83%</td></tr>
<tr><td>14</td><td>Monsters</td><td>117.39%</td></tr>
<tr><td>15</td><td>Crunch</td><td>82.76%</td></tr>
<tr><td>16</td><td>Admirals</td><td>81.58%</td></tr>
<tr><td>17</td><td>Bears</td><td>67.44%</td></tr>
<tr><td>18</td><td>Wolf Pack</td><td>62.07%</td></tr>
<tr><td>19</td><td>Rampage </td><td>61.36%</td></tr>
<tr><td>20</td><td>Stars</td><td>60.00%</td></tr>
<tr><td>21</td><td>Griffins</td><td>58.54%</td></tr>
<tr><td>22</td><td>Senators</td><td>52.94%</td></tr>
<tr><td>23</td><td>Penguins</td><td>50.00%</td></tr>
<tr><td>24</td><td>Sound Tigers</td><td>47.62%</td></tr>
<tr><td>25</td><td>Wild</td><td>40.43%</td></tr>
<tr><td>26</td><td>Eagles</td><td>38.00%</td></tr>
<tr><td>27</td><td>Phantoms</td><td>36.84%</td></tr>
<tr><td>28</td><td>Roadrunners</td><td>35.29%</td></tr>
<tr><td>29</td><td>Barracudas</td><td>35.00%</td></tr>
<tr><td>30</td><td>Devils</td><td>24.49%</td></tr>
<tr><td>31</td><td>Reign</td><td>24.49%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18.35%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Moose</td><td>43.75%</td></tr>
<tr><td>2</td><td>Crunch</td><td>33.33%</td></tr>
<tr><td>3</td><td>Wolves</td><td>31.82%</td></tr>
<tr><td>4</td><td>Monsters</td><td>31.25%</td></tr>
<tr><td>5</td><td>Bruins</td><td>30.00%</td></tr>
<tr><td>6</td><td>Thunderbirds</td><td>28.57%</td></tr>
<tr><td>7</td><td>Senators</td><td>28.57%</td></tr>
<tr><td>8</td><td>IceHogs</td><td>28.57%</td></tr>
<tr><td>9</td><td>Rocket</td><td>25.00%</td></tr>
<tr><td>10</td><td>Condors</td><td>21.74%</td></tr>
<tr><td>11</td><td>Heat</td><td>21.43%</td></tr>
<tr><td>12</td><td>Checkers</td><td>20.00%</td></tr>
<tr><td>13</td><td>Stars</td><td>19.05%</td></tr>
<tr><td>14</td><td> Americans</td><td>16.67%</td></tr>
<tr><td>15</td><td>Griffins</td><td>15.79%</td></tr>
<tr><td>16</td><td>Comets</td><td>15.00%</td></tr>
<tr><td>17</td><td>Bears</td><td>14.29%</td></tr>
<tr><td>18</td><td>Gulls</td><td>14.29%</td></tr>
<tr><td>19</td><td>Eagles</td><td>14.29%</td></tr>
<tr><td>20</td><td>Barracudas</td><td>13.33%</td></tr>
<tr><td>21</td><td>Marlies</td><td>11.76%</td></tr>
<tr><td>22</td><td>Admirals</td><td>11.11%</td></tr>
<tr><td>23</td><td>Wild</td><td>10.00%</td></tr>
<tr><td>24</td><td>Roadrunners</td><td>8.33%</td></tr>
<tr><td>25</td><td>Reign</td><td>7.69%</td></tr>
<tr><td>26</td><td>Rampage </td><td>6.25%</td></tr>
<tr><td>27</td><td>Sound Tigers</td><td>0.00%</td></tr>
<tr><td>28</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>29</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>30</td><td>Phantoms</td><td>0.00%</td></tr>
<tr><td>31</td><td>Wolf Pack</td><td>0.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 81.65%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Moose</td><td>100.00%</td></tr>
<tr><td>2</td><td>Wild</td><td>100.00%</td></tr>
<tr><td>3</td><td>Rocket</td><td>92.86%</td></tr>
<tr><td>4</td><td> Americans</td><td>90.32%</td></tr>
<tr><td>5</td><td>Condors</td><td>90.00%</td></tr>
<tr><td>6</td><td>Heat</td><td>88.89%</td></tr>
<tr><td>7</td><td>Bruins</td><td>88.24%</td></tr>
<tr><td>8</td><td>Monsters</td><td>88.24%</td></tr>
<tr><td>9</td><td>Admirals</td><td>87.50%</td></tr>
<tr><td>10</td><td>Wolves</td><td>86.67%</td></tr>
<tr><td>11</td><td>Crunch</td><td>85.19%</td></tr>
<tr><td>12</td><td>Stars</td><td>84.62%</td></tr>
<tr><td>13</td><td>Penguins</td><td>84.62%</td></tr>
<tr><td>14</td><td>Comets</td><td>84.62%</td></tr>
<tr><td>15</td><td>Checkers</td><td>83.87%</td></tr>
<tr><td>16</td><td>Reign</td><td>83.33%</td></tr>
<tr><td>17</td><td>Griffins</td><td>81.25%</td></tr>
<tr><td>18</td><td>IceHogs</td><td>78.95%</td></tr>
<tr><td>19</td><td>Thunderbirds</td><td>78.26%</td></tr>
<tr><td>20</td><td>Barracudas</td><td>76.19%</td></tr>
<tr><td>21</td><td>Rampage </td><td>75.00%</td></tr>
<tr><td>22</td><td>Eagles</td><td>75.00%</td></tr>
<tr><td>23</td><td>Senators</td><td>71.43%</td></tr>
<tr><td>24</td><td>Sound Tigers</td><td>70.00%</td></tr>
<tr><td>25</td><td>Bears</td><td>66.67%</td></tr>
<tr><td>26</td><td>Gulls</td><td>66.67%</td></tr>
<tr><td>27</td><td>Phantoms</td><td>66.67%</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>63.64%</td></tr>
<tr><td>29</td><td>Devils</td><td>62.50%</td></tr>
<tr><td>30</td><td>Marlies</td><td>54.55%</td></tr>
<tr><td>31</td><td>Roadrunners</td><td>44.44%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Moose</td><td>143.75%</td></tr>
<tr><td>2</td><td>Monsters</td><td>119.49%</td></tr>
<tr><td>3</td><td>Crunch</td><td>118.52%</td></tr>
<tr><td>4</td><td>Wolves</td><td>118.48%</td></tr>
<tr><td>5</td><td>Bruins</td><td>118.24%</td></tr>
<tr><td>6</td><td>Rocket</td><td>117.86%</td></tr>
<tr><td>7</td><td>Condors</td><td>111.74%</td></tr>
<tr><td>8</td><td>Heat</td><td>110.32%</td></tr>
<tr><td>9</td><td>Wild</td><td>110.00%</td></tr>
<tr><td>10</td><td>IceHogs</td><td>107.52%</td></tr>
<tr><td>11</td><td> Americans</td><td>106.99%</td></tr>
<tr><td>12</td><td>Thunderbirds</td><td>106.83%</td></tr>
<tr><td>13</td><td>Checkers</td><td>103.87%</td></tr>
<tr><td>14</td><td>Stars</td><td>103.66%</td></tr>
<tr><td>15</td><td>Senators</td><td>100.00%</td></tr>
<tr><td>16</td><td>Comets</td><td>99.62%</td></tr>
<tr><td>17</td><td>Admirals</td><td>98.61%</td></tr>
<tr><td>18</td><td>Griffins</td><td>97.04%</td></tr>
<tr><td>19</td><td>Reign</td><td>91.03%</td></tr>
<tr><td>20</td><td>Barracudas</td><td>89.52%</td></tr>
<tr><td>21</td><td>Eagles</td><td>89.29%</td></tr>
<tr><td>22</td><td>Penguins</td><td>84.62%</td></tr>
<tr><td>23</td><td>Rampage </td><td>81.25%</td></tr>
<tr><td>24</td><td>Bears</td><td>80.95%</td></tr>
<tr><td>25</td><td>Gulls</td><td>80.95%</td></tr>
<tr><td>26</td><td>Sound Tigers</td><td>70.00%</td></tr>
<tr><td>27</td><td>Phantoms</td><td>66.67%</td></tr>
<tr><td>28</td><td>Marlies</td><td>66.31%</td></tr>
<tr><td>29</td><td>Wolf Pack</td><td>63.64%</td></tr>
<tr><td>30</td><td>Devils</td><td>62.50%</td></tr>
<tr><td>31</td><td>Roadrunners</td><td>52.78%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 33.20</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Heat</td><td>57.38</td></tr>
<tr><td>2</td><td>Marlies</td><td>41.63</td></tr>
<tr><td>3</td><td>Rocket</td><td>41.57</td></tr>
<tr><td>4</td><td>Moose</td><td>40.56</td></tr>
<tr><td>5</td><td>Admirals</td><td>39.00</td></tr>
<tr><td>6</td><td>Comets</td><td>39.00</td></tr>
<tr><td>7</td><td>Wolves</td><td>38.38</td></tr>
<tr><td>8</td><td>IceHogs</td><td>38.20</td></tr>
<tr><td>9</td><td>Wolf Pack</td><td>38.00</td></tr>
<tr><td>10</td><td>Checkers</td><td>36.56</td></tr>
<tr><td>11</td><td>Rampage </td><td>36.43</td></tr>
<tr><td>12</td><td>Gulls</td><td>36.13</td></tr>
<tr><td>13</td><td>Condors</td><td>36.00</td></tr>
<tr><td>14</td><td>Bears</td><td>35.44</td></tr>
<tr><td>15</td><td>Senators</td><td>32.33</td></tr>
<tr><td>16</td><td> Americans</td><td>32.25</td></tr>
<tr><td>17</td><td>Eagles</td><td>32.00</td></tr>
<tr><td>18</td><td>Penguins</td><td>31.50</td></tr>
<tr><td>19</td><td>Wild</td><td>31.43</td></tr>
<tr><td>20</td><td>Thunderbirds</td><td>31.43</td></tr>
<tr><td>21</td><td>Sound Tigers</td><td>30.43</td></tr>
<tr><td>22</td><td>Roadrunners</td><td>29.33</td></tr>
<tr><td>23</td><td>Griffins</td><td>28.88</td></tr>
<tr><td>24</td><td>Stars</td><td>28.00</td></tr>
<tr><td>25</td><td>Barracudas</td><td>27.14</td></tr>
<tr><td>26</td><td>Bruins</td><td>26.86</td></tr>
<tr><td>27</td><td>Monsters</td><td>25.71</td></tr>
<tr><td>28</td><td>Crunch</td><td>21.57</td></tr>
<tr><td>29</td><td>Devils</td><td>20.86</td></tr>
<tr><td>30</td><td>Phantoms</td><td>18.40</td></tr>
<tr><td>31</td><td>Reign</td><td>18.14</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 33.20</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rocket</td><td>14.29</td></tr>
<tr><td>2</td><td>Heat</td><td>15.38</td></tr>
<tr><td>3</td><td>Bruins</td><td>15.43</td></tr>
<tr><td>4</td><td>Condors</td><td>15.75</td></tr>
<tr><td>5</td><td>Comets</td><td>15.83</td></tr>
<tr><td>6</td><td>IceHogs</td><td>17.60</td></tr>
<tr><td>7</td><td>Checkers</td><td>17.89</td></tr>
<tr><td>8</td><td>Wolves</td><td>18.88</td></tr>
<tr><td>9</td><td>Marlies</td><td>19.50</td></tr>
<tr><td>10</td><td> Americans</td><td>20.75</td></tr>
<tr><td>11</td><td>Monsters</td><td>23.00</td></tr>
<tr><td>12</td><td>Thunderbirds</td><td>23.43</td></tr>
<tr><td>13</td><td>Moose</td><td>25.78</td></tr>
<tr><td>14</td><td>Gulls</td><td>30.00</td></tr>
<tr><td>15</td><td>Crunch</td><td>33.57</td></tr>
<tr><td>16</td><td>Roadrunners</td><td>37.00</td></tr>
<tr><td>17</td><td>Griffins</td><td>38.00</td></tr>
<tr><td>18</td><td>Penguins</td><td>40.88</td></tr>
<tr><td>19</td><td>Sound Tigers</td><td>42.29</td></tr>
<tr><td>20</td><td>Devils</td><td>43.86</td></tr>
<tr><td>21</td><td>Senators</td><td>44.17</td></tr>
<tr><td>22</td><td>Stars</td><td>44.78</td></tr>
<tr><td>23</td><td>Barracudas</td><td>45.29</td></tr>
<tr><td>24</td><td>Rampage </td><td>45.71</td></tr>
<tr><td>25</td><td>Phantoms</td><td>46.40</td></tr>
<tr><td>26</td><td>Wild</td><td>47.14</td></tr>
<tr><td>27</td><td>Eagles</td><td>47.43</td></tr>
<tr><td>28</td><td>Wolf Pack</td><td>48.00</td></tr>
<tr><td>29</td><td>Bears</td><td>52.78</td></tr>
<tr><td>30</td><td>Admirals</td><td>53.00</td></tr>
<tr><td>31</td><td>Reign</td><td>55.71</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Heat</td><td>373.17%</td></tr>
<tr><td>2</td><td>Rocket</td><td>291.00%</td></tr>
<tr><td>3</td><td>Comets</td><td>246.32%</td></tr>
<tr><td>4</td><td>Condors</td><td>228.57%</td></tr>
<tr><td>5</td><td>IceHogs</td><td>217.05%</td></tr>
<tr><td>6</td><td>Marlies</td><td>213.46%</td></tr>
<tr><td>7</td><td>Checkers</td><td>204.35%</td></tr>
<tr><td>8</td><td>Wolves</td><td>203.31%</td></tr>
<tr><td>9</td><td>Bruins</td><td>174.07%</td></tr>
<tr><td>10</td><td>Moose</td><td>157.33%</td></tr>
<tr><td>11</td><td> Americans</td><td>155.42%</td></tr>
<tr><td>12</td><td>Thunderbirds</td><td>134.15%</td></tr>
<tr><td>13</td><td>Gulls</td><td>120.42%</td></tr>
<tr><td>14</td><td>Monsters</td><td>111.80%</td></tr>
<tr><td>15</td><td>Rampage </td><td>79.69%</td></tr>
<tr><td>16</td><td>Roadrunners</td><td>79.28%</td></tr>
<tr><td>17</td><td>Wolf Pack</td><td>79.17%</td></tr>
<tr><td>18</td><td>Penguins</td><td>77.06%</td></tr>
<tr><td>19</td><td>Griffins</td><td>75.99%</td></tr>
<tr><td>20</td><td>Admirals</td><td>73.58%</td></tr>
<tr><td>21</td><td>Senators</td><td>73.21%</td></tr>
<tr><td>22</td><td>Sound Tigers</td><td>71.96%</td></tr>
<tr><td>23</td><td>Eagles</td><td>67.47%</td></tr>
<tr><td>24</td><td>Bears</td><td>67.16%</td></tr>
<tr><td>25</td><td>Wild</td><td>66.67%</td></tr>
<tr><td>26</td><td>Crunch</td><td>64.26%</td></tr>
<tr><td>27</td><td>Stars</td><td>62.53%</td></tr>
<tr><td>28</td><td>Barracudas</td><td>59.94%</td></tr>
<tr><td>29</td><td>Devils</td><td>47.56%</td></tr>
<tr><td>30</td><td>Phantoms</td><td>39.66%</td></tr>
<tr><td>31</td><td>Reign</td><td>32.56%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 5.92</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Senators</td><td>2.00</td></tr>
<tr><td>2</td><td>Wild</td><td>2.00</td></tr>
<tr><td>3</td><td>Devils</td><td>2.57</td></tr>
<tr><td>4</td><td>Admirals</td><td>2.57</td></tr>
<tr><td>5</td><td>Bears</td><td>2.67</td></tr>
<tr><td>6</td><td>Eagles</td><td>3.00</td></tr>
<tr><td>7</td><td>Phantoms</td><td>3.60</td></tr>
<tr><td>8</td><td>Gulls</td><td>3.63</td></tr>
<tr><td>9</td><td>Stars</td><td>3.89</td></tr>
<tr><td>10</td><td>Reign</td><td>4.14</td></tr>
<tr><td>11</td><td>Wolves</td><td>4.38</td></tr>
<tr><td>12</td><td>Roadrunners</td><td>4.50</td></tr>
<tr><td>13</td><td>Griffins</td><td>4.50</td></tr>
<tr><td>14</td><td>Sound Tigers</td><td>4.57</td></tr>
<tr><td>15</td><td>Penguins</td><td>4.75</td></tr>
<tr><td>16</td><td>Heat</td><td>4.75</td></tr>
<tr><td>17</td><td>Wolf Pack</td><td>4.80</td></tr>
<tr><td>18</td><td>Rampage </td><td>6.29</td></tr>
<tr><td>19</td><td>Marlies</td><td>6.63</td></tr>
<tr><td>20</td><td>Barracudas</td><td>6.71</td></tr>
<tr><td>21</td><td>Moose</td><td>6.89</td></tr>
<tr><td>22</td><td>Thunderbirds</td><td>7.29</td></tr>
<tr><td>23</td><td>Crunch</td><td>8.00</td></tr>
<tr><td>24</td><td>Condors</td><td>8.63</td></tr>
<tr><td>25</td><td>IceHogs</td><td>9.00</td></tr>
<tr><td>26</td><td>Checkers</td><td>9.00</td></tr>
<tr><td>27</td><td>Comets</td><td>9.83</td></tr>
<tr><td>28</td><td>Rocket</td><td>9.86</td></tr>
<tr><td>29</td><td> Americans</td><td>9.88</td></tr>
<tr><td>30</td><td>Bruins</td><td>10.86</td></tr>
<tr><td>31</td><td>Monsters</td><td>12.57</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 18.75</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rampage </td><td>24.71</td></tr>
<tr><td>2</td><td>Bears</td><td>23.67</td></tr>
<tr><td>3</td><td>Admirals</td><td>23.43</td></tr>
<tr><td>4</td><td>Monsters</td><td>23.29</td></tr>
<tr><td>5</td><td>Marlies</td><td>22.13</td></tr>
<tr><td>6</td><td>Moose</td><td>21.56</td></tr>
<tr><td>7</td><td>Rocket</td><td>21.43</td></tr>
<tr><td>8</td><td>Bruins</td><td>20.14</td></tr>
<tr><td>9</td><td>Condors</td><td>20.00</td></tr>
<tr><td>10</td><td>Griffins</td><td>19.00</td></tr>
<tr><td>11</td><td>Wolf Pack</td><td>19.00</td></tr>
<tr><td>12</td><td> Americans</td><td>18.88</td></tr>
<tr><td>13</td><td>Penguins</td><td>18.88</td></tr>
<tr><td>14</td><td>IceHogs</td><td>18.40</td></tr>
<tr><td>15</td><td>Wild</td><td>18.29</td></tr>
<tr><td>16</td><td>Thunderbirds</td><td>18.00</td></tr>
<tr><td>17</td><td>Stars</td><td>18.00</td></tr>
<tr><td>18</td><td>Roadrunners</td><td>17.50</td></tr>
<tr><td>19</td><td>Gulls</td><td>17.38</td></tr>
<tr><td>20</td><td>Crunch</td><td>17.29</td></tr>
<tr><td>21</td><td>Checkers</td><td>17.22</td></tr>
<tr><td>22</td><td>Sound Tigers</td><td>17.00</td></tr>
<tr><td>23</td><td>Eagles</td><td>16.86</td></tr>
<tr><td>24</td><td>Heat</td><td>16.50</td></tr>
<tr><td>25</td><td>Senators</td><td>16.33</td></tr>
<tr><td>26</td><td>Wolves</td><td>16.00</td></tr>
<tr><td>27</td><td>Comets</td><td>15.83</td></tr>
<tr><td>28</td><td>Barracudas</td><td>15.71</td></tr>
<tr><td>29</td><td>Reign</td><td>15.57</td></tr>
<tr><td>30</td><td>Phantoms</td><td>15.00</td></tr>
<tr><td>31</td><td>Devils</td><td>14.86</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Condors</td><td>75.20%</td></tr>
<tr><td>2</td><td>Heat</td><td>73.81%</td></tr>
<tr><td>3</td><td>Rocket</td><td>71.24%</td></tr>
<tr><td>4</td><td>Checkers</td><td>66.16%</td></tr>
<tr><td>5</td><td>Bruins</td><td>64.06%</td></tr>
<tr><td>6</td><td>Thunderbirds</td><td>63.64%</td></tr>
<tr><td>7</td><td>Comets</td><td>62.96%</td></tr>
<tr><td>8</td><td>Wolves</td><td>62.76%</td></tr>
<tr><td>9</td><td>Moose</td><td>61.53%</td></tr>
<tr><td>10</td><td> Americans</td><td>59.29%</td></tr>
<tr><td>11</td><td>Marlies</td><td>57.37%</td></tr>
<tr><td>12</td><td>IceHogs</td><td>55.96%</td></tr>
<tr><td>13</td><td>Senators</td><td>47.51%</td></tr>
<tr><td>14</td><td>Monsters</td><td>47.20%</td></tr>
<tr><td>15</td><td>Admirals</td><td>46.55%</td></tr>
<tr><td>16</td><td>Stars</td><td>44.29%</td></tr>
<tr><td>17</td><td>Griffins</td><td>43.21%</td></tr>
<tr><td>18</td><td>Gulls</td><td>43.07%</td></tr>
<tr><td>19</td><td>Phantoms</td><td>42.81%</td></tr>
<tr><td>20</td><td>Roadrunners</td><td>42.72%</td></tr>
<tr><td>21</td><td>Penguins</td><td>42.68%</td></tr>
<tr><td>22</td><td>Bears</td><td>41.18%</td></tr>
<tr><td>23</td><td>Barracudas</td><td>40.99%</td></tr>
<tr><td>24</td><td>Crunch</td><td>40.81%</td></tr>
<tr><td>25</td><td>Wild</td><td>40.79%</td></tr>
<tr><td>26</td><td>Wolf Pack</td><td>39.18%</td></tr>
<tr><td>27</td><td>Sound Tigers</td><td>39.00%</td></tr>
<tr><td>28</td><td>Eagles</td><td>37.35%</td></tr>
<tr><td>29</td><td>Rampage </td><td>36.57%</td></tr>
<tr><td>30</td><td>Devils</td><td>30.82%</td></tr>
<tr><td>31</td><td>Reign</td><td>28.76%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
