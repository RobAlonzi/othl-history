<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Entry Draft</title>
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
<table class="STHSEntryDraft_MainTable">
<thead><tr><th class="STHSEntryDraft_Rank">Rank #</th><th class="STHSEntryDraft_Team">Team</th><th class="STHSEntryDraft_Pick">Pick</th></tr></thead><tbody>
<tr><td colspan="3" class="STHSCenter"><b>Round #1</b></td></tr>
<tr><td>1</td><td>Penguins</td><td></td></tr>
<tr><td>2</td><td>Hurricanes</td><td></td></tr>
<tr><td>3</td><td>Wild</td><td></td></tr>
<tr><td>4</td><td>Blues</td><td></td></tr>
<tr><td>5</td><td>Maple Leafs</td><td></td></tr>
<tr><td>6</td><td>Stars</td><td></td></tr>
<tr><td>7</td><td>Golden Knights</td><td></td></tr>
<tr><td>8</td><td>Avalanche</td><td></td></tr>
<tr><td>9</td><td>Canadiens (Senators)</td><td></td></tr>
<tr><td>10</td><td>Devils</td><td></td></tr>
<tr><td>11</td><td>Blue Jackets</td><td></td></tr>
<tr><td>12</td><td>Flames (Flyers)</td><td></td></tr>
<tr><td>13</td><td>Golden Knights (Red Wings)</td><td></td></tr>
<tr><td>14</td><td>Kings (Ducks)</td><td></td></tr>
<tr><td>15</td><td>Golden Knights (Kings)</td><td></td></tr>
<tr><td>16</td><td>Jets</td><td></td></tr>
<tr><td>17</td><td>Avalanche (Rangers)</td><td></td></tr>
<tr><td>18</td><td>Ducks (Lightning)</td><td></td></tr>
<tr><td>19</td><td>Wild (Canucks)</td><td></td></tr>
<tr><td>20</td><td>Golden Knights (Sharks)</td><td></td></tr>
<tr><td>21</td><td>Blackhawks</td><td></td></tr>
<tr><td>22</td><td>Oilers</td><td></td></tr>
<tr><td>23</td><td>Maple Leafs (Panthers)</td><td></td></tr>
<tr><td>24</td><td>Penguins (Canadiens)</td><td></td></tr>
<tr><td>25</td><td>Capitals</td><td></td></tr>
<tr><td>26</td><td>Islanders (Bruins)</td><td></td></tr>
<tr><td>27</td><td>Blues (Flames)</td><td></td></tr>
<tr><td>28</td><td>Rangers (Coyotes)</td><td></td></tr>
<tr><td>29</td><td>Wild (Islanders)</td><td></td></tr>
<tr><td>30</td><td>Blue Jackets (Sabres)</td><td></td></tr>
<tr><td>31</td><td>Predators</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #2</b></td></tr>
<tr><td>32</td><td>Penguins</td><td></td></tr>
<tr><td>33</td><td>Islanders (Hurricanes)</td><td></td></tr>
<tr><td>34</td><td>Blues</td><td></td></tr>
<tr><td>35</td><td>Maple Leafs</td><td></td></tr>
<tr><td>36</td><td>Stars</td><td></td></tr>
<tr><td>37</td><td>Wild</td><td></td></tr>
<tr><td>38</td><td>Sharks (Golden Knights)</td><td></td></tr>
<tr><td>39</td><td>Avalanche</td><td></td></tr>
<tr><td>40</td><td>Penguins (Senators)</td><td></td></tr>
<tr><td>41</td><td>Devils</td><td></td></tr>
<tr><td>42</td><td>Blue Jackets</td><td></td></tr>
<tr><td>43</td><td>Blues (Flyers)</td><td></td></tr>
<tr><td>44</td><td>Red Wings</td><td></td></tr>
<tr><td>45</td><td>Sharks (Ducks)</td><td></td></tr>
<tr><td>46</td><td>Maple Leafs (Kings)</td><td></td></tr>
<tr><td>47</td><td>Jets</td><td></td></tr>
<tr><td>48</td><td>Canadiens (Rangers)</td><td></td></tr>
<tr><td>49</td><td>Oilers (Lightning)</td><td></td></tr>
<tr><td>50</td><td>Hurricanes (Canucks)</td><td></td></tr>
<tr><td>51</td><td>Flames (Sharks)</td><td></td></tr>
<tr><td>52</td><td>Penguins (Blackhawks)</td><td></td></tr>
<tr><td>53</td><td>Blue Jackets (Oilers)</td><td></td></tr>
<tr><td>54</td><td>Sharks (Panthers)</td><td></td></tr>
<tr><td>55</td><td>Penguins (Canadiens)</td><td></td></tr>
<tr><td>56</td><td>Jets (Capitals)</td><td></td></tr>
<tr><td>57</td><td>Capitals (Bruins)</td><td></td></tr>
<tr><td>58</td><td>Flames</td><td></td></tr>
<tr><td>59</td><td>Rangers (Coyotes)</td><td></td></tr>
<tr><td>60</td><td>Capitals (Islanders)</td><td></td></tr>
<tr><td>61</td><td>Hurricanes (Sabres)</td><td></td></tr>
<tr><td>62</td><td>Predators</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #3</b></td></tr>
<tr><td>63</td><td>Hurricanes (Penguins)</td><td></td></tr>
<tr><td>64</td><td>Sabres (Hurricanes)</td><td></td></tr>
<tr><td>65</td><td>Blues</td><td></td></tr>
<tr><td>66</td><td>Maple Leafs</td><td></td></tr>
<tr><td>67</td><td>Canadiens (Stars)</td><td></td></tr>
<tr><td>68</td><td>Blue Jackets (Wild)</td><td></td></tr>
<tr><td>69</td><td>Hurricanes (Golden Knights)</td><td></td></tr>
<tr><td>70</td><td>Avalanche</td><td></td></tr>
<tr><td>71</td><td>Wild (Senators)</td><td></td></tr>
<tr><td>72</td><td>Devils</td><td></td></tr>
<tr><td>73</td><td>Kings (Blue Jackets)</td><td></td></tr>
<tr><td>74</td><td>Wild (Flyers)</td><td></td></tr>
<tr><td>75</td><td>Hurricanes (Red Wings)</td><td></td></tr>
<tr><td>76</td><td>Blues (Ducks)</td><td></td></tr>
<tr><td>77</td><td>Senators (Kings)</td><td></td></tr>
<tr><td>78</td><td>Kings (Jets)</td><td></td></tr>
<tr><td>79</td><td>Blue Jackets (Rangers)</td><td></td></tr>
<tr><td>80</td><td>Predators (Lightning)</td><td></td></tr>
<tr><td>81</td><td>Kings (Canucks)</td><td></td></tr>
<tr><td>82</td><td>Sharks</td><td></td></tr>
<tr><td>83</td><td>Sharks (Blackhawks)</td><td></td></tr>
<tr><td>84</td><td>Red Wings (Oilers)</td><td></td></tr>
<tr><td>85</td><td>Penguins (Panthers)</td><td></td></tr>
<tr><td>86</td><td>Wild (Canadiens)</td><td></td></tr>
<tr><td>87</td><td>Blue Jackets (Capitals)</td><td></td></tr>
<tr><td>88</td><td>Flames (Bruins)</td><td></td></tr>
<tr><td>89</td><td>Blue Jackets (Flames)</td><td></td></tr>
<tr><td>90</td><td>Kings (Coyotes)</td><td></td></tr>
<tr><td>91</td><td>Canucks (Islanders)</td><td></td></tr>
<tr><td>92</td><td>Predators (Sabres)</td><td></td></tr>
<tr><td>93</td><td>Predators</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #4</b></td></tr>
<tr><td>94</td><td>Penguins</td><td></td></tr>
<tr><td>95</td><td>Hurricanes</td><td></td></tr>
<tr><td>96</td><td>Sharks (Blues)</td><td></td></tr>
<tr><td>97</td><td>Blackhawks (Maple Leafs)</td><td></td></tr>
<tr><td>98</td><td>Oilers (Stars)</td><td></td></tr>
<tr><td>99</td><td>Islanders (Wild)</td><td></td></tr>
<tr><td>100</td><td>Kings (Golden Knights)</td><td></td></tr>
<tr><td>101</td><td>Avalanche</td><td></td></tr>
<tr><td>102</td><td>Bruins (Senators)</td><td></td></tr>
<tr><td>103</td><td>Oilers (Devils)</td><td></td></tr>
<tr><td>104</td><td>Blue Jackets</td><td></td></tr>
<tr><td>105</td><td>Blue Jackets (Flyers)</td><td></td></tr>
<tr><td>106</td><td>Oilers (Red Wings)</td><td></td></tr>
<tr><td>107</td><td>Blackhawks (Ducks)</td><td></td></tr>
<tr><td>108</td><td>Kings</td><td></td></tr>
<tr><td>109</td><td>Hurricanes (Jets)</td><td></td></tr>
<tr><td>110</td><td>Oilers (Rangers)</td><td></td></tr>
<tr><td>111</td><td>Coyotes (Lightning)</td><td></td></tr>
<tr><td>112</td><td>Wild (Canucks)</td><td></td></tr>
<tr><td>113</td><td>Kings (Sharks)</td><td></td></tr>
<tr><td>114</td><td>Hurricanes (Blackhawks)</td><td></td></tr>
<tr><td>115</td><td>Sabres (Oilers)</td><td></td></tr>
<tr><td>116</td><td>Red Wings (Panthers)</td><td></td></tr>
<tr><td>117</td><td>Panthers (Canadiens)</td><td></td></tr>
<tr><td>118</td><td>Senators (Capitals)</td><td></td></tr>
<tr><td>119</td><td>Kings (Bruins)</td><td></td></tr>
<tr><td>120</td><td>Devils (Flames)</td><td></td></tr>
<tr><td>121</td><td>Wild (Coyotes)</td><td></td></tr>
<tr><td>122</td><td>Kings (Islanders)</td><td></td></tr>
<tr><td>123</td><td>Islanders (Sabres)</td><td></td></tr>
<tr><td>124</td><td>Wild (Predators)</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #5</b></td></tr>
<tr><td>125</td><td>Sabres (Penguins)</td><td></td></tr>
<tr><td>126</td><td>Predators (Hurricanes)</td><td></td></tr>
<tr><td>127</td><td>Bruins (Blues)</td><td></td></tr>
<tr><td>128</td><td>Flames (Maple Leafs)</td><td></td></tr>
<tr><td>129</td><td>Oilers (Stars)</td><td></td></tr>
<tr><td>130</td><td>Wild</td><td></td></tr>
<tr><td>131</td><td>Ducks (Golden Knights)</td><td></td></tr>
<tr><td>132</td><td>Avalanche</td><td></td></tr>
<tr><td>133</td><td>Ducks (Senators)</td><td></td></tr>
<tr><td>134</td><td>Flames (Devils)</td><td></td></tr>
<tr><td>135</td><td>Wild (Blue Jackets)</td><td></td></tr>
<tr><td>136</td><td>Oilers (Flyers)</td><td></td></tr>
<tr><td>137</td><td>Oilers (Red Wings)</td><td></td></tr>
<tr><td>138</td><td>Islanders (Ducks)</td><td></td></tr>
<tr><td>139</td><td>Kings</td><td></td></tr>
<tr><td>140</td><td>Jets</td><td></td></tr>
<tr><td>141</td><td>Avalanche (Rangers)</td><td></td></tr>
<tr><td>142</td><td>Oilers (Lightning)</td><td></td></tr>
<tr><td>143</td><td>Bruins (Canucks)</td><td></td></tr>
<tr><td>144</td><td>Sharks</td><td></td></tr>
<tr><td>145</td><td>Flames (Blackhawks)</td><td></td></tr>
<tr><td>146</td><td>Oilers</td><td></td></tr>
<tr><td>147</td><td>Maple Leafs (Panthers)</td><td></td></tr>
<tr><td>148</td><td>Coyotes (Canadiens)</td><td></td></tr>
<tr><td>149</td><td>Blue Jackets (Capitals)</td><td></td></tr>
<tr><td>150</td><td>Red Wings (Bruins)</td><td></td></tr>
<tr><td>151</td><td>Blue Jackets (Flames)</td><td></td></tr>
<tr><td>152</td><td>Ducks (Coyotes)</td><td></td></tr>
<tr><td>153</td><td>Wild (Islanders)</td><td></td></tr>
<tr><td>154</td><td>Red Wings (Sabres)</td><td></td></tr>
<tr><td>155</td><td>Ducks (Predators)</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #6</b></td></tr>
<tr><td>156</td><td>Penguins</td><td></td></tr>
<tr><td>157</td><td>Blackhawks (Hurricanes)</td><td></td></tr>
<tr><td>158</td><td>Red Wings (Blues)</td><td></td></tr>
<tr><td>159</td><td>Maple Leafs</td><td></td></tr>
<tr><td>160</td><td>Oilers (Stars)</td><td></td></tr>
<tr><td>161</td><td>Wild</td><td></td></tr>
<tr><td>162</td><td>Canucks (Golden Knights)</td><td></td></tr>
<tr><td>163</td><td>Avalanche</td><td></td></tr>
<tr><td>164</td><td>Bruins (Senators)</td><td></td></tr>
<tr><td>165</td><td>Flames (Devils)</td><td></td></tr>
<tr><td>166</td><td>Blue Jackets</td><td></td></tr>
<tr><td>167</td><td>Maple Leafs (Flyers)</td><td></td></tr>
<tr><td>168</td><td>Maple Leafs (Red Wings)</td><td></td></tr>
<tr><td>169</td><td>Canucks (Ducks)</td><td></td></tr>
<tr><td>170</td><td>Kings</td><td></td></tr>
<tr><td>171</td><td>Oilers (Jets)</td><td></td></tr>
<tr><td>172</td><td>Bruins (Rangers)</td><td></td></tr>
<tr><td>173</td><td>Lightning</td><td></td></tr>
<tr><td>174</td><td>Flames (Canucks)</td><td></td></tr>
<tr><td>175</td><td>Sharks</td><td></td></tr>
<tr><td>176</td><td>Red Wings (Blackhawks)</td><td></td></tr>
<tr><td>177</td><td>Oilers</td><td></td></tr>
<tr><td>178</td><td>Stars (Panthers)</td><td></td></tr>
<tr><td>179</td><td>Jets (Canadiens)</td><td></td></tr>
<tr><td>180</td><td>Islanders (Capitals)</td><td></td></tr>
<tr><td>181</td><td>Jets (Bruins)</td><td></td></tr>
<tr><td>182</td><td>Flames</td><td></td></tr>
<tr><td>183</td><td>Kings (Coyotes)</td><td></td></tr>
<tr><td>184</td><td>Oilers (Islanders)</td><td></td></tr>
<tr><td>185</td><td>Bruins (Sabres)</td><td></td></tr>
<tr><td>186</td><td>Predators</td><td></td></tr>
<tr><td colspan="3" class="STHSCenter"><b>Round #7</b></td></tr>
<tr><td>187</td><td>Oilers (Penguins)</td><td></td></tr>
<tr><td>188</td><td>Blackhawks (Hurricanes)</td><td></td></tr>
<tr><td>189</td><td>Blues</td><td></td></tr>
<tr><td>190</td><td>Red Wings (Maple Leafs)</td><td></td></tr>
<tr><td>191</td><td>Flyers (Stars)</td><td></td></tr>
<tr><td>192</td><td>Flyers (Wild)</td><td></td></tr>
<tr><td>193</td><td>Ducks (Golden Knights)</td><td></td></tr>
<tr><td>194</td><td>Avalanche</td><td></td></tr>
<tr><td>195</td><td>Flyers (Senators)</td><td></td></tr>
<tr><td>196</td><td>Devils</td><td></td></tr>
<tr><td>197</td><td>Flyers (Blue Jackets)</td><td></td></tr>
<tr><td>198</td><td>Maple Leafs (Flyers)</td><td></td></tr>
<tr><td>199</td><td>Red Wings</td><td></td></tr>
<tr><td>200</td><td>Ducks</td><td></td></tr>
<tr><td>201</td><td>Oilers (Kings)</td><td></td></tr>
<tr><td>202</td><td>Jets</td><td></td></tr>
<tr><td>203</td><td>Flyers (Rangers)</td><td></td></tr>
<tr><td>204</td><td>Red Wings (Lightning)</td><td></td></tr>
<tr><td>205</td><td>Flyers (Canucks)</td><td></td></tr>
<tr><td>206</td><td>Flyers (Sharks)</td><td></td></tr>
<tr><td>207</td><td>Blackhawks</td><td></td></tr>
<tr><td>208</td><td>Flames (Oilers)</td><td></td></tr>
<tr><td>209</td><td>Flyers (Panthers)</td><td></td></tr>
<tr><td>210</td><td>Predators (Canadiens)</td><td></td></tr>
<tr><td>211</td><td>Predators (Capitals)</td><td></td></tr>
<tr><td>212</td><td>Flames (Bruins)</td><td></td></tr>
<tr><td>213</td><td>Jets (Flames)</td><td></td></tr>
<tr><td>214</td><td>Flames (Coyotes)</td><td></td></tr>
<tr><td>215</td><td>Islanders</td><td></td></tr>
<tr><td>216</td><td>Flyers (Sabres)</td><td></td></tr>
<tr><td>217</td><td>Predators</td><td></td></tr>
</tbody></table><br /><h1 class="STHSEntryDraft_AvailableProspect">Availables Prospect</h1>
<?php include "Footer.php";?>
