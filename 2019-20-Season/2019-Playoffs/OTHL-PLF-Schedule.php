<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Schedule</title>
<script src="OTHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.0.0 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="OTHL RSS Feed" href="http://www.othl.ca/File/2019-Playoffs/RSSFeed.xml" />
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
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-1.html">Panthers (2) vs Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-2.html">Canadiens (1) vs Bruins (2)</a>  - OT (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-3.html">Lightning (2) vs Islanders (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-4.html">Rangers (3) vs Capitals (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-1.html">Phantoms (2) vs Rocket (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-2.html">Thunderbirds (3) vs Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-3.html">Bruins (1) vs Monsters (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-4.html">Bears (2) vs Comets (8)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-5.html">Sharks (3) vs Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-6.html">Jets (1) vs Blackhawks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-7.html">Canucks (1) vs Flames (4)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-8.html">Oilers (3) vs Coyotes (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-5.html">Barracudas (2) vs Heat (8)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-6.html">Moose (1) vs IceHogs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-7.html">Wolves (5) vs Condors (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-8.html">Gulls (5) vs  Americans (6)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-9.html">Panthers (0) vs Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-10.html">Canadiens (2) vs Bruins (3)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-11.html">Lightning (4) vs Islanders (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-12.html">Rangers (2) vs Capitals (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-9.html">Phantoms (0) vs Rocket (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-10.html">Thunderbirds (4) vs Checkers (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-11.html">Bruins (4) vs Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-12.html">Bears (2) vs Comets (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-13.html">Sharks (3) vs Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-14.html">Jets (3) vs Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-15.html">Canucks (2) vs Flames (4)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-16.html">Oilers (1) vs Coyotes (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-13.html">Barracudas (1) vs Heat (10)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-14.html">Moose (1) vs IceHogs (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-15.html">Wolves (1) vs Condors (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-16.html">Gulls (0) vs  Americans (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-17.html">Sabres (4) vs Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-18.html">Bruins (5) vs Canadiens (2)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-19.html">Islanders (0) vs Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-20.html">Capitals (0) vs Rangers (9)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-17.html">Rocket (6) vs Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-18.html">Checkers (4) vs Thunderbirds (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-19.html">Monsters (2) vs Bruins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-20.html">Comets (5) vs Bears (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-21.html">Predators (2) vs Sharks (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-22.html">Blackhawks (5) vs Jets (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-23.html">Flames (1) vs Canucks (2)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-24.html">Coyotes (1) vs Oilers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-21.html">Heat (6) vs Barracudas (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-22.html">IceHogs (4) vs Moose (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-23.html">Condors (2) vs Wolves (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-24.html"> Americans (2) vs Gulls (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-25.html">Sabres (3) vs Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-26.html">Bruins (3) vs Canadiens (4)</a>  - OT (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-27.html">Islanders (4) vs Lightning (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-28.html">Capitals (2) vs Rangers (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-25.html">Rocket (5) vs Phantoms (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-26.html">Checkers (3) vs Thunderbirds (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-27.html">Monsters (2) vs Bruins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-28.html">Comets (6) vs Bears (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-29.html">Predators (5) vs Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-30.html">Blackhawks (3) vs Jets (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-31.html">Flames (2) vs Canucks (3)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-32.html">Coyotes (2) vs Oilers (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-29.html">Heat (8) vs Barracudas (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-30.html">IceHogs (3) vs Moose (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-31.html">Condors (4) vs Wolves (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-32.html"> Americans (2) vs Gulls (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-34.html">Canadiens (3) vs Bruins (1)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-35.html">Lightning (1) vs Islanders (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-36.html">Rangers (5) vs Capitals (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-34.html">Thunderbirds (1) vs Checkers (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-35.html">Bruins (3) vs Monsters (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">37</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-37.html">Sharks (2) vs Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-38.html">Jets (4) vs Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-39.html">Canucks (6) vs Flames (5)</a>  - OT (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-40.html">Oilers (3) vs Coyotes (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-38.html">Moose (2) vs IceHogs (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-39.html">Wolves (3) vs Condors (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-40.html">Gulls (3) vs  Americans (7)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-42.html">Bruins (1) vs Canadiens (2)</a>  - OT (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-43.html">Islanders (4) vs Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-44.html">Capitals (1) vs Rangers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">45</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-45.html">Predators (3) vs Sharks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-46.html">Blackhawks (2) vs Jets (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-47.html">Flames (6) vs Canucks (1)</a>  (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">48</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-48.html">Coyotes (5) vs Oilers (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-47.html">Condors (5) vs Wolves (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-50.html">Canadiens (4) vs Bruins (1)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-55.html">Canucks (3) vs Flames (4)</a>  - OT (R3)
</td></tr>
<tr><td class="STHSSchedule_GameNumber">56</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-56.html">Oilers (2) vs Coyotes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-57.html">Canadiens (3) vs Sabres (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-58.html">Rangers (0) vs Islanders (2)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-57.html">Bruins (2) vs Rocket (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-58.html">Comets (3) vs Checkers (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-59.html">Jets (2) vs Predators (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-60.html">Coyotes (3) vs Flames (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-59.html"> Americans (2) vs Heat (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-60.html">Condors (2) vs IceHogs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-61.html">Canadiens (1) vs Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-62.html">Rangers (2) vs Islanders (3)</a>  - OT (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-61.html">Bruins (0) vs Rocket (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-62.html">Comets (3) vs Checkers (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-63.html">Jets (4) vs Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-64.html">Coyotes (1) vs Flames (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-63.html"> Americans (3) vs Heat (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-64.html">Condors (3) vs IceHogs (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-65.html">Sabres (3) vs Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-66.html">Islanders (5) vs Rangers (2)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-65.html">Rocket (3) vs Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-66.html">Checkers (3) vs Comets (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-67.html">Predators (5) vs Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-68.html">Flames (1) vs Coyotes (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-67.html">Heat (7) vs  Americans (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-68.html">IceHogs (2) vs Condors (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-69.html">Sabres (1) vs Canadiens (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-70.html">Islanders (2) vs Rangers (3)</a>  - OT (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-69.html">Rocket (3) vs Bruins (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-70.html">Checkers (1) vs Comets (9)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-71.html">Predators (2) vs Jets (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-72.html">Flames (3) vs Coyotes (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-71.html">Heat (2) vs  Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-72.html">IceHogs (1) vs Condors (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-73.html">Canadiens (1) vs Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-74.html">Rangers (2) vs Islanders (3)</a>  (R3)
</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-74.html">Comets (3) vs Checkers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-75.html">Jets (3) vs Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-76.html">Coyotes (3) vs Flames (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-75.html"> Americans (0) vs Heat (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-76.html">Condors (4) vs IceHogs (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-78.html">Checkers (6) vs Comets (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-79.html">Predators (5) vs Jets (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-80.html">Flames (2) vs Coyotes (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-80.html">IceHogs (3) vs Condors (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-83.html">Jets (0) vs Predators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">84</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-84.html">Condors (4) vs IceHogs (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-85.html">Sabres (2) vs Islanders (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-85.html">Checkers (1) vs Rocket (7)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-86.html">Coyotes (1) vs Predators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-86.html">IceHogs (3) vs Heat (9)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-87.html">Sabres (2) vs Islanders (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-87.html">Checkers (3) vs Rocket (9)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-88.html">Coyotes (7) vs Predators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-88.html">IceHogs (4) vs Heat (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-89.html">Islanders (1) vs Sabres (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-89.html">Rocket (5) vs Checkers (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-90.html">Predators (0) vs Coyotes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-90.html">Heat (2) vs IceHogs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-91.html">Islanders (0) vs Sabres (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-91.html">Rocket (2) vs Checkers (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-92.html">Predators (1) vs Coyotes (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-92.html">Heat (2) vs IceHogs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-93.html">Sabres (3) vs Islanders (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-93.html">Checkers (4) vs Rocket (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-94.html">Coyotes (2) vs Predators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-94.html">IceHogs (4) vs Heat (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-95.html">Islanders (3) vs Sabres (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-95.html">Rocket (1) vs Checkers (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-96.html">Predators (6) vs Coyotes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-97.html">Sabres (6) vs Islanders (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-98.html">Coyotes (2) vs Predators (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-99.html">Predators (2) vs Sabres (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-99.html">Checkers (6) vs IceHogs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-100.html">Predators (3) vs Sabres (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-100.html">Checkers (3) vs IceHogs (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-101.html">Sabres (2) vs Predators (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-101.html">IceHogs (6) vs Checkers (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 46</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-102.html">Sabres (5) vs Predators (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-102.html">IceHogs (3) vs Checkers (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 47</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-103.html">Predators (4) vs Sabres (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-103.html">Checkers (2) vs IceHogs (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 48</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-104.html">Sabres (4) vs Predators (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 49</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-105.html">Predators (3) vs Sabres (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
