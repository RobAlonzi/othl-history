<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Trade History</title>
<script src="OTHL-PLF.js"></script>
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
[2021-05-28 4:24:36 PM] - Matt Tennyson was added to Flames.<br />
[2021-05-27 10:10:13 PM] - Kevin Connauton was added to Predators.<br />
[2021-05-26 6:19:05 PM] - Austin Poganski was added to Predators.<br />
[2021-05-20 6:51:28 PM] - Callum Booth was added to Ducks.<br />
[2021-05-20 6:51:18 PM] - Colton Point was added to Blackhawks.<br />
[2021-05-20 6:51:01 PM] - Colton Point has been deleted from Blackhawks.<br />
[2021-05-20 6:50:55 PM] - Callum Booth has been deleted from Ducks.<br />
[2021-05-19 4:06:45 PM] - Martin Ouellette was added to Islanders.<br />
[2021-05-18 7:42:51 PM] - Kevin Connauton was added to Canadiens.<br />
[2021-05-16 5:40:23 PM] - Kevin Connauton was added to Predators.<br />
[2021-05-15 9:50:15 PM] - Brandon Halverson was added to Senators.<br />
[2021-05-09 3:35:19 PM] - Justin Schultz was added to Blues.<br />
[2021-05-02 8:01:55 PM] - Braden Holtby was added to Devils.<br />
[2021-05-01 7:03:22 PM] - Charles Williams was added to Ducks.<br />
[2021-04-29 5:28:34 PM] - TRADE : From Senators to Hurricanes : Ryan Johansen (72).<br />
[2021-04-29 5:28:34 PM] - TRADE : From Hurricanes to Senators : $1,000,000 (Money).<br />
[2021-04-26 7:07:55 PM] - Martin Marincin was added to Panthers.<br />
[2021-04-25 7:30:33 PM] - Jonathan Quick was added to Stars.<br />
[2021-04-23 8:18:09 PM] - Filip Gustavsson was added to Hurricanes.<br />
[2021-04-23 8:18:02 PM] - Jakub Skarek was added to Hurricanes.<br />
[2021-04-23 8:17:37 PM] - Filip Gustavsson has been deleted from Hurricanes.<br />
[2021-04-23 8:17:31 PM] - Jakub Skarek has been deleted from Flyers.<br />
[2021-04-23 8:17:24 PM] - Ilya Sorokin has been deleted from Panthers.<br />
[2021-04-22 4:45:23 PM] - Scott Wedgewood was added to Blue Jackets.<br />
[2021-04-20 4:50:30 PM] - Braden Holtby was added to Bruins.<br />
[2021-04-20 4:50:30 PM] - Scott Harrington was added to Panthers.<br />
[2021-04-18 9:15:12 PM] - TRADE : From Penguins to Canucks : Ilya Kovalchuk (70).<br />
[2021-04-18 9:15:12 PM] - TRADE : From Canucks to Penguins : Y:2021-RND:4-PIT, Y:2021-RND:6-VAN.<br />
[2021-04-18 9:14:27 PM] - TRADE : From Blackhawks to Canucks : Brendan Smith (66), Y:2021-RND:4-PIT.<br />
[2021-04-18 9:14:27 PM] - TRADE : From Canucks to Blackhawks : Andrew Shaw (69), $1,000,000 (Money).<br />
[2021-04-18 9:13:30 PM] - TRADE : From Wild to Predators : Zach Bogosian (68).<br />
[2021-04-18 9:13:30 PM] - TRADE : From Predators to Wild : Y:2022-RND:4-NSH.<br />
[2021-04-18 9:13:03 PM] - TRADE : From Golden Knights to Islanders : Curtis McKenzie (65).<br />
[2021-04-18 9:13:03 PM] - TRADE : From Islanders to Golden Knights : Y:2021-RND:7-NYI.<br />
[2021-04-18 9:12:18 PM] - TRADE : From Sabres to Hurricanes : Blake Murray (P), Y:2021-RND:5-ARI.<br />
[2021-04-18 9:12:18 PM] - TRADE : From Hurricanes to Sabres : Christian Djoos (65).<br />
[2021-04-18 9:11:41 PM] - TRADE : From Sabres to Lightning : Y:2021-RND:7-VAN.<br />
[2021-04-18 9:11:41 PM] - TRADE : From Lightning to Sabres : Ilya Lyubushkin (64).<br />
[2021-04-18 9:11:07 PM] - TRADE : From Flyers to Stars : Anthony Romano (P), Matt Rempe (P), $1,000,000 (Money).<br />
[2021-04-18 9:11:07 PM] - TRADE : From Stars to Flyers : Byron Froese (65), Jordan Weal (64).<br />
[2021-04-18 9:10:14 PM] - TRADE : From Flyers to Oilers : Y:2023-RND:4-PHL.<br />
[2021-04-18 9:10:14 PM] - TRADE : From Oilers to Flyers : Jan Rutta (64).<br />
[2021-04-17 8:13:15 PM] - TRADE : From Oilers to Maple Leafs : Brandon Saad (71), Nick Leddy (71), Y:2021-RND:2-EDM.<br />
[2021-04-17 8:13:15 PM] - TRADE : From Maple Leafs to Oilers : Noel Acciari (69), Shea Weber (77), Y:2021-RND:5-WPG.<br />
[2021-04-17 8:12:06 PM] - TRADE : From Lightning to Golden Knights : Vince Dunn (66).<br />
[2021-04-17 8:12:06 PM] - TRADE : From Golden Knights to Lightning : Colton White (61), Craig Smith (69), Y:2022-RND:6-NYR.<br />
[2021-04-17 8:11:22 PM] - TRADE : From Flyers to Hurricanes : Christian Djoos (65).<br />
[2021-04-17 8:11:22 PM] - TRADE : From Hurricanes to Flyers : Jakub Skarek (P).<br />
[2021-04-17 8:09:42 PM] - TRADE : From Lightning to Hurricanes : Yegor Chinakhov (P), Y:2024-RND:4-TBL.<br />
[2021-04-17 8:09:42 PM] - TRADE : From Hurricanes to Lightning : Kevin Boyle (59), Ryan Murray (69).<br />
[2021-04-17 8:08:56 PM] - TRADE : From Senators to Bruins : Y:2021-RND:6-FLA.<br />
[2021-04-17 8:08:56 PM] - TRADE : From Bruins to Senators : Joel Kellman (61).<br />
[2021-04-17 8:08:05 PM] - TRADE : From Stars to Bruins : Y:2021-RND:5-DAL.<br />
[2021-04-17 8:08:05 PM] - TRADE : From Bruins to Stars : Martin Marincin (65).<br />
[2021-04-17 8:07:26 PM] - TRADE : From Canadiens to Bruins : Michael Grabner (66), Y:2021-RND:7-PHL, Y:2022-RND:7-PHL.<br />
[2021-04-17 8:07:26 PM] - TRADE : From Bruins to Canadiens : Mikhail Berdin (58).<br />
[2021-04-15 9:32:18 PM] - TRADE : From Sharks to Canucks : James Neal (70).<br />
[2021-04-15 9:32:18 PM] - TRADE : From Canucks to Sharks : Y:2021-RND:3-VAN.<br />
[2021-04-15 9:31:42 PM] - TRADE : From Lightning to Islanders : Zack Smith (67).<br />
[2021-04-15 9:31:42 PM] - TRADE : From Islanders to Lightning : Y:2021-RND:6-NYI.<br />
[2021-04-15 9:31:16 PM] - TRADE : From Ducks to Hurricanes : Y:2022-RND:7-ANH.<br />
[2021-04-15 9:31:16 PM] - TRADE : From Hurricanes to Ducks : Braden Holtby (68).<br />
[2021-04-15 9:30:48 PM] - TRADE : From Jets to Bruins : Connor Ingram (68), Y:2021-RND:4-MTL, Y:2021-RND:4-WPG.<br />
[2021-04-15 9:30:48 PM] - TRADE : From Bruins to Jets : Joonas Korpisalo (72).<br />
[2021-04-15 9:29:32 PM] - TRADE : From Blackhawks to Flames : $1,000,000 (Money), Y:2021-RND:7-CHI.<br />
[2021-04-15 9:29:32 PM] - TRADE : From Flames to Blackhawks : Brendan Smith (66).<br />
[2021-04-15 9:28:54 PM] - TRADE : From Islanders to Golden Knights : Colton Parayko (74).<br />
[2021-04-15 9:28:54 PM] - TRADE : From Golden Knights to Islanders : Scott Laughton (69), Calvin de Haan (72), Y:2021-RND:3-SJS.<br />
[2021-04-14 7:26:28 PM] - TRADE : From Blues to Islanders : Mark Pysyk (66).<br />
[2021-04-14 7:26:28 PM] - TRADE : From Islanders to Blues : Y:2021-RND:4-NYI.<br />
[2021-04-14 7:25:57 PM] - TRADE : From Canadiens to Flyers : Curtis McElhinney (68).<br />
[2021-04-14 7:25:57 PM] - TRADE : From Flyers to Canadiens : David Ayres (45), Chase McLane (P).<br />
[2021-04-14 7:24:32 PM] - TRADE : From Hurricanes to Blackhawks : Derek Ryan (68), $1,000,000 (Money).<br />
[2021-04-14 7:24:32 PM] - TRADE : From Blackhawks to Hurricanes : Y:2021-RND:5-CHI.<br />
[2021-04-14 7:23:14 PM] - TRADE : From Sharks to Bruins : Jay Beagle (66).<br />
[2021-04-14 7:23:14 PM] - TRADE : From Bruins to Sharks : Matej Blumel (P), Lucas Feuk (P).<br />
[2021-04-14 7:22:08 PM] - TRADE : From Canucks to Ducks : Alex Steen (69).<br />
[2021-04-14 7:22:08 PM] - TRADE : From Ducks to Canucks : Y:2022-RND:4-BUF.<br />
[2021-04-14 7:21:21 PM] - TRADE : From Capitals to Ducks : Matthew Peca (62), Y:2022-RND:7-WSH.<br />
[2021-04-14 7:21:21 PM] - TRADE : From Ducks to Capitals : Noah Cates (P), Y:2022-RND:4-ANH.<br />
[2021-04-14 7:20:19 PM] - TRADE : From Blackhawks to Jets : Alexander Wennberg (69).<br />
[2021-04-14 7:20:19 PM] - TRADE : From Jets to Blackhawks : Derek Stepan (71), Y:2022-RND:2-WPG.<br />
[2021-04-14 7:19:33 PM] - TRADE : From Ducks to Jets : Yegor Korshkov (P), Y:2022-RND:3-TBL.<br />
[2021-04-14 7:19:33 PM] - TRADE : From Jets to Ducks : Madison Bowey (67).<br />
[2021-04-14 7:18:50 PM] - TRADE : From Canucks to Jets : Y:2021-RND:4-WPG.<br />
[2021-04-14 7:18:50 PM] - TRADE : From Jets to Canucks : Y:2022-RND:4-WPG.<br />
[2021-04-13 4:49:54 PM] - TRADE : From Flyers to Sharks : Alexey Toropchenko (56), Joakim Nordstrom (64), Braden Doyle (P).<br />
[2021-04-13 4:49:54 PM] - TRADE : From Sharks to Flyers : Cal Clutterbuck (67).<br />
[2021-04-13 4:49:16 PM] - TRADE : From Jets to Canucks : Y:2021-RND:4-WPG.<br />
[2021-04-13 4:49:16 PM] - TRADE : From Canucks to Jets : Joel L'Esperance (63).<br />
[2021-04-12 4:40:25 PM] - TRADE : From Stars to Canadiens : Michael Grabner (66), Isac Lundestrom (64), Y:2021-RND:1-DAL.<br />
[2021-04-12 4:40:25 PM] - TRADE : From Canadiens to Stars : Anthony Mantha (73), Y:2021-RND:3-TOR, Y:2022-RND:4-MTL.<br />
[2021-04-11 9:37:41 PM] - TRADE : From Hurricanes to Flames : Bryan Little (71).<br />
[2021-04-11 9:37:41 PM] - TRADE : From Flames to Hurricanes : Y:2022-RND:3-CGY, Y:2021-RND:5-CGY.<br />
[2021-04-11 9:37:16 PM] - TRADE : From Hurricanes to Bruins : Frederik Gauthier (64).<br />
[2021-04-11 9:37:16 PM] - TRADE : From Bruins to Hurricanes : Y:2022-RND:5-VGK.<br />
[2021-04-10 4:28:59 PM] - TRADE : From Kings to Hurricanes : P.K. Subban (72), Y:2021-RND:2-LAK, Y:2021-RND:4-DET.<br />
[2021-04-10 4:28:59 PM] - TRADE : From Hurricanes to Kings : Ryan McDonagh (73), Y:2021-RND:5-SJS.<br />
[2021-04-08 4:20:51 PM] - TRADE : From Golden Knights to Maple Leafs : Jarred Tinordi (66), Y:2021-RND:4-ARI.<br />
[2021-04-08 4:20:51 PM] - TRADE : From Maple Leafs to Golden Knights : Y:2021-RND:3-LAK.<br />
[2021-04-07 4:12:43 PM] - Jonathan Ericsson was added to Panthers.<br />
[2021-04-06 7:21:24 PM] - TRADE : From Golden Knights to Ducks : Jacob de La Rose (64), Y:2021-RND:4-VAN.<br />
[2021-04-06 7:21:24 PM] - TRADE : From Ducks to Golden Knights : Curtis McKenzie (64), Y:2021-RND:3-SJS.<br />
[2021-04-04 7:24:24 PM] - Brendan Smith was added to Flames.<br />
[2021-04-03 8:01:47 PM] - TRADE : From Bruins to Flyers : Alexey Toropchenko (56).<br />
[2021-04-03 8:01:47 PM] - TRADE : From Flyers to Bruins : Y:2022-RND:5-VGK, Y:2022-RND:7-SJS, Y:2022-RND:7-STL.<br />
[2021-04-03 8:01:15 PM] - TRADE : From Devils to Blues : Y:2023-RND:7-NJD.<br />
[2021-04-03 8:01:15 PM] - TRADE : From Blues to Devils : Radim Simek (64).<br />
[2021-03-30 7:54:45 PM] - TRADE : From Lightning to Bruins : Riley Sutter (P), Y:2021-RND:7-TBL, Y:2022-RND:6-COL.<br />
[2021-03-30 7:54:45 PM] - TRADE : From Bruins to Lightning : Brett Kulak (64).<br />
[2021-03-30 7:53:07 PM] - Ryan Reaves was added to Maple Leafs.<br />
[2021-03-29 8:39:27 PM] - TRADE : From Panthers to Bruins : Brent Burns (79).<br />
[2021-03-29 8:39:27 PM] - TRADE : From Bruins to Panthers : Lucas Carlsson (60), Rasmus Andersson (68), Y:2023-RND:5-BOS.<br />
[2021-03-28 8:18:18 PM] - TRADE : From Coyotes to Capitals : Y:2021-RND:1-ARI, Y:2021-RND:5-TBL.<br />
[2021-03-28 8:18:18 PM] - TRADE : From Capitals to Coyotes : Tomas Tatar (73).<br />
[2021-03-28 8:17:26 PM] - TRADE : From Coyotes to Blues : Y:2021-RND:2-ARI, Y:2021-RND:6-ARI.<br />
[2021-03-28 8:17:26 PM] - TRADE : From Blues to Coyotes : Cedric Paquette (68), Y:2021-RND:5-STL.<br />
[2021-03-25 8:55:48 PM] - Frederik Gauthier was added to Hurricanes.<br />
[2021-03-23 7:25:01 PM] - TRADE : From Maple Leafs to Blue Jackets : Artem Anisimov (68), Y:2021-RND:6-TBL.<br />
[2021-03-23 7:25:01 PM] - TRADE : From Blue Jackets to Maple Leafs : Troy Stecher (68), Y:2021-RND:3-LAK.<br />
[2021-03-23 7:23:58 PM] - TRADE : From Kings to Hurricanes : Y:2021-RND:4-BOS.<br />
[2021-03-23 7:23:58 PM] - TRADE : From Hurricanes to Kings : Alex Galchenyuk (66).<br />
[2021-03-23 7:23:29 PM] - TRADE : From Lightning to Flyers : Mike Hoffman (73).<br />
[2021-03-23 7:23:29 PM] - TRADE : From Flyers to Lightning : Marcus Foligno (69), Yegor Chinakhov (P), Rafael Harvey-Pinard (P).<br />
[2021-03-20 3:47:54 PM] - TRADE : From Golden Knights to Jets : Nate Schmidt (70), Lenni Killinen (P), Y:2021-RND:4-MTL.<br />
[2021-03-20 3:47:54 PM] - TRADE : From Jets to Golden Knights : Kale Clague (59), Nils Lundkvist (P).<br />
[2021-03-17 8:49:47 PM] - Ilya Sorokin was added to Panthers.<br />
[2021-03-17 8:46:08 PM] - TRADE : From Senators to Oilers : Nick Leddy (71).<br />
[2021-03-17 8:46:08 PM] - TRADE : From Oilers to Senators : Will Butcher (66), John St. Ivany (P), $1,000,000 (Money), Y:2021-RND:4-EDM.<br />
[2021-03-15 7:41:52 PM] - TRADE : From Ducks to Canadiens : Dillon Dube (63).<br />
[2021-03-15 7:41:52 PM] - TRADE : From Canadiens to Ducks : Curtis McKenzie (64), Y:2021-RND:2-DAL.<br />
[2021-03-15 7:41:08 PM] - TRADE : From Canucks to Blue Jackets : Paul Byron (66).<br />
[2021-03-15 7:41:08 PM] - TRADE : From Blue Jackets to Canucks : Y:2022-RND:5-FLA.<br />
[2021-03-14 9:59:52 PM] - Scott Wedgewood was added to Flames.<br />
[2021-03-13 4:07:28 PM] - Keegan Iverson has been deleted from Senators.<br />
[2021-03-13 4:07:17 PM] - Connor Hobbs has been deleted from Senators.<br />
[2021-03-12 4:22:01 PM] - Markus Nutivaara was added to Hurricanes.<br />
[2021-03-11 8:35:37 PM] - TRADE : From Senators to Canucks : Jason Dickinson (67).<br />
[2021-03-11 8:35:37 PM] - TRADE : From Canucks to Senators : William Carrier (62), Drew Helleson (P), $1,000,000 (Money).<br />
[2021-03-10 7:07:41 PM] - TRADE : From Panthers to Flyers : Nathan Beaulieu (67).<br />
[2021-03-10 7:07:41 PM] - TRADE : From Flyers to Panthers : Cody Eakin (66), Linus Weissbach (P).<br />
[2021-03-09 4:23:43 PM] - TRADE : From Panthers to Blue Jackets : Erik Johnson (74), Y:2022-RND:5-FLA.<br />
[2021-03-09 4:23:43 PM] - TRADE : From Blue Jackets to Panthers : Sam Steel (64).<br />
[2021-03-08 4:51:51 PM] - TRADE : From Golden Knights to Maple Leafs : Johnny Boychuk (70), Y:2021-RND:7-ARI.<br />
[2021-03-08 4:51:51 PM] - TRADE : From Maple Leafs to Golden Knights : Y:2022-RND:3-ANH.<br />
[2021-03-07 7:18:02 PM] - TRADE : From Hurricanes to Blue Jackets : Y:2022-RND:6-TBL.<br />
[2021-03-07 7:18:02 PM] - TRADE : From Blue Jackets to Hurricanes : Sonny Milano (63).<br />
[2021-03-06 7:02:11 PM] - TRADE : From Sabres to Coyotes : Justin Bailey (65).<br />
[2021-03-06 7:02:11 PM] - TRADE : From Coyotes to Sabres : Y:2021-RND:5-ARI.<br />
[2021-03-05 4:28:20 PM] - TRADE : From Blue Jackets to Golden Knights : Sami Niku (61), Y:2022-RND:2-CLB.<br />
[2021-03-05 4:28:20 PM] - TRADE : From Golden Knights to Blue Jackets : Alex Goligoski (74).<br />
[2021-03-04 8:52:01 PM] - TRADE : From Sabres to Ducks : Y:2022-RND:4-BUF.<br />
[2021-03-04 8:52:01 PM] - TRADE : From Ducks to Sabres : Zemgus Girgensons (68).<br />
[2021-03-04 8:51:34 PM] - TRADE : From Maple Leafs to Flyers : Mark Borowiecki (71).<br />
[2021-03-04 8:51:34 PM] - TRADE : From Flyers to Maple Leafs : Colin Miller (66), Y:2021-RND:5-WPG, Y:2021-RND:7-CAR.<br />
[2021-03-03 6:10:38 PM] - TRADE : From Panthers to Bruins : Lawson Crouse (69).<br />
[2021-03-03 6:10:38 PM] - TRADE : From Bruins to Panthers : Matthew Highmore (59), Egor Sokolov (P), Thimo Nickl (P), Trevor Kuntar (P).<br />
[2021-03-03 6:09:45 PM] - TRADE : From Panthers to Maple Leafs : Jake Debrusk (69), Y:2022-RND:5-PHL.<br />
[2021-03-03 6:09:45 PM] - TRADE : From Maple Leafs to Panthers : Thomas Harley (P).<br />
[2021-03-02 4:44:21 PM] - TRADE : From Panthers to Senators : Y:2021-RND:3-FLA.<br />
[2021-03-02 4:44:21 PM] - TRADE : From Senators to Panthers : Erik Johnson (74).<br />
[2021-03-02 4:43:58 PM] - TRADE : From Hurricanes to Senators : Shayne Gostisbehere (65), Y:2021-RND:2-WPG, Y:2021-RND:4-MIN.<br />
[2021-03-02 4:43:58 PM] - TRADE : From Senators to Hurricanes : Ryan McDonagh (73).<br />
[2021-02-27 6:39:52 PM] - TRADE : From Ducks to Sabres : Trevor Moore (62), Y:2021-RND:3-CAR.<br />
[2021-02-27 6:39:52 PM] - TRADE : From Sabres to Ducks : Travis Zajac (70).<br />
[2021-02-26 3:01:53 PM] - TRADE : From Sabres to Kings : Y:2021-RND:4-DET, Y:2021-RND:6-ANH.<br />
[2021-02-26 3:01:53 PM] - TRADE : From Kings to Sabres : Carter Verhaeghe (60).<br />
[2021-02-26 3:01:02 PM] - TRADE : From Golden Knights to Blue Jackets : Joe Pavelski (73).<br />
[2021-02-26 3:01:02 PM] - TRADE : From Blue Jackets to Golden Knights : Y:2021-RND:2-CLB, Y:2021-RND:3-CLB.<br />
[2021-02-25 4:53:36 PM] - TRADE : From Stars to Devils : Y:2021-RND:6-DAL, Y:2022-RND:5-WSH.<br />
[2021-02-25 4:53:36 PM] - TRADE : From Devils to Stars : Michael Grabner (66), Michael Raffl (65).<br />
[2021-02-23 4:48:52 PM] - TRADE : From Ducks to Hurricanes : Angus Crookshank (P).<br />
[2021-02-23 4:48:52 PM] - TRADE : From Hurricanes to Ducks : Y:2022-RND:6-BOS.<br />
[2021-02-23 4:48:31 PM] - TRADE : From Lightning to Hurricanes : Dmitry Sokolov (60).<br />
[2021-02-23 4:48:31 PM] - TRADE : From Hurricanes to Lightning : Olof Lindbom (P).<br />
[2021-02-22 4:51:40 PM] - TRADE : From Stars to Ducks : Y:2022-RND:6-DAL.<br />
[2021-02-22 4:51:40 PM] - TRADE : From Ducks to Stars : Alexis Gravel (P).<br />
[2021-02-16 6:24:25 PM] - TRADE : From Hurricanes to Flyers : Christian Djoos (65).<br />
[2021-02-16 6:24:25 PM] - TRADE : From Flyers to Hurricanes : Y:2023-RND:3-PHL.<br />
[2021-02-15 9:36:28 AM] - TRADE : From Hurricanes to Lightning : Kris Russell (69).<br />
[2021-02-15 9:36:28 AM] - TRADE : From Lightning to Hurricanes : Christian Djoos (65), Y:2023-RND:2-TBL.<br />
[2021-02-13 7:56:10 PM] - TRADE : From Kings to Blue Jackets : Aliaksei Protas (P), Y:2021-RND:3-LAK.<br />
[2021-02-13 7:56:10 PM] - TRADE : From Blue Jackets to Kings : Boone Jenner (72).<br />
[2021-02-13 7:54:10 PM] - Dan Vladar was added to Panthers.<br />
[2021-02-13 7:54:01 PM] - Cameron Hughes was added to Ducks.<br />
[2021-02-13 7:53:35 PM] - Daniel Vladar has been deleted from Panthers.<br />
[2021-02-13 7:53:27 PM] - Cameron Hughes has been deleted from Ducks.<br />
[2021-02-12 5:14:11 PM] - TRADE : From Blackhawks to Jets : Adam Erne (63).<br />
[2021-02-12 5:14:11 PM] - TRADE : From Jets to Blackhawks : Carsen Twarynski (59).<br />
[2021-02-10 4:33:21 PM] - Scott Wedgewood was added to Blue Jackets.<br />
[2021-02-08 4:50:39 PM] - TRADE : From Hurricanes to Blue Jackets : $1,000,000 (Money).<br />
[2021-02-08 4:50:39 PM] - TRADE : From Blue Jackets to Hurricanes : Mackenzie MacEachern (60).<br />
[2021-02-08 4:49:38 PM] - Mackenzie MacEachern was added to Blue Jackets.<br />
[2021-02-07 5:16:34 PM] - TRADE : From Hurricanes to Penguins : Frans Nielsen (68).<br />
[2021-02-07 5:16:34 PM] - TRADE : From Penguins to Hurricanes : Y:2022-RND:3-PHL, Y:2023-RND:6-PIT.<br />
[2021-02-07 5:15:58 PM] - TRADE : From Canucks to Blue Jackets : Henrik Lundqvist (74), Y:2021-RND:1-VAN, Y:2021-RND:3-WSH.<br />
[2021-02-07 5:15:58 PM] - TRADE : From Blue Jackets to Canucks : Jacob Markstrom (79).<br />
[2021-02-06 3:46:51 PM] - TRADE : From Maple Leafs to Canucks : Patrik Nemeth (72).<br />
[2021-02-06 3:46:51 PM] - TRADE : From Canucks to Maple Leafs : Y:2021-RND:2-VAN.<br />
[2021-02-06 3:45:52 PM] - Byron Froese was added to Stars.<br />
[2021-02-06 3:45:52 PM] - Collin Delia was added to Stars.<br />
[2021-02-05 5:32:34 PM] - TRADE : From Sabres to Canucks : Nikita Gusev (68), Y:2021-RND:5-ANH.<br />
[2021-02-05 5:32:34 PM] - TRADE : From Canucks to Sabres : Valeri Nichushkin (68).<br />
[2021-02-04 5:11:19 PM] - Collin Delia was added to Sabres.<br />
[2021-02-04 5:11:19 PM] - Andy Welinski was added to Sabres.<br />
[2021-02-03 4:51:02 PM] - TRADE : From Blackhawks to Senators : Jimmy Howard (59).<br />
[2021-02-03 4:50:43 PM] - TRADE : From Canadiens to Sabres : Travis Zajac (70).<br />
[2021-02-03 4:50:43 PM] - TRADE : From Sabres to Canadiens : Kyle Rau (62), Y:2021-RND:3-TOR.<br />
[2021-02-02 3:52:13 PM] - TRADE : From Sabres to Golden Knights : Y:2021-RND:4-MTL.<br />
[2021-02-02 3:52:13 PM] - TRADE : From Golden Knights to Sabres : Loui Eriksson (66).<br />
[2021-01-31 4:02:40 PM] - TRADE : From Bruins to Jets : Paul Stastny (72).<br />
[2021-01-31 4:02:40 PM] - TRADE : From Jets to Bruins : Jean-Gabriel Pageau (73).<br />
[2021-01-30 8:49:45 PM] - Niklas Hansson has been deleted from Senators.<br />
[2021-01-30 8:48:44 PM] - Reece Scarlett has been deleted from Senators.<br />
[2021-01-27 9:47:09 PM] - TRADE : From Hurricanes to Flames : Brent Seabrook (72), Y:2021-RND:7-BOS.<br />
[2021-01-27 9:47:09 PM] - TRADE : From Flames to Hurricanes : Y:2021-RND:4-CGY, Y:2021-RND:5-SJS.<br />
[2021-01-27 9:46:39 PM] - TRADE : From Canadiens to Flyers : Valtteri Filppula (68).<br />
[2021-01-27 9:46:39 PM] - TRADE : From Flyers to Canadiens : Yakov Trenin (61).<br />
[2021-01-27 9:43:47 PM] - Kyle Rau was added to Sabres.<br />
[2021-01-27 9:43:47 PM] - Byron Froese was added to Sabres.<br />
[2021-01-26 7:18:46 PM] - TRADE : From Senators to Flyers : Bryan Rust (75), Joakim Nordstrom (64).<br />
[2021-01-26 7:18:46 PM] - TRADE : From Flyers to Senators : Andrew Peeke (61), Brett Connolly (67), Andre Lee (P), Y:2021-RND:1-PHL, Y:2021-RND:7-TOR.<br />
[2021-01-25 4:56:20 PM] - Byron Froese was added to Flames.<br />
[2021-01-24 10:10:18 PM] - TRADE : From Flyers to Coyotes : Pierre-Luc Dubois (72).<br />
[2021-01-24 10:10:18 PM] - TRADE : From Coyotes to Flyers : Kevin Fiala (72).<br />
[2021-01-23 10:58:06 AM] - TRADE : From Stars to Bruins : Derek Forbort (67).<br />
[2021-01-23 10:58:06 AM] - TRADE : From Bruins to Stars : Curtis Lazar (65).<br />
[2021-01-23 10:57:39 AM] - TRADE : From Sabres to Senators : J.T. Compher (70), Kurtis MacDermid (61), Pavel Buchnevich (70), Logan Cockerill (P), Mason Langenbrunner (P), Will Reilly (P), Patrick Moynihan (P), Y:2021-RND:1-BOS, Y:2022-RND:1-BOS.<br />
[2021-01-23 10:57:39 AM] - TRADE : From Senators to Sabres : David Pastrnak (76).<br />
[2021-01-21 7:23:33 PM] - TRADE : From Islanders to Stars : Y:2021-RND:1-DAL.<br />
[2021-01-21 7:23:33 PM] - TRADE : From Stars to Islanders : Y:2022-RND:1-DAL.<br />
[2021-01-21 7:23:10 PM] - TRADE : From Maple Leafs to Hurricanes : Troy Terry (62), Y:2021-RND:4-MIN.<br />
[2021-01-21 7:23:10 PM] - TRADE : From Hurricanes to Maple Leafs : Artem Anisimov (68), Y:2022-RND:5-NSH.<br />
[2021-01-21 7:20:44 PM] - Jonas Johansson was added to Sabres.<br />
[2021-01-21 7:20:21 PM] - Jonas Johansson has been deleted from Sabres.<br />
[2021-01-19 4:14:32 PM] - TRADE : From Maple Leafs to Bruins : Ondrej Palat (71).<br />
[2021-01-19 4:14:32 PM] - TRADE : From Bruins to Maple Leafs : Tyler Toffoli (72).<br />
[2021-01-17 7:29:37 PM] - Victor Rask was added to Panthers.<br />
[2021-01-16 6:25:17 PM] - TRADE : From Panthers to Flames : Paul Carey (64).<br />
[2021-01-16 6:25:17 PM] - TRADE : From Flames to Panthers : $1,000,000 (Money).<br />
[2021-01-16 6:21:38 PM] - TRADE : From Capitals to Blue Jackets : Boone Jenner (72).<br />
[2021-01-16 6:21:38 PM] - TRADE : From Blue Jackets to Capitals : Ian Cole (72).<br />
[2021-01-14 4:38:35 PM] - TRADE : From Blue Jackets to Blues : Y:2021-RND:7-MIN.<br />
[2021-01-14 4:38:35 PM] - TRADE : From Blues to Blue Jackets : Andrew Ladd (63).<br />
[2021-01-14 4:38:02 PM] - TRADE : From Avalanche to Senators : Martin Ouellette (50).<br />
[2021-01-14 4:38:02 PM] - TRADE : From Senators to Avalanche : Dean Kukan (59).<br />
[2021-01-13 4:29:29 PM] - TRADE : From Ducks to Capitals : Joakim Ryan (64), Sean Monahan (74), Y:2021-RND:4-ANH.<br />
[2021-01-13 4:29:29 PM] - TRADE : From Capitals to Ducks : Alec Martinez (70), Aidan Dudas (P), Y:2021-RND:1-WSH.<br />
[2021-01-13 4:28:26 PM] - TRADE : From Flyers to Panthers : Emil Bemstrom (62), Jaroslav Halak (75).<br />
[2021-01-13 4:28:26 PM] - TRADE : From Panthers to Flyers : Anton Khudobin (81).<br />
[2021-01-13 4:27:32 PM] - TRADE : From Islanders to Stars : Ryan Ellis (74), Y:2021-RND:3-NYR.<br />
[2021-01-13 4:27:32 PM] - TRADE : From Stars to Islanders : Benoit-Olivier Groulx (P), Y:2021-RND:1-DAL.<br />
[2021-01-10 3:58:09 PM] - Trevor Lewis was added to Panthers.<br />
<?php include "Footer.php";?>
