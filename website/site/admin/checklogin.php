<?php
//session_start();

include "../_import/connetion.php";

$user=$_POST['username'];
$pass=$_POST['password'];

if(isset($_POST['login']))
{

$query="select * from admin where username='".$user."' and password='".$pass."'";
$res=mysql_query($query);
$res=mysql_fetch_array($res);
if($res!="")
{

//$_SESSION['name']=$res[name];

header('Location: welcome.php');
}
else
header('Location: index.php');

}



?>