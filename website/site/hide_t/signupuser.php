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
extract($_POST);
include("_import/connetion.php");
session_start();
$rs=mysql_query("select * from user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><br><br><div class=head1>Login Id Already Exists Please Select a Different Login Id to Sign Up</div>";
	exit;
}

$catger = $_POST['cat'];
echo $catger;
if( $catger == "certification")
{
$subcat =$_POST['subcats'];
}
else if ( $catger == "other" ){

$subcat=$_POST['subcato'];
}

else if ( $catger == "free" ){

$subcat=$_POST['subcatfree'];
}
define ("DIR","uploadimage");
if(is_uploaded_file($_FILES['image']['tmp_name'])){
if($_FILES['image']['type']=="image/jpeg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/jpg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/png"){
$uploadname = $_FILES['image']['name'];
//$file=DIR."$uploadname";
move_uploaded_file($_FILES['image']['tmp_name'],$uploadname);
//echo $upload= "INSERT INTO user (image) VALUES('".$uploadname."')"; 

$query="insert into user(login,pass,username,address,city,phone,email,category,subjectorplan,image) values('$lid','$pass','$name','$address','$city','$phone','$email','$cat','$subcat','".$uploadname."')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Congrates!!! Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please make Payment  Online  to Continue</div>";
echo "<br><div class=head1><a href=payment.php>Make  Payement</a></div>";






}



}

?>




</body>
</html>

