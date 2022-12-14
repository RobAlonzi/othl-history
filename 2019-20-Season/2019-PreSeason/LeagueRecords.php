<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - League Records</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.1.6.6" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
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
$Active = 5; /* Show Webpage Top Menu */
include "Menu.php";?>
<h1 class="STHSLeagueRecord_TeamRecords">Team Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="6"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Flyers</td><td>2010</td><td>1183</td><td>10</td><td></td></tr>
<tr><td>2</td><td>Stars</td><td>2012</td><td>1145</td><td>10</td><td></td></tr>
<tr><td>3</td><td>Hurricanes</td><td>2014</td><td>849</td><td>10</td><td></td></tr>
<tr><td>4</td><td>Stars</td><td>2014</td><td>1227</td><td>10</td><td></td></tr>
<tr><td>5</td><td>Flyers</td><td>2008</td><td>3</td><td>9</td><td></td></tr>
<tr><td>6</td><td>Capitals</td><td>2008</td><td>218</td><td>9</td><td></td></tr>
<tr><td>7</td><td>Panthers</td><td>2009</td><td>1033</td><td>9</td><td></td></tr>
<tr><td>8</td><td>Flyers</td><td>2009</td><td>1175</td><td>9</td><td></td></tr>
<tr><td>9</td><td>Canucks</td><td>2011</td><td>310</td><td>9</td><td></td></tr>
<tr><td>10</td><td>Flames</td><td>2011</td><td>553</td><td>9</td><td></td></tr>

