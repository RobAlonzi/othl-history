<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Individual Leaders</title>
<script src="OTHL.js"></script>
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
<b>Minimum Games Played: 41</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Kyle Connor (VAN)</td><td>82</td><td>44</td></tr>
<tr><td>2</td><td>Patrice Bergeron (DAL)</td><td>79</td><td>41</td></tr>
<tr><td>3</td><td>Sebastian Aho (CHI)</td><td>81</td><td>41</td></tr>
<tr><td>4</td><td>Patrick Kane (COL)</td><td>82</td><td>41</td></tr>
<tr><td>5</td><td>Matthew Tkachuk (WPG)</td><td>80</td><td>39</td></tr>
<tr><td>6</td><td>Nathan MacKinnon (LAK)</td><td>81</td><td>39</td></tr>
<tr><td>7</td><td>Jack Eichel (WSH)</td><td>82</td><td>38</td></tr>
<tr><td>8</td><td>Bo Horvat (CGY)</td><td>82</td><td>38</td></tr>
<tr><td>9</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>38</td></tr>
<tr><td>10</td><td>Artemi Panarin (ANH)</td><td>76</td><td>37</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Kyle Connor (VAN)</td><td>82</td><td>69</td></tr>
<tr><td>2</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>67</td></tr>
<tr><td>3</td><td>Dougie Hamilton (VAN)</td><td>82</td><td>67</td></tr>
<tr><td>4</td><td>Erik Karlsson (CGY)</td><td>78</td><td>59</td></tr>
<tr><td>5</td><td>Alex Pietrangelo (TOR)</td><td>82</td><td>58</td></tr>
<tr><td>6</td><td>Patrice Bergeron (DAL)</td><td>79</td><td>57</td></tr>
<tr><td>7</td><td>Ryan Suter (BUF)</td><td>82</td><td>55</td></tr>
<tr><td>8</td><td>Quinn Hughes (CLB)</td><td>78</td><td>54</td></tr>
<tr><td>9</td><td>Brad Marchand (BOS)</td><td>78</td><td>54</td></tr>
<tr><td>10</td><td>Esa Lindell (TBL)</td><td>82</td><td>54</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Sebastian Aho (CHI)</td><td>81</td><td>456</td></tr>
<tr><td>2</td><td>Kyle Connor (VAN)</td><td>82</td><td>425</td></tr>
<tr><td>3</td><td>Mika Zibanejad (ARI)</td><td>73</td><td>406</td></tr>
<tr><td>4</td><td>Jack Eichel (WSH)</td><td>82</td><td>401</td></tr>
<tr><td>5</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>401</td></tr>
<tr><td>6</td><td>Patrick Kane (COL)</td><td>82</td><td>396</td></tr>
<tr><td>7</td><td>Bo Horvat (CGY)</td><td>82</td><td>381</td></tr>
<tr><td>8</td><td>Sean Couturier (BOS)</td><td>82</td><td>373</td></tr>
<tr><td>9</td><td>Connor McDavid (DET)</td><td>82</td><td>372</td></tr>
<tr><td>10</td><td>Patrice Bergeron (DAL)</td><td>79</td><td>358</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Jordan Oesterle (PIT)</td><td>67</td><td>19.72%</td></tr>
<tr><td>2</td><td>Pavel Buchnevich (OTT)</td><td>71</td><td>16.91%</td></tr>
<tr><td>3</td><td>Brandon Tanev (MTL)</td><td>82</td><td>16.06%</td></tr>
<tr><td>4</td><td>Brett Connolly (OTT)</td><td>82</td><td>15.60%</td></tr>
<tr><td>5</td><td>Nathan MacKinnon (LAK)</td><td>81</td><td>15.48%</td></tr>
<tr><td>6</td><td>Derek Grant (BUF)</td><td>82</td><td>15.18%</td></tr>
<tr><td>7</td><td>Conor Sheary (DET)</td><td>82</td><td>14.94%</td></tr>
<tr><td>8</td><td>David Perron (CGY)</td><td>69</td><td>14.94%</td></tr>
<tr><td>9</td><td>Kevin Fiala (PHL)</td><td>83</td><td>14.37%</td></tr>
<tr><td>10</td><td>Jake Muzzin (ANH)</td><td>82</td><td>14.05%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>38-67-105</td></tr>
<tr><td>2</td><td>Patrice Bergeron (DAL)</td><td>79</td><td>41-57-98</td></tr>
<tr><td>3</td><td>Brad Marchand (BOS)</td><td>78</td><td>36-54-90</td></tr>
<tr><td>4</td><td>Sebastian Aho (CHI)</td><td>81</td><td>41-45-86</td></tr>
<tr><td>5</td><td>Bo Horvat (CGY)</td><td>82</td><td>38-47-85</td></tr>
<tr><td>6</td><td>Sean Couturier (BOS)</td><td>82</td><td>33-52-85</td></tr>
<tr><td>7</td><td>Brock Nelson (PHL)</td><td>82</td><td>37-44-81</td></tr>
<tr><td>8</td><td>Dylan Larkin (CGY)</td><td>82</td><td>28-52-80</td></tr>
<tr><td>9</td><td>Elias Lindholm (LAK)</td><td>80</td><td>27-53-80</td></tr>
<tr><td>10</td><td>Nathan MacKinnon (LAK)</td><td>81</td><td>39-40-79</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Kyle Connor (VAN)</td><td>82</td><td>44-69-113</td></tr>
<tr><td>2</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>38-67-105</td></tr>
<tr><td>3</td><td>Brad Marchand (BOS)</td><td>78</td><td>36-54-90</td></tr>
<tr><td>4</td><td>Artemi Panarin (ANH)</td><td>76</td><td>37-50-87</td></tr>
<tr><td>5</td><td>Sebastian Aho (CHI)</td><td>81</td><td>41-45-86</td></tr>
<tr><td>6</td><td>Matthew Tkachuk (WPG)</td><td>80</td><td>39-45-84</td></tr>
<tr><td>7</td><td>Brock Nelson (PHL)</td><td>82</td><td>37-44-81</td></tr>
<tr><td>8</td><td>Taylor Hall (CGY)</td><td>78</td><td>32-42-74</td></tr>
<tr><td>9</td><td>Tomas Hertl (TOR)</td><td>72</td><td>33-39-72</td></tr>
<tr><td>10</td><td>Teuvo Teravainen (BUF)</td><td>82</td><td>27-45-72</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>38-67-105</td></tr>
<tr><td>2</td><td>Patrick Kane (COL)</td><td>82</td><td>41-51-92</td></tr>
<tr><td>3</td><td>Matthew Tkachuk (WPG)</td><td>80</td><td>39-45-84</td></tr>
<tr><td>4</td><td>Elias Lindholm (LAK)</td><td>80</td><td>27-53-80</td></tr>
<tr><td>5</td><td>Nick Bonino (VAN)</td><td>82</td><td>34-42-76</td></tr>
<tr><td>6</td><td>Sam Reinhart (NSH)</td><td>82</td><td>33-43-76</td></tr>
<tr><td>7</td><td>Mitch Marner (LAK)</td><td>78</td><td>30-44-74</td></tr>
<tr><td>8</td><td>Teuvo Teravainen (BUF)</td><td>82</td><td>27-45-72</td></tr>
<tr><td>9</td><td>Mikko Rantanen (VAN)</td><td>74</td><td>28-41-69</td></tr>
<tr><td>10</td><td>Mike Hoffman (PHL)</td><td>82</td><td>23-44-67</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dougie Hamilton (VAN)</td><td>82</td><td>21-67-88</td></tr>
<tr><td>2</td><td>Alex Pietrangelo (TOR)</td><td>82</td><td>16-58-74</td></tr>
<tr><td>3</td><td>Erik Karlsson (CGY)</td><td>78</td><td>9-59-68</td></tr>
<tr><td>4</td><td>John Carlson (TOR)</td><td>80</td><td>13-53-66</td></tr>
<tr><td>5</td><td>Esa Lindell (TBL)</td><td>82</td><td>11-54-65</td></tr>
<tr><td>6</td><td>Zach Werenski (CHI)</td><td>82</td><td>18-46-64</td></tr>
<tr><td>7</td><td>Hampus Lindholm (COL)</td><td>82</td><td>18-46-64</td></tr>
<tr><td>8</td><td>Ryan Suter (BUF)</td><td>82</td><td>9-55-64</td></tr>
<tr><td>9</td><td>Roman Josi (NYR)</td><td>81</td><td>9-52-61</td></tr>
<tr><td>10</td><td>Jared Spurgeon (SJS)</td><td>82</td><td>12-48-60</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Kyle Connor (VAN)</td><td>82</td><td>1.44</td></tr>
<tr><td>2</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>1.30</td></tr>
<tr><td>3</td><td>Patrice Bergeron (DAL)</td><td>79</td><td>1.24</td></tr>
<tr><td>4</td><td>Brad Marchand (BOS)</td><td>78</td><td>1.23</td></tr>
<tr><td>5</td><td>J.T. Miller (COL)</td><td>55</td><td>1.16</td></tr>
<tr><td>6</td><td>Artemi Panarin (ANH)</td><td>76</td><td>1.14</td></tr>
<tr><td>7</td><td>Matthew Tkachuk (WPG)</td><td>80</td><td>1.09</td></tr>
<tr><td>8</td><td>Elias Lindholm (LAK)</td><td>80</td><td>1.07</td></tr>
<tr><td>9</td><td>Sebastian Aho (CHI)</td><td>81</td><td>1.07</td></tr>
<tr><td>10</td><td>Tomas Hertl (TOR)</td><td>72</td><td>1.06</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Ryan Kesler (WSH)</td><td>71</td><td>62.53%</td></tr>
<tr><td>2</td><td>Jordan Staal (ANH)</td><td>77</td><td>61.57%</td></tr>
<tr><td>3</td><td>Mikko Koivu (COL)</td><td>76</td><td>60.31%</td></tr>
<tr><td>4</td><td>Nazem Kadri (ANH)</td><td>82</td><td>59.81%</td></tr>
<tr><td>5</td><td>Tomas Hertl (TOR)</td><td>72</td><td>59.65%</td></tr>
<tr><td>6</td><td>Patrice Bergeron (DAL)</td><td>79</td><td>58.86%</td></tr>
<tr><td>7</td><td>Sidney Crosby (BUF)</td><td>72</td><td>58.83%</td></tr>
<tr><td>8</td><td>Jonathan Toews (NJD)</td><td>70</td><td>58.78%</td></tr>
<tr><td>9</td><td>Joe Pavelski (CLB)</td><td>85</td><td>58.66%</td></tr>
<tr><td>10</td><td>Sean Couturier (BOS)</td><td>82</td><td>58.63%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Kyle Connor (VAN)</td><td>82</td><td>59</td></tr>
<tr><td>2</td><td>Nick Bonino (VAN)</td><td>82</td><td>58</td></tr>
<tr><td>3</td><td>Nikita Zaitsev (VAN)</td><td>82</td><td>41</td></tr>
<tr><td>4</td><td>Brayden McNabb (BOS)</td><td>78</td><td>39</td></tr>
<tr><td>5</td><td>Elias Lindholm (LAK)</td><td>80</td><td>38</td></tr>
<tr><td>6</td><td>Kevin Hayes (ARI)</td><td>82</td><td>38</td></tr>
<tr><td>7</td><td>Mirco Mueller (BOS)</td><td>82</td><td>37</td></tr>
<tr><td>8</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>35</td></tr>
<tr><td>9</td><td>Brad Marchand (BOS)</td><td>78</td><td>34</td></tr>
<tr><td>10</td><td>Marco Scandella (TBL)</td><td>78</td><td>34</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Brenden Dillon (NYR)</td><td>82</td><td>178</td></tr>
<tr><td>2</td><td>Darnell Nurse (NJD)</td><td>82</td><td>146</td></tr>
<tr><td>3</td><td>Rasmus Ristolainen (BUF)</td><td>82</td><td>138</td></tr>
<tr><td>4</td><td>Dylan McIlrath (OTT)</td><td>56</td><td>130</td></tr>
<tr><td>5</td><td>Tom Wilson (CGY)</td><td>76</td><td>119</td></tr>
<tr><td>6</td><td>Josh Manson (DET)</td><td>75</td><td>118</td></tr>
<tr><td>7</td><td>Dmitry Kulikov (PIT)</td><td>77</td><td>117</td></tr>
<tr><td>8</td><td>Jack Johnson (NSH)</td><td>80</td><td>113</td></tr>
<tr><td>9</td><td>Brady Tkachuk (PIT)</td><td>82</td><td>109</td></tr>
<tr><td>10</td><td>Joel Edmundson (SJS)</td><td>80</td><td>108</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Alex Goligoski (CLB)</td><td>84</td><td>165</td></tr>
<tr><td>2</td><td>Chris Tanev (NJD)</td><td>82</td><td>154</td></tr>
<tr><td>3</td><td>Miro Heiskanen (WPG)</td><td>82</td><td>153</td></tr>
<tr><td>4</td><td>Esa Lindell (TBL)</td><td>82</td><td>152</td></tr>
<tr><td>5</td><td>Filip Hronek (CAR)</td><td>82</td><td>149</td></tr>
<tr><td>6</td><td>Damon Severson (FLA)</td><td>78</td><td>146</td></tr>
<tr><td>7</td><td>Jared Spurgeon (SJS)</td><td>82</td><td>144</td></tr>
<tr><td>8</td><td>Erik Johnson (CLB)</td><td>79</td><td>143</td></tr>
<tr><td>9</td><td>Hampus Lindholm (COL)</td><td>82</td><td>143</td></tr>
<tr><td>10</td><td>Roman Josi (NYR)</td><td>81</td><td>142</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Quinn Hughes (CLB)</td><td>78</td><td>6-54-60</td></tr>
<tr><td>2</td><td>Dominik Kubalik (NSH)</td><td>82</td><td>25-26-51</td></tr>
<tr><td>3</td><td>Ethan Bear (ARI)</td><td>77</td><td>12-33-45</td></tr>
<tr><td>4</td><td>Ilya Mikheyev (PIT)</td><td>59</td><td>14-25-39</td></tr>
<tr><td>5</td><td>Janne Kuokkanen (STL)</td><td>60</td><td>10-21-31</td></tr>
<tr><td>6</td><td>Denis Gurianov (STL)</td><td>82</td><td>14-16-30</td></tr>
<tr><td>7</td><td>Martin Necas (FLA)</td><td>69</td><td>14-12-26</td></tr>
<tr><td>8</td><td>Kirby Dach (NJD)</td><td>45</td><td>9-14-23</td></tr>
<tr><td>9</td><td>Isac Lundestrom (MTL)</td><td>40</td><td>10-11-21</td></tr>
<tr><td>10</td><td>Filip Zadina (PHL)</td><td>67</td><td>7-14-21</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Brenden Dillon (NYR)</td><td>82</td><td>304</td></tr>
<tr><td>2</td><td>Darnell Nurse (NJD)</td><td>82</td><td>255</td></tr>
<tr><td>3</td><td>Dmitry Kulikov (PIT)</td><td>77</td><td>251</td></tr>
<tr><td>4</td><td>Mikhail Sergachev (MIN)</td><td>82</td><td>250</td></tr>
<tr><td>5</td><td>Tom Wilson (CGY)</td><td>76</td><td>244</td></tr>
<tr><td>6</td><td>Blake Coleman (BOS)</td><td>79</td><td>244</td></tr>
<tr><td>7</td><td>Brady Tkachuk (PIT)</td><td>82</td><td>244</td></tr>
<tr><td>8</td><td>Evander Kane (TBL)</td><td>68</td><td>232</td></tr>
<tr><td>9</td><td>Nick Ritchie (NJD)</td><td>82</td><td>232</td></tr>
<tr><td>10</td><td>Nazem Kadri (ANH)</td><td>82</td><td>231</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Brad Marchand (BOS)</td><td>78</td><td>14</td></tr>
<tr><td>2</td><td>Cam Atkinson (PHL)</td><td>75</td><td>13</td></tr>
<tr><td>3</td><td>Mika Zibanejad (ARI)</td><td>73</td><td>12</td></tr>
<tr><td>4</td><td>Bryan Rust (PHL)</td><td>71</td><td>11</td></tr>
<tr><td>5</td><td>Zach Werenski (CHI)</td><td>82</td><td>11</td></tr>
<tr><td>6</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>11</td></tr>
<tr><td>7</td><td>Matthew Tkachuk (WPG)</td><td>80</td><td>10</td></tr>
<tr><td>8</td><td>John Carlson (TOR)</td><td>80</td><td>10</td></tr>
<tr><td>9</td><td>Kyle Connor (VAN)</td><td>82</td><td>10</td></tr>
<tr><td>10</td><td>Dougie Hamilton (VAN)</td><td>82</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Matt Calvert (CHI)</td><td>79</td><td>2</td></tr>
<tr><td>2</td><td>Ryan Getzlaf (NJD)</td><td>82</td><td>2</td></tr>
<tr><td>3</td><td>Lars Eller (EDM)</td><td>82</td><td>2</td></tr>
<tr><td>4</td><td>Anthony Beauvillier (CGY)</td><td>82</td><td>2</td></tr>
<tr><td>5</td><td>Ryan O'Reilly (NYI)</td><td>82</td><td>2</td></tr>
<tr><td>6</td><td>Josh Archibald (TBL)</td><td>84</td><td>2</td></tr>
<tr><td>7</td><td>Claude Giroux (NYR)</td><td>43</td><td>1</td></tr>
<tr><td>8</td><td>Drake Batherson (VGK)</td><td>52</td><td>1</td></tr>
<tr><td>9</td><td>Kyle Rau (MTL)</td><td>55</td><td>1</td></tr>
<tr><td>10</td><td>Jesper Fast (ARI)</td><td>57</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Tom Wilson (CGY)</td><td>76</td><td>10</td></tr>
<tr><td>2</td><td>Nico Hischier (VAN)</td><td>82</td><td>10</td></tr>
<tr><td>3</td><td>Bo Horvat (CGY)</td><td>82</td><td>10</td></tr>
<tr><td>4</td><td>John Tavares (TBL)</td><td>82</td><td>10</td></tr>
<tr><td>5</td><td>Patrice Bergeron (DAL)</td><td>79</td><td>9</td></tr>
<tr><td>6</td><td>Alex Ovechkin (LAK)</td><td>82</td><td>9</td></tr>
<tr><td>7</td><td>Kyle Connor (VAN)</td><td>82</td><td>9</td></tr>
<tr><td>8</td><td>Sean Couturier (BOS)</td><td>82</td><td>9</td></tr>
<tr><td>9</td><td>Chris Kreider (BUF)</td><td>77</td><td>8</td></tr>
<tr><td>10</td><td>Mitch Marner (LAK)</td><td>78</td><td>8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Mikko Rantanen (VAN)</td><td>74</td><td>5</td></tr>
<tr><td>2</td><td>Jean-Gabriel Pageau (BOS)</td><td>65</td><td>4</td></tr>
<tr><td>3</td><td>Evander Kane (TBL)</td><td>68</td><td>4</td></tr>
<tr><td>4</td><td>Taylor Hall (CGY)</td><td>78</td><td>4</td></tr>
<tr><td>5</td><td>Ryan Strome (PHL)</td><td>80</td><td>4</td></tr>
<tr><td>6</td><td>Mikael Backlund (STL)</td><td>81</td><td>4</td></tr>
<tr><td>7</td><td>Dominik Kubalik (NSH)</td><td>82</td><td>4</td></tr>
<tr><td>8</td><td>Steven Stamkos (NYI)</td><td>82</td><td>4</td></tr>
<tr><td>9</td><td>Bo Horvat (CGY)</td><td>82</td><td>4</td></tr>
<tr><td>10</td><td>John Tavares (TBL)</td><td>82</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Jeff Skinner (WPG)</td><td>64</td><td>2</td></tr>
<tr><td>2</td><td>Tomas Hertl (TOR)</td><td>72</td><td>2</td></tr>
<tr><td>3</td><td>Elias Lindholm (LAK)</td><td>80</td><td>2</td></tr>
<tr><td>4</td><td>Brandon Saad (TOR)</td><td>81</td><td>2</td></tr>
<tr><td>5</td><td>Mathew Barzal (NYI)</td><td>82</td><td>2</td></tr>
<tr><td>6</td><td>Lars Eller (EDM)</td><td>82</td><td>2</td></tr>
<tr><td>7</td><td>Nick Bonino (VAN)</td><td>82</td><td>2</td></tr>
<tr><td>8</td><td>Connor Brown (NYI)</td><td>82</td><td>2</td></tr>
<tr><td>9</td><td>Tyson Jost (PIT)</td><td>20</td><td>1</td></tr>
<tr><td>10</td><td>Trevor Lewis (FLA)</td><td>38</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Hampus Lindholm (COL)</td><td>82</td><td>2,098</td></tr>
<tr><td>2</td><td>Oliver Ekman-Larsson (ARI)</td><td>82</td><td>2,082</td></tr>
<tr><td>3</td><td>Ryan Suter (BUF)</td><td>82</td><td>2,061</td></tr>
<tr><td>4</td><td>Mattias Ekholm (EDM)</td><td>82</td><td>2,044</td></tr>
<tr><td>5</td><td>Alex Goligoski (CLB)</td><td>84</td><td>2,043</td></tr>
<tr><td>6</td><td>Drew Doughty (WSH)</td><td>82</td><td>2,028</td></tr>
<tr><td>7</td><td>Filip Hronek (CAR)</td><td>82</td><td>2,026</td></tr>
<tr><td>8</td><td>Chris Tanev (NJD)</td><td>82</td><td>2,021</td></tr>
<tr><td>9</td><td>Aaron Ekblad (MTL)</td><td>82</td><td>2,015</td></tr>
<tr><td>10</td><td>Jeff Petry (EDM)</td><td>82</td><td>2,003</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Cam Atkinson (PHL)</td><td>75</td><td>3</td></tr>
<tr><td>2</td><td>Jonathan Toews (NJD)</td><td>70</td><td>2</td></tr>
<tr><td>3</td><td>Bryan Rust (PHL)</td><td>71</td><td>2</td></tr>
<tr><td>4</td><td>Matthew Tkachuk (WPG)</td><td>80</td><td>2</td></tr>
<tr><td>5</td><td>Kyle Connor (VAN)</td><td>82</td><td>2</td></tr>
<tr><td>6</td><td>Neal Pionk (LAK)</td><td>48</td><td>1</td></tr>
<tr><td>7</td><td>J.T. Miller (COL)</td><td>55</td><td>1</td></tr>
<tr><td>8</td><td>Ilya Mikheyev (PIT)</td><td>59</td><td>1</td></tr>
<tr><td>9</td><td>Jeff Skinner (WPG)</td><td>64</td><td>1</td></tr>
<tr><td>10</td><td>Evander Kane (TBL)</td><td>68</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Tomas Hertl (TOR)</td><td>72</td><td>5</td></tr>
<tr><td>2</td><td>Sam Reinhart (NSH)</td><td>82</td><td>5</td></tr>
<tr><td>3</td><td>Rocco Grimaldi (MIN)</td><td>82</td><td>3</td></tr>
<tr><td>4</td><td>Anton Stralman (CLB)</td><td>60</td><td>2</td></tr>
<tr><td>5</td><td>Jean-Gabriel Pageau (BOS)</td><td>65</td><td>2</td></tr>
<tr><td>6</td><td>Cam Atkinson (PHL)</td><td>75</td><td>2</td></tr>
<tr><td>7</td><td>Chris Kreider (BUF)</td><td>77</td><td>2</td></tr>
<tr><td>8</td><td>Zach Parise (DAL)</td><td>78</td><td>2</td></tr>
<tr><td>9</td><td>Luke Kunin (EDM)</td><td>79</td><td>2</td></tr>
<tr><td>10</td><td>Artem Anisimov (CLB)</td><td>81</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Tyler Seguin (FLA)</td><td>82</td><td>11</td></tr>
<tr><td>2</td><td>Patrice Bergeron (DAL)</td><td>79</td><td>8</td></tr>
<tr><td>3</td><td>Matthew Tkachuk (WPG)</td><td>80</td><td>8</td></tr>
<tr><td>4</td><td>Alex Pietrangelo (TOR)</td><td>82</td><td>8</td></tr>
<tr><td>5</td><td>Anthony Duclair (CLB)</td><td>82</td><td>8</td></tr>
<tr><td>6</td><td>Seth Jones (LAK)</td><td>80</td><td>6</td></tr>
<tr><td>7</td><td>Sam Reinhart (NSH)</td><td>82</td><td>6</td></tr>
<tr><td>8</td><td>Joe Pavelski (CLB)</td><td>85</td><td>6</td></tr>
<tr><td>9</td><td>Adam Henrique (NSH)</td><td>63</td><td>5</td></tr>
<tr><td>10</td><td>Brent Burns (BOS)</td><td>66</td><td>5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Nick Bonino (VAN)</td><td>82</td><td>258</td></tr>
<tr><td>2</td><td>Brock Nelson (PHL)</td><td>82</td><td>240</td></tr>
<tr><td>3</td><td>Ryan O'Reilly (NYI)</td><td>82</td><td>237</td></tr>
<tr><td>4</td><td>William Karlsson (NJD)</td><td>82</td><td>237</td></tr>
<tr><td>5</td><td>Nick Foligno (PIT)</td><td>82</td><td>236</td></tr>
<tr><td>6</td><td>Logan Couture (NSH)</td><td>82</td><td>236</td></tr>
<tr><td>7</td><td>Bo Horvat (CGY)</td><td>82</td><td>234</td></tr>
<tr><td>8</td><td>Connor McDavid (DET)</td><td>82</td><td>224</td></tr>
<tr><td>9</td><td>Patrice Bergeron (DAL)</td><td>79</td><td>222</td></tr>
<tr><td>10</td><td>Leon Draisaitl (ARI)</td><td>82</td><td>220</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Vladimir Tarasenko (STL)</td><td>80</td><td>6</td></tr>
<tr><td>2</td><td>Tyler Bozak (FLA)</td><td>75</td><td>4</td></tr>
<tr><td>3</td><td>Cam Atkinson (PHL)</td><td>75</td><td>4</td></tr>
<tr><td>4</td><td>Jared McCann (DET)</td><td>82</td><td>4</td></tr>
<tr><td>5</td><td>Kyle Connor (VAN)</td><td>82</td><td>4</td></tr>
<tr><td>6</td><td>Casey Cizikas (WPG)</td><td>82</td><td>4</td></tr>
<tr><td>7</td><td>Calle Jarnkrok (NYI)</td><td>82</td><td>4</td></tr>
<tr><td>8</td><td>Joonas Donskoi (WPG)</td><td>70</td><td>3</td></tr>
<tr><td>9</td><td>Anze Kopitar (BUF)</td><td>70</td><td>3</td></tr>
<tr><td>10</td><td>Ilya Kovalchuk (VAN)</td><td>76</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Dylan McIlrath (OTT)</td><td>56</td><td>8</td></tr>
<tr><td>2</td><td>Josh Manson (DET)</td><td>75</td><td>6</td></tr>
<tr><td>3</td><td>Josh Anderson (LAK)</td><td>82</td><td>6</td></tr>
<tr><td>4</td><td>Brenden Dillon (NYR)</td><td>82</td><td>6</td></tr>
<tr><td>5</td><td>Evander Kane (TBL)</td><td>68</td><td>5</td></tr>
<tr><td>6</td><td>Yanni Gourde (VAN)</td><td>72</td><td>5</td></tr>
<tr><td>7</td><td>Anders Lee (BUF)</td><td>82</td><td>5</td></tr>
<tr><td>8</td><td>Kevan Miller (NSH)</td><td>63</td><td>4</td></tr>
<tr><td>9</td><td>Justin Abdelkader (DET)</td><td>68</td><td>4</td></tr>
<tr><td>10</td><td>Gabriel Landeskog (NYR)</td><td>75</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Dylan McIlrath (OTT)</td><td>56</td><td>4</td></tr>
<tr><td>2</td><td>Yanni Gourde (VAN)</td><td>72</td><td>3</td></tr>
<tr><td>3</td><td>Josh Manson (DET)</td><td>75</td><td>3</td></tr>
<tr><td>4</td><td>Brendan Gaunce (DAL)</td><td>81</td><td>3</td></tr>
<tr><td>5</td><td>Brenden Dillon (NYR)</td><td>82</td><td>3</td></tr>
<tr><td>6</td><td>Adam Clendening (COL)</td><td>29</td><td>2</td></tr>
<tr><td>7</td><td>Kevin Connauton (NSH)</td><td>33</td><td>2</td></tr>
<tr><td>8</td><td>Anthony Bitetto (DAL)</td><td>34</td><td>2</td></tr>
<tr><td>9</td><td>Evander Kane (TBL)</td><td>68</td><td>2</td></tr>
<tr><td>10</td><td>Matt Irwin (MTL)</td><td>68</td><td>2</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Tuukka Rask (ARI)</td><td>64</td><td>0.937</td></tr>
<tr><td>2</td><td>Ben Bishop (CGY)</td><td>61</td><td>0.926</td></tr>
<tr><td>3</td><td>Anton Khudobin (PHL)</td><td>62</td><td>0.924</td></tr>
<tr><td>4</td><td>Thomas Greiss (BUF)</td><td>53</td><td>0.924</td></tr>
<tr><td>5</td><td>Pavel Francouz (BOS)</td><td>63</td><td>0.923</td></tr>
<tr><td>6</td><td>Philipp Grubauer (NYI)</td><td>56</td><td>0.921</td></tr>
<tr><td>7</td><td>Carter Hart (MTL)</td><td>57</td><td>0.920</td></tr>
<tr><td>8</td><td>Connor Hellebuyck (TBL)</td><td>62</td><td>0.920</td></tr>
<tr><td>9</td><td>Robin Lehner (NJD)</td><td>59</td><td>0.919</td></tr>
<tr><td>10</td><td>Darcy Kuemper (SJS)</td><td>60</td><td>0.919</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Tuukka Rask (ARI)</td><td>64</td><td>1.99</td></tr>
<tr><td>2</td><td>Ben Bishop (CGY)</td><td>61</td><td>2.19</td></tr>
<tr><td>3</td><td>Thomas Greiss (BUF)</td><td>53</td><td>2.21</td></tr>
<tr><td>4</td><td>Anton Khudobin (PHL)</td><td>62</td><td>2.24</td></tr>
<tr><td>5</td><td>Pavel Francouz (BOS)</td><td>63</td><td>2.26</td></tr>
<tr><td>6</td><td>Connor Hellebuyck (TBL)</td><td>62</td><td>2.38</td></tr>
<tr><td>7</td><td>Carter Hart (MTL)</td><td>57</td><td>2.46</td></tr>
<tr><td>8</td><td>Philipp Grubauer (NYI)</td><td>56</td><td>2.48</td></tr>
<tr><td>9</td><td>Jacob Markstrom (VAN)</td><td>61</td><td>2.50</td></tr>
<tr><td>10</td><td>Andrei Vasilevskiy (OTT)</td><td>53</td><td>2.53</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Tuukka Rask (ARI)</td><td>64</td><td>3,859</td></tr>
<tr><td>2</td><td>Carey Price (NSH)</td><td>64</td><td>3,807</td></tr>
<tr><td>3</td><td>Mackenzie Blackwood (VGK)</td><td>63</td><td>3,793</td></tr>
<tr><td>4</td><td>Pekka Rinne (WSH)</td><td>66</td><td>3,751</td></tr>
<tr><td>5</td><td>Jordan Binnington (LAK)</td><td>64</td><td>3,746</td></tr>
<tr><td>6</td><td>Corey Crawford (CHI)</td><td>63</td><td>3,716</td></tr>
<tr><td>7</td><td>Pavel Francouz (BOS)</td><td>63</td><td>3,691</td></tr>
<tr><td>8</td><td>Connor Hellebuyck (TBL)</td><td>62</td><td>3,687</td></tr>
<tr><td>9</td><td>Tristan Jarry (ANH)</td><td>65</td><td>3,670</td></tr>
<tr><td>10</td><td>Ben Bishop (CGY)</td><td>61</td><td>3,650</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jonathan Bernier (MIN)</td><td>63</td><td>2098</td></tr>
<tr><td>2</td><td>Carey Price (NSH)</td><td>64</td><td>2072</td></tr>
<tr><td>3</td><td>Mackenzie Blackwood (VGK)</td><td>63</td><td>2037</td></tr>
<tr><td>4</td><td>Semyon Varlamov (PIT)</td><td>63</td><td>2035</td></tr>
<tr><td>5</td><td>Tuukka Rask (ARI)</td><td>64</td><td>2034</td></tr>
<tr><td>6</td><td>Marcus Hogberg (DET)</td><td>57</td><td>1954</td></tr>
<tr><td>7</td><td>Tristan Jarry (ANH)</td><td>65</td><td>1940</td></tr>
<tr><td>8</td><td>Robin Lehner (NJD)</td><td>59</td><td>1918</td></tr>
<tr><td>9</td><td>Jordan Binnington (LAK)</td><td>64</td><td>1893</td></tr>
<tr><td>10</td><td>Corey Crawford (CHI)</td><td>63</td><td>1882</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Tuukka Rask (ARI)</td><td>64</td><td>8</td></tr>
<tr><td>2</td><td>Ben Bishop (CGY)</td><td>61</td><td>7</td></tr>
<tr><td>3</td><td>Carter Hart (MTL)</td><td>57</td><td>6</td></tr>
<tr><td>4</td><td>Connor Hellebuyck (TBL)</td><td>62</td><td>6</td></tr>
<tr><td>5</td><td>Thomas Greiss (BUF)</td><td>53</td><td>5</td></tr>
<tr><td>6</td><td>Philipp Grubauer (NYI)</td><td>56</td><td>5</td></tr>
<tr><td>7</td><td>Cam Talbot (DAL)</td><td>59</td><td>5</td></tr>
<tr><td>8</td><td>John Gibson (EDM)</td><td>48</td><td>4</td></tr>
<tr><td>9</td><td>Anton Khudobin (PHL)</td><td>62</td><td>4</td></tr>
<tr><td>10</td><td>Carey Price (NSH)</td><td>64</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (CGY)</td><td>61</td><td>43</td></tr>
<tr><td>2</td><td>Pavel Francouz (BOS)</td><td>63</td><td>43</td></tr>
<tr><td>3</td><td>Anton Khudobin (PHL)</td><td>62</td><td>41</td></tr>
<tr><td>4</td><td>Tuukka Rask (ARI)</td><td>64</td><td>40</td></tr>
<tr><td>5</td><td>Corey Crawford (CHI)</td><td>63</td><td>39</td></tr>
<tr><td>6</td><td>Tristan Jarry (ANH)</td><td>65</td><td>38</td></tr>
<tr><td>7</td><td>Connor Hellebuyck (TBL)</td><td>62</td><td>36</td></tr>
<tr><td>8</td><td>Carey Price (NSH)</td><td>64</td><td>36</td></tr>
<tr><td>9</td><td>Thomas Greiss (BUF)</td><td>53</td><td>35</td></tr>
<tr><td>10</td><td>Henrik Lundqvist (CLB)</td><td>60</td><td>34</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Pekka Rinne (WSH)</td><td>4</td><td>1.000</td></tr>
<tr><td>2</td><td>Joonas Korpisalo (WPG)</td><td>4</td><td>1.000</td></tr>
<tr><td>3</td><td>Kevin Boyle (TBL)</td><td>3</td><td>1.000</td></tr>
<tr><td>4</td><td>Petr Mrazek (WSH)</td><td>2</td><td>1.000</td></tr>
<tr><td>5</td><td>Antti Raanta (STL)</td><td>21</td><td>0.857</td></tr>
<tr><td>6</td><td>Juuse Saros (WPG)</td><td>14</td><td>0.857</td></tr>
<tr><td>7</td><td>Aaron Dell (CHI)</td><td>6</td><td>0.833</td></tr>
<tr><td>8</td><td>Mackenzie Blackwood (VGK)</td><td>17</td><td>0.824</td></tr>
<tr><td>9</td><td>Jaroslav Halak (FLA)</td><td>10</td><td>0.800</td></tr>
<tr><td>10</td><td>Curtis McElhinney (PHL)</td><td>5</td><td>0.800</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Pekka Rinne (WSH)</td><td>66</td><td>33</td></tr>
<tr><td>2</td><td>Semyon Varlamov (PIT)</td><td>63</td><td>31</td></tr>
<tr><td>3</td><td>Mackenzie Blackwood (VGK)</td><td>63</td><td>30</td></tr>
<tr><td>4</td><td>Marc-Andre Fleury (NYR)</td><td>58</td><td>27</td></tr>
<tr><td>5</td><td>Jonathan Bernier (MIN)</td><td>63</td><td>27</td></tr>
<tr><td>6</td><td>Jake Allen (COL)</td><td>52</td><td>26</td></tr>
<tr><td>7</td><td>Carter Hart (MTL)</td><td>57</td><td>25</td></tr>
<tr><td>8</td><td>Robin Lehner (NJD)</td><td>59</td><td>24</td></tr>
<tr><td>9</td><td>Henrik Lundqvist (CLB)</td><td>60</td><td>24</td></tr>
<tr><td>10</td><td>Jacob Markstrom (VAN)</td><td>61</td><td>24</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
