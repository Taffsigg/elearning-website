<?php 


$host="localhost";
$username="atul";
$password="UDAIPUR_!@#456";
$database="websitedata";

mysql_pconnect($host,$username,$password) or die (mysql_error());
mysql_select_db($database) or die ("database is not fund");

?>