<tr><td colspan="6"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Sabres</td><td>2008</td><td>321</td><td></td><td></td></tr>
<tr><td>2</td><td>Lightning</td><td>2015</td><td>321</td><td></td><td></td></tr>
<tr><td>3</td><td>Penguins</td><td>2009</td><td>318</td><td></td><td></td></tr>
<tr><td>4</td><td>Blackhawks</td><td>2008</td><td>315</td><td></td><td></td></tr>
<tr><td>5</td><td>Blues</td><td>2008</td><td>301</td><td></td><td></td></tr>
<tr><td>6</td><td>Senators</td><td>2009</td><td>300</td><td></td><td></td></tr>
<tr><td>7</td><td>Minnesota Wild</td><td>2018</td><td>272</td><td></td><td></td></tr>
<tr><td>8</td><td>Arizona Coyotes</td><td>2018</td><td>263</td><td></td><td></td></tr>
<tr><td>9</td><td>Boston Bruins</td><td>2018</td><td>258</td><td></td><td></td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>2018</td><td>258</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Capitals</td><td>2014</td><td>140</td><td></td><td></td></tr>
<tr><td>2</td><td>Coyotes</td><td>2013</td><td>145</td><td></td><td></td></tr>
<tr><td>3</td><td>Kings</td><td>2013</td><td>152</td><td></td><td></td></tr>
<tr><td>4</td><td>Red Wings</td><td>2015</td><td>153</td><td></td><td></td></tr>
<tr><td>5</td><td>Canadiens</td><td>2015</td><td>156</td><td></td><td></td></tr>
<tr><td>6</td><td>Kings</td><td>2014</td><td>168</td><td></td><td></td></tr>
<tr><td>7</td><td>Coyotes</td><td>2008</td><td>173</td><td></td><td></td></tr>
<tr><td>8</td><td>Penguins</td><td>2013</td><td>173</td><td></td><td></td></tr>
<tr><td>9</td><td>Philadelphia Flyers</td><td>2018</td><td>174</td><td></td><td></td></tr>
<tr><td>10</td><td>Kings</td><td>2012</td><td>177</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Blackhawks</td><td>2009</td><td>314</td><td></td><td></td></tr>
<tr><td>2</td><td>Blue Jackets</td><td>2008</td><td>313</td><td></td><td></td></tr>
<tr><td>3</td><td>Penguins</td><td>2012</td><td>305</td><td></td><td></td></tr>
<tr><td>4</td><td>Coyotes</td><td>2014</td><td>299</td><td></td><td></td></tr>
<tr><td>5</td><td>Bruins</td><td>2009</td><td>298</td><td></td><td></td></tr>
<tr><td>6</td><td>Maple Leafs</td><td>2008</td><td>297</td><td></td><td></td></tr>
<tr><td>7</td><td>Coyotes</td><td>2010</td><td>292</td><td></td><td></td></tr>
<tr><td>8</td><td>St. Louis Blues</td><td>2018</td><td>292</td><td></td><td></td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>2018</td><td>275</td><td></td><td></td></tr>
<tr><td>10</td><td>Carolina Hurricanes</td><td>2018</td><td>266</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Predators</td><td>2017</td><td>172</td><td></td><td></td></tr>
<tr><td>2</td><td>New York Islanders</td><td>2018</td><td>179</td><td></td><td></td></tr>
<tr><td>3</td><td>Hurricanes</td><td>2013</td><td>181</td><td></td><td></td></tr>
<tr><td>4</td><td>Edmonton Oilers</td><td>2018</td><td>183</td><td></td><td></td></tr>
<tr><td>5</td><td>Boston Bruins</td><td>2018</td><td>184</td><td></td><td></td></tr>
<tr><td>6</td><td>Wild</td><td>2013</td><td>185</td><td></td><td></td></tr>
<tr><td>7</td><td>Capitals</td><td>2015</td><td>186</td><td></td><td></td></tr>
<tr><td>8</td><td>Predators</td><td>2015</td><td>187</td><td></td><td></td></tr>
<tr><td>9</td><td>Oilers</td><td>2011</td><td>188</td><td></td><td></td></tr>
<tr><td>10</td><td>Hurricanes</td><td>2009</td><td>191</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Flyers</td><td>2010</td><td>1183</td><td>19</td><td></td></tr>
<tr><td>2</td><td>Rangers</td><td>2010</td><td>786</td><td>18</td><td></td></tr>
<tr><td>3</td><td>Penguins</td><td>2010</td><td>890</td><td>18</td><td></td></tr>
<tr><td>4</td><td>Panthers</td><td>2012</td><td>583</td><td>18</td><td></td></tr>
<tr><td>5</td><td>Stars</td><td>2014</td><td>1227</td><td>18</td><td></td></tr>
<tr><td>6</td><td>Flyers</td><td>2009</td><td>1175</td><td>17</td><td></td></tr>
<tr><td>7</td><td>Maple Leafs</td><td>2010</td><td>1203</td><td>17</td><td></td></tr>
<tr><td>8</td><td>Blackhawks</td><td>2013</td><td>927</td><td>17</td><td></td></tr>
<tr><td>9</td><td>Capitals</td><td>2016</td><td>1079</td><td>17</td><td></td></tr>
<tr><td>10</td><td>Canucks</td><td>2011</td><td>310</td><td>16</td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Sabres</td><td>2008</td><td>570</td><td></td><td></td></tr>
<tr><td>2</td><td>Penguins</td><td>2009</td><td>568</td><td></td><td></td></tr>
<tr><td>3</td><td>Lightning</td><td>2015</td><td>557</td><td></td><td></td></tr>
<tr><td>4</td><td>Blackhawks</td><td>2008</td><td>551</td><td></td><td></td></tr>
<tr><td>5</td><td>Senators</td><td>2009</td><td>537</td><td></td><td></td></tr>
<tr><td>6</td><td>Blues</td><td>2008</td><td>535</td><td></td><td></td></tr>
<tr><td>7</td><td>Minnesota Wild</td><td>2018</td><td>469</td><td></td><td></td></tr>
<tr><td>8</td><td>Arizona Coyotes</td><td>2018</td><td>456</td><td></td><td></td></tr>
<tr><td>9</td><td>Toronto Maple Leafs</td><td>2018</td><td>452</td><td></td><td></td></tr>
<tr><td>10</td><td>Boston Bruins</td><td>2018</td><td>450</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Capitals</td><td>2014</td><td>231</td><td></td><td></td></tr>
<tr><td>2</td><td>Coyotes</td><td>2013</td><td>238</td><td></td><td></td></tr>
<tr><td>3</td><td>Kings</td><td>2013</td><td>258</td><td></td><td></td></tr>
<tr><td>4</td><td>Red Wings</td><td>2015</td><td>258</td><td></td><td></td></tr>
<tr><td>5</td><td>Canucks</td><td>2015</td><td>267</td><td></td><td></td></tr>
<tr><td>6</td><td>Canadiens</td><td>2015</td><td>274</td><td></td><td></td></tr>
<tr><td>7</td><td>Kings</td><td>2014</td><td>294</td><td></td><td></td></tr>
<tr><td>8</td><td>Philadelphia Flyers</td><td>2018</td><td>297</td><td></td><td></td></tr>
<tr><td>9</td><td>Penguins</td><td>2013</td><td>299</td><td></td><td></td></tr>
<tr><td>10</td><td>Coyotes</td><td>2008</td><td>306</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Flyers</td><td>2010</td><td>1183</td><td>29</td><td></td></tr>
<tr><td>2</td><td>Stars</td><td>2014</td><td>1227</td><td>28</td><td></td></tr>
<tr><td>3</td><td>Rangers</td><td>2010</td><td>786</td><td>27</td><td></td></tr>
<tr><td>4</td><td>Penguins</td><td>2010</td><td>890</td><td>27</td><td></td></tr>
<tr><td>5</td><td>Panthers</td><td>2012</td><td>583</td><td>27</td><td></td></tr>
<tr><td>6</td><td>Flyers</td><td>2009</td><td>1175</td><td>26</td><td></td></tr>
<tr><td>7</td><td>Maple Leafs</td><td>2010</td><td>1203</td><td>26</td><td></td></tr>
<tr><td>8</td><td>Blackhawks</td><td>2013</td><td>927</td><td>26</td><td></td></tr>
<tr><td>9</td><td>Hurricanes</td><td>2014</td><td>849</td><td>26</td><td></td></tr>
<tr><td>10</td><td>Capitals</td><td>2016</td><td>1079</td><td>26</td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>2</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>3</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>4</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>5</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>6</td><td>Minnesota Wild</td><td>2018</td><td>741</td><td></td><td></td></tr>
<tr><td>7</td><td>Arizona Coyotes</td><td>2018</td><td>719</td><td></td><td></td></tr>
<tr><td>8</td><td>Boston Bruins</td><td>2018</td><td>708</td><td></td><td></td></tr>
<tr><td>9</td><td>Toronto Maple Leafs</td><td>2018</td><td>701</td><td></td><td></td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>2018</td><td>700</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Game Points  in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Capitals</td><td>2014</td><td>371</td><td></td><td></td></tr>
<tr><td>2</td><td>Coyotes</td><td>2013</td><td>383</td><td></td><td></td></tr>
<tr><td>3</td><td>Kings</td><td>2013</td><td>410</td><td></td><td></td></tr>
<tr><td>4</td><td>Red Wings</td><td>2015</td><td>411</td><td></td><td></td></tr>
<tr><td>5</td><td>Canadiens</td><td>2015</td><td>430</td><td></td><td></td></tr>
<tr><td>6</td><td>Kings</td><td>2014</td><td>462</td><td></td><td></td></tr>
<tr><td>7</td><td>Philadelphia Flyers</td><td>2018</td><td>471</td><td></td><td></td></tr>
<tr><td>8</td><td>Penguins</td><td>2013</td><td>472</td><td></td><td></td></tr>
<tr><td>9</td><td>Coyotes</td><td>2008</td><td>479</td><td></td><td></td></tr>
<tr><td>10</td><td>Kings</td><td>2012</td><td>491</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Blues</td><td>2008</td><td>29</td><td>64</td><td></td></tr>
<tr><td>2</td><td>Toronto Maple Leafs</td><td>2018</td><td>437</td><td>63</td><td></td></tr>
<tr><td>3</td><td>Boston Bruins</td><td>2018</td><td>1020</td><td>63</td><td></td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>2018</td><td>444</td><td>62</td><td></td></tr>
<tr><td>5</td><td>San Jose Sharks</td><td>2018</td><td>1057</td><td>61</td><td></td></tr>
<tr><td>6</td><td>Hurricanes</td><td>2008</td><td>367</td><td>59</td><td></td></tr>
<tr><td>7</td><td>Lightning</td><td>2015</td><td>159</td><td>59</td><td></td></tr>
<tr><td>8</td><td>Sharks</td><td>2019</td><td>96</td><td>59</td><td><a href="OTHL-96.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Wild</td><td>2010</td><td>509</td><td>58</td><td></td></tr>
<tr><td>10</td><td>Stars</td><td>2012</td><td>741</td><td>58</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Nashville Predators</td><td>2018</td><td>2961</td><td></td><td></td></tr>
<tr><td>2</td><td>Stars</td><td>2017</td><td>2952</td><td></td><td></td></tr>
<tr><td>3</td><td>Arizona Coyotes</td><td>2018</td><td>2946</td><td></td><td></td></tr>
<tr><td>4</td><td>Dallas Stars</td><td>2018</td><td>2916</td><td></td><td></td></tr>
<tr><td>5</td><td>Boston Bruins</td><td>2018</td><td>2835</td><td></td><td></td></tr>
<tr><td>6</td><td>Bruins</td><td>2017</td><td>2818</td><td></td><td></td></tr>
<tr><td>7</td><td>Toronto Maple Leafs</td><td>2018</td><td>2812</td><td></td><td></td></tr>
<tr><td>8</td><td>Lightning</td><td>2015</td><td>2801</td><td></td><td></td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>2017</td><td>2798</td><td></td><td></td></tr>
<tr><td>10</td><td>Capitals</td><td>2017</td><td>2771</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Capitals</td><td>2014</td><td>1668</td><td></td><td></td></tr>
<tr><td>2</td><td>Coyotes</td><td>2013</td><td>1676</td><td></td><td></td></tr>
<tr><td>3</td><td>Canadiens</td><td>2013</td><td>1688</td><td></td><td></td></tr>
<tr><td>4</td><td>Canadiens</td><td>2015</td><td>1726</td><td></td><td></td></tr>
<tr><td>5</td><td>Islanders</td><td>2016</td><td>1728</td><td></td><td></td></tr>
<tr><td>6</td><td>Kings</td><td>2014</td><td>1761</td><td></td><td></td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>2012</td><td>1777</td><td></td><td></td></tr>
<tr><td>8</td><td>Canadiens</td><td>2014</td><td>1783</td><td></td><td></td></tr>
<tr><td>9</td><td>Kings</td><td>2013</td><td>1808</td><td></td><td></td></tr>
<tr><td>10</td><td>Coyotes</td><td>2008</td><td>1841</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Devils</td><td>2010</td><td>799</td><td>26</td><td></td></tr>
<tr><td>2</td><td>Predators</td><td>2011</td><td>7</td><td>26</td><td></td></tr>
<tr><td>3</td><td>Red Wings</td><td>2011</td><td>313</td><td>26</td><td></td></tr>
<tr><td>4</td><td>Columbus Blue Jackets</td><td>2018</td><td>1191</td><td>25</td><td></td></tr>
<tr><td>5</td><td>Capitals</td><td>2012</td><td>1193</td><td>24</td><td></td></tr>
<tr><td>6</td><td>Ducks</td><td>2017</td><td>240</td><td>24</td><td></td></tr>
<tr><td>7</td><td>Bruins</td><td>2010</td><td>426</td><td>23</td><td></td></tr>
<tr><td>8</td><td>Stars</td><td>2011</td><td>566</td><td>23</td><td></td></tr>
<tr><td>9</td><td>Hurricanes</td><td>2012</td><td>656</td><td>23</td><td></td></tr>
<tr><td>10</td><td>Canucks</td><td>2016</td><td>829</td><td>23</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>2</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>3</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>4</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>5</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>6</td><td>St. Louis Blues</td><td>2018</td><td>860</td><td></td><td></td></tr>
<tr><td>7</td><td>Colorado Avalanche</td><td>2018</td><td>818</td><td></td><td></td></tr>
<tr><td>8</td><td>Vancouver Canucks</td><td>2018</td><td>814</td><td></td><td></td></tr>
<tr><td>9</td><td>Nashville Predators</td><td>2018</td><td>813</td><td></td><td></td></tr>
<tr><td>10</td><td>Chicago Blackhawks</td><td>2018</td><td>803</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Hurricanes</td><td>2009</td><td>542</td><td></td><td></td></tr>
<tr><td>2</td><td>Senators</td><td>2014</td><td>546</td><td></td><td></td></tr>
<tr><td>3</td><td>Ducks</td><td>2013</td><td>548</td><td></td><td></td></tr>
<tr><td>4</td><td>Blues</td><td>2015</td><td>549</td><td></td><td></td></tr>
<tr><td>5</td><td>Blues</td><td>2013</td><td>550</td><td></td><td></td></tr>
<tr><td>6</td><td>Sharks</td><td>2012</td><td>551</td><td></td><td></td></tr>
<tr><td>7</td><td>Senators</td><td>2009</td><td>556</td><td></td><td></td></tr>
<tr><td>8</td><td>Blues</td><td>2010</td><td>556</td><td></td><td></td></tr>
<tr><td>9</td><td>Sabres</td><td>2008</td><td>569</td><td></td><td></td></tr>
<tr><td>10</td><td>Islanders</td><td>2008</td><td>572</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>St. Louis Blues</td><td>2018</td><td>3012</td><td></td><td></td></tr>
<tr><td>2</td><td>Flyers</td><td>2017</td><td>3008</td><td></td><td></td></tr>
<tr><td>3</td><td>Carolina Hurricanes</td><td>2018</td><td>2836</td><td></td><td></td></tr>
<tr><td>4</td><td>Nashville Predators</td><td>2018</td><td>2800</td><td></td><td></td></tr>
<tr><td>5</td><td>Chicago Blackhawks</td><td>2018</td><td>2780</td><td></td><td></td></tr>
<tr><td>6</td><td>Jets</td><td>2017</td><td>2760</td><td></td><td></td></tr>
<tr><td>7</td><td>Red Wings</td><td>2017</td><td>2759</td><td></td><td></td></tr>
<tr><td>8</td><td>Detroit Red Wings</td><td>2018</td><td>2752</td><td></td><td></td></tr>
<tr><td>9</td><td>Hurricanes</td><td>2017</td><td>2747</td><td></td><td></td></tr>
<tr><td>10</td><td>Canucks</td><td>2017</td><td>2741</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Hurricanes</td><td>2009</td><td>1822</td><td></td><td></td></tr>
<tr><td>2</td><td>Blues</td><td>2010</td><td>1896</td><td></td><td></td></tr>
<tr><td>3</td><td>Panthers</td><td>2013</td><td>1921</td><td></td><td></td></tr>
<tr><td>4</td><td>Hurricanes</td><td>2013</td><td>1923</td><td></td><td></td></tr>
<tr><td>5</td><td>Devils</td><td>2014</td><td>1949</td><td></td><td></td></tr>
<tr><td>6</td><td>Sharks</td><td>2010</td><td>1960</td><td></td><td></td></tr>
<tr><td>7</td><td>Stars</td><td>2010</td><td>1973</td><td></td><td></td></tr>
<tr><td>8</td><td>Sabres</td><td>2008</td><td>1995</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Maple Leafs</td><td>2009</td><td>382</td><td>97</td><td></td></tr>
<tr><td>2</td><td>Canucks</td><td>2015</td><td>873</td><td>77</td><td></td></tr>
<tr><td>3</td><td>Penguins</td><td>2009</td><td>738</td><td>76</td><td></td></tr>
<tr><td>4</td><td>Sharks</td><td>2008</td><td>1006</td><td>74</td><td></td></tr>
<tr><td>5</td><td>Canadiens</td><td>2011</td><td>1115</td><td>74</td><td></td></tr>
<tr><td>6</td><td>Panthers</td><td>2016</td><td>592</td><td>74</td><td></td></tr>
<tr><td>7</td><td>Maple Leafs</td><td>2016</td><td>650</td><td>74</td><td></td></tr>
<tr><td>8</td><td>Lightning</td><td>2008</td><td>367</td><td>73</td><td></td></tr>
<tr><td>9</td><td>Wild</td><td>2013</td><td>832</td><td>72</td><td></td></tr>
<tr><td>10</td><td>Kings</td><td>2016</td><td>919</td><td>70</td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Maple Leafs</td><td>2009</td><td>1628</td><td></td><td></td></tr>
<tr><td>2</td><td>Maple Leafs</td><td>2010</td><td>1602</td><td></td><td></td></tr>
<tr><td>3</td><td>Blackhawks</td><td>2008</td><td>1557</td><td></td><td></td></tr>
<tr><td>4</td><td>Maple Leafs</td><td>2008</td><td>1522</td><td></td><td></td></tr>
<tr><td>5</td><td>Devils</td><td>2010</td><td>1522</td><td></td><td></td></tr>
<tr><td>6</td><td>Toronto Maple Leafs</td><td>2018</td><td>881</td><td></td><td></td></tr>
<tr><td>7</td><td>Vegas Golden Knights</td><td>2018</td><td>872</td><td></td><td></td></tr>
<tr><td>8</td><td>Calgary Flames</td><td>2018</td><td>799</td><td></td><td></td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>2018</td><td>786</td><td></td><td></td></tr>
<tr><td>10</td><td>Florida Panthers</td><td>2018</td><td>771</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Arizona Coyotes</td><td>2018</td><td>474</td><td></td><td></td></tr>
<tr><td>2</td><td>Chicago Blackhawks</td><td>2018</td><td>499</td><td></td><td></td></tr>
<tr><td>3</td><td>Blues</td><td>2011</td><td>516</td><td></td><td></td></tr>
<tr><td>4</td><td>Lightning</td><td>2017</td><td>520</td><td></td><td></td></tr>
<tr><td>5</td><td>Red Wings</td><td>2017</td><td>528</td><td></td><td></td></tr>
<tr><td>6</td><td>Anaheim Ducks</td><td>2018</td><td>531</td><td></td><td></td></tr>
<tr><td>7</td><td>Blues</td><td>2013</td><td>539</td><td></td><td></td></tr>
<tr><td>8</td><td>Blues</td><td>2014</td><td>540</td><td></td><td></td></tr>
<tr><td>9</td><td>Stars</td><td>2017</td><td>545</td><td></td><td></td></tr>
<tr><td>10</td><td>Ducks</td><td>2017</td><td>551</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Flames</td><td>2014</td><td>15</td><td>50</td><td></td></tr>
<tr><td>2</td><td>Canadiens</td><td>2011</td><td>142</td><td>45</td><td></td></tr>
<tr><td>3</td><td>Penguins</td><td>2011</td><td>832</td><td>45</td><td></td></tr>
<tr><td>4</td><td>Lightning</td><td>2008</td><td>1031</td><td>44</td><td></td></tr>
<tr><td>5</td><td>Maple Leafs</td><td>2010</td><td>105</td><td>43</td><td></td></tr>
<tr><td>6</td><td>Islanders</td><td>2011</td><td>129</td><td>42</td><td></td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>2011</td><td>70</td><td>41</td><td></td></tr>
<tr><td>8</td><td>Stars</td><td>2011</td><td>309</td><td>41</td><td></td></tr>
<tr><td>9</td><td>Canadiens</td><td>2011</td><td>878</td><td>41</td><td></td></tr>
<tr><td>10</td><td>Hurricanes</td><td>2011</td><td>938</td><td>41</td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Islanders</td><td>2011</td><td>2070</td><td></td><td></td></tr>
<tr><td>2</td><td>Flyers</td><td>2011</td><td>2048</td><td></td><td></td></tr>
<tr><td>3</td><td>Blue Jackets</td><td>2011</td><td>2046</td><td></td><td></td></tr>
<tr><td>4</td><td>Blackhawks</td><td>2011</td><td>2044</td><td></td><td></td></tr>
<tr><td>5</td><td>Canadiens</td><td>2011</td><td>2033</td><td></td><td></td></tr>
<tr><td>6</td><td>Ducks</td><td>2011</td><td>2004</td><td></td><td></td></tr>
<tr><td>7</td><td>Sabres</td><td>2011</td><td>1998</td><td></td><td></td></tr>
<tr><td>8</td><td>Red Wings</td><td>2011</td><td>1991</td><td></td><td></td></tr>
<tr><td>9</td><td>Flames</td><td>2011</td><td>1965</td><td></td><td></td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>2018</td><td>1904</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Blues</td><td>2009</td><td>1263</td><td></td><td></td></tr>
<tr><td>2</td><td>Hurricanes</td><td>2009</td><td>1316</td><td></td><td></td></tr>
<tr><td>3</td><td>Hurricanes</td><td>2010</td><td>1336</td><td></td><td></td></tr>
<tr><td>4</td><td>Blues</td><td>2010</td><td>1364</td><td></td><td></td></tr>
<tr><td>5</td><td>Senators</td><td>2009</td><td>1371</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Buffalo Sabres</td><td>2018</td><td>7</td><td></td><td></td></tr>
<tr><td>2</td><td>Rangers</td><td>2011</td><td>6</td><td></td><td></td></tr>
<tr><td>3</td><td>Minnesota Wild</td><td>2018</td><td>6</td><td></td><td></td></tr>
<tr><td>4</td><td>Devils</td><td>2013</td><td>5</td><td></td><td></td></tr>
<tr><td>5</td><td>Canucks</td><td>2013</td><td>5</td><td></td><td></td></tr>
<tr><td>6</td><td>Blue Jackets</td><td>2017</td><td>5</td><td></td><td></td></tr>
<tr><td>7</td><td>Stars</td><td>2017</td><td>5</td><td></td><td></td></tr>
<tr><td>8</td><td>Ottawa Senators</td><td>2018</td><td>5</td><td></td><td></td></tr>
<tr><td>9</td><td>San Jose Sharks</td><td>2018</td><td>5</td><td></td><td></td></tr>
<tr><td>10</td><td>Thrashers</td><td>2008</td><td>4</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Stars</td><td>2012</td><td>25.90%</td><td></td><td></td></tr>
<tr><td>2</td><td>Panthers</td><td>2012</td><td>25.20%</td><td></td><td></td></tr>
<tr><td>3</td><td>Maple Leafs</td><td>2015</td><td>25.10%</td><td></td><td></td></tr>
<tr><td>4</td><td>Florida Panthers</td><td>2018</td><td>24.50%</td><td></td><td></td></tr>
<tr><td>5</td><td>Maple Leafs</td><td>2011</td><td>23.80%</td><td></td><td></td></tr>
<tr><td>6</td><td>Coyotes</td><td>2017</td><td>23.50%</td><td></td><td></td></tr>
<tr><td>7</td><td>Bruins</td><td>2011</td><td>23.10%</td><td></td><td></td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>2018</td><td>22.70%</td><td></td><td></td></tr>
<tr><td>9</td><td>Stars</td><td>2009</td><td>22.50%</td><td></td><td></td></tr>
<tr><td>10</td><td>Minnesota Wild</td><td>2018</td><td>22.10%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Devils</td><td>2012</td><td>89.70%</td><td></td><td></td></tr>
<tr><td>2</td><td>Red Wings</td><td>2014</td><td>89.60%</td><td></td><td></td></tr>
<tr><td>3</td><td>Oilers</td><td>2012</td><td>88.40%</td><td></td><td></td></tr>
<tr><td>4</td><td>Blues</td><td>2013</td><td>88.40%</td><td></td><td></td></tr>
<tr><td>5</td><td>Predators</td><td>2015</td><td>88.40%</td><td></td><td></td></tr>
<tr><td>6</td><td>Calgary Flames</td><td>2018</td><td>88.40%</td><td></td><td></td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>2014</td><td>88.30%</td><td></td><td></td></tr>
<tr><td>8</td><td>Blackhawks</td><td>2008</td><td>87.80%</td><td></td><td></td></tr>
<tr><td>9</td><td>Islanders</td><td>2008</td><td>87.50%</td><td></td><td></td></tr>
<tr><td>10</td><td>Oilers</td><td>2013</td><td>87.30%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Capitals</td><td>2014</td><td>8.30%</td><td></td><td></td></tr>
<tr><td>2</td><td>Blues</td><td>2017</td><td>8.90%</td><td></td><td></td></tr>
<tr><td>3</td><td>Penguins</td><td>2017</td><td>10.00%</td><td></td><td></td></tr>
<tr><td>4</td><td>Red Wings</td><td>2015</td><td>10.30%</td><td></td><td></td></tr>
<tr><td>5</td><td>Flyers</td><td>2015</td><td>10.40%</td><td></td><td></td></tr>
<tr><td>6</td><td>Canadiens</td><td>2015</td><td>10.50%</td><td></td><td></td></tr>
<tr><td>7</td><td>Rangers</td><td>2015</td><td>10.60%</td><td></td><td></td></tr>
<tr><td>8</td><td>Maple Leafs</td><td>2008</td><td>11.10%</td><td></td><td></td></tr>
<tr><td>9</td><td>Coyotes</td><td>2014</td><td>11.10%</td><td></td><td></td></tr>
<tr><td>10</td><td>Penguins</td><td>2014</td><td>11.40%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Wild</td><td>2011</td><td>74.50%</td><td></td><td></td></tr>
<tr><td>2</td><td>St. Louis Blues</td><td>2018</td><td>75.30%</td><td></td><td></td></tr>
<tr><td>3</td><td>Blackhawks</td><td>2016</td><td>76.50%</td><td></td><td></td></tr>
<tr><td>4</td><td>Canadiens</td><td>2016</td><td>76.70%</td><td></td><td></td></tr>
<tr><td>5</td><td>Islanders</td><td>2016</td><td>76.80%</td><td></td><td></td></tr>
<tr><td>6</td><td>Nashville Predators</td><td>2018</td><td>76.80%</td><td></td><td></td></tr>
<tr><td>7</td><td>Pittsburgh Penguins</td><td>2018</td><td>76.90%</td><td></td><td></td></tr>
<tr><td>8</td><td>Columbus Blue Jackets</td><td>2018</td><td>77.10%</td><td></td><td></td></tr>
<tr><td>9</td><td>Ducks</td><td>2011</td><td>77.20%</td><td></td><td></td></tr>
<tr><td>10</td><td>Canucks</td><td>2015</td><td>77.20%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lightning</td><td>2015</td><td>58</td><td></td><td></td></tr>
<tr><td>2</td><td>Blackhawks</td><td>2012</td><td>57</td><td></td><td></td></tr>
<tr><td>3</td><td>Sabres</td><td>2009</td><td>56</td><td></td><td></td></tr>
<tr><td>4</td><td>Penguins</td><td>2009</td><td>56</td><td></td><td></td></tr>
<tr><td>5</td><td>Lightning</td><td>2014</td><td>56</td><td></td><td></td></tr>
<tr><td>6</td><td>Boston Bruins</td><td>2018</td><td>56</td><td></td><td></td></tr>
<tr><td>7</td><td>Canucks</td><td>2010</td><td>55</td><td></td><td></td></tr>
<tr><td>8</td><td>Panthers</td><td>2012</td><td>55</td><td></td><td></td></tr>
<tr><td>9</td><td>Red Wings</td><td>2010</td><td>54</td><td></td><td></td></tr>
<tr><td>10</td><td>Sharks</td><td>2008</td><td>53</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Flyers</td><td>2017</td><td>13</td><td></td><td></td></tr>
<tr><td>2</td><td>Canadiens</td><td>2015</td><td>16</td><td></td><td></td></tr>
<tr><td>3</td><td>Coyotes</td><td>2008</td><td>18</td><td></td><td></td></tr>
<tr><td>4</td><td>Maple Leafs</td><td>2008</td><td>16</td><td></td><td></td></tr>
<tr><td>5</td><td>Kings</td><td>2014</td><td>18</td><td></td><td></td></tr>
<tr><td>6</td><td>Blackhawks</td><td>2009</td><td>20</td><td></td><td></td></tr>
<tr><td>7</td><td>Kings</td><td>2013</td><td>21</td><td></td><td></td></tr>
<tr><td>8</td><td>Penguins</td><td>2013</td><td>23</td><td></td><td></td></tr>
<tr><td>9</td><td>Bruins</td><td>2008</td><td>25</td><td></td><td></td></tr>
<tr><td>10</td><td>Blue Jackets</td><td>2008</td><td>18</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Flyers</td><td>2017</td><td>69</td><td></td><td></td></tr>
<tr><td>2</td><td>Canadiens</td><td>2015</td><td>66</td><td></td><td></td></tr>
<tr><td>3</td><td>Kings</td><td>2014</td><td>64</td><td></td><td></td></tr>
<tr><td>4</td><td>Blackhawks</td><td>2009</td><td>62</td><td></td><td></td></tr>
<tr><td>5</td><td>Penguins</td><td>2017</td><td>62</td><td></td><td></td></tr>
<tr><td>6</td><td>Kings</td><td>2013</td><td>61</td><td></td><td></td></tr>
<tr><td>7</td><td>Canucks</td><td>2016</td><td>60</td><td></td><td></td></tr>
<tr><td>8</td><td>Penguins</td><td>2013</td><td>59</td><td></td><td></td></tr>
<tr><td>9</td><td>Capitals</td><td>2014</td><td>59</td><td></td><td></td></tr>
<tr><td>10</td><td>Maple Leafs</td><td>2008</td><td>57</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Sabres</td><td>2008</td><td>22</td><td></td><td></td></tr>
<tr><td>2</td><td>Blackhawks</td><td>2008</td><td>21</td><td></td><td></td></tr>
<tr><td>3</td><td>Blues</td><td>2008</td><td>21</td><td></td><td></td></tr>
<tr><td>4</td><td>Sharks</td><td>2008</td><td>18</td><td></td><td></td></tr>
<tr><td>5</td><td>Lightning</td><td>2015</td><td>24</td><td></td><td></td></tr>
<tr><td>6</td><td>Blackhawks</td><td>2012</td><td>25</td><td></td><td></td></tr>
<tr><td>7</td><td>Ducks</td><td>2008</td><td>26</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lightning</td><td>2015</td><td>124</td><td></td><td></td></tr>
<tr><td>2</td><td>Sharks</td><td>2008</td><td>122</td><td></td><td></td></tr>
<tr><td>3</td><td>Sabres</td><td>2009</td><td>120</td><td></td><td></td></tr>
<tr><td>4</td><td>Blackhawks</td><td>2012</td><td>120</td><td></td><td></td></tr>
<tr><td>5</td><td>Blackhawks</td><td>2008</td><td>119</td><td></td><td></td></tr>
<tr><td>6</td><td>Blues</td><td>2008</td><td>119</td><td></td><td></td></tr>
<tr><td>7</td><td>Boston Bruins</td><td>2018</td><td>118</td><td></td><td></td></tr>
<tr><td>8</td><td>Sabres</td><td>2008</td><td>117</td><td></td><td></td></tr>
<tr><td>9</td><td>Edmonton Oilers</td><td>2018</td><td>113</td><td></td><td></td></tr>
<tr><td>10</td><td>New York Islanders</td><td>2018</td><td>113</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Flyers</td><td>2017</td><td>38</td><td></td><td></td></tr>
<tr><td>2</td><td>Canadiens</td><td>2015</td><td>39</td><td></td><td></td></tr>
<tr><td>3</td><td>Maple Leafs</td><td>2008</td><td>46</td><td></td><td></td></tr>
<tr><td>4</td><td>Canucks</td><td>2016</td><td>48</td><td></td><td></td></tr>
<tr><td>5</td><td>Blackhawks</td><td>2009</td><td>49</td><td></td><td></td></tr>
<tr><td>6</td><td>Kings</td><td>2014</td><td>50</td><td></td><td></td></tr>
<tr><td>7</td><td>Capitals</td><td>2014</td><td>50</td><td></td><td></td></tr>
<tr><td>8</td><td>Kings</td><td>2013</td><td>54</td><td></td><td></td></tr>
<tr><td>9</td><td>Coyotes</td><td>2008</td><td>55</td><td></td><td></td></tr>
<tr><td>10</td><td>Penguins</td><td>2013</td><td>55</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>2</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>3</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>4</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>5</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>6</td><td>Boston Bruins</td><td>2018</td><td>28</td><td></td><td></td></tr>
<tr><td>7</td><td>New York Rangers</td><td>2018</td><td>28</td><td></td><td></td></tr>
<tr><td>8</td><td>Detroit Red Wings</td><td>2018</td><td>25</td><td></td><td></td></tr>
<tr><td>9</td><td>Dallas Stars</td><td>2018</td><td>24</td><td></td><td></td></tr>
<tr><td>10</td><td>Minnesota Wild</td><td>2018</td><td>24</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Team Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>2</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>3</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>4</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>5</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>6</td><td>New York Islanders</td><td>2018</td><td>25</td><td></td><td></td></tr>
<tr><td>7</td><td>Boston Bruins</td><td>2018</td><td>24</td><td></td><td></td></tr>
<tr><td>8</td><td>Edmonton Oilers</td><td>2018</td><td>22</td><td></td><td></td></tr>
<tr><td>9</td><td>Buffalo Sabres</td><td>2018</td><td>20</td><td></td><td></td></tr>
<tr><td>10</td><td>Toronto Maple Leafs</td><td>2018</td><td>20</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_PlayersRecords">Players Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Ice Time In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Brent Seabrook</td><td>Flames</td><td>2011</td><td>640</td><td>35:16</td><td></td></tr>
<tr><td>2</td><td>Dion Phaneuf</td><td>Rangers</td><td>2011</td><td>781</td><td>34:49</td><td></td></tr>
<tr><td>3</td><td>Francois Beauchemin</td><td>Coyotes</td><td>2011</td><td>634</td><td>34:22</td><td></td></tr>
<tr><td>4</td><td>Alexander Edler</td><td>Bruins</td><td>2011</td><td>142</td><td>34:21</td><td></td></tr>
<tr><td>5</td><td>Kimmo Timonen</td><td>Blues</td><td>2011</td><td>903</td><td>34:17</td><td></td></tr>
<tr><td>6</td><td>Matthew Greene</td><td>Jets</td><td>2011</td><td>103</td><td>34:16</td><td></td></tr>
<tr><td>7</td><td>Carl Gunnarsson</td><td>Rangers</td><td>2011</td><td>699</td><td>34:12</td><td></td></tr>
<tr><td>8</td><td>Dan Hamhuis</td><td>Lightning</td><td>2011</td><td>1041</td><td>34:03</td><td></td></tr>
<tr><td>9</td><td>Eric Brewer</td><td>Canucks</td><td>2011</td><td>517</td><td>34:01</td><td></td></tr>
<tr><td>10</td><td>Steve Eminger</td><td>Coyotes</td><td>2011</td><td>334</td><td>33:48</td><td></td></tr>

