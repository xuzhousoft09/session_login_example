<?php

session_start(); //if you don't use session_start() in here, it can't delete the session on the server.

//删除一个cookie的方法就是把这个cookie的有效期设置为当前时间以前，这也是几乎所有php程序员都会这么做。
//当我们关闭浏览器的时候,cookie会自动删除
setcookie(session_name(), "", time() - 3600); //send browser command remove sid from cookie(Theory delete the cookie)
session_destroy(); //remove sid-login(session file) from server storage
session_write_close();// release the lock
header('Location: /');

?>