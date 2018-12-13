<?php 
session_start();
include '../_import/connetion.php'; 
extract($_POST);
extract($_GET);
extract($_SESSION);
$mins = isset($_SESSION["mins"]) ? $_SESSION["mins"] : 1;
$secs = isset($_SESSION["secs"]) ? $_SESSION["secs"] : 0;
$flag=0;
?>
<!doctype html>
<html>
<head>
<title>Acadmic Execellence</title>
<?php include '../include/links.php';?>
<link href="../_css/stylesheet.css" rel="stylesheet" type="text/css">

<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
	}
</script>
<link href="../_css/quiz.css" rel="stylesheet" type="text/css">
</head>

<body onload="JavaScript:timedRefresh(60030);">
<?php
$id=$_SESSION['id'];
$qry= mysql_query("select * from user where id='".$id."'");
  while($row=mysql_fetch_array($qry))
	{
echo $id=$row['id'];
echo $flag;
//echo $_SESSION['type'];
echo $type=$_SESSION['type'];
	}
	$resu=$_SESSION['id'];
?>
<?php
$timeout = 1; // Set timeout minutes
//$logout_redirect_url = "index.php"; // Set logout URL
$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        	if(	isset($ans) ){
		mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);	
	mysql_query("INSERT INTO `websitedata`.`userans` (`sess_id`, `que`, `ans1`, `ans2`, `ans3`, `ans4`,`true`)
values ('".session_id()."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."', '".$row[6]."','".$row[7]."')") ; 
				if(@$ans==$row['7'])
				{
							$_SESSION["trueans"]=$_SESSION['trueans']+1;
				}
				$_SESSION['qn']=$_SESSION['qn']+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION['trueans'];
				$w=$_SESSION['qn']-$_SESSION['trueans'];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				
				echo "</table>";
			/*	mysql_query("INSERT INTO `websitedata`.`result` (`login`,`score`)  values('".$id."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				//unset($_SESSION['qn']);
				//unset($_SESSION['trueans']);*/
				
			}
			mysql_query("INSERT INTO `websitedata`.`result` (`login`,`score`)  values('".$id."',$_SESSION[trueans])") or die(mysql_error());
			//header("Location: res.php");
			redirecturl('res.php');
    }
}
$_SESSION['start_time'] = time();
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
<li><a href="../logout.php">Logout</a></li>
</ul>
</td>
</tr>

<tr>
<form name="cd">
<input id="txt" name="txt" type="text" readonly>
</form>
<tr>
<td>
<script>
var xmlhttp = false;
var mins = "<?php echo $mins ?>";
var secs = "<?php echo $secs ?>";
<?php ?>
var secs1 = secs;
if(secs < 10){secs = "0" + secs;}
document.getElementById("txt").value = mins + ":" + secs;
secs = secs1;
var cd = setInterval("count_down_timer()",1000);
function count_down_timer()
{
 if(secs == 0 && mins == 0)
 {	
  clearInterval(cd);
 }
 else{if(secs == 0){secs = 59;mins--;}}
 if(secs < 10){secs = "0" + secs;}
 var tm = mins + ":" + secs;
 document.getElementById("txt").value = tm;
 send_request(mins,secs);
 secs--;
 }
function createRequest()
{
 
 if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    try {
        xmlhttp = new XMLHttpRequest();
    } catch (e) {
        xmlhttp=false;
    }
 }
 if (!xmlhttp && window.createRequest) {
    try {
        xmlhttp = window.createRequest();
    } catch (e) {
        xmlhttp=false;
    }
  }
 return xmlhttp;
 }
