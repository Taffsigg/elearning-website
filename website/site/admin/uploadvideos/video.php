<?php
include '../connetion.php'; 

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/stylesheet.css" type="text/css" />
</head>
<style>

body
{
	background-image:url(../images/background.png);
}

</style>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td id="nav">
    
	
		
		<ul>
		
			<li><a href="../welcome.php">Home</a></li>
			<li><a href="../memberlist.php">Members Details</a></li>
			
            <li><a href="#">Uploads</a>
            <ul>
            <li><a href="../uploadvideos/video.php">Upload Lectures</a></li>
            <li><a href="../product.php">Uploads Notes</a></li>

            </ul></li>
			            <li><a href="../logout.php">Logout</a></li>
			<li><a href="../changepassword.php">Change Password</a></li>
           <li><a href="#">Manage Questions</a>
            <ul>
            <li><a href="../addquestion.php">Add Question</a></li>
            <li><a href="../QuestionEdit.php">Edit Question</a></li>
            </ul>
            
            </li>
            
			
		</ul>
	</td>
  </tr>
<tr><td></td></tr>
  <tr>
    <td><form action="check.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table  cellpadding="00" cellspacing="0" style="text-align:center;">
      
         
        <tr>
          <td width="122">&nbsp;</td>
          <td width="318">&nbsp;</td>
        </tr>
        <tr>
          <td>Title</td>
          <td><label>
            <input type="text" name="title" id="name" />
          </label></td>
        </tr>
        
        <tr>
          <td>category</td>
          <td><label>
            <input type="text" name="cat" id="cat" />
          </label></td>
        </tr>
        <tr>
          <td>Links </td>
          <td><label>
            <input type="text" name="link" id="cat" />
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
    </form></td>
  </tr>
</table>
</body>
</html>