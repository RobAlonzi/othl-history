<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Trade History</title>
<script src="OTHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.0.0 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
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
[2020-04-19 6:36:10 PM] - Sam Gagner was added to Penguins.<br />
[2020-04-15 6:37:52 PM] - Eddie Lack was added to Wild.<br />
[2020-04-15 6:32:57 PM] - Matthew Villalta was added to Bruins.<br />
[2020-04-15 6:32:36 PM] - Matthew Villalta has been deleted from Bruins.<br />
[2020-04-11 5:56:25 PM] - Elvis Merzlikins has been deleted from Oilers.<br />
[2020-04-11 5:56:12 PM] - Elvis Merlikins was added to Oilers.<br />
[2020-04-10 6:07:39 PM] - Magnus Paajarvi was added to Sabres.<br />
[2020-03-17 4:25:57 PM] - Thomas Vanek was added to Blues.<br />
[2020-03-15 6:30:02 PM] - TRADE : From Canucks to Islanders : Joe Hicketts (68), Y:2021-RND:5-VAN.<br />
[2020-03-15 6:30:02 PM] - TRADE : From Islanders to Canucks : Y:2020-RND:3-NYI, Y:2020-RND:4-NYI.<br />
[2020-03-15 6:29:22 PM] - TRADE : From Wild to Islanders : Jordan Binnington (75).<br />
[2020-03-15 6:29:22 PM] - TRADE : From Islanders to Wild : Evan Bouchard (P), Sebastian Aho (P), Y:2020-RND:1-NYI.<br />
[2020-03-15 6:28:54 PM] - TRADE : From Wild to Predators : Adam Henrique (71).<br />
[2020-03-15 6:28:54 PM] - TRADE : From Predators to Wild : Y:2020-RND:3-MTL, Y:2020-RND:5-CLB.<br />
[2020-03-15 6:28:04 PM] - TRADE : From Oilers to Blue Jackets : Erik Burgdoerfer (61), Y:2022-RND:7-EDM.<br />
[2020-03-15 6:28:04 PM] - TRADE : From Blue Jackets to Oilers : Y:2021-RND:7-CLB.<br />
[2020-03-15 6:27:35 PM] - TRADE : From Stars to Blue Jackets : Jason Spezza (67).<br />
[2020-03-15 6:27:35 PM] - TRADE : From Blue Jackets to Stars : Y:2021-RND:7-EDM.<br />
[2020-03-15 6:27:10 PM] - TRADE : From Lightning to Hurricanes : Shamil Shmakov (P), Y:2022-RND:6-TBL.<br />
[2020-03-15 6:27:10 PM] - TRADE : From Hurricanes to Lightning : Matt Martin (64).<br />
[2020-03-15 6:26:42 PM] - TRADE : From Lightning to Flyers : Cam Atkinson (74), Josh Leivo (64).<br />
[2020-03-15 6:26:42 PM] - TRADE : From Flyers to Lightning : Joe Thornton (71), Zack Smith (69), Carson Focht (P), Y:2022-RND:2-PHL.<br />
[2020-03-15 6:25:23 PM] - TRADE : From Blackhawks to Capitals : Y:2023-RND:7-CHI.<br />
[2020-03-15 6:25:23 PM] - TRADE : From Capitals to Blackhawks : Tyler Ennis (66).<br />
[2020-03-15 6:24:51 PM] - TRADE : From Stars to Capitals : Greg Pateryn (70), Paul Byron (69).<br />
[2020-03-15 6:24:51 PM] - TRADE : From Capitals to Stars : Derek Forbort (72), Jordan Weal (63), Y:2022-RND:5-WSH.<br />
[2020-03-15 12:46:00 PM] - TRADE : From Hurricanes to Blue Jackets : Greg McKegg (63), Bode Wilde (P), Sampo Ranta (P), Y:2021-RND:2-CAR.<br />
[2020-03-15 12:46:00 PM] - TRADE : From Blue Jackets to Hurricanes : Evander Kane (73), Jakub Skarek (P).<br />
[2020-03-15 12:44:29 PM] - TRADE : From Senators to Kings : Jaden Schwartz (70).<br />
[2020-03-15 12:44:29 PM] - TRADE : From Kings to Senators : Alex Galchenyuk (71), Dmytro Timashov (P), Simon Lundmark (P), Y:2020-RND:3-LAK.<br />
[2020-03-15 12:43:25 PM] - TRADE : From Bruins to Blues : Karson Kuhlman (61), Chad Krys (P).<br />
[2020-03-15 12:43:25 PM] - TRADE : From Blues to Bruins : Brendan Perlini (66), Gabriel Bourque (63).<br />
[2020-03-15 12:42:51 PM] - TRADE : From Bruins to Golden Knights : Y:2020-RND:4-FLA.<br />
[2020-03-15 12:42:51 PM] - TRADE : From Golden Knights to Bruins : Cody Eakin (70).<br />
[2020-03-13 6:34:42 PM] - TRADE : From Wild to Bruins : Noah Juulsen (66).<br />
[2020-03-13 6:34:42 PM] - TRADE : From Bruins to Wild : Calvin Thurkauf (54), Connor Dewar (P), Y:2020-RND:4-VAN.<br />
[2020-03-12 4:34:07 PM] - TRADE : From Hurricanes to Wild : David Backes (67).<br />
[2020-03-12 4:34:07 PM] - TRADE : From Wild to Hurricanes : Y:2021-RND:6-CGY.<br />
[2020-03-12 4:33:46 PM] - TRADE : From Hurricanes to Maple Leafs : Tomas Nosek (63).<br />
[2020-03-12 4:33:46 PM] - TRADE : From Maple Leafs to Hurricanes : Y:2020-RND:5-PIT.<br />
[2020-03-12 4:33:08 PM] - TRADE : From Jets to Oilers : Jonathan Toews (78), Y:2020-RND:6-WPG.<br />
[2020-03-12 4:33:08 PM] - TRADE : From Oilers to Jets : Derek Stepan (74), Jean-Gabriel Pageau (68), Grant Mismash (P).<br />
[2020-03-11 4:04:55 PM] - TRADE : From Flyers to Golden Knights : Cody Eakin (70), Vitali Kravtsov (P), $1,000,000 (Money).<br />
[2020-03-11 4:04:55 PM] - TRADE : From Golden Knights to Flyers : Brandon Saad (72), Ty Taylor (P), Y:2020-RND:6-NYI.<br />
[2020-03-10 8:25:11 PM] - TRADE : From Flyers to Canucks : Spencer Stastney (P).<br />
[2020-03-10 8:25:11 PM] - TRADE : From Canucks to Flyers : Jake Gardiner (70).<br />
[2020-03-10 8:23:28 PM] - TRADE : From Flames to Flyers : Justin Williams (72).<br />
[2020-03-10 8:23:28 PM] - TRADE : From Flyers to Flames : Alex Stalock (61).<br />
[2020-03-10 8:22:31 PM] - TRADE : From Devils to Canucks : Brandon Dubinsky (68).<br />
[2020-03-10 8:22:31 PM] - TRADE : From Canucks to Devils : Gemel Smith (61), Y:2020-RND:4-CGY.<br />
[2020-03-10 8:22:01 PM] - TRADE : From Lightning to Ducks : Martin Marincin (64), Marc Methot (62).<br />
[2020-03-10 8:22:01 PM] - TRADE : From Ducks to Lightning : Josh Teves (49), Kris Russell (71).<br />
[2020-03-10 8:18:23 PM] - Jake Oettinger has been deleted from Panthers.<br />
[2020-03-10 8:18:14 PM] - Jake Oettinger was added to Panthers.<br />
[2020-03-08 8:32:52 PM] - TRADE : From Canucks to Blues : Jean-Sebastien Dea (62).<br />
[2020-03-08 8:32:52 PM] - TRADE : From Blues to Canucks : Devante Smith-Pelly (65).<br />
[2020-03-06 10:44:41 AM] - TRADE : From Maple Leafs to Lightning : Brendan Gallagher (72), Tyler Pitlick (66).<br />
[2020-03-06 10:44:41 AM] - TRADE : From Lightning to Maple Leafs : Frank Vatrano (68), Barrett Hayton (P).<br />
[2020-03-06 10:44:15 AM] - TRADE : From Avalanche to Oilers : Anders Nilsson (70), Josh Archibald (64), Y:2020-RND:5-DAL.<br />
[2020-03-06 10:44:15 AM] - TRADE : From Oilers to Avalanche : Martin Ouellette (64), Richard Panik (70).<br />
[2020-03-06 10:43:28 AM] - TRADE : From Senators to Oilers : Jamie Oleksiak (68), Y:2022-RND:7-OTT.<br />
[2020-03-06 10:43:28 AM] - TRADE : From Oilers to Senators : John Hayden (61), Cam Dineen (P).<br />
[2020-03-06 10:42:40 AM] - TRADE : From Golden Knights to Ducks : Luke Schenn (68).<br />
[2020-03-06 10:42:40 AM] - TRADE : From Ducks to Golden Knights : Joel Hanley (60), Y:2020-RND:6-NYI.<br />
[2020-03-06 10:42:15 AM] - TRADE : From Red Wings to Flyers : Ilya Kovalchuk (70).<br />
[2020-03-06 10:42:15 AM] - TRADE : From Flyers to Red Wings : Conor Sheary (66), Y:2022-RND:4-PHL.<br />
[2020-03-06 10:34:31 AM] - Vladislav Gavrikov has been deleted from Bruins.<br />
[2020-03-06 10:34:22 AM] - Vladislav Gavrikov was added to Bruins.<br />
[2020-03-04 4:38:30 PM] - TRADE : From Senators to Capitals : Dmitry Orlov (72), Vincent Trocheck (73), Y:2020-RND:2-NYI.<br />
[2020-03-04 4:38:30 PM] - TRADE : From Capitals to Senators : Jason Dickinson (66), Ryan Johansen (75), Klim Kostin (P), Y:2022-RND:3-WSH.<br />
[2020-03-04 4:35:15 PM] - TRADE : From Jets to Bruins : Eric Staal (73).<br />
[2020-03-04 4:35:15 PM] - TRADE : From Bruins to Jets : Barclay Goodrow (63).<br />
[2020-03-03 4:48:49 PM] - TRADE : From Flyers to Blue Jackets : Y:2023-RND:6-PHL.<br />
[2020-03-03 4:48:49 PM] - TRADE : From Blue Jackets to Flyers : Alex Stalock (61).<br />
[2020-03-03 4:42:44 PM] - Anthony Angello has been deleted from Bruins.<br />
[2020-03-03 4:42:34 PM] - Calvin Thurkauf has been deleted from Bruins.<br />
[2020-03-03 4:42:23 PM] - Anthony Angello was added to Bruins.<br />
[2020-03-03 4:42:15 PM] - Calvin Thurkauf was added to Bruins.<br />
[2020-03-01 10:06:18 PM] - TRADE : From Sabres to Bruins : Y:2020-RND:6-BUF.<br />
[2020-03-01 10:06:18 PM] - TRADE : From Bruins to Sabres : Tim Schaller (64).<br />
[2020-03-01 10:05:59 PM] - TRADE : From Maple Leafs to Jets : Casey Cizikas (71).<br />
[2020-03-01 10:05:59 PM] - TRADE : From Jets to Maple Leafs : Nicolas Hague (P), Y:2020-RND:3-WPG, Y:2021-RND:3-WPG.<br />
[2020-03-01 10:05:22 PM] - TRADE : From Lightning to Hurricanes : Y:2022-RND:3-TBL, Y:2022-RND:5-TBL.<br />
[2020-03-01 10:05:22 PM] - TRADE : From Hurricanes to Lightning : Luca Sbisa (69).<br />
[2020-03-01 10:04:56 PM] - TRADE : From Bruins to Golden Knights : Adin Hill (61), Adam Werner (P), Y:2020-RND:4-WPG, Y:2022-RND:4-BOS.<br />
[2020-03-01 10:04:56 PM] - TRADE : From Golden Knights to Bruins : Jack Campbell (73), Matthew Thiessen (P).<br />
[2020-03-01 10:04:21 PM] - TRADE : From Coyotes to Golden Knights : John Gilmour (64), Y:2021-RND:4-ARI.<br />
[2020-03-01 10:04:21 PM] - TRADE : From Golden Knights to Coyotes : Andrej Sekera (66), Y:2021-RND:5-TBL.<br />
[2020-03-01 10:03:17 PM] - Tomas Nosek was added to Hurricanes.<br />
[2020-03-01 10:02:07 PM] - Jake Marchment has been deleted from Blue Jackets.<br />
[2020-03-01 9:57:25 PM] - TRADE : From Maple Leafs to Blue Jackets : Jake Marchment (P).<br />
[2020-02-29 9:29:36 AM] - TRADE : From Wild to Blue Jackets : Y:2021-RND:7-MIN.<br />
[2020-02-29 9:29:36 AM] - TRADE : From Blue Jackets to Wild : Kyle Okposo (69).<br />
[2020-02-29 9:29:13 AM] - TRADE : From Canadiens to Senators : Connor Hobbs (P).<br />
[2020-02-29 9:29:13 AM] - TRADE : From Senators to Canadiens : Alexander Petrovic (67).<br />
[2020-02-29 9:28:45 AM] - TRADE : From Canucks to Flyers : Zack Smith (69).<br />
[2020-02-29 9:28:45 AM] - TRADE : From Flyers to Canucks : Nick Bjugstad (69), Pat Maroon (68).<br />
[2020-02-29 9:28:18 AM] - TRADE : From Oilers to Flyers : Ryan Miller (65).<br />
[2020-02-29 9:28:18 AM] - TRADE : From Flyers to Oilers : Y:2021-RND:5-PHL.<br />
[2020-02-29 9:28:00 AM] - TRADE : From Golden Knights to Flyers : Marco Scandella (69).<br />
[2020-02-29 9:28:00 AM] - TRADE : From Flyers to Golden Knights : Andrej Sekera (66), Y:2021-RND:4-PHL.<br />
[2020-02-29 9:27:01 AM] - TRADE : From Senators to Flyers : Y:2021-RND:7-CAR.<br />
[2020-02-29 9:27:01 AM] - TRADE : From Flyers to Senators : Trevor Lewis (65).<br />
[2020-02-29 9:26:04 AM] - Loui Eriksson was added to Blues.<br />
[2020-02-29 9:26:04 AM] - Duncan Siemens was added to Blues.<br />
[2020-02-29 9:23:20 AM] - Samuel Fejes has been deleted from Sabres.<br />
[2020-02-29 9:22:55 AM] - Jacob Friend has been deleted from Sabres.<br />
[2020-02-26 4:53:28 PM] - TRADE : From Flames to Blue Jackets : Andreas Johnsson (66), Andrew Copp (68), Anthony Duclair (67), Y:2020-RND:1-BUF.<br />
[2020-02-26 4:53:28 PM] - TRADE : From Blue Jackets to Flames : Bo Horvat (76).<br />
[2020-02-26 4:52:14 PM] - TRADE : From Flyers to Penguins : Y:2021-RND:2-PHL, Y:2022-RND:3-PHL.<br />
[2020-02-26 4:52:14 PM] - TRADE : From Penguins to Flyers : Andrew Shaw (71).<br />
[2020-02-26 4:50:39 PM] - Matt Martin was added to Hurricanes.<br />
[2020-02-26 4:47:16 PM] - Antoine Bibeau was added to Kings.<br />
[2020-02-26 4:47:03 PM] - Aleksi Saarela was added to Hurricanes.<br />
[2020-02-25 5:06:27 PM] - TRADE : From Canucks to Ducks : Josh Teves (49).<br />
[2020-02-25 5:06:27 PM] - TRADE : From Ducks to Canucks : Nic Petan (58).<br />
[2020-02-25 5:04:59 PM] - TRADE : From Hurricanes to Blackhawks : Kevin Rooney (65).<br />
[2020-02-25 5:04:59 PM] - TRADE : From Blackhawks to Hurricanes : Yegor Spiridonov (P), Y:2021-RND:6-ANH.<br />
[2020-02-25 5:03:27 PM] - TRADE : From Blue Jackets to Flyers : Sven Baertschi (67), Mark Pysyk (70).<br />
[2020-02-25 5:03:27 PM] - TRADE : From Flyers to Blue Jackets : Y:2020-RND:2-EDM, Y:2021-RND:6-PHL.<br />
[2020-02-25 5:02:57 PM] - TRADE : From Senators to Flyers : Brett Connolly (68).<br />
[2020-02-25 5:02:57 PM] - TRADE : From Flyers to Senators : Serron Noel (P), Y:2021-RND:6-FLA.<br />
[2020-02-25 5:01:59 PM] - TRADE : From Wild to Ducks : Y:2020-RND:7-VGK.<br />
[2020-02-25 5:01:59 PM] - TRADE : From Ducks to Wild : Patrick Eaves (59).<br />
[2020-02-25 5:00:42 PM] - TRADE : From Golden Knights to Red Wings : Mark Giordano (78), Kyle Turris (69), Jordan Kooy (P).<br />
[2020-02-25 5:00:42 PM] - TRADE : From Red Wings to Golden Knights : Lias Andersson (61), Marco Scandella (69), Luke Henman (P), Y:2020-RND:1-DET, Y:2022-RND:3-DET.<br />
[2020-02-24 4:32:37 PM] - TRADE : From Blues to Bruins : Mirco Mueller (67), Y:2021-RND:6-STL.<br />
[2020-02-24 4:32:37 PM] - TRADE : From Bruins to Blues : Cale Fleury (P), Y:2021-RND:4-CAR.<br />
[2020-02-23 7:45:58 PM] - TRADE : From Hurricanes to Golden Knights : Daniel Brickley (57), Nicholas Baptiste (61).<br />
[2020-02-23 7:45:58 PM] - TRADE : From Golden Knights to Hurricanes : Y:2022-RND:7-VGK.<br />
[2020-02-23 7:45:29 PM] - TRADE : From Hurricanes to Blues : Samuel Girard (68), Y:2021-RND:5-CAR.<br />
[2020-02-23 7:45:29 PM] - TRADE : From Blues to Hurricanes : Jakob Chychrun (68).<br />
[2020-02-23 7:44:53 PM] - TRADE : From Panthers to Blue Jackets : Sonny Milano (63), Filip Chlapik (64).<br />
[2020-02-23 7:44:53 PM] - TRADE : From Blue Jackets to Panthers : Mats Zuccarello (75), Y:2020-RND:4-MTL.<br />
[2020-02-22 11:00:54 AM] - TRADE : From Coyotes to Golden Knights : Y:2020-RND:3-DET, Y:2021-RND:3-ARI.<br />
[2020-02-22 11:00:54 AM] - TRADE : From Golden Knights to Coyotes : Wayne Simmonds (71), Y:2020-RND:4-TBL.<br />
[2020-02-22 11:00:15 AM] - TRADE : From Oilers to Golden Knights : Y:2020-RND:3-EDM.<br />
[2020-02-22 11:00:15 AM] - TRADE : From Golden Knights to Oilers : Patrick Marleau (70).<br />
[2020-02-21 4:38:25 PM] - TRADE : From Kings to Golden Knights : Y:2020-RND:1-LAK, Y:2021-RND:2-LAK.<br />
[2020-02-21 4:38:25 PM] - TRADE : From Golden Knights to Kings : Travis Hamonic (72), Y:2020-RND:4-VGK.<br />
[2020-02-20 8:13:10 PM] - TRADE : From Golden Knights to Ducks : Ryan Murray (71), Lane Zablocki (P).<br />
[2020-02-20 8:13:10 PM] - TRADE : From Ducks to Golden Knights : K'Andre Miller (P), Y:2020-RND:2-ANH.<br />
[2020-02-17 5:42:45 PM] - TRADE : From Flyers to Penguins : Cameron Morrison (P), Y:2021-RND:3-PHL.<br />
[2020-02-17 5:42:45 PM] - TRADE : From Penguins to Flyers : Joe Thornton (71).<br />
[2020-02-15 4:34:04 PM] - Anthony Stolarz was added to Stars.<br />
[2020-02-14 9:51:43 PM] - TRADE : From Predators to Wild : Brett Ritchie (62), Mike Condon (51), Connor Bunnaman (P), Y:2020-RND:3-OTT, Y:2020-RND:4-NSH.<br />
[2020-02-14 9:51:43 PM] - TRADE : From Wild to Predators : Blake Comeau (69), Kyle Brodziak (66).<br />
[2020-02-10 5:43:50 PM] - Matej Tomek has been deleted from Penguins.<br />
[2020-02-10 5:43:41 PM] - Matej Tomek was added to Penguins.<br />
[2020-02-09 5:31:51 PM] - TRADE : From Ducks to Coyotes : Slater Koekkoek (64).<br />
[2020-02-09 5:31:51 PM] - TRADE : From Coyotes to Ducks : Y:2020-RND:5-ARI.<br />
[2020-02-09 5:31:19 PM] - TRADE : From Canucks to Wild : Matt Irwin (63), Tage Thompson (64), Alex Formenton (P), Sam Lafferty (P), Y:2020-RND:1-VAN.<br />
[2020-02-09 5:31:19 PM] - TRADE : From Wild to Canucks : Dougie Hamilton (71).<br />
[2020-02-03 5:32:04 PM] - TRADE : From Bruins to Hurricanes : Luca Sbisa (61).<br />
[2020-02-03 5:32:04 PM] - TRADE : From Hurricanes to Bruins : Y:2020-RND:5-CHI.<br />
[2020-02-01 8:47:47 PM] - TRADE : From Maple Leafs to Sabres : Zdeno Chara (75), Y:2021-RND:3-TOR.<br />
[2020-02-01 8:47:47 PM] - TRADE : From Sabres to Maple Leafs : Brenden Dillon (72), Y:2020-RND:1-FLA.<br />
[2020-02-01 8:40:43 PM] - TRADE : From Blue Jackets to Blues : Ashton Sautner (63).<br />
[2020-02-01 8:40:43 PM] - TRADE : From Blues to Blue Jackets : $1,000,000 (Money).<br />
[2020-01-29 4:31:33 PM] - Nick Moutrey has been deleted from Senators.<br />
[2020-01-29 4:31:20 PM] - Nick Moutrey was added to Senators.<br />
[2020-01-27 5:14:06 PM] - Michael Bunting has been deleted from Senators.<br />
[2020-01-27 5:13:56 PM] - Michael Bunting was added to Senators.<br />
[2020-01-23 5:29:12 PM] - TRADE : From Coyotes to Golden Knights : Kyle Turris (69).<br />
[2020-01-23 5:29:12 PM] - TRADE : From Golden Knights to Coyotes : Nic Dowd (65), Y:2021-RND:7-VGK.<br />
[2020-01-22 9:58:05 PM] - Kyle Clifford was added to Hurricanes.<br />
[2020-01-20 4:47:17 PM] - Karl Alzner was added to Wild.<br />
[2020-01-20 4:46:00 PM] - TRADE : From Canucks to Blackhawks : Matt Benning (67).<br />
[2020-01-20 4:46:00 PM] - TRADE : From Blackhawks to Canucks : Joshua Ho-Sang (64).<br />
[2020-01-20 4:45:40 PM] - TRADE : From Canucks to Hurricanes : Y:2020-RND:2-VAN.<br />
[2020-01-20 4:45:40 PM] - TRADE : From Hurricanes to Canucks : MacKenzie Weegar (65).<br />
[2020-01-20 4:44:31 PM] - TRADE : From Ducks to Hurricanes : Martin Jones (71), Y:2020-RND:4-CAR, Y:2021-RND:3-ANH, Y:2022-RND:2-CAR.<br />
[2020-01-20 4:44:31 PM] - TRADE : From Hurricanes to Ducks : Slater Koekkoek (64), Ian Scott (55), Y:2020-RND:6-NYI.<br />
[2020-01-20 4:43:27 PM] - TRADE : From Penguins to Hurricanes : Jonatan Berggren (P), Y:2020-RND:3-PIT, Y:2021-RND:4-PIT.<br />
[2020-01-20 4:43:27 PM] - TRADE : From Hurricanes to Penguins : Connor Carrick (64), Nick Cousins (64).<br />
[2020-01-20 4:42:28 PM] - TRADE : From Penguins to Maple Leafs : Adam Mascherin (P), Y:2020-RND:5-PIT.<br />
[2020-01-20 4:42:28 PM] - TRADE : From Maple Leafs to Penguins : Jordan Martinook (68), Y:2020-RND:4-TOR.<br />
[2020-01-20 4:41:39 PM] - TRADE : From Golden Knights to Ducks : Antti Raanta (73), Caleb Jones (67), Y:2020-RND:5-VGK.<br />
[2020-01-20 4:41:39 PM] - TRADE : From Ducks to Golden Knights : Jon Gillies (58), Juuso Valimaki (62), Y:2020-RND:3-CLB, Y:2021-RND:4-BOS.<br />
[2020-01-20 4:40:58 PM] - TRADE : From Golden Knights to Bruins : Magnus Paajarvi (68).<br />
[2020-01-20 4:40:58 PM] - TRADE : From Bruins to Golden Knights : Colton White (61), Y:2021-RND:4-VAN.<br />
[2020-01-20 4:40:16 PM] - TRADE : From Hurricanes to Bruins : Chad Krys (P), Ethan Keppen (P), Y:2020-RND:5-VAN.<br />
[2020-01-20 4:40:16 PM] - TRADE : From Bruins to Hurricanes : Aleksi Saarela (P).<br />
[2020-01-20 4:39:44 PM] - TRADE : From Maple Leafs to Bruins : Boone Jenner (73).<br />
[2020-01-20 4:39:44 PM] - TRADE : From Bruins to Maple Leafs : Radek Faksa (70), Joel Hofer (P), John Ludvig (P).<br />
[2020-01-20 4:39:10 PM] - TRADE : From Jets to Bruins : Vladislav Gavrikov (P), Y:2020-RND:4-WPG.<br />
[2020-01-20 4:39:10 PM] - TRADE : From Bruins to Jets : Madison Bowey (65), Nicolas Hague (P).<br />
[2020-01-14 5:12:26 PM] - TRADE : From Hurricanes to Bruins : Markus Phillips (P), Y:2021-RND:4-CAR.<br />
[2020-01-14 5:12:26 PM] - TRADE : From Bruins to Hurricanes : Olof Lindbom (P).<br />
[2020-01-12 7:55:18 PM] - Emil Molin has been deleted from Canucks.<br />
[2020-01-12 7:54:09 PM] - TRADE : From Lightning to Bruins : Y:2020-RND:5-NJD.<br />
[2020-01-11 6:24:56 PM] - TRADE : From Lightning to Bruins : Alexei Toropchenko (P), Matthew Villalta (P).<br />
[2020-01-11 6:24:56 PM] - TRADE : From Bruins to Lightning : Radim Simek (62).<br />
[2020-01-11 6:24:29 PM] - TRADE : From Canucks to Hurricanes : Y:2020-RND:5-VAN, Y:2020-RND:6-NYI.<br />
[2020-01-11 6:24:29 PM] - TRADE : From Hurricanes to Canucks : Ryan Carpenter (63).<br />
[2020-01-11 6:23:57 PM] - TRADE : From Canucks to Capitals : Gustav Nyquist (72), Pavel Zacha (70).<br />
[2020-01-11 6:23:57 PM] - TRADE : From Capitals to Canucks : Alexandar Georgiev (68), Gemel Smith (60), Jacob Larsson (66), Tuukka Tieksola (P), Y:2021-RND:3-WSH.<br />
[2020-01-06 4:27:30 PM] - Jarret Tyszka has been deleted from Jets.<br />
[2020-01-06 4:27:15 PM] - Simon Bourque has been deleted from Jets.<br />
[2020-01-05 4:45:40 PM] - Joshua Mahura has been deleted from Hurricanes.<br />
[2020-01-05 4:43:55 PM] - Josh Mahura was added to Hurricanes.<br />
[2020-01-04 4:40:37 PM] - TRADE : From Red Wings to Flames : Kevin Labanc (69), Y:2020-RND:3-BOS.<br />
[2020-01-04 4:40:37 PM] - TRADE : From Flames to Red Wings : Mathew Dumba (72), Y:2020-RND:6-CHI.<br />
[2020-01-04 4:21:35 PM] - Zachary Lauzon has been deleted from Blue Jackets.<br />
[2020-01-04 4:21:27 PM] - Troy Bourke has been deleted from Blue Jackets.<br />
[2020-01-04 4:21:21 PM] - Kelly Summers has been deleted from Blue Jackets.<br />
[2020-01-04 4:20:47 PM] - Joel Lowry has been deleted from Blue Jackets.<br />
[2020-01-04 4:20:42 PM] - Henrik Tommernes has been deleted from Blue Jackets.<br />
[2020-01-04 4:20:35 PM] - Felix Girard has been deleted from Blue Jackets.<br />
[2020-01-04 4:19:33 PM] - Dylan Blujus has been deleted from Blue Jackets.<br />
[2020-01-04 4:19:15 PM] - Dmitri Zhukenov has been deleted from Blue Jackets.<br />
[2020-01-04 4:19:07 PM] - Dane Birks has been deleted from Blue Jackets.<br />
[2020-01-04 4:19:00 PM] - Conner Bleackley has been deleted from Blue Jackets.<br />
[2020-01-04 4:18:50 PM] - Chase Perry has been deleted from Blue Jackets.<br />
[2020-01-04 4:18:40 PM] - Brian Cooper has been deleted from Blue Jackets.<br />
[2020-01-04 4:18:34 PM] - Artur Gavrus has been deleted from Blue Jackets.<br />
[2020-01-03 4:53:39 PM] - TRADE : From Hurricanes to Lightning : Andrew Cogliano (68), Vince Dunn (67), Y:2020-RND:5-NJD.<br />
[2020-01-03 4:53:39 PM] - TRADE : From Lightning to Hurricanes : Axel Jonsson-Fjallby (P), Y:2020-RND:1-TBL.<br />
[2019-12-29 7:32:10 PM] - TRADE : From Golden Knights to Lightning : $250,000 (Money), Y:2020-RND:6-TBL.<br />
[2019-12-29 7:32:10 PM] - TRADE : From Lightning to Golden Knights : Magnus Paajarvi (68).<br />
[2019-12-28 8:23:25 PM] - TRADE : From Bruins to Canucks : Jesper Lindgren (P), Magnus Chrona (P).<br />
[2019-12-28 8:23:25 PM] - TRADE : From Canucks to Bruins : Y:2020-RND:4-VAN, Y:2021-RND:4-VAN.<br />
[2019-12-28 8:22:48 PM] - TRADE : From Bruins to Ducks : Trevor Moore (61).<br />
[2019-12-28 8:22:48 PM] - TRADE : From Ducks to Bruins : Aleksi Saarela (P), Y:2020-RND:4-FLA.<br />
[2019-12-28 8:19:03 PM] - Rourke Chartier was added to Blue Jackets.<br />
[2019-12-28 8:18:12 PM] - Rourke Chartier has been deleted from Blue Jackets.<br />
[2019-12-28 8:17:51 PM] - John McCarron has been deleted from Canucks.<br />
[2019-12-28 8:17:42 PM] - Liam Dunda has been deleted from Canucks.<br />
[2019-12-23 5:06:53 PM] - TRADE : From Capitals to Blues : Paul Ladue (62).<br />
[2019-12-23 5:06:53 PM] - TRADE : From Blues to Capitals : Tyler Ennis (66).<br />
[2019-12-22 7:47:28 PM] - TRADE : From Jets to Bruins : Mikkel Boedker (68).<br />
[2019-12-22 7:47:28 PM] - TRADE : From Bruins to Jets : Leo Komarov (66).<br />
[2019-12-22 7:46:29 PM] - Anthony Greco was added to Penguins.<br />
[2019-12-21 7:03:12 PM] - Nathan Paetsch was added to Wild.<br />
[2019-12-21 6:54:59 PM] - Andrew Cogliano was added to Hurricanes.<br />
[2019-12-18 4:42:55 PM] - TRADE : From Flames to Flyers : Y:2020-RND:2-EDM.<br />
[2019-12-18 4:42:55 PM] - TRADE : From Flyers to Flames : Radko Gudas (73).<br />
[2019-12-18 4:41:59 PM] - Dillon Simpson was added to Flyers.<br />
[2019-12-18 4:41:59 PM] - Cameron Gaunce was added to Flyers.<br />
[2019-12-18 4:41:59 PM] - Kevin Rooney was added to Hurricanes.<br />
[2019-12-16 9:47:45 PM] - TRADE : From Hurricanes to Ducks : Yegor Korshkov (P), Y:2022-RND:2-CAR.<br />
[2019-12-16 9:47:45 PM] - TRADE : From Ducks to Hurricanes : Oliver Kylington (60).<br />
[2019-12-15 9:34:55 PM] - TRADE : From Maple Leafs to Ducks : Brayden Schenn (74), Y:2020-RND:4-CHI.<br />
[2019-12-15 9:34:55 PM] - TRADE : From Ducks to Maple Leafs : Troy Terry (64), Martin Kaut (P), Y:2020-RND:1-ANH.<br />
[2019-12-15 9:29:01 PM] - Riley Barber has been deleted from Wild.<br />
[2019-12-15 9:28:46 PM] - Riley Barber was added to Wild.<br />
[2019-12-14 6:01:21 AM] - Christian Djoos was added to Hurricanes.<br />
[2019-12-11 5:06:12 PM] - Samuel Morin has been deleted from Flames.<br />
[2019-12-11 5:06:03 PM] - Carter Verhaeghe has been deleted from Kings.<br />
[2019-12-11 5:04:35 PM] - Carter Verhaeghe was added to Kings.<br />
[2019-12-11 5:04:24 PM] - Samuel Morin was added to Flames.<br />
[2019-12-07 2:46:12 PM] - TRADE : From Hurricanes to Red Wings : Allan McShane (P), Y:2020-RND:6-STL, Y:2021-RND:4-TBL.<br />
[2019-12-07 2:46:12 PM] - TRADE : From Red Wings to Hurricanes : Filip Gustavsson (P).<br />
[2019-12-07 2:43:33 PM] - Duncan Siemens was added to Hurricanes.<br />
[2019-12-06 9:06:43 PM] - Ryan Carpenter was added to Hurricanes.<br />
[2019-12-03 7:04:27 PM] - TRADE : From Golden Knights to Lightning : $1,000,000 (Money), Y:2021-RND:6-VGK.<br />
[2019-12-03 7:04:27 PM] - TRADE : From Lightning to Golden Knights : Y:2021-RND:5-TBL.<br />
[2019-12-03 7:03:37 PM] - Mark Friedman has been deleted from Devils.<br />
[2019-12-03 7:03:29 PM] - Kirby Dach has been deleted from Devils.<br />
[2019-12-03 7:03:08 PM] - Mark Friedman was added to Devils.<br />
[2019-12-03 7:03:00 PM] - Kirby Dach was added to Devils.<br />
[2019-11-29 11:50:40 AM] - Buddy Robinson was added to Panthers.<br />
[2019-11-27 4:27:00 PM] - Adam Marsh has been deleted from Lightning.<br />
[2019-11-27 4:26:54 PM] - Radovan Bondra has been deleted from Lightning.<br />
[2019-11-27 4:26:48 PM] - Pavel Karnaukhov has been deleted from Lightning.<br />
[2019-11-27 4:26:40 PM] - Michael Brodzinski has been deleted from Lightning.<br />
[2019-11-27 4:26:26 PM] - Axel Holmström has been deleted from Lightning.<br />
[2019-11-26 9:12:11 PM] - TRADE : From Lightning to Hurricanes : Andrei Altybarmakyan (P), Y:2021-RND:3-TBL.<br />
[2019-11-26 9:12:11 PM] - TRADE : From Hurricanes to Lightning : Tanner Pearson (67), Wade Allison (P).<br />
[2019-11-26 9:11:37 PM] - TRADE : From Red Wings to Hurricanes : Vince Dunn (66), Joshua Mahura (P).<br />
[2019-11-26 9:11:37 PM] - TRADE : From Hurricanes to Red Wings : Calvin de Haan (69), Y:2020-RND:5-BOS, Y:2021-RND:3-DET.<br />
[2019-11-26 9:10:13 PM] - Byron Froese was added to Stars.<br />
[2019-11-23 7:30:40 PM] - TRADE : From Bruins to Jets : Leevi Aaltonen (P), Matias Maccelli (P).<br />
[2019-11-23 7:30:40 PM] - TRADE : From Jets to Bruins : Nicolas Hague (P).<br />
[2019-11-23 7:30:12 PM] - TRADE : From Bruins to Golden Knights : Brandon Saad (72), Y:2020-RND:3-VAN, Y:2021-RND:5-BOS.<br />
[2019-11-23 7:30:12 PM] - TRADE : From Golden Knights to Bruins : Tomas Tatar (72), Y:2020-RND:6-OTT.<br />
[2019-11-23 7:29:30 PM] - TRADE : From Ducks to Hurricanes : Mikhail Berdin (P).<br />
[2019-11-23 7:29:30 PM] - TRADE : From Hurricanes to Ducks : Filip Kral (P).<br />
[2019-11-16 9:06:20 PM] - TRADE : From Golden Knights to Hurricanes : Tanner Pearson (67), Y:2021-RND:6-SJS.<br />
[2019-11-16 9:06:20 PM] - TRADE : From Hurricanes to Golden Knights : Wayne Simmonds (71).<br />
[2019-11-07 4:48:36 PM] - TRADE : From Maple Leafs to Ducks : Zach Aston-Reese (66).<br />
[2019-11-07 4:48:36 PM] - TRADE : From Ducks to Maple Leafs : Sam Bennett (68).<br />
[2019-11-05 4:50:28 PM] - Michael Del Zotto was added to Penguins.<br />
[2019-11-05 4:44:25 PM] - TRADE : From Oilers to Avalanche : Braydon Coburn (69), Kevin Rooney (65), Jakob Ragnarsson (P), Ryan Zuhlsdorf (P).<br />
[2019-11-05 4:44:25 PM] - TRADE : From Avalanche to Oilers : Ron Hainsey (73).<br />
[2019-11-04 5:21:29 PM] - Tate Olson has been deleted from Maple Leafs.<br />
[2019-11-02 5:17:33 PM] - Brandon Halverson has been deleted from Islanders.<br />
[2019-11-02 5:17:21 PM] - Brandon Halverson was added to Islanders.<br />
[2019-10-20 6:49:56 PM] - TRADE : From Golden Knights to Hurricanes : $1,000,000 (Money).<br />
[2019-10-20 6:49:56 PM] - TRADE : From Hurricanes to Golden Knights : Milan Lucic (68).<br />
[2019-10-20 6:48:28 PM] - TRADE : From Panthers to Coyotes : $1,000,000 (Money).<br />
[2019-10-20 6:48:28 PM] - TRADE : From Coyotes to Panthers : Derrick Pouliot (66).<br />
[2019-10-20 6:48:06 PM] - TRADE : From Red Wings to Blackhawks : Justin Holl (56).<br />
[2019-10-20 6:48:06 PM] - TRADE : From Blackhawks to Red Wings : $1,000,000 (Money).<br />
[2019-10-20 6:47:39 PM] - TRADE : From Flyers to Blue Jackets : Alex Stalock (61), Alex Lyon (62).<br />
[2019-10-20 6:47:39 PM] - TRADE : From Blue Jackets to Flyers : $2,000,000 (Money).<br />
[2019-10-20 6:47:18 PM] - TRADE : From Hurricanes to Devils : Martin Hanzal (59).<br />
[2019-10-20 6:47:18 PM] - TRADE : From Devils to Hurricanes : $1,000,000 (Money).<br />
[2019-10-20 6:46:35 PM] - TRADE : From Hurricanes to Canucks : $1,000,000 (Money).<br />
[2019-10-20 6:46:35 PM] - TRADE : From Canucks to Hurricanes : Joakim Ryan (61).<br />
[2019-10-20 6:46:17 PM] - TRADE : From Hurricanes to Kings : $1,000,000 (Money).<br />
[2019-10-20 6:46:17 PM] - TRADE : From Kings to Hurricanes : Tucker Poolman (60).<br />
[2019-10-20 6:46:02 PM] - TRADE : From Hurricanes to Islanders : $1,000,000 (Money).<br />
[2019-10-20 6:46:02 PM] - TRADE : From Islanders to Hurricanes : MacKenzie Weegar (66).<br />
[2019-10-20 6:45:42 PM] - TRADE : From Blues to Capitals : $1,000,000 (Money).<br />
[2019-10-20 6:45:42 PM] - TRADE : From Capitals to Blues : Jonathan Quick (64).<br />
[2019-10-17 6:47:56 PM] - Kyle Brodziak was added to Wild.<br />
[2019-10-16 4:29:36 PM] - TRADE : From Edmonton Oilers to Anaheim Ducks : Kenny Agostino (64), Y:2020-RND:7-ANH.<br />
[2019-10-16 4:29:36 PM] - TRADE : From Anaheim Ducks to Edmonton Oilers : Cam Dineen (P), Grant Mismash (P), Keith Petruzzelli (P).<br />
[2019-10-10 3:58:59 PM] - TRADE : From Detroit Red Wings to Toronto Maple Leafs : James Reimer (65), Y:2020-RND:6-DET.<br />
[2019-10-10 3:58:59 PM] - TRADE : From Toronto Maple Leafs to Detroit Red Wings : Aaron Dell (57), Y:2020-RND:7-TOR.<br />
[2019-10-10 3:58:04 PM] - TRADE : From Florida Panthers to Los Angeles Kings : Y:2021-RND:5-FLA.<br />
[2019-10-10 3:58:04 PM] - TRADE : From Los Angeles Kings to Florida Panthers : Xavier Ouellet (64).<br />
[2019-10-06 5:52:43 PM] - Ryan Callahan was added to St. Louis Blues.<br />
[2019-10-06 5:50:41 PM] - TRADE : From St. Louis Blues to Columbus Blue Jackets : Anthony Greco (63).<br />
[2019-10-06 5:45:15 PM] - Zac Larraza has been deleted from Nashville Predators.<br />
[2019-10-06 5:45:03 PM] - MacKenze Stewart has been deleted from Nashville Predators.<br />
[2019-10-05 7:02:24 PM] - Andre Burakovsky was added to Calgary Flames.<br />
[2019-10-05 7:00:22 PM] - Nicolas Deslauriers was added to Dallas Stars.<br />
[2019-10-05 6:59:47 PM] - Andrew Agozzino was added to Dallas Stars.<br />
[2019-10-05 6:59:25 PM] - Kevin Czuczman was added to Colorado Avalanche.<br />
[2019-10-05 6:59:14 PM] - Julian Melchiori was added to Colorado Avalanche.<br />
[2019-10-05 6:58:47 PM] - Stuart Percy was added to Nashville Predators.<br />
[2019-10-05 6:57:26 PM] - Phillip Di Giuseppe was added to Columbus Blue Jackets.<br />
[2019-10-05 6:55:53 PM] - Calvin Pickard was added to Ottawa Senators.<br />
[2019-10-05 6:41:03 PM] - Brett Ritchie was added to Nashville Predators.<br />
[2019-10-05 6:40:06 PM] - Logan Shaw was added to Nashville Predators.<br />
[2019-10-05 6:39:10 PM] - Tyler Graovac was added to Minnesota Wild.<br />
[2019-10-05 6:38:21 PM] - Mark Alt was added to Colorado Avalanche.<br />
[2019-10-05 6:36:53 PM] - Patrick Russell was added to Columbus Blue Jackets.<br />
[2019-10-05 6:36:15 PM] - Jacob Nilsson was added to Buffalo Sabres.<br />
[2019-10-05 6:35:59 PM] - Karl Alzner was added to Buffalo Sabres.<br />
[2019-10-05 6:32:08 PM] - Derick Brassard was added to Tampa Bay Lightning.<br />
[2019-10-05 6:30:23 PM] - Colton Sissons was added to Vegas Golden Knights.<br />
[2019-10-05 6:29:57 PM] - Fredrik Claesson was added to Ottawa Senators.<br />
[2019-10-05 6:29:44 PM] - Trevor Carrick was added to Ottawa Senators.<br />
[2019-10-05 6:29:23 PM] - Dean Kukan was added to Ottawa Senators.<br />
[2019-10-05 6:29:08 PM] - Joakim Nordstrom was added to Ottawa Senators.<br />
[2019-10-05 6:28:42 PM] - Alexander Petrovic was added to Ottawa Senators.<br />
[2019-10-05 6:28:21 PM] - Jamie Oleksiak was added to Ottawa Senators.<br />
[2019-10-05 6:27:58 PM] - Corey Tropp was added to Ottawa Senators.<br />
[2019-10-05 6:27:37 PM] - Connor Brown was added to New York Islanders.<br />
[2019-10-05 6:27:05 PM] - Calle Jarnkrok was added to New York Islanders.<br />
[2019-10-05 6:25:20 PM] - Michael Amadio was added to Buffalo Sabres.<br />
[2019-10-05 6:25:06 PM] - Ryan Carpenter was added to Buffalo Sabres.<br />
[2019-10-05 6:24:48 PM] - Byron Froese was added to Carolina Hurricanes.<br />
[2019-10-05 6:24:37 PM] - Michael Mersch was added to Carolina Hurricanes.<br />
[2019-10-05 6:24:24 PM] - Andy Andreoff was added to Carolina Hurricanes.<br />
[2019-10-05 6:24:05 PM] - Greg McKegg was added to Carolina Hurricanes.<br />
[2019-10-05 6:23:48 PM] - Nicholas Baptiste was added to Carolina Hurricanes.<br />
[2019-10-05 6:23:08 PM] - Nino Niederreiter was added to Minnesota Wild.<br />
[2019-10-05 6:22:44 PM] - Nicolas Kerdiles was added to Anaheim Ducks.<br />
[2019-10-05 2:13:20 PM] - Joseph Gambardella was added to St. Louis Blues.<br />
[2019-10-05 2:12:16 PM] - Josh Teves was added to Vancouver Canucks.<br />
[2019-10-05 2:12:02 PM] - Brogan Rafferty was added to Vancouver Canucks.<br />
[2019-10-05 2:03:40 PM] - Justin Williams was added to Calgary Flames.<br />
[2019-10-04 10:21:24 PM] - TRADE : From Vegas Golden Knights to New York Rangers : Y:2021-RND:5-VGK.<br />
[2019-10-04 10:21:24 PM] - TRADE : From New York Rangers to Vegas Golden Knights : Luke Schenn (68).<br />
[2019-10-04 10:20:59 PM] - TRADE : From Calgary Flames to Chicago Blackhawks : Zac Dalpe (65).<br />
[2019-10-04 10:20:59 PM] - TRADE : From Chicago Blackhawks to Calgary Flames : Linus Karlsson (P).<br />
[2019-10-04 10:20:33 PM] - TRADE : From Detroit Red Wings to Boston Bruins : Cale Fleury (P).<br />
[2019-10-04 10:20:33 PM] - TRADE : From Boston Bruins to Detroit Red Wings : Y:2020-RND:3-BOS.<br />
[2019-10-04 10:19:54 PM] - Marcus Hogberg has been deleted from Detroit Red Wings.<br />
[2019-10-04 10:19:33 PM] - Martin Ouellette has been deleted from Edmonton Oilers.<br />
[2019-10-04 10:19:05 PM] - Martin Ouellette was added to Edmonton Oilers.<br />
[2019-10-04 10:18:52 PM] - Marcus Hogberg was added to Detroit Red Wings.<br />
[2019-10-04 10:13:46 PM] - Jared Coreau was added to Toronto Maple Leafs.<br />
[2019-09-26 8:10:43 PM] - Loui Eriksson was added to Philadelphia Flyers.<br />
[2019-09-26 8:10:17 PM] - Justin Dowling was added to Nashville Predators.<br />
[2019-09-26 8:10:01 PM] - Jayson Megna was added to Nashville Predators.<br />
[2019-09-26 8:09:31 PM] - Thomas Hickey was added to Dallas Stars.<br />
[2019-09-26 8:08:21 PM] - Al Montoya was added to Chicago Blackhawks.<br />
[2019-09-26 8:08:04 PM] - Matt Bartkowski was added to Chicago Blackhawks.<br />
[2019-09-26 8:07:48 PM] - Cameron Schilling was added to Chicago Blackhawks.<br />
[2019-09-26 8:07:27 PM] - Tommy Cross was added to Columbus Blue Jackets.<br />
[2019-09-26 8:07:14 PM] - Jack Rodewald was added to Columbus Blue Jackets.<br />
[2019-09-26 8:07:03 PM] - Brad Thiessen was added to Columbus Blue Jackets.<br />
[2019-09-26 8:06:48 PM] - Yannick Weber was added to Buffalo Sabres.<br />
[2019-09-26 8:06:14 PM] - Taylor Fedun was added to Buffalo Sabres.<br />
[2019-09-26 8:05:42 PM] - Jamie McGinn was added to Vancouver Canucks.<br />
[2019-09-26 7:59:46 PM] - TRADE : From Pittsburgh Penguins to Detroit Red Wings : Janne Juvonen (P).<br />
[2019-09-26 7:59:46 PM] - TRADE : From Detroit Red Wings to Pittsburgh Penguins : Nelson Nogier (56).<br />
[2019-09-26 7:59:06 PM] - TRADE : From Carolina Hurricanes to Chicago Blackhawks : Andrew MacDonald (68).<br />
[2019-09-26 7:59:06 PM] - TRADE : From Chicago Blackhawks to Carolina Hurricanes : Jan Rutta (64), Y:2020-RND:5-CHI.<br />
[2019-09-21 8:36:55 PM] - Jake Muzzin was added to Anaheim Ducks.<br />
[2019-09-21 8:36:30 PM] - Dan Hamhuis was added to Buffalo Sabres.<br />
[2019-09-21 8:36:00 PM] - Dale Weise was added to Arizona Coyotes.<br />
[2019-09-21 8:35:36 PM] - Justin Schultz was added to Florida Panthers.<br />
[2019-09-21 8:35:11 PM] - Jack Johnson was added to Nashville Predators.<br />
[2019-09-21 8:34:44 PM] - David Krejci was added to Toronto Maple Leafs.<br />
[2019-09-21 8:34:06 PM] - Justin Falk was added to Tampa Bay Lightning.<br />
[2019-09-21 8:33:45 PM] - Milan Lucic was added to Carolina Hurricanes.<br />
[2019-09-21 8:33:03 PM] - Chad Ruhwedel was added to Buffalo Sabres.<br />
[2019-09-21 8:32:45 PM] - Anthony Greco was added to St. Louis Blues.<br />
[2019-09-21 8:32:28 PM] - Joe Gambardella was added to St. Louis Blues.<br />
[2019-09-21 8:32:05 PM] - Carter Rowney was added to St. Louis Blues.<br />
[2019-09-21 8:31:34 PM] - Paul Stastny was added to Carolina Hurricanes.<br />
[2019-09-21 8:31:13 PM] - Matt Tennyson was added to Chicago Blackhawks.<br />
[2019-09-21 8:28:57 PM] - Kevin Boyle was added to Carolina Hurricanes.<br />
[2019-09-21 8:28:28 PM] - Andrej Sekera was added to Philadelphia Flyers.<br />
[2019-09-21 8:28:00 PM] - Troy Grosenick was added to Minnesota Wild.<br />
[2019-09-21 8:27:24 PM] - David Schlemko was added to Washington Capitals.<br />
[2019-09-21 8:26:42 PM] - Jason Spezza was added to Dallas Stars.<br />
[2019-09-21 8:26:20 PM] - Brian Lashoff was added to Montreal Canadiens.<br />
[2019-09-21 8:25:29 PM] - Roman Polak was added to Calgary Flames.<br />
[2019-09-21 8:25:06 PM] - Riley Nash was added to Los Angeles Kings.<br />
[2019-09-21 8:23:33 PM] - Logan O'Connor was added to Vancouver Canucks.<br />
[2019-09-21 8:20:49 PM] - TRADE : From Minnesota Wild to New York Islanders : Brad Richardson (71), Y:2020-RND:4-MIN.<br />
[2019-09-21 8:20:49 PM] - TRADE : From New York Islanders to Minnesota Wild : Conor Garland (65), Y:2020-RND:5-NYI.<br />
[2019-09-21 8:19:57 PM] - Austin Wagner has been deleted from Detroit Red Wings.<br />
[2019-09-21 8:19:50 PM] - Roland McKeown has been deleted from Pittsburgh Penguins.<br />
[2019-09-21 8:19:41 PM] - Roland McKeown was added to Pittsburgh Penguins.<br />
[2019-09-21 8:19:21 PM] - Austin Wagner was added to Detroit Red Wings.<br />
[2019-09-16 3:58:41 PM] - Jacob MacDonald was added to Montreal Canadiens.<br />
[2019-09-16 3:58:16 PM] - Josh Currie was added to St. Louis Blues.<br />
[2019-09-16 3:57:47 PM] - Patrick Marleau was added to Vegas Golden Knights.<br />
[2019-09-16 3:57:29 PM] - Troy Brouwer was added to Minnesota Wild.<br />
[2019-09-16 3:57:01 PM] - Craig Anderson was added to Dallas Stars.<br />
[2019-09-16 3:56:38 PM] - Josh Brown was added to Columbus Blue Jackets.<br />
[2019-09-16 3:54:49 PM] - TRADE : From New York Rangers to Calgary Flames : Y:2020-RND:2-NYR.<br />
[2019-09-16 3:54:00 PM] - TRADE : From Anaheim Ducks to Edmonton Oilers : Ryan Miller (65), $500,000 (Money).<br />
[2019-09-16 3:54:00 PM] - TRADE : From Edmonton Oilers to Anaheim Ducks : Nicolas Kerdiles (60).<br />
[2019-09-16 3:51:52 PM] - TRADE : From Anaheim Ducks to Boston Bruins : Y:2020-RND:3-BOS.<br />
[2019-09-16 3:51:52 PM] - TRADE : From Boston Bruins to Anaheim Ducks : Mike Smith (73).<br />
[2019-09-16 3:50:30 PM] - TRADE : From Anaheim Ducks to New York Rangers : Artturi Lehkonen (67), Charlie Coyle (71), Max Gildon (P).<br />
[2019-09-16 3:50:30 PM] - TRADE : From New York Rangers to Anaheim Ducks : Jay Beagle (68), Kris Russell (71), Matvey Guskov (P).<br />
[2019-09-16 3:49:24 PM] - TRADE : From Anaheim Ducks to Carolina Hurricanes : Christian Jaros (65), Marcus Pettersson (68), Rasmus Andersson (65).<br />
[2019-09-16 3:49:24 PM] - TRADE : From Carolina Hurricanes to Anaheim Ducks : Joel Hanley (62), Mikko Kokkonen (P), Rasmus Sandin (P), Y:2020-RND:4-CAR, Y:2021-RND:2-OTT, Y:2021-RND:3-CAR.<br />
[2019-09-16 3:47:45 PM] - TRADE : From Ottawa Senators to Vancouver Canucks : Jonathan Ang (P), Y:2020-RND:6-NYI.<br />
[2019-09-16 3:47:45 PM] - TRADE : From Vancouver Canucks to Ottawa Senators : Max Lagace (63).<br />
[2019-09-16 3:42:20 PM] - Ben Hutton was added to New York Rangers.<br />
[2019-09-16 3:42:00 PM] - Josh Anderson was added to New York Islanders.<br />
[2019-09-16 3:41:43 PM] - Ryan O'Reilly was added to New York Islanders.<br />
[2019-09-16 3:41:21 PM] - Tyson Barrie was added to Minnesota Wild.<br />
[2019-09-16 3:40:59 PM] - Jeff Skinner was added to Arizona Coyotes.<br />
[2019-09-16 3:40:32 PM] - Cedric Paquette was added to St. Louis Blues.<br />
[2019-09-16 3:39:36 PM] - Alexandre Grenier was added to Tampa Bay Lightning.<br />
[2019-09-16 3:37:44 PM] - TRADE : From Minnesota Wild to Vegas Golden Knights : Jordan Eberle (70).<br />
[2019-09-14 9:18:28 AM] - Dave Dziurzynski was added to Pittsburgh Penguins.<br />
[2019-09-14 9:17:53 AM] - Marc-Andre Fleury was added to New York Rangers.<br />
[2019-09-14 9:17:18 AM] - Michael Hutchinson was added to New York Islanders.<br />
[2019-09-14 9:16:02 AM] - Jordan Eberle was added to Minnesota Wild.<br />
[2019-09-14 9:15:26 AM] - Valtteri Filppula was added to Montreal Canadiens.<br />
[2019-09-14 9:14:24 AM] - Korbinian Holzer was added to Detroit Red Wings.<br />
[2019-09-14 9:14:06 AM] - Colin McDonald was added to Detroit Red Wings.<br />
[2019-09-14 9:13:29 AM] - Zach Parise was added to Dallas Stars.<br />
[2019-09-14 9:12:01 AM] - Alex Chiasson was added to Anaheim Ducks.<br />
[2019-09-14 9:11:27 AM] - Nazem Kadri was added to Anaheim Ducks.<br />
[2019-09-14 9:10:20 AM] - Mark Borowiecki was added to Toronto Maple Leafs.<br />
[2019-09-13 8:24:02 PM] - Jaycob Megna was added to Boston Bruins.<br />
[2019-09-13 8:21:50 PM] - Chris Wagner was added to Pittsburgh Penguins.<br />
[2019-09-13 8:21:33 PM] - Kyle Clifford was added to Pittsburgh Penguins.<br />
[2019-09-13 8:21:14 PM] - Tomas Jurco was added to Pittsburgh Penguins.<br />
[2019-09-13 8:20:58 PM] - Semyon Varlamov was added to Pittsburgh Penguins.<br />
[2019-09-13 8:18:43 PM] - Eric Gryba was added to Tampa Bay Lightning.<br />
[2019-09-13 8:18:28 PM] - Scott Darling was added to St. Louis Blues.<br />
[2019-09-13 8:17:49 PM] - Derek Ryan was added to San Jose Sharks.<br />
[2019-09-13 8:17:26 PM] - Chad Johnson was added to Montreal Canadiens.<br />
[2019-09-13 8:17:10 PM] - Ilya Lyubushkin was added to Carolina Hurricanes.<br />
[2019-09-13 8:16:36 PM] - Thomas Vanek was added to Columbus Blue Jackets.<br />
[2019-09-13 8:16:05 PM] - Evgeni Malkin was added to Chicago Blackhawks.<br />
[2019-09-13 8:15:45 PM] - Andrew Cogliano was added to Anaheim Ducks.<br />
[2019-09-13 8:14:37 PM] - Carl Neill has been deleted from Vancouver Canucks.<br />
[2019-09-12 8:20:33 PM] - TRADE : From Edmonton Oilers to Anaheim Ducks : $500,000 (Money), Y:2020-RND:7-BUF.<br />
[2019-09-12 8:20:33 PM] - TRADE : From Anaheim Ducks to Edmonton Oilers : Givani Smith (P), Linus Hogberg (P).<br />
[2019-09-12 8:19:56 PM] - TRADE : From Vegas Golden Knights to Anaheim Ducks : Y:2020-RND:5-OTT.<br />
[2019-09-12 8:19:56 PM] - TRADE : From Anaheim Ducks to Vegas Golden Knights : Tyler Parsons (P).<br />
[2019-09-12 8:18:58 PM] - Robert Bortuzzo was added to Pittsburgh Penguins.<br />
[2019-09-12 8:17:51 PM] - Dan Girardi was added to San Jose Sharks.<br />
[2019-09-12 8:17:20 PM] - Matt Moulson was added to New Jersey Devils.<br />
[2019-09-12 8:16:52 PM] - Michael Del Zotto was added to Edmonton Oilers.<br />
[2019-09-12 8:16:22 PM] - T.J. Brennan was added to Montreal Canadiens.<br />
[2019-09-12 8:15:55 PM] - Carl Gunnarsson was added to Arizona Coyotes.<br />
[2019-09-12 8:15:21 PM] - Keith Kinkaid was added to Arizona Coyotes.<br />
[2019-09-12 8:14:35 PM] - Sheldon Rempal was added to Montreal Canadiens.<br />
[2019-09-12 8:13:58 PM] - Ryan Suter was added to Detroit Red Wings.<br />
<?php include "Footer.php";?>
