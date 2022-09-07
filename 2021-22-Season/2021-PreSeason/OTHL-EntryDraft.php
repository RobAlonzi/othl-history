<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Entry Draft</title>
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
<table class="STHSEntryDraft_MainTable">
<thead><tr><th class="STHSEntryDraft_Rank">Rank #</th><th class="STHSEntryDraft_Team">Team</th><th class="STHSEntryDraft_Pick">Pick</th></tr></thead><tbody>
<tr><td colspan="3" class="STHSCenter"><b>Round #1</b></td></tr>
<tr><td>1</td><td>Flames (Hurricanes)</td><td>Owen Power</td></tr>
<tr><td>2</td><td>Penguins</td><td>Matty Beniers</td></tr>
<tr><td>3</td><td>Kraken</td><td>Luke Hughes</td></tr>
<tr><td>4</td><td>Blue Jackets (Rangers)</td><td>Kent Johnson</td></tr>
<tr><td>5</td><td>Ducks (Capitals)</td><td>William Eklund</td></tr>
<tr><td>6</td><td>Wild (Blues)</td><td>Mason McTavish</td></tr>
<tr><td>7</td><td>Wild</td><td>Jesper Wallstedt</td></tr>
<tr><td>8</td><td>Avalanche</td><td>Dylan Guenther</td></tr>
<tr><td>9</td><td>Blue Jackets (Senators)</td><td>Simon Edvinsson</td></tr>
<tr><td>10</td><td>Golden Knights</td><td>Brandt Clarke</td></tr>
<tr><td>11</td><td>Oilers (Red Wings)</td><td>Sebastian Cossa</td></tr>
<tr><td>12</td><td>Islanders (Devils)</td><td>Cole Sillinger</td></tr>
<tr><td>13</td><td>Canadiens</td><td>Chaz Lucius</td></tr>
<tr><td>14</td><td>Golden Knights (Sharks)</td><td>Matthew Coronato</td></tr>
<tr><td>15</td><td>Golden Knights (Jets)</td><td>Isak Rosen</td></tr>
<tr><td>16</td><td>Kings</td><td>Aatu Raty</td></tr>
<tr><td>17</td><td>Red Wings (Islanders)</td><td>Fabian Lysell</td></tr>
<tr><td>18</td><td>Blue Jackets</td><td>Tyler Boucher</td></tr>
<tr><td>19</td><td>Panthers</td><td>Brennan Othmann</td></tr>
<tr><td>20</td><td>Red Wings (Maple Leafs)</td><td>Xavier Bourgault</td></tr>
<tr><td>21</td><td>Kraken (Ducks)</td><td>Carson Lambos</td></tr>
<tr><td>22</td><td>Kraken (Stars)</td><td>Fedor Svechkov</td></tr>
<tr><td>23</td><td>Kraken (Oilers)</td><td>Corson Ceulemans</td></tr>
<tr><td>24</td><td>Kraken (Lightning)</td><td>Josh Doan</td></tr>
<tr><td>25</td><td>Oilers (Blackhawks)</td><td>Wyatt Johnston</td></tr>
<tr><td>26</td><td>Sabres</td><td>Prokhor Poltapov</td></tr>
<tr><td>27</td><td>Capitals (Coyotes)</td><td>Oskar Olausson</td></tr>
<tr><td>28</td><td>Flames</td><td>Zachary Bolduc</td></tr>
<tr><td>29</td><td>Senators (Predators)</td><td>Zachary L'Heureux</td></tr>
<tr><td>30</td><td>Wild (Flyers)</td><td>Nikita Chibrikov</td></tr>
<tr><td>31</td><td>Blue Jackets (Canucks)</td><td>Mackie Samoskevich</td></tr>
<tr><td>32</td><td>Senators (Bruins)</td><td>Zach Dean</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #2</b></td></tr>
<tr><td>33</td><td>Capitals (Hurricanes)</td><td>Francesco Pinelli</td></tr>
<tr><td>34</td><td>Penguins</td><td>Olen Zellweger</td></tr>
<tr><td>35</td><td>Panthers (Kraken)</td><td>Aleksi Heimosalmi</td></tr>
<tr><td>36</td><td>Hurricanes (Rangers)</td><td>Logan Stankoven</td></tr>
<tr><td>37</td><td>Blue Jackets (Capitals)</td><td>Nolan Allan</td></tr>
<tr><td>38</td><td>Blue Jackets (Blues)</td><td>Danila Klimovich</td></tr>
<tr><td>39</td><td>Hurricanes (Wild)</td><td>Samu Tuomaala</td></tr>
<tr><td>40</td><td>Avalanche</td><td>Sasha Pastujov</td></tr>
<tr><td>41</td><td>Sharks (Senators)</td><td>Daniil Chayka</td></tr>
<tr><td>42</td><td>Sharks (Golden Knights)</td><td>Zach Ostapchuk</td></tr>
<tr><td>43</td><td>Kraken (Red Wings)</td><td>Jack Peart</td></tr>
<tr><td>44</td><td>Oilers (Devils)</td><td>Matthew Knies</td></tr>
<tr><td>45</td><td>Kraken (Canadiens)</td><td>Ryker Evans</td></tr>
<tr><td>46</td><td>Sharks</td><td>Chase Stillman</td></tr>
<tr><td>47</td><td>Senators (Jets)</td><td>Sean Behrens</td></tr>
<tr><td>48</td><td>Hurricanes (Kings)</td><td>William Stromgren</td></tr>
<tr><td>49</td><td>Blues (Islanders)</td><td>Ville Koivunen</td></tr>
<tr><td>50</td><td>Bruins (Blue Jackets)</td><td>Samu Salminen</td></tr>
<tr><td>51</td><td>Kraken (Panthers)</td><td>Tristan Broz</td></tr>
<tr><td>52</td><td>Maple Leafs</td><td>Scott Morrow</td></tr>
<tr><td>53</td><td>Devils (Ducks)</td><td>Ilya Fedotov</td></tr>
<tr><td>54</td><td>Kraken (Stars)</td><td>Colton Dach</td></tr>
<tr><td>55</td><td>Maple Leafs (Oilers)</td><td>Simon Robertsson</td></tr>
<tr><td>56</td><td>Sharks (Lightning)</td><td>Shai Buium</td></tr>
<tr><td>57</td><td>Hurricanes (Blackhawks)</td><td>Evan Nause</td></tr>
<tr><td>58</td><td>Sabres</td><td>Aleksandr Kisakov</td></tr>
<tr><td>59</td><td>Blues (Coyotes)</td><td>Ayrton Martino</td></tr>
<tr><td>60</td><td>Hurricanes (Flames)</td><td>Stanislav Svozil</td></tr>
<tr><td>61</td><td>Senators (Predators)</td><td>Oliver Kapanen</td></tr>
<tr><td>62</td><td>Penguins (Flyers)</td><td>Vincent Iorio</td></tr>
<tr><td>63</td><td>Maple Leafs (Canucks)</td><td>Logan Mailloux</td></tr>
<tr><td>64</td><td>Bruins</td><td>Andrei Buyalsky</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #3</b></td></tr>
<tr><td>65</td><td>Sabres (Hurricanes)</td><td>Artyom Grushnikov</td></tr>
<tr><td>66</td><td>Bruins (Penguins)</td><td>Benjamin Roger</td></tr>
<tr><td>67</td><td>Kraken</td><td>Benjamin Gaudreau</td></tr>
<tr><td>68</td><td>Kraken (Rangers)</td><td>Alexei Kolosov</td></tr>
<tr><td>69</td><td>Blue Jackets (Capitals)</td><td>Kirill Kirsanov</td></tr>
<tr><td>70</td><td>Blues</td><td>Brent Johnson</td></tr>
<tr><td>71</td><td>Hurricanes (Wild)</td><td>Samuel Helenius</td></tr>
<tr><td>72</td><td>Avalanche</td><td>Brett Harrison</td></tr>
<tr><td>73</td><td>Blues (Senators)</td><td>Patrik Hamrla</td></tr>
<tr><td>74</td><td>Senators (Golden Knights)</td><td>Tristan Lennox</td></tr>
<tr><td>75</td><td>Hurricanes (Red Wings)</td><td>Ryder Korczak</td></tr>
<tr><td>76</td><td>Devils</td><td>Anton Olsson</td></tr>
<tr><td>77</td><td>Penguins (Canadiens)</td><td>Riley Kidney</td></tr>
<tr><td>78</td><td>Hurricanes (Sharks)</td><td>Dylan Duke</td></tr>
<tr><td>79</td><td>Senators (Jets)</td><td>Conner Roulette</td></tr>
<tr><td>80</td><td>Senators (Kings)</td><td>Cole Huckins</td></tr>
<tr><td>81</td><td>Islanders</td><td>Justin Robidas</td></tr>
<tr><td>82</td><td>Senators (Blue Jackets)</td><td>Oliver Johansson</td></tr>
<tr><td>83</td><td>Senators (Panthers)</td><td>Roman Schmidt</td></tr>
<tr><td>84</td><td>Blues (Maple Leafs)</td><td>Aidan Hreschuk</td></tr>
<tr><td>85</td><td>Senators (Ducks)</td><td>Cameron Whynot</td></tr>
<tr><td>86</td><td>Kraken (Stars)</td><td>Caedan Bankier</td></tr>
<tr><td>87</td><td>Kings (Oilers)</td><td>Ryan Winterton</td></tr>
<tr><td>88</td><td>Lightning</td><td>Janis Jerome Moser</td></tr>
<tr><td>89</td><td>Kraken (Blackhawks)</td><td>Jakub Malek</td></tr>
<tr><td>90</td><td>Sabres</td><td>Stiven Sardarian</td></tr>
<tr><td>91</td><td>Hurricanes (Coyotes)</td><td>Ryan Ufko</td></tr>
<tr><td>92</td><td>Hurricanes (Flames)</td><td>Ethan Del Mastro</td></tr>
<tr><td>93</td><td>Senators (Predators)</td><td>Carter Mazur</td></tr>
<tr><td>94</td><td>Penguins (Flyers)</td><td>Justin Ertel</td></tr>
<tr><td>95</td><td>Kraken (Canucks)</td><td>Redmond Savage</td></tr>
<tr><td>96</td><td>Hurricanes (Bruins)</td><td>Dmitri Rashevsky</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #4</b></td></tr>
<tr><td>97</td><td>Blackhawks (Hurricanes)</td><td>Jayden Grubbe</td></tr>
<tr><td>98</td><td>Penguins</td><td>Jake Chiasson</td></tr>
<tr><td>99</td><td>Bruins (Kraken)</td><td>Dmitri Kuzmin</td></tr>
<tr><td>100</td><td>Maple Leafs (Rangers)</td><td>Jakub Brabenec</td></tr>
<tr><td>101</td><td>Predators (Capitals)</td><td>Sean Tschigerl</td></tr>
<tr><td>102</td><td>Sharks (Blues)</td><td>Dmitri Kostenko</td></tr>
<tr><td>103</td><td>Senators (Wild)</td><td>Victor Stjernborg</td></tr>
<tr><td>104</td><td>Hurricanes (Avalanche)</td><td>Liam Dower Nilsson</td></tr>
<tr><td>105</td><td>Senators</td><td>Joshua Lopina</td></tr>
<tr><td>106</td><td>Bruins (Golden Knights)</td><td>Ethan Cardwell</td></tr>
<tr><td>107</td><td>Hurricanes (Red Wings)</td><td>James Malatesta</td></tr>
<tr><td>108</td><td>Devils</td><td>Topias Vilen</td></tr>
<tr><td>109</td><td>Bruins (Canadiens)</td><td>Robert Orr</td></tr>
<tr><td>110</td><td>Sharks</td><td>Olivier Nadeau</td></tr>
<tr><td>111</td><td>Bruins (Jets)</td><td>Gage Alexander</td></tr>
<tr><td>112</td><td>Maple Leafs (Kings)</td><td>Guillaume Richard</td></tr>
<tr><td>113</td><td>Kraken (Islanders)</td><td>Joshua Roy</td></tr>
<tr><td>114</td><td>Blue Jackets</td><td>Aku Koskenvuo</td></tr>
<tr><td>115</td><td>Canucks (Panthers)</td><td>Brody Lamb</td></tr>
<tr><td>116</td><td>Maple Leafs</td><td>Talyn Boyko</td></tr>
<tr><td>117</td><td>Bruins (Ducks)</td><td>Ty Voit (C/LW)</td></tr>
<tr><td>118</td><td>Hurricanes (Stars)</td><td>Jack Bar</td></tr>
<tr><td>119</td><td>Hurricanes (Oilers)</td><td>Vladislav Lukashevich</td></tr>
<tr><td>120</td><td>Hurricanes (Lightning)</td><td>Cole Jordan</td></tr>
<tr><td>121</td><td>Blue Jackets (Blackhawks)</td><td>Connor Lockhart</td></tr>
<tr><td>122</td><td>Sabres</td><td>Joshua Bloom</td></tr>
<tr><td>123</td><td>Maple Leafs (Coyotes)</td><td>William Trudeau</td></tr>
<tr><td>124</td><td>Hurricanes (Flames)</td><td>Oscar Plandowski</td></tr>
<tr><td>125</td><td>Hurricanes (Predators)</td><td>Tyson Hinds</td></tr>
<tr><td>126</td><td>Maple Leafs (Flyers)</td><td>Matvey Petrov</td></tr>
<tr><td>127</td><td>Ducks (Canucks)</td><td>Jackson Blake</td></tr>
<tr><td>128</td><td>Hurricanes (Bruins)</td><td>Liam Gilmartin</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #5</b></td></tr>
<tr><td>129</td><td>Blues (Hurricanes)</td><td>Kirill Gerasimyuk</td></tr>
<tr><td>130</td><td>Penguins</td><td>Jacob Melanson</td></tr>
<tr><td>131</td><td>Oilers (Kraken)</td><td>Carson Latimer</td></tr>
<tr><td>132</td><td>Blackhawks (Rangers)</td><td>Kalle Vaisanen</td></tr>
<tr><td>133</td><td>Blue Jackets (Capitals)</td><td>Luca Munzenberger</td></tr>
<tr><td>134</td><td>Bruins (Blues)</td><td>Viljami Marjala</td></tr>
<tr><td>135</td><td>Bruins (Wild)</td><td>Jakub Demek</td></tr>
<tr><td>136</td><td>Avalanche</td><td>Aleksi Malinen</td></tr>
<tr><td>137</td><td>Senators</td><td>Philip Svedeback</td></tr>
<tr><td>138</td><td>Blue Jackets (Golden Knights)</td><td>Jonathan Myrenberg</td></tr>
<tr><td>139</td><td>Predators (Red Wings)</td><td>Kyle Masters</td></tr>
<tr><td>140</td><td>Kraken (Devils)</td><td>Taige Harding</td></tr>
<tr><td>141</td><td>Bruins (Canadiens)</td><td>Artur Cholach</td></tr>
<tr><td>142</td><td>Kings (Sharks)</td><td>Ville Ottavainen</td></tr>
<tr><td>143</td><td>Oilers (Jets)</td><td>Manix Landry</td></tr>
<tr><td>144</td><td>Kings</td><td>Jack Matier</td></tr>
<tr><td>145</td><td>Lightning (Islanders)</td><td>Bryce Montgomery</td></tr>
<tr><td>146</td><td>Blue Jackets</td><td>Haakon Hanelt (F/D)</td></tr>
<tr><td>147</td><td>Kings (Panthers)</td><td>Rasmus Korhonen</td></tr>
<tr><td>148</td><td>Oilers (Maple Leafs)</td><td>Cameron Berg</td></tr>
<tr><td>149</td><td>Canucks (Ducks)</td><td>Max McCue</td></tr>
<tr><td>150</td><td>Predators (Stars)</td><td>Ty Murchison</td></tr>
<tr><td>151</td><td>Oilers</td><td>Nikolai Makarov</td></tr>
<tr><td>152</td><td>Kraken (Lightning)</td><td>Josh Pillar</td></tr>
<tr><td>153</td><td>Bruins (Blackhawks)</td><td>Alex Gagne</td></tr>
<tr><td>154</td><td>Kraken (Sabres)</td><td>Semyon Vyazovoi</td></tr>
<tr><td>155</td><td>Bruins (Coyotes)</td><td>Brian Zanetti</td></tr>
<tr><td>156</td><td>Rangers (Flames)</td><td>Gannon Laroque</td></tr>
<tr><td>157</td><td>Predators</td><td>Simon Knak</td></tr>
<tr><td>158</td><td>Wild (Flyers)</td><td>Isaac Belliveau</td></tr>
<tr><td>159</td><td>Kraken (Canucks)</td><td>Vyacheslav Peksa</td></tr>
<tr><td>160</td><td>Red Wings (Bruins)</td><td>Francesco Arcuri</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #6</b></td></tr>
<tr><td>161</td><td>Canucks (Hurricanes)</td><td>Cameron MacDonald</td></tr>
<tr><td>162</td><td>Oilers (Penguins)</td><td>Ryan Mast</td></tr>
<tr><td>163</td><td>Kraken</td><td>Nate Benoit</td></tr>
<tr><td>164</td><td>Blue Jackets (Rangers)</td><td>Nikita Guslistov</td></tr>
<tr><td>165</td><td>Kings (Capitals)</td><td>Daniil Sobolev</td></tr>
<tr><td>166</td><td>Blackhawks (Blues)</td><td>Jacob Holmes</td></tr>
<tr><td>167</td><td>Oilers (Wild)</td><td>Pasquale Zito</td></tr>
<tr><td>168</td><td>Avalanche</td><td>Hugo Gabrielson</td></tr>
<tr><td>169</td><td>Senators</td><td>Joe Vrbetic</td></tr>
<tr><td>170</td><td>Oilers (Golden Knights)</td><td>Emil Martinsen Lilleberg</td></tr>
<tr><td>171</td><td>Red Wings</td><td>Joel Nystrom</td></tr>
<tr><td>172</td><td>Kraken (Devils)</td><td>Xavier Simoneau</td></tr>
<tr><td>173</td><td>Oilers (Canadiens)</td><td>Viktor Hurtig</td></tr>
<tr><td>174</td><td>Kraken (Sharks)</td><td>Taylor Makar</td></tr>
<tr><td>175</td><td>Bruins (Jets)</td><td>Niko Huuhtanen</td></tr>
<tr><td>176</td><td>Kings</td><td>Artem Guryev</td></tr>
<tr><td>177</td><td>Lightning (Islanders)</td><td>Chase Clark</td></tr>
<tr><td>178</td><td>Blackhawks (Blue Jackets)</td><td>Eetu Liukas</td></tr>
<tr><td>179</td><td>Bruins (Panthers)</td><td>Arsenii Sergeev</td></tr>
<tr><td>180</td><td>Senators (Maple Leafs)</td><td>Carl Lindbom</td></tr>
<tr><td>181</td><td>Kings (Ducks)</td><td>Tyson Galloway</td></tr>
<tr><td>182</td><td>Devils (Stars)</td><td>Ilya Safonov</td></tr>
<tr><td>183</td><td>Senators (Oilers)</td><td>Kyle Kukkonen</td></tr>
<tr><td>184</td><td>Blackhawks (Lightning)</td><td>Yegor Naumov</td></tr>
<tr><td>185</td><td>Blackhawks</td><td>Oskar Jellvik</td></tr>
<tr><td>186</td><td>Kraken (Sabres)</td><td>Nikita Quapp</td></tr>
<tr><td>187</td><td>Kraken (Coyotes)</td><td>Martin Rysavy</td></tr>
<tr><td>188</td><td>Kraken (Flames)</td><td>Ben Boyd</td></tr>
<tr><td>189</td><td>Kings (Predators)</td><td>Jack Beck</td></tr>
<tr><td>190</td><td>Blackhawks (Flyers)</td><td>Nikita Novikov</td></tr>
<tr><td>191</td><td>Senators (Canucks)</td><td>Shane Lachance</td></tr>
<tr><td>192</td><td>Flames (Bruins)</td><td>Theo Jacobsson</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #7</b></td></tr>
<tr><td>193</td><td>Avalanche (Hurricanes)</td><td>Daniil Pylenkov</td></tr>
<tr><td>194</td><td>Bruins (Penguins)</td><td>Joaquim Lemay</td></tr>
<tr><td>195</td><td>Bruins (Kraken)</td><td>Ivan Vorobyov</td></tr>
<tr><td>196</td><td>Bruins (Rangers)</td><td>Ty Gallagher</td></tr>
<tr><td>197</td><td>Bruins (Capitals)</td><td>Kirill Tankov</td></tr>
<tr><td>198</td><td>Kraken (Blues)</td><td>Evgenii Kashnikov</td></tr>
<tr><td>199</td><td>Kraken (Wild)</td><td>Dru Krebs</td></tr>
<tr><td>200</td><td>Avalanche</td><td>William von Barnekow-Lofberg</td></tr>
<tr><td>201</td><td>Rangers (Senators)</td><td>Jaroslav Chmelar</td></tr>
<tr><td>202</td><td>Kraken (Golden Knights)</td><td>Jakub Kos</td></tr>
<tr><td>203</td><td>Red Wings</td><td>Cal Thomas</td></tr>
<tr><td>204</td><td>Bruins (Devils)</td><td>Albert Sjoberg</td></tr>
<tr><td>205</td><td>Bruins (Canadiens)</td><td>Robert Flinton</td></tr>
<tr><td>206</td><td>Oilers (Sharks)</td><td>Andre Gasseau</td></tr>
<tr><td>207</td><td>Bruins (Jets)</td><td>Ethan Samson</td></tr>
<tr><td>208</td><td>Avalanche (Kings)</td><td>Zakhar Bardakov</td></tr>
<tr><td>209</td><td>Senators (Islanders)</td><td>Justin Janicke</td></tr>
<tr><td>210</td><td>Oilers (Blue Jackets)</td><td>Chandler Romeo</td></tr>
<tr><td>211</td><td>Bruins (Panthers)</td><td>Lucas Ciona</td></tr>
<tr><td>212</td><td>Senators (Maple Leafs)</td><td>Lucas Forsell</td></tr>
<tr><td>213</td><td>Bruins (Ducks)</td><td>Tyson Kozak</td></tr>
<tr><td>214</td><td>Stars</td><td>Ryan McCleary</td></tr>
<tr><td>215</td><td>Stars (Oilers)</td><td>Owen McLaughlin</td></tr>
<tr><td>216</td><td>Bruins (Lightning)</td><td>Braden Hache</td></tr>
<tr><td>217</td><td>Flames (Blackhawks)</td><td>Jalen Luypen</td></tr>
<tr><td>218</td><td>Kraken (Sabres)</td><td>Connor Kelley</td></tr>
<tr><td>219</td><td>Senators (Coyotes)</td><td>Maximus Wanner</td></tr>
<tr><td>220</td><td>Flames</td><td>Tomas Machu</td></tr>
<tr><td>221</td><td>Predators</td><td>Daniel Laatsch</td></tr>
<tr><td>222</td><td>Bruins (Flyers)</td><td>Hank Kempf</td></tr>
<tr><td>223</td><td>Kings (Canucks)</td><td>Samuel Lipkin</td></tr>
<tr><td>224</td><td>Flames (Bruins)</td><td></td></tr>
</tbody></table><br /><h1 class="STHSEntryDraft_AvailableProspect">Availables Prospect</h1>
<?php include "Footer.php";?>
