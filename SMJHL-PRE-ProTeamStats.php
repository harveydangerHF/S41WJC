﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Team Stats</title>
<script type="text/javascript" src="SMJHL-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Josh Sales - STHS - Version : 3.1.3.0" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style type="text/css">
@media screen and (min-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(2){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(2){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(2){display:none;}}
@media screen and (max-width: 1380px) {
.STHSTeamStat_Table2 thead th:nth-child(1){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(1){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(1){display:none;}}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSTeamStat_Table2 thead th:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table2 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(4){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(5){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(6){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(7){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(8){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(9){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(10){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(12){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(2){display:none;}
}
@media screen and (max-width: 960px) {
.STHSTeamStat_Table2 thead th:nth-child(3){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(3){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(3){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(4){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(4){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(4){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(5){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(5){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(5){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(6){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(6){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(6){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(8){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(8){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(8){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(9){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(9){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(9){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(10){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(10){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(10){display:none;}
.STHSTeamStat_Table2 thead th:nth-child(11){display:none;}
.STHSTeamStat_Table2 tbody td:nth-child(11){display:none;}
.STHSTeamStat_Table2 tfoot td:nth-child(11){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(13){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(14){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(15){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(16){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(17){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(18){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(19){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(20){display:none;}
.STHSTeamStat_Table1 thead th:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tbody td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 tfoot td:nth-last-child(21){display:none;}
.STHSTeamStat_Table1 thead td:nth-last-child(3){display:none;}
}
}</style>
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
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<script type="text/javascript">$(function(){$("table").basictablesorter()});</script>
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tr><td>British Isles</td><td>3</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>7</td><td>8</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>6</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>2</td><td>7</td><td>13</td><td>20</td></tr>
<tr><td>Canada</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>11</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>6</td><td>8</td><td>10</td><td>20</td><td>30</td></tr>
<tr><td>Eastern Europe</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>6</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>8</td><td>14</td><td>22</td></tr>
<tr><td>Scandinavia</td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>14</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>10</td><td>8</td><td>14</td><td>22</td></tr>
<tr><td>Team World</td><td>3</td><td>1</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>12</td><td>6</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>9</td><td>4</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>3</td><td>2</td><td>12</td><td>18</td><td>30</td></tr>
<tr><td>United States of America</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>11</td><td>8</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>7</td><td>5</td><td>11</td><td>17</td><td>28</td></tr>
</table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tr><td>British Isles</td><td>BIS</td><td>1</td><td>4</td><td>2</td><td>0</td><td>83</td><td>27</td><td>24</td><td>30</td><td>2</td><td>79</td><td>17</td><td>25</td><td>54</td><td>10</td><td>0</td><td>0.00%</td><td>7</td><td>2</td><td>71.43%</td><td>0</td><td>57.47%</td><td>58.82%</td><td>52.38%</td><td>65</td><td>79</td><td>40</td><td>21</td><td>56</td><td>20</td><td>0</td><td>0</td></tr>
<tr><td>Canada</td><td>CAN</td><td>3</td><td>4</td><td>3</td><td>0</td><td>93</td><td>27</td><td>30</td><td>33</td><td>6</td><td>85</td><td>8</td><td>27</td><td>44</td><td>12</td><td>3</td><td>25.00%</td><td>6</td><td>1</td><td>83.33%</td><td>0</td><td>48.62%</td><td>51.89%</td><td>40.00%</td><td>73</td><td>70</td><td>43</td><td>25</td><td>46</td><td>21</td><td>0</td><td>0</td></tr>
<tr><td>Eastern Europe</td><td>EEU</td><td>2</td><td>4</td><td>2</td><td>0</td><td>89</td><td>26</td><td>33</td><td>30</td><td>0</td><td>64</td><td>11</td><td>28</td><td>36</td><td>8</td><td>3</td><td>37.50%</td><td>12</td><td>2</td><td>83.33%</td><td>0</td><td>46.46%</td><td>48.60%</td><td>35.90%</td><td>70</td><td>70</td><td>40</td><td>23</td><td>48</td><td>20</td><td>0</td><td>0</td></tr>
<tr><td>Scandinavia</td><td>SCN</td><td>3</td><td>3</td><td>2</td><td>0</td><td>79</td><td>27</td><td>29</td><td>23</td><td>0</td><td>107</td><td>37</td><td>51</td><td>52</td><td>7</td><td>2</td><td>28.57%</td><td>22</td><td>3</td><td>86.36%</td><td>1</td><td>52.21%</td><td>49.53%</td><td>76.60%</td><td>74</td><td>65</td><td>41</td><td>23</td><td>41</td><td>19</td><td>0</td><td>0</td></tr>
<tr><td>Team World</td><td>WOR</td><td>4</td><td>2</td><td>4</td><td>2</td><td>100</td><td>21</td><td>28</td><td>44</td><td>9</td><td>81</td><td>32</td><td>25</td><td>44</td><td>11</td><td>2</td><td>18.18%</td><td>6</td><td>0</td><td>100.00%</td><td>0</td><td>39.13%</td><td>39.42%</td><td>32.65%</td><td>74</td><td>74</td><td>41</td><td>24</td><td>50</td><td>21</td><td>0</td><td>0</td></tr>
<tr><td>United States of America</td><td>USA</td><td>3</td><td>3</td><td>4</td><td>1</td><td>68</td><td>25</td><td>16</td><td>26</td><td>7</td><td>96</td><td>27</td><td>27</td><td>52</td><td>7</td><td>1</td><td>14.29%</td><td>2</td><td>3</td><td>-50.00%</td><td>0</td><td>51.28%</td><td>57.14%</td><td>61.22%</td><td>74</td><td>72</td><td>44</td><td>25</td><td>48</td><td>22</td><td>0</td><td>0</td></tr>
</table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsFor">
Goals For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.11</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Team World</td><td>4.00</td></tr>
<tr><td>2</td><td>United States of America</td><td>3.67</td></tr>
<tr><td>3</td><td>Canada</td><td>3.33</td></tr>
<tr><td>4</td><td>Scandinavia</td><td>2.67</td></tr>
<tr><td>5</td><td>Eastern Europe</td><td>2.67</td></tr>
<tr><td>6</td><td>British Isles</td><td>2.33</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsAgainst">
Goals Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 3.11</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Team World</td><td>2.00</td></tr>
<tr><td>2</td><td>British Isles</td><td>2.67</td></tr>
<tr><td>3</td><td>United States of America</td><td>2.67</td></tr>
<tr><td>4</td><td>Eastern Europe</td><td>3.00</td></tr>
<tr><td>5</td><td>Canada</td><td>3.67</td></tr>
<tr><td>6</td><td>Scandinavia</td><td>4.67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_GoalsForAgainst">
Goals For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Team World</td><td>200.00%</td></tr>
<tr><td>2</td><td>United States of America</td><td>137.50%</td></tr>
<tr><td>3</td><td>Canada</td><td>90.91%</td></tr>
<tr><td>4</td><td>Eastern Europe</td><td>88.89%</td></tr>
<tr><td>5</td><td>British Isles</td><td>87.50%</td></tr>
<tr><td>6</td><td>Scandinavia</td><td>57.14%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PowerPlay">
PowerPlay %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 20.00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Eastern Europe</td><td>37.50%</td></tr>
<tr><td>2</td><td>Scandinavia</td><td>28.57%</td></tr>
<tr><td>3</td><td>Canada</td><td>25.00%</td></tr>
<tr><td>4</td><td>Team World</td><td>18.18%</td></tr>
<tr><td>5</td><td>United States of America</td><td>14.29%</td></tr>
<tr><td>6</td><td>British Isles</td><td>0.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PenaltyKill">
Penalty Kill %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 80.00%</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Team World</td><td>100.00%</td></tr>
<tr><td>2</td><td>Scandinavia</td><td>86.36%</td></tr>
<tr><td>3</td><td>Canada</td><td>83.33%</td></tr>
<tr><td>4</td><td>Eastern Europe</td><td>83.33%</td></tr>
<tr><td>5</td><td>British Isles</td><td>71.43%</td></tr>
<tr><td>6</td><td>United States of America</td><td>-50.00%</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_PPPK">
PP + PK</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Eastern Europe</td><td>120.83%</td></tr>
<tr><td>2</td><td>Team World</td><td>118.18%</td></tr>
<tr><td>3</td><td>Scandinavia</td><td>114.94%</td></tr>
<tr><td>4</td><td>Canada</td><td>108.33%</td></tr>
<tr><td>5</td><td>British Isles</td><td>71.43%</td></tr>
<tr><td>6</td><td>United States of America</td><td>-35.71%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsFor">
Shots For</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28.44</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Team World</td><td>33.33</td></tr>
<tr><td>2</td><td>Canada</td><td>31.00</td></tr>
<tr><td>3</td><td>Eastern Europe</td><td>29.67</td></tr>
<tr><td>4</td><td>British Isles</td><td>27.67</td></tr>
<tr><td>5</td><td>Scandinavia</td><td>26.33</td></tr>
<tr><td>6</td><td>United States of America</td><td>22.67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsAgainst">
Shots Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 28.44</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>Eastern Europe</td><td>21.33</td></tr>
<tr><td>2</td><td>British Isles</td><td>26.33</td></tr>
<tr><td>3</td><td>Team World</td><td>27.00</td></tr>
<tr><td>4</td><td>Canada</td><td>28.33</td></tr>
<tr><td>5</td><td>United States of America</td><td>32.00</td></tr>
<tr><td>6</td><td>Scandinavia</td><td>35.67</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_ShotsForAgainst">
Shots For / Against</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>Eastern Europe</td><td>139.06%</td></tr>
<tr><td>2</td><td>Team World</td><td>123.46%</td></tr>
<tr><td>3</td><td>Canada</td><td>109.41%</td></tr>
<tr><td>4</td><td>British Isles</td><td>105.06%</td></tr>
<tr><td>5</td><td>Scandinavia</td><td>73.83%</td></tr>
<tr><td>6</td><td>United States of America</td><td>70.83%</td></tr>
</tbody></table>
</td></tr></table>
<table><tr><td class="STHSAlignTop"><h1 class="STHSProStats_PIMGP">
Pim / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 10.17</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>British Isles</td><td>8.33</td></tr>
<tr><td>2</td><td>Team World</td><td>8.33</td></tr>
<tr><td>3</td><td>United States of America</td><td>9.00</td></tr>
<tr><td>4</td><td>Canada</td><td>9.00</td></tr>
<tr><td>5</td><td>Eastern Europe</td><td>9.33</td></tr>
<tr><td>6</td><td>Scandinavia</td><td>17.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_HitsGP">
Hits / GP</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tfoot><tr><td colspan="3" class="STHSCenter"><b>League Average 15.67</b></td></tr></tfoot>
<tbody><tr><td>1</td><td>British Isles</td><td>18.00</td></tr>
<tr><td>2</td><td>United States of America</td><td>17.33</td></tr>
<tr><td>3</td><td>Scandinavia</td><td>17.33</td></tr>
<tr><td>4</td><td>Team World</td><td>14.67</td></tr>
<tr><td>5</td><td>Canada</td><td>14.67</td></tr>
<tr><td>6</td><td>Eastern Europe</td><td>12.00</td></tr>
</tbody></table>
</td><td class="STHSAlignTop"><h1 class="STHSProStats_Faceoff">
Faceoff %</h1><table class="basictablesorter"><thead><tr><th class="STHSW45"><b>Pos</b></th><th class="STHSW200"><b>Teams</b></th><th class="STHSW75"><b>Value</b></th></tr></thead>
<tbody><tr><td>1</td><td>British Isles</td><td>57.14%</td></tr>
<tr><td>2</td><td>Scandinavia</td><td>55.43%</td></tr>
<tr><td>3</td><td>United States of America</td><td>55.25%</td></tr>
<tr><td>4</td><td>Canada</td><td>48.30%</td></tr>
<tr><td>5</td><td>Eastern Europe</td><td>45.71%</td></tr>
<tr><td>6</td><td>Team World</td><td>37.96%</td></tr>
</tbody></table>
</td></tr></table>
<?php include "Footer.php";?>
