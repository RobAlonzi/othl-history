<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Stats</title>
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
<script>$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>Avalanche</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Blackhawks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Blue Jackets</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Blues</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Canadiens</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Canucks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Capitals</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Coyotes</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Devils</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Ducks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Flames</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Flyers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Golden Knights</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Hurricanes</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Islanders</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Jets</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Kings</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Kraken</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Lightning</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Maple Leafs</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Oilers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Panthers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Penguins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Predators</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rangers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Red Wings</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Sabres</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Senators</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Sharks</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Stars</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wild</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Avalanche</td><td>COL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Blackhawks</td><td>CHI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Blue Jackets</td><td>CLB</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Blues</td><td>STL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>BOS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Canadiens</td><td>MTL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Canucks</td><td>VAN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Capitals</td><td>WSH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Coyotes</td><td>ARI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Devils</td><td>NJD</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Ducks</td><td>ANH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Flames</td><td>CGY</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Flyers</td><td>PHL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Golden Knights</td><td>VGK</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Hurricanes</td><td>CAR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Islanders</td><td>NYI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Jets</td><td>WPG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Kings</td><td>LAK</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Kraken</td><td>SEA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Lightning</td><td>TBL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Maple Leafs</td><td>TOR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Oilers</td><td>EDM</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Panthers</td><td>FLA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Penguins</td><td>PIT</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Predators</td><td>NSH</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rangers</td><td>NYR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Red Wings</td><td>DET</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Sabres</td><td>BUF</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Senators</td><td>OTT</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Sharks</td><td>SJS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Stars</td><td>DAL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wild</td><td>MIN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wild</td><td>0.00</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>0.00</td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>0.00</td></tr>
<tr><td>5</td><td>Blues</td><td>0.00</td></tr>
<tr><td>6</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>7</td><td>Canadiens</td><td>0.00</td></tr>
<tr><td>8</td><td>Canucks</td><td>0.00</td></tr>
<tr><td>9</td><td>Capitals</td><td>0.00</td></tr>
<tr><td>10</td><td>Coyotes</td><td>0.00</td></tr>
<tr><td>11</td><td>Devils</td><td>0.00</td></tr>
<tr><td>12</td><td>Ducks</td><td>0.00</td></tr>
<tr><td>13</td><td>Flames</td><td>0.00</td></tr>
<tr><td>14</td><td>Flyers</td><td>0.00</td></tr>
<tr><td>15</td><td>Golden Knights</td><td>0.00</td></tr>
<tr><td>16</td><td>Hurricanes</td><td>0.00</td></tr>
<tr><td>17</td><td>Islanders</td><td>0.00</td></tr>
<tr><td>18</td><td>Jets</td><td>0.00</td></tr>
<tr><td>19</td><td>Kings</td><td>0.00</td></tr>
<tr><td>20</td><td>Kraken</td><td>0.00</td></tr>
<tr><td>21</td><td>Lightning</td><td>0.00</td></tr>
<tr><td>22</td><td>Maple Leafs</td><td>0.00</td></tr>
<tr><td>23</td><td>Oilers</td><td>0.00</td></tr>
<tr><td>24</td><td>Panthers</td><td>0.00</td></tr>
<tr><td>25</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>26</td><td>Predators</td><td>0.00</td></tr>
<tr><td>27</td><td>Rangers</td><td>0.00</td></tr>
<tr><td>28</td><td>Red Wings</td><td>0.00</td></tr>
<tr><td>29</td><td>Sabres</td><td>0.00</td></tr>
<tr><td>30</td><td>Senators</td><td>0.00</td></tr>
<tr><td>31</td><td>Sharks</td><td>0.00</td></tr>
<tr><td>32</td><td>Avalanche</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Avalanche</td><td>0.00</td></tr>
<tr><td>2</td><td>Sharks</td><td>0.00</td></tr>
<tr><td>3</td><td>Senators</td><td>0.00</td></tr>
<tr><td>4</td><td>Sabres</td><td>0.00</td></tr>
<tr><td>5</td><td>Red Wings</td><td>0.00</td></tr>
<tr><td>6</td><td>Rangers</td><td>0.00</td></tr>
<tr><td>7</td><td>Predators</td><td>0.00</td></tr>
<tr><td>8</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>9</td><td>Panthers</td><td>0.00</td></tr>
<tr><td>10</td><td>Oilers</td><td>0.00</td></tr>
<tr><td>11</td><td>Maple Leafs</td><td>0.00</td></tr>
<tr><td>12</td><td>Lightning</td><td>0.00</td></tr>
<tr><td>13</td><td>Kraken</td><td>0.00</td></tr>
<tr><td>14</td><td>Kings</td><td>0.00</td></tr>
<tr><td>15</td><td>Jets</td><td>0.00</td></tr>
<tr><td>16</td><td>Islanders</td><td>0.00</td></tr>
<tr><td>17</td><td>Hurricanes</td><td>0.00</td></tr>
<tr><td>18</td><td>Golden Knights</td><td>0.00</td></tr>
<tr><td>19</td><td>Flyers</td><td>0.00</td></tr>
<tr><td>20</td><td>Flames</td><td>0.00</td></tr>
<tr><td>21</td><td>Ducks</td><td>0.00</td></tr>
<tr><td>22</td><td>Devils</td><td>0.00</td></tr>
<tr><td>23</td><td>Coyotes</td><td>0.00</td></tr>
<tr><td>24</td><td>Capitals</td><td>0.00</td></tr>
<tr><td>25</td><td>Canucks</td><td>0.00</td></tr>
<tr><td>26</td><td>Canadiens</td><td>0.00</td></tr>
<tr><td>27</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>28</td><td>Blues</td><td>0.00</td></tr>
<tr><td>29</td><td>Blue Jackets</td><td>0.00</td></tr>
<tr><td>30</td><td>Blackhawks</td><td>0.00</td></tr>
<tr><td>31</td><td>Stars</td><td>0.00</td></tr>
<tr><td>32</td><td>Wild</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>3</td><td>Sharks</td><td>0.00%</td></tr>
<tr><td>4</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>5</td><td>Sabres</td><td>0.00%</td></tr>
<tr><td>6</td><td>Red Wings</td><td>0.00%</td></tr>
<tr><td>7</td><td>Rangers</td><td>0.00%</td></tr>
<tr><td>8</td><td>Predators</td><td>0.00%</td></tr>
<tr><td>9</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>10</td><td>Panthers</td><td>0.00%</td></tr>
<tr><td>11</td><td>Oilers</td><td>0.00%</td></tr>
<tr><td>12</td><td>Maple Leafs</td><td>0.00%</td></tr>
<tr><td>13</td><td>Lightning</td><td>0.00%</td></tr>
<tr><td>14</td><td>Kraken</td><td>0.00%</td></tr>
<tr><td>15</td><td>Kings</td><td>0.00%</td></tr>
<tr><td>16</td><td>Jets</td><td>0.00%</td></tr>
<tr><td>17</td><td>Islanders</td><td>0.00%</td></tr>
<tr><td>18</td><td>Hurricanes</td><td>0.00%</td></tr>
<tr><td>19</td><td>Golden Knights</td><td>0.00%</td></tr>
<tr><td>20</td><td>Flyers</td><td>0.00%</td></tr>
<tr><td>21</td><td>Flames</td><td>0.00%</td></tr>
<tr><td>22</td><td>Ducks</td><td>0.00%</td></tr>
<tr><td>23</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>24</td><td>Coyotes</td><td>0.00%</td></tr>
<tr><td>25</td><td>Capitals</td><td>0.00%</td></tr>
<tr><td>26</td><td>Canucks</td><td>0.00%</td></tr>
<tr><td>27</td><td>Canadiens</td><td>0.00%</td></tr>
<tr><td>28</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>29</td><td>Blues</td><td>0.00%</td></tr>
<tr><td>30</td><td>Blue Jackets</td><td>0.00%</td></tr>
<tr><td>31</td><td>Blackhawks</td><td>0.00%</td></tr>
<tr><td>32</td><td>Avalanche</td><td>0.00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>0.00%</td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>0.00%</td></tr>
<tr><td>5</td><td>Blues</td><td>0.00%</td></tr>
<tr><td>6</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>7</td><td>Canadiens</td><td>0.00%</td></tr>
<tr><td>8</td><td>Canucks</td><td>0.00%</td></tr>
<tr><td>9</td><td>Capitals</td><td>0.00%</td></tr>
<tr><td>10</td><td>Coyotes</td><td>0.00%</td></tr>
<tr><td>11</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>12</td><td>Ducks</td><td>0.00%</td></tr>
<tr><td>13</td><td>Flames</td><td>0.00%</td></tr>
<tr><td>14</td><td>Flyers</td><td>0.00%</td></tr>
<tr><td>15</td><td>Golden Knights</td><td>0.00%</td></tr>
<tr><td>16</td><td>Hurricanes</td><td>0.00%</td></tr>
<tr><td>17</td><td>Islanders</td><td>0.00%</td></tr>
<tr><td>18</td><td>Jets</td><td>0.00%</td></tr>
<tr><td>19</td><td>Kings</td><td>0.00%</td></tr>
<tr><td>20</td><td>Kraken</td><td>0.00%</td></tr>
<tr><td>21</td><td>Lightning</td><td>0.00%</td></tr>
<tr><td>22</td><td>Maple Leafs</td><td>0.00%</td></tr>
<tr><td>23</td><td>Oilers</td><td>0.00%</td></tr>
<tr><td>24</td><td>Panthers</td><td>0.00%</td></tr>
<tr><td>25</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>26</td><td>Predators</td><td>0.00%</td></tr>
<tr><td>27</td><td>Rangers</td><td>0.00%</td></tr>
<tr><td>28</td><td>Red Wings</td><td>0.00%</td></tr>
<tr><td>29</td><td>Sabres</td><td>0.00%</td></tr>
<tr><td>30</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>31</td><td>Sharks</td><td>0.00%</td></tr>
<tr><td>32</td><td>Avalanche</td><td>0.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>0.00%</td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>0.00%</td></tr>
<tr><td>5</td><td>Blues</td><td>0.00%</td></tr>
<tr><td>6</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>7</td><td>Canadiens</td><td>0.00%</td></tr>
<tr><td>8</td><td>Canucks</td><td>0.00%</td></tr>
<tr><td>9</td><td>Capitals</td><td>0.00%</td></tr>
<tr><td>10</td><td>Coyotes</td><td>0.00%</td></tr>
<tr><td>11</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>12</td><td>Ducks</td><td>0.00%</td></tr>
<tr><td>13</td><td>Flames</td><td>0.00%</td></tr>
<tr><td>14</td><td>Flyers</td><td>0.00%</td></tr>
<tr><td>15</td><td>Golden Knights</td><td>0.00%</td></tr>
<tr><td>16</td><td>Hurricanes</td><td>0.00%</td></tr>
<tr><td>17</td><td>Islanders</td><td>0.00%</td></tr>
<tr><td>18</td><td>Jets</td><td>0.00%</td></tr>
<tr><td>19</td><td>Kings</td><td>0.00%</td></tr>
<tr><td>20</td><td>Kraken</td><td>0.00%</td></tr>
<tr><td>21</td><td>Lightning</td><td>0.00%</td></tr>
<tr><td>22</td><td>Maple Leafs</td><td>0.00%</td></tr>
<tr><td>23</td><td>Oilers</td><td>0.00%</td></tr>
<tr><td>24</td><td>Panthers</td><td>0.00%</td></tr>
<tr><td>25</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>26</td><td>Predators</td><td>0.00%</td></tr>
<tr><td>27</td><td>Rangers</td><td>0.00%</td></tr>
<tr><td>28</td><td>Red Wings</td><td>0.00%</td></tr>
<tr><td>29</td><td>Sabres</td><td>0.00%</td></tr>
<tr><td>30</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>31</td><td>Sharks</td><td>0.00%</td></tr>
<tr><td>32</td><td>Avalanche</td><td>0.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>3</td><td>Sharks</td><td>0.00%</td></tr>
<tr><td>4</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>5</td><td>Sabres</td><td>0.00%</td></tr>
<tr><td>6</td><td>Red Wings</td><td>0.00%</td></tr>
<tr><td>7</td><td>Rangers</td><td>0.00%</td></tr>
<tr><td>8</td><td>Predators</td><td>0.00%</td></tr>
<tr><td>9</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>10</td><td>Panthers</td><td>0.00%</td></tr>
<tr><td>11</td><td>Oilers</td><td>0.00%</td></tr>
<tr><td>12</td><td>Maple Leafs</td><td>0.00%</td></tr>
<tr><td>13</td><td>Lightning</td><td>0.00%</td></tr>
<tr><td>14</td><td>Kraken</td><td>0.00%</td></tr>
<tr><td>15</td><td>Kings</td><td>0.00%</td></tr>
<tr><td>16</td><td>Jets</td><td>0.00%</td></tr>
<tr><td>17</td><td>Islanders</td><td>0.00%</td></tr>
<tr><td>18</td><td>Hurricanes</td><td>0.00%</td></tr>
<tr><td>19</td><td>Golden Knights</td><td>0.00%</td></tr>
<tr><td>20</td><td>Flyers</td><td>0.00%</td></tr>
<tr><td>21</td><td>Flames</td><td>0.00%</td></tr>
<tr><td>22</td><td>Ducks</td><td>0.00%</td></tr>
<tr><td>23</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>24</td><td>Coyotes</td><td>0.00%</td></tr>
<tr><td>25</td><td>Capitals</td><td>0.00%</td></tr>
<tr><td>26</td><td>Canucks</td><td>0.00%</td></tr>
<tr><td>27</td><td>Canadiens</td><td>0.00%</td></tr>
<tr><td>28</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>29</td><td>Blues</td><td>0.00%</td></tr>
<tr><td>30</td><td>Blue Jackets</td><td>0.00%</td></tr>
<tr><td>31</td><td>Blackhawks</td><td>0.00%</td></tr>
<tr><td>32</td><td>Avalanche</td><td>0.00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wild</td><td>0.00</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>0.00</td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>0.00</td></tr>
<tr><td>5</td><td>Blues</td><td>0.00</td></tr>
<tr><td>6</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>7</td><td>Canadiens</td><td>0.00</td></tr>
<tr><td>8</td><td>Canucks</td><td>0.00</td></tr>
<tr><td>9</td><td>Capitals</td><td>0.00</td></tr>
<tr><td>10</td><td>Coyotes</td><td>0.00</td></tr>
<tr><td>11</td><td>Devils</td><td>0.00</td></tr>
<tr><td>12</td><td>Ducks</td><td>0.00</td></tr>
<tr><td>13</td><td>Flames</td><td>0.00</td></tr>
<tr><td>14</td><td>Flyers</td><td>0.00</td></tr>
<tr><td>15</td><td>Golden Knights</td><td>0.00</td></tr>
<tr><td>16</td><td>Hurricanes</td><td>0.00</td></tr>
<tr><td>17</td><td>Islanders</td><td>0.00</td></tr>
<tr><td>18</td><td>Jets</td><td>0.00</td></tr>
<tr><td>19</td><td>Kings</td><td>0.00</td></tr>
<tr><td>20</td><td>Kraken</td><td>0.00</td></tr>
<tr><td>21</td><td>Lightning</td><td>0.00</td></tr>
<tr><td>22</td><td>Maple Leafs</td><td>0.00</td></tr>
<tr><td>23</td><td>Oilers</td><td>0.00</td></tr>
<tr><td>24</td><td>Panthers</td><td>0.00</td></tr>
<tr><td>25</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>26</td><td>Predators</td><td>0.00</td></tr>
<tr><td>27</td><td>Rangers</td><td>0.00</td></tr>
<tr><td>28</td><td>Red Wings</td><td>0.00</td></tr>
<tr><td>29</td><td>Sabres</td><td>0.00</td></tr>
<tr><td>30</td><td>Senators</td><td>0.00</td></tr>
<tr><td>31</td><td>Sharks</td><td>0.00</td></tr>
<tr><td>32</td><td>Avalanche</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Avalanche</td><td>0.00</td></tr>
<tr><td>2</td><td>Sharks</td><td>0.00</td></tr>
<tr><td>3</td><td>Senators</td><td>0.00</td></tr>
<tr><td>4</td><td>Sabres</td><td>0.00</td></tr>
<tr><td>5</td><td>Red Wings</td><td>0.00</td></tr>
<tr><td>6</td><td>Rangers</td><td>0.00</td></tr>
<tr><td>7</td><td>Predators</td><td>0.00</td></tr>
<tr><td>8</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>9</td><td>Panthers</td><td>0.00</td></tr>
<tr><td>10</td><td>Oilers</td><td>0.00</td></tr>
<tr><td>11</td><td>Maple Leafs</td><td>0.00</td></tr>
<tr><td>12</td><td>Lightning</td><td>0.00</td></tr>
<tr><td>13</td><td>Kraken</td><td>0.00</td></tr>
<tr><td>14</td><td>Kings</td><td>0.00</td></tr>
<tr><td>15</td><td>Jets</td><td>0.00</td></tr>
<tr><td>16</td><td>Islanders</td><td>0.00</td></tr>
<tr><td>17</td><td>Hurricanes</td><td>0.00</td></tr>
<tr><td>18</td><td>Golden Knights</td><td>0.00</td></tr>
<tr><td>19</td><td>Flyers</td><td>0.00</td></tr>
<tr><td>20</td><td>Flames</td><td>0.00</td></tr>
<tr><td>21</td><td>Ducks</td><td>0.00</td></tr>
<tr><td>22</td><td>Devils</td><td>0.00</td></tr>
<tr><td>23</td><td>Coyotes</td><td>0.00</td></tr>
<tr><td>24</td><td>Capitals</td><td>0.00</td></tr>
<tr><td>25</td><td>Canucks</td><td>0.00</td></tr>
<tr><td>26</td><td>Canadiens</td><td>0.00</td></tr>
<tr><td>27</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>28</td><td>Blues</td><td>0.00</td></tr>
<tr><td>29</td><td>Blue Jackets</td><td>0.00</td></tr>
<tr><td>30</td><td>Blackhawks</td><td>0.00</td></tr>
<tr><td>31</td><td>Stars</td><td>0.00</td></tr>
<tr><td>32</td><td>Wild</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>3</td><td>Sharks</td><td>0.00%</td></tr>
<tr><td>4</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>5</td><td>Sabres</td><td>0.00%</td></tr>
<tr><td>6</td><td>Red Wings</td><td>0.00%</td></tr>
<tr><td>7</td><td>Rangers</td><td>0.00%</td></tr>
<tr><td>8</td><td>Predators</td><td>0.00%</td></tr>
<tr><td>9</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>10</td><td>Panthers</td><td>0.00%</td></tr>
<tr><td>11</td><td>Oilers</td><td>0.00%</td></tr>
<tr><td>12</td><td>Maple Leafs</td><td>0.00%</td></tr>
<tr><td>13</td><td>Lightning</td><td>0.00%</td></tr>
<tr><td>14</td><td>Kraken</td><td>0.00%</td></tr>
<tr><td>15</td><td>Kings</td><td>0.00%</td></tr>
<tr><td>16</td><td>Jets</td><td>0.00%</td></tr>
<tr><td>17</td><td>Islanders</td><td>0.00%</td></tr>
<tr><td>18</td><td>Hurricanes</td><td>0.00%</td></tr>
<tr><td>19</td><td>Golden Knights</td><td>0.00%</td></tr>
<tr><td>20</td><td>Flyers</td><td>0.00%</td></tr>
<tr><td>21</td><td>Flames</td><td>0.00%</td></tr>
<tr><td>22</td><td>Ducks</td><td>0.00%</td></tr>
<tr><td>23</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>24</td><td>Coyotes</td><td>0.00%</td></tr>
<tr><td>25</td><td>Capitals</td><td>0.00%</td></tr>
<tr><td>26</td><td>Canucks</td><td>0.00%</td></tr>
<tr><td>27</td><td>Canadiens</td><td>0.00%</td></tr>
<tr><td>28</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>29</td><td>Blues</td><td>0.00%</td></tr>
<tr><td>30</td><td>Blue Jackets</td><td>0.00%</td></tr>
<tr><td>31</td><td>Blackhawks</td><td>0.00%</td></tr>
<tr><td>32</td><td>Avalanche</td><td>0.00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Avalanche</td><td>0.00</td></tr>
<tr><td>2</td><td>Sharks</td><td>0.00</td></tr>
<tr><td>3</td><td>Senators</td><td>0.00</td></tr>
<tr><td>4</td><td>Sabres</td><td>0.00</td></tr>
<tr><td>5</td><td>Red Wings</td><td>0.00</td></tr>
<tr><td>6</td><td>Rangers</td><td>0.00</td></tr>
<tr><td>7</td><td>Predators</td><td>0.00</td></tr>
<tr><td>8</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>9</td><td>Panthers</td><td>0.00</td></tr>
<tr><td>10</td><td>Oilers</td><td>0.00</td></tr>
<tr><td>11</td><td>Maple Leafs</td><td>0.00</td></tr>
<tr><td>12</td><td>Lightning</td><td>0.00</td></tr>
<tr><td>13</td><td>Kraken</td><td>0.00</td></tr>
<tr><td>14</td><td>Kings</td><td>0.00</td></tr>
<tr><td>15</td><td>Jets</td><td>0.00</td></tr>
<tr><td>16</td><td>Islanders</td><td>0.00</td></tr>
<tr><td>17</td><td>Hurricanes</td><td>0.00</td></tr>
<tr><td>18</td><td>Golden Knights</td><td>0.00</td></tr>
<tr><td>19</td><td>Flyers</td><td>0.00</td></tr>
<tr><td>20</td><td>Flames</td><td>0.00</td></tr>
<tr><td>21</td><td>Ducks</td><td>0.00</td></tr>
<tr><td>22</td><td>Devils</td><td>0.00</td></tr>
<tr><td>23</td><td>Coyotes</td><td>0.00</td></tr>
<tr><td>24</td><td>Capitals</td><td>0.00</td></tr>
<tr><td>25</td><td>Canucks</td><td>0.00</td></tr>
<tr><td>26</td><td>Canadiens</td><td>0.00</td></tr>
<tr><td>27</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>28</td><td>Blues</td><td>0.00</td></tr>
<tr><td>29</td><td>Blue Jackets</td><td>0.00</td></tr>
<tr><td>30</td><td>Blackhawks</td><td>0.00</td></tr>
<tr><td>31</td><td>Stars</td><td>0.00</td></tr>
<tr><td>32</td><td>Wild</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Wild</td><td>0.00</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>0.00</td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>0.00</td></tr>
<tr><td>5</td><td>Blues</td><td>0.00</td></tr>
<tr><td>6</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>7</td><td>Canadiens</td><td>0.00</td></tr>
<tr><td>8</td><td>Canucks</td><td>0.00</td></tr>
<tr><td>9</td><td>Capitals</td><td>0.00</td></tr>
<tr><td>10</td><td>Coyotes</td><td>0.00</td></tr>
<tr><td>11</td><td>Devils</td><td>0.00</td></tr>
<tr><td>12</td><td>Ducks</td><td>0.00</td></tr>
<tr><td>13</td><td>Flames</td><td>0.00</td></tr>
<tr><td>14</td><td>Flyers</td><td>0.00</td></tr>
<tr><td>15</td><td>Golden Knights</td><td>0.00</td></tr>
<tr><td>16</td><td>Hurricanes</td><td>0.00</td></tr>
<tr><td>17</td><td>Islanders</td><td>0.00</td></tr>
<tr><td>18</td><td>Jets</td><td>0.00</td></tr>
<tr><td>19</td><td>Kings</td><td>0.00</td></tr>
<tr><td>20</td><td>Kraken</td><td>0.00</td></tr>
<tr><td>21</td><td>Lightning</td><td>0.00</td></tr>
<tr><td>22</td><td>Maple Leafs</td><td>0.00</td></tr>
<tr><td>23</td><td>Oilers</td><td>0.00</td></tr>
<tr><td>24</td><td>Panthers</td><td>0.00</td></tr>
<tr><td>25</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>26</td><td>Predators</td><td>0.00</td></tr>
<tr><td>27</td><td>Rangers</td><td>0.00</td></tr>
<tr><td>28</td><td>Red Wings</td><td>0.00</td></tr>
<tr><td>29</td><td>Sabres</td><td>0.00</td></tr>
<tr><td>30</td><td>Senators</td><td>0.00</td></tr>
<tr><td>31</td><td>Sharks</td><td>0.00</td></tr>
<tr><td>32</td><td>Avalanche</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>3</td><td>Blackhawks</td><td>0.00%</td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>0.00%</td></tr>
<tr><td>5</td><td>Blues</td><td>0.00%</td></tr>
<tr><td>6</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>7</td><td>Canadiens</td><td>0.00%</td></tr>
<tr><td>8</td><td>Canucks</td><td>0.00%</td></tr>
<tr><td>9</td><td>Capitals</td><td>0.00%</td></tr>
<tr><td>10</td><td>Coyotes</td><td>0.00%</td></tr>
<tr><td>11</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>12</td><td>Ducks</td><td>0.00%</td></tr>
<tr><td>13</td><td>Flames</td><td>0.00%</td></tr>
<tr><td>14</td><td>Flyers</td><td>0.00%</td></tr>
<tr><td>15</td><td>Golden Knights</td><td>0.00%</td></tr>
<tr><td>16</td><td>Hurricanes</td><td>0.00%</td></tr>
<tr><td>17</td><td>Islanders</td><td>0.00%</td></tr>
<tr><td>18</td><td>Jets</td><td>0.00%</td></tr>
<tr><td>19</td><td>Kings</td><td>0.00%</td></tr>
<tr><td>20</td><td>Kraken</td><td>0.00%</td></tr>
<tr><td>21</td><td>Lightning</td><td>0.00%</td></tr>
<tr><td>22</td><td>Maple Leafs</td><td>0.00%</td></tr>
<tr><td>23</td><td>Oilers</td><td>0.00%</td></tr>
<tr><td>24</td><td>Panthers</td><td>0.00%</td></tr>
<tr><td>25</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>26</td><td>Predators</td><td>0.00%</td></tr>
<tr><td>27</td><td>Rangers</td><td>0.00%</td></tr>
<tr><td>28</td><td>Red Wings</td><td>0.00%</td></tr>
<tr><td>29</td><td>Sabres</td><td>0.00%</td></tr>
<tr><td>30</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>31</td><td>Sharks</td><td>0.00%</td></tr>
<tr><td>32</td><td>Avalanche</td><td>0.00%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
