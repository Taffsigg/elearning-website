<?php 
session_start();
include '_import/connetion.php'; 
$id=$_GET['id'];
echo $id;
if(isset($_POST['button']))
{
echo "hello world";
$qry= mysql_query( "update  user set subjectorplan='".$_POST['subjectorplan']."', category='".$_POST['category']."', email='".$_POST['email']."', phone='".$_POST['phone']."', city='".$_POST['city']."', username='".$_POST['name']."', login='".$_POST['login']."',pass='".$_POST['passw']."',address='".$_POST['address']."' where id='".$id."'");




echo '<script>
 alert ("update sussfully...");
 </script>';
redirecturl('profile.php');
}	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Acadmic Execellence</title>
<link rel="stylesheet" href="_css/updatemenu.css" type="text/css" />
<style>
.welcome
{
	font-family:"Comic Sans MS", cursive;
	font-size:20px;
	font-weight:bolder;
	
}
</style>

<?php include 'include/links.php'; ?>
</head>

<?php 
 
 
 $qry= mysql_query("select * from user where id='".$id."'");
  while($row=mysql_fetch_array($qry))
	{
		
  
	 $loginid=$row['login'];
	 $password=$row['pass'];
		 $name=$row['username'];
		  $address=$row['address'];
		   $city=$row['city'];
		    $phone=$row['phone'];
			 $email=$row['email'];
			  $category=$row['category'];
			   $subjectorplan=$row['subjectorplan'];
					$image=$row['image'];


	}


?>

<body>
<?php 
include 'include/flyingmenu.php'; ?>
<table width="1000px" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr><td> 
    <ul id="panel">
<li><a href="profile.php">Home</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</td>
   
  <td class="welcome" colspan="0"> Welcome <?php  echo $_SESSION['name'];?></td></tr>
  <tr>
  
    <td>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
      
      <td>
    <form name="form1" method="post" action="">
  
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" align="c">
     
      <tr>
       <td rowspan="2" align="left"> <?php $sql= "SELECT * FROM  user where id='".$id."'";
						$result = mysql_query($sql);
					 while($row = mysql_fetch_array($result))
						  {
				    	
						 ?>
                          <div class="hovergallery"> <img class="magnify" border="0" src="uploadimage/<?php echo $row['image'];?>" width="180" height="200"/> <?php }  ?>
					</td>
        </tr>
        
          
       
        <td>
        <table width="80%" cellpadding="0" cellspacing="0" align="left">
        <tr>
          <td class="userloginstyle">LogIn Id</td>
          <td><label for="login"></label>
            <input type="text" name="login" id="login" value="<?php echo $loginid;?>"></td>
        </tr>
        <tr>
          <td class="userloginstyle">Password</td>
          <td><label for="password"></label>
            <input type="text" name="passw" id="password" tabindex="20" value="<?php echo $password;?>"></td>
        </tr>
        
        <tr>
          <td class="userloginstyle">User</td>
          <td><label>
            <input type="text" name="name" id="name" value="<?php echo $username;?>"/>
          </label></td>
        </tr>
        <tr>
          <td class="userloginstyle">Address</td>
          <td><label>
            <input type="text" name="address" id="address" value="<?php echo $address;?>"/>
          </label></td>
        </tr>
        <tr>
          <td class="userloginstyle">City</td>
          <td><label>
            <input type="text" name="city" id="city" value="<?php echo $city;?>"/>
          </label></td>
        </tr>
        <tr>
          <td class="userloginstyle">Contact No</td>
          <td><label>
            <input type="text" name="phone" id="phone" value="<?php echo $phone;?>"/>
          </label></td>
        </tr>
        
        <tr>
          <td class="userloginstyle">Email</td>
          <td><label>
            <input type="text" name="email" id="email" value="<?php echo $email;?>"/>
          </label></td>
        </tr>
        <tr>
          <td class="userloginstyle">Course Type</td>
          <td><label>
            <input type="text" name="category" id="category" value="<?php echo $category;?>"/>
          </label></td>
        </tr>
        <tr>
          <td class="userloginstyle">Subject</td>
          <td><label>
            <input type="text" name="subjectorplan" id="subjectorplan" value="<?php echo $subjectorplan;?>"/>
          </label></td>
        </tr>
        <tr>
          <td class="userloginstyle">Image</td>
          <td><label>
            <input type="text" name="image" id="image" value="<?php echo $image;?>"/>
          </label></td>
        </tr>
        <tr>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="left" valign="middle"><input type="submit" name="button" id="button" value="UpDate" /></td>
          </tr>
        
    </table></td>
      </tr>
    </table>
       <td width="93"></form> <td width="61"></td>
  </tr></
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
