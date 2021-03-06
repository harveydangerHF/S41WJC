﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#BritishIsles">British Isles</a> | <a href="#Canada">Canada</a> | <a href="#EasternEurope">Eastern Europe</a> | <a href="#Scandinavia">Scandinavia</a> | <a href="#TeamWorld">Team World</a> | <a href="#UnitedStatesofAmerica">United States of America</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_BIS"><a id="BritishIsles">British Isles</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael O'Dowd           Paddy O'Sullivan         Iam Essellemm            40     0   1  4  
 2 Guts O'Bigbers           Quinn Cullen             Oliver Hunter            30     0   1  4  
 3 Chase McGuardian         J.R Richie               Samuel McVay             25     0   1  4  
 4 Julien Treadway          Joey Treadway            Noah Nowes               5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jon Toner                Reginald MacIntyre                                45     0   4  1  
 2 Viktor Valentine         Jake Forke                                        35     0   4  1  
 3 Harvey Danger            Leshaun King                                      20     0   4  1  
 4 Jon Toner                Jake Forke                                        0      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael O'Dowd           Oliver Hunter            Iam Essellemm            50     0   0  5  
 2 Guts O'Bigbers           Paddy O'Sullivan         Quinn Cullen             50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jon Toner                Viktor Valentine                                  60     0   2  3  
 2 Reginald MacIntyre       Harvey Danger                                     40     0   3  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael O'Dowd           Iam Essellemm            50     0   3  2  
 2 Guts O'Bigbers           Paddy O'Sullivan         50     0   3  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Reginald MacIntyre       Viktor Valentine         70     0   5  0  
 2 Jon Toner                Harvey Danger            30     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Paddy O'Sullivan                                  50     0   5  0  
 2 Iam Essellemm                                     50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Reginald MacIntyre       Viktor Valentine         70     0   5  0  
 2 Jon Toner                Harvey Danger            30     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael O'Dowd           Iam Essellemm            50     0   1  4  
 2 Guts O'Bigbers           Paddy O'Sullivan         50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Viktor Valentine         Jon Toner                50     0   3  2  
 2 Jake Forke               Reginald MacIntyre       50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael O'Dowd           Paddy O'Sullivan         Iam Essellemm            Jon Toner                Jake Forke               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael O'Dowd           Paddy O'Sullivan         Iam Essellemm            Reginald MacIntyre       Viktor Valentine         

<b>Goaltenders</b>
Starting : Julian O'Sullivan        
Backup : Willis Vincent           

<b>Extra Forwards</b>
Normal : Paddy O'Sullivan, Iam Essellemm, Guts O'Bigbers - PP : Iam Essellemm, Michael O'Dowd - PK : Paddy O'Sullivan
<b>Extra Defensemen</b>
Normal : Reginald MacIntyre, Jon Toner, Viktor Valentine - PP : Jon Toner - PK : Reginald MacIntyre, Viktor Valentine
<b>Penalty Shots</b>
J.R Richie, Oliver Hunter, Guts O'Bigbers, Quinn Cullen, Iam Essellemm

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_CAN"><a id="Canada">Canada</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Carter Manning           Xavier Paquette          Tony Snow                40     0   1  4  
 2 Ryan Gardiner            Jacob Dorty              Fenton Uriel             30     0   2  3  
 3 Brock Becker             Asti-Tabarnak Fleur-De-LyJackson Conklin          20     1   2  2  
 4 Herb Robert              DabCity Savage           Cody Johansen            10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kade Ryley               Kyle Corbett                                      40     0   4  1  
 2 Grease La Roache         Deku Izuku                                        30     1   3  1  
 3 Jordan Von Matt          Charlie Schieck                                   30     1   4  0  
 4 Kade Ryley               Kyle Corbett                                      0      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Carter Manning           Xavier Paquette          Tony Snow                50     0   0  5  
 2 Ryan Gardiner            Jacob Dorty              Fenton Uriel             50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kade Ryley               Kyle Corbett                                      50     0   1  4  
 2 Grease La Roache         Deku Izuku                                        50     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carter Manning           Xavier Paquette          50     0   5  0  
 2 Brock Becker             Jacob Dorty              50     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kade Ryley               Kyle Corbett             50     0   5  0  
 2 Grease La Roache         Deku Izuku               50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Carter Manning                                    50     0   5  0  
 2 Brock Becker                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kade Ryley               Kyle Corbett             50     0   5  0  
 2 Grease La Roache         Deku Izuku               50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carter Manning           Xavier Paquette          50     0   1  4  
 2 Brock Becker             Jacob Dorty              50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kade Ryley               Kyle Corbett             50     0   4  1  
 2 Grease La Roache         Deku Izuku               50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carter Manning           Xavier Paquette          Tony Snow                Kade Ryley               Kyle Corbett             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carter Manning           Xavier Paquette          Tony Snow                Grease La Roache         Deku Izuku               

