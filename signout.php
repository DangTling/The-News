<?php
session_start();
// session_destroy();

unset($_SESSION['id']);
unset($_SESSION['name']);
setcookie('remember', null, -1);


header('location: index.php')
?>