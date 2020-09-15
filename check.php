<?php

 $login = filter_var(trim($_POST ['login'])
);
 $name = filter_var(trim($_POST ['name'])
);
 $pass = filter_var(trim($_POST ['pass'])
);

if (mb_strlen($login) < 5 || mb_strlen($login) > 90 ){
     echo "Недопустима довжина логіну";
     exit();
 } else if (mb_strlen($name) < 3 || mb_strlen($name) > 50 ){
    echo "Недопустима довжина логіну";
    exit();
 }else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 6 ){
        echo "Недопустима довжина логіну";
        exit();
 } 
$mysql = new mysqli('localhost', 'Volodia', '123456', 'register_bd');
$mysql->query("INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");

$mysql->close();

 ?>