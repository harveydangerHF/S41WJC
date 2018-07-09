<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - League Records</title>
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
<h1 class="STHSLeagueRecord_TeamRecords">Team Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="6"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Detroit Falcons</td><td>8</td><td>14</td><td>11</td><td></td></tr>
<tr><td>2</td><td>Detroit Falcons</td><td>8</td><td>30</td><td>11</td><td></td></tr>
<tr><td>3</td><td>Montreal Impact</td><td>27</td><td>65</td><td>11</td><td></td></tr>
<tr><td>4</td><td>Lions</td><td>1</td><td>2</td><td>10</td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>9</td><td>35</td><td>10</td><td></td></tr>
<tr><td>6</td><td>Vancouver Whalers</td><td>10</td><td>4</td><td>10</td><td></td></tr>
<tr><td>7</td><td>Montreal Impact</td><td>11</td><td>1</td><td>10</td><td></td></tr>
<tr><td>8</td><td>Detroit Falcons</td><td>11</td><td>54</td><td>10</td><td></td></tr>
<tr><td>9</td><td>Montreal Impact</td><td>11</td><td>65</td><td>10</td><td></td></tr>
<tr><td>10</td><td>Montreal Impact</td><td>11</td><td>79</td><td>10</td><td></td></tr>

<tr><td colspan="6"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Vancouver Whalers</td><td>9</td><td>208</td><td></td><td></td></tr>
<tr><td>2</td><td>Halifax Raiders</td><td>32</td><td>206</td><td></td><td></td></tr>
<tr><td>3</td><td>Montreal Impact</td><td>27</td><td>200</td><td></td><td></td></tr>
<tr><td>4</td><td>Detroit Falcons</td><td>24</td><td>195</td><td></td><td></td></tr>
<tr><td>5</td><td>Detroit Falcons</td><td>8</td><td>190</td><td></td><td></td></tr>
<tr><td>6</td><td>Kelowna Knights</td><td>25</td><td>184</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>24</td><td>180</td><td></td><td></td></tr>
<tr><td>8</td><td>Montreal Impact</td><td>11</td><td>174</td><td></td><td></td></tr>
<tr><td>9</td><td>St. Louis Scarecrows</td><td>24</td><td>170</td><td></td><td></td></tr>
<tr><td>10</td><td>Kelowna Knights</td><td>21</td><td>168</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Kelowna Knights</td><td>10</td><td>30</td><td></td><td></td></tr>
<tr><td>2</td><td>Stingrays</td><td>1</td><td>33</td><td></td><td></td></tr>
<tr><td>3</td><td>Blazers</td><td>1</td><td>40</td><td></td><td></td></tr>
<tr><td>4</td><td>Outlaws</td><td>1</td><td>43</td><td></td><td></td></tr>
<tr><td>5</td><td>Lions</td><td>1</td><td>45</td><td></td><td></td></tr>
<tr><td>6</td><td>Washington Patriots</td><td>8</td><td>46</td><td></td><td></td></tr>
<tr><td>7</td><td>Boston Battalion</td><td>8</td><td>55</td><td></td><td></td></tr>
<tr><td>8</td><td>Vancouver Whalers</td><td>8</td><td>62</td><td></td><td></td></tr>
<tr><td>9</td><td>Kelowna Knights</td><td>8</td><td>106</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Prince George Firebirds</td><td>27</td><td>195</td><td></td><td></td></tr>
<tr><td>2</td><td>Prince George Firebirds</td><td>40</td><td>191</td><td></td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>24</td><td>186</td><td></td><td></td></tr>
<tr><td>4</td><td>Kelowna Knights</td><td>25</td><td>180</td><td></td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>26</td><td>177</td><td></td><td></td></tr>
<tr><td>6</td><td>Halifax Raiders</td><td>34</td><td>177</td><td></td><td></td></tr>
<tr><td>7</td><td>St. Louis Scarecrows</td><td>23</td><td>175</td><td></td><td></td></tr>
<tr><td>8</td><td>Halifax Raiders</td><td>25</td><td>174</td><td></td><td></td></tr>
<tr><td>9</td><td>St. Louis Scarecrows</td><td>22</td><td>173</td><td></td><td></td></tr>
<tr><td>10</td><td>Colorado Mammoths</td><td>25</td><td>172</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Blazers</td><td>1</td><td>36</td><td></td><td></td></tr>
<tr><td>2</td><td>Stingrays</td><td>1</td><td>37</td><td></td><td></td></tr>
<tr><td>3</td><td>Lions</td><td>1</td><td>43</td><td></td><td></td></tr>
<tr><td>4</td><td>Outlaws</td><td>1</td><td>45</td><td></td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>17</td><td>76</td><td></td><td></td></tr>
<tr><td>6</td><td>Prince George Firebirds</td><td>8</td><td>82</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>8</td><td>102</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Montreal Impact</td><td>27</td><td>65</td><td>21</td><td></td></tr>
<tr><td>2</td><td>Vancouver Whalers</td><td>10</td><td>4</td><td>19</td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>20</td><td>95</td><td>19</td><td></td></tr>
<tr><td>4</td><td>Detroit Falcons</td><td>8</td><td>14</td><td>18</td><td></td></tr>
<tr><td>5</td><td>Detroit Falcons</td><td>8</td><td>30</td><td>18</td><td></td></tr>
<tr><td>6</td><td>Vancouver Whalers</td><td>10</td><td>36</td><td>18</td><td></td></tr>
<tr><td>7</td><td>Lions</td><td>1</td><td>2</td><td>17</td><td></td></tr>
<tr><td>8</td><td>Montreal Impact</td><td>11</td><td>1</td><td>17</td><td></td></tr>
<tr><td>9</td><td>Montreal Impact</td><td>11</td><td>65</td><td>17</td><td></td></tr>
<tr><td>10</td><td>Montreal Impact</td><td>11</td><td>79</td><td>17</td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Halifax Raiders</td><td>32</td><td>366</td><td></td><td></td></tr>
<tr><td>2</td><td>Montreal Impact</td><td>27</td><td>365</td><td></td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>9</td><td>350</td><td></td><td></td></tr>
<tr><td>4</td><td>Detroit Falcons</td><td>24</td><td>347</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>32</td><td>331</td><td></td><td></td></tr>
<tr><td>6</td><td>Kelowna Knights</td><td>25</td><td>329</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>24</td><td>321</td><td></td><td></td></tr>
<tr><td>8</td><td>Halifax Raiders</td><td>26</td><td>318</td><td></td><td></td></tr>
<tr><td>9</td><td>Detroit Falcons</td><td>8</td><td>307</td><td></td><td></td></tr>
<tr><td>10</td><td>Kelowna Knights</td><td>21</td><td>305</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Kelowna Knights</td><td>10</td><td>47</td><td></td><td></td></tr>
<tr><td>2</td><td>Stingrays</td><td>1</td><td>54</td><td></td><td></td></tr>
<tr><td>3</td><td>Blazers</td><td>1</td><td>61</td><td></td><td></td></tr>
<tr><td>4</td><td>Washington Patriots</td><td>8</td><td>66</td><td></td><td></td></tr>
<tr><td>5</td><td>Outlaws</td><td>1</td><td>68</td><td></td><td></td></tr>
<tr><td>6</td><td>Lions</td><td>1</td><td>73</td><td></td><td></td></tr>
<tr><td>7</td><td>Boston Battalion</td><td>8</td><td>84</td><td></td><td></td></tr>
<tr><td>8</td><td>Vancouver Whalers</td><td>8</td><td>94</td><td></td><td></td></tr>
<tr><td>9</td><td>Kelowna Knights</td><td>8</td><td>161</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Montreal Impact</td><td>27</td><td>65</td><td>32</td><td></td></tr>
<tr><td>2</td><td>Detroit Falcons</td><td>8</td><td>14</td><td>29</td><td></td></tr>
<tr><td>3</td><td>Detroit Falcons</td><td>8</td><td>30</td><td>29</td><td></td></tr>
<tr><td>4</td><td>Vancouver Whalers</td><td>10</td><td>4</td><td>29</td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>20</td><td>95</td><td>29</td><td></td></tr>
<tr><td>6</td><td>Lions</td><td>1</td><td>2</td><td>27</td><td></td></tr>
<tr><td>7</td><td>Vancouver Whalers</td><td>10</td><td>36</td><td>27</td><td></td></tr>
<tr><td>8</td><td>Montreal Impact</td><td>11</td><td>1</td><td>27</td><td></td></tr>
<tr><td>9</td><td>Montreal Impact</td><td>11</td><td>65</td><td>27</td><td></td></tr>
<tr><td>10</td><td>Montreal Impact</td><td>11</td><td>79</td><td>27</td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Halifax Raiders</td><td>32</td><td>572</td><td></td><td></td></tr>
<tr><td>2</td><td>Montreal Impact</td><td>27</td><td>565</td><td></td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>9</td><td>558</td><td></td><td></td></tr>
<tr><td>4</td><td>Detroit Falcons</td><td>24</td><td>542</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>32</td><td>515</td><td></td><td></td></tr>
<tr><td>6</td><td>Kelowna Knights</td><td>25</td><td>513</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>24</td><td>501</td><td></td><td></td></tr>
<tr><td>8</td><td>Detroit Falcons</td><td>8</td><td>497</td><td></td><td></td></tr>
<tr><td>9</td><td>Kelowna Knights</td><td>21</td><td>473</td><td></td><td></td></tr>
<tr><td>10</td><td>St. Louis Scarecrows</td><td>24</td><td>468</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Game Points  in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Kelowna Knights</td><td>10</td><td>77</td><td></td><td></td></tr>
<tr><td>2</td><td>Stingrays</td><td>1</td><td>87</td><td></td><td></td></tr>
<tr><td>3</td><td>Blazers</td><td>1</td><td>101</td><td></td><td></td></tr>
<tr><td>4</td><td>Outlaws</td><td>1</td><td>111</td><td></td><td></td></tr>
<tr><td>5</td><td>Washington Patriots</td><td>8</td><td>112</td><td></td><td></td></tr>
<tr><td>6</td><td>Lions</td><td>1</td><td>118</td><td></td><td></td></tr>
<tr><td>7</td><td>Boston Battalion</td><td>8</td><td>139</td><td></td><td></td></tr>
<tr><td>8</td><td>Vancouver Whalers</td><td>8</td><td>156</td><td></td><td></td></tr>
<tr><td>9</td><td>Kelowna Knights</td><td>8</td><td>267</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>St. Louis Scarecrows</td><td>15</td><td>105</td><td>62</td><td></td></tr>
<tr><td>2</td><td>Vancouver Whalers</td><td>15</td><td>68</td><td>59</td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>9</td><td>43</td><td>58</td><td></td></tr>
<tr><td>4</td><td>Vancouver Whalers</td><td>9</td><td>67</td><td>57</td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>11</td><td>96</td><td>56</td><td></td></tr>
<tr><td>6</td><td>Vancouver Whalers</td><td>15</td><td>27</td><td>56</td><td></td></tr>
<tr><td>7</td><td>Montreal Militia</td><td>29</td><td>159</td><td>56</td><td></td></tr>
<tr><td>8</td><td>Vancouver Whalers</td><td>11</td><td>87</td><td>55</td><td></td></tr>
<tr><td>9</td><td>St. Louis Scarecrows</td><td>15</td><td>19</td><td>55</td><td></td></tr>
<tr><td>10</td><td>St. Louis Scarecrows</td><td>15</td><td>65</td><td>54</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Vancouver Whalers</td><td>9</td><td>1625</td><td></td><td></td></tr>
<tr><td>2</td><td>Colorado Mammoths</td><td>40</td><td>1587</td><td></td><td></td></tr>
<tr><td>3</td><td>Detroit Falcons</td><td>24</td><td>1559</td><td></td><td></td></tr>
<tr><td>4</td><td>Kelowna Knights</td><td>32</td><td>1523</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>31</td><td>1521</td><td></td><td></td></tr>
<tr><td>6</td><td>Halifax Raiders</td><td>32</td><td>1514</td><td></td><td></td></tr>
<tr><td>7</td><td>Los Angeles Archangels</td><td>8</td><td>1495</td><td></td><td></td></tr>
<tr><td>8</td><td>Montreal Militia</td><td>28</td><td>1495</td><td></td><td></td></tr>
<tr><td>9</td><td>St. Louis Scarecrows</td><td>15</td><td>1494</td><td></td><td></td></tr>
<tr><td>10</td><td>Vancouver Whalers</td><td>15</td><td>1385</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Stingrays</td><td>1</td><td>313</td><td></td><td></td></tr>
<tr><td>2</td><td>Blazers</td><td>1</td><td>317</td><td></td><td></td></tr>
<tr><td>3</td><td>Outlaws</td><td>1</td><td>332</td><td></td><td></td></tr>
<tr><td>4</td><td>Lions</td><td>1</td><td>369</td><td></td><td></td></tr>
<tr><td>5</td><td>Washington Patriots</td><td>8</td><td>547</td><td></td><td></td></tr>
<tr><td>6</td><td>Vancouver Whalers</td><td>8</td><td>724</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>8</td><td>1010</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Prince George Firebirds</td><td>9</td><td>78</td><td>27</td><td></td></tr>
<tr><td>2</td><td>Prince George Firebirds</td><td>8</td><td>68</td><td>26</td><td></td></tr>
<tr><td>3</td><td>Montreal Impact</td><td>9</td><td>95</td><td>26</td><td></td></tr>
<tr><td>4</td><td>Prince George Firebirds</td><td>11</td><td>90</td><td>25</td><td></td></tr>
<tr><td>5</td><td>Montreal Impact</td><td>10</td><td>85</td><td>24</td><td></td></tr>
<tr><td>6</td><td>Kelowna Knights</td><td>9</td><td>74</td><td>23</td><td></td></tr>
<tr><td>7</td><td>Chicago Hitmen</td><td>9</td><td>110</td><td>23</td><td></td></tr>
<tr><td>8</td><td>Lions</td><td>1</td><td>16</td><td>22</td><td></td></tr>
<tr><td>9</td><td>Washington Patriots</td><td>8</td><td>70</td><td>22</td><td></td></tr>
<tr><td>10</td><td>Los Angeles Archangels</td><td>8</td><td>128</td><td>22</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Kelowna Knights</td><td>9</td><td>474</td><td></td><td></td></tr>
<tr><td>2</td><td>Vancouver Whalers</td><td>33</td><td>445</td><td></td><td></td></tr>
<tr><td>3</td><td>Prince George Firebirds</td><td>40</td><td>443</td><td></td><td></td></tr>
<tr><td>4</td><td>Chicago Hitmen</td><td>10</td><td>442</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>10</td><td>441</td><td></td><td></td></tr>
<tr><td>6</td><td>Halifax Raiders</td><td>34</td><td>435</td><td></td><td></td></tr>
<tr><td>7</td><td>Halifax Raiders</td><td>25</td><td>433</td><td></td><td></td></tr>
<tr><td>8</td><td>Prince George Firebirds</td><td>31</td><td>429</td><td></td><td></td></tr>
<tr><td>9</td><td>Prince George Firebirds</td><td>9</td><td>426</td><td></td><td></td></tr>
<tr><td>10</td><td>Montreal Impact</td><td>9</td><td>424</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Blazers</td><td>1</td><td>103</td><td></td><td></td></tr>
<tr><td>2</td><td>Stingrays</td><td>1</td><td>107</td><td></td><td></td></tr>
<tr><td>3</td><td>Outlaws</td><td>1</td><td>115</td><td></td><td></td></tr>
<tr><td>4</td><td>Lions</td><td>1</td><td>127</td><td></td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>18</td><td>224</td><td></td><td></td></tr>
<tr><td>6</td><td>Prince George Firebirds</td><td>12</td><td>262</td><td></td><td></td></tr>
<tr><td>7</td><td>Detroit Falcons</td><td>8</td><td>313</td><td></td><td></td></tr>
<tr><td>8</td><td>Kelowna Knights</td><td>8</td><td>323</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Prince George Firebirds</td><td>40</td><td>1539</td><td></td><td></td></tr>
<tr><td>2</td><td>Halifax Raiders</td><td>41</td><td>1511</td><td></td><td></td></tr>
<tr><td>3</td><td>Montreal Militia</td><td>40</td><td>1476</td><td></td><td></td></tr>
<tr><td>4</td><td>Halifax Raiders</td><td>34</td><td>1470</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>15</td><td>1408</td><td></td><td></td></tr>
<tr><td>6</td><td>Halifax Raiders</td><td>35</td><td>1406</td><td></td><td></td></tr>
<tr><td>7</td><td>Montreal Militia</td><td>36</td><td>1394</td><td></td><td></td></tr>
<tr><td>8</td><td>Vancouver Whalers</td><td>33</td><td>1393</td><td></td><td></td></tr>
<tr><td>9</td><td>Vancouver Whalers</td><td>34</td><td>1370</td><td></td><td></td></tr>
<tr><td>10</td><td>Vancouver Whalers</td><td>24</td><td>1351</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Outlaws</td><td>1</td><td>321</td><td></td><td></td></tr>
<tr><td>2</td><td>Blazers</td><td>1</td><td>327</td><td></td><td></td></tr>
<tr><td>3</td><td>Stingrays</td><td>1</td><td>339</td><td></td><td></td></tr>
<tr><td>4</td><td>Lions</td><td>1</td><td>344</td><td></td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>18</td><td>811</td><td></td><td></td></tr>
<tr><td>6</td><td>Montreal Impact</td><td>17</td><td>830</td><td></td><td></td></tr>
<tr><td>7</td><td>Detroit Falcons</td><td>8</td><td>878</td><td></td><td></td></tr>
<tr><td>8</td><td>Kelowna Knights</td><td>8</td><td>934</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Blazers</td><td>1</td><td>8</td><td>93</td><td></td></tr>
<tr><td>2</td><td>Blazers</td><td>1</td><td>2</td><td>75</td><td></td></tr>
<tr><td>3</td><td>Outlaws</td><td>1</td><td>8</td><td>75</td><td></td></tr>
<tr><td>4</td><td>Vancouver Whalers</td><td>9</td><td>118</td><td>67</td><td></td></tr>
<tr><td>5</td><td>Detroit Falcons</td><td>8</td><td>30</td><td>65</td><td></td></tr>
<tr><td>6</td><td>Blazers</td><td>1</td><td>6</td><td>63</td><td></td></tr>
<tr><td>7</td><td>Lions</td><td>1</td><td>7</td><td>62</td><td></td></tr>
<tr><td>8</td><td>Vancouver Whalers</td><td>9</td><td>56</td><td>60</td><td></td></tr>
<tr><td>9</td><td>Lions</td><td>1</td><td>2</td><td>59</td><td></td></tr>
<tr><td>10</td><td>Outlaws</td><td>1</td><td>6</td><td>59</td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Vancouver Whalers</td><td>9</td><td>777</td><td></td><td></td></tr>
<tr><td>2</td><td>Kelowna Knights</td><td>24</td><td>689</td><td></td><td></td></tr>
<tr><td>3</td><td>Prince George Firebirds</td><td>26</td><td>681</td><td></td><td></td></tr>
<tr><td>4</td><td>Kelowna Knights</td><td>25</td><td>674</td><td></td><td></td></tr>
<tr><td>5</td><td>Prince George Firebirds</td><td>25</td><td>671</td><td></td><td></td></tr>
<tr><td>6</td><td>Kelowna Knights</td><td>26</td><td>667</td><td></td><td></td></tr>
<tr><td>7</td><td>Detroit Falcons</td><td>8</td><td>661</td><td></td><td></td></tr>
<tr><td>8</td><td>St. Louis Scarecrows</td><td>24</td><td>598</td><td></td><td></td></tr>
<tr><td>9</td><td>Detroit Falcons</td><td>9</td><td>594</td><td></td><td></td></tr>
<tr><td>10</td><td>St. Louis Scarecrows</td><td>23</td><td>566</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Detroit Falcons</td><td>12</td><td>114</td><td></td><td></td></tr>
<tr><td>2</td><td>Vancouver Whalers</td><td>17</td><td>114</td><td></td><td></td></tr>
<tr><td>3</td><td>Prince George Firebirds</td><td>16</td><td>115</td><td></td><td></td></tr>
<tr><td>4</td><td>Prince George Firebirds</td><td>17</td><td>140</td><td></td><td></td></tr>
<tr><td>5</td><td>St. Louis Scarecrows</td><td>12</td><td>151</td><td></td><td></td></tr>
<tr><td>6</td><td>Kelowna Knights</td><td>16</td><td>176</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>10</td><td>177</td><td></td><td></td></tr>
<tr><td>8</td><td>Chicago Hitmen</td><td>10</td><td>195</td><td></td><td></td></tr>
<tr><td>9</td><td>St. Louis Scarecrows</td><td>14</td><td>203</td><td></td><td></td></tr>
<tr><td>10</td><td>Prince George Firebirds</td><td>12</td><td>210</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Boston Battalion</td><td>8</td><td>62</td><td>82</td><td></td></tr>
<tr><td>2</td><td>Boston Battalion</td><td>8</td><td>50</td><td>71</td><td></td></tr>
<tr><td>3</td><td>Los Angeles Archangels</td><td>8</td><td>76</td><td>70</td><td></td></tr>
<tr><td>4</td><td>Boston Battalion</td><td>8</td><td>33</td><td>65</td><td></td></tr>
<tr><td>5</td><td>Boston Battalion</td><td>8</td><td>70</td><td>65</td><td></td></tr>
<tr><td>6</td><td>Boston Battalion</td><td>8</td><td>85</td><td>64</td><td></td></tr>
<tr><td>7</td><td>Los Angeles Archangels</td><td>8</td><td>105</td><td>61</td><td></td></tr>
<tr><td>8</td><td>Los Angeles Archangels</td><td>8</td><td>160</td><td>60</td><td></td></tr>
<tr><td>9</td><td>Boston Battalion</td><td>8</td><td>75</td><td>59</td><td></td></tr>
<tr><td>10</td><td>Los Angeles Archangels</td><td>8</td><td>132</td><td>59</td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Los Angeles Archangels</td><td>8</td><td>1587</td><td></td><td></td></tr>
<tr><td>2</td><td>Boston Battalion</td><td>8</td><td>1411</td><td></td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>9</td><td>1274</td><td></td><td></td></tr>
<tr><td>4</td><td>Chicago Hitmen</td><td>10</td><td>1178</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>8</td><td>1164</td><td></td><td></td></tr>
<tr><td>6</td><td>Detroit Falcons</td><td>8</td><td>1113</td><td></td><td></td></tr>
<tr><td>7</td><td>Montreal Impact</td><td>8</td><td>1089</td><td></td><td></td></tr>
<tr><td>8</td><td>Prince George Firebirds</td><td>8</td><td>1054</td><td></td><td></td></tr>
<tr><td>9</td><td>Vancouver Whalers</td><td>8</td><td>911</td><td></td><td></td></tr>
<tr><td>10</td><td>Lions</td><td>1</td><td>242</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Stingrays</td><td>1</td><td>176</td><td></td><td></td></tr>
<tr><td>2</td><td>Blazers</td><td>1</td><td>214</td><td></td><td></td></tr>
<tr><td>3</td><td>Outlaws</td><td>1</td><td>220</td><td></td><td></td></tr>
<tr><td>4</td><td>Lions</td><td>1</td><td>242</td><td></td><td></td></tr>
<tr><td>5</td><td>Montreal Impact</td><td>18</td><td>523</td><td></td><td></td></tr>
<tr><td>6</td><td>Regina Force</td><td>18</td><td>637</td><td></td><td></td></tr>
<tr><td>7</td><td>Detroit Falcons</td><td>12</td><td>643</td><td></td><td></td></tr>
<tr><td>8</td><td>St. Louis Scarecrows</td><td>12</td><td>672</td><td></td><td></td></tr>
<tr><td>9</td><td>Kelowna Knights</td><td>10</td><td>732</td><td></td><td></td></tr>
<tr><td>10</td><td>Washington Patriots</td><td>8</td><td>812</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Vancouver Whalers</td><td>8</td><td>4</td><td></td><td></td></tr>
<tr><td>2</td><td>Montreal Impact</td><td>9</td><td>4</td><td></td><td></td></tr>
<tr><td>3</td><td>Kelowna Knights</td><td>10</td><td>4</td><td></td><td></td></tr>
<tr><td>4</td><td>St. Louis Scarecrows</td><td>12</td><td>4</td><td></td><td></td></tr>
<tr><td>5</td><td>Detroit Falcons</td><td>17</td><td>4</td><td></td><td></td></tr>
<tr><td>6</td><td>Washington Patriots</td><td>8</td><td>3</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>8</td><td>2</td><td></td><td></td></tr>
<tr><td>8</td><td>Kelowna Knights</td><td>9</td><td>2</td><td></td><td></td></tr>
<tr><td>9</td><td>Prince George Firebirds</td><td>8</td><td>1</td><td></td><td></td></tr>
<tr><td>10</td><td>Boston Battalion</td><td>8</td><td>1</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Outlaws</td><td>1</td><td>37.10%</td><td></td><td></td></tr>
<tr><td>2</td><td>Prince George Firebirds</td><td>17</td><td>31.60%</td><td></td><td></td></tr>
<tr><td>3</td><td>Lions</td><td>1</td><td>31.40%</td><td></td><td></td></tr>
<tr><td>4</td><td>Vancouver Whalers</td><td>39</td><td>31.40%</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>14</td><td>30.80%</td><td></td><td></td></tr>
<tr><td>6</td><td>St. Louis Scarecrows</td><td>15</td><td>30.70%</td><td></td><td></td></tr>
<tr><td>7</td><td>Vancouver Whalers</td><td>15</td><td>27.30%</td><td></td><td></td></tr>
<tr><td>8</td><td>Prince George Firebirds</td><td>14</td><td>26.70%</td><td></td><td></td></tr>
<tr><td>9</td><td>Detroit Falcons</td><td>8</td><td>26.50%</td><td></td><td></td></tr>
<tr><td>10</td><td>Prince George Firebirds</td><td>12</td><td>22.70%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Detroit Falcons</td><td>10</td><td>93.00%</td><td></td><td></td></tr>
<tr><td>2</td><td>Detroit Falcons</td><td>11</td><td>91.20%</td><td></td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>9</td><td>90.90%</td><td></td><td></td></tr>
<tr><td>4</td><td>Vancouver Whalers</td><td>11</td><td>90.90%</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>11</td><td>90.60%</td><td></td><td></td></tr>
<tr><td>6</td><td>Montreal Impact</td><td>8</td><td>90.10%</td><td></td><td></td></tr>
<tr><td>7</td><td>Montreal Impact</td><td>9</td><td>89.50%</td><td></td><td></td></tr>
<tr><td>8</td><td>Montreal Impact</td><td>10</td><td>88.10%</td><td></td><td></td></tr>
<tr><td>9</td><td>Los Angeles Archangels</td><td>8</td><td>87.50%</td><td></td><td></td></tr>
<tr><td>10</td><td>Boston Battalion</td><td>8</td><td>87.50%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Kelowna Knights</td><td>10</td><td>6.10%</td><td></td><td></td></tr>
<tr><td>2</td><td>Chicago Hitmen</td><td>11</td><td>6.40%</td><td></td><td></td></tr>
<tr><td>3</td><td>Kelowna Knights</td><td>9</td><td>7.40%</td><td></td><td></td></tr>
<tr><td>4</td><td>Prince George Firebirds</td><td>10</td><td>7.80%</td><td></td><td></td></tr>
<tr><td>5</td><td>Prince George Firebirds</td><td>11</td><td>8.20%</td><td></td><td></td></tr>
<tr><td>6</td><td>Kelowna Knights</td><td>8</td><td>10.30%</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>11</td><td>10.30%</td><td></td><td></td></tr>
<tr><td>8</td><td>Chicago Hitmen</td><td>10</td><td>10.70%</td><td></td><td></td></tr>
<tr><td>9</td><td>Vancouver Whalers</td><td>8</td><td>10.80%</td><td></td><td></td></tr>
<tr><td>10</td><td>Detroit Falcons</td><td>9</td><td>11.60%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Blazers</td><td>1</td><td>70.00%</td><td></td><td></td></tr>
<tr><td>2</td><td>Prince George Firebirds</td><td>17</td><td>70.60%</td><td></td><td></td></tr>
<tr><td>3</td><td>Detroit Falcons</td><td>15</td><td>70.70%</td><td></td><td></td></tr>
<tr><td>4</td><td>Kelowna Knights</td><td>17</td><td>70.70%</td><td></td><td></td></tr>
<tr><td>5</td><td>St. Louis Scarecrows</td><td>17</td><td>72.90%</td><td></td><td></td></tr>
<tr><td>6</td><td>Vancouver Whalers</td><td>17</td><td>74.10%</td><td></td><td></td></tr>
<tr><td>7</td><td>Vancouver Whalers</td><td>14</td><td>74.60%</td><td></td><td></td></tr>
<tr><td>8</td><td>Detroit Falcons</td><td>12</td><td>75.00%</td><td></td><td></td></tr>
<tr><td>9</td><td>Montreal Impact</td><td>15</td><td>75.20%</td><td></td><td></td></tr>
<tr><td>10</td><td>Vancouver Whalers</td><td>15</td><td>75.40%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Montreal Militia</td><td>28</td><td>38</td><td></td><td></td></tr>
<tr><td>2</td><td>Halifax Raiders</td><td>32</td><td>36</td><td></td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>9</td><td>35</td><td></td><td></td></tr>
<tr><td>4</td><td>Montreal Impact</td><td>27</td><td>35</td><td></td><td></td></tr>
<tr><td>5</td><td>St. Louis Scarecrows</td><td>34</td><td>35</td><td></td><td></td></tr>
<tr><td>6</td><td>Prince George Firebirds</td><td>8</td><td>33</td><td></td><td></td></tr>
<tr><td>7</td><td>Detroit Falcons</td><td>8</td><td>33</td><td></td><td></td></tr>
<tr><td>8</td><td>Montreal Impact</td><td>26</td><td>33</td><td></td><td></td></tr>
<tr><td>9</td><td>Vancouver Whalers</td><td>11</td><td>32</td><td></td><td></td></tr>
<tr><td>10</td><td>Vancouver Whalers</td><td>10</td><td>31</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lions</td><td>1</td><td>3</td><td></td><td></td></tr>
<tr><td>2</td><td>Blazers</td><td>1</td><td>5</td><td></td><td></td></tr>
<tr><td>3</td><td>Outlaws</td><td>1</td><td>5</td><td></td><td></td></tr>
<tr><td>4</td><td>Kelowna Knights</td><td>10</td><td>5</td><td></td><td></td></tr>
<tr><td>5</td><td>Stingrays</td><td>1</td><td>7</td><td></td><td></td></tr>
<tr><td>6</td><td>Washington Patriots</td><td>8</td><td>9</td><td></td><td></td></tr>
<tr><td>7</td><td>Vancouver Whalers</td><td>8</td><td>10</td><td></td><td></td></tr>
<tr><td>8</td><td>Kelowna Knights</td><td>8</td><td>21</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Prince George Firebirds</td><td>40</td><td>41</td><td></td><td></td></tr>
<tr><td>2</td><td>Prince George Firebirds</td><td>27</td><td>39</td><td></td><td></td></tr>
<tr><td>3</td><td>Prince George Firebirds</td><td>28</td><td>38</td><td></td><td></td></tr>
<tr><td>4</td><td>Halifax Raiders</td><td>38</td><td>38</td><td></td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>33</td><td>37</td><td></td><td></td></tr>
<tr><td>6</td><td>Halifax Raiders</td><td>39</td><td>37</td><td></td><td></td></tr>
<tr><td>7</td><td>Halifax Raiders</td><td>34</td><td>36</td><td></td><td></td></tr>
<tr><td>8</td><td>Kelowna Knights</td><td>10</td><td>35</td><td></td><td></td></tr>
<tr><td>9</td><td>St. Louis Scarecrows</td><td>26</td><td>35</td><td></td><td></td></tr>
<tr><td>10</td><td>Colorado Mammoths</td><td>29</td><td>34</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Stingrays</td><td>1</td><td>3</td><td></td><td></td></tr>
<tr><td>2</td><td>Blazers</td><td>1</td><td>5</td><td></td><td></td></tr>
<tr><td>3</td><td>Outlaws</td><td>1</td><td>5</td><td></td><td></td></tr>
<tr><td>4</td><td>Vancouver Whalers</td><td>9</td><td>5</td><td></td><td></td></tr>
<tr><td>5</td><td>Lions</td><td>1</td><td>7</td><td></td><td></td></tr>
<tr><td>6</td><td>Prince George Firebirds</td><td>8</td><td>7</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>8</td><td>19</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Montreal Militia</td><td>28</td><td>82</td><td></td><td></td></tr>
<tr><td>2</td><td>Montreal Impact</td><td>27</td><td>78</td><td></td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>9</td><td>73</td><td></td><td></td></tr>
<tr><td>4</td><td>Halifax Raiders</td><td>32</td><td>73</td><td></td><td></td></tr>
<tr><td>5</td><td>St. Louis Scarecrows</td><td>34</td><td>72</td><td></td><td></td></tr>
<tr><td>6</td><td>Montreal Impact</td><td>26</td><td>70</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>30</td><td>70</td><td></td><td></td></tr>
<tr><td>8</td><td>Prince George Firebirds</td><td>8</td><td>68</td><td></td><td></td></tr>
<tr><td>9</td><td>Detroit Falcons</td><td>8</td><td>68</td><td></td><td></td></tr>
<tr><td>10</td><td>Vancouver Whalers</td><td>11</td><td>68</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lions</td><td>1</td><td>8</td><td></td><td></td></tr>
<tr><td>2</td><td>Blazers</td><td>1</td><td>10</td><td></td><td></td></tr>
<tr><td>3</td><td>Outlaws</td><td>1</td><td>12</td><td></td><td></td></tr>
<tr><td>4</td><td>Stingrays</td><td>1</td><td>14</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>10</td><td>14</td><td></td><td></td></tr>
<tr><td>6</td><td>Vancouver Whalers</td><td>8</td><td>23</td><td></td><td></td></tr>
<tr><td>7</td><td>Kelowna Knights</td><td>8</td><td>47</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Kelowna Knights</td><td>40</td><td>19</td><td></td><td></td></tr>
<tr><td>2</td><td>Montreal Militia</td><td>34</td><td>18</td><td></td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>9</td><td>17</td><td></td><td></td></tr>
<tr><td>4</td><td>Montreal Impact</td><td>27</td><td>17</td><td></td><td></td></tr>
<tr><td>5</td><td>Halifax Raiders</td><td>32</td><td>17</td><td></td><td></td></tr>
<tr><td>6</td><td>Kelowna Knights</td><td>32</td><td>17</td><td></td><td></td></tr>
<tr><td>7</td><td>St. Louis Scarecrows</td><td>34</td><td>17</td><td></td><td></td></tr>
<tr><td>8</td><td>Vancouver Whalers</td><td>10</td><td>16</td><td></td><td></td></tr>
<tr><td>9</td><td>Vancouver Whalers</td><td>20</td><td>16</td><td></td><td></td></tr>
<tr><td>10</td><td>Detroit Falcons</td><td>10</td><td>15</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Team Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Montreal Militia</td><td>28</td><td>19</td><td></td><td></td></tr>
<tr><td>2</td><td>Vancouver Whalers</td><td>9</td><td>17</td><td></td><td></td></tr>
<tr><td>3</td><td>Detroit Falcons</td><td>8</td><td>16</td><td></td><td></td></tr>
<tr><td>4</td><td>Halifax Raiders</td><td>32</td><td>16</td><td></td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>21</td><td>15</td><td></td><td></td></tr>
<tr><td>6</td><td>Kelowna Knights</td><td>31</td><td>15</td><td></td><td></td></tr>
<tr><td>7</td><td>St. Louis Scarecrows</td><td>24</td><td>14</td><td></td><td></td></tr>
<tr><td>8</td><td>Prince George Firebirds</td><td>8</td><td>13</td><td></td><td></td></tr>
<tr><td>9</td><td>Vancouver Whalers</td><td>19</td><td>13</td><td></td><td></td></tr>
<tr><td>10</td><td>Detroit Falcons</td><td>9</td><td>12</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_PlayersRecords">Players Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Ice Time In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Mark Malyckyj</td><td>Detroit Falcons</td><td>8</td><td>49</td><td>34:45</td><td></td></tr>
<tr><td>2</td><td>Bob Caygeon</td><td>Prince George Firebirds</td><td>8</td><td>49</td><td>33:50</td><td></td></tr>
<tr><td>3</td><td>Mark Malyckyj</td><td>Detroit Falcons</td><td>8</td><td>104</td><td>33:50</td><td></td></tr>
<tr><td>4</td><td>Valgard de Jong</td><td>Boston Battalion</td><td>8</td><td>32</td><td>33:49</td><td></td></tr>
<tr><td>5</td><td>Jack Nero</td><td>Los Angeles Archangels</td><td>8</td><td>150</td><td>33:35</td><td></td></tr>
<tr><td>6</td><td>Mark Malyckyj</td><td>Detroit Falcons</td><td>8</td><td>152</td><td>33:21</td><td></td></tr>
<tr><td>7</td><td>Vinny Chezno</td><td>Detroit Falcons</td><td>10</td><td>44</td><td>33:08</td><td></td></tr>
<tr><td>8</td><td>Blake Carter</td><td>Boston Battalion</td><td>8</td><td>39</td><td>33:02</td><td></td></tr>
<tr><td>9</td><td>Benoit Fortescue</td><td>Chicago Hitmen</td><td>10</td><td>1</td><td>32:49</td><td></td></tr>
<tr><td>10</td><td>Blake Carter</td><td>Boston Battalion</td><td>8</td><td>32</td><td>32:42</td><td></td></tr>

