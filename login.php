<?php
//如果你的用户还没有一个 session cookie ，那么 PHP 将产生一个新的 ID，并设置到用户机器的 cookie 中。如果是一个已访问过的用户，那么他会将 cookie 发送给你的 web 服务器，PHP 则会解析它，并且从 session.save_path 路径下加载到相应的 session 数据。
简而言之，这就是 session_start() 的所做的工作。
session_start();

//TODO: do not hardcode, get from database
const login = 'admin';
const password = 'admin';

if (isset($_POST['login']) && isset($_POST['password'])) //when form submitted
{
  if ($_POST['login'] === login && $_POST['password'] === password)
  {
    $_SESSION['login'] = $_POST['login']; //write login to server storage
	$_SESSION['password'] = $_POST['password']; //write login to server storage
    header('Location: /'); //redirect to main
  }
  else
  {
    echo "<script>alert('Wrong login or password');</script>";
    echo "<noscript>Wrong login or password</noscript>";
  }
}

?>

<form method="post">
  Login:<br><input name="login"><br>
  Password:<br><input name="password"><br>
  <input type="submit">
</form>