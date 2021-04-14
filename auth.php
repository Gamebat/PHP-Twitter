<?php
    session_start();
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
    $_SESSION['login']=$login;
    $_SESSION['pass']=$pass;

    $pass = md5($pass."DanyaBD");

    $mysql = new mysqli('localhost','root','root','regist-bd');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

    $_SESSION['user'] = $result->fetch_assoc();
    $user = $_SESSION['user'];
?>

<?php   if ($user == ''):
    header ('Location: auth_false.php#zatemnenie2');
?>

<?php else:
    $_SESSION['coockie']=setcookie('user', $user['name'], time() + 3600, "/");
    $coockie=$_SESSION['coockie'];

    
    $mysql->close();
    
    header ('Location: mess.php');
    endif;
?>