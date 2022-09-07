<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Schedule</title>
<script src="OTHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.7.8 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="OTHL RSS Feed" href="https://othl.ca/File/2020-Playoffs/RSSFeed.xml" />
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
<a href="OTHL-PLF-1.html">Panthers (0) vs Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-2.html">Lightning (0) vs Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-3.html">Maple Leafs (0) vs Flyers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-4.html">Islanders (2) vs Blue Jackets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-1.html">Phantoms (2) vs Comets (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-2.html">Bruins (1) vs Thunderbirds (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-3.html">Penguins (4) vs Monsters (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-4.html">Checkers (2) vs Marlies (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-5.html">Oilers (2) vs Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-6.html">Predators (3) vs Stars (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-7.html">Ducks (1) vs Flames (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-8.html">Canucks (1) vs Coyotes (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-5.html">Wolves (1) vs Admirals (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-6.html">Heat (3) vs Condors (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-7.html">Barracudas (5) vs IceHogs (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-8.html">Moose (0) vs  Americans (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-9.html">Panthers (4) vs Bruins (5)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-10.html">Lightning (4) vs Sabres (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-11.html">Maple Leafs (2) vs Flyers (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-12.html">Islanders (2) vs Blue Jackets (1)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-9.html">Phantoms (1) vs Comets (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-10.html">Bruins (1) vs Thunderbirds (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-11.html">Penguins (5) vs Monsters (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-12.html">Checkers (2) vs Marlies (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-13.html">Oilers (6) vs Blackhawks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-14.html">Predators (3) vs Stars (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-15.html">Ducks (3) vs Flames (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-16.html">Canucks (5) vs Coyotes (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-13.html">Wolves (1) vs Admirals (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-14.html">Heat (1) vs Condors (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-15.html">Barracudas (4) vs IceHogs (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-16.html">Moose (3) vs  Americans (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-17.html">Bruins (6) vs Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-18.html">Sabres (1) vs Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-19.html">Flyers (5) vs Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-20.html">Blue Jackets (1) vs Islanders (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-17.html">Comets (4) vs Phantoms (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-18.html">Thunderbirds (0) vs Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-19.html">Monsters (3) vs Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-20.html">Marlies (3) vs Checkers (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-21.html">Blackhawks (3) vs Oilers (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-22.html">Stars (4) vs Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-23.html">Flames (2) vs Ducks (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-24.html">Coyotes (2) vs Canucks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-21.html">Admirals (5) vs Wolves (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-22.html">Condors (2) vs Heat (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-23.html">IceHogs (2) vs Barracudas (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-24.html"> Americans (3) vs Moose (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-25.html">Bruins (3) vs Panthers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-26.html">Sabres (2) vs Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-27.html">Flyers (4) vs Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-28.html">Blue Jackets (3) vs Islanders (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-25.html">Comets (2) vs Phantoms (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-26.html">Thunderbirds (1) vs Bruins (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-27.html">Monsters (6) vs Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-28.html">Marlies (1) vs Checkers (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-29.html">Blackhawks (3) vs Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-30.html">Stars (2) vs Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-31.html">Flames (3) vs Ducks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-32.html">Coyotes (1) vs Canucks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-29.html">Admirals (3) vs Wolves (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-30.html">Condors (3) vs Heat (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-31.html">IceHogs (8) vs Barracudas (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-32.html"> Americans (5) vs Moose (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-34.html">Lightning (1) vs Sabres (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-36.html">Islanders (5) vs Blue Jackets (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-33.html">Phantoms (2) vs Comets (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-34.html">Bruins (2) vs Thunderbirds (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-35.html">Penguins (3) vs Monsters (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-36.html">Checkers (2) vs Marlies (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-38.html">Predators (2) vs Stars (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-39.html">Ducks (2) vs Flames (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-40.html">Canucks (3) vs Coyotes (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-39.html">Barracudas (3) vs IceHogs (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-42.html">Sabres (0) vs Lightning (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-44.html">Blue Jackets (1) vs Islanders (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-41.html">Comets (0) vs Phantoms (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-42.html">Thunderbirds (3) vs Bruins (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-43.html">Monsters (3) vs Penguins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-44.html">Marlies (1) vs Checkers (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-46.html">Stars (1) vs Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-47.html">Flames (5) vs Ducks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-47.html">IceHogs (6) vs Barracudas (7)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-50.html">Lightning (4) vs Sabres (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-49.html">Phantoms (0) vs Comets (1)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-50.html">Bruins (0) vs Thunderbirds (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">51</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-51.html">Penguins (2) vs Monsters (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-52.html">Checkers (3) vs Marlies (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">54</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-54.html">Predators (3) vs Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-55.html">Ducks (3) vs Flames (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-55.html">Barracudas (4) vs IceHogs (12)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-57.html">Lightning (2) vs Bruins (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-58.html">Islanders (4) vs Flyers (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-57.html">Marlies (0) vs Comets (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-58.html">Monsters (2) vs Thunderbirds (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-59.html">Oilers (4) vs Predators (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-60.html">Ducks (1) vs Canucks (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-59.html"> Americans (2) vs Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-60.html">IceHogs (2) vs Condors (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-61.html">Lightning (2) vs Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-62.html">Islanders (3) vs Flyers (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-61.html">Marlies (1) vs Comets (2)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-62.html">Monsters (0) vs Thunderbirds (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-63.html">Oilers (0) vs Predators (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-64.html">Ducks (2) vs Canucks (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-63.html"> Americans (4) vs Admirals (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-64.html">IceHogs (2) vs Condors (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-65.html">Bruins (5) vs Lightning (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-66.html">Flyers (4) vs Islanders (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-65.html">Comets (2) vs Marlies (0)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-66.html">Thunderbirds (1) vs Monsters (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-67.html">Predators (4) vs Oilers (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-68.html">Canucks (3) vs Ducks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-67.html">Admirals (1) vs  Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-68.html">Condors (4) vs IceHogs (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-69.html">Bruins (1) vs Lightning (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-70.html">Flyers (6) vs Islanders (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-69.html">Comets (4) vs Marlies (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-70.html">Thunderbirds (2) vs Monsters (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-71.html">Predators (3) vs Oilers (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-72.html">Canucks (3) vs Ducks (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-71.html">Admirals (4) vs  Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-72.html">Condors (4) vs IceHogs (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-73.html">Lightning (3) vs Bruins (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-74.html">Islanders (3) vs Flyers (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-74.html">Monsters (3) vs Thunderbirds (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-75.html">Oilers (1) vs Predators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-75.html"> Americans (3) vs Admirals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-77.html">Bruins (2) vs Lightning (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">78</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-78.html">Thunderbirds (2) vs Monsters (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-79.html">Predators (2) vs Oilers (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-79.html">Admirals (1) vs  Americans (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-81.html">Lightning (1) vs Bruins (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-83.html">Oilers (3) vs Predators (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-83.html"> Americans (1) vs Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-85.html">Flyers (1) vs Bruins (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-85.html">Thunderbirds (0) vs Comets (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-86.html">Predators (3) vs Canucks (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-86.html">Condors (4) vs Admirals (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-87.html">Flyers (6) vs Bruins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-87.html">Thunderbirds (5) vs Comets (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-88.html">Predators (3) vs Canucks (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-88.html">Condors (2) vs Admirals (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-89.html">Bruins (4) vs Flyers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-89.html">Comets (2) vs Thunderbirds (0)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-90.html">Canucks (4) vs Predators (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-90.html">Admirals (4) vs Condors (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-91.html">Bruins (3) vs Flyers (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-91.html">Comets (1) vs Thunderbirds (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-92.html">Canucks (5) vs Predators (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-92.html">Admirals (5) vs Condors (6)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-93.html">Flyers (3) vs Bruins (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-93.html">Thunderbirds (2) vs Comets (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-94.html">Condors (3) vs Admirals (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-95.html">Bruins (4) vs Flyers (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-95.html">Comets (2) vs Thunderbirds (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">97</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-97.html">Flyers (3) vs Bruins (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-99.html">Bruins (3) vs Canucks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-99.html">Condors (1) vs Comets (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-100.html">Bruins (3) vs Canucks (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-100.html">Condors (2) vs Comets (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-101.html">Canucks (2) vs Bruins (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-101.html">Comets (5) vs Condors (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 46</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-102.html">Canucks (3) vs Bruins (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-102.html">Comets (5) vs Condors (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 47</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 48</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 49</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
