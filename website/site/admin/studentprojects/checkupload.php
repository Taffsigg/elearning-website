<?php
include('../connetion.php');
define ("DIR","uploadprojects/");
if(is_uploaded_file($_FILES['file']['tmp_name'])){
if($_FILES['file']['type']=="image/jpeg"  || $_FILES['file']['type']=="image/jpg" || $_FILES['file']['type']=="image/gif" || $_FILES['file']['type']=="image/png" || $_FILES['file']['type']=="image/bmp" || $_FILES['file']['type']=="application/pdf" || $_FILES['file']['type']=="text/plain" ||  $_FILES['file']['type']== "application/octet-stream" ||  $_FILES['file']['type']== "application/zip" || $_FILES['file']['type']=="application/msword" || $_FILES['file']['type']=="application/vnd.ms-powerpoint"){
$projectname=$_POST['name'];
$subtype=$_POST['cat'];
//$cat=$_POST['cat'];
$uploadname = $_FILES['file']['name'];
//$file=DIR."$uploadname";
move_uploaded_file($_FILES['file']['tmp_name'],$uploadname);
echo $upload= "INSERT INTO projects(projectname,subtype,stdid) VALUES('".$projectname."','".$subtype."','".$uploadname."')"; 
mysql_query($upload);
?>
<script type="text/javascript">alert("Result Uploaded");window.location.href='../../uploadprojects.php';</script> 
<?php
}
else
?>
<script type="text/javascript">alert("Result not Uploaded");window.location.href='../../uploadprojects.php';</script>
<?php
}
else
?>
<script type="text/javascript">alert("Please check the file format");window.location.href='../../uploadprojects.php';</script>