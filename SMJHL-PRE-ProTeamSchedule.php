<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Team Schedule</title>
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
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<script type="text/javascript">$(function(){$("table").basictablesorter()});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#BritishIsles">British Isles</a> | <a href="#Canada">Canada</a> | <a href="#EasternEurope">Eastern Europe</a> | <a href="#Scandinavia">Scandinavia</a> | <a href="#TeamWorld">Team World</a> | <a href="#UnitedStatesofAmerica">United States of America</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamSchedulePro_BIS"><a id="BritishIsles">British Isles</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="SMJHL-PRE-ProTeamRoster.php#TeamWorld">Team World</a></td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#BritishIsles">British Isles</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="SMJHL-PRE-1.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>6</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Canada">Canada</a></td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#BritishIsles">British Isles</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-6.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>8</td><td><a href="SMJHL-PRE-ProTeamRoster.php#BritishIsles">British Isles</a></td><td>1</td><td><a href="SMJHL-PRE-ProTeamRoster.php#EasternEurope">Eastern Europe</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-8.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CAN"><a id="Canada">Canada</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Canada">Canada</a></td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#UnitedStatesofAmerica">United States of America</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="SMJHL-PRE-2.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>6</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Canada">Canada</a></td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#BritishIsles">British Isles</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-6.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>9</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Scandinavia">Scandinavia</a></td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Canada">Canada</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-9.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_EEU"><a id="EasternEurope">Eastern Europe</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#EasternEurope">Eastern Europe</a></td><td>4</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Scandinavia">Scandinavia</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-3.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>5</td><td><a href="SMJHL-PRE-ProTeamRoster.php#UnitedStatesofAmerica">United States of America</a></td><td>5</td><td><a href="SMJHL-PRE-ProTeamRoster.php#EasternEurope">Eastern Europe</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-5.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>8</td><td><a href="SMJHL-PRE-ProTeamRoster.php#BritishIsles">British Isles</a></td><td>1</td><td><a href="SMJHL-PRE-ProTeamRoster.php#EasternEurope">Eastern Europe</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-8.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_SCN"><a id="Scandinavia">Scandinavia</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#EasternEurope">Eastern Europe</a></td><td>4</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Scandinavia">Scandinavia</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-3.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>4</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Scandinavia">Scandinavia</a></td><td>2</td><td><a href="SMJHL-PRE-ProTeamRoster.php#TeamWorld">Team World</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-4.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>9</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Scandinavia">Scandinavia</a></td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Canada">Canada</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-9.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_WOR"><a id="TeamWorld">Team World</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="SMJHL-PRE-ProTeamRoster.php#TeamWorld">Team World</a></td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#BritishIsles">British Isles</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="SMJHL-PRE-1.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>4</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Scandinavia">Scandinavia</a></td><td>2</td><td><a href="SMJHL-PRE-ProTeamRoster.php#TeamWorld">Team World</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-4.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>7</td><td><a href="SMJHL-PRE-ProTeamRoster.php#UnitedStatesofAmerica">United States of America</a></td><td>2</td><td><a href="SMJHL-PRE-ProTeamRoster.php#TeamWorld">Team World</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="SMJHL-PRE-7.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_USA"><a id="UnitedStatesofAmerica">United States of America</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="SMJHL-PRE-ProTeamRoster.php#Canada">Canada</a></td><td>3</td><td><a href="SMJHL-PRE-ProTeamRoster.php#UnitedStatesofAmerica">United States of America</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="SMJHL-PRE-2.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>5</td><td><a href="SMJHL-PRE-ProTeamRoster.php#UnitedStatesofAmerica">United States of America</a></td><td>5</td><td><a href="SMJHL-PRE-ProTeamRoster.php#EasternEurope">Eastern Europe</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="SMJHL-PRE-5.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>7</td><td><a href="SMJHL-PRE-ProTeamRoster.php#UnitedStatesofAmerica">United States of America</a></td><td>2</td><td><a href="SMJHL-PRE-ProTeamRoster.php#TeamWorld">Team World</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="SMJHL-PRE-7.html">Game Direct Link</a></td></tr>
</table></div>
<?php include "Footer.php";?>
