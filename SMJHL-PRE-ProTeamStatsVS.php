<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Team Stats VS</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#BritishIsles">British Isles</a> | <a href="#Canada">Canada</a> | <a href="#EasternEurope">Eastern Europe</a> | <a href="#Scandinavia">Scandinavia</a> | <a href="#TeamWorld">Team World</a> | <a href="#UnitedStatesofAmerica">United States of America</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamStatsVSPro_BIS"><a id="BritishIsles">British Isles</a></h1>
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
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>3</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>7</td><td>8</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>6</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>2</td><td>7</td><td>13</td><td>20</td></tr>
<tr><td>Vs Conference</td><td></td><td>3</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>7</td><td>8</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>6</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>2</td><td>7</td><td>13</td><td>20</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>3</td><td>1</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>7</td><td>8</td><td>2</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>6</td><td>6</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>2</td><td>7</td><td>13</td><td>20</td></tr>
</tfoot><tbody>
<tr><td>Canada</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>8</td><td>12</td></tr>
<tr><td>Eastern Europe</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>2</td><td>1</td><td>2</td><td>3</td></tr>
<tr><td>Scandinavia</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Team World</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>2</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>3</td><td>5</td></tr>
<tr><td>United States of America</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>1</td><td>4</td><td>2</td><td>0</td><td>83</td><td>27</td><td>24</td><td>30</td><td>2</td><td>79</td><td>17</td><td>25</td><td>54</td><td>10</td><td>0</td><td>0.00%</td><td>7</td><td>2</td><td>71.43%</td><td>0</td><td>57.47%</td><td>58.82%</td><td>52.38%</td><td>65</td><td>79</td><td>40</td><td>21</td><td>56</td><td>20</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>1</td><td>4</td><td>2</td><td>0</td><td>83</td><td>27</td><td>24</td><td>30</td><td>2</td><td>79</td><td>17</td><td>25</td><td>54</td><td>10</td><td>0</td><td>0.00%</td><td>7</td><td>2</td><td>71.43%</td><td>0</td><td>57.47%</td><td>58.82%</td><td>52.38%</td><td>65</td><td>79</td><td>40</td><td>21</td><td>56</td><td>20</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>1</td><td>4</td><td>2</td><td>0</td><td>83</td><td>27</td><td>24</td><td>30</td><td>2</td><td>79</td><td>17</td><td>25</td><td>54</td><td>10</td><td>0</td><td>0.00%</td><td>7</td><td>2</td><td>71.43%</td><td>0</td><td>57.47%</td><td>58.82%</td><td>52.38%</td><td>65</td><td>79</td><td>40</td><td>21</td><td>56</td><td>20</td><td>0</td><td>0</td></tr>
</tfoot><tbody>
<tr><td>Canada</td><td>CAN</td><td>0</td><td>3</td><td>1</td><td>0</td><td>31</td><td>17</td><td>8</td><td>6</td><td>0</td><td>26</td><td>7</td><td>11</td><td>18</td><td>4</td><td>0</td><td>0.00%</td><td>3</td><td>0</td><td>100.00%</td><td>0</td><td>59.38%</td><td>54.29%</td><td>31.25%</td><td>20</td><td>27</td><td>13</td><td>7</td><td>18</td><td>7</td><td>0</td><td>0</td></tr>
<tr><td>Eastern Europe</td><td>EEU</td><td>1</td><td>0</td><td>0</td><td>0</td><td>13</td><td>5</td><td>2</td><td>6</td><td>0</td><td>22</td><td>4</td><td>12</td><td>20</td><td>3</td><td>0</td><td>0.00%</td><td>4</td><td>2</td><td>50.00%</td><td>0</td><td>48.15%</td><td>51.72%</td><td>60.00%</td><td>24</td><td>23</td><td>13</td><td>7</td><td>15</td><td>6</td><td>0</td><td>0</td></tr>
<tr><td>Scandinavia</td><td>SCN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Team World</td><td>WOR</td><td>0</td><td>1</td><td>1</td><td>0</td><td>39</td><td>5</td><td>14</td><td>18</td><td>2</td><td>31</td><td>6</td><td>2</td><td>16</td><td>3</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>64.29%</td><td>68.42%</td><td>68.75%</td><td>21</td><td>29</td><td>14</td><td>7</td><td>22</td><td>7</td><td>0</td><td>0</td></tr>
<tr><td>United States of America</td><td>USA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</tbody></table></div>
<h1 class="TeamStatsVSPro_CAN"><a id="Canada">Canada</a></h1>
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
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>11</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>6</td><td>8</td><td>10</td><td>20</td><td>30</td></tr>
<tr><td>Vs Conference</td><td></td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>11</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>6</td><td>8</td><td>10</td><td>20</td><td>30</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>10</td><td>11</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>2</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>6</td><td>8</td><td>10</td><td>20</td><td>30</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>3</td><td>6</td><td>9</td></tr>
<tr><td>Eastern Europe</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Scandinavia</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>8</td><td>12</td></tr>
<tr><td>Team World</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>United States of America</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>3</td><td>4</td><td>3</td><td>6</td><td>9</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>3</td><td>4</td><td>3</td><td>0</td><td>93</td><td>27</td><td>30</td><td>33</td><td>6</td><td>85</td><td>8</td><td>27</td><td>44</td><td>12</td><td>3</td><td>25.00%</td><td>6</td><td>1</td><td>83.33%</td><td>0</td><td>48.62%</td><td>51.89%</td><td>40.00%</td><td>73</td><td>70</td><td>43</td><td>25</td><td>46</td><td>21</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>3</td><td>4</td><td>3</td><td>0</td><td>93</td><td>27</td><td>30</td><td>33</td><td>6</td><td>85</td><td>8</td><td>27</td><td>44</td><td>12</td><td>3</td><td>25.00%</td><td>6</td><td>1</td><td>83.33%</td><td>0</td><td>48.62%</td><td>51.89%</td><td>40.00%</td><td>73</td><td>70</td><td>43</td><td>25</td><td>46</td><td>21</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>3</td><td>4</td><td>3</td><td>0</td><td>93</td><td>27</td><td>30</td><td>33</td><td>6</td><td>85</td><td>8</td><td>27</td><td>44</td><td>12</td><td>3</td><td>25.00%</td><td>6</td><td>1</td><td>83.33%</td><td>0</td><td>48.62%</td><td>51.89%</td><td>40.00%</td><td>73</td><td>70</td><td>43</td><td>25</td><td>46</td><td>21</td><td>0</td><td>0</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>BIS</td><td>0</td><td>2</td><td>1</td><td>0</td><td>26</td><td>2</td><td>14</td><td>10</td><td>0</td><td>31</td><td>5</td><td>13</td><td>10</td><td>3</td><td>0</td><td>0.00%</td><td>4</td><td>0</td><td>100.00%</td><td>0</td><td>45.71%</td><td>40.63%</td><td>68.75%</td><td>27</td><td>20</td><td>13</td><td>8</td><td>13</td><td>6</td><td>0</td><td>0</td></tr>
<tr><td>Eastern Europe</td><td>EEU</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Scandinavia</td><td>SCN</td><td>2</td><td>0</td><td>2</td><td>0</td><td>30</td><td>12</td><td>13</td><td>5</td><td>0</td><td>30</td><td>1</td><td>4</td><td>22</td><td>9</td><td>2</td><td>22.22%</td><td>1</td><td>0</td><td>100.00%</td><td>0</td><td>55.00%</td><td>60.61%</td><td>12.50%</td><td>21</td><td>25</td><td>14</td><td>8</td><td>17</td><td>7</td><td>0</td><td>0</td></tr>
<tr><td>Team World</td><td>WOR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>United States of America</td><td>USA</td><td>1</td><td>2</td><td>0</td><td>0</td><td>37</td><td>13</td><td>3</td><td>18</td><td>6</td><td>24</td><td>2</td><td>10</td><td>12</td><td>0</td><td>1</td><td>0.00%</td><td>1</td><td>1</td><td>0.00%</td><td>0</td><td>44.12%</td><td>53.66%</td><td>38.89%</td><td>25</td><td>25</td><td>16</td><td>9</td><td>16</td><td>7</td><td>0</td><td>0</td></tr>
</tbody></table></div>
<h1 class="TeamStatsVSPro_EEU"><a id="EasternEurope">Eastern Europe</a></h1>
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
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>6</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>8</td><td>14</td><td>22</td></tr>
<tr><td>Vs Conference</td><td></td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>6</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>8</td><td>14</td><td>22</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>9</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>6</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>8</td><td>14</td><td>22</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>1</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>3</td><td>5</td></tr>
<tr><td>Canada</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Scandinavia</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>3</td><td>4</td><td>7</td><td>11</td></tr>
<tr><td>Team World</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>United States of America</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>5</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>4</td><td>6</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>2</td><td>4</td><td>2</td><td>0</td><td>89</td><td>26</td><td>33</td><td>30</td><td>0</td><td>64</td><td>11</td><td>28</td><td>36</td><td>8</td><td>3</td><td>37.50%</td><td>12</td><td>2</td><td>83.33%</td><td>0</td><td>46.46%</td><td>48.60%</td><td>35.90%</td><td>70</td><td>70</td><td>40</td><td>23</td><td>48</td><td>20</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>2</td><td>4</td><td>2</td><td>0</td><td>89</td><td>26</td><td>33</td><td>30</td><td>0</td><td>64</td><td>11</td><td>28</td><td>36</td><td>8</td><td>3</td><td>37.50%</td><td>12</td><td>2</td><td>83.33%</td><td>0</td><td>46.46%</td><td>48.60%</td><td>35.90%</td><td>70</td><td>70</td><td>40</td><td>23</td><td>48</td><td>20</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>2</td><td>4</td><td>2</td><td>0</td><td>89</td><td>26</td><td>33</td><td>30</td><td>0</td><td>64</td><td>11</td><td>28</td><td>36</td><td>8</td><td>3</td><td>37.50%</td><td>12</td><td>2</td><td>83.33%</td><td>0</td><td>46.46%</td><td>48.60%</td><td>35.90%</td><td>70</td><td>70</td><td>40</td><td>23</td><td>48</td><td>20</td><td>0</td><td>0</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>BIS</td><td>0</td><td>2</td><td>0</td><td>0</td><td>22</td><td>7</td><td>11</td><td>4</td><td>0</td><td>13</td><td>1</td><td>10</td><td>7</td><td>4</td><td>2</td><td>50.00%</td><td>3</td><td>0</td><td>100.00%</td><td>0</td><td>48.28%</td><td>51.85%</td><td>40.00%</td><td>23</td><td>24</td><td>13</td><td>8</td><td>17</td><td>7</td><td>0</td><td>0</td></tr>
<tr><td>Canada</td><td>CAN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Scandinavia</td><td>SCN</td><td>2</td><td>1</td><td>1</td><td>0</td><td>43</td><td>16</td><td>12</td><td>15</td><td>0</td><td>25</td><td>3</td><td>6</td><td>16</td><td>3</td><td>0</td><td>0.00%</td><td>3</td><td>2</td><td>33.33%</td><td>0</td><td>47.22%</td><td>44.68%</td><td>21.43%</td><td>21</td><td>25</td><td>13</td><td>7</td><td>18</td><td>7</td><td>0</td><td>0</td></tr>
<tr><td>Team World</td><td>WOR</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>United States of America</td><td>USA</td><td>0</td><td>1</td><td>1</td><td>0</td><td>24</td><td>3</td><td>10</td><td>11</td><td>0</td><td>26</td><td>7</td><td>12</td><td>13</td><td>1</td><td>1</td><td>100.00%</td><td>6</td><td>0</td><td>100.00%</td><td>0</td><td>44.12%</td><td>51.52%</td><td>46.67%</td><td>25</td><td>21</td><td>14</td><td>7</td><td>13</td><td>7</td><td>0</td><td>0</td></tr>
</tbody></table></div>
<h1 class="TeamStatsVSPro_SCN"><a id="Scandinavia">Scandinavia</a></h1>
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
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>14</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>10</td><td>8</td><td>14</td><td>22</td></tr>
<tr><td>Vs Conference</td><td></td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>14</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>10</td><td>8</td><td>14</td><td>22</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>3</td><td>0</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>8</td><td>14</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>2</td><td>0</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>10</td><td>8</td><td>14</td><td>22</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Canada</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>3</td><td>4</td><td>7</td></tr>
<tr><td>Eastern Europe</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>6</td><td>9</td></tr>
<tr><td>Team World</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>6</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>2</td><td>6</td><td>2</td><td>4</td><td>6</td></tr>
<tr><td>United States of America</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>3</td><td>3</td><td>2</td><td>0</td><td>79</td><td>27</td><td>29</td><td>23</td><td>0</td><td>107</td><td>37</td><td>51</td><td>52</td><td>7</td><td>2</td><td>28.57%</td><td>22</td><td>3</td><td>86.36%</td><td>1</td><td>52.21%</td><td>49.53%</td><td>76.60%</td><td>74</td><td>65</td><td>41</td><td>23</td><td>41</td><td>19</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>3</td><td>3</td><td>2</td><td>0</td><td>79</td><td>27</td><td>29</td><td>23</td><td>0</td><td>107</td><td>37</td><td>51</td><td>52</td><td>7</td><td>2</td><td>28.57%</td><td>22</td><td>3</td><td>86.36%</td><td>1</td><td>52.21%</td><td>49.53%</td><td>76.60%</td><td>74</td><td>65</td><td>41</td><td>23</td><td>41</td><td>19</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>3</td><td>3</td><td>2</td><td>0</td><td>79</td><td>27</td><td>29</td><td>23</td><td>0</td><td>107</td><td>37</td><td>51</td><td>52</td><td>7</td><td>2</td><td>28.57%</td><td>22</td><td>3</td><td>86.36%</td><td>1</td><td>52.21%</td><td>49.53%</td><td>76.60%</td><td>74</td><td>65</td><td>41</td><td>23</td><td>41</td><td>19</td><td>0</td><td>0</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>BIS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Canada</td><td>CAN</td><td>1</td><td>1</td><td>1</td><td>0</td><td>30</td><td>12</td><td>10</td><td>8</td><td>0</td><td>30</td><td>13</td><td>20</td><td>18</td><td>1</td><td>0</td><td>0.00%</td><td>9</td><td>2</td><td>77.78%</td><td>0</td><td>39.39%</td><td>45.00%</td><td>87.50%</td><td>25</td><td>21</td><td>14</td><td>8</td><td>13</td><td>6</td><td>0</td><td>0</td></tr>
<tr><td>Eastern Europe</td><td>EEU</td><td>2</td><td>0</td><td>1</td><td>0</td><td>25</td><td>10</td><td>4</td><td>11</td><td>0</td><td>43</td><td>13</td><td>6</td><td>22</td><td>3</td><td>2</td><td>66.67%</td><td>3</td><td>0</td><td>100.00%</td><td>1</td><td>55.32%</td><td>52.78%</td><td>78.57%</td><td>25</td><td>21</td><td>13</td><td>7</td><td>14</td><td>6</td><td>0</td><td>0</td></tr>
<tr><td>Team World</td><td>WOR</td><td>0</td><td>2</td><td>0</td><td>0</td><td>24</td><td>5</td><td>15</td><td>4</td><td>0</td><td>34</td><td>11</td><td>25</td><td>12</td><td>3</td><td>0</td><td>0.00%</td><td>10</td><td>1</td><td>90.00%</td><td>0</td><td>60.61%</td><td>51.61%</td><td>64.71%</td><td>24</td><td>23</td><td>14</td><td>8</td><td>14</td><td>7</td><td>0</td><td>0</td></tr>
<tr><td>United States of America</td><td>USA</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</tbody></table></div>
<h1 class="TeamStatsVSPro_WOR"><a id="TeamWorld">Team World</a></h1>
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
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>3</td><td>1</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>12</td><td>6</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>9</td><td>4</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>3</td><td>2</td><td>12</td><td>18</td><td>30</td></tr>
<tr><td>Vs Conference</td><td></td><td>3</td><td>1</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>12</td><td>6</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>9</td><td>4</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>3</td><td>2</td><td>12</td><td>18</td><td>30</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>3</td><td>1</td><td>0</td><td>1</td><td>0</td><td>1</td><td>0</td><td>12</td><td>6</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>9</td><td>4</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>3</td><td>2</td><td>12</td><td>18</td><td>30</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>3</td><td>2</td><td>3</td><td>4</td><td>7</td></tr>
<tr><td>Canada</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Eastern Europe</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Scandinavia</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>2</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>6</td><td>10</td><td>16</td></tr>
<tr><td>United States of America</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>3</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>3</td><td>4</td><td>7</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>4</td><td>2</td><td>4</td><td>2</td><td>100</td><td>21</td><td>28</td><td>44</td><td>9</td><td>81</td><td>32</td><td>25</td><td>44</td><td>11</td><td>2</td><td>18.18%</td><td>6</td><td>0</td><td>100.00%</td><td>0</td><td>39.13%</td><td>39.42%</td><td>32.65%</td><td>74</td><td>74</td><td>41</td><td>24</td><td>50</td><td>21</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>4</td><td>2</td><td>4</td><td>2</td><td>100</td><td>21</td><td>28</td><td>44</td><td>9</td><td>81</td><td>32</td><td>25</td><td>44</td><td>11</td><td>2</td><td>18.18%</td><td>6</td><td>0</td><td>100.00%</td><td>0</td><td>39.13%</td><td>39.42%</td><td>32.65%</td><td>74</td><td>74</td><td>41</td><td>24</td><td>50</td><td>21</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>4</td><td>2</td><td>4</td><td>2</td><td>100</td><td>21</td><td>28</td><td>44</td><td>9</td><td>81</td><td>32</td><td>25</td><td>44</td><td>11</td><td>2</td><td>18.18%</td><td>6</td><td>0</td><td>100.00%</td><td>0</td><td>39.13%</td><td>39.42%</td><td>32.65%</td><td>74</td><td>74</td><td>41</td><td>24</td><td>50</td><td>21</td><td>0</td><td>0</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>BIS</td><td>1</td><td>0</td><td>1</td><td>1</td><td>31</td><td>5</td><td>14</td><td>8</td><td>4</td><td>39</td><td>12</td><td>8</td><td>12</td><td>0</td><td>0</td><td>0.00%</td><td>3</td><td>0</td><td>100.00%</td><td>0</td><td>31.58%</td><td>35.71%</td><td>31.25%</td><td>29</td><td>21</td><td>14</td><td>7</td><td>15</td><td>6</td><td>0</td><td>0</td></tr>
<tr><td>Canada</td><td>CAN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Eastern Europe</td><td>EEU</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Scandinavia</td><td>SCN</td><td>2</td><td>2</td><td>2</td><td>0</td><td>34</td><td>8</td><td>4</td><td>22</td><td>0</td><td>24</td><td>10</td><td>11</td><td>17</td><td>10</td><td>1</td><td>10.00%</td><td>3</td><td>0</td><td>100.00%</td><td>0</td><td>48.39%</td><td>39.39%</td><td>35.29%</td><td>23</td><td>24</td><td>14</td><td>8</td><td>16</td><td>7</td><td>0</td><td>0</td></tr>
<tr><td>United States of America</td><td>USA</td><td>1</td><td>0</td><td>1</td><td>1</td><td>35</td><td>8</td><td>10</td><td>14</td><td>5</td><td>18</td><td>10</td><td>6</td><td>15</td><td>1</td><td>1</td><td>100.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>39.13%</td><td>41.86%</td><td>31.25%</td><td>22</td><td>28</td><td>14</td><td>8</td><td>20</td><td>7</td><td>0</td><td>0</td></tr>
</tbody></table></div>
<h1 class="TeamStatsVSPro_USA"><a id="UnitedStatesofAmerica">United States of America</a></h1>
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
<table class="basictablesorter STHSTeamStat_Table1"><thead><tr>
<td colspan="2"></td><td colspan="9">Overall</td><td colspan="9">Home</td><td colspan="9">Visitor</td><td colspan="3"></td></tr><tr>
<th class="STHSW200">Team</th><th class="STHSW25">TGP</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTW</th><th class="STHSW25">OTL</th><th class="STHSW25">SOW</th><th class="STHSW25">SOL</th><th class="STHSW25">GF</th><th class="STHSW25">GA</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td></td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>11</td><td>8</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>7</td><td>5</td><td>11</td><td>17</td><td>28</td></tr>
<tr><td>Vs Conference</td><td></td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>11</td><td>8</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>7</td><td>5</td><td>11</td><td>17</td><td>28</td></tr>
<tr><td>Since Last GM Reset</td><td></td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>11</td><td>8</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>3</td><td>2</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>7</td><td>5</td><td>11</td><td>17</td><td>28</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Canada</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>3</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>4</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>4</td><td>5</td><td>9</td></tr>
<tr><td>Eastern Europe</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>5</td><td>2</td><td>5</td><td>10</td><td>15</td></tr>
<tr><td>Scandinavia</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Team World</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>2</td><td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1</td><td>2</td><td>3</td><td>2</td><td>2</td><td>4</td></tr>
</tbody></table>
<table class="basictablesorter STHSTeamStat_Table2"><thead><tr>
<th class="STHSW200">Team</th><th class="STHSW25">Team</th><th class="STHSW25">GP1</th><th class="STHSW25">GP2</th><th class="STHSW25">GP3</th><th class="STHSW25">GP4</th><th class="STHSW25">SHF</th><th class="STHSW25">SP1</th><th class="STHSW25">SP2</th><th class="STHSW25">SP3</th><th class="STHSW25">SP4</th><th class="STHSW25">SHA</th><th class="STHSW25">SHB</th><th class="STHSW25">Pim</th><th class="STHSW25">Hit</th><th class="STHSW25">PPA</th><th class="STHSW25">PPG</th><th class="STHSW35">PP%</th><th class="STHSW25">PKA</th><th class="STHSW25">PK GA</th><th class="STHSW35">PK%</th><th class="STHSW25">PK GF</th><th class="STHSW35">FO% DZ</th><th class="STHSW35">FO% OZ</th><th class="STHSW35">FO% NT</th><th class="STHSW25">PZ DF</th><th class="STHSW25">PZ OF</th><th class="STHSW25">PZ NT</th><th class="STHSW25">PC DF</th><th class="STHSW25">PC OF</th><th class="STHSW25">PC NT</th><th class="STHSW25">SO</th><th class="STHSW25">EG</th></tr></thead>
<tfoot>
<tr><td>Vs Division</td><td>Div</td><td>3</td><td>3</td><td>4</td><td>1</td><td>68</td><td>25</td><td>16</td><td>26</td><td>7</td><td>96</td><td>27</td><td>27</td><td>52</td><td>7</td><td>1</td><td>14.29%</td><td>2</td><td>3</td><td>-50.00%</td><td>0</td><td>51.28%</td><td>57.14%</td><td>61.22%</td><td>74</td><td>72</td><td>44</td><td>25</td><td>48</td><td>22</td><td>0</td><td>0</td></tr>
<tr><td>Vs Conference</td><td>Conf</td><td>3</td><td>3</td><td>4</td><td>1</td><td>68</td><td>25</td><td>16</td><td>26</td><td>7</td><td>96</td><td>27</td><td>27</td><td>52</td><td>7</td><td>1</td><td>14.29%</td><td>2</td><td>3</td><td>-50.00%</td><td>0</td><td>51.28%</td><td>57.14%</td><td>61.22%</td><td>74</td><td>72</td><td>44</td><td>25</td><td>48</td><td>22</td><td>0</td><td>0</td></tr>
<tr><td>Since Last GM Reset</td><td>GMR</td><td>3</td><td>3</td><td>4</td><td>1</td><td>68</td><td>25</td><td>16</td><td>26</td><td>7</td><td>96</td><td>27</td><td>27</td><td>52</td><td>7</td><td>1</td><td>14.29%</td><td>2</td><td>3</td><td>-50.00%</td><td>0</td><td>51.28%</td><td>57.14%</td><td>61.22%</td><td>74</td><td>72</td><td>44</td><td>25</td><td>48</td><td>22</td><td>0</td><td>0</td></tr>
</tfoot><tbody>
<tr><td>British Isles</td><td>BIS</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Canada</td><td>CAN</td><td>2</td><td>0</td><td>1</td><td>1</td><td>24</td><td>10</td><td>3</td><td>11</td><td>3</td><td>37</td><td>12</td><td>8</td><td>19</td><td>1</td><td>1</td><td>100.00%</td><td>0</td><td>1</td><td>0.00%</td><td>0</td><td>46.34%</td><td>55.88%</td><td>61.11%</td><td>25</td><td>25</td><td>16</td><td>8</td><td>16</td><td>8</td><td>0</td><td>0</td></tr>
<tr><td>Eastern Europe</td><td>EEU</td><td>0</td><td>2</td><td>3</td><td>0</td><td>26</td><td>11</td><td>8</td><td>7</td><td>0</td><td>24</td><td>6</td><td>2</td><td>16</td><td>6</td><td>0</td><td>0.00%</td><td>1</td><td>1</td><td>0.00%</td><td>0</td><td>48.48%</td><td>55.88%</td><td>53.33%</td><td>21</td><td>25</td><td>14</td><td>8</td><td>18</td><td>7</td><td>0</td><td>0</td></tr>
<tr><td>Scandinavia</td><td>SCN</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0</td><td>0.00%</td><td>0</td><td>0.00%</td><td>0.00%</td><td>0.00%</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Team World</td><td>WOR</td><td>1</td><td>1</td><td>0</td><td>0</td><td>18</td><td>4</td><td>5</td><td>8</td><td>4</td><td>35</td><td>9</td><td>17</td><td>17</td><td>0</td><td>0</td><td>0.00%</td><td>1</td><td>1</td><td>0.00%</td><td>0</td><td>58.14%</td><td>60.87%</td><td>68.75%</td><td>28</td><td>22</td><td>14</td><td>9</td><td>14</td><td>7</td><td>0</td><td>0</td></tr>
</tbody></table></div>
<?php include "Footer.php";?>
