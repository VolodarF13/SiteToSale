<?php

 $login = filter_var(trim($_POST ['login'])
);
 $name = filter_var(trim($_POST ['name'])
);
 $pass = filter_var(trim($_POST ['pass'])
);

if (mb_strlen($login) < 5 || mb_strlen($login) > 90 ){
     echo "Недопустимa довжина логіну";
     exit();
 } else if (mb_strlen($name) < 3 || mb_strlen($name) > 50 ){
    echo "Недопустима довжина ім'я";
    exit();
 }else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 15 ){
        echo "Недопустима довжина Паролю";
        exit();
 } 

$mysql = new mysqli('127.0.0.1:3306', 'Volodia', '123456', 'register_bd') or die('Помилка підключення:' .mysqli_error());
$mysql ->query("INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES (NULL,'login', 'pass', 'name')");
$mysql ->close();

header('Location: /');

