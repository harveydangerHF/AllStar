<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#DetroitFalcons">Detroit Falcons</a> | <a href="#EasternConference">Eastern Conference</a> | <a href="#HalifaxRaiders">Halifax Raiders</a> | <a href="#KelownaKnights">Kelowna Knights</a> | <a href="#MontrealMilitia">Montreal Militia</a> | <a href="#St.LouisScarecrows">St. Louis Scarecrows</a> | <a href="#VancouverWhalers">Vancouver Whalers</a> | <a href="#WesternConference">Western Conference</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_DET"><a id="DetroitFalcons">Detroit Falcons</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           30     0   1  4  
 2 Unknown Player           Unknown Player           Unknown Player           30     0   1  4  
 3 Unknown Player           Unknown Player           Unknown Player           20     0   2  3  
 4 Unknown Player           Unknown Player           Unknown Player           20     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    35     1   2  2  
 2 Unknown Player           Unknown Player                                    35     0   3  2  
 3 Unknown Player           Unknown Player                                    30     0   4  1  
 4 Unknown Player           Unknown Player                                    0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           50     0   0  5  
 2 Unknown Player           Unknown Player           Unknown Player           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    50     0   0  5  
 2 Unknown Player           Unknown Player                                    50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   5  0  
 2 Unknown Player           Unknown Player           50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   5  0  
 2 Unknown Player           Unknown Player           50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     0   5  0  
 2 Unknown Player                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   5  0  
 2 Unknown Player           Unknown Player           50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   0  5  
 2 Unknown Player           Unknown Player           50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     1   2  2  
 2 Unknown Player           Unknown Player           50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_EAS"><a id="EasternConference">Eastern Conference</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Goku Muerto              Kristof Kovacs           Oliver Kovacs            25     0   2  3  
 2 Marc Palicka             Crush Cile               Lil Manius               25     0   2  3  
 3 Goku Muerto              Nicholas Williams        Adam Taylor              25     0   2  3  
 4 Mr. Faceoffs             Kevin Kazarian           Nicky Pedersen Jr.       25     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Pierre Laroche-Durocher  Tig Murphy                                        34     0   3  2  
 2 Kiko Rytmeyr             Wolfhard Richter                                  33     0   3  2  
 3 Craig Finley             Maximilian Egger                                  33     0   3  2  
 4 Pierre Laroche-Durocher  Tig Murphy                                        0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Goku Muerto              Hippo Passamus           Crush Cile               50     1   2  2  
 2 Marc Palicka             Nicholas Williams        Oliver Kovacs            50     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Pierre Laroche-Durocher  Tig Murphy                                        50     1   2  2  
 2 Kiko Rytmeyr             Maximilian Egger                                  50     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Hippo Passamus           Crush Cile               50     1   2  2  
 2 Oliver Kovacs            Lil Manius               50     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Pierre Laroche-Durocher  Tig Murphy               50     1   2  2  
 2 Kiko Rytmeyr             Maximilian Egger         50     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Hippo Passamus                                    50     1   2  2  
 2 Crush Cile                                        50     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Pierre Laroche-Durocher  Tig Murphy               50     1   2  2  
 2 Kiko Rytmeyr             Maximilian Egger         50     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Hippo Passamus           Crush Cile               50     1   2  2  
 2 Oliver Kovacs            Lil Manius               50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Pierre Laroche-Durocher  Tig Murphy               50     1   2  2  
 2 Kiko Rytmeyr             Maximilian Egger         50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Goku Muerto              Hippo Passamus           Crush Cile               Pierre Laroche-Durocher  Tig Murphy               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Goku Muerto              Hippo Passamus           Crush Cile               Pierre Laroche-Durocher  Tig Murphy               

<b>Goaltenders</b>
Starting : Petr Vrana               
Backup : Cedric Robinson          

