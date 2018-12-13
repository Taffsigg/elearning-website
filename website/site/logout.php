<?php
include '_import/connetion.php'; 
session_start();
$oldtime = $_SESSION['time_started'];
$newtime = time();
$difference = $newtime - $oldtime;
$id=$_SESSION['id'];
echo $difference;
echo $usr= $_SESSION['name'];
//echo $id;

 $qery= mysql_query("select * from user  where id='".$id."' ");
  while($row=mysql_fetch_array($qery))
	{
		 $stime=$row['sessiontime'];
	}
	

$totaltime=$stime+$difference;

$qry= mysql_query( "update  user set sessiontime='".$totaltime."' where id='".$id."'");


$qrey= mysql_query( "update  time set sessiontime='".$totaltime."'  where usrid='".$usr."'");

$qery= mysql_query("select * from time  where usrid='".$usr."' ");
  while($row=mysql_fetch_array($qery))
	{		
	$stime=$row['sessiontime'];	
			$atime=$row['allowedtime'];
		 $rtime=$row['remainingtime'];
	
	}


//echo $atime;
//echo $rtime;

echo $remintime=($atime-$stime);
$qrey= mysql_query( "update  time set  remainingtime='".$remintime."' where usrid='".$usr."'");


if(session_destroy())
{		
		redirecturl('index.php');
		//echo 'session  destroied';
	}

?>
<p><a href="index.php">Home Page</a></p>