<tr><td colspan="7"><b>Most Ice Time In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Francois Beauchemin</td><td>Coyotes</td><td>2011</td><td>2373</td><td></td><td></td></tr>
<tr><td>2</td><td>Jay Bouwmeester</td><td>Flyers</td><td>2011</td><td>2271</td><td></td><td></td></tr>
<tr><td>3</td><td>Toni Lydman</td><td>Bruins</td><td>2011</td><td>2263</td><td></td><td></td></tr>
<tr><td>4</td><td>Paul Martin</td><td>Hurricanes</td><td>2011</td><td>2235</td><td></td><td></td></tr>
<tr><td>5</td><td>Jay Bouwmeester</td><td>Flyers</td><td>2012</td><td>2235</td><td></td><td></td></tr>
<tr><td>6</td><td>Ryan Whitney</td><td>Jets</td><td>2011</td><td>2231</td><td></td><td></td></tr>
<tr><td>7</td><td>Ryan Suter</td><td>Panthers</td><td>2011</td><td>2225</td><td></td><td></td></tr>
<tr><td>8</td><td>Marc Staal</td><td>Rangers</td><td>2011</td><td>2197</td><td></td><td></td></tr>
<tr><td>9</td><td>Kimmo Timonen</td><td>Blues</td><td>2011</td><td>2196</td><td></td><td></td></tr>
<tr><td>10</td><td>Scott Hannan</td><td>Avalanche</td><td>2011</td><td>2192</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Jarome Iginla</td><td>Blackhawks</td><td>2008</td><td>381</td><td>5</td><td></td></tr>
<tr><td>2</td><td>Jason Arnott</td><td>Coyotes</td><td>2009</td><td>555</td><td>5</td><td></td></tr>
<tr><td>3</td><td>Jonathan Toews</td><td>Panthers</td><td>2013</td><td>1216</td><td>5</td><td></td></tr>
<tr><td>4</td><td>Joe Sakic</td><td>Blackhawks</td><td>2008</td><td>133</td><td>4</td><td></td></tr>
<tr><td>5</td><td>Paul Kariya</td><td>Oilers</td><td>2008</td><td>376</td><td>4</td><td></td></tr>
<tr><td>6</td><td>Patrick Eaves</td><td>Devils</td><td>2008</td><td>945</td><td>4</td><td></td></tr>
<tr><td>7</td><td>Phil Kessel</td><td>Red Wings</td><td>2011</td><td>58</td><td>4</td><td></td></tr>
<tr><td>8</td><td>Vincent Lecavalier</td><td>Kings</td><td>2011</td><td>344</td><td>4</td><td></td></tr>
<tr><td>9</td><td>Corey Perry</td><td>Oilers</td><td>2011</td><td>963</td><td>4</td><td></td></tr>
<tr><td>10</td><td>Ville Leino</td><td>Capitals</td><td>2011</td><td>1154</td><td>4</td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Alexander Ovechkin</td><td>Panthers</td><td>2012</td><td>56</td><td></td><td></td></tr>
<tr><td>2</td><td>Mike Cammalleri</td><td>Kings</td><td>2009</td><td>55</td><td></td><td></td></tr>
<tr><td>3</td><td>Alexander Ovechkin</td><td>Blackhawks</td><td>2008</td><td>54</td><td></td><td></td></tr>
<tr><td>4</td><td>Jarome Iginla</td><td>Blackhawks</td><td>2008</td><td>53</td><td></td><td></td></tr>
<tr><td>5</td><td>Alexander Ovechkin</td><td>Penguins</td><td>2015</td><td>53</td><td></td><td></td></tr>
<tr><td>6</td><td>Vincent Trocheck</td><td>Ottawa Senators</td><td>2018</td><td>52</td><td></td><td></td></tr>
<tr><td>7</td><td>Corey Perry</td><td>Oilers</td><td>2012</td><td>51</td><td></td><td></td></tr>
<tr><td>8</td><td>Eric Staal</td><td>Oilers</td><td>2008</td><td>49</td><td></td><td></td></tr>
<tr><td>9</td><td>Corey Perry</td><td>Oilers</td><td>2011</td><td>49</td><td></td><td></td></tr>
<tr><td>10</td><td>Rick Nash</td><td>Sharks</td><td>2009</td><td>48</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Brian Rafalski</td><td>Coyotes</td><td>2009</td><td>555</td><td>7</td><td></td></tr>
<tr><td>2</td><td>Doug Weight</td><td>Red Wings</td><td>2008</td><td>225</td><td>5</td><td></td></tr>
<tr><td>3</td><td>Jeff Carter</td><td>Penguins</td><td>2008</td><td>546</td><td>5</td><td></td></tr>
<tr><td>4</td><td>Jay Bouwmeester</td><td>Penguins</td><td>2009</td><td>383</td><td>5</td><td></td></tr>
<tr><td>5</td><td>Nicklas Lidstrom</td><td>Sharks</td><td>2010</td><td>494</td><td>5</td><td></td></tr>
<tr><td>6</td><td>Joe Pavelski</td><td>Red Wings</td><td>2011</td><td>58</td><td>5</td><td></td></tr>
<tr><td>7</td><td>Jussi Jokinen</td><td>Canucks</td><td>2011</td><td>310</td><td>5</td><td></td></tr>
<tr><td>8</td><td>Marcus Foligno</td><td>Canucks</td><td>2013</td><td>788</td><td>5</td><td></td></tr>
<tr><td>9</td><td>Nicklas Backstrom</td><td>Ducks</td><td>2013</td><td>1072</td><td>5</td><td></td></tr>
<tr><td>10</td><td>Patrick Marleau</td><td>Stars</td><td>2014</td><td>652</td><td>5</td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Eric Staal</td><td>Oilers</td><td>2012</td><td>79</td><td></td><td></td></tr>
<tr><td>2</td><td>Joe Pavelski</td><td>Stars</td><td>2014</td><td>79</td><td></td><td></td></tr>
<tr><td>3</td><td>Marc Savard</td><td>Kings</td><td>2009</td><td>76</td><td></td><td></td></tr>
<tr><td>4</td><td>Connor McDavid</td><td>Detroit Red Wings</td><td>2018</td><td>74</td><td></td><td></td></tr>
<tr><td>5</td><td>Roman Josi</td><td>Rangers</td><td>2016</td><td>73</td><td></td><td></td></tr>
<tr><td>6</td><td>Mike Ribeiro</td><td>Flames</td><td>2011</td><td>72</td><td></td><td></td></tr>
<tr><td>7</td><td>Anze Kopitar</td><td>Flyers</td><td>2013</td><td>72</td><td></td><td></td></tr>
<tr><td>8</td><td>Anze Kopitar</td><td>Flyers</td><td>2012</td><td>70</td><td></td><td></td></tr>
<tr><td>9</td><td>P.K. Subban</td><td>Los Angeles Kings</td><td>2018</td><td>70</td><td></td><td></td></tr>
<tr><td>10</td><td>Sidney Crosby</td><td>Sabres</td><td>2011</td><td>69</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Brian Rafalski</td><td>Coyotes</td><td>2009</td><td>555</td><td>7</td><td></td></tr>
<tr><td>2</td><td>Evgeni Malkin</td><td>Maple Leafs</td><td>2010</td><td>105</td><td>7</td><td></td></tr>
<tr><td>3</td><td>Max Pacioretty</td><td>Stars</td><td>2014</td><td>286</td><td>7</td><td></td></tr>
<tr><td>4</td><td>Jarome Iginla</td><td>Blackhawks</td><td>2008</td><td>381</td><td>6</td><td></td></tr>
<tr><td>5</td><td>Jason Arnott</td><td>Coyotes</td><td>2009</td><td>555</td><td>6</td><td></td></tr>
<tr><td>6</td><td>Tomas Plekanec</td><td>Blues</td><td>2009</td><td>1139</td><td>6</td><td></td></tr>
<tr><td>7</td><td>Jussi Jokinen</td><td>Canucks</td><td>2011</td><td>310</td><td>6</td><td></td></tr>
<tr><td>8</td><td>Jamie Benn</td><td>Flames</td><td>2011</td><td>493</td><td>6</td><td></td></tr>
<tr><td>9</td><td>Jonathan Toews</td><td>Panthers</td><td>2012</td><td>583</td><td>6</td><td></td></tr>
<tr><td>10</td><td>Zach Parise</td><td>Stars</td><td>2012</td><td>1145</td><td>6</td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Joe Pavelski</td><td>Stars</td><td>2014</td><td>128</td><td></td><td></td></tr>
<tr><td>2</td><td>John Tavares</td><td>Lightning</td><td>2015</td><td>123</td><td></td><td></td></tr>
<tr><td>3</td><td>Marc Savard</td><td>Kings</td><td>2009</td><td>122</td><td></td><td></td></tr>
<tr><td>4</td><td>Vincent Trocheck</td><td>Ottawa Senators</td><td>2018</td><td>118</td><td></td><td></td></tr>
<tr><td>5</td><td>Alexander Ovechkin</td><td>Panthers</td><td>2012</td><td>116</td><td></td><td></td></tr>
<tr><td>6</td><td>Anze Kopitar</td><td>Flyers</td><td>2012</td><td>115</td><td></td><td></td></tr>
<tr><td>7</td><td>Eric Staal</td><td>Oilers</td><td>2012</td><td>114</td><td></td><td></td></tr>
<tr><td>8</td><td>Sidney Crosby</td><td>Sabres</td><td>2011</td><td>112</td><td></td><td></td></tr>
<tr><td>9</td><td>Jonathan Toews</td><td>Panthers</td><td>2012</td><td>112</td><td></td><td></td></tr>
<tr><td>10</td><td>Connor McDavid</td><td>Detroit Red Wings</td><td>2018</td><td>111</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Unknown Player</td><td>Penguins</td><td>2010</td><td>543</td><td>23</td><td></td></tr>
<tr><td>2</td><td>Unknown Player</td><td>Red Wings</td><td>2010</td><td>543</td><td>18</td><td></td></tr>
<tr><td>3</td><td>Scott Hartnell</td><td>Canadiens</td><td>2012</td><td>1137</td><td>17</td><td></td></tr>
<tr><td>4</td><td>Jarome Iginla</td><td>Blackhawks</td><td>2008</td><td>381</td><td>15</td><td></td></tr>
<tr><td>5</td><td>Steven Stamkos</td><td>Wild</td><td>2014</td><td>1126</td><td>15</td><td></td></tr>
<tr><td>6</td><td>Sean Couturier</td><td>Boston Bruins</td><td>2018</td><td>1020</td><td>15</td><td></td></tr>
<tr><td>7</td><td>Alexei Kovalev</td><td>Oilers</td><td>2008</td><td>402</td><td>14</td><td></td></tr>
<tr><td>8</td><td>Steven Stamkos</td><td>Wild</td><td>2014</td><td>462</td><td>14</td><td></td></tr>
<tr><td>9</td><td>Tyler Johnson</td><td>Blue Jackets</td><td>2014</td><td>911</td><td>14</td><td></td></tr>
<tr><td>10</td><td>Joe Pavelski</td><td>Stars</td><td>2015</td><td>340</td><td>14</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jonathan Toews</td><td>Panthers</td><td>2013</td><td>448</td><td></td><td></td></tr>
<tr><td>2</td><td>Brad Marchand</td><td>Bruins</td><td>2017</td><td>427</td><td></td><td></td></tr>
<tr><td>3</td><td>Joe Pavelski</td><td>Stars</td><td>2015</td><td>426</td><td></td><td></td></tr>
<tr><td>4</td><td>Max Pacioretty</td><td>Stars</td><td>2015</td><td>422</td><td></td><td></td></tr>
<tr><td>5</td><td>Joe Pavelski</td><td>Stars</td><td>2014</td><td>409</td><td></td><td></td></tr>
<tr><td>6</td><td>Alexander Ovechkin</td><td>Penguins</td><td>2015</td><td>405</td><td></td><td></td></tr>
<tr><td>7</td><td>Logan Couture</td><td>Nashville Predators</td><td>2018</td><td>401</td><td></td><td></td></tr>
<tr><td>8</td><td>Rick Nash</td><td>Sharks</td><td>2009</td><td>397</td><td></td><td></td></tr>
<tr><td>9</td><td>John Tavares</td><td>Tampa Bay Lightning</td><td>2018</td><td>396</td><td></td><td></td></tr>
<tr><td>10</td><td>Corey Perry</td><td>Oilers</td><td>2012</td><td>395</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Unknown Player</td><td>Red Wings</td><td>2010</td><td>543</td><td>12</td><td></td></tr>
<tr><td>2</td><td>Keith Ballard</td><td>Lightning</td><td>2008</td><td>476</td><td>10</td><td></td></tr>
<tr><td>3</td><td>Rasmus Ristolainen</td><td>Sabres</td><td>2017</td><td>137</td><td>10</td><td></td></tr>
<tr><td>4</td><td>Mark Giordano</td><td>Golden Knights</td><td>2019</td><td>75</td><td>10</td><td><a href="OTHL-75.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Marc Staal</td><td>Maple Leafs</td><td>2009</td><td>657</td><td>9</td><td></td></tr>
<tr><td>6</td><td>Jonathan Ericsson</td><td>Oilers</td><td>2013</td><td>362</td><td>9</td><td></td></tr>
<tr><td>7</td><td>John Carlson</td><td>Capitals</td><td>2014</td><td>1105</td><td>9</td><td></td></tr>
<tr><td>8</td><td>Sami Vatanen</td><td>Jets</td><td>2016</td><td>504</td><td>9</td><td></td></tr>
<tr><td>9</td><td>Anton Stralman</td><td>Blue Jackets</td><td>2016</td><td>1170</td><td>9</td><td></td></tr>
<tr><td>10</td><td>Andrej Sustr</td><td>Senators</td><td>2017</td><td>519</td><td>9</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Dan Hamhuis</td><td>New York Rangers</td><td>2018</td><td>178</td><td></td><td></td></tr>
<tr><td>2</td><td>David Savard</td><td>St. Louis Blues</td><td>2018</td><td>164</td><td></td><td></td></tr>
<tr><td>3</td><td>Keith Yandle</td><td>Flyers</td><td>2017</td><td>162</td><td></td><td></td></tr>
<tr><td>4</td><td>Cam Fowler</td><td>Pittsburgh Penguins</td><td>2018</td><td>162</td><td></td><td></td></tr>
<tr><td>5</td><td>Francois Beauchemin</td><td>Hurricanes</td><td>2012</td><td>160</td><td></td><td></td></tr>
<tr><td>6</td><td>Alexander Edler</td><td>Philadelphia Flyers</td><td>2018</td><td>160</td><td></td><td></td></tr>
<tr><td>7</td><td>Francois Beauchemin</td><td>Stars</td><td>2014</td><td>156</td><td></td><td></td></tr>
<tr><td>8</td><td>Cam Fowler</td><td>Penguins</td><td>2017</td><td>156</td><td></td><td></td></tr>
<tr><td>9</td><td>Karl Alzner</td><td>Flames</td><td>2012</td><td>155</td><td></td><td></td></tr>
<tr><td>10</td><td>Keith Yandle</td><td>Philadelphia Flyers</td><td>2018</td><td>155</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Joni Pitkanen</td><td>Penguins</td><td>2008</td><td>546</td><td>6</td><td></td></tr>
<tr><td>2</td><td>Jeff Carter</td><td>Penguins</td><td>2008</td><td>546</td><td>6</td><td></td></tr>
<tr><td>3</td><td>Alexander Semin</td><td>Penguins</td><td>2009</td><td>383</td><td>6</td><td></td></tr>
<tr><td>4</td><td>Shane Doan</td><td>Penguins</td><td>2009</td><td>383</td><td>6</td><td></td></tr>
<tr><td>5</td><td>Jeff Carter</td><td>Penguins</td><td>2009</td><td>383</td><td>6</td><td></td></tr>
<tr><td>6</td><td>Stephane Robidas</td><td>Hurricanes</td><td>2012</td><td>1005</td><td>6</td><td></td></tr>
<tr><td>7</td><td>Andrew MacDonald</td><td>Hurricanes</td><td>2012</td><td>1005</td><td>6</td><td></td></tr>
<tr><td>8</td><td>Josh Gorges</td><td>Stars</td><td>2012</td><td>1145</td><td>6</td><td></td></tr>
<tr><td>9</td><td>Tobias Enstrom</td><td>Stars</td><td>2012</td><td>1145</td><td>6</td><td></td></tr>
<tr><td>10</td><td>Cam Atkinson</td><td>Sharks</td><td>2016</td><td>945</td><td>6</td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Vincent Trocheck</td><td>Ottawa Senators</td><td>2018</td><td>64</td><td></td><td></td></tr>
<tr><td>2</td><td>Alexander Ovechkin</td><td>Blackhawks</td><td>2008</td><td>61</td><td></td><td></td></tr>
<tr><td>3</td><td>Joe Pavelski</td><td>Stars</td><td>2014</td><td>59</td><td></td><td></td></tr>
<tr><td>4</td><td>Patrick Marleau</td><td>Stars</td><td>2014</td><td>58</td><td></td><td></td></tr>
<tr><td>5</td><td>Joe Sakic</td><td>Blackhawks</td><td>2008</td><td>57</td><td></td><td></td></tr>
<tr><td>6</td><td>Rick Nash</td><td>Maple Leafs</td><td>2012</td><td>54</td><td></td><td></td></tr>
<tr><td>7</td><td>Duncan Keith</td><td>Blackhawks</td><td>2008</td><td>50</td><td></td><td></td></tr>
<tr><td>8</td><td>Tom Poti</td><td>Blackhawks</td><td>2008</td><td>49</td><td></td><td></td></tr>
<tr><td>9</td><td>Karl Alzner</td><td>Boston Bruins</td><td>2018</td><td>45</td><td></td><td></td></tr>
<tr><td>10</td><td>Gabriel Landeskog</td><td>Nashville Predators</td><td>2018</td><td>44</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Unknown Player</td><td>Penguins</td><td>2010</td><td>543</td><td>-10</td><td></td></tr>
<tr><td>2</td><td>Bryan Berard</td><td>Coyotes</td><td>2008</td><td>1154</td><td>-6</td><td></td></tr>
<tr><td>3</td><td>Daniel Brière</td><td>Kings</td><td>2009</td><td>566</td><td>-6</td><td></td></tr>
<tr><td>4</td><td>Sean O'Donnell</td><td>Kings</td><td>2009</td><td>566</td><td>-6</td><td></td></tr>
<tr><td>5</td><td>Tuomo Ruutu</td><td>Kings</td><td>2009</td><td>566</td><td>-6</td><td></td></tr>
<tr><td>6</td><td>Dan Hamhuis</td><td>Canucks</td><td>2016</td><td>945</td><td>-6</td><td></td></tr>
<tr><td>7</td><td>Jake Gardiner</td><td>Canucks</td><td>2016</td><td>945</td><td>-6</td><td></td></tr>
<tr><td>8</td><td>Jonathon Blum</td><td>Wild</td><td>2011</td><td>384</td><td>-5</td><td></td></tr>
<tr><td>9</td><td>Brad Richards</td><td>Rangers</td><td>2011</td><td>1038</td><td>-5</td><td></td></tr>
<tr><td>10</td><td>Matt Gilroy</td><td>Kings</td><td>2012</td><td>279</td><td>-5</td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Chris Pronger</td><td>Islanders</td><td>2012</td><td>-50</td><td></td><td></td></tr>
<tr><td>2</td><td>Tomas Fleischmann</td><td>Capitals</td><td>2014</td><td>-49</td><td></td><td></td></tr>
<tr><td>3</td><td>John Klingberg</td><td>Islanders</td><td>2016</td><td>-49</td><td></td><td></td></tr>
<tr><td>4</td><td>Shawn Thornton</td><td>Red Wings</td><td>2016</td><td>-48</td><td></td><td></td></tr>
<tr><td>5</td><td>Bryan Berard</td><td>Coyotes</td><td>2008</td><td>-46</td><td></td><td></td></tr>
<tr><td>6</td><td>Jake Gardiner</td><td>Canadiens</td><td>2015</td><td>-46</td><td></td><td></td></tr>
<tr><td>7</td><td>Martin Erat</td><td>Capitals</td><td>2014</td><td>-45</td><td></td><td></td></tr>
<tr><td>8</td><td>Trevor Daley</td><td>Bruins</td><td>2012</td><td>-42</td><td></td><td></td></tr>
<tr><td>9</td><td>Craig Rivet</td><td>Red Wings</td><td>2008</td><td>-41</td><td></td><td></td></tr>
<tr><td>10</td><td>Ville Leino</td><td>Capitals</td><td>2012</td><td>-39</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Ryan Malone</td><td>Ducks</td><td>2011</td><td>357</td><td>34</td><td></td></tr>
<tr><td>2</td><td>Tim Gleason</td><td>Wild</td><td>2011</td><td>384</td><td>34</td><td></td></tr>
<tr><td>3</td><td>Sean Bergenheim</td><td>Panthers</td><td>2011</td><td>1193</td><td>32</td><td></td></tr>
<tr><td>4</td><td>Ryane Clowe</td><td>Coyotes</td><td>2011</td><td>450</td><td>31</td><td></td></tr>
<tr><td>5</td><td>Jarome Iginla</td><td>Jets</td><td>2011</td><td>198</td><td>29</td><td></td></tr>
<tr><td>6</td><td>Mattias Ohlund</td><td>Rangers</td><td>2011</td><td>249</td><td>29</td><td></td></tr>
<tr><td>7</td><td>Eric Brewer</td><td>Canucks</td><td>2011</td><td>412</td><td>29</td><td></td></tr>
<tr><td>8</td><td>Chris Neil</td><td>Kings</td><td>2011</td><td>539</td><td>29</td><td></td></tr>
<tr><td>9</td><td>Brian Boyle</td><td>Avalanche</td><td>2011</td><td>715</td><td>29</td><td></td></tr>
<tr><td>10</td><td>Sean ODonnell</td><td>Hurricanes</td><td>2011</td><td>1038</td><td>29</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Dion Phaneuf</td><td>Ducks</td><td>2008</td><td>348</td><td></td><td></td></tr>
<tr><td>2</td><td>Ryane Clowe</td><td>Coyotes</td><td>2011</td><td>301</td><td></td><td></td></tr>
<tr><td>3</td><td>Mike Komisarek</td><td>Red Wings</td><td>2010</td><td>248</td><td></td><td></td></tr>
<tr><td>4</td><td>Mike Komisarek</td><td>Penguins</td><td>2009</td><td>247</td><td></td><td></td></tr>
<tr><td>5</td><td>Chris Neil</td><td>Kings</td><td>2011</td><td>245</td><td></td><td></td></tr>
<tr><td>6</td><td>David Backes</td><td>Blackhawks</td><td>2011</td><td>242</td><td></td><td></td></tr>
<tr><td>7</td><td>Mike Commodore</td><td>Capitals</td><td>2009</td><td>238</td><td></td><td></td></tr>
<tr><td>8</td><td>Shane O'Brien</td><td>Kings</td><td>2008</td><td>237</td><td></td><td></td></tr>
<tr><td>9</td><td>Nikita Zadorov</td><td>Montreal Canadiens</td><td>2018</td><td>153</td><td></td><td></td></tr>
<tr><td>10</td><td>Mark Borowiecki</td><td>Toronto Maple Leafs</td><td>2018</td><td>150</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Unknown Player</td><td>Red Wings</td><td>2010</td><td>543</td><td>22</td><td></td></tr>
<tr><td>2</td><td>Unknown Player</td><td>Penguins</td><td>2010</td><td>543</td><td>19</td><td></td></tr>
<tr><td>3</td><td>Matt Smaby</td><td>Capitals</td><td>2010</td><td>869</td><td>13</td><td></td></tr>
<tr><td>4</td><td>Radko Gudas</td><td>Devils</td><td>2014</td><td>484</td><td>13</td><td></td></tr>
<tr><td>5</td><td>Cameron Gaunce</td><td>Colorado Avalanche</td><td>2018</td><td>496</td><td>13</td><td></td></tr>
<tr><td>6</td><td>Jeff Finger</td><td>Blackhawks</td><td>2008</td><td>270</td><td>12</td><td></td></tr>
<tr><td>7</td><td>Mike Komisarek</td><td>Canadiens</td><td>2008</td><td>701</td><td>12</td><td></td></tr>
<tr><td>8</td><td>Brad Stuart</td><td>Capitals</td><td>2012</td><td>739</td><td>12</td><td></td></tr>
<tr><td>9</td><td>Scott Hartnell</td><td>Canadiens</td><td>2012</td><td>1012</td><td>12</td><td></td></tr>
<tr><td>10</td><td>Marek Zidlicky</td><td>Avalanche</td><td>2014</td><td>287</td><td>12</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Zdeno Chara</td><td>Toronto Maple Leafs</td><td>2018</td><td>310</td><td></td><td></td></tr>
<tr><td>2</td><td>Mike Weber</td><td>Canucks</td><td>2015</td><td>306</td><td></td><td></td></tr>
<tr><td>3</td><td>Luke Schenn</td><td>Avalanche</td><td>2013</td><td>299</td><td></td><td></td></tr>
<tr><td>4</td><td>Wayne Simmonds</td><td>Maple Leafs</td><td>2016</td><td>296</td><td></td><td></td></tr>
<tr><td>5</td><td>Brooks Orpik</td><td>Pittsburgh Penguins</td><td>2018</td><td>296</td><td></td><td></td></tr>
<tr><td>6</td><td>David Clarkson</td><td>Coyotes</td><td>2012</td><td>290</td><td></td><td></td></tr>
<tr><td>7</td><td>Scott Hartnell</td><td>Canadiens</td><td>2012</td><td>287</td><td></td><td></td></tr>
<tr><td>8</td><td>Dustin Byfuglien</td><td>Wild</td><td>2015</td><td>279</td><td></td><td></td></tr>
<tr><td>9</td><td>Cal Clutterbuck</td><td>Sabres</td><td>2012</td><td>275</td><td></td><td></td></tr>
<tr><td>10</td><td>Mike Fisher</td><td>Devils</td><td>2008</td><td>268</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Paul Stastny</td><td>Rangers</td><td>2016</td><td>3</td><td></td><td></td></tr>
<tr><td>2</td><td>Riley Nash</td><td>New York Islanders</td><td>2018</td><td>3</td><td></td><td></td></tr>
<tr><td>3</td><td>Colton Sissons</td><td>Vegas Golden Knights</td><td>2018</td><td>3</td><td></td><td></td></tr>
<tr><td>4</td><td>Jason Spezza</td><td>Hurricanes</td><td>2008</td><td>2</td><td></td><td></td></tr>
<tr><td>5</td><td>Martin Havlat</td><td>Sharks</td><td>2008</td><td>2</td><td></td><td></td></tr>
<tr><td>6</td><td>Jeff Carter</td><td>Penguins</td><td>2009</td><td>2</td><td></td><td></td></tr>
<tr><td>7</td><td>Alexandre Burrows</td><td>Lightning</td><td>2009</td><td>2</td><td></td><td></td></tr>
<tr><td>8</td><td>Brad Boyes</td><td>Flyers</td><td>2009</td><td>2</td><td></td><td></td></tr>
<tr><td>9</td><td>Matt Calvert</td><td>Chicago Blackhawks</td><td>2018</td><td>2</td><td></td><td></td></tr>
<tr><td>10</td><td>John Tavares</td><td>Tampa Bay Lightning</td><td>2018</td><td>2</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hat Trick In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Evgeni Malkin</td><td>Maple Leafs</td><td>2015</td><td>5</td><td></td><td></td></tr>
<tr><td>2</td><td>Jarome Iginla</td><td>Blackhawks</td><td>2008</td><td>4</td><td></td><td></td></tr>
<tr><td>3</td><td>Steven Stamkos</td><td>Wild</td><td>2009</td><td>4</td><td></td><td></td></tr>
<tr><td>4</td><td>Radim Vrbata</td><td>Avalanche</td><td>2008</td><td>3</td><td></td><td></td></tr>
<tr><td>5</td><td>Patrick Marleau</td><td>Hurricanes</td><td>2010</td><td>3</td><td></td><td></td></tr>
<tr><td>6</td><td>Vincent Lecavalier</td><td>Kings</td><td>2011</td><td>3</td><td></td><td></td></tr>
<tr><td>7</td><td>Anze Kopitar</td><td>Buffalo Sabres</td><td>2018</td><td>3</td><td></td><td></td></tr>
<tr><td>8</td><td>Sean Couturier</td><td>Boston Bruins</td><td>2018</td><td>3</td><td></td><td></td></tr>
<tr><td>9</td><td>Vincent Trocheck</td><td>Ottawa Senators</td><td>2018</td><td>3</td><td></td><td></td></tr>
<tr><td>10</td><td>Dany Heatley</td><td>Thrashers</td><td>2008</td><td>2</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Best Faceoff in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>David Steckel</td><td>Wild</td><td>2012</td><td>63.20%</td><td></td><td></td></tr>
<tr><td>2</td><td>Patrice Bergeron</td><td>Blues</td><td>2013</td><td>63.10%</td><td></td><td></td></tr>
<tr><td>3</td><td>Manny Malhotra</td><td>Sabres</td><td>2014</td><td>63.10%</td><td></td><td></td></tr>
<tr><td>4</td><td>Patrice Bergeron</td><td>Stars</td><td>2015</td><td>62.20%</td><td></td><td></td></tr>
<tr><td>5</td><td>Manny Malhotra</td><td>Predators</td><td>2015</td><td>62.10%</td><td></td><td></td></tr>
<tr><td>6</td><td>Manny Malhotra</td><td>Lightning</td><td>2012</td><td>62.00%</td><td></td><td></td></tr>
<tr><td>7</td><td>Jerred Smithson</td><td>Blues</td><td>2014</td><td>61.60%</td><td></td><td></td></tr>
<tr><td>8</td><td>Jarret Stoll</td><td>Devils</td><td>2014</td><td>61.20%</td><td></td><td></td></tr>
<tr><td>9</td><td>Vincent Lecavalier</td><td>Predators</td><td>2010</td><td>61.10%</td><td></td><td></td></tr>
<tr><td>10</td><td>Zenon Konopka</td><td>Jets</td><td>2012</td><td>60.90%</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GoaliesRecords">Goalies Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="7"><b>Shutout In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Pekka Rinne</td><td>Calgary Flames</td><td>2018</td><td>12</td><td></td><td></td></tr>
<tr><td>2</td><td>Ilja Bryzgalov</td><td>Thrashers</td><td>2008</td><td>11</td><td></td><td></td></tr>
<tr><td>3</td><td>Eddie Lack</td><td>Blue Jackets</td><td>2014</td><td>11</td><td></td><td></td></tr>
<tr><td>4</td><td>Carey Price</td><td>Predators</td><td>2013</td><td>10</td><td></td><td></td></tr>
<tr><td>5</td><td>Braden Holtby</td><td>Blue Jackets</td><td>2015</td><td>10</td><td></td><td></td></tr>
<tr><td>6</td><td>Carey Price</td><td>Predators</td><td>2017</td><td>10</td><td></td><td></td></tr>
<tr><td>7</td><td>Evgeni Nabokov</td><td>Sharks</td><td>2008</td><td>9</td><td></td><td></td></tr>
<tr><td>8</td><td>Devan Dubnyk</td><td>Flyers</td><td>2013</td><td>9</td><td></td><td></td></tr>
<tr><td>9</td><td>Roberto Luongo</td><td>Panthers</td><td>2014</td><td>9</td><td></td><td></td></tr>
<tr><td>10</td><td>Tomas Vokoun</td><td>Blackhawks</td><td>2008</td><td>8</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Shots Received In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jean-Sébastien Giguère</td><td>Flames</td><td>2009</td><td>2201</td><td></td><td></td></tr>
<tr><td>2</td><td>Jimmy Howard</td><td>Chicago Blackhawks</td><td>2018</td><td>2184</td><td></td><td></td></tr>
<tr><td>3</td><td>Marc-André Fleury</td><td>Maple Leafs</td><td>2010</td><td>2155</td><td></td><td></td></tr>
<tr><td>4</td><td>Marty Turco</td><td>Capitals</td><td>2009</td><td>2152</td><td></td><td></td></tr>
<tr><td>5</td><td>Antti Niemi</td><td>Coyotes</td><td>2011</td><td>2139</td><td></td><td></td></tr>
<tr><td>6</td><td>Ilja Bryzgalov</td><td>Oilers</td><td>2009</td><td>2113</td><td></td><td></td></tr>
<tr><td>7</td><td>Sergei Bobrovsky</td><td>Detroit Red Wings</td><td>2018</td><td>2096</td><td></td><td></td></tr>
<tr><td>8</td><td>Cam Ward</td><td>Penguins</td><td>2009</td><td>2089</td><td></td><td></td></tr>
<tr><td>9</td><td>Carey Price</td><td>Nashville Predators</td><td>2018</td><td>2066</td><td></td><td></td></tr>
<tr><td>10</td><td>Corey Crawford</td><td>San Jose Sharks</td><td>2018</td><td>2060</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Cam Ward</td><td>Penguins</td><td>2009</td><td>53</td><td></td><td></td></tr>
<tr><td>2</td><td>Tim Thomas</td><td>Hurricanes</td><td>2009</td><td>52</td><td></td><td></td></tr>
<tr><td>3</td><td>Pekka Rinne</td><td>Blackhawks</td><td>2012</td><td>52</td><td></td><td></td></tr>
<tr><td>4</td><td>Brian Elliott</td><td>Lightning</td><td>2015</td><td>52</td><td></td><td></td></tr>
<tr><td>5</td><td>Ryan Miller</td><td>Sabres</td><td>2008</td><td>51</td><td></td><td></td></tr>
<tr><td>6</td><td>Ilja Bryzgalov</td><td>Thrashers</td><td>2008</td><td>49</td><td></td><td></td></tr>
<tr><td>7</td><td>Ryan Miller</td><td>Sabres</td><td>2009</td><td>48</td><td></td><td></td></tr>
<tr><td>8</td><td>Mike Smith</td><td>Boston Bruins</td><td>2018</td><td>43</td><td></td><td></td></tr>
<tr><td>9</td><td>Marc-Andre Fleury</td><td>New York Islanders</td><td>2018</td><td>41</td><td></td><td></td></tr>
<tr><td>10</td><td>Cam Talbot</td><td>Dallas Stars</td><td>2018</td><td>38</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ryan Miller</td><td>Canucks</td><td>2016</td><td>46</td><td></td><td></td></tr>
<tr><td>2</td><td>Jean-Sébastien Giguère</td><td>Flames</td><td>2009</td><td>42</td><td></td><td></td></tr>
<tr><td>3</td><td>Jonathan Quick</td><td>Canucks</td><td>2014</td><td>40</td><td></td><td></td></tr>
<tr><td>4</td><td>José Théodore</td><td>Rangers</td><td>2009</td><td>39</td><td></td><td></td></tr>
<tr><td>5</td><td>Jaroslav Halak</td><td>Kings</td><td>2010</td><td>39</td><td></td><td></td></tr>
<tr><td>6</td><td>Marc-André Fleury</td><td>Maple Leafs</td><td>2010</td><td>39</td><td></td><td></td></tr>
<tr><td>7</td><td>Niklas Backstrom</td><td>Kings</td><td>2013</td><td>39</td><td></td><td></td></tr>
<tr><td>8</td><td>Dwayne Roloson</td><td>Coyotes</td><td>2008</td><td>38</td><td></td><td></td></tr>
<tr><td>9</td><td>Ben Bishop</td><td>Montreal Canadiens</td><td>2018</td><td>35</td><td></td><td></td></tr>
<tr><td>10</td><td>Jaroslav Halak</td><td>Philadelphia Flyers</td><td>2018</td><td>34</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GameRecords">Game Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Goals</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Flyers</td><td>Devils</td><td>2008</td><td>3</td><td>17</td><td></td></tr>
<tr><td>2</td><td>Penguins</td><td>Islanders</td><td>2010</td><td>890</td><td>16</td><td></td></tr>
<tr><td>3</td><td>Coyotes</td><td>Flyers</td><td>2010</td><td>1183</td><td>15</td><td></td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>Rangers</td><td>2013</td><td>1051</td><td>15</td><td></td></tr>
<tr><td>5</td><td>Predators</td><td>Blackhawks</td><td>2008</td><td>23</td><td>14</td><td></td></tr>
<tr><td>6</td><td>Senators</td><td>Maple Leafs</td><td>2008</td><td>54</td><td>13</td><td></td></tr>
<tr><td>7</td><td>Wild</td><td>Red Wings</td><td>2011</td><td>58</td><td>13</td><td></td></tr>
<tr><td>8</td><td>Kings</td><td>Devils</td><td>2011</td><td>121</td><td>13</td><td></td></tr>
<tr><td>9</td><td>Canucks</td><td>Blackhawks</td><td>2011</td><td>258</td><td>13</td><td></td></tr>
<tr><td>10</td><td>Wild</td><td>Devils</td><td>2011</td><td>367</td><td>13</td><td></td></tr>

