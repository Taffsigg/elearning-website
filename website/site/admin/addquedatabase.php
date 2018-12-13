<?php
include 'connetion.php'; 
include 'menu.php';
session_start();
//$id=$_GET['id'];
//echo $id;
echo 'heoo';
if(isset($_POST['submit']))
{	echo 'heoo';
		echo $_POST['trueans'];
$query="insert into exam (category,que,ans1,ans2,ans3,ans4) values('".$_POST['cate']."','".$_POST['ques']."','".$_POST['a']."','".$_POST['b']."','".$_POST['c']."','".$_POST['d']."')";
$rs=mysql_query($query)or die("Could Not Perform the Query");


function redirecturl($url)
{
echo '<script type="text/javascript">';
echo "window.location='$url';";
echo '</script>';
}


echo '<script>
 alert ("Question  added  ...");
 </script>';
redirecturl('addquestion.php');
}	

?>