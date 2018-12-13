<?php
// create a session 
if (!isset($_SESSION)) {
  session_start();
}

// store the current time
$now = time();

// get the time the session should have expired
$limit = $now - 60 * 20;

// check the time of the last activity
if (isset ($_SESSION['last_activity']) &&
$_SESSION['last_activity'] < $limit) {
  // if too old, clear the session array and redirect
  $_SESSION = array();
  header('Location: http://www.example.com/expired.php');
  exit;
} else {
  // otherwise, set the value to the current time
  $_SESSION['last_activity'] = $now;
}
?>