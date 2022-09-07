<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Stats</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.0.0 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="OTHL.css" rel="stylesheet" type="text/css" />
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
<tr><td>Eagles</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>IceHogs</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Monsters</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rampage </td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rocket</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Comets</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bears</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Roadrunners</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Devils</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Gulls</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Heat</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Phantoms</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wolves</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Checkers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Sound Tigers</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Moose</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Reign</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Crunch</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Marlies</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Condors</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Penguins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Admirals</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wolf Pack</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Griffins</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td> Americans</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Senators</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Barracudas</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Stars</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wild</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>Eagles</td><td>COL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>IceHogs</td><td>RCK</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Monsters</td><td>CLE</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rampage </td><td>SAR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bruins</td><td>PRO</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Rocket</td><td>LAV</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Comets</td><td>UTI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Bears</td><td>HER</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Roadrunners</td><td>TUC</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Devils</td><td>BNG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Gulls</td><td>SDG</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Heat</td><td>STK</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Phantoms</td><td>LVP</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wolves</td><td>CHI</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Checkers</td><td>CHR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Sound Tigers</td><td>BPT</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Moose</td><td>MAN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Reign</td><td>ONT</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Crunch</td><td>SYR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Marlies</td><td>TOR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Condors</td><td>BKR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Thunderbirds</td><td>SPR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Penguins</td><td>WBS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Admirals</td><td>MIL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wolf Pack</td><td>HFD</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Griffins</td><td>GRP</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td> Americans</td><td>ROC</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Senators</td><td>BEL</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Barracudas</td><td>SJB</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Stars</td><td>TEX</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Wild</td><td>IOA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Gulls</td><td>0.00</td></tr>
<tr><td>2</td><td>Devils</td><td>0.00</td></tr>
<tr><td>3</td><td>Roadrunners</td><td>0.00</td></tr>
<tr><td>4</td><td>Heat</td><td>0.00</td></tr>
<tr><td>5</td><td>Checkers</td><td>0.00</td></tr>
<tr><td>6</td><td>Wolves</td><td>0.00</td></tr>
<tr><td>7</td><td>Phantoms</td><td>0.00</td></tr>
<tr><td>8</td><td>Bears</td><td>0.00</td></tr>
<tr><td>9</td><td>Monsters</td><td>0.00</td></tr>
<tr><td>10</td><td>IceHogs</td><td>0.00</td></tr>
<tr><td>11</td><td>Eagles</td><td>0.00</td></tr>
<tr><td>12</td><td>Rampage </td><td>0.00</td></tr>
<tr><td>13</td><td>Comets</td><td>0.00</td></tr>
<tr><td>14</td><td>Rocket</td><td>0.00</td></tr>
<tr><td>15</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00</td></tr>
<tr><td>17</td><td> Americans</td><td>0.00</td></tr>
<tr><td>18</td><td>Griffins</td><td>0.00</td></tr>
<tr><td>19</td><td>Wolf Pack</td><td>0.00</td></tr>
<tr><td>20</td><td>Senators</td><td>0.00</td></tr>
<tr><td>21</td><td>Wild</td><td>0.00</td></tr>
<tr><td>22</td><td>Stars</td><td>0.00</td></tr>
<tr><td>23</td><td>Barracudas</td><td>0.00</td></tr>
<tr><td>24</td><td>Admirals</td><td>0.00</td></tr>
<tr><td>25</td><td>Crunch</td><td>0.00</td></tr>
<tr><td>26</td><td>Reign</td><td>0.00</td></tr>
<tr><td>27</td><td>Moose</td><td>0.00</td></tr>
<tr><td>28</td><td>Marlies</td><td>0.00</td></tr>
<tr><td>29</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>30</td><td>Thunderbirds</td><td>0.00</td></tr>
<tr><td>31</td><td>Condors</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Condors</td><td>0.00</td></tr>
<tr><td>2</td><td>Thunderbirds</td><td>0.00</td></tr>
<tr><td>3</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>4</td><td>Marlies</td><td>0.00</td></tr>
<tr><td>5</td><td>Moose</td><td>0.00</td></tr>
<tr><td>6</td><td>Reign</td><td>0.00</td></tr>
<tr><td>7</td><td>Crunch</td><td>0.00</td></tr>
<tr><td>8</td><td>Admirals</td><td>0.00</td></tr>
<tr><td>9</td><td>Barracudas</td><td>0.00</td></tr>
<tr><td>10</td><td>Stars</td><td>0.00</td></tr>
<tr><td>11</td><td>Wild</td><td>0.00</td></tr>
<tr><td>12</td><td>Senators</td><td>0.00</td></tr>
<tr><td>13</td><td>Wolf Pack</td><td>0.00</td></tr>
<tr><td>14</td><td>Griffins</td><td>0.00</td></tr>
<tr><td>15</td><td> Americans</td><td>0.00</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00</td></tr>
<tr><td>17</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>18</td><td>Rocket</td><td>0.00</td></tr>
<tr><td>19</td><td>Comets</td><td>0.00</td></tr>
<tr><td>20</td><td>Rampage </td><td>0.00</td></tr>
<tr><td>21</td><td>Eagles</td><td>0.00</td></tr>
<tr><td>22</td><td>IceHogs</td><td>0.00</td></tr>
<tr><td>23</td><td>Monsters</td><td>0.00</td></tr>
<tr><td>24</td><td>Bears</td><td>0.00</td></tr>
<tr><td>25</td><td>Phantoms</td><td>0.00</td></tr>
<tr><td>26</td><td>Wolves</td><td>0.00</td></tr>
<tr><td>27</td><td>Checkers</td><td>0.00</td></tr>
<tr><td>28</td><td>Heat</td><td>0.00</td></tr>
<tr><td>29</td><td>Roadrunners</td><td>0.00</td></tr>
<tr><td>30</td><td>Devils</td><td>0.00</td></tr>
<tr><td>31</td><td>Gulls</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>3</td><td>Barracudas</td><td>0.00%</td></tr>
<tr><td>4</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>5</td><td> Americans</td><td>0.00%</td></tr>
<tr><td>6</td><td>Griffins</td><td>0.00%</td></tr>
<tr><td>7</td><td>Wolf Pack</td><td>0.00%</td></tr>
<tr><td>8</td><td>Admirals</td><td>0.00%</td></tr>
<tr><td>9</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>0.00%</td></tr>
<tr><td>11</td><td>Condors</td><td>0.00%</td></tr>
<tr><td>12</td><td>Marlies</td><td>0.00%</td></tr>
<tr><td>13</td><td>Crunch</td><td>0.00%</td></tr>
<tr><td>14</td><td>Reign</td><td>0.00%</td></tr>
<tr><td>15</td><td>Moose</td><td>0.00%</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00%</td></tr>
<tr><td>17</td><td>Checkers</td><td>0.00%</td></tr>
<tr><td>18</td><td>Wolves</td><td>0.00%</td></tr>
<tr><td>19</td><td>Phantoms</td><td>0.00%</td></tr>
<tr><td>20</td><td>Heat</td><td>0.00%</td></tr>
<tr><td>21</td><td>Gulls</td><td>0.00%</td></tr>
<tr><td>22</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>23</td><td>Roadrunners</td><td>0.00%</td></tr>
<tr><td>24</td><td>Bears</td><td>0.00%</td></tr>
<tr><td>25</td><td>Comets</td><td>0.00%</td></tr>
<tr><td>26</td><td>Rocket</td><td>0.00%</td></tr>
<tr><td>27</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>28</td><td>Rampage </td><td>0.00%</td></tr>
<tr><td>29</td><td>Monsters</td><td>0.00%</td></tr>
<tr><td>30</td><td>IceHogs</td><td>0.00%</td></tr>
<tr><td>31</td><td>Eagles</td><td>0.00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Gulls</td><td>0.00%</td></tr>
<tr><td>2</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>3</td><td>Roadrunners</td><td>0.00%</td></tr>
<tr><td>4</td><td>Heat</td><td>0.00%</td></tr>
<tr><td>5</td><td>Checkers</td><td>0.00%</td></tr>
<tr><td>6</td><td>Wolves</td><td>0.00%</td></tr>
<tr><td>7</td><td>Phantoms</td><td>0.00%</td></tr>
<tr><td>8</td><td>Bears</td><td>0.00%</td></tr>
<tr><td>9</td><td>Monsters</td><td>0.00%</td></tr>
<tr><td>10</td><td>IceHogs</td><td>0.00%</td></tr>
<tr><td>11</td><td>Eagles</td><td>0.00%</td></tr>
<tr><td>12</td><td>Rampage </td><td>0.00%</td></tr>
<tr><td>13</td><td>Comets</td><td>0.00%</td></tr>
<tr><td>14</td><td>Rocket</td><td>0.00%</td></tr>
<tr><td>15</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00%</td></tr>
<tr><td>17</td><td> Americans</td><td>0.00%</td></tr>
<tr><td>18</td><td>Griffins</td><td>0.00%</td></tr>
<tr><td>19</td><td>Wolf Pack</td><td>0.00%</td></tr>
<tr><td>20</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>21</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>22</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>23</td><td>Barracudas</td><td>0.00%</td></tr>
<tr><td>24</td><td>Admirals</td><td>0.00%</td></tr>
<tr><td>25</td><td>Crunch</td><td>0.00%</td></tr>
<tr><td>26</td><td>Reign</td><td>0.00%</td></tr>
<tr><td>27</td><td>Moose</td><td>0.00%</td></tr>
<tr><td>28</td><td>Marlies</td><td>0.00%</td></tr>
<tr><td>29</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>30</td><td>Thunderbirds</td><td>0.00%</td></tr>
<tr><td>31</td><td>Condors</td><td>0.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Gulls</td><td>0.00%</td></tr>
<tr><td>2</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>3</td><td>Roadrunners</td><td>0.00%</td></tr>
<tr><td>4</td><td>Heat</td><td>0.00%</td></tr>
<tr><td>5</td><td>Checkers</td><td>0.00%</td></tr>
<tr><td>6</td><td>Wolves</td><td>0.00%</td></tr>
<tr><td>7</td><td>Phantoms</td><td>0.00%</td></tr>
<tr><td>8</td><td>Bears</td><td>0.00%</td></tr>
<tr><td>9</td><td>Monsters</td><td>0.00%</td></tr>
<tr><td>10</td><td>IceHogs</td><td>0.00%</td></tr>
<tr><td>11</td><td>Eagles</td><td>0.00%</td></tr>
<tr><td>12</td><td>Rampage </td><td>0.00%</td></tr>
<tr><td>13</td><td>Comets</td><td>0.00%</td></tr>
<tr><td>14</td><td>Rocket</td><td>0.00%</td></tr>
<tr><td>15</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00%</td></tr>
<tr><td>17</td><td> Americans</td><td>0.00%</td></tr>
<tr><td>18</td><td>Griffins</td><td>0.00%</td></tr>
<tr><td>19</td><td>Wolf Pack</td><td>0.00%</td></tr>
<tr><td>20</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>21</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>22</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>23</td><td>Barracudas</td><td>0.00%</td></tr>
<tr><td>24</td><td>Admirals</td><td>0.00%</td></tr>
<tr><td>25</td><td>Crunch</td><td>0.00%</td></tr>
<tr><td>26</td><td>Reign</td><td>0.00%</td></tr>
<tr><td>27</td><td>Moose</td><td>0.00%</td></tr>
<tr><td>28</td><td>Marlies</td><td>0.00%</td></tr>
<tr><td>29</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>30</td><td>Thunderbirds</td><td>0.00%</td></tr>
<tr><td>31</td><td>Condors</td><td>0.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>3</td><td>Barracudas</td><td>0.00%</td></tr>
<tr><td>4</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>5</td><td> Americans</td><td>0.00%</td></tr>
<tr><td>6</td><td>Griffins</td><td>0.00%</td></tr>
<tr><td>7</td><td>Wolf Pack</td><td>0.00%</td></tr>
<tr><td>8</td><td>Admirals</td><td>0.00%</td></tr>
<tr><td>9</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>0.00%</td></tr>
<tr><td>11</td><td>Condors</td><td>0.00%</td></tr>
<tr><td>12</td><td>Marlies</td><td>0.00%</td></tr>
<tr><td>13</td><td>Crunch</td><td>0.00%</td></tr>
<tr><td>14</td><td>Reign</td><td>0.00%</td></tr>
<tr><td>15</td><td>Moose</td><td>0.00%</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00%</td></tr>
<tr><td>17</td><td>Checkers</td><td>0.00%</td></tr>
<tr><td>18</td><td>Wolves</td><td>0.00%</td></tr>
<tr><td>19</td><td>Phantoms</td><td>0.00%</td></tr>
<tr><td>20</td><td>Heat</td><td>0.00%</td></tr>
<tr><td>21</td><td>Gulls</td><td>0.00%</td></tr>
<tr><td>22</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>23</td><td>Roadrunners</td><td>0.00%</td></tr>
<tr><td>24</td><td>Bears</td><td>0.00%</td></tr>
<tr><td>25</td><td>Comets</td><td>0.00%</td></tr>
<tr><td>26</td><td>Rocket</td><td>0.00%</td></tr>
<tr><td>27</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>28</td><td>Rampage </td><td>0.00%</td></tr>
<tr><td>29</td><td>Monsters</td><td>0.00%</td></tr>
<tr><td>30</td><td>IceHogs</td><td>0.00%</td></tr>
<tr><td>31</td><td>Eagles</td><td>0.00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Gulls</td><td>0.00</td></tr>
<tr><td>2</td><td>Devils</td><td>0.00</td></tr>
<tr><td>3</td><td>Roadrunners</td><td>0.00</td></tr>
<tr><td>4</td><td>Heat</td><td>0.00</td></tr>
<tr><td>5</td><td>Checkers</td><td>0.00</td></tr>
<tr><td>6</td><td>Wolves</td><td>0.00</td></tr>
<tr><td>7</td><td>Phantoms</td><td>0.00</td></tr>
<tr><td>8</td><td>Bears</td><td>0.00</td></tr>
<tr><td>9</td><td>Monsters</td><td>0.00</td></tr>
<tr><td>10</td><td>IceHogs</td><td>0.00</td></tr>
<tr><td>11</td><td>Eagles</td><td>0.00</td></tr>
<tr><td>12</td><td>Rampage </td><td>0.00</td></tr>
<tr><td>13</td><td>Comets</td><td>0.00</td></tr>
<tr><td>14</td><td>Rocket</td><td>0.00</td></tr>
<tr><td>15</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00</td></tr>
<tr><td>17</td><td> Americans</td><td>0.00</td></tr>
<tr><td>18</td><td>Griffins</td><td>0.00</td></tr>
<tr><td>19</td><td>Wolf Pack</td><td>0.00</td></tr>
<tr><td>20</td><td>Senators</td><td>0.00</td></tr>
<tr><td>21</td><td>Wild</td><td>0.00</td></tr>
<tr><td>22</td><td>Stars</td><td>0.00</td></tr>
<tr><td>23</td><td>Barracudas</td><td>0.00</td></tr>
<tr><td>24</td><td>Admirals</td><td>0.00</td></tr>
<tr><td>25</td><td>Crunch</td><td>0.00</td></tr>
<tr><td>26</td><td>Reign</td><td>0.00</td></tr>
<tr><td>27</td><td>Moose</td><td>0.00</td></tr>
<tr><td>28</td><td>Marlies</td><td>0.00</td></tr>
<tr><td>29</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>30</td><td>Thunderbirds</td><td>0.00</td></tr>
<tr><td>31</td><td>Condors</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Condors</td><td>0.00</td></tr>
<tr><td>2</td><td>Thunderbirds</td><td>0.00</td></tr>
<tr><td>3</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>4</td><td>Marlies</td><td>0.00</td></tr>
<tr><td>5</td><td>Moose</td><td>0.00</td></tr>
<tr><td>6</td><td>Reign</td><td>0.00</td></tr>
<tr><td>7</td><td>Crunch</td><td>0.00</td></tr>
<tr><td>8</td><td>Admirals</td><td>0.00</td></tr>
<tr><td>9</td><td>Barracudas</td><td>0.00</td></tr>
<tr><td>10</td><td>Stars</td><td>0.00</td></tr>
<tr><td>11</td><td>Wild</td><td>0.00</td></tr>
<tr><td>12</td><td>Senators</td><td>0.00</td></tr>
<tr><td>13</td><td>Wolf Pack</td><td>0.00</td></tr>
<tr><td>14</td><td>Griffins</td><td>0.00</td></tr>
<tr><td>15</td><td> Americans</td><td>0.00</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00</td></tr>
<tr><td>17</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>18</td><td>Rocket</td><td>0.00</td></tr>
<tr><td>19</td><td>Comets</td><td>0.00</td></tr>
<tr><td>20</td><td>Rampage </td><td>0.00</td></tr>
<tr><td>21</td><td>Eagles</td><td>0.00</td></tr>
<tr><td>22</td><td>IceHogs</td><td>0.00</td></tr>
<tr><td>23</td><td>Monsters</td><td>0.00</td></tr>
<tr><td>24</td><td>Bears</td><td>0.00</td></tr>
<tr><td>25</td><td>Phantoms</td><td>0.00</td></tr>
<tr><td>26</td><td>Wolves</td><td>0.00</td></tr>
<tr><td>27</td><td>Checkers</td><td>0.00</td></tr>
<tr><td>28</td><td>Heat</td><td>0.00</td></tr>
<tr><td>29</td><td>Roadrunners</td><td>0.00</td></tr>
<tr><td>30</td><td>Devils</td><td>0.00</td></tr>
<tr><td>31</td><td>Gulls</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>2</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>3</td><td>Barracudas</td><td>0.00%</td></tr>
<tr><td>4</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>5</td><td> Americans</td><td>0.00%</td></tr>
<tr><td>6</td><td>Griffins</td><td>0.00%</td></tr>
<tr><td>7</td><td>Wolf Pack</td><td>0.00%</td></tr>
<tr><td>8</td><td>Admirals</td><td>0.00%</td></tr>
<tr><td>9</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>10</td><td>Thunderbirds</td><td>0.00%</td></tr>
<tr><td>11</td><td>Condors</td><td>0.00%</td></tr>
<tr><td>12</td><td>Marlies</td><td>0.00%</td></tr>
<tr><td>13</td><td>Crunch</td><td>0.00%</td></tr>
<tr><td>14</td><td>Reign</td><td>0.00%</td></tr>
<tr><td>15</td><td>Moose</td><td>0.00%</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00%</td></tr>
<tr><td>17</td><td>Checkers</td><td>0.00%</td></tr>
<tr><td>18</td><td>Wolves</td><td>0.00%</td></tr>
<tr><td>19</td><td>Phantoms</td><td>0.00%</td></tr>
<tr><td>20</td><td>Heat</td><td>0.00%</td></tr>
<tr><td>21</td><td>Gulls</td><td>0.00%</td></tr>
<tr><td>22</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>23</td><td>Roadrunners</td><td>0.00%</td></tr>
<tr><td>24</td><td>Bears</td><td>0.00%</td></tr>
<tr><td>25</td><td>Comets</td><td>0.00%</td></tr>
<tr><td>26</td><td>Rocket</td><td>0.00%</td></tr>
<tr><td>27</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>28</td><td>Rampage </td><td>0.00%</td></tr>
<tr><td>29</td><td>Monsters</td><td>0.00%</td></tr>
<tr><td>30</td><td>IceHogs</td><td>0.00%</td></tr>
<tr><td>31</td><td>Eagles</td><td>0.00%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSFarmStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Condors</td><td>0.00</td></tr>
<tr><td>2</td><td>Thunderbirds</td><td>0.00</td></tr>
<tr><td>3</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>4</td><td>Marlies</td><td>0.00</td></tr>
<tr><td>5</td><td>Moose</td><td>0.00</td></tr>
<tr><td>6</td><td>Reign</td><td>0.00</td></tr>
<tr><td>7</td><td>Crunch</td><td>0.00</td></tr>
<tr><td>8</td><td>Admirals</td><td>0.00</td></tr>
<tr><td>9</td><td>Barracudas</td><td>0.00</td></tr>
<tr><td>10</td><td>Stars</td><td>0.00</td></tr>
<tr><td>11</td><td>Wild</td><td>0.00</td></tr>
<tr><td>12</td><td>Senators</td><td>0.00</td></tr>
<tr><td>13</td><td>Wolf Pack</td><td>0.00</td></tr>
<tr><td>14</td><td>Griffins</td><td>0.00</td></tr>
<tr><td>15</td><td> Americans</td><td>0.00</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00</td></tr>
<tr><td>17</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>18</td><td>Rocket</td><td>0.00</td></tr>
<tr><td>19</td><td>Comets</td><td>0.00</td></tr>
<tr><td>20</td><td>Rampage </td><td>0.00</td></tr>
<tr><td>21</td><td>Eagles</td><td>0.00</td></tr>
<tr><td>22</td><td>IceHogs</td><td>0.00</td></tr>
<tr><td>23</td><td>Monsters</td><td>0.00</td></tr>
<tr><td>24</td><td>Bears</td><td>0.00</td></tr>
<tr><td>25</td><td>Phantoms</td><td>0.00</td></tr>
<tr><td>26</td><td>Wolves</td><td>0.00</td></tr>
<tr><td>27</td><td>Checkers</td><td>0.00</td></tr>
<tr><td>28</td><td>Heat</td><td>0.00</td></tr>
<tr><td>29</td><td>Roadrunners</td><td>0.00</td></tr>
<tr><td>30</td><td>Devils</td><td>0.00</td></tr>
<tr><td>31</td><td>Gulls</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 0.00</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Gulls</td><td>0.00</td></tr>
<tr><td>2</td><td>Devils</td><td>0.00</td></tr>
<tr><td>3</td><td>Roadrunners</td><td>0.00</td></tr>
<tr><td>4</td><td>Heat</td><td>0.00</td></tr>
<tr><td>5</td><td>Checkers</td><td>0.00</td></tr>
<tr><td>6</td><td>Wolves</td><td>0.00</td></tr>
<tr><td>7</td><td>Phantoms</td><td>0.00</td></tr>
<tr><td>8</td><td>Bears</td><td>0.00</td></tr>
<tr><td>9</td><td>Monsters</td><td>0.00</td></tr>
<tr><td>10</td><td>IceHogs</td><td>0.00</td></tr>
<tr><td>11</td><td>Eagles</td><td>0.00</td></tr>
<tr><td>12</td><td>Rampage </td><td>0.00</td></tr>
<tr><td>13</td><td>Comets</td><td>0.00</td></tr>
<tr><td>14</td><td>Rocket</td><td>0.00</td></tr>
<tr><td>15</td><td>Bruins</td><td>0.00</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00</td></tr>
<tr><td>17</td><td> Americans</td><td>0.00</td></tr>
<tr><td>18</td><td>Griffins</td><td>0.00</td></tr>
<tr><td>19</td><td>Wolf Pack</td><td>0.00</td></tr>
<tr><td>20</td><td>Senators</td><td>0.00</td></tr>
<tr><td>21</td><td>Wild</td><td>0.00</td></tr>
<tr><td>22</td><td>Stars</td><td>0.00</td></tr>
<tr><td>23</td><td>Barracudas</td><td>0.00</td></tr>
<tr><td>24</td><td>Admirals</td><td>0.00</td></tr>
<tr><td>25</td><td>Crunch</td><td>0.00</td></tr>
<tr><td>26</td><td>Reign</td><td>0.00</td></tr>
<tr><td>27</td><td>Moose</td><td>0.00</td></tr>
<tr><td>28</td><td>Marlies</td><td>0.00</td></tr>
<tr><td>29</td><td>Penguins</td><td>0.00</td></tr>
<tr><td>30</td><td>Thunderbirds</td><td>0.00</td></tr>
<tr><td>31</td><td>Condors</td><td>0.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSFarmStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Gulls</td><td>0.00%</td></tr>
<tr><td>2</td><td>Devils</td><td>0.00%</td></tr>
<tr><td>3</td><td>Roadrunners</td><td>0.00%</td></tr>
<tr><td>4</td><td>Heat</td><td>0.00%</td></tr>
<tr><td>5</td><td>Checkers</td><td>0.00%</td></tr>
<tr><td>6</td><td>Wolves</td><td>0.00%</td></tr>
<tr><td>7</td><td>Phantoms</td><td>0.00%</td></tr>
<tr><td>8</td><td>Bears</td><td>0.00%</td></tr>
<tr><td>9</td><td>Monsters</td><td>0.00%</td></tr>
<tr><td>10</td><td>IceHogs</td><td>0.00%</td></tr>
<tr><td>11</td><td>Eagles</td><td>0.00%</td></tr>
<tr><td>12</td><td>Rampage </td><td>0.00%</td></tr>
<tr><td>13</td><td>Comets</td><td>0.00%</td></tr>
<tr><td>14</td><td>Rocket</td><td>0.00%</td></tr>
<tr><td>15</td><td>Bruins</td><td>0.00%</td></tr>
<tr><td>16</td><td>Sound Tigers</td><td>0.00%</td></tr>
<tr><td>17</td><td> Americans</td><td>0.00%</td></tr>
<tr><td>18</td><td>Griffins</td><td>0.00%</td></tr>
<tr><td>19</td><td>Wolf Pack</td><td>0.00%</td></tr>
<tr><td>20</td><td>Senators</td><td>0.00%</td></tr>
<tr><td>21</td><td>Wild</td><td>0.00%</td></tr>
<tr><td>22</td><td>Stars</td><td>0.00%</td></tr>
<tr><td>23</td><td>Barracudas</td><td>0.00%</td></tr>
<tr><td>24</td><td>Admirals</td><td>0.00%</td></tr>
<tr><td>25</td><td>Crunch</td><td>0.00%</td></tr>
<tr><td>26</td><td>Reign</td><td>0.00%</td></tr>
<tr><td>27</td><td>Moose</td><td>0.00%</td></tr>
<tr><td>28</td><td>Marlies</td><td>0.00%</td></tr>
<tr><td>29</td><td>Penguins</td><td>0.00%</td></tr>
<tr><td>30</td><td>Thunderbirds</td><td>0.00%</td></tr>
<tr><td>31</td><td>Condors</td><td>0.00%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
