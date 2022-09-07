<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Stats</title>
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
<tr><td>Avalanche</td><td>7</td><td>1</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>11</td><td>21</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>12</td><td>3</td><td>0</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>5</td><td>9</td><td>11</td><td>19</td><td>30</td></tr>
<tr><td>Blackhawks</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>15</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>13</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>2</td><td>12</td><td>22</td><td>34</td></tr>
<tr><td>Blue Jackets</td><td>7</td><td>3</td><td>3</td><td>0</td><td>1</td><td>0</td><td>0</td><td>18</td><td>24</td><td>4</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>17</td><td>3</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>9</td><td>7</td><td>18</td><td>30</td><td>48</td></tr>
<tr><td>Blues</td><td>7</td><td>1</td><td>3</td><td>0</td><td>2</td><td>1</td><td>0</td><td>20</td><td>26</td><td>3</td><td>0</td><td>1</td><td>0</td><td>2</td><td>0</td><td>0</td><td>8</td><td>12</td><td>4</td><td>1</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>12</td><td>14</td><td>20</td><td>34</td><td>54</td></tr>
<tr><td>Bruins</td><td>7</td><td>2</td><td>2</td><td>0</td><td>0</td><td>2</td><td>1</td><td>20</td><td>20</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>8</td><td>7</td><td>4</td><td>1</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>12</td><td>13</td><td>20</td><td>31</td><td>51</td></tr>
<tr><td>Canadiens</td><td>7</td><td>2</td><td>0</td><td>2</td><td>1</td><td>1</td><td>1</td><td>23</td><td>18</td><td>4</td><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td><td>1</td><td>12</td><td>10</td><td>3</td><td>1</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>11</td><td>8</td><td>23</td><td>42</td><td>65</td></tr>
<tr><td>Canucks</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>2</td><td>0</td><td>23</td><td>12</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>12</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>11</td><td>7</td><td>23</td><td>39</td><td>62</td></tr>
<tr><td>Capitals</td><td>9</td><td>4</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>22</td><td>21</td><td>5</td><td>3</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>14</td><td>11</td><td>4</td><td>1</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>8</td><td>10</td><td>22</td><td>39</td><td>61</td></tr>
<tr><td>Coyotes</td><td>6</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>21</td><td>18</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>9</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>9</td><td>21</td><td>40</td><td>61</td></tr>
<tr><td>Devils</td><td>7</td><td>3</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>21</td><td>19</td><td>4</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>13</td><td>3</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>8</td><td>6</td><td>21</td><td>35</td><td>56</td></tr>
<tr><td>Ducks</td><td>8</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>2</td><td>27</td><td>24</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>9</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>15</td><td>15</td><td>27</td><td>47</td><td>74</td></tr>
<tr><td>Flames</td><td>8</td><td>6</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>27</td><td>12</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>15</td><td>5</td><td>27</td><td>49</td><td>76</td></tr>
<tr><td>Flyers</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>15</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>5</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>10</td><td>8</td><td>13</td><td>21</td></tr>
<tr><td>Golden Knights</td><td>8</td><td>3</td><td>4</td><td>0</td><td>1</td><td>0</td><td>0</td><td>17</td><td>24</td><td>5</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>14</td><td>3</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>8</td><td>10</td><td>17</td><td>26</td><td>43</td></tr>
<tr><td>Hurricanes</td><td>9</td><td>0</td><td>7</td><td>1</td><td>1</td><td>0</td><td>0</td><td>18</td><td>34</td><td>4</td><td>0</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>9</td><td>12</td><td>5</td><td>0</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>22</td><td>18</td><td>33</td><td>51</td></tr>
<tr><td>Islanders</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>24</td><td>11</td><td>5</td><td>4</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>17</td><td>8</td><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>3</td><td>24</td><td>38</td><td>62</td></tr>
<tr><td>Jets</td><td>9</td><td>6</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>32</td><td>24</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>13</td><td>5</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>11</td><td>32</td><td>56</td><td>88</td></tr>
<tr><td>Kings</td><td>7</td><td>1</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>15</td><td>23</td><td>4</td><td>1</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>10</td><td>11</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>12</td><td>15</td><td>27</td><td>42</td></tr>
<tr><td>Lightning</td><td>7</td><td>2</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>18</td><td>20</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>6</td><td>6</td><td>2</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>13</td><td>14</td><td>18</td><td>31</td><td>49</td></tr>
<tr><td>Maple Leafs</td><td>8</td><td>2</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>23</td><td>5</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>10</td><td>15</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>8</td><td>16</td><td>28</td><td>44</td></tr>
<tr><td>Oilers</td><td>8</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>3</td><td>22</td><td>21</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>11</td><td>10</td><td>4</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>11</td><td>11</td><td>22</td><td>40</td><td>62</td></tr>
<tr><td>Panthers</td><td>7</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>22</td><td>18</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>4</td><td>4</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>13</td><td>14</td><td>22</td><td>41</td><td>63</td></tr>
<tr><td>Penguins</td><td>8</td><td>1</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td><td>30</td><td>6</td><td>1</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>20</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>10</td><td>18</td><td>34</td><td>52</td></tr>
<tr><td>Predators</td><td>7</td><td>4</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>18</td><td>15</td><td>4</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>10</td><td>7</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>8</td><td>18</td><td>29</td><td>47</td></tr>
<tr><td>Rangers</td><td>5</td><td>2</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>13</td><td>11</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>4</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td><td>7</td><td>13</td><td>22</td><td>35</td></tr>
<tr><td>Red Wings</td><td>8</td><td>2</td><td>2</td><td>0</td><td>0</td><td>2</td><td>2</td><td>24</td><td>24</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>13</td><td>9</td><td>5</td><td>0</td><td>2</td><td>0</td><td>0</td><td>1</td><td>2</td><td>11</td><td>15</td><td>24</td><td>37</td><td>61</td></tr>
<tr><td>Sabres</td><td>8</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>23</td><td>15</td><td>4</td><td>1</td><td>1</td><td>0</td><td>2</td><td>0</td><td>0</td><td>10</td><td>10</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>5</td><td>23</td><td>40</td><td>63</td></tr>
<tr><td>Senators</td><td>6</td><td>4</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>11</td><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>8</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>13</td><td>23</td><td>36</td></tr>
<tr><td>Sharks</td><td>7</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>24</td><td>14</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>11</td><td>7</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>7</td><td>24</td><td>46</td><td>70</td></tr>
<tr><td>Stars</td><td>9</td><td>1</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>25</td><td>30</td><td>3</td><td>0</td><td>2</td><td>0</td><td>0</td><td>1</td><td>0</td><td>7</td><td>9</td><td>6</td><td>1</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>18</td><td>21</td><td>25</td><td>43</td><td>68</td></tr>
<tr><td>Wild</td><td>7</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>1</td><td>16</td><td>18</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>0</td><td>6</td><td>1</td><td>4</td><td>0</td><td>0</td><td>0</td><td>1</td><td>13</td><td>18</td><td>16</td><td>28</td><td>44</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Avalanche</td><td>COL</td><td>3</td><td>2</td><td>5</td><td>1</td><td>205</td><td>67</td><td>80</td><td>57</td><td>1</td><td>231</td><td>62</td><td>57</td><td>134</td><td>27</td><td>2</td><td>7.41%</td><td>24</td><td>8</td><td>66.67%</td><td>0</td><td>45.60%</td><td>41.20%</td><td>48.15%</td><td>161</td><td>169</td><td>91</td><td>51</td><td>115</td><td>46</td><td>0</td><td>0</td></tr>
<tr><td>Blackhawks</td><td>CHI</td><td>5</td><td>4</td><td>3</td><td>0</td><td>158</td><td>41</td><td>60</td><td>57</td><td>0</td><td>155</td><td>44</td><td>46</td><td>114</td><td>14</td><td>6</td><td>42.86%</td><td>21</td><td>5</td><td>76.19%</td><td>0</td><td>51.88%</td><td>42.26%</td><td>41.98%</td><td>118</td><td>120</td><td>63</td><td>35</td><td>81</td><td>31</td><td>0</td><td>0</td></tr>
<tr><td>Blue Jackets</td><td>CLB</td><td>6</td><td>4</td><td>8</td><td>0</td><td>171</td><td>66</td><td>58</td><td>47</td><td>0</td><td>250</td><td>63</td><td>60</td><td>168</td><td>19</td><td>4</td><td>21.05%</td><td>28</td><td>3</td><td>89.29%</td><td>0</td><td>40.82%</td><td>40.00%</td><td>35.40%</td><td>180</td><td>153</td><td>88</td><td>54</td><td>104</td><td>43</td><td>0</td><td>0</td></tr>
<tr><td>Blues</td><td>STL</td><td>10</td><td>4</td><td>5</td><td>1</td><td>192</td><td>69</td><td>69</td><td>54</td><td>3</td><td>243</td><td>65</td><td>56</td><td>149</td><td>25</td><td>2</td><td>8.00%</td><td>27</td><td>7</td><td>74.07%</td><td>0</td><td>41.55%</td><td>42.17%</td><td>36.67%</td><td>181</td><td>157</td><td>90</td><td>54</td><td>105</td><td>42</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>BOS</td><td>9</td><td>6</td><td>3</td><td>5</td><td>250</td><td>84</td><td>83</td><td>70</td><td>27</td><td>253</td><td>55</td><td>56</td><td>168</td><td>22</td><td>3</td><td>13.64%</td><td>26</td><td>3</td><td>88.46%</td><td>1</td><td>49.64%</td><td>52.50%</td><td>48.74%</td><td>173</td><td>170</td><td>92</td><td>54</td><td>117</td><td>47</td><td>1</td><td>0</td></tr>
<tr><td>Canadiens</td><td>MTL</td><td>9</td><td>8</td><td>3</td><td>3</td><td>279</td><td>86</td><td>98</td><td>79</td><td>21</td><td>220</td><td>72</td><td>47</td><td>142</td><td>28</td><td>5</td><td>17.86%</td><td>21</td><td>2</td><td>90.48%</td><td>0</td><td>56.49%</td><td>55.19%</td><td>46.55%</td><td>167</td><td>177</td><td>91</td><td>53</td><td>124</td><td>46</td><td>0</td><td>0</td></tr>
<tr><td>Canucks</td><td>VAN</td><td>4</td><td>8</td><td>9</td><td>4</td><td>209</td><td>55</td><td>70</td><td>81</td><td>9</td><td>187</td><td>53</td><td>48</td><td>129</td><td>21</td><td>5</td><td>23.81%</td><td>24</td><td>5</td><td>79.17%</td><td>0</td><td>49.33%</td><td>52.67%</td><td>50.00%</td><td>144</td><td>149</td><td>77</td><td>44</td><td>104</td><td>39</td><td>1</td><td>0</td></tr>
<tr><td>Capitals</td><td>WSH</td><td>10</td><td>9</td><td>2</td><td>1</td><td>289</td><td>98</td><td>103</td><td>87</td><td>1</td><td>284</td><td>77</td><td>54</td><td>178</td><td>26</td><td>4</td><td>15.38%</td><td>25</td><td>4</td><td>84.00%</td><td>0</td><td>49.68%</td><td>51.25%</td><td>49.17%</td><td>210</td><td>218</td><td>114</td><td>64</td><td>152</td><td>58</td><td>0</td><td>0</td></tr>
<tr><td>Coyotes</td><td>ARI</td><td>8</td><td>9</td><td>4</td><td>1</td><td>227</td><td>58</td><td>84</td><td>82</td><td>10</td><td>179</td><td>50</td><td>48</td><td>133</td><td>23</td><td>7</td><td>30.43%</td><td>24</td><td>4</td><td>83.33%</td><td>1</td><td>56.94%</td><td>53.85%</td><td>46.53%</td><td>138</td><td>150</td><td>77</td><td>45</td><td>105</td><td>40</td><td>0</td><td>0</td></tr>
<tr><td>Devils</td><td>NJD</td><td>9</td><td>5</td><td>6</td><td>1</td><td>185</td><td>66</td><td>60</td><td>58</td><td>1</td><td>237</td><td>66</td><td>85</td><td>152</td><td>22</td><td>6</td><td>27.27%</td><td>27</td><td>3</td><td>88.89%</td><td>0</td><td>51.12%</td><td>46.49%</td><td>47.75%</td><td>172</td><td>156</td><td>92</td><td>54</td><td>101</td><td>46</td><td>0</td><td>1</td></tr>
<tr><td>Ducks</td><td>ANH</td><td>12</td><td>7</td><td>8</td><td>3</td><td>280</td><td>84</td><td>93</td><td>98</td><td>12</td><td>261</td><td>66</td><td>72</td><td>148</td><td>28</td><td>3</td><td>10.71%</td><td>21</td><td>5</td><td>76.19%</td><td>3</td><td>50.19%</td><td>52.35%</td><td>46.77%</td><td>186</td><td>201</td><td>103</td><td>58</td><td>141</td><td>51</td><td>0</td><td>0</td></tr>
<tr><td>Flames</td><td>CGY</td><td>10</td><td>9</td><td>7</td><td>1</td><td>292</td><td>113</td><td>94</td><td>81</td><td>7</td><td>257</td><td>63</td><td>91</td><td>186</td><td>36</td><td>5</td><td>13.89%</td><td>36</td><td>5</td><td>86.11%</td><td>0</td><td>51.27%</td><td>48.90%</td><td>63.79%</td><td>190</td><td>196</td><td>99</td><td>59</td><td>138</td><td>52</td><td>2</td><td>0</td></tr>
<tr><td>Flyers</td><td>PHL</td><td>4</td><td>2</td><td>2</td><td>0</td><td>136</td><td>40</td><td>43</td><td>53</td><td>0</td><td>166</td><td>52</td><td>49</td><td>99</td><td>12</td><td>1</td><td>8.33%</td><td>22</td><td>6</td><td>72.73%</td><td>0</td><td>53.04%</td><td>53.70%</td><td>51.28%</td><td>122</td><td>114</td><td>64</td><td>38</td><td>78</td><td>31</td><td>0</td><td>0</td></tr>
<tr><td>Golden Knights</td><td>VGK</td><td>7</td><td>3</td><td>7</td><td>0</td><td>237</td><td>82</td><td>71</td><td>83</td><td>1</td><td>270</td><td>76</td><td>68</td><td>172</td><td>26</td><td>5</td><td>19.23%</td><td>33</td><td>5</td><td>84.85%</td><td>0</td><td>56.29%</td><td>52.79%</td><td>50.82%</td><td>192</td><td>187</td><td>103</td><td>61</td><td>129</td><td>49</td><td>1</td><td>0</td></tr>
<tr><td>Hurricanes</td><td>CAR</td><td>7</td><td>6</td><td>4</td><td>1</td><td>259</td><td>76</td><td>101</td><td>80</td><td>2</td><td>330</td><td>89</td><td>82</td><td>169</td><td>23</td><td>2</td><td>8.70%</td><td>39</td><td>12</td><td>69.23%</td><td>0</td><td>48.73%</td><td>51.04%</td><td>53.79%</td><td>233</td><td>190</td><td>119</td><td>70</td><td>125</td><td>56</td><td>0</td><td>0</td></tr>
<tr><td>Islanders</td><td>NYI</td><td>10</td><td>5</td><td>8</td><td>2</td><td>217</td><td>81</td><td>68</td><td>65</td><td>8</td><td>180</td><td>49</td><td>47</td><td>146</td><td>26</td><td>4</td><td>15.38%</td><td>20</td><td>1</td><td>95.00%</td><td>0</td><td>55.00%</td><td>44.81%</td><td>52.59%</td><td>152</td><td>185</td><td>89</td><td>51</td><td>132</td><td>46</td><td>1</td><td>0</td></tr>
<tr><td>Jets</td><td>WPG</td><td>6</td><td>14</td><td>12</td><td>0</td><td>279</td><td>92</td><td>98</td><td>89</td><td>0</td><td>264</td><td>78</td><td>50</td><td>169</td><td>33</td><td>5</td><td>15.15%</td><td>25</td><td>6</td><td>76.00%</td><td>0</td><td>50.16%</td><td>45.60%</td><td>47.52%</td><td>214</td><td>214</td><td>112</td><td>66</td><td>150</td><td>56</td><td>0</td><td>1</td></tr>
<tr><td>Kings</td><td>LAK</td><td>6</td><td>3</td><td>5</td><td>1</td><td>268</td><td>85</td><td>93</td><td>89</td><td>1</td><td>221</td><td>70</td><td>44</td><td>158</td><td>26</td><td>5</td><td>19.23%</td><td>22</td><td>9</td><td>59.09%</td><td>0</td><td>48.06%</td><td>50.32%</td><td>52.48%</td><td>160</td><td>174</td><td>88</td><td>48</td><td>120</td><td>45</td><td>0</td><td>0</td></tr>
<tr><td>Lightning</td><td>TBL</td><td>3</td><td>7</td><td>7</td><td>1</td><td>237</td><td>76</td><td>85</td><td>75</td><td>1</td><td>219</td><td>87</td><td>42</td><td>132</td><td>23</td><td>6</td><td>26.09%</td><td>21</td><td>4</td><td>80.95%</td><td>0</td><td>47.88%</td><td>50.39%</td><td>47.17%</td><td>174</td><td>159</td><td>88</td><td>54</td><td>110</td><td>42</td><td>0</td><td>0</td></tr>
<tr><td>Maple Leafs</td><td>TOR</td><td>5</td><td>4</td><td>7</td><td>0</td><td>268</td><td>84</td><td>84</td><td>100</td><td>0</td><td>265</td><td>62</td><td>56</td><td>195</td><td>21</td><td>2</td><td>9.52%</td><td>26</td><td>5</td><td>80.77%</td><td>0</td><td>52.53%</td><td>59.47%</td><td>63.16%</td><td>175</td><td>204</td><td>101</td><td>57</td><td>141</td><td>52</td><td>1</td><td>0</td></tr>
<tr><td>Oilers</td><td>EDM</td><td>10</td><td>7</td><td>5</td><td>0</td><td>240</td><td>81</td><td>74</td><td>81</td><td>12</td><td>227</td><td>67</td><td>62</td><td>163</td><td>34</td><td>6</td><td>17.65%</td><td>26</td><td>3</td><td>88.46%</td><td>0</td><td>56.16%</td><td>49.64%</td><td>45.86%</td><td>184</td><td>199</td><td>111</td><td>63</td><td>138</td><td>54</td><td>0</td><td>0</td></tr>
<tr><td>Panthers</td><td>FLA</td><td>9</td><td>7</td><td>6</td><td>1</td><td>190</td><td>72</td><td>48</td><td>69</td><td>6</td><td>217</td><td>84</td><td>60</td><td>151</td><td>27</td><td>5</td><td>18.52%</td><td>24</td><td>5</td><td>79.17%</td><td>0</td><td>52.24%</td><td>44.90%</td><td>55.17%</td><td>168</td><td>167</td><td>89</td><td>53</td><td>112</td><td>45</td><td>0</td><td>0</td></tr>
<tr><td>Penguins</td><td>PIT</td><td>5</td><td>6</td><td>7</td><td>0</td><td>267</td><td>89</td><td>90</td><td>88</td><td>0</td><td>286</td><td>97</td><td>66</td><td>154</td><td>28</td><td>3</td><td>10.71%</td><td>25</td><td>6</td><td>76.00%</td><td>1</td><td>53.08%</td><td>43.39%</td><td>50.39%</td><td>195</td><td>186</td><td>99</td><td>58</td><td>128</td><td>50</td><td>0</td><td>1</td></tr>
<tr><td>Predators</td><td>NSH</td><td>3</td><td>12</td><td>2</td><td>1</td><td>246</td><td>78</td><td>90</td><td>76</td><td>6</td><td>259</td><td>67</td><td>44</td><td>141</td><td>20</td><td>4</td><td>20.00%</td><td>22</td><td>4</td><td>81.82%</td><td>1</td><td>48.29%</td><td>49.25%</td><td>48.57%</td><td>176</td><td>159</td><td>90</td><td>50</td><td>108</td><td>44</td><td>2</td><td>0</td></tr>
<tr><td>Rangers</td><td>NYR</td><td>6</td><td>3</td><td>3</td><td>1</td><td>154</td><td>59</td><td>44</td><td>47</td><td>6</td><td>135</td><td>42</td><td>27</td><td>102</td><td>19</td><td>3</td><td>15.79%</td><td>11</td><td>1</td><td>90.91%</td><td>0</td><td>56.02%</td><td>60.45%</td><td>53.42%</td><td>115</td><td>127</td><td>63</td><td>36</td><td>90</td><td>33</td><td>1</td><td>0</td></tr>
<tr><td>Red Wings</td><td>DET</td><td>8</td><td>5</td><td>9</td><td>5</td><td>277</td><td>81</td><td>85</td><td>102</td><td>21</td><td>305</td><td>83</td><td>64</td><td>145</td><td>28</td><td>5</td><td>17.86%</td><td>31</td><td>3</td><td>90.32%</td><td>1</td><td>44.11%</td><td>45.10%</td><td>48.76%</td><td>207</td><td>190</td><td>103</td><td>60</td><td>130</td><td>51</td><td>0</td><td>0</td></tr>
<tr><td>Sabres</td><td>BUF</td><td>10</td><td>9</td><td>4</td><td>0</td><td>257</td><td>82</td><td>88</td><td>86</td><td>1</td><td>223</td><td>53</td><td>82</td><td>167</td><td>22</td><td>5</td><td>22.73%</td><td>24</td><td>3</td><td>87.50%</td><td>0</td><td>56.63%</td><td>50.99%</td><td>57.94%</td><td>181</td><td>201</td><td>102</td><td>59</td><td>138</td><td>50</td><td>0</td><td>0</td></tr>
<tr><td>Senators</td><td>OTT</td><td>4</td><td>3</td><td>6</td><td>0</td><td>158</td><td>48</td><td>60</td><td>50</td><td>0</td><td>179</td><td>45</td><td>46</td><td>127</td><td>13</td><td>2</td><td>15.38%</td><td>22</td><td>3</td><td>86.36%</td><td>0</td><td>42.73%</td><td>46.67%</td><td>46.15%</td><td>149</td><td>134</td><td>77</td><td>46</td><td>91</td><td>36</td><td>0</td><td>0</td></tr>
<tr><td>Sharks</td><td>SJS</td><td>10</td><td>6</td><td>8</td><td>0</td><td>257</td><td>95</td><td>78</td><td>79</td><td>8</td><td>215</td><td>50</td><td>51</td><td>149</td><td>33</td><td>9</td><td>27.27%</td><td>20</td><td>1</td><td>95.00%</td><td>0</td><td>52.91%</td><td>47.83%</td><td>51.69%</td><td>160</td><td>174</td><td>91</td><td>51</td><td>123</td><td>48</td><td>0</td><td>0</td></tr>
<tr><td>Stars</td><td>DAL</td><td>10</td><td>5</td><td>8</td><td>3</td><td>338</td><td>125</td><td>99</td><td>111</td><td>6</td><td>257</td><td>78</td><td>59</td><td>180</td><td>38</td><td>7</td><td>18.42%</td><td>24</td><td>5</td><td>79.17%</td><td>0</td><td>53.17%</td><td>52.50%</td><td>60.90%</td><td>208</td><td>223</td><td>116</td><td>66</td><td>157</td><td>57</td><td>0</td><td>0</td></tr>
<tr><td>Wild</td><td>MIN</td><td>6</td><td>7</td><td>3</td><td>0</td><td>207</td><td>63</td><td>75</td><td>67</td><td>6</td><td>254</td><td>70</td><td>42</td><td>136</td><td>19</td><td>6</td><td>31.58%</td><td>21</td><td>1</td><td>95.24%</td><td>0</td><td>46.88%</td><td>51.29%</td><td>48.15%</td><td>174</td><td>159</td><td>92</td><td>53</td><td>106</td><td>46</td><td>1</td><td>1</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.73</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canucks</td><td>3.83</td></tr>
<tr><td>2</td><td>Jets</td><td>3.56</td></tr>
<tr><td>3</td><td>Coyotes</td><td>3.50</td></tr>
<tr><td>4</td><td>Sharks</td><td>3.43</td></tr>
<tr><td>5</td><td>Islanders</td><td>3.43</td></tr>
<tr><td>6</td><td>Flames</td><td>3.38</td></tr>
<tr><td>7</td><td>Ducks</td><td>3.38</td></tr>
<tr><td>8</td><td>Canadiens</td><td>3.29</td></tr>
<tr><td>9</td><td>Panthers</td><td>3.14</td></tr>
<tr><td>10</td><td>Red Wings</td><td>3.00</td></tr>
<tr><td>11</td><td>Devils</td><td>3.00</td></tr>
<tr><td>12</td><td>Sabres</td><td>2.88</td></tr>
<tr><td>13</td><td>Bruins</td><td>2.86</td></tr>
<tr><td>14</td><td>Blues</td><td>2.86</td></tr>
<tr><td>15</td><td>Stars</td><td>2.78</td></tr>
<tr><td>16</td><td>Oilers</td><td>2.75</td></tr>
<tr><td>17</td><td>Rangers</td><td>2.60</td></tr>
<tr><td>18</td><td>Predators</td><td>2.57</td></tr>
<tr><td>19</td><td>Lightning</td><td>2.57</td></tr>
<tr><td>20</td><td>Blue Jackets</td><td>2.57</td></tr>
<tr><td>21</td><td>Capitals</td><td>2.44</td></tr>
<tr><td>22</td><td>Blackhawks</td><td>2.40</td></tr>
<tr><td>23</td><td>Wild</td><td>2.29</td></tr>
<tr><td>24</td><td>Penguins</td><td>2.25</td></tr>
<tr><td>25</td><td>Senators</td><td>2.17</td></tr>
<tr><td>26</td><td>Kings</td><td>2.14</td></tr>
<tr><td>27</td><td>Golden Knights</td><td>2.13</td></tr>
<tr><td>28</td><td>Hurricanes</td><td>2.00</td></tr>
<tr><td>29</td><td>Maple Leafs</td><td>2.00</td></tr>
<tr><td>30</td><td>Flyers</td><td>1.60</td></tr>
<tr><td>31</td><td>Avalanche</td><td>1.57</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.73</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Flames</td><td>1.50</td></tr>
<tr><td>2</td><td>Islanders</td><td>1.57</td></tr>
<tr><td>3</td><td>Senators</td><td>1.83</td></tr>
<tr><td>4</td><td>Sabres</td><td>1.88</td></tr>
<tr><td>5</td><td>Canucks</td><td>2.00</td></tr>
<tr><td>6</td><td>Sharks</td><td>2.00</td></tr>
<tr><td>7</td><td>Predators</td><td>2.14</td></tr>
<tr><td>8</td><td>Rangers</td><td>2.20</td></tr>
<tr><td>9</td><td>Capitals</td><td>2.33</td></tr>
<tr><td>10</td><td>Canadiens</td><td>2.57</td></tr>
<tr><td>11</td><td>Panthers</td><td>2.57</td></tr>
<tr><td>12</td><td>Wild</td><td>2.57</td></tr>
<tr><td>13</td><td>Oilers</td><td>2.63</td></tr>
<tr><td>14</td><td>Jets</td><td>2.67</td></tr>
<tr><td>15</td><td>Devils</td><td>2.71</td></tr>
<tr><td>16</td><td>Lightning</td><td>2.86</td></tr>
<tr><td>17</td><td>Bruins</td><td>2.86</td></tr>
<tr><td>18</td><td>Maple Leafs</td><td>2.88</td></tr>
<tr><td>19</td><td>Coyotes</td><td>3.00</td></tr>
<tr><td>20</td><td>Flyers</td><td>3.00</td></tr>
<tr><td>21</td><td>Blackhawks</td><td>3.00</td></tr>
<tr><td>22</td><td>Avalanche</td><td>3.00</td></tr>
<tr><td>23</td><td>Red Wings</td><td>3.00</td></tr>
<tr><td>24</td><td>Golden Knights</td><td>3.00</td></tr>
<tr><td>25</td><td>Ducks</td><td>3.00</td></tr>
<tr><td>26</td><td>Kings</td><td>3.29</td></tr>
<tr><td>27</td><td>Stars</td><td>3.33</td></tr>
<tr><td>28</td><td>Blue Jackets</td><td>3.43</td></tr>
<tr><td>29</td><td>Blues</td><td>3.71</td></tr>
<tr><td>30</td><td>Penguins</td><td>3.75</td></tr>
<tr><td>31</td><td>Hurricanes</td><td>3.78</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Flames</td><td>225.00%</td></tr>
<tr><td>2</td><td>Islanders</td><td>218.18%</td></tr>
<tr><td>3</td><td>Canucks</td><td>191.67%</td></tr>
<tr><td>4</td><td>Sharks</td><td>171.43%</td></tr>
<tr><td>5</td><td>Sabres</td><td>153.33%</td></tr>
<tr><td>6</td><td>Jets</td><td>133.33%</td></tr>
<tr><td>7</td><td>Canadiens</td><td>127.78%</td></tr>
<tr><td>8</td><td>Panthers</td><td>122.22%</td></tr>
<tr><td>9</td><td>Predators</td><td>120.00%</td></tr>
<tr><td>10</td><td>Senators</td><td>118.18%</td></tr>
<tr><td>11</td><td>Rangers</td><td>118.18%</td></tr>
<tr><td>12</td><td>Coyotes</td><td>116.67%</td></tr>
<tr><td>13</td><td>Ducks</td><td>112.50%</td></tr>
<tr><td>14</td><td>Devils</td><td>110.53%</td></tr>
<tr><td>15</td><td>Capitals</td><td>104.76%</td></tr>
<tr><td>16</td><td>Oilers</td><td>104.76%</td></tr>
<tr><td>17</td><td>Red Wings</td><td>100.00%</td></tr>
<tr><td>18</td><td>Bruins</td><td>100.00%</td></tr>
<tr><td>19</td><td>Lightning</td><td>90.00%</td></tr>
<tr><td>20</td><td>Wild</td><td>88.89%</td></tr>
<tr><td>21</td><td>Stars</td><td>83.33%</td></tr>
<tr><td>22</td><td>Blackhawks</td><td>80.00%</td></tr>
<tr><td>23</td><td>Blues</td><td>76.92%</td></tr>
<tr><td>24</td><td>Blue Jackets</td><td>75.00%</td></tr>
<tr><td>25</td><td>Golden Knights</td><td>70.83%</td></tr>
<tr><td>26</td><td>Maple Leafs</td><td>69.57%</td></tr>
<tr><td>27</td><td>Kings</td><td>65.22%</td></tr>
<tr><td>28</td><td>Penguins</td><td>60.00%</td></tr>
<tr><td>29</td><td>Flyers</td><td>53.33%</td></tr>
<tr><td>30</td><td>Hurricanes</td><td>52.94%</td></tr>
<tr><td>31</td><td>Avalanche</td><td>52.38%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 17.98%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>42.86%</td></tr>
<tr><td>2</td><td>Wild</td><td>31.58%</td></tr>
<tr><td>3</td><td>Coyotes</td><td>30.43%</td></tr>
<tr><td>4</td><td>Sharks</td><td>27.27%</td></tr>
<tr><td>5</td><td>Devils</td><td>27.27%</td></tr>
<tr><td>6</td><td>Lightning</td><td>26.09%</td></tr>
<tr><td>7</td><td>Canucks</td><td>23.81%</td></tr>
<tr><td>8</td><td>Sabres</td><td>22.73%</td></tr>
<tr><td>9</td><td>Blue Jackets</td><td>21.05%</td></tr>
<tr><td>10</td><td>Predators</td><td>20.00%</td></tr>
<tr><td>11</td><td>Golden Knights</td><td>19.23%</td></tr>
<tr><td>12</td><td>Kings</td><td>19.23%</td></tr>
<tr><td>13</td><td>Panthers</td><td>18.52%</td></tr>
<tr><td>14</td><td>Stars</td><td>18.42%</td></tr>
<tr><td>15</td><td>Canadiens</td><td>17.86%</td></tr>
<tr><td>16</td><td>Red Wings</td><td>17.86%</td></tr>
<tr><td>17</td><td>Oilers</td><td>17.65%</td></tr>
<tr><td>18</td><td>Rangers</td><td>15.79%</td></tr>
<tr><td>19</td><td>Capitals</td><td>15.38%</td></tr>
<tr><td>20</td><td>Islanders</td><td>15.38%</td></tr>
<tr><td>21</td><td>Senators</td><td>15.38%</td></tr>
<tr><td>22</td><td>Jets</td><td>15.15%</td></tr>
<tr><td>23</td><td>Flames</td><td>13.89%</td></tr>
<tr><td>24</td><td>Bruins</td><td>13.64%</td></tr>
<tr><td>25</td><td>Penguins</td><td>10.71%</td></tr>
<tr><td>26</td><td>Ducks</td><td>10.71%</td></tr>
<tr><td>27</td><td>Maple Leafs</td><td>9.52%</td></tr>
<tr><td>28</td><td>Hurricanes</td><td>8.70%</td></tr>
<tr><td>29</td><td>Flyers</td><td>8.33%</td></tr>
<tr><td>30</td><td>Blues</td><td>8.00%</td></tr>
<tr><td>31</td><td>Avalanche</td><td>7.41%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 82.02%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wild</td><td>95.24%</td></tr>
<tr><td>2</td><td>Sharks</td><td>95.00%</td></tr>
<tr><td>3</td><td>Islanders</td><td>95.00%</td></tr>
<tr><td>4</td><td>Rangers</td><td>90.91%</td></tr>
<tr><td>5</td><td>Canadiens</td><td>90.48%</td></tr>
<tr><td>6</td><td>Red Wings</td><td>90.32%</td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>89.29%</td></tr>
<tr><td>8</td><td>Devils</td><td>88.89%</td></tr>
<tr><td>9</td><td>Oilers</td><td>88.46%</td></tr>
<tr><td>10</td><td>Bruins</td><td>88.46%</td></tr>
<tr><td>11</td><td>Sabres</td><td>87.50%</td></tr>
<tr><td>12</td><td>Senators</td><td>86.36%</td></tr>
<tr><td>13</td><td>Flames</td><td>86.11%</td></tr>
<tr><td>14</td><td>Golden Knights</td><td>84.85%</td></tr>
<tr><td>15</td><td>Capitals</td><td>84.00%</td></tr>
<tr><td>16</td><td>Coyotes</td><td>83.33%</td></tr>
<tr><td>17</td><td>Predators</td><td>81.82%</td></tr>
<tr><td>18</td><td>Lightning</td><td>80.95%</td></tr>
<tr><td>19</td><td>Maple Leafs</td><td>80.77%</td></tr>
<tr><td>20</td><td>Stars</td><td>79.17%</td></tr>
<tr><td>21</td><td>Panthers</td><td>79.17%</td></tr>
<tr><td>22</td><td>Canucks</td><td>79.17%</td></tr>
<tr><td>23</td><td>Ducks</td><td>76.19%</td></tr>
<tr><td>24</td><td>Blackhawks</td><td>76.19%</td></tr>
<tr><td>25</td><td>Jets</td><td>76.00%</td></tr>
<tr><td>26</td><td>Penguins</td><td>76.00%</td></tr>
<tr><td>27</td><td>Blues</td><td>74.07%</td></tr>
<tr><td>28</td><td>Flyers</td><td>72.73%</td></tr>
<tr><td>29</td><td>Hurricanes</td><td>69.23%</td></tr>
<tr><td>30</td><td>Avalanche</td><td>66.67%</td></tr>
<tr><td>31</td><td>Kings</td><td>59.09%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wild</td><td>126.82%</td></tr>
<tr><td>2</td><td>Sharks</td><td>122.27%</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>119.05%</td></tr>
<tr><td>4</td><td>Devils</td><td>116.16%</td></tr>
<tr><td>5</td><td>Coyotes</td><td>113.77%</td></tr>
<tr><td>6</td><td>Islanders</td><td>110.38%</td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>110.34%</td></tr>
<tr><td>8</td><td>Sabres</td><td>110.23%</td></tr>
<tr><td>9</td><td>Canadiens</td><td>108.33%</td></tr>
<tr><td>10</td><td>Red Wings</td><td>108.18%</td></tr>
<tr><td>11</td><td>Lightning</td><td>107.04%</td></tr>
<tr><td>12</td><td>Rangers</td><td>106.70%</td></tr>
<tr><td>13</td><td>Oilers</td><td>106.11%</td></tr>
<tr><td>14</td><td>Golden Knights</td><td>104.08%</td></tr>
<tr><td>15</td><td>Canucks</td><td>102.98%</td></tr>
<tr><td>16</td><td>Bruins</td><td>102.10%</td></tr>
<tr><td>17</td><td>Predators</td><td>101.82%</td></tr>
<tr><td>18</td><td>Senators</td><td>101.75%</td></tr>
<tr><td>19</td><td>Flames</td><td>100.00%</td></tr>
<tr><td>20</td><td>Capitals</td><td>99.38%</td></tr>
<tr><td>21</td><td>Panthers</td><td>97.69%</td></tr>
<tr><td>22</td><td>Stars</td><td>97.59%</td></tr>
<tr><td>23</td><td>Jets</td><td>91.15%</td></tr>
<tr><td>24</td><td>Maple Leafs</td><td>90.29%</td></tr>
<tr><td>25</td><td>Ducks</td><td>86.90%</td></tr>
<tr><td>26</td><td>Penguins</td><td>86.71%</td></tr>
<tr><td>27</td><td>Blues</td><td>82.07%</td></tr>
<tr><td>28</td><td>Flyers</td><td>81.06%</td></tr>
<tr><td>29</td><td>Kings</td><td>78.32%</td></tr>
<tr><td>30</td><td>Hurricanes</td><td>77.93%</td></tr>
<tr><td>31</td><td>Avalanche</td><td>74.07%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32.27</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Canadiens</td><td>39.86</td></tr>
<tr><td>2</td><td>Kings</td><td>38.29</td></tr>
<tr><td>3</td><td>Coyotes</td><td>37.83</td></tr>
<tr><td>4</td><td>Stars</td><td>37.56</td></tr>
<tr><td>5</td><td>Sharks</td><td>36.71</td></tr>
<tr><td>6</td><td>Flames</td><td>36.50</td></tr>
<tr><td>7</td><td>Bruins</td><td>35.71</td></tr>
<tr><td>8</td><td>Predators</td><td>35.14</td></tr>
<tr><td>9</td><td>Ducks</td><td>35.00</td></tr>
<tr><td>10</td><td>Canucks</td><td>34.83</td></tr>
<tr><td>11</td><td>Red Wings</td><td>34.63</td></tr>
<tr><td>12</td><td>Lightning</td><td>33.86</td></tr>
<tr><td>13</td><td>Maple Leafs</td><td>33.50</td></tr>
<tr><td>14</td><td>Penguins</td><td>33.38</td></tr>
<tr><td>15</td><td>Sabres</td><td>32.13</td></tr>
<tr><td>16</td><td>Capitals</td><td>32.11</td></tr>
<tr><td>17</td><td>Blackhawks</td><td>31.60</td></tr>
<tr><td>18</td><td>Jets</td><td>31.00</td></tr>
<tr><td>19</td><td>Islanders</td><td>31.00</td></tr>
<tr><td>20</td><td>Rangers</td><td>30.80</td></tr>
<tr><td>21</td><td>Oilers</td><td>30.00</td></tr>
<tr><td>22</td><td>Golden Knights</td><td>29.63</td></tr>
<tr><td>23</td><td>Wild</td><td>29.57</td></tr>
<tr><td>24</td><td>Avalanche</td><td>29.29</td></tr>
<tr><td>25</td><td>Hurricanes</td><td>28.78</td></tr>
<tr><td>26</td><td>Blues</td><td>27.43</td></tr>
<tr><td>27</td><td>Flyers</td><td>27.20</td></tr>
<tr><td>28</td><td>Panthers</td><td>27.14</td></tr>
<tr><td>29</td><td>Devils</td><td>26.43</td></tr>
<tr><td>30</td><td>Senators</td><td>26.33</td></tr>
<tr><td>31</td><td>Blue Jackets</td><td>24.43</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 32.27</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Islanders</td><td>25.71</td></tr>
<tr><td>2</td><td>Rangers</td><td>27.00</td></tr>
<tr><td>3</td><td>Sabres</td><td>27.88</td></tr>
<tr><td>4</td><td>Oilers</td><td>28.38</td></tr>
<tr><td>5</td><td>Stars</td><td>28.56</td></tr>
<tr><td>6</td><td>Jets</td><td>29.33</td></tr>
<tr><td>7</td><td>Coyotes</td><td>29.83</td></tr>
<tr><td>8</td><td>Senators</td><td>29.83</td></tr>
<tr><td>9</td><td>Sharks</td><td>30.71</td></tr>
<tr><td>10</td><td>Blackhawks</td><td>31.00</td></tr>
<tr><td>11</td><td>Panthers</td><td>31.00</td></tr>
<tr><td>12</td><td>Canucks</td><td>31.17</td></tr>
<tr><td>13</td><td>Lightning</td><td>31.29</td></tr>
<tr><td>14</td><td>Canadiens</td><td>31.43</td></tr>
<tr><td>15</td><td>Capitals</td><td>31.56</td></tr>
<tr><td>16</td><td>Kings</td><td>31.57</td></tr>
<tr><td>17</td><td>Flames</td><td>32.13</td></tr>
<tr><td>18</td><td>Ducks</td><td>32.63</td></tr>
<tr><td>19</td><td>Avalanche</td><td>33.00</td></tr>
<tr><td>20</td><td>Maple Leafs</td><td>33.13</td></tr>
<tr><td>21</td><td>Flyers</td><td>33.20</td></tr>
<tr><td>22</td><td>Golden Knights</td><td>33.75</td></tr>
<tr><td>23</td><td>Devils</td><td>33.86</td></tr>
<tr><td>24</td><td>Blues</td><td>34.71</td></tr>
<tr><td>25</td><td>Blue Jackets</td><td>35.71</td></tr>
<tr><td>26</td><td>Penguins</td><td>35.75</td></tr>
<tr><td>27</td><td>Bruins</td><td>36.14</td></tr>
<tr><td>28</td><td>Wild</td><td>36.29</td></tr>
<tr><td>29</td><td>Hurricanes</td><td>36.67</td></tr>
<tr><td>30</td><td>Predators</td><td>37.00</td></tr>
<tr><td>31</td><td>Red Wings</td><td>38.13</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Stars</td><td>131.52%</td></tr>
<tr><td>2</td><td>Canadiens</td><td>126.82%</td></tr>
<tr><td>3</td><td>Coyotes</td><td>126.82%</td></tr>
<tr><td>4</td><td>Kings</td><td>121.27%</td></tr>
<tr><td>5</td><td>Islanders</td><td>120.56%</td></tr>
<tr><td>6</td><td>Sharks</td><td>119.53%</td></tr>
<tr><td>7</td><td>Sabres</td><td>115.25%</td></tr>
<tr><td>8</td><td>Rangers</td><td>114.07%</td></tr>
<tr><td>9</td><td>Flames</td><td>113.62%</td></tr>
<tr><td>10</td><td>Canucks</td><td>111.76%</td></tr>
<tr><td>11</td><td>Lightning</td><td>108.22%</td></tr>
<tr><td>12</td><td>Ducks</td><td>107.28%</td></tr>
<tr><td>13</td><td>Oilers</td><td>105.73%</td></tr>
<tr><td>14</td><td>Jets</td><td>105.68%</td></tr>
<tr><td>15</td><td>Blackhawks</td><td>101.94%</td></tr>
<tr><td>16</td><td>Capitals</td><td>101.76%</td></tr>
<tr><td>17</td><td>Maple Leafs</td><td>101.13%</td></tr>
<tr><td>18</td><td>Bruins</td><td>98.81%</td></tr>
<tr><td>19</td><td>Predators</td><td>94.98%</td></tr>
<tr><td>20</td><td>Penguins</td><td>93.36%</td></tr>
<tr><td>21</td><td>Red Wings</td><td>90.82%</td></tr>
<tr><td>22</td><td>Avalanche</td><td>88.74%</td></tr>
<tr><td>23</td><td>Senators</td><td>88.27%</td></tr>
<tr><td>24</td><td>Golden Knights</td><td>87.78%</td></tr>
<tr><td>25</td><td>Panthers</td><td>87.56%</td></tr>
<tr><td>26</td><td>Flyers</td><td>81.93%</td></tr>
<tr><td>27</td><td>Wild</td><td>81.50%</td></tr>
<tr><td>28</td><td>Blues</td><td>79.01%</td></tr>
<tr><td>29</td><td>Hurricanes</td><td>78.48%</td></tr>
<tr><td>30</td><td>Devils</td><td>78.06%</td></tr>
<tr><td>31</td><td>Blue Jackets</td><td>68.40%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7.86</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Rangers</td><td>5.40</td></tr>
<tr><td>2</td><td>Jets</td><td>5.56</td></tr>
<tr><td>3</td><td>Lightning</td><td>6.00</td></tr>
<tr><td>4</td><td>Wild</td><td>6.00</td></tr>
<tr><td>5</td><td>Capitals</td><td>6.00</td></tr>
<tr><td>6</td><td>Kings</td><td>6.29</td></tr>
<tr><td>7</td><td>Predators</td><td>6.29</td></tr>
<tr><td>8</td><td>Stars</td><td>6.56</td></tr>
<tr><td>9</td><td>Canadiens</td><td>6.71</td></tr>
<tr><td>10</td><td>Islanders</td><td>6.71</td></tr>
<tr><td>11</td><td>Maple Leafs</td><td>7.00</td></tr>
<tr><td>12</td><td>Sharks</td><td>7.29</td></tr>
<tr><td>13</td><td>Senators</td><td>7.67</td></tr>
<tr><td>14</td><td>Oilers</td><td>7.75</td></tr>
<tr><td>15</td><td>Red Wings</td><td>8.00</td></tr>
<tr><td>16</td><td>Bruins</td><td>8.00</td></tr>
<tr><td>17</td><td>Canucks</td><td>8.00</td></tr>
<tr><td>18</td><td>Coyotes</td><td>8.00</td></tr>
<tr><td>19</td><td>Blues</td><td>8.00</td></tr>
<tr><td>20</td><td>Avalanche</td><td>8.14</td></tr>
<tr><td>21</td><td>Penguins</td><td>8.25</td></tr>
<tr><td>22</td><td>Golden Knights</td><td>8.50</td></tr>
<tr><td>23</td><td>Blue Jackets</td><td>8.57</td></tr>
<tr><td>24</td><td>Panthers</td><td>8.57</td></tr>
<tr><td>25</td><td>Ducks</td><td>9.00</td></tr>
<tr><td>26</td><td>Hurricanes</td><td>9.11</td></tr>
<tr><td>27</td><td>Blackhawks</td><td>9.20</td></tr>
<tr><td>28</td><td>Flyers</td><td>9.80</td></tr>
<tr><td>29</td><td>Sabres</td><td>10.25</td></tr>
<tr><td>30</td><td>Flames</td><td>11.38</td></tr>
<tr><td>31</td><td>Devils</td><td>12.14</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20.79</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Maple Leafs</td><td>24.38</td></tr>
<tr><td>2</td><td>Bruins</td><td>24.00</td></tr>
<tr><td>3</td><td>Blue Jackets</td><td>24.00</td></tr>
<tr><td>4</td><td>Flames</td><td>23.25</td></tr>
<tr><td>5</td><td>Blackhawks</td><td>22.80</td></tr>
<tr><td>6</td><td>Kings</td><td>22.57</td></tr>
<tr><td>7</td><td>Coyotes</td><td>22.17</td></tr>
<tr><td>8</td><td>Devils</td><td>21.71</td></tr>
<tr><td>9</td><td>Panthers</td><td>21.57</td></tr>
<tr><td>10</td><td>Golden Knights</td><td>21.50</td></tr>
<tr><td>11</td><td>Canucks</td><td>21.50</td></tr>
<tr><td>12</td><td>Sharks</td><td>21.29</td></tr>
<tr><td>13</td><td>Blues</td><td>21.29</td></tr>
<tr><td>14</td><td>Senators</td><td>21.17</td></tr>
<tr><td>15</td><td>Sabres</td><td>20.88</td></tr>
<tr><td>16</td><td>Islanders</td><td>20.86</td></tr>
<tr><td>17</td><td>Rangers</td><td>20.40</td></tr>
<tr><td>18</td><td>Oilers</td><td>20.38</td></tr>
<tr><td>19</td><td>Canadiens</td><td>20.29</td></tr>
<tr><td>20</td><td>Predators</td><td>20.14</td></tr>
<tr><td>21</td><td>Stars</td><td>20.00</td></tr>
<tr><td>22</td><td>Flyers</td><td>19.80</td></tr>
<tr><td>23</td><td>Capitals</td><td>19.78</td></tr>
<tr><td>24</td><td>Wild</td><td>19.43</td></tr>
<tr><td>25</td><td>Penguins</td><td>19.25</td></tr>
<tr><td>26</td><td>Avalanche</td><td>19.14</td></tr>
<tr><td>27</td><td>Lightning</td><td>18.86</td></tr>
<tr><td>28</td><td>Jets</td><td>18.78</td></tr>
<tr><td>29</td><td>Hurricanes</td><td>18.78</td></tr>
<tr><td>30</td><td>Ducks</td><td>18.50</td></tr>
<tr><td>31</td><td>Red Wings</td><td>18.13</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Rangers</td><td>57.45%</td></tr>
<tr><td>2</td><td>Maple Leafs</td><td>57.16%</td></tr>
<tr><td>3</td><td>Sabres</td><td>54.35%</td></tr>
<tr><td>4</td><td>Canadiens</td><td>54.23%</td></tr>
<tr><td>5</td><td>Stars</td><td>54.18%</td></tr>
<tr><td>6</td><td>Golden Knights</td><td>54.02%</td></tr>
<tr><td>7</td><td>Coyotes</td><td>53.68%</td></tr>
<tr><td>8</td><td>Flyers</td><td>52.97%</td></tr>
<tr><td>9</td><td>Flames</td><td>52.20%</td></tr>
<tr><td>10</td><td>Oilers</td><td>51.53%</td></tr>
<tr><td>11</td><td>Canucks</td><td>50.87%</td></tr>
<tr><td>12</td><td>Bruins</td><td>50.66%</td></tr>
<tr><td>13</td><td>Hurricanes</td><td>50.51%</td></tr>
<tr><td>14</td><td>Ducks</td><td>50.51%</td></tr>
<tr><td>15</td><td>Islanders</td><td>50.42%</td></tr>
<tr><td>16</td><td>Sharks</td><td>50.41%</td></tr>
<tr><td>17</td><td>Capitals</td><td>50.27%</td></tr>
<tr><td>18</td><td>Panthers</td><td>49.83%</td></tr>
<tr><td>19</td><td>Kings</td><td>49.78%</td></tr>
<tr><td>20</td><td>Wild</td><td>48.83%</td></tr>
<tr><td>21</td><td>Lightning</td><td>48.80%</td></tr>
<tr><td>22</td><td>Devils</td><td>48.76%</td></tr>
<tr><td>23</td><td>Predators</td><td>48.74%</td></tr>
<tr><td>24</td><td>Penguins</td><td>48.60%</td></tr>
<tr><td>25</td><td>Jets</td><td>47.81%</td></tr>
<tr><td>26</td><td>Blackhawks</td><td>45.97%</td></tr>
<tr><td>27</td><td>Red Wings</td><td>45.26%</td></tr>
<tr><td>28</td><td>Senators</td><td>44.81%</td></tr>
<tr><td>29</td><td>Avalanche</td><td>44.24%</td></tr>
<tr><td>30</td><td>Blues</td><td>40.85%</td></tr>
<tr><td>31</td><td>Blue Jackets</td><td>39.48%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