function send_request(m,s)
{
 var conn = createRequest();
 var url="update_session.php?min=" + m + "&sec=" + s;
 conn.open("GET", url);
 conn.send(null);
}
</script>
</td></tr>
<tr>
<td align="left">
<?php
if (isset($id))
{
	$t=1;
	$query="insert into temp(temp,usrud) values('".$t."','".$id."')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
$query="SELECT * FROM `exam`";
$rs=mysql_query("SELECT * FROM `exam` where category = '$type' ",$cn) or die(mysql_error());
if(!isset($_SESSION['qn']))
{		$_SESSION['qn']=0;
	mysql_query("delete from userans where sess_id='" .session_id() ."'") or die(mysql_error());
	$_SESSION['trueans']=0;
}
else
{	//echo $_SESSION['qn'];
		if(@$submit=='Next Question' && isset($ans))
		{		if($ans==1||$ans==2||$ans==3||$ans==4)
				{	$flag=1;
				echo $flag;
				//echo $ans;
				 echo  "<span style=color:green>$ans</span>";
				}
					mysql_data_seek($rs,$_SESSION['qn']);
			$row= mysql_fetch_row($rs);	
mysql_query("INSERT INTO `websitedata`.`userans` (`sess_id`, `que`, `ans1`, `ans2`, `ans3`, `ans4`, `true`, `yourans`)  
values ('".session_id()."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."', '".$row[6]."','".$row[7]."','".$ans."')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION['trueans']=$_SESSION['trueans']+1;
				}
				$_SESSION['qn']=$_SESSION['qn']+1;
		}
		
		
	else if(@$submit=='Get Result' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);	
	mysql_query("INSERT INTO `websitedata`.`userans` (`sess_id`, `que`, `ans1`, `ans2`, `ans3`, `ans4`, `true`, `yourans`) 
values ('".session_id()."', '".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."', '".$row[6]."','".$row[7]."','".$ans."')");
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
				redirecturl('res.php');
				//header("Location: res.php");
				//unset($_SESSION['qn']);
			//unset($_SESSION['trueans']);
				exit;
		}

				else if(@$submit=='Next Question'  )
		{		
				mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);	
	mysql_query("INSERT INTO `websitedata`.`userans` (`sess_id`, `que`, `ans1`, `ans2`, `ans3`, `ans4`, `true`, `yourans`)
	 values ('".session_id()."', '".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."', '".$row[6]."','".$row[7]."','0')") or die(mysql_error());
				if(@$ans==$row[7])
				{
							$_SESSION['trueans']=$_SESSION['trueans']+1;
				}
				$_SESSION['qn']=$_SESSION['qn']+1;
		}
		else if(@$submit=='Get Result')
		{
						
		mysql_data_seek($rs,$_SESSION['qn']);
				$row= mysql_fetch_row($rs);	
	mysql_query("INSERT INTO `websitedata`.`userans` (`sess_id`, `que`, `ans1`, `ans2`, `ans3`, `ans4`,`true`)
values ('".session_id()."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."', '".$row[6]."','".$row[7]."')") ; 
				if(@$ans==$row['7'])
				{
							$_SESSION["trueans"]=$_SESSION['trueans']+1;
				}
				$_SESSION['qn']=$_SESSION['qn']+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION['trueans'];
				$w=$_SESSION['qn']-$_SESSION['trueans'];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				
				echo "</table>";
mysql_query("INSERT INTO `websitedata`.`result` (`login`,`score`)  values('".$id."',$_SESSION[trueans])") 
or die(mysql_error());
				//echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				//header("Location:res.php");
				redirecturl('res.php');
				//unset($_SESSION['qn']);
				//unset($_SESSION['trueans']);
				exit;
		}
		 
}
$rs=mysql_query("SELECT * FROM `exam` where category = '$type' ",$cn) or die(mysql_error());
if($_SESSION['qn']>mysql_num_rows($rs)-1)
{
unset($_SESSION['qn']);
echo "<h1 class=head1>Some Error  Occured</h1>";
echo "Please <a href=../profile.php> Start Again</a>";
exit;
}

mysql_data_seek($rs,$_SESSION['qn']);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=test.php>";
echo "<table width=60%> <tr> <td width=40>&nbsp;<td> <table border=0>";
 $n=$_SESSION['qn'];
 //$n--;
 $qno=$_SESSION['qn']+1;
//$n2=1;
//echo $no1=$_SESSION[$n2]+1;
echo "<tR><td><span class=style2>Que ".  $qno .": $row[2]</style>";
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
else{
		redirecturl('../profile.php');
	// header( "Location:../profile.php" );
}

//echo $row[2];
 $qno=$_SESSION[$n];
$qry= mysql_query("select * from exam where que='".$row[2]."'");

  while($row=mysql_fetch_array($qry))
	{
  $qid=$row['qid'];
  $_SESSION['idq']=$row['qid'];
  $_SESSION['$qids'] = $qid;
 	}
if($flag==1)
//$_SESSION['cart'][] =$qid;
$_SESSION['cartno'][] =$n;
else 
$_SESSION['carset'][]=$n;
	
	//$_SESSION['questionid']=$qid;
  ?>
</td>
<td>
<?php
	
			 if(	$flag==1  )
		 {		//echo  "<span style=color:green>$ans</span>";
			 //echo  "<span style=color:green>$n</span>";
			 
			 	
			//foreach ($_SESSION['cart'] as $qid){
				echo "<table width=80%> <tr> <td width=60 align=right>&nbsp;<td> <table border=0 align=right>";
				foreach ($_SESSION['cartno'] as $n){
  						//echo " ".$qid['qid']."";
 		 			 //" ".$qid['qid']." \t";
					
					echo  "<span style=color:green><a href=test.php?echoid=$_SESSION[qn]> $n</a></span>";
				static $i=1;
				echo "<td>";
				}
		 		
				
				
				
		/* if(	$flag==1  )
		 {		//echo  "<span style=color:green>$ans</span>";
			 echo  "<span style=color:green>$n</span>";
			 }
			 else  echo  "<span>$n</span>";*/
			 
		 if($i%3==0)
		 {
			 echo "<br><tr>";
		 }
		 $i++;
		}
		echo "</table></table>";
					// echo " ".$qno['qno']."";
					//}
					
						 if(	$flag==0  )
		 {		//echo  "<span style=color:green>$ans</span>";
			 //echo  "<span style=color:green>$n</span>";
			 
			 
			//foreach ($_SESSION['cart'] as $qid){
				echo "<table width=80%> <tr> <td width=60 align=right>&nbsp;<td> <table border=0 align=right>";
				foreach ($_SESSION['carset'] as $n){
  						//echo " ".$qid['qid']."";
 		 			 //" ".$qid['qid']." \t";
					echo  "<span style=color:pink>$n</span>";
				static $i=1;
				echo "<td>";
				}
		 		
				
				
				
		/* if(	$flag==1  )
		 {		//echo  "<span style=color:green>$ans</span>";
			 echo  "<span style=color:green>$n</span>";
			 }
			 else  echo  "<span>$n</span>";*/
			 
		 if($i%3==0)
		 {
			 echo "<br><tr>";
		 }
		 $i++;
		}
		echo "</table></table>";
					// echo " ".$qno['qno']."";
					//}
					
			?>
</td>
</tr>

</table>
			
            
			
            

</body>
</html>
