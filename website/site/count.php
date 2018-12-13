<? /* Change the "13" with the hour, the "30" with the minutes, the "00" with the seconds,  
the "7" with the month, the "14" with the day and the "2004" with the year. */  

$target = mktime("0","10","00","0","0","0");  

// Do not change this line.  
$calc = $target - time();  

// Do not change this section.  
$aar = ($calc - ($calc % 31557600)) / 31557600;  
$calc = $calc - ($aar * 31557600);  
$maaneder = ($calc - ($calc % 2629800)) / 2629800;  
$calc = $calc - ($maaneder * 2629800);  
$dager = ($calc - ($calc % 86400)) / 86400;  
$calc = $calc - ($dager * 86400);  
$timer = ($calc - ($calc % 3600)) / 3600;  
$calc = $calc - ($timer * 3600);  
$minutter = ($calc - ($calc % 60)) / 60;  
$calc = $calc - ($minutter * 60);  
$sekunder = ($calc - ($calc % 1)) / 1;  

// Change this line to whatever you like, but don't remove the variabels.  

echo "<p class='main'>Still ".$sekunder." seconds, ".$minutter." minutes, ".$timer." hours, ".$dager." days, ".$maaneder." months and ".$aar."  
years until ". date("H:i:s - d.m.Y", $target)."</p>"; ?>