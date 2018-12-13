<?php
include '../_import/connetion.php'; 
include 'menu.php';
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>

body
{
	background-image:url(images/background.png);
}

</style>
<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td></td></tr>
  <tr>
    <td><form action="uploadimage/checkupload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="462" border="2" align="center" cellpadding="2" cellspacing="2">
      
         
        <tr>
          <td width="122">&nbsp;</td>
          <td width="318">&nbsp;</td>
        </tr>
        <tr>
          <td>Name of the file :</td>
          <td><label>
            <input type="text" name="name" id="name" />
          </label></td>
        </tr>
        
        <tr>
          <td>category</td>
          <td><label>
            <input type="text" name="cat" id="cat" />
          </label></td>
        </tr>
        <tr>
          <td>Files </td>
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
    </form></td>
  </tr>
</table>
</body>
</html>