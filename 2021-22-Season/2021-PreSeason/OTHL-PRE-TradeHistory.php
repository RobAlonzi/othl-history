<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Trade History</title>
<script src="OTHL-PRE.js"></script>
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
[2021-10-31 8:44:46 PM] - TRADE : From Panthers to Golden Knights : Tyler Bozak (71).<br />
[2021-10-31 8:44:46 PM] - TRADE : From Golden Knights to Panthers : Y:2022-RND:3-VGK.<br />
[2021-10-30 8:58:08 PM] - TRADE : From Maple Leafs to Blues : Simon Robertsson (P), Y:2022-RND:2-TOR.<br />
[2021-10-30 8:58:08 PM] - TRADE : From Blues to Maple Leafs : David Savard (72), Y:2023-RND:3-STL.<br />
[2021-10-26 3:46:45 PM] - TRADE : From Hurricanes to Predators : Tyson Hinds (P).<br />
[2021-10-26 3:46:45 PM] - TRADE : From Predators to Hurricanes : Sean Tschigerl (P).<br />
[2021-10-23 1:58:41 PM] - TRADE : From Stars to Bruins : Y:2022-RND:4-MTL, Y:2022-RND:7-DAL.<br />
[2021-10-23 1:58:41 PM] - TRADE : From Bruins to Stars : Ben Harpur (65).<br />
[2021-10-23 1:57:38 PM] - TRADE : From Ducks to Hurricanes : Nazem Kadri (70), William Eklund (P), Y:2023-RND:5-ANH.<br />
[2021-10-23 1:57:38 PM] - TRADE : From Hurricanes to Ducks : Alex Alexeyev (62), Nick Suzuki (72), Yegor Spiridonov (P).<br />
[2021-10-23 1:55:48 PM] - TRADE : From Islanders to Avalanche : Brett Lernout (59), Mark Pysyk (62).<br />
[2021-10-23 1:55:48 PM] - TRADE : From Avalanche to Islanders : Y:2022-RND:5-COL.<br />
[2021-10-23 1:33:47 PM] - Alex Belzile was added to Lightning.<br />
[2021-10-18 4:20:39 PM] - TRADE : From Blue Jackets to Capitals : Nicolas Aube-Kubel (61).<br />
[2021-10-18 4:20:39 PM] - TRADE : From Capitals to Blue Jackets : Y:2022-RND:5-STL.<br />
[2021-10-18 4:19:41 PM] - Gabriel Dumont was added to Coyotes.<br />
[2021-10-18 4:19:26 PM] - Zack MacEwen was added to Coyotes.<br />
[2021-10-17 8:05:04 PM] - Tage Thompson was added to Sabres.<br />
[2021-10-17 8:04:48 PM] - Jean-Sebastien Dea was added to Blues.<br />
[2021-10-16 9:55:14 AM] - TRADE : From Blue Jackets to Capitals : Josh Brown (66), Aliaksei Protas (P).<br />
[2021-10-16 9:55:14 AM] - TRADE : From Capitals to Blue Jackets : Ian Cole (70), Y:2023-RND:7-CHI.<br />
[2021-10-16 9:46:32 AM] - Jackson Cates was added to Panthers.<br />
[2021-10-15 5:14:10 PM] - TRADE : From Blackhawks to Avalanche : Aaron Dell (51).<br />
[2021-10-15 5:14:10 PM] - TRADE : From Avalanche to Blackhawks : Y:2022-RND:7-COL.<br />
[2021-10-15 5:13:05 PM] - Mason McDonald has been deleted from Ducks.<br />
[2021-10-15 5:12:51 PM] - Martin Pospisil has been deleted from Ducks.<br />
[2021-10-15 5:12:45 PM] - Luke Green has been deleted from Ducks.<br />
[2021-10-15 5:12:39 PM] - Eetu Tuulola has been deleted from Ducks.<br />
[2021-10-15 5:12:33 PM] - Aidan Dudas has been deleted from Ducks.<br />
[2021-10-15 5:12:21 PM] - Mason McDonald was added to Ducks.<br />
[2021-10-15 5:12:15 PM] - Martin Pospisil was added to Ducks.<br />
[2021-10-15 5:12:09 PM] - Luke Green was added to Ducks.<br />
[2021-10-15 5:11:58 PM] - Eetu Tuulola was added to Ducks.<br />
[2021-10-15 5:11:42 PM] - Aidan Dudas was added to Ducks.<br />
[2021-10-15 5:07:18 PM] - Jeff Glass was added to Blue Jackets.<br />
[2021-10-15 5:06:59 PM] - Kyle Clifford was added to Kings.<br />
[2021-10-15 5:06:27 PM] - Jordan Nolan was added to Senators.<br />
[2021-10-15 5:06:10 PM] - Tanner Fritz was added to Lightning.<br />
[2021-10-15 5:05:45 PM] - Collin Delia was added to Flyers.<br />
[2021-10-15 5:04:57 PM] - Kevin Fiala was added to Flyers.<br />
[2021-10-15 5:04:36 PM] - Ivan Barbashev was added to Red Wings.<br />
[2021-10-15 5:02:36 PM] - Calle Rosen was added to Kings.<br />
[2021-10-10 10:56:55 AM] - Mathieu Perreault was added to Kings.<br />
[2021-10-09 9:48:37 PM] - TRADE : From Capitals to Blue Jackets : T.J. Oshie (74).<br />
[2021-10-09 9:48:37 PM] - TRADE : From Blue Jackets to Capitals : Daniil Tarasov (P), Sampo Ranta (P).<br />
[2021-10-09 9:47:34 PM] - Justin Bailey was added to Flyers.<br />
[2021-10-09 9:47:18 PM] - Sheldon Dries was added to Flyers.<br />
[2021-10-09 9:46:53 PM] - Morgan Klimchuk was added to Kings.<br />
[2021-10-09 9:46:32 PM] - Paul Byron was added to Bruins.<br />
[2021-10-05 9:40:54 PM] - Josh Brook has been deleted from Golden Knights.<br />
[2021-10-05 9:40:47 PM] - Pierre-Olivier Joseph has been deleted from Golden Knights.<br />
[2021-10-05 9:40:39 PM] - Jamie Drysdale has been deleted from Golden Knights.<br />
[2021-10-05 9:40:32 PM] - K'Andre Miller has been deleted from Golden Knights.<br />
[2021-10-05 9:40:25 PM] - Vitali Kravtsov has been deleted from Golden Knights.<br />
[2021-10-05 9:40:12 PM] - Ty Emberson has been deleted from Hurricanes.<br />
[2021-10-05 9:40:04 PM] - Max Gildon has been deleted from Rangers.<br />
[2021-10-05 9:39:58 PM] - Stuart Skinner has been deleted from Sharks.<br />
[2021-10-05 9:39:49 PM] - Owen Tippett has been deleted from Red Wings.<br />
[2021-10-05 9:39:43 PM] - Evan Cormier has been deleted from Flames.<br />
[2021-10-05 9:37:52 PM] - Owen Tippett was added to Red Wings.<br />
[2021-10-05 9:37:41 PM] - Evan Cormier was added to Flames.<br />
[2021-10-05 9:36:48 PM] - Stuart Skinner was added to Sharks.<br />
[2021-10-05 9:36:25 PM] - Max Gildon was added to Rangers.<br />
[2021-10-05 9:36:17 PM] - Josh Brook was added to Golden Knights.<br />
[2021-10-05 9:36:08 PM] - Pierre-Olivier Joseph was added to Golden Knights.<br />
[2021-10-05 9:35:59 PM] - Jamie Drysdale was added to Golden Knights.<br />
[2021-10-05 9:35:50 PM] - K'Andre Miller was added to Golden Knights.<br />
[2021-10-05 9:35:42 PM] - Vitaly Kravtsov was added to Golden Knights.<br />
[2021-10-05 9:35:21 PM] - Ty Emberson was added to Hurricanes.<br />
[2021-10-05 9:29:04 PM] - Nic Hague was added to Blues.<br />
[2021-10-05 9:26:52 PM] - Nikita Nesterov was added to Canadiens.<br />
[2021-10-05 9:25:00 PM] - Phillip Di Giuseppe was added to Blue Jackets.<br />
[2021-10-05 9:24:32 PM] - Nikolai Knyzhov was added to Blue Jackets.<br />
[2021-10-05 9:24:03 PM] - Evan McEneny was added to Blue Jackets.<br />
[2021-10-05 9:00:16 PM] - Cameron Gaunce was added to Flyers.<br />
[2021-10-05 8:59:55 PM] - Tomas Jurco was added to Kings.<br />
[2021-10-05 8:58:55 PM] - Wayne Simmonds was added to Coyotes.<br />
[2021-10-05 8:54:24 PM] - Alex Lyon was added to Devils.<br />
[2021-10-05 8:46:12 PM] - Braden Holtby was added to Kraken.<br />
[2021-10-05 8:45:44 PM] - Matt Murray was added to Jets.<br />
[2021-10-05 8:45:21 PM] - Cole Bardreau was added to Senators.<br />
[2021-10-05 8:44:54 PM] - Tobias Rieder was added to Sabres.<br />
[2021-10-05 8:44:23 PM] - Conor Sheary was added to Kraken.<br />
[2021-10-05 8:43:54 PM] - Patrick Kane was added to Stars.<br />
[2021-10-05 8:43:18 PM] - Garret Sparks was added to Devils.<br />
[2021-10-05 8:42:56 PM] - Michael Sgarbossa was added to Avalanche.<br />
[2021-10-05 8:42:33 PM] - Madison Bowey was added to Canadiens.<br />
[2021-10-05 8:42:11 PM] - Chris Bigras was added to Canadiens.<br />
[2021-10-05 8:41:47 PM] - Jesse Puljujarvi was added to Hurricanes.<br />
[2021-10-05 8:41:29 PM] - Mike Hoffman was added to Flyers.<br />
[2021-10-05 8:40:53 PM] - Connor Brown was added to Islanders.<br />
[2021-10-05 8:40:23 PM] - Ian Scott was added to Ducks.<br />
[2021-10-05 8:39:56 PM] - Mika Zibanejad was added to Ducks.<br />
[2021-10-05 8:37:02 PM] - TRADE : From Red Wings to Penguins : Nelson Nogier (55), Y:2022-RND:4-NSH.<br />
[2021-10-05 8:37:02 PM] - TRADE : From Penguins to Red Wings : Connor Carrick (65), $1,000,000 (Money).<br />
[2021-10-05 8:36:12 PM] - TRADE : From Red Wings to Wild : Matt Duchene (69), Marc Staal (71), Philip Broberg (P).<br />
[2021-10-05 8:36:12 PM] - TRADE : From Wild to Red Wings : Nino Niederreiter (71), $1,000,000 (Money), Y:2022-RND:4-NSH, Y:2023-RND:7-MIN.<br />
[2021-09-30 8:34:22 PM] - Jack Roslovic was added to Rangers.<br />
[2021-09-30 8:08:53 PM] - Jayson Megna was added to Stars.<br />
[2021-09-30 8:07:28 PM] - Frans Nielsen was added to Rangers.<br />
[2021-09-30 8:07:04 PM] - Dean Kukan was added to Kraken.<br />
[2021-09-30 8:06:43 PM] - Christian Jaros was added to Kraken.<br />
[2021-09-30 8:06:28 PM] - Nathan Gerbe was added to Kraken.<br />
[2021-09-30 8:06:14 PM] - Joseph Cramarossa was added to Kraken.<br />
[2021-09-30 8:05:48 PM] - Nate Prosser was added to Kraken.<br />
[2021-09-30 8:05:12 PM] - Alex Chiasson was added to Blackhawks.<br />
[2021-09-30 8:04:26 PM] - Martin Jones was added to Blackhawks.<br />
[2021-09-30 8:04:02 PM] - Matt Tennyson was added to Canadiens.<br />
[2021-09-30 8:02:19 PM] - Andrew Hammond was added to Avalanche.<br />
[2021-09-30 8:01:45 PM] - Brendan Smith was added to Kraken.<br />
[2021-09-30 8:01:18 PM] - Tyler Myers was added to Wild.<br />
[2021-09-30 8:00:35 PM] - Cody Eakin was added to Sabres.<br />
[2021-09-30 8:00:17 PM] - Jack Johnson was added to Sabres.<br />
[2021-09-30 7:59:51 PM] - Mark Barberio was added to Canadiens.<br />
[2021-09-30 7:59:05 PM] - Mikko Lehtonen was added to Canucks.<br />
[2021-09-30 7:58:34 PM] - Anton Forsberg was added to Penguins.<br />
[2021-09-30 7:58:17 PM] - Devan Dubnyk was added to Senators.<br />
[2021-09-30 7:57:55 PM] - James Reimer was added to Kings.<br />
[2021-09-30 7:57:33 PM] - Kevin Connauton was added to Oilers.<br />
[2021-09-30 7:57:09 PM] - Jonathon Merrill was added to Kraken.<br />
[2021-09-30 7:56:46 PM] - Fredrik Claesson was added to Senators.<br />
[2021-09-30 7:56:09 PM] - Brogan Rafferty was added to Panthers.<br />
[2021-09-30 7:55:33 PM] - Brenden Dillon was added to Kraken.<br />
[2021-09-30 7:52:15 PM] - Matt Bartkowski was added to Kraken.<br />
[2021-09-30 7:51:24 PM] - Jakub Voracek was added to Jets.<br />
[2021-09-30 7:50:49 PM] - Derek Stepan was added to Panthers.<br />
[2021-09-30 7:50:25 PM] - Gabriel Bourque was added to Maple Leafs.<br />
[2021-09-30 7:49:48 PM] - Jaroslav Halak was added to Rangers.<br />
[2021-09-30 7:49:19 PM] - Kyle Okposo was added to Rangers.<br />
[2021-09-30 7:49:05 PM] - Bobby Ryan was added to Rangers.<br />
[2021-09-30 7:48:37 PM] - Derek Ryan was added to Kraken.<br />
[2021-09-30 7:47:30 PM] - Andrew Ladd was added to Maple Leafs.<br />
[2021-09-30 7:46:58 PM] - Joe Thornton was added to Sharks.<br />
[2021-09-30 7:46:35 PM] - Alex Goligoski was added to Predators.<br />
[2021-09-30 7:46:06 PM] - Zac Dalpe was added to Red Wings.<br />
[2021-09-30 7:45:42 PM] - Devin Shore was added to Senators.<br />
[2021-09-30 7:43:38 PM] - Gerald Mayhew was added to Senators.<br />
[2021-09-30 7:43:10 PM] - Leo Komarov was added to Jets.<br />
[2021-09-30 7:42:13 PM] - Erik Johnson was added to Blue Jackets.<br />
[2021-09-30 7:41:25 PM] - Matt Irwin was added to Devils.<br />
[2021-09-30 7:39:21 PM] - Braydon Coburn was added to Flames.<br />
[2021-09-30 7:38:58 PM] - Jake Gardiner was added to Ducks.<br />
[2021-09-30 7:38:27 PM] - Brandon Sutter was added to Devils.<br />
[2021-09-30 7:36:48 PM] - Kyle Palmieri was added to Blue Jackets.<br />
[2021-09-30 7:36:10 PM] - Marcus Johansson was added to Avalanche.<br />
[2021-09-30 5:23:29 PM] - Cal Clutterbuck was added to Ducks.<br />
[2021-09-30 5:22:38 PM] - Jaden Schwartz was added to Blues.<br />
[2021-09-30 5:18:57 PM] - Ilya Mikheyev was added to Penguins.<br />
[2021-09-30 5:17:48 PM] - Jared McCann was added to Red Wings.<br />
[2021-09-30 4:48:35 PM] - TRADE : From Oilers to Ducks : Alex Biega (63).<br />
[2021-09-30 4:48:35 PM] - TRADE : From Ducks to Oilers : Y:2022-RND:5-ANH, Y:2022-RND:6-ANH.<br />
[2021-09-30 4:47:56 PM] - TRADE : From Hurricanes to Coyotes : Y:2023-RND:3-BOS, Y:2023-RND:5-TBL.<br />
[2021-09-30 4:47:56 PM] - TRADE : From Coyotes to Hurricanes : Nick Jensen (70).<br />
[2021-09-30 4:46:43 PM] - TRADE : From Stars to Coyotes : Nick Jensen (70), Y:2023-RND:5-DAL.<br />
[2021-09-30 4:46:43 PM] - TRADE : From Coyotes to Stars : Brandon Montour (69).<br />
[2021-09-26 8:34:00 AM] - TRADE : From Sabres to Sharks : $1,250,000 (Money).<br />
[2021-09-26 8:34:00 AM] - TRADE : From Sharks to Sabres : Mark Borowiecki (68).<br />
[2021-09-26 8:32:28 AM] - Mike Smith was added to Red Wings.<br />
[2021-09-26 8:32:07 AM] - Jake Allen was added to Senators.<br />
[2021-09-26 8:31:38 AM] - Jan Rutta was added to Senators.<br />
[2021-09-26 8:31:15 AM] - Andy Andreoff was added to Maple Leafs.<br />
[2021-09-26 8:30:59 AM] - Marcus Foligno was added to Wild.<br />
[2021-09-26 8:30:31 AM] - Justin Dowling was added to Maple Leafs.<br />
[2021-09-26 8:30:12 AM] - Loui Eriksson was added to Stars.<br />
[2021-09-26 8:29:54 AM] - Jordan Staal was added to Maple Leafs.<br />
[2021-09-26 8:27:01 AM] - Nikita Zadorov was added to Stars.<br />
[2021-09-26 8:23:16 AM] - Radim Simek was added to Senators.<br />
[2021-09-26 8:19:05 AM] - Mark Borowiecki was added to Sharks.<br />
[2021-09-26 8:17:44 AM] - Justin Richards was added to Panthers.<br />
[2021-09-26 8:07:51 AM] - Darcy Kuemper was added to Canucks.<br />
[2021-09-26 8:07:15 AM] - Jacob Markstrom was added to Canucks.<br />
[2021-09-26 8:06:38 AM] - Zach Bogosian was added to Canadiens.<br />
[2021-09-26 8:05:56 AM] - Trevor van Riemsdyk was added to Canucks.<br />
[2021-09-26 8:05:16 AM] - Parker Kelly was added to Canucks.<br />
[2021-09-26 8:04:35 AM] - Michael Raffl was added to Flames.<br />
[2021-09-26 8:03:14 AM] - Ryan Getzlaf was added to Canadiens.<br />
[2021-09-26 8:00:23 AM] - Nick Bjugstad was added to Islanders.<br />
[2021-09-26 7:59:26 AM] - Jordan Martinook was added to Avalanche.<br />
[2021-09-26 7:58:09 AM] - Tomas Nosek was added to Blue Jackets.<br />
[2021-09-26 7:57:41 AM] - Sergei Bobrovsky was added to Blue Jackets.<br />
[2021-09-26 7:55:20 AM] - Keith Kinkaid was added to Devils.<br />
[2021-09-26 7:54:34 AM] - Alex Stalock was added to Hurricanes.<br />
[2021-09-26 7:49:50 AM] - Anton Khudobin was added to Hurricanes.<br />
[2021-09-26 7:48:40 AM] - Craig Anderson was added to Coyotes.<br />
[2021-09-26 7:48:16 AM] - Milan Lucic was added to Golden Knights.<br />
[2021-09-26 7:47:39 AM] - Jamie Benn was added to Golden Knights.<br />
[2021-09-26 7:46:58 AM] - Tomas Tatar was added to Blackhawks.<br />
[2021-09-25 9:09:25 PM] - Artturi Lehkonen was added to Rangers.<br />
[2021-09-25 9:09:00 PM] - Matt Grzelcyk was added to Rangers.<br />
[2021-09-25 9:08:44 PM] - Ian McCoshen was added to Rangers.<br />
[2021-09-25 9:02:06 PM] - Eric Staal was added to Maple Leafs.<br />
[2021-09-25 9:01:27 PM] - Nolan Patrick was added to Golden Knights.<br />
[2021-09-25 9:01:01 PM] - Taro Hirose was added to Avalanche.<br />
[2021-09-25 9:00:42 PM] - J.T. Miller was added to Avalanche.<br />
[2021-09-25 8:59:58 PM] - Mattias Janmark was added to Sharks.<br />
[2021-09-25 8:59:29 PM] - Mathieu Olivier was added to Flames.<br />
[2021-09-25 8:59:08 PM] - Blake Hillman was added to Flames.<br />
[2021-09-25 8:58:18 PM] - Travis Dermott was added to Flames.<br />
[2021-09-25 8:58:00 PM] - Tom Wilson was added to Flames.<br />
[2021-09-25 8:57:48 PM] - Phillip Danault was added to Flames.<br />
[2021-09-25 8:57:35 PM] - Adam Lowry was added to Flames.<br />
[2021-09-25 8:57:10 PM] - Bo Horvat was added to Flames.<br />
[2021-09-25 8:56:51 PM] - Andre Burakovsky was added to Flames.<br />
[2021-09-25 8:56:30 PM] - Alex Tuch was added to Predators.<br />
[2021-09-25 8:55:55 PM] - Adrian Kempe was added to Predators.<br />
[2021-09-25 8:55:44 PM] - Oscar Klefbom was added to Predators.<br />
[2021-09-25 8:55:26 PM] - Gage Quinney was added to Predators.<br />
[2021-09-25 8:55:08 PM] - Stefan Matteau was added to Predators.<br />
[2021-09-25 8:54:45 PM] - Danton Heinen was added to Predators.<br />
[2021-09-25 8:54:05 PM] - Andreas Johnsson was added to Kraken.<br />
[2021-09-25 8:53:49 PM] - Mason Appleton was added to Kraken.<br />
[2021-09-25 8:53:17 PM] - Tristan Jarry was added to Ducks.<br />
[2021-09-25 8:52:48 PM] - Anthony Cirelli was added to Oilers.<br />
[2021-09-25 8:52:19 PM] - Andreas Borgman was added to Kings.<br />
[2021-09-25 8:52:03 PM] - Anthony DeAngelo was added to Kings.<br />
[2021-09-25 8:50:34 PM] - Thomas Chabot was added to Coyotes.<br />
[2021-09-25 8:49:55 PM] - Johnny Gaudreau was added to Ducks.<br />
[2021-09-25 8:44:01 PM] - Rasmus Ristolainen was added to Sabres.<br />
[2021-09-25 8:43:45 PM] - Michael Amadio was added to Sabres.<br />
[2021-09-25 8:43:32 PM] - Tyler Lewington was added to Sabres.<br />
[2021-09-25 8:43:17 PM] - Ken Appleby was added to Sabres.<br />
[2021-09-25 8:43:04 PM] - Jon Gillies was added to Sabres.<br />
[2021-09-25 8:38:10 PM] - Andy Welinski was added to Sabres.<br />
[2021-09-25 8:37:54 PM] - Dakota Mermis was added to Sabres.<br />
[2021-09-25 8:37:34 PM] - Zemgus Girgensons was added to Sabres.<br />
[2021-09-25 8:37:13 PM] - Zach Aston-Reese was added to Sabres.<br />
[2021-09-25 8:36:17 PM] - William Carrier was added to Senators.<br />
[2021-09-25 8:35:46 PM] - Nick Schmaltz was added to Lightning.<br />
[2021-09-25 8:35:00 PM] - Chase De Leo was added to Islanders.<br />
[2021-09-25 8:34:30 PM] - Joe Hicketts was added to Islanders.<br />
[2021-09-25 8:34:12 PM] - Kurtis MacDermid was added to Penguins.<br />
[2021-09-25 8:24:36 AM] - TRADE : From Rangers to Hurricanes : Gabriel Landeskog (76).<br />
[2021-09-25 8:24:36 AM] - TRADE : From Hurricanes to Rangers : Jesse Ylonen (60), Mark Jankowski (65), Linus Hogberg (57), Dominik Bokk (60), Rem Pitlick (58), Y:2022-RND:1-CAR, Y:2022-RND:2-PHL, Y:2023-RND:2-CAR.<br />
[2021-09-25 8:23:09 AM] - TRADE : From Avalanche to Flames : Logan Stanley (60), Y:2022-RND:4-COL.<br />
[2021-09-25 8:23:09 AM] - TRADE : From Flames to Avalanche : Andrej Sekera (69), Bryan Little (71), Taro Hirose (60).<br />
[2021-09-25 8:20:46 AM] - TRADE : From Coyotes to Ducks : Mika Zibanejad (79), Y:2022-RND:2-ARI.<br />
[2021-09-25 8:20:46 AM] - TRADE : From Ducks to Coyotes : Charlie McAvoy (74), Mavrik Bourque (P), Jacob Perreault (P).<br />
[2021-09-25 8:19:36 AM] - TRADE : From Rangers to Canadiens : Marc-Andre Fleury (84).<br />
[2021-09-25 8:19:36 AM] - TRADE : From Canadiens to Rangers : Kyle Turris (65), Luca Sbisa (60), Cameron Crotty (P), Felix Sandstrom (P), Y:2022-RND:1-MTL, Y:2022-RND:2-MTL.<br />
[2021-09-25 8:17:21 AM] - TRADE : From Panthers to Stars : Xavier Ouellet (60), Y:2023-RND:2-FLA.<br />
[2021-09-25 8:17:21 AM] - TRADE : From Stars to Panthers : Duncan Keith (74).<br />
[2021-09-22 9:08:50 PM] - TRADE : From Canadiens to Lightning : Y:2022-RND:6-PHL.<br />
[2021-09-22 9:08:50 PM] - TRADE : From Lightning to Canadiens : Luca Sbisa (60).<br />
[2021-09-22 9:08:23 PM] - TRADE : From Flames to Rangers : Brent Seabrook (71).<br />
[2021-09-22 9:08:23 PM] - TRADE : From Rangers to Flames : Andrej Sekera (69).<br />
[2021-09-22 9:07:26 PM] - TRADE : From Blue Jackets to Blackhawks : $1,000,000 (Money), Y:2022-RND:5-CLB.<br />
[2021-09-22 9:07:26 PM] - TRADE : From Blackhawks to Blue Jackets : Y:2021-RND:6-NYR.<br />
[2021-09-19 8:06:57 AM] - TRADE : From Sabres to Kings : Y:2022-RND:3-BUF, Y:2022-RND:7-BUF.<br />
[2021-09-19 8:06:57 AM] - TRADE : From Kings to Sabres : Robert Hagg (64), Y:2022-RND:6-LAK.<br />
[2021-09-19 8:05:51 AM] - TRADE : From Wild to Oilers : Y:2022-RND:5-MIN, Y:2022-RND:7-MIN.<br />
[2021-09-19 8:05:51 AM] - TRADE : From Oilers to Wild : Y:2021-RND:5-PHL.<br />
[2021-09-19 8:04:58 AM] - TRADE : From Maple Leafs to Avalanche : Y:2021-RND:7-CAR.<br />
[2021-09-19 8:04:58 AM] - TRADE : From Avalanche to Maple Leafs : Patrick Kane (77).<br />
[2021-09-19 8:04:19 AM] - TRADE : From Sharks to Kings : Darcy Kuemper (70).<br />
[2021-09-19 8:04:19 AM] - TRADE : From Kings to Sharks : Y:2022-RND:7-LAK.<br />
[2021-09-19 8:03:32 AM] - TRADE : From Predators to Kraken : Carey Price (71).<br />
[2021-09-19 8:03:32 AM] - TRADE : From Kraken to Predators : Y:2022-RND:3-ANH, Y:2022-RND:6-ARI.<br />
[2021-09-19 8:02:47 AM] - TRADE : From Rangers to Hurricanes : Pius Suter (67).<br />
[2021-09-19 8:00:59 AM] - TRADE : From Panthers to Wild : Egor Sokolov (P), Fabian Zetterlund (P), Blake Murray (P).<br />
[2021-09-19 8:00:59 AM] - TRADE : From Wild to Panthers : Jakob Silfverberg (70).<br />
[2021-09-19 8:00:08 AM] - TRADE : From Lightning to Hurricanes : Y:2024-RND:5-TBL.<br />
[2021-09-19 8:00:08 AM] - TRADE : From Hurricanes to Lightning : Otto Koivula (58).<br />
[2021-09-14 8:21:41 AM] - TRADE : From Senators to Blue Jackets : Tomas Nosek (65).<br />
[2021-09-14 8:21:41 AM] - TRADE : From Blue Jackets to Senators : Artem Anisimov (67).<br />
[2021-09-14 8:21:05 AM] - TRADE : From Red Wings to Hurricanes : Y:2023-RND:6-DET.<br />
[2021-09-14 8:21:05 AM] - TRADE : From Hurricanes to Red Wings : Mike Smith (80).<br />
[2021-09-14 8:18:45 AM] - Matt Mahalak has been deleted from Blue Jackets.<br />
[2021-09-14 8:18:30 AM] - Matt Bradley has been deleted from Blue Jackets.<br />
[2021-09-14 8:18:19 AM] - Mark Shoemaker has been deleted from Blue Jackets.<br />
[2021-09-14 8:18:13 AM] - Mac Bennett has been deleted from Blue Jackets.<br />
[2021-09-14 8:18:06 AM] - Jerome Gauthier-Leduc has been deleted from Blue Jackets.<br />
[2021-09-14 8:17:46 AM] - Jase Weslosky has been deleted from Blue Jackets.<br />
[2021-09-14 8:17:39 AM] - Jamie Phillips has been deleted from Blue Jackets.<br />
[2021-09-14 8:17:30 AM] - Brent Pedersen has been deleted from Blue Jackets.<br />
[2021-09-14 8:15:54 AM] - Brent Pedersen was added to Blue Jackets.<br />
[2021-09-14 8:15:03 AM] - TRADE : From Stars to Blue Jackets : Brent Pedersen (P), Jamie Phillips (P), Jase Weslosky (P), Jerome Gauthier-Leduc (P), Mac Bennett (P), Mark Shoemaker (P), Matt Bradley (P), Matt Mahalak (P).<br />
[2021-09-14 8:15:03 AM] - TRADE : From Blue Jackets to Stars : $1,000,000 (Money), Y:2022-RND:2-DAL.<br />
[2021-09-14 8:13:42 AM] - TRADE : From Kraken to Blue Jackets : Y:2021-RND:5-VGK, Y:2021-RND:5-WSH.<br />
[2021-09-14 8:13:42 AM] - TRADE : From Blue Jackets to Kraken : Andreas Johnsson (63).<br />
[2021-09-13 2:39:10 PM] - Brinson Pasichnuk was added to Maple Leafs.<br />
[2021-09-13 2:38:30 PM] - Alexander Barabanov was added to Lightning.<br />
[2021-09-13 2:38:15 PM] - Kevin Lankinen was added to Kraken.<br />
[2021-09-13 2:38:05 PM] - Logan Thompson was added to Penguins.<br />
[2021-09-13 2:37:43 PM] - Pius Suter was added to Rangers.<br />
[2021-09-13 2:35:53 PM] - Radim Zohorna was added to Devils.<br />
[2021-09-13 2:35:38 PM] - Austin Strand was added to Kings.<br />
[2021-09-13 2:35:26 PM] - Josef Korenar was added to Kings.<br />
[2021-09-13 2:35:08 PM] - Matt Kiersted was added to Canucks.<br />
[2021-09-13 2:34:53 PM] - Arttu Ruotsalainen was added to Canucks.<br />
[2021-09-13 2:34:18 PM] - Alex Barre-Boulet was added to Blues.<br />
[2021-09-13 2:34:04 PM] - Yegor Zamula was added to Canadiens.<br />
[2021-09-13 2:33:52 PM] - Dylan Coghlan was added to Blackhawks.<br />
[2021-09-13 2:33:43 PM] - Connor Mackey was added to Blackhawks.<br />
[2021-09-13 2:33:31 PM] - Simon Benoit was added to Blackhawks.<br />
[2021-09-13 2:32:19 PM] - Mike Hardman was added to Flames.<br />
[2021-09-13 2:31:21 PM] - Reese Johnson was added to Flames.<br />
[2021-09-13 2:30:58 PM] - Tanner Jeannot was added to Hurricanes.<br />
[2021-09-13 2:29:49 PM] - Michael Houser was added to Hurricanes.<br />
[2021-09-13 2:28:36 PM] - Artem Zub was added to Hurricanes.<br />
[2021-09-13 2:28:26 PM] - Josh Dunne was added to Bruins.<br />
[2021-09-13 2:28:18 PM] - Jeffrey Viel was added to Bruins.<br />
[2021-09-13 2:28:10 PM] - Jalen Chatfield was added to Bruins.<br />
[2021-09-13 2:28:02 PM] - Jack Ahcan was added to Bruins.<br />
[2021-09-13 2:27:54 PM] - Drew O'Connor was added to Bruins.<br />
[2021-09-13 2:27:33 PM] - Lane Pederson was added to Bruins.<br />
[2021-09-13 2:27:24 PM] - Alexei Melnichuk was added to Bruins.<br />
[2021-09-13 1:58:12 PM] - Quinton Byfield has been deleted from Hurricanes.<br />
[2021-09-13 1:58:05 PM] - Donovan Sebrango has been deleted from Hurricanes.<br />
[2021-09-13 1:57:54 PM] - Kaedan Korczak has been deleted from Hurricanes.<br />
[2021-09-13 1:57:45 PM] - William Cuylle has been deleted from Hurricanes.<br />
[2021-09-13 1:57:33 PM] - Tyler Benson has been deleted from Avalanche.<br />
[2021-09-13 1:57:28 PM] - Maxim Letunov has been deleted from Avalanche.<br />
[2021-09-13 1:57:18 PM] - MacKenzie Entwistle has been deleted from Avalanche.<br />
[2021-09-13 1:57:05 PM] - Will Borgen has been deleted from Avalanche.<br />
[2021-09-13 1:56:58 PM] - Nathan Bastian has been deleted from Avalanche.<br />
[2021-09-13 1:56:51 PM] - Logan Stanley has been deleted from Avalanche.<br />
[2021-09-13 1:56:44 PM] - Trevor Zegras has been deleted from Avalanche.<br />
[2021-09-13 1:56:20 PM] - Tyler Benson was added to Avalanche.<br />
[2021-09-13 1:56:14 PM] - Maxim Letunov was added to Avalanche.<br />
[2021-09-13 1:56:04 PM] - Mackenzie Entwistle was added to Avalanche.<br />
[2021-09-13 1:55:37 PM] - William Borgen was added to Avalanche.<br />
[2021-09-13 1:55:28 PM] - Nathan Bastian was added to Avalanche.<br />
[2021-09-13 1:55:11 PM] - Logan Stanley was added to Avalanche.<br />
[2021-09-13 1:54:28 PM] - Trevor Zegras was added to Avalanche.<br />
[2021-09-13 1:53:16 PM] - Quinton Byfield was added to Hurricanes.<br />
[2021-09-13 1:53:03 PM] - Donovan Sebrango was added to Hurricanes.<br />
[2021-09-13 1:52:57 PM] - Kaedan Korczak was added to Hurricanes.<br />
[2021-09-13 1:52:48 PM] - Will Cuylle was added to Hurricanes.<br />
[2021-09-13 1:52:20 PM] - Jake Leschyshyn was added to Blackhawks.<br />
[2021-09-13 1:52:12 PM] - Otto Somppi was added to Blackhawks.<br />
[2021-09-13 1:51:19 PM] - Wyatt Kalynuk was added to Blackhawks.<br />
[2021-09-13 1:34:08 PM] - Wyatt Kalynuk has been deleted from Blackhawks.<br />
[2021-09-13 1:33:53 PM] - Otto Somppi has been deleted from Blackhawks.<br />
[2021-09-13 1:33:46 PM] - Jake Leschyshyn has been deleted from Blackhawks.<br />
[2021-09-13 1:17:08 PM] - Greg Pateryn was added to Islanders.<br />
[2021-09-13 1:15:36 PM] - Haydn Fleury was added to Canucks.<br />
[2021-09-13 1:15:16 PM] - Nico Hischier was added to Canucks.<br />
[2021-09-13 1:14:59 PM] - Kiefer Sherwood was added to Blackhawks.<br />
[2021-09-13 1:14:44 PM] - Colton Parayko was added to Golden Knights.<br />
[2021-09-13 1:14:23 PM] - Brandon Montour was added to Coyotes.<br />
[2021-09-13 1:13:57 PM] - Jacob de La Rose was added to Ducks.<br />
[2021-09-13 1:13:24 PM] - Vince Dunn was added to Golden Knights.<br />
[2021-09-13 1:13:03 PM] - Alexander True was added to Canucks.<br />
[2021-09-13 1:12:40 PM] - Alexandar Georgiev was added to Canucks.<br />
[2021-09-13 1:11:54 PM] - Samuel Girard was added to Blues.<br />
[2021-09-13 1:11:24 PM] - Ondrej Kase was added to Wild.<br />
[2021-09-13 1:10:12 PM] - Malcolm Subban was added to Wild.<br />
[2021-09-13 1:09:49 PM] - Gustav Forsling was added to Sharks.<br />
[2021-09-13 1:08:56 PM] - Warren Foegele was added to Sharks.<br />
[2021-09-13 1:08:21 PM] - Joel Edmundson was added to Sharks.<br />
[2021-09-13 1:07:23 PM] - Robert Hagg was added to Kings.<br />
[2021-09-13 1:06:18 PM] - Noah Hanifin was added to Oilers.<br />
[2021-09-13 1:04:57 PM] - Jordan Schmaltz was added to Lightning.<br />
[2021-09-13 1:04:37 PM] - Zach Whitecloud was added to Oilers.<br />
[2021-09-13 1:04:19 PM] - John Hayden was added to Oilers.<br />
[2021-09-13 1:03:54 PM] - Hayden Hodgson was added to Oilers.<br />
[2021-09-13 1:03:35 PM] - Dominic Toninato was added to Oilers.<br />
[2021-09-13 1:02:14 PM] - Ryan Graves was added to Oilers.<br />
[2021-09-13 12:59:23 PM] - Andreas Athanasiou was added to Kraken.<br />
[2021-09-13 12:58:44 PM] - Shayne Gostisbehere was added to Kraken.<br />
[2021-09-13 12:57:42 PM] - Valeri Nichushkin was added to Kraken.<br />
[2021-09-13 12:56:22 PM] - Olli Maatta was added to Jets.<br />
[2021-09-13 12:55:11 PM] - Joel L'Esperance was added to Jets.<br />
[2021-09-13 12:53:50 PM] - Eeli Tolvanen was added to Jets.<br />
[2021-09-13 12:52:07 PM] - Martin Frk was added to Red Wings.<br />
[2021-09-13 12:51:22 PM] - Stefan Noesen was added to Red Wings.<br />
[2021-09-13 12:51:04 PM] - Anton Lindholm was added to Red Wings.<br />
[2021-09-13 12:50:08 PM] - Alexandre Carrier was added to Panthers.<br />
[2021-09-13 12:48:57 PM] - Jordan Gross was added to Senators.<br />
[2021-09-13 12:48:34 PM] - Max Lagace was added to Senators.<br />
[2021-09-13 12:46:57 PM] - Mitch Reinke was added to Senators.<br />
[2021-09-13 12:46:03 PM] - Joel Kellman was added to Senators.<br />
[2021-09-13 12:45:29 PM] - Michael McCarron was added to Panthers.<br />
[2021-09-13 12:45:01 PM] - Vinni Lettieri was added to Panthers.<br />
[2021-09-13 12:44:18 PM] - Xavier Ouellet was added to Panthers.<br />
[2021-09-13 12:43:48 PM] - Scott Harrington was added to Panthers.<br />
[2021-09-13 12:43:07 PM] - Carl Dahlstrom was added to Panthers.<br />
[2021-09-13 12:41:23 PM] - Tyler Wotherspoon was added to Panthers.<br />
[2021-09-13 12:40:09 PM] - Scott Laughton was added to Islanders.<br />
[2021-09-13 12:39:55 PM] - Boo Nieves was added to Islanders.<br />
[2021-09-13 12:39:37 PM] - Josh Brown was added to Blue Jackets.<br />
[2021-09-13 12:38:58 PM] - Philippe Myers was added to Blue Jackets.<br />
[2021-09-13 12:38:45 PM] - Miles Wood was added to Blue Jackets.<br />
[2021-09-13 12:38:15 PM] - Zach Sanford was added to Blue Jackets.<br />
[2021-09-13 12:37:52 PM] - Alexander Kerfoot was added to Blue Jackets.<br />
[2021-09-13 12:35:41 PM] - Matthew Highmore was added to Bruins.<br />
[2021-09-13 12:35:14 PM] - Sean Walker was added to Capitals.<br />
[2021-09-13 12:34:36 PM] - Jakob Chychrun was added to Hurricanes.<br />
[2021-09-13 12:34:04 PM] - Drake Caggiula was added to Bruins.<br />
[2021-09-13 12:33:20 PM] - Kole Sherwood was added to Bruins.<br />
[2021-09-13 12:31:09 PM] - Luke Glendening was added to Oilers.<br />
[2021-09-13 11:50:25 AM] - TRADE : From Senators to Hurricanes : Y:2021-RND:4-EDM, Y:2021-RND:4-TBL.<br />
[2021-09-13 11:50:25 AM] - TRADE : From Hurricanes to Senators : Jake Wise (P), Jonny Tychonick (P), Y:2022-RND:5-WPG, Y:2022-RND:6-EDM, Y:2022-RND:7-VGK, Y:2023-RND:3-CGY.<br />
[2021-09-13 11:47:38 AM] - TRADE : From Blackhawks to Blue Jackets : Y:2021-RND:4-CHI.<br />
[2021-09-13 11:47:38 AM] - TRADE : From Blue Jackets to Blackhawks : $1,000,000 (Money), Y:2021-RND:6-CLB, Y:2021-RND:6-PHL, Y:2021-RND:6-TBL.<br />
[2021-09-13 11:46:55 AM] - TRADE : From Penguins to Senators : Y:2021-RND:6-VAN.<br />
[2021-09-13 11:46:55 AM] - TRADE : From Senators to Penguins : Kurtis MacDermid (63).<br />
[2021-09-12 9:14:03 AM] - Corey Perry was added to Devils.<br />
[2021-09-12 9:10:28 AM] - Daniel Altshuller has been deleted from Avalanche.<br />
[2021-09-12 9:10:18 AM] - Dominik Lakatos has been deleted from Avalanche.<br />
[2021-09-12 9:07:28 AM] - TRADE : From Blackhawks to Kings : Anthony DeAngelo (65).<br />
[2021-09-12 9:07:28 AM] - TRADE : From Kings to Blackhawks : Jake Boltmann (P).<br />
[2021-09-12 9:06:49 AM] - TRADE : From Blue Jackets to Capitals : Kirill Kirsanov (P).<br />
[2021-09-12 9:06:49 AM] - TRADE : From Capitals to Blue Jackets : Y:2022-RND:2-DAL.<br />
[2021-09-11 4:23:57 PM] - TRADE : From Islanders to Ducks : Carter Hutton (55).<br />
[2021-09-11 4:23:57 PM] - TRADE : From Ducks to Islanders : Callum Booth (64), Charles Williams (65).<br />
[2021-09-11 4:23:21 PM] - TRADE : From Hurricanes to Predators : Y:2022-RND:3-TBL, Y:2021-RND:5-DAL, Y:2021-RND:5-DET.<br />
[2021-09-11 4:23:21 PM] - TRADE : From Predators to Hurricanes : Y:2021-RND:4-NSH.<br />
[2021-09-11 4:21:18 PM] - TRADE : From Oilers to Lightning : Jordan Schmaltz (58).<br />
[2021-09-11 4:19:52 PM] - TRADE : From Blackhawks to Oilers : Cole Coskey (P).<br />
[2021-09-11 4:19:52 PM] - TRADE : From Oilers to Blackhawks : Pavel Shen (P).<br />
[2021-09-11 4:19:18 PM] - TRADE : From Avalanche to Hurricanes : Y:2021-RND:4-COL.<br />
[2021-09-11 4:19:18 PM] - TRADE : From Hurricanes to Avalanche : Y:2022-RND:3-PHL.<br />
[2021-09-11 4:17:00 PM] - TRADE : From Senators to Maple Leafs : Y:2021-RND:4-NYR.<br />
[2021-09-11 4:17:00 PM] - TRADE : From Maple Leafs to Senators : Y:2021-RND:4-TBL, Y:2021-RND:6-TOR, Y:2021-RND:7-ARI.<br />
[2021-09-11 4:16:06 PM] - TRADE : From Islanders to Lightning : Y:2021-RND:3-TBL, Y:2021-RND:5-NYI.<br />
[2021-09-11 4:16:06 PM] - TRADE : From Lightning to Islanders : Tyler Motte (68).<br />
[2021-09-11 4:15:14 PM] - TRADE : From Blues to Kraken : Y:2021-RND:4-NYI, Y:2021-RND:6-ARI, Y:2021-RND:7-MIN.<br />
[2021-09-11 4:15:14 PM] - TRADE : From Kraken to Blues : Y:2021-RND:3-TOR.<br />
[2021-09-11 4:09:07 PM] - TRADE : From Blue Jackets to Capitals : $1,000,001 (Money).<br />
[2021-09-11 4:09:07 PM] - TRADE : From Capitals to Blue Jackets : $1 (Money).<br />
[2021-09-11 4:02:51 PM] - TRADE : From Blues to Capitals : $1,000,000 (Money), Y:2022-RND:5-STL.<br />
[2021-09-11 4:01:17 PM] - Joe Pavelski was added to Blue Jackets.<br />
[2021-09-11 4:00:10 PM] - Andy Greene was added to Blackhawks.<br />
[2021-09-11 3:59:41 PM] - Casey DeSmith was added to Flames.<br />
[2021-09-11 3:59:19 PM] - Jani Hakanpaa was added to Capitals.<br />
[2021-09-11 9:17:30 AM] - TRADE : From Blues to Blackhawks : Y:2021-RND:4-CAR, Y:2021-RND:5-NYR, Y:2021-RND:6-NYR.<br />
[2021-09-11 9:17:30 AM] - TRADE : From Blackhawks to Blues : Y:2021-RND:3-OTT.<br />
[2021-09-11 9:10:07 AM] - TRADE : From Islanders to Blues : Y:2021-RND:2-NYI.<br />
[2021-09-11 9:10:07 AM] - TRADE : From Blues to Islanders : Tyler Pitlick (69), Y:2022-RND:4-BOS.<br />
[2021-09-11 8:56:56 AM] - TRADE : From Islanders to Kraken : Y:2021-RND:2-DET, Y:2021-RND:5-VAN.<br />
[2021-09-11 8:56:56 AM] - TRADE : From Kraken to Islanders : Calvin de Haan (70).<br />
[2021-09-11 8:56:07 AM] - TRADE : From Blackhawks to Kraken : Y:2021-RND:3-CHI.<br />
[2021-09-11 8:56:07 AM] - TRADE : From Kraken to Blackhawks : Justin Braun (72).<br />
[2021-09-11 8:48:51 AM] - TRADE : From Panthers to Kraken : Y:2022-RND:2-FLA, Y:2022-RND:3-FLA.<br />
[2021-09-11 8:48:51 AM] - TRADE : From Kraken to Panthers : Y:2021-RND:2-SEA.<br />
[2021-09-11 8:44:48 AM] - TRADE : From Blue Jackets to Capitals : Y:2021-RND:2-CAR.<br />
[2021-09-11 8:44:48 AM] - TRADE : From Capitals to Blue Jackets : Y:2021-RND:2-WSH, Y:2022-RND:4-ANH.<br />
[2021-09-11 8:21:48 AM] - TRADE : From Kraken to Oilers : Y:2021-RND:1-CHI, Y:2021-RND:5-SEA.<br />
[2021-09-11 8:21:48 AM] - TRADE : From Oilers to Kraken : Y:2021-RND:1-EDM.<br />
[2021-09-11 7:54:56 AM] - TRADE : From Red Wings to Islanders : Y:2021-RND:1-NJD, Y:2021-RND:2-DET, Y:2021-RND:3-TBL.<br />
[2021-09-11 7:54:56 AM] - TRADE : From Islanders to Red Wings : Y:2021-RND:1-NYI, Y:2021-RND:1-TOR.<br />
[2021-09-11 7:51:45 AM] - TRADE : From Red Wings to Oilers : Y:2021-RND:1-DET.<br />
[2021-09-11 7:51:45 AM] - TRADE : From Oilers to Red Wings : Y:2021-RND:1-NJD, Y:2022-RND:5-EDM.<br />
[2021-09-11 7:09:58 AM] - TRADE : From Lightning to Oilers : Vincent Trocheck (76), Esa Lindell (74).<br />
[2021-09-11 7:09:58 AM] - TRADE : From Oilers to Lightning : Nick Schmaltz (70), Shea Weber (76), Dylan Samberg (P), Y:2022-RND:2-EDM.<br />
[2021-09-11 7:08:52 AM] - TRADE : From Kraken to Stars : Adam Gaudette (62).<br />
[2021-09-11 7:08:52 AM] - TRADE : From Stars to Kraken : Zach Parise (70).<br />
[2021-09-11 7:08:19 AM] - TRADE : From Senators to Canucks : Jordan Nolan (62).<br />
[2021-09-11 7:08:19 AM] - TRADE : From Canucks to Senators : James Neal (65).<br />
[2021-09-11 7:07:50 AM] - TRADE : From Senators to Predators : Andrei Vasilevskiy (83).<br />
[2021-09-11 7:07:50 AM] - TRADE : From Predators to Senators : Dustin Wolf (P), Lassi Thomson (P), Y:2021-RND:1-NSH, Y:2021-RND:2-NSH, Y:2021-RND:3-NSH, Y:2021-RND:3-WPG, Y:2022-RND:1-NSH, Y:2022-RND:2-NSH.<br />
[2021-09-11 7:06:16 AM] - TRADE : From Blackhawks to Kraken : Jesper Boqvist (63), Jett Woo (P), Jack Drury (P), Y:2021-RND:1-CHI, Y:2022-RND:2-CAR, Y:2022-RND:2-WPG.<br />
[2021-09-11 7:06:16 AM] - TRADE : From Kraken to Blackhawks : Jordan Oesterle (67), Mark Stone (76).<br />
[2021-09-11 7:05:02 AM] - TRADE : From Hurricanes to Red Wings : Axel Jonsson-Fjallby (57), Dryden Hunt (63), Mackenzie MacEachern (59), Markus Nutivaara (64), Nelson Nogier (55).<br />
[2021-09-11 7:05:02 AM] - TRADE : From Red Wings to Hurricanes : Sergei Bobrovsky (70), Y:2021-RND:3-DET, Y:2021-RND:5-DET.<br />
[2021-09-11 7:03:49 AM] - TRADE : From Oilers to Devils : Mattias Ekholm (73).<br />
[2021-09-11 7:03:49 AM] - TRADE : From Devils to Oilers : Kirill Marchenko (P), Y:2021-RND:1-EDM.<br />
[2021-09-11 7:03:08 AM] - TRADE : From Hurricanes to Rangers : Y:2022-RND:2-TBL, Y:2022-RND:5-VGK.<br />
[2021-09-11 7:00:48 AM] - TRADE : From Hurricanes to Capitals : $1,000,000 (Money), Y:2022-RND:2-DAL, Y:2022-RND:4-TBL.<br />
[2021-09-11 6:58:54 AM] - TRADE : From Oilers to Penguins : Maxwell Crozier (P).<br />
[2021-09-11 6:58:37 AM] - TRADE : From Hurricanes to Islanders : Y:2021-RND:1-TOR, Y:2022-RND:5-NJD.<br />
[2021-09-11 6:58:37 AM] - TRADE : From Islanders to Hurricanes : Y:2021-RND:2-CHI, Y:2021-RND:3-BOS, Y:2021-RND:3-ARI, Y:2021-RND:3-SJS.<br />
[2021-09-02 4:39:23 PM] - Jonathan Quick was added to Stars.<br />
[2021-09-02 4:38:56 PM] - Patrik Nemeth was added to Canucks.<br />
[2021-09-02 4:29:48 PM] - TRADE : From Golden Knights to Canucks : Kale Clague (63).<br />
[2021-09-02 4:29:48 PM] - TRADE : From Canucks to Golden Knights : Joel Armia (67).<br />
[2021-09-02 4:29:07 PM] - TRADE : From Kraken to Coyotes : Brandon Montour (69).<br />
[2021-09-02 4:29:07 PM] - TRADE : From Coyotes to Kraken : Y:2021-RND:5-VGK, Y:2021-RND:6-BUF, Y:2021-RND:7-VGK, Y:2022-RND:6-ARI.<br />
[2021-09-02 4:24:09 PM] - TRADE : From Kraken to Stars : Riley Sheahan (67).<br />
[2021-09-02 4:24:09 PM] - TRADE : From Stars to Kraken : Conor Sheary (66).<br />
[2021-09-02 4:23:15 PM] - TRADE : From Kraken to Bruins : Y:2021-RND:4-ANH.<br />
[2021-09-02 4:23:15 PM] - TRADE : From Bruins to Kraken : Daniil Chechelev (P).<br />
[2021-09-02 4:22:33 PM] - TRADE : From Kraken to Bruins : Y:2021-RND:7-NYR.<br />
[2021-09-02 4:22:33 PM] - TRADE : From Bruins to Kraken : Riley Sutter (P), $500,000 (Money).<br />
[2021-09-02 4:19:30 PM] - TRADE : From Kraken to Canadiens : Brayden Schenn (74), Scott Mayfield (71).<br />
[2021-09-02 4:19:30 PM] - TRADE : From Canadiens to Kraken : Ryan Lomberg (58), Yakov Trenin (62), Y:2021-RND:1-DAL, Y:2021-RND:1-TBL, Y:2022-RND:5-MTL, Y:2022-RND:6-MTL, Y:2022-RND:7-MTL, Y:2023-RND:4-MTL.<br />
[2021-09-02 4:16:51 PM] - TRADE : From Penguins to Oilers : Semyon Varlamov (84).<br />
[2021-09-02 4:16:51 PM] - TRADE : From Oilers to Penguins : Dustin Brown (74), John Beecher (P), Keith Petruzzelli (P), Y:2022-RND:3-EDM.<br />
[2021-08-26 11:05:03 AM] - TRADE : From Stars to Kraken : Gabriel Fortier (P), Y:2021-RND:3-DAL.<br />
[2021-08-26 11:05:03 AM] - TRADE : From Kraken to Stars : Conor Sheary (66), Josh Archibald (66).<br />
[2021-08-26 10:48:56 AM] - Calvin Petersen was added to Capitals.<br />
[2021-08-26 10:33:55 AM] - Dmitry Kulikov was added to Penguins.<br />
[2021-08-26 10:33:13 AM] - Frederik Andersen was added to Maple Leafs.<br />
[2021-08-26 10:32:04 AM] - Adam Larsson was added to Devils.<br />
[2021-08-26 10:31:00 AM] - Zach Hyman was added to Ducks.<br />
[2021-08-26 10:29:45 AM] - Brandon Tanev was added to Canadiens.<br />
[2021-08-26 10:29:08 AM] - Justin Holl was added to Blackhawks.<br />
[2021-08-26 10:24:25 AM] - Jakub Vrana was added to Sharks.<br />
[2021-08-26 10:23:43 AM] - Oskar Sundqvist was added to Coyotes.<br />
[2021-08-26 10:23:27 AM] - Slater Koekkoek was added to Coyotes.<br />
[2021-08-26 10:23:13 AM] - Christian Fischer was added to Coyotes.<br />
[2021-08-26 10:22:33 AM] - Sammy Blais was added to Blues.<br />
[2021-08-26 10:21:59 AM] - Brendan Lemieux was added to Blues.<br />
[2021-08-26 10:21:31 AM] - Victor Mete was added to Kraken.<br />
[2021-08-26 10:20:29 AM] - Karson Kuhlman was added to Blues.<br />
[2021-08-26 10:19:59 AM] - Kevin Labanc was added to Kraken.<br />
[2021-08-26 10:19:11 AM] - Juuso Riikola was added to Jets.<br />
[2021-08-26 10:17:43 AM] - Dominic Turgeon was added to Golden Knights.<br />
[2021-08-26 10:16:53 AM] - Nick Baptiste was added to Golden Knights.<br />
[2021-08-26 10:15:10 AM] - Travis Sanheim was added to Golden Knights.<br />
[2021-08-26 10:14:15 AM] - Adin Hill was added to Golden Knights.<br />
[2021-08-26 10:13:57 AM] - Mackenzie Blackwood was added to Golden Knights.<br />
[2021-08-26 10:13:28 AM] - Brock Boeser was added to Kings.<br />
[2021-08-26 10:10:03 AM] - Dougie Hamilton was added to Canucks.<br />
[2021-08-26 10:08:42 AM] - MacKenzie Weegar was added to Canucks.<br />
[2021-08-26 10:08:10 AM] - Adam Erne was added to Jets.<br />
[2021-08-26 10:07:39 AM] - Neal Pionk was added to Kings.<br />
[2021-08-26 10:07:15 AM] - Dylan Strome was added to Kraken.<br />
[2021-08-26 10:06:38 AM] - Pierre-Luc Dubois was added to Coyotes.<br />
[2021-08-26 10:06:02 AM] - Nikita Kucherov was added to Coyotes.<br />
[2021-08-26 10:05:25 AM] - Mike Reilly was added to Jets.<br />
[2021-08-26 10:04:19 AM] - Charlie McAvoy was added to Ducks.<br />
[2021-08-26 10:03:57 AM] - Kyle Connor was added to Canucks.<br />
[2021-08-26 10:03:25 AM] - David Kampf was added to Blackhawks.<br />
[2021-08-26 10:01:14 AM] - Riley Stillman was added to Lightning.<br />
[2021-08-26 10:00:48 AM] - Christian Jaros was added to Hurricanes.<br />
[2021-08-26 10:00:32 AM] - Filip Hronek was added to Hurricanes.<br />
[2021-08-26 10:00:04 AM] - Troy Stecher was added to Maple Leafs.<br />
[2021-08-26 9:59:42 AM] - Sonny Milano was added to Oilers.<br />
[2021-08-26 9:57:53 AM] - Markus Nutivaara was added to Hurricanes.<br />
[2021-08-26 9:57:21 AM] - Anders Bjork was added to Devils.<br />
[2021-08-26 9:56:31 AM] - Mason Marchment was added to Devils.<br />
[2021-08-26 9:56:15 AM] - Joel Kiviranta was added to Devils.<br />
[2021-08-26 9:55:55 AM] - Maxime Lajoie was added to Devils.<br />
[2021-08-26 9:55:12 AM] - Alex Iafallo was added to Capitals.<br />
[2021-08-26 9:54:43 AM] - Chandler Stephenson was added to Capitals.<br />
[2021-08-26 9:54:17 AM] - Linus Ullmark was added to Bruins.<br />
[2021-08-25 4:54:15 PM] - Will Butcher was added to Senators.<br />
[2021-08-25 4:53:51 PM] - Jake Debrusk was added to Maple Leafs.<br />
[2021-08-25 4:53:24 PM] - Jonas Brodin was added to Flyers.<br />
[2021-08-25 4:52:23 PM] - Max Domi was added to Panthers.<br />
[2021-08-25 4:52:01 PM] - Tyson Jost was added to Penguins.<br />
[2021-08-25 4:49:02 PM] - Clayton Keller was added to Canadiens.<br />
[2021-08-25 4:47:51 PM] - Alex DeBrincat was added to Canadiens.<br />
[2021-08-25 4:46:02 PM] - Mark Scheifele was added to Canadiens.<br />
[2021-08-25 4:45:38 PM] - Otto Leskinen was added to Canadiens.<br />
[2021-08-25 4:45:17 PM] - Noah Juulsen was added to Canadiens.<br />
[2021-08-25 4:45:02 PM] - Matt Luff was added to Canadiens.<br />
[2021-08-25 4:44:39 PM] - Tucker Poolman was added to Canadiens.<br />
[2021-08-25 4:44:20 PM] - Ryan Lomberg was added to Canadiens.<br />
[2021-08-25 4:43:56 PM] - Daniel Sprong was added to Canadiens.<br />
[2021-08-25 4:43:27 PM] - Oliver Kylington was added to Bruins.<br />
[2021-08-25 4:42:25 PM] - Marcus Pettersson was added to Hurricanes.<br />
[2021-08-25 4:41:32 PM] - Dryden Hunt was added to Hurricanes.<br />
[2021-08-25 4:40:44 PM] - Mark Jankowski was added to Hurricanes.<br />
[2021-08-25 4:39:53 PM] - Dominik Kahun was added to Blackhawks.<br />
[2021-08-25 4:38:53 PM] - Nick Paul was added to Hurricanes.<br />
[2021-08-25 4:38:08 PM] - Mathew Barzal was added to Islanders.<br />
[2021-08-25 4:37:40 PM] - Alex Galchenyuk was added to Kings.<br />
[2021-08-25 4:36:46 PM] - Oskar Lindblom was added to Lightning.<br />
[2021-08-25 4:36:09 PM] - Ryan Murray was added to Lightning.<br />
[2021-08-25 4:30:28 PM] - Timo Meier was added to Devils.<br />
[2021-08-25 4:29:55 PM] - Viktor Arvidsson was added to Flyers.<br />
[2021-08-25 4:29:20 PM] - Tomas Hertl was added to Maple Leafs.<br />
[2021-08-24 11:06:33 AM] - Jan Jenik was added to Devils.<br />
[2021-08-24 11:06:24 AM] - Jacob Bryson was added to Islanders.<br />
[2021-08-24 11:05:58 AM] - Jan Jenik has been deleted from Devils.<br />
[2021-08-24 11:05:49 AM] - Jacob Bryson has been deleted from Islanders.<br />
[2021-08-24 10:56:14 AM] - TRADE : From Penguins to Bruins : Y:2021-RND:7-PIT.<br />
[2021-08-24 10:56:14 AM] - TRADE : From Bruins to Penguins : Yegor Rykov (P).<br />
[2021-08-24 10:55:03 AM] - TRADE : From Kraken to Bruins : Y:2021-RND:4-SEA, Y:2021-RND:7-SEA, Y:2021-RND:7-NJD.<br />
[2021-08-24 10:55:03 AM] - TRADE : From Bruins to Kraken : Ryan McGregor (P), $2,000,000 (Money), Y:2022-RND:3-ANH.<br />
[2021-08-24 10:52:03 AM] - TRADE : From Jets to Bruins : Y:2022-RND:3-ANH.<br />
[2021-08-24 10:52:03 AM] - TRADE : From Bruins to Jets : Zion Nybeck (P).<br />
[2021-08-24 10:50:08 AM] - TRADE : From Kraken to Panthers : Erik Karlsson (73).<br />
[2021-08-24 10:50:08 AM] - TRADE : From Panthers to Kraken : Y:2021-RND:2-FLA.<br />
[2021-08-24 10:48:39 AM] - TRADE : From Penguins to Kraken : Jordan Oesterle (67).<br />
[2021-08-24 10:48:04 AM] - TRADE : From Lightning to Kraken : Olof Lindbom (P).<br />
[2021-08-22 1:17:04 PM] - TRADE : From Coyotes to Bruins : Y:2021-RND:5-STL, Y:2021-RND:7-MTL.<br />
[2021-08-22 1:17:04 PM] - TRADE : From Bruins to Coyotes : Y:2022-RND:4-FLA.<br />
[2021-08-22 1:16:01 PM] - TRADE : From Hurricanes to Bruins : Oliver Kylington (58), Y:2021-RND:5-ARI, Y:2021-RND:5-CHI.<br />
[2021-08-22 1:16:01 PM] - TRADE : From Bruins to Hurricanes : Connor Ingram (53), Y:2021-RND:4-DAL, Y:2021-RND:5-DAL.<br />
[2021-08-22 1:12:42 PM] - TRADE : From Capitals to Kraken : Y:2021-RND:4-ANH, Y:2021-RND:5-TBL, Y:2021-RND:6-CGY.<br />
[2021-08-22 1:12:11 PM] - TRADE : From Lightning to Kraken : Y:2024-RND:1-TBL.<br />
[2021-08-22 1:12:00 PM] - TRADE : From Blues to Kraken : Y:2021-RND:7-STL.<br />
[2021-08-22 1:11:41 PM] - TRADE : From Sharks to Kraken : Y:2021-RND:3-VAN.<br />
[2021-08-22 1:11:15 PM] - TRADE : From Devils to Kraken : Braden Holtby (59), Y:2021-RND:5-NJD, Y:2021-RND:7-NJD.<br />
[2021-08-22 1:07:08 PM] - TRADE : From Canadiens to Kraken : Y:2021-RND:1-ANH, Y:2021-RND:2-MTL.<br />
[2021-08-22 1:00:36 PM] - TRADE : From Panthers to Kraken : Cody Eakin (66), Y:2022-RND:7-FLA.<br />
[2021-08-22 12:56:33 PM] - TRADE : From Oilers to Kraken : Adam Gaudette (62), Y:2021-RND:6-NJD.<br />
[2021-08-22 12:52:54 PM] - TRADE : From Stars to Kraken : Y:2021-RND:3-NYR, Y:2021-RND:3-TOR, Y:2022-RND:5-DAL.<br />
[2021-08-22 12:50:20 PM] - TRADE : From Blue Jackets to Kraken : Y:2021-RND:5-WSH, Y:2022-RND:7-CLB.<br />
[2021-08-22 12:49:47 PM] - TRADE : From Hurricanes to Kraken : Y:2022-RND:3-MTL, Y:2023-RND:4-CAR, Y:2023-RND:7-CAR.<br />
[2021-08-22 12:47:36 PM] - TRADE : From Kraken to Flames : Y:2022-RND:6-SEA.<br />
[2021-08-22 12:47:36 PM] - TRADE : From Flames to Kraken : Kevin Labanc (70).<br />
[2021-08-22 12:45:55 PM] - TRADE : From Sabres to Kraken : Y:2021-RND:5-BUF, Y:2021-RND:6-SJS, Y:2021-RND:7-NYR.<br />
[2021-08-22 12:45:28 PM] - TRADE : From Ducks to Kraken : Y:2021-RND:2-DAL, Y:2022-RND:2-BOS, Y:2021-RND:7-BUF.<br />
[2021-08-22 12:37:11 PM] - Alexander Wennberg was added to Kraken.<br />
[2021-08-22 12:36:51 PM] - Spencer Martin was added to Kraken.<br />
[2021-08-22 12:36:40 PM] - Scott Mayfield was added to Kraken.<br />
[2021-08-22 12:36:31 PM] - Frank Vatrano was added to Kraken.<br />
[2021-08-22 12:35:56 PM] - Josh Archibald was added to Kraken.<br />
[2021-08-22 12:34:07 PM] - Victor Mete was added to Kraken.<br />
[2021-08-22 12:33:32 PM] - Justin Braun was added to Kraken.<br />
[2021-08-22 12:33:17 PM] - Ross Colton was added to Kraken.<br />
[2021-08-22 12:30:15 PM] - Shayne Gostisbehere was added to Kraken.<br />
[2021-08-22 12:30:00 PM] - Mark Stone was added to Kraken.<br />
[2021-08-22 12:29:53 PM] - Calvin de Haan was added to Kraken.<br />
[2021-08-22 12:29:41 PM] - Riley Sheahan was added to Kraken.<br />
[2021-08-22 12:23:52 PM] - Andreas Athanasiou was added to Kraken.<br />
[2021-08-22 12:23:41 PM] - Marc-Edouard Vlasic was added to Kraken.<br />
[2021-08-22 12:23:32 PM] - Mike Matheson was added to Kraken.<br />
[2021-08-22 12:23:26 PM] - Mason Appleton was added to Kraken.<br />
[2021-08-22 12:23:18 PM] - Victor Rask was added to Kraken.<br />
[2021-08-22 12:23:05 PM] - Brandon Montour was added to Kraken.<br />
[2021-08-22 12:22:47 PM] - Conor Sheary was added to Kraken.<br />
[2021-08-22 12:22:31 PM] - Craig Anderson was added to Kraken.<br />
[2021-08-22 12:19:21 PM] - Kole Lind was added to Kraken.<br />
[2021-08-22 12:15:12 PM] - Samuel Montembeault was added to Kraken.<br />
[2021-08-22 12:14:49 PM] - Logan Brown was added to Kraken.<br />
[2021-08-22 12:14:37 PM] - Ryan Donato was added to Kraken.<br />
[2021-08-22 12:11:56 PM] - Erik Karlsson was added to Kraken.<br />
[2021-08-22 12:11:47 PM] - Valeri Nichushkin was added to Kraken.<br />
[2021-08-22 12:11:32 PM] - Evgenii Dadonov was added to Kraken.<br />
[2021-08-22 12:10:15 PM] - Dylan Strome was added to Kraken.<br />
[2021-08-22 12:10:06 PM] - Brayden Schenn was added to Kraken.<br />
[2021-08-18 4:50:47 PM] - Kirill Kaprizov has been deleted from Coyotes.<br />
[2021-08-18 4:50:38 PM] - Jaret Anderson-Dolan has been deleted from Capitals.<br />
[2021-08-18 4:50:06 PM] - Shane Gersich has been deleted from Wild.<br />
[2021-08-18 4:49:47 PM] - Jake Walman has been deleted from Wild.<br />
[2021-08-18 4:49:36 PM] - Adam Brooks has been deleted from Wild.<br />
[2021-08-18 4:49:29 PM] - Alex Formenton has been deleted from Wild.<br />
[2021-08-18 4:49:22 PM] - Conor Timmins has been deleted from Wild.<br />
[2021-08-18 4:49:12 PM] - Alexander Romanov has been deleted from Wild.<br />
[2021-08-18 4:49:01 PM] - Evan Bouchard has been deleted from Wild.<br />
[2021-08-18 4:48:53 PM] - Tim Stuetzle has been deleted from Wild.<br />
[2021-08-18 4:48:42 PM] - C.J. Suess has been deleted from Canucks.<br />
[2021-08-18 4:48:32 PM] - William Lagesson has been deleted from Lightning.<br />
[2021-08-18 4:48:07 PM] - Josh Norris has been deleted from Oilers.<br />
[2021-08-18 4:47:57 PM] - Adam Huska has been deleted from Oilers.<br />
[2021-08-18 4:47:48 PM] - Jason Robertson has been deleted from Flames.<br />
[2021-08-18 4:47:37 PM] - Cole Caufield has been deleted from Penguins.<br />
[2021-08-18 4:47:25 PM] - Dakota Joshua has been deleted from Penguins.<br />
[2021-08-18 4:47:16 PM] - Ian Mitchell has been deleted from Penguins.<br />
[2021-08-18 4:47:07 PM] - Alexis Lafreniere has been deleted from Penguins.<br />
[2021-08-18 4:46:46 PM] - Linus Hogberg has been deleted from Hurricanes.<br />
[2021-08-18 4:46:33 PM] - Jesse Ylonen has been deleted from Hurricanes.<br />
[2021-08-18 4:46:25 PM] - Cole Koepke has been deleted from Hurricanes.<br />
[2021-08-18 4:46:16 PM] - Dominik Bokk has been deleted from Hurricanes.<br />
[2021-08-18 4:46:09 PM] - Matej Pekar has been deleted from Hurricanes.<br />
[2021-08-18 4:45:54 PM] - Alec Regula has been deleted from Hurricanes.<br />
[2021-08-18 4:45:45 PM] - Ty Dellandrea has been deleted from Oilers.<br />
[2021-08-18 4:45:41 PM] - Ty Smith has been deleted from Hurricanes.<br />
[2021-08-18 4:45:34 PM] - Andrei Altybarmakyan has been deleted from Hurricanes.<br />
[2021-08-18 4:45:23 PM] - Angus Crookshank has been deleted from Hurricanes.<br />
[2021-08-18 4:45:13 PM] - Wade Allison has been deleted from Hurricanes.<br />
[2021-08-18 4:45:05 PM] - Mattias Samuelsson has been deleted from Hurricanes.<br />
[2021-08-18 4:44:45 PM] - Ville Heinola has been deleted from Predators.<br />
[2021-08-18 4:44:38 PM] - Nils Hoglander has been deleted from Predators.<br />
[2021-08-18 4:44:27 PM] - Dylan Cozens has been deleted from Predators.<br />
[2021-08-18 4:44:13 PM] - Tobias Bjornfot has been deleted from Kings.<br />
[2021-08-18 4:44:04 PM] - Mikhail Maltsev has been deleted from Kings.<br />
[2021-08-18 4:43:54 PM] - Jeremy Swayman has been deleted from Maple Leafs.<br />
[2021-08-18 4:43:46 PM] - Brandon Hagel has been deleted from Predators.<br />
[2021-08-18 4:43:41 PM] - Bowen Byram has been deleted from Maple Leafs.<br />
[2021-08-18 4:43:32 PM] - Shane Pinto has been deleted from Oilers.<br />
[2021-08-18 4:43:28 PM] - Simon Holmstrom has been deleted from Maple Leafs.<br />
[2021-08-18 4:43:20 PM] - Jack Studnicka has been deleted from Maple Leafs.<br />
[2021-08-18 4:43:09 PM] - Radel Fazleev has been deleted from Blue Jackets.<br />
[2021-08-18 4:42:51 PM] - Jonah Gadjovich has been deleted from Blue Jackets.<br />
[2021-08-18 4:42:43 PM] - Michal Teply has been deleted from Hurricanes.<br />
[2021-08-18 4:42:35 PM] - Michael Pezzetta has been deleted from Canucks.<br />
[2021-08-18 4:42:28 PM] - Michael Prapavessis has been deleted from Blue Jackets.<br />
[2021-08-18 4:41:46 PM] - TRADE : From Wild to Capitals : Jaret Anderson-Dolan (63).<br />
[2021-08-18 4:41:19 PM] - Kirill Kaprizov was added to Coyotes.<br />
[2021-08-18 4:41:01 PM] - Jaret Anderson-Dolan was added to Wild.<br />
[2021-08-18 4:40:37 PM] - Thomas Di Pauli was added to Wild.<br />
[2021-08-18 4:40:31 PM] - Julien Nantel was added to Wild.<br />
[2021-08-18 4:40:23 PM] - Shane Gersich was added to Wild.<br />
[2021-08-18 4:40:15 PM] - Kyle Wood was added to Wild.<br />
[2021-08-18 4:40:09 PM] - Jake Walman was added to Wild.<br />
[2021-08-18 4:40:03 PM] - Adam Brooks was added to Wild.<br />
[2021-08-18 4:39:54 PM] - Alex Formenton was added to Wild.<br />
[2021-08-18 4:39:47 PM] - Conor Timmins was added to Wild.<br />
[2021-08-18 4:39:40 PM] - Alexander Romanov was added to Wild.<br />
[2021-08-18 4:39:33 PM] - Evan Bouchard was added to Wild.<br />
[2021-08-18 4:39:25 PM] - Tim Stutzle was added to Wild.<br />
[2021-08-18 4:39:06 PM] - Jonah Gadjovich was added to Blue Jackets.<br />
[2021-08-18 4:38:27 PM] - Michael Pezzetta was added to Canucks.<br />
[2021-08-18 4:38:04 PM] - C.J. Suess was added to Canucks.<br />
[2021-08-18 4:37:44 PM] - TRADE : From Oilers to Lightning : William Lagesson (62).<br />
[2021-08-18 4:37:11 PM] - William Lagesson was added to Oilers.<br />
[2021-08-18 4:36:50 PM] - Ty Dellandrea was added to Oilers.<br />
[2021-08-18 4:36:45 PM] - Shane Pinto was added to Oilers.<br />
[2021-08-18 4:36:38 PM] - Joshua Norris was added to Oilers.<br />
[2021-08-18 4:36:20 PM] - Adam Huska was added to Oilers.<br />
[2021-08-18 4:36:00 PM] - Jason Robertson was added to Flames.<br />
[2021-08-18 4:35:48 PM] - Cole Caufield was added to Penguins.<br />
[2021-08-18 4:35:38 PM] - Dakota Joshua was added to Penguins.<br />
[2021-08-18 4:35:28 PM] - Ian Mitchell was added to Penguins.<br />
[2021-08-18 4:35:18 PM] - Alexis Lafreniere was added to Penguins.<br />
[2021-08-18 4:34:54 PM] - Linus Hogberg was added to Hurricanes.<br />
[2021-08-18 4:34:47 PM] - Michal Teply was added to Hurricanes.<br />
[2021-08-18 4:34:39 PM] - Jesse Ylonen was added to Hurricanes.<br />
[2021-08-18 4:34:29 PM] - Cole Koepke was added to Hurricanes.<br />
[2021-08-18 4:34:21 PM] - Dominik Bokk was added to Hurricanes.<br />
[2021-08-18 4:34:15 PM] - Matej Pekar was added to Hurricanes.<br />
[2021-08-18 4:34:02 PM] - Alec Regula was added to Hurricanes.<br />
[2021-08-18 4:33:50 PM] - Ty Smith was added to Hurricanes.<br />
[2021-08-18 4:33:40 PM] - Andrei Altybarmakyan was added to Hurricanes.<br />
[2021-08-18 4:33:27 PM] - Angus Crookshank was added to Hurricanes.<br />
[2021-08-18 4:33:22 PM] - Wade Allison was added to Hurricanes.<br />
[2021-08-18 4:33:15 PM] - Mattias Samuelsson was added to Hurricanes.<br />
[2021-08-18 4:33:04 PM] - Ville Heinola was added to Predators.<br />
[2021-08-18 4:32:48 PM] - Nils Hoglander was added to Predators.<br />
[2021-08-18 4:32:41 PM] - Dylan Cozens was added to Predators.<br />
[2021-08-18 4:32:35 PM] - Brandon Hagel was added to Predators.<br />
[2021-08-18 4:32:10 PM] - Tobias Bjornfot was added to Kings.<br />
[2021-08-18 4:31:59 PM] - Mikhail Maltsev was added to Kings.<br />
[2021-08-18 4:31:36 PM] - Bowen Byram was added to Maple Leafs.<br />
[2021-08-18 4:31:12 PM] - Simon Holmstrom was added to Maple Leafs.<br />
[2021-08-18 4:30:55 PM] - Jeremy Swayman was added to Maple Leafs.<br />
[2021-08-18 4:30:44 PM] - Jack Studnicka was added to Maple Leafs.<br />
[2021-08-18 3:00:00 PM] - Timothy Gettinger was added to Sharks.<br />
[2021-08-18 2:59:39 PM] - Oliver Wahlstrom was added to Sharks.<br />
[2021-08-18 2:59:31 PM] - Kristian Vesalainen was added to Sharks.<br />
[2021-08-18 2:59:08 PM] - John Leonard was added to Sharks.<br />
[2021-08-18 2:58:57 PM] - Kyle Burroughs was added to Stars.<br />
[2021-08-18 2:58:21 PM] - Cal Foote was added to Stars.<br />
[2021-08-18 2:57:37 PM] - Timothy Gettinger has been deleted from Sharks.<br />
[2021-08-18 2:57:26 PM] - Oliver Wahlstrom has been deleted from Sharks.<br />
[2021-08-18 2:57:13 PM] - Kristian Vesalainen has been deleted from Sharks.<br />
[2021-08-18 2:57:00 PM] - John Leonard has been deleted from Sharks.<br />
[2021-08-18 2:56:54 PM] - Kyle Burroughs has been deleted from Stars.<br />
[2021-08-18 2:56:47 PM] - Cal Foote has been deleted from Stars.<br />
[2021-08-18 2:51:30 PM] - TRADE : From Wild to Bruins : Y:2021-RND:7-WSH.<br />
[2021-08-18 2:51:30 PM] - TRADE : From Bruins to Wild : Markus Phillips (P).<br />
[2021-08-18 2:49:56 PM] - TRADE : From Kings to Golden Knights : Ryan McDonagh (73).<br />
[2021-08-18 2:49:56 PM] - TRADE : From Golden Knights to Kings : Y:2022-RND:3-DET, Y:2021-RND:6-NSH, Y:2021-RND:7-VAN, Y:2022-RND:6-COL, Y:2022-RND:6-NYR.<br />
[2021-08-15 9:19:09 PM] - Graham Knott has been deleted from Senators.<br />
[2021-08-15 9:19:01 PM] - Nicolas Beaudin has been deleted from Blues.<br />
[2021-08-15 9:18:46 PM] - Julien Gauthier has been deleted from Blues.<br />
[2021-08-15 9:18:38 PM] - Jakub Zboril has been deleted from Blues.<br />
[2021-08-15 9:18:29 PM] - Dysin Mayo has been deleted from Senators.<br />
[2021-08-15 9:18:16 PM] - Daniel Walcott has been deleted from Senators.<br />
[2021-08-15 9:18:06 PM] - Daniel Audette has been deleted from Senators.<br />
[2021-08-15 9:17:54 PM] - Cam Dineen has been deleted from Senators.<br />
[2021-08-15 9:17:48 PM] - Blaine Byron has been deleted from Senators.<br />
[2021-08-15 9:17:38 PM] - Graham Knott was added to Senators.<br />
[2021-08-15 9:17:31 PM] - Dysin Mayo was added to Senators.<br />
[2021-08-15 9:17:26 PM] - Daniel Walcott was added to Senators.<br />
[2021-08-15 9:17:16 PM] - Daniel Audette was added to Senators.<br />
[2021-08-15 9:17:09 PM] - Cam Dineen was added to Senators.<br />
[2021-08-15 9:17:01 PM] - Blaine Byron was added to Senators.<br />
[2021-08-15 9:16:48 PM] - Nicolas Beaudin was added to Blues.<br />
[2021-08-15 9:16:30 PM] - Julien Gauthier was added to Blues.<br />
[2021-08-15 9:16:15 PM] - Jakub Zboril was added to Blues.<br />
[2021-08-15 8:37:51 PM] - Julien Nantel has been deleted from Wild.<br />
[2021-08-15 8:37:42 PM] - Kyle Wood has been deleted from Wild.<br />
[2021-08-15 8:37:33 PM] - Thomas di Pauli has been deleted from Wild.<br />
[2021-08-15 8:33:38 PM] - TRADE : From Hurricanes to Bruins : Matthew Highmore (63), Trevor Lewis (66).<br />
[2021-08-15 8:33:38 PM] - TRADE : From Bruins to Hurricanes : Y:2023-RND:3-BOS, Y:2022-RND:3-TBL.<br />
[2021-08-15 8:32:20 PM] - TRADE : From Panthers to Bruins : Y:2022-RND:4-FLA.<br />
[2021-08-15 8:32:20 PM] - TRADE : From Bruins to Panthers : Jared Moe (P), William Worge-Kreu (P).<br />
[2021-08-15 8:31:45 PM] - TRADE : From Ducks to Bruins : Y:2021-RND:7-ANH, Y:2021-RND:7-FLA.<br />
[2021-08-15 8:31:45 PM] - TRADE : From Bruins to Ducks : Y:2022-RND:7-BOS, Y:2022-RND:7-PHL, Y:2024-RND:7-BOS.<br />
[2021-08-15 8:30:22 PM] - TRADE : From Sabres to Bruins : Y:2021-RND:5-MTL.<br />
[2021-08-15 8:30:22 PM] - TRADE : From Bruins to Sabres : Y:2022-RND:4-VGK.<br />
[2021-08-11 7:53:11 PM] - Nick Boka has been deleted from Jets.<br />
[2021-08-11 7:53:05 PM] - Markus Ruusu has been deleted from Jets.<br />
[2021-08-11 7:52:56 PM] - Joonas Lyytinen has been deleted from Jets.<br />
[2021-08-11 7:52:47 PM] - Joona Koppanen has been deleted from Jets.<br />
[2021-08-11 7:52:26 PM] - Ales Stezka has been deleted from Jets.<br />
[2021-08-11 7:52:11 PM] - Shawn Boudrias has been deleted from Bruins.<br />
[2021-08-11 7:52:03 PM] - Dmitriy Zaitsev has been deleted from Bruins.<br />
[2021-08-11 7:51:55 PM] - Jacob Golden has been deleted from Bruins.<br />
[2021-08-11 7:51:38 PM] - Nikolaj Krag Christensen has been deleted from Bruins.<br />
[2021-08-11 7:51:27 PM] - Ivan Nalimov has been deleted from Bruins.<br />
[2021-08-11 7:51:10 PM] - Matthew Thiessen has been deleted from Bruins.<br />
[2021-08-11 7:50:34 PM] - Max Gortz has been deleted from Canucks.<br />
[2021-08-11 7:49:54 PM] - Chris Leblanc has been deleted from Penguins.<br />
[2021-08-11 7:49:44 PM] - Jacob Jackson has been deleted from Penguins.<br />
[2021-08-11 7:48:34 PM] - TRADE : From Oilers to Devils : Corey Perry (68).<br />
[2021-08-11 7:48:34 PM] - TRADE : From Devils to Oilers : Y:2022-RND:6-NJD.<br />
[2021-08-11 7:47:01 PM] - TRADE : From Maple Leafs to Blues : Nic Hague (64).<br />
[2021-08-11 7:47:01 PM] - TRADE : From Blues to Maple Leafs : Jacob Bernard-Docker (P).<br />
[2021-08-11 7:46:19 PM] - TRADE : From Hurricanes to Wild : Y:2021-RND:1-STL.<br />
[2021-08-11 7:46:19 PM] - TRADE : From Wild to Hurricanes : Y:2021-RND:1-TOR, Y:2021-RND:2-MIN, Y:2021-RND:3-CGY, Y:2021-RND:3-MIN.<br />
[2021-08-11 7:45:10 PM] - TRADE : From Hurricanes to Flames : Y:2021-RND:1-CAR.<br />
[2021-08-11 7:45:10 PM] - TRADE : From Flames to Hurricanes : Y:2021-RND:1-STL, Y:2021-RND:2-CGY, Y:2021-RND:2-NYR, Y:2023-RND:3-CGY.<br />
[2021-08-11 7:43:40 PM] - TRADE : From Golden Knights to Lightning : Daniel Brickley (55), Sami Niku (60).<br />
[2021-08-11 7:43:40 PM] - TRADE : From Lightning to Golden Knights : Y:2021-RND:7-VAN, Y:2022-RND:6-NYR.<br />
[2021-08-11 7:42:52 PM] - TRADE : From Bruins to Jets : Y:2022-RND:7-SJS.<br />
[2021-08-11 7:42:52 PM] - TRADE : From Jets to Bruins : Y:2021-RND:7-WPG.<br />
[2021-08-11 7:41:54 PM] - TRADE : From Bruins to Wild : Y:2021-RND:1-PHL, Y:2022-RND:7-STL.<br />
[2021-08-11 7:41:54 PM] - TRADE : From Wild to Bruins : Zion Nybeck (P), Y:2021-RND:2-BOS, Y:2021-RND:5-MIN.<br />
[2021-08-11 7:40:21 PM] - TRADE : From Bruins to Golden Knights : Y:2021-RND:1-WPG, Y:2022-RND:6-COL.<br />
[2021-08-11 7:40:21 PM] - TRADE : From Golden Knights to Bruins : Y:2021-RND:1-PHL, Y:2021-RND:2-CLB, Y:2021-RND:4-VGK, Y:2022-RND:4-VGK.<br />
[2021-08-11 7:39:21 PM] - TRADE : From Senators to Golden Knights : Y:2021-RND:1-PHL.<br />
[2021-08-11 7:39:21 PM] - TRADE : From Golden Knights to Senators : Y:2021-RND:3-CLB, Y:2021-RND:3-LAK, Y:2021-RND:3-VGK, Y:2021-RND:7-NYI.<br />
[2021-08-11 7:36:40 PM] - TRADE : From Ducks to Maple Leafs : Y:2022-RND:1-ANH.<br />
[2021-08-11 7:36:40 PM] - TRADE : From Maple Leafs to Ducks : Jack Campbell (74).<br />
[2021-08-11 7:36:04 PM] - TRADE : From Ducks to Blues : Adam Ruzicka (P), Robin Salo (P), Y:2022-RND:5-TBL.<br />
[2021-08-11 7:36:04 PM] - TRADE : From Blues to Ducks : Carter Rowney (68), Y:2021-RND:7-FLA.<br />
[2021-08-11 7:34:19 PM] - TRADE : From Oilers to Hurricanes : Linus Hogberg (P).<br />
[2021-08-11 7:34:19 PM] - TRADE : From Hurricanes to Oilers : Sonny Milano (60), Y:2022-RND:7-ANH.<br />
[2021-08-11 7:32:03 PM] - TRADE : From Golden Knights to Jets : Y:2022-RND:3-ANH.<br />
[2021-08-11 7:32:03 PM] - TRADE : From Jets to Golden Knights : Paul Stastny (71).<br />
[2021-08-01 11:10:59 AM] - Lane Zablocki has been deleted from Ducks.<br />
[2021-08-01 11:10:50 AM] - Anthony Salinitri has been deleted from Ducks.<br />
[2021-08-01 11:10:39 AM] - Daniel Bukac has been deleted from Blues.<br />
[2021-08-01 11:10:24 AM] - Petteri Lindbohm has been deleted from Blues.<br />
[2021-08-01 11:09:59 AM] - Jack Ramsey has been deleted from Blues.<br />
[2021-08-01 10:58:47 AM] - TRADE : From Predators to Golden Knights : Y:2021-RND:6-NSH.<br />
[2021-08-01 10:58:47 AM] - TRADE : From Golden Knights to Predators : Nick Holden (65).<br />
[2021-08-01 10:57:57 AM] - TRADE : From Devils to Oilers : Y:2021-RND:1-NJD.<br />
[2021-08-01 10:57:57 AM] - TRADE : From Oilers to Devils : Michael Krutil (P), Kasper Kotkansalo (P), Y:2021-RND:1-EDM, Y:2021-RND:2-ANH.<br />
[2021-08-01 10:56:18 AM] - TRADE : From Ducks to Kings : Noah Dobson (65).<br />
[2021-08-01 10:56:18 AM] - TRADE : From Kings to Ducks : Jordan Greenway (69).<br />
[2021-08-01 10:55:35 AM] - TRADE : From Jets to Bruins : Nate Schmidt (71), Y:2021-RND:1-WPG, Y:2021-RND:6-WPG, Y:2022-RND:3-TBL.<br />
[2021-08-01 10:55:35 AM] - TRADE : From Bruins to Jets : Brendan Gallagher (71), Erik Gudbranson (70).<br />
[2021-08-01 10:47:46 AM] - TRADE : From Flames to Blues : Y:2021-RND:6-NYR.<br />
[2021-08-01 10:47:46 AM] - TRADE : From Blues to Flames : Matt Benning (69).<br />
[2021-08-01 10:46:09 AM] - TRADE : From Hurricanes to Rangers : Y:2021-RND:5-CGY, Y:2022-RND:3-CGY.<br />
[2021-08-01 10:46:09 AM] - TRADE : From Rangers to Hurricanes : William Cuylle (P).<br />
[2021-08-01 10:36:04 AM] - TRADE : From Hurricanes to Sabres : Y:2022-RND:5-VAN.<br />
[2021-08-01 10:35:40 AM] - TRADE : From Blackhawks to Hurricanes : Jason Zucker (65).<br />
[2021-08-01 10:35:40 AM] - TRADE : From Hurricanes to Blackhawks : Dominik Kahun (63), Y:2022-RND:2-CAR.<br />
[2021-08-01 10:31:44 AM] - TRADE : From Maple Leafs to Hurricanes : Zachary Fucale (67).<br />
[2021-08-01 10:31:44 AM] - TRADE : From Hurricanes to Maple Leafs : Maxim Cajkovic (P), Y:2022-RND:3-VAN.<br />
[2021-08-01 10:31:03 AM] - TRADE : From Panthers to Hurricanes : Matthew Highmore (63), Trevor Lewis (66).<br />
[2021-08-01 10:31:03 AM] - TRADE : From Hurricanes to Panthers : Blake Murray (P), Jakub Galvas (P).<br />
[2021-08-01 10:29:55 AM] - Zachary Fucale was added to Maple Leafs.<br />
[2021-08-01 10:22:37 AM] - TRADE : From Blackhawks to Oilers : Y:2021-RND:6-MTL.<br />
[2021-08-01 10:22:37 AM] - TRADE : From Oilers to Blackhawks : Kaden Fulcher (56).<br />
[2021-08-01 10:21:47 AM] - TRADE : From Bruins to Oilers : Derek Forbort (70).<br />
[2021-08-01 10:21:47 AM] - TRADE : From Oilers to Bruins : Y:2021-RND:3-PIT, Y:2021-RND:4-DAL.<br />
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
<?php include "Footer.php";?>