<tr><td colspan="7"><b>Most Assists</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Penguins</td><td>Islanders</td><td>2010</td><td>890</td><td>31</td><td></td></tr>
<tr><td>2</td><td>Flyers</td><td>Devils</td><td>2008</td><td>3</td><td>30</td><td></td></tr>
<tr><td>3</td><td>Coyotes</td><td>Flyers</td><td>2010</td><td>1183</td><td>29</td><td></td></tr>
<tr><td>4</td><td>Predators</td><td>Blackhawks</td><td>2008</td><td>23</td><td>25</td><td></td></tr>
<tr><td>5</td><td>Islanders</td><td>Predators</td><td>2009</td><td>877</td><td>25</td><td></td></tr>
<tr><td>6</td><td>Blue Jackets</td><td>Rangers</td><td>2013</td><td>1051</td><td>25</td><td></td></tr>
<tr><td>7</td><td>Panthers</td><td>Devils</td><td>2016</td><td>10</td><td>25</td><td></td></tr>
<tr><td>8</td><td>Islanders</td><td>Senators</td><td>2014</td><td>363</td><td>24</td><td></td></tr>
<tr><td>9</td><td>Jets</td><td>Devils</td><td>2015</td><td>715</td><td>24</td><td></td></tr>
<tr><td>10</td><td>Flames</td><td>Ducks</td><td>2012</td><td>633</td><td>23</td><td></td></tr>

