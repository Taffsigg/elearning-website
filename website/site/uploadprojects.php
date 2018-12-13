<?php 

include '_import/connetion.php'; 
session_start();


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
<script src="countdown.js" type="text/javascript"></script>
</head>

<body>
<script type="text/javascript">
</script>
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
<li><a href="profile.php">Profile Home</a></li>
<li><a href="userlogin.php?<?php echo "id=",$id;?>">Update Profile</a> </li>
<li><a href="payment.php">Payment</a></li>
<li><a href="exam/lecture.php">Lecture</a></li>
<li><a href="exam/test.php">Online Exam</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="Downloads.php">Downloads</a></li>
<li><a href="uploadprojects.php">Projects</a></li>
</ul>
</td>
</tr>
</table>
</td>
</tr>
<tr><td><h4 class="welcome"> <marquee behavior="alternate" > Welcome <?php  echo $_SESSION['name'];?> </marquee></h4></td></tr>
<tr><td><p align="left"><?php  echo $_SESSION['cat'];?></p></td>
<td><p align="left"><?php  echo $_SESSION['type'];?></p></td></tr>
<tr><td><form action="admin/studentprojects/checkupload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="462" border="2" align="center" cellpadding="2" cellspacing="2">
      
      
          <td> Project Name:</td>
          <td><label>
            <input type="text" name="name" id="name" />
          </label></td>
        </tr>
        
        
        <tr>
          <td>Subject Name</td>
          <td><label>
            <input type="text" name="cat" id="cat" />
          </label></td>
        </tr>
        <tr>
          <td>Insert Project </td>
          <td><label>
            <input type="file" name="file" id="file" />
          </label></td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" value="Submit" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td></tr>
</table>
</script> 
 

</body>
</html>
