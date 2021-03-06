﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Team Roster</title>
<script type="text/javascript" src="SMJHL-PRE.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Josh Sales - STHS - Version : 3.1.3.0" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style type="text/css">
@media screen and (max-width: 992px) {
.STHSRoster_GoaliesTable tbody td:nth-child(2){display:none;}
.STHSRoster_GoaliesTable thead th:nth-child(2){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(1){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(1){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(3){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(3){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(4){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(4){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(5){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(5){display:none;}
.STHSRoster_PlayersTable tbody td:nth-child(6){display:none;}
.STHSRoster_PlayersTable thead th:nth-child(6){display:none;}
.STHSRoster_Coach{display:none;}
.STHSRoster_TeamOverall{display:none;}
}
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
table.basictablesorter tbody td:nth-last-child(1){display:none;}
table.basictablesorter thead th:nth-last-child(1){display:none;}
table.basictablesorter tbody td:nth-last-child(2){display:none;}
table.basictablesorter thead th:nth-last-child(2){display:none;}
table.basictablesorter tbody td:nth-last-child(3){display:none;}
table.basictablesorter thead th:nth-last-child(3){display:none;}
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
<h1 class="TeamRosterPro_BIS"><a id="BritishIsles">British Isles</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Plasman</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td>Michael O'Dowd</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>65</td><td>63</td><td>50</td><td>70</td><td>70</td><td>75</td><td>62</td><td>77</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>2</td><td>Leshaun King(R)</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>67</td><td>40</td><td>40</td><td>50</td><td>40</td><td>40</td><td>60</td><td>75</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>3</td><td>Julien Treadway</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>66</td><td>50</td><td>60</td><td>50</td><td>55</td><td>62</td><td>71</td><td>50</td><td>60</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>4</td><td>Guts O'Bigbers</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>72</td><td>40</td><td>60</td><td>50</td><td>61</td><td>66</td><td>80</td><td>66</td><td>70</td><td>43</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>5</td><td>Chase McGuardian</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>53</td><td>25</td><td>70</td><td>66</td><td>61</td><td>60</td><td>50</td><td>58</td><td>63</td><td>60</td><td>72</td><td>58</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>6</td><td>Quinn Cullen</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>60</td><td>65</td><td>50</td><td>70</td><td>40</td><td>76</td><td>67</td><td>74</td><td>41</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>7</td><td>Paddy O'Sullivan</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>74</td><td>61</td><td>64</td><td>50</td><td>72</td><td>60</td><td>70</td><td>80</td><td>74</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>8</td><td>Oliver Hunter</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>30</td><td>62</td><td>70</td><td>60</td><td>65</td><td>50</td><td>72</td><td>42</td><td>66</td><td>75</td><td>41</td><td>47</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>9</td><td>Noah Nowes</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>40</td><td>48</td><td>50</td><td>60</td><td>40</td><td>75</td><td>62</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>10</td><td>Joey Treadway</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>60</td><td>45</td><td>62</td><td>60</td><td>60</td><td>60</td><td>50</td><td>40</td><td>50</td><td>45</td><td>60</td><td>40</td><td>60</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>11</td><td>Samuel McVay</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>69</td><td>55</td><td>62</td><td>50</td><td>69</td><td>40</td><td>70</td><td>60</td><td>64</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>12</td><td>J.R Richie</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>50</td><td>60</td><td>50</td><td>70</td><td>40</td><td>60</td><td>75</td><td>60</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>13</td><td>Iam Essellemm</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>75</td><td>44</td><td>70</td><td>50</td><td>75</td><td>40</td><td>70</td><td>83</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>14</td><td>Viktor Valentine</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>70</td><td>70</td><td>58</td><td>50</td><td>78</td><td>40</td><td>80</td><td>40</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>15</td><td>Reginald MacIntyre</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>54</td><td>25</td><td>62</td><td>72</td><td>72</td><td>72</td><td>50</td><td>77</td><td>40</td><td>70</td><td>42</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>16</td><td>Jon Toner</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>60</td><td>70</td><td>50</td><td>75</td><td>40</td><td>78</td><td>70</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>17</td><td>Jake Forke</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>70</td><td>61</td><td>62</td><td>50</td><td>52</td><td>40</td><td>69</td><td>77</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>18</td><td>Harvey Danger</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>66</td><td>25</td><td>62</td><td>65</td><td>45</td><td>60</td><td>50</td><td>63</td><td>40</td><td>68</td><td>70</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>Julian O'Sullivan</td><td>G</td><td>100.00</td><td></td><td>52</td><td>50</td><td>65</td><td>78</td><td>80</td><td>81</td><td>84</td><td>86</td><td>88</td><td>50</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>Willis Vincent(R)</td><td>G</td><td>100.00</td><td></td><td>57</td><td>50</td><td>55</td><td>75</td><td>70</td><td>70</td><td>75</td><td>77</td><td>75</td><td>50</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_CAN"><a id="Canada">Canada</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : CptSquall // Muford</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td>Fenton Uriel</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>46</td><td>25</td><td>62</td><td>70</td><td>60</td><td>70</td><td>50</td><td>70</td><td>67</td><td>77</td><td>68</td><td>73</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>2</td><td>Cody Johansen</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>27</td><td>62</td><td>72</td><td>64</td><td>60</td><td>50</td><td>73</td><td>62</td><td>72</td><td>50</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>3</td><td>Carter Manning</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>73</td><td>60</td><td>65</td><td>50</td><td>70</td><td>70</td><td>71</td><td>77</td><td>74</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>4</td><td>Brock Becker</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>71</td><td>65</td><td>70</td><td>50</td><td>66</td><td>67</td><td>70</td><td>80</td><td>72</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>5</td><td>Ryan Gardiner</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>70</td><td>66</td><td>50</td><td>76</td><td>40</td><td>70</td><td>80</td><td>72</td><td>46</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>6</td><td>Jackson Conklin</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>69</td><td>65</td><td>62</td><td>50</td><td>62</td><td>42</td><td>62</td><td>71</td><td>68</td><td>41</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>7</td><td>Asti-Tabarnak Fleur-De-Lys-Lapoutine</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>61</td><td>54</td><td>70</td><td>50</td><td>62</td><td>40</td><td>70</td><td>80</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>8</td><td>Xavier Paquette</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>52</td><td>60</td><td>50</td><td>70</td><td>40</td><td>80</td><td>73</td><td>74</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>9</td><td>Tony Snow</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>77</td><td>60</td><td>65</td><td>50</td><td>80</td><td>43</td><td>72</td><td>67</td><td>77</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>10</td><td>Jacob Dorty</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>76</td><td>60</td><td>65</td><td>50</td><td>73</td><td>40</td><td>71</td><td>82</td><td>71</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>11</td><td>Herb Robert</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>43</td><td>25</td><td>62</td><td>71</td><td>70</td><td>68</td><td>50</td><td>70</td><td>40</td><td>60</td><td>70</td><td>68</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>12</td><td>DabCity Savage</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>62</td><td>70</td><td>50</td><td>70</td><td>40</td><td>61</td><td>80</td><td>59</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>13</td><td>Kyle Corbett</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>62</td><td>41</td><td>62</td><td>60</td><td>56</td><td>60</td><td>50</td><td>54</td><td>40</td><td>42</td><td>59</td><td>77</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>14</td><td>Kade Ryley</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>42</td><td>27</td><td>70</td><td>54</td><td>40</td><td>50</td><td>50</td><td>75</td><td>40</td><td>55</td><td>60</td><td>64</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>15</td><td>Jordan Von Matt</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>46</td><td>25</td><td>62</td><td>70</td><td>64</td><td>70</td><td>50</td><td>63</td><td>40</td><td>64</td><td>60</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>16</td><td>Grease La Roache</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>65</td><td>25</td><td>62</td><td>75</td><td>50</td><td>60</td><td>50</td><td>70</td><td>40</td><td>40</td><td>64</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>17</td><td>Deku Izuku</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>75</td><td>48</td><td>58</td><td>50</td><td>68</td><td>40</td><td>75</td><td>65</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>18</td><td>Charlie Schieck</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>42</td><td>25</td><td>62</td><td>65</td><td>60</td><td>40</td><td>50</td><td>75</td><td>40</td><td>75</td><td>47</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>Reece Artois</td><td>G</td><td>100.00</td><td></td><td>53</td><td>50</td><td>70</td><td>70</td><td>73</td><td>75</td><td>67</td><td>76</td><td>79</td><td>55</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>Walter Hobbs</td><td>G</td><td>100.00</td><td></td><td>67</td><td>50</td><td>53</td><td>74</td><td>75</td><td>80</td><td>84</td><td>84</td><td>84</td><td>65</td><td>70</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_EEU"><a id="EasternEurope">Eastern Europe</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : TroyMcClure03 // GeckoeyGecko</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td>Grayson St. Raegan</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>65</td><td>65</td><td>69</td><td>50</td><td>70</td><td>65</td><td>80</td><td>70</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>2</td><td>Dayymo Ralchankinov</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>66</td><td>60</td><td>50</td><td>70</td><td>65</td><td>70</td><td>80</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>3</td><td>Benis Smol</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>65</td><td>63</td><td>66</td><td>50</td><td>60</td><td>70</td><td>60</td><td>74</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>4</td><td>Alex Andani</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>28</td><td>62</td><td>70</td><td>70</td><td>70</td><td>50</td><td>72</td><td>71</td><td>73</td><td>65</td><td>70</td><td>43</td><td>80</td><td>40</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>5</td><td>David Kastrba</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>62</td><td>25</td><td>62</td><td>61</td><td>54</td><td>61</td><td>50</td><td>60</td><td>40</td><td>70</td><td>60</td><td>68</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>6</td><td>Cash Savage</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>48</td><td>28</td><td>62</td><td>72</td><td>64</td><td>60</td><td>50</td><td>72</td><td>45</td><td>68</td><td>80</td><td>75</td><td>43</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>7</td><td>Rádovän Hudeč</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>80</td><td>66</td><td>70</td><td>50</td><td>70</td><td>40</td><td>70</td><td>76</td><td>73</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>8</td><td>Piotr Czerkawski</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>77</td><td>60</td><td>70</td><td>50</td><td>72</td><td>40</td><td>77</td><td>69</td><td>77</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>9</td><td>Matěj Eliáš</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>75</td><td>63</td><td>61</td><td>50</td><td>75</td><td>40</td><td>65</td><td>80</td><td>72</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>10</td><td>Kristaps Ball</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>71</td><td>60</td><td>66</td><td>50</td><td>75</td><td>42</td><td>67</td><td>81</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>11</td><td>Ēriks Skalbergs</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>74</td><td>42</td><td>72</td><td>50</td><td>69</td><td>40</td><td>60</td><td>71</td><td>60</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>12</td><td>Tokek Takshak</td><td></td><td>X</td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>60</td><td>60</td><td>50</td><td>70</td><td>40</td><td>63</td><td>71</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>13</td><td>Troy McClure III</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>61</td><td>25</td><td>62</td><td>61</td><td>60</td><td>59</td><td>50</td><td>64</td><td>40</td><td>70</td><td>42</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>14</td><td>Sachimo Zoidberg JR.</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>71</td><td>65</td><td>71</td><td>50</td><td>63</td><td>40</td><td>60</td><td>70</td><td>66</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>15</td><td>Mikhail Petrikov</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>72</td><td>65</td><td>70</td><td>50</td><td>70</td><td>40</td><td>73</td><td>80</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>16</td><td>Maxim Poulin</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>71</td><td>72</td><td>61</td><td>50</td><td>75</td><td>40</td><td>70</td><td>56</td><td>85</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>17</td><td>Maui</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>61</td><td>25</td><td>62</td><td>71</td><td>70</td><td>71</td><td>50</td><td>52</td><td>40</td><td>55</td><td>40</td><td>78</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>18</td><td>Kevin Maddox</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>60</td><td>63</td><td>50</td><td>72</td><td>40</td><td>77</td><td>68</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>Aleksandr Aleksandrov Jr.(R)</td><td>G</td><td>100.00</td><td></td><td>65</td><td>50</td><td>51</td><td>70</td><td>75</td><td>76</td><td>70</td><td>75</td><td>70</td><td>50</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>Petr Vrana(R)</td><td>G</td><td>100.00</td><td></td><td>60</td><td>50</td><td>50</td><td>70</td><td>75</td><td>70</td><td>70</td><td>72</td><td>70</td><td>51</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_SCN"><a id="Scandinavia">Scandinavia</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Spooked // Asspancakes</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td>Mattias Enqvist</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>79</td><td>40</td><td>60</td><td>50</td><td>70</td><td>71</td><td>80</td><td>62</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>2</td><td>Mikkel Haugen</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>70</td><td>70</td><td>64</td><td>50</td><td>70</td><td>75</td><td>41</td><td>80</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>3</td><td>Jax Aittokallio(R)</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>60</td><td>50</td><td>50</td><td>60</td><td>60</td><td>50</td><td>60</td><td>55</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>4</td><td>Goku Muerto(R)</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>73</td><td>48</td><td>50</td><td>50</td><td>58</td><td>54</td><td>63</td><td>47</td><td>60</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>5</td><td>Anders Christiansen</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>60</td><td>70</td><td>50</td><td>70</td><td>69</td><td>75</td><td>75</td><td>73</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>6</td><td>Tobias Viklund(R)</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>50</td><td>30</td><td>62</td><td>50</td><td>60</td><td>50</td><td>50</td><td>60</td><td>40</td><td>55</td><td>60</td><td>65</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>7</td><td>Rafe Ulrich</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>70</td><td>25</td><td>62</td><td>68</td><td>62</td><td>65</td><td>50</td><td>60</td><td>40</td><td>50</td><td>72</td><td>72</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>8</td><td>Tim Murda</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>64</td><td>70</td><td>25</td><td>62</td><td>61</td><td>60</td><td>50</td><td>55</td><td>40</td><td>55</td><td>50</td><td>60</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>9</td><td>Pingy Pingu</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>50</td><td>25</td><td>62</td><td>65</td><td>45</td><td>52</td><td>50</td><td>63</td><td>40</td><td>62</td><td>73</td><td>63</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>10</td><td>Nicholas Falk</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>74</td><td>66</td><td>61</td><td>50</td><td>68</td><td>40</td><td>62</td><td>77</td><td>65</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>11</td><td>Kolja Seppänen</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>65</td><td>70</td><td>64</td><td>70</td><td>50</td><td>72</td><td>50</td><td>80</td><td>72</td><td>70</td><td>42</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>12</td><td>Eero Niemi(R)</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>65</td><td>55</td><td>50</td><td>50</td><td>60</td><td>40</td><td>60</td><td>70</td><td>60</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>13</td><td>Veikka Toivanen(R)</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>45</td><td>25</td><td>62</td><td>55</td><td>45</td><td>45</td><td>50</td><td>60</td><td>45</td><td>70</td><td>50</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>14</td><td>Oliver Dahl(R)</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>56</td><td>25</td><td>62</td><td>55</td><td>40</td><td>53</td><td>50</td><td>62</td><td>40</td><td>70</td><td>55</td><td>66</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>15</td><td>Jonatan Bäck(R)</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>59</td><td>60</td><td>60</td><td>50</td><td>60</td><td>40</td><td>58</td><td>40</td><td>69</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>16</td><td>Jussi Hammanen</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>61</td><td>52</td><td>70</td><td>50</td><td>60</td><td>40</td><td>69</td><td>60</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>17</td><td>Gilmore Tuttle</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>66</td><td>64</td><td>60</td><td>50</td><td>64</td><td>40</td><td>55</td><td>70</td><td>76</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>18</td><td>Ensio Kalju</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>62</td><td>28</td><td>62</td><td>74</td><td>41</td><td>74</td><td>50</td><td>74</td><td>40</td><td>54</td><td>73</td><td>80</td><td>42</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>Kata Vilde</td><td>G</td><td>100.00</td><td></td><td>60</td><td>50</td><td>72</td><td>75</td><td>75</td><td>82</td><td>85</td><td>85</td><td>85</td><td>50</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>Sebastien Primeau</td><td>G</td><td>100.00</td><td></td><td>74</td><td>50</td><td>81</td><td>63</td><td>75</td><td>82</td><td>82</td><td>82</td><td>82</td><td>60</td><td>60</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_WOR"><a id="TeamWorld">Team World</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Beaty</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td>Carlo Russo(R)</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>60</td><td>50</td><td>50</td><td>50</td><td>60</td><td>40</td><td>55</td><td>70</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>2</td><td>Shooter McGavin</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>61</td><td>70</td><td>50</td><td>75</td><td>40</td><td>72</td><td>80</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>3</td><td>Jack Daniels</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>75</td><td>64</td><td>60</td><td>50</td><td>75</td><td>40</td><td>80</td><td>70</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>4</td><td>Ignatius Blunt(R)</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>50</td><td>25</td><td>62</td><td>65</td><td>40</td><td>50</td><td>50</td><td>55</td><td>40</td><td>60</td><td>70</td><td>60</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>5</td><td>Flacko Lagerfield</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>46</td><td>25</td><td>65</td><td>74</td><td>68</td><td>70</td><td>50</td><td>74</td><td>40</td><td>70</td><td>75</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>6</td><td>Daniel Daniil</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>70</td><td>25</td><td>62</td><td>75</td><td>50</td><td>60</td><td>50</td><td>70</td><td>40</td><td>73</td><td>65</td><td>74</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>7</td><td>Daddy Mack</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>63</td><td>70</td><td>50</td><td>70</td><td>40</td><td>71</td><td>80</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>8</td><td>Manuel Gotze</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>61</td><td>25</td><td>62</td><td>75</td><td>60</td><td>64</td><td>50</td><td>75</td><td>40</td><td>60</td><td>75</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>9</td><td>Michael Fischer</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>46</td><td>25</td><td>62</td><td>73</td><td>62</td><td>61</td><td>50</td><td>76</td><td>40</td><td>67</td><td>75</td><td>79</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>10</td><td>Johannes Bauer</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>72</td><td>46</td><td>61</td><td>50</td><td>69</td><td>40</td><td>71</td><td>64</td><td>54</td><td>41</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>11</td><td>Hugo Blanchard</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>73</td><td>50</td><td>50</td><td>50</td><td>65</td><td>41</td><td>76</td><td>45</td><td>40</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>12</td><td>Rahotep Tutankhamun</td><td></td><td></td><td>X</td><td>X</td><td>100.00</td><td></td><td>70</td><td>25</td><td>62</td><td>72</td><td>70</td><td>60</td><td>50</td><td>60</td><td>40</td><td>60</td><td>75</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>13</td><td>Richard Physt</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>70</td><td>36</td><td>69</td><td>70</td><td>61</td><td>65</td><td>50</td><td>70</td><td>40</td><td>70</td><td>60</td><td>78</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>14</td><td>Nico Wallner</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>45</td><td>25</td><td>62</td><td>70</td><td>40</td><td>60</td><td>50</td><td>63</td><td>40</td><td>77</td><td>52</td><td>72</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>15</td><td>Maximilian Egger(R)</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>40</td><td>50</td><td>50</td><td>50</td><td>40</td><td>55</td><td>40</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>16</td><td>Karl Von Wittelsbach</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>63</td><td>25</td><td>62</td><td>70</td><td>60</td><td>62</td><td>50</td><td>62</td><td>40</td><td>63</td><td>40</td><td>74</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>17</td><td>Gottlieb McZehrl</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>53</td><td>25</td><td>64</td><td>72</td><td>66</td><td>61</td><td>50</td><td>72</td><td>40</td><td>64</td><td>72</td><td>72</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>18</td><td>Eri Arai</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>55</td><td>25</td><td>62</td><td>75</td><td>41</td><td>60</td><td>50</td><td>62</td><td>40</td><td>69</td><td>70</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>Benjamin Blue</td><td>G</td><td>100.00</td><td></td><td>72</td><td>50</td><td>77</td><td>80</td><td>80</td><td>81</td><td>81</td><td>81</td><td>81</td><td>50</td><td>55</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>Freddie LaFlame</td><td>G</td><td>100.00</td><td></td><td>70</td><td>50</td><td>50</td><td>80</td><td>50</td><td>83</td><td>80</td><td>80</td><td>85</td><td>50</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_USA"><a id="UnitedStatesofAmerica">United States of America</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : CaptainCrazy</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td>Kevin Kazarian(R)</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>60</td><td>55</td><td>60</td><td>50</td><td>60</td><td>60</td><td>70</td><td>60</td><td>40</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>2</td><td>Kyle Keenan Jr</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>70</td><td>70</td><td>50</td><td>71</td><td>69</td><td>81</td><td>60</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>3</td><td>Doc Digreasi</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>72</td><td>60</td><td>62</td><td>50</td><td>73</td><td>61</td><td>80</td><td>73</td><td>62</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>4</td><td>Max Mauldin(R)</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>50</td><td>25</td><td>62</td><td>69</td><td>55</td><td>55</td><td>50</td><td>55</td><td>40</td><td>45</td><td>66</td><td>60</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>5</td><td>Muhammad McLovin</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>71</td><td>60</td><td>70</td><td>50</td><td>63</td><td>40</td><td>66</td><td>57</td><td>75</td><td>41</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>6</td><td>Lightning Jones</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>72</td><td>65</td><td>50</td><td>72</td><td>40</td><td>77</td><td>74</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>7</td><td>Cameron Carter II</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>61</td><td>25</td><td>62</td><td>71</td><td>51</td><td>40</td><td>50</td><td>71</td><td>64</td><td>56</td><td>71</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>8</td><td>Baron O'Beefdip</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>56</td><td>30</td><td>62</td><td>60</td><td>60</td><td>61</td><td>50</td><td>70</td><td>46</td><td>61</td><td>70</td><td>69</td><td>47</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>9</td><td>Bust(R)</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>71</td><td>40</td><td>60</td><td>50</td><td>60</td><td>40</td><td>51</td><td>70</td><td>60</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>10</td><td>Lil' Manius(R)</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>50</td><td>26</td><td>62</td><td>60</td><td>60</td><td>50</td><td>50</td><td>62</td><td>40</td><td>50</td><td>60</td><td>60</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>11</td><td>James Dekens</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>79</td><td>60</td><td>65</td><td>50</td><td>72</td><td>40</td><td>65</td><td>80</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>12</td><td>Doug Dimmadome</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>48</td><td>27</td><td>65</td><td>69</td><td>60</td><td>70</td><td>50</td><td>60</td><td>40</td><td>70</td><td>75</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>13</td><td>Rowdy Smithers</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>42</td><td>25</td><td>62</td><td>69</td><td>41</td><td>60</td><td>50</td><td>52</td><td>40</td><td>80</td><td>70</td><td>65</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>14</td><td>Otis B. Driftwood</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>55</td><td>28</td><td>62</td><td>71</td><td>70</td><td>70</td><td>50</td><td>75</td><td>40</td><td>74</td><td>46</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>15</td><td>Geoff Moore</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>61</td><td>59</td><td>50</td><td>66</td><td>40</td><td>65</td><td>70</td><td>72</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>16</td><td>Gordie Maple</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>49</td><td>28</td><td>62</td><td>73</td><td>53</td><td>50</td><td>50</td><td>74</td><td>40</td><td>65</td><td>40</td><td>77</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>17</td><td>Daniel Karlsson</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>50</td><td>25</td><td>62</td><td>76</td><td>65</td><td>64</td><td>50</td><td>74</td><td>40</td><td>73</td><td>60</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>18</td><td>Buck Maverick</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>66</td><td>60</td><td>60</td><td>50</td><td>70</td><td>40</td><td>64</td><td>69</td><td>71</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>Friedrich Schmidt</td><td>G</td><td>100.00</td><td></td><td>50</td><td>50</td><td>50</td><td>73</td><td>72</td><td>87</td><td>87</td><td>87</td><td>87</td><td>50</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
<tr><td>Geezus Kryyst</td><td>G</td><td>100.00</td><td></td><td>60</td><td>50</td><td>70</td><td>76</td><td>72</td><td>72</td><td>80</td><td>80</td><td>80</td><td>50</td><td>60</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td></td></tr>
</table>
</div>
<?php include "Footer.php";?>
