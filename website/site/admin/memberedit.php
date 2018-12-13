<?php 

include'menu.php';
include '../_import/connetion.php'; 


$id=$_GET['id'];
echo $id;



if(isset($_POST['button']))
{
echo "hello world";
$qry= mysql_query( "update  user set subjectorplan='".$_POST['subjectorplan']."', category='".$_POST['category']."', email='".$_POST['email']."', phone='".$_POST['phone']."', city='".$_POST['city']."', username='".$_POST['name']."', login='".$_POST['login']."',pass='".$_POST['passw']."',address='".$_POST['address']."',image='".$_POST['image']."' where id='".$id."'");




echo '<script>
 alert ("update sussfully...");
 </script>';
redirecturl('memberlist.php');
}	

?>




<!DOCTYPE html>
<head>

<title>MemberEdit</title>
<style type="text/css">
.form1 table tr td {
	text-align: center;
}
</style>
</head>

<body>



 <?php 
 
 $id=$_GET['id'];
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


<table width="423" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="85%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="38%">&nbsp;</td>
          <td width="62%">&nbsp;</td>
        </tr>
        <tr>
          <td>Login Id</td>
          <td><label>
            <input type="text" name="login" id="login" value="<?php echo $loginid;?>" />
          </label></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><label>
            <input type="text" name="passw" id="password"value="<?php echo $password;?>" />
          </label></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><label>
            <input type="text" name="name" id="name" value="<?php echo $username;?>"/>
          </label></td>
        </tr>
         <tr>
          <td>Address</td>
          <td><label>
            <input type="text" name="address" id="address" value="<?php echo $address;?>"/>
          </label></td>
        </tr>
         <tr>
          <td>City</td>
          <td><label>
            <input type="text" name="city" id="city" value="<?php echo $city;?>"/>
          </label></td>
        </tr>
         <tr>
          <td>Phone  No.</td>
          <td><label>
            <input type="text" name="phone" id="phone" value="<?php echo $phone;?>"/>
          </label></td>
        </tr>
         <tr>
          <td>email</td>
          <td><label>
            <input type="text" name="email" id="email" value="<?php echo $email;?>"/>
          </label></td>
        </tr>
        
         <tr> 
			   
          <td>category</td>
          <td><label>
            <input type="text" name="category" id="category" value="<?php echo $category;?>"/>
          </label></td>
        </tr>
        
         <tr>
          <td>subjectorplan</td>
          <td><label>
            <input type="text" name="subjectorplan" id="subjectorplan" value="<?php echo $subjectorplan;?>"/>
          </label></td>
        </tr>
        <tr>
          <td>Image</td>
          <td><label>
            <input type="file" name="image" id="image" value="<?php echo $image;?>"/>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" value="UpDate" />
          </label></td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>