<b>Goaltenders</b>
Starting : Walter Hobbs             
Backup : Reece Artois             

<b>Extra Forwards</b>
Normal : Carter Manning, Xavier Paquette, Tony Snow - PP : Carter Manning, Xavier Paquette - PK : Brock Becker
<b>Extra Defensemen</b>
Normal : Kade Ryley, Kyle Corbett, Deku Izuku - PP : Kade Ryley - PK : Grease La Roache, Deku Izuku
<b>Penalty Shots</b>
Carter Manning, Xavier Paquette, Tony Snow, Jacob Dorty, Fenton Uriel

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_EEU"><a id="EasternEurope">Eastern Europe</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Andani              Matěj Eliáš              Ēriks Skalbergs          30     0   3  2  
 2 Dayymo Ralchankinov      Rádovän Hudeč            Kristaps Ball            30     0   1  4  
 3 Grayson St. Raegan       Cash Savage              Piotr Czerkawski         30     0   2  3  
 4 Benis Smol               Tokek Takshak            David Kastrba            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevin Maddox             Mikhail Petrikov                                  40     0   2  3  
 2 Maxim Poulin             Sachimo Zoidberg JR.                              30     0   1  4  
 3 Troy McClure III         Maui                                              20     3   1  1  
 4 Kevin Maddox             Mikhail Petrikov                                  10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dayymo Ralchankinov      Rádovän Hudeč            Matěj Eliáš              50     0   0  5  
 2 Alex Andani              Kristaps Ball            Cash Savage              50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mikhail Petrikov         Maxim Poulin                                      50     0   2  3  
 2 Kevin Maddox             Tokek Takshak                                     50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Grayson St. Raegan       Piotr Czerkawski         50     0   3  2  
 2 Benis Smol               David Kastrba            50     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Troy McClure III         Maui                     50     0   0  5  
 2 Sachimo Zoidberg JR.     Kevin Maddox             50     0   0  5  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Grayson St. Raegan                                60     0   4  1  
 2 Piotr Czerkawski                                  40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Troy McClure III         Maui                     50     0   0  5  
 2 Sachimo Zoidberg JR.     Kevin Maddox             50     0   0  5  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Grayson St. Raegan       Matěj Eliáš              50     0   2  3  
 2 Dayymo Ralchankinov      Piotr Czerkawski         50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Troy McClure III         Tokek Takshak            50     1   2  2  
 2 Sachimo Zoidberg JR.     Maui                     50     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Andani              Rádovän Hudeč            Kristaps Ball            Sachimo Zoidberg JR.     Mikhail Petrikov         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Grayson St. Raegan       Kristaps Ball            Cash Savage              Tokek Takshak            Kevin Maddox             

<b>Goaltenders</b>
Starting : Aleksandr Aleksandrov Jr.
Backup : Petr Vrana               