<tr><td colspan="7"><b>Most Ice Time In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Patrick Brumm</td><td>Prince George Firebirds</td><td>24</td><td>1351</td><td></td><td></td></tr>
<tr><td>2</td><td>Hunky Monkey</td><td>Prince George Firebirds</td><td>29</td><td>1277</td><td></td><td></td></tr>
<tr><td>3</td><td>John Matthews</td><td>St. Louis Scarecrows</td><td>25</td><td>1270</td><td></td><td></td></tr>
<tr><td>4</td><td>VLAD McZehrl</td><td>Vancouver Whalers</td><td>24</td><td>1267</td><td></td><td></td></tr>
<tr><td>5</td><td>Barak Obrana</td><td>Prince George Firebirds</td><td>29</td><td>1263</td><td></td><td></td></tr>
<tr><td>6</td><td>Ben Troy</td><td>St. Louis Scarecrows</td><td>25</td><td>1254</td><td></td><td></td></tr>
<tr><td>7</td><td>Shea Robinson</td><td>Prince George Firebirds</td><td>24</td><td>1247</td><td></td><td></td></tr>
<tr><td>8</td><td>Vladimir Lidstrom</td><td>Montreal Impact</td><td>24</td><td>1233</td><td></td><td></td></tr>
<tr><td>9</td><td>Brandon Girard</td><td>Detroit Falcons</td><td>24</td><td>1227</td><td></td><td></td></tr>
<tr><td>10</td><td>Alex Mack</td><td>Detroit Falcons</td><td>24</td><td>1219</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Riku Showron</td><td>Detroit Falcons</td><td>8</td><td>14</td><td>5</td><td></td></tr>
<tr><td>2</td><td>Reggie Dunlop</td><td>Lions</td><td>1</td><td>2</td><td>4</td><td></td></tr>
<tr><td>3</td><td>Rachel Belmont</td><td>Los Angeles Archangels</td><td>8</td><td>72</td><td>4</td><td></td></tr>
<tr><td>4</td><td>Phil Schenn</td><td>Montreal Impact</td><td>9</td><td>6</td><td>4</td><td></td></tr>
<tr><td>5</td><td>Rayo Ken</td><td>Chicago Hitmen</td><td>10</td><td>1</td><td>4</td><td></td></tr>
<tr><td>6</td><td>Kaspar Abraham</td><td>Detroit Falcons</td><td>10</td><td>27</td><td>4</td><td></td></tr>
<tr><td>7</td><td>Brandon Donini</td><td>Detroit Falcons</td><td>10</td><td>41</td><td>4</td><td></td></tr>
<tr><td>8</td><td>Cameron Gibson</td><td>Vancouver Whalers</td><td>11</td><td>37</td><td>4</td><td></td></tr>
<tr><td>9</td><td>Jrue Harden</td><td>Montreal Impact</td><td>11</td><td>79</td><td>4</td><td></td></tr>
<tr><td>10</td><td>Ace Faulkner</td><td>Detroit Falcons</td><td>11</td><td>113</td><td>4</td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jrue Harden</td><td>Montreal Impact</td><td>11</td><td>41</td><td></td><td></td></tr>
<tr><td>2</td><td>Claude Perron</td><td>Detroit Falcons</td><td>11</td><td>36</td><td></td><td></td></tr>
<tr><td>3</td><td>Alex Light</td><td>Kelowna Knights</td><td>32</td><td>34</td><td></td><td></td></tr>
<tr><td>4</td><td>Riku Showron</td><td>Detroit Falcons</td><td>8</td><td>33</td><td></td><td></td></tr>
<tr><td>5</td><td>Bjorn Knutsen</td><td>Detroit Falcons</td><td>24</td><td>33</td><td></td><td></td></tr>
<tr><td>6</td><td>Raven Silverwing</td><td>Montreal Impact</td><td>27</td><td>33</td><td></td><td></td></tr>
<tr><td>7</td><td>Chad Levasseur</td><td>Vancouver Whalers</td><td>9</td><td>32</td><td></td><td></td></tr>
<tr><td>8</td><td>Kaspar Abraham</td><td>Detroit Falcons</td><td>10</td><td>32</td><td></td><td></td></tr>
<tr><td>9</td><td>Dickie Adua</td><td>Detroit Falcons</td><td>9</td><td>31</td><td></td><td></td></tr>
<tr><td>10</td><td>Christopher Raymond</td><td>Detroit Falcons</td><td>8</td><td>30</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Lucas Smith</td><td>Detroit Falcons</td><td>8</td><td>14</td><td>5</td><td></td></tr>
<tr><td>2</td><td>Chris Welch</td><td>Montreal Impact</td><td>25</td><td>12</td><td>5</td><td></td></tr>
<tr><td>3</td><td>Beau Bent</td><td>Kelowna Knights</td><td>30</td><td>131</td><td>5</td><td></td></tr>
<tr><td>4</td><td>Samee Iqbal</td><td>Kelowna Knights</td><td>32</td><td>165</td><td>5</td><td></td></tr>
<tr><td>5</td><td>Mathias Victorsson</td><td>Detroit Falcons</td><td>35</td><td>65</td><td>5</td><td></td></tr>
<tr><td>6</td><td>Ted Glass</td><td>Halifax Raiders</td><td>37</td><td>71</td><td>5</td><td></td></tr>
<tr><td>7</td><td>Otis B. Driftwood</td><td>St. Louis Scarecrows</td><td>40</td><td>106</td><td>5</td><td></td></tr>
<tr><td>8</td><td>Bobby Monohan</td><td>Blazers</td><td>1</td><td>4</td><td>4</td><td></td></tr>
<tr><td>9</td><td>Draco Malfoy</td><td>Boston Battalion</td><td>8</td><td>42</td><td>4</td><td></td></tr>
<tr><td>10</td><td>Jacques Leveque</td><td>Los Angeles Archangels</td><td>8</td><td>72</td><td>4</td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Nathan Wong</td><td>Montreal Impact</td><td>11</td><td>47</td><td></td><td></td></tr>
<tr><td>2</td><td>Dave Pulford</td><td>Vancouver Whalers</td><td>9</td><td>46</td><td></td><td></td></tr>
<tr><td>3</td><td>Logan Valentine</td><td>Vancouver Whalers</td><td>10</td><td>45</td><td></td><td></td></tr>
<tr><td>4</td><td>Finnegan Larsson</td><td>Detroit Falcons</td><td>10</td><td>44</td><td></td><td></td></tr>
<tr><td>5</td><td>Simo Häyhä</td><td>Vancouver Whalers</td><td>10</td><td>44</td><td></td><td></td></tr>
<tr><td>6</td><td>Lucas Smith</td><td>Detroit Falcons</td><td>8</td><td>41</td><td></td><td></td></tr>
<tr><td>7</td><td>Riku Showron</td><td>Detroit Falcons</td><td>8</td><td>38</td><td></td><td></td></tr>
<tr><td>8</td><td>Jason Michaels</td><td>Detroit Falcons</td><td>9</td><td>34</td><td></td><td></td></tr>
<tr><td>9</td><td>Chad Levasseur</td><td>Vancouver Whalers</td><td>9</td><td>34</td><td></td><td></td></tr>
<tr><td>10</td><td>Christopher Raymond</td><td>Detroit Falcons</td><td>8</td><td>32</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Jon Ross</td><td>Vancouver Whalers</td><td>30</td><td>197</td><td>8</td><td></td></tr>
<tr><td>2</td><td>Jrue Harden</td><td>Montreal Impact</td><td>11</td><td>79</td><td>7</td><td></td></tr>
<tr><td>3</td><td>Chad Levasseur</td><td>Vancouver Whalers</td><td>9</td><td>35</td><td>6</td><td></td></tr>
<tr><td>4</td><td>James Ryan</td><td>Vancouver Whalers</td><td>10</td><td>36</td><td>6</td><td></td></tr>
<tr><td>5</td><td>Nathan Wong</td><td>Montreal Impact</td><td>11</td><td>79</td><td>6</td><td></td></tr>
<tr><td>6</td><td>Ace Faulkner</td><td>Detroit Falcons</td><td>11</td><td>113</td><td>6</td><td></td></tr>
<tr><td>7</td><td>John Heimer-Schmidt</td><td>Vancouver Whalers</td><td>20</td><td>95</td><td>6</td><td></td></tr>
<tr><td>8</td><td>Andrey Barbashev</td><td>Vancouver Whalers</td><td>23</td><td>58</td><td>6</td><td></td></tr>
<tr><td>9</td><td>Patrikov Bure</td><td>Vancouver Whalers</td><td>24</td><td>154</td><td>6</td><td></td></tr>
<tr><td>10</td><td>John Wick</td><td>St. Louis Scarecrows</td><td>27</td><td>8</td><td>6</td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ace Faulkner</td><td>Detroit Falcons</td><td>11</td><td>73</td><td></td><td></td></tr>
<tr><td>2</td><td>Jrue Harden</td><td>Montreal Impact</td><td>11</td><td>73</td><td></td><td></td></tr>
<tr><td>3</td><td>Riku Showron</td><td>Detroit Falcons</td><td>8</td><td>71</td><td></td><td></td></tr>
<tr><td>4</td><td>Dave Pulford</td><td>Vancouver Whalers</td><td>9</td><td>69</td><td></td><td></td></tr>
<tr><td>5</td><td>Nathan Wong</td><td>Montreal Impact</td><td>11</td><td>67</td><td></td><td></td></tr>
<tr><td>6</td><td>Chad Levasseur</td><td>Vancouver Whalers</td><td>9</td><td>66</td><td></td><td></td></tr>
<tr><td>7</td><td>Lucas Smith</td><td>Detroit Falcons</td><td>8</td><td>65</td><td></td><td></td></tr>
<tr><td>8</td><td>Christopher Raymond</td><td>Detroit Falcons</td><td>8</td><td>62</td><td></td><td></td></tr>
<tr><td>9</td><td>Ivo Willems</td><td>Vancouver Whalers</td><td>9</td><td>62</td><td></td><td></td></tr>
<tr><td>10</td><td>Rachel Belmont</td><td>Los Angeles Archangels</td><td>8</td><td>53</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Cameron Gibson</td><td>Vancouver Whalers</td><td>11</td><td>70</td><td>17</td><td></td></tr>
<tr><td>2</td><td>Jrue Harden</td><td>Montreal Impact</td><td>11</td><td>79</td><td>15</td><td></td></tr>
<tr><td>3</td><td>Joel Westbrook</td><td>Montreal Impact</td><td>11</td><td>79</td><td>14</td><td></td></tr>
<tr><td>4</td><td>Crossfit Jesus</td><td>St. Louis Scarecrows</td><td>34</td><td>12</td><td>14</td><td></td></tr>
<tr><td>5</td><td>Crossfit Jesus</td><td>St. Louis Scarecrows</td><td>34</td><td>32</td><td>14</td><td></td></tr>
<tr><td>6</td><td>Nagy Galchenyuk</td><td>Vancouver Whalers</td><td>9</td><td>59</td><td>13</td><td></td></tr>
<tr><td>7</td><td>Jrue Harden</td><td>Montreal Impact</td><td>11</td><td>52</td><td>13</td><td></td></tr>
<tr><td>8</td><td>Cameron Gibson</td><td>Detroit Falcons</td><td>12</td><td>110</td><td>13</td><td></td></tr>
<tr><td>9</td><td>Damien Giannotti</td><td>Kelowna Knights</td><td>17</td><td>96</td><td>13</td><td></td></tr>
<tr><td>10</td><td>Mark Longford</td><td>Vancouver Whalers</td><td>20</td><td>45</td><td>13</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Alex Light</td><td>Kelowna Knights</td><td>31</td><td>239</td><td></td><td></td></tr>
<tr><td>2</td><td>Jrue Harden</td><td>Montreal Impact</td><td>11</td><td>234</td><td></td><td></td></tr>
<tr><td>3</td><td>John Langabeer</td><td>Kelowna Knights</td><td>34</td><td>233</td><td></td><td></td></tr>
<tr><td>4</td><td>VLAD McZehrl</td><td>Vancouver Whalers</td><td>24</td><td>231</td><td></td><td></td></tr>
<tr><td>5</td><td>John Wick</td><td>St. Louis Scarecrows</td><td>27</td><td>227</td><td></td><td></td></tr>
<tr><td>6</td><td>Ammon Tutankamun</td><td>Detroit Falcons</td><td>14</td><td>225</td><td></td><td></td></tr>
<tr><td>7</td><td>Cameron Gibson</td><td>Vancouver Whalers</td><td>11</td><td>221</td><td></td><td></td></tr>
<tr><td>8</td><td>Randy Randleman</td><td>Kelowna Knights</td><td>24</td><td>217</td><td></td><td></td></tr>
<tr><td>9</td><td>Mikhail Krivokrasov</td><td>Vancouver Whalers</td><td>15</td><td>211</td><td></td><td></td></tr>
<tr><td>10</td><td>Ivo Willems</td><td>Vancouver Whalers</td><td>9</td><td>204</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Joel Westbrook</td><td>Montreal Impact</td><td>10</td><td>85</td><td>12</td><td></td></tr>
<tr><td>2</td><td>Chris Franz</td><td>Los Angeles Archangels</td><td>8</td><td>123</td><td>10</td><td></td></tr>
<tr><td>3</td><td>James Marushin</td><td>Prince George Firebirds</td><td>11</td><td>90</td><td>10</td><td></td></tr>
<tr><td>4</td><td>Jack Nero</td><td>Los Angeles Archangels</td><td>8</td><td>128</td><td>9</td><td></td></tr>
<tr><td>5</td><td>Benoit Fortescue</td><td>Chicago Hitmen</td><td>10</td><td>27</td><td>9</td><td></td></tr>
<tr><td>6</td><td>Everett Taylor</td><td>Chicago Hitmen</td><td>11</td><td>61</td><td>9</td><td></td></tr>
<tr><td>7</td><td>Zemgus Nylander</td><td>Prince George Firebirds</td><td>36</td><td>10</td><td>9</td><td></td></tr>
<tr><td>8</td><td>Valgard de Jong</td><td>Boston Battalion</td><td>8</td><td>42</td><td>8</td><td></td></tr>
<tr><td>9</td><td>Willie Weber</td><td>Prince George Firebirds</td><td>8</td><td>99</td><td>8</td><td></td></tr>
<tr><td>10</td><td>Jake Rypien</td><td>Detroit Falcons</td><td>9</td><td>16</td><td>8</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Benoit Fortescue</td><td>Chicago Hitmen</td><td>10</td><td>120</td><td></td><td></td></tr>
<tr><td>2</td><td>Willie Weber</td><td>Prince George Firebirds</td><td>8</td><td>104</td><td></td><td></td></tr>
<tr><td>3</td><td>Matthew Ekblad</td><td>Kelowna Knights</td><td>8</td><td>97</td><td></td><td></td></tr>
<tr><td>4</td><td>Shawn Velevra</td><td>Kelowna Knights</td><td>11</td><td>97</td><td></td><td></td></tr>
<tr><td>5</td><td>Valgard de Jong</td><td>Boston Battalion</td><td>8</td><td>94</td><td></td><td></td></tr>
<tr><td>6</td><td>Vinny Chezno</td><td>Chicago Hitmen</td><td>11</td><td>94</td><td></td><td></td></tr>
<tr><td>7</td><td>Camillo D'Antonio</td><td>Los Angeles Archangels</td><td>8</td><td>89</td><td></td><td></td></tr>
<tr><td>8</td><td>Ogie Ogilthorpe</td><td>Washington Patriots</td><td>8</td><td>88</td><td></td><td></td></tr>
<tr><td>9</td><td>Jack Vessalius</td><td>Washington Patriots</td><td>8</td><td>86</td><td></td><td></td></tr>
<tr><td>10</td><td>Jack Nero</td><td>Los Angeles Archangels</td><td>8</td><td>81</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Mark Malyckyj</td><td>Detroit Falcons</td><td>8</td><td>30</td><td>7</td><td></td></tr>
<tr><td>2</td><td>Finnegan Larsson</td><td>Detroit Falcons</td><td>10</td><td>41</td><td>7</td><td></td></tr>
<tr><td>3</td><td>Kaspar Abraham</td><td>Detroit Falcons</td><td>10</td><td>41</td><td>7</td><td></td></tr>
<tr><td>4</td><td>Brandon Donini</td><td>Detroit Falcons</td><td>10</td><td>41</td><td>7</td><td></td></tr>
<tr><td>5</td><td>Nathan Wong</td><td>Montreal Impact</td><td>11</td><td>79</td><td>7</td><td></td></tr>
<tr><td>6</td><td>Curtis Larade</td><td>Montreal Impact</td><td>11</td><td>120</td><td>7</td><td></td></tr>
<tr><td>7</td><td>Luka Zaitsev</td><td>Vancouver Whalers</td><td>23</td><td>58</td><td>7</td><td></td></tr>
<tr><td>8</td><td>VLAD McZehrl</td><td>Vancouver Whalers</td><td>23</td><td>58</td><td>7</td><td></td></tr>
<tr><td>9</td><td>Andrey Barbashev</td><td>Vancouver Whalers</td><td>23</td><td>58</td><td>7</td><td></td></tr>
<tr><td>10</td><td>Riku Showron</td><td>Detroit Falcons</td><td>8</td><td>30</td><td>6</td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Mark Malyckyj</td><td>Detroit Falcons</td><td>8</td><td>70</td><td></td><td></td></tr>
<tr><td>2</td><td>Lucas Smith</td><td>Detroit Falcons</td><td>8</td><td>61</td><td></td><td></td></tr>
<tr><td>3</td><td>Riku Showron</td><td>Detroit Falcons</td><td>8</td><td>59</td><td></td><td></td></tr>
<tr><td>4</td><td>Nathan Wong</td><td>Montreal Impact</td><td>11</td><td>54</td><td></td><td></td></tr>
<tr><td>5</td><td>Jrue Harden</td><td>Montreal Impact</td><td>11</td><td>53</td><td></td><td></td></tr>
<tr><td>6</td><td>Christopher Raymond</td><td>Detroit Falcons</td><td>8</td><td>51</td><td></td><td></td></tr>
<tr><td>7</td><td>Chris Partlow</td><td>Vancouver Whalers</td><td>9</td><td>50</td><td></td><td></td></tr>
<tr><td>8</td><td>Lance Uppercut</td><td>Detroit Falcons</td><td>8</td><td>47</td><td></td><td></td></tr>
<tr><td>9</td><td>Thomas Jameson</td><td>Detroit Falcons</td><td>8</td><td>38</td><td></td><td></td></tr>
<tr><td>10</td><td>Willie Weber</td><td>Prince George Firebirds</td><td>8</td><td>31</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>James Marushin</td><td>Prince George Firebirds</td><td>11</td><td>65</td><td>-8</td><td></td></tr>
<tr><td>2</td><td>Computer Stochel</td><td>Outlaws</td><td>1</td><td>8</td><td>-7</td><td></td></tr>
<tr><td>3</td><td>Ogie Ogilthorpe</td><td>Outlaws</td><td>1</td><td>8</td><td>-7</td><td></td></tr>
<tr><td>4</td><td>Chris Franz</td><td>Los Angeles Archangels</td><td>8</td><td>14</td><td>-7</td><td></td></tr>
<tr><td>5</td><td>Jack Nero</td><td>Los Angeles Archangels</td><td>8</td><td>120</td><td>-7</td><td></td></tr>
<tr><td>6</td><td>Angelo Cerilli</td><td>Prince George Firebirds</td><td>11</td><td>65</td><td>-7</td><td></td></tr>
<tr><td>7</td><td>Jack Vessalius</td><td>Washington Patriots</td><td>8</td><td>30</td><td>-6</td><td></td></tr>
<tr><td>8</td><td>Ogie Ogilthorpe</td><td>Washington Patriots</td><td>8</td><td>30</td><td>-6</td><td></td></tr>
<tr><td>9</td><td>Camillo D'Antonio</td><td>Los Angeles Archangels</td><td>8</td><td>120</td><td>-6</td><td></td></tr>
<tr><td>10</td><td>Benoit Fortescue</td><td>Chicago Hitmen</td><td>10</td><td>36</td><td>-6</td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>DuJuan Cook</td><td>Chicago Hitmen</td><td>11</td><td>-51</td><td></td><td></td></tr>
<tr><td>2</td><td>Vinny Chezno</td><td>Chicago Hitmen</td><td>11</td><td>-50</td><td></td><td></td></tr>
<tr><td>3</td><td>Roddy Lee-Wright</td><td>Kelowna Knights</td><td>10</td><td>-48</td><td></td><td></td></tr>
<tr><td>4</td><td>Ogie Ogilthorpe</td><td>Washington Patriots</td><td>8</td><td>-44</td><td></td><td></td></tr>
<tr><td>5</td><td>Sven Wolf</td><td>Chicago Hitmen</td><td>11</td><td>-44</td><td></td><td></td></tr>
<tr><td>6</td><td>Jack Vessalius</td><td>Washington Patriots</td><td>8</td><td>-43</td><td></td><td></td></tr>
<tr><td>7</td><td>Blake Carter</td><td>Boston Battalion</td><td>8</td><td>-41</td><td></td><td></td></tr>
<tr><td>8</td><td>Käri Bärköv</td><td>Chicago Hitmen</td><td>11</td><td>-39</td><td></td><td></td></tr>
<tr><td>9</td><td>Ev Fon</td><td>Washington Patriots</td><td>8</td><td>-38</td><td></td><td></td></tr>
<tr><td>10</td><td>Brandon Cant</td><td>Kelowna Knights</td><td>10</td><td>-37</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Computer Olhmstrom</td><td>Blazers</td><td>1</td><td>8</td><td>47</td><td></td></tr>
<tr><td>2</td><td>Giovanni Mortellaro II</td><td>Detroit Falcons</td><td>9</td><td>55</td><td>38</td><td></td></tr>
<tr><td>3</td><td>Dave Pulford</td><td>Vancouver Whalers</td><td>9</td><td>30</td><td>31</td><td></td></tr>
<tr><td>4</td><td>Computer Hart</td><td>Lions</td><td>1</td><td>9</td><td>27</td><td></td></tr>
<tr><td>5</td><td>Christopher Raymond</td><td>Detroit Falcons</td><td>8</td><td>30</td><td>27</td><td></td></tr>
<tr><td>6</td><td>Jack Nero</td><td>Los Angeles Archangels</td><td>8</td><td>47</td><td>27</td><td></td></tr>
<tr><td>7</td><td>Danny Richter</td><td>Prince George Firebirds</td><td>8</td><td>83</td><td>27</td><td></td></tr>
<tr><td>8</td><td>John Grossman</td><td>Vancouver Whalers</td><td>8</td><td>154</td><td>27</td><td></td></tr>
<tr><td>9</td><td>Dan Boyle</td><td>Vancouver Whalers</td><td>9</td><td>56</td><td>27</td><td></td></tr>
<tr><td>10</td><td>Jan Cross</td><td>Vancouver Whalers</td><td>9</td><td>118</td><td>27</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Gorlab</td><td>Halifax Raiders</td><td>28</td><td>160</td><td></td><td></td></tr>
<tr><td>2</td><td>Danny Foster</td><td>St. Louis Scarecrows</td><td>31</td><td>160</td><td></td><td></td></tr>
<tr><td>3</td><td>Danny Foster</td><td>St. Louis Scarecrows</td><td>30</td><td>158</td><td></td><td></td></tr>
<tr><td>4</td><td>John Grossman Jr.</td><td>Prince George Firebirds</td><td>37</td><td>150</td><td></td><td></td></tr>
<tr><td>5</td><td>Kaspars Tsizling</td><td>Vancouver Whalers</td><td>19</td><td>138</td><td></td><td></td></tr>
<tr><td>6</td><td>Alexsander Komarov</td><td>Halifax Raiders</td><td>32</td><td>135</td><td></td><td></td></tr>
<tr><td>7</td><td>John Grossman</td><td>Vancouver Whalers</td><td>8</td><td>117</td><td></td><td></td></tr>
<tr><td>8</td><td>Dolph Ziggler</td><td>Kelowna Knights</td><td>26</td><td>115</td><td></td><td></td></tr>
<tr><td>9</td><td>Giovanni Mortellaro II</td><td>Detroit Falcons</td><td>9</td><td>113</td><td></td><td></td></tr>
<tr><td>10</td><td>Jordan Cousins</td><td>Detroit Falcons</td><td>26</td><td>110</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Marco Hunter</td><td>Boston Battalion</td><td>8</td><td>62</td><td>17</td><td></td></tr>
<tr><td>2</td><td>Daisuke Katsu</td><td>Kelowna Knights</td><td>15</td><td>19</td><td>14</td><td></td></tr>
<tr><td>3</td><td>Marco Hunter</td><td>Boston Battalion</td><td>8</td><td>75</td><td>13</td><td></td></tr>
<tr><td>4</td><td>Blake Carter</td><td>Boston Battalion</td><td>8</td><td>81</td><td>13</td><td></td></tr>
<tr><td>5</td><td>Jesse Jacek-Kix</td><td>St. Louis Scarecrows</td><td>15</td><td>74</td><td>13</td><td></td></tr>
<tr><td>6</td><td>Duke Nukem</td><td>Los Angeles Archangels</td><td>8</td><td>105</td><td>12</td><td></td></tr>
<tr><td>7</td><td>Erik Cole</td><td>Los Angeles Archangels</td><td>8</td><td>160</td><td>12</td><td></td></tr>
<tr><td>8</td><td>Danny Foster</td><td>St. Louis Scarecrows</td><td>30</td><td>101</td><td>12</td><td></td></tr>
<tr><td>9</td><td>Josh Vienneau</td><td>Boston Battalion</td><td>8</td><td>33</td><td>11</td><td></td></tr>
<tr><td>10</td><td>Marco Hunter</td><td>Boston Battalion</td><td>8</td><td>33</td><td>11</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Sim Browski</td><td>Colorado Mammoths</td><td>28</td><td>223</td><td></td><td></td></tr>
<tr><td>2</td><td>Daisuke Katsu</td><td>Kelowna Knights</td><td>15</td><td>205</td><td></td><td></td></tr>
<tr><td>3</td><td>Danny Foster</td><td>St. Louis Scarecrows</td><td>30</td><td>202</td><td></td><td></td></tr>
<tr><td>4</td><td>Marco Hunter</td><td>Boston Battalion</td><td>8</td><td>192</td><td></td><td></td></tr>
<tr><td>5</td><td>Ammon Tutankamun</td><td>Detroit Falcons</td><td>14</td><td>190</td><td></td><td></td></tr>
<tr><td>6</td><td>Willie Weber</td><td>Prince George Firebirds</td><td>8</td><td>188</td><td></td><td></td></tr>
<tr><td>7</td><td>Blake Carter</td><td>Boston Battalion</td><td>8</td><td>183</td><td></td><td></td></tr>
<tr><td>8</td><td>Matthew Ekblad</td><td>Kelowna Knights</td><td>8</td><td>181</td><td></td><td></td></tr>
<tr><td>9</td><td>Benoit Fortescue</td><td>Chicago Hitmen</td><td>10</td><td>176</td><td></td><td></td></tr>
<tr><td>10</td><td>Josh Vienneau</td><td>Boston Battalion</td><td>8</td><td>166</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Tomas Novak</td><td>Vancouver Whalers</td><td>9</td><td>3</td><td></td><td></td></tr>
<tr><td>2</td><td>Papa Huligans</td><td>Detroit Falcons</td><td>41</td><td>3</td><td></td><td></td></tr>
<tr><td>3</td><td>Dave Smith</td><td>Vancouver Whalers</td><td>10</td><td>2</td><td></td><td></td></tr>
<tr><td>4</td><td>Charlie Sheen</td><td>Montreal Impact</td><td>11</td><td>2</td><td></td><td></td></tr>
<tr><td>5</td><td>Jim Lahey</td><td>Detroit Falcons</td><td>14</td><td>2</td><td></td><td></td></tr>
<tr><td>6</td><td>Ryan Carlsson</td><td>Montreal Impact</td><td>17</td><td>2</td><td></td><td></td></tr>
<tr><td>7</td><td>Bob Caygeon</td><td>Prince George Firebirds</td><td>8</td><td>1</td><td></td><td></td></tr>
<tr><td>8</td><td>Magnus Pulkkinen-Granlund</td><td>Vancouver Whalers</td><td>8</td><td>1</td><td></td><td></td></tr>
<tr><td>9</td><td>Markus Backlund</td><td>Kelowna Knights</td><td>8</td><td>1</td><td></td><td></td></tr>
<tr><td>10</td><td>Daniel Passarella</td><td>Kelowna Knights</td><td>8</td><td>1</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hat Trick In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Riku Showron</td><td>Detroit Falcons</td><td>8</td><td>4</td><td></td><td></td></tr>
<tr><td>2</td><td>Claude Perron</td><td>Detroit Falcons</td><td>11</td><td>4</td><td></td><td></td></tr>
<tr><td>3</td><td>Reed Laing</td><td>Halifax Raiders</td><td>32</td><td>4</td><td></td><td></td></tr>
<tr><td>4</td><td>Ivo Willems</td><td>Vancouver Whalers</td><td>9</td><td>3</td><td></td><td></td></tr>
<tr><td>5</td><td>Cameron Gibson</td><td>Vancouver Whalers</td><td>11</td><td>3</td><td></td><td></td></tr>
<tr><td>6</td><td>Ace Faulkner</td><td>Detroit Falcons</td><td>11</td><td>3</td><td></td><td></td></tr>
<tr><td>7</td><td>Christopher Raymond</td><td>Detroit Falcons</td><td>8</td><td>2</td><td></td><td></td></tr>
<tr><td>8</td><td>Kaspar Abraham</td><td>Detroit Falcons</td><td>10</td><td>2</td><td></td><td></td></tr>
<tr><td>9</td><td>Simo Häyhä</td><td>Vancouver Whalers</td><td>10</td><td>2</td><td></td><td></td></tr>
<tr><td>10</td><td>Reggie Dunlop</td><td>Lions</td><td>1</td><td>1</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Best Faceoff in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Julien Marshall</td><td>Stingrays</td><td>1</td><td>67.20%</td><td></td><td></td></tr>
<tr><td>2</td><td>Alexander Charlyb'y</td><td>St. Louis Scarecrows</td><td>29</td><td>64.00%</td><td></td><td></td></tr>
<tr><td>3</td><td>Alexander Charlyb'y</td><td>St. Louis Scarecrows</td><td>28</td><td>62.70%</td><td></td><td></td></tr>
<tr><td>4</td><td>Mac Hooper</td><td>Chicago Hitmen</td><td>10</td><td>61.50%</td><td></td><td></td></tr>
<tr><td>5</td><td>Dave Pulford</td><td>Vancouver Whalers</td><td>11</td><td>61.40%</td><td></td><td></td></tr>
<tr><td>6</td><td>Alexander Charlyb'y</td><td>St. Louis Scarecrows</td><td>26</td><td>60.60%</td><td></td><td></td></tr>
<tr><td>7</td><td>Ryan Bolt</td><td>Detroit Falcons</td><td>14</td><td>60.00%</td><td></td><td></td></tr>
<tr><td>8</td><td>Jussi Toivonen</td><td>Montreal Impact</td><td>10</td><td>59.40%</td><td></td><td></td></tr>
<tr><td>9</td><td>Riku Showron</td><td>Detroit Falcons</td><td>8</td><td>59.10%</td><td></td><td></td></tr>
<tr><td>10</td><td>Ty Tie</td><td>Prince George Firebirds</td><td>11</td><td>58.40%</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GoaliesRecords">Goalies Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="7"><b>Shutout In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jaska Tillikainen</td><td>Kelowna Knights</td><td>8</td><td>7</td><td></td><td></td></tr>
<tr><td>2</td><td>Josef Heiss</td><td>Montreal Impact</td><td>8</td><td>7</td><td></td><td></td></tr>
<tr><td>3</td><td>Matt Lewis-Flood</td><td>Montreal Militia</td><td>28</td><td>7</td><td></td><td></td></tr>
<tr><td>4</td><td>Georgette Pel</td><td>Halifax Raiders</td><td>32</td><td>7</td><td></td><td></td></tr>
<tr><td>5</td><td>Carrick Murray</td><td>Vancouver Whalers</td><td>35</td><td>7</td><td></td><td></td></tr>
<tr><td>6</td><td>Andrei Vasilevski</td><td>Boston Battalion</td><td>8</td><td>6</td><td></td><td></td></tr>
<tr><td>7</td><td>Gregory Thompson</td><td>Detroit Falcons</td><td>10</td><td>6</td><td></td><td></td></tr>
<tr><td>8</td><td>Brick Wall</td><td>Montreal Impact</td><td>17</td><td>6</td><td></td><td></td></tr>
<tr><td>9</td><td>Charlie Serpe</td><td>Detroit Falcons</td><td>8</td><td>5</td><td></td><td></td></tr>
<tr><td>10</td><td>Jason Missiaen</td><td>Washington Patriots</td><td>8</td><td>5</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Shots Received In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Sterling Slade</td><td>Kelowna Knights</td><td>15</td><td>1275</td><td></td><td></td></tr>
<tr><td>2</td><td>Benjamin Blue</td><td>Prince George Firebirds</td><td>40</td><td>1260</td><td></td><td></td></tr>
<tr><td>3</td><td>Dustin Rose</td><td>Prince George Firebirds</td><td>15</td><td>1220</td><td></td><td></td></tr>
<tr><td>4</td><td>Benjamin Blue</td><td>Prince George Firebirds</td><td>41</td><td>1208</td><td></td><td></td></tr>
<tr><td>5</td><td>Lauris Prikulis</td><td>Kelowna Knights</td><td>12</td><td>1203</td><td></td><td></td></tr>
<tr><td>6</td><td>Jakub Aittokallio</td><td>St. Louis Scarecrows</td><td>12</td><td>1201</td><td></td><td></td></tr>
<tr><td>7</td><td>Igor Ogorodnikov</td><td>Kelowna Knights</td><td>24</td><td>1200</td><td></td><td></td></tr>
<tr><td>8</td><td>Peter Vayne</td><td>Detroit Falcons</td><td>15</td><td>1192</td><td></td><td></td></tr>
<tr><td>9</td><td>Sergei Bobrovsky</td><td>Montreal Impact</td><td>15</td><td>1187</td><td></td><td></td></tr>
<tr><td>10</td><td>Jermaine Tennyson</td><td>St. Louis Scarecrows</td><td>15</td><td>1181</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Matt Lewis-Flood</td><td>Montreal Impact</td><td>27</td><td>34</td><td></td><td></td></tr>
<tr><td>2</td><td>Charlie Serpe</td><td>Detroit Falcons</td><td>8</td><td>33</td><td></td><td></td></tr>
<tr><td>3</td><td>Noah Robinson</td><td>Vancouver Whalers</td><td>9</td><td>33</td><td></td><td></td></tr>
<tr><td>4</td><td>Noah Robinson</td><td>Vancouver Whalers</td><td>11</td><td>32</td><td></td><td></td></tr>
<tr><td>5</td><td>Matt Lewis-Flood</td><td>Montreal Militia</td><td>28</td><td>32</td><td></td><td></td></tr>
<tr><td>6</td><td>Gregory Thompson</td><td>Detroit Falcons</td><td>10</td><td>31</td><td></td><td></td></tr>
<tr><td>7</td><td>Samu Viltonen</td><td>Vancouver Whalers</td><td>10</td><td>30</td><td></td><td></td></tr>
<tr><td>8</td><td>Jaska Tillikainen</td><td>Kelowna Knights</td><td>8</td><td>21</td><td></td><td></td></tr>
<tr><td>9</td><td>Carlos Verde</td><td>Los Angeles Archangels</td><td>8</td><td>21</td><td></td><td></td></tr>
<tr><td>10</td><td>Josef Heiss</td><td>Montreal Impact</td><td>8</td><td>20</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Benjamin Blue</td><td>Prince George Firebirds</td><td>40</td><td>32</td><td></td><td></td></tr>
<tr><td>2</td><td>Bartholomew Čechové</td><td>Vancouver Whalers</td><td>33</td><td>29</td><td></td><td></td></tr>
<tr><td>3</td><td>Ruslan Fedotanko</td><td>Vancouver Whalers</td><td>8</td><td>27</td><td></td><td></td></tr>
<tr><td>4</td><td>Jordin FourFour Jr.</td><td>Halifax Raiders</td><td>34</td><td>26</td><td></td><td></td></tr>
<tr><td>5</td><td>Jason Missiaen</td><td>Washington Patriots</td><td>8</td><td>25</td><td></td><td></td></tr>
<tr><td>6</td><td>Jermaine Tennyson</td><td>St. Louis Scarecrows</td><td>14</td><td>25</td><td></td><td></td></tr>
<tr><td>7</td><td>Mike Verminski</td><td>Kelowna Knights</td><td>10</td><td>24</td><td></td><td></td></tr>
<tr><td>8</td><td>Cyan Winters</td><td>Chicago Hitmen</td><td>10</td><td>24</td><td></td><td></td></tr>
<tr><td>9</td><td>Mike Verminski</td><td>Chicago Hitmen</td><td>11</td><td>24</td><td></td><td></td></tr>
<tr><td>10</td><td>Andrei Vasilevski</td><td>Boston Battalion</td><td>8</td><td>21</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GameRecords">Game Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Goals</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Detroit Falcons</td><td>Los Angeles Archangels</td><td>8</td><td>14</td><td>16</td><td></td></tr>
<tr><td>2</td><td>Vancouver Whalers</td><td>Detroit Falcons</td><td>11</td><td>54</td><td>16</td><td></td></tr>
<tr><td>3</td><td>Outlaws</td><td>Lions</td><td>1</td><td>19</td><td>15</td><td></td></tr>
<tr><td>4</td><td>Detroit Falcons</td><td>Chicago Hitmen</td><td>9</td><td>97</td><td>15</td><td></td></tr>
<tr><td>5</td><td>Detroit Falcons</td><td>Kelowna Knights</td><td>24</td><td>53</td><td>15</td><td></td></tr>
<tr><td>6</td><td>Colorado Mammoths</td><td>Vancouver Whalers</td><td>25</td><td>114</td><td>15</td><td></td></tr>
<tr><td>7</td><td>Vancouver Whalers</td><td>Halifax Raiders</td><td>32</td><td>1</td><td>15</td><td></td></tr>
<tr><td>8</td><td>Vancouver Whalers</td><td>Chicago Hitmen</td><td>9</td><td>35</td><td>14</td><td></td></tr>
<tr><td>9</td><td>Montreal Impact</td><td>Prince George Firebirds</td><td>11</td><td>65</td><td>14</td><td></td></tr>
<tr><td>10</td><td>Regina Force</td><td>Vancouver Whalers</td><td>20</td><td>95</td><td>14</td><td></td></tr>

