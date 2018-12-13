<?php 

$host="localhost";
$username="username";
$password="";
$database="websitedata";

mysql_pconnect($host,$username,$password) or die (mysql_error());
mysql_select_db($database) or die ("database is not fund");


function redirecturl($url)
{
echo '<script type="text/javascript">';
echo "window.location='$url';";
echo '</script>';
websitedata