<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Team Records</title>
<script type="text/javascript" src="SMJHL-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Josh Sales - STHS - Version : 3.1.3.0" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="SMJHL-PRE.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"SMJHL-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"SMJHL-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 5; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#BritishIsles">British Isles</a> | <a href="#Canada">Canada</a> | <a href="#EasternEurope">Eastern Europe</a> | <a href="#Scandinavia">Scandinavia</a> | <a href="#TeamWorld">Team World</a> | <a href="#UnitedStatesofAmerica">United States of America</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamRecordsPro_BIS"><a id="BritishIsles">British Isles</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-PRE-ProTeamRoster.php#BritishIsles">Pro Team Roster</a> ]
[ <a href="SMJHL-PRE-ProTeamScoring.php#BritishIsles">Pro Team Scoring</a> ]
[ <a href="SMJHL-PRE-ProTeamLines.php#BritishIsles">Pro Team Lines</a> ]
[ <a href="SMJHL-PRE-ProTeamSchedule.php#BritishIsles">Pro Team Schedule</a> ]
[ <a href="SMJHL-PRE-ProTeamStats.php#BritishIsles">Pro Team Stats</a> ]
[ <a href="SMJHL-PRE-ProTeamStatsVS.php#BritishIsles">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BritishIsles');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BritishIsles" style="display: block;">
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>21</td><td>105</td><td>9</td><td></td></tr><tr><td>2</td><td>22</td><td>35</td><td>8</td><td></td></tr><tr><td>3</td><td>23</td><td>112</td><td>8</td><td></td></tr><tr><td>4</td><td>32</td><td>165</td><td>8</td><td></td></tr><tr><td>5</td><td>39</td><td>79</td><td>8</td><td></td></tr><tr><td>6</td><td>40</td><td>52</td><td>8</td><td></td></tr><tr><td>7</td><td>8</td><td>51</td><td>7</td><td></td></tr><tr><td>8</td><td>14</td><td>74</td><td>7</td><td></td></tr><tr><td>9</td><td>15</td><td>57</td><td>7</td><td></td></tr><tr><td>10</td><td>18</td><td>72</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>25</td><td>0</td><td>184</td><td></td></tr>
<tr><td>2</td><td>32</td><td>0</td><td>184</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>183</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>180</td><td></td></tr>
<tr><td>5</td><td>30</td><td>0</td><td>178</td><td></td></tr>
<tr><td>6</td><td>40</td><td>0</td><td>174</td><td></td></tr>
<tr><td>7</td><td>21</td><td>0</td><td>168</td><td></td></tr>
<tr><td>8</td><td>26</td><td>0</td><td>166</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>143</td><td></td></tr>
<tr><td>10</td><td>22</td><td>0</td><td>138</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>30</td><td></td></tr>
<tr><td>2</td><td>9</td><td>0</td><td>77</td><td></td></tr>
<tr><td>3</td><td>11</td><td>0</td><td>83</td><td></td></tr>
<tr><td>4</td><td>18</td><td>0</td><td>102</td><td></td></tr>
<tr><td>5</td><td>17</td><td>0</td><td>105</td><td></td></tr>
<tr><td>6</td><td>8</td><td>0</td><td>106</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>107</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>25</td><td>0</td><td>180</td><td></td></tr>
<tr><td>2</td><td>24</td><td>0</td><td>166</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>161</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>150</td><td></td></tr>
<tr><td>5</td><td>11</td><td>0</td><td>148</td><td></td></tr>
<tr><td>6</td><td>27</td><td>0</td><td>147</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>145</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>138</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>134</td><td></td></tr>
<tr><td>10</td><td>20</td><td>0</td><td>130</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>102</td><td></td></tr>
<tr><td>2</td><td>17</td><td>0</td><td>112</td><td></td></tr>
<tr><td>3</td><td>12</td><td>0</td><td>113</td><td></td></tr>
<tr><td>4</td><td>19</td><td>0</td><td>114</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>117</td><td></td></tr>
<tr><td>6</td><td>10</td><td>0</td><td>119</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>119</td><td></td></tr>
<tr><td>8</td><td>16</td><td>0</td><td>119</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>134</td><td></td></tr>
<tr><td>10</td><td>9</td><td>0</td><td>138</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>165</td><td>16</td><td></td></tr><tr><td>2</td><td>23</td><td>112</td><td>15</td><td></td></tr><tr><td>3</td><td>39</td><td>79</td><td>15</td><td></td></tr><tr><td>4</td><td>40</td><td>52</td><td>15</td><td></td></tr><tr><td>5</td><td>21</td><td>21</td><td>14</td><td></td></tr><tr><td>6</td><td>21</td><td>105</td><td>14</td><td></td></tr><tr><td>7</td><td>24</td><td>141</td><td>14</td><td></td></tr><tr><td>8</td><td>25</td><td>148</td><td>14</td><td></td></tr><tr><td>9</td><td>29</td><td>123</td><td>14</td><td></td></tr><tr><td>10</td><td>34</td><td>157</td><td>14</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>331</td><td></td></tr>
<tr><td>2</td><td>25</td><td>0</td><td>329</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>323</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>321</td><td></td></tr>
<tr><td>5</td><td>21</td><td>0</td><td>305</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>304</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>299</td><td></td></tr>
<tr><td>8</td><td>19</td><td>0</td><td>249</td><td></td></tr>
<tr><td>9</td><td>23</td><td>0</td><td>248</td><td></td></tr>
<tr><td>10</td><td>22</td><td>0</td><td>242</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>47</td><td></td></tr>
<tr><td>2</td><td>9</td><td>0</td><td>117</td><td></td></tr>
<tr><td>3</td><td>11</td><td>0</td><td>124</td><td></td></tr>
<tr><td>4</td><td>8</td><td>0</td><td>161</td><td></td></tr>
<tr><td>5</td><td>17</td><td>0</td><td>178</td><td></td></tr>
<tr><td>6</td><td>15</td><td>0</td><td>190</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>195</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>165</td><td>24</td><td></td></tr><tr><td>2</td><td>21</td><td>105</td><td>23</td><td></td></tr><tr><td>3</td><td>23</td><td>112</td><td>23</td><td></td></tr><tr><td>4</td><td>39</td><td>79</td><td>23</td><td></td></tr><tr><td>5</td><td>40</td><td>52</td><td>23</td><td></td></tr><tr><td>6</td><td>21</td><td>21</td><td>21</td><td></td></tr><tr><td>7</td><td>22</td><td>35</td><td>21</td><td></td></tr><tr><td>8</td><td>24</td><td>141</td><td>21</td><td></td></tr><tr><td>9</td><td>25</td><td>148</td><td>21</td><td></td></tr><tr><td>10</td><td>29</td><td>123</td><td>21</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>515</td><td></td></tr>
<tr><td>2</td><td>25</td><td>0</td><td>513</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>506</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>501</td><td></td></tr>
<tr><td>5</td><td>30</td><td>0</td><td>482</td><td></td></tr>
<tr><td>6</td><td>40</td><td>0</td><td>474</td><td></td></tr>
<tr><td>7</td><td>21</td><td>0</td><td>473</td><td></td></tr>
<tr><td>8</td><td>26</td><td>0</td><td>465</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>386</td><td></td></tr>
<tr><td>10</td><td>19</td><td>0</td><td>385</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>77</td><td></td></tr>
<tr><td>2</td><td>9</td><td>0</td><td>194</td><td></td></tr>
<tr><td>3</td><td>11</td><td>0</td><td>207</td><td></td></tr>
<tr><td>4</td><td>8</td><td>0</td><td>267</td><td></td></tr>
<tr><td>5</td><td>17</td><td>0</td><td>283</td><td></td></tr>
<tr><td>6</td><td>15</td><td>0</td><td>301</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>302</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>25</td><td>16</td><td>50</td><td></td></tr><tr><td>2</td><td>17</td><td>96</td><td>49</td><td></td></tr><tr><td>3</td><td>32</td><td>117</td><td>49</td><td></td></tr><tr><td>4</td><td>31</td><td>173</td><td>48</td><td></td></tr><tr><td>5</td><td>32</td><td>105</td><td>48</td><td></td></tr><tr><td>6</td><td>31</td><td>70</td><td>47</td><td></td></tr><tr><td>7</td><td>41</td><td>10</td><td>47</td><td></td></tr><tr><td>8</td><td>29</td><td>52</td><td>46</td><td></td></tr><tr><td>9</td><td>31</td><td>86</td><td>46</td><td></td></tr><tr><td>10</td><td>31</td><td>196</td><td>45</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>1523</td><td></td></tr>
<tr><td>2</td><td>31</td><td>0</td><td>1521</td><td></td></tr>
<tr><td>3</td><td>40</td><td>0</td><td>1481</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>1468</td><td></td></tr>
<tr><td>5</td><td>25</td><td>0</td><td>1384</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>1374</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>1349</td><td></td></tr>
<tr><td>8</td><td>29</td><td>0</td><td>1326</td><td></td></tr>
<tr><td>9</td><td>27</td><td>0</td><td>1325</td><td></td></tr>
<tr><td>10</td><td>26</td><td>0</td><td>1246</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>714</td><td></td></tr>
<tr><td>2</td><td>11</td><td>0</td><td>893</td><td></td></tr>
<tr><td>3</td><td>18</td><td>0</td><td>930</td><td></td></tr>
<tr><td>4</td><td>12</td><td>0</td><td>951</td><td></td></tr>
<tr><td>5</td><td>22</td><td>0</td><td>971</td><td></td></tr>
<tr><td>6</td><td>16</td><td>0</td><td>996</td><td></td></tr>
<tr><td>7</td><td>8</td><td>0</td><td>1010</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>1019</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>9</td><td>74</td><td>23</td><td></td></tr><tr><td>2</td><td>9</td><td>118</td><td>22</td><td></td></tr><tr><td>3</td><td>11</td><td>100</td><td>21</td><td></td></tr><tr><td>4</td><td>15</td><td>11</td><td>21</td><td></td></tr><tr><td>5</td><td>15</td><td>32</td><td>21</td><td></td></tr><tr><td>6</td><td>9</td><td>39</td><td>20</td><td></td></tr><tr><td>7</td><td>10</td><td>12</td><td>20</td><td></td></tr><tr><td>8</td><td>10</td><td>78</td><td>20</td><td></td></tr><tr><td>9</td><td>9</td><td>96</td><td>19</td><td></td></tr><tr><td>10</td><td>9</td><td>114</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>9</td><td>0</td><td>474</td><td></td></tr>
<tr><td>2</td><td>10</td><td>0</td><td>441</td><td></td></tr>
<tr><td>3</td><td>24</td><td>0</td><td>418</td><td></td></tr>
<tr><td>4</td><td>28</td><td>0</td><td>406</td><td></td></tr>
<tr><td>5</td><td>15</td><td>0</td><td>399</td><td></td></tr>
<tr><td>6</td><td>11</td><td>0</td><td>384</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>343</td><td></td></tr>
<tr><td>8</td><td>8</td><td>0</td><td>323</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>19</td><td>0</td><td>259</td><td></td></tr>
<tr><td>2</td><td>22</td><td>0</td><td>271</td><td></td></tr>
<tr><td>3</td><td>21</td><td>0</td><td>274</td><td></td></tr>
<tr><td>4</td><td>18</td><td>0</td><td>276</td><td></td></tr>
<tr><td>5</td><td>14</td><td>0</td><td>306</td><td></td></tr>
<tr><td>6</td><td>20</td><td>0</td><td>311</td><td></td></tr>
<tr><td>7</td><td>16</td><td>0</td><td>321</td><td></td></tr>
<tr><td>8</td><td>8</td><td>0</td><td>323</td><td></td></tr>
<tr><td>9</td><td>17</td><td>0</td><td>338</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>343</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>15</td><td>0</td><td>1408</td><td></td></tr>
<tr><td>2</td><td>24</td><td>0</td><td>1340</td><td></td></tr>
<tr><td>3</td><td>37</td><td>0</td><td>1334</td><td></td></tr>
<tr><td>4</td><td>9</td><td>0</td><td>1296</td><td></td></tr>
<tr><td>5</td><td>34</td><td>0</td><td>1275</td><td></td></tr>
<tr><td>6</td><td>12</td><td>0</td><td>1223</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>1223</td><td></td></tr>
<tr><td>8</td><td>10</td><td>0</td><td>1164</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>1163</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>1161</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>18</td><td>0</td><td>930</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>934</td><td></td></tr>
<tr><td>3</td><td>21</td><td>0</td><td>958</td><td></td></tr>
<tr><td>4</td><td>19</td><td>0</td><td>992</td><td></td></tr>
<tr><td>5</td><td>22</td><td>0</td><td>997</td><td></td></tr>
<tr><td>6</td><td>17</td><td>0</td><td>1028</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>1048</td><td></td></tr>
<tr><td>8</td><td>11</td><td>0</td><td>1161</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>1163</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>1164</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>65</td><td>51</td><td></td></tr><tr><td>2</td><td>9</td><td>56</td><td>46</td><td></td></tr><tr><td>3</td><td>23</td><td>7</td><td>46</td><td></td></tr><tr><td>4</td><td>26</td><td>191</td><td>45</td><td></td></tr><tr><td>5</td><td>8</td><td>51</td><td>44</td><td></td></tr><tr><td>6</td><td>24</td><td>7</td><td>42</td><td></td></tr><tr><td>7</td><td>40</td><td>6</td><td>42</td><td></td></tr><tr><td>8</td><td>9</td><td>118</td><td>41</td><td></td></tr><tr><td>9</td><td>21</td><td>85</td><td>40</td><td></td></tr><tr><td>10</td><td>41</td><td>13</td><td>40</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>24</td><td>0</td><td>689</td><td></td></tr>
<tr><td>2</td><td>25</td><td>0</td><td>674</td><td></td></tr>
<tr><td>3</td><td>26</td><td>0</td><td>667</td><td></td></tr>
<tr><td>4</td><td>27</td><td>0</td><td>599</td><td></td></tr>
<tr><td>5</td><td>23</td><td>0</td><td>540</td><td></td></tr>
<tr><td>6</td><td>9</td><td>0</td><td>487</td><td></td></tr>
<tr><td>7</td><td>22</td><td>0</td><td>438</td><td></td></tr>
<tr><td>8</td><td>19</td><td>0</td><td>437</td><td></td></tr>
<tr><td>9</td><td>20</td><td>0</td><td>434</td><td></td></tr>
<tr><td>10</td><td>21</td><td>0</td><td>419</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>16</td><td>0</td><td>176</td><td></td></tr>
<tr><td>2</td><td>10</td><td>0</td><td>177</td><td></td></tr>
<tr><td>3</td><td>14</td><td>0</td><td>225</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>249</td><td></td></tr>
<tr><td>5</td><td>15</td><td>0</td><td>270</td><td></td></tr>
<tr><td>6</td><td>12</td><td>0</td><td>275</td><td></td></tr>
<tr><td>7</td><td>8</td><td>0</td><td>370</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>487</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>94</td><td>50</td><td></td></tr><tr><td>2</td><td>8</td><td>154</td><td>50</td><td></td></tr><tr><td>3</td><td>8</td><td>110</td><td>45</td><td></td></tr><tr><td>4</td><td>9</td><td>68</td><td>43</td><td></td></tr><tr><td>5</td><td>8</td><td>83</td><td>42</td><td></td></tr><tr><td>6</td><td>8</td><td>98</td><td>41</td><td></td></tr><tr><td>7</td><td>8</td><td>118</td><td>40</td><td></td></tr><tr><td>8</td><td>11</td><td>42</td><td>40</td><td></td></tr><tr><td>9</td><td>8</td><td>106</td><td>38</td><td></td></tr><tr><td>10</td><td>9</td><td>47</td><td>38</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>1164</td><td></td></tr>
<tr><td>2</td><td>9</td><td>0</td><td>965</td><td></td></tr>
<tr><td>3</td><td>24</td><td>0</td><td>964</td><td></td></tr>
<tr><td>4</td><td>26</td><td>0</td><td>910</td><td></td></tr>
<tr><td>5</td><td>29</td><td>0</td><td>909</td><td></td></tr>
<tr><td>6</td><td>11</td><td>0</td><td>906</td><td></td></tr>
<tr><td>7</td><td>17</td><td>0</td><td>902</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>899</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>890</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>860</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>22</td><td>0</td><td>645</td><td></td></tr>
<tr><td>2</td><td>18</td><td>0</td><td>677</td><td></td></tr>
<tr><td>3</td><td>21</td><td>0</td><td>681</td><td></td></tr>
<tr><td>4</td><td>19</td><td>0</td><td>684</td><td></td></tr>
<tr><td>5</td><td>20</td><td>0</td><td>690</td><td></td></tr>
<tr><td>6</td><td>10</td><td>0</td><td>732</td><td></td></tr>
<tr><td>7</td><td>16</td><td>0</td><td>774</td><td></td></tr>
<tr><td>8</td><td>14</td><td>0</td><td>860</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>890</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>899</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>34</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>8</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>9</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>12</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>14</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>11</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>14</td><td>0</td><td>30.80%</td><td></td></tr>
<tr><td>2</td><td>24</td><td>0</td><td>28.10%</td><td></td></tr>
<tr><td>3</td><td>40</td><td>0</td><td>27.70%</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>27.30%</td><td></td></tr>
<tr><td>5</td><td>19</td><td>0</td><td>26.80%</td><td></td></tr>
<tr><td>6</td><td>18</td><td>0</td><td>24.90%</td><td></td></tr>
<tr><td>7</td><td>23</td><td>0</td><td>23.90%</td><td></td></tr>
<tr><td>8</td><td>21</td><td>0</td><td>23.00%</td><td></td></tr>
<tr><td>9</td><td>17</td><td>0</td><td>22.90%</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>20.30%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>11</td><td>0</td><td>90.60%</td><td></td></tr>
<tr><td>2</td><td>19</td><td>0</td><td>84.80%</td><td></td></tr>
<tr><td>3</td><td>26</td><td>0</td><td>84.80%</td><td></td></tr>
<tr><td>4</td><td>29</td><td>0</td><td>84.60%</td><td></td></tr>
<tr><td>5</td><td>9</td><td>0</td><td>84.50%</td><td></td></tr>
<tr><td>6</td><td>28</td><td>0</td><td>83.50%</td><td></td></tr>
<tr><td>7</td><td>22</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>8</td><td>20</td><td>0</td><td>82.10%</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>10</td><td>8</td><td>0</td><td>81.00%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>6.10%</td><td></td></tr>
<tr><td>2</td><td>9</td><td>0</td><td>7.40%</td><td></td></tr>
<tr><td>3</td><td>8</td><td>0</td><td>10.30%</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>10.30%</td><td></td></tr>
<tr><td>5</td><td>27</td><td>0</td><td>11.20%</td><td></td></tr>
<tr><td>6</td><td>15</td><td>0</td><td>17.20%</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>19.30%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>70.70%</td><td></td></tr>
<tr><td>2</td><td>12</td><td>0</td><td>76.10%</td><td></td></tr>
<tr><td>3</td><td>21</td><td>0</td><td>76.90%</td><td></td></tr>
<tr><td>4</td><td>39</td><td>0</td><td>77.40%</td><td></td></tr>
<tr><td>5</td><td>18</td><td>0</td><td>78.10%</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>78.10%</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>79.50%</td><td></td></tr>
<tr><td>8</td><td>14</td><td>0</td><td>79.80%</td><td></td></tr>
<tr><td>9</td><td>10</td><td>0</td><td>80.00%</td><td></td></tr>
<tr><td>10</td><td>15</td><td>0</td><td>80.60%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>34</td><td></td></tr>
<tr><td>2</td><td>30</td><td>0</td><td>33</td><td></td></tr>
<tr><td>3</td><td>29</td><td>0</td><td>31</td><td></td></tr>
<tr><td>4</td><td>32</td><td>0</td><td>31</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>31</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>30</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>29</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>27</td><td></td></tr>
<tr><td>9</td><td>21</td><td>0</td><td>26</td><td></td></tr>
<tr><td>10</td><td>24</td><td>0</td><td>26</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>5</td><td></td></tr>
<tr><td>2</td><td>9</td><td>0</td><td>10</td><td></td></tr>
<tr><td>3</td><td>11</td><td>0</td><td>10</td><td></td></tr>
<tr><td>4</td><td>15</td><td>0</td><td>15</td><td></td></tr>
<tr><td>5</td><td>12</td><td>0</td><td>16</td><td></td></tr>
<tr><td>6</td><td>8</td><td>0</td><td>21</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>35</td><td></td></tr>
<tr><td>2</td><td>37</td><td>0</td><td>33</td><td></td></tr>
<tr><td>3</td><td>9</td><td>0</td><td>30</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>30</td><td></td></tr>
<tr><td>5</td><td>34</td><td>0</td><td>27</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>27</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>26</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>26</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>25</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>24</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>21</td><td>0</td><td>14</td><td></td></tr>
<tr><td>2</td><td>14</td><td>0</td><td>15</td><td></td></tr>
<tr><td>3</td><td>22</td><td>0</td><td>15</td><td></td></tr>
<tr><td>4</td><td>40</td><td>0</td><td>16</td><td></td></tr>
<tr><td>5</td><td>19</td><td>0</td><td>17</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>17</td><td></td></tr>
<tr><td>7</td><td>23</td><td>0</td><td>18</td><td></td></tr>
<tr><td>8</td><td>8</td><td>0</td><td>19</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>21</td><td></td></tr>
<tr><td>10</td><td>17</td><td>0</td><td>21</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>30</td><td>0</td><td>70</td><td></td></tr>
<tr><td>2</td><td>40</td><td>0</td><td>68</td><td></td></tr>
<tr><td>3</td><td>26</td><td>0</td><td>67</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>67</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>67</td><td></td></tr>
<tr><td>6</td><td>32</td><td>0</td><td>65</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>64</td><td></td></tr>
<tr><td>8</td><td>24</td><td>0</td><td>57</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>57</td><td></td></tr>
<tr><td>10</td><td>22</td><td>0</td><td>56</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>14</td><td></td></tr>
<tr><td>2</td><td>11</td><td>0</td><td>23</td><td></td></tr>
<tr><td>3</td><td>9</td><td>0</td><td>26</td><td></td></tr>
<tr><td>4</td><td>15</td><td>0</td><td>33</td><td></td></tr>
<tr><td>5</td><td>18</td><td>0</td><td>34</td><td></td></tr>
<tr><td>6</td><td>12</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>8</td><td>0</td><td>47</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>19</td><td></td></tr>
<tr><td>2</td><td>32</td><td>0</td><td>17</td><td></td></tr>
<tr><td>3</td><td>33</td><td>0</td><td>16</td><td></td></tr>
<tr><td>4</td><td>26</td><td>0</td><td>15</td><td></td></tr>
<tr><td>5</td><td>24</td><td>0</td><td>14</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>14</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>12</td><td></td></tr>
<tr><td>8</td><td>16</td><td>0</td><td>12</td><td></td></tr>
<tr><td>9</td><td>19</td><td>0</td><td>12</td><td></td></tr>
<tr><td>10</td><td>23</td><td>0</td><td>11</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>21</td><td>0</td><td>15</td><td></td></tr>
<tr><td>2</td><td>31</td><td>0</td><td>15</td><td></td></tr>
<tr><td>3</td><td>30</td><td>0</td><td>14</td><td></td></tr>
<tr><td>4</td><td>22</td><td>0</td><td>13</td><td></td></tr>
<tr><td>5</td><td>29</td><td>0</td><td>12</td><td></td></tr>
<tr><td>6</td><td>14</td><td>0</td><td>11</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>11</td><td></td></tr>
<tr><td>8</td><td>19</td><td>0</td><td>10</td><td></td></tr>
<tr><td>9</td><td>23</td><td>0</td><td>9</td><td></td></tr>
<tr><td>10</td><td>17</td><td>0</td><td>8</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_CAN"><a id="Canada">Canada</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-PRE-ProTeamRoster.php#Canada">Pro Team Roster</a> ]
[ <a href="SMJHL-PRE-ProTeamScoring.php#Canada">Pro Team Scoring</a> ]
[ <a href="SMJHL-PRE-ProTeamLines.php#Canada">Pro Team Lines</a> ]
[ <a href="SMJHL-PRE-ProTeamSchedule.php#Canada">Pro Team Schedule</a> ]
[ <a href="SMJHL-PRE-ProTeamStats.php#Canada">Pro Team Stats</a> ]
[ <a href="SMJHL-PRE-ProTeamStatsVS.php#Canada">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canada');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canada" style="display: block;">
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>48</td><td>9</td><td></td></tr><tr><td>2</td><td>32</td><td>130</td><td>9</td><td></td></tr><tr><td>3</td><td>27</td><td>88</td><td>8</td><td></td></tr><tr><td>4</td><td>32</td><td>1</td><td>8</td><td></td></tr><tr><td>5</td><td>32</td><td>62</td><td>8</td><td></td></tr><tr><td>6</td><td>36</td><td>87</td><td>8</td><td></td></tr><tr><td>7</td><td>26</td><td>9</td><td>7</td><td></td></tr><tr><td>8</td><td>26</td><td>155</td><td>7</td><td></td></tr><tr><td>9</td><td>27</td><td>7</td><td>7</td><td></td></tr><tr><td>10</td><td>27</td><td>198</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>206</td><td></td></tr>
<tr><td>2</td><td>26</td><td>0</td><td>176</td><td></td></tr>
<tr><td>3</td><td>40</td><td>0</td><td>176</td><td></td></tr>
<tr><td>4</td><td>27</td><td>0</td><td>171</td><td></td></tr>
<tr><td>5</td><td>37</td><td>0</td><td>167</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>163</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>157</td><td></td></tr>
<tr><td>8</td><td>31</td><td>0</td><td>153</td><td></td></tr>
<tr><td>9</td><td>28</td><td>0</td><td>145</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>139</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>39</td><td>0</td><td>109</td><td></td></tr>
<tr><td>2</td><td>34</td><td>0</td><td>111</td><td></td></tr>
<tr><td>3</td><td>38</td><td>0</td><td>111</td><td></td></tr>
<tr><td>4</td><td>35</td><td>0</td><td>115</td><td></td></tr>
<tr><td>5</td><td>41</td><td>0</td><td>124</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>132</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>139</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>145</td><td></td></tr>
<tr><td>9</td><td>33</td><td>0</td><td>147</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>153</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>34</td><td>0</td><td>177</td><td></td></tr>
<tr><td>2</td><td>25</td><td>0</td><td>174</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>171</td><td></td></tr>
<tr><td>4</td><td>39</td><td>0</td><td>168</td><td></td></tr>
<tr><td>5</td><td>38</td><td>0</td><td>166</td><td></td></tr>
<tr><td>6</td><td>35</td><td>0</td><td>162</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>160</td><td></td></tr>
<tr><td>8</td><td>30</td><td>0</td><td>156</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>149</td><td></td></tr>
<tr><td>10</td><td>27</td><td>0</td><td>148</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>33</td><td>0</td><td>119</td><td></td></tr>
<tr><td>2</td><td>31</td><td>0</td><td>121</td><td></td></tr>
<tr><td>3</td><td>32</td><td>0</td><td>121</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>128</td><td></td></tr>
<tr><td>5</td><td>36</td><td>0</td><td>130</td><td></td></tr>
<tr><td>6</td><td>28</td><td>0</td><td>142</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>148</td><td></td></tr>
<tr><td>8</td><td>29</td><td>0</td><td>149</td><td></td></tr>
<tr><td>9</td><td>30</td><td>0</td><td>156</td><td></td></tr>
<tr><td>10</td><td>26</td><td>0</td><td>160</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>48</td><td>16</td><td></td></tr><tr><td>2</td><td>27</td><td>88</td><td>16</td><td></td></tr><tr><td>3</td><td>32</td><td>62</td><td>16</td><td></td></tr><tr><td>4</td><td>32</td><td>130</td><td>16</td><td></td></tr><tr><td>5</td><td>36</td><td>87</td><td>16</td><td></td></tr><tr><td>6</td><td>32</td><td>1</td><td>15</td><td></td></tr><tr><td>7</td><td>26</td><td>9</td><td>14</td><td></td></tr><tr><td>8</td><td>32</td><td>14</td><td>14</td><td></td></tr><tr><td>9</td><td>32</td><td>199</td><td>13</td><td></td></tr><tr><td>10</td><td>37</td><td>71</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>366</td><td></td></tr>
<tr><td>2</td><td>26</td><td>0</td><td>318</td><td></td></tr>
<tr><td>3</td><td>40</td><td>0</td><td>314</td><td></td></tr>
<tr><td>4</td><td>27</td><td>0</td><td>304</td><td></td></tr>
<tr><td>5</td><td>36</td><td>0</td><td>293</td><td></td></tr>
<tr><td>6</td><td>37</td><td>0</td><td>292</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>275</td><td></td></tr>
<tr><td>8</td><td>31</td><td>0</td><td>269</td><td></td></tr>
<tr><td>9</td><td>28</td><td>0</td><td>249</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>247</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>34</td><td>0</td><td>187</td><td></td></tr>
<tr><td>2</td><td>39</td><td>0</td><td>190</td><td></td></tr>
<tr><td>3</td><td>38</td><td>0</td><td>201</td><td></td></tr>
<tr><td>4</td><td>35</td><td>0</td><td>206</td><td></td></tr>
<tr><td>5</td><td>41</td><td>0</td><td>224</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>225</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>247</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>249</td><td></td></tr>
<tr><td>9</td><td>33</td><td>0</td><td>261</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>269</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>48</td><td>25</td><td></td></tr><tr><td>2</td><td>32</td><td>130</td><td>25</td><td></td></tr><tr><td>3</td><td>27</td><td>88</td><td>24</td><td></td></tr><tr><td>4</td><td>32</td><td>62</td><td>24</td><td></td></tr><tr><td>5</td><td>36</td><td>87</td><td>24</td><td></td></tr><tr><td>6</td><td>32</td><td>1</td><td>23</td><td></td></tr><tr><td>7</td><td>26</td><td>9</td><td>21</td><td></td></tr><tr><td>8</td><td>32</td><td>14</td><td>21</td><td></td></tr><tr><td>9</td><td>32</td><td>199</td><td>20</td><td></td></tr><tr><td>10</td><td>37</td><td>71</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>572</td><td></td></tr>
<tr><td>2</td><td>26</td><td>0</td><td>494</td><td></td></tr>
<tr><td>3</td><td>40</td><td>0</td><td>490</td><td></td></tr>
<tr><td>4</td><td>27</td><td>0</td><td>475</td><td></td></tr>
<tr><td>5</td><td>37</td><td>0</td><td>459</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>456</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>432</td><td></td></tr>
<tr><td>8</td><td>31</td><td>0</td><td>422</td><td></td></tr>
<tr><td>9</td><td>28</td><td>0</td><td>394</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>386</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>34</td><td>0</td><td>298</td><td></td></tr>
<tr><td>2</td><td>39</td><td>0</td><td>299</td><td></td></tr>
<tr><td>3</td><td>38</td><td>0</td><td>312</td><td></td></tr>
<tr><td>4</td><td>35</td><td>0</td><td>321</td><td></td></tr>
<tr><td>5</td><td>41</td><td>0</td><td>348</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>357</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>386</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>394</td><td></td></tr>
<tr><td>9</td><td>33</td><td>0</td><td>408</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>422</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>168</td><td>52</td><td></td></tr><tr><td>2</td><td>40</td><td>19</td><td>51</td><td></td></tr><tr><td>3</td><td>28</td><td>72</td><td>49</td><td></td></tr><tr><td>4</td><td>40</td><td>117</td><td>49</td><td></td></tr><tr><td>5</td><td>37</td><td>11</td><td>48</td><td></td></tr><tr><td>6</td><td>25</td><td>200</td><td>46</td><td></td></tr><tr><td>7</td><td>32</td><td>137</td><td>46</td><td></td></tr><tr><td>8</td><td>36</td><td>2</td><td>46</td><td></td></tr><tr><td>9</td><td>30</td><td>146</td><td>44</td><td></td></tr><tr><td>10</td><td>40</td><td>49</td><td>44</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>1514</td><td></td></tr>
<tr><td>2</td><td>40</td><td>0</td><td>1458</td><td></td></tr>
<tr><td>3</td><td>27</td><td>0</td><td>1382</td><td></td></tr>
<tr><td>4</td><td>28</td><td>0</td><td>1377</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>1346</td><td></td></tr>
<tr><td>6</td><td>37</td><td>0</td><td>1344</td><td></td></tr>
<tr><td>7</td><td>36</td><td>0</td><td>1326</td><td></td></tr>
<tr><td>8</td><td>29</td><td>0</td><td>1325</td><td></td></tr>
<tr><td>9</td><td>31</td><td>0</td><td>1310</td><td></td></tr>
<tr><td>10</td><td>30</td><td>0</td><td>1270</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>38</td><td>0</td><td>974</td><td></td></tr>
<tr><td>2</td><td>39</td><td>0</td><td>1069</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>1075</td><td></td></tr>
<tr><td>4</td><td>34</td><td>0</td><td>1110</td><td></td></tr>
<tr><td>5</td><td>35</td><td>0</td><td>1115</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>1195</td><td></td></tr>
<tr><td>7</td><td>33</td><td>0</td><td>1265</td><td></td></tr>
<tr><td>8</td><td>30</td><td>0</td><td>1270</td><td></td></tr>
<tr><td>9</td><td>31</td><td>0</td><td>1310</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>1325</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>30</td><td>66</td><td>19</td><td></td></tr><tr><td>2</td><td>40</td><td>193</td><td>17</td><td></td></tr><tr><td>3</td><td>41</td><td>95</td><td>17</td><td></td></tr><tr><td>4</td><td>31</td><td>157</td><td>16</td><td></td></tr><tr><td>5</td><td>37</td><td>110</td><td>16</td><td></td></tr><tr><td>6</td><td>39</td><td>53</td><td>16</td><td></td></tr><tr><td>7</td><td>40</td><td>171</td><td>16</td><td></td></tr><tr><td>8</td><td>25</td><td>20</td><td>15</td><td></td></tr><tr><td>9</td><td>25</td><td>200</td><td>15</td><td></td></tr><tr><td>10</td><td>27</td><td>198</td><td>15</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>41</td><td>0</td><td>436</td><td></td></tr>
<tr><td>2</td><td>34</td><td>0</td><td>435</td><td></td></tr>
<tr><td>3</td><td>25</td><td>0</td><td>433</td><td></td></tr>
<tr><td>4</td><td>35</td><td>0</td><td>402</td><td></td></tr>
<tr><td>5</td><td>30</td><td>0</td><td>388</td><td></td></tr>
<tr><td>6</td><td>38</td><td>0</td><td>378</td><td></td></tr>
<tr><td>7</td><td>32</td><td>0</td><td>360</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>359</td><td></td></tr>
<tr><td>9</td><td>31</td><td>0</td><td>356</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>355</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>26</td><td>0</td><td>330</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>332</td><td></td></tr>
<tr><td>3</td><td>36</td><td>0</td><td>334</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>339</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>354</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>355</td><td></td></tr>
<tr><td>7</td><td>31</td><td>0</td><td>356</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>359</td><td></td></tr>
<tr><td>9</td><td>30</td><td>0</td><td>388</td><td></td></tr>
<tr><td>10</td><td>25</td><td>0</td><td>433</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>41</td><td>0</td><td>1511</td><td></td></tr>
<tr><td>2</td><td>34</td><td>0</td><td>1470</td><td></td></tr>
<tr><td>3</td><td>35</td><td>0</td><td>1406</td><td></td></tr>
<tr><td>4</td><td>38</td><td>0</td><td>1355</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>1305</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>1297</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>1264</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>1258</td><td></td></tr>
<tr><td>9</td><td>30</td><td>0</td><td>1244</td><td></td></tr>
<tr><td>10</td><td>33</td><td>0</td><td>1181</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>0</td><td>1130</td><td></td></tr>
<tr><td>2</td><td>26</td><td>0</td><td>1169</td><td></td></tr>
<tr><td>3</td><td>31</td><td>0</td><td>1173</td><td></td></tr>
<tr><td>4</td><td>32</td><td>0</td><td>1176</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>1181</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>1244</td><td></td></tr>
<tr><td>7</td><td>28</td><td>0</td><td>1258</td><td></td></tr>
<tr><td>8</td><td>29</td><td>0</td><td>1264</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>1297</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>63</td><td>46</td><td></td></tr><tr><td>2</td><td>28</td><td>94</td><td>45</td><td></td></tr><tr><td>3</td><td>29</td><td>15</td><td>37</td><td></td></tr><tr><td>4</td><td>31</td><td>27</td><td>34</td><td></td></tr><tr><td>5</td><td>35</td><td>93</td><td>31</td><td></td></tr><tr><td>6</td><td>32</td><td>181</td><td>30</td><td></td></tr><tr><td>7</td><td>25</td><td>120</td><td>29</td><td></td></tr><tr><td>8</td><td>29</td><td>149</td><td>29</td><td></td></tr><tr><td>9</td><td>30</td><td>34</td><td>29</td><td></td></tr><tr><td>10</td><td>35</td><td>83</td><td>29</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>30</td><td>0</td><td>611</td><td></td></tr>
<tr><td>2</td><td>41</td><td>0</td><td>585</td><td></td></tr>
<tr><td>3</td><td>26</td><td>0</td><td>583</td><td></td></tr>
<tr><td>4</td><td>28</td><td>0</td><td>567</td><td></td></tr>
<tr><td>5</td><td>31</td><td>0</td><td>564</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>550</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>518</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>500</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>34</td><td>0</td><td>372</td><td></td></tr>
<tr><td>2</td><td>36</td><td>0</td><td>376</td><td></td></tr>
<tr><td>3</td><td>38</td><td>0</td><td>386</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>436</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>463</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>500</td><td></td></tr>
<tr><td>7</td><td>33</td><td>0</td><td>507</td><td></td></tr>
<tr><td>8</td><td>27</td><td>0</td><td>518</td><td></td></tr>
<tr><td>9</td><td>32</td><td>0</td><td>534</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>550</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>35</td><td>89</td><td>37</td><td></td></tr><tr><td>2</td><td>31</td><td>126</td><td>34</td><td></td></tr><tr><td>3</td><td>33</td><td>139</td><td>32</td><td></td></tr><tr><td>4</td><td>35</td><td>99</td><td>32</td><td></td></tr><tr><td>5</td><td>31</td><td>115</td><td>31</td><td></td></tr><tr><td>6</td><td>35</td><td>51</td><td>31</td><td></td></tr><tr><td>7</td><td>25</td><td>5</td><td>30</td><td></td></tr><tr><td>8</td><td>28</td><td>166</td><td>30</td><td></td></tr><tr><td>9</td><td>38</td><td>54</td><td>30</td><td></td></tr><tr><td>10</td><td>25</td><td>115</td><td>29</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>41</td><td>0</td><td>941</td><td></td></tr>
<tr><td>2</td><td>35</td><td>0</td><td>934</td><td></td></tr>
<tr><td>3</td><td>29</td><td>0</td><td>911</td><td></td></tr>
<tr><td>4</td><td>28</td><td>0</td><td>904</td><td></td></tr>
<tr><td>5</td><td>31</td><td>0</td><td>901</td><td></td></tr>
<tr><td>6</td><td>40</td><td>0</td><td>888</td><td></td></tr>
<tr><td>7</td><td>33</td><td>0</td><td>871</td><td></td></tr>
<tr><td>8</td><td>26</td><td>0</td><td>867</td><td></td></tr>
<tr><td>9</td><td>32</td><td>0</td><td>867</td><td></td></tr>
<tr><td>10</td><td>25</td><td>0</td><td>843</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>34</td><td>0</td><td>751</td><td></td></tr>
<tr><td>2</td><td>38</td><td>0</td><td>764</td><td></td></tr>
<tr><td>3</td><td>36</td><td>0</td><td>779</td><td></td></tr>
<tr><td>4</td><td>39</td><td>0</td><td>789</td><td></td></tr>
<tr><td>5</td><td>37</td><td>0</td><td>808</td><td></td></tr>
<tr><td>6</td><td>27</td><td>0</td><td>814</td><td></td></tr>
<tr><td>7</td><td>30</td><td>0</td><td>829</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>843</td><td></td></tr>
<tr><td>9</td><td>26</td><td>0</td><td>867</td><td></td></tr>
<tr><td>10</td><td>32</td><td>0</td><td>867</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>34</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>28</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>40</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>25</td><td>0</td><td>1</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>31</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>30.70%</td><td></td></tr>
<tr><td>2</td><td>26</td><td>0</td><td>27.80%</td><td></td></tr>
<tr><td>3</td><td>27</td><td>0</td><td>24.70%</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>22.30%</td><td></td></tr>
<tr><td>5</td><td>31</td><td>0</td><td>21.20%</td><td></td></tr>
<tr><td>6</td><td>28</td><td>0</td><td>20.70%</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>17.80%</td><td></td></tr>
<tr><td>8</td><td>30</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>12.60%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>37</td><td>0</td><td>87.50%</td><td></td></tr>
<tr><td>2</td><td>33</td><td>0</td><td>84.60%</td><td></td></tr>
<tr><td>3</td><td>39</td><td>0</td><td>82.50%</td><td></td></tr>
<tr><td>4</td><td>28</td><td>0</td><td>82.10%</td><td></td></tr>
<tr><td>5</td><td>29</td><td>0</td><td>81.80%</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>7</td><td>34</td><td>0</td><td>80.10%</td><td></td></tr>
<tr><td>8</td><td>32</td><td>0</td><td>79.80%</td><td></td></tr>
<tr><td>9</td><td>27</td><td>0</td><td>79.40%</td><td></td></tr>
<tr><td>10</td><td>30</td><td>0</td><td>79.20%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>25</td><td>0</td><td>12.60%</td><td></td></tr>
<tr><td>2</td><td>39</td><td>0</td><td>13.00%</td><td></td></tr>
<tr><td>3</td><td>34</td><td>0</td><td>15.30%</td><td></td></tr>
<tr><td>4</td><td>33</td><td>0</td><td>16.00%</td><td></td></tr>
<tr><td>5</td><td>35</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>17.80%</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>20.70%</td><td></td></tr>
<tr><td>9</td><td>31</td><td>0</td><td>21.20%</td><td></td></tr>
<tr><td>10</td><td>27</td><td>0</td><td>24.70%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>38</td><td>0</td><td>74.60%</td><td></td></tr>
<tr><td>2</td><td>40</td><td>0</td><td>76.30%</td><td></td></tr>
<tr><td>3</td><td>25</td><td>0</td><td>77.50%</td><td></td></tr>
<tr><td>4</td><td>26</td><td>0</td><td>78.50%</td><td></td></tr>
<tr><td>5</td><td>41</td><td>0</td><td>78.90%</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>79.20%</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>79.40%</td><td></td></tr>
<tr><td>8</td><td>32</td><td>0</td><td>79.80%</td><td></td></tr>
<tr><td>9</td><td>31</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>81.80%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>36</td><td></td></tr>
<tr><td>2</td><td>37</td><td>0</td><td>32</td><td></td></tr>
<tr><td>3</td><td>33</td><td>0</td><td>31</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>30</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>28</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>28</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>26</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>25</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>24</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>23</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>38</td><td>0</td><td>12</td><td></td></tr>
<tr><td>2</td><td>39</td><td>0</td><td>13</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>13</td><td></td></tr>
<tr><td>4</td><td>34</td><td>0</td><td>14</td><td></td></tr>
<tr><td>5</td><td>35</td><td>0</td><td>19</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>22</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>23</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>24</td><td></td></tr>
<tr><td>9</td><td>28</td><td>0</td><td>25</td><td></td></tr>
<tr><td>10</td><td>27</td><td>0</td><td>26</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>38</td><td>0</td><td>38</td><td></td></tr>
<tr><td>2</td><td>39</td><td>0</td><td>37</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>37</td><td></td></tr>
<tr><td>4</td><td>34</td><td>0</td><td>36</td><td></td></tr>
<tr><td>5</td><td>35</td><td>0</td><td>31</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>28</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>27</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>26</td><td></td></tr>
<tr><td>9</td><td>28</td><td>0</td><td>25</td><td></td></tr>
<tr><td>10</td><td>27</td><td>0</td><td>24</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>14</td><td></td></tr>
<tr><td>2</td><td>37</td><td>0</td><td>18</td><td></td></tr>
<tr><td>3</td><td>33</td><td>0</td><td>19</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>20</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>22</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>22</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>24</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>25</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>26</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>27</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>73</td><td></td></tr>
<tr><td>2</td><td>37</td><td>0</td><td>72</td><td></td></tr>
<tr><td>3</td><td>33</td><td>0</td><td>69</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>64</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>63</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>60</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>58</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>56</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>51</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>34</td><td>0</td><td>32</td><td></td></tr>
<tr><td>2</td><td>38</td><td>0</td><td>33</td><td></td></tr>
<tr><td>3</td><td>39</td><td>0</td><td>35</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>35</td><td></td></tr>
<tr><td>5</td><td>35</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>49</td><td></td></tr>
<tr><td>7</td><td>30</td><td>0</td><td>49</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>51</td><td></td></tr>
<tr><td>9</td><td>28</td><td>0</td><td>56</td><td></td></tr>
<tr><td>10</td><td>27</td><td>0</td><td>58</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>17</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>14</td><td></td></tr>
<tr><td>3</td><td>40</td><td>0</td><td>14</td><td></td></tr>
<tr><td>4</td><td>26</td><td>0</td><td>13</td><td></td></tr>
<tr><td>5</td><td>31</td><td>0</td><td>13</td><td></td></tr>
<tr><td>6</td><td>33</td><td>0</td><td>13</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>11</td><td></td></tr>
<tr><td>8</td><td>28</td><td>0</td><td>11</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>9</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>16</td><td></td></tr>
<tr><td>2</td><td>36</td><td>0</td><td>15</td><td></td></tr>
<tr><td>3</td><td>37</td><td>0</td><td>15</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>13</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>11</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>10</td><td></td></tr>
<tr><td>7</td><td>33</td><td>0</td><td>10</td><td></td></tr>
<tr><td>8</td><td>27</td><td>0</td><td>9</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>8</td><td></td></tr>
<tr><td>10</td><td>30</td><td>0</td><td>7</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_EEU"><a id="EasternEurope">Eastern Europe</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-PRE-ProTeamRoster.php#EasternEurope">Pro Team Roster</a> ]
[ <a href="SMJHL-PRE-ProTeamScoring.php#EasternEurope">Pro Team Scoring</a> ]
[ <a href="SMJHL-PRE-ProTeamLines.php#EasternEurope">Pro Team Lines</a> ]
[ <a href="SMJHL-PRE-ProTeamSchedule.php#EasternEurope">Pro Team Schedule</a> ]
[ <a href="SMJHL-PRE-ProTeamStats.php#EasternEurope">Pro Team Stats</a> ]
[ <a href="SMJHL-PRE-ProTeamStatsVS.php#EasternEurope">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EasternEurope');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EasternEurope" style="display: block;">
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>72</td><td>9</td><td></td></tr><tr><td>2</td><td>35</td><td>58</td><td>9</td><td></td></tr><tr><td>3</td><td>40</td><td>72</td><td>9</td><td></td></tr><tr><td>4</td><td>26</td><td>14</td><td>8</td><td></td></tr><tr><td>5</td><td>35</td><td>39</td><td>8</td><td></td></tr><tr><td>6</td><td>35</td><td>64</td><td>8</td><td></td></tr><tr><td>7</td><td>25</td><td>114</td><td>7</td><td></td></tr><tr><td>8</td><td>27</td><td>19</td><td>7</td><td></td></tr><tr><td>9</td><td>33</td><td>176</td><td>7</td><td></td></tr><tr><td>10</td><td>39</td><td>127</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>173</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>171</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>167</td><td></td></tr>
<tr><td>4</td><td>26</td><td>0</td><td>164</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>151</td><td></td></tr>
<tr><td>6</td><td>35</td><td>0</td><td>148</td><td></td></tr>
<tr><td>7</td><td>38</td><td>0</td><td>146</td><td></td></tr>
<tr><td>8</td><td>36</td><td>0</td><td>145</td><td></td></tr>
<tr><td>9</td><td>37</td><td>0</td><td>145</td><td></td></tr>
<tr><td>10</td><td>34</td><td>0</td><td>144</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>0</td><td>89</td><td></td></tr>
<tr><td>2</td><td>32</td><td>0</td><td>101</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>105</td><td></td></tr>
<tr><td>4</td><td>30</td><td>0</td><td>119</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>132</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>133</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>134</td><td></td></tr>
<tr><td>8</td><td>26</td><td>0</td><td>164</td><td></td></tr>
<tr><td>9</td><td>27</td><td>0</td><td>171</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>25</td><td>0</td><td>172</td><td></td></tr>
<tr><td>2</td><td>40</td><td>0</td><td>167</td><td></td></tr>
<tr><td>3</td><td>38</td><td>0</td><td>160</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>155</td><td></td></tr>
<tr><td>5</td><td>30</td><td>0</td><td>153</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>152</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>148</td><td></td></tr>
<tr><td>8</td><td>33</td><td>0</td><td>148</td><td></td></tr>
<tr><td>9</td><td>32</td><td>0</td><td>137</td><td></td></tr>
<tr><td>10</td><td>29</td><td>0</td><td>133</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>31</td><td>0</td><td>114</td><td></td></tr>
<tr><td>2</td><td>28</td><td>0</td><td>122</td><td></td></tr>
<tr><td>3</td><td>39</td><td>0</td><td>127</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>131</td><td></td></tr>
<tr><td>5</td><td>29</td><td>0</td><td>133</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>135</td><td></td></tr>
<tr><td>7</td><td>32</td><td>0</td><td>137</td><td></td></tr>
<tr><td>8</td><td>34</td><td>0</td><td>137</td><td></td></tr>
<tr><td>9</td><td>27</td><td>0</td><td>148</td><td></td></tr>
<tr><td>10</td><td>26</td><td>0</td><td>152</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>35</td><td>58</td><td>16</td><td></td></tr><tr><td>2</td><td>26</td><td>14</td><td>15</td><td></td></tr><tr><td>3</td><td>40</td><td>72</td><td>15</td><td></td></tr><tr><td>4</td><td>27</td><td>72</td><td>14</td><td></td></tr><tr><td>5</td><td>35</td><td>39</td><td>14</td><td></td></tr><tr><td>6</td><td>27</td><td>19</td><td>13</td><td></td></tr><tr><td>7</td><td>33</td><td>176</td><td>13</td><td></td></tr><tr><td>8</td><td>35</td><td>64</td><td>13</td><td></td></tr><tr><td>9</td><td>26</td><td>69</td><td>12</td><td></td></tr><tr><td>10</td><td>27</td><td>12</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>0</td><td>303</td><td></td></tr>
<tr><td>2</td><td>40</td><td>0</td><td>303</td><td></td></tr>
<tr><td>3</td><td>26</td><td>0</td><td>292</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>283</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>268</td><td></td></tr>
<tr><td>6</td><td>34</td><td>0</td><td>256</td><td></td></tr>
<tr><td>7</td><td>36</td><td>0</td><td>252</td><td></td></tr>
<tr><td>8</td><td>38</td><td>0</td><td>252</td><td></td></tr>
<tr><td>9</td><td>35</td><td>0</td><td>250</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>233</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>0</td><td>159</td><td></td></tr>
<tr><td>2</td><td>28</td><td>0</td><td>178</td><td></td></tr>
<tr><td>3</td><td>32</td><td>0</td><td>179</td><td></td></tr>
<tr><td>4</td><td>30</td><td>0</td><td>211</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>229</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>231</td><td></td></tr>
<tr><td>7</td><td>31</td><td>0</td><td>233</td><td></td></tr>
<tr><td>8</td><td>26</td><td>0</td><td>292</td><td></td></tr>
<tr><td>9</td><td>27</td><td>0</td><td>303</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>35</td><td>58</td><td>25</td><td></td></tr><tr><td>2</td><td>40</td><td>72</td><td>24</td><td></td></tr><tr><td>3</td><td>26</td><td>14</td><td>23</td><td></td></tr><tr><td>4</td><td>27</td><td>72</td><td>23</td><td></td></tr><tr><td>5</td><td>35</td><td>39</td><td>22</td><td></td></tr><tr><td>6</td><td>35</td><td>64</td><td>21</td><td></td></tr><tr><td>7</td><td>27</td><td>19</td><td>20</td><td></td></tr><tr><td>8</td><td>33</td><td>176</td><td>20</td><td></td></tr><tr><td>9</td><td>40</td><td>121</td><td>19</td><td></td></tr><tr><td>10</td><td>25</td><td>114</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>476</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>474</td><td></td></tr>
<tr><td>3</td><td>26</td><td>0</td><td>456</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>450</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>419</td><td></td></tr>
<tr><td>6</td><td>34</td><td>0</td><td>400</td><td></td></tr>
<tr><td>7</td><td>35</td><td>0</td><td>398</td><td></td></tr>
<tr><td>8</td><td>38</td><td>0</td><td>398</td><td></td></tr>
<tr><td>9</td><td>36</td><td>0</td><td>397</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>366</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>0</td><td>248</td><td></td></tr>
<tr><td>2</td><td>32</td><td>0</td><td>280</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>283</td><td></td></tr>
<tr><td>4</td><td>30</td><td>0</td><td>330</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>361</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>365</td><td></td></tr>
<tr><td>7</td><td>31</td><td>0</td><td>366</td><td></td></tr>
<tr><td>8</td><td>26</td><td>0</td><td>456</td><td></td></tr>
<tr><td>9</td><td>27</td><td>0</td><td>474</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>197</td><td>50</td><td></td></tr><tr><td>2</td><td>40</td><td>199</td><td>47</td><td></td></tr><tr><td>3</td><td>40</td><td>23</td><td>43</td><td></td></tr><tr><td>4</td><td>40</td><td>141</td><td>43</td><td></td></tr><tr><td>5</td><td>41</td><td>52</td><td>43</td><td></td></tr><tr><td>6</td><td>40</td><td>181</td><td>42</td><td></td></tr><tr><td>7</td><td>27</td><td>12</td><td>41</td><td></td></tr><tr><td>8</td><td>31</td><td>179</td><td>41</td><td></td></tr><tr><td>9</td><td>40</td><td>72</td><td>41</td><td></td></tr><tr><td>10</td><td>36</td><td>99</td><td>40</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>1587</td><td></td></tr>
<tr><td>2</td><td>41</td><td>0</td><td>1459</td><td></td></tr>
<tr><td>3</td><td>34</td><td>0</td><td>1337</td><td></td></tr>
<tr><td>4</td><td>35</td><td>0</td><td>1267</td><td></td></tr>
<tr><td>5</td><td>36</td><td>0</td><td>1264</td><td></td></tr>
<tr><td>6</td><td>38</td><td>0</td><td>1242</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>1231</td><td></td></tr>
<tr><td>8</td><td>33</td><td>0</td><td>1222</td><td></td></tr>
<tr><td>9</td><td>26</td><td>0</td><td>1220</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>1190</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>0</td><td>953</td><td></td></tr>
<tr><td>2</td><td>28</td><td>0</td><td>1002</td><td></td></tr>
<tr><td>3</td><td>32</td><td>0</td><td>1014</td><td></td></tr>
<tr><td>4</td><td>30</td><td>0</td><td>1039</td><td></td></tr>
<tr><td>5</td><td>25</td><td>0</td><td>1121</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>1190</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>1220</td><td></td></tr>
<tr><td>8</td><td>27</td><td>0</td><td>1231</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>37</td><td>138</td><td>21</td><td></td></tr><tr><td>2</td><td>35</td><td>86</td><td>20</td><td></td></tr><tr><td>3</td><td>40</td><td>58</td><td>18</td><td></td></tr><tr><td>4</td><td>33</td><td>109</td><td>17</td><td></td></tr><tr><td>5</td><td>38</td><td>62</td><td>17</td><td></td></tr><tr><td>6</td><td>38</td><td>146</td><td>17</td><td></td></tr><tr><td>7</td><td>39</td><td>49</td><td>17</td><td></td></tr><tr><td>8</td><td>25</td><td>98</td><td>16</td><td></td></tr><tr><td>9</td><td>25</td><td>157</td><td>16</td><td></td></tr><tr><td>10</td><td>26</td><td>131</td><td>16</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>30</td><td>0</td><td>406</td><td></td></tr>
<tr><td>2</td><td>38</td><td>0</td><td>404</td><td></td></tr>
<tr><td>3</td><td>25</td><td>0</td><td>397</td><td></td></tr>
<tr><td>4</td><td>40</td><td>0</td><td>393</td><td></td></tr>
<tr><td>5</td><td>41</td><td>0</td><td>383</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>379</td><td></td></tr>
<tr><td>7</td><td>37</td><td>0</td><td>379</td><td></td></tr>
<tr><td>8</td><td>34</td><td>0</td><td>378</td><td></td></tr>
<tr><td>9</td><td>32</td><td>0</td><td>377</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>358</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>36</td><td>0</td><td>310</td><td></td></tr>
<tr><td>2</td><td>33</td><td>0</td><td>323</td><td></td></tr>
<tr><td>3</td><td>27</td><td>0</td><td>337</td><td></td></tr>
<tr><td>4</td><td>28</td><td>0</td><td>338</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>340</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>358</td><td></td></tr>
<tr><td>7</td><td>32</td><td>0</td><td>377</td><td></td></tr>
<tr><td>8</td><td>29</td><td>0</td><td>379</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>397</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>1347</td><td></td></tr>
<tr><td>2</td><td>29</td><td>0</td><td>1327</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>1315</td><td></td></tr>
<tr><td>4</td><td>34</td><td>0</td><td>1302</td><td></td></tr>
<tr><td>5</td><td>38</td><td>0</td><td>1293</td><td></td></tr>
<tr><td>6</td><td>37</td><td>0</td><td>1288</td><td></td></tr>
<tr><td>7</td><td>30</td><td>0</td><td>1279</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>1275</td><td></td></tr>
<tr><td>9</td><td>35</td><td>0</td><td>1266</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>1231</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>28</td><td>0</td><td>1144</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>1160</td><td></td></tr>
<tr><td>3</td><td>36</td><td>0</td><td>1165</td><td></td></tr>
<tr><td>4</td><td>33</td><td>0</td><td>1166</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>1194</td><td></td></tr>
<tr><td>6</td><td>32</td><td>0</td><td>1203</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>1207</td><td></td></tr>
<tr><td>8</td><td>31</td><td>0</td><td>1231</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>1275</td><td></td></tr>
<tr><td>10</td><td>30</td><td>0</td><td>1279</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>110</td><td>33</td><td></td></tr><tr><td>2</td><td>25</td><td>86</td><td>32</td><td></td></tr><tr><td>3</td><td>26</td><td>115</td><td>30</td><td></td></tr><tr><td>4</td><td>41</td><td>145</td><td>30</td><td></td></tr><tr><td>5</td><td>26</td><td>35</td><td>29</td><td></td></tr><tr><td>6</td><td>37</td><td>138</td><td>29</td><td></td></tr><tr><td>7</td><td>25</td><td>174</td><td>28</td><td></td></tr><tr><td>8</td><td>30</td><td>23</td><td>28</td><td></td></tr><tr><td>9</td><td>30</td><td>140</td><td>27</td><td></td></tr><tr><td>10</td><td>41</td><td>94</td><td>27</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>26</td><td>0</td><td>604</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>570</td><td></td></tr>
<tr><td>3</td><td>34</td><td>0</td><td>534</td><td></td></tr>
<tr><td>4</td><td>40</td><td>0</td><td>522</td><td></td></tr>
<tr><td>5</td><td>30</td><td>0</td><td>518</td><td></td></tr>
<tr><td>6</td><td>39</td><td>0</td><td>514</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>498</td><td></td></tr>
<tr><td>8</td><td>32</td><td>0</td><td>472</td><td></td></tr>
<tr><td>9</td><td>31</td><td>0</td><td>425</td><td></td></tr>
<tr><td>10</td><td>28</td><td>0</td><td>399</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>0</td><td>329</td><td></td></tr>
<tr><td>2</td><td>37</td><td>0</td><td>372</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>399</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>425</td><td></td></tr>
<tr><td>5</td><td>36</td><td>0</td><td>430</td><td></td></tr>
<tr><td>6</td><td>33</td><td>0</td><td>437</td><td></td></tr>
<tr><td>7</td><td>35</td><td>0</td><td>445</td><td></td></tr>
<tr><td>8</td><td>32</td><td>0</td><td>472</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>498</td><td></td></tr>
<tr><td>10</td><td>30</td><td>0</td><td>518</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>36</td><td>49</td><td>31</td><td></td></tr><tr><td>2</td><td>37</td><td>180</td><td>30</td><td></td></tr><tr><td>3</td><td>25</td><td>52</td><td>28</td><td></td></tr><tr><td>4</td><td>27</td><td>19</td><td>28</td><td></td></tr><tr><td>5</td><td>30</td><td>183</td><td>28</td><td></td></tr><tr><td>6</td><td>32</td><td>68</td><td>27</td><td></td></tr><tr><td>7</td><td>34</td><td>2</td><td>27</td><td></td></tr><tr><td>8</td><td>34</td><td>60</td><td>27</td><td></td></tr><tr><td>9</td><td>34</td><td>120</td><td>27</td><td></td></tr><tr><td>10</td><td>39</td><td>119</td><td>27</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>34</td><td>0</td><td>902</td><td></td></tr>
<tr><td>2</td><td>26</td><td>0</td><td>898</td><td></td></tr>
<tr><td>3</td><td>30</td><td>0</td><td>895</td><td></td></tr>
<tr><td>4</td><td>33</td><td>0</td><td>869</td><td></td></tr>
<tr><td>5</td><td>40</td><td>0</td><td>852</td><td></td></tr>
<tr><td>6</td><td>38</td><td>0</td><td>850</td><td></td></tr>
<tr><td>7</td><td>35</td><td>0</td><td>841</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>828</td><td></td></tr>
<tr><td>9</td><td>27</td><td>0</td><td>825</td><td></td></tr>
<tr><td>10</td><td>28</td><td>0</td><td>812</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>32</td><td>0</td><td>742</td><td></td></tr>
<tr><td>2</td><td>41</td><td>0</td><td>767</td><td></td></tr>
<tr><td>3</td><td>29</td><td>0</td><td>769</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>772</td><td></td></tr>
<tr><td>5</td><td>28</td><td>0</td><td>812</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>821</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>825</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>828</td><td></td></tr>
<tr><td>9</td><td>30</td><td>0</td><td>895</td><td></td></tr>
<tr><td>10</td><td>26</td><td>0</td><td>898</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>30</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>38</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>40</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>28</td><td>0</td><td>1</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>32</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>35</td><td>0</td><td>23.30%</td><td></td></tr>
<tr><td>2</td><td>26</td><td>0</td><td>22.30%</td><td></td></tr>
<tr><td>3</td><td>27</td><td>0</td><td>22.30%</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>21.40%</td><td></td></tr>
<tr><td>5</td><td>40</td><td>0</td><td>20.70%</td><td></td></tr>
<tr><td>6</td><td>38</td><td>0</td><td>19.80%</td><td></td></tr>
<tr><td>7</td><td>34</td><td>0</td><td>19.50%</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>9</td><td>33</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>10</td><td>30</td><td>0</td><td>18.10%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>2</td><td>31</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>3</td><td>36</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>4</td><td>34</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>7</td><td>28</td><td>0</td><td>81.00%</td><td></td></tr>
<tr><td>8</td><td>29</td><td>0</td><td>80.60%</td><td></td></tr>
<tr><td>9</td><td>30</td><td>0</td><td>78.20%</td><td></td></tr>
<tr><td>10</td><td>26</td><td>0</td><td>74.80%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>28</td><td>0</td><td>13.80%</td><td></td></tr>
<tr><td>2</td><td>37</td><td>0</td><td>13.80%</td><td></td></tr>
<tr><td>3</td><td>39</td><td>0</td><td>14.50%</td><td></td></tr>
<tr><td>4</td><td>29</td><td>0</td><td>14.90%</td><td></td></tr>
<tr><td>5</td><td>31</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>7</td><td>32</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>8</td><td>30</td><td>0</td><td>18.10%</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>10</td><td>26</td><td>0</td><td>22.30%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>26</td><td>0</td><td>74.80%</td><td></td></tr>
<tr><td>2</td><td>41</td><td>0</td><td>78.00%</td><td></td></tr>
<tr><td>3</td><td>30</td><td>0</td><td>78.20%</td><td></td></tr>
<tr><td>4</td><td>38</td><td>0</td><td>78.20%</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>78.50%</td><td></td></tr>
<tr><td>6</td><td>32</td><td>0</td><td>78.80%</td><td></td></tr>
<tr><td>7</td><td>37</td><td>0</td><td>79.20%</td><td></td></tr>
<tr><td>8</td><td>35</td><td>0</td><td>80.00%</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>80.60%</td><td></td></tr>
<tr><td>10</td><td>28</td><td>0</td><td>81.00%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>39</td><td>0</td><td>31</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>30</td><td></td></tr>
<tr><td>3</td><td>37</td><td>0</td><td>29</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>29</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>27</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>27</td><td></td></tr>
<tr><td>7</td><td>36</td><td>0</td><td>27</td><td></td></tr>
<tr><td>8</td><td>34</td><td>0</td><td>26</td><td></td></tr>
<tr><td>9</td><td>33</td><td>0</td><td>23</td><td></td></tr>
<tr><td>10</td><td>28</td><td>0</td><td>22</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>0</td><td>16</td><td></td></tr>
<tr><td>2</td><td>30</td><td>0</td><td>17</td><td></td></tr>
<tr><td>3</td><td>32</td><td>0</td><td>18</td><td></td></tr>
<tr><td>4</td><td>25</td><td>0</td><td>19</td><td></td></tr>
<tr><td>5</td><td>28</td><td>0</td><td>22</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>27</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>30</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>0</td><td>34</td><td></td></tr>
<tr><td>2</td><td>30</td><td>0</td><td>33</td><td></td></tr>
<tr><td>3</td><td>32</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>25</td><td>0</td><td>31</td><td></td></tr>
<tr><td>5</td><td>28</td><td>0</td><td>28</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>23</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>20</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>39</td><td>0</td><td>19</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>20</td><td></td></tr>
<tr><td>3</td><td>37</td><td>0</td><td>21</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>21</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>23</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>23</td><td></td></tr>
<tr><td>7</td><td>36</td><td>0</td><td>23</td><td></td></tr>
<tr><td>8</td><td>34</td><td>0</td><td>24</td><td></td></tr>
<tr><td>9</td><td>33</td><td>0</td><td>27</td><td></td></tr>
<tr><td>10</td><td>28</td><td>0</td><td>28</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>0</td><td>65</td><td></td></tr>
<tr><td>2</td><td>39</td><td>0</td><td>65</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>62</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>61</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>59</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>57</td><td></td></tr>
<tr><td>7</td><td>34</td><td>0</td><td>57</td><td></td></tr>
<tr><td>8</td><td>36</td><td>0</td><td>57</td><td></td></tr>
<tr><td>9</td><td>28</td><td>0</td><td>52</td><td></td></tr>
<tr><td>10</td><td>33</td><td>0</td><td>52</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>0</td><td>37</td><td></td></tr>
<tr><td>2</td><td>32</td><td>0</td><td>40</td><td></td></tr>
<tr><td>3</td><td>30</td><td>0</td><td>43</td><td></td></tr>
<tr><td>4</td><td>25</td><td>0</td><td>44</td><td></td></tr>
<tr><td>5</td><td>38</td><td>0</td><td>48</td><td></td></tr>
<tr><td>6</td><td>35</td><td>0</td><td>49</td><td></td></tr>
<tr><td>7</td><td>28</td><td>0</td><td>52</td><td></td></tr>
<tr><td>8</td><td>31</td><td>0</td><td>57</td><td></td></tr>
<tr><td>9</td><td>26</td><td>0</td><td>59</td><td></td></tr>
<tr><td>10</td><td>27</td><td>0</td><td>65</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>16</td><td></td></tr>
<tr><td>2</td><td>31</td><td>0</td><td>13</td><td></td></tr>
<tr><td>3</td><td>27</td><td>0</td><td>12</td><td></td></tr>
<tr><td>4</td><td>26</td><td>0</td><td>11</td><td></td></tr>
<tr><td>5</td><td>37</td><td>0</td><td>11</td><td></td></tr>
<tr><td>6</td><td>30</td><td>0</td><td>10</td><td></td></tr>
<tr><td>7</td><td>35</td><td>0</td><td>10</td><td></td></tr>
<tr><td>8</td><td>32</td><td>0</td><td>9</td><td></td></tr>
<tr><td>9</td><td>28</td><td>0</td><td>8</td><td></td></tr>
<tr><td>10</td><td>25</td><td>0</td><td>7</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>39</td><td>0</td><td>14</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>12</td><td></td></tr>
<tr><td>3</td><td>34</td><td>0</td><td>12</td><td></td></tr>
<tr><td>4</td><td>35</td><td>0</td><td>12</td><td></td></tr>
<tr><td>5</td><td>36</td><td>0</td><td>12</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>11</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>10</td><td></td></tr>
<tr><td>8</td><td>33</td><td>0</td><td>10</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>9</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>9</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_SCN"><a id="Scandinavia">Scandinavia</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-PRE-ProTeamRoster.php#Scandinavia">Pro Team Roster</a> ]
[ <a href="SMJHL-PRE-ProTeamScoring.php#Scandinavia">Pro Team Scoring</a> ]
[ <a href="SMJHL-PRE-ProTeamLines.php#Scandinavia">Pro Team Lines</a> ]
[ <a href="SMJHL-PRE-ProTeamSchedule.php#Scandinavia">Pro Team Schedule</a> ]
[ <a href="SMJHL-PRE-ProTeamStats.php#Scandinavia">Pro Team Stats</a> ]
[ <a href="SMJHL-PRE-ProTeamStatsVS.php#Scandinavia">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Scandinavia');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Scandinavia" style="display: block;">
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>22</td><td>112</td><td>8</td><td></td></tr><tr><td>2</td><td>39</td><td>18</td><td>8</td><td></td></tr><tr><td>3</td><td>8</td><td>127</td><td>7</td><td></td></tr><tr><td>4</td><td>8</td><td>133</td><td>7</td><td></td></tr><tr><td>5</td><td>11</td><td>53</td><td>7</td><td></td></tr><tr><td>6</td><td>12</td><td>112</td><td>7</td><td></td></tr><tr><td>7</td><td>16</td><td>41</td><td>7</td><td></td></tr><tr><td>8</td><td>18</td><td>17</td><td>7</td><td></td></tr><tr><td>9</td><td>18</td><td>66</td><td>7</td><td></td></tr><tr><td>10</td><td>22</td><td>25</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>38</td><td>0</td><td>174</td><td></td></tr>
<tr><td>2</td><td>25</td><td>0</td><td>161</td><td></td></tr>
<tr><td>3</td><td>37</td><td>0</td><td>156</td><td></td></tr>
<tr><td>4</td><td>39</td><td>0</td><td>155</td><td></td></tr>
<tr><td>5</td><td>24</td><td>0</td><td>146</td><td></td></tr>
<tr><td>6</td><td>33</td><td>0</td><td>146</td><td></td></tr>
<tr><td>7</td><td>36</td><td>0</td><td>143</td><td></td></tr>
<tr><td>8</td><td>8</td><td>0</td><td>141</td><td></td></tr>
<tr><td>9</td><td>34</td><td>0</td><td>139</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>133</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>28</td><td>0</td><td>87</td><td></td></tr>
<tr><td>2</td><td>10</td><td>0</td><td>91</td><td></td></tr>
<tr><td>3</td><td>17</td><td>0</td><td>94</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>98</td><td></td></tr>
<tr><td>5</td><td>40</td><td>0</td><td>99</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>106</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>108</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>113</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>126</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>131</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>0</td><td>195</td><td></td></tr>
<tr><td>2</td><td>40</td><td>0</td><td>191</td><td></td></tr>
<tr><td>3</td><td>24</td><td>0</td><td>166</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>158</td><td></td></tr>
<tr><td>5</td><td>21</td><td>0</td><td>155</td><td></td></tr>
<tr><td>6</td><td>20</td><td>0</td><td>149</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>147</td><td></td></tr>
<tr><td>8</td><td>11</td><td>0</td><td>146</td><td></td></tr>
<tr><td>9</td><td>9</td><td>0</td><td>145</td><td></td></tr>
<tr><td>10</td><td>22</td><td>0</td><td>144</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>82</td><td></td></tr>
<tr><td>2</td><td>17</td><td>0</td><td>86</td><td></td></tr>
<tr><td>3</td><td>10</td><td>0</td><td>108</td><td></td></tr>
<tr><td>4</td><td>12</td><td>0</td><td>108</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>122</td><td></td></tr>
<tr><td>6</td><td>18</td><td>0</td><td>124</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>128</td><td></td></tr>
<tr><td>8</td><td>16</td><td>0</td><td>134</td><td></td></tr>
<tr><td>9</td><td>14</td><td>0</td><td>135</td><td></td></tr>
<tr><td>10</td><td>9</td><td>0</td><td>145</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>39</td><td>18</td><td>15</td><td></td></tr><tr><td>2</td><td>18</td><td>66</td><td>14</td><td></td></tr><tr><td>3</td><td>22</td><td>25</td><td>13</td><td></td></tr><tr><td>4</td><td>22</td><td>112</td><td>13</td><td></td></tr><tr><td>5</td><td>27</td><td>17</td><td>13</td><td></td></tr><tr><td>6</td><td>34</td><td>66</td><td>13</td><td></td></tr><tr><td>7</td><td>11</td><td>53</td><td>12</td><td></td></tr><tr><td>8</td><td>12</td><td>112</td><td>12</td><td></td></tr><tr><td>9</td><td>14</td><td>55</td><td>12</td><td></td></tr><tr><td>10</td><td>16</td><td>83</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>38</td><td>0</td><td>299</td><td></td></tr>
<tr><td>2</td><td>39</td><td>0</td><td>279</td><td></td></tr>
<tr><td>3</td><td>25</td><td>0</td><td>276</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>272</td><td></td></tr>
<tr><td>5</td><td>24</td><td>0</td><td>256</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>252</td><td></td></tr>
<tr><td>7</td><td>33</td><td>0</td><td>250</td><td></td></tr>
<tr><td>8</td><td>34</td><td>0</td><td>241</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>234</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>232</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>137</td><td></td></tr>
<tr><td>2</td><td>10</td><td>0</td><td>141</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>154</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>162</td><td></td></tr>
<tr><td>5</td><td>40</td><td>0</td><td>173</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>183</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>184</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>192</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>212</td><td></td></tr>
<tr><td>10</td><td>8</td><td>0</td><td>219</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>39</td><td>18</td><td>23</td><td></td></tr><tr><td>2</td><td>18</td><td>66</td><td>21</td><td></td></tr><tr><td>3</td><td>22</td><td>112</td><td>21</td><td></td></tr><tr><td>4</td><td>22</td><td>25</td><td>20</td><td></td></tr><tr><td>5</td><td>27</td><td>17</td><td>20</td><td></td></tr><tr><td>6</td><td>34</td><td>66</td><td>20</td><td></td></tr><tr><td>7</td><td>11</td><td>53</td><td>19</td><td></td></tr><tr><td>8</td><td>12</td><td>112</td><td>19</td><td></td></tr><tr><td>9</td><td>18</td><td>17</td><td>19</td><td></td></tr><tr><td>10</td><td>38</td><td>139</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>38</td><td>0</td><td>473</td><td></td></tr>
<tr><td>2</td><td>25</td><td>0</td><td>437</td><td></td></tr>
<tr><td>3</td><td>39</td><td>0</td><td>434</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>428</td><td></td></tr>
<tr><td>5</td><td>24</td><td>0</td><td>402</td><td></td></tr>
<tr><td>6</td><td>33</td><td>0</td><td>396</td><td></td></tr>
<tr><td>7</td><td>36</td><td>0</td><td>395</td><td></td></tr>
<tr><td>8</td><td>34</td><td>0</td><td>380</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>367</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>363</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>231</td><td></td></tr>
<tr><td>2</td><td>10</td><td>0</td><td>232</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>241</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>260</td><td></td></tr>
<tr><td>5</td><td>40</td><td>0</td><td>272</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>289</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>292</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>305</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>338</td><td></td></tr>
<tr><td>10</td><td>8</td><td>0</td><td>360</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>9</td><td>114</td><td>51</td><td></td></tr><tr><td>2</td><td>12</td><td>87</td><td>50</td><td></td></tr><tr><td>3</td><td>12</td><td>11</td><td>48</td><td></td></tr><tr><td>4</td><td>12</td><td>120</td><td>48</td><td></td></tr><tr><td>5</td><td>14</td><td>83</td><td>47</td><td></td></tr><tr><td>6</td><td>10</td><td>85</td><td>46</td><td></td></tr><tr><td>7</td><td>12</td><td>13</td><td>46</td><td></td></tr><tr><td>8</td><td>39</td><td>24</td><td>46</td><td></td></tr><tr><td>9</td><td>12</td><td>114</td><td>45</td><td></td></tr><tr><td>10</td><td>14</td><td>110</td><td>45</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>39</td><td>0</td><td>1377</td><td></td></tr>
<tr><td>2</td><td>38</td><td>0</td><td>1354</td><td></td></tr>
<tr><td>3</td><td>37</td><td>0</td><td>1353</td><td></td></tr>
<tr><td>4</td><td>12</td><td>0</td><td>1346</td><td></td></tr>
<tr><td>5</td><td>9</td><td>0</td><td>1291</td><td></td></tr>
<tr><td>6</td><td>33</td><td>0</td><td>1247</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>1227</td><td></td></tr>
<tr><td>8</td><td>34</td><td>0</td><td>1226</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>1195</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>1176</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>858</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>889</td><td></td></tr>
<tr><td>3</td><td>18</td><td>0</td><td>948</td><td></td></tr>
<tr><td>4</td><td>28</td><td>0</td><td>964</td><td></td></tr>
<tr><td>5</td><td>19</td><td>0</td><td>969</td><td></td></tr>
<tr><td>6</td><td>21</td><td>0</td><td>974</td><td></td></tr>
<tr><td>7</td><td>23</td><td>0</td><td>979</td><td></td></tr>
<tr><td>8</td><td>22</td><td>0</td><td>1010</td><td></td></tr>
<tr><td>9</td><td>20</td><td>0</td><td>1019</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>1063</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>9</td><td>78</td><td>27</td><td></td></tr><tr><td>2</td><td>8</td><td>68</td><td>26</td><td></td></tr><tr><td>3</td><td>11</td><td>90</td><td>25</td><td></td></tr><tr><td>4</td><td>23</td><td>63</td><td>21</td><td></td></tr><tr><td>5</td><td>9</td><td>22</td><td>20</td><td></td></tr><tr><td>6</td><td>8</td><td>99</td><td>19</td><td></td></tr><tr><td>7</td><td>32</td><td>120</td><td>19</td><td></td></tr><tr><td>8</td><td>9</td><td>99</td><td>18</td><td></td></tr><tr><td>9</td><td>11</td><td>65</td><td>18</td><td></td></tr><tr><td>10</td><td>11</td><td>96</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>443</td><td></td></tr>
<tr><td>2</td><td>31</td><td>0</td><td>429</td><td></td></tr>
<tr><td>3</td><td>9</td><td>0</td><td>426</td><td></td></tr>
<tr><td>4</td><td>41</td><td>0</td><td>396</td><td></td></tr>
<tr><td>5</td><td>38</td><td>0</td><td>390</td><td></td></tr>
<tr><td>6</td><td>8</td><td>0</td><td>388</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>388</td><td></td></tr>
<tr><td>8</td><td>36</td><td>0</td><td>388</td><td></td></tr>
<tr><td>9</td><td>35</td><td>0</td><td>385</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>372</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>12</td><td>0</td><td>262</td><td></td></tr>
<tr><td>2</td><td>17</td><td>0</td><td>280</td><td></td></tr>
<tr><td>3</td><td>19</td><td>0</td><td>280</td><td></td></tr>
<tr><td>4</td><td>18</td><td>0</td><td>295</td><td></td></tr>
<tr><td>5</td><td>29</td><td>0</td><td>304</td><td></td></tr>
<tr><td>6</td><td>28</td><td>0</td><td>306</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>310</td><td></td></tr>
<tr><td>8</td><td>10</td><td>0</td><td>329</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>355</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>370</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>1539</td><td></td></tr>
<tr><td>2</td><td>41</td><td>0</td><td>1385</td><td></td></tr>
<tr><td>3</td><td>25</td><td>0</td><td>1340</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>1327</td><td></td></tr>
<tr><td>5</td><td>37</td><td>0</td><td>1311</td><td></td></tr>
<tr><td>6</td><td>24</td><td>0</td><td>1310</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>1282</td><td></td></tr>
<tr><td>8</td><td>15</td><td>0</td><td>1278</td><td></td></tr>
<tr><td>9</td><td>9</td><td>0</td><td>1275</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>1215</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>899</td><td></td></tr>
<tr><td>2</td><td>18</td><td>0</td><td>1027</td><td></td></tr>
<tr><td>3</td><td>19</td><td>0</td><td>1032</td><td></td></tr>
<tr><td>4</td><td>22</td><td>0</td><td>1080</td><td></td></tr>
<tr><td>5</td><td>10</td><td>0</td><td>1086</td><td></td></tr>
<tr><td>6</td><td>8</td><td>0</td><td>1102</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>1114</td><td></td></tr>
<tr><td>8</td><td>14</td><td>0</td><td>1136</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>1182</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>1215</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>26</td><td>35</td><td>57</td><td></td></tr><tr><td>2</td><td>8</td><td>29</td><td>40</td><td></td></tr><tr><td>3</td><td>31</td><td>68</td><td>39</td><td></td></tr><tr><td>4</td><td>35</td><td>93</td><td>39</td><td></td></tr><tr><td>5</td><td>14</td><td>17</td><td>38</td><td></td></tr><tr><td>6</td><td>29</td><td>94</td><td>38</td><td></td></tr><tr><td>7</td><td>8</td><td>83</td><td>34</td><td></td></tr><tr><td>8</td><td>9</td><td>22</td><td>34</td><td></td></tr><tr><td>9</td><td>40</td><td>6</td><td>34</td><td></td></tr><tr><td>10</td><td>25</td><td>185</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>26</td><td>0</td><td>681</td><td></td></tr>
<tr><td>2</td><td>25</td><td>0</td><td>671</td><td></td></tr>
<tr><td>3</td><td>30</td><td>0</td><td>530</td><td></td></tr>
<tr><td>4</td><td>27</td><td>0</td><td>527</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>499</td><td></td></tr>
<tr><td>6</td><td>31</td><td>0</td><td>482</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>478</td><td></td></tr>
<tr><td>8</td><td>19</td><td>0</td><td>476</td><td></td></tr>
<tr><td>9</td><td>23</td><td>0</td><td>452</td><td></td></tr>
<tr><td>10</td><td>20</td><td>0</td><td>438</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>16</td><td>0</td><td>115</td><td></td></tr>
<tr><td>2</td><td>17</td><td>0</td><td>140</td><td></td></tr>
<tr><td>3</td><td>12</td><td>0</td><td>210</td><td></td></tr>
<tr><td>4</td><td>10</td><td>0</td><td>222</td><td></td></tr>
<tr><td>5</td><td>11</td><td>0</td><td>252</td><td></td></tr>
<tr><td>6</td><td>15</td><td>0</td><td>268</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>277</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>392</td><td></td></tr>
<tr><td>9</td><td>8</td><td>0</td><td>400</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>159</td><td>42</td><td></td></tr><tr><td>2</td><td>10</td><td>118</td><td>42</td><td></td></tr><tr><td>3</td><td>11</td><td>18</td><td>41</td><td></td></tr><tr><td>4</td><td>10</td><td>45</td><td>40</td><td></td></tr><tr><td>5</td><td>10</td><td>91</td><td>40</td><td></td></tr><tr><td>6</td><td>9</td><td>110</td><td>39</td><td></td></tr><tr><td>7</td><td>10</td><td>114</td><td>39</td><td></td></tr><tr><td>8</td><td>9</td><td>114</td><td>38</td><td></td></tr><tr><td>9</td><td>10</td><td>37</td><td>38</td><td></td></tr><tr><td>10</td><td>15</td><td>5</td><td>38</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>1065</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>1054</td><td></td></tr>
<tr><td>3</td><td>17</td><td>0</td><td>1030</td><td></td></tr>
<tr><td>4</td><td>9</td><td>0</td><td>959</td><td></td></tr>
<tr><td>5</td><td>11</td><td>0</td><td>888</td><td></td></tr>
<tr><td>6</td><td>14</td><td>0</td><td>874</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>853</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>20</td><td>0</td><td>618</td><td></td></tr>
<tr><td>2</td><td>22</td><td>0</td><td>624</td><td></td></tr>
<tr><td>3</td><td>18</td><td>0</td><td>637</td><td></td></tr>
<tr><td>4</td><td>23</td><td>0</td><td>660</td><td></td></tr>
<tr><td>5</td><td>16</td><td>0</td><td>683</td><td></td></tr>
<tr><td>6</td><td>19</td><td>0</td><td>702</td><td></td></tr>
<tr><td>7</td><td>21</td><td>0</td><td>753</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>853</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>867</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>874</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>15</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>11</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>18</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>19</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>28</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>8</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>9</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>10</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>14</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>31.60%</td><td></td></tr>
<tr><td>2</td><td>14</td><td>0</td><td>26.70%</td><td></td></tr>
<tr><td>3</td><td>38</td><td>0</td><td>24.60%</td><td></td></tr>
<tr><td>4</td><td>23</td><td>0</td><td>24.20%</td><td></td></tr>
<tr><td>5</td><td>22</td><td>0</td><td>23.70%</td><td></td></tr>
<tr><td>6</td><td>37</td><td>0</td><td>23.70%</td><td></td></tr>
<tr><td>7</td><td>36</td><td>0</td><td>23.50%</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>22.70%</td><td></td></tr>
<tr><td>9</td><td>19</td><td>0</td><td>21.10%</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>20.60%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>85.20%</td><td></td></tr>
<tr><td>2</td><td>12</td><td>0</td><td>84.40%</td><td></td></tr>
<tr><td>3</td><td>33</td><td>0</td><td>84.40%</td><td></td></tr>
<tr><td>4</td><td>29</td><td>0</td><td>84.10%</td><td></td></tr>
<tr><td>5</td><td>11</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>6</td><td>9</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>7</td><td>8</td><td>0</td><td>83.10%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>7.80%</td><td></td></tr>
<tr><td>2</td><td>11</td><td>0</td><td>8.20%</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>13.30%</td><td></td></tr>
<tr><td>4</td><td>40</td><td>0</td><td>13.40%</td><td></td></tr>
<tr><td>5</td><td>9</td><td>0</td><td>14.40%</td><td></td></tr>
<tr><td>6</td><td>32</td><td>0</td><td>15.30%</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>15.90%</td><td></td></tr>
<tr><td>8</td><td>27</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>9</td><td>20</td><td>0</td><td>17.20%</td><td></td></tr>
<tr><td>10</td><td>24</td><td>0</td><td>18.00%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>70.60%</td><td></td></tr>
<tr><td>2</td><td>24</td><td>0</td><td>74.10%</td><td></td></tr>
<tr><td>3</td><td>21</td><td>0</td><td>74.20%</td><td></td></tr>
<tr><td>4</td><td>27</td><td>0</td><td>74.40%</td><td></td></tr>
<tr><td>5</td><td>23</td><td>0</td><td>75.30%</td><td></td></tr>
<tr><td>6</td><td>15</td><td>0</td><td>76.60%</td><td></td></tr>
<tr><td>7</td><td>18</td><td>0</td><td>77.20%</td><td></td></tr>
<tr><td>8</td><td>14</td><td>0</td><td>77.40%</td><td></td></tr>
<tr><td>9</td><td>20</td><td>0</td><td>79.00%</td><td></td></tr>
<tr><td>10</td><td>19</td><td>0</td><td>79.30%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>33</td><td></td></tr>
<tr><td>2</td><td>38</td><td>0</td><td>33</td><td></td></tr>
<tr><td>3</td><td>33</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>12</td><td>0</td><td>27</td><td></td></tr>
<tr><td>5</td><td>37</td><td>0</td><td>27</td><td></td></tr>
<tr><td>6</td><td>32</td><td>0</td><td>26</td><td></td></tr>
<tr><td>7</td><td>36</td><td>0</td><td>26</td><td></td></tr>
<tr><td>8</td><td>34</td><td>0</td><td>25</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>24</td><td></td></tr>
<tr><td>10</td><td>25</td><td>0</td><td>23</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>9</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>11</td><td></td></tr>
<tr><td>3</td><td>11</td><td>0</td><td>12</td><td></td></tr>
<tr><td>4</td><td>28</td><td>0</td><td>12</td><td></td></tr>
<tr><td>5</td><td>15</td><td>0</td><td>15</td><td></td></tr>
<tr><td>6</td><td>21</td><td>0</td><td>16</td><td></td></tr>
<tr><td>7</td><td>9</td><td>0</td><td>17</td><td></td></tr>
<tr><td>8</td><td>19</td><td>0</td><td>17</td><td></td></tr>
<tr><td>9</td><td>20</td><td>0</td><td>17</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>18</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>41</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>39</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>38</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>30</td><td></td></tr>
<tr><td>5</td><td>31</td><td>0</td><td>30</td><td></td></tr>
<tr><td>6</td><td>11</td><td>0</td><td>28</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>28</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>27</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>25</td><td></td></tr>
<tr><td>10</td><td>21</td><td>0</td><td>24</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>7</td><td></td></tr>
<tr><td>2</td><td>12</td><td>0</td><td>13</td><td></td></tr>
<tr><td>3</td><td>38</td><td>0</td><td>17</td><td></td></tr>
<tr><td>4</td><td>17</td><td>0</td><td>18</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>18</td><td></td></tr>
<tr><td>6</td><td>16</td><td>0</td><td>20</td><td></td></tr>
<tr><td>7</td><td>18</td><td>0</td><td>21</td><td></td></tr>
<tr><td>8</td><td>10</td><td>0</td><td>22</td><td></td></tr>
<tr><td>9</td><td>14</td><td>0</td><td>22</td><td></td></tr>
<tr><td>10</td><td>9</td><td>0</td><td>23</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>68</td><td></td></tr>
<tr><td>2</td><td>33</td><td>0</td><td>67</td><td></td></tr>
<tr><td>3</td><td>38</td><td>0</td><td>67</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>58</td><td></td></tr>
<tr><td>5</td><td>32</td><td>0</td><td>57</td><td></td></tr>
<tr><td>6</td><td>36</td><td>0</td><td>57</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>56</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>55</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>53</td><td></td></tr>
<tr><td>10</td><td>24</td><td>0</td><td>52</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>23</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>24</td><td></td></tr>
<tr><td>3</td><td>11</td><td>0</td><td>31</td><td></td></tr>
<tr><td>4</td><td>15</td><td>0</td><td>32</td><td></td></tr>
<tr><td>5</td><td>28</td><td>0</td><td>34</td><td></td></tr>
<tr><td>6</td><td>19</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>20</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>38</td><td></td></tr>
<tr><td>9</td><td>10</td><td>0</td><td>38</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>41</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>38</td><td>0</td><td>16</td><td></td></tr>
<tr><td>2</td><td>33</td><td>0</td><td>14</td><td></td></tr>
<tr><td>3</td><td>8</td><td>0</td><td>13</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>12</td><td></td></tr>
<tr><td>5</td><td>36</td><td>0</td><td>12</td><td></td></tr>
<tr><td>6</td><td>12</td><td>0</td><td>10</td><td></td></tr>
<tr><td>7</td><td>16</td><td>0</td><td>10</td><td></td></tr>
<tr><td>8</td><td>23</td><td>0</td><td>9</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>9</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>8</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>38</td><td>0</td><td>15</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>13</td><td></td></tr>
<tr><td>3</td><td>35</td><td>0</td><td>13</td><td></td></tr>
<tr><td>4</td><td>39</td><td>0</td><td>13</td><td></td></tr>
<tr><td>5</td><td>12</td><td>0</td><td>12</td><td></td></tr>
<tr><td>6</td><td>32</td><td>0</td><td>11</td><td></td></tr>
<tr><td>7</td><td>37</td><td>0</td><td>11</td><td></td></tr>
<tr><td>8</td><td>24</td><td>0</td><td>10</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>9</td><td></td></tr>
<tr><td>10</td><td>30</td><td>0</td><td>9</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_WOR"><a id="TeamWorld">Team World</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-PRE-ProTeamRoster.php#TeamWorld">Pro Team Roster</a> ]
[ <a href="SMJHL-PRE-ProTeamScoring.php#TeamWorld">Pro Team Scoring</a> ]
[ <a href="SMJHL-PRE-ProTeamLines.php#TeamWorld">Pro Team Lines</a> ]
[ <a href="SMJHL-PRE-ProTeamSchedule.php#TeamWorld">Pro Team Schedule</a> ]
[ <a href="SMJHL-PRE-ProTeamStats.php#TeamWorld">Pro Team Stats</a> ]
[ <a href="SMJHL-PRE-ProTeamStatsVS.php#TeamWorld">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_TeamWorld');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_TeamWorld" style="display: block;">
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>14</td><td>11</td><td></td></tr><tr><td>2</td><td>8</td><td>30</td><td>11</td><td></td></tr><tr><td>3</td><td>11</td><td>54</td><td>10</td><td></td></tr><tr><td>4</td><td>8</td><td>104</td><td>9</td><td></td></tr><tr><td>5</td><td>10</td><td>27</td><td>9</td><td></td></tr><tr><td>6</td><td>11</td><td>10</td><td>9</td><td></td></tr><tr><td>7</td><td>8</td><td>59</td><td>8</td><td></td></tr><tr><td>8</td><td>8</td><td>120</td><td>8</td><td></td></tr><tr><td>9</td><td>11</td><td>113</td><td>8</td><td></td></tr><tr><td>10</td><td>20</td><td>76</td><td>8</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>24</td><td>0</td><td>195</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>190</td><td></td></tr>
<tr><td>3</td><td>30</td><td>0</td><td>161</td><td></td></tr>
<tr><td>4</td><td>23</td><td>0</td><td>159</td><td></td></tr>
<tr><td>5</td><td>11</td><td>0</td><td>158</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>156</td><td></td></tr>
<tr><td>7</td><td>22</td><td>0</td><td>154</td><td></td></tr>
<tr><td>8</td><td>10</td><td>0</td><td>143</td><td></td></tr>
<tr><td>9</td><td>21</td><td>0</td><td>142</td><td></td></tr>
<tr><td>10</td><td>20</td><td>0</td><td>137</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>99</td><td></td></tr>
<tr><td>2</td><td>16</td><td>0</td><td>113</td><td></td></tr>
<tr><td>3</td><td>19</td><td>0</td><td>115</td><td></td></tr>
<tr><td>4</td><td>18</td><td>0</td><td>116</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>120</td><td></td></tr>
<tr><td>6</td><td>14</td><td>0</td><td>122</td><td></td></tr>
<tr><td>7</td><td>9</td><td>0</td><td>124</td><td></td></tr>
<tr><td>8</td><td>15</td><td>0</td><td>129</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>132</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>143</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>25</td><td>0</td><td>173</td><td></td></tr>
<tr><td>2</td><td>26</td><td>0</td><td>162</td><td></td></tr>
<tr><td>3</td><td>27</td><td>0</td><td>161</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>158</td><td></td></tr>
<tr><td>5</td><td>32</td><td>0</td><td>155</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>149</td><td></td></tr>
<tr><td>7</td><td>20</td><td>0</td><td>135</td><td></td></tr>
<tr><td>8</td><td>23</td><td>0</td><td>133</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>132</td><td></td></tr>
<tr><td>10</td><td>15</td><td>0</td><td>129</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>89</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>90</td><td></td></tr>
<tr><td>3</td><td>18</td><td>0</td><td>93</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>97</td><td></td></tr>
<tr><td>5</td><td>9</td><td>0</td><td>99</td><td></td></tr>
<tr><td>6</td><td>14</td><td>0</td><td>102</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>132</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>14</td><td>18</td><td></td></tr><tr><td>2</td><td>8</td><td>30</td><td>18</td><td></td></tr><tr><td>3</td><td>8</td><td>104</td><td>15</td><td></td></tr><tr><td>4</td><td>20</td><td>76</td><td>15</td><td></td></tr><tr><td>5</td><td>27</td><td>179</td><td>15</td><td></td></tr><tr><td>6</td><td>8</td><td>59</td><td>14</td><td></td></tr><tr><td>7</td><td>8</td><td>120</td><td>14</td><td></td></tr><tr><td>8</td><td>17</td><td>92</td><td>14</td><td></td></tr><tr><td>9</td><td>20</td><td>117</td><td>14</td><td></td></tr><tr><td>10</td><td>22</td><td>30</td><td>14</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>24</td><td>0</td><td>347</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>307</td><td></td></tr>
<tr><td>3</td><td>30</td><td>0</td><td>282</td><td></td></tr>
<tr><td>4</td><td>23</td><td>0</td><td>278</td><td></td></tr>
<tr><td>5</td><td>34</td><td>0</td><td>276</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>271</td><td></td></tr>
<tr><td>7</td><td>22</td><td>0</td><td>269</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>256</td><td></td></tr>
<tr><td>9</td><td>11</td><td>0</td><td>254</td><td></td></tr>
<tr><td>10</td><td>21</td><td>0</td><td>248</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>153</td><td></td></tr>
<tr><td>2</td><td>19</td><td>0</td><td>199</td><td></td></tr>
<tr><td>3</td><td>9</td><td>0</td><td>201</td><td></td></tr>
<tr><td>4</td><td>16</td><td>0</td><td>202</td><td></td></tr>
<tr><td>5</td><td>18</td><td>0</td><td>202</td><td></td></tr>
<tr><td>6</td><td>14</td><td>0</td><td>212</td><td></td></tr>
<tr><td>7</td><td>10</td><td>0</td><td>220</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>229</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>230</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>254</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>14</td><td>29</td><td></td></tr><tr><td>2</td><td>8</td><td>30</td><td>29</td><td></td></tr><tr><td>3</td><td>8</td><td>104</td><td>24</td><td></td></tr><tr><td>4</td><td>20</td><td>76</td><td>23</td><td></td></tr><tr><td>5</td><td>27</td><td>179</td><td>23</td><td></td></tr><tr><td>6</td><td>8</td><td>59</td><td>22</td><td></td></tr><tr><td>7</td><td>8</td><td>120</td><td>22</td><td></td></tr><tr><td>8</td><td>10</td><td>27</td><td>22</td><td></td></tr><tr><td>9</td><td>11</td><td>10</td><td>22</td><td></td></tr><tr><td>10</td><td>11</td><td>54</td><td>22</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>24</td><td>0</td><td>542</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>497</td><td></td></tr>
<tr><td>3</td><td>30</td><td>0</td><td>443</td><td></td></tr>
<tr><td>4</td><td>23</td><td>0</td><td>437</td><td></td></tr>
<tr><td>5</td><td>34</td><td>0</td><td>433</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>427</td><td></td></tr>
<tr><td>7</td><td>22</td><td>0</td><td>423</td><td></td></tr>
<tr><td>8</td><td>11</td><td>0</td><td>412</td><td></td></tr>
<tr><td>9</td><td>21</td><td>0</td><td>390</td><td></td></tr>
<tr><td>10</td><td>20</td><td>0</td><td>375</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>252</td><td></td></tr>
<tr><td>2</td><td>19</td><td>0</td><td>314</td><td></td></tr>
<tr><td>3</td><td>16</td><td>0</td><td>315</td><td></td></tr>
<tr><td>4</td><td>18</td><td>0</td><td>318</td><td></td></tr>
<tr><td>5</td><td>9</td><td>0</td><td>325</td><td></td></tr>
<tr><td>6</td><td>14</td><td>0</td><td>334</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>359</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>361</td><td></td></tr>
<tr><td>9</td><td>10</td><td>0</td><td>363</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>412</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>16</td><td>79</td><td>51</td><td></td></tr><tr><td>2</td><td>23</td><td>34</td><td>48</td><td></td></tr><tr><td>3</td><td>23</td><td>5</td><td>47</td><td></td></tr><tr><td>4</td><td>15</td><td>5</td><td>46</td><td></td></tr><tr><td>5</td><td>8</td><td>14</td><td>45</td><td></td></tr><tr><td>6</td><td>15</td><td>11</td><td>45</td><td></td></tr><tr><td>7</td><td>24</td><td>118</td><td>45</td><td></td></tr><tr><td>8</td><td>40</td><td>59</td><td>45</td><td></td></tr><tr><td>9</td><td>8</td><td>30</td><td>44</td><td></td></tr><tr><td>10</td><td>8</td><td>59</td><td>44</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>24</td><td>0</td><td>1559</td><td></td></tr>
<tr><td>2</td><td>30</td><td>0</td><td>1489</td><td></td></tr>
<tr><td>3</td><td>29</td><td>0</td><td>1346</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>1334</td><td></td></tr>
<tr><td>5</td><td>15</td><td>0</td><td>1310</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>1298</td><td></td></tr>
<tr><td>7</td><td>23</td><td>0</td><td>1224</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>1207</td><td></td></tr>
<tr><td>9</td><td>8</td><td>0</td><td>1202</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>1173</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>832</td><td></td></tr>
<tr><td>2</td><td>18</td><td>0</td><td>842</td><td></td></tr>
<tr><td>3</td><td>19</td><td>0</td><td>941</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>978</td><td></td></tr>
<tr><td>5</td><td>9</td><td>0</td><td>1039</td><td></td></tr>
<tr><td>6</td><td>10</td><td>0</td><td>1086</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>1115</td><td></td></tr>
<tr><td>8</td><td>16</td><td>0</td><td>1173</td><td></td></tr>
<tr><td>9</td><td>8</td><td>0</td><td>1202</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>1207</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>11</td><td>73</td><td>22</td><td></td></tr><tr><td>2</td><td>11</td><td>113</td><td>21</td><td></td></tr><tr><td>3</td><td>8</td><td>80</td><td>20</td><td></td></tr><tr><td>4</td><td>9</td><td>16</td><td>20</td><td></td></tr><tr><td>5</td><td>15</td><td>13</td><td>20</td><td></td></tr><tr><td>6</td><td>10</td><td>74</td><td>19</td><td></td></tr><tr><td>7</td><td>34</td><td>64</td><td>19</td><td></td></tr><tr><td>8</td><td>11</td><td>78</td><td>18</td><td></td></tr><tr><td>9</td><td>15</td><td>32</td><td>18</td><td></td></tr><tr><td>10</td><td>16</td><td>6</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>31</td><td>0</td><td>407</td><td></td></tr>
<tr><td>2</td><td>34</td><td>0</td><td>407</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>401</td><td></td></tr>
<tr><td>4</td><td>27</td><td>0</td><td>397</td><td></td></tr>
<tr><td>5</td><td>24</td><td>0</td><td>392</td><td></td></tr>
<tr><td>6</td><td>32</td><td>0</td><td>376</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>372</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>370</td><td></td></tr>
<tr><td>9</td><td>30</td><td>0</td><td>360</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>359</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>20</td><td>0</td><td>259</td><td></td></tr>
<tr><td>2</td><td>18</td><td>0</td><td>260</td><td></td></tr>
<tr><td>3</td><td>23</td><td>0</td><td>290</td><td></td></tr>
<tr><td>4</td><td>21</td><td>0</td><td>291</td><td></td></tr>
<tr><td>5</td><td>22</td><td>0</td><td>305</td><td></td></tr>
<tr><td>6</td><td>8</td><td>0</td><td>313</td><td></td></tr>
<tr><td>7</td><td>17</td><td>0</td><td>318</td><td></td></tr>
<tr><td>8</td><td>16</td><td>0</td><td>321</td><td></td></tr>
<tr><td>9</td><td>19</td><td>0</td><td>322</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>323</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>41</td><td>0</td><td>1350</td><td></td></tr>
<tr><td>2</td><td>40</td><td>0</td><td>1349</td><td></td></tr>
<tr><td>3</td><td>27</td><td>0</td><td>1329</td><td></td></tr>
<tr><td>4</td><td>32</td><td>0</td><td>1297</td><td></td></tr>
<tr><td>5</td><td>24</td><td>0</td><td>1287</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>1270</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>1264</td><td></td></tr>
<tr><td>8</td><td>31</td><td>0</td><td>1257</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>1220</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>1195</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>878</td><td></td></tr>
<tr><td>2</td><td>22</td><td>0</td><td>902</td><td></td></tr>
<tr><td>3</td><td>17</td><td>0</td><td>922</td><td></td></tr>
<tr><td>4</td><td>18</td><td>0</td><td>941</td><td></td></tr>
<tr><td>5</td><td>20</td><td>0</td><td>969</td><td></td></tr>
<tr><td>6</td><td>11</td><td>0</td><td>991</td><td></td></tr>
<tr><td>7</td><td>19</td><td>0</td><td>1000</td><td></td></tr>
<tr><td>8</td><td>10</td><td>0</td><td>1043</td><td></td></tr>
<tr><td>9</td><td>14</td><td>0</td><td>1079</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>1079</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>30</td><td>65</td><td></td></tr><tr><td>2</td><td>9</td><td>65</td><td>46</td><td></td></tr><tr><td>3</td><td>31</td><td>68</td><td>45</td><td></td></tr><tr><td>4</td><td>9</td><td>55</td><td>44</td><td></td></tr><tr><td>5</td><td>8</td><td>3</td><td>39</td><td></td></tr><tr><td>6</td><td>8</td><td>104</td><td>38</td><td></td></tr><tr><td>7</td><td>24</td><td>80</td><td>38</td><td></td></tr><tr><td>8</td><td>9</td><td>36</td><td>36</td><td></td></tr><tr><td>9</td><td>20</td><td>4</td><td>32</td><td></td></tr><tr><td>10</td><td>8</td><td>59</td><td>30</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>661</td><td></td></tr>
<tr><td>2</td><td>9</td><td>0</td><td>594</td><td></td></tr>
<tr><td>3</td><td>25</td><td>0</td><td>594</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>585</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>548</td><td></td></tr>
<tr><td>6</td><td>22</td><td>0</td><td>454</td><td></td></tr>
<tr><td>7</td><td>11</td><td>0</td><td>448</td><td></td></tr>
<tr><td>8</td><td>23</td><td>0</td><td>447</td><td></td></tr>
<tr><td>9</td><td>10</td><td>0</td><td>444</td><td></td></tr>
<tr><td>10</td><td>21</td><td>0</td><td>420</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>12</td><td>0</td><td>114</td><td></td></tr>
<tr><td>2</td><td>15</td><td>0</td><td>207</td><td></td></tr>
<tr><td>3</td><td>16</td><td>0</td><td>220</td><td></td></tr>
<tr><td>4</td><td>17</td><td>0</td><td>227</td><td></td></tr>
<tr><td>5</td><td>14</td><td>0</td><td>245</td><td></td></tr>
<tr><td>6</td><td>10</td><td>0</td><td>444</td><td></td></tr>
<tr><td>7</td><td>11</td><td>0</td><td>448</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>594</td><td></td></tr>
<tr><td>9</td><td>8</td><td>0</td><td>661</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>101</td><td>40</td><td></td></tr><tr><td>2</td><td>10</td><td>6</td><td>40</td><td></td></tr><tr><td>3</td><td>36</td><td>40</td><td>39</td><td></td></tr><tr><td>4</td><td>8</td><td>67</td><td>38</td><td></td></tr><tr><td>5</td><td>8</td><td>59</td><td>36</td><td></td></tr><tr><td>6</td><td>8</td><td>80</td><td>36</td><td></td></tr><tr><td>7</td><td>10</td><td>22</td><td>35</td><td></td></tr><tr><td>8</td><td>8</td><td>77</td><td>34</td><td></td></tr><tr><td>9</td><td>17</td><td>13</td><td>34</td><td></td></tr><tr><td>10</td><td>41</td><td>147</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>1113</td><td></td></tr>
<tr><td>2</td><td>10</td><td>0</td><td>1017</td><td></td></tr>
<tr><td>3</td><td>24</td><td>0</td><td>940</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>915</td><td></td></tr>
<tr><td>5</td><td>17</td><td>0</td><td>887</td><td></td></tr>
<tr><td>6</td><td>9</td><td>0</td><td>883</td><td></td></tr>
<tr><td>7</td><td>11</td><td>0</td><td>862</td><td></td></tr>
<tr><td>8</td><td>16</td><td>0</td><td>831</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>820</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>773</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>19</td><td>0</td><td>613</td><td></td></tr>
<tr><td>2</td><td>12</td><td>0</td><td>643</td><td></td></tr>
<tr><td>3</td><td>22</td><td>0</td><td>646</td><td></td></tr>
<tr><td>4</td><td>18</td><td>0</td><td>651</td><td></td></tr>
<tr><td>5</td><td>20</td><td>0</td><td>668</td><td></td></tr>
<tr><td>6</td><td>21</td><td>0</td><td>696</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>773</td><td></td></tr>
<tr><td>8</td><td>15</td><td>0</td><td>820</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>831</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>862</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>18</td><td>0</td><td>4</td><td></td></tr>
<tr><td>3</td><td>22</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>25</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>29</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>9</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>10</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>11</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>29.40%</td><td></td></tr>
<tr><td>2</td><td>40</td><td>0</td><td>27.50%</td><td></td></tr>
<tr><td>3</td><td>8</td><td>0</td><td>26.50%</td><td></td></tr>
<tr><td>4</td><td>23</td><td>0</td><td>25.50%</td><td></td></tr>
<tr><td>5</td><td>27</td><td>0</td><td>24.90%</td><td></td></tr>
<tr><td>6</td><td>21</td><td>0</td><td>23.90%</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>23.30%</td><td></td></tr>
<tr><td>8</td><td>14</td><td>0</td><td>21.90%</td><td></td></tr>
<tr><td>9</td><td>11</td><td>0</td><td>20.50%</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>15.80%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>93.00%</td><td></td></tr>
<tr><td>2</td><td>11</td><td>0</td><td>91.20%</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>87.90%</td><td></td></tr>
<tr><td>4</td><td>8</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>82.70%</td><td></td></tr>
<tr><td>6</td><td>19</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>7</td><td>18</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>9</td><td>14</td><td>0</td><td>79.50%</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>75.00%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>9</td><td>0</td><td>11.60%</td><td></td></tr>
<tr><td>2</td><td>36</td><td>0</td><td>12.80%</td><td></td></tr>
<tr><td>3</td><td>18</td><td>0</td><td>14.90%</td><td></td></tr>
<tr><td>4</td><td>16</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>5</td><td>12</td><td>0</td><td>15.70%</td><td></td></tr>
<tr><td>6</td><td>10</td><td>0</td><td>15.80%</td><td></td></tr>
<tr><td>7</td><td>11</td><td>0</td><td>20.50%</td><td></td></tr>
<tr><td>8</td><td>14</td><td>0</td><td>21.90%</td><td></td></tr>
<tr><td>9</td><td>8</td><td>0</td><td>26.50%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>15</td><td>0</td><td>70.70%</td><td></td></tr>
<tr><td>2</td><td>12</td><td>0</td><td>75.00%</td><td></td></tr>
<tr><td>3</td><td>16</td><td>0</td><td>75.30%</td><td></td></tr>
<tr><td>4</td><td>23</td><td>0</td><td>76.20%</td><td></td></tr>
<tr><td>5</td><td>24</td><td>0</td><td>76.60%</td><td></td></tr>
<tr><td>6</td><td>17</td><td>0</td><td>77.90%</td><td></td></tr>
<tr><td>7</td><td>22</td><td>0</td><td>78.60%</td><td></td></tr>
<tr><td>8</td><td>14</td><td>0</td><td>79.50%</td><td></td></tr>
<tr><td>9</td><td>9</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>10</td><td>8</td><td>0</td><td>83.40%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>33</td><td></td></tr>
<tr><td>2</td><td>10</td><td>0</td><td>31</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>30</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>29</td><td></td></tr>
<tr><td>5</td><td>37</td><td>0</td><td>29</td><td></td></tr>
<tr><td>6</td><td>11</td><td>0</td><td>28</td><td></td></tr>
<tr><td>7</td><td>22</td><td>0</td><td>28</td><td></td></tr>
<tr><td>8</td><td>18</td><td>0</td><td>27</td><td></td></tr>
<tr><td>9</td><td>9</td><td>0</td><td>25</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>25</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>19</td><td>0</td><td>18</td><td></td></tr>
<tr><td>2</td><td>12</td><td>0</td><td>19</td><td></td></tr>
<tr><td>3</td><td>16</td><td>0</td><td>19</td><td></td></tr>
<tr><td>4</td><td>25</td><td>0</td><td>19</td><td></td></tr>
<tr><td>5</td><td>17</td><td>0</td><td>20</td><td></td></tr>
<tr><td>6</td><td>20</td><td>0</td><td>20</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>23</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>25</td><td></td></tr>
<tr><td>9</td><td>14</td><td>0</td><td>25</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>28</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>25</td><td>0</td><td>31</td><td></td></tr>
<tr><td>2</td><td>26</td><td>0</td><td>29</td><td></td></tr>
<tr><td>3</td><td>31</td><td>0</td><td>29</td><td></td></tr>
<tr><td>4</td><td>35</td><td>0</td><td>28</td><td></td></tr>
<tr><td>5</td><td>36</td><td>0</td><td>28</td><td></td></tr>
<tr><td>6</td><td>33</td><td>0</td><td>27</td><td></td></tr>
<tr><td>7</td><td>27</td><td>0</td><td>25</td><td></td></tr>
<tr><td>8</td><td>32</td><td>0</td><td>25</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>24</td><td></td></tr>
<tr><td>10</td><td>24</td><td>0</td><td>23</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>7</td><td></td></tr>
<tr><td>2</td><td>10</td><td>0</td><td>9</td><td></td></tr>
<tr><td>3</td><td>11</td><td>0</td><td>12</td><td></td></tr>
<tr><td>4</td><td>22</td><td>0</td><td>12</td><td></td></tr>
<tr><td>5</td><td>18</td><td>0</td><td>13</td><td></td></tr>
<tr><td>6</td><td>9</td><td>0</td><td>15</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>15</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>21</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>68</td><td></td></tr>
<tr><td>2</td><td>24</td><td>0</td><td>66</td><td></td></tr>
<tr><td>3</td><td>10</td><td>0</td><td>64</td><td></td></tr>
<tr><td>4</td><td>28</td><td>0</td><td>64</td><td></td></tr>
<tr><td>5</td><td>37</td><td>0</td><td>63</td><td></td></tr>
<tr><td>6</td><td>11</td><td>0</td><td>60</td><td></td></tr>
<tr><td>7</td><td>22</td><td>0</td><td>59</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>54</td><td></td></tr>
<tr><td>9</td><td>18</td><td>0</td><td>54</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>53</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>19</td><td>0</td><td>40</td><td></td></tr>
<tr><td>2</td><td>16</td><td>0</td><td>41</td><td></td></tr>
<tr><td>3</td><td>12</td><td>0</td><td>42</td><td></td></tr>
<tr><td>4</td><td>17</td><td>0</td><td>42</td><td></td></tr>
<tr><td>5</td><td>20</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>15</td><td>0</td><td>49</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>53</td><td></td></tr>
<tr><td>8</td><td>9</td><td>0</td><td>54</td><td></td></tr>
<tr><td>9</td><td>11</td><td>0</td><td>60</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>64</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>10</td><td>0</td><td>15</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>14</td><td></td></tr>
<tr><td>3</td><td>14</td><td>0</td><td>13</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>13</td><td></td></tr>
<tr><td>5</td><td>27</td><td>0</td><td>13</td><td></td></tr>
<tr><td>6</td><td>22</td><td>0</td><td>12</td><td></td></tr>
<tr><td>7</td><td>16</td><td>0</td><td>11</td><td></td></tr>
<tr><td>8</td><td>18</td><td>0</td><td>11</td><td></td></tr>
<tr><td>9</td><td>15</td><td>0</td><td>10</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>9</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>16</td><td></td></tr>
<tr><td>2</td><td>37</td><td>0</td><td>13</td><td></td></tr>
<tr><td>3</td><td>39</td><td>0</td><td>13</td><td></td></tr>
<tr><td>4</td><td>9</td><td>0</td><td>12</td><td></td></tr>
<tr><td>5</td><td>10</td><td>0</td><td>12</td><td></td></tr>
<tr><td>6</td><td>11</td><td>0</td><td>12</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>11</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>9</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_USA"><a id="UnitedStatesofAmerica">United States of America</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-PRE-ProTeamRoster.php#UnitedStatesofAmerica">Pro Team Roster</a> ]
[ <a href="SMJHL-PRE-ProTeamScoring.php#UnitedStatesofAmerica">Pro Team Scoring</a> ]
[ <a href="SMJHL-PRE-ProTeamLines.php#UnitedStatesofAmerica">Pro Team Lines</a> ]
[ <a href="SMJHL-PRE-ProTeamSchedule.php#UnitedStatesofAmerica">Pro Team Schedule</a> ]
[ <a href="SMJHL-PRE-ProTeamStats.php#UnitedStatesofAmerica">Pro Team Stats</a> ]
[ <a href="SMJHL-PRE-ProTeamStatsVS.php#UnitedStatesofAmerica">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_UnitedStatesofAmerica');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_UnitedStatesofAmerica" style="display: block;">
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>65</td><td>11</td><td></td></tr><tr><td>2</td><td>11</td><td>1</td><td>10</td><td></td></tr><tr><td>3</td><td>11</td><td>65</td><td>10</td><td></td></tr><tr><td>4</td><td>11</td><td>79</td><td>10</td><td></td></tr><tr><td>5</td><td>11</td><td>120</td><td>10</td><td></td></tr><tr><td>6</td><td>20</td><td>39</td><td>9</td><td></td></tr><tr><td>7</td><td>9</td><td>53</td><td>8</td><td></td></tr><tr><td>8</td><td>17</td><td>68</td><td>8</td><td></td></tr><tr><td>9</td><td>11</td><td>47</td><td>7</td><td></td></tr><tr><td>10</td><td>16</td><td>117</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>0</td><td>200</td><td></td></tr>
<tr><td>2</td><td>28</td><td>0</td><td>176</td><td></td></tr>
<tr><td>3</td><td>11</td><td>0</td><td>174</td><td></td></tr>
<tr><td>4</td><td>25</td><td>0</td><td>171</td><td></td></tr>
<tr><td>5</td><td>34</td><td>0</td><td>171</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>170</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>164</td><td></td></tr>
<tr><td>8</td><td>20</td><td>0</td><td>144</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>129</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>129</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>21</td><td>0</td><td>91</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>92</td><td></td></tr>
<tr><td>3</td><td>17</td><td>0</td><td>95</td><td></td></tr>
<tr><td>4</td><td>10</td><td>0</td><td>98</td><td></td></tr>
<tr><td>5</td><td>18</td><td>0</td><td>98</td><td></td></tr>
<tr><td>6</td><td>9</td><td>0</td><td>101</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>111</td><td></td></tr>
<tr><td>8</td><td>15</td><td>0</td><td>118</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>129</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>174</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>41</td><td>0</td><td>169</td><td></td></tr>
<tr><td>2</td><td>24</td><td>0</td><td>163</td><td></td></tr>
<tr><td>3</td><td>36</td><td>0</td><td>156</td><td></td></tr>
<tr><td>4</td><td>40</td><td>0</td><td>155</td><td></td></tr>
<tr><td>5</td><td>30</td><td>0</td><td>154</td><td></td></tr>
<tr><td>6</td><td>21</td><td>0</td><td>147</td><td></td></tr>
<tr><td>7</td><td>39</td><td>0</td><td>146</td><td></td></tr>
<tr><td>8</td><td>32</td><td>0</td><td>144</td><td></td></tr>
<tr><td>9</td><td>35</td><td>0</td><td>144</td><td></td></tr>
<tr><td>10</td><td>25</td><td>0</td><td>143</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>86</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>94</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>94</td><td></td></tr>
<tr><td>4</td><td>9</td><td>0</td><td>107</td><td></td></tr>
<tr><td>5</td><td>11</td><td>0</td><td>107</td><td></td></tr>
<tr><td>6</td><td>10</td><td>0</td><td>108</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>112</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>65</td><td>21</td><td></td></tr><tr><td>2</td><td>11</td><td>1</td><td>17</td><td></td></tr><tr><td>3</td><td>11</td><td>65</td><td>17</td><td></td></tr><tr><td>4</td><td>11</td><td>79</td><td>17</td><td></td></tr><tr><td>5</td><td>20</td><td>39</td><td>16</td><td></td></tr><tr><td>6</td><td>11</td><td>120</td><td>15</td><td></td></tr><tr><td>7</td><td>9</td><td>53</td><td>14</td><td></td></tr><tr><td>8</td><td>16</td><td>117</td><td>14</td><td></td></tr><tr><td>9</td><td>22</td><td>27</td><td>14</td><td></td></tr><tr><td>10</td><td>27</td><td>16</td><td>14</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>0</td><td>365</td><td></td></tr>
<tr><td>2</td><td>28</td><td>0</td><td>316</td><td></td></tr>
<tr><td>3</td><td>25</td><td>0</td><td>304</td><td></td></tr>
<tr><td>4</td><td>34</td><td>0</td><td>303</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>293</td><td></td></tr>
<tr><td>6</td><td>11</td><td>0</td><td>287</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>281</td><td></td></tr>
<tr><td>8</td><td>20</td><td>0</td><td>255</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>230</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>226</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>145</td><td></td></tr>
<tr><td>2</td><td>10</td><td>0</td><td>156</td><td></td></tr>
<tr><td>3</td><td>17</td><td>0</td><td>157</td><td></td></tr>
<tr><td>4</td><td>9</td><td>0</td><td>160</td><td></td></tr>
<tr><td>5</td><td>21</td><td>0</td><td>167</td><td></td></tr>
<tr><td>6</td><td>18</td><td>0</td><td>173</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>200</td><td></td></tr>
<tr><td>8</td><td>15</td><td>0</td><td>213</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>230</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>287</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>65</td><td>32</td><td></td></tr><tr><td>2</td><td>11</td><td>1</td><td>27</td><td></td></tr><tr><td>3</td><td>11</td><td>65</td><td>27</td><td></td></tr><tr><td>4</td><td>11</td><td>79</td><td>27</td><td></td></tr><tr><td>5</td><td>11</td><td>120</td><td>25</td><td></td></tr><tr><td>6</td><td>20</td><td>39</td><td>25</td><td></td></tr><tr><td>7</td><td>9</td><td>53</td><td>22</td><td></td></tr><tr><td>8</td><td>16</td><td>117</td><td>21</td><td></td></tr><tr><td>9</td><td>17</td><td>68</td><td>21</td><td></td></tr><tr><td>10</td><td>22</td><td>27</td><td>21</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>27</td><td>0</td><td>565</td><td></td></tr>
<tr><td>2</td><td>28</td><td>0</td><td>492</td><td></td></tr>
<tr><td>3</td><td>25</td><td>0</td><td>475</td><td></td></tr>
<tr><td>4</td><td>34</td><td>0</td><td>474</td><td></td></tr>
<tr><td>5</td><td>26</td><td>0</td><td>463</td><td></td></tr>
<tr><td>6</td><td>11</td><td>0</td><td>461</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>445</td><td></td></tr>
<tr><td>8</td><td>20</td><td>0</td><td>399</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>359</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>355</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>237</td><td></td></tr>
<tr><td>2</td><td>17</td><td>0</td><td>252</td><td></td></tr>
<tr><td>3</td><td>10</td><td>0</td><td>254</td><td></td></tr>
<tr><td>4</td><td>21</td><td>0</td><td>258</td><td></td></tr>
<tr><td>5</td><td>9</td><td>0</td><td>261</td><td></td></tr>
<tr><td>6</td><td>18</td><td>0</td><td>271</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>311</td><td></td></tr>
<tr><td>8</td><td>15</td><td>0</td><td>331</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>359</td><td></td></tr>
<tr><td>10</td><td>11</td><td>0</td><td>461</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>29</td><td>159</td><td>56</td><td></td></tr><tr><td>2</td><td>11</td><td>71</td><td>53</td><td></td></tr><tr><td>3</td><td>11</td><td>79</td><td>52</td><td></td></tr><tr><td>4</td><td>8</td><td>150</td><td>50</td><td></td></tr><tr><td>5</td><td>28</td><td>27</td><td>50</td><td></td></tr><tr><td>6</td><td>11</td><td>65</td><td>49</td><td></td></tr><tr><td>7</td><td>11</td><td>103</td><td>48</td><td></td></tr><tr><td>8</td><td>16</td><td>100</td><td>48</td><td></td></tr><tr><td>9</td><td>8</td><td>143</td><td>47</td><td></td></tr><tr><td>10</td><td>11</td><td>92</td><td>47</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>28</td><td>0</td><td>1495</td><td></td></tr>
<tr><td>2</td><td>30</td><td>0</td><td>1384</td><td></td></tr>
<tr><td>3</td><td>34</td><td>0</td><td>1382</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>1365</td><td></td></tr>
<tr><td>5</td><td>27</td><td>0</td><td>1350</td><td></td></tr>
<tr><td>6</td><td>16</td><td>0</td><td>1334</td><td></td></tr>
<tr><td>7</td><td>29</td><td>0</td><td>1324</td><td></td></tr>
<tr><td>8</td><td>26</td><td>0</td><td>1314</td><td></td></tr>
<tr><td>9</td><td>25</td><td>0</td><td>1244</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>1236</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>18</td><td>0</td><td>766</td><td></td></tr>
<tr><td>2</td><td>17</td><td>0</td><td>807</td><td></td></tr>
<tr><td>3</td><td>21</td><td>0</td><td>902</td><td></td></tr>
<tr><td>4</td><td>19</td><td>0</td><td>924</td><td></td></tr>
<tr><td>5</td><td>22</td><td>0</td><td>932</td><td></td></tr>
<tr><td>6</td><td>9</td><td>0</td><td>960</td><td></td></tr>
<tr><td>7</td><td>20</td><td>0</td><td>1011</td><td></td></tr>
<tr><td>8</td><td>10</td><td>0</td><td>1063</td><td></td></tr>
<tr><td>9</td><td>8</td><td>0</td><td>1104</td><td></td></tr>
<tr><td>10</td><td>14</td><td>0</td><td>1109</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>9</td><td>95</td><td>26</td><td></td></tr><tr><td>2</td><td>10</td><td>85</td><td>24</td><td></td></tr><tr><td>3</td><td>9</td><td>76</td><td>21</td><td></td></tr><tr><td>4</td><td>9</td><td>105</td><td>21</td><td></td></tr><tr><td>5</td><td>10</td><td>117</td><td>20</td><td></td></tr><tr><td>6</td><td>9</td><td>66</td><td>19</td><td></td></tr><tr><td>7</td><td>10</td><td>89</td><td>19</td><td></td></tr><tr><td>8</td><td>8</td><td>66</td><td>18</td><td></td></tr><tr><td>9</td><td>9</td><td>113</td><td>18</td><td></td></tr><tr><td>10</td><td>11</td><td>73</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>39</td><td>0</td><td>433</td><td></td></tr>
<tr><td>2</td><td>9</td><td>0</td><td>424</td><td></td></tr>
<tr><td>3</td><td>40</td><td>0</td><td>402</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>389</td><td></td></tr>
<tr><td>5</td><td>36</td><td>0</td><td>376</td><td></td></tr>
<tr><td>6</td><td>24</td><td>0</td><td>372</td><td></td></tr>
<tr><td>7</td><td>38</td><td>0</td><td>367</td><td></td></tr>
<tr><td>8</td><td>32</td><td>0</td><td>363</td><td></td></tr>
<tr><td>9</td><td>29</td><td>0</td><td>357</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>357</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>277</td><td></td></tr>
<tr><td>2</td><td>18</td><td>0</td><td>278</td><td></td></tr>
<tr><td>3</td><td>14</td><td>0</td><td>281</td><td></td></tr>
<tr><td>4</td><td>20</td><td>0</td><td>285</td><td></td></tr>
<tr><td>5</td><td>22</td><td>0</td><td>295</td><td></td></tr>
<tr><td>6</td><td>12</td><td>0</td><td>316</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>335</td><td></td></tr>
<tr><td>8</td><td>8</td><td>0</td><td>337</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>346</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>353</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>40</td><td>0</td><td>1476</td><td></td></tr>
<tr><td>2</td><td>36</td><td>0</td><td>1394</td><td></td></tr>
<tr><td>3</td><td>41</td><td>0</td><td>1350</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>1349</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>1324</td><td></td></tr>
<tr><td>6</td><td>15</td><td>0</td><td>1265</td><td></td></tr>
<tr><td>7</td><td>38</td><td>0</td><td>1260</td><td></td></tr>
<tr><td>8</td><td>32</td><td>0</td><td>1252</td><td></td></tr>
<tr><td>9</td><td>37</td><td>0</td><td>1249</td><td></td></tr>
<tr><td>10</td><td>31</td><td>0</td><td>1232</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>830</td><td></td></tr>
<tr><td>2</td><td>8</td><td>0</td><td>892</td><td></td></tr>
<tr><td>3</td><td>18</td><td>0</td><td>932</td><td></td></tr>
<tr><td>4</td><td>19</td><td>0</td><td>973</td><td></td></tr>
<tr><td>5</td><td>28</td><td>0</td><td>1036</td><td></td></tr>
<tr><td>6</td><td>22</td><td>0</td><td>1037</td><td></td></tr>
<tr><td>7</td><td>10</td><td>0</td><td>1051</td><td></td></tr>
<tr><td>8</td><td>11</td><td>0</td><td>1074</td><td></td></tr>
<tr><td>9</td><td>16</td><td>0</td><td>1099</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>1101</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>12</td><td>93</td><td>49</td><td></td></tr><tr><td>2</td><td>35</td><td>129</td><td>49</td><td></td></tr><tr><td>3</td><td>8</td><td>124</td><td>47</td><td></td></tr><tr><td>4</td><td>8</td><td>51</td><td>46</td><td></td></tr><tr><td>5</td><td>15</td><td>50</td><td>40</td><td></td></tr><tr><td>6</td><td>41</td><td>145</td><td>38</td><td></td></tr><tr><td>7</td><td>25</td><td>156</td><td>35</td><td></td></tr><tr><td>8</td><td>8</td><td>129</td><td>33</td><td></td></tr><tr><td>9</td><td>9</td><td>31</td><td>33</td><td></td></tr><tr><td>10</td><td>14</td><td>38</td><td>32</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>24</td><td>0</td><td>555</td><td></td></tr>
<tr><td>2</td><td>25</td><td>0</td><td>548</td><td></td></tr>
<tr><td>3</td><td>36</td><td>0</td><td>528</td><td></td></tr>
<tr><td>4</td><td>31</td><td>0</td><td>507</td><td></td></tr>
<tr><td>5</td><td>27</td><td>0</td><td>505</td><td></td></tr>
<tr><td>6</td><td>35</td><td>0</td><td>501</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>476</td><td></td></tr>
<tr><td>8</td><td>11</td><td>0</td><td>474</td><td></td></tr>
<tr><td>9</td><td>19</td><td>0</td><td>467</td><td></td></tr>
<tr><td>10</td><td>8</td><td>0</td><td>443</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>16</td><td>0</td><td>208</td><td></td></tr>
<tr><td>2</td><td>17</td><td>0</td><td>224</td><td></td></tr>
<tr><td>3</td><td>14</td><td>0</td><td>248</td><td></td></tr>
<tr><td>4</td><td>10</td><td>0</td><td>259</td><td></td></tr>
<tr><td>5</td><td>12</td><td>0</td><td>322</td><td></td></tr>
<tr><td>6</td><td>15</td><td>0</td><td>342</td><td></td></tr>
<tr><td>7</td><td>9</td><td>0</td><td>383</td><td></td></tr>
<tr><td>8</td><td>8</td><td>0</td><td>443</td><td></td></tr>
<tr><td>9</td><td>11</td><td>0</td><td>474</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>11</td><td>65</td><td>41</td><td></td></tr><tr><td>2</td><td>8</td><td>111</td><td>38</td><td></td></tr><tr><td>3</td><td>8</td><td>143</td><td>38</td><td></td></tr><tr><td>4</td><td>11</td><td>103</td><td>38</td><td></td></tr><tr><td>5</td><td>15</td><td>77</td><td>38</td><td></td></tr><tr><td>6</td><td>15</td><td>17</td><td>37</td><td></td></tr><tr><td>7</td><td>9</td><td>11</td><td>36</td><td></td></tr><tr><td>8</td><td>11</td><td>82</td><td>36</td><td></td></tr><tr><td>9</td><td>12</td><td>55</td><td>35</td><td></td></tr><tr><td>10</td><td>8</td><td>51</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>1089</td><td></td></tr>
<tr><td>2</td><td>11</td><td>0</td><td>1009</td><td></td></tr>
<tr><td>3</td><td>9</td><td>0</td><td>968</td><td></td></tr>
<tr><td>4</td><td>15</td><td>0</td><td>926</td><td></td></tr>
<tr><td>5</td><td>36</td><td>0</td><td>916</td><td></td></tr>
<tr><td>6</td><td>35</td><td>0</td><td>883</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>882</td><td></td></tr>
<tr><td>8</td><td>14</td><td>0</td><td>881</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>865</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>821</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>18</td><td>0</td><td>523</td><td></td></tr>
<tr><td>2</td><td>20</td><td>0</td><td>642</td><td></td></tr>
<tr><td>3</td><td>23</td><td>0</td><td>658</td><td></td></tr>
<tr><td>4</td><td>19</td><td>0</td><td>661</td><td></td></tr>
<tr><td>5</td><td>21</td><td>0</td><td>715</td><td></td></tr>
<tr><td>6</td><td>22</td><td>0</td><td>732</td><td></td></tr>
<tr><td>7</td><td>17</td><td>0</td><td>764</td><td></td></tr>
<tr><td>8</td><td>16</td><td>0</td><td>772</td><td></td></tr>
<tr><td>9</td><td>10</td><td>0</td><td>821</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>865</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>9</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>39</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>17</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>38</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>8</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>10</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>12</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>14</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>17</td><td>0</td><td>28.00%</td><td></td></tr>
<tr><td>2</td><td>20</td><td>0</td><td>25.60%</td><td></td></tr>
<tr><td>3</td><td>30</td><td>0</td><td>25.10%</td><td></td></tr>
<tr><td>4</td><td>24</td><td>0</td><td>24.60%</td><td></td></tr>
<tr><td>5</td><td>15</td><td>0</td><td>24.50%</td><td></td></tr>
<tr><td>6</td><td>25</td><td>0</td><td>22.80%</td><td></td></tr>
<tr><td>7</td><td>12</td><td>0</td><td>19.60%</td><td></td></tr>
<tr><td>8</td><td>8</td><td>0</td><td>18.40%</td><td></td></tr>
<tr><td>9</td><td>14</td><td>0</td><td>18.10%</td><td></td></tr>
<tr><td>10</td><td>9</td><td>0</td><td>17.50%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>8</td><td>0</td><td>90.10%</td><td></td></tr>
<tr><td>2</td><td>9</td><td>0</td><td>89.50%</td><td></td></tr>
<tr><td>3</td><td>10</td><td>0</td><td>88.10%</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>85.50%</td><td></td></tr>
<tr><td>5</td><td>34</td><td>0</td><td>85.50%</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>84.70%</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>82.70%</td><td></td></tr>
<tr><td>8</td><td>25</td><td>0</td><td>82.10%</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>81.40%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>39</td><td>0</td><td>11.30%</td><td></td></tr>
<tr><td>2</td><td>11</td><td>0</td><td>11.80%</td><td></td></tr>
<tr><td>3</td><td>32</td><td>0</td><td>13.40%</td><td></td></tr>
<tr><td>4</td><td>37</td><td>0</td><td>13.90%</td><td></td></tr>
<tr><td>5</td><td>31</td><td>0</td><td>14.50%</td><td></td></tr>
<tr><td>6</td><td>19</td><td>0</td><td>14.80%</td><td></td></tr>
<tr><td>7</td><td>34</td><td>0</td><td>15.40%</td><td></td></tr>
<tr><td>8</td><td>18</td><td>0</td><td>16.20%</td><td></td></tr>
<tr><td>9</td><td>26</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>16.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>21</td><td>0</td><td>73.40%</td><td></td></tr>
<tr><td>2</td><td>41</td><td>0</td><td>74.20%</td><td></td></tr>
<tr><td>3</td><td>39</td><td>0</td><td>74.80%</td><td></td></tr>
<tr><td>4</td><td>15</td><td>0</td><td>75.20%</td><td></td></tr>
<tr><td>5</td><td>23</td><td>0</td><td>75.30%</td><td></td></tr>
<tr><td>6</td><td>22</td><td>0</td><td>75.40%</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>75.70%</td><td></td></tr>
<tr><td>8</td><td>17</td><td>0</td><td>76.90%</td><td></td></tr>
<tr><td>9</td><td>18</td><td>0</td><td>78.80%</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>79.10%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>28</td><td>0</td><td>38</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>35</td><td></td></tr>
<tr><td>3</td><td>26</td><td>0</td><td>33</td><td></td></tr>
<tr><td>4</td><td>25</td><td>0</td><td>31</td><td></td></tr>
<tr><td>5</td><td>34</td><td>0</td><td>31</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>29</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>27</td><td></td></tr>
<tr><td>8</td><td>11</td><td>0</td><td>26</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>25</td><td></td></tr>
<tr><td>10</td><td>20</td><td>0</td><td>23</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>21</td><td>0</td><td>11</td><td></td></tr>
<tr><td>2</td><td>18</td><td>0</td><td>14</td><td></td></tr>
<tr><td>3</td><td>22</td><td>0</td><td>15</td><td></td></tr>
<tr><td>4</td><td>10</td><td>0</td><td>16</td><td></td></tr>
<tr><td>5</td><td>14</td><td>0</td><td>16</td><td></td></tr>
<tr><td>6</td><td>9</td><td>0</td><td>17</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>18</td><td></td></tr>
<tr><td>8</td><td>16</td><td>0</td><td>19</td><td></td></tr>
<tr><td>9</td><td>8</td><td>0</td><td>20</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>25</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>36</td><td>0</td><td>32</td><td></td></tr>
<tr><td>2</td><td>21</td><td>0</td><td>29</td><td></td></tr>
<tr><td>3</td><td>31</td><td>0</td><td>28</td><td></td></tr>
<tr><td>4</td><td>35</td><td>0</td><td>28</td><td></td></tr>
<tr><td>5</td><td>39</td><td>0</td><td>28</td><td></td></tr>
<tr><td>6</td><td>18</td><td>0</td><td>26</td><td></td></tr>
<tr><td>7</td><td>22</td><td>0</td><td>25</td><td></td></tr>
<tr><td>8</td><td>24</td><td>0</td><td>25</td><td></td></tr>
<tr><td>9</td><td>30</td><td>0</td><td>25</td><td></td></tr>
<tr><td>10</td><td>10</td><td>0</td><td>24</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>28</td><td>0</td><td>12</td><td></td></tr>
<tr><td>2</td><td>11</td><td>0</td><td>14</td><td></td></tr>
<tr><td>3</td><td>12</td><td>0</td><td>15</td><td></td></tr>
<tr><td>4</td><td>27</td><td>0</td><td>15</td><td></td></tr>
<tr><td>5</td><td>20</td><td>0</td><td>17</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>17</td><td></td></tr>
<tr><td>7</td><td>25</td><td>0</td><td>19</td><td></td></tr>
<tr><td>8</td><td>8</td><td>0</td><td>20</td><td></td></tr>
<tr><td>9</td><td>17</td><td>0</td><td>20</td><td></td></tr>
<tr><td>10</td><td>19</td><td>0</td><td>20</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>28</td><td>0</td><td>82</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>78</td><td></td></tr>
<tr><td>3</td><td>26</td><td>0</td><td>70</td><td></td></tr>
<tr><td>4</td><td>25</td><td>0</td><td>67</td><td></td></tr>
<tr><td>5</td><td>33</td><td>0</td><td>65</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>61</td><td></td></tr>
<tr><td>7</td><td>24</td><td>0</td><td>58</td><td></td></tr>
<tr><td>8</td><td>11</td><td>0</td><td>55</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>51</td><td></td></tr>
<tr><td>10</td><td>17</td><td>0</td><td>48</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>21</td><td>0</td><td>29</td><td></td></tr>
<tr><td>2</td><td>14</td><td>0</td><td>34</td><td></td></tr>
<tr><td>3</td><td>18</td><td>0</td><td>34</td><td></td></tr>
<tr><td>4</td><td>22</td><td>0</td><td>36</td><td></td></tr>
<tr><td>5</td><td>9</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>10</td><td>0</td><td>39</td><td></td></tr>
<tr><td>7</td><td>15</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>16</td><td>0</td><td>42</td><td></td></tr>
<tr><td>9</td><td>8</td><td>0</td><td>47</td><td></td></tr>
<tr><td>10</td><td>12</td><td>0</td><td>51</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>34</td><td>0</td><td>18</td><td></td></tr>
<tr><td>2</td><td>27</td><td>0</td><td>17</td><td></td></tr>
<tr><td>3</td><td>28</td><td>0</td><td>15</td><td></td></tr>
<tr><td>4</td><td>11</td><td>0</td><td>13</td><td></td></tr>
<tr><td>5</td><td>25</td><td>0</td><td>13</td><td></td></tr>
<tr><td>6</td><td>26</td><td>0</td><td>13</td><td></td></tr>
<tr><td>7</td><td>14</td><td>0</td><td>11</td><td></td></tr>
<tr><td>8</td><td>20</td><td>0</td><td>11</td><td></td></tr>
<tr><td>9</td><td>12</td><td>0</td><td>9</td><td></td></tr>
<tr><td>10</td><td>16</td><td>0</td><td>9</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>28</td><td>0</td><td>19</td><td></td></tr>
<tr><td>2</td><td>33</td><td>0</td><td>13</td><td></td></tr>
<tr><td>3</td><td>12</td><td>0</td><td>12</td><td></td></tr>
<tr><td>4</td><td>25</td><td>0</td><td>12</td><td></td></tr>
<tr><td>5</td><td>27</td><td>0</td><td>12</td><td></td></tr>
<tr><td>6</td><td>29</td><td>0</td><td>12</td><td></td></tr>
<tr><td>7</td><td>26</td><td>0</td><td>11</td><td></td></tr>
<tr><td>8</td><td>8</td><td>0</td><td>9</td><td></td></tr>
<tr><td>9</td><td>17</td><td>0</td><td>9</td><td></td></tr>
<tr><td>10</td><td>20</td><td>0</td><td>9</td><td></td></tr>

</table></div>
<?php include "Footer.php";?>