<tr><td colspan="7"><b>Most Assists</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Vancouver Whalers</td><td>Halifax Raiders</td><td>32</td><td>1</td><td>29</td><td></td></tr>
<tr><td>2</td><td>Detroit Falcons</td><td>Los Angeles Archangels</td><td>8</td><td>14</td><td>27</td><td></td></tr>
<tr><td>3</td><td>Regina Force</td><td>Vancouver Whalers</td><td>20</td><td>95</td><td>27</td><td></td></tr>
<tr><td>4</td><td>Kelowna Knights</td><td>Detroit Falcons</td><td>34</td><td>157</td><td>26</td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>Detroit Falcons</td><td>25</td><td>159</td><td>25</td><td></td></tr>
<tr><td>6</td><td>Detroit Falcons</td><td>Prince George Firebirds</td><td>27</td><td>179</td><td>25</td><td></td></tr>
<tr><td>7</td><td>Detroit Falcons</td><td>Colorado Raptors</td><td>41</td><td>108</td><td>25</td><td></td></tr>
<tr><td>8</td><td>St. Louis Scarecrows</td><td>Regina Force</td><td>22</td><td>25</td><td>24</td><td></td></tr>
<tr><td>9</td><td>Detroit Falcons</td><td>Kelowna Knights</td><td>24</td><td>53</td><td>24</td><td></td></tr>
<tr><td>10</td><td>Montreal Impact</td><td>Kelowna Knights</td><td>24</td><td>60</td><td>24</td><td></td></tr>

