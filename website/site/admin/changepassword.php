<?php
include '../_import/connetion.php'; 

//$id=$_GET['id'];
//echo $id;

if(isset($_POST['button']))
{
$qry= mysql_query( "update  admin set  username='".$_POST['name']."',password='".$_POST['passw']."'");




echo '<script>
 alert ("update sussfully...");
 </script>';
redirecturl('welcome.php');
}	
else echo "no";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
.fdf {
	text-align: center;
}
.f {
	text-align: right;
}
.dsf {
	text-align: center;
}
</style>

</head>

<body>

<?php 
 
 //$id=$_GET['id'];
 $qry= mysql_query("select * from admin");
  while($row=mysql_fetch_array($qry))
	{
	$loginname=$row['username'];
	 $password=$row['password'];
		 
	}


?>


<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  
  <tr>
    <td colspan="2" class="dsf"> <?php  include "menu.php" ?></td>
  </tr>
  <tr>
    <td colspan="2" class="fdf"></td>
  </tr>
  <tr>			<form method="post">
    		<td>Login Id</td>
          <td><label>
            <input type="text" name="name" id="login" value="<?php echo $loginname;?>" />
          </label></td>
          </tr>
          <tr>
    			<td>Password</td>
          <td><label>
            <input type="text" name="passw" id="password" value="<?php echo $password;?>"/>
          </label></td>
  </tr>
  <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" value="UpDate" />
          </label></td>
          </form>
        </tr>
  
</table>
</body>
</html>