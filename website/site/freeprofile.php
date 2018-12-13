<?php 

include '_import/connetion.php'; 
session_start();

$time = time();
$_SESSION['time_started'] = $time;
 $usr= $_SESSION['name'];
$qery= mysql_query("select * from time  where usrid='".$usr."' ");
  while($row=mysql_fetch_array($qery))
	{		
		 $stime=$row['sessiontime'];	
		 	$atime=$row['allowedtime'];
		 $rtime=$row['remainingtime'];
	
	}


?>
<!doctype html>
<html>
<head>
<title>Acadmic Execellence</title>

<style>
.welcome
{
	font-family:"Comic Sans MS", cursive;
	font-size:20px;
	font-weight:bolder;
	
}
</style>
<?php include 'include/links.php'; ?>
</head>

<body>

<marquee style="z-index:2;position:absolute;left:600;top:190;font-family:Cursive;font-size:10pt;color:ffcc00;height:480;"scrollamount="6" direction="down"><?php  echo $_SESSION['name'];?></marquee>
<marquee style="z-index:2;position:absolute;left:35;top:13;font-family:Cursive;font-size:10pt;color:ffcc00;height:111;"scrollamount="5" direction="down"><?php  echo $_SESSION['name'];?></marquee><marquee style="z-index:2;position:absolute;left:255;top:40;font-family:Cursive;font-size:10pt;color:ffcc00;height:295;"scrollamount="3" direction="down"><?php  echo $_SESSION['name'];?></marquee>
<marquee style="z-index:2;position:absolute;left:202;top:50;font-family:Cursive;font-size:10pt;color:ffcc00;height:424;"scrollamount="1" direction="down"><?php  echo $_SESSION['name'];?></marquee>


<?php 
include 'include/flyingmenu.php'; ?>
<?php
$id=$_SESSION['id'];
 
$qry= mysql_query("select * from user where id='".$id."'");
  while($row=mysql_fetch_array($qry))
	{
		
		echo $id=$row['id'];
	}
		
		?>
<table width="1000px" border="0" align="center" cellpadding="0" cellspacing="0">

<tr>
  <td>
    <img src="_images/logo.png" width="382" height="114"></td></tr>
  <tr>
    <td width="977">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        
<td id="nav"> 
    <ul>
<li><a href="freeprofile.php">Profile Home</a></li>
<li><a href="#">Payment</a></li>
<li><a href="#">Demo Test</a></li>
<li><a href="#">Lectures</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="#">me</a></li>
</ul>
</td>
</tr>
</table>
</td>
</tr>
<tr><td><h4 class="welcome"> <marquee behavior="alternate" > Welcome <?php  echo $_SESSION['name'];?> </marquee></h4></td></tr>
 <tr><td><p align="left"> <marquee behavior="alternate" > Your <?php  echo $_SESSION['cat'];?> Trial Period Will be Over in <?php echo  $rtime?> Seconds  </p></marquee></td></tr> 
 
</table>
</body>
</html>
