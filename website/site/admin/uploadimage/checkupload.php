<?php
include('../connetion.php');
define ("DIR","uploadimage/");
if(is_uploaded_file($_FILES['file']['tmp_name'])){
if( ($_FILES['file']['type']=="application/msword" ) || ($_FILES['file']['type']=="application/pdf" )){
$name=$_POST['name'];
$cat=$_POST['cat'];
$uploadname = $_FILES['file']['name'];
//$file=DIR."$uploadname";
move_uploaded_file($_FILES['file']['tmp_name'],$uploadname);
echo $upload= "INSERT INTO notes(name,type,file) VALUES('".$name."','".$cat."', '".$uploadname."')"; 
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