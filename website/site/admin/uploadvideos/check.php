<?php
session_start();
include('../../_import/connetion.php');
if(isset($_POST['button']))
{ 
$query="insert into video(title,vcate,link) 
values('".$_POST['title']."','".$_POST['cat']."','".$_POST['link']."')";
$rs=mysql_query($query)or die("Could Not Perform the Query");


echo '<script>
 alert ("update sussfully...");
 </script>';
redirecturl('video.php');



}
?>