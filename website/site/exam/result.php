<?php 
session_start();
include '../_import/connetion.php'; 
extract($_POST);
extract($_GET);
extract($_SESSION);

?>
<!doctype html>
<html>
<head>
<title>Acadmic Execellence</title>
<style>
.welcome
{
	font-family:"Comic Sans MS", cursive;
	font-size:26px;
	font-weight:bolder;
}
.style8 {
	color: #6633CC;
	font-weight: bold;
}
.head1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #000000;
	text-align:left;
	font-weight: bold;
}
.style2 {
	color: #990000;
	font-weight: bold;
	padding-bottom: 2em;
}
</style>
<?php include '../include/links.php'; ?>
<link href="../_css/stylesheet.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function reFresh() {
  document.myfm.submit();
}
window.setInterval("reFresh()",10000);
</script>
</head>
<body>
<?php
$id=$_SESSION['id'];
$qry= mysql_query("select * from user where id='".$id."'");
  while($row=mysql_fetch_array($qry))
	{
echo $id=$row['id'];
//echo $_SESSION['type'];
echo $type=$_SESSION['type'];
	}
		
?>
<table width="1000px" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td>
    <img src="../_images/logo.png" width="250" height="80"></td>
    <td><p class="welcome"> Good Luck <?php  echo $_SESSION['name'];?> </p></td>
    </tr>
  <tr>
<td id="nav"> 
    <ul>
<li><a href="../profile.php">Profile Home</a></li>
<li><a href="../logout.php">Logout</a></li>
</ul>
</td>
</tr>
<tr align="right"><td><form name="cd">
  <label>
  <span class="labe">Remaining Time</span>:
  <input name="disp" type="text" class="clock" id="txt" value="10:00" size="10" readonly="true" align="right" border="1" />
  <span class="labe">Minutes</span>
</form></td></tr>

<tr>
<td align="left">
<?php
if (isset($id))
{ 
$query="SELECT * FROM `exam`";
$rs=mysql_query("SELECT * FROM `exam` where category = '$type' ",$cn) or die(mysql_error());
if(!isset($_SESSION['qn']))
{		$_SESSION['qn']=0;
	mysql_query("delete from userans where sess_id='" .session_id() ."'") or die(mysql_error());
	$_SESSION['trueans']=0;
}
else
{	echo $_SESSION['qn'];
	
				mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);	
	mysql_query("INSERT INTO `websitedata`.`userans` (`sess_id`, `que`, `ans1`, `ans2`, `ans3`, `ans4`, `true`, `yourans`) 
values ('".session_id()."', '".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."', '".$row[6]."','".$row[7]."','".$ans."')") or die(mysql_error());
				if($ans==$row['7'])
				{
							$_SESSION["trueans"]=$_SESSION['trueans']+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION['qn']=$_SESSION['qn']+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION['trueans'];
				$w=$_SESSION['qn']-$_SESSION['trueans'];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				mysql_query("INSERT INTO `websitedata`.`result` (`login`, `score`)
				  values('".$id."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION['qn']);
			unset($_SESSION['trueans']);
				exit;
	}
$rs=mysql_query("SELECT * FROM `exam` where category = '$type' ",$cn) or die(mysql_error());
if($_SESSION['qn']>mysql_num_rows($rs)-1)
{
unset($_SESSION['qn']);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}

mysql_data_seek($rs,$_SESSION['qn']);

//echo "hello world3";
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=test.php>";
echo "<table width=100%> <tr> <td width=40>&nbsp;<td> <table border=0>";
$n=$_SESSION['qn']+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";
if($_SESSION['qn']<mysql_num_rows($rs)-1)
{
	echo "<tr><td><input type=submit name=submit value='Next Question'>";
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
}
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";

echo "</table></table>";
}
else{ header( "Location:../profile.php" );
}

	
echo "<div align=right>".$n."";


?>
</td>
</tr>
</table>
 
 

</body>
</html>