<b>Extra Forwards</b>
Normal : Matěj Eliáš, Rádovän Hudeč, Alex Andani - PP : Alex Andani, Cash Savage - PK : Tokek Takshak
<b>Extra Defensemen</b>
Normal : Kevin Maddox, Maxim Poulin, Troy McClure III - PP : Mikhail Petrikov - PK : Maui, Sachimo Zoidberg JR.
<b>Penalty Shots</b>
Alex Andani, Cash Savage, Tokek Takshak, Ēriks Skalbergs, Benis Smol

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_SCN"><a id="Scandinavia">Scandinavia</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mattias Enqvist          Rafe Ulrich              Nicholas Falk            35     0   0  5  
 2 Anders Christiansen      Pingy Pingu              Kolja Seppänen           35     0   1  4  
 3 Mikkel Haugen            Tobias Viklund           Tim Murda                20     0   1  4  
 4 Jax Aittokallio          Goku Muerto              Eero Niemi               10     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ensio Kalju              Jussi Hammanen                                    40     0   4  1  
 2 Oliver Dahl              Gilmore Tuttle                                    35     0   4  1  
 3 Veikka Toivanen          Jonatan Bäck                                      25     0   5  0  
 4 Ensio Kalju              Jussi Hammanen                                    0      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mattias Enqvist          Rafe Ulrich              Nicholas Falk            50     0   0  5  
 2 Anders Christiansen      Mikkel Haugen            Kolja Seppänen           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Dahl              Gilmore Tuttle                                    50     0   2  3  
 2 Ensio Kalju              Jonatan Bäck                                      50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mattias Enqvist          Nicholas Falk            50     0   5  0  
 2 Anders Christiansen      Mikkel Haugen            50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ensio Kalju              Jussi Hammanen           55     0   5  0  
 2 Veikka Toivanen          Gilmore Tuttle           45     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mattias Enqvist                                   50     0   5  0  
 2 Anders Christiansen                               50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ensio Kalju              Jussi Hammanen           55     0   5  0  
 2 Veikka Toivanen          Gilmore Tuttle           45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Rafe Ulrich              Mattias Enqvist          50     0   1  4  
 2 Anders Christiansen      Kolja Seppänen           50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ensio Kalju              Jussi Hammanen           50     0   4  1  
 2 Oliver Dahl              Gilmore Tuttle           50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mattias Enqvist          Rafe Ulrich              Nicholas Falk            Ensio Kalju              Gilmore Tuttle           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mattias Enqvist          Rafe Ulrich              Nicholas Falk            Ensio Kalju              Veikka Toivanen          

<b>Goaltenders</b>
Starting : Sebastien Primeau        
Backup : Kata Vilde               

<b>Extra Forwards</b>
Normal : Mikkel Haugen, Rafe Ulrich, Kolja Seppänen - PP : Mikkel Haugen, Rafe Ulrich - PK : Kolja Seppänen
<b>Extra Defensemen</b>
Normal : Ensio Kalju, Gilmore Tuttle, Oliver Dahl - PP : Oliver Dahl - PK : Jussi Hammanen, Ensio Kalju
<b>Penalty Shots</b>
Mikkel Haugen, Anders Christiansen, Nicholas Falk, Pingy Pingu, Rafe Ulrich

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_WOR"><a id="TeamWorld">Team World</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Daniels             Daddy Mack               Michael Fischer          28     0   1  4  
 2 Rahotep Tutankhamun      Shooter McGavin          Manuel Gotze             28     0   1  4  
 3 Daniel Daniil            Flacko Lagerfield        Hugo Blanchard           28     0   2  3  
 4 Carlo Russo              Ignatius Blunt           Johannes Bauer           16     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gottlieb McZehrl         Richard Physt                                     40     0   3  2  
 2 Nico Wallner             Karl Von Wittelsbach                              40     0   4  1  
 3 Maximilian Egger         Eri Arai                                          20     0   4  1  
 4 Gottlieb McZehrl         Richard Physt                                     0      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Daniels             Daddy Mack               Michael Fischer          50     0   0  5  
 2 Flacko Lagerfield        Shooter McGavin          Manuel Gotze             50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gottlieb McZehrl         Richard Physt                                     60     0   2  3  
 2 Nico Wallner             Eri Arai                                          40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Daniels             Manuel Gotze             60     0   5  0  
 2 Daniel Daniil            Michael Fischer          40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gottlieb McZehrl         Richard Physt            60     0   5  0  
 2 Nico Wallner             Karl Von Wittelsbach     40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jack Daniels                                      50     0   5  0  
 2 Manuel Gotze                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gottlieb McZehrl         Richard Physt            60     0   5  0  
 2 Nico Wallner             Karl Von Wittelsbach     40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Daniels             Daddy Mack               50     0   2  3  
 2 Flacko Lagerfield        Michael Fischer          50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gottlieb McZehrl         Richard Physt            60     0   3  2  
 2 Nico Wallner             Karl Von Wittelsbach     40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Daniels             Flacko Lagerfield        Michael Fischer          Gottlieb McZehrl         Richard Physt            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Daniels             Flacko Lagerfield        Michael Fischer          Gottlieb McZehrl         Richard Physt            

