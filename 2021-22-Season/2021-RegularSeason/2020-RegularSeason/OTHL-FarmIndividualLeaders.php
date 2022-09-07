<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Individual Leaders</title>
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
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>82</td><td>129</td></tr>
<tr><td>2</td><td>Anthony Richard (GRP)</td><td>82</td><td>88</td></tr>
<tr><td>3</td><td>Justin Dowling (MIL)</td><td>82</td><td>87</td></tr>
<tr><td>4</td><td>Matt Puempel (TEX)</td><td>82</td><td>82</td></tr>
<tr><td>5</td><td>Morgan Klimchuk (SYR)</td><td>82</td><td>77</td></tr>
<tr><td>6</td><td>A.J. Greer (HER)</td><td>82</td><td>77</td></tr>
<tr><td>7</td><td>Noah Gregor (GRP)</td><td>82</td><td>75</td></tr>
<tr><td>8</td><td>Ryan Poehling (TEX)</td><td>82</td><td>73</td></tr>
<tr><td>9</td><td>Kieffer Bellows (SJB)</td><td>67</td><td>68</td></tr>
<tr><td>10</td><td>Greg Carey (MIL)</td><td>82</td><td>65</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Zac Leslie (SJB)</td><td>82</td><td>83</td></tr>
<tr><td>2</td><td>Nic Petan (SJB)</td><td>82</td><td>82</td></tr>
<tr><td>3</td><td>Alex Tuch (MIL)</td><td>59</td><td>81</td></tr>
<tr><td>4</td><td>Gage Quinney (MIL)</td><td>59</td><td>77</td></tr>
<tr><td>5</td><td>Denis Malgin (CLE)</td><td>82</td><td>77</td></tr>
<tr><td>6</td><td>Andrew Agozzino (TEX)</td><td>82</td><td>71</td></tr>
<tr><td>7</td><td>Andy Andreoff (TEX)</td><td>82</td><td>71</td></tr>
<tr><td>8</td><td>Nick Schmaltz (BKR)</td><td>76</td><td>70</td></tr>
<tr><td>9</td><td>Ross Colton (LVP)</td><td>78</td><td>70</td></tr>
<tr><td>10</td><td>Adam Johnson (LVP)</td><td>84</td><td>69</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>82</td><td>640</td></tr>
<tr><td>2</td><td>Anthony Richard (GRP)</td><td>82</td><td>528</td></tr>
<tr><td>3</td><td>Matt Puempel (TEX)</td><td>82</td><td>442</td></tr>
<tr><td>4</td><td>Noah Gregor (GRP)</td><td>82</td><td>423</td></tr>
<tr><td>5</td><td>Kieffer Bellows (SJB)</td><td>67</td><td>422</td></tr>
<tr><td>6</td><td>Morgan Klimchuk (SYR)</td><td>82</td><td>416</td></tr>
<tr><td>7</td><td>Ryan Poehling (TEX)</td><td>82</td><td>398</td></tr>
<tr><td>8</td><td>Anthony Greco (WBS)</td><td>82</td><td>394</td></tr>
<tr><td>9</td><td>Justin Dowling (MIL)</td><td>82</td><td>382</td></tr>
<tr><td>10</td><td>Ryan Kuffner (BEL)</td><td>82</td><td>381</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Jarred Tinordi (TOR)</td><td>42</td><td>24.19%</td></tr>
<tr><td>2</td><td>Alexander Nylander (SPR)</td><td>76</td><td>23.32%</td></tr>
<tr><td>3</td><td>A.J. Greer (HER)</td><td>82</td><td>23.05%</td></tr>
<tr><td>4</td><td>Justin Dowling (MIL)</td><td>82</td><td>22.77%</td></tr>
<tr><td>5</td><td>John Gilmour (CHI)</td><td>67</td><td>22.06%</td></tr>
<tr><td>6</td><td>Markus Hannikainen (MAN)</td><td>82</td><td>21.26%</td></tr>
<tr><td>7</td><td>Luke Johnson (SPR)</td><td>65</td><td>20.73%</td></tr>
<tr><td>8</td><td>Nick Merkley (STK)</td><td>82</td><td>20.49%</td></tr>
<tr><td>9</td><td>Zack MacEwen (SJB)</td><td>82</td><td>20.16%</td></tr>
<tr><td>10</td><td>Turner Elson (ROC)</td><td>49</td><td>19.80%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>82</td><td>129-25-154</td></tr>
<tr><td>2</td><td>Justin Dowling (MIL)</td><td>82</td><td>87-55-142</td></tr>
<tr><td>3</td><td>Greg Carey (MIL)</td><td>82</td><td>65-64-129</td></tr>
<tr><td>4</td><td>Anthony Richard (GRP)</td><td>82</td><td>88-39-127</td></tr>
<tr><td>5</td><td>Ryan Poehling (TEX)</td><td>82</td><td>73-53-126</td></tr>
<tr><td>6</td><td>Nic Petan (SJB)</td><td>82</td><td>36-82-118</td></tr>
<tr><td>7</td><td>Andy Andreoff (TEX)</td><td>82</td><td>46-71-117</td></tr>
<tr><td>8</td><td>Nick Schmaltz (BKR)</td><td>76</td><td>46-70-116</td></tr>
<tr><td>9</td><td>Andrew Agozzino (TEX)</td><td>82</td><td>45-71-116</td></tr>
<tr><td>10</td><td>Adam Johnson (LVP)</td><td>84</td><td>45-69-114</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Matt Puempel (TEX)</td><td>82</td><td>82-63-145</td></tr>
<tr><td>2</td><td>Justin Dowling (MIL)</td><td>82</td><td>87-55-142</td></tr>
<tr><td>3</td><td>Greg Carey (MIL)</td><td>82</td><td>65-64-129</td></tr>
<tr><td>4</td><td>Anthony Richard (GRP)</td><td>82</td><td>88-39-127</td></tr>
<tr><td>5</td><td>Ryan Poehling (TEX)</td><td>82</td><td>73-53-126</td></tr>
<tr><td>6</td><td>Anthony Greco (WBS)</td><td>82</td><td>59-64-123</td></tr>
<tr><td>7</td><td>Chris Terry (ROC)</td><td>78</td><td>57-63-120</td></tr>
<tr><td>8</td><td>Nic Petan (SJB)</td><td>82</td><td>36-82-118</td></tr>
<tr><td>9</td><td>Andy Andreoff (TEX)</td><td>82</td><td>46-71-117</td></tr>
<tr><td>10</td><td>Alex Tuch (MIL)</td><td>59</td><td>36-81-117</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>82</td><td>129-25-154</td></tr>
<tr><td>2</td><td>Matt Puempel (TEX)</td><td>82</td><td>82-63-145</td></tr>
<tr><td>3</td><td>Justin Dowling (MIL)</td><td>82</td><td>87-55-142</td></tr>
<tr><td>4</td><td>Anthony Greco (WBS)</td><td>82</td><td>59-64-123</td></tr>
<tr><td>5</td><td>Chris Terry (ROC)</td><td>78</td><td>57-63-120</td></tr>
<tr><td>6</td><td>Nic Petan (SJB)</td><td>82</td><td>36-82-118</td></tr>
<tr><td>7</td><td>Alex Tuch (MIL)</td><td>59</td><td>36-81-117</td></tr>
<tr><td>8</td><td>Nick Schmaltz (BKR)</td><td>76</td><td>46-70-116</td></tr>
<tr><td>9</td><td>Gabriel Gagne (WBS)</td><td>82</td><td>57-56-113</td></tr>
<tr><td>10</td><td>Alexandre Fortin (WBS)</td><td>82</td><td>45-68-113</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Zac Leslie (SJB)</td><td>82</td><td>16-83-99</td></tr>
<tr><td>2</td><td>Jack Dougherty (GRP)</td><td>82</td><td>12-68-80</td></tr>
<tr><td>3</td><td>Jake Bean (STK)</td><td>82</td><td>11-63-74</td></tr>
<tr><td>4</td><td>Josh Teves (SYR)</td><td>82</td><td>17-55-72</td></tr>
<tr><td>5</td><td>Brady Keeper (TUC)</td><td>82</td><td>20-50-70</td></tr>
<tr><td>6</td><td>Madison Bowey (SDG)</td><td>64</td><td>9-60-69</td></tr>
<tr><td>7</td><td>Leon Gawanke (BNG)</td><td>82</td><td>8-58-66</td></tr>
<tr><td>8</td><td>Ben Harpur (PRO)</td><td>82</td><td>14-50-64</td></tr>
<tr><td>9</td><td>Niko Mikkola (BNG)</td><td>82</td><td>12-52-64</td></tr>
<tr><td>10</td><td>Brent Seabrook (STK)</td><td>56</td><td>15-48-63</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Alex Tuch (MIL)</td><td>59</td><td>2.25</td></tr>
<tr><td>2</td><td>Kieffer Bellows (SJB)</td><td>67</td><td>2.14</td></tr>
<tr><td>3</td><td>Gabriel Gagne (WBS)</td><td>82</td><td>2.08</td></tr>
<tr><td>4</td><td>Anthony Greco (WBS)</td><td>82</td><td>1.97</td></tr>
<tr><td>5</td><td>Zack MacEwen (SJB)</td><td>82</td><td>1.96</td></tr>
<tr><td>6</td><td>Gaetan Haas (MIL)</td><td>82</td><td>1.92</td></tr>
<tr><td>7</td><td>Greg Carey (MIL)</td><td>82</td><td>1.85</td></tr>
<tr><td>8</td><td>Gage Quinney (MIL)</td><td>59</td><td>1.83</td></tr>
<tr><td>9</td><td>Matt Lorito (SJB)</td><td>82</td><td>1.82</td></tr>
<tr><td>10</td><td>Nic Petan (SJB)</td><td>82</td><td>1.82</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Mitchell Stephens (CHR)</td><td>82</td><td>74.82%</td></tr>
<tr><td>2</td><td>Gage Quinney (MIL)</td><td>59</td><td>73.76%</td></tr>
<tr><td>3</td><td>Aleksi Saarela (CHR)</td><td>61</td><td>73.33%</td></tr>
<tr><td>4</td><td>Ross Colton (LVP)</td><td>78</td><td>72.85%</td></tr>
<tr><td>5</td><td>Cooper Marody (SPR)</td><td>82</td><td>72.82%</td></tr>
<tr><td>6</td><td>Michael McCarron (SPR)</td><td>82</td><td>72.09%</td></tr>
<tr><td>7</td><td>Michael Rasmussen (WBS)</td><td>82</td><td>71.51%</td></tr>
<tr><td>8</td><td>Brad Malone (STK)</td><td>42</td><td>71.34%</td></tr>
<tr><td>9</td><td>Sean Malone (ROC)</td><td>82</td><td>70.88%</td></tr>
<tr><td>10</td><td>Morgan Geekie (CHI)</td><td>64</td><td>70.79%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Zach Whitecloud (BKR)</td><td>82</td><td>94</td></tr>
<tr><td>2</td><td>Justin Dowling (MIL)</td><td>82</td><td>93</td></tr>
<tr><td>3</td><td>Jordan Schmaltz (BKR)</td><td>82</td><td>92</td></tr>
<tr><td>4</td><td>Garrett Pilon (UTI)</td><td>82</td><td>92</td></tr>
<tr><td>5</td><td>Brian Pinho (UTI)</td><td>82</td><td>86</td></tr>
<tr><td>6</td><td>Zack MacEwen (SJB)</td><td>82</td><td>84</td></tr>
<tr><td>7</td><td>Jesper Boqvist (RCK)</td><td>82</td><td>82</td></tr>
<tr><td>8</td><td>Alexander Nylander (SPR)</td><td>76</td><td>80</td></tr>
<tr><td>9</td><td>Chris Terry (ROC)</td><td>78</td><td>80</td></tr>
<tr><td>10</td><td>Alexander True (UTI)</td><td>82</td><td>79</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Dennis Gilbert (BKR)</td><td>82</td><td>222</td></tr>
<tr><td>2</td><td>Ross Johnston (ROC)</td><td>72</td><td>207</td></tr>
<tr><td>3</td><td>Buddy Robinson (BKR)</td><td>82</td><td>175</td></tr>
<tr><td>4</td><td>Brady Keeper (TUC)</td><td>82</td><td>153</td></tr>
<tr><td>5</td><td>Oleg Sosunov (TOR)</td><td>82</td><td>147</td></tr>
<tr><td>6</td><td>Jack Dougherty (GRP)</td><td>82</td><td>145</td></tr>
<tr><td>7</td><td>T.J. Brennan (LAV)</td><td>82</td><td>140</td></tr>
<tr><td>8</td><td>Keaton Middleton (TOR)</td><td>82</td><td>139</td></tr>
<tr><td>9</td><td>Jaycob Megna (PRO)</td><td>82</td><td>136</td></tr>
<tr><td>10</td><td>Kyle Clifford (ONT)</td><td>82</td><td>135</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>A.J. Greer (HER)</td><td>82</td><td>124</td></tr>
<tr><td>2</td><td>Brady Keeper (TUC)</td><td>82</td><td>116</td></tr>
<tr><td>3</td><td>Mitch Reinke (BEL)</td><td>82</td><td>116</td></tr>
<tr><td>4</td><td>Morgan Klimchuk (SYR)</td><td>82</td><td>100</td></tr>
<tr><td>5</td><td>Christian Jaros (CHR)</td><td>82</td><td>96</td></tr>
<tr><td>6</td><td>Leon Gawanke (BNG)</td><td>82</td><td>92</td></tr>
<tr><td>7</td><td>Zac Leslie (SJB)</td><td>82</td><td>91</td></tr>
<tr><td>8</td><td>Ryan Kuffner (BEL)</td><td>82</td><td>89</td></tr>
<tr><td>9</td><td>Jeremy Lauzon (BKR)</td><td>82</td><td>85</td></tr>
<tr><td>10</td><td>Dmytro Timashov (BEL)</td><td>55</td><td>81</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ryan Poehling (TEX)</td><td>82</td><td>73-53-126</td></tr>
<tr><td>2</td><td>Gaetan Haas (MIL)</td><td>82</td><td>42-68-110</td></tr>
<tr><td>3</td><td>Alexander Nylander (SPR)</td><td>76</td><td>59-47-106</td></tr>
<tr><td>4</td><td>Joakim Nygard (BNG)</td><td>82</td><td>46-53-99</td></tr>
<tr><td>5</td><td>Noah Gregor (GRP)</td><td>82</td><td>75-22-97</td></tr>
<tr><td>6</td><td>Nick Merkley (STK)</td><td>82</td><td>50-47-97</td></tr>
<tr><td>7</td><td>Joel Kiviranta (BNG)</td><td>82</td><td>43-48-91</td></tr>
<tr><td>8</td><td>Joel Farabee (UTI)</td><td>82</td><td>42-49-91</td></tr>
<tr><td>9</td><td>Matthew Phillips (LAV)</td><td>81</td><td>38-53-91</td></tr>
<tr><td>10</td><td>Trey Fix-Wolansky (LVP)</td><td>82</td><td>51-39-90</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>82</td><td>366</td></tr>
<tr><td>2</td><td>Dennis Gilbert (BKR)</td><td>82</td><td>300</td></tr>
<tr><td>3</td><td>A.J. Greer (HER)</td><td>82</td><td>268</td></tr>
<tr><td>4</td><td>Scott Sabourin (BNG)</td><td>82</td><td>267</td></tr>
<tr><td>5</td><td>Morgan Klimchuk (SYR)</td><td>82</td><td>256</td></tr>
<tr><td>6</td><td>Brady Keeper (TUC)</td><td>82</td><td>252</td></tr>
<tr><td>7</td><td>Ryan Kuffner (BEL)</td><td>82</td><td>251</td></tr>
<tr><td>8</td><td>Jack Dougherty (GRP)</td><td>82</td><td>241</td></tr>
<tr><td>9</td><td>Ross Johnston (ROC)</td><td>72</td><td>236</td></tr>
<tr><td>10</td><td>Miikka Salomaki (SYR)</td><td>70</td><td>233</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Matt Puempel (TEX)</td><td>82</td><td>19</td></tr>
<tr><td>2</td><td>Zack MacEwen (SJB)</td><td>82</td><td>16</td></tr>
<tr><td>3</td><td>Greg Carey (MIL)</td><td>82</td><td>16</td></tr>
<tr><td>4</td><td>Anthony Richard (GRP)</td><td>82</td><td>15</td></tr>
<tr><td>5</td><td>Ryan Kujawinski (ONT)</td><td>82</td><td>14</td></tr>
<tr><td>6</td><td>Noah Gregor (GRP)</td><td>82</td><td>14</td></tr>
<tr><td>7</td><td>Nathan Walker (PRO)</td><td>82</td><td>14</td></tr>
<tr><td>8</td><td>Anthony Greco (WBS)</td><td>82</td><td>13</td></tr>
<tr><td>9</td><td>Gustav Lindstrom (CHI)</td><td>66</td><td>12</td></tr>
<tr><td>10</td><td>Joel Farabee (UTI)</td><td>82</td><td>11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Alex Steen (SDG)</td><td>72</td><td>4</td></tr>
<tr><td>2</td><td>Markus Hannikainen (MAN)</td><td>82</td><td>4</td></tr>
<tr><td>3</td><td>Givani Smith (BKR)</td><td>82</td><td>4</td></tr>
<tr><td>4</td><td>Alexander Nylander (SPR)</td><td>76</td><td>3</td></tr>
<tr><td>5</td><td>Justin Dowling (MIL)</td><td>82</td><td>3</td></tr>
<tr><td>6</td><td>Scott Wilson (MAN)</td><td>82</td><td>3</td></tr>
<tr><td>7</td><td>Lawson Crouse (PRO)</td><td>1</td><td>2</td></tr>
<tr><td>8</td><td>Tage Thompson (ROC)</td><td>27</td><td>2</td></tr>
<tr><td>9</td><td>Anthony Angello (PRO)</td><td>35</td><td>2</td></tr>
<tr><td>10</td><td>Austin Poganski (MIL)</td><td>46</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>82</td><td>17</td></tr>
<tr><td>2</td><td>Greg Carey (MIL)</td><td>82</td><td>14</td></tr>
<tr><td>3</td><td>Noah Gregor (GRP)</td><td>82</td><td>12</td></tr>
<tr><td>4</td><td>Anthony Greco (WBS)</td><td>82</td><td>12</td></tr>
<tr><td>5</td><td>Anthony Richard (GRP)</td><td>82</td><td>12</td></tr>
<tr><td>6</td><td>Vitaly Abramov (STK)</td><td>82</td><td>11</td></tr>
<tr><td>7</td><td>Nick Schmaltz (BKR)</td><td>76</td><td>10</td></tr>
<tr><td>8</td><td>Chris Terry (ROC)</td><td>78</td><td>10</td></tr>
<tr><td>9</td><td>Max Jones (SPR)</td><td>80</td><td>10</td></tr>
<tr><td>10</td><td>Zach Senyshyn (SDG)</td><td>65</td><td>9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Kieffer Bellows (SJB)</td><td>67</td><td>5</td></tr>
<tr><td>2</td><td>Zach Senyshyn (SDG)</td><td>65</td><td>4</td></tr>
<tr><td>3</td><td>Ryan MacInnis (SDG)</td><td>75</td><td>4</td></tr>
<tr><td>4</td><td>Matthew Phillips (LAV)</td><td>81</td><td>4</td></tr>
<tr><td>5</td><td>Noah Gregor (GRP)</td><td>82</td><td>4</td></tr>
<tr><td>6</td><td>Nick Merkley (STK)</td><td>82</td><td>4</td></tr>
<tr><td>7</td><td>Jake Evans (CHI)</td><td>64</td><td>3</td></tr>
<tr><td>8</td><td>Miikka Salomaki (SYR)</td><td>70</td><td>3</td></tr>
<tr><td>9</td><td>Travis Dermott (STK)</td><td>71</td><td>3</td></tr>
<tr><td>10</td><td>Alex Steen (SDG)</td><td>72</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Adam Erne (MAN)</td><td>44</td><td>1</td></tr>
<tr><td>2</td><td>Nic Hague (TOR)</td><td>59</td><td>1</td></tr>
<tr><td>3</td><td>Mason Appleton (ONT)</td><td>61</td><td>1</td></tr>
<tr><td>4</td><td>Nick Schmaltz (BKR)</td><td>76</td><td>1</td></tr>
<tr><td>5</td><td>Phillip Di Giuseppe (CLE)</td><td>82</td><td>1</td></tr>
<tr><td>6</td><td>Nic Petan (SJB)</td><td>82</td><td>1</td></tr>
<tr><td>7</td><td>Filip Chlapik (CLE)</td><td>82</td><td>1</td></tr>
<tr><td>8</td><td>Kyle Criscuolo (BNG)</td><td>82</td><td>1</td></tr>
<tr><td>9</td><td>Gabriel Gagne (WBS)</td><td>82</td><td>1</td></tr>
<tr><td>10</td><td>Andrew Agozzino (TEX)</td><td>82</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Vitaly Abramov (STK)</td><td>82</td><td>1,835</td></tr>
<tr><td>2</td><td>Dillon Simpson (LVP)</td><td>82</td><td>1,835</td></tr>
<tr><td>3</td><td>Dennis Gilbert (BKR)</td><td>82</td><td>1,826</td></tr>
<tr><td>4</td><td>Jaycob Megna (PRO)</td><td>82</td><td>1,822</td></tr>
<tr><td>5</td><td>Nathan Walker (PRO)</td><td>82</td><td>1,818</td></tr>
<tr><td>6</td><td>Chris Terry (ROC)</td><td>78</td><td>1,811</td></tr>
<tr><td>7</td><td>Denis Malgin (CLE)</td><td>82</td><td>1,807</td></tr>
<tr><td>8</td><td>Tommy Cross (CLE)</td><td>82</td><td>1,800</td></tr>
<tr><td>9</td><td>Nick Schmaltz (BKR)</td><td>76</td><td>1,795</td></tr>
<tr><td>10</td><td>Phillip Di Giuseppe (CLE)</td><td>82</td><td>1,789</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>82</td><td>18</td></tr>
<tr><td>2</td><td>Matt Puempel (TEX)</td><td>82</td><td>12</td></tr>
<tr><td>3</td><td>Morgan Klimchuk (SYR)</td><td>82</td><td>11</td></tr>
<tr><td>4</td><td>A.J. Greer (HER)</td><td>82</td><td>11</td></tr>
<tr><td>5</td><td>Anthony Richard (GRP)</td><td>82</td><td>11</td></tr>
<tr><td>6</td><td>Justin Dowling (MIL)</td><td>82</td><td>9</td></tr>
<tr><td>7</td><td>Ryan Poehling (TEX)</td><td>82</td><td>8</td></tr>
<tr><td>8</td><td>Kieffer Bellows (SJB)</td><td>67</td><td>7</td></tr>
<tr><td>9</td><td>Alexander Nylander (SPR)</td><td>76</td><td>7</td></tr>
<tr><td>10</td><td>Noah Gregor (GRP)</td><td>82</td><td>7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Kyle Clifford (ONT)</td><td>82</td><td>5</td></tr>
<tr><td>2</td><td>Anthony Richard (GRP)</td><td>82</td><td>5</td></tr>
<tr><td>3</td><td>Taylor Raddysh (MAN)</td><td>57</td><td>3</td></tr>
<tr><td>4</td><td>Alex Steen (SDG)</td><td>72</td><td>3</td></tr>
<tr><td>5</td><td>Emil Bemstrom (SPR)</td><td>73</td><td>3</td></tr>
<tr><td>6</td><td>Nic Petan (SJB)</td><td>82</td><td>3</td></tr>
<tr><td>7</td><td>Anthony Greco (WBS)</td><td>82</td><td>3</td></tr>
<tr><td>8</td><td>Joel Kiviranta (BNG)</td><td>82</td><td>3</td></tr>
<tr><td>9</td><td>Brent Gates (BNG)</td><td>82</td><td>3</td></tr>
<tr><td>10</td><td>Max Comtois (RCK)</td><td>20</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Taro Hirose (STK)</td><td>82</td><td>15</td></tr>
<tr><td>2</td><td>Michael Rasmussen (WBS)</td><td>82</td><td>11</td></tr>
<tr><td>3</td><td>Anthony Greco (WBS)</td><td>82</td><td>11</td></tr>
<tr><td>4</td><td>Gabriel Gagne (WBS)</td><td>82</td><td>11</td></tr>
<tr><td>5</td><td>Michael Amadio (ROC)</td><td>65</td><td>7</td></tr>
<tr><td>6</td><td>Lukas Vejdemo (MAN)</td><td>82</td><td>7</td></tr>
<tr><td>7</td><td>Kevin Stenlund (SDG)</td><td>35</td><td>6</td></tr>
<tr><td>8</td><td>Alex Steen (SDG)</td><td>72</td><td>6</td></tr>
<tr><td>9</td><td>Eeli Tolvanen (MAN)</td><td>82</td><td>6</td></tr>
<tr><td>10</td><td>Trevor Moore (ROC)</td><td>72</td><td>5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Anthony Richard (GRP)</td><td>82</td><td>308</td></tr>
<tr><td>2</td><td>Noah Gregor (GRP)</td><td>82</td><td>222</td></tr>
<tr><td>3</td><td>Andy Andreoff (TEX)</td><td>82</td><td>222</td></tr>
<tr><td>4</td><td>Andrew Agozzino (TEX)</td><td>82</td><td>211</td></tr>
<tr><td>5</td><td>Nick Schmaltz (BKR)</td><td>76</td><td>209</td></tr>
<tr><td>6</td><td>Trent Frederic (SDG)</td><td>75</td><td>207</td></tr>
<tr><td>7</td><td>Michael Rasmussen (WBS)</td><td>82</td><td>206</td></tr>
<tr><td>8</td><td>Alex Steen (SDG)</td><td>72</td><td>202</td></tr>
<tr><td>9</td><td>Tanner Fritz (TUC)</td><td>82</td><td>202</td></tr>
<tr><td>10</td><td>Ryan Poehling (TEX)</td><td>82</td><td>199</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Matt Luff (LAV)</td><td>82</td><td>4</td></tr>
<tr><td>2</td><td>Morgan Geekie (CHI)</td><td>64</td><td>3</td></tr>
<tr><td>3</td><td>Michael Amadio (ROC)</td><td>65</td><td>3</td></tr>
<tr><td>4</td><td>Alexander Nylander (SPR)</td><td>76</td><td>3</td></tr>
<tr><td>5</td><td>Max Jones (SPR)</td><td>80</td><td>3</td></tr>
<tr><td>6</td><td>Yakov Trenin (LAV)</td><td>81</td><td>3</td></tr>
<tr><td>7</td><td>Matthew Phillips (LAV)</td><td>81</td><td>3</td></tr>
<tr><td>8</td><td>Joel Farabee (UTI)</td><td>82</td><td>3</td></tr>
<tr><td>9</td><td>Denis Malgin (CLE)</td><td>82</td><td>3</td></tr>
<tr><td>10</td><td>Zack MacEwen (SJB)</td><td>82</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Brian Strait (MAN)</td><td>82</td><td>8</td></tr>
<tr><td>2</td><td>Dennis Gilbert (BKR)</td><td>82</td><td>8</td></tr>
<tr><td>3</td><td>Alex Petrovic (LAV)</td><td>73</td><td>7</td></tr>
<tr><td>4</td><td>Adam Helewka (SJB)</td><td>78</td><td>6</td></tr>
<tr><td>5</td><td>Kyle Clifford (ONT)</td><td>82</td><td>6</td></tr>
<tr><td>6</td><td>Jacob Middleton (UTI)</td><td>82</td><td>6</td></tr>
<tr><td>7</td><td>Brandon Manning (LVP)</td><td>82</td><td>6</td></tr>
<tr><td>8</td><td>T.J. Brennan (LAV)</td><td>82</td><td>6</td></tr>
<tr><td>9</td><td>Jarred Tinordi (TOR)</td><td>42</td><td>5</td></tr>
<tr><td>10</td><td>Ross Johnston (ROC)</td><td>72</td><td>5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Ross Johnston (ROC)</td><td>72</td><td>4</td></tr>
<tr><td>2</td><td>Michael McCarron (SPR)</td><td>82</td><td>4</td></tr>
<tr><td>3</td><td>Kyle Clifford (ONT)</td><td>82</td><td>4</td></tr>
<tr><td>4</td><td>Alex Petrovic (LAV)</td><td>73</td><td>3</td></tr>
<tr><td>5</td><td>Jarred Tinordi (TOR)</td><td>42</td><td>2</td></tr>
<tr><td>6</td><td>Egor Sharangovich (CHR)</td><td>50</td><td>2</td></tr>
<tr><td>7</td><td>Nic Hague (TOR)</td><td>59</td><td>2</td></tr>
<tr><td>8</td><td>Adam Helewka (SJB)</td><td>78</td><td>2</td></tr>
<tr><td>9</td><td>Zac Dalpe (RCK)</td><td>79</td><td>2</td></tr>
<tr><td>10</td><td>Nelson Nogier (CHR)</td><td>79</td><td>2</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Igor Shesterkin (RCK)</td><td>76</td><td>0.918</td></tr>
<tr><td>2</td><td>Ilya Samsonov (ROC)</td><td>53</td><td>0.912</td></tr>
<tr><td>3</td><td>Alexandar Georgiev (UTI)</td><td>73</td><td>0.908</td></tr>
<tr><td>4</td><td>Adam Werner (CHI)</td><td>82</td><td>0.905</td></tr>
<tr><td>5</td><td>Connor Ingram (PRO)</td><td>54</td><td>0.904</td></tr>
<tr><td>6</td><td>Sergei Bobrovsky (GRP)</td><td>82</td><td>0.900</td></tr>
<tr><td>7</td><td>Laurent Brossoit (SJB)</td><td>81</td><td>0.900</td></tr>
<tr><td>8</td><td>Tom McCollum (WBS)</td><td>82</td><td>0.893</td></tr>
<tr><td>9</td><td>Jared Coreau (TOR)</td><td>82</td><td>0.893</td></tr>
<tr><td>10</td><td>Pheonix Copley (MIL)</td><td>82</td><td>0.889</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Igor Shesterkin (RCK)</td><td>76</td><td>1.39</td></tr>
<tr><td>2</td><td>Alexandar Georgiev (UTI)</td><td>73</td><td>1.41</td></tr>
<tr><td>3</td><td>Ilya Samsonov (ROC)</td><td>53</td><td>1.49</td></tr>
<tr><td>4</td><td>Connor Ingram (PRO)</td><td>54</td><td>1.58</td></tr>
<tr><td>5</td><td>Adam Werner (CHI)</td><td>82</td><td>1.82</td></tr>
<tr><td>6</td><td>Veini Vehvilainen (MAN)</td><td>49</td><td>1.89</td></tr>
<tr><td>7</td><td>Jared Coreau (TOR)</td><td>82</td><td>1.94</td></tr>
<tr><td>8</td><td>Jake Oettinger (SPR)</td><td>54</td><td>2.00</td></tr>
<tr><td>9</td><td>Alex Lyon (CLE)</td><td>82</td><td>2.01</td></tr>
<tr><td>10</td><td>Zane McIntyre (BKR)</td><td>82</td><td>2.02</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Alex Lyon (CLE)</td><td>82</td><td>4,896</td></tr>
<tr><td>2</td><td>Zane McIntyre (BKR)</td><td>82</td><td>4,865</td></tr>
<tr><td>3</td><td>Pheonix Copley (MIL)</td><td>82</td><td>4,858</td></tr>
<tr><td>4</td><td>Jared Coreau (TOR)</td><td>82</td><td>4,837</td></tr>
<tr><td>5</td><td>Adam Werner (CHI)</td><td>82</td><td>4,824</td></tr>
<tr><td>6</td><td>Laurent Brossoit (SJB)</td><td>81</td><td>4,777</td></tr>
<tr><td>7</td><td>Tom McCollum (WBS)</td><td>82</td><td>4,762</td></tr>
<tr><td>8</td><td>Sergei Bobrovsky (GRP)</td><td>82</td><td>4,603</td></tr>
<tr><td>9</td><td>Igor Shesterkin (RCK)</td><td>76</td><td>4,490</td></tr>
<tr><td>10</td><td>Alexandar Georgiev (UTI)</td><td>73</td><td>4,391</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Sergei Bobrovsky (GRP)</td><td>82</td><td>2335</td></tr>
<tr><td>2</td><td>Antoine Bibeau (ONT)</td><td>82</td><td>2174</td></tr>
<tr><td>3</td><td>Tom McCollum (WBS)</td><td>82</td><td>1989</td></tr>
<tr><td>4</td><td>Laurent Brossoit (SJB)</td><td>81</td><td>1873</td></tr>
<tr><td>5</td><td>Matt Tomkins (SYR)</td><td>78</td><td>1797</td></tr>
<tr><td>6</td><td>Ian Scott (SDG)</td><td>72</td><td>1651</td></tr>
<tr><td>7</td><td>Adam Werner (CHI)</td><td>82</td><td>1530</td></tr>
<tr><td>8</td><td>Pheonix Copley (MIL)</td><td>82</td><td>1486</td></tr>
<tr><td>9</td><td>Alex Lyon (CLE)</td><td>82</td><td>1463</td></tr>
<tr><td>10</td><td>Jared Coreau (TOR)</td><td>82</td><td>1454</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Igor Shesterkin (RCK)</td><td>76</td><td>24</td></tr>
<tr><td>2</td><td>Alexandar Georgiev (UTI)</td><td>73</td><td>19</td></tr>
<tr><td>3</td><td>Adam Werner (CHI)</td><td>82</td><td>17</td></tr>
<tr><td>4</td><td>Ilya Samsonov (ROC)</td><td>53</td><td>13</td></tr>
<tr><td>5</td><td>Jared Coreau (TOR)</td><td>82</td><td>13</td></tr>
<tr><td>6</td><td>Mikhail Berdin (LAV)</td><td>76</td><td>12</td></tr>
<tr><td>7</td><td>Zane McIntyre (BKR)</td><td>82</td><td>12</td></tr>
<tr><td>8</td><td>Pheonix Copley (MIL)</td><td>82</td><td>12</td></tr>
<tr><td>9</td><td>Veini Vehvilainen (MAN)</td><td>49</td><td>11</td></tr>
<tr><td>10</td><td>Casey DeSmith (STK)</td><td>69</td><td>11</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Pheonix Copley (MIL)</td><td>82</td><td>64</td></tr>
<tr><td>2</td><td>Zane McIntyre (BKR)</td><td>82</td><td>60</td></tr>
<tr><td>3</td><td>Laurent Brossoit (SJB)</td><td>81</td><td>59</td></tr>
<tr><td>4</td><td>Igor Shesterkin (RCK)</td><td>76</td><td>58</td></tr>
<tr><td>5</td><td>Jared Coreau (TOR)</td><td>82</td><td>56</td></tr>
<tr><td>6</td><td>Alex Lyon (CLE)</td><td>82</td><td>55</td></tr>
<tr><td>7</td><td>Adam Werner (CHI)</td><td>82</td><td>55</td></tr>
<tr><td>8</td><td>Alexandar Georgiev (UTI)</td><td>73</td><td>54</td></tr>
<tr><td>9</td><td>Casey DeSmith (STK)</td><td>69</td><td>49</td></tr>
<tr><td>10</td><td>Tom McCollum (WBS)</td><td>82</td><td>49</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Kaden Fulcher (BKR)</td><td>3</td><td>1.000</td></tr>
<tr><td>2</td><td>Martin Jones (CHR)</td><td>3</td><td>1.000</td></tr>
<tr><td>3</td><td>Casey DeSmith (STK)</td><td>9</td><td>0.889</td></tr>
<tr><td>4</td><td>Ilya Samsonov (ROC)</td><td>17</td><td>0.882</td></tr>
<tr><td>5</td><td>Matt Tomkins (SYR)</td><td>13</td><td>0.846</td></tr>
<tr><td>6</td><td>Veini Vehvilainen (MAN)</td><td>13</td><td>0.846</td></tr>
<tr><td>7</td><td>Laurent Brossoit (SJB)</td><td>24</td><td>0.833</td></tr>
<tr><td>8</td><td>Connor Ingram (PRO)</td><td>18</td><td>0.833</td></tr>
<tr><td>9</td><td>David Ayres (LAV)</td><td>6</td><td>0.833</td></tr>
<tr><td>10</td><td>Sergei Bobrovsky (GRP)</td><td>26</td><td>0.808</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Antoine Bibeau (ONT)</td><td>82</td><td>51</td></tr>
<tr><td>2</td><td>Sergei Bobrovsky (GRP)</td><td>82</td><td>40</td></tr>
<tr><td>3</td><td>Mikhail Berdin (LAV)</td><td>76</td><td>32</td></tr>
<tr><td>4</td><td>Matt Tomkins (SYR)</td><td>78</td><td>29</td></tr>
<tr><td>5</td><td>Tom McCollum (WBS)</td><td>82</td><td>27</td></tr>
<tr><td>6</td><td>Jimmy Howard (BEL)</td><td>46</td><td>26</td></tr>
<tr><td>7</td><td>Alex Nedeljkovic (LAV)</td><td>61</td><td>26</td></tr>
<tr><td>8</td><td>Ian Scott (SDG)</td><td>72</td><td>23</td></tr>
<tr><td>9</td><td>Jared Coreau (TOR)</td><td>82</td><td>22</td></tr>
<tr><td>10</td><td>Adam Werner (CHI)</td><td>82</td><td>21</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
