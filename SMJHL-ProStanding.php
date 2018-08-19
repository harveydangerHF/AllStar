﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Standing</title>
<script type="text/javascript" src="SMJHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="Decription" content="Josh Sales - STHS - Version : 3.1.3.0" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style type="text/css">
@media screen and (max-width: 1060px) {
.STHSWarning {display:block;}
table.basictablesorter thead th:nth-last-child(2){display:none;}
table.basictablesorter tbody td:nth-last-child(2){display:none;}
table.basictablesorter thead th:nth-last-child(3){display:none;}
table.basictablesorter tbody td:nth-last-child(3){display:none;}
table.basictablesorter thead th:nth-last-child(4){display:none;}
table.basictablesorter tbody td:nth-last-child(4){display:none;}
}@media screen and (max-width: 890px) {
table.basictablesorter thead th:nth-last-child(5){display:none;}
table.basictablesorter tbody td:nth-last-child(5){display:none;}
table.basictablesorter thead th:nth-last-child(6){display:none;}
table.basictablesorter tbody td:nth-last-child(6){display:none;}
}
table.basictablesorter tbody td.staticTD {font-size:9pt;border-right:hidden; border-left:hidden;}
</style>
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
<script type="text/javascript">$(function(){$("table").basictablesorter({ widgets: ['staticRow'] })});</script>
<div class="tabsmain standard"><ul class="tabmain-links">
<li class="activemain"><a href="#tabmain2">Conference</a></li>
<li><a href="#tabmain3">Division</a></li>
<li><a href="#tabmain4">Overall</a></li>
</ul><div class="tabmain-content">
<div class="tabmain active" id="tabmain2">
<h2 class="STHSStanding_H2Header"></h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href="SMJHL-ProTeamRoster.php#KelownaKnights">Kelowna Knights</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>2</td><td><a href="SMJHL-ProTeamRoster.php#MontrealMilitia">Montreal Militia</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
</tbody></table><br />
x - Clinched Playoff Berth<br />
y - Clinched Division Title<br />
z - Clinched Conference Title<br />
e - Eliminated<br />
*Seeding 1 division leaders<br />
</div><div class="tabmain" id="tabmain3">
<h2 class="STHSStanding_H2Header">The Only Division</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href="SMJHL-ProTeamRoster.php#VancouverWhalers">Vancouver Whalers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>2</td><td><a href="SMJHL-ProTeamRoster.php#KelownaKnights">Kelowna Knights</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>3</td><td><a href="SMJHL-ProTeamRoster.php#WesternConference">Western Conference</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>4</td><td><a href="SMJHL-ProTeamRoster.php#EasternConference">Eastern Conference</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>5</td><td><a href="SMJHL-ProTeamRoster.php#DetroitFalcons">Detroit Falcons</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>6</td><td><a href="SMJHL-ProTeamRoster.php#MontrealMilitia">Montreal Militia</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>7</td><td><a href="SMJHL-ProTeamRoster.php#St.LouisScarecrows">St. Louis Scarecrows</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>8</td><td><a href="SMJHL-ProTeamRoster.php#HalifaxRaiders">Halifax Raiders</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
</tbody></table>
</div><div class="tabmain" id="tabmain4">
<h2 class="STHSStanding_H2Header">Overall</h2>
<table class="basictablesorter"><thead><tr><th class="STHSW35">PO</th><th class="STHSW200">Teams</th><th class="STHSW30">GP</th><th class="STHSW30">W</th><th class="STHSW30">L</th><th class="STHSW30">OTL</th><th class="STHSW30">P</th><th class="STHSW30">GF</th><th class="STHSW30">GA</th><th class="STHSW30">Diff</th><th class="STHSW45">PCT</th><th class="STHSW75">Home</th><th class="STHSW75">Visitor</th><th class="STHSW75">Last 10</th><th class="STHSW75">Home L10</th><th class="STHSW75">Visitor L10</th><th class="STHSW30">STK</th></tr></thead>
<tbody>
<tr><td>1</td><td><a href="SMJHL-ProTeamRoster.php#VancouverWhalers">Vancouver Whalers</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>2</td><td><a href="SMJHL-ProTeamRoster.php#KelownaKnights">Kelowna Knights</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>3</td><td><a href="SMJHL-ProTeamRoster.php#WesternConference">Western Conference</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>4</td><td><a href="SMJHL-ProTeamRoster.php#EasternConference">Eastern Conference</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>5</td><td><a href="SMJHL-ProTeamRoster.php#DetroitFalcons">Detroit Falcons</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>6</td><td><a href="SMJHL-ProTeamRoster.php#MontrealMilitia">Montreal Militia</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>7</td><td><a href="SMJHL-ProTeamRoster.php#St.LouisScarecrows">St. Louis Scarecrows</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
<tr><td>8</td><td><a href="SMJHL-ProTeamRoster.php#HalifaxRaiders">Halifax Raiders</a></td><td>0</td><td>0</td><td>0</td><td>0</td><td><b>0</b></td><td>0</td><td>0</td><td>0</td><td>0.000</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>N/A</td></tr>
</tbody></table></div></div></div>
<h2 class="STHSStanding_PointSystem">Point System</h2>
<b>Win :</b> 2 -- <b>Loss :</b> 0 -- <b>OT Win :</b> 2 -- <b>OT Loss :</b> 1 -- <b>SO Win :</b> 2 -- <b>SO Loss :</b> 1<br /><br />P.S. The simulator only uses points to give the title. If two team have the same amount of point, none of them will be award the title until your simulate the last game/day of your season.
<?php include "Footer.php";?>