<b>Goaltenders</b>
Starting : Freddie LaFlame          
Backup : Benjamin Blue            

<b>Extra Forwards</b>
Normal : Jack Daniels, Flacko Lagerfield, Michael Fischer - PP : Jack Daniels, Flacko Lagerfield - PK : Flacko Lagerfield
<b>Extra Defensemen</b>
Normal : Gottlieb McZehrl, Karl Von Wittelsbach, Richard Physt - PP : Gottlieb McZehrl - PK : Gottlieb McZehrl, Richard Physt
<b>Penalty Shots</b>
Flacko Lagerfield, Shooter McGavin, Daddy Mack, Michael Fischer, Manuel Gotze

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_USA"><a id="UnitedStatesofAmerica">United States of America</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kyle Keenan Jr           Lightning Jones          James Dekens             40     0   1  4  
 2 Doc Digreasi             Muhammad McLovin         Doug Dimmadome           30     0   1  4  
 3 Cameron Carter II        Baron O'Beefdip          Lil' Manius              20     0   1  4  
 4 Kevin Kazarian           Bust                     Max Mauldin              10     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Otis B. Driftwood        Daniel Karlsson                                   40     0   3  2  
 2 Gordie Maple             Geoff Moore                                       35     0   4  1  
 3 Rowdy Smithers           Buck Maverick                                     25     0   3  2  
 4 Otis B. Driftwood        Daniel Karlsson                                   0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kyle Keenan Jr           Lightning Jones          James Dekens             60     0   0  5  
 2 Doc Digreasi             Bust                     Doug Dimmadome           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Daniel Karlsson          Cameron Carter II                                 60     0   0  5  
 2 Otis B. Driftwood        Max Mauldin                                       40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Doc Digreasi             James Dekens             55     0   5  0  
 2 Kyle Keenan Jr           Lightning Jones          45     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Otis B. Driftwood        Daniel Karlsson          55     0   5  0  
 2 Gordie Maple             Geoff Moore              45     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kyle Keenan Jr                                    55     0   5  0  
 2 Doc Digreasi                                      45     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Otis B. Driftwood        Daniel Karlsson          55     0   5  0  
 2 Gordie Maple             Geoff Moore              45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Keenan Jr           Lightning Jones          55     0   1  4  
 2 Doc Digreasi             James Dekens             45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Otis B. Driftwood        Daniel Karlsson          60     0   2  3  
 2 Gordie Maple             Geoff Moore              40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Keenan Jr           Lightning Jones          James Dekens             Daniel Karlsson          Otis B. Driftwood        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Keenan Jr           Lightning Jones          James Dekens             Otis B. Driftwood        Daniel Karlsson          

<b>Goaltenders</b>
Starting : Friedrich Schmidt        
Backup : Geezus Kryyst            

<b>Extra Forwards</b>
Normal : Kyle Keenan Jr, Lightning Jones, James Dekens - PP : James Dekens, Lightning Jones - PK : Kyle Keenan Jr
<b>Extra Defensemen</b>
Normal : Otis B. Driftwood, Daniel Karlsson, Gordie Maple - PP : Daniel Karlsson - PK : Otis B. Driftwood, Daniel Karlsson
<b>Penalty Shots</b>
Lightning Jones, James Dekens, Doc Digreasi, Doug Dimmadome, Bust

<b>Scratches</b>
None
</pre></div>
<?php include "Footer.php";?>
