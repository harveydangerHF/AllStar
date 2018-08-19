<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Team Schedule</title>
<script type="text/javascript" src="SMJHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Josh Sales - STHS - Version : 3.1.3.0" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
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
<h1 class="TeamSchedulePro_DET"><a id="DetroitFalcons">Detroit Falcons</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamSchedulePro_EAS"><a id="EasternConference">Eastern Conference</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamSchedulePro_HAL"><a id="HalifaxRaiders">Halifax Raiders</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamSchedulePro_KEL"><a id="KelownaKnights">Kelowna Knights</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamSchedulePro_MTL"><a id="MontrealMilitia">Montreal Militia</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamSchedulePro_STL"><a id="St.LouisScarecrows">St. Louis Scarecrows</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamSchedulePro_VAN"><a id="VancouverWhalers">Vancouver Whalers</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamSchedulePro_WES"><a id="WesternConference">Western Conference</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<?php include "Footer.php";?>