<tr><td colspan="7"><b>Most Points</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Vancouver Whalers</td><td>Halifax Raiders</td><td>32</td><td>1</td><td>44</td><td></td></tr>
<tr><td>2</td><td>Detroit Falcons</td><td>Los Angeles Archangels</td><td>8</td><td>14</td><td>43</td><td></td></tr>
<tr><td>3</td><td>Regina Force</td><td>Vancouver Whalers</td><td>20</td><td>95</td><td>41</td><td></td></tr>
<tr><td>4</td><td>Detroit Falcons</td><td>Kelowna Knights</td><td>24</td><td>53</td><td>39</td><td></td></tr>
<tr><td>5</td><td>Kelowna Knights</td><td>Detroit Falcons</td><td>34</td><td>157</td><td>39</td><td></td></tr>
<tr><td>6</td><td>Detroit Falcons</td><td>Colorado Raptors</td><td>41</td><td>108</td><td>39</td><td></td></tr>
<tr><td>7</td><td>Outlaws</td><td>Lions</td><td>1</td><td>19</td><td>38</td><td></td></tr>
<tr><td>8</td><td>Vancouver Whalers</td><td>Detroit Falcons</td><td>11</td><td>54</td><td>38</td><td></td></tr>
<tr><td>9</td><td>Colorado Mammoths</td><td>Vancouver Whalers</td><td>25</td><td>114</td><td>38</td><td></td></tr>
<tr><td>10</td><td>Kelowna Knights</td><td>Detroit Falcons</td><td>25</td><td>159</td><td>38</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Montreal Impact</td><td>Los Angeles Archangels</td><td>8</td><td>150</td><td>94</td><td></td></tr>
<tr><td>2</td><td>Montreal Impact</td><td>Chicago Hitmen</td><td>11</td><td>79</td><td>93</td><td></td></tr>
<tr><td>3</td><td>Prince George Firebirds</td><td>Vancouver Whalers</td><td>12</td><td>109</td><td>93</td><td></td></tr>
<tr><td>4</td><td>St. Louis Scarecrows</td><td>Vancouver Whalers</td><td>15</td><td>33</td><td>91</td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>Prince George Firebirds</td><td>9</td><td>67</td><td>90</td><td></td></tr>
<tr><td>6</td><td>Detroit Falcons</td><td>Prince George Firebirds</td><td>12</td><td>13</td><td>89</td><td></td></tr>
<tr><td>7</td><td>Montreal Impact</td><td>Prince George Firebirds</td><td>11</td><td>71</td><td>88</td><td></td></tr>
<tr><td>8</td><td>Prince George Firebirds</td><td>Vancouver Whalers</td><td>11</td><td>87</td><td>88</td><td></td></tr>
<tr><td>9</td><td>Kelowna Knights</td><td>St. Louis Scarecrows</td><td>15</td><td>19</td><td>88</td><td></td></tr>
<tr><td>10</td><td>St. Louis Scarecrows</td><td>Detroit Falcons</td><td>15</td><td>105</td><td>88</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Outlaws</td><td>Blazers</td><td>1</td><td>8</td><td>168</td><td></td></tr>
<tr><td>2</td><td>Lions</td><td>Blazers</td><td>1</td><td>2</td><td>134</td><td></td></tr>
<tr><td>3</td><td>Blazers</td><td>Outlaws</td><td>1</td><td>6</td><td>122</td><td></td></tr>
<tr><td>4</td><td>Kelowna Knights</td><td>Vancouver Whalers</td><td>9</td><td>118</td><td>108</td><td></td></tr>
<tr><td>5</td><td>Vancouver Whalers</td><td>Kelowna Knights</td><td>9</td><td>56</td><td>106</td><td></td></tr>
<tr><td>6</td><td>Blazers</td><td>Lions</td><td>1</td><td>4</td><td>105</td><td></td></tr>
<tr><td>7</td><td>Detroit Falcons</td><td>Washington Patriots</td><td>8</td><td>30</td><td>104</td><td></td></tr>
<tr><td>8</td><td>Lions</td><td>Stingrays</td><td>1</td><td>7</td><td>96</td><td></td></tr>
<tr><td>9</td><td>Los Angeles Archangels</td><td>Kelowna Knights</td><td>8</td><td>65</td><td>92</td><td></td></tr>
<tr><td>10</td><td>Kelowna Knights</td><td>Montreal Impact</td><td>8</td><td>51</td><td>90</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Boston Battalion</td><td>Washington Patriots</td><td>8</td><td>62</td><td>99</td><td></td></tr>
<tr><td>2</td><td>Washington Patriots</td><td>Boston Battalion</td><td>8</td><td>50</td><td>95</td><td></td></tr>
<tr><td>3</td><td>Vancouver Whalers</td><td>Los Angeles Archangels</td><td>8</td><td>76</td><td>94</td><td></td></tr>
<tr><td>4</td><td>Los Angeles Archangels</td><td>Vancouver Whalers</td><td>8</td><td>132</td><td>89</td><td></td></tr>
<tr><td>5</td><td>Los Angeles Archangels</td><td>Kelowna Knights</td><td>8</td><td>118</td><td>88</td><td></td></tr>
<tr><td>6</td><td>Los Angeles Archangels</td><td>Vancouver Whalers</td><td>8</td><td>160</td><td>88</td><td></td></tr>
<tr><td>7</td><td>Vancouver Whalers</td><td>Boston Battalion</td><td>8</td><td>85</td><td>87</td><td></td></tr>
<tr><td>8</td><td>Boston Battalion</td><td>Montreal Impact</td><td>8</td><td>75</td><td>82</td><td></td></tr>
<tr><td>9</td><td>Montreal Impact</td><td>Boston Battalion</td><td>8</td><td>57</td><td>81</td><td></td></tr>
<tr><td>10</td><td>Boston Battalion</td><td>Washington Patriots</td><td>8</td><td>70</td><td>81</td><td></td></tr>

</table>
<?php include "Footer.php";?>
