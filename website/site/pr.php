<?php 
session_start();
include '_import/connetion.php'; 
extract($_POST);
extract($_GET);
extract($_SESSION);
?>

<?php

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
				mysql_query("INSERT INTO `websitedata`.`result` (`login`,`score`)  values('".$id."',$_SESSION[trueans])") or die(mysql_error());
				//echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION['qn']);
				unset($_SESSION['trueans']);
				exit;


            ?>