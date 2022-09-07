<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Trade History</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.1.6.6" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="OTHL.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
[2019-09-12 7:31:54 PM] - Ryan Graves has been deleted from New York Islanders.<br />
[2019-09-12 7:31:43 PM] - Hugo Fagerblom has been deleted from Vegas Golden Knights.<br />
[2019-09-07 8:09:08 PM] - Pavel Francouz was added to Carolina Hurricanes.<br />
[2019-09-07 8:08:43 PM] - Josh Bailey was added to Florida Panthers.<br />
[2019-09-07 8:08:17 PM] - Adam Johnson was added to Edmonton Oilers.<br />
[2019-09-07 8:07:39 PM] - Anthony Bitetto was added to Edmonton Oilers.<br />
[2019-09-07 8:07:15 PM] - Ryan Graves was added to Edmonton Oilers.<br />
[2019-09-07 8:06:32 PM] - Kole Sherwood was added to Boston Bruins.<br />
[2019-09-07 8:05:48 PM] - Adam McQuaid was added to Tampa Bay Lightning.<br />
[2019-09-07 8:05:23 PM] - Nick Jensen was added to New York Rangers.<br />
[2019-09-07 8:04:46 PM] - Cal Clutterbuck was added to Vancouver Canucks.<br />
[2019-09-07 8:04:17 PM] - Antoine Roussel was added to St. Louis Blues.<br />
[2019-09-07 8:01:09 PM] - Aaron Ness was added to Pittsburgh Penguins.<br />
[2019-09-07 8:00:40 PM] - Michael Grabner was added to New Jersey Devils.<br />
[2019-09-07 8:00:12 PM] - Deryk Engelland was added to Nashville Predators.<br />
[2019-09-07 7:59:44 PM] - Alex Goligoski was added to Vegas Golden Knights.<br />
[2019-09-07 7:58:59 PM] - Craig Smith was added to Vegas Golden Knights.<br />
[2019-09-07 7:58:36 PM] - Cory Schneider was added to Vancouver Canucks.<br />
[2019-09-07 7:58:07 PM] - Tom McCollum was added to Pittsburgh Penguins.<br />
[2019-09-07 7:57:09 PM] - Evgenii Dadonov was added to Boston Bruins.<br />
[2019-09-07 7:56:38 PM] - Justin Abdelkader was added to Boston Bruins.<br />
[2019-09-07 7:53:36 PM] - Leon Draisaitl was added to Arizona Coyotes.<br />
[2019-09-07 7:53:13 PM] - Brandon Davidson was added to Dallas Stars.<br />
[2019-09-07 7:52:48 PM] - Jake McCabe was added to Detroit Red Wings.<br />
[2019-09-07 7:52:22 PM] - Martin Marincin was added to Tampa Bay Lightning.<br />
[2019-09-07 7:51:35 PM] - Robby Fabbri was added to New York Rangers.<br />
[2019-09-07 7:51:18 PM] - Reid Boucher was added to New York Rangers.<br />
[2019-09-07 7:50:28 PM] - Colton Parayko was added to New York Islanders.<br />
[2019-09-07 7:50:03 PM] - Danick Martel was added to Vancouver Canucks.<br />
[2019-09-07 7:49:47 PM] - Sam Reinhart was added to Nashville Predators.<br />
[2019-09-07 7:48:52 PM] - Brett Kulak was added to San Jose Sharks.<br />
[2019-09-07 7:48:32 PM] - Erik Haula was added to Winnipeg Jets.<br />
[2019-09-07 7:48:01 PM] - Mike Reilly was added to Dallas Stars.<br />
[2019-09-07 7:47:31 PM] - Johan Larsson was added to Dallas Stars.<br />
[2019-09-07 7:47:08 PM] - J.T. Miller was added to Colorado Avalanche.<br />
[2019-09-07 7:46:32 PM] - Sam Bennett was added to Anaheim Ducks.<br />
[2019-09-07 7:40:16 PM] - TRADE : From Chicago Blackhawks to Detroit Red Wings : Y:2020-RND:5-BUF, Y:2020-RND:7-TBL.<br />
[2019-09-07 7:40:16 PM] - TRADE : From Detroit Red Wings to Chicago Blackhawks : Peter Cehlarik (61).<br />
[2019-09-07 7:39:25 PM] - TRADE : From Boston Bruins to Carolina Hurricanes : Pontus Aberg (65).<br />
[2019-09-07 7:39:25 PM] - TRADE : From Carolina Hurricanes to Boston Bruins : Y:2020-RND:5-STL.<br />
[2019-09-07 7:39:08 PM] - TRADE : From Anaheim Ducks to Carolina Hurricanes : Wade Allison (P).<br />
[2019-09-07 7:39:08 PM] - TRADE : From Carolina Hurricanes to Anaheim Ducks : Y:2021-RND:4-DET.<br />
[2019-09-07 7:38:40 PM] - TRADE : From Tampa Bay Lightning to Carolina Hurricanes : Robin Salo (P).<br />
[2019-09-07 7:38:40 PM] - TRADE : From Carolina Hurricanes to Tampa Bay Lightning : Martin Marincin (63).<br />
[2019-09-07 7:08:56 PM] - TRADE : From New York Islanders to New York Rangers : Y:2022-RND:7-NYR.<br />
[2019-09-07 7:08:56 PM] - TRADE : From New York Rangers to New York Islanders : Y:2022-RND:3-NYR.<br />
[2019-08-27 5:42:39 PM] - TRADE : From Calgary Flames to Carolina Hurricanes : Jesse Puljujarvi (64), Y:2020-RND:6-STL.<br />
[2019-08-27 5:42:39 PM] - TRADE : From Carolina Hurricanes to Calgary Flames : Andrew Copp (68).<br />
[2019-08-27 5:41:54 PM] - TRADE : From San Jose Sharks to Pittsburgh Penguins : Andrew Shaw (71).<br />
[2019-08-27 5:41:54 PM] - TRADE : From Pittsburgh Penguins to San Jose Sharks : Brett Kulak (67), Craig Smith (69), Y:2020-RND:3-CHI, Y:2021-RND:4-SJS.<br />
[2019-08-26 8:26:23 PM] - TRADE : From Winnipeg Jets to New York Rangers : Jay Beagle (68), Y:2020-RND:2-NYR.<br />
[2019-08-26 8:26:23 PM] - TRADE : From New York Rangers to Winnipeg Jets : Erik Haula (66).<br />
[2019-08-26 8:25:58 PM] - TRADE : From Ottawa Senators to New York Islanders : Connor Brown (66), Philipp Grubauer (73).<br />
[2019-08-26 8:25:58 PM] - TRADE : From New York Islanders to Ottawa Senators : Jaden Schwartz (70), Dmitry Orlov (72), Y:2020-RND:2-NYI, Y:2020-RND:6-NYI.<br />
[2019-08-26 8:25:07 PM] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : Vladimir Sobotka (66).<br />
[2019-08-26 8:25:07 PM] - TRADE : From Tampa Bay Lightning to Vancouver Canucks : Alex Steen (71).<br />
[2019-08-26 8:24:54 PM] - TRADE : From Vancouver Canucks to Boston Bruins : Brandon Saad (72), Y:2020-RND:3-VAN.<br />
[2019-08-26 8:24:54 PM] - TRADE : From Boston Bruins to Vancouver Canucks : Pavel Zacha (71).<br />
[2019-08-26 8:23:38 PM] - Jesper Fast was added to New York Rangers.<br />
[2019-08-26 8:23:22 PM] - Matt Grzelcyk was added to New York Rangers.<br />
[2019-08-26 8:23:09 PM] - Chase De Leo was added to New York Islanders.<br />
[2019-08-26 8:22:33 PM] - Jacob Trouba was added to Washington Capitals.<br />
[2019-08-26 8:22:12 PM] - Dmitry Kulikov was added to Pittsburgh Penguins.<br />
[2019-08-26 8:21:55 PM] - Anton Forsberg was added to Pittsburgh Penguins.<br />
[2019-08-26 8:21:33 PM] - Joel Edmundson was added to San Jose Sharks.<br />
[2019-08-26 8:21:15 PM] - Christian Djoos was added to Minnesota Wild.<br />
[2019-08-26 8:20:06 PM] - Brandon Pirri was added to Minnesota Wild.<br />
[2019-08-26 8:18:53 PM] - Patrice Bergeron was added to Dallas Stars.<br />
[2019-08-18 8:31:47 PM] - TRADE : From Boston Bruins to Winnipeg Jets : Juuso Riikola (63), Markus Nurmi (P).<br />
[2019-08-18 8:31:47 PM] - TRADE : From Winnipeg Jets to Boston Bruins : Madison Bowey (64).<br />
[2019-08-15 5:50:37 PM] - Nico Sturm was added to Arizona Coyotes.<br />
[2019-08-15 5:50:06 PM] - Jimmy Schuldt was added to San Jose Sharks.<br />
[2019-08-15 5:49:49 PM] - Blake Lizotte was added to Washington Capitals.<br />
[2019-08-15 5:49:27 PM] - Brady Keeper was added to Arizona Coyotes.<br />
[2019-08-15 5:36:43 PM] - Sean Walker was added to Washington Capitals.<br />
[2019-08-15 5:36:28 PM] - Max Veronneau was added to Chicago Blackhawks.<br />
[2019-08-15 5:35:49 PM] - Antti Suomela was added to Arizona Coyotes.<br />
[2019-08-15 5:35:35 PM] - Radim Simek was added to Boston Bruins.<br />
[2019-08-15 5:35:16 PM] - Kiefer Sherwood was added to Chicago Blackhawks.<br />
[2019-08-15 5:34:25 PM] - Lukas Radil was added to Toronto Maple Leafs.<br />
[2019-08-15 5:34:01 PM] - Matt Roy was added to Boston Bruins.<br />
[2019-08-15 5:33:47 PM] - Juuso Riikola was added to Boston Bruins.<br />
[2019-08-15 5:33:09 PM] - Philippe Myers was added to Columbus Blue Jackets.<br />
[2019-08-15 5:32:30 PM] - Lawrence Pilut was added to Tampa Bay Lightning.<br />
[2019-08-15 5:32:14 PM] - Valeri Nichushkin was added to Vancouver Canucks.<br />
[2019-08-15 5:32:03 PM] - Hunter Miska was added to Vancouver Canucks.<br />
[2019-08-15 5:31:27 PM] - Zack MacEwen was added to San Jose Sharks.<br />
[2019-08-15 5:29:47 PM] - Trevor Moore was added to Boston Bruins.<br />
[2019-08-15 5:29:26 PM] - Matt Luff was added to Montreal Canadiens.<br />
[2019-08-15 5:29:08 PM] - Par Lindholm was added to Boston Bruins.<br />
[2019-08-15 5:28:59 PM] - Karson Kuhlman was added to Boston Bruins.<br />
[2019-08-15 5:28:15 PM] - Joel L'Esperance was added to Vancouver Canucks.<br />
[2019-08-15 5:27:07 PM] - Ryan Kuffner was added to Edmonton Oilers.<br />
[2019-08-15 5:26:46 PM] - Ilya Kovalchuk was added to Detroit Red Wings.<br />
[2019-08-15 5:26:30 PM] - Mikko Koskinen was added to Philadelphia Flyers.<br />
[2019-08-15 5:24:42 PM] - Dominik Kahun was added to Carolina Hurricanes.<br />
[2019-08-15 5:24:08 PM] - Taro Hirose was added to Calgary Flames.<br />
[2019-08-15 5:23:56 PM] - Ben Gleason was added to Vancouver Canucks.<br />
[2019-08-15 5:22:57 PM] - Kaden Fulcher was added to Edmonton Oilers.<br />
[2019-08-15 5:21:21 PM] - Alexandre Fortin was added to Pittsburgh Penguins.<br />
[2019-08-15 5:20:20 PM] - Sheldon Dries was added to Arizona Coyotes.<br />
[2019-08-15 5:19:58 PM] - Landon Bow was added to Vancouver Canucks.<br />
[2019-08-15 5:19:50 PM] - Gavin Bayreuther was added to Vancouver Canucks.<br />
[2019-08-07 8:22:40 PM] - Saku Maenalanen has been deleted from St. Louis Blues.<br />
[2019-08-07 8:22:28 PM] - Saku Maenalanen was added to St. Louis Blues.<br />
[2019-08-07 8:20:24 PM] - TRADE : From Columbus Blue Jackets to Carolina Hurricanes : Bobby Ryan (70).<br />
[2019-08-07 8:20:24 PM] - TRADE : From Carolina Hurricanes to Columbus Blue Jackets : Giovanni Vallati (P), Y:2020-RND:4-PHL.<br />
[2019-08-07 8:19:49 PM] - TRADE : From Columbus Blue Jackets to New York Islanders : $1,000,000 (Money), Y:2020-RND:6-WSH.<br />
[2019-08-07 8:19:49 PM] - TRADE : From New York Islanders to Columbus Blue Jackets : Y:2019-RND:6-NYI.<br />
[2019-08-07 8:19:18 PM] - TRADE : From Columbus Blue Jackets to Philadelphia Flyers : Y:2020-RND:7-CLB.<br />
[2019-08-07 8:19:18 PM] - TRADE : From Philadelphia Flyers to Columbus Blue Jackets : Lauri Pajuniemi (P).<br />
[2019-08-03 10:38:17 AM] - TRADE : From Edmonton Oilers to Winnipeg Jets : $1,000,000 (Money).<br />
[2019-08-02 7:18:37 PM] - TRADE : From St. Louis Blues to Calgary Flames : Y:2020-RND:1-BUF.<br />
[2019-08-02 7:18:37 PM] - TRADE : From Calgary Flames to St. Louis Blues : Y:2020-RND:1-CGY.<br />
[2019-08-01 7:00:44 PM] - TRADE : From Minnesota Wild to Vancouver Canucks : Y:2019-RND:6-DAL, Y:2020-RND:6-VGK.<br />
[2019-08-01 7:00:44 PM] - TRADE : From Vancouver Canucks to Minnesota Wild : Y:2019-RND:6-WPG.<br />
[2019-07-31 8:32:23 PM] - TRADE : From Philadelphia Flyers to Toronto Maple Leafs : Y:2020-RND:6-PHL.<br />
[2019-07-31 8:32:23 PM] - TRADE : From Toronto Maple Leafs to Philadelphia Flyers : Y:2019-RND:7-FLA.<br />
[2019-07-30 9:21:06 PM] - TRADE : From Buffalo Sabres to Chicago Blackhawks : Y:2020-RND:5-BUF, Y:2020-RND:7-CAR.<br />
[2019-07-30 9:21:06 PM] - TRADE : From Chicago Blackhawks to Buffalo Sabres : Y:2019-RND:5-WSH.<br />
[2019-07-30 9:14:19 PM] - Erik Gustafsson was added to New York Rangers.<br />
[2019-07-30 9:13:51 PM] - Philip Samuelsson was added to Pittsburgh Penguins.<br />
[2019-07-30 9:13:34 PM] - Tyler Motte was added to Tampa Bay Lightning.<br />
[2019-07-30 9:13:09 PM] - Micheal Ferland was added to Pittsburgh Penguins.<br />
[2019-07-30 9:12:51 PM] - Jared McCann was added to Detroit Red Wings.<br />
[2019-07-30 9:12:20 PM] - Gustav Forsling was added to San Jose Sharks.<br />
[2019-07-30 9:11:56 PM] - Philipp Grubauer was added to Ottawa Senators.<br />
[2019-07-30 9:11:35 PM] - Tom Kuhnhackl was added to Tampa Bay Lightning.<br />
[2019-07-30 9:10:56 PM] - Tobias Rieder was added to Colorado Avalanche.<br />
[2019-07-30 9:10:29 PM] - Joonas Korpisalo was added to Boston Bruins.<br />
[2019-07-30 9:10:11 PM] - Ryan Nugent-Hopkins was added to Edmonton Oilers.<br />
[2019-07-28 8:13:16 PM] - Conor Garland was added to New York Islanders.<br />
[2019-07-28 8:12:54 PM] - Conor Garland has been deleted from New York Islanders.<br />
[2019-07-28 8:09:59 PM] - Nathan Beaulieu was added to Florida Panthers.<br />
[2019-07-28 8:09:41 PM] - Tomas Nosek was added to Colorado Avalanche.<br />
[2019-07-28 8:09:19 PM] - Connor Carrick was added to Carolina Hurricanes.<br />
[2019-07-28 8:04:51 PM] - Dominik Uher has been deleted from St. Louis Blues.<br />
[2019-07-28 8:04:41 PM] - Dillon Donnelly has been deleted from St. Louis Blues.<br />
[2019-07-28 8:04:35 PM] - Clifford Watson has been deleted from Vancouver Canucks.<br />
[2019-07-28 8:04:21 PM] - Kyle Schempp has been deleted from Vancouver Canucks.<br />
[2019-07-28 8:04:13 PM] - Mario Lucia has been deleted from Vancouver Canucks.<br />
[2019-07-28 8:01:22 PM] - TRADE : From New York Islanders to Edmonton Oilers : Y:2019-RND:5-ANH.<br />
[2019-07-28 8:01:22 PM] - TRADE : From Edmonton Oilers to New York Islanders : Y:2020-RND:4-BUF.<br />
[2019-07-28 8:00:16 PM] - TRADE : From St. Louis Blues to Calgary Flames : Y:2021-RND:1-STL.<br />
[2019-07-28 8:00:16 PM] - TRADE : From Calgary Flames to St. Louis Blues : Y:2020-RND:1-BUF.<br />
[2019-07-28 7:59:21 PM] - TRADE : From Tampa Bay Lightning to Chicago Blackhawks : Glenn Gawdin (P), Otto Somppi (P), Y:2020-RND:7-TBL.<br />
[2019-07-28 7:59:21 PM] - TRADE : From Chicago Blackhawks to Tampa Bay Lightning : Josh Leivo (64).<br />
[2019-07-28 7:57:59 PM] - TRADE : From Nashville Predators to Columbus Blue Jackets : Y:2019-RND:5-VAN.<br />
[2019-07-28 7:57:59 PM] - TRADE : From Columbus Blue Jackets to Nashville Predators : Y:2020-RND:5-CLB, Y:2020-RND:7-WSH.<br />
[2019-07-28 7:57:25 PM] - TRADE : From Vegas Golden Knights to Carolina Hurricanes : Y:2019-RND:5-TBL.<br />
[2019-07-28 7:57:25 PM] - TRADE : From Carolina Hurricanes to Vegas Golden Knights : Y:2020-RND:4-TBL.<br />
[2019-07-28 7:56:56 PM] - TRADE : From Vancouver Canucks to Boston Bruins : Y:2020-RND:6-NYR.<br />
[2019-07-26 4:44:29 PM] - Ben Chiarot was added to Boston Bruins.<br />
[2019-07-26 4:43:17 PM] - Brett Pesce was added to Colorado Avalanche.<br />
[2019-07-26 4:42:39 PM] - Jarred Tinordi was added to Edmonton Oilers.<br />
[2019-07-26 4:41:58 PM] - Bryan Rust was added to Ottawa Senators.<br />
[2019-07-26 4:41:43 PM] - Nick Leddy was added to Ottawa Senators.<br />
[2019-07-26 4:41:08 PM] - Scott Laughton was added to Vegas Golden Knights.<br />
[2019-07-26 4:40:44 PM] - Ryan Murray was added to Vegas Golden Knights.<br />
[2019-07-26 4:33:19 PM] - TRADE : From Philadelphia Flyers to Dallas Stars : Y:2020-RND:6-FLA.<br />
[2019-07-26 4:33:19 PM] - TRADE : From Dallas Stars to Philadelphia Flyers : Y:2019-RND:7-STL.<br />
[2019-07-26 4:32:42 PM] - TRADE : From Philadelphia Flyers to Edmonton Oilers : Y:2020-RND:4-NYR, Y:2020-RND:7-VAN.<br />
[2019-07-26 4:32:42 PM] - TRADE : From Edmonton Oilers to Philadelphia Flyers : Y:2019-RND:5-CAR.<br />
[2019-07-26 4:31:56 PM] - TRADE : From Philadelphia Flyers to Columbus Blue Jackets : Y:2019-RND:6-CLB, Y:2019-RND:6-OTT, Y:2019-RND:6-VAN.<br />
[2019-07-26 4:31:56 PM] - TRADE : From Columbus Blue Jackets to Philadelphia Flyers : Y:2020-RND:4-NYR.<br />
[2019-07-26 4:31:28 PM] - TRADE : From Calgary Flames to Columbus Blue Jackets : Y:2020-RND:3-CGY, Y:2020-RND:5-CGY.<br />
[2019-07-26 4:31:28 PM] - TRADE : From Columbus Blue Jackets to Calgary Flames : Andre Burakovsky (65).<br />
[2019-07-25 7:32:35 PM] - TRADE : From New Jersey Devils to Vancouver Canucks : Harrison Blaisdell (P).<br />
[2019-07-25 7:32:35 PM] - TRADE : From Vancouver Canucks to New Jersey Devils : Cole Schwindt (P).<br />
[2019-07-25 5:23:07 PM] - Kevin Hayes was added to Arizona Coyotes.<br />
[2019-07-25 5:09:44 PM] - TRADE : From Minnesota Wild to Buffalo Sabres : Y:2019-RND:5-CGY, Y:2019-RND:5-NYI.<br />
[2019-07-25 5:09:44 PM] - TRADE : From Buffalo Sabres to Minnesota Wild : Y:2019-RND:5-PIT, Y:2019-RND:5-VGK, Y:2020-RND:7-VGK.<br />
[2019-07-25 5:03:27 PM] - TRADE : From Philadelphia Flyers to Los Angeles Kings : Y:2019-RND:6-NYR.<br />
[2019-07-25 5:03:27 PM] - TRADE : From Los Angeles Kings to Philadelphia Flyers : Y:2019-RND:7-LAK, Y:2019-RND:7-PIT.<br />
[2019-07-25 5:01:24 PM] - TRADE : From Philadelphia Flyers to Calgary Flames : Blake Hillman (55).<br />
[2019-07-25 5:01:24 PM] - TRADE : From Calgary Flames to Philadelphia Flyers : Y:2019-RND:7-VAN.<br />
[2019-07-23 10:04:57 PM] - Joe Thornton was added to Pittsburgh Penguins.<br />
[2019-07-23 10:04:09 PM] - Ryan McDonagh was added to Ottawa Senators.<br />
[2019-07-23 4:52:38 PM] - TRADE : From Toronto Maple Leafs to Minnesota Wild : Dougie Hamilton (71), Y:2019-RND:4-TOR, Y:2021-RND:2-BOS.<br />
[2019-07-23 4:52:38 PM] - TRADE : From Minnesota Wild to Toronto Maple Leafs : Mike Matheson (72).<br />
[2019-07-23 4:51:52 PM] - TRADE : From Boston Bruins to Vancouver Canucks : Jacob Middleton (58).<br />
[2019-07-23 4:51:52 PM] - TRADE : From Vancouver Canucks to Boston Bruins : Kerby Rychel (64).<br />
[2019-07-22 5:54:40 PM] - Kevin Bouchard has been deleted from Pittsburgh Penguins.<br />
[2019-07-22 5:54:34 PM] - Colton Hargrove has been deleted from Pittsburgh Penguins.<br />
[2019-07-22 5:54:28 PM] - Nathan Clurman has been deleted from Philadelphia Flyers.<br />
[2019-07-22 5:54:21 PM] - Keegan Kanzig has been deleted from Philadelphia Flyers.<br />
[2019-07-22 5:54:16 PM] - Joseph Masonius has been deleted from Philadelphia Flyers.<br />
[2019-07-22 5:54:08 PM] - Dylan Sadowy has been deleted from Philadelphia Flyers.<br />
[2019-07-22 5:54:02 PM] - Linus Arnesson has been deleted from Philadelphia Flyers.<br />
[2019-07-22 5:53:56 PM] - Andong Song has been deleted from Philadelphia Flyers.<br />
[2019-07-22 5:53:44 PM] - Johnathan MacLeod has been deleted from Anaheim Ducks.<br />
[2019-07-22 5:53:20 PM] - Cole Cassels has been deleted from Anaheim Ducks.<br />
[2019-07-22 5:12:03 PM] - TRADE : From Vancouver Canucks to Buffalo Sabres : Brenden Dillon (72), Y:2019-RND:4-DET.<br />
[2019-07-22 5:12:03 PM] - TRADE : From Buffalo Sabres to Vancouver Canucks : Tyler Myers (72), Y:2020-RND:6-NYR.<br />
[2019-07-22 5:11:20 PM] - TRADE : From Carolina Hurricanes to Chicago Blackhawks : Wyatte Wylie (P), Y:2021-RND:3-OTT.<br />
[2019-07-22 5:11:20 PM] - TRADE : From Chicago Blackhawks to Carolina Hurricanes : Nick Cousins (64).<br />
[2019-07-22 5:10:40 PM] - TRADE : From Vancouver Canucks to Pittsburgh Penguins : Mackenzie MacEachern (55), Y:2020-RND:3-FLA.<br />
[2019-07-22 5:10:40 PM] - TRADE : From Pittsburgh Penguins to Vancouver Canucks : Vladimir Sobotka (66).<br />
[2019-07-22 5:10:17 PM] - TRADE : From San Jose Sharks to Pittsburgh Penguins : Brett Kulak (67), Craig Smith (69).<br />
[2019-07-22 5:10:06 PM] - TRADE : From San Jose Sharks to Pittsburgh Penguins : Y:2020-RND:3-CHI, Y:2021-RND:4-SJS.<br />
[2019-07-22 5:10:06 PM] - TRADE : From Pittsburgh Penguins to San Jose Sharks : Andrew Shaw (71).<br />
[2019-07-22 5:09:32 PM] - TRADE : From Chicago Blackhawks to Washington Capitals : Y:2019-RND:4-CLB.<br />
[2019-07-22 5:09:32 PM] - TRADE : From Washington Capitals to Chicago Blackhawks : Y:2019-RND:5-CLB.<br />
[2019-07-22 5:07:29 PM] - TRADE : From Philadelphia Flyers to Calgary Flames : Y:2020-RND:5-TOR.<br />
[2019-07-22 5:07:29 PM] - TRADE : From Calgary Flames to Philadelphia Flyers : Y:2019-RND:7-MTL, Y:2019-RND:7-CGY.<br />
[2019-07-22 5:07:02 PM] - TRADE : From Philadelphia Flyers to Washington Capitals : Y:2019-RND:5-PHL.<br />
[2019-07-22 5:07:02 PM] - TRADE : From Washington Capitals to Philadelphia Flyers : Y:2019-RND:6-NYR, Y:2019-RND:6-OTT.<br />
[2019-07-22 5:06:22 PM] - TRADE : From Boston Bruins to Nashville Predators : Y:2020-RND:3-TBL.<br />
[2019-07-22 5:06:22 PM] - TRADE : From Nashville Predators to Boston Bruins : Y:2019-RND:4-STL.<br />
[2019-07-22 5:05:12 PM] - TRADE : From Philadelphia Flyers to Nashville Predators : Y:2019-RND:6-CHI.<br />
[2019-07-22 5:05:12 PM] - TRADE : From Nashville Predators to Philadelphia Flyers : Y:2019-RND:7-WPG, Y:2019-RND:7-ARI.<br />
[2019-07-18 10:13:09 PM] - Taylor Hall was added to Calgary Flames.<br />
[2019-07-18 10:11:57 PM] - Reid McNeill has been deleted from Vancouver Canucks.<br />
[2019-07-18 10:11:48 PM] - Santeri Saari has been deleted from Vancouver Canucks.<br />
[2019-07-18 10:09:43 PM] - Ryan Donato has been deleted from New York Rangers.<br />
[2019-07-18 10:09:35 PM] - Michael Rasmussen has been deleted from Pittsburgh Penguins.<br />
[2019-07-18 10:09:26 PM] - Brady Tkachuk has been deleted from Pittsburgh Penguins.<br />
[2019-07-18 10:09:20 PM] - Colin White has been deleted from New York Rangers.<br />
[2019-07-18 10:09:09 PM] - Michael Rasmussen was added to Pittsburgh Penguins.<br />
[2019-07-18 10:09:01 PM] - Brady Tkachuk was added to Pittsburgh Penguins.<br />
[2019-07-18 10:08:52 PM] - Colin White was added to New York Rangers.<br />
[2019-07-18 10:08:43 PM] - Ryan Donato was added to New York Rangers.<br />
[2019-07-18 10:04:40 PM] - TRADE : From Detroit Red Wings to Carolina Hurricanes : Y:2021-RND:3-DET, Y:2021-RND:4-DET.<br />
[2019-07-18 10:04:40 PM] - TRADE : From Carolina Hurricanes to Detroit Red Wings : James Reimer (65).<br />
[2019-07-18 10:04:13 PM] - TRADE : From Minnesota Wild to Montreal Canadiens : Valtteri Filppula (70).<br />
[2019-07-18 10:04:13 PM] - TRADE : From Montreal Canadiens to Minnesota Wild : Casey Nelson (64).<br />
[2019-07-18 10:03:32 PM] - TRADE : From Colorado Avalanche to Philadelphia Flyers : Y:2019-RND:7-COL, Y:2019-RND:7-PHL.<br />
[2019-07-18 10:03:32 PM] - TRADE : From Philadelphia Flyers to Colorado Avalanche : Mike Vecchione (61).<br />
[2019-07-18 10:02:37 PM] - TRADE : From Carolina Hurricanes to St. Louis Blues : Y:2020-RND:3-ANH.<br />
[2019-07-18 10:02:37 PM] - TRADE : From St. Louis Blues to Carolina Hurricanes : Y:2019-RND:3-MIN.<br />
[2019-07-18 10:01:56 PM] - TRADE : From Calgary Flames to Chicago Blackhawks : Y:2019-RND:6-MIN, Y:2019-RND:7-DAL.<br />
[2019-07-18 10:01:56 PM] - TRADE : From Chicago Blackhawks to Calgary Flames : Y:2020-RND:6-CHI.<br />
[2019-07-18 9:59:41 PM] - TRADE : From Boston Bruins to Chicago Blackhawks : Semyon Der-Arguchintsev (P).<br />
[2019-07-18 9:59:41 PM] - TRADE : From Chicago Blackhawks to Boston Bruins : Y:2019-RND:4-PHL, Y:2019-RND:6-PHL.<br />
[2019-07-18 9:58:54 PM] - TRADE : From Boston Bruins to Tampa Bay Lightning : Axel Jonsson-Fjallby (P).<br />
[2019-07-18 9:58:54 PM] - TRADE : From Tampa Bay Lightning to Boston Bruins : Y:2019-RND:4-TBL, Y:2020-RND:3-TBL.<br />
[2019-07-18 9:58:07 PM] - TRADE : From Boston Bruins to Vancouver Canucks : Y:2020-RND:3-FLA.<br />
[2019-07-18 9:58:07 PM] - TRADE : From Vancouver Canucks to Boston Bruins : Y:2019-RND:3-BOS.<br />
[2019-07-18 9:57:42 PM] - TRADE : From Boston Bruins to Vancouver Canucks : Scott Mayfield (69).<br />
[2019-07-18 9:57:42 PM] - TRADE : From Vancouver Canucks to Boston Bruins : Ben Harpur (68), Y:2019-RND:4-COL.<br />
[2019-07-18 9:57:18 PM] - TRADE : From Boston Bruins to Minnesota Wild : Noah Juulsen (66), Y:2019-RND:5-NYI.<br />
[2019-07-18 9:57:18 PM] - TRADE : From Minnesota Wild to Boston Bruins : Blake Coleman (72).<br />
[2019-07-18 9:53:00 PM] - TRADE : From Nashville Predators to Buffalo Sabres : Y:2019-RND:3-BUF.<br />
[2019-07-18 9:53:00 PM] - TRADE : From Buffalo Sabres to Nashville Predators : Y:2019-RND:4-NYR, Y:2020-RND:3-BUF.<br />
[2019-07-18 9:52:14 PM] - TRADE : From Philadelphia Flyers to Chicago Blackhawks : Austin Czarnik (62).<br />
[2019-07-18 9:52:14 PM] - TRADE : From Chicago Blackhawks to Philadelphia Flyers : Y:2019-RND:7-CAR.<br />
[2019-07-18 9:51:39 PM] - TRADE : From New Jersey Devils to Vancouver Canucks : Y:2019-RND:3-NJD.<br />
[2019-07-18 9:51:39 PM] - TRADE : From Vancouver Canucks to New Jersey Devils : Y:2019-RND:3-NYR, Y:2019-RND:5-NJD.<br />
[2019-07-16 9:44:03 PM] - TRADE : From Nashville Predators to Carolina Hurricanes : Y:2019-RND:3-SJS.<br />
[2019-07-16 9:44:03 PM] - TRADE : From Carolina Hurricanes to Nashville Predators : Tyler Weiss (P), Y:2020-RND:5-CAR, Y:2020-RND:3-MTL.<br />
[2019-07-16 9:43:03 PM] - TRADE : From Vancouver Canucks to Carolina Hurricanes : Y:2019-RND:3-VAN.<br />
[2019-07-16 9:43:03 PM] - TRADE : From Carolina Hurricanes to Vancouver Canucks : Tyler Steenbergen (P), Y:2019-RND:3-NYR, Y:2020-RND:3-ARI.<br />
[2019-07-16 9:42:29 PM] - TRADE : From Calgary Flames to Philadelphia Flyers : Y:2019-RND:6-VAN, Y:2019-RND:5-PHL.<br />
[2019-07-16 9:42:29 PM] - TRADE : From Philadelphia Flyers to Calgary Flames : Jack Badini (P).<br />
[2019-07-16 9:40:19 PM] - TRADE : From Calgary Flames to Washington Capitals : Y:2019-RND:4-SJS.<br />
[2019-07-16 9:40:19 PM] - TRADE : From Washington Capitals to Calgary Flames : Y:2019-RND:6-MIN, Y:2019-RND:5-CHI.<br />
[2019-07-16 9:39:53 PM] - TRADE : From Calgary Flames to Toronto Maple Leafs : Y:2019-RND:4-CGY.<br />
[2019-07-16 9:39:53 PM] - TRADE : From Toronto Maple Leafs to Calgary Flames : Y:2019-RND:5-PHL, Y:2019-RND:7-DAL.<br />
[2019-07-16 9:39:19 PM] - TRADE : From Arizona Coyotes to Philadelphia Flyers : Y:2019-RND:7-ANH, Y:2019-RND:7-NSH.<br />
[2019-07-16 9:39:19 PM] - TRADE : From Philadelphia Flyers to Arizona Coyotes : Y:2019-RND:6-WSH.<br />
[2019-07-16 9:38:31 PM] - TRADE : From Detroit Red Wings to Philadelphia Flyers : Y:2019-RND:7-DET, Y:2019-RND:7-EDM, Y:2019-RND:7-OTT.<br />
[2019-07-16 9:38:31 PM] - TRADE : From Philadelphia Flyers to Detroit Red Wings : $500,000 (Money), Y:2019-RND:6-BUF.<br />
[2019-07-16 9:37:54 PM] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Y:2019-RND:6-BUF, Y:2019-RND:7-BUF, Y:2019-RND:7-NYR.<br />
[2019-07-16 9:37:54 PM] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Y:2019-RND:5-NSH.<br />
[2019-07-16 9:36:55 PM] - TRADE : From Chicago Blackhawks to St. Louis Blues : Brendan Lemieux (64).<br />
[2019-07-16 9:36:55 PM] - TRADE : From St. Louis Blues to Chicago Blackhawks : Dominik Simon (63).<br />
[2019-07-16 9:35:29 PM] - TRADE : From Pittsburgh Penguins to Edmonton Oilers : Y:2019-RND:3-PIT, Y:2020-RND:7-PIT.<br />
[2019-07-16 9:35:29 PM] - TRADE : From Edmonton Oilers to Pittsburgh Penguins : Y:2019-RND:6-EDM, Y:2019-RND:3-DET.<br />
[2019-07-16 9:34:15 PM] - TRADE : From Washington Capitals to Nashville Predators : Y:2019-RND:2-BOS, Y:2019-RND:4-STL.<br />
[2019-07-16 9:34:15 PM] - TRADE : From Nashville Predators to Washington Capitals : Y:2019-RND:2-NSH.<br />
[2019-07-16 9:33:43 PM] - TRADE : From Carolina Hurricanes to Calgary Flames : Y:2019-RND:2-TBL.<br />
[2019-07-16 9:33:43 PM] - TRADE : From Calgary Flames to Carolina Hurricanes : Y:2019-RND:2-MIN, Y:2020-RND:3-ANH, Y:2020-RND:4-PHL.<br />
[2019-07-16 9:32:39 PM] - TRADE : From St. Louis Blues to Calgary Flames : Y:2020-RND:1-BUF, Y:2019-RND:5-MTL, Y:2021-RND:6-BOS.<br />
[2019-07-16 9:32:39 PM] - TRADE : From Calgary Flames to St. Louis Blues : Y:2019-RND:2-CHI.<br />
[2019-07-16 9:25:47 PM] - TRADE : From Edmonton Oilers to Calgary Flames : Y:2019-RND:2-WSH, Y:2020-RND:2-EDM.<br />
[2019-07-16 9:25:47 PM] - TRADE : From Calgary Flames to Edmonton Oilers : Y:2019-RND:2-PHL.<br />
[2019-07-16 9:25:11 PM] - TRADE : From St. Louis Blues to Toronto Maple Leafs : Y:2019-RND:1-BUF, Y:2019-RND:2-BUF, Y:2019-RND:2-ANH.<br />
[2019-07-16 9:25:11 PM] - TRADE : From Toronto Maple Leafs to St. Louis Blues : Y:2019-RND:1-SJS, Y:2019-RND:3-MTL.<br />
[2019-07-16 9:24:41 PM] - TRADE : From Tampa Bay Lightning to Philadelphia Flyers : Vitali Kravtsov (P).<br />
[2019-07-16 9:24:41 PM] - TRADE : From Philadelphia Flyers to Tampa Bay Lightning : Barrett Hayton (P).<br />
[2019-07-16 9:24:17 PM] - TRADE : From Washington Capitals to Chicago Blackhawks : Y:2019-RND:4-CLB, Y:2019-RND:5-WSH, Y:2019-RND:7-TBL, Y:2019-RND:7-WSH.<br />
[2019-07-16 9:24:17 PM] - TRADE : From Chicago Blackhawks to Washington Capitals : Y:2019-RND:4-OTT, Y:2019-RND:4-STL.<br />
[2019-07-16 9:20:50 PM] - TRADE : From Ottawa Senators to Calgary Flames : Y:2019-RND:7-VAN.<br />
[2019-07-16 9:20:50 PM] - TRADE : From Calgary Flames to Ottawa Senators : Jordan Nolan (64).<br />
[2019-07-16 9:20:07 PM] - TRADE : From Detroit Red Wings to Vancouver Canucks : Y:2019-RND:1-DET, Y:2019-RND:2-DET, Y:2019-RND:4-DET.<br />
[2019-07-16 9:20:07 PM] - TRADE : From Vancouver Canucks to Detroit Red Wings : Y:2019-RND:1-VAN.<br />
[2019-07-16 9:18:01 PM] - TRADE : From Detroit Red Wings to Edmonton Oilers : Y:2020-RND:4-DET, Y:2020-RND:5-DET.<br />
[2019-07-16 9:18:01 PM] - TRADE : From Edmonton Oilers to Detroit Red Wings : Y:2019-RND:4-DET, Y:2019-RND:5-DET.<br />
[2019-07-16 9:17:15 PM] - TRADE : From Detroit Red Wings to Carolina Hurricanes : James Reimer (65).<br />
[2019-07-16 9:17:15 PM] - TRADE : From Carolina Hurricanes to Detroit Red Wings : Y:2020-RND:4-DET, Y:2021-RND:3-DET.<br />
[2019-07-16 9:13:34 PM] - TRADE : From Detroit Red Wings to Carolina Hurricanes : Y:2020-RND:4-DET, Y:2021-RND:3-DET.<br />
[2019-07-16 9:13:34 PM] - TRADE : From Carolina Hurricanes to Detroit Red Wings : James Reimer (65).<br />
[2019-07-16 9:12:54 PM] - TRADE : From Ottawa Senators to Carolina Hurricanes : James Neal (65).<br />
[2019-07-16 9:12:54 PM] - TRADE : From Carolina Hurricanes to Ottawa Senators : D'Artagnan Joly (P), Y:2021-RND:7-CAR.<br />
[2019-07-16 9:11:26 PM] - TRADE : From Boston Bruins to Buffalo Sabres : Y:2019-RND:2-SJS, Y:2020-RND:1-FLA, Y:2021-RND:1-BOS.<br />
[2019-07-16 9:11:26 PM] - TRADE : From Buffalo Sabres to Boston Bruins : Braden Holtby (76).<br />
[2019-07-16 8:49:40 PM] - TRADE : From Nashville Predators to New York Rangers : Gabriel Landeskog (78), Y:2019-RND:4-ANH, Y:2019-RND:4-NSH.<br />
[2019-07-16 8:49:40 PM] - TRADE : From New York Rangers to Nashville Predators : Danton Heinen (67), Kevan Miller (69), Reilly Smith (72), Sam Reinhart (73).<br />
[2019-07-16 8:48:56 PM] - TRADE : From Nashville Predators to Chicago Blackhawks : Sebastian Aho (76).<br />
[2019-07-16 8:48:56 PM] - TRADE : From Chicago Blackhawks to Nashville Predators : Alex Tuch (71), Y:2019-RND:1-CGY, Y:2019-RND:1-CHI.<br />
[2019-07-16 8:48:31 PM] - TRADE : From Buffalo Sabres to Carolina Hurricanes : Y:2019-RND:3-CHI, Y:2020-RND:4-CAR, Y:2021-RND:6-BUF.<br />
[2019-07-16 8:48:31 PM] - TRADE : From Carolina Hurricanes to Buffalo Sabres : Matt Niskanen (74).<br />
[2019-07-16 8:47:48 PM] - TRADE : From Washington Capitals to Winnipeg Jets : Madison Bowey (65), Kale Clague (P), Y:2020-RND:2-NYR, Y:2020-RND:2-WSH.<br />
[2019-07-16 8:47:48 PM] - TRADE : From Winnipeg Jets to Washington Capitals : Y:2019-RND:1-FLA, Y:2019-RND:2-WPG.<br />
[2019-07-16 8:46:36 PM] - TRADE : From Carolina Hurricanes to New York Rangers : Reid Boucher (67), Dennis Busby (P), Connor Corcoran (P).<br />
[2019-07-16 8:46:36 PM] - TRADE : From New York Rangers to Carolina Hurricanes : Calvin de Haan (69), $1,000,000 (Money).<br />
[2019-07-16 8:39:49 PM] - TRADE : From Boston Bruins to New York Islanders : Y:2021-RND:3-NYR, Y:2021-RND:3-BOS.<br />
[2019-07-16 8:39:49 PM] - TRADE : From New York Islanders to Boston Bruins : Ben Chiarot (68), Y:2019-RND:5-NYI.<br />
[2019-07-16 8:39:14 PM] - TRADE : From New York Rangers to New York Islanders : Y:2022-RND:4-NYR, Y:2022-RND:7-NYR.<br />
[2019-07-16 8:39:14 PM] - TRADE : From New York Islanders to New York Rangers : Marc-Andre Fleury (77).<br />
[2019-07-16 8:38:32 PM] - TRADE : From Edmonton Oilers to Winnipeg Jets : Tomas Hyka (59).<br />
[2019-07-16 8:38:32 PM] - TRADE : From Winnipeg Jets to Edmonton Oilers : Jarred Tinordi (62).<br />
[2019-07-16 8:38:09 PM] - TRADE : From Edmonton Oilers to Detroit Red Wings : Ryan Suter (77).<br />
[2019-07-16 8:38:09 PM] - TRADE : From Detroit Red Wings to Edmonton Oilers : Y:2019-RND:3-DET, Y:2019-RND:4-DET, Y:2019-RND:5-DET.<br />
[2019-07-16 8:37:45 PM] - TRADE : From Boston Bruins to Florida Panthers : Brent Burns (78).<br />
[2019-07-16 8:37:45 PM] - TRADE : From Florida Panthers to Boston Bruins : Noah Juulsen (66), Y:2019-RND:2-SJS, Y:2019-RND:4-CHI, Y:2020-RND:1-FLA, Y:2020-RND:3-FLA.<br />
[2019-07-08 5:21:58 PM] - Jonas Siegenthaler has been deleted from Colorado Avalanche.<br />
[2019-07-08 5:21:52 PM] - Kurtis Gabriel has been deleted from Colorado Avalanche.<br />
[2019-07-08 5:21:45 PM] - Blake Pietila has been deleted from Colorado Avalanche.<br />
[2019-07-08 5:21:35 PM] - Connor Clifton has been deleted from Detroit Red Wings.<br />
[2019-07-08 5:21:27 PM] - Theodor Blueger has been deleted from Detroit Red Wings.<br />
[2019-07-08 5:21:21 PM] - Andrew Mangiapane has been deleted from Detroit Red Wings.<br />
[2019-07-08 5:21:15 PM] - Mathieu Joseph has been deleted from Detroit Red Wings.<br />
[2019-07-08 5:20:55 PM] - Lias Andersson has been deleted from Detroit Red Wings.<br />
[2019-07-08 5:20:44 PM] - A.J. Greer has been deleted from Washington Capitals.<br />
[2019-07-08 5:20:33 PM] - A.J. Greer was added to Washington Capitals.<br />
[2019-07-08 5:20:23 PM] - Kurtis Gabriel was added to Colorado Avalanche.<br />
[2019-07-08 5:20:08 PM] - Blake Pietila was added to Colorado Avalanche.<br />
[2019-07-08 5:20:00 PM] - Jonas Siegenthaler was added to Colorado Avalanche.<br />
[2019-07-08 5:19:48 PM] - Connor Clifton was added to Detroit Red Wings.<br />
[2019-07-08 5:19:31 PM] - Teddy Blueger was added to Detroit Red Wings.<br />
[2019-07-08 5:19:19 PM] - Andrew Mangiapane was added to Detroit Red Wings.<br />
[2019-07-08 5:19:13 PM] - Mathieu Joseph was added to Detroit Red Wings.<br />
[2019-07-08 5:19:02 PM] - Lias Andersson was added to Detroit Red Wings.<br />
[2019-07-08 5:03:14 PM] - TRADE : From Washington Capitals to Columbus Blue Jackets : Y:2020-RND:5-WSH, Y:2020-RND:6-WSH, Y:2020-RND:7-WSH, Y:2021-RND:4-WSH, Y:2021-RND:5-WSH, Y:2021-RND:6-WSH, Y:2021-RND:7-WSH.<br />
[2019-07-08 5:03:14 PM] - TRADE : From Columbus Blue Jackets to Washington Capitals : Y:2019-RND:4-LAK, Y:2019-RND:5-CHI, Y:2019-RND:6-MIN, Y:2019-RND:6-NYR, Y:2019-RND:6-OTT, Y:2019-RND:7-TBL.<br />
[2019-07-08 4:56:42 PM] - Oliver Ekman-Larsson was added to Arizona Coyotes.<br />
[2019-07-08 4:50:00 PM] - TRADE : From Colorado Avalanche to Nashville Predators : Greg Carey (65).<br />
[2019-07-07 10:17:41 PM] - Sergei Bobrovsky was added to Detroit Red Wings.<br />
[2019-07-07 10:17:16 PM] - Greg Carey was added to Colorado Avalanche.<br />
[2019-07-07 10:16:52 PM] - Chris Mueller was added to Colorado Avalanche.<br />
[2019-07-07 10:16:34 PM] - Michael Raffl was added to New Jersey Devils.<br />
[2019-07-07 10:15:36 PM] - Jay Bouwmeester was added to Arizona Coyotes.<br />
[2019-07-07 10:15:04 PM] - Dustin Brown was added to Edmonton Oilers.<br />
[2019-07-07 10:14:33 PM] - Derek Grant was added to Buffalo Sabres.<br />
[2019-07-07 10:14:03 PM] - Bryan Little was added to Boston Bruins.<br />
[2019-07-07 10:11:20 PM] - Anton Stralman was added to Columbus Blue Jackets.<br />
[2019-07-07 10:09:56 PM] - Matt Duchene was added to Detroit Red Wings.<br />
[2019-07-07 10:09:37 PM] - Josh Leivo was added to Chicago Blackhawks.<br />
[2019-07-07 10:09:18 PM] - Nick Cousins was added to Chicago Blackhawks.<br />
[2019-07-07 10:08:52 PM] - Noel Acciari was added to Toronto Maple Leafs.<br />
[2019-07-07 10:08:11 PM] - Markus Granlund was added to Calgary Flames.<br />
[2019-07-07 10:07:48 PM] - Chris Bigras was added to Boston Bruins.<br />
[2019-07-07 10:07:23 PM] - Joseph LaBate was added to San Jose Sharks.<br />
[2019-07-07 10:07:09 PM] - Brendan Leipsic was added to San Jose Sharks.<br />
[2019-07-07 10:06:55 PM] - Robin Lehner was added to New Jersey Devils.<br />
[2019-07-07 10:06:31 PM] - Jean-Sebastien Dea was added to Vancouver Canucks.<br />
[2019-07-07 10:06:15 PM] - Max Lagace was added to Vancouver Canucks.<br />
[2019-07-07 10:05:47 PM] - Joonas Donskoi was added to Winnipeg Jets.<br />
[2019-07-07 10:05:33 PM] - Kasperi Kapanen was added to Winnipeg Jets.<br />
[2019-07-07 10:05:15 PM] - Richard Panik was added to Edmonton Oilers.<br />
[2019-07-07 10:04:58 PM] - Josh Archibald was added to Colorado Avalanche.<br />
[2019-07-07 10:04:45 PM] - Keegan Lowe was added to Colorado Avalanche.<br />
[2019-07-07 10:04:27 PM] - Zemgus Girgensons was added to Buffalo Sabres.<br />
[2019-07-07 10:04:08 PM] - Adam Clendening was added to Colorado Avalanche.<br />
[2019-07-07 10:03:56 PM] - Chris Driedger was added to Colorado Avalanche.<br />
[2019-07-07 10:02:59 PM] - Tyler Toffoli was added to San Jose Sharks.<br />
[2019-07-07 10:02:36 PM] - Andreas Athanasiou was added to Nashville Predators.<br />
[2019-07-07 10:02:03 PM] - Patrik Nemeth was added to Toronto Maple Leafs.<br />
[2019-07-07 10:01:44 PM] - Sean Couturier was added to Boston Bruins.<br />
[2019-07-07 10:01:22 PM] - Kenny Agostino was added to Edmonton Oilers.<br />
[2019-07-07 10:01:03 PM] - Mike Sgarbossa was added to Colorado Avalanche.<br />
[2019-07-07 10:00:43 PM] - Pontus Aberg was added to Boston Bruins.<br />
[2019-07-07 10:00:23 PM] - Scott Mayfield was added to Boston Bruins.<br />
[2019-07-07 10:00:05 PM] - Zach Hyman was added to Boston Bruins.<br />
[2019-07-07 9:59:53 PM] - Radek Faksa was added to Boston Bruins.<br />
[2019-07-07 9:59:34 PM] - Ross Johnston was added to Buffalo Sabres.<br />
[2019-07-07 9:59:20 PM] - William Karlsson was added to New Jersey Devils.<br />
[2019-07-07 9:58:45 PM] - Frank Vatrano was added to Tampa Bay Lightning.<br />
[2019-07-07 9:58:21 PM] - Marcus Foligno was added to Edmonton Oilers.<br />
[2019-07-07 9:57:36 PM] - Joel Armia was added to San Jose Sharks.<br />
[2019-07-07 9:57:22 PM] - Dominik Simon was added to St. Louis Blues.<br />
[2019-07-07 9:56:46 PM] - Phillip Danault was added to Calgary Flames.<br />
[2019-07-07 9:56:30 PM] - Scott Wedgewood was added to Edmonton Oilers.<br />
[2019-07-07 9:56:12 PM] - Kurtis MacDermid was added to Buffalo Sabres.<br />
[2019-07-07 9:55:55 PM] - Turner Elson was added to Buffalo Sabres.<br />
[2019-07-07 9:55:43 PM] - Jakub Jerabek was added to Buffalo Sabres.<br />
[2019-07-07 9:55:22 PM] - Louis Domingue was added to St. Louis Blues.<br />
[2019-07-07 9:55:02 PM] - Garret Sparks was added to New Jersey Devils.<br />
[2019-07-07 9:54:43 PM] - Devante Smith-Pelly was added to St. Louis Blues.<br />
[2019-07-07 9:54:27 PM] - Linus Ullmark was added to Buffalo Sabres.<br />
[2019-07-07 9:54:09 PM] - Brock Nelson was added to Philadelphia Flyers.<br />
[2019-07-07 9:53:54 PM] - Cody Eakin was added to Philadelphia Flyers.<br />
[2019-07-07 9:49:40 PM] - TRADE : From Edmonton Oilers to Colorado Avalanche : Tomas Nosek (64), Andrew Cogliano (68), Y:2019-RND:1-TBL, Y:2019-RND:2-CGY.<br />
[2019-07-07 9:49:40 PM] - TRADE : From Colorado Avalanche to Edmonton Oilers : Martin Ouellette (P), Y:2019-RND:1-COL, Y:2019-RND:2-COL, Y:2019-RND:6-COL.<br />
[2019-07-07 9:48:16 PM] - TRADE : From Edmonton Oilers to Columbus Blue Jackets : Y:2021-RND:3-EDM, Y:2021-RND:7-EDM.<br />
[2019-07-07 9:48:16 PM] - TRADE : From Columbus Blue Jackets to Edmonton Oilers : Y:2019-RND:3-CLB.<br />
[2019-07-07 9:47:47 PM] - TRADE : From St. Louis Blues to Columbus Blue Jackets : Y:2021-RND:1-NYR, Y:2021-RND:2-STL.<br />
[2019-07-07 9:47:47 PM] - TRADE : From Columbus Blue Jackets to St. Louis Blues : Y:2019-RND:1-BUF, Y:2019-RND:2-CLB.<br />
[2019-07-07 9:46:17 PM] - TRADE : From St. Louis Blues to Boston Bruins : Pavel Zacha (71).<br />
[2019-07-07 9:46:17 PM] - TRADE : From Boston Bruins to St. Louis Blues : Mirco Mueller (68), Victor Ejdsell (61), Janne Kuokkanen (P).<br />
[2019-07-07 9:45:34 PM] - TRADE : From St. Louis Blues to San Jose Sharks : Y:2020-RND:4-STL, Y:2020-RND:5-SJS, Y:2020-RND:6-SJS, Y:2021-RND:4-STL.<br />
[2019-07-07 9:45:34 PM] - TRADE : From San Jose Sharks to St. Louis Blues : Y:2019-RND:3-WSH, Y:2019-RND:6-CAR, Y:2019-RND:6-MTL.<br />
[2019-07-07 9:44:41 PM] - TRADE : From Vancouver Canucks to San Jose Sharks : Victor Rask (62).<br />
[2019-07-07 9:44:41 PM] - TRADE : From San Jose Sharks to Vancouver Canucks : Y:2019-RND:5-SJS, Y:2019-RND:6-STL.<br />
[2019-07-07 9:44:03 PM] - TRADE : From Montreal Canadiens to Toronto Maple Leafs : Craig Anderson (68).<br />
[2019-07-07 9:43:44 PM] - TRADE : From Boston Bruins to Carolina Hurricanes : Andrew MacDonald (68).<br />
[2019-07-07 9:43:44 PM] - TRADE : From Carolina Hurricanes to Boston Bruins : Yegor Sharangovich (P).<br />
[2019-07-07 9:43:21 PM] - TRADE : From Philadelphia Flyers to Florida Panthers : Max Jones (60).<br />
[2019-07-07 9:43:21 PM] - TRADE : From Florida Panthers to Philadelphia Flyers : Ryan Strome (69).<br />
[2019-07-07 9:42:37 PM] - TRADE : From Buffalo Sabres to Vegas Golden Knights : Y:2020-RND:5-OTT, Y:2020-RND:6-OTT.<br />
[2019-07-07 9:42:37 PM] - TRADE : From Vegas Golden Knights to Buffalo Sabres : Y:2019-RND:5-VGK, Y:2020-RND:7-VGK.<br />
[2019-07-07 9:40:35 PM] - TRADE : From Carolina Hurricanes to Montreal Canadiens : Cal O'Reilly (67), Connor Murphy (71), Xavier Bernard (P).<br />
[2019-07-07 9:40:35 PM] - TRADE : From Montreal Canadiens to Carolina Hurricanes : Lucas Johansen (P), Y:2019-RND:3-NYR, Y:2019-RND:3-WPG.<br />
[2019-07-07 9:39:55 PM] - TRADE : From Detroit Red Wings to Arizona Coyotes : Libor Hajek (P), Urho Vaakanainen (P), Y:2020-RND:3-DET.<br />
[2019-07-07 9:39:55 PM] - TRADE : From Arizona Coyotes to Detroit Red Wings : Torey Krug (69).<br />
[2019-07-07 9:39:13 PM] - TRADE : From Tampa Bay Lightning to Vegas Golden Knights : Y:2019-RND:5-TBL.<br />
[2019-07-07 9:39:13 PM] - TRADE : From Vegas Golden Knights to Tampa Bay Lightning : Sam Gagner (68).<br />
[2019-07-07 9:33:02 PM] - TRADE : From Tampa Bay Lightning to St. Louis Blues : Niklas Kronwall (70).<br />
[2019-07-07 9:33:02 PM] - TRADE : From St. Louis Blues to Tampa Bay Lightning : Adam McQuaid (68).<br />
[2019-07-07 9:32:33 PM] - TRADE : From Tampa Bay Lightning to Boston Bruins : Erik Gudbranson (70), Janne Kuokkanen (P).<br />
[2019-07-07 9:32:33 PM] - TRADE : From Boston Bruins to Tampa Bay Lightning : Otto Koivula (P).<br />
[2019-07-07 9:31:28 PM] - TRADE : From Minnesota Wild to Edmonton Oilers : Braydon Coburn (69), Ryan Nugent-Hopkins (76), Y:2020-RND:7-MIN.<br />
[2019-07-07 9:31:28 PM] - TRADE : From Edmonton Oilers to Minnesota Wild : Mike Matheson (72), Alexander Romanov (P), Y:2019-RND:1-EDM, Y:2019-RND:2-EDM, Y:2019-RND:3-LAK.<br />
[2019-07-07 9:30:23 PM] - TRADE : From Buffalo Sabres to Edmonton Oilers : Y:2020-RND:7-BUF, Y:2020-RND:4-BUF.<br />
[2019-07-07 9:30:23 PM] - TRADE : From Edmonton Oilers to Buffalo Sabres : Y:2019-RND:5-LAK.<br />
[2019-07-07 9:27:45 PM] - Christopher Paquette has been deleted from New Jersey Devils.<br />
[2019-07-07 9:27:36 PM] - Ben Thomson has been deleted from New Jersey Devils.<br />
[2019-07-07 9:27:21 PM] - Marcel Noebels has been deleted from Tampa Bay Lightning.<br />
[2019-07-07 9:27:14 PM] - James Melindy has been deleted from Tampa Bay Lightning.<br />
[2019-07-07 9:27:08 PM] - Andrew O'Brien has been deleted from Colorado Avalanche.<br />
[2019-07-07 9:27:01 PM] - Julien Pelletier has been deleted from Colorado Avalanche.<br />
[2019-07-07 9:26:53 PM] - Matej Stransky has been deleted from Colorado Avalanche.<br />
[2019-07-07 9:26:43 PM] - Garrett Noonan has been deleted from Colorado Avalanche.<br />
[2019-07-07 9:26:34 PM] - Daniel Pribyl has been deleted from Colorado Avalanche.<br />
[2019-07-07 9:26:26 PM] - Chris Calnan has been deleted from Colorado Avalanche.<br />
[2019-07-07 9:26:04 PM] - Brian Hart has been deleted from Colorado Avalanche.<br />
[2019-07-07 9:25:55 PM] - Riley Bruce has been deleted from New Jersey Devils.<br />
[2019-07-07 9:25:48 PM] - Joe Wegwerth has been deleted from New Jersey Devils.<br />
[2019-06-29 8:42:24 PM] - Brian Elliott was added to Tampa Bay Lightning.<br />
[2019-06-29 8:42:07 PM] - John Tavares was added to Tampa Bay Lightning.<br />
[2019-06-29 8:41:26 PM] - Sidney Crosby was added to Buffalo Sabres.<br />
[2019-06-28 8:56:02 PM] - TRADE : From Philadelphia Flyers to Winnipeg Jets : Jesperi Kotkaniemi (66).<br />
[2019-06-28 8:56:02 PM] - TRADE : From Winnipeg Jets to Philadelphia Flyers : Max Jones (60), Y:2019-RND:1-STL.<br />
[2019-06-28 8:55:20 PM] - TRADE : From Philadelphia Flyers to Anaheim Ducks : Milos Roman (P), Scott Perunovich (P).<br />
[2019-06-28 8:55:20 PM] - TRADE : From Anaheim Ducks to Philadelphia Flyers : Cody Eakin (70).<br />
[2019-06-26 9:18:35 PM] - Juuso Valimaki has been deleted from Anaheim Ducks.<br />
[2019-06-26 9:18:28 PM] - Troy Terry has been deleted from Anaheim Ducks.<br />
[2019-06-26 9:18:22 PM] - Jordan Binnington has been deleted from Minnesota Wild.<br />
[2019-06-26 9:18:16 PM] - Sam Carrick has been deleted from Minnesota Wild.<br />
[2019-06-26 9:18:10 PM] - Jayce Hawryluk has been deleted from Minnesota Wild.<br />
[2019-06-26 9:18:04 PM] - Trent Frederic has been deleted from Anaheim Ducks.<br />
[2019-06-26 9:17:55 PM] - Zach Senyshyn has been deleted from Anaheim Ducks.<br />
[2019-06-26 9:17:49 PM] - Dillon Dube has been deleted from Anaheim Ducks.<br />
[2019-06-26 9:17:44 PM] - Filip Chytil has been deleted from Arizona Coyotes.<br />
[2019-06-26 9:17:33 PM] - Jordan Binnington was added to Minnesota Wild.<br />
[2019-06-26 9:17:28 PM] - Sam Carrick was added to Minnesota Wild.<br />
[2019-06-26 9:17:22 PM] - Jayce Hawryluk was added to Minnesota Wild.<br />
[2019-06-26 9:17:12 PM] - Juuso Valimaki was added to Anaheim Ducks.<br />
[2019-06-26 9:17:07 PM] - Troy Terry was added to Anaheim Ducks.<br />
[2019-06-26 9:17:00 PM] - Trent Frederic was added to Anaheim Ducks.<br />
[2019-06-26 9:16:52 PM] - Zach Senyshyn was added to Anaheim Ducks.<br />
[2019-06-26 9:16:45 PM] - Dillon Dube was added to Anaheim Ducks.<br />
[2019-06-26 9:16:39 PM] - Filip Chytil was added to Arizona Coyotes.<br />
[2019-06-26 8:31:53 PM] - TRADE : From Minnesota Wild to Vegas Golden Knights : Jordan Eberle (70).<br />
[2019-06-26 8:31:53 PM] - TRADE : From Vegas Golden Knights to Minnesota Wild : Y:2020-RND:4-ARI.<br />
[2019-06-26 8:31:31 PM] - TRADE : From Tampa Bay Lightning to Florida Panthers : Jakob Stenqvist (P).<br />
[2019-06-26 8:31:31 PM] - TRADE : From Florida Panthers to Tampa Bay Lightning : Eric Gryba (67).<br />
[2019-06-26 8:31:13 PM] - TRADE : From New York Islanders to St. Louis Blues : Y:2019-RND:3-MIN.<br />
[2019-06-26 8:31:13 PM] - TRADE : From St. Louis Blues to New York Islanders : Daniel Carr (69), Y:2019-RND:5-ANH.<br />
[2019-06-26 8:27:42 PM] - Maximilian Pajpach has been deleted from Nashville Predators.<br />
[2019-06-26 8:27:35 PM] - Luke Opilka has been deleted from Nashville Predators.<br />
[2019-06-26 8:27:27 PM] - Gustav Possler has been deleted from Minnesota Wild.<br />
[2019-06-26 8:27:21 PM] - Mikael Wikstrand has been deleted from Minnesota Wild.<br />
[2019-06-26 8:27:10 PM] - Gage Ausmus has been deleted from Minnesota Wild.<br />
[2019-06-26 8:27:03 PM] - Aaron Haydon has been deleted from Minnesota Wild.<br />
[2019-06-26 8:26:58 PM] - Geoffrey Schemitsch has been deleted from Minnesota Wild.<br />
[2019-06-26 8:26:41 PM] - Jordan Fransoo has been deleted from Minnesota Wild.<br />
[2019-06-26 8:26:36 PM] - Kyle Platzer has been deleted from Minnesota Wild.<br />
[2019-06-26 8:26:28 PM] - Quentin Shore has been deleted from Minnesota Wild.<br />
[2019-06-26 8:25:30 PM] - Paul Carey was added to Florida Panthers.<br />
[2019-06-23 4:20:02 PM] - Anthony Duclair was added to Calgary Flames.<br />
[2019-06-23 4:17:54 PM] - Pheonix Copley was added to Nashville Predators.<br />
[2019-06-23 4:16:56 PM] - Oscar Klefbom was added to Nashville Predators.<br />
[2019-06-23 4:16:25 PM] - Conor Sheary was added to Philadelphia Flyers.<br />
[2019-06-23 4:15:56 PM] - Laurent Brossoit was added to San Jose Sharks.<br />
[2019-06-23 4:15:10 PM] - Jack Eichel was added to Washington Capitals.<br />
[2019-06-23 4:14:42 PM] - Mattias Janmark was added to Anaheim Ducks.<br />
[2019-06-23 4:14:21 PM] - Kyle Rau was added to Calgary Flames.<br />
[2019-06-23 4:13:39 PM] - Darnell Nurse was added to New Jersey Devils.<br />
[2019-06-23 4:13:24 PM] - Dylan DeMelo was added to New York Islanders.<br />
[2019-06-23 4:12:41 PM] - Oscar Lindberg was added to New Jersey Devils.<br />
[2019-06-23 4:12:19 PM] - Nick Paul was added to Carolina Hurricanes.<br />
[2019-06-23 4:11:56 PM] - Austin Watson was added to Calgary Flames.<br />
[2019-06-23 4:11:01 PM] - Brad Malone was added to Calgary Flames.<br />
[2019-06-23 4:10:03 PM] - Joseph Blandisi was added to Chicago Blackhawks.<br />
[2019-06-23 4:09:30 PM] - Ty Rattie was added to Chicago Blackhawks.<br />
[2019-06-23 1:03:05 PM] - TRADE : From St. Louis Blues to San Jose Sharks : Y:2019-RND:6-CAR.<br />
[2019-06-23 1:03:05 PM] - TRADE : From San Jose Sharks to St. Louis Blues : Andrew Ladd (67), Y:2019-RND:7-SJS.<br />
[2019-06-23 1:02:42 PM] - TRADE : From St. Louis Blues to Winnipeg Jets : Y:2019-RND:5-STL.<br />
[2019-06-23 1:02:11 PM] - TRADE : From Vancouver Canucks to Philadelphia Flyers : Pat Maroon (66).<br />
[2019-06-23 1:02:11 PM] - TRADE : From Philadelphia Flyers to Vancouver Canucks : Brett Seney (59).<br />
[2019-06-23 1:01:40 PM] - TRADE : From Buffalo Sabres to Philadelphia Flyers : Trevor Lewis (65).<br />
[2019-06-23 1:01:40 PM] - TRADE : From Philadelphia Flyers to Buffalo Sabres : Y:2019-RND:5-TOR.<br />
[2019-06-23 1:01:18 PM] - TRADE : From New York Islanders to Philadelphia Flyers : Josh Bailey (71).<br />
[2019-06-23 1:01:18 PM] - TRADE : From Philadelphia Flyers to New York Islanders : Y:2019-RND:3-MIN.<br />
[2019-06-23 1:00:46 PM] - TRADE : From Los Angeles Kings to Philadelphia Flyers : Radko Gudas (73).<br />
[2019-06-23 1:00:46 PM] - TRADE : From Philadelphia Flyers to Los Angeles Kings : Y:2019-RND:3-TBL.<br />
[2019-06-23 1:00:00 PM] - TRADE : From New Jersey Devils to Arizona Coyotes : Jay Bouwmeester (72).<br />
[2019-06-23 1:00:00 PM] - TRADE : From Arizona Coyotes to New Jersey Devils : Y:2019-RND:6-BOS.<br />
[2019-06-23 12:56:59 PM] - TRADE : From Edmonton Oilers to Tampa Bay Lightning : Connor Hellebuyck (77), Derick Brassard (69), Karel Vejmelka (P), Linus Olund (P).<br />
[2019-06-23 12:56:59 PM] - TRADE : From Tampa Bay Lightning to Edmonton Oilers : Lars Eller (72), Scott Wedgewood (61), Alexander Romanov (P), Y:2019-RND:1-TBL, Y:2020-RND:2-TBL.<br />
[2019-06-19 5:17:06 PM] - TRADE : From Philadelphia Flyers to Carolina Hurricanes : Samuel Girard (67).<br />
[2019-06-19 4:24:21 PM] - Drake Batherson has been deleted from Vegas Golden Knights.<br />
[2019-06-19 4:24:13 PM] - Caleb Jones has been deleted from Vegas Golden Knights.<br />
[2019-06-19 4:24:07 PM] - Jacob Larsson has been deleted from Washington Capitals.<br />
[2019-06-19 4:23:57 PM] - Henri Jokiharju has been deleted from Vegas Golden Knights.<br />
[2019-06-19 4:23:52 PM] - Andrei Svechnikov has been deleted from Vegas Golden Knights.<br />
[2019-06-19 4:23:44 PM] - Carl Grundstrom has been deleted from Washington Capitals.<br />
[2019-06-19 4:23:33 PM] - Drake Batherson was added to Vegas Golden Knights.<br />
[2019-06-19 4:23:24 PM] - Caleb Jones was added to Vegas Golden Knights.<br />
[2019-06-19 4:23:13 PM] - Henri Jokiharju was added to Vegas Golden Knights.<br />
[2019-06-19 4:22:42 PM] - Andrei Svechnikov was added to Vegas Golden Knights.<br />
[2019-06-19 4:22:30 PM] - Jacob Larsson was added to Washington Capitals.<br />
[2019-06-19 4:22:12 PM] - Carl Grundstrom was added to Washington Capitals.<br />
[2019-06-19 4:16:13 PM] - TRADE : From San Jose Sharks to Chicago Blackhawks : Corey Crawford (70).<br />
[2019-06-19 4:16:13 PM] - TRADE : From Chicago Blackhawks to San Jose Sharks : Y:2020-RND:3-CHI.<br />
[2019-06-19 4:15:29 PM] - TRADE : From Vegas Golden Knights to Carolina Hurricanes : Boo Nieves (64).<br />
[2019-06-19 4:15:29 PM] - TRADE : From Carolina Hurricanes to Vegas Golden Knights : Y:2020-RND:4-ARI.<br />
[2019-06-19 4:15:07 PM] - TRADE : From Anaheim Ducks to Florida Panthers : Brendan Guhle (63).<br />
[2019-06-19 4:15:07 PM] - TRADE : From Florida Panthers to Anaheim Ducks : Y:2020-RND:2-FLA, Y:2020-RND:4-FLA.<br />
[2019-06-19 4:14:48 PM] - TRADE : From Washington Capitals to Florida Panthers : Darren Helm (68).<br />
[2019-06-19 4:14:48 PM] - TRADE : From Florida Panthers to Washington Capitals : Y:2019-RND:4-WSH.<br />
[2019-06-19 4:14:23 PM] - TRADE : From Winnipeg Jets to Minnesota Wild : Lukas Elvenes (P).<br />
[2019-06-19 4:14:23 PM] - TRADE : From Minnesota Wild to Winnipeg Jets : Niklas Nordgren (P).<br />
[2019-06-19 4:13:52 PM] - TRADE : From Vancouver Canucks to Tampa Bay Lightning : Gustav Bouramman (P), Y:2019-RND:6-VGK.<br />
[2019-06-19 4:13:52 PM] - TRADE : From Tampa Bay Lightning to Vancouver Canucks : Ryan Kesler (68).<br />
[2019-06-18 4:23:52 PM] - Jakob Silfverberg was added to Minnesota Wild.<br />
[2019-06-18 4:19:26 PM] - Colton White has been deleted from Boston Bruins.<br />
[2019-06-18 4:19:21 PM] - Jacob Middleton has been deleted from Boston Bruins.<br />
[2019-06-18 4:19:14 PM] - Sami Niku has been deleted from Columbus Blue Jackets.<br />
[2019-06-18 4:19:02 PM] - Sami Niku was added to Columbus Blue Jackets.<br />
[2019-06-18 4:18:52 PM] - Jacob Middleton was added to Boston Bruins.<br />
[2019-06-18 4:18:45 PM] - Colton White was added to Boston Bruins.<br />
[2019-06-18 4:15:45 PM] - TRADE : From Anaheim Ducks to Florida Panthers : Michael Stone (67).<br />
[2019-06-18 4:15:45 PM] - TRADE : From Florida Panthers to Anaheim Ducks : Ryan Miller (65).<br />
[2019-06-18 4:15:28 PM] - TRADE : From Anaheim Ducks to Washington Capitals : Jason Dickinson (67).<br />
[2019-06-18 4:15:28 PM] - TRADE : From Washington Capitals to Anaheim Ducks : Y:2020-RND:3-BOS.<br />
[2019-06-18 4:15:00 PM] - TRADE : From Carolina Hurricanes to Philadelphia Flyers : Conor Sheary (66), Jack Badini (P), Y:2019-RND:3-TBL.<br />
[2019-06-18 4:14:30 PM] - TRADE : From Calgary Flames to Philadelphia Flyers : Jonathan Ericsson (70), Y:2019-RND:3-MIN.<br />
[2019-06-18 4:14:30 PM] - TRADE : From Philadelphia Flyers to Calgary Flames : Jonathon Merrill (70).<br />
[2019-06-18 4:14:01 PM] - TRADE : From Los Angeles Kings to Philadelphia Flyers : Brock Nelson (74).<br />
[2019-06-18 4:14:01 PM] - TRADE : From Philadelphia Flyers to Los Angeles Kings : Neal Pionk (72).<br />
[2019-06-18 4:13:15 PM] - Brett Lernout was added to New York Islanders.<br />
[2019-06-18 4:12:53 PM] - Scott Harrington was added to New York Islanders.<br />
[2019-06-18 4:12:39 PM] - Max McCormick was added to New York Islanders.<br />
[2019-06-18 4:12:25 PM] - Connor Brickley was added to New York Islanders.<br />
[2019-06-18 4:12:10 PM] - Taylor Leier was added to New York Islanders.<br />
[2019-06-18 4:11:53 PM] - Landon Ferraro was added to New York Islanders.<br />
[2019-06-18 4:11:38 PM] - Ryan Ellis was added to New York Islanders.<br />
[2019-06-18 4:11:20 PM] - Ryan Pulock was added to New York Islanders.<br />
[2019-06-18 4:10:57 PM] - Alexandre Carrier was added to Florida Panthers.<br />
[2019-06-18 4:10:29 PM] - Jaccob Slavin was added to Calgary Flames.<br />
[2019-06-18 4:08:15 PM] - Josh Manson was added to Buffalo Sabres.<br />
[2019-06-18 4:07:56 PM] - Yanni Gourde was added to Los Angeles Kings.<br />
[2019-06-18 4:07:37 PM] - Frederik Gauthier was added to Los Angeles Kings.<br />
[2019-06-18 4:06:22 PM] - John Gibson was added to Edmonton Oilers.<br />
[2019-06-17 8:38:37 PM] - T.J. Oshie was added to Washington Capitals.<br />
[2019-06-17 8:28:26 PM] - Michael Dal Colle has been deleted from Florida Panthers.<br />
[2019-06-17 8:28:20 PM] - Rudolfs Balcers has been deleted from Vancouver Canucks.<br />
[2019-06-17 8:28:14 PM] - Mackenzie MacEachern has been deleted from Vancouver Canucks.<br />
[2019-06-17 8:28:03 PM] - Cooper Marody has been deleted from Florida Panthers.<br />
[2019-06-17 8:27:56 PM] - Alex Schoenborn has been deleted from Montreal Canadiens.<br />
[2019-06-17 8:27:49 PM] - Miro Heiskanen has been deleted from Winnipeg Jets.<br />
[2019-06-17 8:27:21 PM] - Max Jones has been deleted from Winnipeg Jets.<br />
[2019-06-17 8:27:13 PM] - John Quenneville has been deleted from Winnipeg Jets.<br />
[2019-06-17 8:27:06 PM] - Roope Hintz has been deleted from Winnipeg Jets.<br />
[2019-06-17 8:26:58 PM] - Ryan Lindgren has been deleted from Winnipeg Jets.<br />
[2019-06-17 8:26:52 PM] - Juho Lammikko has been deleted from Winnipeg Jets.<br />
[2019-06-17 8:26:45 PM] - Guillaume Brisebois has been deleted from Winnipeg Jets.<br />
[2019-06-17 8:26:37 PM] - Clark Bishop has been deleted from Winnipeg Jets.<br />
[2019-06-17 8:26:30 PM] - Adam Tambellini has been deleted from Montreal Canadiens.<br />
[2019-06-17 8:26:12 PM] - Henrik Borgstrom has been deleted from Montreal Canadiens.<br />
[2019-06-17 8:25:54 PM] - Carter Hart has been deleted from Montreal Canadiens.<br />
[2019-06-17 8:25:37 PM] - Christian Wolanin has been deleted from Los Angeles Kings.<br />
[2019-06-17 8:25:30 PM] - Jordan Greenway has been deleted from Los Angeles Kings.<br />
[2019-06-17 8:25:12 PM] - Austen Brassard has been deleted from Montreal Canadiens.<br />
[2019-06-17 8:24:20 PM] - Miro Heiskanen was added to Winnipeg Jets.<br />
[2019-06-17 8:24:04 PM] - Max Jones was added to Winnipeg Jets.<br />
[2019-06-17 8:23:54 PM] - John Quenneville was added to Winnipeg Jets.<br />
[2019-06-17 8:23:46 PM] - Roope Hintz was added to Winnipeg Jets.<br />
[2019-06-17 8:23:39 PM] - Ryan Lindgren was added to Winnipeg Jets.<br />
[2019-06-17 8:23:34 PM] - Juho Lammikko was added to Winnipeg Jets.<br />
[2019-06-17 8:23:27 PM] - Guillaume Brisebois was added to Winnipeg Jets.<br />
[2019-06-17 8:23:21 PM] - Clark Bishop was added to Winnipeg Jets.<br />
[2019-06-17 8:23:10 PM] - Rudolfs Balcers was added to Vancouver Canucks.<br />
[2019-06-17 8:23:02 PM] - Mackenzie MacEachern was added to Vancouver Canucks.<br />
[2019-06-17 8:22:40 PM] - Michael Dal Colle was added to Florida Panthers.<br />
[2019-06-17 8:22:34 PM] - Cooper Marody was added to Florida Panthers.<br />
[2019-06-17 8:22:24 PM] - Christian Wolanin was added to Los Angeles Kings.<br />
[2019-06-17 8:22:19 PM] - Jordan Greenway was added to Los Angeles Kings.<br />
[2019-06-17 8:22:01 PM] - Alex Schoenborn was added to Montreal Canadiens.<br />
[2019-06-17 8:21:54 PM] - Adam Tambellini was added to Montreal Canadiens.<br />
[2019-06-17 8:21:40 PM] - Carter Hart was added to Montreal Canadiens.<br />
[2019-06-17 8:21:34 PM] - Henrik Borgstrom was added to Montreal Canadiens.<br />
[2019-06-17 8:21:26 PM] - Austen Brassard was added to Montreal Canadiens.<br />
[2019-06-17 8:02:18 PM] - TRADE : From Carolina Hurricanes to Washington Capitals : Petr Mrazek (75).<br />
[2019-06-17 8:02:18 PM] - TRADE : From Washington Capitals to Carolina Hurricanes : Y:2019-RND:2-OTT, Y:2019-RND:2-VAN.<br />
[2019-06-17 7:55:22 PM] - TRADE : From Washington Capitals to Columbus Blue Jackets : Mark Pysyk (70).<br />
[2019-06-17 7:55:22 PM] - TRADE : From Columbus Blue Jackets to Washington Capitals : Jujhar Khaira (66), Michael Chaput (63), Y:2019-RND:4-CLB.<br />
[2019-06-17 7:54:31 PM] - TRADE : From Buffalo Sabres to Columbus Blue Jackets : Y:2019-RND:6-MIN.<br />
[2019-06-17 7:54:31 PM] - TRADE : From Columbus Blue Jackets to Buffalo Sabres : Remi Elie (62).<br />
[2019-06-17 7:53:52 PM] - TRADE : From St. Louis Blues to Winnipeg Jets : Nils Lundkvist (P), Y:2019-RND:1-STL.<br />
[2019-06-17 7:53:52 PM] - TRADE : From Winnipeg Jets to St. Louis Blues : Alexandre Texier (P), Y:2019-RND:1-WPG.<br />
[2019-06-17 7:53:08 PM] - TRADE : From Vegas Golden Knights to Tampa Bay Lightning : Marc Methot (62).<br />
[2019-06-17 7:53:08 PM] - TRADE : From Tampa Bay Lightning to Vegas Golden Knights : Y:2020-RND:6-TBL.<br />
[2019-06-16 8:29:41 PM] - TRADE : From Edmonton Oilers to Tampa Bay Lightning : Justin Abdelkader (68).<br />
[2019-06-16 8:29:41 PM] - TRADE : From Tampa Bay Lightning to Edmonton Oilers : Y:2020-RND:5-TBL.<br />
[2019-06-16 8:29:22 PM] - TRADE : From Edmonton Oilers to Anaheim Ducks : Mattias Janmark (66), Y:2020-RND:4-EDM.<br />
[2019-06-16 8:29:22 PM] - TRADE : From Anaheim Ducks to Edmonton Oilers : Richard Panik (70), Y:2020-RND:7-ANH.<br />
[2019-06-16 8:27:05 PM] - Rem Pitlick has been deleted from Carolina Hurricanes.<br />
[2019-06-16 8:26:57 PM] - Casey Mittelstadt has been deleted from Carolina Hurricanes.<br />
[2019-06-16 8:26:52 PM] - Christoffer Ehn has been deleted from Calgary Flames.<br />
[2019-06-16 8:26:46 PM] - Tyrell Goulbourne has been deleted from Calgary Flames.<br />
[2019-06-16 8:26:38 PM] - Logan Brown has been deleted from Chicago Blackhawks.<br />
[2019-06-16 8:26:33 PM] - Devon Toews has been deleted from Calgary Flames.<br />
[2019-06-16 8:26:25 PM] - Adam Gaudette has been deleted from Edmonton Oilers.<br />
[2019-06-16 8:26:18 PM] - Luke Kunin has been deleted from Edmonton Oilers.<br />
[2019-06-16 8:26:11 PM] - Joseph Anderson has been deleted from Edmonton Oilers.<br />
[2019-06-16 8:25:59 PM] - Dennis Gilbert has been deleted from Edmonton Oilers.<br />
[2019-06-16 8:25:53 PM] - Jeremy Lauzon has been deleted from Edmonton Oilers.<br />
[2019-06-16 8:25:40 PM] - Rem Pitlick was added to Carolina Hurricanes.<br />
[2019-06-16 8:25:30 PM] - Casey Mittelstadt was added to Carolina Hurricanes.<br />
[2019-06-16 8:25:18 PM] - Logan Brown was added to Chicago Blackhawks.<br />
[2019-06-16 8:25:07 PM] - Christoffer Ehn was added to Calgary Flames.<br />
[2019-06-16 8:25:03 PM] - Tyrell Goulbourne was added to Calgary Flames.<br />
[2019-06-16 8:24:55 PM] - Devon Toews was added to Calgary Flames.<br />
[2019-06-16 8:24:45 PM] - Adam Gaudette was added to Edmonton Oilers.<br />
[2019-06-16 8:24:39 PM] - Luke Kunin was added to Edmonton Oilers.<br />
[2019-06-16 8:24:33 PM] - Joey Anderson was added to Edmonton Oilers.<br />
[2019-06-16 8:24:18 PM] - Dennis Gilbert was added to Edmonton Oilers.<br />
[2019-06-16 8:24:13 PM] - Jeremy Lauzon was added to Edmonton Oilers.<br />
[2019-06-16 7:51:12 PM] - TRADE : From Vegas Golden Knights to Carolina Hurricanes : David Backes (67).<br />
[2019-06-16 7:51:12 PM] - TRADE : From Carolina Hurricanes to Vegas Golden Knights : Y:2021-RND:6-SJS.<br />
[2019-06-16 5:04:40 PM] - Dennis Cholowski has been deleted from Nashville Predators.<br />
[2019-06-16 5:04:34 PM] - Robert Thomas has been deleted from San Jose Sharks.<br />
[2019-06-16 5:04:28 PM] - Erik Cernak has been deleted from Nashville Predators.<br />
[2019-06-16 5:04:22 PM] - Brett Howden has been deleted from Toronto Maple Leafs.<br />
[2019-06-16 5:04:15 PM] - Brett Seney has been deleted from Philadelphia Flyers.<br />
[2019-06-16 5:04:09 PM] - Maxime Comtois has been deleted from Philadelphia Flyers.<br />
[2019-06-16 5:04:04 PM] - Rasmus Dahlin has been deleted from Philadelphia Flyers.<br />
[2019-06-16 5:03:58 PM] - Kailer Yamamoto has been deleted from Philadelphia Flyers.<br />
[2019-06-16 5:03:52 PM] - Jesperi Kotkaniemi has been deleted from Philadelphia Flyers.<br />
[2019-06-16 5:03:36 PM] - Robert Thomas was added to San Jose Sharks.<br />
[2019-06-16 5:03:27 PM] - Dennis Cholowski was added to Nashville Predators.<br />
[2019-06-16 5:03:20 PM] - Erik Cernak was added to Nashville Predators.<br />
[2019-06-16 5:03:13 PM] - Brett Howden was added to Toronto Maple Leafs.<br />
[2019-06-16 5:02:56 PM] - Brett Seney was added to Philadelphia Flyers.<br />
[2019-06-16 5:02:50 PM] - Maxime Comtois was added to Philadelphia Flyers.<br />
[2019-06-16 5:02:44 PM] - Rasmus Dahlin was added to Philadelphia Flyers.<br />
[2019-06-16 5:02:38 PM] - Kailer Yamamoto was added to Philadelphia Flyers.<br />
[2019-06-16 5:02:30 PM] - Jesperi Kotkaniemi was added to Philadelphia Flyers.<br />
[2019-06-16 4:56:06 PM] - TRADE : From New York Islanders to Los Angeles Kings : Alex Galchenyuk (71), Yanni Gourde (70), Jordan Greenway (P), Y:2019-RND:1-NYI, Y:2019-RND:3-NYI.<br />
[2019-06-16 4:56:06 PM] - TRADE : From Los Angeles Kings to New York Islanders : Ryan O'Reilly (78).<br />
[2019-06-16 4:55:28 PM] - TRADE : From Carolina Hurricanes to Calgary Flames : Casey DeSmith (71), Y:2020-RND:4-PHL.<br />
[2019-06-16 4:55:28 PM] - TRADE : From Calgary Flames to Carolina Hurricanes : Martin Hanzal (58), Mathieu Perreault (66), Petr Mrazek (75).<br />
[2019-06-16 4:54:42 PM] - TRADE : From San Jose Sharks to Calgary Flames : Steven Santini (66), Taylor Hall (77), Y:2020-RND:3-ANH.<br />
[2019-06-16 4:54:42 PM] - TRADE : From Calgary Flames to San Jose Sharks : Filip Forsberg (74), Joel Edmundson (71), Mario Ferraro (P).<br />
[2019-06-16 4:53:52 PM] - TRADE : From Toronto Maple Leafs to Vancouver Canucks : Y:2019-RND:5-NJD.<br />
[2019-06-16 4:53:52 PM] - TRADE : From Vancouver Canucks to Toronto Maple Leafs : Aaron Dell (56).<br />
[2019-06-16 4:53:31 PM] - TRADE : From Toronto Maple Leafs to San Jose Sharks : Darcy Kuemper (80).<br />
[2019-06-16 4:53:31 PM] - TRADE : From San Jose Sharks to Toronto Maple Leafs : Jared Coreau (58), Y:2019-RND:1-SJS.<br />
[2019-06-16 4:51:16 PM] - TRADE : From Tampa Bay Lightning to Carolina Hurricanes : Y:2019-RND:2-TBL, Y:2019-RND:3-TBL, Y:2020-RND:4-TBL.<br />
[2019-06-16 4:51:16 PM] - TRADE : From Carolina Hurricanes to Tampa Bay Lightning : Frank Vatrano (69), Jack Adams (P), Pavel Koltygin (P).<br />
[2019-06-16 4:50:39 PM] - TRADE : From Tampa Bay Lightning to Carolina Hurricanes : Jesse Ylonen (P), Sampo Ranta (P), Y:2021-RND:4-TBL.<br />
[2019-06-16 4:50:39 PM] - TRADE : From Carolina Hurricanes to Tampa Bay Lightning : Zach Bogosian (70), Marcus Westfalt (P), Sebastian Repo (P).<br />
[2019-06-16 4:49:18 PM] - TRADE : From Toronto Maple Leafs to Carolina Hurricanes : Wayne Simmonds (68).<br />
[2019-06-16 4:49:18 PM] - TRADE : From Carolina Hurricanes to Toronto Maple Leafs : Y:2020-RND:4-CHI.<br />
[2019-06-16 4:48:55 PM] - TRADE : From Boston Bruins to Tampa Bay Lightning : Cam Atkinson (74), Ondrej Palat (68).<br />
[2019-06-16 4:48:55 PM] - TRADE : From Tampa Bay Lightning to Boston Bruins : Brent Burns (78), Jan Drozg (P).<br />
[2019-06-15 9:13:47 PM] - Steven Lorentz has been deleted from Toronto Maple Leafs.<br />
[2019-06-15 9:13:40 PM] - Jeremy Bracco has been deleted from Toronto Maple Leafs.<br />
[2019-06-15 9:13:32 PM] - Emil Johansson has been deleted from Toronto Maple Leafs.<br />
[2019-06-15 9:13:27 PM] - Dylan Wells has been deleted from Toronto Maple Leafs.<br />
[2019-06-15 9:13:21 PM] - Spencer Smallman has been deleted from Toronto Maple Leafs.<br />
[2019-06-15 9:13:15 PM] - Sam Steel has been deleted from Columbus Blue Jackets.<br />
[2019-06-15 9:13:08 PM] - Elias Pettersson has been deleted from Columbus Blue Jackets.<br />
[2019-06-15 9:12:55 PM] - Steven Lorentz was added to Toronto Maple Leafs.<br />
[2019-06-15 9:12:50 PM] - Jeremy Bracco was added to Toronto Maple Leafs.<br />
[2019-06-15 9:12:43 PM] - Emil Johansson was added to Toronto Maple Leafs.<br />
[2019-06-15 9:12:37 PM] - Dylan Wells was added to Toronto Maple Leafs.<br />
[2019-06-15 9:12:32 PM] - Spencer Smallman was added to Toronto Maple Leafs.<br />
[2019-06-15 9:12:24 PM] - Elias Pettersson was added to Columbus Blue Jackets.<br />
[2019-06-15 9:12:17 PM] - Sam Steel was added to Columbus Blue Jackets.<br />
[2019-06-15 9:04:31 PM] - Noah Rod has been deleted from Tampa Bay Lightning.<br />
[2019-06-15 9:03:55 PM] - Patrick McNally has been deleted from Tampa Bay Lightning.<br />
[2019-06-15 9:03:49 PM] - Patrick Cehlin has been deleted from Tampa Bay Lightning.<br />
[2019-06-15 9:03:26 PM] - Anton Rodin has been deleted from Tampa Bay Lightning.<br />
[2019-06-15 8:58:54 PM] - Ryan Murphy was added to Florida Panthers.<br />
[2019-06-15 8:58:36 PM] - Michael Raffl was added to New Jersey Devils.<br />
[2019-06-15 8:58:23 PM] - Nick Ritchie was added to New Jersey Devils.<br />
[2019-06-15 8:58:00 PM] - Malcolm Subban was added to Los Angeles Kings.<br />
[2019-06-15 8:57:41 PM] - Xavier Ouellet was added to Los Angeles Kings.<br />
[2019-06-15 3:24:24 PM] - Kevin Connauton was added to Tampa Bay Lightning.<br />
[2019-06-15 3:24:00 PM] - Justin Braun was added to San Jose Sharks.<br />
[2019-06-15 3:23:31 PM] - Mike Green was added to Winnipeg Jets.<br />
[2019-06-15 3:22:45 PM] - Anton Khudobin was added to Florida Panthers.<br />
[2019-06-15 3:22:20 PM] - P.K. Subban was added to Los Angeles Kings.<br />
[2019-06-15 3:20:53 PM] - Jimmy Howard was added to Chicago Blackhawks.<br />
[2019-06-15 11:49:05 AM] - Evander Kane was added to Columbus Blue Jackets.<br />
[2019-06-15 11:06:42 AM] - Nikolaj Ehlers was added to Montreal Canadiens.<br />
[2019-06-15 11:06:19 AM] - Dylan Larkin was added to Calgary Flames.<br />
[2019-06-15 11:06:02 AM] - Jordan Oesterle was added to Chicago Blackhawks.<br />
[2019-06-15 11:05:20 AM] - Brendan Gallagher was added to Toronto Maple Leafs.<br />
[2019-06-15 11:04:50 AM] - Max Domi was added to Philadelphia Flyers.<br />
[2019-06-15 11:04:08 AM] - Matt Murray was added to Winnipeg Jets.<br />
[2019-06-15 11:03:10 AM] - Shea Theodore was added to Toronto Maple Leafs.<br />
[2019-06-15 11:02:44 AM] - Brandon Saad was added to Vancouver Canucks.<br />
[2019-06-15 11:01:15 AM] - William Carrier was added to Vancouver Canucks.<br />
[2019-06-15 11:00:56 AM] - Jordan Martinook was added to Toronto Maple Leafs.<br />
[2019-06-15 11:00:38 AM] - Nate Schmidt was added to Los Angeles Kings.<br />
[2019-06-15 11:00:14 AM] - Victor Rask was added to Vancouver Canucks.<br />
[2019-06-15 10:59:48 AM] - Stephen Johns was added to Vancouver Canucks.<br />
[2019-06-15 10:59:13 AM] - Scott Wilson was added to Winnipeg Jets.<br />
[2019-06-15 10:58:54 AM] - Esa Lindell was added to Tampa Bay Lightning.<br />
[2019-06-15 10:58:24 AM] - Teuvo Teravainen was added to Buffalo Sabres.<br />
[2019-06-15 10:57:51 AM] - Noah Hanifin was added to Edmonton Oilers.<br />
[2019-06-15 10:57:08 AM] - Jake Virtanen was added to Columbus Blue Jackets.<br />
[2019-06-15 10:43:48 AM] - Max Lagace was added to Vancouver Canucks.<br />
[2019-06-15 10:42:26 AM] - Pat Maroon was added to Vancouver Canucks.<br />
[2019-06-15 10:27:49 AM] - C.J. Suess was added to Florida Panthers.<br />
[2019-06-15 10:25:42 AM] - C.J. Smith was added to Florida Panthers.<br />
[2019-06-15 10:05:52 AM] - Mike Sgarbossa was added to Colorado Avalanche.<br />
[2019-06-15 10:00:25 AM] - Evgenii Dadonov was added to Boston Bruins.<br />
[2019-06-15 9:56:48 AM] - Patrick Sieloff was added to Anaheim Ducks.<br />
[2019-04-17 4:45:27 PM] - Nikita Soshnikov was added to Dallas Stars.<br />
[2019-04-12 3:44:54 PM] - Samu Perhonen has been deleted from Tampa Bay Lightning.<br />
[2019-04-12 3:44:43 PM] - Ryan Tesink has been deleted from Tampa Bay Lightning.<br />
[2019-04-12 3:44:34 PM] - Rodrigo Abols has been deleted from Tampa Bay Lightning.<br />
[2019-04-12 3:44:28 PM] - Richard Nejezchleb has been deleted from Tampa Bay Lightning.<br />
[2019-04-12 3:44:18 PM] - Maxim Kitsyn has been deleted from Tampa Bay Lightning.<br />
[2019-04-12 3:44:13 PM] - Matthew Berkovitz has been deleted from Tampa Bay Lightning.<br />
[2019-04-12 3:44:05 PM] - Kirill Kabanov has been deleted from Tampa Bay Lightning.<br />
[2019-04-08 4:18:12 PM] - Chad Johnson was added to St. Louis Blues.<br />
[2019-04-06 3:58:23 PM] - James Reimer was added to Carolina Hurricanes.<br />
[2019-04-01 4:20:20 PM] - Ryan Murphy was added to Florida Panthers.<br />
[2019-04-01 4:20:20 PM] - Mike Condon was added to Nashville Predators.<br />
<?php include "Footer.php";?>