<tr><td colspan="7"><b>Most Points</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Flyers</td><td>Devils</td><td>2008</td><td>3</td><td>47</td><td></td></tr>
<tr><td>2</td><td>Penguins</td><td>Islanders</td><td>2010</td><td>890</td><td>47</td><td></td></tr>
<tr><td>3</td><td>Coyotes</td><td>Flyers</td><td>2010</td><td>1183</td><td>44</td><td></td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>Rangers</td><td>2013</td><td>1051</td><td>40</td><td></td></tr>
<tr><td>5</td><td>Predators</td><td>Blackhawks</td><td>2008</td><td>23</td><td>39</td><td></td></tr>
<tr><td>6</td><td>Islanders</td><td>Predators</td><td>2009</td><td>877</td><td>38</td><td></td></tr>
<tr><td>7</td><td>Panthers</td><td>Devils</td><td>2016</td><td>10</td><td>38</td><td></td></tr>
<tr><td>8</td><td>Islanders</td><td>Senators</td><td>2014</td><td>363</td><td>37</td><td></td></tr>
<tr><td>9</td><td>Jets</td><td>Devils</td><td>2015</td><td>715</td><td>37</td><td></td></tr>
<tr><td>10</td><td>Lightning</td><td>Canucks</td><td>2013</td><td>1023</td><td>36</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Rangers</td><td>Penguins</td><td>2008</td><td>9</td><td>100</td><td></td></tr>
<tr><td>2</td><td>Chicago Blackhawks</td><td>Nashville Predators</td><td>2018</td><td>519</td><td>97</td><td></td></tr>
<tr><td>3</td><td>Predators</td><td>Blackhawks</td><td>2008</td><td>23</td><td>95</td><td></td></tr>
<tr><td>4</td><td>Chicago Blackhawks</td><td>Arizona Coyotes</td><td>2018</td><td>1065</td><td>94</td><td></td></tr>
<tr><td>5</td><td>Dallas Stars</td><td>St. Louis Blues</td><td>2018</td><td>929</td><td>93</td><td></td></tr>
<tr><td>6</td><td>Red Wings</td><td>Ducks</td><td>2019</td><td>37</td><td>93</td><td><a href="OTHL-37.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Red Wings</td><td>Predators</td><td>2017</td><td>922</td><td>92</td><td></td></tr>
<tr><td>8</td><td>San Jose Sharks</td><td>St. Louis Blues</td><td>2018</td><td>1057</td><td>92</td><td></td></tr>
<tr><td>9</td><td>Stars</td><td>Thrashers</td><td>2008</td><td>28</td><td>91</td><td></td></tr>
<tr><td>10</td><td>Lightning</td><td>Bruins</td><td>2015</td><td>159</td><td>91</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Maple Leafs</td><td>Sabres</td><td>2009</td><td>382</td><td>166</td><td></td></tr>
<tr><td>2</td><td>Wild</td><td>Kings</td><td>2016</td><td>919</td><td>138</td><td></td></tr>
<tr><td>3</td><td>Kings</td><td>Wild</td><td>2017</td><td>425</td><td>132</td><td></td></tr>
<tr><td>4</td><td>Penguins</td><td>Islanders</td><td>2009</td><td>738</td><td>130</td><td></td></tr>
<tr><td>5</td><td>Flames</td><td>Wild</td><td>2013</td><td>832</td><td>130</td><td></td></tr>
<tr><td>6</td><td>Canadiens</td><td>Maple Leafs</td><td>2009</td><td>184</td><td>126</td><td></td></tr>
<tr><td>7</td><td>Thrashers</td><td>Panthers</td><td>2009</td><td>862</td><td>124</td><td></td></tr>
<tr><td>8</td><td>Hurricanes</td><td>Canadiens</td><td>2012</td><td>945</td><td>124</td><td></td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>Canadiens</td><td>2011</td><td>822</td><td>122</td><td></td></tr>
<tr><td>10</td><td>Panthers</td><td>Bruins</td><td>2016</td><td>592</td><td>122</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Penguins</td><td>Lightning</td><td>2011</td><td>832</td><td>77</td><td></td></tr>
<tr><td>2</td><td>Canadiens</td><td>Bruins</td><td>2011</td><td>142</td><td>76</td><td></td></tr>
<tr><td>3</td><td>Wild</td><td>Predators</td><td>2013</td><td>865</td><td>72</td><td></td></tr>
<tr><td>4</td><td>Boston Bruins</td><td>Florida Panthers</td><td>2018</td><td>1034</td><td>72</td><td></td></tr>
<tr><td>5</td><td>Maple Leafs</td><td>Senators</td><td>2010</td><td>105</td><td>71</td><td></td></tr>
<tr><td>6</td><td>Predators</td><td>Wild</td><td>2011</td><td>538</td><td>71</td><td></td></tr>
<tr><td>7</td><td>Canadiens</td><td>Devils</td><td>2011</td><td>878</td><td>71</td><td></td></tr>
<tr><td>8</td><td>Avalanche</td><td>Blue Jackets</td><td>2011</td><td>955</td><td>70</td><td></td></tr>
<tr><td>9</td><td>Penguins</td><td>Bruins</td><td>2011</td><td>1032</td><td>70</td><td></td></tr>
<tr><td>10</td><td>Hurricanes</td><td>Predators</td><td>2011</td><td>938</td><td>69</td><td></td></tr>

</table>
<?php include "Footer.php";?>
