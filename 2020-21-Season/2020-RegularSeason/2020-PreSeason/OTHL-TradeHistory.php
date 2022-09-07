<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Trade History</title>
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
[2020-07-14 3:09:36 PM] - Darren Helm was added to Panthers.<br />
[2020-07-14 3:09:11 PM] - Ben Bishop was added to Flames.<br />
[2020-07-14 3:08:47 PM] - Carl Hagelin was added to Blackhawks.<br />
[2020-07-14 3:06:42 PM] - TRADE : From Sharks to Hurricanes : Phil Kessel (71).<br />
[2020-07-14 3:06:42 PM] - TRADE : From Hurricanes to Sharks : Y:2021-RND:6-BUF.<br />
[2020-07-14 3:05:54 PM] - Michael McLeod has been deleted from Canucks.<br />
[2020-07-14 3:05:46 PM] - Joel Farabee has been deleted from Canucks.<br />
[2020-07-14 3:05:40 PM] - Dylan Gambrell has been deleted from Capitals.<br />
[2020-07-14 3:05:33 PM] - Nikita Gusev has been deleted from Capitals.<br />
[2020-07-14 3:05:21 PM] - Lukas Vejdemo has been deleted from Blues.<br />
[2020-07-14 3:05:15 PM] - Janne Kuokkanen has been deleted from Blues.<br />
[2020-07-14 3:05:09 PM] - Denis Guryanov has been deleted from Blues.<br />
[2020-07-14 3:05:02 PM] - Cale Fleury has been deleted from Blues.<br />
[2020-07-14 3:04:55 PM] - Alexandre Texier has been deleted from Blues.<br />
[2020-07-14 3:04:44 PM] - Adam Boqvist has been deleted from Blues.<br />
[2020-07-14 3:04:34 PM] - Chase Priskie has been deleted from Canadiens.<br />
[2020-07-14 3:04:23 PM] - Matthew Phillips has been deleted from Canadiens.<br />
[2020-07-14 3:04:15 PM] - Beck Malenstyn has been deleted from Jets.<br />
[2020-07-14 3:04:08 PM] - Kale Clague has been deleted from Jets.<br />
[2020-07-14 3:04:02 PM] - David Kase has been deleted from Jets.<br />
[2020-07-14 3:03:55 PM] - Eetu Luostarinen has been deleted from Jets.<br />
[2020-07-14 3:03:49 PM] - Carson Soucy has been deleted from Avalanche.<br />
[2020-07-14 3:03:29 PM] - Andreas Englund has been deleted from Avalanche.<br />
[2020-07-14 3:03:22 PM] - John Marino has been deleted from Rangers.<br />
[2020-07-14 3:03:14 PM] - Dmytro Timashov has been deleted from Senators.<br />
[2020-07-14 3:03:08 PM] - Klim Kostin has been deleted from Senators.<br />
[2020-07-14 3:03:02 PM] - Gilles Senn has been deleted from Senators.<br />
[2020-07-14 3:02:46 PM] - Gilles Senn was added to Senators.<br />
[2020-07-14 3:02:36 PM] - Klim Kostin was added to Senators.<br />
[2020-07-14 3:02:30 PM] - Dmytro Timashov was added to Senators.<br />
[2020-07-14 3:02:13 PM] - John Marino was added to Rangers.<br />
[2020-07-14 3:01:39 PM] - Beck Malenstyn was added to Jets.<br />
[2020-07-14 3:01:34 PM] - Kale Clague was added to Jets.<br />
[2020-07-14 3:01:27 PM] - David Kase was added to Jets.<br />
[2020-07-14 3:01:20 PM] - Eetu Luostarinen was added to Jets.<br />
[2020-07-14 3:00:58 PM] - Andreas Englund was added to Avalanche.<br />
[2020-07-14 3:00:36 PM] - Carson Soucy was added to Avalanche.<br />
[2020-07-14 3:00:11 PM] - Matthew Phillips was added to Canadiens.<br />
[2020-07-14 3:00:04 PM] - Chase Priskie was added to Canadiens.<br />
[2020-07-14 2:59:44 PM] - Lukas Vejdemo was added to Blues.<br />
[2020-07-14 2:59:37 PM] - Janne Kuokkanen was added to Blues.<br />
[2020-07-14 2:59:29 PM] - Denis Gurianov was added to Blues.<br />
[2020-07-14 2:59:23 PM] - Cale Fleury was added to Blues.<br />
[2020-07-14 2:59:17 PM] - Alexandre Texier was added to Blues.<br />
[2020-07-14 2:59:12 PM] - Adam Boqvist was added to Blues.<br />
[2020-07-14 2:58:56 PM] - Dylan Gambrell was added to Capitals.<br />
[2020-07-14 2:58:50 PM] - Nikita Gusev was added to Capitals.<br />
[2020-07-14 2:58:32 PM] - Michael McLeod was added to Canucks.<br />
[2020-07-14 2:58:25 PM] - Joel Farabee was added to Canucks.<br />
[2020-07-14 2:42:22 PM] - Mitchell Dempsey has been deleted from Penguins.<br />
[2020-07-14 2:42:16 PM] - Jared Fiegl has been deleted from Penguins.<br />
[2020-07-14 2:42:08 PM] - Matt Brassard has been deleted from Maple Leafs.<br />
[2020-07-14 2:42:00 PM] - Brendan De Jong has been deleted from Maple Leafs.<br />
[2020-07-14 2:41:48 PM] - Alexander Kadeikin has been deleted from Senators.<br />
[2020-07-14 2:41:39 PM] - Jeremy Gregoire has been deleted from Senators.<br />
[2020-07-14 2:41:32 PM] - Henri Ikonen has been deleted from Senators.<br />
[2020-07-14 2:41:23 PM] - Grant Besse has been deleted from Senators.<br />
[2020-07-14 2:41:17 PM] - Martin Reway has been deleted from Senators.<br />
[2020-07-14 2:41:12 PM] - Brandon Gormley has been deleted from Senators.<br />
[2020-07-11 10:36:09 PM] - Libor Hajek has been deleted from Coyotes.<br />
[2020-07-11 10:35:57 PM] - Ethan Bear has been deleted from Coyotes.<br />
[2020-07-11 10:35:50 PM] - Erik Brannstrom has been deleted from Panthers.<br />
[2020-07-11 10:35:16 PM] - Alexander Nylander has been deleted from Panthers.<br />
[2020-07-11 10:35:10 PM] - Martin Necas has been deleted from Panthers.<br />
[2020-07-11 10:35:03 PM] - Michael Anderson has been deleted from Hurricanes.<br />
[2020-07-11 10:34:55 PM] - Alexander Volkov has been deleted from Hurricanes.<br />
[2020-07-11 10:34:36 PM] - Cale Makar has been deleted from Islanders.<br />
[2020-07-11 10:34:23 PM] - Jesper Boqvist has been deleted from Blackhawks.<br />
[2020-07-11 10:34:02 PM] - Cale Makar was added to Islanders.<br />
[2020-07-11 10:33:49 PM] - Jesper Boqvist was added to Blackhawks.<br />
[2020-07-11 10:33:27 PM] - Libor Hajek was added to Coyotes.<br />
[2020-07-11 10:33:22 PM] - Ethan Bear was added to Coyotes.<br />
[2020-07-11 10:33:11 PM] - Erik Brannstrom was added to Panthers.<br />
[2020-07-11 10:32:57 PM] - Alexander Nylander was added to Panthers.<br />
[2020-07-11 10:32:49 PM] - Martin Necas was added to Panthers.<br />
[2020-07-11 10:32:34 PM] - Michael Anderson was added to Hurricanes.<br />
[2020-07-11 10:32:23 PM] - Alexander Volkov was added to Hurricanes.<br />
[2020-07-11 10:24:19 PM] - Nicolas Roy has been deleted from Kings.<br />
[2020-07-11 10:24:10 PM] - Pierre Engvall has been deleted from Kings.<br />
[2020-07-11 10:24:04 PM] - Yakov Trenin has been deleted from Flyers.<br />
[2020-07-11 10:23:58 PM] - Emil Bemstrom has been deleted from Flyers.<br />
[2020-07-11 10:23:51 PM] - Filip Zadina has been deleted from Flyers.<br />
[2020-07-11 10:23:45 PM] - Andrew Peeke has been deleted from Flyers.<br />
[2020-07-11 10:23:28 PM] - Cayden Primeau has been deleted from Hurricanes.<br />
[2020-07-11 10:23:21 PM] - German Rubtsov has been deleted from Hurricanes.<br />
[2020-07-11 10:23:13 PM] - Nick Suzuki has been deleted from Hurricanes.<br />
[2020-07-11 10:23:05 PM] - Kaapo Kakko has been deleted from Hurricanes.<br />
[2020-07-11 10:23:00 PM] - Jack Hughes has been deleted from Hurricanes.<br />
[2020-07-11 10:22:53 PM] - Nikolay Prokhorkin has been deleted from Canadiens.<br />
[2020-07-11 10:22:46 PM] - Ilya Samsonov has been deleted from Sabres.<br />
[2020-07-11 10:22:25 PM] - Dante Fabbro has been deleted from Penguins.<br />
[2020-07-11 10:22:18 PM] - Niko Mikkola has been deleted from Devils.<br />
[2020-07-11 10:22:11 PM] - Lucas Carlsson has been deleted from Devils.<br />
[2020-07-11 10:22:04 PM] - Morgan Frost has been deleted from Predators.<br />
[2020-07-11 10:21:58 PM] - Jean-Christophe Beaudin has been deleted from Predators.<br />
[2020-07-11 10:21:50 PM] - Dominik Kubalik has been deleted from Predators.<br />
[2020-07-11 10:21:42 PM] - Brandon Gignac has been deleted from Predators.<br />
[2020-07-11 10:21:30 PM] - Rasmus Sandin has been deleted from Ducks.<br />
[2020-07-11 10:21:17 PM] - Noah Dobson has been deleted from Ducks.<br />
[2020-07-11 10:21:10 PM] - Mitchell Stephens has been deleted from Hurricanes.<br />
[2020-07-11 10:20:57 PM] - Kevin Stenlund has been deleted from Ducks.<br />
[2020-07-11 10:20:49 PM] - Jordan Kyrou has been deleted from Ducks.<br />
[2020-07-11 10:20:40 PM] - Rasmus Asplund has been deleted from Flames.<br />
[2020-07-11 10:20:30 PM] - Nicolas Hague has been deleted from Maple Leafs.<br />
[2020-07-11 10:20:23 PM] - Cody Glass has been deleted from Maple Leafs.<br />
[2020-07-11 10:20:10 PM] - Nic Hague was added to Maple Leafs.<br />
[2020-07-11 10:19:56 PM] - Cody Glass was added to Maple Leafs.<br />
[2020-07-11 10:19:44 PM] - Rasmus Asplund was added to Flames.<br />
[2020-07-11 10:19:34 PM] - Rasmus Sandin was added to Ducks.<br />
[2020-07-11 10:19:25 PM] - Noah Dobson was added to Ducks.<br />
[2020-07-11 10:19:19 PM] - Kevin Stenlund was added to Ducks.<br />
[2020-07-11 10:19:13 PM] - Jordan Kyrou was added to Ducks.<br />
[2020-07-11 10:18:50 PM] - Niko Mikkola was added to Devils.<br />
[2020-07-11 10:18:45 PM] - Lucas Carlsson was added to Devils.<br />
[2020-07-11 10:18:35 PM] - Brandon Gignac was added to Predators.<br />
[2020-07-11 10:18:29 PM] - Dominik Kubalik was added to Predators.<br />
[2020-07-11 10:18:23 PM] - J.C. Beaudin was added to Predators.<br />
[2020-07-11 10:18:17 PM] - Morgan Frost was added to Predators.<br />
[2020-07-11 10:18:04 PM] - Dante Fabbro was added to Penguins.<br />
[2020-07-11 10:17:47 PM] - Ilya Samsonov was added to Sabres.<br />
[2020-07-11 10:17:34 PM] - Cayden Primeau was added to Hurricanes.<br />
[2020-07-11 10:17:27 PM] - German Rubtsov was added to Hurricanes.<br />
[2020-07-11 10:17:21 PM] - Nick Suzuki was added to Hurricanes.<br />
[2020-07-11 10:17:13 PM] - Kaapo Kakko was added to Hurricanes.<br />
[2020-07-11 10:17:07 PM] - Jack Hughes was added to Hurricanes.<br />
[2020-07-11 10:16:51 PM] - Yakov Trenin was added to Flyers.<br />
[2020-07-11 10:16:44 PM] - Emil Bemstrom was added to Flyers.<br />
[2020-07-11 10:16:36 PM] - Filip Zadina was added to Flyers.<br />
[2020-07-11 10:16:28 PM] - Andrew Peeke was added to Flyers.<br />
[2020-07-11 10:16:09 PM] - Nicolas Roy was added to Kings.<br />
[2020-07-11 10:15:54 PM] - Pierre Engvall was added to Kings.<br />
[2020-07-11 10:15:08 PM] - Mitchell Stephens was added to Hurricanes.<br />
[2020-07-11 10:14:50 PM] - Nikolai Prokhorkin was added to Canadiens.<br />
[2020-07-11 9:51:57 PM] - Connor Chatham has been deleted from Avalanche.<br />
[2020-07-11 9:51:42 PM] - Sergey Zborovskiy has been deleted from Avalanche.<br />
[2020-07-11 9:51:32 PM] - Tanner Richard has been deleted from Coyotes.<br />
[2020-07-11 9:51:24 PM] - Yaroslav Kosov has been deleted from Coyotes.<br />
[2020-07-11 9:51:17 PM] - Scott Kosmachuk has been deleted from Coyotes.<br />
[2020-07-11 9:41:05 PM] - TRADE : From Hurricanes to Lightning : Ben Jones (P).<br />
[2020-07-11 9:41:05 PM] - TRADE : From Lightning to Hurricanes : Cole Koepke (P).<br />
[2020-07-11 9:39:58 PM] - TRADE : From Canadiens to Sabres : Y:2021-RND:4-MTL, Y:2021-RND:6-MTL.<br />
[2020-07-11 9:39:58 PM] - TRADE : From Sabres to Canadiens : Nikolay Prokhorkin (P).<br />
[2020-07-11 9:39:23 PM] - TRADE : From Bruins to Golden Knights : Eric Staal (73).<br />
[2020-07-11 9:39:23 PM] - TRADE : From Golden Knights to Bruins : Y:2021-RND:4-PHL.<br />
[2020-07-11 9:39:04 PM] - TRADE : From Sharks to Golden Knights : Y:2020-RND:1-SJS, Y:2021-RND:1-SJS.<br />
[2020-07-11 9:39:04 PM] - TRADE : From Golden Knights to Sharks : Y:2020-RND:2-ANH, Y:2020-RND:2-FLA, Y:2020-RND:2-VGK, Y:2021-RND:2-LAK, Y:2021-RND:2-VGK.<br />
[2020-07-11 9:38:08 PM] - TRADE : From Sharks to Flyers : Y:2020-RND:7-SJS, Y:2021-RND:7-SJS, Y:2022-RND:7-SJS, Y:2023-RND:7-SJS, Y:2024-RND:7-SJS.<br />
[2020-07-11 9:38:08 PM] - TRADE : From Flyers to Sharks : Mats Zuccarello (69), Sven Baertschi (66).<br />
[2020-07-11 9:37:20 PM] - TRADE : From Sabres to Hurricanes : Brent Seabrook (71).<br />
[2020-07-11 9:37:20 PM] - TRADE : From Hurricanes to Sabres : Y:2020-RND:4-EDM.<br />
[2020-07-11 9:36:49 PM] - TRADE : From Rangers to Coyotes : Jesper Fast (69), Y:2021-RND:5-VGK.<br />
[2020-07-11 9:36:49 PM] - TRADE : From Coyotes to Rangers : Y:2020-RND:1-ARI, Y:2020-RND:2-ARI.<br />
[2020-07-11 9:36:10 PM] - TRADE : From Flames to Canadiens : Y:2020-RND:2-NYR.<br />
[2020-07-11 9:35:46 PM] - TRADE : From Golden Knights to Hurricanes : Y:2020-RND:3-DET, Y:2020-RND:3-VGK.<br />
[2020-07-11 9:35:46 PM] - TRADE : From Hurricanes to Golden Knights : Y:2020-RND:2-FLA.<br />
[2020-07-11 9:34:25 PM] - TRADE : From Canadiens to Ducks : Artemi Panarin (78), Y:2022-RND:3-MTL.<br />
[2020-07-11 9:34:25 PM] - TRADE : From Ducks to Canadiens : Tucker Poolman (64), Travis Zajac (70), Grigori Denisenko (P), Moritz Seider (P), Y:2020-RND:1-OTT, Y:2021-RND:1-ANH.<br />
[2020-07-11 9:33:25 PM] - TRADE : From Flyers to Coyotes : Patrick Marleau (69).<br />
[2020-07-11 9:33:25 PM] - TRADE : From Coyotes to Flyers : Y:2021-RND:7-ARI.<br />
[2020-07-11 9:32:52 PM] - TRADE : From Flyers to Oilers : Jake Gardiner (66).<br />
[2020-07-11 9:32:52 PM] - TRADE : From Oilers to Flyers : Patrick Marleau (69).<br />
[2020-07-11 9:32:22 PM] - TRADE : From Kings to Oilers : $500,000 (Money), Y:2020-RND:7-LAK.<br />
[2020-07-11 9:32:22 PM] - TRADE : From Oilers to Kings : Ron Hainsey (73).<br />
[2020-07-11 9:30:17 PM] - TRADE : From Hurricanes to Ducks : Robin Salo (P), Y:2021-RND:6-ANH, Y:2022-RND:2-CAR.<br />
[2020-07-11 9:30:17 PM] - TRADE : From Ducks to Hurricanes : Alex Chiasson (67), Alexander Volkov (P), Mitchell Stephens (P).<br />
[2020-07-11 9:28:29 PM] - TRADE : From Hurricanes to Kings : Kyle Clifford (63).<br />
[2020-07-11 9:28:29 PM] - TRADE : From Kings to Hurricanes : Y:2021-RND:7-LAK.<br />
[2020-07-01 4:32:22 PM] - Rhett Gardner was added to Oilers.<br />
[2020-07-01 4:32:14 PM] - Givani Smith was added to Oilers.<br />
[2020-07-01 4:31:22 PM] - Givani Smith has been deleted from Oilers.<br />
[2020-07-01 4:31:08 PM] - Rhett Gardner has been deleted from Oilers.<br />
[2020-07-01 4:17:46 PM] - Quinn Hughes has been deleted from Blue Jackets.<br />
[2020-07-01 2:30:08 PM] - Carl Soderberg was added to Panthers.<br />
[2020-07-01 2:29:36 PM] - Derek Grant was added to Sabres.<br />
[2020-07-01 2:29:11 PM] - Luca Sbisa was added to Lightning.<br />
[2020-07-01 2:28:42 PM] - Nate Thompson was added to Coyotes.<br />
[2020-07-01 2:17:25 PM] - Carsen Twarynski has been deleted from Jets.<br />
[2020-07-01 2:17:09 PM] - Nicolas Aube-Kubel has been deleted from Blue Jackets.<br />
[2020-07-01 2:16:54 PM] - Thatcher Demko has been deleted from Blue Jackets.<br />
[2020-07-01 2:16:47 PM] - Jansen Harkins has been deleted from Jets.<br />
[2020-07-01 2:16:37 PM] - Nicolas Aube-Kubel was added to Blue Jackets.<br />
[2020-07-01 2:15:54 PM] - Thatcher Demko was added to Blue Jackets.<br />
[2020-07-01 2:15:46 PM] - Quinn Hughes was added to Blue Jackets.<br />
[2020-07-01 2:15:37 PM] - Carsen Twarynski was added to Jets.<br />
[2020-07-01 2:15:20 PM] - Jansen Harkins was added to Jets.<br />
[2020-07-01 2:09:25 PM] - TRADE : From Penguins to Oilers : Trevor van Riemsdyk (64).<br />
[2020-07-01 2:09:25 PM] - TRADE : From Oilers to Penguins : Nick Foligno (73).<br />
[2020-07-01 2:08:59 PM] - TRADE : From Flames to Bruins : Y:2020-RND:4-OTT.<br />
[2020-07-01 2:08:59 PM] - TRADE : From Bruins to Flames : Y:2020-RND:5-CHI, Y:2020-RND:5-NJD.<br />
[2020-07-01 2:07:59 PM] - TRADE : From Sabres to Ducks : Y:2021-RND:7-BUF.<br />
[2020-07-01 2:07:59 PM] - TRADE : From Ducks to Sabres : Mattias Janmark (66).<br />
[2020-07-01 2:07:08 PM] - TRADE : From Canadiens to Lightning : John Klingberg (69).<br />
[2020-07-01 2:07:08 PM] - TRADE : From Lightning to Canadiens : Kevin Connauton (64), Vladimir Sobotka (64), Y:2021-RND:1-TBL.<br />
[2020-07-01 2:06:19 PM] - TRADE : From Canadiens to Stars : Nikita Zadorov (70).<br />
[2020-07-01 2:06:19 PM] - TRADE : From Stars to Canadiens : Y:2020-RND:3-DAL, Y:2021-RND:2-DAL.<br />
[2020-07-01 2:05:03 PM] - TRADE : From Blackhawks to Flyers : Tyler Ennis (69).<br />
[2020-07-01 2:05:03 PM] - TRADE : From Flyers to Blackhawks : Marc Del Gaizo (P).<br />
[2020-07-01 2:04:25 PM] - TRADE : From Sabres to Hurricanes : Mikael Backlund (72).<br />
[2020-07-01 2:04:25 PM] - TRADE : From Hurricanes to Sabres : Y:2020-RND:5-PIT.<br />
[2020-07-01 2:03:58 PM] - TRADE : From Ducks to Hurricanes : Caleb Jones (63), Ryan Murray (69), Y:2020-RND:2-BUF, Y:2020-RND:2-FLA, Y:2020-RND:4-CHI, Y:2020-RND:4-EDM, Y:2020-RND:4-WPG.<br />
[2020-07-01 2:03:58 PM] - TRADE : From Hurricanes to Ducks : Joakim Ryan (64), Tucker Poolman (64), Lucas Johansen (P), Y:2020-RND:1-TBL, Y:2022-RND:3-TBL.<br />
[2020-07-01 2:02:33 PM] - TRADE : From Ducks to Oilers : Dylan Samberg (P).<br />
[2020-07-01 2:02:33 PM] - TRADE : From Oilers to Ducks : Josh Archibald (66).<br />
[2020-07-01 2:01:58 PM] - TRADE : From Panthers to Flyers : Mats Zuccarello (69).<br />
[2020-07-01 2:01:58 PM] - TRADE : From Flyers to Panthers : Y:2022-RND:5-PHL.<br />
[2020-07-01 2:00:49 PM] - TRADE : From Kings to Coyotes : Zack Kassian (68).<br />
[2020-07-01 2:00:49 PM] - TRADE : From Coyotes to Kings : Y:2020-RND:6-ARI.<br />
[2020-07-01 2:00:10 PM] - TRADE : From Lightning to Flyers : Y:2023-RND:7-TBL.<br />
[2020-07-01 2:00:10 PM] - TRADE : From Flyers to Lightning : Marco Scandella (68).<br />
[2020-07-01 1:59:08 PM] - TRADE : From Flames to Flyers : Viktor Arvidsson (68).<br />
[2020-07-01 1:59:08 PM] - TRADE : From Flyers to Flames : Y:2020-RND:1-PHL.<br />
[2020-06-24 9:22:09 PM] - Oliver Kylington was added to Hurricanes.<br />
[2020-06-24 9:21:49 PM] - Christian Djoos was added to Hurricanes.<br />
[2020-06-24 9:20:49 PM] - Drake Caggiula was added to Hurricanes.<br />
[2020-06-24 9:19:15 PM] - Markus Nutivaara was added to Devils.<br />
[2020-06-24 9:18:56 PM] - Jimmy Vesey was added to Devils.<br />
[2020-06-24 9:18:31 PM] - Darnell Nurse was added to Devils.<br />
[2020-06-24 9:16:27 PM] - Gemel Smith was added to Devils.<br />
[2020-06-24 9:15:49 PM] - Brett Connolly was added to Flyers.<br />
[2020-06-24 9:15:28 PM] - Andrew Copp was added to Blue Jackets.<br />
[2020-06-24 9:15:11 PM] - Troy Stecher was added to Blue Jackets.<br />
[2020-06-24 9:14:44 PM] - Sean Kuraly was added to Maple Leafs.<br />
[2020-06-24 9:14:02 PM] - Matthew Peca was added to Capitals.<br />
[2020-06-24 9:13:41 PM] - Kevin Gravel was added to Capitals.<br />
[2020-06-24 9:13:27 PM] - Spencer Martin was added to Capitals.<br />
[2020-06-24 9:13:06 PM] - Michael Chaput was added to Capitals.<br />
[2020-06-24 9:12:41 PM] - J.T. Compher was added to Sabres.<br />
[2020-06-24 9:12:27 PM] - Zemgus Girgensons was added to Sabres.<br />
[2020-06-24 9:12:14 PM] - Rickard Rakell was added to Sabres.<br />
[2020-06-24 9:11:50 PM] - Pavel Buchnevich was added to Sabres.<br />
[2020-06-24 9:11:36 PM] - Linus Ullmark was added to Sabres.<br />
[2020-06-24 9:11:12 PM] - Remi Elie was added to Sabres.<br />
[2020-06-24 9:10:00 PM] - Brayden Point was added to Red Wings.<br />
[2020-06-24 9:03:31 PM] - Patrik Laine was added to Red Wings.<br />
[2020-06-24 9:02:48 PM] - Blaine Byron was added to Red Wings.<br />
[2020-06-24 9:02:24 PM] - Jake McCabe was added to Red Wings.<br />
[2020-06-24 9:01:45 PM] - Alexandre Fortin was added to Penguins.<br />
[2020-06-24 9:01:28 PM] - Nick Cousins was added to Penguins.<br />
[2020-06-24 8:57:25 PM] - Cody Ceci was added to Coyotes.<br />
[2020-06-24 8:57:01 PM] - Tyler Bertuzzi was added to Ducks.<br />
[2020-06-24 8:56:44 PM] - Martin Marincin was added to Ducks.<br />
[2020-06-24 8:56:28 PM] - Tristan Jarry was added to Ducks.<br />
[2020-06-24 8:56:08 PM] - Mark Jankowski was added to Hurricanes.<br />
[2020-06-24 8:55:01 PM] - TRADE : From Penguins to Blackhawks : Andy Greene (73), Y:2020-RND:4-TOR.<br />
[2020-06-24 8:55:01 PM] - TRADE : From Blackhawks to Penguins : Jordan Oesterle (65), Austin Czarnik (66), Y:2020-RND:2-CHI.<br />
[2020-06-24 8:54:23 PM] - TRADE : From Canadiens to Flames : Ben Bishop (80).<br />
[2020-06-24 8:54:23 PM] - TRADE : From Flames to Canadiens : Y:2021-RND:4-CGY.<br />
[2020-06-24 8:53:18 PM] - TRADE : From Golden Knights to Kings : Y:2020-RND:3-CLB, Y:2020-RND:3-VAN, Y:2022-RND:6-VGK.<br />
[2020-06-24 8:53:18 PM] - TRADE : From Kings to Golden Knights : Nate Schmidt (70).<br />
[2020-06-24 8:52:36 PM] - TRADE : From Golden Knights to Ducks : Y:2020-RND:4-WPG.<br />
[2020-06-24 8:52:36 PM] - TRADE : From Ducks to Golden Knights : Jay Beagle (66).<br />
[2020-06-24 8:52:21 PM] - TRADE : From Golden Knights to Red Wings : Y:2020-RND:3-EDM, Y:2020-RND:4-FLA, Y:2021-RND:5-BOS.<br />
[2020-06-24 8:52:21 PM] - TRADE : From Red Wings to Golden Knights : Calvin de Haan (72).<br />
[2020-06-24 8:51:41 PM] - TRADE : From Panthers to Flyers : Brian Dumoulin (69), Ivan Lodnia (P), Yakov Trenin (P).<br />
[2020-06-24 8:51:41 PM] - TRADE : From Flyers to Panthers : Max Domi (71).<br />
[2020-06-24 8:50:59 PM] - TRADE : From Hurricanes to Flyers : Y:2020-RND:7-NYR.<br />
[2020-06-24 8:50:59 PM] - TRADE : From Flyers to Hurricanes : Andrew Shaw (66).<br />
[2020-06-24 8:50:29 PM] - TRADE : From Oilers to Flyers : Y:2020-RND:7-DAL, Y:2020-RND:7-MIN, Y:2020-RND:7-VAN.<br />
[2020-06-24 8:50:29 PM] - TRADE : From Flyers to Oilers : Ilya Kovalchuk (70), Y:2020-RND:6-NYI.<br />
[2020-06-24 8:49:47 PM] - TRADE : From Ducks to Flyers : Y:2020-RND:7-BUF.<br />
[2020-06-24 8:49:47 PM] - TRADE : From Flyers to Ducks : Justin Williams (70).<br />
[2020-06-24 8:49:18 PM] - TRADE : From Oilers to Devils : Anders Nilsson (69).<br />
[2020-06-24 8:49:18 PM] - TRADE : From Devils to Oilers : Y:2020-RND:4-NJD, Y:2021-RND:2-NJD.<br />
[2020-06-24 8:47:15 PM] - TRADE : From Ducks to Hurricanes : Mike Smith (69), Mark Jankowski (63), German Rubtsov (P).<br />
[2020-06-24 8:47:15 PM] - TRADE : From Hurricanes to Ducks : Nathan Gerbe (64), Jeremy Roy (P), Shamil Shmakov (P), Y:2022-RND:5-TBL.<br />
[2020-06-24 8:45:57 PM] - TRADE : From Red Wings to Hurricanes : Y:2021-RND:4-TBL.<br />
[2020-06-24 8:45:43 PM] - TRADE : From Hurricanes to Red Wings : Y:2021-RND:3-TBL.<br />
[2020-06-24 8:45:17 PM] - TRADE : From Kings to Canucks : Yanni Gourde (68).<br />
[2020-06-24 8:45:17 PM] - TRADE : From Canucks to Kings : Y:2020-RND:3-ARI, Y:2020-RND:4-NYI.<br />
[2020-06-24 8:44:46 PM] - TRADE : From Kings to Maple Leafs : Jaden Schwartz (73), Y:2020-RND:2-LAK, Y:2021-RND:4-LAK.<br />
[2020-06-24 8:44:46 PM] - TRADE : From Maple Leafs to Kings : Y:2020-RND:1-ANH, Y:2020-RND:3-WPG.<br />
[2020-06-24 8:21:31 PM] - Kenny Agostino was added to Ducks.<br />
[2020-06-24 8:20:41 PM] - Mikael Granlund was added to Oilers.<br />
[2020-06-24 8:20:16 PM] - Tanner Kero was added to Blues.<br />
[2020-06-24 8:19:52 PM] - Sebastian Aho was added to Blackhawks.<br />
[2020-06-24 8:19:30 PM] - Kevin Rooney was added to Blackhawks.<br />
[2020-06-24 8:19:09 PM] - Vladislav Namestnikov was added to Blackhawks.<br />
[2020-06-24 8:18:30 PM] - Mark Alt was added to Avalanche.<br />
[2020-06-24 8:18:16 PM] - Julian Melchiori was added to Avalanche.<br />
[2020-06-24 8:18:02 PM] - Chris Driedger was added to Avalanche.<br />
[2020-06-24 8:17:49 PM] - Brock McGinn was added to Avalanche.<br />
[2020-06-24 8:17:35 PM] - Travis Boyd was added to Avalanche.<br />
[2020-06-24 8:17:05 PM] - Mike Vecchione was added to Avalanche.<br />
[2020-06-24 8:16:37 PM] - Lucas Wallmark was added to Avalanche.<br />
[2020-06-24 8:16:15 PM] - Keegan Lowe was added to Avalanche.<br />
[2020-06-24 8:14:08 PM] - Jonathan Toews was added to Devils.<br />
[2020-06-24 8:13:45 PM] - Thomas Greiss was added to Sabres.<br />
[2020-06-24 8:12:30 PM] - TRADE : From Sabres to Stars : Max Pacioretty (74).<br />
[2020-06-24 8:12:30 PM] - TRADE : From Stars to Sabres : $7,000,000 (Money).<br />
[2020-06-21 8:21:00 PM] - Josh Archibald was added to Oilers.<br />
[2020-06-21 8:18:00 PM] - Par Lindholm was added to Bruins.<br />
[2020-06-21 11:33:58 AM] - Anthony Mantha was added to Canadiens.<br />
[2020-06-21 11:33:27 AM] - Mike Matheson was added to Maple Leafs.<br />
[2020-06-21 11:32:48 AM] - Tyler Motte was added to Lightning.<br />
[2020-06-21 11:32:27 AM] - Evan Rodrigues was added to Penguins.<br />
[2020-06-21 11:31:58 AM] - Radek Faksa was added to Maple Leafs.<br />
[2020-06-21 11:31:37 AM] - Christian Dvorak was added to Maple Leafs.<br />
[2020-06-21 11:31:12 AM] - Andrei Vasilevskiy was added to Senators.<br />
[2020-06-21 11:30:41 AM] - Jujhar Khaira was added to Capitals.<br />
[2020-06-21 11:30:22 AM] - Pavel Zacha was added to Capitals.<br />
[2020-06-21 11:29:49 AM] - Alex Nedeljkovic was added to Canadiens.<br />
[2020-06-21 11:29:27 AM] - Connor Murphy was added to Canadiens.<br />
[2020-06-21 11:29:11 AM] - Jonny Brodzinski was added to Canadiens.<br />
[2020-06-21 11:28:49 AM] - Kalle Kossila was added to Canadiens.<br />
[2020-06-21 11:28:34 AM] - Michael Kapla was added to Canadiens.<br />
[2020-06-21 11:28:12 AM] - Ivan Provorov was added to Canadiens.<br />
[2020-06-21 11:27:54 AM] - Vladislav Kamenev was added to Canadiens.<br />
[2020-06-21 11:26:05 AM] - Ryan Hartman was added to Hurricanes.<br />
[2020-06-21 11:25:44 AM] - Jakob Chychrun was added to Hurricanes.<br />
[2020-06-21 11:25:27 AM] - Rasmus Andersson was added to Hurricanes.<br />
[2020-06-21 11:25:04 AM] - Joel Eriksson Ek was added to Flyers.<br />
[2020-06-21 11:24:48 AM] - Mark Pysyk was added to Flyers.<br />
[2020-06-21 11:24:34 AM] - Sven Baertschi was added to Flyers.<br />
[2020-06-21 11:24:11 AM] - Ryan Strome was added to Flyers.<br />
[2020-06-21 11:23:56 AM] - Brandon Saad was added to Flyers.<br />
[2020-06-21 11:22:19 AM] - Anthony Duclair was added to Blue Jackets.<br />
[2020-06-21 11:19:41 AM] - Seth Jones was added to Kings.<br />
[2020-06-21 11:19:29 AM] - Miles Wood was added to Kings.<br />
[2020-06-21 11:19:13 AM] - Nathan MacKinnon was added to Kings.<br />
[2020-06-21 11:18:47 AM] - Ryan Nugent-Hopkins was added to Oilers.<br />
[2020-06-21 11:18:20 AM] - Jamie Oleksiak was added to Oilers.<br />
[2020-06-21 11:18:05 AM] - Nick Schmaltz was added to Oilers.<br />
[2020-06-21 11:17:45 AM] - Eric Robinson was added to Oilers.<br />
[2020-06-21 11:17:03 AM] - Auston Matthews was added to Canucks.<br />
[2020-06-21 11:15:47 AM] - Mikko Rantanen was added to Canucks.<br />
[2020-06-21 11:14:49 AM] - Josh Morrissey was added to Ducks.<br />
[2020-06-21 11:14:27 AM] - Jake Guentzel was added to Ducks.<br />
[2020-06-21 11:12:36 AM] - Frederik Gauthier was added to Kings.<br />
[2020-06-21 11:11:01 AM] - Vitek Vanecek was added to Jets.<br />
[2020-06-21 11:10:32 AM] - Scott Wilson was added to Jets.<br />
[2020-06-21 11:10:12 AM] - Juuse Saros was added to Jets.<br />
[2020-06-21 11:09:55 AM] - Juuso Riikola was added to Jets.<br />
[2020-06-21 11:08:59 AM] - Matthew Tkachuk was added to Jets.<br />
[2020-06-21 11:08:41 AM] - Barclay Goodrow was added to Jets.<br />
[2020-06-21 11:07:59 AM] - Jean-Gabriel Pageau was added to Jets.<br />
[2020-06-21 11:07:31 AM] - Mitch Marner was added to Kings.<br />
[2020-06-21 11:06:48 AM] - Justin Faulk was added to Blackhawks.<br />
[2020-06-21 11:06:27 AM] - Zach Werenski was added to Blackhawks.<br />
[2020-06-21 11:03:03 AM] - Marc Staal was added to Red Wings.<br />
[2020-06-21 11:02:22 AM] - Blake Wheeler was added to Oilers.<br />
[2020-06-21 11:01:47 AM] - Christian Folin was added to Devils.<br />
[2020-06-21 11:01:03 AM] - Michal Kempny was added to Devils.<br />
[2020-06-21 10:59:50 AM] - Sam Gagner was added to Penguins.<br />
[2020-06-21 10:59:12 AM] - Blake Coleman was added to Bruins.<br />
[2020-06-21 10:55:45 AM] - Matt Calvert was added to Blackhawks.<br />
[2020-06-21 10:55:22 AM] - Tyler Johnson was added to Blackhawks.<br />
[2020-06-21 10:54:48 AM] - Brad Marchand was added to Bruins.<br />
[2020-06-21 10:54:11 AM] - Brian Elliott was added to Lightning.<br />
[2020-06-21 10:53:32 AM] - Luke Schenn was added to Ducks.<br />
[2020-06-21 10:52:52 AM] - Derick Brassard was added to Lightning.<br />
[2020-06-21 10:52:04 AM] - Devan Dubnyk was added to Kings.<br />
[2020-06-21 10:51:30 AM] - Sami Vatanen was added to Jets.<br />
[2020-06-21 10:50:55 AM] - Brayden Schenn was added to Ducks.<br />
[2020-06-21 10:50:24 AM] - Max Pacioretty was added to Sabres.<br />
[2020-06-21 10:50:08 AM] - Anze Kopitar was added to Sabres.<br />
[2020-06-21 10:49:04 AM] - Nick Bonino was added to Canucks.<br />
[2020-06-21 10:47:46 AM] - Lars Eller was added to Oilers.<br />
[2020-06-21 10:47:06 AM] - Mikko Koskinen was added to Flyers.<br />
[2020-06-21 10:37:49 AM] - Jonathan Marchessault was added to Stars.<br />
[2020-06-21 10:28:27 AM] - Danny O'Regan was added to Panthers.<br />
[2020-06-21 10:26:17 AM] - Elvis Merzlikins was added to Oilers.<br />
[2020-06-21 10:10:43 AM] - Max Comtois was added to Flyers.<br />
[2020-06-21 9:39:14 AM] - Alex Petrovic was added to Canadiens.<br />
[2020-06-21 9:32:27 AM] - Joe Gambardella was added to Blues.<br />
[2020-06-21 9:30:23 AM] - Sammy Blais was added to Blues.<br />
[2020-06-21 9:11:01 AM] - Michael Sgarbossa was added to Avalanche.<br />
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
<?php include "Footer.php";?>
