<?php
$DatabaseFile = (string)"OTHL-STHS.db";
$CareerStatDatabaseFile = (string)"OTHL-STHSCareerStat.db";
$NewsDatabaseFile = (string)"OTHL-STHSNews.db";
$WebClientHeadCode = "<link href=\"STHSMain.css\" rel=\"stylesheet\" type=\"text/css\" />";
If (file_exists("STHSMain-CSSOverwrite.css") == true){$WebClientHeadCode = $WebClientHeadCode . "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}
?>
