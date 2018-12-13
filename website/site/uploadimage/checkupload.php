<?php
include('../connetion.php');
define ("DIR","uploadimage");
if(is_uploaded_file($_FILES['image']['tmp_name'])){
if($_FILES['image']['type']=="image/jpeg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/jpg" ||$_FILES['image']['type']=="image/gif" ||$_FILES["image"]["type"] == "image/png"){
$name=$_POST[name];
$uploadname = $_FILES['image']['name'];
//$file=DIR."$uploadname";
move_uploaded_file($_FILES['image']['tmp_name'],$uploadname);
echo $upload= "INSERT INTO user(image) VALUES('".$uploadname."')"; 
mysql_query($upload);
?>
<script type="text/javascript">alert("Result Uploaded");window.location.href='../product.php';</script> 
<?php
}
else
?>
<script type="text/javascript">alert("Result not Uploaded");window.location.href='../product.php';</script>
<?php
}
else
?>
<script type="text/javascript">alert("Please check the file format");window.location.href='../product.php';</script>