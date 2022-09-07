﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Leaders</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.1.6.6" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(3){display:none;}
}
@media screen and (max-width: 1060px) {
.STHSScoring_PlayersTable1 tbody td:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(8){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(8){display:none;}
}
@media screen and (max-width: 960px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(3){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(4){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(4){display:none;}
}
@media screen and (max-width: 890px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(13){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(13){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(15){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(15){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(16){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(16){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(5){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(5){display:none;}
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
<script>$(function(){$("table").basictablesorter()});$(function (){$("table").stickyTableHeaders();});</script>
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tr><td>1</td><td><a href="PlayerReport.php?Player=168">Anthony Duclair (STK)</a></td><td>X</td><td></td><td>8</td><td>12</td><td>14</td><td><b>26</b></td><td>22</td><td>2</td><td>0</td><td>1</td><td>14</td><td>51</td><td>16</td><td>40</td><td>23.53%</td><td>3</td><td>175</td><td>21.89</td><td>0</td><td>2</td><td>2</td><td>2</td><td>21</td><td>0</td><td>0</td><td>0</td><td>0</td><td>9</td></tr>
<tr><td>2</td><td><a href="PlayerReport.php?Player=127">Andre Burakovsky (STK)</a></td><td>X</td><td></td><td>8</td><td>11</td><td>12</td><td><b>23</b></td><td>22</td><td>2</td><td>0</td><td>11</td><td>11</td><td>54</td><td>17</td><td>43</td><td>20.37%</td><td>3</td><td>168</td><td>20.97</td><td>1</td><td>0</td><td>1</td><td>3</td><td>22</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>3</td><td><a href="PlayerReport.php?Player=597">John Quenneville (R) (MAN)</a></td><td>X</td><td></td><td>9</td><td>14</td><td>7</td><td><b>21</b></td><td>13</td><td>10</td><td>0</td><td>28</td><td>24</td><td>69</td><td>21</td><td>48</td><td>20.29%</td><td>5</td><td>173</td><td>19.18</td><td>0</td><td>4</td><td>4</td><td>5</td><td>9</td><td>0</td><td>0</td><td>0</td><td>2</td><td>12</td></tr>
<tr><td>4</td><td><a href="PlayerReport.php?Player=646">Jack Roslovic (STK)</a></td><td>X</td><td></td><td>8</td><td>4</td><td>16</td><td><b>20</b></td><td>18</td><td>0</td><td>0</td><td>7</td><td>12</td><td>29</td><td>3</td><td>21</td><td>13.79%</td><td>1</td><td>146</td><td>18.29</td><td>0</td><td>0</td><td>0</td><td>2</td><td>22</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td></tr>
<tr><td>5</td><td><a href="PlayerReport.php?Player=491">Nick Schmaltz (BKR)</a></td><td>X</td><td></td><td>8</td><td>9</td><td>10</td><td><b>19</b></td><td>11</td><td>4</td><td>0</td><td>1</td><td>6</td><td>39</td><td>12</td><td>23</td><td>23.08%</td><td>1</td><td>187</td><td>23.43</td><td>2</td><td>2</td><td>4</td><td>6</td><td>19</td><td>0</td><td>0</td><td>0</td><td>2</td><td>29</td></tr>
<tr><td>6</td><td><a href="PlayerReport.php?Player=420">Taro Hirose (R) (STK)</a></td><td>X</td><td></td><td>8</td><td>2</td><td>17</td><td><b>19</b></td><td>17</td><td>2</td><td>0</td><td>1</td><td>10</td><td>41</td><td>9</td><td>27</td><td>4.88%</td><td>1</td><td>155</td><td>19.32</td><td>0</td><td>2</td><td>2</td><td>2</td><td>20</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td></tr>
<tr><td>7</td><td><a href="PlayerReport.php?Player=819">Clark Bishop (R) (MAN)</a></td><td>X</td><td></td><td>9</td><td>15</td><td>3</td><td><b>18</b></td><td>13</td><td>23</td><td>5</td><td>28</td><td>26</td><td>75</td><td>22</td><td>46</td><td>20.00%</td><td>0</td><td>149</td><td>16.60</td><td>2</td><td>0</td><td>2</td><td>12</td><td>11</td><td>0</td><td>0</td><td>0</td><td>1</td><td>12</td></tr>
<tr><td>8</td><td><a href="PlayerReport.php?Player=37">Andrei Svechnikov (R) (CHI)</a></td><td>X</td><td></td><td>7</td><td>11</td><td>7</td><td><b>18</b></td><td>12</td><td>2</td><td>0</td><td>11</td><td>9</td><td>33</td><td>10</td><td>30</td><td>33.33%</td><td>0</td><td>127</td><td>18.12</td><td>3</td><td>1</td><td>4</td><td>5</td><td>14</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td></tr>
<tr><td>9</td><td><a href="PlayerReport.php?Player=133">Christoffer Ehn (R) (STK)</a></td><td>X</td><td></td><td>8</td><td>7</td><td>11</td><td><b>18</b></td><td>16</td><td>2</td><td>0</td><td>9</td><td>22</td><td>45</td><td>14</td><td>27</td><td>15.56%</td><td>7</td><td>156</td><td>19.48</td><td>2</td><td>0</td><td>2</td><td>4</td><td>18</td><td>1</td><td>0</td><td>1</td><td>2</td><td>15</td></tr>
<tr><td>10</td><td><a href="PlayerReport.php?Player=1006">Jeremy Bracco (R) (TOR)</a></td><td>X</td><td></td><td>8</td><td>7</td><td>11</td><td><b>18</b></td><td>15</td><td>2</td><td>0</td><td>5</td><td>19</td><td>38</td><td>10</td><td>33</td><td>18.42%</td><td>4</td><td>163</td><td>20.41</td><td>0</td><td>1</td><td>1</td><td>2</td><td>14</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td></tr>
<tr><td>11</td><td><a href="PlayerReport.php?Player=297">Drake Batherson (R) (CHI)</a></td><td>X</td><td></td><td>7</td><td>6</td><td>12</td><td><b>18</b></td><td>15</td><td>0</td><td>0</td><td>4</td><td>13</td><td>44</td><td>13</td><td>24</td><td>13.64%</td><td>0</td><td>130</td><td>18.62</td><td>0</td><td>3</td><td>3</td><td>5</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td></tr>
<tr><td>12</td><td><a href="PlayerReport.php?Player=149">Kyle Rau (STK)</a></td><td>X</td><td></td><td>8</td><td>8</td><td>9</td><td><b>17</b></td><td>18</td><td>0</td><td>0</td><td>7</td><td>11</td><td>55</td><td>16</td><td>47</td><td>14.55%</td><td>0</td><td>169</td><td>21.18</td><td>1</td><td>2</td><td>3</td><td>9</td><td>20</td><td>0</td><td>0</td><td>0</td><td>1</td><td>14</td></tr>
<tr><td>13</td><td><a href="PlayerReport.php?Player=601">Brian Strait (MAN)</a></td><td></td><td>X</td><td>9</td><td>5</td><td>12</td><td><b>17</b></td><td>12</td><td>13</td><td>5</td><td>25</td><td>13</td><td>28</td><td>12</td><td>25</td><td>17.86%</td><td>9</td><td>161</td><td>17.91</td><td>1</td><td>1</td><td>2</td><td>7</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>15</td></tr>
<tr><td>14</td><td><a href="PlayerReport.php?Player=759">Trevor Moore (R) (PRO)</a></td><td>X</td><td></td><td>7</td><td>9</td><td>7</td><td><b>16</b></td><td>12</td><td>2</td><td>0</td><td>4</td><td>6</td><td>34</td><td>7</td><td>26</td><td>26.47%</td><td>0</td><td>130</td><td>18.62</td><td>1</td><td>3</td><td>4</td><td>7</td><td>14</td><td>0</td><td>0</td><td>0</td><td>3</td><td>30</td></tr>
<tr><td>15</td><td><a href="PlayerReport.php?Player=1694">Brad Malone (STK)</a></td><td>X</td><td></td><td>8</td><td>9</td><td>7</td><td><b>16</b></td><td>18</td><td>2</td><td>0</td><td>13</td><td>12</td><td>67</td><td>15</td><td>26</td><td>13.43%</td><td>0</td><td>141</td><td>17.59</td><td>0</td><td>0</td><td>0</td><td>1</td><td>5</td><td>0</td><td>0</td><td>0</td><td>3</td><td>6</td></tr>
<tr><td>16</td><td><a href="PlayerReport.php?Player=2524">Curtis McKenzie (LAV)</a></td><td>X</td><td></td><td>7</td><td>8</td><td>8</td><td><b>16</b></td><td>13</td><td>4</td><td>0</td><td>18</td><td>10</td><td>45</td><td>14</td><td>25</td><td>17.78%</td><td>0</td><td>165</td><td>23.61</td><td>1</td><td>0</td><td>1</td><td>3</td><td>16</td><td>0</td><td>0</td><td>0</td><td>3</td><td>28</td></tr>
<tr><td>17</td><td><a href="PlayerReport.php?Player=207">Lukas Radil (R) (TOR)</a></td><td>X</td><td></td><td>8</td><td>6</td><td>10</td><td><b>16</b></td><td>15</td><td>0</td><td>0</td><td>4</td><td>7</td><td>42</td><td>14</td><td>34</td><td>14.29%</td><td>5</td><td>152</td><td>18.95</td><td>0</td><td>0</td><td>0</td><td>1</td><td>13</td><td>0</td><td>0</td><td>0</td><td>3</td><td>9</td></tr>
<tr><td>18</td><td><a href="PlayerReport.php?Player=661">Luke Kunin (R) (BKR)</a></td><td>X</td><td></td><td>8</td><td>3</td><td>13</td><td><b>16</b></td><td>12</td><td>15</td><td>5</td><td>20</td><td>5</td><td>29</td><td>8</td><td>20</td><td>10.34%</td><td>3</td><td>162</td><td>20.28</td><td>0</td><td>2</td><td>2</td><td>3</td><td>18</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td></tr>
<tr><td>19</td><td><a href="PlayerReport.php?Player=703">Matthew Highmore (STK)</a></td><td>X</td><td></td><td>8</td><td>9</td><td>6</td><td><b>15</b></td><td>15</td><td>0</td><td>0</td><td>4</td><td>9</td><td>45</td><td>10</td><td>29</td><td>20.00%</td><td>1</td><td>126</td><td>15.75</td><td>1</td><td>0</td><td>1</td><td>1</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>20</td><td><a href="PlayerReport.php?Player=636">Trevor Smith (ROC)</a></td><td>X</td><td></td><td>8</td><td>8</td><td>7</td><td><b>15</b></td><td>15</td><td>4</td><td>0</td><td>8</td><td>10</td><td>44</td><td>11</td><td>30</td><td>18.18%</td><td>1</td><td>146</td><td>18.30</td><td>2</td><td>0</td><td>2</td><td>6</td><td>14</td><td>1</td><td>0</td><td>1</td><td>1</td><td>11</td></tr>
<tr><td>21</td><td><a href="PlayerReport.php?Player=2">Dominik Kahun (R) (CHR)</a></td><td>X</td><td></td><td>8</td><td>7</td><td>8</td><td><b>15</b></td><td>11</td><td>0</td><td>0</td><td>4</td><td>21</td><td>31</td><td>10</td><td>32</td><td>22.58%</td><td>3</td><td>178</td><td>22.22</td><td>0</td><td>1</td><td>1</td><td>4</td><td>25</td><td>0</td><td>1</td><td>1</td><td>1</td><td>26</td></tr>
<tr><td>22</td><td><a href="PlayerReport.php?Player=388">Ashton Sautner (CLE)</a></td><td></td><td>X</td><td>7</td><td>4</td><td>11</td><td><b>15</b></td><td>5</td><td>12</td><td>0</td><td>37</td><td>7</td><td>20</td><td>3</td><td>9</td><td>20.00%</td><td>10</td><td>146</td><td>20.85</td><td>3</td><td>1</td><td>4</td><td>12</td><td>17</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td></tr>
<tr><td>23</td><td><a href="PlayerReport.php?Player=42">Casey Mittelstadt (R) (CHR)</a></td><td>X</td><td></td><td>8</td><td>7</td><td>7</td><td><b>14</b></td><td>14</td><td>2</td><td>0</td><td>6</td><td>7</td><td>27</td><td>5</td><td>18</td><td>25.93%</td><td>1</td><td>142</td><td>17.69</td><td>1</td><td>1</td><td>2</td><td>4</td><td>22</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td></tr>
<tr><td>24</td><td><a href="PlayerReport.php?Player=180">Henrik Borgstrom (R) (LAV)</a></td><td>X</td><td></td><td>7</td><td>6</td><td>8</td><td><b>14</b></td><td>14</td><td>0</td><td>0</td><td>1</td><td>6</td><td>35</td><td>10</td><td>14</td><td>17.14%</td><td>2</td><td>143</td><td>20.38</td><td>0</td><td>1</td><td>1</td><td>3</td><td>15</td><td>0</td><td>0</td><td>0</td><td>1</td><td>29</td></tr>
<tr><td>25</td><td><a href="PlayerReport.php?Player=1288">Steven Lorentz (R) (TOR)</a></td><td>X</td><td></td><td>8</td><td>3</td><td>11</td><td><b>14</b></td><td>14</td><td>9</td><td>5</td><td>16</td><td>8</td><td>25</td><td>7</td><td>16</td><td>12.00%</td><td>5</td><td>142</td><td>17.81</td><td>0</td><td>0</td><td>0</td><td>0</td><td>13</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td></tr>
<tr><td>26</td><td><a href="PlayerReport.php?Player=375">Karson Kuhlman (R) (PRO)</a></td><td>X</td><td></td><td>7</td><td>2</td><td>12</td><td><b>14</b></td><td>12</td><td>4</td><td>0</td><td>2</td><td>11</td><td>25</td><td>11</td><td>24</td><td>8.00%</td><td>1</td><td>135</td><td>19.23</td><td>1</td><td>3</td><td>4</td><td>2</td><td>15</td><td>0</td><td>0</td><td>0</td><td>2</td><td>30</td></tr>
<tr><td>27</td><td><a href="PlayerReport.php?Player=1344">Spencer Smallman (R) (TOR)</a></td><td>X</td><td></td><td>8</td><td>11</td><td>2</td><td><b>13</b></td><td>3</td><td>10</td><td>0</td><td>31</td><td>17</td><td>49</td><td>13</td><td>37</td><td>22.45%</td><td>13</td><td>147</td><td>18.32</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>28</td><td><a href="PlayerReport.php?Player=2647">Turner Elson (ROC)</a></td><td>X</td><td></td><td>8</td><td>8</td><td>5</td><td><b>13</b></td><td>10</td><td>10</td><td>0</td><td>20</td><td>13</td><td>41</td><td>13</td><td>27</td><td>19.51%</td><td>11</td><td>147</td><td>18.41</td><td>1</td><td>0</td><td>1</td><td>2</td><td>7</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td></tr>
<tr><td>29</td><td><a href="PlayerReport.php?Player=120">Anthony Cirelli (BKR)</a></td><td>X</td><td></td><td>6</td><td>7</td><td>6</td><td><b>13</b></td><td>7</td><td>6</td><td>0</td><td>12</td><td>11</td><td>44</td><td>8</td><td>35</td><td>15.91%</td><td>1</td><td>134</td><td>22.29</td><td>1</td><td>3</td><td>4</td><td>4</td><td>16</td><td>0</td><td>0</td><td>0</td><td>2</td><td>21</td></tr>
<tr><td>30</td><td><a href="PlayerReport.php?Player=580">Joshua Ho-Sang (RCK)</a></td><td>X</td><td></td><td>5</td><td>5</td><td>8</td><td><b>13</b></td><td>13</td><td>0</td><td>0</td><td>2</td><td>15</td><td>27</td><td>9</td><td>19</td><td>18.52%</td><td>1</td><td>111</td><td>22.12</td><td>0</td><td>0</td><td>0</td><td>3</td><td>12</td><td>0</td><td>0</td><td>0</td><td>1</td><td>17</td></tr>
<tr><td>31</td><td><a href="PlayerReport.php?Player=357">Vladislav Kamenev (LAV)</a></td><td>X</td><td></td><td>7</td><td>5</td><td>8</td><td><b>13</b></td><td>11</td><td>4</td><td>0</td><td>9</td><td>11</td><td>32</td><td>5</td><td>17</td><td>15.63%</td><td>1</td><td>122</td><td>17.49</td><td>2</td><td>0</td><td>2</td><td>3</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td></tr>
<tr><td>32</td><td><a href="PlayerReport.php?Player=157">Justin Bailey (ROC)</a></td><td>X</td><td></td><td>8</td><td>5</td><td>8</td><td><b>13</b></td><td>12</td><td>0</td><td>0</td><td>0</td><td>5</td><td>24</td><td>3</td><td>17</td><td>20.83%</td><td>2</td><td>117</td><td>14.57</td><td>0</td><td>2</td><td>2</td><td>2</td><td>14</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td></tr>
<tr><td>33</td><td><a href="PlayerReport.php?Player=416">Ross Johnston (ROC)</a></td><td>X</td><td></td><td>8</td><td>4</td><td>9</td><td><b>13</b></td><td>11</td><td>21</td><td>5</td><td>16</td><td>11</td><td>19</td><td>2</td><td>13</td><td>21.05%</td><td>0</td><td>114</td><td>14.25</td><td>0</td><td>2</td><td>2</td><td>0</td><td>14</td><td>0</td><td>1</td><td>1</td><td>0</td><td>9</td></tr>
<tr><td>34</td><td><a href="PlayerReport.php?Player=696">Dryden Hunt (CHI)</a></td><td>X</td><td></td><td>8</td><td>4</td><td>9</td><td><b>13</b></td><td>15</td><td>4</td><td>0</td><td>10</td><td>4</td><td>28</td><td>5</td><td>18</td><td>14.29%</td><td>0</td><td>136</td><td>17.05</td><td>1</td><td>1</td><td>2</td><td>4</td><td>17</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td></tr>
<tr><td>35</td><td><a href="PlayerReport.php?Player=935">Guillaume Brisebois (R) (MAN)</a></td><td></td><td>X</td><td>9</td><td>1</td><td>12</td><td><b>13</b></td><td>9</td><td>4</td><td>0</td><td>18</td><td>5</td><td>14</td><td>8</td><td>12</td><td>7.14%</td><td>9</td><td>184</td><td>20.46</td><td>1</td><td>2</td><td>3</td><td>6</td><td>10</td><td>0</td><td>1</td><td>1</td><td>0</td><td>19</td></tr>
<tr><td>36</td><td><a href="PlayerReport.php?Player=947">Rudolfs Balcers (R) (UTI)</a></td><td>X</td><td></td><td>6</td><td>9</td><td>3</td><td><b>12</b></td><td>10</td><td>0</td><td>0</td><td>0</td><td>3</td><td>26</td><td>7</td><td>8</td><td>34.62%</td><td>0</td><td>86</td><td>14.34</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td></tr>
<tr><td>37</td><td><a href="PlayerReport.php?Player=1725">Jimmy Hayes (TOR)</a></td><td>X</td><td></td><td>8</td><td>9</td><td>3</td><td><b>12</b></td><td>9</td><td>6</td><td>0</td><td>20</td><td>12</td><td>57</td><td>31</td><td>60</td><td>15.79%</td><td>4</td><td>157</td><td>19.65</td><td>1</td><td>0</td><td>1</td><td>1</td><td>15</td><td>0</td><td>0</td><td>0</td><td>2</td><td>16</td></tr>
<tr><td>38</td><td><a href="PlayerReport.php?Player=746">Jacob de La Rose (CHI)</a></td><td>X</td><td></td><td>8</td><td>7</td><td>5</td><td><b>12</b></td><td>9</td><td>0</td><td>0</td><td>9</td><td>12</td><td>42</td><td>16</td><td>34</td><td>16.67%</td><td>3</td><td>134</td><td>16.81</td><td>0</td><td>2</td><td>2</td><td>8</td><td>17</td><td>0</td><td>0</td><td>0</td><td>1</td><td>11</td></tr>
<tr><td>39</td><td><a href="PlayerReport.php?Player=1717">Gabriel Dumont (UTI)</a></td><td>X</td><td></td><td>6</td><td>5</td><td>7</td><td><b>12</b></td><td>10</td><td>0</td><td>0</td><td>2</td><td>12</td><td>18</td><td>9</td><td>24</td><td>27.78%</td><td>2</td><td>113</td><td>18.78</td><td>0</td><td>1</td><td>1</td><td>0</td><td>16</td><td>1</td><td>0</td><td>1</td><td>1</td><td>15</td></tr>
<tr><td>40</td><td><a href="PlayerReport.php?Player=640">Vinni Lettieri (STK)</a></td><td>X</td><td></td><td>8</td><td>5</td><td>7</td><td><b>12</b></td><td>16</td><td>8</td><td>0</td><td>12</td><td>10</td><td>38</td><td>16</td><td>27</td><td>13.16%</td><td>0</td><td>143</td><td>17.92</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>0</td><td>1</td><td>1</td><td>3</td><td>13</td></tr>
<tr><td>41</td><td><a href="PlayerReport.php?Player=140">Valeri Nichushkin (R) (UTI)</a></td><td>X</td><td></td><td>6</td><td>4</td><td>8</td><td><b>12</b></td><td>11</td><td>6</td><td>0</td><td>12</td><td>4</td><td>20</td><td>9</td><td>15</td><td>20.00%</td><td>0</td><td>111</td><td>18.42</td><td>0</td><td>1</td><td>1</td><td>2</td><td>16</td><td>0</td><td>1</td><td>1</td><td>0</td><td>17</td></tr>
<tr><td>42</td><td><a href="PlayerReport.php?Player=574">Jesse Puljujarvi (CHR)</a></td><td>X</td><td></td><td>6</td><td>4</td><td>8</td><td><b>12</b></td><td>11</td><td>6</td><td>0</td><td>5</td><td>8</td><td>20</td><td>7</td><td>14</td><td>20.00%</td><td>1</td><td>99</td><td>16.50</td><td>0</td><td>3</td><td>3</td><td>3</td><td>17</td><td>1</td><td>0</td><td>1</td><td>1</td><td>3</td></tr>
<tr><td>43</td><td><a href="PlayerReport.php?Player=16">Brendan Guhle (SPR)</a></td><td></td><td>X</td><td>7</td><td>2</td><td>10</td><td><b>12</b></td><td>7</td><td>8</td><td>0</td><td>14</td><td>3</td><td>5</td><td>2</td><td>4</td><td>40.00%</td><td>4</td><td>114</td><td>16.25</td><td>2</td><td>1</td><td>3</td><td>4</td><td>15</td><td>0</td><td>0</td><td>0</td><td>0</td><td>12</td></tr>
<tr><td>44</td><td><a href="PlayerReport.php?Player=1992">Luke Gazdic (SAR)</a></td><td>X</td><td></td><td>7</td><td>8</td><td>3</td><td><b>11</b></td><td>5</td><td>6</td><td>0</td><td>31</td><td>12</td><td>46</td><td>14</td><td>33</td><td>17.39%</td><td>10</td><td>106</td><td>15.15</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>45</td><td><a href="PlayerReport.php?Player=645">Kalle Kossila (LAV)</a></td><td>X</td><td></td><td>7</td><td>7</td><td>4</td><td><b>11</b></td><td>12</td><td>8</td><td>0</td><td>8</td><td>13</td><td>37</td><td>8</td><td>17</td><td>18.92%</td><td>0</td><td>139</td><td>19.88</td><td>1</td><td>0</td><td>1</td><td>4</td><td>17</td><td>0</td><td>0</td><td>0</td><td>0</td><td>18</td></tr>
<tr><td>46</td><td><a href="PlayerReport.php?Player=631">Logan Brown (R) (RCK)</a></td><td>X</td><td></td><td>5</td><td>6</td><td>5</td><td><b>11</b></td><td>12</td><td>2</td><td>0</td><td>15</td><td>8</td><td>16</td><td>6</td><td>14</td><td>37.50%</td><td>1</td><td>106</td><td>21.14</td><td>1</td><td>0</td><td>1</td><td>3</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td></tr>
<tr><td>47</td><td><a href="PlayerReport.php?Player=719">Jack Rodewald (CLE)</a></td><td>X</td><td></td><td>7</td><td>6</td><td>5</td><td><b>11</b></td><td>8</td><td>2</td><td>0</td><td>8</td><td>7</td><td>25</td><td>9</td><td>15</td><td>24.00%</td><td>2</td><td>106</td><td>15.16</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>48</td><td><a href="PlayerReport.php?Player=2841">Sonny Milano (SPR)</a></td><td>X</td><td></td><td>5</td><td>4</td><td>7</td><td><b>11</b></td><td>9</td><td>2</td><td>0</td><td>7</td><td>3</td><td>12</td><td>5</td><td>16</td><td>33.33%</td><td>0</td><td>80</td><td>16.10</td><td>0</td><td>1</td><td>1</td><td>2</td><td>12</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td></tr>
<tr><td>49</td><td><a href="PlayerReport.php?Player=883">Tage Thompson (UTI)</a></td><td>X</td><td></td><td>6</td><td>3</td><td>8</td><td><b>11</b></td><td>11</td><td>4</td><td>0</td><td>11</td><td>11</td><td>27</td><td>9</td><td>22</td><td>11.11%</td><td>3</td><td>122</td><td>20.37</td><td>1</td><td>0</td><td>1</td><td>4</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td></tr>
<tr><td>50</td><td><a href="PlayerReport.php?Player=238">Lawrence Pilut (R) (SYR)</a></td><td></td><td>X</td><td>7</td><td>3</td><td>8</td><td><b>11</b></td><td>-2</td><td>10</td><td>0</td><td>9</td><td>8</td><td>8</td><td>4</td><td>9</td><td>37.50%</td><td>8</td><td>133</td><td>18.99</td><td>2</td><td>4</td><td>6</td><td>5</td><td>16</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td></tr>
</table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW25">#</th><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th></tr></thead>
<tr><td>1</td><td><a href="GoalieReport.php?Goalie=47">Ken Appleby (ROC)</a></td><td>8</td><td>8</td><td>0</td><td>0</td><td><b>0.946</b></td><td>1.11</td><td>485</td><td>0</td><td>2</td><td>9</td><td>166</td><td>0</td><td>0</td><td>0</td><td>0.778</td><td>9</td><td>8</td><td>0</td></tr>
<tr><td>2</td><td><a href="GoalieReport.php?Goalie=65">Adin Hill (PRO)</a></td><td>7</td><td>5</td><td>2</td><td>0</td><td><b>0.926</b></td><td>1.13</td><td>424</td><td>0</td><td>2</td><td>8</td><td>108</td><td>0</td><td>0</td><td>0</td><td>1.000</td><td>3</td><td>7</td><td>0</td></tr>
<tr><td>3</td><td><a href="GoalieReport.php?Goalie=339">Oscar Dansk (STK)</a></td><td>8</td><td>8</td><td>0</td><td>0</td><td><b>0.919</b></td><td>1.25</td><td>480</td><td>0</td><td>2</td><td>10</td><td>123</td><td>0</td><td>2</td><td>0</td><td>0.000</td><td>0</td><td>8</td><td>0</td></tr>
<tr><td>4</td><td><a href="GoalieReport.php?Goalie=2">Ian Scott (R) (CHR)</a></td><td>5</td><td>5</td><td>0</td><td>0</td><td><b>0.929</b></td><td>1.38</td><td>305</td><td>0</td><td>2</td><td>7</td><td>98</td><td>0</td><td>0</td><td>0</td><td>1.000</td><td>3</td><td>5</td><td>8</td></tr>
<tr><td>5</td><td><a href="GoalieReport.php?Goalie=24">MacKenzie Blackwood (CHI)</a></td><td>8</td><td>7</td><td>1</td><td>0</td><td><b>0.921</b></td><td>1.50</td><td>480</td><td>0</td><td>2</td><td>12</td><td>151</td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0</td><td>8</td><td>0</td></tr>
<tr><td>6</td><td><a href="GoalieReport.php?Goalie=5">Alex Nedeljkovic (LAV)</a></td><td>7</td><td>5</td><td>1</td><td>1</td><td><b>0.890</b></td><td>1.55</td><td>425</td><td>0</td><td>1</td><td>11</td><td>100</td><td>0</td><td>0</td><td>0</td><td>0.667</td><td>9</td><td>7</td><td>0</td></tr>
<tr><td>7</td><td><a href="GoalieReport.php?Goalie=102">Al Montoya (RCK)</a></td><td>5</td><td>5</td><td>0</td><td>0</td><td><b>0.886</b></td><td>2.00</td><td>300</td><td>0</td><td>0</td><td>10</td><td>88</td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0</td><td>5</td><td>0</td></tr>
<tr><td>8</td><td><a href="GoalieReport.php?Goalie=327">Vitek Vanecek (MAN)</a></td><td>9</td><td>8</td><td>1</td><td>0</td><td><b>0.901</b></td><td>2.56</td><td>540</td><td>0</td><td>0</td><td>23</td><td>232</td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0</td><td>9</td><td>0</td></tr>
<tr><td>9</td><td><a href="GoalieReport.php?Goalie=77">Landon Bow (R) (UTI)</a></td><td>6</td><td>4</td><td>2</td><td>0</td><td><b>0.824</b></td><td>2.61</td><td>345</td><td>0</td><td>1</td><td>15</td><td>85</td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0</td><td>6</td><td>0</td></tr>
<tr><td>10</td><td><a href="GoalieReport.php?Goalie=30">Tristan Jarry (SDG)</a></td><td>8</td><td>5</td><td>3</td><td>0</td><td><b>0.901</b></td><td>2.95</td><td>447</td><td>0</td><td>0</td><td>22</td><td>223</td><td>0</td><td>0</td><td>1</td><td>0.000</td><td>0</td><td>8</td><td>0</td></tr>
</table>
<?php include "Footer.php";?>