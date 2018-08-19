<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Team Scoring</title>
<script type="text/javascript" src="SMJHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Josh Sales - STHS - Version : 3.1.3.0" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style type="text/css">
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(3){display:none;}
}
@media screen and (max-width: 1060px) {
.STHSScoring_PlayersTable1 tbody td:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(6){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(7){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-last-child(8){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-last-child(8){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-last-child(1){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-last-child(2){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-last-child(3){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-last-child(3){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(1){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(1){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(2){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(2){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(3){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(3){display:none;}
}
@media screen and (max-width: 960px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(2){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(2){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(3){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(3){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-child(2){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-child(2){display:none;}
.STHSScoring_PlayersTable2 tbody td:nth-child(3){display:none;}
.STHSScoring_PlayersTable2 thead th:nth-child(3){display:none;}
}
@media screen and (max-width: 890px) {
.STHSW10 {display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(12){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(12){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(14){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(14){display:none;}
.STHSScoring_PlayersTable1 tbody td:nth-child(15){display:none;}
.STHSScoring_PlayersTable1 thead th:nth-child(15){display:none;}
.STHSScoring_GoaliesTable tbody td:nth-last-child(8){display:none;}
.STHSScoring_GoaliesTable thead th:nth-last-child(8){display:none;}
}</style>
<link href="SMJHL.css" rel="stylesheet" type="text/css" />
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#DetroitFalcons">Detroit Falcons</a> | <a href="#EasternConference">Eastern Conference</a> | <a href="#HalifaxRaiders">Halifax Raiders</a> | <a href="#KelownaKnights">Kelowna Knights</a> | <a href="#MontrealMilitia">Montreal Militia</a> | <a href="#St.LouisScarecrows">St. Louis Scarecrows</a> | <a href="#VancouverWhalers">Vancouver Whalers</a> | <a href="#WesternConference">Western Conference</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamScoringPro_DET"><a id="DetroitFalcons">Detroit Falcons</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-ProTeamRoster.php#DetroitFalcons">Pro Team Roster</a> ]
[ <a href="SMJHL-ProTeamScoring.php#DetroitFalcons">Pro Team Scoring</a> ]
[ <a href="SMJHL-ProTeamLines.php#DetroitFalcons">Pro Team Lines</a> ]
[ <a href="SMJHL-ProTeamSchedule.php#DetroitFalcons">Pro Team Schedule</a> ]
[ <a href="SMJHL-ProTeamStats.php#DetroitFalcons">Pro Team Stats</a> ]
[ <a href="SMJHL-ProTeamStatsVS.php#DetroitFalcons">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_DetroitFalcons');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_DetroitFalcons" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_EAS"><a id="EasternConference">Eastern Conference</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-ProTeamRoster.php#EasternConference">Pro Team Roster</a> ]
[ <a href="SMJHL-ProTeamScoring.php#EasternConference">Pro Team Scoring</a> ]
[ <a href="SMJHL-ProTeamLines.php#EasternConference">Pro Team Lines</a> ]
[ <a href="SMJHL-ProTeamSchedule.php#EasternConference">Pro Team Schedule</a> ]
[ <a href="SMJHL-ProTeamStats.php#EasternConference">Pro Team Stats</a> ]
[ <a href="SMJHL-ProTeamStatsVS.php#EasternConference">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_EasternConference');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_EasternConference" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_HAL"><a id="HalifaxRaiders">Halifax Raiders</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-ProTeamRoster.php#HalifaxRaiders">Pro Team Roster</a> ]
[ <a href="SMJHL-ProTeamScoring.php#HalifaxRaiders">Pro Team Scoring</a> ]
[ <a href="SMJHL-ProTeamLines.php#HalifaxRaiders">Pro Team Lines</a> ]
[ <a href="SMJHL-ProTeamSchedule.php#HalifaxRaiders">Pro Team Schedule</a> ]
[ <a href="SMJHL-ProTeamStats.php#HalifaxRaiders">Pro Team Stats</a> ]
[ <a href="SMJHL-ProTeamStatsVS.php#HalifaxRaiders">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_HalifaxRaiders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_HalifaxRaiders" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_KEL"><a id="KelownaKnights">Kelowna Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-ProTeamRoster.php#KelownaKnights">Pro Team Roster</a> ]
[ <a href="SMJHL-ProTeamScoring.php#KelownaKnights">Pro Team Scoring</a> ]
[ <a href="SMJHL-ProTeamLines.php#KelownaKnights">Pro Team Lines</a> ]
[ <a href="SMJHL-ProTeamSchedule.php#KelownaKnights">Pro Team Schedule</a> ]
[ <a href="SMJHL-ProTeamStats.php#KelownaKnights">Pro Team Stats</a> ]
[ <a href="SMJHL-ProTeamStatsVS.php#KelownaKnights">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_KelownaKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_KelownaKnights" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_MTL"><a id="MontrealMilitia">Montreal Militia</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-ProTeamRoster.php#MontrealMilitia">Pro Team Roster</a> ]
[ <a href="SMJHL-ProTeamScoring.php#MontrealMilitia">Pro Team Scoring</a> ]
[ <a href="SMJHL-ProTeamLines.php#MontrealMilitia">Pro Team Lines</a> ]
[ <a href="SMJHL-ProTeamSchedule.php#MontrealMilitia">Pro Team Schedule</a> ]
[ <a href="SMJHL-ProTeamStats.php#MontrealMilitia">Pro Team Stats</a> ]
[ <a href="SMJHL-ProTeamStatsVS.php#MontrealMilitia">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MontrealMilitia');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MontrealMilitia" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_STL"><a id="St.LouisScarecrows">St. Louis Scarecrows</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-ProTeamRoster.php#St.LouisScarecrows">Pro Team Roster</a> ]
[ <a href="SMJHL-ProTeamScoring.php#St.LouisScarecrows">Pro Team Scoring</a> ]
[ <a href="SMJHL-ProTeamLines.php#St.LouisScarecrows">Pro Team Lines</a> ]
[ <a href="SMJHL-ProTeamSchedule.php#St.LouisScarecrows">Pro Team Schedule</a> ]
[ <a href="SMJHL-ProTeamStats.php#St.LouisScarecrows">Pro Team Stats</a> ]
[ <a href="SMJHL-ProTeamStatsVS.php#St.LouisScarecrows">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_St.LouisScarecrows');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_St.LouisScarecrows" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_VAN"><a id="VancouverWhalers">Vancouver Whalers</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-ProTeamRoster.php#VancouverWhalers">Pro Team Roster</a> ]
[ <a href="SMJHL-ProTeamScoring.php#VancouverWhalers">Pro Team Scoring</a> ]
[ <a href="SMJHL-ProTeamLines.php#VancouverWhalers">Pro Team Lines</a> ]
[ <a href="SMJHL-ProTeamSchedule.php#VancouverWhalers">Pro Team Schedule</a> ]
[ <a href="SMJHL-ProTeamStats.php#VancouverWhalers">Pro Team Stats</a> ]
[ <a href="SMJHL-ProTeamStatsVS.php#VancouverWhalers">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_VancouverWhalers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_VancouverWhalers" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<h1 class="TeamScoringPro_WES"><a id="WesternConference">Western Conference</a></h1>
<div class="STHSTeamLink">
[ <a href="SMJHL-ProTeamRoster.php#WesternConference">Pro Team Roster</a> ]
[ <a href="SMJHL-ProTeamScoring.php#WesternConference">Pro Team Scoring</a> ]
[ <a href="SMJHL-ProTeamLines.php#WesternConference">Pro Team Lines</a> ]
[ <a href="SMJHL-ProTeamSchedule.php#WesternConference">Pro Team Schedule</a> ]
[ <a href="SMJHL-ProTeamStats.php#WesternConference">Pro Team Stats</a> ]
[ <a href="SMJHL-ProTeamStatsVS.php#WesternConference">Pro Team Stats VS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WesternConference');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WesternConference" style="display: block;">
<table class="basictablesorter STHSScoring_PlayersTable1"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GP</th><th class="STHSW25">G</th><th class="STHSW25">A</th><th class="STHSW25">P</th><th class="STHSW25">+/-</th><th class="STHSW25">PIM</th><th class="STHSW25">PM5</th><th class="STHSW25">HIT</th><th class="STHSW25">HTT</th><th class="STHSW25">SHT</th><th class="STHSW25">OSB</th><th class="STHSW25">OSM</th><th class="STHSW55">SHT %</th><th class="STHSW25">SB</th><th class="STHSW35">MP</th><th class="STHSW35">AMG</th><th class="STHSW25">PPG</th><th class="STHSW25">PPA</th><th class="STHSW25">PPP</th><th class="STHSW25">PPS</th><th class="STHSW25">PPM</th><th class="STHSW25">PKG</th><th class="STHSW25">PKA</th><th class="STHSW25">PKP</th><th class="STHSW25">PKS</th><th class="STHSW25">PKM</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_PlayersTable2"><thead><tr><th class="STHSW200">Player Name</th><th class="STHSW10">F</th><th class="STHSW10">D</th><th class="STHSW25">GW</th><th class="STHSW25">GT</th><th class="STHSW55">FO %</th><th class="STHSW25">FOT</th><th class="STHSW25">GA</th><th class="STHSW25">TA</th><th class="STHSW25">EG</th><th class="STHSW25">HT</th><th class="STHSW25">P/20</th><th class="STHSW25">PSG</th><th class="STHSW25">PSS</th><th class="STHSW25">FW</th><th class="STHSW25">FL</th><th class="STHSW25">FT</th><th class="STHSW25">GS</th><th class="STHSW25">PS</th><th class="STHSW25">WG</th><th class="STHSW25">WP</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table><table class="basictablesorter STHSScoring_GoaliesTable"><thead><tr><th class="STHSW200">Goalie Name</th><th class="STHSW25">GP</th><th class="STHSW25">W</th><th class="STHSW25">L</th><th class="STHSW25">OTL</th><th class="STHSW50">PCT</th><th class="STHSW50">GAA</th><th class="STHSW50">MP</th><th class="STHSW25">PIM</th><th class="STHSW25">SO</th><th class="STHSW25">GA</th><th class="STHSW45">SA</th><th class="STHSW45">SAR</th><th class="STHSW25">A</th><th class="STHSW25">EG</th><th class="STHSW50">PS %</th><th class="STHSW25">PSA</th><th class="STHSW25">ST</th><th class="STHSW25">BG</th><th class="STHSW25">S1</th><th class="STHSW25">S2</th><th class="STHSW25">S3</th></tr></thead>
<tbody></tbody></table></div>
<?php include "Footer.php";?>
