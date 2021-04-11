<?php
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);   
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    if (mb_strlen($login)<5 || mb_strlen($login)>20){
        echo "Длина логина должна быть от 5 до 20 символов";
        exit();
    } else if (mb_strlen($name)<2 || mb_strlen($name)>30){
        echo "Недопустимая длина имени";
        exit();
    } else if (mb_strlen($pass)<6 || mb_strlen($pass)>30){
        echo "Длина пароля должна быть от 6 до 30 символов";
        exit();
    }

    $pass = md5($pass."DanyaBD");

    $mysql = new mysqli('localhost','root','root','regist-bd');
    $mysql->query("INSERT INTO `users` (`name`, `login`, `pass`) VALUES('$name', '$login', '$pass')");
    
    $mysql->close();

    header ('Location: index.php');
?>