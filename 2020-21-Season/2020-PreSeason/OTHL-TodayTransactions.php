<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Today Transactions</title>
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
<span style="color:Olive">[2020-07-14 3:15:19 PM] - Maple Leafs hired Joel Quenneville for $5,000,000 for 5 year(s).</span><br />
<span style="color:Olive">[2020-07-14 3:14:55 PM] - Phantoms hired Tim Army for $725,000 for 4 year(s).</span><br />
<span style="color:Olive">[2020-07-14 3:14:23 PM] - Thunderbirds hired Chris Taylor for $700,000 for 3 year(s).</span><br />
<span style="color:Olive">[2020-07-14 3:12:57 PM] - Stars hired Gerald Gallant for $3,250,000 for 2 year(s).</span><br />
[2020-07-14 3:09:36 PM] - Darren Helm signed with Panthers for $3,750,000 for 3 year(s) / Option : No Trade & Signing Bonus of $2,812,500.<br />
[2020-07-14 3:09:36 PM] - Darren Helm average salary was modified from $525,000 to $3,750,000.<br />
<span style="color:#FF8000">[2020-07-14 3:09:36 PM] - Darren Helm was added to Panthers.</span><br />
[2020-07-14 3:09:11 PM] - Ben Bishop signed with Flames for $9,000,000 for 6 year(s) / Option : No Trade & Signing Bonus of $13,500,000.<br />
[2020-07-14 3:09:11 PM] - Ben Bishop average salary was modified from $525,000 to $9,000,000.<br />
<span style="color:#FF8000">[2020-07-14 3:09:11 PM] - Ben Bishop was added to Flames.</span><br />
[2020-07-14 3:08:47 PM] - Carl Hagelin signed with Blackhawks for $3,145,000 for 3 year(s) / Option : No Trade & Signing Bonus of $2,358,750.<br />
[2020-07-14 3:08:47 PM] - Carl Hagelin average salary was modified from $525,000 to $3,145,000.<br />
<span style="color:#FF8000">[2020-07-14 3:08:47 PM] - Carl Hagelin was added to Blackhawks.</span><br />
<span style="color:#FF8000">[2020-07-14 3:06:42 PM] - TRADE : From Sharks to Hurricanes : Phil Kessel (71).</span><br />
<span style="color:#FF8000">[2020-07-14 3:06:42 PM] - TRADE : From Hurricanes to Sharks : Y:2021-RND:6-BUF.</span><br />
<span style="color:#FF8000">[2020-07-14 3:05:54 PM] - Michael McLeod has been deleted from Canucks.</span><br />
<span style="color:#FF8000">[2020-07-14 3:05:46 PM] - Joel Farabee has been deleted from Canucks.</span><br />
<span style="color:#FF8000">[2020-07-14 3:05:40 PM] - Dylan Gambrell has been deleted from Capitals.</span><br />
<span style="color:#FF8000">[2020-07-14 3:05:33 PM] - Nikita Gusev has been deleted from Capitals.</span><br />
<span style="color:#FF8000">[2020-07-14 3:05:21 PM] - Lukas Vejdemo has been deleted from Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 3:05:15 PM] - Janne Kuokkanen has been deleted from Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 3:05:09 PM] - Denis Guryanov has been deleted from Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 3:05:02 PM] - Cale Fleury has been deleted from Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 3:04:55 PM] - Alexandre Texier has been deleted from Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 3:04:44 PM] - Adam Boqvist has been deleted from Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 3:04:34 PM] - Chase Priskie has been deleted from Canadiens.</span><br />
<span style="color:#FF8000">[2020-07-14 3:04:23 PM] - Matthew Phillips has been deleted from Canadiens.</span><br />
<span style="color:#FF8000">[2020-07-14 3:04:15 PM] - Beck Malenstyn has been deleted from Jets.</span><br />
<span style="color:#FF8000">[2020-07-14 3:04:08 PM] - Kale Clague has been deleted from Jets.</span><br />
<span style="color:#FF8000">[2020-07-14 3:04:02 PM] - David Kase has been deleted from Jets.</span><br />
<span style="color:#FF8000">[2020-07-14 3:03:55 PM] - Eetu Luostarinen has been deleted from Jets.</span><br />
<span style="color:#FF8000">[2020-07-14 3:03:49 PM] - Carson Soucy has been deleted from Avalanche.</span><br />
<span style="color:#FF8000">[2020-07-14 3:03:29 PM] - Andreas Englund has been deleted from Avalanche.</span><br />
<span style="color:#FF8000">[2020-07-14 3:03:22 PM] - John Marino has been deleted from Rangers.</span><br />
<span style="color:#FF8000">[2020-07-14 3:03:14 PM] - Dmytro Timashov has been deleted from Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 3:03:08 PM] - Klim Kostin has been deleted from Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 3:03:02 PM] - Gilles Senn has been deleted from Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 3:02:46 PM] - Gilles Senn was added to Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 3:02:36 PM] - Klim Kostin was added to Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 3:02:30 PM] - Dmytro Timashov was added to Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 3:02:13 PM] - John Marino was added to Rangers.</span><br />
<span style="color:#FF8000">[2020-07-14 3:01:39 PM] - Beck Malenstyn was added to Jets.</span><br />
<span style="color:#FF8000">[2020-07-14 3:01:34 PM] - Kale Clague was added to Jets.</span><br />
<span style="color:#FF8000">[2020-07-14 3:01:27 PM] - David Kase was added to Jets.</span><br />
<span style="color:#FF8000">[2020-07-14 3:01:20 PM] - Eetu Luostarinen was added to Jets.</span><br />
<span style="color:#FF8000">[2020-07-14 3:00:58 PM] - Andreas Englund was added to Avalanche.</span><br />
<span style="color:#FF8000">[2020-07-14 3:00:36 PM] - Carson Soucy was added to Avalanche.</span><br />
<span style="color:#FF8000">[2020-07-14 3:00:11 PM] - Matthew Phillips was added to Canadiens.</span><br />
<span style="color:#FF8000">[2020-07-14 3:00:04 PM] - Chase Priskie was added to Canadiens.</span><br />
<span style="color:#FF8000">[2020-07-14 2:59:44 PM] - Lukas Vejdemo was added to Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 2:59:37 PM] - Janne Kuokkanen was added to Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 2:59:29 PM] - Denis Gurianov was added to Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 2:59:23 PM] - Cale Fleury was added to Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 2:59:17 PM] - Alexandre Texier was added to Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 2:59:12 PM] - Adam Boqvist was added to Blues.</span><br />
<span style="color:#FF8000">[2020-07-14 2:58:56 PM] - Dylan Gambrell was added to Capitals.</span><br />
<span style="color:#FF8000">[2020-07-14 2:58:50 PM] - Nikita Gusev was added to Capitals.</span><br />
<span style="color:#FF8000">[2020-07-14 2:58:32 PM] - Michael McLeod was added to Canucks.</span><br />
<span style="color:#FF8000">[2020-07-14 2:58:25 PM] - Joel Farabee was added to Canucks.</span><br />
[2020-07-14 2:54:21 PM] - Eetu Laurikainen was erased.<br />
[2020-07-14 2:45:29 PM] - Cody McLeod was erased.<br />
<span style="color:#FF8000">[2020-07-14 2:42:22 PM] - Mitchell Dempsey has been deleted from Penguins.</span><br />
<span style="color:#FF8000">[2020-07-14 2:42:16 PM] - Jared Fiegl has been deleted from Penguins.</span><br />
<span style="color:#FF8000">[2020-07-14 2:42:08 PM] - Matt Brassard has been deleted from Maple Leafs.</span><br />
<span style="color:#FF8000">[2020-07-14 2:42:00 PM] - Brendan De Jong has been deleted from Maple Leafs.</span><br />
<span style="color:#FF8000">[2020-07-14 2:41:48 PM] - Alexander Kadeikin has been deleted from Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 2:41:39 PM] - Jeremy Gregoire has been deleted from Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 2:41:32 PM] - Henri Ikonen has been deleted from Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 2:41:23 PM] - Grant Besse has been deleted from Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 2:41:17 PM] - Martin Reway has been deleted from Senators.</span><br />
<span style="color:#FF8000">[2020-07-14 2:41:12 PM] - Brandon Gormley has been deleted from Senators.</span><br />
<span style="color:#FF8000">[2020-07-11 10:36:09 PM] - Libor Hajek has been deleted from Coyotes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:35:57 PM] - Ethan Bear has been deleted from Coyotes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:35:50 PM] - Erik Brannstrom has been deleted from Panthers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:35:16 PM] - Alexander Nylander has been deleted from Panthers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:35:10 PM] - Martin Necas has been deleted from Panthers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:35:03 PM] - Michael Anderson has been deleted from Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:34:55 PM] - Alexander Volkov has been deleted from Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:34:36 PM] - Cale Makar has been deleted from Islanders.</span><br />
<span style="color:#FF8000">[2020-07-11 10:34:23 PM] - Jesper Boqvist has been deleted from Blackhawks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:34:02 PM] - Cale Makar was added to Islanders.</span><br />
<span style="color:#FF8000">[2020-07-11 10:33:49 PM] - Jesper Boqvist was added to Blackhawks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:33:27 PM] - Libor Hajek was added to Coyotes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:33:22 PM] - Ethan Bear was added to Coyotes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:33:11 PM] - Erik Brannstrom was added to Panthers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:32:57 PM] - Alexander Nylander was added to Panthers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:32:49 PM] - Martin Necas was added to Panthers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:32:34 PM] - Michael Anderson was added to Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:32:23 PM] - Alexander Volkov was added to Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:24:19 PM] - Nicolas Roy has been deleted from Kings.</span><br />
<span style="color:#FF8000">[2020-07-11 10:24:10 PM] - Pierre Engvall has been deleted from Kings.</span><br />
<span style="color:#FF8000">[2020-07-11 10:24:04 PM] - Yakov Trenin has been deleted from Flyers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:23:58 PM] - Emil Bemstrom has been deleted from Flyers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:23:51 PM] - Filip Zadina has been deleted from Flyers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:23:45 PM] - Andrew Peeke has been deleted from Flyers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:23:28 PM] - Cayden Primeau has been deleted from Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:23:21 PM] - German Rubtsov has been deleted from Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:23:13 PM] - Nick Suzuki has been deleted from Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:23:05 PM] - Kaapo Kakko has been deleted from Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:23:00 PM] - Jack Hughes has been deleted from Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:22:53 PM] - Nikolay Prokhorkin has been deleted from Canadiens.</span><br />
<span style="color:#FF8000">[2020-07-11 10:22:46 PM] - Ilya Samsonov has been deleted from Sabres.</span><br />
<span style="color:#FF8000">[2020-07-11 10:22:25 PM] - Dante Fabbro has been deleted from Penguins.</span><br />
<span style="color:#FF8000">[2020-07-11 10:22:18 PM] - Niko Mikkola has been deleted from Devils.</span><br />
<span style="color:#FF8000">[2020-07-11 10:22:11 PM] - Lucas Carlsson has been deleted from Devils.</span><br />
<span style="color:#FF8000">[2020-07-11 10:22:04 PM] - Morgan Frost has been deleted from Predators.</span><br />
<span style="color:#FF8000">[2020-07-11 10:21:58 PM] - Jean-Christophe Beaudin has been deleted from Predators.</span><br />
<span style="color:#FF8000">[2020-07-11 10:21:50 PM] - Dominik Kubalik has been deleted from Predators.</span><br />
<span style="color:#FF8000">[2020-07-11 10:21:42 PM] - Brandon Gignac has been deleted from Predators.</span><br />
<span style="color:#FF8000">[2020-07-11 10:21:30 PM] - Rasmus Sandin has been deleted from Ducks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:21:17 PM] - Noah Dobson has been deleted from Ducks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:21:10 PM] - Mitchell Stephens has been deleted from Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:20:57 PM] - Kevin Stenlund has been deleted from Ducks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:20:49 PM] - Jordan Kyrou has been deleted from Ducks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:20:40 PM] - Rasmus Asplund has been deleted from Flames.</span><br />
<span style="color:#FF8000">[2020-07-11 10:20:30 PM] - Nicolas Hague has been deleted from Maple Leafs.</span><br />
<span style="color:#FF8000">[2020-07-11 10:20:23 PM] - Cody Glass has been deleted from Maple Leafs.</span><br />
<span style="color:#FF8000">[2020-07-11 10:20:10 PM] - Nic Hague was added to Maple Leafs.</span><br />
<span style="color:#FF8000">[2020-07-11 10:19:56 PM] - Cody Glass was added to Maple Leafs.</span><br />
<span style="color:#FF8000">[2020-07-11 10:19:44 PM] - Rasmus Asplund was added to Flames.</span><br />
<span style="color:#FF8000">[2020-07-11 10:19:34 PM] - Rasmus Sandin was added to Ducks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:19:25 PM] - Noah Dobson was added to Ducks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:19:19 PM] - Kevin Stenlund was added to Ducks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:19:13 PM] - Jordan Kyrou was added to Ducks.</span><br />
<span style="color:#FF8000">[2020-07-11 10:18:50 PM] - Niko Mikkola was added to Devils.</span><br />
<span style="color:#FF8000">[2020-07-11 10:18:45 PM] - Lucas Carlsson was added to Devils.</span><br />
<span style="color:#FF8000">[2020-07-11 10:18:35 PM] - Brandon Gignac was added to Predators.</span><br />
<span style="color:#FF8000">[2020-07-11 10:18:29 PM] - Dominik Kubalik was added to Predators.</span><br />
<span style="color:#FF8000">[2020-07-11 10:18:23 PM] - J.C. Beaudin was added to Predators.</span><br />
<span style="color:#FF8000">[2020-07-11 10:18:17 PM] - Morgan Frost was added to Predators.</span><br />
<span style="color:#FF8000">[2020-07-11 10:18:04 PM] - Dante Fabbro was added to Penguins.</span><br />
<span style="color:#FF8000">[2020-07-11 10:17:47 PM] - Ilya Samsonov was added to Sabres.</span><br />
<span style="color:#FF8000">[2020-07-11 10:17:34 PM] - Cayden Primeau was added to Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:17:27 PM] - German Rubtsov was added to Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:17:21 PM] - Nick Suzuki was added to Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:17:13 PM] - Kaapo Kakko was added to Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:17:07 PM] - Jack Hughes was added to Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:16:51 PM] - Yakov Trenin was added to Flyers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:16:44 PM] - Emil Bemstrom was added to Flyers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:16:36 PM] - Filip Zadina was added to Flyers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:16:28 PM] - Andrew Peeke was added to Flyers.</span><br />
<span style="color:#FF8000">[2020-07-11 10:16:09 PM] - Nicolas Roy was added to Kings.</span><br />
<span style="color:#FF8000">[2020-07-11 10:15:54 PM] - Pierre Engvall was added to Kings.</span><br />
<span style="color:#FF8000">[2020-07-11 10:15:08 PM] - Mitchell Stephens was added to Hurricanes.</span><br />
<span style="color:#FF8000">[2020-07-11 10:14:50 PM] - Nikolai Prokhorkin was added to Canadiens.</span><br />
<span style="color:#FF8000">[2020-07-11 9:51:57 PM] - Connor Chatham has been deleted from Avalanche.</span><br />
<span style="color:#FF8000">[2020-07-11 9:51:42 PM] - Sergey Zborovskiy has been deleted from Avalanche.</span><br />
<span style="color:#FF8000">[2020-07-11 9:51:32 PM] - Tanner Richard has been deleted from Coyotes.</span><br />
<span style="color:#FF8000">[2020-07-11 9:51:24 PM] - Yaroslav Kosov has been deleted from Coyotes.</span><br />
<span style="color:#FF8000">[2020-07-11 9:51:17 PM] - Scott Kosmachuk has been deleted from Coyotes.</span><br />
<span style="color:#FF8000">[2020-07-11 9:41:05 PM] - TRADE : From Hurricanes to Lightning : Ben Jones (P).</span><br />
<span style="color:#FF8000">[2020-07-11 9:41:05 PM] - TRADE : From Lightning to Hurricanes : Cole Koepke (P).</span><br />
<span style="color:#FF8000">[2020-07-11 9:39:58 PM] - TRADE : From Canadiens to Sabres : Y:2021-RND:4-MTL, Y:2021-RND:6-MTL.</span><br />
<span style="color:#FF8000">[2020-07-11 9:39:58 PM] - TRADE : From Sabres to Canadiens : Nikolay Prokhorkin (P).</span><br />
<span style="color:#FF8000">[2020-07-11 9:39:23 PM] - TRADE : From Bruins to Golden Knights : Eric Staal (73).</span><br />
<span style="color:#FF8000">[2020-07-11 9:39:23 PM] - TRADE : From Golden Knights to Bruins : Y:2021-RND:4-PHL.</span><br />
<span style="color:#FF8000">[2020-07-11 9:39:04 PM] - TRADE : From Sharks to Golden Knights : Y:2020-RND:1-SJS, Y:2021-RND:1-SJS.</span><br />
<span style="color:#FF8000">[2020-07-11 9:39:04 PM] - TRADE : From Golden Knights to Sharks : Y:2020-RND:2-ANH, Y:2020-RND:2-FLA, Y:2020-RND:2-VGK, Y:2021-RND:2-LAK, Y:2021-RND:2-VGK.</span><br />
<span style="color:#FF8000">[2020-07-11 9:38:08 PM] - TRADE : From Sharks to Flyers : Y:2020-RND:7-SJS, Y:2021-RND:7-SJS, Y:2022-RND:7-SJS, Y:2023-RND:7-SJS, Y:2024-RND:7-SJS.</span><br />
<span style="color:#FF8000">[2020-07-11 9:38:08 PM] - TRADE : From Flyers to Sharks : Mats Zuccarello (69), Sven Baertschi (66).</span><br />
<span style="color:#FF8000">[2020-07-11 9:37:20 PM] - TRADE : From Sabres to Hurricanes : Brent Seabrook (71).</span><br />
<span style="color:#FF8000">[2020-07-11 9:37:20 PM] - TRADE : From Hurricanes to Sabres : Y:2020-RND:4-EDM.</span><br />
<span style="color:#FF8000">[2020-07-11 9:36:49 PM] - TRADE : From Rangers to Coyotes : Jesper Fast (69), Y:2021-RND:5-VGK.</span><br />
<span style="color:#FF8000">[2020-07-11 9:36:49 PM] - TRADE : From Coyotes to Rangers : Y:2020-RND:1-ARI, Y:2020-RND:2-ARI.</span><br />
<span style="color:#FF8000">[2020-07-11 9:36:10 PM] - TRADE : From Flames to Canadiens : Y:2020-RND:2-NYR.</span><br />
<span style="color:#FF8000">[2020-07-11 9:35:46 PM] - TRADE : From Golden Knights to Hurricanes : Y:2020-RND:3-DET, Y:2020-RND:3-VGK.</span><br />
<span style="color:#FF8000">[2020-07-11 9:35:46 PM] - TRADE : From Hurricanes to Golden Knights : Y:2020-RND:2-FLA.</span><br />
<span style="color:#FF8000">[2020-07-11 9:34:25 PM] - TRADE : From Canadiens to Ducks : Artemi Panarin (78), Y:2022-RND:3-MTL.</span><br />
<span style="color:#FF8000">[2020-07-11 9:34:25 PM] - TRADE : From Ducks to Canadiens : Tucker Poolman (64), Travis Zajac (70), Grigori Denisenko (P), Moritz Seider (P), Y:2020-RND:1-OTT, Y:2021-RND:1-ANH.</span><br />
<span style="color:#FF8000">[2020-07-11 9:33:25 PM] - TRADE : From Flyers to Coyotes : Patrick Marleau (69).</span><br />
<span style="color:#FF8000">[2020-07-11 9:33:25 PM] - TRADE : From Coyotes to Flyers : Y:2021-RND:7-ARI.</span><br />
<span style="color:#FF8000">[2020-07-11 9:32:52 PM] - TRADE : From Flyers to Oilers : Jake Gardiner (66).</span><br />
<span style="color:#FF8000">[2020-07-11 9:32:52 PM] - TRADE : From Oilers to Flyers : Patrick Marleau (69).</span><br />
<span style="color:#FF8000">[2020-07-11 9:32:22 PM] - TRADE : From Kings to Oilers : $500,000 (Money), Y:2020-RND:7-LAK.</span><br />
<span style="color:#FF8000">[2020-07-11 9:32:22 PM] - TRADE : From Oilers to Kings : Ron Hainsey (73).</span><br />
<span style="color:#FF8000">[2020-07-11 9:30:17 PM] - TRADE : From Hurricanes to Ducks : Robin Salo (P), Y:2021-RND:6-ANH, Y:2022-RND:2-CAR.</span><br />
<span style="color:#FF8000">[2020-07-11 9:30:17 PM] - TRADE : From Ducks to Hurricanes : Alex Chiasson (67), Alexander Volkov (P), Mitchell Stephens (P).</span><br />
<span style="color:#FF8000">[2020-07-11 9:28:29 PM] - TRADE : From Hurricanes to Kings : Kyle Clifford (63).</span><br />
<span style="color:#FF8000">[2020-07-11 9:28:29 PM] - TRADE : From Kings to Hurricanes : Y:2021-RND:7-LAK.</span><br />
<?php include "Footer.php";?>
