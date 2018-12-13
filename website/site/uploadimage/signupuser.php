<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">


</head>

<body background="_images/two.png">
<?php

include("signupsuccess.php");
include "php_sendmail_gmail.php";
extract($_POST);
include("../_import/connetion.php");

$rs=mysql_query("select * from user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	//echo "<br><br><br><br><br><div class=head1>Login Id Already Exists Please Select a Different Login Id to Sign Up</div>";
	//exit;
}
//$usrmail=$_POST['email'];

 $_SESSION[email]=$_POST['email'];
// $usrmail;
$catger = $_POST['cat'];
//echo $catger;
//echo $lid;
$catger = $_POST['cat'];
//echo $catger;
if( $catger == "certification")
{
$subcat =$_POST['subcats'];
$allow=600;
}
else if ( $catger == "other" ){

$subcat=$_POST['subcato'];
$allow=300;
}

else if ( $catger == "free" ){

$subcat=$_POST['subcatfree'];
$allow=100;
}

define ("DIR","uploadimage/");
if(is_uploaded_file($_FILES['image']['tmp_name'])){
if($_FILES['image']['type']=="image/jpeg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/jpg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/png"){
$uploadname = $_FILES['image']['name'];
//$file=DIR."$uploadname";
move_uploaded_file($_FILES['image']['tmp_name'],$uploadname);

}}
//echo $lid;
$query="insert into user(login,pass,username,address,city,phone,email,category,subjectorplan,image) values('$lid','$pass','$name','$address','$city','$phone','$email','$cat','$subcat','".$uploadname."')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

$querytime="insert into time(allowedtime,usrid,plan,remainingtime) values('$allow','$lid','$subcat','1')";
$rstime=mysql_query($querytime)or die("Could Not Perform the Query");

echo "<br><br><br><div class=head1>Congrates!!! Your Login ID  $lid Created Sucessfully</div>";
//echo "<br><div class=head1>Please make Payment  Online  to Continue</div>";
//echo "<br><div class=head1><a href=payment.php>Make  Payement</a></div>";

if( $catger == "certification" || $catger == "other")
{
	
$query="select * from user where login='".$lid."' and pass='".$pass."'";
 
$res=mysql_query($query);
$res=mysql_fetch_array($res);


if($res!="")
{
	
$_SESSION['name']=$res['login'];
$_SESSION['id']=$res['id'];
$_SESSION['cat']=$res['category'];

}
echo "<br><div class=head1><a href=../profile.php>Please Login</a></div>";
}

if( $catger == "free")
{
	
$query="select * from user where login='".$lid."' and pass='".$pass."'";
 
$res=mysql_query($query);
$res=mysql_fetch_array($res);


if($res!="")
{
	
$_SESSION['name']=$res['login'];
$_SESSION['id']=$res['id'];
$_SESSION['cat']=$res['category'];
}
echo "<br><div class=head1><a href=../freeprofile.php>Please Login</a></div>";
}

?>

</body>
</html>

