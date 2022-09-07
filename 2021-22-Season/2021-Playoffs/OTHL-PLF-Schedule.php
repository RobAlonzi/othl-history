<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Schedule</title>
<script src="OTHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.3.1.4 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="OTHL RSS Feed" href="https://othl.ca/File/2021-Playoffs/RSSFeed.xml" />
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 1</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-1.html">Bruins (5) vs Canadiens (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-2.html">Sabres (0) vs Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-3.html">Panthers (2) vs Islanders (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-4.html">Devils (4) vs Blue Jackets (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">1</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-1.html">Rocket (1) vs Canucks (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">2</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-2.html">Penguins (3) vs Thunderbirds (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">3</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-3.html">Bruins (1) vs Griffins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">4</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-4.html">Monsters (3) vs Marlies (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 2</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-5.html">Canucks (4) vs Blackhawks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-6.html">Stars (1) vs Predators (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-7.html">Kraken (3) vs Oilers (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-8.html">Kings (2) vs Flames (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">5</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-5.html">Admirals (1) vs Condors (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">6</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-6.html">Mariners (2) vs IceHogs (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">7</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-7.html">Heat (2) vs  Americans (7)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">8</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-8.html">Moose (3) vs Gulls (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 3</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-9.html">Bruins (3) vs Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-10.html">Sabres (1) vs Maple Leafs (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-11.html">Panthers (3) vs Islanders (4)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-12.html">Devils (2) vs Blue Jackets (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">9</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-9.html">Rocket (0) vs Canucks (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">10</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-10.html">Penguins (3) vs Thunderbirds (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">11</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-11.html">Bruins (6) vs Griffins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">12</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-12.html">Monsters (3) vs Marlies (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 4</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-13.html">Canucks (3) vs Blackhawks (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-14.html">Stars (4) vs Predators (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-15.html">Kraken (2) vs Oilers (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-16.html">Kings (3) vs Flames (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">13</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-13.html">Admirals (2) vs Condors (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">14</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-14.html">Mariners (4) vs IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">15</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-15.html">Heat (1) vs  Americans (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">16</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-16.html">Moose (2) vs Gulls (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 5</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-17.html">Canadiens (3) vs Bruins (2)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-18.html">Maple Leafs (3) vs Sabres (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-19.html">Islanders (4) vs Panthers (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-20.html">Blue Jackets (1) vs Devils (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">17</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-17.html">Canucks (4) vs Rocket (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">18</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-18.html">Thunderbirds (4) vs Penguins (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">19</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-19.html">Griffins (4) vs Bruins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">20</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-20.html">Marlies (3) vs Monsters (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 6</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-21.html">Blackhawks (1) vs Canucks (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-22.html">Predators (2) vs Stars (8)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-23.html">Oilers (1) vs Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-24.html">Flames (3) vs Kings (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">21</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-21.html">Condors (4) vs Admirals (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">22</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-22.html">IceHogs (3) vs Mariners (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">23</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-23.html"> Americans (5) vs Heat (4)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">24</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-24.html">Gulls (2) vs Moose (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 7</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-25.html">Canadiens (2) vs Bruins (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-26.html">Maple Leafs (3) vs Sabres (6)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-27.html">Islanders (3) vs Panthers (1)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-28.html">Blue Jackets (3) vs Devils (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">25</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-25.html">Canucks (3) vs Rocket (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">26</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-26.html">Thunderbirds (3) vs Penguins (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">27</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-27.html">Griffins (3) vs Bruins (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">28</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-28.html">Marlies (5) vs Monsters (4)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 8</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-29.html">Blackhawks (1) vs Canucks (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-30.html">Predators (6) vs Stars (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-31.html">Oilers (1) vs Kraken (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-32.html">Flames (5) vs Kings (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">29</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-29.html">Condors (8) vs Admirals (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">30</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-30.html">IceHogs (4) vs Mariners (3)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">31</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-31.html"> Americans (2) vs Heat (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">32</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-32.html">Gulls (3) vs Moose (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 9</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">33</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-33.html">Bruins (2) vs Canadiens (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-34.html">Sabres (5) vs Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-36.html">Devils (4) vs Blue Jackets (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">34</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-34.html">Penguins (0) vs Thunderbirds (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">35</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-35.html">Bruins (5) vs Griffins (1)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">36</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-36.html">Monsters (2) vs Marlies (10)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 10</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-38.html">Stars (2) vs Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-40.html">Kings (2) vs Flames (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">38</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-38.html">Mariners (0) vs IceHogs (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">39</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-39.html">Heat (3) vs  Americans (2)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">40</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-40.html">Moose (7) vs Gulls (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 11</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">41</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-41.html">Canadiens (1) vs Bruins (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-42.html">Maple Leafs (4) vs Sabres (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">44</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-44.html">Blue Jackets (2) vs Devils (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">42</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-42.html">Thunderbirds (2) vs Penguins (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">43</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-43.html">Griffins (2) vs Bruins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 12</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">46</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-46.html">Predators (2) vs Stars (1)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">47</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-47.html"> Americans (4) vs Heat (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 13</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">49</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-49.html">Bruins (1) vs Canadiens (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">50</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-50.html">Sabres (2) vs Maple Leafs (4)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">52</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-52.html">Devils (4) vs Blue Jackets (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 14</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">55</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-55.html">Heat (5) vs  Americans (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 15</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-57.html">Maple Leafs (6) vs Canadiens (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-58.html">Devils (1) vs Islanders (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">57</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-57.html">Penguins (1) vs Canucks (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">58</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-58.html">Bruins (1) vs Marlies (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 16</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-59.html">Canucks (6) vs Predators (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-60.html">Kraken (0) vs Flames (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">59</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-59.html">Heat (1) vs Condors (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">60</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-60.html">Moose (4) vs IceHogs (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 17</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-61.html">Maple Leafs (3) vs Canadiens (5)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-62.html">Devils (5) vs Islanders (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">61</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-61.html">Penguins (4) vs Canucks (6)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">62</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-62.html">Bruins (1) vs Marlies (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-63.html">Canucks (5) vs Predators (3)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-64.html">Kraken (2) vs Flames (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">63</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-63.html">Heat (3) vs Condors (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">64</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-64.html">Moose (2) vs IceHogs (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 19</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-65.html">Canadiens (4) vs Maple Leafs (2)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-66.html">Islanders (6) vs Devils (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">65</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-65.html">Canucks (4) vs Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">66</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-66.html">Marlies (4) vs Bruins (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 20</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-67.html">Predators (4) vs Canucks (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-68.html">Flames (6) vs Kraken (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">67</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-67.html">Condors (4) vs Heat (5)</a> - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">68</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-68.html">IceHogs (0) vs Moose (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 21</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-69.html">Canadiens (4) vs Maple Leafs (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-70.html">Islanders (4) vs Devils (3)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">69</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-69.html">Canucks (7) vs Penguins (3)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">70</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-70.html">Marlies (6) vs Bruins (5)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 22</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-71.html">Predators (5) vs Canucks (0)</a> </td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-72.html">Flames (6) vs Kraken (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">71</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-71.html">Condors (3) vs Heat (5)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">72</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-72.html">IceHogs (2) vs Moose (5)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 23</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">73</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-73.html">Maple Leafs (4) vs Canadiens (3)</a>  - OT</td></tr>
<tr><td class="STHSSchedule_GameNumber">74</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-74.html">Devils (2) vs Islanders (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 24</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-75.html">Canucks (4) vs Predators (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">75</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-75.html">Heat (2) vs Condors (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">76</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-76.html">Moose (4) vs IceHogs (3)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 25</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">77</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-77.html">Canadiens (1) vs Maple Leafs (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 26</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-79.html">Predators (3) vs Canucks (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">79</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-79.html">Condors (2) vs Heat (4)</a></td></tr>
<tr><td class="STHSSchedule_GameNumber">80</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-80.html">IceHogs (3) vs Moose (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 27</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">81</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-81.html">Maple Leafs (2) vs Canadiens (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 28</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-83.html">Canucks (5) vs Predators (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">83</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-83.html">Heat (3) vs Condors (1)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 29</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-85.html">Canadiens (5) vs Islanders (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">85</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-85.html">Marlies (1) vs Canucks (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 30</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-86.html">Canucks (1) vs Flames (2)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">86</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-86.html">Heat (1) vs Moose (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 31</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-87.html">Canadiens (4) vs Islanders (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">87</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-87.html">Marlies (3) vs Canucks (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 32</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-88.html">Canucks (1) vs Flames (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">88</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-88.html">Heat (5) vs Moose (6)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 33</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-89.html">Islanders (3) vs Canadiens (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">89</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-89.html">Canucks (1) vs Marlies (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 34</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-90.html">Flames (1) vs Canucks (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">90</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-90.html">Moose (3) vs Heat (2)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 35</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-91.html">Islanders (3) vs Canadiens (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">91</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-91.html">Canucks (2) vs Marlies (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 36</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-92.html">Flames (4) vs Canucks (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">92</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-92.html">Moose (3) vs Heat (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 37</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-93.html">Canadiens (2) vs Islanders (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">93</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-93.html">Marlies (2) vs Canucks (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 38</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-94.html">Canucks (3) vs Flames (4)</a>  - OT</td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">94</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-94.html">Heat (3) vs Moose (2)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 39</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-95.html">Islanders (2) vs Canadiens (6)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">95</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-95.html">Canucks (5) vs Marlies (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 40</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-96.html">Flames (1) vs Canucks (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">96</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-96.html">Moose (1) vs Heat (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 41</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 42</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-98.html">Canucks (3) vs Flames (5)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">98</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-98.html">Heat (2) vs Moose (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 43</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-99.html">Canadiens (4) vs Flames (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">99</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-99.html">Moose (1) vs Canucks (6)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 44</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-100.html">Canadiens (4) vs Flames (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">100</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-100.html">Moose (4) vs Canucks (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 45</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-101.html">Flames (4) vs Canadiens (2)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">101</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-101.html">Canucks (3) vs Moose (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 46</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-102.html">Flames (4) vs Canadiens (3)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">102</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-102.html">Canucks (6) vs Moose (3)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 47</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-103.html">Canadiens (2) vs Flames (1)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">103</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-103.html">Moose (0) vs Canucks (4)</a></td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><b>Day 48</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-104.html">Flames (2) vs Canadiens (0)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">104</td><td class="STHSSchedule_FarmLink">
<a href="OTHL-PLF-Farm-104.html">Canucks (2) vs Moose (1)</a> - OT</td></tr>
</table>
</td></tr>
<tr><td colspan="4" class="STHSSchedule_GameDay"><a id="Last_Simulate_Day"></a><b>Day 49</b></td></tr>
<tr><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
<tr><td class="STHSSchedule_GameNumber">105</td><td class="STHSSchedule_ProLink">
<a href="OTHL-PLF-105.html">Canadiens (2) vs Flames (4)</a> </td></tr>
</table>
</td><td colspan="2" class="STHSAlignTopBorder">
<table class="STHSTableFullW">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
