<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Today Transactions</title>
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
[2021-10-17 9:03:18 PM] - Kyle Wood average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 9:03:06 PM] - Luke Witkowski average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 9:02:55 PM] - Reece Willcox average salary was modified from $675,000 to $750,000.<br />
[2021-10-17 9:02:42 PM] - Yannick Weber average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 9:02:26 PM] - Jake Walman average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 9:01:54 PM] - Nathan Walker average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 9:01:26 PM] - Cole Ully average salary was modified from $646,667 to $750,000.<br />
[2021-10-17 9:01:11 PM] - Matej Tomek average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 9:00:58 PM] - Dmytro Timashov average salary was modified from $694,444 to $750,000.<br />
[2021-10-17 9:00:02 PM] - Calvin Thurkauf average salary was modified from $738,000 to $750,000.<br />
[2021-10-17 8:59:47 PM] - Chris Terry average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:59:25 PM] - C.J. Suess average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:58:56 PM] - Devante Stephens average salary was modified from $743,333 to $750,000.<br />
[2021-10-17 8:58:14 PM] - Oleg Sosunov average salary was modified from $721,600 to $750,000.<br />
[2021-10-17 8:58:02 PM] - Dalton Smith average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:57:51 PM] - Logan Shaw average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:57:19 PM] - Chad Ruhwedel average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:56:59 PM] - Anthony Richard average salary was modified from $735,000 to $750,000.<br />
[2021-10-17 8:56:49 PM] - Dan Renouf average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:56:17 PM] - Andrew Poturalski average salary was modified from $650,000 to $750,000.<br />
[2021-10-17 8:56:04 PM] - Brian Pinho average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:55:35 PM] - Calvin Pickard average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:55:05 PM] - Stuart Percy average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:54:40 PM] - Brent Pedersen average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:54:02 PM] - Jake Paterson average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:52:35 PM] - Martin Ouellette average salary was modified from $625,000 to $750,000.<br />
[2021-10-17 8:52:25 PM] - Liam O'Brien average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:52:00 PM] - Julien Nantel average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:51:37 PM] - Nick Moutrey average salary was modified from $750,000 to $750,000.<br />
[2021-10-17 8:51:28 PM] - Samuel Montembeault average salary was modified from $708,750 to $750,000.<br />
[2021-10-17 8:51:14 PM] - Hunter Miska average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:51:02 PM] - Jacob Middleton average salary was modified from $735,000 to $750,000.<br />
[2021-10-17 8:50:52 PM] - Skyler McKenzie average salary was modified from $741,666 to $750,000.<br />
[2021-10-17 8:50:40 PM] - Ian McCoshen average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:50:28 PM] - Spencer Martin average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:50:14 PM] - Brad Malone average salary was modified from $650,000 to $750,000.<br />
[2021-10-17 8:50:03 PM] - Beck Malenstyn average salary was modified from $736,666 to $750,000.<br />
[2021-10-17 8:49:37 PM] - Zac Leslie average salary was modified from $616,667 to $750,000.<br />
[2021-10-17 8:49:24 PM] - Nick Lappin average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:49:11 PM] - William Lagesson average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:48:46 PM] - Joseph LaBate average salary was modified from $681,000 to $750,000.<br />
[2021-10-17 8:48:36 PM] - Kalle Kossila average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:48:14 PM] - Justin Kirkland average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:44:42 PM] - Jonas Johansson average salary was modified from $635,236 to $750,000.<br />
[2021-10-17 8:34:40 PM] - Marcus Hogberg average salary was modified from $0 to $750,000.<br />
[2021-10-17 8:34:28 PM] - Adam Helewka average salary was modified from $705,000 to $750,000.<br />
[2021-10-17 8:34:16 PM] - Christopher Gibson average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:34:00 PM] - Tyler Gaudet average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:33:34 PM] - Dylan Gambrell average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:31:49 PM] - Kaden Fulcher average salary was modified from $716,666 to $750,000.<br />
[2021-10-17 8:30:40 PM] - Gabriel Fontaine average salary was modified from $736,667 to $750,000.<br />
[2021-10-17 8:30:27 PM] - Evan Fitzpatrick average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:30:06 PM] - Ryan Fitzgerald average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:29:52 PM] - Taylor Fedun average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:29:10 PM] - Giorgio Estephan average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:28:37 PM] - Andreas Englund average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:28:03 PM] - Remi Elie average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:27:40 PM] - Jack Dougherty average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:26:52 PM] - Laurent Dauphin average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:26:12 PM] - Kyle Criscuolo average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:25:52 PM] - Eric Comrie average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:25:38 PM] - Connor Clifton average salary was modified from $735,000 to $750,000.<br />
[2021-10-17 8:25:15 PM] - Michael Chaput average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:24:46 PM] - Kyle Capobianco average salary was modified from $745,000 to $750,000.<br />
[2021-10-17 8:23:02 PM] - Connor Bunnaman average salary was modified from $736,000 to $750,000.<br />
[2021-10-17 8:21:46 PM] - Jonny Brodzinski average salary was modified from $725,000 to $750,000.<br />
[2021-10-17 8:21:17 PM] - Callum Booth average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:20:32 PM] - Colin Blackwell average salary was modified from $675,000 to $750,000.<br />
[2021-10-17 8:20:10 PM] - Clark Bishop average salary was modified from $713,333 to $750,000.<br />
[2021-10-17 8:19:56 PM] - Jake Bischoff average salary was modified from $716,667 to $750,000.<br />
[2021-10-17 8:18:54 PM] - Nicolas Aube-Kubel average salary was modified from $700,000 to $750,000.<br />
[2021-10-17 8:18:30 PM] - Andrew Agozzino average salary was modified from $700,000 to $750,000.<br />
<span style="color:Olive">[2021-10-17 8:06:23 PM] - Admirals hired Gerard Gallant for $1,600,000 for 3 year(s).</span><br />
<span style="color:Olive">[2021-10-17 8:05:45 PM] - Sabres hired Rick Bowness for $1,000,000 for 3 year(s).</span><br />
[2021-10-17 8:05:04 PM] - Tage Thompson signed with Sabres for $1,400,000 for 3 year(s).<br />
[2021-10-17 8:05:04 PM] - Tage Thompson average salary was modified from $525,000 to $1,400,000.<br />
<span style="color:#FF8000">[2021-10-17 8:05:04 PM] - Tage Thompson was added to Sabres.</span><br />
[2021-10-17 8:04:48 PM] - Jean-Sebastien Dea signed with Blues for $825,000 for 3 year(s).<br />
[2021-10-17 8:04:48 PM] - Jean-Sebastien Dea average salary was modified from $525,000 to $825,000.<br />
<span style="color:#FF8000">[2021-10-17 8:04:48 PM] - Jean-Sebastien Dea was added to Blues.</span><br />
<?php include "Footer.php";?>
