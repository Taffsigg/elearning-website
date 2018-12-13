<?php 
include '_import/connetion.php';
session_start();
extract($_POST);
extract($_GET);
extract($_SESSION);
 $id=$_SESSION['id'];
 $type=$_SESSION['type'];
 
  $usr= $_SESSION['name'];
$qery= mysql_query("select * from time  where usrid='".$usr."' ");
  while($row=mysql_fetch_array($qery))
	{		
		 $stime=$row['sessiontime'];	
		 	$atime=$row['allowedtime'];
		 $rtime=$row['remainingtime'];
	
	}
	if($rtime<=0){
					session_destroy();	
						redirecturl('index.php');
			}
?>
<style>

body
{
	background-color:#CCC;
}

</style>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Acadmic Execellence</title>

<?php include 'include/links.php'; ?>

</head>

<body>
<?php include 'include/flyingmenu.php'; ?>

<table width="1026px" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="">

 <tr>
  <td>
    <img src="_images/logo.png" width="382" height="114"></td></tr>
  <tr>
    <td width="977">
    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        
<td id="nav"> 
    <ul>
<li><a href="profile.php">Profile Home</a></li>
<li><a href="userlogin.php?<?php echo "id=",$id;?>">Update Profile</a> </li>
<li><a href="exam/lecture.php">Lecture</a></li>
<li><a href="exam/test.php">Online Exam</a></li>
<li><a href="uploadprojects.php">Projects</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="Downloads.php">Downloads</a></li>

</ul>
</td>
</tr>
</table>
</td>
</tr>
<tr><td><h4 class="welcome"> <marquee behavior="alternate" > Welcome <?php  echo $_SESSION['name'];?> </marquee></h4></td></tr>
    </table><td width="174"></td>
  </tr>
  
 
   <tr>
    <td height="19"><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
     
      <tr>
        <td height="231">
  <table cellspacing="2" cellpadding="2" width="100%" border="0">
					   <?php $sql= "SELECT * FROM  notes where type = '$type'";
						$result = mysql_query($sql);
						?>
						
	            <tr>
	              <?php $i=1;
						 while($row = mysql_fetch_array($result))
						  {
				    	
						 ?>
						      
	              <td valign="top" align="left">
	<table width="180" height="200" border="0" cellpadding="0" cellspacing="0" >
                    <tr>
                      <td align="center" valign="middle">
					<p><a href="admin/uploadimage/<?php echo $row['file'];?>" target="_blank">
        <img border="0" src="admin/images/pdf.png" width="30" height="40"/></a> </p>
        <p><?php echo $row['name'];?><br/>
         <?php echo $row['type'];?><br/>
    <strong> <a href="download.php?f=<?php echo $row['file'];?>">Download File</a></strong><br>
					  </td>
                    </tr>
                  </table>
			<?php
				if($i%3==0)
				{
				echo "</tr><tr>";
				}
				$i++;?>
	                  <?php }  ?>
                       </tr> 
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="217"><table width="85%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="344"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <!-- TemplateEndEditable -->
  <tr>
    <td height="19"> 
    </td>
  </tr>
  
  
  
    <td height="19">
    <table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td> <?php include 'include/footer.php'; ?></td>
  </tr>
</table>

   
</td>
  </tr>
  <tr>
    <td height="19">
</td>
  </tr><tr>
    <td height="19">
</td>
  </tr>
</table>
</body>
</html>
