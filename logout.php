<?php
unset($_COOKIE['id']);
unset($_COOKIE['logEmail']);
setcookie('id', '', -1, '/');
setcookie('logEmail', '', -1, '/');
$home_url = 'http://' . $_SERVER['HTTP_HOST'];
header('Location: ' . $home_url);
