<?php 
session_start();
include '../_import/connetion.php';
extract($_POST);
extract($_GET);
extract($_SESSION);
 
$id=$_SESSION['id'];
 $type=$_SESSION['type'];
echo $id;
?>

<!DOCTYPE html>
<head>
<title>Untitled Document</title>
<?php include '../include/links.php'; ?>
<link href="../_css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
   <table cellspacing="0" cellpadding="0" width="1000px" border="0" align="center">
   
   <tr>
  <td>
    <img src="../_images/logo.png" width="382" height="114"></td></tr>
<tr>
    <td>
    <table width="91%" border="0" cellspacing="0" cellpadding="0">
      <tr>
  <td width="100%" id="nav"> 
    <ul>
<li><a href="../profile.php">Profile Home</a></li>
<li><a href="../userlogin.php?<?php echo "id=",$id;?>">Update Profile</a> </li>

<li><a href="lecture.php">Lectures</a></li>
<li><a href="test.php">Online Exam</a></li>
<li><a href="../uploadprojects.php">Projects</a></li>
<li><a href="../logout.php">Logout</a></li>
<li><a href="../Downloads.php">Downloads</a></li>
</ul>
</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table width="95%" border="0" cellpadding="0" cellpadding="0">
 <?php $sql= "SELECT * FROM  video  where vcate = '$type' ";
						$result = mysql_query($sql);
						?>

			<tr>
	              <?php $i=1;
						 while($row = mysql_fetch_array($result))
						  {
				    	
						 ?>
                          <td  align="center">
     <table width="200" height="200" border="0" cellpadding="0" cellspacing="0" >
            <tr>
             <td align="center" valign="middle">
					 <p><?php echo $row['vcate'];?></p> 
                     <iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="250" height="200" src="<?php  echo $row['link']  ?>"
frameborder="0" allowFullScreen></iframe>
<p><?php echo $row['title'];?></p>

 </td>
  </tr>
     </table>
     
     
					  <?php
				if($i%4==0)
				{
				echo "</tr><tr>";
				}
				$i++;?>
	                  <?php }  ?>
                      </td> </tr> 
                  </table></td>
                </tr>
               

</table>
</body>
</html>