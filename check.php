<?php

 $login = filter_var(trim($_POST ['login']),
 FILTER_SANTIZE_STRING);
 $name = filter_var(trim($_POST ['name']),
 FILTER_SANTIZE_STRING);
 $pass = filter_var(trim($_POST ['pass']),
 FILTER_SANTIZE_STRING);

 if (mb_strlen($login)) < 5 || mb_strlen($login) > 90 {
     echo "Недопустима довжина логіну";
     exit();
 } else if (mb_strlen($name)) < 3 || mb_strlen($name) > 50 {
    echo "Недопустима довжина логіну";
    exit();
    else if (mb_strlen($pass)) < 2 || mb_strlen($pass) > 6 {
        echo "Недопустима довжина логіну";
        exit();

$mysql = new mysqli('localhost', 'root', '', 'register_bd');
$mysql->query("INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

$mysql->close();

?>