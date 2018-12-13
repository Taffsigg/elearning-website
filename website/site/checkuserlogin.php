<?php
session_start();
$_SESSION['TIMER'] = time() + 600;
include "_import/connetion.php";

$user=$_POST['username'];
$pass=$_POST['password'];

//echo $user;
//echo $pass;

if(isset($_POST['login']))
{
$query="select * from user where login='".$user."' and pass='".$pass."'";
 
$res=mysql_query($query);
$res=mysql_fetch_array($res);


if($res!="")
{
	
$_SESSION['name']=$res[login];
$_SESSION['id']=$res[id];
$_SESSION['cat']=$res[category];
$_SESSION['type']=$res[subjectorplan];
if($_SESSION['cat']==free)
header('Location:freeprofile.php');

else
header('Location:profile.php');


}
else
	
header('Location:index.php');

}


?>
