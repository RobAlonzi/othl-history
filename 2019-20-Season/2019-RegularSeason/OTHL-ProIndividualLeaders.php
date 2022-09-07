<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Individual Leaders</title>
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
<b>Minimum Games Played: 41</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Sean Couturier (BOS)</td><td>82</td><td>49</td></tr>
<tr><td>2</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>47</td></tr>
<tr><td>3</td><td>Aleksander Barkov (SJS)</td><td>82</td><td>47</td></tr>
<tr><td>4</td><td>Dylan Larkin (CGY)</td><td>74</td><td>40</td></tr>
<tr><td>5</td><td>Mikko Rantanen (VAN)</td><td>82</td><td>39</td></tr>
<tr><td>6</td><td>Matthew Tkachuk (WPG)</td><td>82</td><td>38</td></tr>
<tr><td>7</td><td>Kyle Connor (VAN)</td><td>82</td><td>38</td></tr>
<tr><td>8</td><td>Patrick Kane (COL)</td><td>71</td><td>36</td></tr>
<tr><td>9</td><td>Mikko Koivu (COL)</td><td>82</td><td>36</td></tr>
<tr><td>10</td><td>Connor McDavid (DET)</td><td>82</td><td>35</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Erik Karlsson (CGY)</td><td>82</td><td>67</td></tr>
<tr><td>2</td><td>Drew Doughty (WSH)</td><td>82</td><td>63</td></tr>
<tr><td>3</td><td>Aleksander Barkov (SJS)</td><td>82</td><td>62</td></tr>
<tr><td>4</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>57</td></tr>
<tr><td>5</td><td>Nikita Kucherov (ARI)</td><td>82</td><td>54</td></tr>
<tr><td>6</td><td>Rasmus Ristolainen (BUF)</td><td>82</td><td>54</td></tr>
<tr><td>7</td><td>Mikko Rantanen (VAN)</td><td>82</td><td>53</td></tr>
<tr><td>8</td><td>Sean Couturier (BOS)</td><td>82</td><td>52</td></tr>
<tr><td>9</td><td>Mike Hoffman (TBL)</td><td>82</td><td>52</td></tr>
<tr><td>10</td><td>Brent Burns (FLA)</td><td>82</td><td>50</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>426</td></tr>
<tr><td>2</td><td>Aleksander Barkov (SJS)</td><td>82</td><td>420</td></tr>
<tr><td>3</td><td>Sean Couturier (BOS)</td><td>82</td><td>402</td></tr>
<tr><td>4</td><td>David Pastrnak (OTT)</td><td>82</td><td>380</td></tr>
<tr><td>5</td><td>Connor McDavid (DET)</td><td>82</td><td>371</td></tr>
<tr><td>6</td><td>Dylan Larkin (CGY)</td><td>74</td><td>370</td></tr>
<tr><td>7</td><td>Mark Scheifele (MTL)</td><td>82</td><td>363</td></tr>
<tr><td>8</td><td>Cam Atkinson (PHL)</td><td>78</td><td>357</td></tr>
<tr><td>9</td><td>Nikita Kucherov (ARI)</td><td>82</td><td>357</td></tr>
<tr><td>10</td><td>Nathan MacKinnon (LAK)</td><td>79</td><td>355</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Rasmus Ristolainen (BUF)</td><td>82</td><td>15.79%</td></tr>
<tr><td>2</td><td>Micheal Ferland (PIT)</td><td>82</td><td>14.07%</td></tr>
<tr><td>3</td><td>Brandon Pirri (MIN)</td><td>73</td><td>13.79%</td></tr>
<tr><td>4</td><td>Derick Brassard (TBL)</td><td>82</td><td>13.54%</td></tr>
<tr><td>5</td><td>Josh Archibald (EDM)</td><td>81</td><td>13.48%</td></tr>
<tr><td>6</td><td>Chris Wagner (PIT)</td><td>82</td><td>13.44%</td></tr>
<tr><td>7</td><td>Mikko Koivu (COL)</td><td>82</td><td>13.19%</td></tr>
<tr><td>8</td><td>Mike Green (WPG)</td><td>52</td><td>13.11%</td></tr>
<tr><td>9</td><td>Paul Carey (FLA)</td><td>82</td><td>12.87%</td></tr>
<tr><td>10</td><td>Jason Dickinson (OTT)</td><td>78</td><td>12.75%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (SJS)</td><td>82</td><td>47-62-109</td></tr>
<tr><td>2</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>47-57-104</td></tr>
<tr><td>3</td><td>Sean Couturier (BOS)</td><td>82</td><td>49-52-101</td></tr>
<tr><td>4</td><td>Dylan Larkin (CGY)</td><td>74</td><td>40-49-89</td></tr>
<tr><td>5</td><td>John Tavares (TBL)</td><td>79</td><td>34-49-83</td></tr>
<tr><td>6</td><td>William Karlsson (NJD)</td><td>82</td><td>34-49-83</td></tr>
<tr><td>7</td><td>Mika Zibanejad (ARI)</td><td>82</td><td>32-50-82</td></tr>
<tr><td>8</td><td>Mikko Koivu (COL)</td><td>82</td><td>36-45-81</td></tr>
<tr><td>9</td><td>Connor McDavid (DET)</td><td>82</td><td>35-45-80</td></tr>
<tr><td>10</td><td>Patrice Bergeron (DAL)</td><td>74</td><td>32-47-79</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>47-57-104</td></tr>
<tr><td>2</td><td>Mike Hoffman (TBL)</td><td>82</td><td>31-52-83</td></tr>
<tr><td>3</td><td>Matthew Tkachuk (WPG)</td><td>82</td><td>38-41-79</td></tr>
<tr><td>4</td><td>Kyle Connor (VAN)</td><td>82</td><td>38-41-79</td></tr>
<tr><td>5</td><td>Brad Marchand (BOS)</td><td>73</td><td>30-46-76</td></tr>
<tr><td>6</td><td>Ryan Nugent-Hopkins (EDM)</td><td>79</td><td>34-40-74</td></tr>
<tr><td>7</td><td>Sebastian Aho (CHI)</td><td>82</td><td>31-41-72</td></tr>
<tr><td>8</td><td>Taylor Hall (CGY)</td><td>71</td><td>28-42-70</td></tr>
<tr><td>9</td><td>Alex Ovechkin (LAK)</td><td>82</td><td>32-37-69</td></tr>
<tr><td>10</td><td>Claude Giroux (NYR)</td><td>82</td><td>24-44-68</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>47-57-104</td></tr>
<tr><td>2</td><td>Mikko Rantanen (VAN)</td><td>82</td><td>39-53-92</td></tr>
<tr><td>3</td><td>Nikita Kucherov (ARI)</td><td>82</td><td>34-54-88</td></tr>
<tr><td>4</td><td>Mike Hoffman (TBL)</td><td>82</td><td>31-52-83</td></tr>
<tr><td>5</td><td>Matthew Tkachuk (WPG)</td><td>82</td><td>38-41-79</td></tr>
<tr><td>6</td><td>David Pastrnak (OTT)</td><td>82</td><td>34-44-78</td></tr>
<tr><td>7</td><td>Patrick Kane (COL)</td><td>71</td><td>36-40-76</td></tr>
<tr><td>8</td><td>Steven Stamkos (NYI)</td><td>82</td><td>31-42-73</td></tr>
<tr><td>9</td><td>Tyler Seguin (FLA)</td><td>82</td><td>34-38-72</td></tr>
<tr><td>10</td><td>Blake Wheeler (EDM)</td><td>82</td><td>32-38-70</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Erik Karlsson (CGY)</td><td>82</td><td>9-67-76</td></tr>
<tr><td>2</td><td>Drew Doughty (WSH)</td><td>82</td><td>10-63-73</td></tr>
<tr><td>3</td><td>Rasmus Ristolainen (BUF)</td><td>82</td><td>18-54-72</td></tr>
<tr><td>4</td><td>Esa Lindell (TBL)</td><td>82</td><td>22-44-66</td></tr>
<tr><td>5</td><td>Jacob Trouba (WSH)</td><td>82</td><td>14-50-64</td></tr>
<tr><td>6</td><td>Brent Burns (FLA)</td><td>82</td><td>13-50-63</td></tr>
<tr><td>7</td><td>Zach Werenski (CHI)</td><td>82</td><td>15-45-60</td></tr>
<tr><td>8</td><td>Justin Faulk (CHI)</td><td>82</td><td>15-45-60</td></tr>
<tr><td>9</td><td>Jared Spurgeon (SJS)</td><td>82</td><td>10-50-60</td></tr>
<tr><td>10</td><td>Oliver Ekman-Larsson (ARI)</td><td>82</td><td>12-47-59</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>1.17</td></tr>
<tr><td>2</td><td>Aleksander Barkov (SJS)</td><td>82</td><td>1.16</td></tr>
<tr><td>3</td><td>Mikko Rantanen (VAN)</td><td>82</td><td>1.15</td></tr>
<tr><td>4</td><td>Dylan Larkin (CGY)</td><td>74</td><td>1.13</td></tr>
<tr><td>5</td><td>Patrice Bergeron (DAL)</td><td>74</td><td>1.12</td></tr>
<tr><td>6</td><td>Patrick Kane (COL)</td><td>71</td><td>1.12</td></tr>
<tr><td>7</td><td>William Karlsson (NJD)</td><td>82</td><td>1.11</td></tr>
<tr><td>8</td><td>Brad Marchand (BOS)</td><td>73</td><td>1.10</td></tr>
<tr><td>9</td><td>Sean Couturier (BOS)</td><td>82</td><td>1.10</td></tr>
<tr><td>10</td><td>Nikita Kucherov (ARI)</td><td>82</td><td>1.08</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Brad Richardson (NYI)</td><td>82</td><td>60.08%</td></tr>
<tr><td>2</td><td>Sidney Crosby (BUF)</td><td>71</td><td>60.03%</td></tr>
<tr><td>3</td><td>Ryan Getzlaf (NJD)</td><td>77</td><td>59.77%</td></tr>
<tr><td>4</td><td>Patrice Bergeron (DAL)</td><td>74</td><td>59.57%</td></tr>
<tr><td>5</td><td>Ryan O'Reilly (NYI)</td><td>80</td><td>59.39%</td></tr>
<tr><td>6</td><td>Claude Giroux (NYR)</td><td>82</td><td>58.70%</td></tr>
<tr><td>7</td><td>Ryan Kesler (VAN)</td><td>82</td><td>58.46%</td></tr>
<tr><td>8</td><td>Jordan Staal (NSH)</td><td>60</td><td>58.41%</td></tr>
<tr><td>9</td><td>Mikko Koivu (COL)</td><td>82</td><td>58.26%</td></tr>
<tr><td>10</td><td>Ryan Johansen (OTT)</td><td>81</td><td>58.19%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Tomas Tatar (BOS)</td><td>84</td><td>42</td></tr>
<tr><td>2</td><td>Carl Soderberg (FLA)</td><td>82</td><td>37</td></tr>
<tr><td>3</td><td>Taylor Hall (CGY)</td><td>71</td><td>34</td></tr>
<tr><td>4</td><td>Matt Niskanen (BUF)</td><td>82</td><td>34</td></tr>
<tr><td>5</td><td>Brent Seabrook (BUF)</td><td>82</td><td>33</td></tr>
<tr><td>6</td><td>Ron Hainsey (EDM)</td><td>80</td><td>32</td></tr>
<tr><td>7</td><td>Mark Barberio (NYI)</td><td>81</td><td>32</td></tr>
<tr><td>8</td><td>Pavel Buchnevich (BUF)</td><td>82</td><td>32</td></tr>
<tr><td>9</td><td>Michael Frolik (COL)</td><td>82</td><td>32</td></tr>
<tr><td>10</td><td>Tyler Seguin (FLA)</td><td>82</td><td>31</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Tom Wilson (CGY)</td><td>81</td><td>206</td></tr>
<tr><td>2</td><td>Nikita Zadorov (MTL)</td><td>82</td><td>175</td></tr>
<tr><td>3</td><td>Mark Borowiecki (TOR)</td><td>80</td><td>157</td></tr>
<tr><td>4</td><td>Brenden Dillon (TOR)</td><td>81</td><td>156</td></tr>
<tr><td>5</td><td>Erik Cernak (NSH)</td><td>82</td><td>136</td></tr>
<tr><td>6</td><td>Radko Gudas (CGY)</td><td>75</td><td>135</td></tr>
<tr><td>7</td><td>Erik Johnson (OTT)</td><td>82</td><td>127</td></tr>
<tr><td>8</td><td>Luke Schenn (ANH)</td><td>73</td><td>125</td></tr>
<tr><td>9</td><td>Adam Larsson (NJD)</td><td>82</td><td>121</td></tr>
<tr><td>10</td><td>Greg Pateryn (WSH)</td><td>82</td><td>121</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Ivan Provorov (MTL)</td><td>82</td><td>173</td></tr>
<tr><td>2</td><td>Andy Greene (PIT)</td><td>79</td><td>170</td></tr>
<tr><td>3</td><td>David Savard (STL)</td><td>82</td><td>167</td></tr>
<tr><td>4</td><td>Cody Ceci (ARI)</td><td>82</td><td>159</td></tr>
<tr><td>5</td><td>Sami Vatanen (WPG)</td><td>80</td><td>156</td></tr>
<tr><td>6</td><td>Esa Lindell (TBL)</td><td>82</td><td>156</td></tr>
<tr><td>7</td><td>Chris Tanev (NJD)</td><td>82</td><td>155</td></tr>
<tr><td>8</td><td>Marc Staal (DET)</td><td>82</td><td>154</td></tr>
<tr><td>9</td><td>Ian Cole (CLB)</td><td>79</td><td>141</td></tr>
<tr><td>10</td><td>Jonas Brodin (PHL)</td><td>82</td><td>139</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Brady Tkachuk (PIT)</td><td>82</td><td>24-36-60</td></tr>
<tr><td>2</td><td>Elias Pettersson (CLB)</td><td>77</td><td>28-29-57</td></tr>
<tr><td>3</td><td>Evgenii Dadonov (BOS)</td><td>60</td><td>23-27-50</td></tr>
<tr><td>4</td><td>Conor Garland (MIN)</td><td>80</td><td>18-22-40</td></tr>
<tr><td>5</td><td>Sam Carrick (MIN)</td><td>81</td><td>16-18-34</td></tr>
<tr><td>6</td><td>Maxime Comtois (PHL)</td><td>81</td><td>13-21-34</td></tr>
<tr><td>7</td><td>Sam Steel (CLB)</td><td>82</td><td>13-21-34</td></tr>
<tr><td>8</td><td>Erik Cernak (NSH)</td><td>82</td><td>6-26-32</td></tr>
<tr><td>9</td><td>Miro Heiskanen (WPG)</td><td>73</td><td>9-19-28</td></tr>
<tr><td>10</td><td>Rasmus Dahlin (PHL)</td><td>82</td><td>5-22-27</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Tom Wilson (CGY)</td><td>81</td><td>288</td></tr>
<tr><td>2</td><td>Alex Ovechkin (LAK)</td><td>82</td><td>267</td></tr>
<tr><td>3</td><td>Erik Cernak (NSH)</td><td>82</td><td>260</td></tr>
<tr><td>4</td><td>Evander Kane (CAR)</td><td>85</td><td>255</td></tr>
<tr><td>5</td><td>Radko Gudas (CGY)</td><td>75</td><td>253</td></tr>
<tr><td>6</td><td>Roman Polak (CGY)</td><td>75</td><td>244</td></tr>
<tr><td>7</td><td>Blake Coleman (BOS)</td><td>82</td><td>241</td></tr>
<tr><td>8</td><td>Mark Borowiecki (TOR)</td><td>80</td><td>239</td></tr>
<tr><td>9</td><td>Adam Larsson (NJD)</td><td>82</td><td>238</td></tr>
<tr><td>10</td><td>Justin Faulk (CHI)</td><td>82</td><td>233</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>David Pastrnak (OTT)</td><td>82</td><td>14</td></tr>
<tr><td>2</td><td>Sebastian Aho (CHI)</td><td>82</td><td>13</td></tr>
<tr><td>3</td><td>Aleksander Barkov (SJS)</td><td>82</td><td>13</td></tr>
<tr><td>4</td><td>Nikita Kucherov (ARI)</td><td>82</td><td>13</td></tr>
<tr><td>5</td><td>Dylan Larkin (CGY)</td><td>74</td><td>12</td></tr>
<tr><td>6</td><td>Zach Parise (DAL)</td><td>81</td><td>12</td></tr>
<tr><td>7</td><td>Esa Lindell (TBL)</td><td>82</td><td>12</td></tr>
<tr><td>8</td><td>Sean Couturier (BOS)</td><td>82</td><td>12</td></tr>
<tr><td>9</td><td>Elias Pettersson (CLB)</td><td>77</td><td>11</td></tr>
<tr><td>10</td><td>Cam Atkinson (PHL)</td><td>78</td><td>11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Travis Zajac (ANH)</td><td>78</td><td>2</td></tr>
<tr><td>2</td><td>Marc-Edouard Vlasic (MTL)</td><td>79</td><td>2</td></tr>
<tr><td>3</td><td>Joe Pavelski (NYI)</td><td>82</td><td>2</td></tr>
<tr><td>4</td><td>Mika Zibanejad (ARI)</td><td>82</td><td>2</td></tr>
<tr><td>5</td><td>Vladislav Namestnikov (CHI)</td><td>82</td><td>2</td></tr>
<tr><td>6</td><td>Aleksander Barkov (SJS)</td><td>82</td><td>2</td></tr>
<tr><td>7</td><td>Juuso Valimaki (VGK)</td><td>14</td><td>1</td></tr>
<tr><td>8</td><td>Andre Burakovsky (CGY)</td><td>19</td><td>1</td></tr>
<tr><td>9</td><td>Chris Wideman (PIT)</td><td>28</td><td>1</td></tr>
<tr><td>10</td><td>Evgenii Dadonov (BOS)</td><td>60</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Dylan Larkin (CGY)</td><td>74</td><td>11</td></tr>
<tr><td>2</td><td>Jonathan Toews (EDM)</td><td>63</td><td>9</td></tr>
<tr><td>3</td><td>Elias Lindholm (LAK)</td><td>78</td><td>9</td></tr>
<tr><td>4</td><td>Logan Couture (NSH)</td><td>80</td><td>8</td></tr>
<tr><td>5</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>8</td></tr>
<tr><td>6</td><td>Carl Soderberg (FLA)</td><td>82</td><td>8</td></tr>
<tr><td>7</td><td>Evgenii Dadonov (BOS)</td><td>60</td><td>7</td></tr>
<tr><td>8</td><td>Taylor Hall (CGY)</td><td>71</td><td>7</td></tr>
<tr><td>9</td><td>Brad Marchand (BOS)</td><td>73</td><td>7</td></tr>
<tr><td>10</td><td>Ryan O'Reilly (NYI)</td><td>80</td><td>7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Patrick Kane (COL)</td><td>71</td><td>6</td></tr>
<tr><td>2</td><td>Sean Couturier (BOS)</td><td>82</td><td>6</td></tr>
<tr><td>3</td><td>Dylan Larkin (CGY)</td><td>74</td><td>5</td></tr>
<tr><td>4</td><td>Ryan Nugent-Hopkins (EDM)</td><td>79</td><td>5</td></tr>
<tr><td>5</td><td>Ryan Johansen (OTT)</td><td>81</td><td>5</td></tr>
<tr><td>6</td><td>Auston Matthews (VAN)</td><td>63</td><td>4</td></tr>
<tr><td>7</td><td>Jeff Carter (MTL)</td><td>77</td><td>4</td></tr>
<tr><td>8</td><td>Jason Zucker (CHI)</td><td>78</td><td>4</td></tr>
<tr><td>9</td><td>Danny DeKeyser (CLB)</td><td>80</td><td>4</td></tr>
<tr><td>10</td><td>Steven Stamkos (NYI)</td><td>82</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Sidney Crosby (BUF)</td><td>71</td><td>3</td></tr>
<tr><td>2</td><td>Vincent Trocheck (WSH)</td><td>64</td><td>2</td></tr>
<tr><td>3</td><td>Olli Maatta (WPG)</td><td>68</td><td>2</td></tr>
<tr><td>4</td><td>Alex Ovechkin (LAK)</td><td>82</td><td>2</td></tr>
<tr><td>5</td><td>Jaccob Slavin (CGY)</td><td>82</td><td>2</td></tr>
<tr><td>6</td><td>Nick Bonino (VAN)</td><td>82</td><td>2</td></tr>
<tr><td>7</td><td>Gabriel Landeskog (NYR)</td><td>82</td><td>2</td></tr>
<tr><td>8</td><td>William Carrier (VAN)</td><td>13</td><td>1</td></tr>
<tr><td>9</td><td>Cameron Gaunce (PHL)</td><td>37</td><td>1</td></tr>
<tr><td>10</td><td>Trevor Daley (MIN)</td><td>66</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (WSH)</td><td>82</td><td>2,171</td></tr>
<tr><td>2</td><td>Jaccob Slavin (CGY)</td><td>82</td><td>2,106</td></tr>
<tr><td>3</td><td>Seth Jones (LAK)</td><td>82</td><td>2,092</td></tr>
<tr><td>4</td><td>Esa Lindell (TBL)</td><td>82</td><td>2,082</td></tr>
<tr><td>5</td><td>Rasmus Ristolainen (BUF)</td><td>82</td><td>2,075</td></tr>
<tr><td>6</td><td>Brent Burns (FLA)</td><td>82</td><td>2,066</td></tr>
<tr><td>7</td><td>Jared Spurgeon (SJS)</td><td>82</td><td>2,054</td></tr>
<tr><td>8</td><td>Jeff Petry (EDM)</td><td>82</td><td>2,041</td></tr>
<tr><td>9</td><td>Mattias Ekholm (EDM)</td><td>82</td><td>2,029</td></tr>
<tr><td>10</td><td>Keith Yandle (PHL)</td><td>82</td><td>2,019</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Sean Couturier (BOS)</td><td>82</td><td>3</td></tr>
<tr><td>2</td><td>Tyler Seguin (FLA)</td><td>82</td><td>2</td></tr>
<tr><td>3</td><td>Max Pacioretty (DAL)</td><td>82</td><td>2</td></tr>
<tr><td>4</td><td>Evgenii Dadonov (BOS)</td><td>60</td><td>1</td></tr>
<tr><td>5</td><td>Jordan Martinook (PIT)</td><td>66</td><td>1</td></tr>
<tr><td>6</td><td>Mikael Granlund (EDM)</td><td>71</td><td>1</td></tr>
<tr><td>7</td><td>Evgeny Kuznetsov (SJS)</td><td>73</td><td>1</td></tr>
<tr><td>8</td><td>Patrice Bergeron (DAL)</td><td>74</td><td>1</td></tr>
<tr><td>9</td><td>Alexander Radulov (NYI)</td><td>76</td><td>1</td></tr>
<tr><td>10</td><td>Brayden Schenn (ANH)</td><td>78</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>4</td></tr>
<tr><td>2</td><td>Carl Soderberg (FLA)</td><td>82</td><td>3</td></tr>
<tr><td>3</td><td>John Hayden (OTT)</td><td>21</td><td>2</td></tr>
<tr><td>4</td><td>Jean-Gabriel Pageau (WPG)</td><td>73</td><td>2</td></tr>
<tr><td>5</td><td>Dylan Larkin (CGY)</td><td>74</td><td>2</td></tr>
<tr><td>6</td><td>Ondrej Kase (SJS)</td><td>75</td><td>2</td></tr>
<tr><td>7</td><td>Alexander Radulov (NYI)</td><td>76</td><td>2</td></tr>
<tr><td>8</td><td>Josh Leivo (PHL)</td><td>76</td><td>2</td></tr>
<tr><td>9</td><td>Pontus Aberg (CAR)</td><td>79</td><td>2</td></tr>
<tr><td>10</td><td>Matt Calvert (CHI)</td><td>82</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Zach Werenski (CHI)</td><td>82</td><td>10</td></tr>
<tr><td>2</td><td>Antoine Roussel (STL)</td><td>55</td><td>8</td></tr>
<tr><td>3</td><td>Mikko Rantanen (VAN)</td><td>82</td><td>8</td></tr>
<tr><td>4</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>8</td></tr>
<tr><td>5</td><td>Patrice Bergeron (DAL)</td><td>74</td><td>7</td></tr>
<tr><td>6</td><td>Kris Letang (SJS)</td><td>69</td><td>6</td></tr>
<tr><td>7</td><td>Jared Spurgeon (SJS)</td><td>82</td><td>6</td></tr>
<tr><td>8</td><td>Sean Couturier (BOS)</td><td>82</td><td>6</td></tr>
<tr><td>9</td><td>Aleksander Barkov (SJS)</td><td>82</td><td>6</td></tr>
<tr><td>10</td><td>Brad Marchand (BOS)</td><td>73</td><td>5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (SJS)</td><td>82</td><td>272</td></tr>
<tr><td>2</td><td>Sean Couturier (BOS)</td><td>82</td><td>257</td></tr>
<tr><td>3</td><td>Nick Bonino (VAN)</td><td>82</td><td>251</td></tr>
<tr><td>4</td><td>Ryan O'Reilly (NYI)</td><td>80</td><td>245</td></tr>
<tr><td>5</td><td>Dylan Larkin (CGY)</td><td>74</td><td>238</td></tr>
<tr><td>6</td><td>Mika Zibanejad (ARI)</td><td>82</td><td>232</td></tr>
<tr><td>7</td><td>Paul Stastny (CAR)</td><td>76</td><td>231</td></tr>
<tr><td>8</td><td>Travis Zajac (ANH)</td><td>78</td><td>227</td></tr>
<tr><td>9</td><td>Matt Duchene (DET)</td><td>82</td><td>227</td></tr>
<tr><td>10</td><td>Logan Couture (NSH)</td><td>80</td><td>226</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Connor McDavid (DET)</td><td>82</td><td>7</td></tr>
<tr><td>2</td><td>Andreas Athanasiou (NSH)</td><td>82</td><td>6</td></tr>
<tr><td>3</td><td>Evgeny Kuznetsov (SJS)</td><td>73</td><td>5</td></tr>
<tr><td>4</td><td>Artemi Panarin (MTL)</td><td>75</td><td>5</td></tr>
<tr><td>5</td><td>T.J. Oshie (WSH)</td><td>79</td><td>5</td></tr>
<tr><td>6</td><td>Bo Horvat (CGY)</td><td>81</td><td>5</td></tr>
<tr><td>7</td><td>Patrik Laine (DET)</td><td>82</td><td>5</td></tr>
<tr><td>8</td><td>Paul Byron (WSH)</td><td>82</td><td>5</td></tr>
<tr><td>9</td><td>Sean Couturier (BOS)</td><td>82</td><td>5</td></tr>
<tr><td>10</td><td>Carl Soderberg (FLA)</td><td>82</td><td>5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Milan Lucic (VGK)</td><td>76</td><td>8</td></tr>
<tr><td>2</td><td>Tom Wilson (CGY)</td><td>81</td><td>8</td></tr>
<tr><td>3</td><td>Erik Johnson (OTT)</td><td>82</td><td>7</td></tr>
<tr><td>4</td><td>Nikita Zadorov (MTL)</td><td>82</td><td>7</td></tr>
<tr><td>5</td><td>Kevan Miller (NSH)</td><td>73</td><td>6</td></tr>
<tr><td>6</td><td>Brenden Dillon (TOR)</td><td>81</td><td>6</td></tr>
<tr><td>7</td><td>Luke Schenn (ANH)</td><td>73</td><td>5</td></tr>
<tr><td>8</td><td>Buddy Robinson (FLA)</td><td>73</td><td>5</td></tr>
<tr><td>9</td><td>Ryan Getzlaf (NJD)</td><td>77</td><td>5</td></tr>
<tr><td>10</td><td>Jonathan Ericsson (PHL)</td><td>78</td><td>5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Jonathan Ericsson (PHL)</td><td>78</td><td>3</td></tr>
<tr><td>2</td><td>Mark Borowiecki (TOR)</td><td>80</td><td>3</td></tr>
<tr><td>3</td><td>Brady Tkachuk (PIT)</td><td>82</td><td>3</td></tr>
<tr><td>4</td><td>Erik Johnson (OTT)</td><td>82</td><td>3</td></tr>
<tr><td>5</td><td>Erik Cernak (NSH)</td><td>82</td><td>3</td></tr>
<tr><td>6</td><td>Troy Brouwer (MIN)</td><td>82</td><td>3</td></tr>
<tr><td>7</td><td>Brendan Lemieux (STL)</td><td>28</td><td>2</td></tr>
<tr><td>8</td><td>Logan Shaw (NSH)</td><td>53</td><td>2</td></tr>
<tr><td>9</td><td>Erik Gudbranson (BOS)</td><td>68</td><td>2</td></tr>
<tr><td>10</td><td>Kevan Miller (NSH)</td><td>73</td><td>2</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (MTL)</td><td>65</td><td>0.931</td></tr>
<tr><td>2</td><td>Thomas Greiss (BUF)</td><td>63</td><td>0.930</td></tr>
<tr><td>3</td><td>Andrei Vasilevskiy (OTT)</td><td>52</td><td>0.928</td></tr>
<tr><td>4</td><td>Jordan Binnington (NYI)</td><td>50</td><td>0.925</td></tr>
<tr><td>5</td><td>Antti Raanta (ANH)</td><td>47</td><td>0.924</td></tr>
<tr><td>6</td><td>Carey Price (NSH)</td><td>63</td><td>0.923</td></tr>
<tr><td>7</td><td>David Rittich (FLA)</td><td>50</td><td>0.923</td></tr>
<tr><td>8</td><td>Jaroslav Halak (PHL)</td><td>65</td><td>0.922</td></tr>
<tr><td>9</td><td>Petr Mrazek (WSH)</td><td>45</td><td>0.922</td></tr>
<tr><td>10</td><td>Philipp Grubauer (NYI)</td><td>58</td><td>0.920</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Thomas Greiss (BUF)</td><td>63</td><td>2.02</td></tr>
<tr><td>2</td><td>Ben Bishop (MTL)</td><td>65</td><td>2.16</td></tr>
<tr><td>3</td><td>Philipp Grubauer (NYI)</td><td>58</td><td>2.28</td></tr>
<tr><td>4</td><td>David Rittich (FLA)</td><td>50</td><td>2.30</td></tr>
<tr><td>5</td><td>Petr Mrazek (WSH)</td><td>45</td><td>2.30</td></tr>
<tr><td>6</td><td>Antti Raanta (ANH)</td><td>47</td><td>2.40</td></tr>
<tr><td>7</td><td>Andrei Vasilevskiy (OTT)</td><td>52</td><td>2.42</td></tr>
<tr><td>8</td><td>Darcy Kuemper (SJS)</td><td>66</td><td>2.42</td></tr>
<tr><td>9</td><td>Pekka Rinne (CGY)</td><td>55</td><td>2.43</td></tr>
<tr><td>10</td><td>Jordan Binnington (NYI)</td><td>50</td><td>2.45</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Darcy Kuemper (SJS)</td><td>66</td><td>4,014</td></tr>
<tr><td>2</td><td>Henrik Lundqvist (VAN)</td><td>65</td><td>3,921</td></tr>
<tr><td>3</td><td>Robin Lehner (NJD)</td><td>66</td><td>3,919</td></tr>
<tr><td>4</td><td>Sergei Bobrovsky (DET)</td><td>64</td><td>3,903</td></tr>
<tr><td>5</td><td>Ben Bishop (MTL)</td><td>65</td><td>3,898</td></tr>
<tr><td>6</td><td>Marc-Andre Fleury (NYR)</td><td>66</td><td>3,896</td></tr>
<tr><td>7</td><td>Devan Dubnyk (LAK)</td><td>65</td><td>3,823</td></tr>
<tr><td>8</td><td>Tuukka Rask (ARI)</td><td>65</td><td>3,771</td></tr>
<tr><td>9</td><td>Jaroslav Halak (PHL)</td><td>65</td><td>3,764</td></tr>
<tr><td>10</td><td>John Gibson (EDM)</td><td>64</td><td>3,760</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Semyon Varlamov (PIT)</td><td>63</td><td>2086</td></tr>
<tr><td>2</td><td>Henrik Lundqvist (VAN)</td><td>65</td><td>2070</td></tr>
<tr><td>3</td><td>Jaroslav Halak (PHL)</td><td>65</td><td>2066</td></tr>
<tr><td>4</td><td>Sergei Bobrovsky (DET)</td><td>64</td><td>2058</td></tr>
<tr><td>5</td><td>Darcy Kuemper (SJS)</td><td>66</td><td>2025</td></tr>
<tr><td>6</td><td>Ben Bishop (MTL)</td><td>65</td><td>2017</td></tr>
<tr><td>7</td><td>Tuukka Rask (ARI)</td><td>65</td><td>2013</td></tr>
<tr><td>8</td><td>Carey Price (NSH)</td><td>63</td><td>2007</td></tr>
<tr><td>9</td><td>Robin Lehner (NJD)</td><td>66</td><td>1978</td></tr>
<tr><td>10</td><td>Connor Hellebuyck (TBL)</td><td>65</td><td>1939</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Carey Price (NSH)</td><td>63</td><td>8</td></tr>
<tr><td>2</td><td>Thomas Greiss (BUF)</td><td>63</td><td>7</td></tr>
<tr><td>3</td><td>Ben Bishop (MTL)</td><td>65</td><td>7</td></tr>
<tr><td>4</td><td>Darcy Kuemper (SJS)</td><td>66</td><td>6</td></tr>
<tr><td>5</td><td>Petr Mrazek (WSH)</td><td>45</td><td>5</td></tr>
<tr><td>6</td><td>Pekka Rinne (CGY)</td><td>55</td><td>5</td></tr>
<tr><td>7</td><td>Jake Allen (COL)</td><td>57</td><td>5</td></tr>
<tr><td>8</td><td>John Gibson (EDM)</td><td>64</td><td>5</td></tr>
<tr><td>9</td><td>Marc-Andre Fleury (NYR)</td><td>66</td><td>5</td></tr>
<tr><td>10</td><td>Jack Campbell (BOS)</td><td>37</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (MTL)</td><td>65</td><td>40</td></tr>
<tr><td>2</td><td>Thomas Greiss (BUF)</td><td>63</td><td>39</td></tr>
<tr><td>3</td><td>Carey Price (NSH)</td><td>63</td><td>38</td></tr>
<tr><td>4</td><td>Braden Holtby (BOS)</td><td>65</td><td>38</td></tr>
<tr><td>5</td><td>Tuukka Rask (ARI)</td><td>65</td><td>38</td></tr>
<tr><td>6</td><td>Darcy Kuemper (SJS)</td><td>66</td><td>38</td></tr>
<tr><td>7</td><td>Devan Dubnyk (LAK)</td><td>65</td><td>37</td></tr>
<tr><td>8</td><td>Philipp Grubauer (NYI)</td><td>58</td><td>36</td></tr>
<tr><td>9</td><td>John Gibson (EDM)</td><td>64</td><td>36</td></tr>
<tr><td>10</td><td>Henrik Lundqvist (VAN)</td><td>65</td><td>36</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Brian Elliott (TBL)</td><td>7</td><td>1.000</td></tr>
<tr><td>2</td><td>Juuse Saros (WPG)</td><td>3</td><td>1.000</td></tr>
<tr><td>3</td><td>Scott Wedgewood (EDM)</td><td>3</td><td>1.000</td></tr>
<tr><td>4</td><td>Christopher Gibson (WPG)</td><td>3</td><td>1.000</td></tr>
<tr><td>5</td><td>Malcolm Subban (LAK)</td><td>2</td><td>1.000</td></tr>
<tr><td>6</td><td>Semyon Varlamov (PIT)</td><td>13</td><td>0.923</td></tr>
<tr><td>7</td><td>Carey Price (NSH)</td><td>25</td><td>0.920</td></tr>
<tr><td>8</td><td>Mikko Koskinen (PHL)</td><td>10</td><td>0.900</td></tr>
<tr><td>9</td><td>Casey DeSmith (CGY)</td><td>14</td><td>0.857</td></tr>
<tr><td>10</td><td>Henrik Lundqvist (VAN)</td><td>13</td><td>0.846</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Semyon Varlamov (PIT)</td><td>63</td><td>40</td></tr>
<tr><td>2</td><td>Frederik Andersen (TOR)</td><td>66</td><td>33</td></tr>
<tr><td>3</td><td>Pavel Francouz (CAR)</td><td>55</td><td>31</td></tr>
<tr><td>4</td><td>Jonathan Quick (STL)</td><td>56</td><td>31</td></tr>
<tr><td>5</td><td>Jaroslav Halak (PHL)</td><td>65</td><td>28</td></tr>
<tr><td>6</td><td>Jake Allen (COL)</td><td>57</td><td>25</td></tr>
<tr><td>7</td><td>Henrik Lundqvist (VAN)</td><td>65</td><td>25</td></tr>
<tr><td>8</td><td>Marc-Andre Fleury (NYR)</td><td>66</td><td>25</td></tr>
<tr><td>9</td><td>Cam Talbot (DAL)</td><td>53</td><td>24</td></tr>
<tr><td>10</td><td>Jimmy Howard (CHI)</td><td>63</td><td>23</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
