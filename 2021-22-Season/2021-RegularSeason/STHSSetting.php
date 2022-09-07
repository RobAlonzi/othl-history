<?php
$DatabaseFile = (string)"OTHL-STHS.db";
$CareerStatDatabaseFile = (string)"OTHL-STHSCareerStat.db";
$NewsDatabaseFile = (string)"OTHL-STHSNews.db";
$Cookie_Name = (string)"STHS-OTHL";
$CookieTeamNumberKey = (string)"FN8PpFOjaGk02a+c9ytm3LOQjJ7iumrrPM/cCfKo2zCJNklbKiW1bjDZhArWcb0yiAtWgdX5YqfQ/hG5NUeg2A==";
$LeagueOwner = (string)"Tyler Bell";
$MetaContent = (string)"STHS - Version : 3.3.1.4 - OTHL-STHS.db - OTHL-STHSCareerStat.db";
$WebClientHeadCode = "<link href=\"STHSMain.css\" rel=\"stylesheet\" type=\"text/css\" />";
If (file_exists("STHSMain-CSSOverwrite.css") == true){$WebClientHeadCode = $WebClientHeadCode . "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}
$DoNotRequiredLoginDynamicWebsite = (boolean)TRUE;
$LangOverwrite = (boolean)FALSE;
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
require_once "Cookie.php";
?>
