<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>SMJHL - Pro Team Roster</title>
<script type="text/javascript" src="SMJHL.js"></script>
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
<h1 class="TeamRosterPro_DET"><a id="DetroitFalcons">Detroit Falcons</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Wozy/Waters</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_EAS"><a id="EasternConference">Eastern Conference</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : </td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td>Mr. Faceoffs</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>62</td><td>70</td><td>56</td><td>50</td><td>69</td><td>72</td><td>62</td><td>52</td><td>71</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87331" target="new">Link</a></td></tr>
<tr><td>2</td><td>Marc Palicka</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>65</td><td>62</td><td>60</td><td>50</td><td>68</td><td>70</td><td>60</td><td>70</td><td>70</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86823" target="new">Link</a></td></tr>
<tr><td>3</td><td>Kristof Kovacs</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>69</td><td>60</td><td>60</td><td>50</td><td>62</td><td>65</td><td>60</td><td>78</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87381" target="new">Link</a></td></tr>
<tr><td>4</td><td>Kevin Kazarian</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>60</td><td>60</td><td>68</td><td>50</td><td>62</td><td>68</td><td>70</td><td>69</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87023" target="new">Link</a></td></tr>
<tr><td>5</td><td>Goku Muerto</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>80</td><td>57</td><td>50</td><td>50</td><td>68</td><td>60</td><td>70</td><td>57</td><td>67</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86929" target="new">Link</a></td></tr>
<tr><td>6</td><td>Nicky Pedersen Jr.</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>42</td><td>25</td><td>62</td><td>73</td><td>51</td><td>60</td><td>50</td><td>65</td><td>40</td><td>64</td><td>74</td><td>71</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86997" target="new">Link</a></td></tr>
<tr><td>7</td><td>Nicholas Williams</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>71</td><td>50</td><td>50</td><td>50</td><td>70</td><td>40</td><td>67</td><td>77</td><td>73</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87372" target="new">Link</a></td></tr>
<tr><td>8</td><td>Hippo Passamus</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>58</td><td>25</td><td>62</td><td>70</td><td>63</td><td>56</td><td>50</td><td>70</td><td>40</td><td>75</td><td>56</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87231" target="new">Link</a></td></tr>
<tr><td>9</td><td>Oliver Kovacs</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>60</td><td>60</td><td>50</td><td>71</td><td>40</td><td>74</td><td>64</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87384" target="new">Link</a></td></tr>
<tr><td>10</td><td>Lil Manius</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>55</td><td>26</td><td>62</td><td>68</td><td>60</td><td>64</td><td>50</td><td>70</td><td>40</td><td>60</td><td>72</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86935" target="new">Link</a></td></tr>
<tr><td>11</td><td>Crush Cile</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>46</td><td>25</td><td>62</td><td>70</td><td>70</td><td>63</td><td>50</td><td>64</td><td>40</td><td>60</td><td>75</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86683" target="new">Link</a></td></tr>
<tr><td>12</td><td>Adam Taylor</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>67</td><td>59</td><td>60</td><td>50</td><td>65</td><td>41</td><td>65</td><td>78</td><td>73</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87245" target="new">Link</a></td></tr>
<tr><td>13</td><td>Wolfhard Richter</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>67</td><td>42</td><td>70</td><td>50</td><td>71</td><td>40</td><td>65</td><td>71</td><td>73</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86711" target="new">Link</a></td></tr>
<tr><td>14</td><td>Tig Murphy</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>72</td><td>47</td><td>57</td><td>50</td><td>70</td><td>40</td><td>73</td><td>63</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87216" target="new">Link</a></td></tr>
<tr><td>15</td><td>Pierre Laroche-Durocher</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>70</td><td>25</td><td>62</td><td>70</td><td>65</td><td>63</td><td>50</td><td>63</td><td>40</td><td>60</td><td>40</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87225" target="new">Link</a></td></tr>
<tr><td>16</td><td>Maximilian Egger</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>76</td><td>42</td><td>50</td><td>50</td><td>70</td><td>40</td><td>69</td><td>52</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87345" target="new">Link</a></td></tr>
<tr><td>17</td><td>Kiko Rytmeyr</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>50</td><td>60</td><td>50</td><td>70</td><td>40</td><td>63</td><td>70</td><td>80</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87208" target="new">Link</a></td></tr>
<tr><td>18</td><td>Craig Finley</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>70</td><td>43</td><td>60</td><td>50</td><td>70</td><td>40</td><td>67</td><td>67</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://simulationhockey.com/showthread.php?tid=87505" target="new">Link</a></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>Cedric Robinson</td><td>G</td><td>100.00</td><td></td><td>65</td><td>50</td><td>70</td><td>80</td><td>70</td><td>70</td><td>80</td><td>80</td><td>80</td><td>50</td><td>53</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87448" target="new">Link</a></td></tr>
<tr><td>Petr Vrana</td><td>G</td><td>100.00</td><td></td><td>60</td><td>50</td><td>65</td><td>77</td><td>76</td><td>70</td><td>80</td><td>80</td><td>83</td><td>51</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86601" target="new">Link</a></td></tr>
</table>
</div>
<h1 class="TeamRosterPro_HAL"><a id="HalifaxRaiders">Halifax Raiders</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : TDZ // Shmurph</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_KEL"><a id="KelownaKnights">Kelowna Knights</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Nour // Thunder</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_MTL"><a id="MontrealMilitia">Montreal Militia</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Keygan // Keygan's right hand</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_STL"><a id="St.LouisScarecrows">St. Louis Scarecrows</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : TML99 // JKortesi81</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_VAN"><a id="VancouverWhalers">Vancouver Whalers</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : Adam // Glyc</td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tbody></tbody>
</table>
</div>
<h1 class="TeamRosterPro_WES"><a id="WesternConference">Western Conference</a></h1>
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
<br /><table class="STHSTableFullW"><tr>
<td class="STHSRoster_GM">General Manager : </td>
<td class="STHSRoster_Coach">Coach : </td>
<td class="STHSW120"><b>Morale</b> : 80</td>
<td class="STHSRoster_TeamOverall">Team Overall : N/A</td></tr></table>
<table class="basictablesorter STHSRoster_PlayersTable"><thead><tr>
<th class="STHSW25">#</th><th class="STHSW200">Player Name</th><th class="STHSW10">C</th><th class="STHSW10">L</th><th class="STHSW10">R</th><th class="STHSW10">D</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">CK</th><th class="STHSW25">FG</th><th class="STHSW25">DI</th><th class="STHSW25">SK</th><th class="STHSW25">ST</th><th class="STHSW25">EN</th><th class="STHSW25">DU</th><th class="STHSW25">PH</th><th class="STHSW25">FO</th><th class="STHSW25">PA</th><th class="STHSW25">SC</th><th class="STHSW25">DF</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>1</td><td>Jax Aittokallio</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>75</td><td>65</td><td>50</td><td>50</td><td>70</td><td>60</td><td>60</td><td>70</td><td>68</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86919" target="new">Link</a></td></tr>
<tr><td>2</td><td>Carlo Russo</td><td>X</td><td></td><td></td><td></td><td>100.00</td><td></td><td>42</td><td>25</td><td>62</td><td>70</td><td>61</td><td>50</td><td>50</td><td>70</td><td>48</td><td>65</td><td>75</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86569" target="new">Link</a></td></tr>
<tr><td>3</td><td>Tony Pepperoni</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>60</td><td>70</td><td>50</td><td>70</td><td>45</td><td>68</td><td>75</td><td>62</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87264" target="new">Link</a></td></tr>
<tr><td>4</td><td>Philipp Winter</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>41</td><td>25</td><td>62</td><td>76</td><td>60</td><td>56</td><td>50</td><td>71</td><td>40</td><td>60</td><td>77</td><td>66</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86966" target="new">Link</a></td></tr>
<tr><td>5</td><td>Max Mauldin</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>71</td><td>60</td><td>60</td><td>50</td><td>70</td><td>40</td><td>55</td><td>72</td><td>66</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86683" target="new">Link</a></td></tr>
<tr><td>6</td><td>Luke Thomason</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>60</td><td>60</td><td>50</td><td>70</td><td>40</td><td>75</td><td>66</td><td>72</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87210" target="new">Link</a></td></tr>
<tr><td>7</td><td>Ignatius Blunt</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>52</td><td>25</td><td>62</td><td>73</td><td>54</td><td>60</td><td>50</td><td>68</td><td>40</td><td>62</td><td>79</td><td>66</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86593" target="new">Link</a></td></tr>
<tr><td>8</td><td>Gvidas Kazlauskas</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>60</td><td>63</td><td>50</td><td>72</td><td>40</td><td>63</td><td>75</td><td>66</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86558" target="new">Link</a></td></tr>
<tr><td>9</td><td>Bust</td><td></td><td>X</td><td></td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>75</td><td>60</td><td>64</td><td>50</td><td>60</td><td>40</td><td>60</td><td>75</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86571" target="new">Link</a></td></tr>
<tr><td>10</td><td>Sulak O'Hritea</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>65</td><td>28</td><td>62</td><td>70</td><td>65</td><td>65</td><td>50</td><td>68</td><td>40</td><td>60</td><td>51</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86915" target="new">Link</a></td></tr>
<tr><td>11</td><td>Eero Niemi</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>71</td><td>60</td><td>60</td><td>50</td><td>70</td><td>40</td><td>66</td><td>75</td><td>68</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86913" target="new">Link</a></td></tr>
<tr><td>12</td><td>Alex Winters</td><td></td><td></td><td>X</td><td></td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>70</td><td>61</td><td>60</td><td>50</td><td>71</td><td>40</td><td>72</td><td>68</td><td>70</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87409" target="new">Link</a></td></tr>
<tr><td>13</td><td>Tucker Baloo</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>48</td><td>25</td><td>62</td><td>70</td><td>60</td><td>50</td><td>50</td><td>53</td><td>40</td><td>67</td><td>57</td><td>74</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87404" target="new">Link</a></td></tr>
<tr><td>14</td><td>Sean Stevenson Jr.</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>52</td><td>25</td><td>62</td><td>60</td><td>60</td><td>50</td><td>50</td><td>60</td><td>40</td><td>55</td><td>42</td><td>84</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://simulationhockey.com/showthread.php?tid=87793" target="new">Link</a></td></tr>
<tr><td>15</td><td>Rex Kirkby</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>57</td><td>25</td><td>62</td><td>70</td><td>61</td><td>59</td><td>50</td><td>61</td><td>40</td><td>70</td><td>50</td><td>79</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87323" target="new">Link</a></td></tr>
<tr><td>16</td><td>Jake Reid</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>69</td><td>72</td><td>50</td><td>58</td><td>70</td><td>54</td><td>50</td><td>40</td><td>40</td><td>40</td><td>40</td><td>68</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87285" target="new">Link</a></td></tr>
<tr><td>17</td><td>Callum MacElroy</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>40</td><td>25</td><td>62</td><td>54</td><td>41</td><td>50</td><td>50</td><td>62</td><td>40</td><td>59</td><td>80</td><td>63</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://simulationhockey.com/showthread.php?tid=87656" target="new">Link</a></td></tr>
<tr><td>18</td><td>Badum Tuch(R)</td><td></td><td></td><td></td><td>X</td><td>100.00</td><td></td><td>60</td><td>25</td><td>62</td><td>69</td><td>61</td><td>40</td><td>50</td><td>65</td><td>40</td><td>62</td><td>40</td><td>75</td><td>40</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://simulationhockey.com/showthread.php?tid=87917" target="new">Link</a></td></tr>
</table><table class="basictablesorter STHSRoster_GoaliesTable"><thead><tr>
<th class="STHSW200">Goalie Name</th><th class="STHSW25">PO</th><th class="STHSW25">CON</th><th class="STHSW25">IJ</th><th class="STHSW25">SK</th><th class="STHSW25">DU</th><th class="STHSW25">EN</th><th class="STHSW25">SZ</th><th class="STHSW25">AG</th><th class="STHSW25">RB</th><th class="STHSW25">SC</th><th class="STHSW25">HS</th><th class="STHSW25">RT</th><th class="STHSW25">PH</th><th class="STHSW25">PS</th><th class="STHSW25">EX</th><th class="STHSW25">LD</th><th class="STHSW25">MO</th><th class="STHSW25">TA</th><th class="STHSW25">SP</th><th class="STHSW55">Link</th></tr></thead>
<tr><td>Brando Sando</td><td>G</td><td>100.00</td><td></td><td>60</td><td>50</td><td>50</td><td>70</td><td>70</td><td>70</td><td>55</td><td>70</td><td>80</td><td>50</td><td>60</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=87214" target="new">Link</a></td></tr>
<tr><td>Johannes Leitner</td><td>G</td><td>100.00</td><td></td><td>51</td><td>50</td><td>70</td><td>70</td><td>70</td><td>80</td><td>80</td><td>80</td><td>80</td><td>55</td><td>50</td><td>80</td><td>50</td><td>80</td><td></td><td>0</td><td><a href="http://www.simulationhockey.com/showthread.php?tid=86837" target="new">Link</a></td></tr>
</table>
</div>
<?php include "Footer.php";?>
