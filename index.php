<?php
// create a cookie on the browser and a empty session on the server.
session_start(); //gets session id from cookies, or prepa

if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists
  
?>

<a href="/session_login_example/login.php">Login</a>

<?php

} else {

  echo "Hi, " . $_SESSION['login'];

?>

<a href="/session_login_example/logout.php">Logout</a>

<?php 

}
// refer:https://www.codeproject.com/tips/1076176/login-logout-and-session-id-cookies-in-php-for-beg
//https://blog.csdn.net/crx05/article/details/73897224
?>

