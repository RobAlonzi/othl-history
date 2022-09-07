<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Individual Leaders</title>
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
<b>Minimum Games Played: 1</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Nathan Walker (PRO)</td><td>16</td><td>29</td></tr>
<tr><td>2</td><td>Anthony Angello (PRO)</td><td>16</td><td>27</td></tr>
<tr><td>3</td><td>Kaapo Kakko (CHR)</td><td>16</td><td>24</td></tr>
<tr><td>4</td><td>A.J. Greer (HER)</td><td>16</td><td>24</td></tr>
<tr><td>5</td><td>Ryan MacInnis (SDG)</td><td>16</td><td>24</td></tr>
<tr><td>6</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>22</td></tr>
<tr><td>7</td><td>Dmytro Timashov (BEL)</td><td>16</td><td>20</td></tr>
<tr><td>8</td><td>Nick Moutrey (BEL)</td><td>16</td><td>19</td></tr>
<tr><td>9</td><td>Taylor Raddysh (MAN)</td><td>16</td><td>19</td></tr>
<tr><td>10</td><td>Eeli Tolvanen (MAN)</td><td>16</td><td>19</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Barrett Hayton (TOR)</td><td>16</td><td>25</td></tr>
<tr><td>2</td><td>Mitchell Stephens (CHR)</td><td>16</td><td>24</td></tr>
<tr><td>3</td><td>Brad Malone (STK)</td><td>16</td><td>22</td></tr>
<tr><td>4</td><td>Jaycob Megna (PRO)</td><td>16</td><td>22</td></tr>
<tr><td>5</td><td>Mike Hardman (STK)</td><td>16</td><td>21</td></tr>
<tr><td>6</td><td>Brandon Manning (LVP)</td><td>16</td><td>21</td></tr>
<tr><td>7</td><td>Cameron Gaunce (LVP)</td><td>16</td><td>21</td></tr>
<tr><td>8</td><td>Ryan Donato (PSM)</td><td>16</td><td>20</td></tr>
<tr><td>9</td><td>Jesper Boqvist (PSM)</td><td>16</td><td>20</td></tr>
<tr><td>10</td><td>Juuso Riikola (MAN)</td><td>16</td><td>19</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Nathan Walker (PRO)</td><td>16</td><td>144</td></tr>
<tr><td>2</td><td>Kaapo Kakko (CHR)</td><td>16</td><td>135</td></tr>
<tr><td>3</td><td>Anthony Angello (PRO)</td><td>16</td><td>124</td></tr>
<tr><td>4</td><td>Logan Brown (PSM)</td><td>16</td><td>118</td></tr>
<tr><td>5</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>116</td></tr>
<tr><td>6</td><td>Andrew Agozzino (TEX)</td><td>16</td><td>106</td></tr>
<tr><td>7</td><td>A.J. Greer (HER)</td><td>16</td><td>103</td></tr>
<tr><td>8</td><td>Jonah Gadjovich (CLE)</td><td>16</td><td>100</td></tr>
<tr><td>9</td><td>Eeli Tolvanen (MAN)</td><td>16</td><td>98</td></tr>
<tr><td>10</td><td>Alexandre Fortin (WBS)</td><td>16</td><td>94</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Rasmus Asplund (STK)</td><td>2</td><td>53.33%</td></tr>
<tr><td>2</td><td>Michael Anderson (PRO)</td><td>1</td><td>50.00%</td></tr>
<tr><td>3</td><td>Connor Bunnaman (IOA)</td><td>1</td><td>50.00%</td></tr>
<tr><td>4</td><td>Christian Djoos (ROC)</td><td>8</td><td>36.36%</td></tr>
<tr><td>5</td><td>Nico Sturm (TUC)</td><td>1</td><td>33.33%</td></tr>
<tr><td>6</td><td>Tyler Graovac (IOA)</td><td>1</td><td>33.33%</td></tr>
<tr><td>7</td><td>Mikhail Maltsev (ONT)</td><td>2</td><td>33.33%</td></tr>
<tr><td>8</td><td>Simon Holmstrom (TOR)</td><td>3</td><td>33.33%</td></tr>
<tr><td>9</td><td>Nic Petan (SJB)</td><td>6</td><td>33.33%</td></tr>
<tr><td>10</td><td>Martin Kaut (TOR)</td><td>16</td><td>31.91%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Barrett Hayton (TOR)</td><td>16</td><td>16-25-41</td></tr>
<tr><td>2</td><td>Brad Malone (STK)</td><td>16</td><td>18-22-40</td></tr>
<tr><td>3</td><td>Anthony Angello (PRO)</td><td>16</td><td>27-11-38</td></tr>
<tr><td>4</td><td>Taylor Raddysh (MAN)</td><td>16</td><td>19-16-35</td></tr>
<tr><td>5</td><td>Ryan Donato (PSM)</td><td>16</td><td>11-20-31</td></tr>
<tr><td>6</td><td>Mitchell Stephens (CHR)</td><td>16</td><td>7-24-31</td></tr>
<tr><td>7</td><td>Jordan Weal (LVP)</td><td>9</td><td>13-16-29</td></tr>
<tr><td>8</td><td>Ryan MacInnis (SDG)</td><td>16</td><td>24-3-27</td></tr>
<tr><td>9</td><td>Luke Johnson (SPR)</td><td>16</td><td>17-10-27</td></tr>
<tr><td>10</td><td>David Gustafsson (STK)</td><td>16</td><td>11-16-27</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Barrett Hayton (TOR)</td><td>16</td><td>16-25-41</td></tr>
<tr><td>2</td><td>Brad Malone (STK)</td><td>16</td><td>18-22-40</td></tr>
<tr><td>3</td><td>Mike Hardman (STK)</td><td>16</td><td>18-21-39</td></tr>
<tr><td>4</td><td>Eeli Tolvanen (MAN)</td><td>16</td><td>19-19-38</td></tr>
<tr><td>5</td><td>Nathan Walker (PRO)</td><td>16</td><td>29-7-36</td></tr>
<tr><td>6</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>22-13-35</td></tr>
<tr><td>7</td><td>Ryan Donato (PSM)</td><td>16</td><td>11-20-31</td></tr>
<tr><td>8</td><td>Jesper Boqvist (PSM)</td><td>16</td><td>11-20-31</td></tr>
<tr><td>9</td><td>Alexander Volkov (CHR)</td><td>16</td><td>16-14-30</td></tr>
<tr><td>10</td><td>Sheldon Rempal (LAV)</td><td>16</td><td>11-19-30</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Brad Malone (STK)</td><td>16</td><td>18-22-40</td></tr>
<tr><td>2</td><td>Mike Hardman (STK)</td><td>16</td><td>18-21-39</td></tr>
<tr><td>3</td><td>Eeli Tolvanen (MAN)</td><td>16</td><td>19-19-38</td></tr>
<tr><td>4</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>22-13-35</td></tr>
<tr><td>5</td><td>Taylor Raddysh (MAN)</td><td>16</td><td>19-16-35</td></tr>
<tr><td>6</td><td>Alexander Volkov (CHR)</td><td>16</td><td>16-14-30</td></tr>
<tr><td>7</td><td>Sheldon Rempal (LAV)</td><td>16</td><td>11-19-30</td></tr>
<tr><td>8</td><td>Jordan Weal (LVP)</td><td>9</td><td>13-16-29</td></tr>
<tr><td>9</td><td>Kaapo Kakko (CHR)</td><td>16</td><td>24-4-28</td></tr>
<tr><td>10</td><td>Trey Fix-Wolansky (LVP)</td><td>9</td><td>16-12-28</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jaycob Megna (PRO)</td><td>16</td><td>7-22-29</td></tr>
<tr><td>2</td><td>Tyler Wotherspoon (SPR)</td><td>16</td><td>8-19-27</td></tr>
<tr><td>3</td><td>Parker Wotherspoon (SPR)</td><td>16</td><td>9-17-26</td></tr>
<tr><td>4</td><td>Cameron Gaunce (LVP)</td><td>16</td><td>5-21-26</td></tr>
<tr><td>5</td><td>Olli Juolevi (MAN)</td><td>16</td><td>5-18-23</td></tr>
<tr><td>6</td><td>Brandon Manning (LVP)</td><td>16</td><td>2-21-23</td></tr>
<tr><td>7</td><td>Jeremy Roy (SDG)</td><td>16</td><td>5-16-21</td></tr>
<tr><td>8</td><td>Juuso Riikola (MAN)</td><td>16</td><td>2-19-21</td></tr>
<tr><td>9</td><td>Wyatt Kalynuk (RCK)</td><td>15</td><td>6-14-20</td></tr>
<tr><td>10</td><td>Chase Priskie (LAV)</td><td>16</td><td>7-11-18</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Rasmus Asplund (STK)</td><td>2</td><td>5.73</td></tr>
<tr><td>2</td><td>Trent Frederic (SDG)</td><td>7</td><td>4.40</td></tr>
<tr><td>3</td><td>Zach Senyshyn (SDG)</td><td>7</td><td>4.32</td></tr>
<tr><td>4</td><td>Greg McKegg (CLE)</td><td>4</td><td>3.68</td></tr>
<tr><td>5</td><td>Mitchell Stephens (CHR)</td><td>16</td><td>3.55</td></tr>
<tr><td>6</td><td>Alexander Volkov (CHR)</td><td>16</td><td>3.45</td></tr>
<tr><td>7</td><td>Ryan MacInnis (SDG)</td><td>16</td><td>3.39</td></tr>
<tr><td>8</td><td>Kyle Criscuolo (UTI)</td><td>11</td><td>3.36</td></tr>
<tr><td>9</td><td>Troy Terry (CHR)</td><td>6</td><td>3.25</td></tr>
<tr><td>10</td><td>Trey Fix-Wolansky (LVP)</td><td>9</td><td>3.25</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Kalle Kossila (LAV)</td><td>11</td><td>85.26%</td></tr>
<tr><td>2</td><td>Nick Merkley (STK)</td><td>16</td><td>84.04%</td></tr>
<tr><td>3</td><td>Mitchell Stephens (CHR)</td><td>16</td><td>82.69%</td></tr>
<tr><td>4</td><td>Steven Lorentz (TOR)</td><td>16</td><td>81.71%</td></tr>
<tr><td>5</td><td>Rasmus Asplund (STK)</td><td>2</td><td>81.48%</td></tr>
<tr><td>6</td><td>Tanner Kaspick (ABB)</td><td>7</td><td>80.56%</td></tr>
<tr><td>7</td><td>Greg McKegg (CLE)</td><td>4</td><td>80.49%</td></tr>
<tr><td>8</td><td>Jordan Weal (LVP)</td><td>9</td><td>80.27%</td></tr>
<tr><td>9</td><td>Andrew Poturalski (ROC)</td><td>8</td><td>80.26%</td></tr>
<tr><td>10</td><td>David Gustafsson (STK)</td><td>16</td><td>79.85%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Barrett Hayton (TOR)</td><td>16</td><td>34</td></tr>
<tr><td>2</td><td>Mike Hardman (STK)</td><td>16</td><td>32</td></tr>
<tr><td>3</td><td>Brad Malone (STK)</td><td>16</td><td>32</td></tr>
<tr><td>4</td><td>Andrew Ladd (TOR)</td><td>16</td><td>31</td></tr>
<tr><td>5</td><td>Taylor Raddysh (MAN)</td><td>16</td><td>29</td></tr>
<tr><td>6</td><td>Eeli Tolvanen (MAN)</td><td>16</td><td>29</td></tr>
<tr><td>7</td><td>Keaton Middleton (TOR)</td><td>16</td><td>29</td></tr>
<tr><td>8</td><td>Joseph Cecconi (TOR)</td><td>16</td><td>29</td></tr>
<tr><td>9</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>29</td></tr>
<tr><td>10</td><td>Martin Kaut (TOR)</td><td>16</td><td>28</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Julius Bergman (MIL)</td><td>12</td><td>38</td></tr>
<tr><td>2</td><td>Jake Bischoff (GRP)</td><td>16</td><td>37</td></tr>
<tr><td>3</td><td>Oleg Sosunov (TOR)</td><td>16</td><td>37</td></tr>
<tr><td>4</td><td>Nick Moutrey (BEL)</td><td>16</td><td>33</td></tr>
<tr><td>5</td><td>Zac Leslie (SJB)</td><td>16</td><td>33</td></tr>
<tr><td>6</td><td>Logan Brown (PSM)</td><td>16</td><td>31</td></tr>
<tr><td>7</td><td>Adam Musil (MIL)</td><td>16</td><td>31</td></tr>
<tr><td>8</td><td>Anthony Angello (PRO)</td><td>16</td><td>30</td></tr>
<tr><td>9</td><td>Josh Brook (CHI)</td><td>14</td><td>28</td></tr>
<tr><td>10</td><td>Phillip Di Giuseppe (CLE)</td><td>16</td><td>28</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Brady Keeper (TUC)</td><td>16</td><td>39</td></tr>
<tr><td>2</td><td>Dmytro Timashov (BEL)</td><td>16</td><td>38</td></tr>
<tr><td>3</td><td>Zac Leslie (SJB)</td><td>16</td><td>36</td></tr>
<tr><td>4</td><td>Aaron Ness (WBS)</td><td>16</td><td>33</td></tr>
<tr><td>5</td><td>A.J. Greer (HER)</td><td>16</td><td>32</td></tr>
<tr><td>6</td><td>Colton White (SYR)</td><td>16</td><td>31</td></tr>
<tr><td>7</td><td>Kaapo Kakko (CHR)</td><td>16</td><td>30</td></tr>
<tr><td>8</td><td>Ryan Poehling (TEX)</td><td>16</td><td>30</td></tr>
<tr><td>9</td><td>Cameron Gaunce (LVP)</td><td>16</td><td>29</td></tr>
<tr><td>10</td><td>Leon Gawanke (UTI)</td><td>16</td><td>28</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Barrett Hayton (TOR)</td><td>16</td><td>16-25-41</td></tr>
<tr><td>2</td><td>Mike Hardman (STK)</td><td>16</td><td>18-21-39</td></tr>
<tr><td>3</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>22-13-35</td></tr>
<tr><td>4</td><td>Jesper Boqvist (PSM)</td><td>16</td><td>11-20-31</td></tr>
<tr><td>5</td><td>Mitchell Stephens (CHR)</td><td>16</td><td>7-24-31</td></tr>
<tr><td>6</td><td>Alexander Volkov (CHR)</td><td>16</td><td>16-14-30</td></tr>
<tr><td>7</td><td>Kaapo Kakko (CHR)</td><td>16</td><td>24-4-28</td></tr>
<tr><td>8</td><td>Jonah Gadjovich (CLE)</td><td>16</td><td>17-11-28</td></tr>
<tr><td>9</td><td>Trey Fix-Wolansky (LVP)</td><td>9</td><td>16-12-28</td></tr>
<tr><td>10</td><td>David Gustafsson (STK)</td><td>16</td><td>11-16-27</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Colton White (SYR)</td><td>16</td><td>90</td></tr>
<tr><td>2</td><td>Cole Ully (SJB)</td><td>16</td><td>81</td></tr>
<tr><td>3</td><td>Brady Keeper (TUC)</td><td>16</td><td>78</td></tr>
<tr><td>4</td><td>Jack Dougherty (GRP)</td><td>16</td><td>78</td></tr>
<tr><td>5</td><td>Nathan Walker (PRO)</td><td>16</td><td>77</td></tr>
<tr><td>6</td><td>Jeremy Roy (SDG)</td><td>16</td><td>76</td></tr>
<tr><td>7</td><td>Kaapo Kakko (CHR)</td><td>16</td><td>75</td></tr>
<tr><td>8</td><td>Zac Leslie (SJB)</td><td>16</td><td>72</td></tr>
<tr><td>9</td><td>Jaycob Megna (PRO)</td><td>16</td><td>69</td></tr>
<tr><td>10</td><td>Micheal Ferland (WBS)</td><td>16</td><td>68</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Jake Bischoff (GRP)</td><td>16</td><td>7</td></tr>
<tr><td>2</td><td>Nathan Walker (PRO)</td><td>16</td><td>6</td></tr>
<tr><td>3</td><td>Nick Moutrey (BEL)</td><td>16</td><td>5</td></tr>
<tr><td>4</td><td>Anthony Angello (PRO)</td><td>16</td><td>5</td></tr>
<tr><td>5</td><td>Boris Katchouk (ABB)</td><td>14</td><td>4</td></tr>
<tr><td>6</td><td>Wyatt Kalynuk (RCK)</td><td>15</td><td>4</td></tr>
<tr><td>7</td><td>Kole Lind (PSM)</td><td>16</td><td>4</td></tr>
<tr><td>8</td><td>Chase Priskie (LAV)</td><td>16</td><td>4</td></tr>
<tr><td>9</td><td>Andrew Agozzino (TEX)</td><td>16</td><td>4</td></tr>
<tr><td>10</td><td>Tyler Wotherspoon (SPR)</td><td>16</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Brandon Hagel (MIL)</td><td>4</td><td>2</td></tr>
<tr><td>2</td><td>Phillip Di Giuseppe (CLE)</td><td>16</td><td>2</td></tr>
<tr><td>3</td><td>Mike Hardman (STK)</td><td>16</td><td>2</td></tr>
<tr><td>4</td><td>Luke Johnson (SPR)</td><td>16</td><td>2</td></tr>
<tr><td>5</td><td>Shane Pinto (BKR)</td><td>3</td><td>1</td></tr>
<tr><td>6</td><td>Tage Thompson (ROC)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>Chris Terry (ROC)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>Alexander Nylander (SPR)</td><td>9</td><td>1</td></tr>
<tr><td>9</td><td>Timothy Liljegren (ONT)</td><td>13</td><td>1</td></tr>
<tr><td>10</td><td>Connor Mackey (RCK)</td><td>15</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Nathan Walker (PRO)</td><td>16</td><td>6</td></tr>
<tr><td>2</td><td>Kyle Clifford (ONT)</td><td>6</td><td>4</td></tr>
<tr><td>3</td><td>Matthew Phillips (LAV)</td><td>16</td><td>4</td></tr>
<tr><td>4</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>4</td></tr>
<tr><td>5</td><td>Troy Terry (CHR)</td><td>6</td><td>3</td></tr>
<tr><td>6</td><td>Alexander Nylander (SPR)</td><td>9</td><td>3</td></tr>
<tr><td>7</td><td>Nolan Stevens (LVP)</td><td>9</td><td>3</td></tr>
<tr><td>8</td><td>Nick Baptiste (CHI)</td><td>14</td><td>3</td></tr>
<tr><td>9</td><td>Joseph Blandisi (RCK)</td><td>16</td><td>3</td></tr>
<tr><td>10</td><td>Laurent Dauphin (ROC)</td><td>16</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Luke Kunin (BKR)</td><td>4</td><td>2</td></tr>
<tr><td>2</td><td>Zac Leslie (SJB)</td><td>16</td><td>2</td></tr>
<tr><td>3</td><td>Ryan Poehling (TEX)</td><td>16</td><td>2</td></tr>
<tr><td>4</td><td>Anthony Richard (GRP)</td><td>16</td><td>2</td></tr>
<tr><td>5</td><td>Mitchell Stephens (CHR)</td><td>16</td><td>2</td></tr>
<tr><td>6</td><td>Giorgio Estephan (PRO)</td><td>16</td><td>2</td></tr>
<tr><td>7</td><td>Connor Bunnaman (IOA)</td><td>1</td><td>1</td></tr>
<tr><td>8</td><td>Emil Bemstrom (SPR)</td><td>3</td><td>1</td></tr>
<tr><td>9</td><td>Brandon Hagel (MIL)</td><td>4</td><td>1</td></tr>
<tr><td>10</td><td>Trent Frederic (SDG)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Jamie Drysdale (CHI)</td><td>14</td><td>1</td></tr>
<tr><td>2</td><td>Kole Lind (PSM)</td><td>16</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Nikita Nesterov (LAV)</td><td>16</td><td>358</td></tr>
<tr><td>2</td><td>Brad Malone (STK)</td><td>16</td><td>355</td></tr>
<tr><td>3</td><td>Otto Leskinen (LAV)</td><td>16</td><td>349</td></tr>
<tr><td>4</td><td>Jeremy Davies (TOR)</td><td>16</td><td>344</td></tr>
<tr><td>5</td><td>Simon Benoit (RCK)</td><td>15</td><td>340</td></tr>
<tr><td>6</td><td>Wyatt Kalynuk (RCK)</td><td>15</td><td>339</td></tr>
<tr><td>7</td><td>Stuart Percy (MIL)</td><td>16</td><td>339</td></tr>
<tr><td>8</td><td>Keaton Middleton (TOR)</td><td>16</td><td>337</td></tr>
<tr><td>9</td><td>T.J. Tynan (CLE)</td><td>16</td><td>337</td></tr>
<tr><td>10</td><td>Andrew Agozzino (TEX)</td><td>16</td><td>333</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Anthony Angello (PRO)</td><td>16</td><td>5</td></tr>
<tr><td>2</td><td>Nathan Walker (PRO)</td><td>16</td><td>5</td></tr>
<tr><td>3</td><td>Trey Fix-Wolansky (LVP)</td><td>9</td><td>4</td></tr>
<tr><td>4</td><td>Kaapo Kakko (CHR)</td><td>16</td><td>4</td></tr>
<tr><td>5</td><td>Troy Terry (CHR)</td><td>6</td><td>3</td></tr>
<tr><td>6</td><td>Jordan Weal (LVP)</td><td>9</td><td>3</td></tr>
<tr><td>7</td><td>Mike Hardman (STK)</td><td>16</td><td>3</td></tr>
<tr><td>8</td><td>Ryan Poehling (TEX)</td><td>16</td><td>3</td></tr>
<tr><td>9</td><td>Dmytro Timashov (BEL)</td><td>16</td><td>3</td></tr>
<tr><td>10</td><td>Rasmus Asplund (STK)</td><td>2</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>8</td></tr>
<tr><td>2</td><td>Jonah Gadjovich (CLE)</td><td>16</td><td>6</td></tr>
<tr><td>3</td><td>Ryan MacInnis (SDG)</td><td>16</td><td>5</td></tr>
<tr><td>4</td><td>Dmytro Timashov (BEL)</td><td>16</td><td>4</td></tr>
<tr><td>5</td><td>Giorgio Estephan (PRO)</td><td>16</td><td>4</td></tr>
<tr><td>6</td><td>Parker Kelly (ABB)</td><td>7</td><td>3</td></tr>
<tr><td>7</td><td>Ryan Fitzgerald (ROC)</td><td>8</td><td>3</td></tr>
<tr><td>8</td><td>Nick Moutrey (BEL)</td><td>16</td><td>3</td></tr>
<tr><td>9</td><td>Luke Johnson (SPR)</td><td>16</td><td>3</td></tr>
<tr><td>10</td><td>Mason Shaw (LVP)</td><td>16</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>14</td></tr>
<tr><td>2</td><td>Mike Hardman (STK)</td><td>16</td><td>11</td></tr>
<tr><td>3</td><td>A.J. Greer (HER)</td><td>16</td><td>11</td></tr>
<tr><td>4</td><td>Christian Djoos (ROC)</td><td>8</td><td>8</td></tr>
<tr><td>5</td><td>Michael Amadio (ROC)</td><td>16</td><td>8</td></tr>
<tr><td>6</td><td>Yakov Trenin (PSM)</td><td>16</td><td>8</td></tr>
<tr><td>7</td><td>Tomas Jurco (ONT)</td><td>13</td><td>7</td></tr>
<tr><td>8</td><td>Taylor Fedun (ROC)</td><td>16</td><td>7</td></tr>
<tr><td>9</td><td>Jake Bean (STK)</td><td>13</td><td>6</td></tr>
<tr><td>10</td><td>Austin Strand (ONT)</td><td>13</td><td>6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Eetu Luostarinen (MAN)</td><td>16</td><td>44</td></tr>
<tr><td>2</td><td>Andrew Agozzino (TEX)</td><td>16</td><td>42</td></tr>
<tr><td>3</td><td>Micheal Ferland (WBS)</td><td>16</td><td>41</td></tr>
<tr><td>4</td><td>Luke Johnson (SPR)</td><td>16</td><td>40</td></tr>
<tr><td>5</td><td>Michael Amadio (ROC)</td><td>16</td><td>40</td></tr>
<tr><td>6</td><td>T.J. Tynan (CLE)</td><td>16</td><td>40</td></tr>
<tr><td>7</td><td>Garrett Pilon (ABB)</td><td>16</td><td>38</td></tr>
<tr><td>8</td><td>Justin Kirkland (CLE)</td><td>16</td><td>37</td></tr>
<tr><td>9</td><td>Taylor Raddysh (MAN)</td><td>16</td><td>37</td></tr>
<tr><td>10</td><td>Brandon Duhaime (LVP)</td><td>16</td><td>37</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>J.C. Beaudin (MIL)</td><td>16</td><td>2</td></tr>
<tr><td>2</td><td>Dylan Cozens (MIL)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Logan Shaw (MIL)</td><td>8</td><td>1</td></tr>
<tr><td>4</td><td>Jordan Weal (LVP)</td><td>9</td><td>1</td></tr>
<tr><td>5</td><td>Nick Baptiste (CHI)</td><td>14</td><td>1</td></tr>
<tr><td>6</td><td>Ty Dellandrea (BKR)</td><td>15</td><td>1</td></tr>
<tr><td>7</td><td>Phillip Di Giuseppe (CLE)</td><td>16</td><td>1</td></tr>
<tr><td>8</td><td>Ryan Kujawinski (ONT)</td><td>16</td><td>1</td></tr>
<tr><td>9</td><td>Morgan Frost (MIL)</td><td>16</td><td>1</td></tr>
<tr><td>10</td><td>Dominic Toninato (BKR)</td><td>16</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Julius Bergman (MIL)</td><td>12</td><td>2</td></tr>
<tr><td>2</td><td>Dmytro Timashov (BEL)</td><td>16</td><td>2</td></tr>
<tr><td>3</td><td>Taylor Raddysh (MAN)</td><td>16</td><td>2</td></tr>
<tr><td>4</td><td>Stefan Noesen (GRP)</td><td>16</td><td>2</td></tr>
<tr><td>5</td><td>Dennis Robertson (MIL)</td><td>16</td><td>2</td></tr>
<tr><td>6</td><td>Nico Sturm (TUC)</td><td>1</td><td>1</td></tr>
<tr><td>7</td><td>Chris Bigras (LAV)</td><td>3</td><td>1</td></tr>
<tr><td>8</td><td>Nic Petan (SJB)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Troy Terry (CHR)</td><td>6</td><td>1</td></tr>
<tr><td>10</td><td>Christian Jaros (PSM)</td><td>11</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Dennis Robertson (MIL)</td><td>16</td><td>2</td></tr>
<tr><td>2</td><td>Nico Sturm (TUC)</td><td>1</td><td>1</td></tr>
<tr><td>3</td><td>Tyrell Goulbourne (STK)</td><td>16</td><td>1</td></tr>
<tr><td>4</td><td>Madison Bowey (LAV)</td><td>16</td><td>1</td></tr>
<tr><td>5</td><td>Josh Mahura (GRP)</td><td>16</td><td>1</td></tr>
<tr><td>6</td><td>Ryan Kujawinski (ONT)</td><td>16</td><td>1</td></tr>
<tr><td>7</td><td>Zac Leslie (SJB)</td><td>16</td><td>1</td></tr>
<tr><td>8</td><td>Kole Sherwood (PRO)</td><td>16</td><td>1</td></tr>
<tr><td>9</td><td>Noah Juulsen (LAV)</td><td>16</td><td>1</td></tr>
<tr><td>10</td><td>Logan Brown (PSM)</td><td>16</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Ilya Samsonov (ROC)</td><td>16</td><td>0.931</td></tr>
<tr><td>2</td><td>Calvin Pickard (TOR)</td><td>16</td><td>0.928</td></tr>
<tr><td>3</td><td>Matthew Villalta (PRO)</td><td>16</td><td>0.921</td></tr>
<tr><td>4</td><td>Carter Hart (LAV)</td><td>16</td><td>0.920</td></tr>
<tr><td>5</td><td>Michael Hutchinson (LVP)</td><td>16</td><td>0.917</td></tr>
<tr><td>6</td><td>Zane McIntyre (BKR)</td><td>16</td><td>0.915</td></tr>
<tr><td>7</td><td>Alexandar Georgiev (ABB)</td><td>16</td><td>0.910</td></tr>
<tr><td>8</td><td>Dan Vladar (SPR)</td><td>12</td><td>0.907</td></tr>
<tr><td>9</td><td>Scott Wedgewood (CLE)</td><td>13</td><td>0.903</td></tr>
<tr><td>10</td><td>Adam Werner (CHI)</td><td>15</td><td>0.902</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Calvin Pickard (TOR)</td><td>16</td><td>1.19</td></tr>
<tr><td>2</td><td>Carter Hart (LAV)</td><td>16</td><td>1.48</td></tr>
<tr><td>3</td><td>Ilya Samsonov (ROC)</td><td>16</td><td>1.51</td></tr>
<tr><td>4</td><td>Adam Werner (CHI)</td><td>15</td><td>1.68</td></tr>
<tr><td>5</td><td>Jeremy Helvig (MAN)</td><td>16</td><td>1.92</td></tr>
<tr><td>6</td><td>Michael Hutchinson (LVP)</td><td>16</td><td>1.93</td></tr>
<tr><td>7</td><td>Scott Wedgewood (CLE)</td><td>13</td><td>1.93</td></tr>
<tr><td>8</td><td>Alexandar Georgiev (ABB)</td><td>16</td><td>1.96</td></tr>
<tr><td>9</td><td>Evan Cormier (STK)</td><td>16</td><td>1.97</td></tr>
<tr><td>10</td><td>Mike Condon (IOA)</td><td>1</td><td>2.00</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Michael Hutchinson (LVP)</td><td>16</td><td>965</td></tr>
<tr><td>2</td><td>Calvin Pickard (TOR)</td><td>16</td><td>958</td></tr>
<tr><td>3</td><td>Ilya Samsonov (ROC)</td><td>16</td><td>957</td></tr>
<tr><td>4</td><td>Zane McIntyre (BKR)</td><td>16</td><td>951</td></tr>
<tr><td>5</td><td>Pheonix Copley (MIL)</td><td>16</td><td>944</td></tr>
<tr><td>6</td><td>Jeremy Helvig (MAN)</td><td>16</td><td>936</td></tr>
<tr><td>7</td><td>Carter Hart (LAV)</td><td>16</td><td>931</td></tr>
<tr><td>8</td><td>Alexandar Georgiev (ABB)</td><td>16</td><td>918</td></tr>
<tr><td>9</td><td>Evan Cormier (STK)</td><td>16</td><td>916</td></tr>
<tr><td>10</td><td>Matthew Villalta (PRO)</td><td>16</td><td>916</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Matthew Villalta (PRO)</td><td>16</td><td>390</td></tr>
<tr><td>2</td><td>Zane McIntyre (BKR)</td><td>16</td><td>390</td></tr>
<tr><td>3</td><td>Michael Hutchinson (LVP)</td><td>16</td><td>373</td></tr>
<tr><td>4</td><td>Ilya Samsonov (ROC)</td><td>16</td><td>348</td></tr>
<tr><td>5</td><td>Antoine Bibeau (ONT)</td><td>16</td><td>344</td></tr>
<tr><td>6</td><td>Pheonix Copley (MIL)</td><td>16</td><td>343</td></tr>
<tr><td>7</td><td>Alexandar Georgiev (ABB)</td><td>16</td><td>332</td></tr>
<tr><td>8</td><td>Kaden Fulcher (RCK)</td><td>15</td><td>298</td></tr>
<tr><td>9</td><td>Jeremy Helvig (MAN)</td><td>16</td><td>291</td></tr>
<tr><td>10</td><td>Carter Hart (LAV)</td><td>16</td><td>288</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Zane McIntyre (BKR)</td><td>16</td><td>5</td></tr>
<tr><td>2</td><td>Ilya Samsonov (ROC)</td><td>16</td><td>5</td></tr>
<tr><td>3</td><td>Adam Werner (CHI)</td><td>15</td><td>4</td></tr>
<tr><td>4</td><td>Calvin Pickard (TOR)</td><td>16</td><td>4</td></tr>
<tr><td>5</td><td>Kaden Fulcher (RCK)</td><td>15</td><td>3</td></tr>
<tr><td>6</td><td>Matthew Villalta (PRO)</td><td>16</td><td>3</td></tr>
<tr><td>7</td><td>Alexandar Georgiev (ABB)</td><td>16</td><td>3</td></tr>
<tr><td>8</td><td>Carter Hart (LAV)</td><td>16</td><td>3</td></tr>
<tr><td>9</td><td>Dan Vladar (SPR)</td><td>12</td><td>2</td></tr>
<tr><td>10</td><td>Evan Cormier (STK)</td><td>16</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Matthew Villalta (PRO)</td><td>16</td><td>14</td></tr>
<tr><td>2</td><td>Carter Hart (LAV)</td><td>16</td><td>14</td></tr>
<tr><td>3</td><td>Alexandar Georgiev (ABB)</td><td>16</td><td>13</td></tr>
<tr><td>4</td><td>Evan Cormier (STK)</td><td>16</td><td>13</td></tr>
<tr><td>5</td><td>Calvin Pickard (TOR)</td><td>16</td><td>13</td></tr>
<tr><td>6</td><td>Michael Hutchinson (LVP)</td><td>16</td><td>13</td></tr>
<tr><td>7</td><td>Pheonix Copley (MIL)</td><td>16</td><td>13</td></tr>
<tr><td>8</td><td>Zane McIntyre (BKR)</td><td>16</td><td>12</td></tr>
<tr><td>9</td><td>Ilya Samsonov (ROC)</td><td>16</td><td>12</td></tr>
<tr><td>10</td><td>Jeremy Helvig (MAN)</td><td>16</td><td>11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Alexandar Georgiev (ABB)</td><td>5</td><td>1.000</td></tr>
<tr><td>2</td><td>Jonas Johansson (ROC)</td><td>3</td><td>1.000</td></tr>
<tr><td>3</td><td>Michael Hutchinson (LVP)</td><td>3</td><td>1.000</td></tr>
<tr><td>4</td><td>Zane McIntyre (BKR)</td><td>6</td><td>0.833</td></tr>
<tr><td>5</td><td>Jeremy Helvig (MAN)</td><td>7</td><td>0.714</td></tr>
<tr><td>6</td><td>Pheonix Copley (MIL)</td><td>17</td><td>0.706</td></tr>
<tr><td>7</td><td>Antoine Bibeau (ONT)</td><td>6</td><td>0.667</td></tr>
<tr><td>8</td><td>Adam Werner (CHI)</td><td>3</td><td>0.667</td></tr>
<tr><td>9</td><td>Dan Vladar (SPR)</td><td>3</td><td>0.667</td></tr>
<tr><td>10</td><td>Ilya Samsonov (ROC)</td><td>7</td><td>0.571</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Adam Werner (CHI)</td><td>15</td><td>6</td></tr>
<tr><td>2</td><td>Kaden Fulcher (RCK)</td><td>15</td><td>5</td></tr>
<tr><td>3</td><td>Scott Wedgewood (CLE)</td><td>13</td><td>4</td></tr>
<tr><td>4</td><td>Jeremy Helvig (MAN)</td><td>16</td><td>4</td></tr>
<tr><td>5</td><td>Antoine Bibeau (ONT)</td><td>16</td><td>4</td></tr>
<tr><td>6</td><td>Zane McIntyre (BKR)</td><td>16</td><td>3</td></tr>
<tr><td>7</td><td>Alexandar Georgiev (ABB)</td><td>16</td><td>3</td></tr>
<tr><td>8</td><td>Evan Cormier (STK)</td><td>16</td><td>3</td></tr>
<tr><td>9</td><td>Calvin Pickard (TOR)</td><td>16</td><td>3</td></tr>
<tr><td>10</td><td>Ian Scott (SDG)</td><td>7</td><td>2</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
