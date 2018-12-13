
<?php


include 'connetion.php';
?>


<?php
if(isset($_POST['button']))
 {
$qry="INSERT INTO `memberreg` (

`name` ,
`address` ,
`contactno`
)
VALUES ('".$_POST['name']."','".$_POST['address']."','".$_POST['contactno']."')";
mysql_query($qry);

echo '<script>
 alert("thank for registration");
 </script>';
 	
	
	
	
	
	}



?>








<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><form name="form1" method="post" action="">
      <table width="800" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <td width="99">&nbsp;</td>
          <td width="701">&nbsp;</td>
        </tr>
        <tr>
          <td>Name</td>
          <td><label for="name"></label>
            <input type="text" name="name" id="name"></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><label for="address"></label>
            <input type="text" name="address" id="address"></td>
        </tr>
        <tr>
          <td>Contact No</td>
          <td><label for="contactno"></label>
            <input type="text" name="contactno" id="contactno"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Submit"></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>