<b>Extra Forwards</b>
Normal : Mr. Faceoffs, Adam Taylor, Kevin Kazarian - PP : Mr. Faceoffs, Adam Taylor - PK : Kevin Kazarian
<b>Extra Defensemen</b>
Normal : Craig Finley, Wolfhard Richter, Kiko Rytmeyr - PP : Craig Finley - PK : Wolfhard Richter, Kiko Rytmeyr
<b>Penalty Shots</b>
Hippo Passamus, Crush Cile, Oliver Kovacs, Lil Manius, Adam Taylor

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_HAL"><a id="HalifaxRaiders">Halifax Raiders</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           31     1   1  3  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   1  3  
 3 Unknown Player           Unknown Player           Unknown Player           29     0   3  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    38     0   3  2  
 2 Unknown Player           Unknown Player                                    38     0   3  2  
 3 Unknown Player           Unknown Player                                    24     0   4  1  
 4 Unknown Player           Unknown Player                                    0      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           50     0   0  5  
 2 Unknown Player           Unknown Player           Unknown Player           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    50     0   0  5  
 2 Unknown Player           Unknown Player                                    50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   5  0  
 2 Unknown Player           Unknown Player           50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   5  0  
 2 Unknown Player           Unknown Player           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     0   5  0  
 2 Unknown Player                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   5  0  
 2 Unknown Player           Unknown Player           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   0  5  
 2 Unknown Player           Unknown Player           50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   3  2  
 2 Unknown Player           Unknown Player           50     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_KEL"><a id="KelownaKnights">Kelowna Knights</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     0   1  4  
 2 Unknown Player           Unknown Player           Unknown Player           25     0   1  4  
 3 Unknown Player           Unknown Player           Unknown Player           25     0   2  3  
 4 Unknown Player           Unknown Player           Unknown Player           10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     0   3  2  
 2 Unknown Player           Unknown Player                                    30     0   4  1  
 3 Unknown Player           Unknown Player                                    30     0   4  1  
 4 Unknown Player           Unknown Player                                    0      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           55     0   0  5  
 2 Unknown Player           Unknown Player           Unknown Player           45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    55     0   0  5  
 2 Unknown Player           Unknown Player                                    45     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           55     0   5  0  
 2 Unknown Player           Unknown Player           45     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           55     0   5  0  
 2 Unknown Player           Unknown Player           45     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    55     0   5  0  
 2 Unknown Player                                    45     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           55     0   5  0  
 2 Unknown Player           Unknown Player           45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           55     0   1  4  
 2 Unknown Player           Unknown Player           45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   2  3  
 2 Unknown Player           Unknown Player           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="MontrealMilitia">Montreal Militia</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     0   1  4  
 2 Unknown Player           Unknown Player           Unknown Player           30     0   1  4  
 3 Unknown Player           Unknown Player           Unknown Player           15     0   1  4  
 4 Unknown Player           Unknown Player           Unknown Player           15     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     0   4  1  
 2 Unknown Player           Unknown Player                                    40     0   4  1  
 3 Unknown Player           Unknown Player                                    20     0   4  1  
 4 Unknown Player           Unknown Player                                    0      0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           57     0   0  5  
 2 Unknown Player           Unknown Player           Unknown Player           43     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    50     0   1  4  
 2 Unknown Player           Unknown Player                                    50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   4  1  
 2 Unknown Player           Unknown Player           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   5  0  
 2 Unknown Player           Unknown Player           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     1   4  0  
 2 Unknown Player                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   5  0  
 2 Unknown Player           Unknown Player           50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   1  4  
 2 Unknown Player           Unknown Player           40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   1  4  
 2 Unknown Player           Unknown Player           50     0   1  4  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_STL"><a id="St.LouisScarecrows">St. Louis Scarecrows</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     0   0  5  
 2 Unknown Player           Unknown Player           Unknown Player           25     0   0  5  
 3 Unknown Player           Unknown Player           Unknown Player           25     0   0  5  
 4 Unknown Player           Unknown Player           Unknown Player           10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     0   3  2  
 2 Unknown Player           Unknown Player                                    35     0   3  2  
 3 Unknown Player           Unknown Player                                    15     0   3  2  
 4 Unknown Player           Unknown Player                                    10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           50     0   0  5  
 2 Unknown Player           Unknown Player           Unknown Player           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    50     0   1  4  
 2 Unknown Player           Unknown Player                                    50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   4  1  
 2 Unknown Player           Unknown Player           50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   1  4  
 2 Unknown Player           Unknown Player           50     0   1  4  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     0   5  0  
 2 Unknown Player                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   5  0  
 2 Unknown Player           Unknown Player           50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   1  4  
 2 Unknown Player           Unknown Player           50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   3  2  
 2 Unknown Player           Unknown Player           50     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="VancouverWhalers">Vancouver Whalers</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           35     0   1  4  
 2 Unknown Player           Unknown Player           Unknown Player           30     0   1  4  
 3 Unknown Player           Unknown Player           Unknown Player           20     0   1  4  
 4 Unknown Player           Unknown Player           Unknown Player           15     0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    35     1   2  2  
 2 Unknown Player           Unknown Player                                    35     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           50     0   0  5  
 2 Unknown Player           Unknown Player           Unknown Player           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    50     0   0  5  
 2 Unknown Player           Unknown Player                                    50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   4  1  
 2 Unknown Player           Unknown Player           50     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     1   4  0  
 2 Unknown Player           Unknown Player           50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     0   5  0  
 2 Unknown Player                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   5  0  
 2 Unknown Player           Unknown Player           50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   2  3  
 2 Unknown Player           Unknown Player           50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     0   3  2  
 2 Unknown Player           Unknown Player           50     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_WES"><a id="WesternConference">Western Conference</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jax Aittokallio          Ignatius Blunt           Luke Thomason            25     0   2  3  
 2 Gvidas Kazlauskas        Sulak O'Hritea           Philipp Winter           25     0   2  3  
 3 Max Mauldin              Tony Pepperoni           Carlo Russo              25     0   2  3  
 4 Alex Winters             Eero Niemi               Bust                     25     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rex Kirkby               Sean Stevenson Jr.                                34     0   3  2  
 2 Tucker Baloo             Badum Tuch                                        33     0   3  2  
 3 Jake Reid                Callum MacElroy                                   33     0   3  2  
 4 Rex Kirkby               Sean Stevenson Jr.                                0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Carlo Russo              Gvidas Kazlauskas        Eero Niemi               50     1   2  2  
 2 Jax Aittokallio          Ignatius Blunt           Alex Winters             50     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rex Kirkby               Badum Tuch                                        50     1   2  2  
 2 Tucker Baloo             Sean Stevenson Jr.                                50     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gvidas Kazlauskas        Carlo Russo              50     1   2  2  
 2 Eero Niemi               Ignatius Blunt           50     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rex Kirkby               Badum Tuch               50     1   2  2  
 2 Tucker Baloo             Sean Stevenson Jr.       50     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Gvidas Kazlauskas                                 50     1   2  2  
 2 Carlo Russo                                       50     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rex Kirkby               Badum Tuch               50     1   2  2  
 2 Tucker Baloo             Sean Stevenson Jr.       50     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gvidas Kazlauskas        Carlo Russo              50     1   2  2  
 2 Eero Niemi               Ignatius Blunt           50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rex Kirkby               Badum Tuch               50     1   2  2  
 2 Tucker Baloo             Sean Stevenson Jr.       50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carlo Russo              Gvidas Kazlauskas        Eero Niemi               Rex Kirkby               Badum Tuch               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carlo Russo              Gvidas Kazlauskas        Eero Niemi               Rex Kirkby               Badum Tuch               

<b>Goaltenders</b>
Starting : Johannes Leitner         
Backup : Brando Sando             

<b>Extra Forwards</b>
Normal : Luke Thomason, Max Mauldin, Bust - PP : Luke Thomason, Max Mauldin - PK : Bust
<b>Extra Defensemen</b>
Normal : Jake Reid, Callum MacElroy, Tucker Baloo - PP : Jake Reid - PK : Callum MacElroy, Tucker Baloo
<b>Penalty Shots</b>
Gvidas Kazlauskas, Carlo Russo, Eero Niemi, Ignatius Blunt, Tony Pepperoni

<b>Scratches</b>
None
</pre></div>
<?php include "Footer.php";?>
