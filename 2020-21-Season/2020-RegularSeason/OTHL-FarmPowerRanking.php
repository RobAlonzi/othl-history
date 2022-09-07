<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Power Ranking</title>
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
<script>$(function(){$("table").basictablesorter()});$(function (){$("table").stickyTableHeaders();});</script>
<table class="basictablesorter"><thead><tr><th class="STHSW35">Today</th><th class="STHSW35">Last</th><th class="STHSW200">Teams</th><th class="STHSW45">Points</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">T</th><th class="STHSW25">OTL</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th></tr></thead>
<tr><td>1</td><td>1</td><td>IceHogs</td><td>62</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>58</td><td>20</td></tr>
<tr><td>2</td><td>2</td><td>Admirals</td><td>61</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>57</td><td>17</td></tr>
<tr><td>3</td><td>3</td><td>Moose</td><td>57</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>55</td><td>21</td></tr>
<tr><td>4</td><td>4</td><td>Heat</td><td>57</td><td>10</td><td>0</td><td>0</td><td>0</td><td>0</td><td>52</td><td>24</td></tr>
<tr><td>5</td><td>5</td><td>Condors</td><td>57</td><td>9</td><td>0</td><td>0</td><td>1</td><td>0</td><td>46</td><td>17</td></tr>
<tr><td>6</td><td>6</td><td>Penguins</td><td>55</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>61</td><td>30</td></tr>
<tr><td>7</td><td>7</td><td>Marlies</td><td>49</td><td>8</td><td>1</td><td>0</td><td>0</td><td>1</td><td>43</td><td>19</td></tr>
<tr><td>8</td><td>8</td><td>Checkers</td><td>47</td><td>8</td><td>2</td><td>0</td><td>0</td><td>0</td><td>46</td><td>23</td></tr>
<tr><td>9</td><td>9</td><td>Phantoms</td><td>47</td><td>7</td><td>2</td><td>0</td><td>1</td><td>0</td><td>53</td><td>28</td></tr>
<tr><td>10</td><td>10</td><td>Barracudas</td><td>43</td><td>6</td><td>3</td><td>0</td><td>1</td><td>0</td><td>55</td><td>31</td></tr>
<tr><td>11</td><td>11</td><td>Monsters</td><td>41</td><td>7</td><td>2</td><td>0</td><td>0</td><td>1</td><td>42</td><td>23</td></tr>
<tr><td>12</td><td>12</td><td> Americans</td><td>40</td><td>6</td><td>3</td><td>0</td><td>1</td><td>0</td><td>51</td><td>30</td></tr>
<tr><td>13</td><td>13</td><td>Comets</td><td>38</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>34</td><td>17</td></tr>
<tr><td>14</td><td>14</td><td>Thunderbirds</td><td>35</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>37</td><td>20</td></tr>
<tr><td>15</td><td>15</td><td>Bruins</td><td>30</td><td>7</td><td>3</td><td>0</td><td>0</td><td>0</td><td>24</td><td>15</td></tr>
<tr><td>16</td><td>16</td><td>Gulls</td><td>20</td><td>6</td><td>4</td><td>0</td><td>0</td><td>0</td><td>38</td><td>35</td></tr>
<tr><td>17</td><td>17</td><td>Griffins</td><td>19</td><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td><td>32</td><td>27</td></tr>
<tr><td>18</td><td>18</td><td>Senators</td><td>15</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>32</td><td>29</td></tr>
<tr><td>19</td><td>19</td><td>Wolves</td><td>15</td><td>5</td><td>4</td><td>0</td><td>0</td><td>1</td><td>32</td><td>33</td></tr>
<tr><td>20</td><td>20</td><td>Rocket</td><td>2</td><td>3</td><td>6</td><td>0</td><td>0</td><td>1</td><td>29</td><td>37</td></tr>
<tr><td>21</td><td>21</td><td>Devils</td><td>2</td><td>3</td><td>6</td><td>0</td><td>1</td><td>0</td><td>42</td><td>50</td></tr>
<tr><td>22</td><td>22</td><td>Crunch</td><td>0</td><td>3</td><td>7</td><td>0</td><td>0</td><td>0</td><td>25</td><td>33</td></tr>
<tr><td>23</td><td>23</td><td>Reign</td><td>-3</td><td>4</td><td>6</td><td>0</td><td>0</td><td>0</td><td>32</td><td>47</td></tr>
<tr><td>24</td><td>24</td><td>Stars</td><td>-10</td><td>2</td><td>7</td><td>0</td><td>1</td><td>0</td><td>37</td><td>54</td></tr>
<tr><td>25</td><td>25</td><td>Bears</td><td>-28</td><td>3</td><td>7</td><td>0</td><td>0</td><td>0</td><td>29</td><td>66</td></tr>
<tr><td>26</td><td>26</td><td>Wild</td><td>-29</td><td>3</td><td>7</td><td>0</td><td>0</td><td>0</td><td>29</td><td>67</td></tr>
<tr><td>27</td><td>27</td><td>Rampage </td><td>-33</td><td>1</td><td>8</td><td>0</td><td>1</td><td>0</td><td>26</td><td>63</td></tr>
<tr><td>28</td><td>28</td><td>Roadrunners</td><td>-40</td><td>1</td><td>9</td><td>0</td><td>0</td><td>0</td><td>24</td><td>67</td></tr>
<tr><td>29</td><td>29</td><td>Sound Tigers</td><td>-41</td><td>0</td><td>10</td><td>0</td><td>0</td><td>0</td><td>20</td><td>61</td></tr>
<tr><td>30</td><td>30</td><td>Wolf Pack</td><td>-65</td><td>0</td><td>10</td><td>0</td><td>0</td><td>0</td><td>13</td><td>78</td></tr>
<tr><td>31</td><td>31</td><td>Eagles</td><td>-66</td><td>0</td><td>10</td><td>0</td><td>0</td><td>0</td><td>15</td><td>81</td></tr>
</table>
<?php include "Footer.php";?>
