<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Stats</title>
<script src="OTHL-PRE.js"></script>
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
<tr><td>Avalanche</td><td>14</td><td>4</td><td>5</td><td>1</td><td>1</td><td>0</td><td>3</td><td>28</td><td>35</td><td>7</td><td>1</td><td>2</td><td>1</td><td>1</td><td>0</td><td>2</td><td>14</td><td>17</td><td>7</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>14</td><td>18</td><td>28</td><td>52</td><td>80</td></tr>
<tr><td>Blackhawks</td><td>14</td><td>8</td><td>3</td><td>2</td><td>0</td><td>1</td><td>0</td><td>37</td><td>24</td><td>7</td><td>3</td><td>2</td><td>1</td><td>0</td><td>1</td><td>0</td><td>19</td><td>15</td><td>7</td><td>5</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>18</td><td>9</td><td>37</td><td>60</td><td>97</td></tr>
<tr><td>Blue Jackets</td><td>14</td><td>6</td><td>5</td><td>0</td><td>0</td><td>0</td><td>3</td><td>42</td><td>41</td><td>7</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>2</td><td>27</td><td>23</td><td>7</td><td>2</td><td>4</td><td>0</td><td>0</td><td>0</td><td>1</td><td>15</td><td>18</td><td>42</td><td>75</td><td>117</td></tr>
<tr><td>Blues</td><td>14</td><td>4</td><td>6</td><td>0</td><td>2</td><td>1</td><td>1</td><td>32</td><td>36</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>13</td><td>7</td><td>1</td><td>2</td><td>0</td><td>2</td><td>1</td><td>1</td><td>21</td><td>23</td><td>32</td><td>58</td><td>90</td></tr>
<tr><td>Bruins</td><td>14</td><td>8</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>36</td><td>26</td><td>7</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>10</td><td>7</td><td>2</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>12</td><td>16</td><td>36</td><td>64</td><td>100</td></tr>
<tr><td>Canadiens</td><td>14</td><td>10</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>37</td><td>25</td><td>7</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>20</td><td>8</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>17</td><td>37</td><td>69</td><td>106</td></tr>
<tr><td>Canucks</td><td>14</td><td>7</td><td>5</td><td>0</td><td>1</td><td>1</td><td>0</td><td>34</td><td>35</td><td>7</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>21</td><td>15</td><td>7</td><td>1</td><td>4</td><td>0</td><td>1</td><td>1</td><td>0</td><td>13</td><td>20</td><td>34</td><td>59</td><td>93</td></tr>
<tr><td>Capitals</td><td>14</td><td>4</td><td>5</td><td>1</td><td>2</td><td>1</td><td>1</td><td>30</td><td>36</td><td>7</td><td>2</td><td>2</td><td>0</td><td>2</td><td>0</td><td>1</td><td>15</td><td>23</td><td>7</td><td>2</td><td>3</td><td>1</td><td>0</td><td>1</td><td>0</td><td>15</td><td>13</td><td>30</td><td>53</td><td>83</td></tr>
<tr><td>Coyotes</td><td>14</td><td>6</td><td>5</td><td>1</td><td>0</td><td>1</td><td>1</td><td>34</td><td>34</td><td>7</td><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td><td>1</td><td>17</td><td>17</td><td>7</td><td>3</td><td>2</td><td>1</td><td>0</td><td>1</td><td>0</td><td>17</td><td>17</td><td>34</td><td>61</td><td>95</td></tr>
<tr><td>Devils</td><td>14</td><td>5</td><td>4</td><td>1</td><td>1</td><td>1</td><td>2</td><td>30</td><td>30</td><td>7</td><td>5</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>19</td><td>13</td><td>7</td><td>0</td><td>3</td><td>1</td><td>1</td><td>1</td><td>1</td><td>11</td><td>17</td><td>30</td><td>53</td><td>83</td></tr>
<tr><td>Ducks</td><td>14</td><td>4</td><td>6</td><td>1</td><td>3</td><td>0</td><td>0</td><td>26</td><td>34</td><td>7</td><td>1</td><td>3</td><td>1</td><td>2</td><td>0</td><td>0</td><td>11</td><td>18</td><td>7</td><td>3</td><td>3</td><td>0</td><td>1</td><td>0</td><td>0</td><td>15</td><td>16</td><td>26</td><td>45</td><td>71</td></tr>
<tr><td>Flames</td><td>14</td><td>5</td><td>8</td><td>1</td><td>0</td><td>0</td><td>0</td><td>32</td><td>33</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>19</td><td>19</td><td>7</td><td>2</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>13</td><td>14</td><td>32</td><td>56</td><td>88</td></tr>
<tr><td>Flyers</td><td>14</td><td>6</td><td>3</td><td>0</td><td>2</td><td>2</td><td>1</td><td>45</td><td>43</td><td>7</td><td>3</td><td>1</td><td>0</td><td>2</td><td>1</td><td>0</td><td>20</td><td>20</td><td>7</td><td>3</td><td>2</td><td>0</td><td>0</td><td>1</td><td>1</td><td>25</td><td>23</td><td>45</td><td>76</td><td>121</td></tr>
<tr><td>Golden Knights</td><td>14</td><td>7</td><td>4</td><td>1</td><td>1</td><td>1</td><td>0</td><td>35</td><td>32</td><td>7</td><td>3</td><td>2</td><td>0</td><td>1</td><td>1</td><td>0</td><td>13</td><td>12</td><td>7</td><td>4</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>22</td><td>20</td><td>35</td><td>62</td><td>97</td></tr>
<tr><td>Hurricanes</td><td>14</td><td>3</td><td>6</td><td>1</td><td>2</td><td>2</td><td>0</td><td>36</td><td>34</td><td>7</td><td>1</td><td>2</td><td>0</td><td>2</td><td>2</td><td>0</td><td>17</td><td>15</td><td>7</td><td>2</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>19</td><td>19</td><td>36</td><td>60</td><td>96</td></tr>
<tr><td>Islanders</td><td>14</td><td>9</td><td>2</td><td>2</td><td>0</td><td>1</td><td>0</td><td>53</td><td>31</td><td>7</td><td>6</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>26</td><td>11</td><td>7</td><td>3</td><td>2</td><td>1</td><td>0</td><td>1</td><td>0</td><td>27</td><td>20</td><td>53</td><td>92</td><td>145</td></tr>
<tr><td>Jets</td><td>14</td><td>4</td><td>6</td><td>3</td><td>1</td><td>0</td><td>0</td><td>36</td><td>33</td><td>7</td><td>4</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>23</td><td>12</td><td>7</td><td>0</td><td>5</td><td>1</td><td>1</td><td>0</td><td>0</td><td>13</td><td>21</td><td>36</td><td>69</td><td>105</td></tr>
<tr><td>Kings</td><td>14</td><td>6</td><td>7</td><td>1</td><td>0</td><td>0</td><td>0</td><td>37</td><td>35</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>20</td><td>7</td><td>3</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>17</td><td>15</td><td>37</td><td>67</td><td>104</td></tr>
<tr><td>Kraken</td><td>14</td><td>4</td><td>7</td><td>1</td><td>1</td><td>0</td><td>1</td><td>37</td><td>47</td><td>7</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>24</td><td>7</td><td>1</td><td>3</td><td>1</td><td>1</td><td>0</td><td>1</td><td>17</td><td>23</td><td>37</td><td>63</td><td>100</td></tr>
<tr><td>Lightning</td><td>14</td><td>8</td><td>5</td><td>0</td><td>1</td><td>0</td><td>0</td><td>33</td><td>30</td><td>7</td><td>4</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>22</td><td>16</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>14</td><td>33</td><td>59</td><td>92</td></tr>
<tr><td>Maple Leafs</td><td>14</td><td>4</td><td>8</td><td>0</td><td>2</td><td>0</td><td>0</td><td>29</td><td>31</td><td>7</td><td>2</td><td>4</td><td>0</td><td>1</td><td>0</td><td>0</td><td>17</td><td>16</td><td>7</td><td>2</td><td>4</td><td>0</td><td>1</td><td>0</td><td>0</td><td>12</td><td>15</td><td>29</td><td>48</td><td>77</td></tr>
<tr><td>Oilers</td><td>14</td><td>10</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>48</td><td>27</td><td>7</td><td>4</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>24</td><td>15</td><td>7</td><td>6</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>24</td><td>12</td><td>48</td><td>90</td><td>138</td></tr>
<tr><td>Panthers</td><td>14</td><td>3</td><td>8</td><td>1</td><td>0</td><td>1</td><td>1</td><td>31</td><td>42</td><td>7</td><td>1</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>11</td><td>23</td><td>7</td><td>2</td><td>2</td><td>1</td><td>0</td><td>1</td><td>1</td><td>20</td><td>19</td><td>31</td><td>52</td><td>83</td></tr>
<tr><td>Penguins</td><td>14</td><td>3</td><td>7</td><td>1</td><td>1</td><td>1</td><td>1</td><td>29</td><td>40</td><td>7</td><td>2</td><td>4</td><td>1</td><td>0</td><td>0</td><td>0</td><td>13</td><td>18</td><td>7</td><td>1</td><td>3</td><td>0</td><td>1</td><td>1</td><td>1</td><td>16</td><td>22</td><td>29</td><td>50</td><td>79</td></tr>
<tr><td>Predators</td><td>14</td><td>6</td><td>4</td><td>1</td><td>2</td><td>1</td><td>0</td><td>46</td><td>42</td><td>7</td><td>3</td><td>1</td><td>1</td><td>1</td><td>1</td><td>0</td><td>27</td><td>23</td><td>7</td><td>3</td><td>3</td><td>0</td><td>1</td><td>0</td><td>0</td><td>19</td><td>19</td><td>46</td><td>81</td><td>127</td></tr>
<tr><td>Rangers</td><td>14</td><td>3</td><td>7</td><td>2</td><td>0</td><td>1</td><td>1</td><td>28</td><td>38</td><td>7</td><td>1</td><td>4</td><td>0</td><td>0</td><td>1</td><td>1</td><td>13</td><td>20</td><td>7</td><td>2</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>15</td><td>18</td><td>28</td><td>52</td><td>80</td></tr>
<tr><td>Red Wings</td><td>14</td><td>5</td><td>8</td><td>1</td><td>0</td><td>0</td><td>0</td><td>31</td><td>40</td><td>7</td><td>3</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>17</td><td>17</td><td>7</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>14</td><td>23</td><td>31</td><td>53</td><td>84</td></tr>
<tr><td>Sabres</td><td>14</td><td>10</td><td>3</td><td>0</td><td>0</td><td>1</td><td>0</td><td>45</td><td>30</td><td>7</td><td>5</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>25</td><td>13</td><td>7</td><td>5</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>20</td><td>17</td><td>45</td><td>82</td><td>127</td></tr>
<tr><td>Senators</td><td>14</td><td>3</td><td>11</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>41</td><td>7</td><td>1</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>7</td><td>19</td><td>7</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>16</td><td>22</td><td>23</td><td>40</td><td>63</td></tr>
<tr><td>Sharks</td><td>14</td><td>4</td><td>7</td><td>1</td><td>1</td><td>0</td><td>1</td><td>33</td><td>39</td><td>7</td><td>0</td><td>4</td><td>1</td><td>1</td><td>0</td><td>1</td><td>10</td><td>21</td><td>7</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>23</td><td>18</td><td>33</td><td>61</td><td>94</td></tr>
<tr><td>Stars</td><td>14</td><td>7</td><td>6</td><td>0</td><td>0</td><td>1</td><td>0</td><td>30</td><td>30</td><td>7</td><td>5</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>17</td><td>13</td><td>7</td><td>2</td><td>4</td><td>0</td><td>0</td><td>1</td><td>0</td><td>13</td><td>17</td><td>30</td><td>53</td><td>83</td></tr>
<tr><td>Wild</td><td>14</td><td>3</td><td>7</td><td>1</td><td>3</td><td>0</td><td>0</td><td>27</td><td>36</td><td>7</td><td>3</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>18</td><td>14</td><td>7</td><td>0</td><td>5</td><td>0</td><td>2</td><td>0</td><td>0</td><td>9</td><td>22</td><td>27</td><td>50</td><td>77</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Avalanche</td><td>COL</td><td>10</td><td>7</td><td>10</td><td>3</td><td>327</td><td>100</td><td>116</td><td>103</td><td>23</td><td>415</td><td>114</td><td>104</td><td>300</td><td>26</td><td>5</td><td>19.23%</td><td>45</td><td>7</td><td>84.44%</td><td>1</td><td>43.89%</td><td>53.63%</td><td>48.96%</td><td>355</td><td>320</td><td>182</td><td>104</td><td>218</td><td>90</td><td>2</td><td>1</td></tr>
<tr><td>Blackhawks</td><td>CHI</td><td>8</td><td>18</td><td>8</td><td>3</td><td>372</td><td>114</td><td>153</td><td>101</td><td>9</td><td>317</td><td>88</td><td>120</td><td>254</td><td>36</td><td>9</td><td>25.00%</td><td>42</td><td>5</td><td>88.10%</td><td>0</td><td>57.38%</td><td>55.80%</td><td>59.22%</td><td>314</td><td>355</td><td>178</td><td>102</td><td>252</td><td>89</td><td>3</td><td>0</td></tr>
<tr><td>Blue Jackets</td><td>CLB</td><td>20</td><td>9</td><td>13</td><td>0</td><td>419</td><td>113</td><td>141</td><td>158</td><td>15</td><td>439</td><td>117</td><td>91</td><td>259</td><td>35</td><td>7</td><td>20.00%</td><td>40</td><td>4</td><td>90.00%</td><td>1</td><td>46.01%</td><td>49.88%</td><td>55.19%</td><td>345</td><td>329</td><td>181</td><td>103</td><td>232</td><td>90</td><td>0</td><td>1</td></tr>
<tr><td>Blues</td><td>STL</td><td>14</td><td>9</td><td>8</td><td>2</td><td>310</td><td>99</td><td>111</td><td>98</td><td>9</td><td>432</td><td>128</td><td>99</td><td>286</td><td>42</td><td>4</td><td>9.52%</td><td>43</td><td>7</td><td>83.72%</td><td>0</td><td>42.86%</td><td>45.14%</td><td>50.27%</td><td>351</td><td>329</td><td>174</td><td>101</td><td>230</td><td>84</td><td>1</td><td>0</td></tr>
<tr><td>Bruins</td><td>BOS</td><td>14</td><td>9</td><td>12</td><td>1</td><td>385</td><td>122</td><td>129</td><td>133</td><td>1</td><td>321</td><td>82</td><td>98</td><td>253</td><td>57</td><td>7</td><td>12.28%</td><td>42</td><td>7</td><td>83.33%</td><td>2</td><td>54.64%</td><td>54.73%</td><td>51.67%</td><td>300</td><td>364</td><td>179</td><td>100</td><td>257</td><td>92</td><td>1</td><td>0</td></tr>
<tr><td>Canadiens</td><td>MTL</td><td>13</td><td>11</td><td>13</td><td>0</td><td>366</td><td>144</td><td>105</td><td>117</td><td>3</td><td>366</td><td>95</td><td>117</td><td>286</td><td>35</td><td>5</td><td>14.29%</td><td>55</td><td>11</td><td>80.00%</td><td>0</td><td>52.09%</td><td>56.97%</td><td>52.33%</td><td>341</td><td>328</td><td>176</td><td>97</td><td>225</td><td>90</td><td>1</td><td>0</td></tr>
<tr><td>Canucks</td><td>VAN</td><td>10</td><td>8</td><td>15</td><td>3</td><td>444</td><td>142</td><td>142</td><td>159</td><td>7</td><td>396</td><td>94</td><td>110</td><td>273</td><td>43</td><td>7</td><td>16.28%</td><td>43</td><td>10</td><td>76.74%</td><td>0</td><td>50.00%</td><td>50.10%</td><td>50.71%</td><td>324</td><td>341</td><td>180</td><td>98</td><td>237</td><td>91</td><td>1</td><td>0</td></tr>
<tr><td>Capitals</td><td>WSH</td><td>8</td><td>10</td><td>10</td><td>3</td><td>353</td><td>99</td><td>102</td><td>143</td><td>17</td><td>378</td><td>104</td><td>97</td><td>251</td><td>41</td><td>6</td><td>14.63%</td><td>45</td><td>15</td><td>66.67%</td><td>1</td><td>51.90%</td><td>55.33%</td><td>58.46%</td><td>326</td><td>354</td><td>175</td><td>98</td><td>252</td><td>89</td><td>2</td><td>1</td></tr>
<tr><td>Coyotes</td><td>ARI</td><td>11</td><td>10</td><td>11</td><td>2</td><td>379</td><td>113</td><td>135</td><td>123</td><td>13</td><td>370</td><td>106</td><td>106</td><td>294</td><td>51</td><td>6</td><td>11.76%</td><td>40</td><td>7</td><td>82.50%</td><td>1</td><td>54.82%</td><td>53.64%</td><td>55.22%</td><td>326</td><td>350</td><td>179</td><td>101</td><td>245</td><td>92</td><td>1</td><td>0</td></tr>
<tr><td>Devils</td><td>NJD</td><td>12</td><td>11</td><td>5</td><td>3</td><td>348</td><td>115</td><td>112</td><td>117</td><td>18</td><td>378</td><td>101</td><td>115</td><td>269</td><td>40</td><td>5</td><td>12.50%</td><td>54</td><td>4</td><td>92.59%</td><td>0</td><td>50.73%</td><td>57.49%</td><td>49.25%</td><td>338</td><td>340</td><td>184</td><td>105</td><td>236</td><td>90</td><td>2</td><td>1</td></tr>
<tr><td>Ducks</td><td>ANH</td><td>5</td><td>9</td><td>11</td><td>1</td><td>346</td><td>102</td><td>104</td><td>137</td><td>3</td><td>380</td><td>114</td><td>107</td><td>264</td><td>40</td><td>3</td><td>7.50%</td><td>38</td><td>4</td><td>89.47%</td><td>1</td><td>51.03%</td><td>45.93%</td><td>45.37%</td><td>325</td><td>338</td><td>181</td><td>100</td><td>239</td><td>91</td><td>0</td><td>1</td></tr>
<tr><td>Flames</td><td>CGY</td><td>13</td><td>11</td><td>7</td><td>1</td><td>357</td><td>114</td><td>138</td><td>102</td><td>3</td><td>327</td><td>108</td><td>88</td><td>302</td><td>38</td><td>8</td><td>21.05%</td><td>33</td><td>4</td><td>87.88%</td><td>0</td><td>52.61%</td><td>51.55%</td><td>53.39%</td><td>331</td><td>331</td><td>181</td><td>104</td><td>228</td><td>90</td><td>3</td><td>1</td></tr>
<tr><td>Flyers</td><td>PHL</td><td>13</td><td>12</td><td>18</td><td>3</td><td>402</td><td>116</td><td>143</td><td>130</td><td>19</td><td>394</td><td>107</td><td>73</td><td>291</td><td>48</td><td>7</td><td>14.58%</td><td>32</td><td>5</td><td>84.38%</td><td>1</td><td>49.38%</td><td>49.45%</td><td>45.12%</td><td>346</td><td>332</td><td>183</td><td>105</td><td>230</td><td>89</td><td>0</td><td>0</td></tr>
<tr><td>Golden Knights</td><td>VGK</td><td>9</td><td>10</td><td>14</td><td>2</td><td>332</td><td>94</td><td>119</td><td>114</td><td>11</td><td>422</td><td>102</td><td>142</td><td>266</td><td>35</td><td>3</td><td>8.57%</td><td>51</td><td>5</td><td>90.20%</td><td>0</td><td>51.10%</td><td>58.99%</td><td>49.30%</td><td>355</td><td>313</td><td>182</td><td>103</td><td>214</td><td>86</td><td>1</td><td>0</td></tr>
<tr><td>Hurricanes</td><td>CAR</td><td>19</td><td>5</td><td>9</td><td>4</td><td>390</td><td>123</td><td>131</td><td>132</td><td>13</td><td>350</td><td>101</td><td>89</td><td>278</td><td>50</td><td>9</td><td>18.00%</td><td>40</td><td>6</td><td>85.00%</td><td>0</td><td>53.23%</td><td>56.07%</td><td>52.88%</td><td>333</td><td>341</td><td>177</td><td>101</td><td>239</td><td>88</td><td>1</td><td>0</td></tr>
<tr><td>Islanders</td><td>NYI</td><td>19</td><td>19</td><td>12</td><td>3</td><td>462</td><td>145</td><td>153</td><td>154</td><td>14</td><td>390</td><td>114</td><td>105</td><td>286</td><td>41</td><td>9</td><td>21.95%</td><td>43</td><td>5</td><td>88.37%</td><td>1</td><td>50.76%</td><td>49.48%</td><td>49.06%</td><td>331</td><td>338</td><td>179</td><td>102</td><td>236</td><td>90</td><td>1</td><td>2</td></tr>
<tr><td>Jets</td><td>WPG</td><td>14</td><td>8</td><td>11</td><td>3</td><td>367</td><td>118</td><td>114</td><td>129</td><td>6</td><td>346</td><td>106</td><td>85</td><td>258</td><td>39</td><td>7</td><td>17.95%</td><td>35</td><td>10</td><td>71.43%</td><td>0</td><td>52.98%</td><td>51.79%</td><td>50.50%</td><td>341</td><td>330</td><td>176</td><td>103</td><td>233</td><td>84</td><td>1</td><td>0</td></tr>
<tr><td>Kings</td><td>LAK</td><td>17</td><td>7</td><td>12</td><td>1</td><td>383</td><td>141</td><td>113</td><td>127</td><td>2</td><td>407</td><td>119</td><td>125</td><td>268</td><td>38</td><td>9</td><td>23.68%</td><td>45</td><td>4</td><td>91.11%</td><td>0</td><td>53.18%</td><td>53.94%</td><td>51.42%</td><td>333</td><td>327</td><td>181</td><td>100</td><td>224</td><td>91</td><td>1</td><td>0</td></tr>
<tr><td>Kraken</td><td>SEA</td><td>16</td><td>8</td><td>12</td><td>1</td><td>403</td><td>125</td><td>120</td><td>149</td><td>15</td><td>420</td><td>110</td><td>85</td><td>284</td><td>38</td><td>5</td><td>13.16%</td><td>35</td><td>4</td><td>88.57%</td><td>1</td><td>41.15%</td><td>40.77%</td><td>51.64%</td><td>355</td><td>317</td><td>178</td><td>102</td><td>220</td><td>86</td><td>1</td><td>0</td></tr>
<tr><td>Lightning</td><td>TBL</td><td>10</td><td>12</td><td>11</td><td>0</td><td>376</td><td>119</td><td>119</td><td>136</td><td>2</td><td>397</td><td>105</td><td>90</td><td>259</td><td>40</td><td>6</td><td>15.00%</td><td>40</td><td>4</td><td>90.00%</td><td>0</td><td>44.33%</td><td>47.62%</td><td>46.43%</td><td>339</td><td>326</td><td>178</td><td>103</td><td>226</td><td>87</td><td>2</td><td>0</td></tr>
<tr><td>Maple Leafs</td><td>TOR</td><td>9</td><td>10</td><td>10</td><td>0</td><td>411</td><td>142</td><td>131</td><td>137</td><td>1</td><td>342</td><td>115</td><td>78</td><td>253</td><td>33</td><td>6</td><td>18.18%</td><td>39</td><td>2</td><td>94.87%</td><td>0</td><td>54.01%</td><td>57.30%</td><td>53.06%</td><td>329</td><td>340</td><td>178</td><td>99</td><td>240</td><td>90</td><td>1</td><td>0</td></tr>
<tr><td>Oilers</td><td>EDM</td><td>17</td><td>16</td><td>14</td><td>1</td><td>455</td><td>157</td><td>156</td><td>138</td><td>4</td><td>338</td><td>90</td><td>80</td><td>257</td><td>50</td><td>7</td><td>14.00%</td><td>38</td><td>4</td><td>89.47%</td><td>0</td><td>52.99%</td><td>55.88%</td><td>50.21%</td><td>307</td><td>362</td><td>176</td><td>98</td><td>261</td><td>90</td><td>2</td><td>0</td></tr>
<tr><td>Panthers</td><td>FLA</td><td>11</td><td>11</td><td>7</td><td>3</td><td>310</td><td>101</td><td>112</td><td>86</td><td>18</td><td>349</td><td>94</td><td>92</td><td>262</td><td>50</td><td>10</td><td>20.00%</td><td>39</td><td>10</td><td>74.36%</td><td>0</td><td>51.54%</td><td>55.24%</td><td>52.63%</td><td>325</td><td>344</td><td>183</td><td>103</td><td>241</td><td>93</td><td>0</td><td>0</td></tr>
<tr><td>Penguins</td><td>PIT</td><td>9</td><td>10</td><td>8</td><td>3</td><td>376</td><td>116</td><td>146</td><td>108</td><td>14</td><td>398</td><td>126</td><td>108</td><td>333</td><td>46</td><td>8</td><td>17.39%</td><td>49</td><td>10</td><td>79.59%</td><td>0</td><td>42.79%</td><td>44.06%</td><td>49.27%</td><td>351</td><td>322</td><td>184</td><td>104</td><td>218</td><td>91</td><td>0</td><td>0</td></tr>
<tr><td>Predators</td><td>NSH</td><td>17</td><td>13</td><td>14</td><td>3</td><td>426</td><td>139</td><td>132</td><td>146</td><td>16</td><td>384</td><td>128</td><td>112</td><td>277</td><td>44</td><td>8</td><td>18.18%</td><td>44</td><td>8</td><td>81.82%</td><td>0</td><td>41.11%</td><td>44.66%</td><td>49.54%</td><td>337</td><td>334</td><td>181</td><td>101</td><td>230</td><td>92</td><td>0</td><td>0</td></tr>
<tr><td>Rangers</td><td>NYR</td><td>7</td><td>10</td><td>8</td><td>4</td><td>339</td><td>129</td><td>103</td><td>99</td><td>14</td><td>362</td><td>104</td><td>97</td><td>269</td><td>45</td><td>5</td><td>11.11%</td><td>43</td><td>7</td><td>83.72%</td><td>0</td><td>54.48%</td><td>52.37%</td><td>50.97%</td><td>331</td><td>345</td><td>181</td><td>103</td><td>237</td><td>91</td><td>2</td><td>0</td></tr>
<tr><td>Red Wings</td><td>DET</td><td>11</td><td>12</td><td>7</td><td>1</td><td>338</td><td>106</td><td>126</td><td>102</td><td>4</td><td>423</td><td>122</td><td>94</td><td>261</td><td>46</td><td>7</td><td>15.22%</td><td>44</td><td>5</td><td>88.64%</td><td>0</td><td>44.15%</td><td>41.55%</td><td>49.07%</td><td>339</td><td>326</td><td>180</td><td>104</td><td>225</td><td>90</td><td>1</td><td>0</td></tr>
<tr><td>Sabres</td><td>BUF</td><td>13</td><td>18</td><td>13</td><td>2</td><td>402</td><td>133</td><td>135</td><td>133</td><td>5</td><td>340</td><td>94</td><td>93</td><td>263</td><td>49</td><td>7</td><td>14.29%</td><td>43</td><td>10</td><td>76.74%</td><td>1</td><td>49.19%</td><td>47.79%</td><td>46.50%</td><td>336</td><td>324</td><td>185</td><td>110</td><td>221</td><td>88</td><td>0</td><td>0</td></tr>
<tr><td>Senators</td><td>OTT</td><td>5</td><td>11</td><td>7</td><td>0</td><td>353</td><td>110</td><td>125</td><td>118</td><td>0</td><td>403</td><td>119</td><td>114</td><td>301</td><td>43</td><td>8</td><td>18.60%</td><td>51</td><td>7</td><td>86.27%</td><td>0</td><td>47.77%</td><td>46.31%</td><td>49.76%</td><td>354</td><td>311</td><td>175</td><td>103</td><td>211</td><td>84</td><td>0</td><td>0</td></tr>
<tr><td>Sharks</td><td>SJS</td><td>20</td><td>6</td><td>6</td><td>3</td><td>378</td><td>122</td><td>124</td><td>126</td><td>12</td><td>408</td><td>116</td><td>100</td><td>263</td><td>43</td><td>4</td><td>9.30%</td><td>42</td><td>11</td><td>73.81%</td><td>0</td><td>45.26%</td><td>51.14%</td><td>52.36%</td><td>334</td><td>335</td><td>179</td><td>102</td><td>234</td><td>90</td><td>1</td><td>1</td></tr>
<tr><td>Stars</td><td>DAL</td><td>8</td><td>9</td><td>12</td><td>2</td><td>378</td><td>138</td><td>114</td><td>121</td><td>10</td><td>340</td><td>80</td><td>88</td><td>271</td><td>40</td><td>10</td><td>25.00%</td><td>41</td><td>4</td><td>90.24%</td><td>0</td><td>56.13%</td><td>56.72%</td><td>51.22%</td><td>336</td><td>329</td><td>180</td><td>106</td><td>226</td><td>88</td><td>1</td><td>3</td></tr>
<tr><td>Wild</td><td>MIN</td><td>10</td><td>6</td><td>10</td><td>1</td><td>369</td><td>119</td><td>132</td><td>115</td><td>3</td><td>324</td><td>105</td><td>79</td><td>303</td><td>46</td><td>5</td><td>10.87%</td><td>34</td><td>6</td><td>82.35%</td><td>0</td><td>48.61%</td><td>49.11%</td><td>41.18%</td><td>327</td><td>341</td><td>181</td><td>100</td><td>235</td><td>93</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.48</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Islanders</td><td>3.79</td></tr>
<tr><td>2</td><td>Oilers</td><td>3.43</td></tr>
<tr><td>3</td><td>Predators</td><td>3.29</td></tr>
<tr><td>4</td><td>Flyers</td><td>3.21</td></tr>
<tr><td>5</td><td>Sabres</td><td>3.21</td></tr>
<tr><td>6</td><td>Blue Jackets</td><td>3.00</td></tr>
<tr><td>7</td><td>Blackhawks</td><td>2.64</td></tr>
<tr><td>8</td><td>Canadiens</td><td>2.64</td></tr>
<tr><td>9</td><td>Kings</td><td>2.64</td></tr>
<tr><td>10</td><td>Kraken</td><td>2.64</td></tr>
<tr><td>11</td><td>Bruins</td><td>2.57</td></tr>
<tr><td>12</td><td>Hurricanes</td><td>2.57</td></tr>
<tr><td>13</td><td>Jets</td><td>2.57</td></tr>
<tr><td>14</td><td>Golden Knights</td><td>2.50</td></tr>
<tr><td>15</td><td>Canucks</td><td>2.43</td></tr>
<tr><td>16</td><td>Coyotes</td><td>2.43</td></tr>
<tr><td>17</td><td>Lightning</td><td>2.36</td></tr>
<tr><td>18</td><td>Sharks</td><td>2.36</td></tr>
<tr><td>19</td><td>Blues</td><td>2.29</td></tr>
<tr><td>20</td><td>Flames</td><td>2.29</td></tr>
<tr><td>21</td><td>Panthers</td><td>2.21</td></tr>
<tr><td>22</td><td>Red Wings</td><td>2.21</td></tr>
<tr><td>23</td><td>Capitals</td><td>2.14</td></tr>
<tr><td>24</td><td>Devils</td><td>2.14</td></tr>
<tr><td>25</td><td>Stars</td><td>2.14</td></tr>
<tr><td>26</td><td>Maple Leafs</td><td>2.07</td></tr>
<tr><td>27</td><td>Penguins</td><td>2.07</td></tr>
<tr><td>28</td><td>Avalanche</td><td>2.00</td></tr>
<tr><td>29</td><td>Rangers</td><td>2.00</td></tr>
<tr><td>30</td><td>Wild</td><td>1.93</td></tr>
<tr><td>31</td><td>Ducks</td><td>1.86</td></tr>
<tr><td>32</td><td>Senators</td><td>1.64</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 2.48</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>1.71</td></tr>
<tr><td>2</td><td>Canadiens</td><td>1.79</td></tr>
<tr><td>3</td><td>Bruins</td><td>1.86</td></tr>
<tr><td>4</td><td>Oilers</td><td>1.93</td></tr>
<tr><td>5</td><td>Stars</td><td>2.14</td></tr>
<tr><td>6</td><td>Sabres</td><td>2.14</td></tr>
<tr><td>7</td><td>Lightning</td><td>2.14</td></tr>
<tr><td>8</td><td>Devils</td><td>2.14</td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>2.21</td></tr>
<tr><td>10</td><td>Islanders</td><td>2.21</td></tr>
<tr><td>11</td><td>Golden Knights</td><td>2.29</td></tr>
<tr><td>12</td><td>Jets</td><td>2.36</td></tr>
<tr><td>13</td><td>Flames</td><td>2.36</td></tr>
<tr><td>14</td><td>Hurricanes</td><td>2.43</td></tr>
<tr><td>15</td><td>Ducks</td><td>2.43</td></tr>
<tr><td>16</td><td>Coyotes</td><td>2.43</td></tr>
<tr><td>17</td><td>Kings</td><td>2.50</td></tr>
<tr><td>18</td><td>Avalanche</td><td>2.50</td></tr>
<tr><td>19</td><td>Canucks</td><td>2.50</td></tr>
<tr><td>20</td><td>Wild</td><td>2.57</td></tr>
<tr><td>21</td><td>Capitals</td><td>2.57</td></tr>
<tr><td>22</td><td>Blues</td><td>2.57</td></tr>
<tr><td>23</td><td>Rangers</td><td>2.71</td></tr>
<tr><td>24</td><td>Sharks</td><td>2.79</td></tr>
<tr><td>25</td><td>Red Wings</td><td>2.86</td></tr>
<tr><td>26</td><td>Penguins</td><td>2.86</td></tr>
<tr><td>27</td><td>Senators</td><td>2.93</td></tr>
<tr><td>28</td><td>Blue Jackets</td><td>2.93</td></tr>
<tr><td>29</td><td>Predators</td><td>3.00</td></tr>
<tr><td>30</td><td>Panthers</td><td>3.00</td></tr>
<tr><td>31</td><td>Flyers</td><td>3.07</td></tr>
<tr><td>32</td><td>Kraken</td><td>3.36</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Oilers</td><td>177.78%</td></tr>
<tr><td>2</td><td>Islanders</td><td>170.97%</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>154.17%</td></tr>
<tr><td>4</td><td>Sabres</td><td>150.00%</td></tr>
<tr><td>5</td><td>Canadiens</td><td>148.00%</td></tr>
<tr><td>6</td><td>Bruins</td><td>138.46%</td></tr>
<tr><td>7</td><td>Lightning</td><td>110.00%</td></tr>
<tr><td>8</td><td>Predators</td><td>109.52%</td></tr>
<tr><td>9</td><td>Golden Knights</td><td>109.38%</td></tr>
<tr><td>10</td><td>Jets</td><td>109.09%</td></tr>
<tr><td>11</td><td>Hurricanes</td><td>105.88%</td></tr>
<tr><td>12</td><td>Kings</td><td>105.71%</td></tr>
<tr><td>13</td><td>Flyers</td><td>104.65%</td></tr>
<tr><td>14</td><td>Blue Jackets</td><td>102.44%</td></tr>
<tr><td>15</td><td>Stars</td><td>100.00%</td></tr>
<tr><td>16</td><td>Coyotes</td><td>100.00%</td></tr>
<tr><td>17</td><td>Devils</td><td>100.00%</td></tr>
<tr><td>18</td><td>Canucks</td><td>97.14%</td></tr>
<tr><td>19</td><td>Flames</td><td>96.97%</td></tr>
<tr><td>20</td><td>Maple Leafs</td><td>93.55%</td></tr>
<tr><td>21</td><td>Blues</td><td>88.89%</td></tr>
<tr><td>22</td><td>Sharks</td><td>84.62%</td></tr>
<tr><td>23</td><td>Capitals</td><td>83.33%</td></tr>
<tr><td>24</td><td>Avalanche</td><td>80.00%</td></tr>
<tr><td>25</td><td>Kraken</td><td>78.72%</td></tr>
<tr><td>26</td><td>Red Wings</td><td>77.50%</td></tr>
<tr><td>27</td><td>Ducks</td><td>76.47%</td></tr>
<tr><td>28</td><td>Wild</td><td>75.00%</td></tr>
<tr><td>29</td><td>Panthers</td><td>73.81%</td></tr>
<tr><td>30</td><td>Rangers</td><td>73.68%</td></tr>
<tr><td>31</td><td>Penguins</td><td>72.50%</td></tr>
<tr><td>32</td><td>Senators</td><td>56.10%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 15.73%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>25.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>25.00%</td></tr>
<tr><td>3</td><td>Kings</td><td>23.68%</td></tr>
<tr><td>4</td><td>Islanders</td><td>21.95%</td></tr>
<tr><td>5</td><td>Flames</td><td>21.05%</td></tr>
<tr><td>6</td><td>Blue Jackets</td><td>20.00%</td></tr>
<tr><td>7</td><td>Panthers</td><td>20.00%</td></tr>
<tr><td>8</td><td>Avalanche</td><td>19.23%</td></tr>
<tr><td>9</td><td>Senators</td><td>18.60%</td></tr>
<tr><td>10</td><td>Maple Leafs</td><td>18.18%</td></tr>
<tr><td>11</td><td>Predators</td><td>18.18%</td></tr>
<tr><td>12</td><td>Hurricanes</td><td>18.00%</td></tr>
<tr><td>13</td><td>Jets</td><td>17.95%</td></tr>
<tr><td>14</td><td>Penguins</td><td>17.39%</td></tr>
<tr><td>15</td><td>Canucks</td><td>16.28%</td></tr>
<tr><td>16</td><td>Red Wings</td><td>15.22%</td></tr>
<tr><td>17</td><td>Lightning</td><td>15.00%</td></tr>
<tr><td>18</td><td>Capitals</td><td>14.63%</td></tr>
<tr><td>19</td><td>Flyers</td><td>14.58%</td></tr>
<tr><td>20</td><td>Canadiens</td><td>14.29%</td></tr>
<tr><td>21</td><td>Sabres</td><td>14.29%</td></tr>
<tr><td>22</td><td>Oilers</td><td>14.00%</td></tr>
<tr><td>23</td><td>Kraken</td><td>13.16%</td></tr>
<tr><td>24</td><td>Devils</td><td>12.50%</td></tr>
<tr><td>25</td><td>Bruins</td><td>12.28%</td></tr>
<tr><td>26</td><td>Coyotes</td><td>11.76%</td></tr>
<tr><td>27</td><td>Rangers</td><td>11.11%</td></tr>
<tr><td>28</td><td>Wild</td><td>10.87%</td></tr>
<tr><td>29</td><td>Blues</td><td>9.52%</td></tr>
<tr><td>30</td><td>Sharks</td><td>9.30%</td></tr>
<tr><td>31</td><td>Golden Knights</td><td>8.57%</td></tr>
<tr><td>32</td><td>Ducks</td><td>7.50%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 84.27%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Maple Leafs</td><td>94.87%</td></tr>
<tr><td>2</td><td>Devils</td><td>92.59%</td></tr>
<tr><td>3</td><td>Kings</td><td>91.11%</td></tr>
<tr><td>4</td><td>Stars</td><td>90.24%</td></tr>
<tr><td>5</td><td>Golden Knights</td><td>90.20%</td></tr>
<tr><td>6</td><td>Blue Jackets</td><td>90.00%</td></tr>
<tr><td>7</td><td>Lightning</td><td>90.00%</td></tr>
<tr><td>8</td><td>Ducks</td><td>89.47%</td></tr>
<tr><td>9</td><td>Oilers</td><td>89.47%</td></tr>
<tr><td>10</td><td>Red Wings</td><td>88.64%</td></tr>
<tr><td>11</td><td>Kraken</td><td>88.57%</td></tr>
<tr><td>12</td><td>Islanders</td><td>88.37%</td></tr>
<tr><td>13</td><td>Blackhawks</td><td>88.10%</td></tr>
<tr><td>14</td><td>Flames</td><td>87.88%</td></tr>
<tr><td>15</td><td>Senators</td><td>86.27%</td></tr>
<tr><td>16</td><td>Hurricanes</td><td>85.00%</td></tr>
<tr><td>17</td><td>Avalanche</td><td>84.44%</td></tr>
<tr><td>18</td><td>Flyers</td><td>84.38%</td></tr>
<tr><td>19</td><td>Blues</td><td>83.72%</td></tr>
<tr><td>20</td><td>Rangers</td><td>83.72%</td></tr>
<tr><td>21</td><td>Bruins</td><td>83.33%</td></tr>
<tr><td>22</td><td>Coyotes</td><td>82.50%</td></tr>
<tr><td>23</td><td>Wild</td><td>82.35%</td></tr>
<tr><td>24</td><td>Predators</td><td>81.82%</td></tr>
<tr><td>25</td><td>Canadiens</td><td>80.00%</td></tr>
<tr><td>26</td><td>Penguins</td><td>79.59%</td></tr>
<tr><td>27</td><td>Canucks</td><td>76.74%</td></tr>
<tr><td>28</td><td>Sabres</td><td>76.74%</td></tr>
<tr><td>29</td><td>Panthers</td><td>74.36%</td></tr>
<tr><td>30</td><td>Sharks</td><td>73.81%</td></tr>
<tr><td>31</td><td>Jets</td><td>71.43%</td></tr>
<tr><td>32</td><td>Capitals</td><td>66.67%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Stars</td><td>115.24%</td></tr>
<tr><td>2</td><td>Kings</td><td>114.80%</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>113.10%</td></tr>
<tr><td>4</td><td>Maple Leafs</td><td>113.05%</td></tr>
<tr><td>5</td><td>Islanders</td><td>110.32%</td></tr>
<tr><td>6</td><td>Blue Jackets</td><td>110.00%</td></tr>
<tr><td>7</td><td>Flames</td><td>108.93%</td></tr>
<tr><td>8</td><td>Devils</td><td>105.09%</td></tr>
<tr><td>9</td><td>Lightning</td><td>105.00%</td></tr>
<tr><td>10</td><td>Senators</td><td>104.88%</td></tr>
<tr><td>11</td><td>Red Wings</td><td>103.85%</td></tr>
<tr><td>12</td><td>Avalanche</td><td>103.68%</td></tr>
<tr><td>13</td><td>Oilers</td><td>103.47%</td></tr>
<tr><td>14</td><td>Hurricanes</td><td>103.00%</td></tr>
<tr><td>15</td><td>Kraken</td><td>101.73%</td></tr>
<tr><td>16</td><td>Predators</td><td>100.00%</td></tr>
<tr><td>17</td><td>Flyers</td><td>98.96%</td></tr>
<tr><td>18</td><td>Golden Knights</td><td>98.77%</td></tr>
<tr><td>19</td><td>Penguins</td><td>96.98%</td></tr>
<tr><td>20</td><td>Ducks</td><td>96.97%</td></tr>
<tr><td>21</td><td>Bruins</td><td>95.61%</td></tr>
<tr><td>22</td><td>Rangers</td><td>94.83%</td></tr>
<tr><td>23</td><td>Panthers</td><td>94.36%</td></tr>
<tr><td>24</td><td>Canadiens</td><td>94.29%</td></tr>
<tr><td>25</td><td>Coyotes</td><td>94.26%</td></tr>
<tr><td>26</td><td>Blues</td><td>93.24%</td></tr>
<tr><td>27</td><td>Wild</td><td>93.22%</td></tr>
<tr><td>28</td><td>Canucks</td><td>93.02%</td></tr>
<tr><td>29</td><td>Sabres</td><td>91.03%</td></tr>
<tr><td>30</td><td>Jets</td><td>89.38%</td></tr>
<tr><td>31</td><td>Sharks</td><td>83.11%</td></tr>
<tr><td>32</td><td>Capitals</td><td>81.30%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 26.91</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Islanders</td><td>33.00</td></tr>
<tr><td>2</td><td>Oilers</td><td>32.50</td></tr>
<tr><td>3</td><td>Canucks</td><td>31.71</td></tr>
<tr><td>4</td><td>Predators</td><td>30.43</td></tr>
<tr><td>5</td><td>Blue Jackets</td><td>29.93</td></tr>
<tr><td>6</td><td>Maple Leafs</td><td>29.36</td></tr>
<tr><td>7</td><td>Kraken</td><td>28.79</td></tr>
<tr><td>8</td><td>Flyers</td><td>28.71</td></tr>
<tr><td>9</td><td>Sabres</td><td>28.71</td></tr>
<tr><td>10</td><td>Hurricanes</td><td>27.86</td></tr>
<tr><td>11</td><td>Bruins</td><td>27.50</td></tr>
<tr><td>12</td><td>Kings</td><td>27.36</td></tr>
<tr><td>13</td><td>Coyotes</td><td>27.07</td></tr>
<tr><td>14</td><td>Stars</td><td>27.00</td></tr>
<tr><td>15</td><td>Sharks</td><td>27.00</td></tr>
<tr><td>16</td><td>Lightning</td><td>26.86</td></tr>
<tr><td>17</td><td>Penguins</td><td>26.86</td></tr>
<tr><td>18</td><td>Blackhawks</td><td>26.57</td></tr>
<tr><td>19</td><td>Wild</td><td>26.36</td></tr>
<tr><td>20</td><td>Jets</td><td>26.21</td></tr>
<tr><td>21</td><td>Canadiens</td><td>26.14</td></tr>
<tr><td>22</td><td>Flames</td><td>25.50</td></tr>
<tr><td>23</td><td>Capitals</td><td>25.21</td></tr>
<tr><td>24</td><td>Senators</td><td>25.21</td></tr>
<tr><td>25</td><td>Devils</td><td>24.86</td></tr>
<tr><td>26</td><td>Ducks</td><td>24.71</td></tr>
<tr><td>27</td><td>Rangers</td><td>24.21</td></tr>
<tr><td>28</td><td>Red Wings</td><td>24.14</td></tr>
<tr><td>29</td><td>Golden Knights</td><td>23.71</td></tr>
<tr><td>30</td><td>Avalanche</td><td>23.36</td></tr>
<tr><td>31</td><td>Blues</td><td>22.14</td></tr>
<tr><td>32</td><td>Panthers</td><td>22.14</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 26.91</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Blackhawks</td><td>22.64</td></tr>
<tr><td>2</td><td>Bruins</td><td>22.93</td></tr>
<tr><td>3</td><td>Wild</td><td>23.14</td></tr>
<tr><td>4</td><td>Flames</td><td>23.36</td></tr>
<tr><td>5</td><td>Oilers</td><td>24.14</td></tr>
<tr><td>6</td><td>Stars</td><td>24.29</td></tr>
<tr><td>7</td><td>Sabres</td><td>24.29</td></tr>
<tr><td>8</td><td>Maple Leafs</td><td>24.43</td></tr>
<tr><td>9</td><td>Jets</td><td>24.71</td></tr>
<tr><td>10</td><td>Panthers</td><td>24.93</td></tr>
<tr><td>11</td><td>Hurricanes</td><td>25.00</td></tr>
<tr><td>12</td><td>Rangers</td><td>25.86</td></tr>
<tr><td>13</td><td>Canadiens</td><td>26.14</td></tr>
<tr><td>14</td><td>Coyotes</td><td>26.43</td></tr>
<tr><td>15</td><td>Devils</td><td>27.00</td></tr>
<tr><td>16</td><td>Capitals</td><td>27.00</td></tr>
<tr><td>17</td><td>Ducks</td><td>27.14</td></tr>
<tr><td>18</td><td>Predators</td><td>27.43</td></tr>
<tr><td>19</td><td>Islanders</td><td>27.86</td></tr>
<tr><td>20</td><td>Flyers</td><td>28.14</td></tr>
<tr><td>21</td><td>Canucks</td><td>28.29</td></tr>
<tr><td>22</td><td>Lightning</td><td>28.36</td></tr>
<tr><td>23</td><td>Penguins</td><td>28.43</td></tr>
<tr><td>24</td><td>Senators</td><td>28.79</td></tr>
<tr><td>25</td><td>Kings</td><td>29.07</td></tr>
<tr><td>26</td><td>Sharks</td><td>29.14</td></tr>
<tr><td>27</td><td>Avalanche</td><td>29.64</td></tr>
<tr><td>28</td><td>Kraken</td><td>30.00</td></tr>
<tr><td>29</td><td>Golden Knights</td><td>30.14</td></tr>
<tr><td>30</td><td>Red Wings</td><td>30.21</td></tr>
<tr><td>31</td><td>Blues</td><td>30.86</td></tr>
<tr><td>32</td><td>Blue Jackets</td><td>31.36</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Oilers</td><td>134.62%</td></tr>
<tr><td>2</td><td>Maple Leafs</td><td>120.18%</td></tr>
<tr><td>3</td><td>Bruins</td><td>119.94%</td></tr>
<tr><td>4</td><td>Islanders</td><td>118.46%</td></tr>
<tr><td>5</td><td>Sabres</td><td>118.24%</td></tr>
<tr><td>6</td><td>Blackhawks</td><td>117.35%</td></tr>
<tr><td>7</td><td>Wild</td><td>113.89%</td></tr>
<tr><td>8</td><td>Canucks</td><td>112.12%</td></tr>
<tr><td>9</td><td>Hurricanes</td><td>111.43%</td></tr>
<tr><td>10</td><td>Stars</td><td>111.18%</td></tr>
<tr><td>11</td><td>Predators</td><td>110.94%</td></tr>
<tr><td>12</td><td>Flames</td><td>109.17%</td></tr>
<tr><td>13</td><td>Jets</td><td>106.07%</td></tr>
<tr><td>14</td><td>Coyotes</td><td>102.43%</td></tr>
<tr><td>15</td><td>Flyers</td><td>102.03%</td></tr>
<tr><td>16</td><td>Canadiens</td><td>100.00%</td></tr>
<tr><td>17</td><td>Kraken</td><td>95.95%</td></tr>
<tr><td>18</td><td>Blue Jackets</td><td>95.44%</td></tr>
<tr><td>19</td><td>Lightning</td><td>94.71%</td></tr>
<tr><td>20</td><td>Penguins</td><td>94.47%</td></tr>
<tr><td>21</td><td>Kings</td><td>94.10%</td></tr>
<tr><td>22</td><td>Rangers</td><td>93.65%</td></tr>
<tr><td>23</td><td>Capitals</td><td>93.39%</td></tr>
<tr><td>24</td><td>Sharks</td><td>92.65%</td></tr>
<tr><td>25</td><td>Devils</td><td>92.06%</td></tr>
<tr><td>26</td><td>Ducks</td><td>91.05%</td></tr>
<tr><td>27</td><td>Panthers</td><td>88.83%</td></tr>
<tr><td>28</td><td>Senators</td><td>87.59%</td></tr>
<tr><td>29</td><td>Red Wings</td><td>79.91%</td></tr>
<tr><td>30</td><td>Avalanche</td><td>78.80%</td></tr>
<tr><td>31</td><td>Golden Knights</td><td>78.67%</td></tr>
<tr><td>32</td><td>Blues</td><td>71.76%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 7.10</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Flyers</td><td>5.21</td></tr>
<tr><td>2</td><td>Maple Leafs</td><td>5.57</td></tr>
<tr><td>3</td><td>Wild</td><td>5.64</td></tr>
<tr><td>4</td><td>Oilers</td><td>5.71</td></tr>
<tr><td>5</td><td>Kraken</td><td>6.07</td></tr>
<tr><td>6</td><td>Jets</td><td>6.07</td></tr>
<tr><td>7</td><td>Stars</td><td>6.29</td></tr>
<tr><td>8</td><td>Flames</td><td>6.29</td></tr>
<tr><td>9</td><td>Hurricanes</td><td>6.36</td></tr>
<tr><td>10</td><td>Lightning</td><td>6.43</td></tr>
<tr><td>11</td><td>Blue Jackets</td><td>6.50</td></tr>
<tr><td>12</td><td>Panthers</td><td>6.57</td></tr>
<tr><td>13</td><td>Sabres</td><td>6.64</td></tr>
<tr><td>14</td><td>Red Wings</td><td>6.71</td></tr>
<tr><td>15</td><td>Rangers</td><td>6.93</td></tr>
<tr><td>16</td><td>Capitals</td><td>6.93</td></tr>
<tr><td>17</td><td>Bruins</td><td>7.00</td></tr>
<tr><td>18</td><td>Blues</td><td>7.07</td></tr>
<tr><td>19</td><td>Sharks</td><td>7.14</td></tr>
<tr><td>20</td><td>Avalanche</td><td>7.43</td></tr>
<tr><td>21</td><td>Islanders</td><td>7.50</td></tr>
<tr><td>22</td><td>Coyotes</td><td>7.57</td></tr>
<tr><td>23</td><td>Ducks</td><td>7.64</td></tr>
<tr><td>24</td><td>Penguins</td><td>7.71</td></tr>
<tr><td>25</td><td>Canucks</td><td>7.86</td></tr>
<tr><td>26</td><td>Predators</td><td>8.00</td></tr>
<tr><td>27</td><td>Senators</td><td>8.14</td></tr>
<tr><td>28</td><td>Devils</td><td>8.21</td></tr>
<tr><td>29</td><td>Canadiens</td><td>8.36</td></tr>
<tr><td>30</td><td>Blackhawks</td><td>8.57</td></tr>
<tr><td>31</td><td>Kings</td><td>8.93</td></tr>
<tr><td>32</td><td>Golden Knights</td><td>10.14</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 19.63</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Penguins</td><td>23.79</td></tr>
<tr><td>2</td><td>Wild</td><td>21.64</td></tr>
<tr><td>3</td><td>Flames</td><td>21.57</td></tr>
<tr><td>4</td><td>Senators</td><td>21.50</td></tr>
<tr><td>5</td><td>Avalanche</td><td>21.43</td></tr>
<tr><td>6</td><td>Coyotes</td><td>21.00</td></tr>
<tr><td>7</td><td>Flyers</td><td>20.79</td></tr>
<tr><td>8</td><td>Blues</td><td>20.43</td></tr>
<tr><td>9</td><td>Canadiens</td><td>20.43</td></tr>
<tr><td>10</td><td>Islanders</td><td>20.43</td></tr>
<tr><td>11</td><td>Kraken</td><td>20.29</td></tr>
<tr><td>12</td><td>Hurricanes</td><td>19.86</td></tr>
<tr><td>13</td><td>Predators</td><td>19.79</td></tr>
<tr><td>14</td><td>Canucks</td><td>19.50</td></tr>
<tr><td>15</td><td>Stars</td><td>19.36</td></tr>
<tr><td>16</td><td>Devils</td><td>19.21</td></tr>
<tr><td>17</td><td>Rangers</td><td>19.21</td></tr>
<tr><td>18</td><td>Kings</td><td>19.14</td></tr>
<tr><td>19</td><td>Golden Knights</td><td>19.00</td></tr>
<tr><td>20</td><td>Ducks</td><td>18.86</td></tr>
<tr><td>21</td><td>Sabres</td><td>18.79</td></tr>
<tr><td>22</td><td>Sharks</td><td>18.79</td></tr>
<tr><td>23</td><td>Panthers</td><td>18.71</td></tr>
<tr><td>24</td><td>Red Wings</td><td>18.64</td></tr>
<tr><td>25</td><td>Blue Jackets</td><td>18.50</td></tr>
<tr><td>26</td><td>Lightning</td><td>18.50</td></tr>
<tr><td>27</td><td>Jets</td><td>18.43</td></tr>
<tr><td>28</td><td>Oilers</td><td>18.36</td></tr>
<tr><td>29</td><td>Blackhawks</td><td>18.14</td></tr>
<tr><td>30</td><td>Maple Leafs</td><td>18.07</td></tr>
<tr><td>31</td><td>Bruins</td><td>18.07</td></tr>
<tr><td>32</td><td>Capitals</td><td>17.93</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Blackhawks</td><td>57.06%</td></tr>
<tr><td>2</td><td>Stars</td><td>55.38%</td></tr>
<tr><td>3</td><td>Maple Leafs</td><td>55.28%</td></tr>
<tr><td>4</td><td>Capitals</td><td>54.54%</td></tr>
<tr><td>5</td><td>Coyotes</td><td>54.40%</td></tr>
<tr><td>6</td><td>Hurricanes</td><td>54.29%</td></tr>
<tr><td>7</td><td>Bruins</td><td>54.08%</td></tr>
<tr><td>8</td><td>Canadiens</td><td>54.07%</td></tr>
<tr><td>9</td><td>Golden Knights</td><td>53.67%</td></tr>
<tr><td>10</td><td>Oilers</td><td>53.65%</td></tr>
<tr><td>11</td><td>Panthers</td><td>53.16%</td></tr>
<tr><td>12</td><td>Devils</td><td>53.14%</td></tr>
<tr><td>13</td><td>Kings</td><td>53.14%</td></tr>
<tr><td>14</td><td>Rangers</td><td>52.93%</td></tr>
<tr><td>15</td><td>Flames</td><td>52.35%</td></tr>
<tr><td>16</td><td>Jets</td><td>52.02%</td></tr>
<tr><td>17</td><td>Canucks</td><td>50.18%</td></tr>
<tr><td>18</td><td>Islanders</td><td>49.91%</td></tr>
<tr><td>19</td><td>Blue Jackets</td><td>49.35%</td></tr>
<tr><td>20</td><td>Sharks</td><td>48.89%</td></tr>
<tr><td>21</td><td>Avalanche</td><td>48.52%</td></tr>
<tr><td>22</td><td>Flyers</td><td>48.47%</td></tr>
<tr><td>23</td><td>Sabres</td><td>48.11%</td></tr>
<tr><td>24</td><td>Ducks</td><td>47.92%</td></tr>
<tr><td>25</td><td>Senators</td><td>47.59%</td></tr>
<tr><td>26</td><td>Wild</td><td>47.48%</td></tr>
<tr><td>27</td><td>Lightning</td><td>46.01%</td></tr>
<tr><td>28</td><td>Blues</td><td>45.04%</td></tr>
<tr><td>29</td><td>Penguins</td><td>44.53%</td></tr>
<tr><td>30</td><td>Predators</td><td>44.22%</td></tr>
<tr><td>31</td><td>Red Wings</td><td>44.13%</td></tr>
<tr><td>32</td><td>Kraken</td><td>43.07%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
