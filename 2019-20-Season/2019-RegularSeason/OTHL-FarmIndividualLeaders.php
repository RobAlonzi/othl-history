<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Individual Leaders</title>
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
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Warren Foegele (SDG)</td><td>80</td><td>102</td></tr>
<tr><td>2</td><td>Luke Gazdic (SAR)</td><td>82</td><td>91</td></tr>
<tr><td>3</td><td>Alex Broadhurst (LVP)</td><td>82</td><td>85</td></tr>
<tr><td>4</td><td>Patrick Russell (CLE)</td><td>82</td><td>84</td></tr>
<tr><td>5</td><td>Casey Mittelstadt (CHR)</td><td>81</td><td>82</td></tr>
<tr><td>6</td><td>Phil Varone (TEX)</td><td>63</td><td>81</td></tr>
<tr><td>7</td><td>Max Veronneau (RCK)</td><td>82</td><td>78</td></tr>
<tr><td>8</td><td>Jack Rodewald (CLE)</td><td>82</td><td>76</td></tr>
<tr><td>9</td><td>Kiefer Sherwood (RCK)</td><td>76</td><td>75</td></tr>
<tr><td>10</td><td>Lukas Radil (TOR)</td><td>59</td><td>74</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Brian Gibbons (LVP)</td><td>71</td><td>111</td></tr>
<tr><td>2</td><td>Justin Kloos (LVP)</td><td>69</td><td>109</td></tr>
<tr><td>3</td><td>Jack Roslovic (STK)</td><td>80</td><td>106</td></tr>
<tr><td>4</td><td>Christoffer Ehn (STK)</td><td>81</td><td>102</td></tr>
<tr><td>5</td><td>Logan Brown (RCK)</td><td>75</td><td>101</td></tr>
<tr><td>6</td><td>Taro Hirose (STK)</td><td>81</td><td>101</td></tr>
<tr><td>7</td><td>Kyle Rau (STK)</td><td>77</td><td>94</td></tr>
<tr><td>8</td><td>Griffen Molino (RCK)</td><td>82</td><td>90</td></tr>
<tr><td>9</td><td>Vinni Lettieri (STK)</td><td>82</td><td>87</td></tr>
<tr><td>10</td><td>Anthony Duclair (CLE)</td><td>57</td><td>86</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Warren Foegele (SDG)</td><td>80</td><td>501</td></tr>
<tr><td>2</td><td>Luke Gazdic (SAR)</td><td>82</td><td>495</td></tr>
<tr><td>3</td><td>Alex Broadhurst (LVP)</td><td>82</td><td>473</td></tr>
<tr><td>4</td><td>Kyle Rau (STK)</td><td>77</td><td>457</td></tr>
<tr><td>5</td><td>Max Veronneau (RCK)</td><td>82</td><td>456</td></tr>
<tr><td>6</td><td>Brad Malone (STK)</td><td>82</td><td>446</td></tr>
<tr><td>7</td><td>Alexandre Grenier (SYR)</td><td>82</td><td>439</td></tr>
<tr><td>8</td><td>Peter Cehlarik (RCK)</td><td>82</td><td>428</td></tr>
<tr><td>9</td><td>Patrick Russell (CLE)</td><td>82</td><td>424</td></tr>
<tr><td>10</td><td>Jack Rodewald (CLE)</td><td>82</td><td>420</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Radim Simek (SYR)</td><td>54</td><td>25.76%</td></tr>
<tr><td>2</td><td>Dryden Hunt (CHI)</td><td>65</td><td>23.17%</td></tr>
<tr><td>3</td><td>Alexandre Fortin (WBS)</td><td>55</td><td>22.27%</td></tr>
<tr><td>4</td><td>Dominik Kahun (CHR)</td><td>43</td><td>22.10%</td></tr>
<tr><td>5</td><td>Lawrence Pilut (SYR)</td><td>80</td><td>21.21%</td></tr>
<tr><td>6</td><td>Andrei Svechnikov (CHI)</td><td>51</td><td>21.19%</td></tr>
<tr><td>7</td><td>Michael Amadio (ROC)</td><td>73</td><td>21.19%</td></tr>
<tr><td>8</td><td>Nathan Walker (PRO)</td><td>82</td><td>21.17%</td></tr>
<tr><td>9</td><td>Drake Batherson (CHI)</td><td>45</td><td>21.12%</td></tr>
<tr><td>10</td><td>Phil Varone (TEX)</td><td>63</td><td>20.72%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Brian Gibbons (LVP)</td><td>71</td><td>65-111-176</td></tr>
<tr><td>2</td><td>Justin Kloos (LVP)</td><td>69</td><td>64-109-173</td></tr>
<tr><td>3</td><td>Christoffer Ehn (STK)</td><td>81</td><td>64-102-166</td></tr>
<tr><td>4</td><td>Kyle Rau (STK)</td><td>77</td><td>67-94-161</td></tr>
<tr><td>5</td><td>Logan Brown (RCK)</td><td>75</td><td>57-101-158</td></tr>
<tr><td>6</td><td>Jack Roslovic (STK)</td><td>80</td><td>41-106-147</td></tr>
<tr><td>7</td><td>Casey Mittelstadt (CHR)</td><td>81</td><td>82-61-143</td></tr>
<tr><td>8</td><td>Brad Malone (STK)</td><td>82</td><td>64-75-139</td></tr>
<tr><td>9</td><td>Vinni Lettieri (STK)</td><td>82</td><td>48-87-135</td></tr>
<tr><td>10</td><td>Dominic Toninato (BKR)</td><td>82</td><td>54-77-131</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Brian Gibbons (LVP)</td><td>71</td><td>65-111-176</td></tr>
<tr><td>2</td><td>Christoffer Ehn (STK)</td><td>81</td><td>64-102-166</td></tr>
<tr><td>3</td><td>Warren Foegele (SDG)</td><td>80</td><td>102-60-162</td></tr>
<tr><td>4</td><td>Kyle Rau (STK)</td><td>77</td><td>67-94-161</td></tr>
<tr><td>5</td><td>Patrick Russell (CLE)</td><td>82</td><td>84-75-159</td></tr>
<tr><td>6</td><td>Kiefer Sherwood (RCK)</td><td>76</td><td>75-80-155</td></tr>
<tr><td>7</td><td>Anthony Duclair (CLE)</td><td>57</td><td>68-86-154</td></tr>
<tr><td>8</td><td>Valentin Zykov (RCK)</td><td>82</td><td>60-85-145</td></tr>
<tr><td>9</td><td>Peter Cehlarik (RCK)</td><td>82</td><td>58-86-144</td></tr>
<tr><td>10</td><td>Casey Mittelstadt (CHR)</td><td>81</td><td>82-61-143</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Justin Kloos (LVP)</td><td>69</td><td>64-109-173</td></tr>
<tr><td>2</td><td>Christoffer Ehn (STK)</td><td>81</td><td>64-102-166</td></tr>
<tr><td>3</td><td>Warren Foegele (SDG)</td><td>80</td><td>102-60-162</td></tr>
<tr><td>4</td><td>Max Veronneau (RCK)</td><td>82</td><td>78-84-162</td></tr>
<tr><td>5</td><td>Patrick Russell (CLE)</td><td>82</td><td>84-75-159</td></tr>
<tr><td>6</td><td>Jack Rodewald (CLE)</td><td>82</td><td>76-82-158</td></tr>
<tr><td>7</td><td>Kiefer Sherwood (RCK)</td><td>76</td><td>75-80-155</td></tr>
<tr><td>8</td><td>Anthony Duclair (CLE)</td><td>57</td><td>68-86-154</td></tr>
<tr><td>9</td><td>Jack Roslovic (STK)</td><td>80</td><td>41-106-147</td></tr>
<tr><td>10</td><td>Valentin Zykov (RCK)</td><td>82</td><td>60-85-145</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Lawrence Pilut (SYR)</td><td>80</td><td>28-84-112</td></tr>
<tr><td>2</td><td>Robbie Russo (SJB)</td><td>77</td><td>22-58-80</td></tr>
<tr><td>3</td><td>T.J. Brennan (LAV)</td><td>82</td><td>12-65-77</td></tr>
<tr><td>4</td><td>Gustav Olofsson (PRO)</td><td>82</td><td>12-64-76</td></tr>
<tr><td>5</td><td>Chris Bigras (PRO)</td><td>82</td><td>18-55-73</td></tr>
<tr><td>6</td><td>David Warsofsky (CHI)</td><td>75</td><td>15-58-73</td></tr>
<tr><td>7</td><td>Anton Lindholm (GRP)</td><td>80</td><td>10-63-73</td></tr>
<tr><td>8</td><td>Derrick Pouliot (SPR)</td><td>80</td><td>16-56-72</td></tr>
<tr><td>9</td><td>Steven Kampfer (HER)</td><td>61</td><td>17-54-71</td></tr>
<tr><td>10</td><td>Guillaume Brisebois (MAN)</td><td>82</td><td>15-53-68</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Brian Gibbons (LVP)</td><td>71</td><td>2.71</td></tr>
<tr><td>2</td><td>Justin Kloos (LVP)</td><td>69</td><td>2.69</td></tr>
<tr><td>3</td><td>Anthony Duclair (CLE)</td><td>57</td><td>2.68</td></tr>
<tr><td>4</td><td>Kailer Yamamoto (LVP)</td><td>61</td><td>2.65</td></tr>
<tr><td>5</td><td>Matthew Highmore (STK)</td><td>82</td><td>2.49</td></tr>
<tr><td>6</td><td>Max Veronneau (RCK)</td><td>82</td><td>2.35</td></tr>
<tr><td>7</td><td>Emile Poirier (SDG)</td><td>82</td><td>2.30</td></tr>
<tr><td>8</td><td>Andre Burakovsky (STK)</td><td>59</td><td>2.28</td></tr>
<tr><td>9</td><td>Lukas Radil (TOR)</td><td>59</td><td>2.24</td></tr>
<tr><td>10</td><td>Alexandre Fortin (WBS)</td><td>55</td><td>2.23</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Andy Andreoff (CHR)</td><td>79</td><td>78.90%</td></tr>
<tr><td>2</td><td>Justin Kloos (LVP)</td><td>69</td><td>78.57%</td></tr>
<tr><td>3</td><td>Logan Brown (RCK)</td><td>75</td><td>78.16%</td></tr>
<tr><td>4</td><td>Alex Broadhurst (LVP)</td><td>82</td><td>77.75%</td></tr>
<tr><td>5</td><td>T.J. Tynan (CLE)</td><td>64</td><td>77.45%</td></tr>
<tr><td>6</td><td>Dominic Toninato (BKR)</td><td>82</td><td>77.28%</td></tr>
<tr><td>7</td><td>Kalle Kossila (LAV)</td><td>76</td><td>77.17%</td></tr>
<tr><td>8</td><td>Joseph Blandisi (RCK)</td><td>68</td><td>76.70%</td></tr>
<tr><td>9</td><td>Luke Johnson (SPR)</td><td>82</td><td>75.82%</td></tr>
<tr><td>10</td><td>Kyle Rau (STK)</td><td>77</td><td>75.50%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Christoffer Ehn (STK)</td><td>81</td><td>140</td></tr>
<tr><td>2</td><td>Jack Roslovic (STK)</td><td>80</td><td>139</td></tr>
<tr><td>3</td><td>Tyrell Goulbourne (STK)</td><td>82</td><td>133</td></tr>
<tr><td>4</td><td>Andre Burakovsky (STK)</td><td>59</td><td>132</td></tr>
<tr><td>5</td><td>Anthony Duclair (CLE)</td><td>57</td><td>129</td></tr>
<tr><td>6</td><td>Brian Gibbons (LVP)</td><td>71</td><td>128</td></tr>
<tr><td>7</td><td>Alex Schoenborn (LAV)</td><td>82</td><td>127</td></tr>
<tr><td>8</td><td>Brad Malone (STK)</td><td>82</td><td>127</td></tr>
<tr><td>9</td><td>Jordan Subban (STK)</td><td>82</td><td>126</td></tr>
<tr><td>10</td><td>Kyle Rau (STK)</td><td>77</td><td>125</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Jake Dotchin (PRO)</td><td>82</td><td>202</td></tr>
<tr><td>2</td><td>Ross Johnston (ROC)</td><td>82</td><td>159</td></tr>
<tr><td>3</td><td>Seth Helgeson (SYR)</td><td>82</td><td>150</td></tr>
<tr><td>4</td><td>Ryan Lindgren (MAN)</td><td>82</td><td>148</td></tr>
<tr><td>5</td><td>Connor Clifton (GRP)</td><td>53</td><td>137</td></tr>
<tr><td>6</td><td>Josh Brown (CLE)</td><td>82</td><td>137</td></tr>
<tr><td>7</td><td>Frank Corrado (BEL)</td><td>82</td><td>137</td></tr>
<tr><td>8</td><td>Luke Gazdic (SAR)</td><td>82</td><td>126</td></tr>
<tr><td>9</td><td>Logan Brown (RCK)</td><td>75</td><td>124</td></tr>
<tr><td>10</td><td>Dave Dziurzynski (WBS)</td><td>75</td><td>122</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Frank Corrado (BEL)</td><td>82</td><td>193</td></tr>
<tr><td>2</td><td>Luke Gazdic (SAR)</td><td>82</td><td>132</td></tr>
<tr><td>3</td><td>Robbie Russo (SJB)</td><td>77</td><td>123</td></tr>
<tr><td>4</td><td>Alex Broadhurst (LVP)</td><td>82</td><td>118</td></tr>
<tr><td>5</td><td>Spencer Smallman (TOR)</td><td>82</td><td>113</td></tr>
<tr><td>6</td><td>Phil Varone (TEX)</td><td>63</td><td>109</td></tr>
<tr><td>7</td><td>Griffin Reinhart (TUC)</td><td>82</td><td>109</td></tr>
<tr><td>8</td><td>Ryan Lindgren (MAN)</td><td>82</td><td>96</td></tr>
<tr><td>9</td><td>Gustav Olofsson (PRO)</td><td>82</td><td>91</td></tr>
<tr><td>10</td><td>Martin Frk (GRP)</td><td>80</td><td>75</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Christoffer Ehn (STK)</td><td>81</td><td>64-102-166</td></tr>
<tr><td>2</td><td>Max Veronneau (RCK)</td><td>82</td><td>78-84-162</td></tr>
<tr><td>3</td><td>Logan Brown (RCK)</td><td>75</td><td>57-101-158</td></tr>
<tr><td>4</td><td>Kiefer Sherwood (RCK)</td><td>76</td><td>75-80-155</td></tr>
<tr><td>5</td><td>Casey Mittelstadt (CHR)</td><td>81</td><td>82-61-143</td></tr>
<tr><td>6</td><td>Taro Hirose (STK)</td><td>81</td><td>41-101-142</td></tr>
<tr><td>7</td><td>Kailer Yamamoto (LVP)</td><td>61</td><td>59-79-138</td></tr>
<tr><td>8</td><td>Luke Kunin (BKR)</td><td>79</td><td>51-78-129</td></tr>
<tr><td>9</td><td>Lukas Radil (TOR)</td><td>59</td><td>74-50-124</td></tr>
<tr><td>10</td><td>Sheldon Rempal (LAV)</td><td>82</td><td>53-67-120</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Jake Dotchin (PRO)</td><td>82</td><td>421</td></tr>
<tr><td>2</td><td>Frank Corrado (BEL)</td><td>82</td><td>400</td></tr>
<tr><td>3</td><td>Luke Gazdic (SAR)</td><td>82</td><td>326</td></tr>
<tr><td>4</td><td>Dan Renouf (SJB)</td><td>77</td><td>323</td></tr>
<tr><td>5</td><td>Jamie Devane (WBS)</td><td>75</td><td>317</td></tr>
<tr><td>6</td><td>Robbie Russo (SJB)</td><td>77</td><td>300</td></tr>
<tr><td>7</td><td>Ryan Lindgren (MAN)</td><td>82</td><td>289</td></tr>
<tr><td>8</td><td>Seth Helgeson (SYR)</td><td>82</td><td>286</td></tr>
<tr><td>9</td><td>Dave Dziurzynski (WBS)</td><td>75</td><td>285</td></tr>
<tr><td>10</td><td>Spencer Smallman (TOR)</td><td>82</td><td>271</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Andrew Mangiapane (GRP)</td><td>54</td><td>14</td></tr>
<tr><td>2</td><td>Dan Renouf (SJB)</td><td>77</td><td>13</td></tr>
<tr><td>3</td><td>Andrew Campbell (HER)</td><td>61</td><td>12</td></tr>
<tr><td>4</td><td>Lawrence Pilut (SYR)</td><td>80</td><td>12</td></tr>
<tr><td>5</td><td>Martin Frk (GRP)</td><td>80</td><td>12</td></tr>
<tr><td>6</td><td>Austin Wagner (GRP)</td><td>56</td><td>11</td></tr>
<tr><td>7</td><td>Phil Varone (TEX)</td><td>63</td><td>10</td></tr>
<tr><td>8</td><td>Brian Gibbons (LVP)</td><td>71</td><td>10</td></tr>
<tr><td>9</td><td>Kyle Rau (STK)</td><td>77</td><td>10</td></tr>
<tr><td>10</td><td>Robbie Russo (SJB)</td><td>77</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Dominik Kahun (CHR)</td><td>43</td><td>4</td></tr>
<tr><td>2</td><td>Michael Amadio (ROC)</td><td>73</td><td>4</td></tr>
<tr><td>3</td><td>Henrik Borgstrom (LAV)</td><td>60</td><td>3</td></tr>
<tr><td>4</td><td>Matt Read (WBS)</td><td>65</td><td>3</td></tr>
<tr><td>5</td><td>Justin Kloos (LVP)</td><td>69</td><td>3</td></tr>
<tr><td>6</td><td>Joey Anderson (BKR)</td><td>80</td><td>3</td></tr>
<tr><td>7</td><td>Casey Mittelstadt (CHR)</td><td>81</td><td>3</td></tr>
<tr><td>8</td><td>Adam Tambellini (LAV)</td><td>82</td><td>3</td></tr>
<tr><td>9</td><td>Trevor Smith (ROC)</td><td>82</td><td>3</td></tr>
<tr><td>10</td><td>Lias Andersson (CHI)</td><td>16</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Max Veronneau (RCK)</td><td>82</td><td>17</td></tr>
<tr><td>2</td><td>Patrick Russell (CLE)</td><td>82</td><td>16</td></tr>
<tr><td>3</td><td>Logan Brown (RCK)</td><td>75</td><td>13</td></tr>
<tr><td>4</td><td>Andy Andreoff (CHR)</td><td>79</td><td>13</td></tr>
<tr><td>5</td><td>Alex Broadhurst (LVP)</td><td>82</td><td>13</td></tr>
<tr><td>6</td><td>Martin Frk (GRP)</td><td>80</td><td>12</td></tr>
<tr><td>7</td><td>Sheldon Rempal (LAV)</td><td>82</td><td>12</td></tr>
<tr><td>8</td><td>Michael Mersch (CHR)</td><td>69</td><td>11</td></tr>
<tr><td>9</td><td>Joshua Ho-Sang (UTI)</td><td>80</td><td>11</td></tr>
<tr><td>10</td><td>Warren Foegele (SDG)</td><td>80</td><td>11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Warren Foegele (SDG)</td><td>80</td><td>5</td></tr>
<tr><td>2</td><td>Alexandre Fortin (WBS)</td><td>55</td><td>4</td></tr>
<tr><td>3</td><td>C.J. Smith (SPR)</td><td>82</td><td>4</td></tr>
<tr><td>4</td><td>Andrew Mangiapane (GRP)</td><td>54</td><td>3</td></tr>
<tr><td>5</td><td>Radim Simek (SYR)</td><td>54</td><td>3</td></tr>
<tr><td>6</td><td>Colin McDonald (GRP)</td><td>57</td><td>3</td></tr>
<tr><td>7</td><td>Laurent Dauphin (HER)</td><td>61</td><td>3</td></tr>
<tr><td>8</td><td>Matt Read (WBS)</td><td>65</td><td>3</td></tr>
<tr><td>9</td><td>Jimmy Schuldt (SJB)</td><td>77</td><td>3</td></tr>
<tr><td>10</td><td>Joshua Ho-Sang (UTI)</td><td>80</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Alexandre Fortin (WBS)</td><td>55</td><td>1</td></tr>
<tr><td>2</td><td>Eeli Tolvanen (MAN)</td><td>60</td><td>1</td></tr>
<tr><td>3</td><td>Matthew Peca (HER)</td><td>61</td><td>1</td></tr>
<tr><td>4</td><td>Phil Varone (TEX)</td><td>63</td><td>1</td></tr>
<tr><td>5</td><td>Luke Kunin (BKR)</td><td>79</td><td>1</td></tr>
<tr><td>6</td><td>Derrick Pouliot (SPR)</td><td>80</td><td>1</td></tr>
<tr><td>7</td><td>Jack Roslovic (STK)</td><td>80</td><td>1</td></tr>
<tr><td>8</td><td>Casey Mittelstadt (CHR)</td><td>81</td><td>1</td></tr>
<tr><td>9</td><td>Jonny Brodzinski (LAV)</td><td>82</td><td>1</td></tr>
<tr><td>10</td><td>Matthew Highmore (STK)</td><td>82</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Luke Kunin (BKR)</td><td>79</td><td>1,783</td></tr>
<tr><td>2</td><td>Trevor Smith (ROC)</td><td>82</td><td>1,778</td></tr>
<tr><td>3</td><td>Haydn Fleury (UTI)</td><td>82</td><td>1,764</td></tr>
<tr><td>4</td><td>Ben Gleason (UTI)</td><td>82</td><td>1,737</td></tr>
<tr><td>5</td><td>Michael Kapla (LAV)</td><td>82</td><td>1,716</td></tr>
<tr><td>6</td><td>T.J. Brennan (LAV)</td><td>82</td><td>1,715</td></tr>
<tr><td>7</td><td>Jeremy Lauzon (BKR)</td><td>82</td><td>1,711</td></tr>
<tr><td>8</td><td>Robbie Russo (SJB)</td><td>77</td><td>1,703</td></tr>
<tr><td>9</td><td>Casey Mittelstadt (CHR)</td><td>81</td><td>1,676</td></tr>
<tr><td>10</td><td>Joshua Ho-Sang (UTI)</td><td>80</td><td>1,658</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Warren Foegele (SDG)</td><td>80</td><td>14</td></tr>
<tr><td>2</td><td>Phil Varone (TEX)</td><td>63</td><td>12</td></tr>
<tr><td>3</td><td>Anthony Duclair (CLE)</td><td>57</td><td>11</td></tr>
<tr><td>4</td><td>Luke Gazdic (SAR)</td><td>82</td><td>11</td></tr>
<tr><td>5</td><td>Lukas Radil (TOR)</td><td>59</td><td>10</td></tr>
<tr><td>6</td><td>Alex Broadhurst (LVP)</td><td>82</td><td>10</td></tr>
<tr><td>7</td><td>Brian Gibbons (LVP)</td><td>71</td><td>8</td></tr>
<tr><td>8</td><td>Casey Mittelstadt (CHR)</td><td>81</td><td>8</td></tr>
<tr><td>9</td><td>Alexandre Fortin (WBS)</td><td>55</td><td>7</td></tr>
<tr><td>10</td><td>Rourke Chartier (CLE)</td><td>57</td><td>7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Austin Wagner (GRP)</td><td>56</td><td>7</td></tr>
<tr><td>2</td><td>Max Veronneau (RCK)</td><td>82</td><td>7</td></tr>
<tr><td>3</td><td>Michael Bunting (BEL)</td><td>5</td><td>5</td></tr>
<tr><td>4</td><td>Adam Tambellini (LAV)</td><td>82</td><td>5</td></tr>
<tr><td>5</td><td>Aleksi Saarela (CHR)</td><td>19</td><td>4</td></tr>
<tr><td>6</td><td>Matthew Peca (HER)</td><td>61</td><td>4</td></tr>
<tr><td>7</td><td>Brian Gibbons (LVP)</td><td>71</td><td>4</td></tr>
<tr><td>8</td><td>Brad Malone (STK)</td><td>82</td><td>4</td></tr>
<tr><td>9</td><td>John Quenneville (MAN)</td><td>49</td><td>3</td></tr>
<tr><td>10</td><td>Trevor Moore (SDG)</td><td>69</td><td>3</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Kiefer Sherwood (RCK)</td><td>76</td><td>18</td></tr>
<tr><td>2</td><td>Peter Cehlarik (RCK)</td><td>82</td><td>18</td></tr>
<tr><td>3</td><td>Max Veronneau (RCK)</td><td>82</td><td>14</td></tr>
<tr><td>4</td><td>Valentin Zykov (RCK)</td><td>82</td><td>14</td></tr>
<tr><td>5</td><td>Stefan Matteau (MIL)</td><td>13</td><td>10</td></tr>
<tr><td>6</td><td>Jesse Puljujarvi (CHR)</td><td>49</td><td>10</td></tr>
<tr><td>7</td><td>Laurent Dauphin (HER)</td><td>61</td><td>10</td></tr>
<tr><td>8</td><td>Matthew Peca (HER)</td><td>61</td><td>10</td></tr>
<tr><td>9</td><td>Sheldon Rempal (LAV)</td><td>82</td><td>10</td></tr>
<tr><td>10</td><td>Brian Lashoff (LAV)</td><td>69</td><td>9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Alex Broadhurst (LVP)</td><td>82</td><td>202</td></tr>
<tr><td>2</td><td>Liam O'Brien (SYR)</td><td>82</td><td>197</td></tr>
<tr><td>3</td><td>Steven Lorentz (TOR)</td><td>82</td><td>179</td></tr>
<tr><td>4</td><td>Brad Malone (STK)</td><td>82</td><td>170</td></tr>
<tr><td>5</td><td>Trevor Smith (ROC)</td><td>82</td><td>165</td></tr>
<tr><td>6</td><td>Alexandre Grenier (SYR)</td><td>82</td><td>163</td></tr>
<tr><td>7</td><td>Logan Brown (RCK)</td><td>75</td><td>157</td></tr>
<tr><td>8</td><td>Dominic Toninato (BKR)</td><td>82</td><td>157</td></tr>
<tr><td>9</td><td>Justin Kloos (LVP)</td><td>69</td><td>152</td></tr>
<tr><td>10</td><td>Spencer Smallman (TOR)</td><td>82</td><td>152</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Luke Witkowski (HER)</td><td>58</td><td>5</td></tr>
<tr><td>2</td><td>Brian Gibbons (LVP)</td><td>71</td><td>4</td></tr>
<tr><td>3</td><td>Kalle Kossila (LAV)</td><td>76</td><td>4</td></tr>
<tr><td>4</td><td>Andrew Mangiapane (GRP)</td><td>54</td><td>3</td></tr>
<tr><td>5</td><td>Austin Wagner (GRP)</td><td>56</td><td>3</td></tr>
<tr><td>6</td><td>Justin Kloos (LVP)</td><td>69</td><td>3</td></tr>
<tr><td>7</td><td>Luke Kunin (BKR)</td><td>79</td><td>3</td></tr>
<tr><td>8</td><td>Jack Roslovic (STK)</td><td>80</td><td>3</td></tr>
<tr><td>9</td><td>Martin Frk (GRP)</td><td>80</td><td>3</td></tr>
<tr><td>10</td><td>Nathan Walker (PRO)</td><td>82</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Ross Johnston (ROC)</td><td>82</td><td>7</td></tr>
<tr><td>2</td><td>Connor Clifton (GRP)</td><td>53</td><td>6</td></tr>
<tr><td>3</td><td>Michael Mersch (CHR)</td><td>69</td><td>6</td></tr>
<tr><td>4</td><td>Logan Brown (RCK)</td><td>75</td><td>6</td></tr>
<tr><td>5</td><td>Josh Brown (CLE)</td><td>82</td><td>6</td></tr>
<tr><td>6</td><td>Jarred Tinordi (BKR)</td><td>82</td><td>6</td></tr>
<tr><td>7</td><td>Eeli Tolvanen (MAN)</td><td>60</td><td>5</td></tr>
<tr><td>8</td><td>Jacob Middleton (UTI)</td><td>61</td><td>5</td></tr>
<tr><td>9</td><td>Ryan Lindgren (MAN)</td><td>82</td><td>5</td></tr>
<tr><td>10</td><td>Dominic Turgeon (CHI)</td><td>82</td><td>5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Jarred Tinordi (BKR)</td><td>82</td><td>4</td></tr>
<tr><td>2</td><td>Connor Clifton (GRP)</td><td>53</td><td>3</td></tr>
<tr><td>3</td><td>Michael Mersch (CHR)</td><td>69</td><td>3</td></tr>
<tr><td>4</td><td>T.J. Brennan (LAV)</td><td>82</td><td>3</td></tr>
<tr><td>5</td><td>Luke Gazdic (SAR)</td><td>82</td><td>3</td></tr>
<tr><td>6</td><td>Stuart Percy (MIL)</td><td>13</td><td>2</td></tr>
<tr><td>7</td><td>Marcus Pettersson (CHR)</td><td>45</td><td>2</td></tr>
<tr><td>8</td><td>Eeli Tolvanen (MAN)</td><td>60</td><td>2</td></tr>
<tr><td>9</td><td>Matt Tennyson (RCK)</td><td>67</td><td>2</td></tr>
<tr><td>10</td><td>Logan Brown (RCK)</td><td>75</td><td>2</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Ryan Miller (LVP)</td><td>74</td><td>0.917</td></tr>
<tr><td>2</td><td>Vitek Vanecek (MAN)</td><td>73</td><td>0.916</td></tr>
<tr><td>3</td><td>Tristan Jarry (SDG)</td><td>74</td><td>0.910</td></tr>
<tr><td>4</td><td>Jean-Francois Berube (TEX)</td><td>82</td><td>0.907</td></tr>
<tr><td>5</td><td>Aaron Dell (GRP)</td><td>76</td><td>0.906</td></tr>
<tr><td>6</td><td>Francois Brassard (SYR)</td><td>76</td><td>0.902</td></tr>
<tr><td>7</td><td>Spencer Martin (HER)</td><td>61</td><td>0.902</td></tr>
<tr><td>8</td><td>Oscar Dansk (STK)</td><td>82</td><td>0.902</td></tr>
<tr><td>9</td><td>Adin Hill (CHI)</td><td>59</td><td>0.901</td></tr>
<tr><td>10</td><td>Michal Neuvirth (SJB)</td><td>75</td><td>0.898</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Ryan Miller (LVP)</td><td>74</td><td>1.41</td></tr>
<tr><td>2</td><td>Oscar Dansk (STK)</td><td>82</td><td>1.58</td></tr>
<tr><td>3</td><td>Alex Nedeljkovic (LAV)</td><td>82</td><td>1.60</td></tr>
<tr><td>4</td><td>Al Montoya (RCK)</td><td>82</td><td>1.83</td></tr>
<tr><td>5</td><td>Ken Appleby (ROC)</td><td>78</td><td>1.85</td></tr>
<tr><td>6</td><td>Kevin Boyle (CHR)</td><td>76</td><td>2.04</td></tr>
<tr><td>7</td><td>Brad Thiessen (CLE)</td><td>69</td><td>2.05</td></tr>
<tr><td>8</td><td>Adin Hill (CHI)</td><td>59</td><td>2.23</td></tr>
<tr><td>9</td><td>Tristan Jarry (SDG)</td><td>74</td><td>2.33</td></tr>
<tr><td>10</td><td>Spencer Martin (HER)</td><td>61</td><td>2.38</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Alex Nedeljkovic (LAV)</td><td>82</td><td>4,924</td></tr>
<tr><td>2</td><td>Oscar Dansk (STK)</td><td>82</td><td>4,890</td></tr>
<tr><td>3</td><td>Al Montoya (RCK)</td><td>82</td><td>4,767</td></tr>
<tr><td>4</td><td>Jean-Francois Berube (TEX)</td><td>82</td><td>4,696</td></tr>
<tr><td>5</td><td>Ken Appleby (ROC)</td><td>78</td><td>4,658</td></tr>
<tr><td>6</td><td>Kevin Boyle (CHR)</td><td>76</td><td>4,532</td></tr>
<tr><td>7</td><td>Ryan Miller (LVP)</td><td>74</td><td>4,414</td></tr>
<tr><td>8</td><td>Vitek Vanecek (MAN)</td><td>73</td><td>4,335</td></tr>
<tr><td>9</td><td>Tristan Jarry (SDG)</td><td>74</td><td>4,318</td></tr>
<tr><td>10</td><td>Francois Brassard (SYR)</td><td>76</td><td>4,301</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jean-Francois Berube (TEX)</td><td>82</td><td>3081</td></tr>
<tr><td>2</td><td>Aaron Dell (GRP)</td><td>76</td><td>2180</td></tr>
<tr><td>3</td><td>Vitek Vanecek (MAN)</td><td>73</td><td>2160</td></tr>
<tr><td>4</td><td>Francois Brassard (SYR)</td><td>76</td><td>2109</td></tr>
<tr><td>5</td><td>Michal Neuvirth (SJB)</td><td>75</td><td>2049</td></tr>
<tr><td>6</td><td>Tristan Jarry (SDG)</td><td>74</td><td>1859</td></tr>
<tr><td>7</td><td>Tom McCollum (WBS)</td><td>63</td><td>1787</td></tr>
<tr><td>8</td><td>Spencer Martin (HER)</td><td>61</td><td>1433</td></tr>
<tr><td>9</td><td>Ken Appleby (ROC)</td><td>78</td><td>1381</td></tr>
<tr><td>10</td><td>Kevin Boyle (CHR)</td><td>76</td><td>1369</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Ryan Miller (LVP)</td><td>74</td><td>17</td></tr>
<tr><td>2</td><td>Alex Nedeljkovic (LAV)</td><td>82</td><td>17</td></tr>
<tr><td>3</td><td>Oscar Dansk (STK)</td><td>82</td><td>17</td></tr>
<tr><td>4</td><td>Al Montoya (RCK)</td><td>82</td><td>15</td></tr>
<tr><td>5</td><td>Brad Thiessen (CLE)</td><td>69</td><td>12</td></tr>
<tr><td>6</td><td>Landon Bow (UTI)</td><td>42</td><td>10</td></tr>
<tr><td>7</td><td>Ken Appleby (ROC)</td><td>78</td><td>10</td></tr>
<tr><td>8</td><td>Kevin Boyle (CHR)</td><td>76</td><td>9</td></tr>
<tr><td>9</td><td>Adin Hill (CHI)</td><td>59</td><td>8</td></tr>
<tr><td>10</td><td>Vitek Vanecek (MAN)</td><td>73</td><td>8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Oscar Dansk (STK)</td><td>82</td><td>72</td></tr>
<tr><td>2</td><td>Al Montoya (RCK)</td><td>82</td><td>71</td></tr>
<tr><td>3</td><td>Alex Nedeljkovic (LAV)</td><td>82</td><td>70</td></tr>
<tr><td>4</td><td>Kevin Boyle (CHR)</td><td>76</td><td>62</td></tr>
<tr><td>5</td><td>Ken Appleby (ROC)</td><td>78</td><td>61</td></tr>
<tr><td>6</td><td>Ryan Miller (LVP)</td><td>74</td><td>58</td></tr>
<tr><td>7</td><td>Tristan Jarry (SDG)</td><td>74</td><td>56</td></tr>
<tr><td>8</td><td>Brad Thiessen (CLE)</td><td>69</td><td>51</td></tr>
<tr><td>9</td><td>Spencer Martin (HER)</td><td>61</td><td>44</td></tr>
<tr><td>10</td><td>Aaron Dell (GRP)</td><td>76</td><td>42</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Vitek Vanecek (MAN)</td><td>10</td><td>1.000</td></tr>
<tr><td>2</td><td>MacKenzie Blackwood (CHI)</td><td>8</td><td>1.000</td></tr>
<tr><td>3</td><td>Jean-Francois Berube (TEX)</td><td>5</td><td>1.000</td></tr>
<tr><td>4</td><td>Landon Bow (UTI)</td><td>4</td><td>1.000</td></tr>
<tr><td>5</td><td>Ian Scott (SDG)</td><td>3</td><td>1.000</td></tr>
<tr><td>6</td><td>Matt Tomkins (SYR)</td><td>3</td><td>1.000</td></tr>
<tr><td>7</td><td>Christopher Gibson (MAN)</td><td>2</td><td>1.000</td></tr>
<tr><td>8</td><td>Tristan Jarry (SDG)</td><td>11</td><td>0.909</td></tr>
<tr><td>9</td><td>Alex Nedeljkovic (LAV)</td><td>23</td><td>0.826</td></tr>
<tr><td>10</td><td>Cory Schneider (UTI)</td><td>5</td><td>0.800</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Jean-Francois Berube (TEX)</td><td>82</td><td>45</td></tr>
<tr><td>2</td><td>Michal Neuvirth (SJB)</td><td>75</td><td>32</td></tr>
<tr><td>3</td><td>Francois Brassard (SYR)</td><td>76</td><td>32</td></tr>
<tr><td>4</td><td>Vitek Vanecek (MAN)</td><td>73</td><td>31</td></tr>
<tr><td>5</td><td>Tom McCollum (WBS)</td><td>63</td><td>26</td></tr>
<tr><td>6</td><td>Aaron Dell (GRP)</td><td>76</td><td>25</td></tr>
<tr><td>7</td><td>Adin Hill (CHI)</td><td>59</td><td>18</td></tr>
<tr><td>8</td><td>Jon Gillies (CHI)</td><td>44</td><td>15</td></tr>
<tr><td>9</td><td>Spencer Martin (HER)</td><td>61</td><td>15</td></tr>
<tr><td>10</td><td>Tristan Jarry (SDG)</td><td>74</td><td>15</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
