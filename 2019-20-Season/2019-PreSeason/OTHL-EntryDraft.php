<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Entry Draft</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.1.6.6" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="OTHL.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
<tr><td>1</td><td>Carolina Hurricanes</td><td>Kaapo Kakko</td></tr>
<tr><td>2</td><td>Carolina Hurricanes (Philadelphia Flyers)</td><td>Jack Hughes</td></tr>
<tr><td>3</td><td>Philadelphia Flyers (St. Louis Blues)</td><td>Bowen Byram</td></tr>
<tr><td>4</td><td>Edmonton Oilers (Colorado Avalanche)</td><td>Alex Turcotte</td></tr>
<tr><td>5</td><td>Colorado Avalanche (Tampa Bay Lightning)</td><td>Trevor Zegras</td></tr>
<tr><td>6</td><td>St. Louis Blues (Winnipeg Jets)</td><td>Vasili Podkolzin</td></tr>
<tr><td>7</td><td>New Jersey Devils (Montreal Canadiens)</td><td>Kirby Dach</td></tr>
<tr><td>8</td><td>Nashville Predators (Chicago Blackhawks)</td><td>Spencer Knight</td></tr>
<tr><td>9</td><td>Pittsburgh Penguins</td><td>Cole Caufield</td></tr>
<tr><td>10</td><td>Nashville Predators (Calgary Flames)</td><td>Dylan Cozens</td></tr>
<tr><td>11</td><td>Detroit Red Wings (Vancouver Canucks)</td><td>Philip Broberg</td></tr>
<tr><td>12</td><td>St. Louis Blues (San Jose Sharks)</td><td>Peyton Krebs</td></tr>
<tr><td>13</td><td>Anaheim Ducks (Columbus Blue Jackets)</td><td>Moritz Seider</td></tr>
<tr><td>14</td><td>Washington Capitals (Florida Panthers)</td><td>Alex Newhook</td></tr>
<tr><td>15</td><td>New Jersey Devils</td><td>Matthew Boldy</td></tr>
<tr><td>16</td><td>Nashville Predators</td><td>Ville Heinola</td></tr>
<tr><td>17</td><td>Nashville Predators (Anaheim Ducks)</td><td>Lassi Thomson</td></tr>
<tr><td>18</td><td>Vancouver Canucks (Detroit Red Wings)</td><td>Victor Soderstrom</td></tr>
<tr><td>19</td><td>Arizona Coyotes</td><td>Cam York</td></tr>
<tr><td>20</td><td>Nashville Predators (Toronto Maple Leafs)</td><td>Nils Hoglander</td></tr>
<tr><td>21</td><td>Toronto Maple Leafs (Buffalo Sabres)</td><td>Thomas Harley</td></tr>
<tr><td>22</td><td>Los Angeles Kings (Ottawa Senators)</td><td>Philip Tomasino</td></tr>
<tr><td>23</td><td>Los Angeles Kings</td><td>Tobias Bjornfot</td></tr>
<tr><td>24</td><td>Anaheim Ducks (New York Rangers)</td><td>Samuel Poulin</td></tr>
<tr><td>25</td><td>Washington Capitals (Minnesota Wild)</td><td>Arthur Kaliyev</td></tr>
<tr><td>26</td><td>Minnesota Wild (Edmonton Oilers)</td><td>Ryan Suzuki</td></tr>
<tr><td>27</td><td>Los Angeles Kings (New York Islanders)</td><td>Connor McMichael</td></tr>
<tr><td>28</td><td>Washington Capitals</td><td>Jakob Pelletier</td></tr>
<tr><td>29</td><td>Dallas Stars</td><td>Nolan Foote</td></tr>
<tr><td>30</td><td>Vegas Golden Knights</td><td>Brayden Tracey</td></tr>
<tr><td>31</td><td>Anaheim Ducks (Boston Bruins)</td><td>Simon Holmstrom</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #2</b></td></tr>
<tr><td>32</td><td>Calgary Flames (St. Louis Blues)</td><td>Raphael Lavoie</td></tr>
<tr><td>33</td><td>Edmonton Oilers (Carolina Hurricanes)</td><td>John Beecher</td></tr>
<tr><td>34</td><td>Edmonton Oilers (Colorado Avalanche)</td><td>Antti Tuomisto</td></tr>
<tr><td>35</td><td>Edmonton Oilers (Philadelphia Flyers)</td><td>Shane Pinto</td></tr>
<tr><td>36</td><td>Washington Capitals (Winnipeg Jets)</td><td>Samuel Fagemo</td></tr>
<tr><td>37</td><td>Pittsburgh Penguins (Montreal Canadiens)</td><td>Brett Leason</td></tr>
<tr><td>38</td><td>St. Louis Blues (Chicago Blackhawks)</td><td>Bobby Brink</td></tr>
<tr><td>39</td><td>Calgary Flames (Tampa Bay Lightning)</td><td>Nick Robertson</td></tr>
<tr><td>40</td><td>Pittsburgh Penguins</td><td>Pyotr Kochetkov</td></tr>
<tr><td>41</td><td>Colorado Avalanche (Calgary Flames)</td><td>Ryan Johnson</td></tr>
<tr><td>42</td><td>Carolina Hurricanes (Vancouver Canucks)</td><td>Egor Afanasyev</td></tr>
<tr><td>43</td><td>Buffalo Sabres (San Jose Sharks)</td><td>Matthew Robertson</td></tr>
<tr><td>44</td><td>St. Louis Blues (Columbus Blue Jackets)</td><td>Nikita Alexandrov</td></tr>
<tr><td>45</td><td>Carolina Hurricanes (Florida Panthers)</td><td>Vladislav Firstov</td></tr>
<tr><td>46</td><td>New Jersey Devils</td><td>Mads Sogaard</td></tr>
<tr><td>47</td><td>Washington Capitals (Nashville Predators)</td><td>Jamieson Rees</td></tr>
<tr><td>48</td><td>Toronto Maple Leafs (Anaheim Ducks)</td><td>Vladislav Kolyachonok</td></tr>
<tr><td>49</td><td>Vancouver Canucks (Detroit Red Wings)</td><td>Drew Helleson</td></tr>
<tr><td>50</td><td>Carolina Hurricanes (Arizona Coyotes)</td><td>Robert Mastrosimone</td></tr>
<tr><td>51</td><td>Colorado Avalanche (Toronto Maple Leafs)</td><td>Pavel Dorofeyev</td></tr>
<tr><td>52</td><td>Toronto Maple Leafs (Buffalo Sabres)</td><td>Alex Vlasic</td></tr>
<tr><td>53</td><td>Carolina Hurricanes (Ottawa Senators)</td><td>Kaedan Korczak</td></tr>
<tr><td>54</td><td>Los Angeles Kings</td><td>Jackson LaCombe</td></tr>
<tr><td>55</td><td>New York Islanders (New York Rangers)</td><td>Matthew Stienburg</td></tr>
<tr><td>56</td><td>Carolina Hurricanes (Minnesota Wild)</td><td>Patrik Puistola</td></tr>
<tr><td>57</td><td>Minnesota Wild (Edmonton Oilers)</td><td>Albin Grewe</td></tr>
<tr><td>58</td><td>Chicago Blackhawks (New York Islanders)</td><td>Dillon Hamaliuk</td></tr>
<tr><td>59</td><td>Calgary Flames (Washington Capitals)</td><td>Artemi Kniazev</td></tr>
<tr><td>60</td><td>Dallas Stars</td><td>Hunter Jones</td></tr>
<tr><td>61</td><td>Vegas Golden Knights</td><td>Samuel Bolduc</td></tr>
<tr><td>62</td><td>Nashville Predators (Boston Bruins)</td><td>Nathan Legare</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #3</b></td></tr>
<tr><td>63</td><td>Toronto Maple Leafs (St. Louis Blues)</td><td>Ilya Nikolaev</td></tr>
<tr><td>64</td><td>Minnesota Wild (Carolina Hurricanes)</td><td>Karl Henriksson</td></tr>
<tr><td>65</td><td>Colorado Avalanche</td><td>Jayden Struble</td></tr>
<tr><td>66</td><td>Carolina Hurricanes (Philadelphia Flyers)</td><td>Maxim Cajkovic</td></tr>
<tr><td>67</td><td>Carolina Hurricanes (Winnipeg Jets)</td><td>Alex Beaucage</td></tr>
<tr><td>68</td><td>St. Louis Blues (Montreal Canadiens)</td><td>Anttoni Honka</td></tr>
<tr><td>69</td><td>Carolina Hurricanes (Chicago Blackhawks)</td><td>Albert Johansson</td></tr>
<tr><td>70</td><td>Los Angeles Kings (Tampa Bay Lightning)</td><td>Simon Lundmark</td></tr>
<tr><td>71</td><td>Edmonton Oilers (Pittsburgh Penguins)</td><td>Lukas Parik</td></tr>
<tr><td>72</td><td>Washington Capitals (Calgary Flames)</td><td>Ronnie Attard</td></tr>
<tr><td>73</td><td>Carolina Hurricanes (Vancouver Canucks)</td><td>Mikko Kokkonen</td></tr>
<tr><td>74</td><td>Carolina Hurricanes (San Jose Sharks)</td><td>Daniil Misyul</td></tr>
<tr><td>75</td><td>Edmonton Oilers (Columbus Blue Jackets)</td><td>John Farinacci</td></tr>
<tr><td>76</td><td>Los Angeles Kings (Florida Panthers)</td><td>Aliaksei Protas</td></tr>
<tr><td>77</td><td>Vancouver Canucks (New Jersey Devils)</td><td>Mattias Norlinder</td></tr>
<tr><td>78</td><td>Vegas Golden Knights (Nashville Predators)</td><td>Adam Beckman</td></tr>
<tr><td>79</td><td>New Jersey Devils (Anaheim Ducks)</td><td>Nikita Okhotyuk</td></tr>
<tr><td>80</td><td>Pittsburgh Penguins (Detroit Red Wings)</td><td>Alexander Campbell</td></tr>
<tr><td>81</td><td>Vegas Golden Knights (Arizona Coyotes)</td><td>Graeme Clarke</td></tr>
<tr><td>82</td><td>Toronto Maple Leafs</td><td>Layton Ahac</td></tr>
<tr><td>83</td><td>Buffalo Sabres</td><td>Ilya Konovalov</td></tr>
<tr><td>84</td><td>Colorado Avalanche (Ottawa Senators)</td><td>Michael Vukojevic</td></tr>
<tr><td>85</td><td>Minnesota Wild (Los Angeles Kings)</td><td>Zac Jones</td></tr>
<tr><td>86</td><td>New Jersey Devils (New York Rangers)</td><td>Gianni Fairbrother</td></tr>
<tr><td>87</td><td>Carolina Hurricanes (Minnesota Wild)</td><td>Ethan Keppen</td></tr>
<tr><td>88</td><td>Vegas Golden Knights (Edmonton Oilers)</td><td>Jordan Spence</td></tr>
<tr><td>89</td><td>Los Angeles Kings (New York Islanders)</td><td>Colten Ellis</td></tr>
<tr><td>90</td><td>St. Louis Blues (Washington Capitals)</td><td>Henri Nikkanen</td></tr>
<tr><td>91</td><td>New Jersey Devils (Dallas Stars)</td><td>Harrison Blaisdell</td></tr>
<tr><td>92</td><td>Vegas Golden Knights</td><td>Quinn Olson</td></tr>
<tr><td>93</td><td>Boston Bruins</td><td>Erik Portillo</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #4</b></td></tr>
<tr><td>94</td><td>Boston Bruins (St. Louis Blues)</td><td>Matias Maccelli</td></tr>
<tr><td>95</td><td>Vegas Golden Knights (Carolina Hurricanes)</td><td>Ethan Phillips</td></tr>
<tr><td>96</td><td>Boston Bruins (Colorado Avalanche)</td><td>Matej Blumel</td></tr>
<tr><td>97</td><td>Boston Bruins (Philadelphia Flyers)</td><td>Michal Teply</td></tr>
<tr><td>98</td><td>Winnipeg Jets</td><td>Hugo Alnefelt</td></tr>
<tr><td>99</td><td>Chicago Blackhawks (Montreal Canadiens)</td><td>Yegor Spiridonov</td></tr>
<tr><td>100</td><td>Boston Bruins (Chicago Blackhawks)</td><td>John Ludvig</td></tr>
<tr><td>101</td><td>Boston Bruins (Tampa Bay Lightning)</td><td>Lucas Feuk</td></tr>
<tr><td>102</td><td>Vegas Golden Knights (Pittsburgh Penguins)</td><td>Mason Millman</td></tr>
<tr><td>103</td><td>Toronto Maple Leafs (Calgary Flames)</td><td>Ryder Donovan</td></tr>
<tr><td>104</td><td>Vegas Golden Knights (Vancouver Canucks)</td><td>Mikhail Abramov</td></tr>
<tr><td>105</td><td>Washington Capitals (San Jose Sharks)</td><td>Henry Thrun</td></tr>
<tr><td>106</td><td>Washington Capitals (Columbus Blue Jackets)</td><td>Tuukka Tieksola</td></tr>
<tr><td>107</td><td>New Jersey Devils (Florida Panthers)</td><td>Domenick Fensore</td></tr>
<tr><td>108</td><td>Boston Bruins (New Jersey Devils)</td><td>Leevi Aaltonen</td></tr>
<tr><td>109</td><td>New York Rangers (Nashville Predators)</td><td>Matvey Guskov</td></tr>
<tr><td>110</td><td>New York Rangers (Anaheim Ducks)</td><td>Henry Rybinski</td></tr>
<tr><td>111</td><td>Buffalo Sabres (Detroit Red Wings)</td><td>Marshall Warren</td></tr>
<tr><td>112</td><td>Arizona Coyotes</td><td>Alexandr Darin</td></tr>
<tr><td>113</td><td>Minnesota Wild (Toronto Maple Leafs)</td><td>Antti Saarela</td></tr>
<tr><td>114</td><td>Los Angeles Kings (Buffalo Sabres)</td><td>Mason Primeau</td></tr>
<tr><td>115</td><td>Washington Capitals (Ottawa Senators)</td><td>Filip Cederqvist</td></tr>
<tr><td>116</td><td>Washington Capitals (Los Angeles Kings)</td><td>Tyce Thompson</td></tr>
<tr><td>117</td><td>Nashville Predators (New York Rangers)</td><td>Dustin Wolf</td></tr>
<tr><td>118</td><td>Minnesota Wild</td><td>Aaron Huglen</td></tr>
<tr><td>119</td><td>Vegas Golden Knights (Edmonton Oilers)</td><td>Sasha Mutala</td></tr>
<tr><td>120</td><td>New York Islanders</td><td>Dmitry Voronkov</td></tr>
<tr><td>121</td><td>Washington Capitals</td><td>Viktor Lodin</td></tr>
<tr><td>122</td><td>Vancouver Canucks (Dallas Stars)</td><td>Cole Schwindt</td></tr>
<tr><td>123</td><td>Vegas Golden Knights</td><td>Nicholas Porco</td></tr>
<tr><td>124</td><td>Vegas Golden Knights (Boston Bruins)</td><td>Reece Newkirk</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #5</b></td></tr>
<tr><td>125</td><td>Winnipeg Jets (St. Louis Blues)</td><td>Marcus Kallionkieli</td></tr>
<tr><td>126</td><td>Philadelphia Flyers (Carolina Hurricanes)</td><td>Marc Del Gaizo</td></tr>
<tr><td>127</td><td>Colorado Avalanche</td><td>Cade Webber</td></tr>
<tr><td>128</td><td>Washington Capitals (Philadelphia Flyers)</td><td>Carter Berger</td></tr>
<tr><td>129</td><td>Winnipeg Jets</td><td>Judd Caulfield</td></tr>
<tr><td>130</td><td>Calgary Flames (Montreal Canadiens)</td><td>Trent Miner</td></tr>
<tr><td>131</td><td>Calgary Flames (Chicago Blackhawks)</td><td>Arseny Gritsyuk</td></tr>
<tr><td>132</td><td>Carolina Hurricanes (Tampa Bay Lightning)</td><td>Semyon Chystyakov</td></tr>
<tr><td>133</td><td>Minnesota Wild (Pittsburgh Penguins)</td><td>Eric Ciccolini</td></tr>
<tr><td>134</td><td>Buffalo Sabres (Calgary Flames)</td><td>Rhett Pitlick</td></tr>
<tr><td>135</td><td>Columbus Blue Jackets (Vancouver Canucks)</td><td>Filip Lindberg</td></tr>
<tr><td>136</td><td>Vancouver Canucks (San Jose Sharks)</td><td>Owen Lindmark</td></tr>
<tr><td>137</td><td>Chicago Blackhawks (Columbus Blue Jackets)</td><td>Aku Raty</td></tr>
<tr><td>138</td><td>Buffalo Sabres (Florida Panthers)</td><td>Isaiah Saville</td></tr>
<tr><td>139</td><td>New Jersey Devils</td><td>Mark Kastelic</td></tr>
<tr><td>140</td><td>Buffalo Sabres (Nashville Predators)</td><td>Patrick Moynihan</td></tr>
<tr><td>141</td><td>Edmonton Oilers (Anaheim Ducks)</td><td>Eric Hjorth</td></tr>
<tr><td>142</td><td>Detroit Red Wings</td><td>Nikola Pasic</td></tr>
<tr><td>143</td><td>Arizona Coyotes</td><td>Samuel Sjolund</td></tr>
<tr><td>144</td><td>Buffalo Sabres (Toronto Maple Leafs)</td><td>Trevor Janicke</td></tr>
<tr><td>145</td><td>Buffalo Sabres</td><td>Kirill Slepets</td></tr>
<tr><td>146</td><td>Buffalo Sabres (Ottawa Senators)</td><td>Frederik Nissen</td></tr>
<tr><td>147</td><td>Buffalo Sabres (Los Angeles Kings)</td><td>Ethan Haider</td></tr>
<tr><td>148</td><td>Buffalo Sabres (New York Rangers)</td><td>Matias Mantykivi</td></tr>
<tr><td>149</td><td>Buffalo Sabres (Minnesota Wild)</td><td>Case McCarthy</td></tr>
<tr><td>150</td><td>Buffalo Sabres (Edmonton Oilers)</td><td>Blake Murray</td></tr>
<tr><td>151</td><td>Buffalo Sabres (New York Islanders)</td><td>Valentin Nussbaumer</td></tr>
<tr><td>152</td><td>Buffalo Sabres (Washington Capitals)</td><td>Arturs Silovs</td></tr>
<tr><td>153</td><td>Colorado Avalanche (Dallas Stars)</td><td>Nick Abruzzese</td></tr>
<tr><td>154</td><td>Minnesota Wild (Vegas Golden Knights)</td><td>Roman Bychkov</td></tr>
<tr><td>155</td><td>Arizona Coyotes (Boston Bruins)</td><td>Elmer Soderblom</td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #6</b></td></tr>
<tr><td>156</td><td>Vancouver Canucks (St. Louis Blues)</td><td>Roddy Ross</td></tr>
<tr><td>157</td><td>St. Louis Blues (Carolina Hurricanes)</td><td>Hunter Skinner</td></tr>
<tr><td>158</td><td>Edmonton Oilers (Colorado Avalanche)</td><td>Maxwell Crozier</td></tr>
<tr><td>159</td><td>Boston Bruins (Philadelphia Flyers)</td><td>Egor Serdyuk</td></tr>
<tr><td>160</td><td>Minnesota Wild (Winnipeg Jets)</td><td>Kim Nousiainen</td></tr>
<tr><td>161</td><td>St. Louis Blues (Montreal Canadiens)</td><td>Jacob Leguerrier</td></tr>
<tr><td>162</td><td>Nashville Predators (Chicago Blackhawks)</td><td>Felix Bibeau</td></tr>
<tr><td>163</td><td>Tampa Bay Lightning</td><td>Jack Malone</td></tr>
<tr><td>164</td><td>Pittsburgh Penguins</td><td>Cooper Moore</td></tr>
<tr><td>165</td><td>New York Islanders (Calgary Flames)</td><td>Martin Has</td></tr>
<tr><td>166</td><td>Columbus Blue Jackets (Vancouver Canucks)</td><td>Luka Burzan</td></tr>
<tr><td>167</td><td>Calgary Flames (San Jose Sharks)</td><td>Tomas Mazura</td></tr>
<tr><td>168</td><td>Columbus Blue Jackets</td><td>Aidan Mcdonough</td></tr>
<tr><td>169</td><td>Toronto Maple Leafs (Florida Panthers)</td><td>Mike Koster</td></tr>
<tr><td>170</td><td>Calgary Flames (New Jersey Devils)</td><td>Cole Moberg</td></tr>
<tr><td>171</td><td>Nashville Predators</td><td></td></tr>
<tr><td>172</td><td>Edmonton Oilers (Anaheim Ducks)</td><td></td></tr>
<tr><td>173</td><td>Detroit Red Wings</td><td></td></tr>
<tr><td>174</td><td>Chicago Blackhawks (Arizona Coyotes)</td><td></td></tr>
<tr><td>175</td><td>Toronto Maple Leafs</td><td></td></tr>
<tr><td>176</td><td>Detroit Red Wings (Buffalo Sabres)</td><td></td></tr>
<tr><td>177</td><td>Columbus Blue Jackets (Ottawa Senators)</td><td></td></tr>
<tr><td>178</td><td>Chicago Blackhawks (Los Angeles Kings)</td><td></td></tr>
<tr><td>179</td><td>Los Angeles Kings (New York Rangers)</td><td></td></tr>
<tr><td>180</td><td>Chicago Blackhawks (Minnesota Wild)</td><td></td></tr>
<tr><td>181</td><td>Pittsburgh Penguins (Edmonton Oilers)</td><td></td></tr>
<tr><td>182</td><td>New York Islanders</td><td></td></tr>
<tr><td>183</td><td>Arizona Coyotes (Washington Capitals)</td><td></td></tr>
<tr><td>184</td><td>Vancouver Canucks (Dallas Stars)</td><td></td></tr>
<tr><td>185</td><td>Tampa Bay Lightning (Vegas Golden Knights)</td><td></td></tr>
<tr><td>186</td><td>New Jersey Devils (Boston Bruins)</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #7</b></td></tr>
<tr><td>187</td><td>Philadelphia Flyers (St. Louis Blues)</td><td></td></tr>
<tr><td>188</td><td>Philadelphia Flyers (Carolina Hurricanes)</td><td></td></tr>
<tr><td>189</td><td>Philadelphia Flyers (Colorado Avalanche)</td><td></td></tr>
<tr><td>190</td><td>Philadelphia Flyers</td><td></td></tr>
<tr><td>191</td><td>Philadelphia Flyers (Winnipeg Jets)</td><td></td></tr>
<tr><td>192</td><td>Philadelphia Flyers (Montreal Canadiens)</td><td></td></tr>
<tr><td>193</td><td>Chicago Blackhawks</td><td></td></tr>
<tr><td>194</td><td>Chicago Blackhawks (Tampa Bay Lightning)</td><td></td></tr>
<tr><td>195</td><td>Philadelphia Flyers (Pittsburgh Penguins)</td><td></td></tr>
<tr><td>196</td><td>Philadelphia Flyers (Calgary Flames)</td><td></td></tr>
<tr><td>197</td><td>Philadelphia Flyers (Vancouver Canucks)</td><td></td></tr>
<tr><td>198</td><td>St. Louis Blues (San Jose Sharks)</td><td></td></tr>
<tr><td>199</td><td>Philadelphia Flyers (Columbus Blue Jackets)</td><td></td></tr>
<tr><td>200</td><td>Philadelphia Flyers (Florida Panthers)</td><td></td></tr>
<tr><td>201</td><td>Chicago Blackhawks (New Jersey Devils)</td><td></td></tr>
<tr><td>202</td><td>Philadelphia Flyers (Nashville Predators)</td><td></td></tr>
<tr><td>203</td><td>Philadelphia Flyers (Anaheim Ducks)</td><td></td></tr>
<tr><td>204</td><td>Philadelphia Flyers (Detroit Red Wings)</td><td></td></tr>
<tr><td>205</td><td>Philadelphia Flyers (Arizona Coyotes)</td><td></td></tr>
<tr><td>206</td><td>Toronto Maple Leafs</td><td></td></tr>
<tr><td>207</td><td>Philadelphia Flyers (Buffalo Sabres)</td><td></td></tr>
<tr><td>208</td><td>Philadelphia Flyers (Ottawa Senators)</td><td></td></tr>
<tr><td>209</td><td>Philadelphia Flyers (Los Angeles Kings)</td><td></td></tr>
<tr><td>210</td><td>Philadelphia Flyers (New York Rangers)</td><td></td></tr>
<tr><td>211</td><td>Toronto Maple Leafs (Minnesota Wild)</td><td></td></tr>
<tr><td>212</td><td>Philadelphia Flyers (Edmonton Oilers)</td><td></td></tr>
<tr><td>213</td><td>New York Islanders</td><td></td></tr>
<tr><td>214</td><td>Chicago Blackhawks (Washington Capitals)</td><td></td></tr>
<tr><td>215</td><td>Chicago Blackhawks (Dallas Stars)</td><td></td></tr>
<tr><td>216</td><td>St. Louis Blues (Vegas Golden Knights)</td><td></td></tr>
<tr><td>217</td><td>Winnipeg Jets (Boston Bruins)</td><td></td></tr>
</tbody></table><br /><h1 class="STHSEntryDraft_AvailableProspect">Availables Prospect</h1>
Adam Edstrom<br />
Andre Lee<br />
Anthony Romano<br />
Arsen Khisamutdinov<br />
Arvid Costmar<br />
Axel Bergkvist<br />
Ben Brinkman<br />
Braden Doyle<br />
Bryce Brodzinski<br />
Carson Focht<br />
Carter Gylander<br />
Cole Brady<br />
Cole Coskey<br />
Danil Savunov<br />
Dominic Basse<br />
Greg Meireles<br />
Gustav Berglund<br />
Isak Walther<br />
Jake Schmaltz<br />
Jeremy Michel<br />
Josh Nodler<br />
Juuso Parssinen<br />
Kalle Loponen<br />
Karel Plasek<br />
Keean Washkurak<br />
Kevin Wall<br />
Kieran Ruscheinski<br />
Kirill Tyutyayev<br />
Logan Neaton<br />
Lukas Rousek<br />
Massimo Rizzo<br />
Mathew Hill<br />
Matthew Wedman<br />
Maxence Guenette<br />
Maxim Denezhkin<br />
McKade Webster<br />
Mikhail Shalagin<br />
Nikita Nesterenko<br />
Quinn Schmiemann<br />
Rafael Harvey-Pinard<br />
Santeri Airola<br />
Santeri Hatakka<br />
Timur Ibragimov<br />
Tyler Angle<br />
Vadim Zherenko<br />
Valtteri Puustinen<br />
Will Francis<br />
<?php include "Footer.php";?>
