<?php 
session_start();
include '../_import/connetion.php'; 
extract($_POST);
extract($_GET);
extract($_SESSION);
$id=$_SESSION['id'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result Of Exam</title>
<link rel="stylesheet" type="text/css" href="../_css/certificate.css"/>
</head>

<body>
<?php
			$qry= mysql_query("select * from user where id='".$id."'");
  			while($row=mysql_fetch_array($qry))
				{
		 				$name=$row['username'];
						$image=$row['image'];
						$type=$_SESSION['type'];
 						$name=$row['username'];
				}
?>


<table width="1000px" border="0px" align="center" cellpadding="0" cellspacing="0">
<tr>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
 <tr>
<td><h4>Enrolment No-<?php echo $id;?></h4></td>
<td align="center"><h2>Certificate</h2></td>
  <td align="right">
    <img src="../_images/logo.png" width="200" height="100"></td>
    </tr>
    </table>
    </tr>
  <tr>
   <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      
       
      <tr>
      <td width="17%"><?php /*echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION['trueans'];
				$w=$_SESSION['qn']-$_SESSION['trueans'];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				unset($_SESSION['qn']);
				unset($_SESSION['trueans']); 
				session_destroy();
*/?>
		 <?php $sql= "SELECT * FROM  user where id='".$id."'";
						$result = mysql_query($sql);
					 while($row = mysql_fetch_array($result))
						  {
				    	
						 ?>
  <div class="hovergallery"> <img class="magnify" border="0" src="../uploadimage/<?php echo $row['image'];?>" width="130" height="150"/> <?php }  
				?>
		

</div>
      </td>
      <td width="57%" align="justify"><h4> This is to certify that <b><?php echo $name;?><b> has successfully attended all the lectures and tests of the course <?php echo  $type ?> language and was passed with --- Marks. This certificate is awarded on   <?php echo date("Y/m/d");?></h4>
      </td>
      <td width="26%">&nbsp;</td>
      </tr>
      </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  <td><input type="button" onClick="window.print()" value="Print Result" align="left"/></td></tr>
     <tr>
       <td id="nav">&nbsp;</td> 
       <td id="nav"><ul>
<li><a href="../index.php">Home</a></li></ul></td>
     
      </tr>
</table>

</body>
</html>

<?php 
session_destroy();
?>